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
        <span>Confirm Payment</span>              
      </div>
      <!--END NAVPAGE-->  
      
      
      <!--start wrapconfirm-->
      <div id="wrapconfirm">
      	<h5>Confirm Payment</h5>
        
        <form name="confirm" class="confirm" method="post" action=".">
          <div class="row">
            <label for="orderid">Order ID</label>
            <input type="text" name="orderid" id="orderid" />
          </div> 
          
          <div class="row">
	          <label>Bank</label>
            <div class="select-style select2">
              <select name="bank">
                <option value="volvo">BCA</option>
                <option value="audi">MANDIRI</option>
              </select>
            </div>          
          </div>
          
          <div class="row">
            <label for="dop">Date of Payment</label>
            <input type="text" name="dop" id="dop" class="datepicker"/>
          </div> 
          
          <div class="row">
            <label for="bankaccname">Bank Account's Name</label>
            <input type="text" name="bankaccname" id="bankaccname" />
          </div>
                               
          <div class="row">
          	<input class="confirm" type="image" src="/images/layout/order/confirm.png" />
          </div>
          
        </form>
      </div>
      <!--end wrapconfirm-->  
      
      
      
      
      
 
      
               
          
    </div>  	
  </div>
</div>
<!--MAINCONTENT-->  
  
<?php 
require_once($dir."content/footer.php");
?>