<?php 

$pageTitle = "Shop - Products page";
$cssFile = "products.css";
include 'init.php';
include 'includes/functions/product/index.php';

if(isset($_GET["search"])) {
    $search = $_GET["search"];
    $products = search($conn, $search);
} else {
    $products = find($conn);
}

?>

<main class="container">
    <h1 class="display-2 text-center">Products</h1>
    <?php 
        if(isset($_GET["search"])) { 
            echo "<h4 class='display-6'>Results for: ".$_GET["search"]."</h4>"; 
    } ?>
        <?php 
        if($products) {
            echo '<div class="row">';
            while($product = $products->fetch_assoc()) {
                echo '<div class="col-lg-4">';
                echo '<div class="card shadow" style="width: 18rem; height: 30rem; margin: 2rem auto;">';
                echo '<a href="/product.php?id='. $product["id"] .'">';
                echo '<img src="/public/images/'. $product["image"] .'" class="card-img-top" alt="...">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title text-center">'. $product["name"] .'</h5>';
                echo '<p class="card-text">💵: '. $product["price"] .'$</p>';
                echo '<p class="card-text">⭐: '. $product["rating"] .' out of 5</p>';
                echo '</div>';
                echo '</a>';
                echo '</div>';
                echo '</div>';
            }
            echo '</div>';
        } else {
            echo '<h1 class="text-center" style="margin-top: 25vh;">☹️ No products found!</h1>';
        }
        ?>
</main>

<?php include 'includes/templates/footer.php' ?>