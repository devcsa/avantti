<?php

if (isset($_FILES['file']['name'])) {
    $file = $_FILES['file'];

    $targetDir = "../assets/img/posts/basepath/";
    // $fileName = basename($file['name']);

    $fileName = $file['name'];

    $targetPath = $targetDir . $fileName;

    if (move_uploaded_file($file['tmp_name'], $targetPath)) {
        $imageUrl = $fileName;

        echo json_encode(['location' => $imageUrl]);
    } else {
        header("HTTP/1.1 500 Internal Server Error");
        echo json_encode(['error' => 'Erro ao fazer upload do arquivo']);
    }
} else {
    header("HTTP/1.1 400 Bad Request");
    echo json_encode(['error' => 'Nenhum arquivo enviado']);
}
