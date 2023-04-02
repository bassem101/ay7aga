<?php
if (isset($_POST['submit'])){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $subject=$_POST["subject"];
    $message=$_POST["message"];

    $conn = mysqli_connect("localhost","root", "", "elgendy");

    $sql="INSERT INTO contact (first_name, email, subject, message, phonenumber)
    VALUES ('$name', '$email','$subject','$message', '$phone')";

    if ($conn->query($sql) === TRUE) {
       header('Location:index.html');
    }
    else {
        echo '<p> "Error: " . $sql . "<br>" . $conn->error </p>';
    }
}

?>