
<!doctype html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
<title>users</title>
</head>
<body>


<?php

$servername = "localhost";
$username = "root";
$password = "733securex";
$databasename = "test";

// CREATE CONNECTION
$conn = mysqli_connect($servername,
	$username, $password, $databasename);

// GET CONNECTION ERRORS
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

// SQL QUERY
$query = "SELECT first_name, last_name, address, gender, state, city, dob, course FROM users;";
// FETCHING DATA FROM DATABASE
$result = mysqli_query($conn, $query);

?>
<div class="content">
<div class="container">
<h2 class="mb-5">Users</h2>
<div class="table-responsive">
<table class="table table-striped custom-table">
<thead>
<tr>
<th scope="col">
<label class="control control--checkbox">
<input type="checkbox" class="js-check-all" />
<div class="control__indicator"></div>
</label>
</th>
<th scope="col">First Name</th>
<th scope="col">Last Name</th>
<th scope="col">DOB</th>
<th scope="col">City</th>
<th scope="col">State</th>
<th scope="col"></th>
</tr>
</thead>
<tbody>
<?php 
if (mysqli_num_rows($result) > 0) {
	// OUTPUT DATA OF EACH ROW
	while($row = mysqli_fetch_assoc($result)) {
?>
<tr scope="row">
<td>
<label class="control control--checkbox">
<input type="checkbox" />
<div class="control__indicator"></div>
</label>
</td>
<td>
<?php echo $row['first_name'];?>
</td>
<td class="pl-0">
<div class="d-flex align-items-center">
<label class="custom-control ios-switch">
<span class="ios-switch-control-indicator"></span>
</label>
<a href="#"><?php echo $row['last_name'];?></a>
</div>
</td>
<td><?php echo $row['dob'];?></td>
<td><?php echo $row['city'];?></td>
<td><?php echo $row['state'];?></td>
<td><a href="registration.php" class="more">Details</a></td>
</tr>
<?php
	}
} else {
	echo "0 results";
}
$conn->close();	
?>
</tbody>
</table>
</div>
</div>
</div>
</body>
</html>