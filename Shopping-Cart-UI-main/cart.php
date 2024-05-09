<!DOCTYPE html>
<?php

   require_once($_SERVER['DOCUMENT_ROOT'] . '/car/product-detail-card-slider-master/addCart.Php'); 
?>
<html>

<head>
    <title>Shopping Cart UI</title>
    <link rel="stylesheet" type="text/css" href="./style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,900" rel="stylesheet">
</head>

<body>

    <div class="CartContainer">
        <div class="Header">
			<a href="..\par.php">HOME</a>
            <h3 class="Heading">Shopping Cart</h3>
            <h5 class="Action">Remove all</h5>
        </div>

        <div class="Cart-Items" <?php  if ($_SESSION["accCount"] < 1)echo "style='display: none;'"; ?> >
            <div class="image-box">
                <img src="images/D95-1_3433c2ae-e52f-4a3a-bb1f-5e89e679bb34_1024x1024@2x.jpg" style={{ height="120px" }} />
            </div>
            <div class="about">
                <h1 class="title">Car seat Cover</h1>
                <h3 class="subtitle">PegasusPremium</h3>
                <img src="images/veg.png" style={{ height="30px" }}/>
            </div>
            <div class="counter">
                <div class="btn">+</div>
                <div class="count"><?php echo $_SESSION["accCount"]; ?></div>
                <div class="btn">-</div>
            </div>
            <div class="prices">
                <div class="amount"><?php echo $_SESSION["totAccPrice"]; ?></div>

                <div class="remove"><u>Remove</u></div>
            </div>
        </div>

        <div class="Cart-Items pad" <?php  if ($_SESSION["sPrc"] < 1) echo "style='display: none;'"; ?> >
            <div class="image-box">
                <img src="images/basic1.png" style={{ height="120px" }} />
            </div>
            <div class="about">
                <h1 class="title">Service</h1>
                <h3 class="subtitle"><?php echo $_SESSION["sTyp"]; ?></h3>
                <img src="images/veg.png" style={{ height="30px" }}/>
            </div>
            <div class="counter">
                <div class="btn">+</div>
                <div class="count">1</div>
                <div class="btn">-</div>
            </div>
            <div class="prices">
                <div class="amount"><?php echo $_SESSION["sPrc"]; ?></div>
                <div class="remove"><u>Remove</u></div>
            </div>
        </div>
        <hr>
        <div class="checkout">
            <div class="total">
                <div>
                    <div class="Subtotal">Sub-Total</div>
                    <div class="items">2 items</div>
                </div>
                <div class="total-amount"><?php echo $_SESSION["totAccPrice"]+ $_SESSION["sPrc"]; ?></div>
            </div>
			<?php 
			$tot=($_SESSION["totAccPrice"]+ $_SESSION["sPrc"]);
			$_SESSION["tot"]=$tot;
			if(($_SESSION["totAccPrice"]+ $_SESSION["sPrc"])>0) {
				echo "<a href='../netbank.html?amt=$tot'><h1>Checkout</h1></a></div>";
			}
			else{
				echo "<h1>No items in Cart</h1>";
				echo "<a href='../par.html'><h1>Go to Home</h1></a></div>";
			}
		?>
    </div>
</body>

</html>