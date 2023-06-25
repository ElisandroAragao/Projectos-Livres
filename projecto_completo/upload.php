<?php
include_once('php/conexao.php');
//$file = $_FILES['imagem'];

if(isset($_FILES['imagem']) && !empty($_FILES['imagem'])){
    move_uploaded_file($_FILES['imagem'] ['tmp_name'], "uploads/files/".$_FILES['imagem'] ['name']);
    
    echo "Update realizado com sucesso!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Files</title>

    <link rel="stylesheet" href="../css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../js/bootstrap.bundle.min.js"/>
</head>
<body>
    <div class="row">
        <div class="col-md-4">
            <form action="#" method="post" enctype="multipart/form-data">
                <label for="file">Insira o Arquivo</label>
                <input type="file" name="imagem" accept="image/*" id="file" class="form-control">
                <button class="btn btn-success">Upload File</button>
            </form>
        </div>
    </div>
</body>
</html>