<?php

if(isset($_GET['p_id'])){

   $the_post_id = $_GET['p_id'];
}

 global $connection;
                $query = "SELECT * FROM posts";
                $select_posts_by_id = mysqli_query($connection, $query);

            while($row = mysqli_fetch_assoc($select_posts_by_id)){

                $post_id= $row['post_id'];
                $post_author = $row['post_author'];
                $post_title= $row['post_title'];
                $post_category_id= $row['post_category_id'];
                $post_status= $row['post_status'];
                $post_image = $row['post_image'];
                $post_tags = $row['post_tags'];
                $post_comment_count=$row['post_comment_count'];
                $post_date = $row['post_date'];
                $post_content = $row['post_content'];

            }

?>




<form action="" method="post" enctype="multipart/form-data">


      <div class="form-group">
         <label for="title">Post Title</label>
          <input type="text" value="<?php echo $post_title; ?>" class="form-control" name="title">
      </div>


         <div class="form-group">
         <label for="post_category">Post Category Id</label>
          <input type="text" value="<?php echo $post_category_id; ?>"  class="form-control" name="post_category_id">
      </div>

          <div class="form-group">
         <label for="title">Post Author</label>
          <input type="text" value="<?php echo $post_author; ?>" class="form-control" name="author">
      </div>

         <div class="form-group">
         <select name="post_category" id="post_category">
             <?php


                    $cat_id=$_GET['update'];
                    $query = "SELECT * FROM categories";
                    $select_categories = mysqli_query($connection, $query);


             comfirmQuery($select_categories);


                    while($row = mysqli_fetch_assoc($select_categories)){

                    $cat_id= $row['cat_id'];
                    $cat_title = $row['cat_title'];

                        echo "<option value='{$cat_id}'>$cat_title</option>";
                    }

             ?>


         </select>
      </div>


    <div class="form-group">
         <img  width="100" src="../images/<?php echo $post_image; ?>" alt="">
      </div>

       <div class="form-group">
         <label for="post_tags">Post Tags</label>
          <input type="text" value="<?php echo $post_tags; ?>" class="form-control" name="post_tags">
      </div>



      <div class="form-group">
         <label for="post_content">Post Content</label>
         <textarea class="form-control"  name="post_content" id="" cols="30" rows="10"> <?php echo $post_content; ?>
         </textarea>
      </div>




       <div class="form-group">
          <input class="btn btn-primary" type="submit" name="create_post" value="Publish Post">
      </div>


</form>
