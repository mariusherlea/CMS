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

                <div class="col-lg-12">


                        <?php
                    if(isset ($_GET['source'])){

                        $source = $_GET['source'];

                    } else {
                        $source = ' ';
                    }

                    switch ($source){

                            case 'add_post';
                            include "includes/add_post.php";
                            break;

                            case '100';
                            echo "100";
                            break;

                            case '200';
                            echo "200";
                            break;

                        default:

                            include "includes/view_all_posts.php";

                            break;
                    }


                    ?>


                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>


    <?php include "includes/admin-footer.php"?>
