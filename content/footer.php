  <!--FOOTER-->
  <div id="footer"></div>
  <!--FOOTER-->  
</div>
<!--CONTAINER-->

<script type="text/javascript" src="/assets/js/fontsmoothie.min.js" async></script>
<script type="text/javascript" src="/assets/js/jquery.min.js" ></script>
<script type="text/javascript" src="/assets/js/mfp.js" ></script>
<script type="text/javascript" src="/assets/js/bflogin.js" ></script>
<script type="text/javascript" src="/assets/js/mfp-message.js" ></script>
<script type="text/javascript">
  var base_url = "http://www.momocuppy.fe/mmcp/";
  var cur_url = "<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" ?>";
</script>

<?php 
//js
$varjs = strtok($js,",");
while($varjs) {
  echo "<script type=\"text/javascript\" src=\"/assets/js/".$varjs.".js\"></script>\n";
  $varjs = strtok(",");
}
//end js	
?>
</body>
</html>