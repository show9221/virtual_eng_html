<?php
  session_start();
  extract($_SESSION);
  if( !$org_referer ) {
    $org_referer = $_SERVER['HTTP_REFERER'];
    $_SESSION['o_referer'] = $org_referer;
  }

  $check_this_page = basename($_SERVER['PHP_SELF']);
  $check_this_ip = $_SERVER['REMOTE_ADDR'];

  $use_ssl = "use";
  if( !$_SERVER['HTTPS'] && $use_ssl == "use" ) {
    if( $_SERVER['QUERY_STRING'] ) { $add_query = "?".$_SERVER['QUERY_STRING']; }
    header("Location: https://".$_SERVER['HTTP_HOST']."/".$check_this_page.$add_query);
    exit;
  }
?>