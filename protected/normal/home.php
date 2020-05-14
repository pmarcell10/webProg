<html>
	<?php if(array_key_exists('order', $_GET)) : ?>
		<h4>Order placed. Order ID: <?=$_GET['order']?></h4>
	<?php else : ?>
		<?php if(!isset($_SESSION['uid'])) : ?>	
			<h3>Welcome to the page.</h3>
		<?php else : ?>
			<h3>Welcome, <?php echo $_SESSION['lname'] ?>!</h3>
		<?php endif; ?>

			<?php if(isset($_SESSION['permission']) && $_SESSION['permission'] == 1) :  ?>
				<p style="margin: 0px">You are a seller. Click <a href="index.php?P=add_item">here</a> to add items.</p>
				<p>Click <a href="index.php?P=browse">here</a> to browse items.</p>
			<?php elseif(!isset($_SESSION['permission']) || $_SESSION['permission'] == 0) : ?>
				<p>Click <a href="index.php?P=browse">here</a> to browse items.</p>
			<?php elseif(IsUserAdmin()) : ?>
				<h2>ADMIN LOGIN</h2>
				<p><a href="index.php?P=admin">Admin page</a></p>
			<?php endif; ?>
	<?php endif; ?>
</html>