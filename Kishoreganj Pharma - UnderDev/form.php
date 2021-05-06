<?php
if(isset( $_POST['name']))
$name = $_POST['name'];
if(isset( $_POST['meds']))
$meds = $_POST['meds'];
// if(isset( $_post['pn']))
// $pn = $_POST['pn'];
if(isset( $_POST['add']))
$add = $_POST['add'];



$from = "From: $name";
$recipient = "mff01bd@protonmail.com";
$meds = "Product: $meds";
// $contact = "Phone: $pn";
$add = "Address: $add";
mail($recipient, $from, $meds, $add) or die("Error!");
echo "Order Placed!";
?>