<!--
index.php - reload our index page
page=admin -will tell to index page witch subpage to load
action=logout - will see through to the admin page
-->
<h1>Control Panel</h1>
<p><a href="index.php?page=admin&action=logout">Logout</a></p>
<p><a href="index.php?page=addcategory">Add new category</a></p>
<p><a href="index.php?page=deletecategoryselect">Delete Category</a></p>
<p><a href="index.php?page=editcategoryselect">Edit Category</a></p>
<?php unset($_SESSION['editcategory']);?>