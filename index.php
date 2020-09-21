<?php
include("dbcorn.php");
$sql = "SELECT * FROM books";
$result=$conn->query($sql);
$sql1="SELECT * FROM catagories";
$result1= $conn->query($sql1);
if(isset($_GET) && !empty($_GET))
{
	$catid= $_GET['catid'];
	$sql="SELECT * FROM books WHERE catid = $catid";
	$result=$conn->query($sql);
}
include("header.php");?>


<div class="breadcrumbs-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
					    <div class="breadcrumbs">
					       <h2>ONLINE BOOK STORE</h2> 
					       <ul class="breadcrumbs-list">
						        <li>
						            <a title="Return to Home" href="/book_store/">Home</a>
						        </li>
						        <li>ONLINE BOOK STORE</li>
						    </ul>
					    </div>
					</div>
				</div>
			</div>
		</div> 
		<!-- Breadcrumbs Area Start --> 
        <!-- Shop Area Start -->
        <div class="shopping-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="shop-widget">
                            <div class="shop-widget-top">
                                <aside class="widget widget-categories">
                                    <h2 class="sidebar-title text-center">CATEGORIES</h2>
                                    <ul class="sidebar-menu">
                                    	<?php while($row1 = $result1->fetch_assoc()){ ?>
                                        <li>
                                            <a href="/book_store?catid=<?php echo $row1['catid']?>">
                                               <i class="fa fa-angle-double-right"></i>
                                               <?php echo $row1['cname'] ?>                                         
                                                <span>(5)</span>
                                            </a>
                                        </li>
                                    <?php } ?>
                                    </ul>
                                </aside> 
                                                            
                            </div>
                            <div class="shop-widget-bottom">
                                <aside class="widget widget-tag">
                                    <h2 class="sidebar-title">POPULAR TAG</h2>
                                    <ul class="tag-list">
                                        <li>
                                            <a href="login.php">e-book</a>
                                        </li>
                                        <li>
                                            <a href="#">writer</a>
                                        </li>
                                        <li>
                                            <a href="#">book’s</a>
                                        </li>
                                        <li>
                                            <a href="#">eassy</a>
                                        </li>
                                        <li>
                                            <a href="#">nice</a>
                                        </li>
                                        <li>
                                            <a href="#">author</a>
                                        </li>
                                    </ul>
                                </aside>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <div class="shop-tab-area">
                            
                            <div class="tab-content">
                                <div class="row tab-pane fade in active" id="home">
                                    <div class="shop-single-product-area">
                                    	<?php while($row=$result->fetch_assoc()) { ?>
                                        <div class="col-md-4 col-sm-6">
											<div class="single-banner">
												<div class="product-wrapper">
													<a href="#" class="single-banner-image-wrapper">
														<img alt="" src="img/featured/<?php echo $row['image'] ?>">
														<div class="price"><span>INR</span><?php echo $row['bprice']  ?></div>
													</a>
													<div class="product-description">
														<div class="functional-buttons">
															<a href="addtocart.php?bid=<?php echo $row['bid'];?>" title="Add to Cart">
																<i class="fa fa-shopping-cart"></i>
															</a>
															
															<!-- <a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
																<i class="fa fa-compress"></i> -->
															</a>
														</div>
													</div>
												</div>
												<div class="banner-bottom text-center">
													<div class="banner-bottom-title">
														<a href="#"><?php echo $row['btitke']?></a>
													</div>
													<div class="rating-icon">
														<i class="fa fa-star icolor"></i>
														<i class="fa fa-star icolor"></i>
														<i class="fa fa-star icolor"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
													</div>
												</div>
											</div>
                                        </div>
                                        <?php } ?>
                                        <!--<div class="col-md-4 col-sm-6">
											<div class="single-banner">
												<div class="product-wrapper">
													<a href="#" class="single-banner-image-wrapper">
														<img alt="" src="img/featured/2.jpg">
														<div class="price"><span>$</span>160</div>
													</a>
													<div class="product-description">
														<div class="functional-buttons">
															<a href="#" title="Add to Cart">
																<i class="fa fa-shopping-cart"></i>
															</a>
															
															<a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
																<i class="fa fa-compress"></i>
															</a>
														</div>
													</div>
												</div>
												<div class="banner-bottom text-center">
													<div class="banner-bottom-title">
														<a href="#">People of the book</a>
													</div>
													<div class="rating-icon">
														<i class="fa fa-star icolor"></i>
														<i class="fa fa-star icolor"></i>
														<i class="fa fa-star icolor"></i>
														<i class="fa fa-star icolor"></i>
														<i class="fa fa-star"></i>
													</div>
												</div>
											</div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
											<div class="single-banner">
												<div class="product-wrapper">
													<a href="#" class="single-banner-image-wrapper">
														<img alt="" src="img/featured/3.jpg">
														<div class="price"><span>$</span>160</div>
													</a>
													<div class="product-description">
														<div class="functional-buttons">
															<a href="#" title="Add to Cart">
																<i class="fa fa-shopping-cart"></i>
															</a>
															
															<a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
																<i class="fa fa-compress"></i>
															</a>
														</div>
													</div>
												</div>
												<div class="banner-bottom text-center">
													<div class="banner-bottom-title">
														<a href="#">The secret letter</a>
													</div>
													<div class="rating-icon">
														<i class="fa fa-star icolor"></i>
														<i class="fa fa-star icolor"></i>
														<i class="fa fa-star icolor"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
													</div>
												</div>
											</div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
											<div class="single-banner">
												<div class="product-wrapper">
													<a href="#" class="single-banner-image-wrapper">
														<img alt="" src="img/featured/4.jpg">
														<div class="price"><span>$</span>160</div>
													</a>
													<div class="product-description">
														<div class="functional-buttons">
															<a href="#" title="Add to Cart">
																<i class="fa fa-shopping-cart"></i>
															</a>
															
															<a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
																<i class="fa fa-compress"></i>
															</a>
														</div>
													</div>
												</div>
												<div class="banner-bottom text-center">
													<div class="banner-bottom-title">
														<a href="#">Lone some dove</a>
													</div>
													<div class="rating-icon">
														<i class="fa fa-star icolor"></i>
														<i class="fa fa-star icolor"></i>
														<i class="fa fa-star icolor"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
													</div>
												</div>
											</div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
											<div class="single-banner">
												<div class="product-wrapper">
													<a href="#" class="single-banner-image-wrapper">
														<img alt="" src="img/featured/5.jpg">
														<div class="price"><span>$</span>160</div>
													</a>
													<div class="product-description">
														<div class="functional-buttons">
															<a href="#" title="Add to Cart">
																<i class="fa fa-shopping-cart"></i>
															</a>
															
															<a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
																<i class="fa fa-compress"></i>
															</a>
														</div>
													</div>
												</div>
												<div class="banner-bottom text-center">
													<div class="banner-bottom-title">
														<a href="#">The historian</a>
													</div>
													<div class="rating-icon">
														<i class="fa fa-star icolor"></i>
														<i class="fa fa-star icolor"></i>
														<i class="fa fa-star icolor"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
													</div>
												</div>
											</div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
											<div class="single-banner">
												<div class="product-wrapper">
													<a href="#" class="single-banner-image-wrapper">
														<img alt="" src="img/featured/6.jpg">
														<div class="price"><span>$</span>160</div>
													</a>
													<div class="product-description">
														<div class="functional-buttons">
															<a href="#" title="Add to Cart">
																<i class="fa fa-shopping-cart"></i>
															</a>
															
															<a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
																<i class="fa fa-compress"></i>
															</a>
														</div>
													</div>
												</div>
												<div class="banner-bottom text-center">
													<div class="banner-bottom-title">
														<a href="#">East of eden</a>
													</div>
													<div class="rating-icon">
														<i class="fa fa-star icolor"></i>
														<i class="fa fa-star icolor"></i>
														<i class="fa fa-star icolor"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
													</div>
												</div>
											</div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
											<div class="single-banner">
												<div class="product-wrapper">
													<a href="#" class="single-banner-image-wrapper">
														<img alt="" src="img/featured/7.jpg">
														<div class="price"><span>$</span>160</div>
													</a>
													<div class="product-description">
														<div class="functional-buttons">
															<a href="#" title="Add to Cart">
																<i class="fa fa-shopping-cart"></i>
															</a>
															
															<a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
																<i class="fa fa-compress"></i>
															</a>
														</div>
													</div>
												</div>
												<div class="banner-bottom text-center">
													<div class="banner-bottom-title">
														<a href="#">Cold mountain</a>
													</div>
													<div class="rating-icon">
														<i class="fa fa-star icolor"></i>
														<i class="fa fa-star icolor"></i>
														<i class="fa fa-star icolor"></i>
														<i class="fa fa-star icolor"></i>
														<i class="fa fa-star"></i>
													</div>
												</div>
											</div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
											<div class="single-banner">
												<div class="product-wrapper">
													<a href="#" class="single-banner-image-wrapper">
														<img alt="" src="img/featured/8.jpg">
														<div class="price"><span>$</span>160</div>
													</a>
													<div class="product-description">
														<div class="functional-buttons">
															<a href="#" title="Add to Cart">
																<i class="fa fa-shopping-cart"></i>
															</a>
															
															<a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
																<i class="fa fa-compress"></i>
															</a>
														</div>
													</div>
												</div>
												<div class="banner-bottom text-center">
													<div class="banner-bottom-title">
														<a href="#">Twilight</a>
													</div>
													<div class="rating-icon">
														<i class="fa fa-star icolor"></i>
														<i class="fa fa-star icolor"></i>
														<i class="fa fa-star icolor"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
													</div>
												</div>
											</div>
                                        </div>
                                        <div class="col-md-4 hidden-sm">
											<div class="single-banner">
												<div class="product-wrapper">
													<a href="#" class="single-banner-image-wrapper">
														<img alt="" src="img/featured/1.jpg">
														<div class="price"><span>$</span>160</div>
													</a>
													<div class="product-description">
														<div class="functional-buttons">
															<a href="#" title="Add to Cart">
																<i class="fa fa-shopping-cart"></i>
															</a>
															
															<a href="#" title="Quick view" data-toggle="modal" data-target="#productModal">
																<i class="fa fa-compress"></i>
															</a>
														</div>
													</div>
												</div>
												<div class="banner-bottom text-center">
													<div class="banner-bottom-title">
														<a href="#">East of eden</a>
													</div>
													<div class="rating-icon">
														<i class="fa fa-star icolor"></i>
														<i class="fa fa-star icolor"></i>
														<i class="fa fa-star icolor"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
													</div>
												</div>
											</div>
                                        </div>-->
                                    </div>
                                </div>
                                <div id="menu1" class="tab-pane fade">
                                    <div class="row">
                                        <div class="single-shop-product">
                                            <div class="col-xs-12 col-sm-5 col-md-4">
                                                <div class="left-item">
                                                    <a href="single-product.html" title="East of eden">
                                                    </a>
                                                        <img src="img/featured/1.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-7 col-md-8">
                                                <div class="deal-product-content">
                                                    <h4>
                                                        <a href="single-product.html" title="East of eden">East of eden</a>
                                                    </h4>
                                                    <div class="product-price">
                                                        <span class="new-price">$ 140.00</span>
                                                        <span class="old-price">$ 120.00</span>
                                                    </div>
                                                    <div class="list-rating-icon">
                                                        <i class="fa fa-star icolor"></i>
                                                        <i class="fa fa-star icolor"></i>
                                                        <i class="fa fa-star icolor"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <p>Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!</p>
                                                    <div class="availability">
                                                        <span>In stock</span>
                                                        <span><a href="cart.html">Add to cart</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-shop-product">
                                            <div class="col-xs-12 col-sm-5 col-md-4">
                                                <div class="left-item">
                                                    <a href="single-product.html" title="People of the book">
                                                        <img src="img/featured/2.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-7 col-md-8">
                                                <div class="deal-product-content">
                                                    <h4>
                                                        <a href="single-product.html" title="People of the book">People of the book</a>
                                                    </h4>
                                                    <div class="product-price">
                                                        <span class="new-price">$ 140.00</span>
                                                        <span class="old-price">$ 120.00</span>
                                                    </div>
                                                    <div class="list-rating-icon">
                                                        <i class="fa fa-star icolor"></i>
                                                        <i class="fa fa-star icolor"></i>
                                                        <i class="fa fa-star icolor"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                 									<p>Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!</p>
                                                    <div class="availability">
                                                        <span>In stock</span>
                                                        <span><a href="cart.html">Add to cart</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-shop-product">
                                            <div class="col-xs-12 col-sm-5 col-md-4">
                                                <div class="left-item">
                                                    <a href="single-product.html" title="The secret letter">
                                                        <img src="img/featured/3.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-7 col-md-8">
                                                <div class="deal-product-content">
                                                    <h4>
                                                        <a href="single-product.html" title="The secret letter">The secret letter</a>
                                                    </h4>
                                                    <div class="product-price">
                                                        <span class="new-price">$ 140.00</span>
                                                        <span class="old-price">$ 120.00</span>
                                                    </div>
                                                    <div class="list-rating-icon">
                                                        <i class="fa fa-star icolor"></i>
                                                        <i class="fa fa-star icolor"></i>
                                                        <i class="fa fa-star icolor"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <p>Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!</p>
                                                    <div class="availability">
                                                        <span>In stock</span>
                                                        <span><a href="cart.html">Add to cart</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-shop-product">
                                            <div class="col-xs-12 col-sm-5 col-md-4">
                                                <div class="left-item">
                                                    <a href="single-product.html" title="Lone some dove">
                                                        <img src="img/featured/4.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-7 col-md-8">
                                                <div class="deal-product-content">
                                                    <h4>
                                                        <a href="single-product.html" title="Lone some dove">Lone some dove</a>
                                                    </h4>
                                                    <div class="product-price">
                                                        <span class="new-price">$ 140.00</span>
                                                        <span class="old-price">$ 120.00</span>
                                                    </div>
                                                    <div class="list-rating-icon">
                                                        <i class="fa fa-star icolor"></i>
                                                        <i class="fa fa-star icolor"></i>
                                                        <i class="fa fa-star icolor"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <p>Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!</p>
                                                    <div class="availability">
                                                        <span>In stock</span>
                                                        <span><a href="cart.html">Add to cart</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shop Area End -->
		<!-- Footer Area Start -->
		<?php include("footer.php") ?>