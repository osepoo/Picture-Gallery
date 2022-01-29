<html>
<head><link rel = "stylesheet" href = "css/other.css">
</head>
<body>
    <div class="background2"></div>
<?php

$page_title = "Registration";

if (isset ($_SESSION['username'])){
	echo "Logged in with name '" . $_SESSION['username'] . "'. You can <a href='logout.php'>logout</a>";
}
else{

?>
<div class="container">
    <div class="hero_heading"><h2>Register Here</h2></div>
<form action="check_registration.php" method="POST">
    <div class="form-item">
                <span class="material-icons-outlined">
                   Registration username
                    </span>
                <input type="text" name="username" placeholder="John Doe">
            </div>
    <div class="form-item">
                <span class="material-icons-outlined">                   
                 Registration password
                    </span>
                <input type="password" name="pass"  placeholder="********">

            </div><br>
    <button type="submit" value="Submit"> REGISTER </button>
</form>
</div>

<?php

include 'includes/footer.html';

}


?>
</body>
</html>