<?php
   $con=mysqli_connect('localhost','root','','ruralHub') or die ("Could not connect!\n");
   if (mysqli_connect_errno()) {
  printf("Connect failed: %s\n", mysqli_connect_error());

}
?>