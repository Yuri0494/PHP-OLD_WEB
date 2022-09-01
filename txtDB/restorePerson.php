<?php
include "./TextDataBaseService.php";
TextDataBaseService::restorePersonInTxtFolder($_POST, TextDataBaseService::$basketFolder);
header("Location: ../basket.php");
exit();

?>