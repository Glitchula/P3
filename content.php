<?php
    // check of $_GET["content"] een waarde heeft 
    if (isset($_GET["content"])) { 
      include($_GET["content"] .  ".php"); 
    } else { 
      include ("./home.php");
    }
?>