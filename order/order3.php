<?php 
$body = "order";
$dir = "../";
$css = "main,simplebar,order";
$js = "simplebar,order3";
require_once($dir . "core/conn/db.php");
require_once($dir."content/header.php");
?>  
  
<!--MAINCONTENT-->
<div id="maincontent">
	<div id="wraporder">
  	<div class="content">
      <!--START NAVPAGE-->
      <div class="navpage">
        <span>Home</span>
        <span class="sep">|</span>
        <span>Order</span>      
        <span class="sep">|</span>
        <span>Shopping Bag</span>              
      </div>
      <!--END NAVPAGE-->    
      
      <h3  id="summary_order">shopping bag summary</h3>
      
      <div class="submenuorder">
      	<ul class="order_menu">
        	<li><a href="#"><span>summary</span></a></li>
        	<li><a href="#"><span>shipping address</span></a></li>
        	<li><a class="selected" href="#"><span>done</span></a></li>                    
        </ul>
      </div>
      
 
      <!--START order-result-->
      <div class="order_result">
      	<img src="/images/layout/order/thanks.png"  class="bannerthx"/>
        <h3 class="thanksheader">Your order has been successfully placed!</h3>
        <div class="final_summary">
        	<span class="sum_title">order id</span>
                <span class="sum_data" id="order_no">987654321</span>          
        	<span class="sum_title">total order</span>
        	<span class="sum_data" id="grand_total">IDR 261.000</span>                    
        	<span class="sum_title">total point</span>
        	<span class="sum_data" id="point">25</span>                    
        	<span class="sum_title">please transfer your payment to</span>
        	<span class="sum_data" id="payment">
          	Ryan / 069 020 1283 / BCA <br />
            Ryan / 157 00 00928573 / MANDIRI
          </span>                    
        </div>
        <div class="row">
          <p>Please wait, you will receive order confirmation in your email soon.</p>
          <p>
            Please make payment to the account in the email within 1 x 24 hours from the order <br />
            or your order will be automatically cancelled by our system.
          </p>
          <p>
            After payment completed, simply click on the "ORDER / CONFIRM PAYMENT" link on the top navigation and follow the steps. 
            <br />You have to confirm your payment in our webstore to prevent our system from deleting your order.
          </p>
          <p>
            If you are not receive an email order in 15 minutes,<br />
            please contact <a href="mailto:help@momocuppy.com">help@momocuppy.com</a>
          </p>
        	<a href="#" class="btnprint"><img src="/images/layout/order/btnprint.png" /></a>
        </div>
      </div>
      <!--END order-result-->
      
               
          
    </div>  	
  </div>
</div>
<!--MAINCONTENT-->  
  
<?php 
require_once($dir."content/footer.php");
?>