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

function saveFile(string $file, string $data): void
{
	$myFile = fopen($file, 'w');
	if ($myFile) {
		$result = fwrite($myFile, $data);
		if ($result) {
			echo 'Данные успешно сохранены в файл';
		} else {
			echo 'Произошла ошибка при сохранении данных в файл';
		}
		fclose($myFile);
	} else {
		echo 'Произошла ошибка при открытии файла';
	}
}

function saveImage(string $imageBase64, bool $is_author): void
{
	$imageBase64Array = explode(';base64,', $imageBase64);
	$imgExtention = str_replace('data:image/', '', $imageBase64Array[0]);
	$imageDecoded = base64_decode($imageBase64Array[1]);
	if ($is_author) {
		saveFile("static/images/authorNew.{$imgExtention}", $imageDecoded);
	} else {
		saveFile("static/images/myNewPost.{$imgExtention}", $imageDecoded);
	}

}

function addPost(array $dataAsArray, $conn): void
{
	$title = $dataAsArray['title'] ?? null;
	$subtitle = $dataAsArray['subtitle'] ?? null;
	$image_post = 'http://localhost:8080/static/images/myNewPost.jpeg';
	$image_url = $dataAsArray['image_url'] ?? null;
	$content = $dataAsArray['content'] ?? null;
	$author = $dataAsArray['author'] ?? null;
	$author_url = $dataAsArray['author_url'] ?? null;
	$author_image = 'http://localhost:8080/static/images/authorNew.jpeg';
	$publish_date = $dataAsArray['publish_date'] ?? null;
	$featured = $dataAsArray['featured'] ?? null;
	$action = $dataAsArray['action'] ?? null;
	$sql = "INSERT INTO post(title, subtitle, image_post, image_url, content, author, author_url, author_image, publish_date, featured, action )
	VALUES('$title', '$subtitle', '$image_post', 
	'$image_url', '$content', '$author', '$author_url', '$author_image', '$publish_date', '$featured', '$action')";
	$conn->query($sql);

}
$conn = createDBConnection();
$posts = getAndPrintPostsFromDB($conn);

$dataAsJson = file_get_contents("php://input");
$dataAsArray = json_decode($dataAsJson, true);

if ($dataAsJson != null) {
	saveImage($dataAsArray['image_post'], 0);
	saveImage($dataAsArray['author_image'], 1);
	addPost($dataAsArray, $conn);
}

closeDBConnection($conn);

?>