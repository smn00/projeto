<?php
require '..\conexao_bd.php';

if(isset($_POST['fileName'])) {
  $fileName = $_POST['fileName'];
  $action = $_POST['action'];
  if(file_exists($fileName)) {
    if($action == "edit") {
      // Exibir o formulário de edição
      echo '<form action="edit_file.php" method="post">';
      echo '<input type="hidden" name="fileName" value="'.$fileName.'">';
      echo '<textarea name="fileContent">'.file_get_contents($fileName).'</textarea>';
      echo '<input type="submit" value="Salvar alterações">';
      echo '</form>';
    } else if($action == "delete") {
      // Apagar o arquivo
      unlink($fileName);
      echo "O arquivo $fileName foi apagado com sucesso!";
    }
  } else {
    echo "Arquivo $fileName não encontrado!";
  }
}
?>
