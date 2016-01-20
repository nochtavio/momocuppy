<?php 
function track_order($memberid,$order_no){
	global $db;
	
	$strsql = "
		SELECT 
			status, resi_no
		FROM ms_order WHERE order_no = '".$db->escape($order_no)."' AND id_member=".$db->escape($memberid)."
		LIMIT 0,1		
	";
	

	$result = $db->get_row($strsql);
	if($result){
		 return $result;
	}else{
		return false;
	}	
}
?>