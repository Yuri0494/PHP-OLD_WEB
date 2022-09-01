<?php
include "./TextDataBaseService.php";
print_r($_POST);
TextDataBaseService::deletedPersonInTxtFolderForever($_POST, TextDataBaseService::$basketFolder);
header("Location: ../basket.php");
exit();

?>