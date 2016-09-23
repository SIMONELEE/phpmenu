<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Home Page</title>
</head>

<body>
<?php 

/*To show which page is the active for the menu, I've created the variable $curpage for the current page. */
$curpage = 'index.php'; 

	
/*Instead of having the individual code for the menu in each page, this php connects to one php file that has the entire menu. So if anything needs to be changed, it only has to be changed in the one menu.php file and the other pages will update.
The "require" function means that the php will look for the files from the seperate menu.php file and the process will stop, if any files are missing. Instead could've used "include" but if any files should be missing, the php will just ignore this and continue with the other links. As all the files for the menu should be working, I used "require".*/
require 'menu.php';
?>
<h1>This is my home page.</h1>
<p>For this page I will add a PHP menu.</p>
</body>
</html>