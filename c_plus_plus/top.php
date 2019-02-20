<?php require "../php/db.php"; ?>
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
			<a href="../index/signup.php">sign up</a>
	</div>
	<img src="../img/close2.png" id="close">
</div>
<header>
	<div class="header-top">
		<div class="logo">
			<a href="../index/index.php">&lt;/&gt; notesCode</a>
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
			<a href="../index/user.php">A</a>
		</div>
		<div class="authorization">
			<ul>
				<li><a href="../index/user.php"><?php echo $_SESSION['logged_user']->login; ?></a></li>
				<li><a href="../php/logout.php">Log out</a></li>
			</ul>
		</div>
		<?php else : ?>
		<div id="authorization_btn" class="tooltip popup" data-title="Log In">
			<a href="#">in</a>
		</div>
		<div class="authorization">
			<ul>
				<li><a href="#" class="popup">Log In</a></li>
				<li><a href="../index/signup.php">Sign Up</a></li>
			</ul>
		</div>
		<?php endif; ?> 
	</div>
	<div class="header-flex">
		<nav>
			<ul>
				<li><a href="../index/info.php">About</a></li>
				<li><a href="../index/articles.php">Articles</a></li>
				<li><a href="victoryna.php">Tests</a></li>
				<li><a href="index.php">C++</a></li>
				<li><a href="#" class="tooltip" data-title="Empty">HTML/CSS</a></li>
				<li><a href="#" class="tooltip" data-title="Empty">JS</a></li>
				<li><a href="#" class="tooltip" data-title="Empty">PHP</a></li>
				<li><a href="#" class="tooltip" data-title="Empty">C#/.NET</a></li>
				<li><a href="#" class="tooltip" data-title="Empty">SQL</a></li>
			</ul>
		</nav>
	</div>
</header>