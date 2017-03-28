{extends file="base_temp.tpl"}

{block name=title}BagShop | Home{/block}

{block name=body}
<section id="slider">
      <!--slider-->
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div id="slider-carousel" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#slider-carousel" data-slide-to="1"></li>
                <li data-target="#slider-carousel" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="item active">
                  <div class="col-sm-6">
                    <h1><span>Bag</span>SHOP</h1>
                    <h2>The right bag for the right occasion</h2>
                    <p>Luxurious School bags for all age groups. We know what you want and we deliver just as you like it</p>
                    <button type="button" class="btn btn-default get">Get it now</button>
                  </div>
                  <div class="col-sm-6">
                    <img src="images/home/slide_1.jpg" class="girl img-responsive" alt="" />
                    <img src="images/home/pricing.png"  class="pricing" alt="" />
                  </div>
                </div>
                <div class="item">
                  <div class="col-sm-6">
                    <h1><span>Bag</span>SHOP</h1>
                    <h2>100% Responsive Design</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    <button type="button" class="btn btn-default get">Get it now</button>
                  </div>
                  <div class="col-sm-6">
                    <img src="images/home/girl2.jpg" class="girl img-responsive" alt="" />
                    <img src="images/home/pricing.png"  class="pricing" alt="" />
                  </div>
                </div>
                <div class="item">
                  <div class="col-sm-6">
                    <h1><span>Bag</span>SHOP</h1>
                    <h2>Browse through our catalog</h2>
                    <p>We have a wide range of bags for the whole family </p>
                    <button type="button" class="btn btn-default get">Get it now</button>
                  </div>
                  <div class="col-sm-6">
                    <img src="images/home/family bags.jpg" class="girl img-responsive" alt=""/>
                    <img src="images/home/pricing.png" class="pricing" alt="" />
                  </div>
                </div>
              </div>
              <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
              <i class="fa fa-angle-left"></i>
              </a>
              <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
              <i class="fa fa-angle-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section><!--/slider-->
	
	<section>
      <div class="container">
        <div class="row">
          <div class="col-sm-3">
            <div class="left-sidebar">
              <h2>Category</h2>
              <div class="panel-group category-products" id="accordian">
                <!--category-productsr-->
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
                      <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                      Sports Bags
                      </a>
                    </h4>
                  </div>
                  <div id="sportswear" class="panel-collapse collapse">
                    <div class="panel-body">
                      <ul>
                        <li><a href="#">Golf Bags </a></li>
                        <li><a href="#">Bowling Bags </a></li>
                        <li><a href="#">Tennis Bags </a></li>
                        <li><a href="#">Football Bags</a></li>
                        <li><a href="#">Basketball </a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordian" href="#mens">
                      <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                      Mens
                      </a>
                    </h4>
                  </div>
                  <div id="mens" class="panel-collapse collapse">
                    <div class="panel-body">
                      <ul>
                        <li><a href="#">wallet</a></li>
                        <li><a href="#">briefcase</a></li>
                        <li><a href="#">suitcase</a></li>
                        <li><a href="#">leather bags</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title">
                      <a data-toggle="collapse" data-parent="#accordian" href="#womens">
                      <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                      Women
                      </a>
                    </h4>
                  </div>
                  <div id="womens" class="panel-collapse collapse">
                    <div class="panel-body">
                      <ul>
                        <li><a href="#">Hobo</a></li>
                        <li><a href="#">Satchel</a></li>
                        <li><a href="#">tote</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title"><a href="#">Kids</a></h4>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title"><a href="#">Travelling Bags</a></h4>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title"><a href="#">School bags</a></h4>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title"><a href="#">Purse</a></h4>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title"><a href="#">Accessories</a></h4>
                  </div>
                </div>
              </div>
              <div class="price-range">
                <!--price-range-->
                <h2>Price Range</h2>
                <div class="well text-center">
                  <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                  <b class="pull-left">$ 50</b> <b class="pull-right">$ 300</b>
                </div>
              </div><!--/price-range-->
					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>
						{foreach $parts as $part}
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="{$tempImage}{$part.pname}{$imgFormat}" alt="" height=250px width=210px />
										<h2>{$dollarSign}{$part.price}</h2>
										<p>{$part.pname}</p>
										<a href="login.php?part_no={$part.pno}&&part_name={$part.pname}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Order</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>{$dollarSign}{$part.price}</h2>
											<p>{$part.pname}</p>
											<a href="login.php?part_no={$part.pno}&&part_name={$part.pname}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Order</a>
										</div>
									</div>
								</div>
								
							</div>
						</div>
						{/foreach}
					</div><!--features_items-->
					
				</div>
			</div>
		</div>
	</section>
{/block}