<?php include "config.php"; ?>
<!DOCTYPE html>
<html>
<head>
<title>Restaurant</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
body{
    background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
    color:white;
}
.card{
    background:#1c2b4a;
    border:1px solid #00d4ff;
}
.nav-btn{
    margin:5px;
}
</style>
</head>
<body class="container py-5">

<h1 class="text-center text-info mb-4">RESTAURANT</h1>

<div class="text-center mb-4">
    <a href="customers.php" class="btn btn-info nav-btn">Customers</a>
    <a href="menu.php" class="btn btn-info nav-btn">Menu Items</a>
    <a href="orders.php" class="btn btn-info nav-btn">Orders</a>
</div>

</body>
</html>