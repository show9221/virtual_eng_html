<?php
  include "page_header.php";
  if( $_GET['pageid'] ) { $pageid = $_GET['pageid']; }
  if( $_POST['pageid'] ) { $pageid = $_POST['pageid']; }
  if( $_POST['agree_terms'] ) { $agree_terms = $_POST['agree_terms']; }
  if( $_POST['agree_private'] ) { $agree_private = $_POST['agree_private']; }

  if( !$pageid ) { echo "<script>location.href='/members/login/';</script>"; exit; }
  if( ( !$pageid || $pageid=="login") && $members_id && $members_name && $members_tel && $members_email ) { echo "<script>location.href='/members/info/';</script>"; exit; }
  if( $pageid == "register" && ( !$agree_terms || $agree_terms!='agree' || !$agree_private || $agree_private!='agree' ) ) { echo "<script>location.href='/members/private/';</script>"; exit; }
  switch( $pageid ) {
    case "info" : case "login" : case "private" : case "register" : case "modify" : case "withdraw" : case "findid" : case "findpw" : case "changepw" : case "find_result" :
      echo "<link type='text/css' rel='stylesheet' href='/page/members.css?fd=".filemtime("./page/members.css")."'>";
      echo "<script src='/page/members.js?fd=".filemtime('./page/members.js')."'></script>";
      include "./page/members_".$pageid.".php";
    break;
    default :
      echo "<script>alert('잘못된 접근입니다.'); history.back();</script>";
    break;
  }

  include "page_footer.php";
?>