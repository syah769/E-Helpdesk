<?php 
include("connect.php");
$actionName = $data->actionName;
 
if($actionName == "deleteTicket"){
 
	$TIC_ID  = isset($data->TIC_ID) ? $data->TIC_ID : '';
	
	
 
	if(!empty($TIC_ID)){
		$query = "DELETE FROM ticket WHERE TIC_ID=$TIC_ID";
		$result = mysqli_query($sqlconn, $query);
		
		if($result){
		    $resultData = array('status' => true, 'message' => 'Deleted Successfully...');
	    }else{
	    	$resultData = array('status' => false, 'message' => 'Can\'t able to delete a post details...');
	    }
		
	}
	else{
    	$resultData = array('status' => false, 'message' => 'Please enter ticket details...');
    }
 
    echo json_encode($resultData);
}
?>