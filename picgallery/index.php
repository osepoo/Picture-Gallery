<html>
<head><link rel = "stylesheet" href = "css/other.css">
	<head><link rel = "stylesheet" href = "css/styles.css">
	<nav></nav>
</head>
<body>
    <div class="background0"></div>
<nav class="navbar">
  <div class="navbar__container">
  <a href="#home" id="navbar__logo">PIC CHOOSER
  </a>
<div class="navbar__toggle" id="mobile-menu">
    <span class="bar"></span>
    <span class="bar"></span>
    <span class="bar"></span>
</div>
<ul class="navbar__menu">
    <li class="navbar__item">
      <a href="index.php" class="navbar__links" id="home-page">Home</a>  
      </li> 
      <li class="navbar__btn">
      <a href="registration.php" class="button" id="sign-up">Register</a>  
      </li>
      <li class="navbar__btn">
      <a href="login.php" class="button"  id="log-in">Log in</a>   
      </li>
</ul>
 </div>
</nav>
<div class="container">
	<span>
<?php
$page_title = "Home";
if (isset ($_SESSION ['username'])){
	echo "Logged in with name '" . $_SESSION['username'] . "'. You can <a href='logout.php'>logout</a>";
}
else{
	echo "" . "<a href='login.php'>login</a>";
}
?>
</span>
</div>
<div align ="center" id="home">
    <h1 class="hero__heading"> <span>THIS IS PIC CHOOSER
    <br>We allow you to follow your dreams while looking at pictures</span></h1>
</div>
</div>
</body>
</html>