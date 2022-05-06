<?php
    $inputString = "Sample";
    $returnString = array();
    $echoString = "";
    for($inc=0; $inc<strlen($inputString); $inc++){
      $echoString.= $inputString[$inc].'-'.($inc+1).",";    
    }
    echo rtrim($echoString, ",");