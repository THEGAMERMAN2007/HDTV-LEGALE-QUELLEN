<?php
// Laden der .doc-Datei
$docContent = file_get_contents('https://s2.dietdinnerrecipes.com/stream/go2/Njg3NDc0NzA3MzI1MzM0MTI1MzI0NjI1MzI0Njc3Nzc3NzJlNmM2OTc2NjU3Mzc0NzI2NTYxNmQ2NDY1MmU2MzZmNmQyNTMyNDY3NDZjNjMyNTMyNDY=~/~NzMyZTY4NjQ3NDc2Njk3YTZjNjU2MzYxNmU2YzY5MmU2MzZmNmQ=~/~/tlc.m3u81a.doc');

// Senden des Texts an das Front-End als JSON
header('Content-Type: application/json');
echo json_encode(['docContent' => $docContent]);
?>
