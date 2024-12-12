<?php
  include_once "page_pre_header.php";
  include_once "setting/include_ogtag.php";
  include_once "setting/include_foot.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="pragma" content="no-cache">
    <meta http-equiv='Content-Type' content='text/html; charset=utf8' >
    <meta name='viewport' content='width=device-width,user-scalable=no,initial-scale=1,minimum-scale=1,initial-scale=1' >
    <meta http-equiv='imagetoolbar' content='no' >
    <title><?=$og_title?></title>
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?=$og_title?>">
    <meta property="og:description" content="<?=$og_description?>">
    <meta property="og:url" content="<?=$og_domain?>">
    <meta property="og:image" content="<?=$og_domain?>/img/base/og_image.jpg">
    <link rel="canonical" href="<?=$og_domain?>">
    <meta name="keywords" content="<?=$og_description?>">
    <meta name="description" content="<?=$og_description?>">
    <script>
      var userAgent = navigator.userAgent.toLowerCase(); // 접속 핸드폰 정보
      // 모바일 홈페이지 바로가기 링크 생성
      if(userAgent.match('iphone')) {
        document.write('<link rel="apple-touch-icon" href="/img/base/shortcut_114.png" />')
      } else if(userAgent.match('ipad')) {
        document.write('<link rel="apple-touch-icon" sizes="72*72" href="/img/base/shortcut_114.png" />')
      } else if(userAgent.match('ipod')) {
        document.write('<link rel="apple-touch-icon" href="/img/base/shortcut_114.png" />')
      } else if(userAgent.match('android')) {
        document.write('<link rel="shortcut icon" href="/img/base/shortcut_72.png" />')
      }
      </script>
    <script src="/js/jquery-1.12.4.min.js"></script>
    <link type='text/css' rel='stylesheet' href='/fiti.css?fd=<?php echo filemtime("fiti.css"); ?>'>
    <script src="/js/fiti.js?fd=<?php echo filemtime("js/fiti.js"); ?>"></script>
  </head>
  <body>
    <div id="top_nav">
      <div id="nav_area">
        <button type="button" id="nav_close"></button>
        <form name="members_info" class="members_item">
          <input type="hidden" name="pages_action">
          <a href="/" target="_self" onfocus="this.blur();"><div class="pages_memo font_regular">홈으로</div></a>
          <a><div class="pages_description font_light">&nbsp;|&nbsp;</div></a>
          <?php if( $members_id ) { ?>
          <a href="#" target="_self" onfocus="this.blur();"><div class="pages_memo font_regular" id="btn_logout">로그아웃</div></a>
          <a><div class="pages_description font_light">&nbsp;|&nbsp;</div></a>
          <a href="/members/info/" target="_self" onfocus="this.blur();"><div class="pages_memo font_regular">회원정보수정</div></a>
          <?php } else { ?>
          <a href="/members/register/" target="_self" onfocus="this.blur();"><div class="pages_memo font_regular">회원가입</div></a>
          <a><div class="pages_description font_light">&nbsp;|&nbsp;</div></a>
          <a href="/members/login/" target="_self" onfocus="this.blur();"><div class="pages_memo font_regular">로그인</div></a>
          <?php } ?>
        </form>
        <a href="javascript:get_popitem('pop_virtual_test');" target="_self" onfocus="this.blur();"><div class="nav_item nowrap font_bold">AI 필터성능 예측 시스템</div></a>
        <a href="/pages/introduction/" target="_self" onfocus="this.blur();"><div class="nav_item nowrap font_bold">가상 공학 사업 소개</div></a>
        <a href="/community/usecase/" target="_self" onfocus="this.blur();"><div class="nav_item nowrap font_bold">가상 공학 활용사례</div></a>
        <a href="/community/promotion/" target="_self" onfocus="this.blur();"><div class="nav_item nowrap font_bold">가상 공학 홍보활동</div></a>
        <a href="javascript:get_popitem('pop_project_request');" target="_self" onfocus="this.blur();"><div class="nav_item nowrap font_bold">프로젝트 신청</div></a>
      </div>
    </div>
    <div class="pop_layer" id="pop_members_alert" style="display:none;">
      <div id="pop_alert">
        <div class="font_bold color_081328 txtCenter" id="alert_title">로그인이 필요한 메뉴입니다.</div>
        <div class="font_regular color_081328 txtCenter" id="alert_subtitle">로그인 페이지로 이동하시겠습니까?</div>
        <div id="alert_btns">
          <button type="button" class="btn_alert_out font_regular color_081328 txtCenter" onclick="$('.pop_layer,#pop_members_alert').hide();">아니오</button>
          <button type="button" class="btn_alert_on font_regular color_ffffff txtCenter" onclick="location.href='/members/';">네</button>
          <div class="clear_both"></div>
        </div>
      </div>
    </div>
    <div class="pop_layer" id="pop_virtual_test" data-url="/page/virtualtest.php" style="display:none;"><button type="button" class="pop_close"></button><div></div></div>
    <div class="pop_layer" id="pop_project_request" data-url="/page/pr.php" style="display:none;"><div></div></div>
    <div id="site_contents">
      <div id="top_area">
        <button type="button" id="top_menu"></button>
        <button type="button" id="top_home"></button>
      </div>