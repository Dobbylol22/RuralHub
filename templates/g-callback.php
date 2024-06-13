<!-- When user click on their email or when user create their mail ID. It redirects to index.php(new page) -->
<?php
	require_once "config.php";
    if (isset($_SESSION['access_token']))
    {
		$gClient->setAccessToken($_SESSION['access_token']);
    }
	else if (isset($_GET['code'])) {
		$token = $gClient->fetchAccessTokenWithAuthCode($_GET['code']);
		$_SESSION['access_token'] = $token;
	}

	else if($gClient->isAccessTokenExpired()) {

        // save refresh token to some variable
        $refreshTokenSaved = $gClient->getRefreshToken();

        // update access token
        $gClient->fetchAccessTokenWithRefreshToken($refreshTokenSaved);

        // pass access token to some variable
        $accessTokenUpdated = $gClient->getAccessToken();

        // append refresh token
        $accessTokenUpdated['refresh_token'] = $refreshTokenSaved;

        //Set the new acces token
        $accessToken = $refreshTokenSaved;
        $gClient->setAccessToken($accessToken);

        // save to file
        file_put_contents($this->tokenFile, 
       json_encode($accessTokenUpdated));
	}
	
    else{
		header('Location: smlogin.php');
	    exit();
	}

	
	$oAuth = new Google_Service_Oauth2($gClient);
	$userData = $oAuth->userinfo_v2_me->get();
    
	$_SESSION['id'] = $userData['id'];
	$_SESSION['email'] = $userData['email'];
	$_SESSION['gender'] = $userData['gender'];
	$_SESSION['picture'] = $userData['picture'];
	$_SESSION['familyName'] = $userData['familyName'];
	$_SESSION['giveName'] = $userData['giveName'];

	header('Location: index.php');
	exit();
?>