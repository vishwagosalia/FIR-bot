<?php

namespace App\Conversations;

use App\CrimeTypes;
use App\FirModel;
use Illuminate\Foundation\Inspiring;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Conversations\Conversation;

class BasicInfoConv extends Conversation
{
    /**
     * Basic Info
     */
    public function askReason()
    {
        $question = Question::create("Select what would you like to do today? ")
            ->fallback('Unable to ask question')
            ->callbackId('ask_reason')
            ->addButtons([
                Button::create('Register FIR')->value('register'),
                Button::create('View my FIR')->value('view'),
            ]);

        return $this->ask($question, function (Answer $answer) {
            if ($answer->isInteractiveMessageReply()) {
                if ($answer->getValue() === 'register') {
//                    $joke = json_decode(file_get_contents('http://api.icndb.com/jokes/random'));
//                    $this->say($joke->value->joke);
                    $this->askBasic();

                } else {
//                    $this->say(Inspiring::quote());
                }
            }
        });
    }

    public function askBasic()
    {
        $this->ask('Enter your name', function (Answer $response) {

            $this->bot->userStorage()->save([
                'name' => $response->getValue(),
            ]);
            $this->say('Hello ' . $response->getText());
            $this->askPhone();
        });
    }

    public function askPhone()
    {
        $this->ask('Enter your phone number', function (Answer $response) {

            $this->bot->userStorage()->save([
                'phone' => $response->getValue(),
            ]);
            $this->askAddress();
            // $this->say('Your name is ' . $response->getText());
        });
    }

    public function askAddress() {
        $this->ask('Enter your address', function (Answer $response) {
            $this->bot->userStorage()->save([
                'address' => $response->getValue(),
            ]);
            $this->askRelation();
            // $this->say('Your name is ' . $response->getText());
        });
    }

    public function askRelation() {
        $this->ask('How are you related to the crime? (EyeWitness / Family Member / Happened to you)', function (Answer $response) {
            $this->bot->userStorage()->save([
                'relation' => $response->getValue(),
            ]);
            $this->askAadhar();
        });
    }

    public function askAadhar() {

        $this->ask('Enter your Aadhar Card Number (Security Purpose)', function (Answer $response) {
            $this->bot->userStorage()->save([
                'aadhar' => $response->getValue(),
            ]);
//            $this->say("Now select the type of crime that happened.");
            $this->selectTypeOfCrime();
        });
    }

    public function selectTypeOfCrime() {
        $model = CrimeTypes::all();
//        dd($model[0]->ipc);
        $buttonArray = [];
        foreach ($model as $model) {
            $button = Button::create('IPC '.$model->ipc .': '.$model->type)->value($model->type_id)->value($model->type);
            $buttonArray[] = $button;
        }
        $question = Question::create('Select the type of crime happened')
            ->callbackId('type')
            ->addButtons($buttonArray);
        $this->ask($question, function (Answer $answer) {
            if ($answer->isInteractiveMessageReply()) {
                $this->bot->userStorage()->save([
                    'type' => $answer->getValue(),
                ]);
//                dd($answer->getValue());
                $this->say("Selected Crime: ".$answer->getValue());
                $this->askComplain();
            }
            else {
                $this->say('Invalid option. Try again.');
                $this->selectTypeOfCrime();
            }
        });
//        $user = $this->bot->userStorage()->find();
//        dd($user);
    }

    public function askComplain() {
        $this->ask('Please describe what exactly happened ?', function (Answer $response) {
            $this->bot->userStorage()->save([
                'complaint' => $response->getValue(),
            ]);
//            $this->say("Thank you for your input, your request has been taken, a service personnel will contact you shortly.");
            $this->askDate();
        });
    }

    public function askDate() {
        $this->ask('Enter the date of crime in DD/MM/YYYY format', function (Answer $response) {
            $this->bot->userStorage()->save([
                'date' => $response->getValue(),
            ]);
//            $this->say("Thank you for your input, your request has been taken, a service personnel will contact you shortly.");
//            $this->selectTypeOfCrime();
        });
        $this->askTime();
    }

    public function askTime() {
        $button = Button::create("Morning")->value('Morning');
        $buttonArray[] = $button;
        $button = Button::create("Afternoon")->value('Afternoon');
        $buttonArray[] = $button;
        $button = Button::create("Evening")->value('Evening');
        $buttonArray[] = $button;
        $button = Button::create("Night")->value('Night');
        $buttonArray[] = $button;

        $question = Question::create('Select the approximate time of crime')
            ->callbackId('type')
            ->addButtons($buttonArray);
        $this->ask($question, function (Answer $answer) {
            if ($answer->isInteractiveMessageReply()) {
                $this->bot->userStorage()->save([
                    'time' => $answer->getValue(),
                ]);
//                dd($answer->getValue());
//                $this->say("Selected Crime: ".$answer->getValue());
                $this->askCity();
            }
            else {
                $this->say('Invalid option. Try again.');
                $this->askTime();
            }
        });
    }

    public function askCity() {
        $this->ask('Enter your city', function (Answer $response) {
            $this->bot->userStorage()->save([
                'city' => $response->getValue(),
            ]);
//            $this->say("Thank you for your input, your request has been taken, a service personnel will contact you shortly.");
            $this->askPincode();
        });
    }

    public function askPincode() {
        $this->ask('Enter your Pincode', function (Answer $response) {
            $this->bot->userStorage()->save([
                'pincode' => $response->getValue(),
            ]);
//            $this->say("Thank you for your input, your request has been taken, a service personnel will contact you shortly.");
            $this->saveData();
        });
    }

    public function saveData() {
        $user = $this->bot->userStorage()->find();
        // dd($user);
        $model = new FirModel;
        // dd(gettype($user->name));
        $model->name = $user["name"];
        $model->phone_no = $user["phone"];
        $model->address = $user["address"];
        $model->aadhar_no = $user["aadhar"];
        $type = new CrimeTypes;
        $type_id = $type::where('type', $user["type"])->pluck('type_id')->first();
        $model->type_id = $type_id;
        $model->complaint = $user["complaint"];
        $model->time_happened = $user["time"];
        $model->crime_happened = '2020-01-17';
        $model->city = $user["city"];
        $model->pincode = $user["pincode"];
        $token_name = str_replace(' ', '', $user["name"]);
        $token_mob = $user["phone"];
        $token = $token_name.''.$token_mob.''.time();
        $model->token = $token;

        $model->save();
        $this->say("Your unique token is: ".$token);
        $this->say("Save this token for future purpose, and your request has been taken, a service personnel will contact you shortly.");
    }

    /**
     * Start the conversation
     */
    public function run()
    {
        $this->askReason();
    }
}
