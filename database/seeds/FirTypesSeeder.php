<?php

use Illuminate\Database\Seeder;

class FirTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('crime_types')->insert([
            'type' => 'Chain Snatching',
            'detail' => 'Chain Snatching',
            'IPC' => '392',
        ]);

        DB::table('crime_types')->insert([
            'type' => 'Eve Teasing',
            'detail' => 'Misbehaving with woman using inappropriate speech or behaviour',
            'IPC' => '354',
        ]);

        DB::table('crime_types')->insert([
            'type' => 'Theft',
            'detail' => 'Robbing a person',
            'IPC' => '379',
        ]);

        DB::table('crime_types')->insert([
            'type' => 'Homicide',
            'detail' => 'Murdering someone',
            'IPC' => '302',
        ]);

        DB::table('crime_types')->insert([
            'type' => 'Attempt to Murder',
            'detail' => 'Half murder',
            'IPC' => '307',
        ]);

        DB::table('crime_types')->insert([
            'type' => 'Fighting',
            'detail' => 'Voluntarily causing hurt',
            'IPC' => '323',
        ]);

        DB::table('crime_types')->insert([
            'type' => 'Abuse',
            'detail' => 'Insulting someone to cause provocation',
            'IPC' => '504',
        ]);

        DB::table('crime_types')->insert([
            'type' => 'Criminal Intimidation',
            'detail' => 'Planning on attempting a crime',
            'IPC' => '506',
        ]);

        DB::table('crime_types')->insert([
            'type' => 'Hurting Individual',
            'detail' => 'Hurting individual by using harmful weapon',
            'IPC' => '324',
        ]);

        DB::table('crime_types')->insert([
            'type' => 'Acid Attack',
            'detail' => 'Acid Attack',
            'IPC' => '326 A',
        ]);

        DB::table('crime_types')->insert([
            'type' => 'Kidnapping',
            'detail' => 'Kidnapping',
            'IPC' => '363',
        ]);

        DB::table('crime_types')->insert([
            'type' => 'Child Abuse',
            'detail' => 'Covered under Prevention of children from sexual offences',
            'IPC' => 'POCSO',
        ]);

        DB::table('crime_types')->insert([
            'type' => 'Grievous Hurt',
            'detail' => 'Causing Severe injury to someone',
            'IPC' => '320',
        ]);

        DB::table('crime_types')->insert([
            'type' => 'Fraud',
            'detail' => 'Fraud',
            'IPC' => '420',
        ]);

        DB::table('crime_types')->insert([
            'type' => 'Missing person',
            'detail' => 'Report a missing person',
            'IPC' => '155 CRPC (Code of Criminal Procedure)',
        ]);
    }
}
