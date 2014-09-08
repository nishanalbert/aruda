<?php
$selected = " id='selected'";
$fileName = basename($_SERVER['PHP_SELF']);
?>
<div id="header" align="center">
	<ul id="nav">
		<li<?php if($fileName == 'index.php') echo $selected; ?>><a href="index.php">Home</a></li>
		<li><a href="#">Services</a></li>
		<li<?php if($fileName == 'gallery.php') echo $selected; ?>><a href="gallery.php">Gallery</a></li>
		<li<?php if($fileName == 'contact-us.php') echo $selected; ?>><a href="contact-us.php">Contact Us</a></li>
	</ul>
</div>