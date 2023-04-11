<?php 

include 'includes/functions/getPageTitle.php'; 
include 'includes/functions/getCSSFile.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php getPageTitle() ?></title>
    <?php getCSSFile() ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="/public/css/icons.min.css" rel="stylesheet">
    <script src="/public/js/jquery-3.6.4.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary" style="margin-bottom: 1rem;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Shop</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/products.php">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/login.php">Login</a>
                </li>
            </ul>
            <form class="d-flex" action="/products.php" method="GET" role="search">
                <input class="form-control me-2" minlength="3" name="search" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit"><i class="fa-light fa-magnifying-glass"></i></button>
            </form>
        </div>
    </div>
</nav>