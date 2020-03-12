@extends('layouts.admin')
@section('title')
    Admin
@endsection

@section('content')

    <div id="content-wrapper">

        <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">User</a>
                </li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>

            <div class="row">
                <div class="col-md-12">
                    enctype is for sending files in bytes part by part and at receiveing side there
                    <form action="" method="post" role="form" enctype="multipart/form-data">
                        <legend>Edit Users</legend>
                        <hr>
                        <div class="form-group">
                            <label for="post_title">Post Title</label>
                            <input type="text" class="form-control" name="post_title" id="post_title" value="<?php echo $post_title; ?>">
                        </div>

                        <div class="form-group">
                            <label for="post_cat_id">Post Category</label>
<!--                            <?php
//                            include_once ("../includes/functions.php");
//                            $categories = getAllCategories();
//                            $categories_count = count($categories);
//                            $i=0;
//                            ?>-->
                            <select name="post_cat_id" id="post_cat_id" class="form-control">
                            <!--<?php
//                                while ($i<$categories_count){
//                                    $cat_id = $categories[$i]['cat_id'];
//                                    $cat_title = $categories[$i]['cat_title'];
//
//                                    $option_equal = "<option value='$cat_id' selected>$cat_title</option>";
//                                    $option_normal = "<option value='$cat_id'>$cat_title</option>";
//                                    if ($cat_id == $post_cat_id){
//                                        echo $option_equal;
//                                    }else{
//                                        echo $option_normal;
//                                    }
//                                    $i++;
//                                }
                                ?>-->
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="post_author">Post Author</label>
                            <input type="text" class="form-control" name="post_author" id="post_author" value="<?php echo $post_author; ?>">
                        </div>

                        <div class="form-group">
                            <label for="post_status"Post Status></label>
                            <select name="post_status" id="post_status">
                                <option value="draft" <?php echo $post_status=="draft"?"selected":"";?>>Draft</option>
                                <option value="published" <?php echo $post_status=="published"?"selected":"";?>>Published</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="post_image">Post Image</label>
                            <input type="hidden" value="<?php echo $post_image;?>" name="old_image" id="old_image">
                            <input type="file" class="form-control" name="post_image" id="post_image">
                        </div>

                        <div class="form-group">
                            <label for="post_tags">Post Tags</label>
                            <input type="text" class="form-control" name="post_tags" id="post_tags" value="<?php echo $post_tags; ?>">
                        </div>

                        <div class="form-group">
                            <label for="post_content">Post Content</label>
                            <textarea name="post_content" id="post_content" cols="30" rows="10" class="form-control"><?php echo $post_content;?></textarea>
                        </div>

                        <button type="submit" class="btn btn-outline-warning" name="edit_post" id="edit-post">Edit Post</button>
                    </form>
                </div>
            </div>
            {{--end of row--}}

        </div>

        @include('admin.components.footer')
    </div>
    <!-- /.content-wrapper -->
@endsection