<h1>Serveur2 Apache</h1>
<h4>Tentative de connexion MySQL depuis PHP...</h4>
<?php
	//phpinfo();
$host = 'mysql2';
$user = $_ENV["DB_USER"];
$pass = $_ENV["DB_PASSWD"];
$conn = new mysqli($host, $user, $pass);

if ($conn->connect_error) {
	die("La connexion a échoué: " . $conn->connect_error);
}
echo "Connexion réussie à MySQL!";
?>

