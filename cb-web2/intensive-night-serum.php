<?php
  $pid = 'intensivenightserum';
  $page_title = 'Intensive Night Serum';
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
										<img src="images/products/other products/intensivenightserum-1.png" alt="" />
									</div>
									<div class="tab-pane fade" id="image-two" role="tabpanel" aria-labelledby="image-two-tab">
										<img src="images/products/other products/intensivenightserum-2.png" alt="" />
									</div>
								</div>
								<ul class="nav nav-tabs" id="imageTab" role="tablist">
									<li class="nav-item">
										<a class="nav-link active" id="image-one-tab" data-toggle="tab" href="#image-one" role="tab" aria-controls="image-one" aria-selected="true">
											<img src="images/products/other products/intensivenightserum-1.png" alt="" />
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="image-two-tab" data-toggle="tab" href="#image-two" role="tab" aria-controls="image-two" aria-selected="false">
											<img src="images/products/other products/intensivenightserum-2.png" alt="" />
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
									<h1>Intensive Night Serum</h1>
								</div>
								<div class="product-rating">
                  <a href="#" id="goToReview"><img class="star_review_wrap" src="images/img-rating-star.png" alt=""><span id="reviewWord"></span></a>
								</div>
								<div class="product-info">
									<p>This deep wrinkle night serum uses innovative technology that helps you achieve a flawless, youthful-looking complexion</p>
								</div>
								<div class="product-price">
									<p>Price: <span>$87</span></p>
								</div>
								<div class="product-add-items">
									<div class="row">
										<div class="col-6">
											<div class="product-quantity">
												<button type="button" class="btn btn-number" data-type="minus" disabled="disabled" data-field="quant[1]">
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
							<p><b>Intensive Night Serum</b> is a powerful, concentrated night serum that contains the strongest ingredients to effectively reduce the appearance of fine lines and wrinkles without risky side effects. This groundbreaking formula is deeply moisturizing and contains the peptides, natural extracts and nourishing ingredients to help in creating a younger-looking complexion.</p>
							<h4>Features</h4>
							<ul>
								<li>Powerful concentration of ingredients to improve results.</li>
								<li>Reduces the appearance of fine lines and wrinkles.</li>
								<li>Works with your skin’s overnight regenerating processes to deliver maximum results.</li>
								<li>Moisturizing - won’t dry out skin like other wrinkle reducing creams.</li>
								<li>Increase the look of skin elasticity over time.</li>
							</ul>
							<h4>Details</h4>
							<ul>
								<li>1 FL OZ / 30 ML</li>
								<li>CRUELTY-FREE</li>
								<li>MANUFACTURED IN THE USA</li>
							</ul>
							<h4>Ingredient List</h4>
							<p>Water, Ethoxydiglycol, Lycium Barbarum (Goji) Fruit Extract, Dimethylacrylamide/Acrylic Acid/Polystyrene Ethyl Methacrylate Copolymer, Palmitoyl Hexapeptide-14, Phenoxyethanol, Sodium Benzoate, Butylene Glycol, Panax Ginseng Root Extract, Polysilicone-11, Portulaca Oleracea Extract, Glycerin, Centella Asiatica Extract, Barium Sulfate, Cyclopentasiloxane, Aminobutyric Acid, PEG-8 Dimethicone, Isononyl Isononanoate, Caprylic/Capric Triglyceride, Sodium Acrylates Copolymer, Hexapeptide-48 HCI, Lecithin (Phospholipids), sH-Ogliopeptide- 1 (Epidermal Growth Factor) , Disodium Acetyl Glucosamine Phosphate, Carthamus Tinctorius (Safflower) Seed Oil, Avena Sativa (Oat) Extract, Ahnfeltia Concinna (Algae) Extract, Allantoin, Aloe Vera, Camellia Sinesis (Green Tea) Extract, Carica Papaya (Papaya) Fruit Extract, Caviar extract, Chamomilla Recutita (Matricaria) Flower Extract, Copper Gluconate, Ethylhexylglycerin, Hydrastis Canadensis (Golden Seal) Extract, Magnesium Aspartate, Propylene Glycol, Silk Amino Acids, Sodium Hyaluronate, Symphytum Officinale (Comfrey) Extract, Tetrasodium Glutamate Diacetate, Tocopherol (Vitamin E), Xanthan Gum, Zinc Gluconate.</p>
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
									<span>WHAT IS INTENSIVE NIGHT SERUM?</span>
									<p>Intensive Night Serum is a powerful anti-aging formula that works with your skin on a cellular level to help prevent and reduce visible signs of aging while you sleep. This groundbreaking formula is deeply moisturizing and contains the peptides, natural extracts, and growth factors that your skin needs in order to build new cells for a younger-looking complexion.</p>
									<div class="separator"></div>
									<span>HOW DOES INTENSIVE NIGHT SERUM WORK?</span>
									<p>Intensive Night Serum uses safe, effective, revolutionary ingredients in concentrations that begin producing results quickly. Since intensive night serum is a serum instead of a cream, active compounds are able to penetrate and absorb into skin more deeply for an even treatment that addresses the root causes of aging at a cellular level.</p>
									<div class="separator"></div>
									<span>WHY SHOULD I CHOOSE INTENSIVE NIGHT SERUM?</span>
									<p>Many wrinkle treatments contain retinol, which causes irritation, flaking, and scaling in many people. Choosing Intensive Night Serum will provide your skin with deep nourishment from revolutionary compounds that do not result in similar side effects. Intensive night serum contains ingredients such as:</p>
									<p><i>Grant-X</i>, a silicone and extract blend that mildly relaxes skin (much like botox), to help reduce the appearance of lines and wrinkles.</p>
									<p><i>Epidermal Growth Factor (EGF)</i>, which facilitates the synthesis of DNA to help generate new skin cells, thus hydrating and repairing skin, delaying signs of aging, and reducing the appearance of fine lines and wrinkles.</p>
									<p><i>InvisaSkin Matrix Rebuilder-O</i>, a combination of peptides and natural goji berry extract that helps rebuilds the skin’s built-in support system to assist in the formation of new collagen and the improvement of elasticity, resulting in a firmer, younger-looking appearance.</p>
									<p><i>Hyaluronic Acid</i>, which uses the skin’s own natural moisture to give wrinkles a plumped up look from the inside out.</p>
									<div class="separator"></div>
									<span>HOW DO I USE INTENSIVE NIGHT SERUM?</span>
									<p>Blend nightly into clean skin in a circular, upward motion and allow to absorb. Concentrate on wrinkle "problem" areas like forehead, between eyebrows, laugh lines and above upper lip.</p>
									<div class="separator"></div>
									<span>CAN I USE INTENSIVE NIGHT SERUM DURING THE DAY?</span>
									<p>Intensive Night Serum is a safe and effective way to reduce the appearance of wrinkles, hydrate skin, and generate collagen production any time of day. For best results, we do recommend using intensive night serum at bedtime. Since sleep facilitates the skin’s natural healing and regenerating processes, this allows ingredients to work with the skin for maximum results.</p>
									<div class="separator"></div>
									<span>IS INTENSIVE NIGHT SERUM SUITABLE FOR ALL SKIN TYPES?</span>
									<p>Absolutely. Anyone can achieve visible, dramatic anti-aging benefits from Intensive Night Serum, without the risk of irritation or clogged pores.</p>
									<div class="separator"></div>
									<span>WHAT IS THE RECOMMENDED AGE GROUP FOR INTENSIVE NIGHT SERUM?</span>
									<p>Anyone can use Intensive Night Serum! The safe, effective formula can be used to help prevent and reduce the visible signs of aging, making it an excellent choice for those looking to stop wrinkles before they start, as well as those who want to minimize the appearance of existing lines and wrinkles.</p>
									<div class="separator"></div>
									<span>I HAVE SENSITIVE SKIN, CAN I STILL USE INTENSIVE NIGHT SERUM?</span>
									<p>Yes! Intensive Night Serum uses safe, effective ingredients and is appropriate for even the most sensitive skin types.</p>
									<div class="separator"></div>
									<span>WHAT DOES IT FEEL LIKE TO USE INTENSIVE NIGHT SERUM?</span>
									<p>Intensive Night Serum has a pleasant, silky texture that glides evenly over skin. Since it absorbs quickly, it will not leave an uncomfortable or unsightly residue or film on the skin.</p>
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
