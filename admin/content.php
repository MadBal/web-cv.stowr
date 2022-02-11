<?php
  @$page = $_GET['page'];

  if ($page == "home") {
    include "home.php";
    
    }elseif ($page == "pelayanan") {
        include "pelayanan/visimisi.php";
    }else {
        include "home.php";
    }
?>