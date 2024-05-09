<!DOCTYPE html>
<?php

   require_once($_SERVER['DOCUMENT_ROOT'] . '/car/productDetail.php');
?>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Product Card/Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
</head>

<body>
	<form name="f1" action = "/car/Shopping-Cart-UI-main/cart.php" onsubmit = "return validation()" method = "get">  
    <div class="card-wrapper">
        <div class="card">
            <!-- card left -->
            <div class="product-imgs">
                <div class="img-display">
                    <div class="img-showcase">
                        <img src="shoes_images/shoe_1.jpg" alt="shoe image">
                        <img src="shoes_images/shoe_2.jpg" alt="shoe image">
                        <img src="shoes_images/shoe_3.jpg" alt="shoe image">
                        <img src="shoes_images/shoe_4.jpg" alt="shoe image">
                    </div>
                </div>
                <div class="img-select">
                    <div class="img-item">
                        <a href="#" data-id="1">
                            <img src="shoes_images/shoe_1.jpg" alt="shoe image">
                        </a>
                    </div>
                    <div class="img-item">
                        <a href="#" data-id="2">
                            <img src="shoes_images/shoe_2.jpg" alt="shoe image">
                        </a>
                    </div>
                    <div class="img-item">
                        <a href="#" data-id="3">
                            <img src="shoes_images/shoe_3.jpg" alt="shoe image">
                        </a>
                    </div>
                    <div class="img-item">
                        <a href="#" data-id="4">
                            <img src="shoes_images/shoe_4.jpg" alt="shoe image">
                        </a>
                    </div>
                </div>
            </div>
            <!-- card right -->
            <div class="product-content">
                <br><br><br>
                <h2 class="product-title">PU Leather car seat Cover</h2>
                <a class="product-link">Brand: PegasusPremium</a>
                <div class="product-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                    <span><?php echo $sprRating; ?></span>
                </div>

                <div class="product-price">
                    <p class="new-price">Price: Rp.<span><?php echo $price; ?></span></p>
					<input type="hidden" id="price" name="price" value="<?php echo $price; ?>">
                </div>

                <div class="product-detail">
                    <h2>about this item: </h2>
                    <p>Complete set of car seat covers (Front Seat covers + Back Seat covers+ Neck pillows) in PU leatherette </p>
                    <p>Tear resistant. Anti fungus. Does not d-shape or become loose. Easy to clean and maintain</p>
                    <p>These seat covers are made by machines for perfect fitting, stitching and good finishing. It would be made specifically as per seats of your car for perfect fitting</p>
                    <ul>
                        <li>Color: <span>Biege</span></li>
                        <li>Available: <span>in stock</span></li>
                        <li>Material: <span>PegasusPremium</span></li>
                        <li>Shipping Area: <span>All over the world</span></li>
                        <li>Shipping Fee: <span>Free</span></li>
                    </ul>
                </div>

                <div class="purchase-info">
                    <input type="number" id="accCount" name="accCount" min="0" value="1">
                    <button type="submit" class="btn">
              Add to Cart <i class = "fas fa-shopping-cart"></i>
            </button>
                    <button type="submit" class="btn">Go to Cart</button>
					
                </div>

                <div class="social-links">
                    <p>Share At: </p>
                    <a href="#">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-pinterest"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <script src="script.js"></script>
	</form>
</body>

</html>