<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>

<?php 
    if (isset($_SESSION["username"])) {
        $current_user = $_SESSION["username"];
        $name_query = "SELECT * FROM users WHERE username = '{$current_user}' LIMIT 1";
        $name_result = mysqli_query($conn, $name_query);
        confirm_query($name_result);
        $name_title = mysqli_fetch_assoc($name_result);
        $first_name = explode(" ", $name_title['name']);            
        $view = "<a href='logout.php'>Logout,".$first_name[0]."</a>"; 
        $event_view = ""; 
        $login_view = "";      
    } else {
        $current_user = "";  
        $first_name = "";
        $name_title = "";
        $view = "<a href='../theme/login.php'>Login</a>";  
        $login_view ="<a href='../theme/login.php' class='gobutton'>Login to register</a>"; 
        $event_view = "style='display: none;'";     
    }   
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Schools | TechnoVIT</title>
	<meta name="description" content="The annual techfest of VIT Chennai" />
	<meta name="keywords" content="techfest, VIT Chennai, TechnoVIT, Tcehnovit'16, VIT University" />
	<meta name="author" content="krshubham, prshantkbhardwaj, aman_saha" />
	<!-- <link rel="shortcut icon" href="favicon.ico"> -->
	<!-- Feather Icons -->
	<link rel="stylesheet" type="text/css" href="fonts/feather/style.css">
	<!-- General demo styles & header -->
	<link rel="stylesheet" type="text/css" href="css/demo.css" />
	<!-- Component styles -->
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/modernizr.custom.js"></script>
	<script src="js/refreshform.js"></script>
