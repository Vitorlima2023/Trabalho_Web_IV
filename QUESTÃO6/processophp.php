<?php
include 'db.php';

function getPublicacoes($conn) {
    $sql = "SELECT * FROM publicacoes ORDER BY data_criacao DESC";
    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['action'])) {
        $action = $_POST['action'];

        if ($action == 'create') {
            $texto = $_POST['texto'];
            $stmt = $conn->prepare("INSERT INTO publicacoes (texto) VALUES (?)");
            $stmt->bind_param("s", $texto);
            $stmt->execute();
            $stmt->close();
        } elseif ($action == 'like') {
            $id = $_POST['id'];
            $stmt = $conn->prepare("UPDATE publicacoes SET curtida = NOT curtida WHERE id = ?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $stmt->close();
        } elseif ($action == 'delete') {
            $id = $_POST['id'];
            $stmt = $conn->prepare("DELETE FROM publicacoes WHERE id = ?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $stmt->close();
        }
    }
}

$publicacoes = getPublicacoes($conn);

$conn->close();
?>
