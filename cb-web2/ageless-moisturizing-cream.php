<?php
  $pid = 'agelessmoisturizing';
  $page_title = 'Ageless Moisturizing Cream';
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
										<img src="images/products/other products/agelessmoisturizingcream-1.png" alt="" />
									</div>
									<div class="tab-pane fade" id="image-two" role="tabpanel" aria-labelledby="image-two-tab">
										<img src="images/products/other products/agelessmoisturizingcream-2.png" alt="" />
									</div>
								</div>
								<ul class="nav nav-tabs" id="imageTab" role="tablist">
									<li class="nav-item">
										<a class="nav-link active" id="image-one-tab" data-toggle="tab" href="#image-one" role="tab" aria-controls="image-one" aria-selected="true">
											<img src="images/products/other products/agelessmoisturizingcream-1.png" alt="" />
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="image-two-tab" data-toggle="tab" href="#image-two" role="tab" aria-controls="image-two" aria-selected="false">
											<img src="images/products/other products/agelessmoisturizingcream-2.png" alt="" />
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
									<h1>Ageless Moisturizing Cream</h1>
								</div>
								<div class="product-rating">
                  <a href="#" id="goToReview"><img class="star_review_wrap" src="images/img-rating-star.png" alt=""><span id="reviewWord"></span></a>
                </div>
								<div class="product-info">
									<p>This moisturizing cream replenishes skin with intense hydration to restore the luminosity that diminishes over time for a younger-looking, more radiant complexion</p>
								</div>
								<div class="product-price">
									<p>Price: <span>$59</span></p>
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
							<p><b>Ageless Moisturizing Cream</b> is a new-age technology that helps to hydrate and rejuvenate skin by using powerful peptide technology that helps reduce the appearance of visible aging, giving you smoother, luxurious-looking skin.</p>
							<h4>Features</h4>
							<ul>
								<li>Boosts collagen production.</li>
								<li>Reduces the look of fine lines and wrinkles.</li>
								<li>Quick absorption.</li>
								<li>Suitable for all skin types.</li>
								<li>Infused with Vitamin C to help fight the appearance of age spots and discoloration</li>
							</ul>
							<h4>Details</h4>
							<ul>
								<li>1.69 FL OZ / 50 ML</li>
								<li>CRUELTY-FREE</li>
								<li>MANUFACTURED IN THE USA</li>
							</ul>
							<h4>Ingredient List</h4>
							<p>Water, Glycerin, Glyceryl Stearate, Cyclopentasiloxane, Biosaccharide Gum-1, Palmitoyl Tripeptide-38, Acetyl Hexapeptide-8, Hordeum Distichon (Barley) Extract, Bambusa Vulgaris Leaf/Stem Extract, Butyrospermum Parkii (Shea) Butter, Algae Extract, Mangifera Indica (Mango) Seed Butter, Saccharomyces/Xylinum/Black Tea Ferment, Pisum Sativum (Pea) Extract, Phellodendron Amurense Bark Extract, Santalum Album (Sandalwood) Extract, Artemisia Vulgaris Extract, Camellia Oleifera Leaf Extract, Ginkgo Biloba Extract, Cetyl Myristate, Ethylene/Acrylic Acid Copolymer, Isohexadecane, SD Alcohol 40-B, Squalane, Cetearyl Alcohol, Sodium Stearoyl Lactylate, Cetyl Alcohol, Dimethicone/Vinyl Dimethicone Crosspolymer, Glucosamine HCL, Tetrahexydecyl Ascorbate, Dimethicone, Xanthan Gum,  Carbomer, Menthyl Lactate, Stearyl Glycyrrhetinate, Tocopheryl Acetate, Tetrasodium Glutamate Diacetate, Hydroxypropyl Cyclodextrin, Hydroxyethylcellulose, Butylene Glycol, Hexylene Glycol, Ethylhexylglycerin, Caprylyl Glycol, Phenoxyethanol, Fragrance.</p>
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
									<span>WHAT IS AGELESS MOISTURIZING CREAM ANTI AGING MOISTURIZER?</span>
									<p>Ageless moisturizing cream anti-aging moisturizer is a daily moisturizer that intensely hydrates skin for a softer, smoother, more youthful complexion.</p>
									<div class="separator"></div>
									<span>HOW DOES AGELESS MOISTURIZING CREAM WORK?</span>
									<p>Unlike other moisturizers, Ageless Moisturizing Cream uses cutting-edge peptide technology that helps increase firmness, speeds up cell renewal, reduces the look of wrinkles, and infuses new life into your skin. Our multi-action amino acid blend enhances collagen synthesis and increases the production of hyaluronic acid to improve the elasticity and smoothness of the skin, intensely hydrates, and prevents damage from external stress.</p>
									<div class="separator"></div>
									<span>WHY SHOULD I CHOOSE AGELESS MOISTURIZING CREAM?</span>
									<p>Ageless Moisturizing Cream isn’t just a moisturizer – it’s an anti-aging treatment that helps hydrate and rejuvenate skin while combating signs of aging and preventing future damage from occurring. Ageless moisturizing cream uses ingredients like:</p>
									<p><i>Oligopeptides</i> to support collagen synthesis and the skin’s dermal matrix for increased firmness and tone.</p>
									<p><i>Acetyl Hexapeptide-3</i>, a unique new peptide that safely reduces the degree of existing facial wrinkles and can help defend against future damage and development of wrinkles.</p>
									<p><i>Kombucha</i> naturally helps restore skin volume and thickness while enhancing circulation and skin health. Kombucha promotes fat cell differentiation and deposition - in other words, it helps “plump” facial cells in all the right places and helps increase circulation to restore a radiant glow and increase your skin's health.</p>
									<p><i>Celadrin®</i> is a patented, clinically proven ingredient that acts as an anti-inflammatory, protecting the skin from free radical damage and increasing the elasticity of the skin.</p>
									<p><i>Vitamin C</i> is known for its extraordinary antioxidant benefits. This proven age fighter helps stimulate collagen synthesis, reduce lines, plump wrinkles, reduce the appearance of sun damage, fade brown spots, and minimize redness and irritation due to inflammation.</p>
									<div class="separator"></div>
									<span>HOW DO I USE AGELESS MOISTURIZING CREAM?</span>
									<p>Apply to clean, dry skin each morning and night. Spread a generous layer to entire face and neck, particularly in the "problem" areas such as forehead, crow's feet, between the eyebrows and above the upper lip.</p>
									<div class="separator"></div>
									<span>IS AGELESS MOISTURIZING CREAM SUITABLE FOR ALL SKIN TYPES?</span>
									<p>Yes. Ageless Moisturizing Cream uses a powerful blend of safe ingredients that are gentle enough for all skin types, including sensitive skin.</p>
									<div class="separator"></div>
									<span>WHAT IS THE RECOMMENDED AGE GROUP FOR AGELESS MOISTURIZING CREAM?</span>
									<p>Anyone can use Ageless Moisturizing Cream! This moisturizer is perfect for anyone looking to achieve deep hydration and a radiant complexion. Ageless Moisturizing Cream works to help reduce current signs of aging and prevent new signs from forming, making it an excellent choice for all ages.</p>
									<div class="separator"></div>
									<span>WHAT DOES IT FEEL LIKE TO USE AGELESS MOISTURIZING CREAM?</span>
									<p>Ageless Moisturizing Cream has the texture of a lightweight, rich cream that feels silky when applied. This moisturizer absorbs into the skin quickly, giving skin a hydrated, fresh feel and a luminous glow.</p>
									<div class="separator"></div>
									<span>IS AGELESS MOISTURIZING CREAM TESTED ON ANIMALS?</span>
									<p>Never. We at City Beauty™ are committed to remaining cruelty-free and will never test our products on animals.</p>
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
