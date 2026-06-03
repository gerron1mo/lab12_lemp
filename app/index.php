<?php
echo "<h1>Stack LEMP dziala poprawnie</h1>";
echo "<h3>Informacje o PHP:</h3>";

$host = 'mysql';
$user = 'root';
$pass = 'student_pass';
$conn = new mysqli($host, $user, $pass);

if ($conn->connect_error) {
    echo "<p style='color:red;'>Polaczenie z MySQL nieudane: " . $conn->connect_error . "</p>";
} else {
    echo "<p style='color:green;'>Kontener PHP polaczyl sie z baza MYSQL</p>";
}

echo "<hr>";
phpinfo();
?>
