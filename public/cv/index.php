<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="Your description goes here" />
	<meta name="keywords" content="your,keywords,goes,here" />
	<meta name="author" content="Aaviya" />
	<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
	<link type="text/css" rel="stylesheet" href="style.css" media="screen" />
	 <script src="//code.jquery.com/jquery-1.9.1.js"></script>
	<title>Next CV template</title>
</head>

<body>
	<div id="mainwrap">

		<header>
			<h1><a href="/">James</a></h1>
			<h2>Senior Web Developer | New York City</h2>
			<ul id="menu">
				<li><a class="profile" href="#profile" title="Profile">Profile</a><span></span></li>
				<li><a class="resume" href="#resume" title="Resume">Professional</a><span>Professional information</span></li>
				<li><a class="contact" href="#contact" title="Contact">Contact</a><span>Get in touch</span></li>
			</ul>
		</header>
		<div style="clear:both"></div>
		<div id="content">
			<div id="profile" class="section">
				<div class="column col3">
					<table id="bioinfo">
						<tbody>
							<tr>
								<td class="odd">Location</td>
								<td class="even">New York City, USA</td>
							</tr>
							<tr>
								<td class="odd">Areas of Specialization</td>
								<td class="even">PHP, Drupal, Wordpress, Symfony</td>
							</tr>
							<tr>
								<td class="odd">Photos</td>
								<td class="even"><a href="../images/pictures">Gallery</a></td>
							</tr>
						</tbody>
					</table>
					<ul class="social">
						<li><a href="https://twitter.com/jamestarleton" class="external"><img src="img/icons/twitter.png" alt="Twitter" /></a></li>
						<li><a href="https://www.linkedin.com/in/jtarleton/" class="external"><img src="img/icons/linkedin.png" alt="Linkedin" /></a></li>
						<li><a href="https://flickr.com/photos/27461998@N02/" class="external"><img src="img/icons/flickr.png" alt="flickr" /></a></li>
					</ul>
				</div>
				<div class="column col5 pl-50">
					<img src="../images/pictures/mid/mid_sandbox-landscape-wallpaper-background-rainbow-cityscape-images-night-192311.jpg" alt="Jonathan Doe" />
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat. </p>
					<p><a href="#">Download PDF resume</a></p>
				</div>
			</div>

			<div id="resume" class="section">
				<table id="cv">
					<tbody>
						<tr>
							<td class="col2"><div class="date">Nov 2018 - present</div></td>
							<td class="col6 pl-30">
								<p class="company"></p>
								<p class="title">Senior Web Developer</p>
								<p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>
							</td>
						</tr>
						<tr>
							<td class="col2"><div class="date">March 2011 - Nov 2018</span></td>
							<td class="col6 pl-30">
								<p class="company">ANA</p>
								<p class="title">Software Developer</p>
								<p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>
							</td>
						</tr>








						<tr>
							<td class="col2"><div class="date">July 2008 - Feb 2011</span></td>
							<td class="col6 pl-30">
								<p class="company">Barnes & Noble</p>
								<p class="title">Web Developer</p>
								<p class="description">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>
							</td>
						</tr>
					</tbody>
				</table>

			</div>

			<div id="contact" class="section">
				<div class="column col3">
					<h3>James</h3>
					<p>New York City, USA</p>
				</div>
				<div class="column col5 pl-50">
					<h3>Send a message</h3>
					<form id="contactform">
						<p class="column col4"><label for="name">Name:</label><input type="text" name="name" id="name" /></p>
						<p class="column col4"><label for="email">E-mail:</label><input type="text" name="email" id="email" /></p>
						<p class="column col8"><label for="message">Message:</label><textarea rows="5" name="message" id="message"></textarea></p>
						<p class="column col8"><input class="button" type="button" value="Submit" /></p>
					</form>
				</div>
			</div>
		</div>

		<div id="footer">
			&copy; 2020 &middot; 
		</div>
	  
		<script type="text/javascript">
			$(document).ready(function() {
			    $(".section").not(":first").hide();
			    $("ul#menu li:first").addClass("active").show(); 
			 
			    $("ul#menu li").click(function() {
			        $("ul#menu li.active").removeClass("active");
			        $(this).addClass("active");
			        $(".section").slideUp();       
			        $($('a',this).attr("href")).slideDown('slow');
			 
			        return false;
			    });
			 
			});
		</script>
	</div>
</body>
</html>
