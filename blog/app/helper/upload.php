<?php
$targetDirectory = "../assets/img/users/"; // Pasta onde você deseja salvar as imagens
$targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

$nofile = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    // echo $targetDirectory  . "<br>";
    // echo $targetFile . "<br>";
    // echo $imageFileType . "<br>";

    // foreach ($_POST as $key => $value) {
    //     echo "Campo: " . $key . ": " . $value . "<br>";
    // }

    // exit;


    if (isset($_FILES["fileToUpload"]["tmp_name"]) && !empty($_FILES["fileToUpload"]["tmp_name"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

        // Faça algo com $check aqui, como validar o tipo e as dimensões da imagem
    } else {
        // Não foi enviado nenhum arquivo, trate esse caso adequadamente
        echo "Nenhum arquivo foi enviado.";
        $noFile = "user.png";
    }



    if ($check !== false) {
        echo "O arquivo é uma imagem - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        header("Location: ../../profile.php?msgStatus=editUserError");
        $uploadOk = 0;
    }

    if (file_exists($targetFile)) {
        //echo "Desculpe, o arquivo já existe.";
        $uploadOk = 0;
    }

    // Verifique o tamanho da imagem (opcional)
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        //echo "Desculpe, a imagem é muito grande.";
        $uploadOk = 0;
    }

    $userId = "";

    $userId = $_POST["photoUserId"];


    $targetFile = $targetDirectory . $userId . '_' . basename($_FILES["fileToUpload"]["name"]);

    // Verifique se $uploadOk está definido como 0 por um erro
    if ($uploadOk == 0) {
        echo "Desculpe, sua imagem não foi enviada.";
        // Se tudo estiver correto, tente fazer o upload do arquivo
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
            // echo "A imagem " . basename($_FILES["fileToUpload"]["name"]) . " foi enviada com sucesso.";
        } else {
            echo "Desculpe, ocorreu um erro ao fazer o upload da imagem.";
        }
    }

    if ($noFile == "") {
        $image_name = $userId . '_' . basename($_FILES["fileToUpload"]["name"]);
    } else {
        $image_name = $noFile;
    }

    include "../../core/connection.php";

    $sqlCheck = "SELECT user_photo FROM users WHERE id = $userId";
    $resultCheck = $conn->query($sqlCheck);
    $rowCheck = $resultCheck->fetch_assoc();
    $currentFileName = $rowCheck['user_photo'];


    if ($currentFileName != $image_name) {

        $sql = "UPDATE users SET user_photo = '$image_name' WHERE id = $userId";
        $result = $conn->query($sql);

        if ($conn->affected_rows > 0) {

            header("Location: ../../profile.php?userID=" . $userId . "&msgStatus=editPhotoSuccess");
            // header("Location: ../../users.php");
            exit;
        } else {
            echo "Erro ao criar registro: " . $conn->error;
            header("Location: ../../profile.php?msgStatus=editUserError");
            exit;
        }
    } else {
        header("Location: ../../profile.php?userID=" . $userId . "&msgStatus=editPhotoExist");
        exit;
    }
}

$conn->close();
