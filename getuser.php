<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','admin','Qwerty-592986');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"belajar");
$sql="SELECT * FROM garbages WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result)) {
	echo "<h3>".$row['name']."</h3>";
	echo "<p><span>Location:</span>       " .$row['location']. "</p>";
}
mysqli_close($con);
?>	
	<a href="#map" class="btn view_map">View map</a>