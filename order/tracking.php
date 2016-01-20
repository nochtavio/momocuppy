<?php 
$body = "order";
$dir = "../";
$css = "main,order,datepicker";
$js = "datepicker";
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
        <span>Tracking</span>              
      </div>
      <!--END NAVPAGE-->  
      
      
      <!--start wrapconfirm-->
      <div id="wrapconfirm" class="wraptrack">
      	<h5>Tracking</h5>
        
        <form name="confirm" class="confirm" method="post" action=".">
          <div class="row">
            <label for="orderid">Order ID</label>
            <input type="text" name="orderid" id="orderid" />
          </div>                                          
          <div class="row">
          	<input class="tracking" type="image" src="/images/layout/order/track.png" />
          </div>          
        </form>
        
        <div class="track_result">
        	<h3>Your order is already shipped!</h3>
          <div class="submsg">Your Tracking number is <strong>ABCDEFGHIJKLMO</strong>. You can track your order here <a href="#" target="_blank">www.jne.co.id</a></div>
        </div>
      </div>
      <!--end wrapconfirm-->  
      
      
      
      
      
 
      
               
          
    </div>  	
  </div>
</div>
<!--MAINCONTENT-->  
  
<?php 
require_once($dir."content/footer.php");
?>