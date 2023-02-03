$username = $_POST['username'];
$password = $_POST['password'];
$adminFlag = $_POST['isAdmin'];
$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
if ($adminFlag) {
  $query .= " AND isAdmin = 1";
}
$result = mysqli_query($connection, $query);
