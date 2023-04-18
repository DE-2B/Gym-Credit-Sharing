<?php
$fullname = $_POST['fullname'];
$email= $_POST['email'];
$password = $_POST['password'];
$gymname = $_POST['gymname'];
$address = $_POST['address'];
$phone= $_POST['phone'];

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