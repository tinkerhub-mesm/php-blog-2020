<?php 
function authChecker()
{
    
    include 'auth.php';
    if (authUser('publisher',$_SESSION["authUsername"], $_SESSION["authPassword"])) {
        
      }else{
        header("Location: http://localhost/tinkerhub/admin/");
      }
}

?>