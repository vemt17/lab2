<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resources</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

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

<h1 class="heading"> <span>Resources</span></h1>

<div class="row">

    <div class="info">
        <h3> <span> HTML : </span> <a href="https://www.w3schools.com/html/default.asp">https://www.w3schools.com/html/default.asp</a> </h3>
        <h3> <span> CSS : </span> <a href="https://www.w3schools.com/css/default.asp">https://www.w3schools.com/css/default.asp</a> </h3>
        <h3> <span> Javascript : </span> <a href="https://www.w3schools.com/js/default.asp">https://www.w3schools.com/js/default.asp</a> </h3>
        <h3> <span> PHP : </span> <a href="https://www.w3schools.com/php/default.asp">https://www.w3schools.com/php/default.asp</a> </h3>
        <h3> <span> SQL : </span> <a href="https://www.w3schools.com/sql/default.asp">https://www.w3schools.com/sql/default.asp</a> </h3>
        <h3> <span> Website : </span> <a href="https://www.youtube.com/watch?v=QDbjsABOnAU">https://www.youtube.com/watch?v=QDbjsABOnAU</a> </h3>
    </div>
</div>

</section>

<!-- about section ends -->
</body>
</html>