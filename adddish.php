<?php


 $db = mysqli_connect('localhost', 'root', '', 'digimenu'); 
 if(isset($_POST["dmenu"]))  
 {  
         
      $dimg = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $dname = mysqli_real_escape_string($db, $_POST['dname']);
      $dnote = mysqli_real_escape_string($db, $_POST['dnote']);
      $dprice = mysqli_real_escape_string($db, $_POST['dprice']);
      $dinfo = mysqli_real_escape_string($db, $_POST['dinfo']);
      $dtype = mysqli_real_escape_string($db, $_POST['dtype']);
     
      $query = "INSERT INTO dish (dname, dnote, dprice, dinfo, dtype, dimg) 
					  VALUES('$dname', '$dnote', '$dprice', '$dinfo', '$dtype', '$dimg')";
			mysqli_query($db, $query);
 
 }  
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Dish</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="header">
		<h2>Add Dish</h2>
	</div>
	
	<form method="post" action="adddish.php" enctype="multipart/form-data">

		<div class="input-group">
			<label>Dish Name</label>
			<input type="text" name="dname" value="<?php echo $dname; ?>">
		</div>
		<div class="input-group">
			<label>Note</label>
			<input type="text" name="dnote" value="<?php echo $dnote; ?>">
		</div>
        <div class="input-group">
			<label>Price</label>
			<input type="text" name="dprice" value="<?php echo $dprice; ?>">
		</div>
		<div class="input-group">
			<label>Dish Info.</label>
			<input type="text" name="dinfo" value="<?php echo $dinfo; ?>">
		</div>
        <div class="input-group">
			<label>Dish Type</label>
			<input type="text" name="dtype" value="<?php echo $dtype; ?>">
		</div>
          <div class="container" style="width:500px;">      
              <input type="file" name="image" id="image" /></div>  
                 <div class="input-group">
			<button type="submit" class="btn" id="dmenu" value="dmenu" name="dmenu">Submit</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
              </form>
	
</body>
</html>