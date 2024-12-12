<?php
  include "page_header.php";

  $pn = $_GET['pn']; if( $_POST['pn'] ) { $pn = $_POST['pn']; }

  if( file_exists("./page/".$pn.".php") == true ) {
    include "./page/".$pn.".php";
  } else {
    echo "<script>alert('올바른 경로가 아닙니다.-page/".$pn."'); location.href='/index.php';</script>"; exit;
  }

  include "page_footer.php";
?>