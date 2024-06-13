<!--Config php is used for user to login from google+. -->
<?php
   session_start();
   require_once "GoogleAPI/vendor/autoload.php";
   $gClient = new Google_Client();
   $gClient->setClientId("122081398836-98q4c4j40ish1hqn87hcm4cs0lfgbttj.apps.googleusercontent.com"); #Google will identify our application and allow the usage of Google APIs and services as appropriate.
   $gClient->setClientSecret("--kwCqtQLEukXPYV1pnIlSYK"); #secretClientID key is also generated.
   $gClient->setApplicationName("Rural Hub");
   $gClient->setRedirectUri("http://localhost/RuralHub/templates/g-callback.php");
   $gClient->addScope(scope_or_scopes:"https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
   
?>