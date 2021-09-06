<?php
    $name= $_POST['name'];
    $email   = $_POST['email'];
    $mobile  = $_POST['mobile']; 
    $message = $_POST['message'];
    $subject=$_POST['subject'];
    $conn= new mysqli('localhost','root','','test');
if($conn->connect_error){
    die('connection failed:' . $conn->connect_error);

}else{
    $stmt=$conn->prepare("insert into contact(name,email,mobile,message,subject )  values
    (?,?,?,?,?)");
    $stmt->bind_param("ssiss",$name,$email,$mobile,$message,$subject);
    $stmt->execute();
    $stmt->close();
    $conn->close();
    include 'contact1.html';
    
    }

?> 