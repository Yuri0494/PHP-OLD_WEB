<?php
include "./TextDataBaseService.php";
TextDataBaseService::deletedPersonInTxtFolder($_POST, TextDataBaseService::$dataFolder);
header("Location: ../index.php");
exit();

?>