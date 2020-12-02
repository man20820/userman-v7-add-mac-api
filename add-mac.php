<?php
   require('connection/routeros_api.class.php');
   $mac= $_GET['mac'];
   $group= $_GET['group'];
   $API = new RouterosAPI();
   $API->debug = false;
   if ($API->connect('10.208.1.30', 'belajar', 'api')) {
      $API->comm("/user-manager/user/add", array(
         "name"     => $mac,
         "group" => $group,
      ));
      print("Oke");
      $API->disconnect();
   }

   $url='index.php';
   echo '<META HTTP-EQUIV=REFRESH CONTENT="3; '.$url.'">';
?>