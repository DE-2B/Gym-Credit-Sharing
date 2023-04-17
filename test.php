<?php
$fullname = $_post['fullname'];
$email= $_post['email'];
$password = $_post['password'];
$gymname = $_post['gymname'];
$address = $_post['address'];
$phone= $_post['phone'];

$conn = new mysqli('localhost','root','','test');
if($conn->connect_error){
    die('connection failed : '.$conn->connect_error);

}
else{
    $stmt = $conn->prepare("insert into registrastion (fullname,email,password,gymname,address,phone)
    values(?,?,?,?,?,?)");
    $stmt->bind_param("sssssi",$fullname,$email,$password,$gymname,$address,$phone);
    $stmt->execute();
    echo "registration successfully....";
    $stmt->close();
    $conn->close();
}
?>