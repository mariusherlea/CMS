<?php include "includes/admin-header.php"; ?>
    <?php include "function.php"; ?>

    <div id="wrapper">




        <!-- Navigation -->


        <?php include "includes/admin-nav.php"; ?>


        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">


                           <h1 class="page-header">
                            Welcome to admin
                            <small>Author</small>
                        </h1>

                        <div class="col-xs-6">


                        <?php  insert_categories(); ?>


                        <form action="" method="post">
                           <div class="form-group">
                              <label for="cat_title">Add Categories</label>
                               <input class="form-control" type="text" name="cat_title">

                           </div>
                           <div class="form-group">
                               <input class="btn btn-primary" type="submit" name="submit" value="Add Category">

                           </div>

                        </form>

                       <?php ///update and include query

                            if(isset($_GET['update'])){

                                $cat_id = $_GET['update'];

                            include "includes/edit-categ.php";


                            }
                            ?>

                        </div>

                        <div class="col-xs-6">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Categories Titles</th>
                                    </tr>
                                </thead>
                                <tbody>



                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="list-unstyled">

                                <?php

                                //find all categories query

        findAllCategories();


                                ?>
                                 <?php
                             //delete query


deleteCategories();


                                ?>



                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>


    <?php include "includes/admin-footer.php"?>
