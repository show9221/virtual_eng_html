<?php
  include "page_header.php";

  $cn = $_GET['cn']; if( $_POST['cn'] ) { $cn = $_POST['cn']; }
  $cv = $_GET['cv']; if( $_POST['cv'] ) { $cv = $_POST['cv']; }
  $bn = $_GET['bn']; if( $_POST['bn'] ) { $bn = $_POST['bn']; }
  $part = $_GET['part']; if( $_POST['part'] ) { $part = $_POST['part']; }
  $find_name = $_GET['find_name']; if( $_POST['find_name'] ) { $find_name = $_POST['find_name']; }
  $find_val = $_GET['find_val']; if( $_POST['find_val'] ) { $find_val = $_POST['find_val']; }
  $page = $_GET['page']; if( $_POST['page'] ) { $page = $_POST['page']; } if( !$page ) { $page = 1; }
  $limit = $_GET['limit']; if( $_POST['limit'] ) { $limit = $_POST['limit']; }
  //echo "<p>check/".$cn."/".$cv."/".$bn."/".$part."/".$find_name."/".$find_val."/".$page."/".$limit."</p>";
  include "setting/config.php";
  $community_info_result = ${$DBcon} -> query( "select * from ".$table_head."_community where community_number='".$cn."' or community_subname='".$cn."'" );
  if( $community_info_result -> num_rows == 1 ) {
    $community_info = $community_info_result -> fetch_assoc();
    $cn = $community_info['community_number'];
    switch( $community_info['community_type'] ) {
      case '앨범' : $board_type = "gallery"; break;
      case '자료실' : $board_type = "bbs"; break;
      default : $board_type = "board"; break;
    }
    if( !$cv ) { $cv = "list"; }

    $top_banner_bg = "";
    switch( $cn ) {
      case '4' : case 'promotion' :
        //$top_banner_bg = "/img/index_nav/banner04.png";
      break;
      case '5' : case 'usecase' :
        $top_banner_bg = "/img/community/usecase_top_bg.png";
      break;
    }
    if( $top_banner_bg ) { echo "<div class=\"pages_top_banner\" style=\"background-image:url('".$top_banner_bg."');\"></div>"; }
    echo "<link type='text/css' rel='stylesheet' href='/lib/community/".$board_type."/board.css?fd=".filemtime("./lib/community/".$board_type."/board.css")."'>";
    include "./lib/community/".$board_type."/".$cv.".php";
  } else {
    echo "<script>alert('올바른 경로가 아닙니다.board'); location.href='/index.php';</script>"; exit;
  }
  ${$DBcon} -> close();

  include "page_footer.php";
?>