
<html>
<head><link rel = "stylesheet" href = "css/other.css">
</head>
<body>
    <div class="background"></div>
<?php

$page_title = 'Login';


if (isset ($_SESSION['username'])){
	echo "You are logged! You can " . "<a href='logout.php'>" . "logout" . "</a>";
}
else{
?>

<div class="container">
    <div class="hero_heading"><h2>Login Here</h2></div>
<form action="check_login.php" method="POST">
    <div class="form-item">
                <span class="material-icons-outlined">
                    USERNAME
                    </span>
                <input type="text" name="username" placeholder="John Doe">
            </div>
    <div class="form-item">
                <span class="material-icons-outlined">                   
                 PASSWORD
                    </span>
                <input type="password" name="pass"  placeholder="********">

            </div><br>
    <button type="submit" value="Submit"> LOGIN </button>
</form>
</div> <!-- end of <div class="container-left"> -->

<?php
}

include 'includes/footer.html';




?>

</body>
</html>