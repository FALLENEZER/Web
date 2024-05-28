<?php

const HOST = 'localhost';
const USERNAME = 'root';
const PASSWORD = '';
const DATABASE = 'blog';

function createDBConnection(): mysqli
{
	$conn = new mysqli(HOST, USERNAME, PASSWORD, DATABASE);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	return $conn;
}

function closeDBConnection(mysqli $conn): void
{
	$conn->close();
}
function getAndPrintPostsFromDB(mysqli $conn): array
{
	$sql = "SELECT * FROM post";
	$posts = [];
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			$posts[] = $row;
		}
	} else {
		echo "0 results";
	}
	return $posts;
}
function getAllIdFromDB(mysqli $conn, int $id): array|null
{
	$sql = "SELECT * FROM post WHERE id='$id'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		$post = $result->fetch_assoc();
	} else {
		echo "0 results";
	}
	return $post;
}

$conn = createDBConnection();
$posts = getAndPrintPostsFromDB($conn);
closeDBConnection($conn);

?>