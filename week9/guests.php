<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guests</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <style>
    table {
      border-collapse: collapse;
      width: 97%;
      color: #32cd32;
    }

    th, td {
      text-align: left;
      font-size: 20px;
      padding: 15px;
    }

    th {
      background-color: #32cd32;
      color: white;
    }
    </style>    
</head>
<body>
    
<!-- header section starts  -->

<header>

    <div class="user">
        <img src="images/me pic.png" alt="">
        <h3 class="name">Vince Edward Tan</h3>
    </div>

    <nav class="navbar">
        <ul>
            <li><a href="index.php">Home</a></li>        
            <button class="btn" onclick="light()"><i class="fas fa-sun"></i></button>
            <script>function light() {document.documentElement.style.setProperty('--white', '#080808'); document.documentElement.style.setProperty('--black', '#f0fff0');}</script>
            <button class="btn" onclick="dark()"><i class="fas fa-moon"></i></button>
            <script>function dark() {document.documentElement.style.setProperty('--white', '#f0fff0'); document.documentElement.style.setProperty('--black', '#080808');}</script>                          
        </ul>
    </nav>

</header>
<!-- header section ends -->

<!-- about section starts  -->

<section class="about" id="about">

<h1 class="heading"> <span>Guests</span></h1>

<div class="row">

    <div class="info">
        <?php
        // database details
        $host = "localhost";
        $username = "root";
        $password = "";
        $dbname = "myDB";

        $conn = mysqli_connect($host, $username, $password, $dbname);

        if (!$conn)
          {
          die('Could not connect: ' . mysql_error());
          }

        $result = mysqli_query($conn,"SELECT * FROM myguests");

        echo "<table>
        <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Project</th>
        <th>Message</th>
        </tr>";

        while($row = mysqli_fetch_array($result))
          {
          echo "<tr>";
          echo "<td>" . $row['name'] . "</td>";
          echo "<td>" . $row['email'] . "</td>";
          echo "<td>" . $row['project'] . "</td>";
          echo "<td>" . $row['message'] . "</td>";
          echo "</tr>";
          }
        echo "</table>";
        mysqli_close($conn);

        ?>
    </div>
</div>

</section>

<!-- about section ends -->
</body>
</html>