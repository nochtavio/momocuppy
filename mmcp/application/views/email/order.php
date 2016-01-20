<?php
$order_no = (isset($order_no) ? $order_no : "" );
$firstname = (isset($firstname) ? $firstname : "" );
$lastname = (isset($lastname) ? $lastname : "" );
$product = (isset($product) ? $product : "" );
$shipping = (isset($shipping) ? $shipping : "" );
$courier = (isset($courier) ? $courier : "" );
$street_address = (isset($street_address) ? $street_address : "" );
$zip_code = (isset($zip_code) ? $zip_code : "" );
$country = (isset($country) ? $country : "" );
$phone = (isset($phone) ? $phone : "" );
$city = (isset($city) ? $city : "" );
$payment_name = (isset($payment_name) ? $payment_name : "" );
$payment_account_name = (isset($payment_account_name) ? $payment_account_name : "" );
$payment_account = (isset($payment_account) ? $payment_account : "" );
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <!-- Facebook sharing information tags -->
    <meta property="og:title" content="*|MC:SUBJECT|*" />

    <title>INVOICE</title>
    <style type="text/css">
      @import url(https://fonts.googleapis.com/css?family=Lobster);
      /* Client-specific Styles */
      #outlook a{padding:0;} /* Force Outlook to provide a "view in browser" button. */
      body{width:100% !important;} .ReadMsgBody{width:100%;} .ExternalClass{width:100%;} /* Force Hotmail to display emails at full width */
      body{-webkit-text-size-adjust:none;} /* Prevent Webkit platforms from changing default text sizes. */

      /* Reset Styles */
      body{margin:0; padding:0;}
      img{border:0; height:auto; line-height:100%; outline:none; text-decoration:none;}
      table td{border-collapse:collapse;}
      #backgroundTable{height:100% !important; margin:0; padding:0; width:100% !important;}

      /* Template Styles */

      /* /\/\/\/\/\/\/\/\/\/\ STANDARD STYLING: COMMON PAGE ELEMENTS /\/\/\/\/\/\/\/\/\/\ */

      /**
      * @tab Page
      * @section background color
      * @tip Set the background color for your email. You may want to choose one that matches your company's branding.
      * @theme page
      */
      body, #backgroundTable{
          /*@editable*/ background-color:#FAFAFA;
      }

      /**
      * @tab Page
      * @section email border
      * @tip Set the border for your email.
      */
      #templateContainer{
          /*@editable*/ border: 1px solid #DDDDDD;
      }

      /**
      * @tab Page
      * @section heading 1
      * @tip Set the styling for all first-level headings in your emails. These should be the largest of your headings.
      * @style heading 1
      */
      h1, .h1{
          /*@editable*/ color:#202020;
          display:block;
          /*@editable*/ font-family:Arial;
          /*@editable*/ font-size:34px;
          /*@editable*/ font-weight:bold;
          /*@editable*/ line-height:100%;
          margin-top:0;
          margin-right:0;
          margin-bottom:10px;
          margin-left:0;
          /*@editable*/ text-align:left;
      }

      /**
      * @tab Page
      * @section heading 2
      * @tip Set the styling for all second-level headings in your emails.
      * @style heading 2
      */
      h2, .h2{
          /*@editable*/ color:#f05464;
          display:block;
          /*@editable*/ font-family:Lobster;
          /*@editable*/ font-size:30px;
          /*@editable*/ font-weight:700;
          /*@editable*/ line-height:100%;
          margin-top:0;
          margin-right:0;
          margin-bottom:10px;
          margin-left:0;
          /*@editable*/ text-align:left;
      }

      /**
      * @tab Page
      * @section heading 3
      * @tip Set the styling for all third-level headings in your emails.
      * @style heading 3
      */
      h3, .h3{
          /*@editable*/ color:#202020;
          display:block;
          /*@editable*/ font-family:Arial;
          /*@editable*/ font-size:26px;
          /*@editable*/ font-weight:bold;
          /*@editable*/ line-height:100%;
          margin-top:0;
          margin-right:0;
          margin-bottom:10px;
          margin-left:0;
          /*@editable*/ text-align:left;
      }

      /**
      * @tab Page
      * @section heading 4
      * @tip Set the styling for all fourth-level headings in your emails. These should be the smallest of your headings.
      * @style heading 4
      */
      h4, .h4{
          /*@editable*/ color:#202020;
          display:block;
          /*@editable*/ font-family:Arial;
          /*@editable*/ font-size:22px;
          /*@editable*/ font-weight:bold;
          /*@editable*/ line-height:100%;
          margin-top:0;
          margin-right:0;
          margin-bottom:10px;
          margin-left:0;
          /*@editable*/ text-align:left;
      }

      /* /\/\/\/\/\/\/\/\/\/\ STANDARD STYLING: HEADER /\/\/\/\/\/\/\/\/\/\ */

      /**
      * @tab Header
      * @section header style
      * @tip Set the background color and border for your email's header area.
      * @theme header
      */
      #templateHeader{
          /*@editable*/ background-color:#FFFFFF;
          /*@editable*/ border-bottom:0;
      }

      /**
      * @tab Header
      * @section header text
      * @tip Set the styling for your email's header text. Choose a size and color that is easy to read.
      */
      .headerContent{
          /*@editable*/ color:#202020;
          /*@editable*/ font-family:Arial;
          /*@editable*/ font-size:34px;
          /*@editable*/ font-weight:bold;
          /*@editable*/ line-height:100%;
          /*@editable*/ padding:0;
          /*@editable*/ text-align:left;
          /*@editable*/ vertical-align:middle;
      }
      .headerContent img{
          margin:10px 0 0 20px;
      }

      /**
      * @tab Header
      * @section header link
      * @tip Set the styling for your email's header links. Choose a color that helps them stand out from your text.
      */
      .headerContent a:link, .headerContent a:visited, /* Yahoo! Mail Override */ .headerContent a .yshortcuts /* Yahoo! Mail Override */{
          /*@editable*/ color:#336699;
          /*@editable*/ font-weight:normal;
          /*@editable*/ text-decoration:underline;
      }

      #headerImage{
          height:auto;
          max-width:600px !important;
      }

      /* /\/\/\/\/\/\/\/\/\/\ STANDARD STYLING: MAIN BODY /\/\/\/\/\/\/\/\/\/\ */

      /**
      * @tab Body
      * @section body style
      * @tip Set the background color for your email's body area.
      */
      #templateContainer, .bodyContent{
          /*@editable*/ background-color:#FFFFFF;
      }

      /**
      * @tab Body
      * @section body text
      * @tip Set the styling for your email's main content text. Choose a size and color that is easy to read.
      * @theme main
      */
      .bodyContent div{
          /*@editable*/ color:#505050;
          /*@editable*/ font-family:Arial;
          /*@editable*/ font-size:14px;
          /*@editable*/ line-height:150%;
          /*@editable*/ text-align:left;
      }

      /**
      * @tab Body
      * @section body link
      * @tip Set the styling for your email's main content links. Choose a color that helps them stand out from your text.
      */
      .bodyContent div a:link, .bodyContent div a:visited, /* Yahoo! Mail Override */ .bodyContent div a .yshortcuts /* Yahoo! Mail Override */{
          /*@editable*/ color:#336699;
          /*@editable*/ font-weight:normal;
          /*@editable*/ text-decoration:underline;
      }

      /**
      * @tab Body
      * @section data table style
      * @tip Set the background color and border for your email's data table.
      */
      .templateDataTable{
          /*@editable*/ background-color:#fbe0e6;
          /*@editable*/ border-radius:5px;
      }

      /**
      * @tab Body
      * @section data table heading text
      * @tip Set the styling for your email's data table text. Choose a size and color that is easy to read.
      */
      .dataTableHeading{
          /*@editable*/ background-color:#fbe0e6;
          border-radius:5px;
          /*@editable*/ color:#f05b6b;
          /*@editable*/ font-family:Helvetica;
          /*@editable*/ font-size:14px;
          /*@editable*/ font-weight:bold;
          /*@editable*/ line-height:100%;
          overflow:hidden;
          /*@editable*/ text-align:left;
      }

      /**
      * @tab Body
      * @section data table heading link
      * @tip Set the styling for your email's data table links. Choose a color that helps them stand out from your text.
      */
      .dataTableHeading a:link, .dataTableHeading a:visited, /* Yahoo! Mail Override */ .dataTableHeading a .yshortcuts /* Yahoo! Mail Override */{
          /*@editable*/ color:#f596a1;
          /*@editable*/ font-weight:bold;
          /*@editable*/ text-decoration:none;
      }

      /**
      * @tab Body
      * @section data table text
      * @tip Set the styling for your email's data table text. Choose a size and color that is easy to read.
      */
      .dataTableContent{
          /*@editable*/ border-top:2px solid #fff;
          /*@editable*/ color:#202020;
          /*@editable*/ font-family:Helvetica;
          /*@editable*/ font-size:12px;
          /*@editable*/ font-weight:bold;
          /*@editable*/ line-height:100%;
          /*@editable*/ text-align:left;
      }

      /**
      * @tab Body
      * @section data table link
      * @tip Set the styling for your email's data table links. Choose a color that helps them stand out from your text.
      */
      .dataTableContent a:link, .dataTableContent a:visited, /* Yahoo! Mail Override */ .dataTableContent a .yshortcuts /* Yahoo! Mail Override */{
          /*@editable*/ color:#202020;
          /*@editable*/ font-weight:bold;
          /*@editable*/ text-decoration:underline;
      }

      /**
      * @tab Body
      * @section button style
      * @tip Set the styling for your email's button. Choose a style that draws attention.
      */
      .templateButton{
          -moz-border-radius:3px;
          -webkit-border-radius:3px;
          /*@editable*/ background-color:#336699;
          /*@editable*/ border:0;
          border-collapse:separate !important;
          border-radius:3px;
      }

      /**
      * @tab Body
      * @section button style
      * @tip Set the styling for your email's button. Choose a style that draws attention.
      */
      .templateButton, .templateButton a:link, .templateButton a:visited, /* Yahoo! Mail Override */ .templateButton a .yshortcuts /* Yahoo! Mail Override */{
          /*@editable*/ color:#FFFFFF;
          /*@editable*/ font-family:Arial;
          /*@editable*/ font-size:15px;
          /*@editable*/ font-weight:bold;
          /*@editable*/ letter-spacing:-.5px;
          /*@editable*/ line-height:100%;
          text-align:center;
          text-decoration:none;
      }

      .bodyContent img{
          display:inline;
          height:auto;
      }

      /* /\/\/\/\/\/\/\/\/\/\ STANDARD STYLING: FOOTER /\/\/\/\/\/\/\/\/\/\ */

      /**
      * @tab Footer
      * @section footer style
      * @tip Set the background color and top border for your email's footer area.
      * @theme footer
      */
      #templateFooter{
          /*@editable*/ background-color:#FFFFFF;
          /*@editable*/ border-top:0;
      }

      /**
      * @tab Footer
      * @section footer text
      * @tip Set the styling for your email's footer text. Choose a size and color that is easy to read.
      * @theme footer
      */
      .footerContent div{
          /*@editable*/ color:#707070;
          /*@editable*/ font-family:Arial;
          /*@editable*/ font-size:12px;
          /*@editable*/ line-height:125%;
          /*@editable*/ text-align:center;
      }

      /**
      * @tab Footer
      * @section footer link
      * @tip Set the styling for your email's footer links. Choose a color that helps them stand out from your text.
      */
      .footerContent div a:link, .footerContent div a:visited, /* Yahoo! Mail Override */ .footerContent div a .yshortcuts /* Yahoo! Mail Override */{
          /*@editable*/ color:#336699;
          /*@editable*/ font-weight:normal;
          /*@editable*/ text-decoration:underline;
      }

      .footerContent img{
          display:inline;
      }

      /**
      * @tab Footer
      * @section utility bar style
      * @tip Set the background color and border for your email's footer utility bar.
      * @theme footer
      */
      #utility{
          /*@editable*/ background-color:#FFFFFF;
          /*@editable*/ border:0;
      }

      /**
      * @tab Footer
      * @section utility bar style
      * @tip Set the background color and border for your email's footer utility bar.
      */
      #utility div{
          /*@editable*/ text-align:center;
      }

      #monkeyRewards img{
          max-width:190px;
      }

    </style>
  </head>
  <body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">
    <center>
      <table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="backgroundTable">
        <tr>
          <td align="center" valign="top" style="padding-top:20px;">
            <table border="0" cellpadding="0" cellspacing="0" width="600" id="templateContainer">
              <tr>
                <td align="center" valign="top">
                  <!-- // Begin Template Header \\ -->
                  <table border="0" cellpadding="0" cellspacing="0" width="600" id="templateHeader">
                    <tr>
                      <td class="headerContent">

                        <!-- // Begin Module: Standard Header Image \\ -->
                        <img src="http://www.momocuppy.com/images/layout/newsletter/logo.jpg" style="max-width:600px;" id="headerImage campaign-icon" mc:label="header_image" mc:edit="header_image" mc:allowdesigner mc:allowtext />
                        <!-- // End Module: Standard Header Image \\ -->

                      </td>
                    </tr>
                  </table>
                  <!-- // End Template Header \\ -->
                </td>
              </tr>
              <tr>
                <td align="center" valign="top">
                  <!-- // Begin Template Body \\ -->
                  <table border="0" cellpadding="0" cellspacing="0" width="600" id="templateBody">
                    <tr>
                      <td valign="top">

                        <!-- // Begin Module: Standard Content \\ -->
                        <table border="0" cellpadding="20" cellspacing="0" width="100%">
                          <tr>
                            <td valign="top" class="bodyContent">
                              <div mc:edit="std_content00">
                                <h2 class="h2">Order Confirmation for #<?php echo $order_no; ?></h2>
                                <br />
                                <strong>Dear <?php echo $firstname; ?>,</strong> <br /><br />
                                Thank you for shopping with us. Your order is currently awaiting payment via bank-transfer.<br />
                                Order details :

                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td valign="top" style="padding-top:0; padding-bottom:0;">
                              <table border="0" cellpadding="10" cellspacing="0" width="100%" class="templateDataTable">
                                <tr>
                                  <th scope="col" valign="top" width="10%" class="dataTableHeading" mc:edit="data_table_heading00">
                                    Picture
                                  </th>
                                  <th scope="col" valign="top" width="20%" class="dataTableHeading" mc:edit="data_table_heading01">
                                    Name
                                  </th>
                                  <th scope="col" valign="top" width="20%" class="dataTableHeading" mc:edit="data_table_heading02">
                                    Description
                                  </th>
                                  <th scope="col" valign="top" width="15%" class="dataTableHeading" mc:edit="data_table_heading02">
                                    Price
                                  </th>  
                                  <th scope="col" valign="top" width="10%" class="dataTableHeading" mc:edit="data_table_heading02">
                                    Qty
                                  </th>  
                                  <th scope="col" valign="top" width="15%" class="dataTableHeading" mc:edit="data_table_heading02">
                                    Amount
                                  </th>                                                                                                                                                                                                     
                                </tr>
                                <?php 
                                  $subtotal = 0;
                                  foreach ($product as $value) {
                                    ?>
                                    <tr mc:repeatable>
                                      <td valign="top" class="dataTableContent" mc:edit="data_table_content00">
                                        <img src="http://www.momocuppy.com/mmcp/images/products/<?php echo $value->img ?>" width="51"/>
                                      </td>
                                      <td valign="center" class="dataTableContent" mc:edit="data_table_content01">
                                        <?php echo $value->product_name ?>
                                      </td>
                                      <td valign="center" class="dataTableContent" mc:edit="data_table_content01">
                                        <?php echo $value->color_name ?>
                                      </td>
                                      <td valign="center" class="dataTableContent" mc:edit="data_table_content02">
                                        IDR <?php echo number_format($value->product_price,2,',','.'); ?>
                                      </td>
                                      <td valign="center" class="dataTableContent" mc:edit="data_table_content02">
                                        <?php echo $value->qty ?>
                                      </td>
                                      <td valign="center" class="dataTableContent" mc:edit="data_table_content02">
                                        IDR <?php echo number_format($value->product_price * $value->qty,2,',','.'); ?>
                                      </td>   
                                    </tr>  
                                    <?php
                                    $subtotal += $value->product_price * $value->qty;
                                  }
                                ?>
                              </table>
                            </td>
                          </tr>
                          <tr>
                            <td valign="top" class="bodyContent">
                              <div mc:edit="std_content01">
                                <div style="clear:both;float:right;">
                                  <span style="float:left;font-weight:bold;text-align:right;width:150px;">Item Total :	</span>
                                  <span style="float:left;width:150px;text-align:right;">IDR <?php echo number_format($subtotal,2,',','.'); ?></span>                                                              
                                </div>
                                <div style="clear:both;float:right;">
                                  <span style="float:left;font-weight:bold;text-align:right;width:170px;">Shipping &amp; Handling :	</span>
                                  <span style="float:left;width:150px;text-align:right;">IDR <?php echo number_format($shipping,2,',','.'); ?></span>                                                            
                                </div>  
                                <div style="clear:both;float:right;">
                                  <span style="float:left;font-weight:bold;text-align:right;width:170px;">Total :	</span>
                                  <span style="float:left;width:150px;text-align:right;"><strong>IDR <?php echo number_format($subtotal+$shipping,2,',','.'); ?></strong></span>                                                            
                                </div>                                                                                                                                                                                     

                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div style="font-family:Arial, Helvetica, sans-serif;font-size:14px;">
                                Shipping Carrier : <strong>JNE <?php echo $courier; ?></strong>
                              </div>
                            </td>
                          </tr>


                          <!--start payment info-->
                          <tr>
                            <td valign="top" style="padding-top:0; padding-bottom:0;">
                              <table border="0" cellpadding="10" cellspacing="0" width="100%" class="templateDataTable">
                                <tr>
                                  <th scope="col" valign="top" width="50%" class="dataTableHeading" mc:edit="data_table_heading00">
                                    Delivery Address
                                  </th>
                                  <th scope="col" valign="top" width="50%" class="dataTableHeading" mc:edit="data_table_heading01">
                                    Billing Address
                                  </th>                                                                                                                                                                                                     
                                </tr>


                                <tr mc:repeatable>
                                  <td valign="top" class="dataTableContent" mc:edit="data_table_content00" style="font-weight:normal;line-height:120%;">
                                    <strong><?php echo $firstname." ".$lastname; ?></strong><br  />
                                    <?php echo $street_address; ?><br  />
                                    <?php echo $city." ".$zip_code; ?><br  />
                                    <?php echo $country; ?><br />
                                    <?php echo $phone; ?>
                                  </td>
                                  <td valign="top" class="dataTableContent" mc:edit="data_table_content00" style="font-weight:normal;line-height:120%;">
                                    <strong><?php echo $firstname." ".$lastname; ?></strong><br  />
                                    <?php echo $street_address; ?><br  />
                                    <?php echo $city." ".$zip_code; ?><br  />
                                    <?php echo $country; ?><br />
                                    <?php echo $phone; ?>
                                  </td>                                                                                                                                    

                                </tr>
                              </table>
                            </td>
                          </tr>    

                          <tr>
                            <td>
                              <div style="font-family:Arial, Helvetica, sans-serif;font-size:14px;line-height:150%;">
                                You may now make a bank tranfer to any of the bank account listed below :
                                <ul>
                                  <li style="font-weight:bold;"><?php echo $payment_account.' / '.$payment_account_name.' / '.$payment_account; ?></li>
                                </ul>
                                Please note that payment has to be made within 48 hours to secure your order.<br />
                                Failure to make payment within the stipulated time-frame will result in cancellation of your order. <br /><br />
                                After you made payment, kindly apprise us of your transaction details <a href="http://www.momocuppy.com/order/confirm/" style="color:#f16170;">here</a>
                                <br /><br />
                                <span style="color:#f16170;"><em>Cheers</em></span><br />
                                <strong style="color:#f16170;">MomoCuppy</strong>
                              </div>
                            </td>
                          </tr> 
                          <!--end payment info-->                                               

                        </table>
                        <!-- // End Module: Standard Content \\ -->

                      </td>
                    </tr>
                  </table>
                  <!-- // End Template Body \\ -->
                </td>
              </tr>

            </table>
            <br />
          </td>
        </tr>
      </table>
    </center>
  </body>
</html>