</head>
<body>
	<!-- Main container -->
	<div class="container">
		<header class="bp-header cf" style="text-align:center;">
			<h1 style="text-align:center;">Schools</h1>
		</header>
		<!-- Grid -->
		<section class="slider">
			<div class="slide slide--current" data-content="content-1">
				<div class="slide__mover">
					<div class="zoomer flex-center">
						<img class="zoomer__image" src="../design/Schoolgif/law3.gif" alt="law" />
						<div class="preview">
							<img id="law" src="../design/Schoolgif/law3.gif" alt="iPhone app preview" />
							<div class="zoomer__area zoomer__area--size-2"></div>
						</div>
					</div>
				</div>
				<h2 class="slide__title"><span>The</span> Law School</h2>
			</div>
			<div class="slide" data-content="content-2">
				<div class="slide__mover">
					<div class="zoomer flex-center">
						<img class="zoomer__image" src="../design/Schoolgif/ece-1.gif" alt="iPad Mini" />
						<div class="preview">
							<img src="../design/Schoolgif/ece-1.gif" alt="iPad Mini app preview" />
							<div class="zoomer__area zoomer__area--size-4"></div>
						</div>
					</div>
				</div>
				<h2 class="slide__title"><span>The </span> SENSE</h2>
			</div>
			<div class="slide" data-content="content-3">
				<div class="slide__mover">
					<div class="zoomer flex-center">
						<img class="zoomer__image" src="../design/Schoolgif/eee-1.gif" alt="MacBook" />
						<div class="preview">
							<img src="../design/Schoolgif/eee-1.gif" alt="MacBook app preview" />
							<div class="zoomer__area zoomer__area--size-3"></div>
						</div>
					</div>
				</div>
				<h2 class="slide__title"><span>The Amazing</span> SELECT</h2>
			</div>
			<div class="slide" data-content="content-4">
				<div class="slide__mover">
					<div class="zoomer flex-center">
						<img class="zoomer__image" src="../design/Schoolgif/rotgear3.gif" alt="iMac" />
						<div class="preview">
							<img src="../design/Schoolgif/rotgear3.gif" alt="iMac app preview" />
							<div class="zoomer__area zoomer__area--size-5"></div>
						</div>
					</div>
				</div>
				<h2 class="slide__title"><span>The Glorious</span> SMBS</h2>
			</div>
			<div class="slide" data-content="content-5">
				<div class="slide__mover">
					<div class="zoomer flex-center">
						<img class="zoomer__image" src="images/apple-watch.png" alt="Apple Watch" />
						<div class="preview rounded">
							<img src="images/apple-watch-content-preview.png" alt="Apple Watch app preview" />
							<div class="zoomer__area zoomer__area--size-1"></div>
						</div>
					</div>
				</div>
				<h2 class="slide__title"><span>The Fabulous</span> Apple Watch</h2>
			</div>
			<nav class="slider__nav">
				<button class="button button--nav-prev"><i class="icon icon--arrow-left"></i><span class="text-hidden">Previous product</span></button>
				<button class="button button--zoom"><i class="icon icon--zoom"></i><span class="text-hidden">View details</span></button>
				<button class="button button--nav-next"><i class="icon icon--arrow-right"></i><span class="text-hidden">Next product</span></button>
			</nav>
		</section>
		<!-- /slider-->
		<section class="content">
                <div class="container">
                    <h2><em>Dota&nbsp; 2</em>Team of 5</h2>
                    <br>
                    <br>
                    <form>
                        <input type="text" id="event_dota2" value="dota2_team_500_s" style="display: none;">                    
                        <div style="text-align: center; ">
                            <input id="dota2" class="gobutton" <?php echo $event_view; ?> type="button" value="Register!" onclick="this.value='Registered!'" />
                            <?php echo $login_view; ?>
                        </div>
                    </form> 
                </div>

			<div class="content__item" id="content-2">
				<img class="content__item-img rounded-right" src="images/ipad-content.jpg" alt="iPad Mini Content" />
				<div class="content__item-inner">
					<h2>The iPad Mini</h2>
					<h3>Desktop-class architecture without a desktop</h3>
					<p>Don’t let its size fool you. iPad mini 3 is powered by an A7 chip with 64-bit desktop-class architecture. A7 delivers amazing processing power without sacriﬁcing battery life. So you get incredible performance in a device you can take with you wherever you go.</p>
					<p><a href="https://www.apple.com/ipad-mini-3/performance/">Learn more about Performance &xrarr;</a></p>
				</div>
			</div>
			<div class="content__item" id="content-3">
				<img class="content__item-img rounded-right" src="images/macbook-content.jpg" alt="MacBook Content" />
				<div class="content__item-inner">
					<h2>The MacBook</h2>
					<h3>It's the future of the notebook</h3>
					<p>With the new MacBook, we set out to do the impossible: engineer a full-size experience into the lightest and most compact Mac notebook ever. That meant reimagining every element to make it not only lighter and thinner but also better. The result is more than just a new notebook. It's the future of the notebook.</p>
					<p><a href="https://www.apple.com/macbook/design/">Learn more about the design &xrarr;</a></p>
				</div>
			</div>
			<div class="content__item" id="content-4">
				<img class="content__item-img rounded-right" src="images/imac-content.jpg" alt="iMac Content" />
				<div class="content__item-inner">
					<h2>The iMac</h2>
					<h3>Engineered to the very last detail</h3>
					<p>Every new Mac comes with Photos, iMovie, GarageBand, Pages, Numbers, and Keynote. So you can be creative with your photos, videos, music, documents, spreadsheets, and presentations right from the start. You also get great apps for email, surfing the web, sending texts, and making FaceTime calls — there’s even an app for finding new apps.</p>
					<p><a href="https://www.apple.com/imac/built-in-apps/">Learn more about the iMac's features &xrarr;</a></p>
				</div>
			</div>
			<div class="content__item" id="content-5">
				<img class="content__item-img rounded-right" src="images/apple-watch-content.png" alt="Apple Watch Content" />
				<div class="content__item-inner">
					<h2>The Apple Watch</h2>
					<h3>Entirely new ways to stay in touch</h3>
					<p>Apple Watch makes all the ways you're used to communicating more convenient. And because it sits right on your wrist, it can add a physical dimension to alerts and notifications. For example, you’ll feel a gentle tap with each incoming message. Apple Watch also lets you connect with your favorite people in fun, spontaneous ways — like sending a tap, a sketch, or even your heartbeat. </p>
					<p><a href="https://www.apple.com/watch/new-ways-to-connect/">Learn more about new ways to connect &xrarr;</a></p>
				</div>
			</div>
			<button class="button button--close"><i class="icon icon--circle-cross"></i><span class="text-hidden">Close content</span></button>
		</section>
	</div>
	<script src="js/classie.js"></script>
	<script src="js/dynamics.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>