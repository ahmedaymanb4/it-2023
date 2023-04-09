<?php

$pageTitle = "Admin Dashboard";
$cssFile = "index.admin.css";

include '../init.php';
include './includes/functions/product/index.php';

$products = getThree($conn);

?>

<main class="container">
    <h1 class="display-4 text-center" style="margin-bottom: 6rem;">Admin Dashboard</h1>
    <div class= "row">
        <div class="col-lg-6">
            <div class="card text-dark bg-light mb-3" style="max-width: 80%; margin: 3rem auto;">
                <div class="card-header">Users</div>
                <div class="card-body">
                    <h5 class="card-title">Total users: 10</h5>
                    <ul class="adminList">
                        <li>
                            <p>Ahmed</p> <div><a class="btn btn-primary">View</a></div>
                        </li>
                        <li>
                            <p>Mohamed</p> <div><a class="btn btn-primary">View</a></div>
                        </li>
                        <li>
                            <p>Ali</p> <div><a class="btn btn-primary">View</a></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card text-dark bg-light mb-3" style="max-width: 80%; margin: 3rem auto;">
                <div class="card-header">Products</div>
                <div class="card-body">
                    <h5 class="card-title">Total products: <?php echo getCount($conn); ?></h5>
                    <h6>Latest products:</h6>
                    <ul class="adminList">
                        <?php 
                        if($products) {
                            while($product = $products->fetch_assoc()) {
                                echo "<li>";
                                echo "<p>" . $product['name'] . "</p> <div><a class='btn btn-primary'>View</a></div>";
                                echo "</li>";
                            }
                        } else {
                            echo "<p>☹️ No products found!</p>";
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card text-dark bg-light mb-3" style="max-width: 80%; margin: 3rem auto;">
                <div class="card-header">Categories</div>
                <div class="card-body">
                    <h5 class="card-title">Total categories: 4</h5>
                    <ul class="adminList">
                        <li>
                            <p>Home</p> <div><a class="btn btn-primary">View</a></div>
                        </li>
                        <li>
                            <p>Electronic</p> <div><a class="btn btn-primary">View</a></div>
                        </li>
                        <li>
                            <p>Clothes</p> <div><a class="btn btn-primary">View</a></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card text-dark bg-light mb-3" style="max-width: 80%; margin: 3rem auto;">
                <div class="card-header">Orders</div>
                <div class="card-body">
                    <h5 class="card-title">Total orders: 5</h5>
                    <ul class="adminList">
                        <li>
                            <p>id: 2321</p> <div><a class="btn btn-primary">View</a></div>
                        </li>
                        <li>
                            <p>id: 2342</p> <div><a class="btn btn-primary">View</a></div>
                        </li>
                        <li>
                            <p>id: 545654</p> <div><a class="btn btn-primary">View</a></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
include './includes/templates/footer.php';
?>