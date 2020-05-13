<?php
session_start();

// initializing variables
$fname = "";
$lname = "";
$username = "";
$pass   = "";
$passagain="";
$mail = "";
$phone = "";
$service="";
$errors=array();

$db = mysqli_connect("localhost", "root","", "sample");
// if ($db) {
//   echo "Connection Successful";
//   }
// else{
//   echo "No Connection";
// }

  //register
if (isset($_POST['reg_user'])){ 
    // receive all input values from the form
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $username = $_POST['username'];
    $pass = $_POST['pass'];
    $passagain = $_POST['passagain'];
    $mail = $_POST['mail'];
    $phone = $_POST['phone'];
    $service = $_POST['service'];
    $flag='1';
    // $service= $_POST['service'];
    // echo $service;
    if ($pass != $passagain){
        array_push($errors,"Passwords Doesn't Match.");

    }
    
    $user_check_query = "SELECT * FROM clint WHERE username='$username'";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    if ($user) { // if user exists
        if ($user['username'] == $username) {
          $flag='0';
          echo "<h1> Username Exists</h1><h1> Please Go Back</h1>";
        }
      }
    $user_check_query = "SELECT * FROM clint WHERE mail='$mail'";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    if ($user) {

      if ($user['mail'] == $mail) {
          $flag='0';
          echo "<h1> Email Id Exists</h1><h1> Please Go Back</h1>";
        }
      }

      $user_check_query = "SELECT * FROM clint WHERE phone='$phone'";
      $result = mysqli_query($db, $user_check_query);
      $user = mysqli_fetch_assoc($result);
        if ($user) {  
        if ($user['phone'] == $phone) {
          $flag='0';
          echo "<h1> Phone Number Exists</h1><h1> Please Go Back</h1>";
        }
      }

    if ($flag=='1') {  
        $password = md5($pass);//encrypt the password before saving in the database
  
        $query1 = "INSERT INTO clint (fname, lname, username, pass, mail, phone) 
                  VALUES('$fname', '$lname', '$username', '$password', '$mail',$phone)";
        $query2 = "INSERT INTO services (username,ser)
        VALUES('$username', '$service')";
        echo "index page";
        mysqli_query($db, $query1);
        mysqli_query($db, $query2);
        
        

        header('location: displaypg.php');
        // session_abort();
    }
}
if(isset($_POST['LOGOUT'])){
  echo "logout";
  session_destroy();
  // echo "logged out";
  $_SESSION['username']=$username;
  $_SESSION['pass']=$pass;
  header('location: index.php');
}
//login

if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $pass = $_POST['pass'];
  $service = $_POST['service'];
  // echo $pass;
  if($username=="admin" && $pass=="admin123"){
    echo "admin login";

    $_SESSION['username'] = "admin";
    $_SESSION['pass']="admin123";
    // $_SESSION['success'] = "You are now logged in";
    header('location: admin.php');
  }

  if (count($errors) == 0) {
      $password = md5($pass);
      $query = "SELECT * FROM clint WHERE username='$username' AND pass='$password'";
      $results = mysqli_query($db, $query);
      if (mysqli_num_rows($results) == 1) {
       
        $query2 = "INSERT INTO services (username,ser)
      VALUES('$username', '$service')";
        
        
        mysqli_query($db, $query2);

        header('location: displaypg.php');
        
      }
      
      else {
          // session_destroy();
          echo "<h1> Invalid Username/Password</h1><h1> Please Go Back</h1>";
          
          // echo'<a href="query.php"><button type="submit"  class="btn btn-info btn-sm" >RETRY</button></a>';
      }
  }
}

  ?>
  