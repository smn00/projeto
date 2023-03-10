<?php
require '..\conexao_bd.php';

if(isset($_FILES['fileToUpload'])) {
  $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  $fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  // Permite apenas determinados tipos de arquivo
  if($fileType != "pdf" && $fileType != "doc" && $fileType != "docx"
  && $fileType != "xls" && $fileType != "xlsx") {
    echo "Desculpe, apenas arquivos PDF, Word e Excel são permitidos.";
    $uploadOk = 0;
  }
  // Verifica se o arquivo já existe
  if (file_exists($target_file)) {
    echo "Desculpe, o arquivo já existe.";
    $uploadOk = 0;
  }
  // Verifica o tamanho do arquivo
  if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "Desculpe, seu arquivo é muito grande.";
    $uploadOk = 0;
  }
  // Verifica se houve algum erro durante o upload
  if ($uploadOk == 0) {
    echo "Desculpe, seu arquivo não foi enviado.";
  } else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      echo "O arquivo ". basename( $_FILES["fileToUpload"]["name"]). " foi enviado com sucesso.";
    } else {
      echo "Desculpe, houve um erro ao enviar seu arquivo.";
    }
  }
}
?>
