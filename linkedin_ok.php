<h1>PALO IT's Linkedin Informations</h1>

<?php 

	session_start();
	require_once('linkedin_app.php');

	//$strAccessToken = "AQVD1C_pBDN29zckpLIMzOIKHczQoP4nMjfwsdK8_196pkdmWYIQ6eGJ3LBGkuKdcFaeXi8_ZF4WwjwDIwlmP7uXXq0Ln2Ey7tya38_CZvKiL9z5A2576vVehZgAXiSr6jc-QPsjPs9QP1Ue5eyEFhjj-bW8KGuSXCafNU1LkhdGC8JD4nU";	

	/*

	$strAccessToken =  $_SESSION['_oauth_token'];	
	$ObjLinkedIn = new LinkedInOAuth2($strAccessToken); 

	$context = stream_context_create(array(
	    'http' => array(
	        'header'  => "Authorization: Bearer " . $strAccessToken
	    )
	));
	
	$homepage = file_get_contents('https://www.linkedin.com/company/palo-it/followers?page_num=2', false, $context);
	var_dump( $homepage );

	*/


	//$strAccessToken = "AQVD1C_pBDN29zckpLIMzOIKHczQoP4nMjfwsdK8_196pkdmWYIQ6eGJ3LBGkuKdcFaeXi8_ZF4WwjwDIwlmP7uXXq0Ln2Ey7tya38_CZvKiL9z5A2576vVehZgAXiSr6jc-QPsjPs9QP1Ue5eyEFhjj-bW8KGuSXCafNU1LkhdGC8JD4nU";	

	$strAccessToken =  $_SESSION['_oauth_token'];	
	$ObjLinkedIn = new LinkedInOAuth2($strAccessToken); 
	$intCompanyId = 2452379; // This is PALO-IT's Linkedin Account ID


	// GET Company's Info
	$arrCompanyInfo = $ObjLinkedIn->getCompany($intCompanyId);
	var_dump($arrCompanyInfo);

	// GET Company's Number of Followers
	$arrCompanyFollowers = $ObjLinkedIn->getCompanyFollowers($intCompanyId);
	var_dump($arrCompanyFollowers);
	

?>
