<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    header("Access-Control-Allow-Origin: *");
  header("Access-Control-Allow-Methods: POST");
  header("Access-Control-Allow-Headers: Origin, Methods, Content-Type");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Blog CI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    
    <?= link_tag('css/principal.css'); ?>    
    
</head>
<body>