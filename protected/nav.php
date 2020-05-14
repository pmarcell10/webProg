<hr>

<a href="index.php" class="menu">Home</a>
<span class="menu"> &nbsp; | &nbsp; </span>
<a href="index.php?P=browse" class="menu">Browse</a>
<?php if(!IsUserLoggedIn()) : ?>
	<a href="index.php?P=login" style="float: right"  class="menu">Login</a>
	<span style="float: right"  class="menu"> &nbsp; | &nbsp; </span>
	<a href="index.php?P=register" style="float: right"  class="menu">Register</a>
<?php else : ?>
	<?php if(isset($_SESSION['permission']) && $_SESSION['permission'] == 1) : ?>
		<span  class="menu"> &nbsp; | &nbsp; </span>
		<a href="index.php?P=add_item"  class="menu">Add item</a>
	<?php endif; ?>

	<a href="index.php?P=logout" style="float: right" class="menu">Logout</a>

	<?php if(IsUserAdmin()) : ?>
		<span style="float: right"  class="menu"> &nbsp; || &nbsp; </span>
		<a href="index.php?P=admin" style="float: right"  class="menu"><strong>Admin Panel</strong></a>
	<?php endif; ?>

<?php endif; ?>

<hr>