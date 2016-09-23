<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>News</title>
<link rel="stylesheet" type="text/css" href="main.css">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>

<body>
<?php 
/* Because of the basename function in the menu.php file, there's no need for the $curpage variable on each individual .php file - therefore this is commented out.
To show which page is the active for the menu, I've created the variable $curpage for the current page.
$curpage = 'news.php'; */

	
/*Instead of having the individual code for the menu in each page, this php connects to one php file that has the entire menu. So if anything needs to be changed, it only has to be changed in the one menu.php file and the other pages will update.
The "require" function means that the php will look for the files from the seperate menu.php file and the process will stop, if any files are missing. Instead could've used "include" but if any files should be missing, the php will just ignore this and continue with the other links. As all the files for the menu should be working, I used "require".*/
require 'menu.php';
?>
<h1>News</h1>
<p>This will be a page about exciting news.</p>
</body>
</html>