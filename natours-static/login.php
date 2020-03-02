<?php
include_once 'resource/session.php';
include_once 'resource/Database.php';
include_once 'resource/utilities.php';

if(isset($_POST['loginBtn'])){
    //array to hold errors
    $form_errors = array();

//validate
    $required_fields = array('username', 'password');
    $form_errors = array_merge($form_errors, check_empty_fields($required_fields));

    if(empty($form_errors)){

        //collect form data
        $user = $_POST['username'];
        $password = $_POST['password'];

        //check if user exist in the database
        $sqlQuery = "SELECT * FROM users WHERE username = :username";
        $statement = $db->prepare($sqlQuery);
        $statement->execute(array(':username' => $user));

       while($row = $statement->fetch()){
           $id = $row['id'];
           $hashed_password = $row['password'];
           $username = $row['username'];

           if(password_verify($password, $hashed_password)){
               $_SESSION['id'] = $id;
               $_SESSION['username'] = $username;
               header("location: index.php");
           }else{
               $result = flashMessage("Invalid username or password");
           }
       }

    }else{
        if(count($form_errors) == 1){
            $result = flashMessage("There was one error in the form");
        }else{
            $result = flashMessage("There were ".count($form_errors). "error in the form");
        }
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login to Natour</title>
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>

    <body>
    <div class="signUpcontainer">
        <video autoplay muted loop class="myVideo">
            <source src="img/video.mp4" type="video/mp4">
        </video>
        <div class="overlay"></div>
        <div class="formLogin">
        <img src="img/logo-green-1x.png">
        <div class="signUPform">
            <div class="u-center-text u-margin-bottom-medium">
            <h2 class="heading-secondary">
            Exciting tours for adventurous people
            </h2>
            </div>
            <?php if(isset($result)) echo $result; ?>
<?php if(!empty($form_errors)) echo show_errors($form_errors); ?>
            <form action="" method="post">
                <input type="text" class="formElement" value="" placeholder="Your Username" name="username" required><br>
                <input type="password" class="formElement" value=""  placeholder="Create Password" name="password" required><br>
                <input type="submit" class=" btn btn--green signBtn" name="loginBtn" value="Log In"> <br>
                <h4>New to Natour ?</h4>
                <a href="signup.php" class="loginLink">Sign Up</a>
            </form>
        </div>
        </div>
        </div>
    </body>
</html>