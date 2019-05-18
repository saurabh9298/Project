<?php
$firstname=filter_input(INPUT_POST, 'firstname');
$lastname=filter_input(INPUT_POST, 'lastname');
$emailid=filter_input(INPUT_POST, 'emailid');
$username=filter_input(INPUT_POST, 'username');
$password=filter_input(INPUT_POST, 'password');


        $host="localhost";
        $dbusername="root";
        $dbpassword="";
        $dbname="client_info";

        $conn=new mysqli($host, $dbusername, $dbpassword, $dbname);
        $sql="INSERT INTO data(firstname, lastname, emailid, username, password) values('$firstname', '$lastname', '$emailid', '$username', '$password')";

        if($conn->query($sql)){
            echo("data inserted successfully");
        }
        else{
            echo("error happened");
        }
?>