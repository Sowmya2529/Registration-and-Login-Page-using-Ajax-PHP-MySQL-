<?php
session_start();
if(isset($_POST['do_login']))
{
 $host="localhost";
 $username="root";
 $password="1234";
 $databasename="userdata";
 $connect=mysql_connect($host,$username,$password);
 $db=mysql_select_db($databasename);

 $email=$_POST['email'];
 $pass=$_POST['password'];
 $select_data=mysql_query("select * from userdetails where email='$email' and password='$pass'");
 if($row=mysql_fetch_array($select_data))
 {
  $_SESSION['email']=$row['email'];
  $_SESSION['success'] = "You are now logged in";
  header('location: index.php');
 echo 'Success';
 }
 else
 {
  echo "fail";
 }
 exit();
}
?>