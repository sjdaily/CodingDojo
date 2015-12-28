<?php session_start(); 

if(isset($_POST['action']) && $_POST['action'] == 'reset')
{
    unset($_SESSION['errors']);
    $_SESSION['errors'] = array();
    unset($_SESSION['success']);
    $_SESSION['success'] = array();
    header('Location:login.php');
    exit();
} 
if(isset($_POST['action']) && $_POST['action'] == 'register')
{
     $_SESSION['errors'] = array();
     $_SESSION['success'] = array();
     //empty array to collect errors
     if(empty($_POST['first_name']))
     {
         $_SESSION['errors'][] = "first name cannot be blank";
     }
     if(empty($_POST['last_name']))
     {
         $_SESSION['errors'][] = "last name cannot be blank";
     }
     if(empty($_POST['email']))
     {
         $_SESSION['errors'][] = "email cannot be blank";
     } 
     if(empty($_POST['password']))
     {
         $_SESSION['errors'][] = "password cannot be blank";
     } 
       if(empty($_POST['confirm_password']))
     {
         $_SESSION['errors'][] = "please confirm your password";
     } 
       if(empty($_POST['birth_date']))
     {
         $_SESSION['errors'][] = "Please enter your date of birth";
     } 
     //  above if statements all check for blank form fields

     // following if statements check for appropriately submitted info
     // This checks if email is in valid format
     if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
     {
     	$_SESSION['errors'][]= "please enter a valid email address";
     }
     //  making sure there aren't numbers in name fields
     if(is_numeric($_POST['first_name']))
     {
     	$_SESSION['errors'][] = "First name cannot contain numbers";
     }
     if(is_numeric($_POST['last_name']))
     {
     	$_SESSION['errors'][] = "Last name cannot contain numbers";
     }
     //  checks password length 
     if(strlen($_POST['password']) > 6)
     {
     	$_SESSION['errors'][] = "password is too long";
     }
     //  make sure password fields match
     if($_POST['password'] != $_POST['confirm_password'])
     {
     	$_SESSION['errors'][] = "passwords do not match";
     }
    // 	//need to explode date string, break down into m, d, y -> then check ??
if(empty($_SESSION['errors']))
{
    $_SESSION['success'][] = "Thank you for your responses, you are now registered" . '<br>';
    header('Location:login.php');
    exit();
}

header('Location:login.php');
exit();
}

if(isset($_POST['action']) && $_POST['action'] == 'upload')
{     //  Check if file has been submitted
 	if (isset($_POST["send_file"]))
 	{
        $target_dir = "uploads/";
        // echo "this is the target directory/folder: " . $target_dir . '<br>';
        //  sets target folder to uploads
        $target_file = $target_dir . basename($_FILES["userfile"]["name"]);
        // echo "this is the target file: " . $target_file . '<br>';
        //  sets target file name as whatever user has file name as
        $uploadOk = 1;
        //  tells computer it is allowed to accept uploads 
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        //  There are more image types, I just included this as a basic check for example 
        $file_size = $_FILES["userfile"]["size"];
        if ($file_size > 500000) 
        {
            $_SESSION['errors'][] = "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // 109 is trying to avoid duplicate uploads but it doesn't seem to be working
        if (file_exists($target_file)) 
        {
            $_SESSION['errors'][] = "Sorry, image file already exists.";
            $uploadOk = 0;
        }
    
        //  make array so you can iterate through and echo on login page
        $_SESSION['success'][] = "Your picture " . $target_file . " was successfully uploaded" . '<br>';
        header('Location:login.php');
        exit();
    }
}
header('Location:login.php');
exit();
?>



