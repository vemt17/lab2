<?php
    // getting all values from the HTML form
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $project = $_POST['project'];
        $message = $_POST['message'];
    }

    // database details
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myDB";

    // creating a connection
    $conn = mysqli_connect($host, $username, $password, $dbname);

    // to ensure that the connection is made
    if (!$conn)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

    // using sql to create a data entry query
    $sql = "INSERT INTO myguests (id, name, email, project, message) VALUES ('0', '$name', '$email', '$project', '$message')";
  
    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($conn, $sql);
    if($rs)
    {
        echo '<script>alert("Form Submitted!")</script>';
    }
  
    // close connection
    mysqli_close($conn);

?>