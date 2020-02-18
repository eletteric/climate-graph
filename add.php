
<?php
include "includes/database.php";

?>

<html>
<head></head>

<title>glass cup enterprise || Add contact</title>
<body>


<div>
<a href="index.php">home</a>
<a href="add.php">add contact</a>
</div>

<h3>Add Contact</h3>

<?php
if (isset($_POST['save'])) {
	$fldname = $_POST['name'];
	$fldaanwezigheden = $_POST['aanwezig'];
	$fldopleiding = $_POST['opleiding'];

$query ="INSERT INTO dbintec.aanwezigheden(fldname,fldaanwezigheden,fldopleiding) VALUES ('$fldname','$fldaanwezigheden','$fldopleiding')";

	if ($con->query($query)) {
		echo "contact successfully added";
	}else{
		echo "an error occured";
	}
}


?>



<form action="" method="post">
<input type="text" name="name" placeholder="Full name">
<br>
<input type="text" name="aanwezig" placeholder="aanwezig">
<br>
<input type="text" name="opleiding" placeholder="opleiding">
<br>
<br>
<input type="submit" name="save" value="save" >
</form>


</body>

</html>