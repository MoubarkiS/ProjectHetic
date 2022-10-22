<?PHP
//phpinfo();
?>
<?php

try {
   $strConnection = 'mysql:host = localhost; dbname=projet';
   $pdo = new PDO ($strConnection, 'root', '');
}
catch (PDOException $e){
    $msg = 'ERREUR PDO dans ' . $e-> getMessage();
    die ($msg);

}

?>


