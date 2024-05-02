<?php
$UserName = $_POST['email'];
$Password = $_POST['password'];

$conn = new mysqli('localhost','root','db_hms');
if ($conn->connect_error) {
    die('Invalid Email : '. $conn->connect_error);
}else{
  $stmt = $conn->prepare('SELECT * FROM login WHERE UserName = ?');
  $stmt->bind_param('s', $UserName);
  $stmt->execute();
  $stmt_result = $stmt->get_result();
  if ($stmt_result->num_rows > 0) {
    $data = $stmt_result->fetch_assoc();
    if ($data['password'] === $Password){
        echo'<h3>LogIn Successfully</h3>';
    }else{
        echo'<h3>Invalid Email or Password</h3>';
    }
    }else{
        echo'<h3>Invalid Email or Password</h3>';
    }
}
?>
