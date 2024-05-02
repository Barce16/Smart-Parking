<?php



$registration = array(
    'Gmail' => "'" . $_POST['inp_Gmail'] . "'",
    'Full_Name' => "'" . $_POST['inp_Full_Name'] . "'",
    'Birthday' => "'" . $_POST['inp_Birthday'] . "'",
    'Gender' => "'" . $_POST['inp_Gender'] . "'",
    'Age' => "'" . $_POST['inp_Age'] . "'",
    'Password' => "'" . $_POST['inp_Password'] . "'",
   

);
save($registration);
function save($data)
{

    include('../config/db_conn.php');

    $attributes = implode(", ", array_keys($data));
    $values = implode(", ", array_values($data));
    $query = "INSERT INTO users ($attributes) VALUES ($values)";


     if ($conn->query($query) === TRUE) {
        header("location: /combined/profile.php?success");
    } else {
        header("location: /combined/signup.php?invalid");
     }

    $conn->close(); 

}
