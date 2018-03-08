<?php
  $pid = 'advancedeye';
  $page_title = 'Advanced Eye Cream';
  include("scripts/conn_init.php");
  include("scripts/insert.php");
 ?>
<!DOCTYPE html>
<html lang="en">
  	<head>
    	<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
    	<meta name="author" content="">

      <title><?php echo $page_title;?></title>

<?php  include("header.php"); ?>

		<div class="product-detail-container">
			<div class="container">
				<div class="product-detail">
					<div class="row">
						<div class="col-md-7">
							<div class="product-detail-tabs">
								<div class="tab-content">
									<div class="tab-pane fade show active" id="image-one" role="tabpanel" aria-labelledby="image-one-tab">
										<img src="images/products/other products/adveye-1.png" alt="" />
									</div>
									<div class="tab-pane fade" id="image-two" role="tabpanel" aria-labelledby="image-two-tab">
										<img src="images/products/other products/adveye-2.png" alt="" />
									</div>
								</div>
								<ul class="nav nav-tabs" id="imageTab" role="tablist">
									<li class="nav-item">
										<a class="nav-link active" id="image-one-tab" data-toggle="tab" href="#image-one" role="tab" aria-controls="image-one" aria-selected="true">
											<img src="images/products/other products/adveye-1.png" alt="" />
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="image-two-tab" data-toggle="tab" href="#image-two" role="tab" aria-controls="image-two" aria-selected="false">
											<img src="images/products/other products/adveye-2.png" alt="" />
										</a>
									</li>
								</ul>
								<div class="clearfix"></div>
							</div>
						</div>
						<div class="col-md-5">
							<div class="product-detail-info">
								<div class="product-title">
									<!-- <h3>New!</h3> -->
									<h1>Advanced Eye Cream</h1>
								</div>
								<div class="product-rating">
                  <a href="#" id="goToReview"><img class="star_review_wrap" src="images/img-rating-star.png" alt=""><span id="reviewWord"></span></a>
								</div>
								<div class="product-info">
									<p>This transforming eye cream helps to hydrate, nourish and protect the sensitive eye area to give you younger-looking eyes</p>
								</div>
								<div class="product-price">
									<p>Price: <span>$67</span></p>
								</div>
								<div class="product-add-items">
									<div class="row">
										<div class="col-6">
											<div class="product-quantity">
												<button type="button" class="btn btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                  									-
              									</button>
												<input type="text" name="quant[1]" class="form-control input-number" value="1" min="1" max="10" autocomplete="off" />
												<button type="button" class="btn btn-number" data-type="plus" data-field="quant[1]">
                  									+
              									</button>
											</div>
										</div>
										<div class="col-6">
											<div class="product-btn">
												<!-- <input type="submit" class="btn" value="Add To Cart" /> -->
												<button type="button" class="btn" id="addToCart">Add To Cart</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="product-info-tabs">
					<ul class="nav nav-tabs" id="productInfoTab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="product-info-tab-one" data-toggle="tab" href="#info-tab-one" role="tab" aria-controls="info-tab-one" aria-selected="true">
								Description
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="product-info-tab-two" data-toggle="tab" href="#info-tab-two" role="tab" aria-controls="info-tab-two" aria-selected="false">
								Return Policy
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="product-info-tab-three" data-toggle="tab" href="#info-tab-three" role="tab" aria-controls="info-tab-three" aria-selected="false">
								FAQs
							</a>
						</li>
            <li class="nav-item">
              <a class="nav-link" id="product-info-tab-four" data-toggle="tab" href="#info-tab-four" role="tab" aria-controls="info-tab-four" aria-selected="false">
                Reviews
              </a>
            </li>
					</ul>
					<div class="tab-content">
            <div id="tabContent1" class="row collapseItemSM">
              <div class="proDetailTitleSM col-11">Description</div>
              <div class="plusminus col-1" data-toggle="collapse" data-target="#info-tab-one">+</div>
            </div>
						<div class="tab-pane fade show active" id="info-tab-one" role="tabpanel" aria-labelledby="product-info-tab-one">
							<h2>Product Description</h2>
							<p><b>Advanced Eye Cream</b> targets tired, aging eyes, leaving them vibrant, restored and youthful-looking. This innovative technology helps fight visible signs of aging by reducing the appearance of wrinkles around the eyes, resulting in smoother, more resilient, refreshed-looking eyes.</p>
							<h4>Features</h4>
							<ul>
								<li>Smoothes the appearance of fine lines and wrinkles.</li>
								<li>Reduces the look of puffiness under the eyes.</li>
								<li>Suitable for all skin types.</li>
								<li>Helps tighten sagging skin.</li>
							</ul>
							<h4>Details</h4>
							<ul>
								<li>0.59 FL OZ / 17.5 ML</li>
								<li>CRUELTY-FREE</li>
								<li>MANUFACTURED IN THE USA</li>
							</ul>
							<h4>Ingredient List</h4>
							<p>Water, Aloe Barbadensis Leaf Extract, Hydrogenated Vegetable Oil (Plant Derived), Isononyl Isononanoate, Glycerin, Butylene Glycol, Darutoside (Holy Herb), Albizia Julibrissin (Persian Silk Tree) Bark Extract, Sodium Acrylates Copolymer, Lecithin (Phospholipids), Chrysin, N-Hydroxysuccinimide, Palmitoyl Oligopeptide, Steareth-20, Palmitoyl Tetrapeptide-7, Polymethylsilsesquioxane, Asparagopsis Armata (Red Algae) Extract, Ascophyllum Nodostrum (Knotted Wrack) Extract, Sorbitol, Diamond Powder, Avena Sativa (Oat) Extract, Allantoin, Aloe Vera, Butyrospermum Parkii (Shea) Butter, Chamomilla Recutita (Matricaria) Flower Extract, Ethylhexylglycerin, Everlasting (Helichrysum Arenarium) Extract, Fragrance (Parfum), Phenoxyethanol, Symphytum Officinale Extract, Tetrasodium Glutamate Diacetate, Tocopherol (Vitamin E), Urtica Dioica (Nettle) Extract, Acetyl hexapeptide-3.</p>
						</div>
            <div id="tabContent2" class="row collapseItemSM">
              <div class="proDetailTitleSM col-11">Return Policy</div>
              <div class="plusminus col-1" data-toggle="collapse" data-target="#info-tab-two">+</div>
              <div class="clearfix"></div>
            </div>
						<div class="tab-pane fade" id="info-tab-two" role="tabpanel" aria-labelledby="product-info-tab-two">
							<div class="row">
								<div class="col-xl-12">
									<h2>Return Policy</h2>
								</div>
								<div class="col-xl-2 col-lg-3 col-md-3">
									<img src="images/img-return-policy.png" alt="" />
								</div>
								<div class="col-xl-10 col-lg-9 col-md-9">
									<h4>60 Day Money-Back Guarantee</h4>
									<p>You have 60 days to try our products and see the results for yourself. If you are not 100% satisfied, simply contact us at <b>1-800-347-1558</b> or <b>support@citybeauty.com</b> and we will gladly refund your money. No questions asked.</p>
								</div>
							</div>
						</div>
            <div id="tabContent3" class="row collapseItemSM">
              <div class="proDetailTitleSM col-11">FAQs</div>
              <div class="plusminus col-1" data-toggle="collapse" data-target="#info-tab-three">+</div>
            </div>
						<div class="tab-pane fade" id="info-tab-three" role="tabpanel" aria-labelledby="product-info-tab-three">
							<div class="row">
								<div class="col-xl-2 col-lg-3 col-md-3">
									<h2>Frequently Asked Questions</h2>
								</div>
								<div class="col-xl-10 col-lg-9 col-md-9">
									<span>WHAT IS ADVANCED EYE CREAM?</span>
									<p>Advanced Eye Cream is an anti-aging eye cream suitable for all ages and skin types. This advanced blend of antioxidants, peptides and multivitamins helps restore the skin's youthful radiance by combating the visible signs of aging. It is a powerful nourishing formula that boosts collagen and elastin production while rehydrating the sensitive eye area to heal, strengthen and protect the skin.</p>
									<div class="separator"></div>
									<span>WHAT DOES ADVANCED EYE CREAM DO?</span>
									<p>The skin around your eyes is 4 to 10x thinner than the skin on the rest of your face. That means the area should be treated with extra care... And some face creams may be too thick, heavy, or harsh to really benefit this sensitive skin.<br><br>The skin around your eyes also has very few oil glands, which means it is not receiving the hydration that it needs to stay healthy. Advanced Eye Cream moisturizes, replenishes, and provides protection from external damage, while being gentle enough to benefit sensitive eye-area skin without irritation.</p>
									<div class="separator"></div>
									<span>HOW DO I USE ADVANCED EYE CREAM?</span>
									<p>Apply a pea-sized amount around the eye area and pat gently, without pulling onto skin, until absorbed. Use 1-2 times daily.</p>
									<div class="separator"></div>
									<span>WHAT ARE THE MAIN INGREDIENTS IN ADVANCED EYE CREAM?</span>
									<p><i>Beautifeye<sup>TM</sup></i>: Protects, strengthens and improves the look of dermis properties on sagging upper eyelids as it reduces the appearance of uneven coloration and fatigue.</p>
									<p><i>Aldavine<sup>TM</sup>5X</i>: Prevents the appearance of premature aging, increasing the look of skin elasticity & resiliency. Also has a significant action in the reduction of the appearance of dark circles and under eye bags.</p>
									<p><i>CP Oat Extract</i>: Rich in proteins, lipids and beta glucan and contains many anti-irritant properties, making it ideal for any skin type. Extract helps absorb excess oil and bacteria from skin while exfoliating dead skin cells.</p>
									<p><i>Granpowder Lumiere</i>: Formulated with Diamond Powder (DP), it gives the skin a healthy, “Soft-Focus Effect,” decreasing the appearance of fine lines and wrinkles.</p>
									<div class="separator"></div>
									<span>WHAT IS THE RECOMMENDED AGE GROUP FOR ADVANCED EYE CREAM?</span>
									<p>Absolutely anyone can use Advanced Eye Cream! It is always important to moisturize, and Advanced Eye Cream has the dual benefit of:<br><br>Reducing the visible signs of aging<br>Actively working to prevent any future skin damage as well!<br><br>This means that women with more mature skin will begin to notice a visible difference in the appearance of fine lines and wrinkles, and younger women can benefit from strengthening and protecting their skin from future signs of aging.</p>
									<div class="separator"></div>
									<span>I HAVE SENSITIVE SKIN, CAN I STILL USE ADVANCED EYE CREAM?</span>
									<p>Yes. Advanced Eye Cream is formulated only with ingredients that do not irritate skin. If you have exceptionally sensitive skin and tend to react to even the gentlest products, we recommend doing a patch test on the inside of your elbow 24 hours before proceeding with advanced eye cream as your everyday eye cream.</p>
									<div class="separator"></div>
									<span>WHAT DOES IT FEEL LIKE TO USE ADVANCED EYE CREAM?</span>
									<p>Advanced Eye Cream is a rich formula with a lightweight feel. Its creamy consistency glides over the skin effortlessly without leaving a residue. Immediately after application your skin will seem healthier and feel silky smooth. The hydration instantly begins improving your skin tone and clarity, and leaves you feeling relaxed and refreshed.</p>
									<div class="separator"></div>
									<span>I HAVE TINY WHITE BUMPS UNDERNEATH MY EYES. WILL ADVANCED EYE CREAM HELP WITH THAT?</span>
									<p>Yes. Those white bumps are called milia, and they are harmless cysts caused by dry, dead cells that get trapped under your skin. The best way to remove them (and prevent them from occurring again in the future) is by using an eye cream to return moisture to the area and prevent the buildup of dry cells.</p>
									<div class="separator"></div>
									<span>DOES CITY BEAUTY<sup>TM</sup> TEST ON ANIMALS?</span>
									<p>Never. We at city beauty<sup>TM</sup> are committed to remaining cruelty-free and will never test our products on animals.</p>
								</div>
							</div>
						</div>
            <div id="tabContent4" class="row collapseItemSM">
              <div class="proDetailTitleSM col-11">Reviews</div>
              <div class="plusminus col-1" data-toggle="collapse" data-target="#info-tab-four">+</div>
            </div>
						<div class="tab-pane fade" id="info-tab-four" role="tabpanel" aria-labelledby="product-info-tab-four">
							<div class="row">
                <div class="col-12"><h2>Reviews</h2></div>
                <?php include('scripts/comments.php'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

    <?php include ("footer.php"); ?>
    <script src="js/products.js"></script>
    </body>
</html>
