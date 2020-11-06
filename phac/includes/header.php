<link rel="stylesheet" type="text/css" href="css/header.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/styles.css">

<?php 
require_once("classes/User.php");
include("includes/upload.php"); 
?>

<header class="header">
	

	<div class="header-options">
		<a href="/PHAC/home.php">Home</a>
		<div class=option-spacer></div>
		<a href="/PHAC/devinfo.php">Developers</a>
		<div class=option-spacer></div>
		<a href="/PHAC/feedback.php">Feedback</a>
	</div>


	<div class="header-search">
		<input type="text" class="header-search-input" placeholder="Search for anything">
		<i class="fas fa-search"></i>
	</div>

	<button class="open-upload-header" type="button" id="open-upload-header">POST</button>

	<a href="profile.php?u=<?php echo User::getId();?>"><img src="/PHAC/img/profiles/default.png" class="header-profile-img"></a>

</header>

<script src="js/upload.js"></script>