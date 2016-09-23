<!-- Afterwards I've used a conditional statement that if the file .php (depending on which one is active) is the current/active page it should be in the class "active". -->

<ul>
  <li><a href="index.php" <?php if($curpage == 'index.php') {
	echo 'class="active"';
	} ?>>Home</a></li>
  <li><a href="about.php" <?php if($curpage == 'about.php') {
	echo 'class="active"';
	}?>>About</a></li>
  <li><a href="news.php" <?php if($curpage == 'news.php') {
	echo 'class="active"';
	}?>>News</a></li>
  <li><a href="contact.php" <?php if($curpage == 'contact.php') {
	echo 'class="active"';
	} ?>>Contact</a></li>
</ul>