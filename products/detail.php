<?php 
$body = "product";
$dir = "../";
$css = "main,product,simplebar,gallery";
$js = "simplebar,zoom.min,gallery";
require_once($dir."content/header.php");
?>  
  
<!--MAINCONTENT-->
<div id="maincontent">
	<div id="wrapdetail">
  	<div class="content"> 
      <!--GALLERY-->
      <div id="gallery">
        <div class="simpleLens-gallery-container" id="demo-1">
          <div class="simpleLens-container">
            <div class="simpleLens-big-image-container">
              <a class="simpleLens-lens-image" img-lens="/images/products/cth/1l.jpg">
             	 <img src="/images/products/cth/1.jpg" class="simpleLens-big-image">
              </a>
            </div>
          </div>
        
          <div class="simpleLens-thumbnails-container">
            <a href="#" class="simpleLens-thumbnail-wrapper" img-lens="/images/products/cth/1l.jpg" big-img="/images/products/cth/1.jpg">
      	      <img src="/images/products/cth/1.jpg" width="119" height="192">
            </a>
            
            <a href="#" class="simpleLens-thumbnail-wrapper" img-lens="/images/products/cth/2l.jpg" big-img="/images/products/cth/2.jpg">
    	        <img src="/images/products/cth/2.jpg" width="119" height="192">
            </a>
            
            <a href="#" class="simpleLens-thumbnail-wrapper" img-lens="/images/products/cth/1l.jpg" big-img="/images/products/cth/1.jpg">
  	          <img src="/images/products/cth/1.jpg" width="119" height="192">
            </a>
            
            <a href="#" class="simpleLens-thumbnail-wrapper" img-lens="/images/products/cth/2l.jpg" big-img="/images/products/cth/2.jpg">
	            <img src="/images/products/cth/2.jpg" width="119" height="192">
            </a>              
          </div>
        </div>      
      </div>      
      <!--END GALLERY-->
      <!--PRODINFO-->
      <div id="prodinfo">
      	<h2 class="title">Circle Birdcage</h2>
        <div class="desc">
       		<p>
          	Size : 25 x 30 cm<br />
            Material : Rattan
          </p>
        </div>
        <span class="tagprice">IDR 99.000</span>
        
        <!--form detail-->
        <form name="detail-order" id="detail-order" action="#" method="post">
        	<div class="row-form">
            <span>Color</span>
            <select name="color">
              <option value="1">Red</option>
              <option value="2">White</option>              
              <option value="3">Black</option>              
            </select>          
          </div>
          
          <div class="row-form"> 
            <span>Quantity</span>
            <select name="color">
              <option value="1">1</option>
              <option value="2">2</option>              
              <option value="3">3</option>              
            </select>  
					</div>  
          
          <div class="row-form">
          	<div class="wraporder">
            	<a href="#addtocart" id="addtocart_prod">add to cart</a>
              <span class="sep">|</span>
              <a href="#checkout" id="checkout_prod">check out</a>
            </div>
            <div class="wrapwishlist">
            	<a href="#wishlist">add to wishlist</a>
            </div>
          </div>                 
        </form>
        <!--form detail-->        
        
        <div id="shoppingbag" class="prod_detail_shopbag">
          <h3>Shopping Bag</h3>
          <div id="shopbagtitle">
            <span class="item">ITEM</span>
            <span class="qty">QTY</span>
            <span class="price">PRICE</span>                              
          </div>
          <ul class="shopbaglist simplebar">
            <li>
              <div class="item"><a href="#" class="cancelprod">X</a> Autumn Pot</div>
              <div class="qty">2</div>
              <div class="price">IDR 100.000</div>              
            </li>
            <li>
              <div class="item"><a href="#" class="cancelprod">X</a> Autumn Pot</div>
              <div class="qty">2</div>
              <div class="price">IDR 100.000</div>              
            </li>
            <li>
              <div class="item"><a href="#" class="cancelprod">X</a> Autumn Pot</div>
              <div class="qty">2</div>
              <div class="price">IDR 100.000</div>              
            </li>
            <li>
              <div class="item"><a href="#" class="cancelprod">X</a> Autumn Pot</div>
              <div class="qty">2</div>
              <div class="price">IDR 100.000</div>              
            </li>
            <li>
              <div class="item"><a href="#" class="cancelprod">X</a> Autumn Pot</div>
              <div class="qty">2</div>
              <div class="price">IDR 100.000</div>              
            </li>
            <li>
              <div class="item"><a href="#" class="cancelprod">X</a> Autumn Pot</div>
              <div class="qty">2</div>
              <div class="price">IDR 100.000</div>              
            </li>
            <li>
              <div class="item"><a href="#" class="cancelprod">X</a> Autumn Pot</div>
              <div class="qty">2</div>
              <div class="price">IDR 100.000</div>              
            </li>
            <li>
              <div class="item"><a href="#" class="cancelprod">X</a> Autumn Pot</div>
              <div class="qty">2</div>
              <div class="price">IDR 100.000</div>              
            </li>
            <li>
              <div class="item"><a href="#" class="cancelprod">X</a> Autumn Pot</div>
              <div class="qty">2</div>
              <div class="price">IDR 100.000</div>              
            </li>
            <li>
              <div class="item"><a href="#" class="cancelprod">X</a> Autumn Pot</div>
              <div class="qty">2</div>
              <div class="price">IDR 100.000</div>              
            </li>                                                                                        
          </ul>
          

          <div id="shopbagsum">
            <span class="title">TOTAL</span>
            <span class="currency">IDR (Rp)</span>
            <span class="totalprice"><strong>100.000</strong></span>                              
          </div>  
          <div class="wrapchkbtn">
            <a href="#"><span>Check Out</span></a>
          </div>      
        </div>        
      </div>
      <!--PRODINFO-->
      <div class="prodnav">
      	<a href="#" class="prevbtn"><span>prev</span></a>
      	<a href="#" class="nextbtn"><span>next</span></a>        
      </div>
      
      <h2 class="prodrelated">You may also like</h2>
      
			<div class="wraplistitem listitemrelated">
        <ul class="productitem">
          <li>
            <a class="linkproduct" href="#">
              <div class="listitem">
                <span><img src="/images/products/archive/test.jpg" height="312" width="188"/></span>
              </div>
              <span class="productname">Circle Birdcage</span>
              <span class="productprice">IDR 90.000</span>            
              <span class="tickernew"></span>
            </a>          
          </li>
          
          <li>
            <a class="linkproduct" href="#">
              <div class="listitem">
                <span><img src="/images/products/archive/test.jpg" height="312" width="188"/></span>
              </div>
              <span class="productname">Circle Birdcage</span>
              <span class="productprice">IDR 90.000</span>            
            </a>          
          </li>
          
          <li>
            <a class="linkproduct" href="#">
              <div class="listitem">
                <span><img src="/images/products/archive/test.jpg" height="312" width="188"/></span>
              </div>
              <span class="productname">Circle Birdcage</span>
              <span class="productprice">IDR 90.000</span>            
            </a>          
          </li>
          
          <li>
            <a class="linkproduct" href="#">
              <div class="listitem">
                <span><img src="/images/products/archive/test.jpg" height="312" width="188"/></span>
              </div>
              <span class="productname">Circle Birdcage</span>
              <span class="productprice">IDR 90.000</span>            
            </a>          
          </li>          
          
          <li class="last">
            <a class="linkproduct" href="#">
              <div class="listitem">
                <span><img src="/images/products/archive/test.jpg" height="312" width="188"/></span>
              </div>
              <span class="productname">Circle Birdcage</span>
              <span class="productprice">IDR 90.000</span>            
            </a>          
          </li>
          
                        
        </ul>   
        
              
    </div>
  </div>
</div>
<!--MAINCONTENT-->  
  
<?php 
require_once($dir."content/footer.php");
?>