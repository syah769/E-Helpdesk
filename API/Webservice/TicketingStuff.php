<?php // Get listing of ticket according to status
// ##############config##############
		include("connect.php"); 
		
	

		
    //sample input from apps
	//$transactionType = PENDING || NEW || SOLVED;
	//$adminID = $data->user_ID;
	// $acz =  $data->access;
	
	$transactionType = $data->Tran_Type;
	$adminID = $data->user_ID;
	$acz =  $data->access;
	$ticketID = $data->ticket_ID; 
	$Editsubject = $data->editsubject;
	$check = 0;
	
	if($acz == "ADMIN"){
	
						if($transactionType == "NEW"){
						
						$dataquery = mysqli_query( $sqlconn,"SELECT * FROM ticket WHERE  TIC_Status = '$transactionType' ORDER BY TIC_ID DESC");
						
						// Let's say everything is in order
							if(mysqli_num_rows($dataquery) >= 1){
							$check = 1;
							while($row = mysqli_fetch_assoc($dataquery)) {
								   
								$output = array('TIC_ID' => $row["TIC_ID"],
												'TIC_Status' => $row["TIC_Status"],
												'TIC_Date' => $row["TIC_Date"],
												'TIC_Subject' => $row["TIC_Subject"],
												'TIC_Tech' => $row["TIC_Tech"],
												'TIC_Body' => $row["TIC_Body"],
												'User_ID' => $row["User_ID"],
												);
							   
								 $results[] = $output;
						
							}
						
						}

						}
	
	
						if($transactionType == "PENDING"){
							$dataquery = mysqli_query( $sqlconn,"SELECT * FROM ticket WHERE  TIC_Status = '$transactionType' and Admin_ID = '$adminID' ORDER BY TIC_ID DESC");
						
						// Let's say everything is in order
							if(mysqli_num_rows($dataquery) >= 1){
							$check = 1;
							while($row = mysqli_fetch_assoc($dataquery)) {
								   
								$output = array('TIC_ID' => $row["TIC_ID"],
												'TIC_Status' => $row["TIC_Status"],
												'TIC_Date' => $row["TIC_Date"],
												'TIC_Subject' => $row["TIC_Subject"],
												'TIC_Tech' => $row["TIC_Tech"],
												'TIC_Body' => $row["TIC_Body"],
												'User_ID' => $row["User_ID"],
												
												);
							   
								 $results[] = $output;
						
							}
						
						}
						
						}
		
							if($transactionType == "ALL-PENDING"){
							$dataquery = mysqli_query( $sqlconn,"SELECT * FROM ticket WHERE  TIC_Status = 'PENDING' ORDER BY TIC_ID DESC");
						
						// Let's say everything is in order
							if(mysqli_num_rows($dataquery) >= 1){
							$check = 1;
							while($row = mysqli_fetch_assoc($dataquery)) {
								   
								$output = array('TIC_ID' => $row["TIC_ID"],
												'TIC_Status' => $row["TIC_Status"],
												'TIC_Date' => $row["TIC_Date"],
												'TIC_Subject' => $row["TIC_Subject"],
												'TIC_Tech' => $row["TIC_Tech"],
												'TIC_Body' => $row["TIC_Body"],
												'User_ID' => $row["User_ID"],
												
												);
							   
								 $results[] = $output;
						
							}
						
						}

						}
	
							if($transactionType == "SOLVED"){
							$dataquery = mysqli_query( $sqlconn,"SELECT * FROM ticket WHERE  TIC_Status = '$transactionType' ORDER BY TIC_ID DESC");
						
						// Let's say everything is in order
							if(mysqli_num_rows($dataquery) >= 1){
							$check = 1;
							while($row = mysqli_fetch_assoc($dataquery)) {
								   
								$output = array('TIC_ID' => $row["TIC_ID"],
												'TIC_Status' => $row["TIC_Status"],
												'TIC_Date' => $row["TIC_Date"],
												'TIC_Subject' => $row["TIC_Subject"],
												'TIC_Tech' => $row["TIC_Tech"],
												'TIC_Body' => $row["TIC_Body"],
												'User_ID' => $row["User_ID"],
											
												);
							   
								 $results[] = $output;
								 
						
							}
						
						}
						
						}
	}
	
	if($acz == "USER"){
	    
	    //new ticket yang masuk
	    
	    if($transactionType == "NEW"){
						
						$dataquery = mysqli_query( $sqlconn,"SELECT * FROM ticket WHERE  TIC_Status = '$transactionType' ORDER BY TIC_ID DESC");
						
						// Let's say everything is in order
							if(mysqli_num_rows($dataquery) >= 1){
							$check = 1;
							while($row = mysqli_fetch_assoc($dataquery)) {
								   
								$output = array('TIC_ID' => $row["TIC_ID"],
												'TIC_Status' => $row["TIC_Status"],
												'TIC_Date' => $row["TIC_Date"],
												'TIC_Subject' => $row["TIC_Subject"],
												'TIC_Tech' => $row["TIC_Tech"],
												'TIC_Body' => $row["TIC_Body"],
												'User_ID' => $row["User_ID"],
												);
							   
								 $results[] = $output;
						
							}
						
						}

						}
						

						//pending ticket

						if($transactionType == "PENDING"){
							$dataquery = mysqli_query( $sqlconn," SELECT * FROM ticket WHERE  (TIC_Status = 'NEW' OR TIC_Status = 'PENDING') and User_ID = '$adminID' ORDER BY TIC_ID DESC");
						
						// Let's say everything is in order
							if(mysqli_num_rows($dataquery) >= 1){
							$check = 1;
							while($row = mysqli_fetch_assoc($dataquery)) {
								   
								$output = array('TIC_ID' => $row["TIC_ID"],
												'TIC_Status' => $row["TIC_Status"],
												'TIC_Date' => $row["TIC_Date"],
												'TIC_Subject' => $row["TIC_Subject"],
												'TIC_Tech' => $row["TIC_Tech"],
												'TIC_Body' => $row["TIC_Body"],
												'User_ID' => $row["User_ID"],
												
												);
							   
								 $results[] = $output;
						
							}
						
						}
						
						}	
						
						//semua ticket yang masih pending
						
						
							if($transactionType == "ALL-PENDING"){
							$dataquery = mysqli_query( $sqlconn,"SELECT * FROM ticket WHERE  TIC_Status = 'PENDING' ORDER BY TIC_ID DESC");
						
						// Let's say everything is in order
							if(mysqli_num_rows($dataquery) >= 1){
							$check = 1;
							while($row = mysqli_fetch_assoc($dataquery)) {
								   
								$output = array('TIC_ID' => $row["TIC_ID"],
												'TIC_Status' => $row["TIC_Status"],
												'TIC_Date' => $row["TIC_Date"],
												'TIC_Subject' => $row["TIC_Subject"],
												'TIC_Tech' => $row["TIC_Tech"],
												'TIC_Body' => $row["TIC_Body"],
												'User_ID' => $row["User_ID"],
												
												);
							   
								 $results[] = $output;
						
							}
						
						}

						}
		
		
		//ticket yang dah approve
		
		
		
						if($transactionType == "SOLVED"){
							$dataquery = mysqli_query( $sqlconn,"SELECT * FROM ticket WHERE  TIC_Status = '$transactionType' and    User_ID='$adminID' ORDER BY TIC_ID DESC");
						
						// Let's say everything is in order
							if(mysqli_num_rows($dataquery) >= 1){
							$check = 1;
							while($row = mysqli_fetch_assoc($dataquery)) {
								   
								$output = array('TIC_ID' => $row["TIC_ID"],
												'TIC_Status' => $row["TIC_Status"],
												'TIC_Date' => $row["TIC_Date"],
												'TIC_Subject' => $row["TIC_Subject"],
												'TIC_Tech' => $row["TIC_Tech"],
												'TIC_Body' => $row["TIC_Body"],
												'User_ID' => $row["User_ID"],
											
												);
							   
								 $results[] = $output;
								 
						
							}
						
						}
						
						}
		
	}
	
		if($check == 1){		
		echo json_encode($results);
		}
		else
		{
		$output = array('gotdata' => false);
		echo json_encode($output);
		}
		
		mysqli_close($sqlconn);
	
?>