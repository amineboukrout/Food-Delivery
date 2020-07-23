<?php
$socket = stream_socket_server("tcp://127.0.0.1:3306");
//if (!$socket) {
//  echo "fail";
//} else {
//  echo 'success';
//}


//$servername = "35.236.213.250";
//$username = "amine";
//$password = "Hope2020";
//$dbname = "deliveryjini";

// $username = 'amine';
// $password = 'Hope2020';
// $dbName = 'deliveryjini';
// $cloud_sql_connection_name = getenv("CLOUD_SQL_CONNECTION_NAME");
// $hostname = "127.0.0.1:3306"; // Only used in TCP mode.
//
//if ($hostname) {
//  // Connect using TCP
//  $dsn = sprintf('mysql:dbname=%s;host=%s', $dbName, $hostname);
//} else {
//  // Connect using UNIX sockets
//  $dsn = sprintf(
//      'mysql:dbname=%s;unix_socket=/cloudsql/%s',
//      $dbName,
//      $cloud_sql_connection_name
//  );
//}

// Connect to the database.
// Here we set the connection timeout to five seconds and ask PDO to
// throw an exception if any errors occur.
//$conn = new PDO($dsn, $username, $password, [
//    PDO::ATTR_TIMEOUT => 5,
//    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
//]);


//$sql = "SELECT id, firstname, lastname FROM MyGuests";
//$result = $conn->query($sql);

$con=mysqli_connect("localhost", "root", "", "fosdb");
if(mysqli_connect_errno()) {
    echo "Connection Fail" . mysqli_connect_error();
}
else{
  echo "Connection Success";
}
  ?>