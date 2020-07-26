<?php 
function authUser($tableName, $authUsername, $authPassword)
{
    include_once($_SERVER['DOCUMENT_ROOT'].'/tinkerhub/admin/mysql/mysqlconnect.php');
    $sql = "SELECT * FROM $tableName WHERE username='$authUsername' AND password='$authPassword'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        return true;
    }else{
        return false;
    } 
}

?>