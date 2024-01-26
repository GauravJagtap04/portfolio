<?php
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['msg'];

        $host = "localhost";
        $username = "formdb_user";
        $password = "test@123";
        $dbname = "contact_page";

        $conn = mysqli_connect($host, $username, $password, $dbname);
        if(!$con){
            die("Connection failed!" . mysqli_connect_error());
        }
        $sql = "INSERT INTO contactform_entries (name_fld, email_fld, msg_fld) VALUES ('0', '$name', '$email', '$message')";
        $rs = mysqli_query($con, $sql);
        if($rs){
            echo "Message has been sent successfully!";
        }
        else{
            echo "Error, Message didn't send! Something's Wrong.";
        }
        mysqli_close($con);
    }
?>