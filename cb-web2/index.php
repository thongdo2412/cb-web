<?php include("scripts/conn_init.php");?>
<!DOCTYPE html>
<html lang="en">
  	<head>
    	<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
    	<meta name="author" content="">

        <title>Welcome to City Beauty</title>

<?php  include("header.php"); ?>

		<div class="slider-container">
			<div class="flex-container">
				<div class="loader"></div>
				<div class="flexslider">
					<ul class="slides">
						<li>
							<img src="images/slider/slide01.jpg" alt="" />
							<div class="flex-caption">
								<div class="container">
									<div class="info">
										<h1>City Lips®</h1>
										<h2>Plump, Hydrate & Repair</h2>
										<p><b class="text-uppercase">An award-winning treatment</b> infused with revolutionary technology for instant and long-lasting results.</p>
										<a href="city-lips.php" class="btn btn-bg-white">Learn More</a>
									</div>
								</div>
							</div>
						</li>
						<!--<li>
							<img src="images/slider/slide01.jpg" alt="" />
							<div class="flex-caption">
								<div class="container">
									<div class="info">
										<h1>City Lips</h1>
										<h2>Plump, Hydrate & Repair</h2>
										<p><b class="text-uppercase">An award-winning treatment</b> infused with revolutionary technology for instant and long-lasting results.</p>
										<a href="#" class="btn btn-bg-white">Learn More</a>
									</div>
								</div>
							</div>
						</li>
						<li>
							<img src="images/slider/slide01.jpg" alt="" />
							<div class="flex-caption">
								<div class="container">
									<div class="info">
										<h1>City Lips</h1>
										<h2>Plump, Hydrate & Repair</h2>
										<p><b class="text-uppercase">An award-winning treatment</b> infused with revolutionary technology for instant and long-lasting results.</p>
										<a href="#" class="btn btn-bg-white">Learn More</a>
									</div>
								</div>
							</div>
						</li>-->
					</ul>
				</div>
			</div>
		</div>
		<div class="featured-products-container">
			<div class="container">
				<div class="featured-products-title">
					<h1>Featured Products</h1>
				</div>
				<div class="featured-products-carousel">
					<div id="featured-products-carousel" class="owl-carousel owl-theme">
						<div class="item">
							<div class="item-image">
								<a href="city-lips.php">
									<img src="images/products/img-product01.png" alt="" />
									<img src="images/products/img-product-hover01.png" class="hovered" alt="" />
								</a>
							</div>
							<div class="item-title">
								<a href="city-lips.php">City Lips</a>
							</div>
							<div class="item-rating">
                <a href="city-lips.php#review" class="goToProductPage"><img class="star_review_wrap" src="images/img-rating-star.png" alt=""><span class="review_word"><?php echo getProductCount('citylips',$link,$connErr)." reviews";?></span></a>
							</div>
							<div class="item-info">
								<p>This lip plumper instantly promotes a look of fullness & hydration while reducing the appeara...</p>
								<a href="city-lips.php">Learn More</a>
							</div>
						</div>
						<div class="item">
							<div class="item-image">
								<a href="under-eye-recovery.php">
									<img src="images/products/img-product02.png" alt="" />
									<img src="images/products/img-product-hover02.png" class="hovered" alt="" />
								</a>
							</div>
							<div class="item-title">
								<a href="under-eye-recovery.php">Under Eye Recovery</a>
							</div>
							<div class="item-rating">
                <a href="under-eye-recovery.php#review" class="goToProductPage"><img class="star_review_wrap" src="images/img-rating-star.png" alt=""><span class="review_word"><?php echo getProductCount('undereye',$link,$connErr)." reviews";?></span></a>
							</div>
							<div class="item-info">
								<p>This eye treatment helps reduce the appearance of dark circles and puffiness for brighter, fresher...</p>
								<a href="under-eye-recovery.php">Learn More</a>
							</div>
						</div>
						<div class="item">
							<div class="item-image">
								<a href="multi-action-sculpting-cream.php">
									<img src="images/products/img-product03.png" alt="" />
									<img src="images/products/img-product-hover03.png" class="hovered" alt="" />
								</a>
							</div>
							<div class="item-title">
								<a href="multi-action-sculpting-cream.php">Multi-action Sculpting Cream</a>
							</div>
							<div class="item-rating">
                <a href="multi-action-sculpting-cream.php#review" class="goToProductPage"><img class="star_review_wrap" src="images/img-rating-star.png" alt=""><span class="review_word"><?php echo getProductCount('multiactionsculptingcream',$link,$connErr)." reviews";?></span></a>
							</div>
							<div class="item-info">
								<p>This sculpting cream targets loose or sagging skin by giving the appearance of tightened, lifted and...</p>
								<a href="multi-action-sculpting-cream.php">Learn More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="new-arrival-container">
			<div class="container">
				<div class="new-arrival">
					<div class="imagebox">
						<img src="images/img-new-arrivals.png" alt="" />
					</div>
					<div class="infobox">
						<h2>New!</h2>
						<h1>Under Eye <br/>Recovery</h1>
						<a href="under-eye-recovery.php" class="btn">Shop Now</a>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<div class="home-promo-container">
			<div class="container">
				<div class="home-promo">
					<div class="row">
						<div class="col-md-6">
							<a href="products.php" class="home-promo-item">
								<img src="images/img-home-promo01.png" alt="" />
								<div class="info-bottom">
									<h1>Cutting Edge <span>Creativity</span></h1>
								</div>
							</a>
						</div>
						<div class="col-md-6">
							<a href="intensive-night-serum.php" class="home-promo-item">
								<img src="images/img-home-promo02.png" alt="" />
								<div class="info-top">
									<h2>Spotlight</h2>
									<h1>Intensive Night Serum</h1>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>

    <?php
      include ("footer.php");
      function getProductCount($pagename,$linkSQL,$connErrSQL){
          $count = 0;
          if (!$connErrSQL){
            //prepare query
            if($stmt = $linkSQL->prepare("SELECT `rateid` FROM `cc_$pagename` WHERE `approved` = 1 AND `rate` >= 2")){
              $stmt->execute();
              $stmt->store_result();
              $count = $stmt->num_rows;
              $stmt->free_result();
              $stmt->close();
            }
          }
        return $count;
      }
    ?>
    </body>
</html>
