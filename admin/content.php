<?php
  @$page = $_GET['page'];

  if ($page == "home") {
    include "home.php";
    
    }elseif ($page == "visimisi") {
        include "visimisi/edit_visimisi.php";
    }else {
        include "home.php";
    }
?>