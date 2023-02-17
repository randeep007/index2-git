<?php
$itemno = $_REQUEST['itemno'];
$itemno = $_REQUEST['quantity'];

@mysql_connect ('localhost','root', "") or die ('Server Not Available');

@mysql_select_db ('property') or die ('Database Not Available');

$query="insert into purchasedetail values ('$itemno', '$quantity'‚null, null)";
$result = mysql_query($query) ;

?>