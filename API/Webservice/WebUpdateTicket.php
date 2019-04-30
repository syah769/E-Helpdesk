<?php 
include("connect.php");
//$actionName = $_POST["actionName"];
$actionName = $data->actionName;
 
if($actionName == "updateTicket"){
 
	$TIC_ID   		= isset($data->TIC_ID) ? $data->TIC_ID : '';
	$TIC_Subject 	= isset($data->TIC_Subject) ? $data->TIC_Subject : '';
	$TIC_Tech 		= isset($data->TIC_Tech) ? $data->TIC_Tech : '';
	$TIC_Body 		= isset($data->TIC_Body) ? $data->TIC_Body : '';

	if(!empty($TIC_ID) && !empty($TIC_Subject) && !empty($TIC_Tech) && !empty($TIC_Body)){
		$query = "UPDATE ticket SET TIC_Subject='$TIC_Subject', TIC_Tech='$TIC_Tech', TIC_Body='$TIC_Body' WHERE TIC_ID=$TIC_ID";
		
		$result = mysqli_query($sqlconn, $query);
		if($result){
		    $resultData = array('status' => true, 'message' => 'Updated Successfully...');
	    }else{
	    	$resultData = array('status' => false, 'message' => 'Can\'t able to update a ticket details...');
	    }
	}
	else{
    	$resultData = array('status' => false, 'message' => 'Please enter ticket details...');
    }
 
    echo json_encode($resultData);
}
?>