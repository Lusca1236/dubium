<?php
function mensagemPost(){
    include "conexao.php";
$conn = conexao();
$sql = "SELECT duvida FROM post";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->get_result();

// Converta os resultados em um array associativo
$resultArray = [];
while ($row = $result->fetch_assoc()) {
    $resultArray[] = $row;
}

$stmt->close();
$conn->close();
}
?>
