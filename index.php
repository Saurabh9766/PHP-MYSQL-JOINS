<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "joins";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Using single SQL</title>
<style>
table,td,th
{
 padding:10px;
 border-collapse:collapse;
 font-family:Georgia, "Times New Roman", Times, serif;
 border:solid #ddd 2px;
}
</style>
</head>
<body>
<table align="center" border="1" width="100%">
<tr>
<th>product id</th>
<th>product name</th>
<th>category name</th>
</tr>
<?php


$sql="SELECT cat_name FROM tbl_categories UNION ALL SELECT product_id FROM tbl_products"; 

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result))
{
 ?>
    <tr>
    <td><p><?php echo $row['product_id']; ?></p></td>
    <td><p><?php echo $row['product_name']; ?></p></td>
    <td><p><?php echo $row['cat_name']; ?></p></td>
    </tr>
    <?php
}
}
?>
</table>
</body>
</html>