<?php


error_reporting(0);
$servername = "127.0.0.1:3300";
$username = "root";
$password = "";
$dbase = "vms";

echo"1";
$q = intval($_GET['q']);

$con  = mysqli_connect($servername, $username, $password, $dbase);
if (!$con) {
  echo"if condition";
  /*die('Could not connect: ' . mysqli_error($con));*/
}
else
{

  echo"if condition";
}
mysqli_select_db($con,"master_client");
$sql="SELECT * FROM master_client WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th>Hometown</th>
<th>Job</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['FirstName'] . "</td>";
  echo "<td>" . $row['LastName'] . "</td>";
  echo "<td>" . $row['Age'] . "</td>";
  echo "<td>" . $row['Hometown'] . "</td>";
  echo "<td>" . $row['Job'] . "</td>";
  echo "</tr>";
}
echo "</table>";

mysqli_close($con);

?>