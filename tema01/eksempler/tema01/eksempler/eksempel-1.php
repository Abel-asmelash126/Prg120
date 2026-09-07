<?php
$fornavn = $_POST["fornavn"] ?? "";
$etternavn = $_POST["etternavn"] ?? "";

echo "<h2>God dag $fornavn $etternavn</h2>";

echo "<h3>Data fra skjemaet:</h3>";
echo "fornavn → $fornavn<br>";
echo "etternavn → $etternavn<br>";
?>
