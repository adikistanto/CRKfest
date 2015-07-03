<!DOCTYPE html>
<html lang="en">
	<head>
		<link href="assets/css/global.css" rel="stylesheet">
		<meta charset="utf-8">
		<title>carakafest</title>
	</head>
	<body style="margin:0px" id="top">
		<div id="page_header">
			<div>
				<img class="mini_logo"src="assets/images/mini_logo1.png"/>
				<img class="mini_logo"src="assets/images/mini_logo.png"/>
				<ul class="header_menu_box">
					<a href="index.php"><li id="header_menu">Home</li></a>
					<a href="carakafest.php"><li id="header_menu" >Carakafest</li></a>
					<a href="competition.php"><li id="header_menu">Competition</li></a>
					<a href="program.php"><li id="header_menu">Program</li></a>
					<a href="gallery.php"><li id="header_menu">Gallery</li></a>
					<a href="support.php"><li id="header_menu">Support</li></a>
					<a href="schedule.php"><li id="header_menu">Schedule</li></a>
					<a href="contact.php"><li id="header_menu">Contact</li></a>
				</ul>
			</div>
		</div>
		<div id="content">
			<div id="left_side">
					<div><img id="maskot_box"src="assets/images/maskot.png" alt="maskot_iamge"></div>
					<div id="page_label">Registrasi</div>
			</div>
			<div id="wrapper">			
				<div id="tentang_caraka" class="sector grey_bg">
					<div id="mask_medium"></div>
					<div id="sector_label" class=""><h2>Registrasi</h2></div>
					<div id="content_big_image" class=""> 
						<table>
							<form method="POST" name="register_form">
							<tr><td width="200px"id="label_text">Email<td><td><input type="text" name="f_username" id="input_form"></input></td></tr>
							<tr><td width="200px"id="label_text">Password<td><td><input type="text" name="f_name" id="input_form"></input></td></tr>
							<tr><td width="200px"id="label_text">Password<td><td><input type="text" name="f_email" id="input_form"></input></td></tr>
							<tr><td width="200px"id="label_text">Universitas<td><td><input type="text" name="f_address" id="input_form"></input></td></tr>
							<tr><td colspan="2"><input type="submit" name="f_address" id="butt_form" value="submit"></input></td></tr>
							</form>
						</table>
					</div>
				</div>
				<div id="mask_small" class="black_bg"></div>
				<div id="footer"><p id="copyright">&copy; Carakafest2014</p></div>
			</div>
		</div>
	</body>
</html>
