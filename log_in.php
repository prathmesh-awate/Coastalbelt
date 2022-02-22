<?php
include "include/boilerplate.php";
include "include/db.php";
if(isset($_POST['submit'])){
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $email = $_POST['email'];
      $number = $_POST['number'];
      $password = $_POST['password'];
      $cpassword = $_POST['cpassword'];
      $select_query = "select email from cus_register where email='$email'"; 
      $run_select_query = mysqli_query($conn , $select_query);
      
      if($password != $cpassword){
        echo "password not match";
      }
      elseif (!preg_match("/^[0-9]+$/i", $number)) {
        $errorMSG = 'Invalid Number!';
    }
      elseif(mysqli_num_rows($run_select_query) > 0){
        $eae = " email is already";
      }
      else{
        $insert_query = "insert into cus_register(fname,lname,email,phone,password) values('$fname' , '$lname' , '$email' , '$number' , '$password')";
        $run_insert_query = mysqli_query($conn , $insert_query);
        if($run_insert_query){
            session_start();
            $_SESSION['email'];
            header("location:home.php");
          }
        }
      }
?>