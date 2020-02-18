
<?php 
include "includes/database.php";
?>

<html>
<head></head>

<title>glass cup enterprise || Edit contact</title>

<body>


<div>
<a href="index.php">home</a>
<a href="add.php">add contact</a>
</div>



<body>

	<h4>Edit Contact</h4>

	<?php
if (isset($_POST['save'])) {
	$fldid = $_POST['fldid'];
	$fldname = $_POST['fldname'];
	$fldaanwezigheden = $_POST['fldaanwezigheden'];
	$fldopleiding = $_POST['fldopleiding'];


$query ="UPDATE dbintec.aanwezigheden SET fldname='$fldname',fldaanwezigheden='$fldaanwezigheden',fldopleiding='$fldopleiding' WHERE fldid=$fldid";

	if ($con->query($query)) {
		echo "contact successfully updated";
	}else{
		echo "an error occured".$con->error;
	}
}

?>

<?php
$fldid = $_REQUEST['fldid'];
$getcontacts = mysqli_query($con,"SELECT * FROM dbintec.aanwezigheden WHERE fldid=$fldid");

while ($contacts=mysqli_fetch_array($getcontacts)) {
	$fldid = $contacts['fldid'];
	$fldname = $contacts['fldname'];
	$fldname = $contacts['fldname'];
	$fldopleiding = $contacts['fldopleiding'];
?>




<form action="" method="post">
<input type="hidden" name="flid" value="<?php echo $fldid; ?>">

<input type="text" name="name" placeholder="Full name" value="<?php echo $fldname; ?>">
<br>
<input type="text" name="aanwezig" placeholder="aanwezig" value="<?php echo $fldaanwezigheden; ?>">
<br>
<input type="text" name="opleiding" placeholder="opleiding"  value="<?php echo $fldopleiding; ?>">
<br>
<br>
<input type="submit" name="save" value="save" >
</form>


<?php
}
?>

</table>
</body>

</html>