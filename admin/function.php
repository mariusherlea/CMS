<?php



    function insert_categories(){

        global $connection;

                            if(isset($_POST['submit'])){

                                $cat_title = $_POST['cat_title'];

                                if ($cat_title == "" || empty($cat_title)){

                                    echo "This field shoul not be empty";

                                } else {

                                    $query = "INSERT INTO categories(cat_title)";
                                    $query .= "VALUE ('{$cat_title}')";
                                    $create_categories_query = mysqli_query($connection, $query);

                                    if (!$create_categories_query){
                                        die('query failed'.mysqli_error($connection));
                                    }
                                }

                            }}


    ?>
