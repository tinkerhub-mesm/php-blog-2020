<?php
session_start();
?>
<?php 
include $_SERVER['DOCUMENT_ROOT'].'/tinkerhub/admin/auth/authChecker.php';
authChecker();
?>
<!DOCTYPE html>
<!-- This is dashboard -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tinkerhub Blog</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/main.css">
</head>
<body>
    
<nav class="navbar navbar-expand-md navbar-dark bg-primary">
    <a class="navbar-brand" href="#">Dashboard </a>
</nav>

<div class="container-fluid">
<table class="table">
    <thead>
        <tr>
            <th>Sino</th>
            <th>Title</th>
            <th>Descriptions</th>
        </tr>
    </thead>
    <tbody>
        <tr>
           
        </tr>
        
    </tbody>
</table>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
</body>
</html>