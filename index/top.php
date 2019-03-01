<?php
		require "../php/db.php";
		$root = "//localhost/my/";
		//$root = "http://notescode.zzz.com.ua/";
		$linkArtikles = $root."index/articles.php";
		$linkAbout = $root."index/info.php";
		$linkTest = $root."c_plus_plus/index.php?file=victoryna.php";
		$linkCplusplus = $root."c_plus_plus/index.php";
		$linkSignUp = $root."index/signup.php";
		$linkNotesCode = $root."index/index.php";
		$linkUser = $root."index/user.php";
		$linkLogout = $root."php/logout.php";
?>
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- Your customer chat code -->
<div class="fb-customerchat"
  attribution=setup_tool
  page_id="356399155096748"
  theme_color="#4CCEB2">
</div>
<div class="hidden_login">
	<div>
			<form  id="login">					
				<input type="text" name="login" placeholder="Login" required>
				<input type="password" name="password" placeholder="Password" required>
				<button type="submit">Log in</button>
			</form>
			<a href="<?php echo $linkSignUp?>">sign up</a>
	</div>
	<img src="../img/close2.png" id="close">
</div>
<header>
	<div class="header-top">
		<div class="logo">
			<a href="<?php echo $linkNotesCode?>">&lt;/&gt; notesCode</a>
		</div>

		<div class="menu tooltip" data-title="MENU">
			<a href="#" class="menu-btn"><span></span></a>
		</div>

		<form  onsubmit="return false;" id="search">
				<input type="text" placeholder="Search doesn't work">
				<input type="submit" value="seacrh">
		</form>
		<?php  if(isset($_SESSION['logged_user'])) : ?>
		<div id="authorization_btn" class="tooltip" data-title="Account">
			<a href="<?php echo $linkUser?>">A</a>
		</div>
		<div class="authorization">
			<ul>
				<li><a href="<?php echo $linkUser?>"><?php echo $_SESSION['logged_user']->login; ?></a></li>
				<li><a href="<?php echo $linkLogout?>">Log out</a></li>
			</ul>
		</div>
		<?php else : ?>
		<div id="authorization_btn" class="tooltip popup" data-title="Log In">
			<a href="#">in</a>
		</div>
		<div class="authorization">
			<ul>
				<li><a href="#" class="popup">Log In</a></li>
				<li><a href="<?php echo $linkSignUp?>">Sign Up</a></li>
			</ul>
		</div>
		<?php endif; ?> 
	</div>
	<div class="header-flex">
		<nav>
			<ul>
				<li><a href="<?php echo $linkAbout?>">About</a></li>
				<li><a href="<?php echo $linkArtikles?>">Articles</a></li>
				<li><a href="<?php echo $linkTest?>">Tests</a></li>
				<li><a href="<?php echo $linkCplusplus?>">C++</a></li>
				<li><a href="#" class="tooltip" data-title="Empty">HTML/CSS</a></li>
				<li><a href="#" class="tooltip" data-title="Empty">JS</a></li>
				<li><a href="#" class="tooltip" data-title="Empty">PHP</a></li>
				<li><a href="#" class="tooltip" data-title="Empty">C#/.NET</a></li>
				<li><a href="#" class="tooltip" data-title="Empty">SQL</a></li>
			</ul>
		</nav>
	</div>
</header>