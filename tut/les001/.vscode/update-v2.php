<?php
  // 1. Create a database connection
  $dbhost = "localhost";
    $dbuser = "keys4wcm_bp";
    $dbpass = "qazwsx";
    $dbname = "keys4wcm_bp";
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  // Test if connection succeeded
  if(mysqli_connect_errno()) {
    die("Database connection failed: " . 
         mysqli_connect_error() . 
         " (" . mysqli_connect_errno() . ")"
    );
  }
?>
<?php
    $id = 2000;
    $menu_name = "edit me";
    $position = 4;
    $visible = 1;

	// 2. Perform database query
	$query  = "UPDATE subjects SET ";
	$query .= "menu_name = '{$menu_name}', ";
	$query .= "position = {$position}, ";
	$query .= "visible = {$visible} ";
    $query .= "WHERE id = {$id}";
	$result = mysqli_query($connection, $query);
	// Test if there was a query error
	if ($result && mysqli_affected_rows($connection) == 1) {
        echo "success!";
    }else{
		die("Database query failed.");
    }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
	<head>
		<title>Databases</title>
	</head>
	<body>
		
		<ul>
		<?php
			// 3. Use returned data (if any)
			while($subject = mysqli_fetch_assoc($result)) {
				// output data from each row
		?>
				<li><?php echo $subject["menu_name"] . " (" . $subject["id"] . ")"; ?></li>
	  <?php
			}
		?>
		</ul>
		
		<?php
		  // 4. Release returned data
		  mysqli_free_result($result);
		?>
	</body>
</html>

<?php
  // 5. Close database connection
  mysqli_close($connection);
?>