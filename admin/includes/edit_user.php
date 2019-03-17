<?php


if(isset($_GET['edit_user'])){

   echo $the_user_id = $_GET['edit_user'];
}


if(isset($_POST['edit_user'])){


        $user_firstname       = $_POST['user_firstname'];
        $user_lastname  = $_POST['user_lastname'];
        $user_role      = $_POST['user_role'];
        $username         = $_POST['username'];
        $user_email      = $_POST['user_email'];
        $user_password      = $_POST['user_password'];


 $query = "INSERT INTO users(user_firstname, user_lastname, user_role, username, user_email, user_password) ";

      $query .= "VALUES('{$user_firstname}','{$user_lastname}','{$user_role}','{$username}','{$user_email}','{$user_password}') ";

      $create_post_query = mysqli_query($connection, $query);

      comfirmQuery($create_post_query);


}
?>

    <form action="" method="post" enctype="multipart/form-data">

 <div class="form-group">
         <label for="title">Firstname</label>
          <input type="text" class="form-control" name="user_firstname">
      </div>

         <div class="form-group">
         <label for="title">Lastname</label>
          <input type="text" class="form-control" name="user_lastname">
      </div>



        <div class="form-group">
         <select name="user_role" id="">
           <option value="subscriber">Select Options</option>
            <option value="admin">Admin</option>
            <option value="subscriber">Subscriber</option>

         </select>
      </div>







       <div  class="form-group">
         <label for="post_tags">Username</label>
          <input type="text" class="form-control" name="username">
      </div>

 <div class="form-group">
         <label for="post_tags">Email</label>
          <input type="email" class="form-control" name="user_email">
      </div>

 <div class="form-group">
         <label for="post_tags">Password</label>
          <input type="password" class="form-control" name="user_password">
      </div>



       <div class="form-group">
          <input class="btn btn-primary" type="submit" name="edit_user" value="Add User">
      </div>


</form>
