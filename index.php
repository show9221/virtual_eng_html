<?php
  include "page_header.php";
?>
<link rel="stylesheet" href="/js/swiper-bundle.min.css" />
<script src="/js/jquery.cookie.js"></script>

<!-- intro -->
<style>
  body { background-image:url('/img/intro/bg.png'); background-position:center; background-size:cover; }
  #page_footer { position:absolute; margin-top:-80px; }
  @media (max-width:1000px) {
    #page_footer { position:relative; }
  }
</style>
<div class="intro">
  <div class="intro_circle intro_rotate"></div>
  <div class="intro_item">
    <div class="intro_txt font_light color_00254A"><span class="font_bold">B</span>rain <span class="font_bold">V</span>irtual <span class="font_bold">E</span>ngineering</div>
    <div class="count_num font_bold color_00254A" style="opacity:0.1;"></div>
  </div>
</div>
<script>
  /* intro */
  if( $.cookie('fiti_intro') != "check" ) {
    $({ val : 0 }).animate({ val : 100 }, {
      duration: 5000,
      step: function() { var num = Math.floor(this.val); $(".count_num").text(num+"%"); },
      complete: function() { var num = Math.floor(this.val); $(".count_num").text(num+"%"); }
    });
    $('.intro').find(".count_num").animate({'opacity':1},5000);
    setTimeout(function() {
      let cookie_date = new Date();
      let cookie_expires_time = 30; //minutes
      cookie_date.setTime(cookie_date.getTime() + (cookie_expires_time * 60 * 1000));
      $('.intro').addClass('intro_out'); $.cookie('fiti_intro', 'check', { expires: cookie_date });
      setTimeout(function() { $('.intro').hide(); },1000);
    },5500);
  } else {
    $('.intro').hide();
  }
</script>

<!-- index roll menu -->
<div class="page_item">
  <div class="index_roll">
    <div id="index_txt_line">
      <div class="txt_items">
        <p class="txt_line_t font_bold color_00254A">가상공학 플랫폼이란?</p>
        <p class="txt_line_t_sub font_bold color_00254A">What is Virtual Engneering Platform?</p>
      </div>
      <div class="txt_items">
        <p class="txt_line_s font_regular color_676767">가상의 공간에서 <span class="txt_line_s font_bold color_081328">컴퓨터 시뮬레이션</span>을</p>
        <p class="txt_line_s font_regular color_676767"><span class="font_bold color_081328">활용</span>하여 <span class="font_bold color_081328">제품을 설계·해석</span>하고, 신뢰성을 평가하여</p>
        <p class="txt_line_s font_regular color_676767">제품의 성능을 사전에 <span class="font_bold color_081328">검증·예측</span></p>
      </div>
      <div class="txt_items">
        <p class="txt_line_en font_regular color_676767">Design and analysis products using</p>
        <p class="txt_line_en font_regular color_676767"><span class="txt_line_en font_bold color_676767">computer simulation</span> in a virtual space,</p>
        <p class="txt_line_en font_regular color_676767">evaluate reliability, <span class="txt_line_en font_bold color_676767">validate and predict</span></p>
        <p class="txt_line_en font_regular color_676767">product performance in advance.</p>
      </div>
    </div>
  </div>
  <div class="swiper nav_roll_swiper">
    <div class="swiper-wrapper" id="index_nav_roll">
      <div class="swiper-slide roll_nav_item" data-pop="pop_virtual_test">
        <div class="nav_banner" style="background-image:url('/img/index_nav/banner01.png');">
          <div class="nav_txt font_black txtLeft">AI 필터성능 예측 시스템</div>
        </div>
      </div>
      <div class="swiper-slide roll_nav_item" data-href="/pages/introduction/" data-bgsrc="/img/pages/introduction_top_bg.png">
        <div class="nav_banner" style="background-image:url('/img/index_nav/banner02.png');">
          <div class="nav_txt font_black txtLeft">가상 공학 사업 소개</div>
        </div>
      </div>
      <div class="swiper-slide roll_nav_item" data-href="/community/usecase/" data-bgsrc="/img/community/usecase_top_bg.png">
        <div class="nav_banner" style="background-image:url('/img/index_nav/banner03.png');">
          <div class="nav_txt font_black txtLeft">가상 공학 활용사례</div>
        </div>
      </div>
      <div class="swiper-slide roll_nav_item" data-href="/community/promotion/">
        <div class="nav_banner" style="background-image:url('/img/index_nav/banner04.png');">
          <div class="nav_txt font_black txtLeft">가상 공학 홍보활동</div>
        </div>
      </div>
      <div class="swiper-slide roll_nav_item" data-pop="pop_project_request">
        <div class="nav_banner" style="background-image:url('/img/index_nav/banner05.png');">
          <div class="nav_txt font_black txtLeft">프로젝트 신청</div>
        </div>
      </div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
  <div id="index_nav_effect"></div>
</div>

<script>
  function index_txt_play() {
    let imsi_delay = 200;
    let imsi_margin;
    if( $(window).width() > 1000 ) {
      imsi_margin = "50";
    } else {
      imsi_margin = $(window).width() * 0.05;
    }
    for( let imsi_k=0; imsi_k<3; imsi_k++ ) {
      $(".txt_items").eq(imsi_k).delay(imsi_delay).stop().animate({'margin-left':imsi_margin+'px','opacity':'1'},1500);
      imsi_delay += 400;
    }
    setTimeout(function() {
      $(".txt_items").stop().animate({'margin-left':'0px','opacity':'0'},1000,function() { index_txt_play(); });
    },7000);
  }
  $(".txt_items").stop().animate({'margin-left':'0px','opacity':'0'},500,function() { index_txt_play(); });
  function index_resize() {
    //console.log( window.innerHeight + "/" + $('#page_footer').height() );
    let resize_roll_height = window.innerHeight;
    if( $(window).width() > 1000 ) {
      $('.page_item').height( resize_roll_height );
      if( resize_roll_height > 700 ) { resize_roll_height = 700; }
      $('.nav_roll_swiper').height( resize_roll_height );
      $('.index_roll').height( resize_roll_height );
    } else {
      $('.nav_roll_swiper').height( 330 );
      $('#page_footer').css({'margin-top':'-' + ( $('#page_footer').height() ) + 'px'});
      $('.page_item').height( $('.index_roll').height() + $('.nav_roll_swiper').height() + $('#page_footer').height() );
    }
  }

  function index_nav_link( check , link_href , bg_src ) {
    let this_item_top = $(check).find('.nav_banner').offset().top;
    let this_item_left = $(check).find('.nav_banner').offset().left;
    let this_item_width = $(check).find('.nav_banner').width();
    let this_item_height = $(check).find('.nav_banner').height();
    let this_item_center = ( $(window).width() / 2 ) - ( this_item_width / 2 );
    let this_top_bg_height;
    if( $(window).width() > 1000 ) { this_top_bg_height = 600; } else { this_top_bg_height = 240; }
    $('.nav_roll_swiper,.index_roll').hide();
    $('#index_nav_effect').css({'top':this_item_top,'left':this_item_left,'width':this_item_width,'height':this_item_height,'background-image':'url('+bg_src+')'});
    $('#index_nav_effect').show();
    $('#index_nav_effect').stop().animate({ 'left':this_item_center } , 300 , function() {
      $('#index_nav_effect').delay(150).animate({ 'left':0,'width':$(window).width() } , 600 , function() {
        $('#index_nav_effect').delay(150).animate({ 'top':0, 'height':this_top_bg_height+'px' } , 600 , function() {
          location.href = link_href;
        });
      });
    });
  }

  $(function() {
    index_resize();
    $('.roll_nav_item').on( 'click' , function() {
      if( $(this).data('href') && $(this).data('bgsrc') ) {
        index_nav_link( this , $(this).data('href') , $(this).data('bgsrc') );
      } else if( $(this).data('pop') ) {
        get_popitem( $(this).data('pop') );
      } else if( $(this).data('href') ) {
        location.href = $(this).data('href');
      }
    });
  });

  $(window).resize(function() {
    index_resize();
  });
</script>

<!-- Swiper JS -->
<script src="/js/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".nav_roll_swiper", {
    slidesPerView: 1.2,
    //observer: true,
    //observeParents: true,
    spaceBetween: 0,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    mousewheel: true,
    breakpoints: {
      320: { slidesPerView:1.2 },
      640: { slidesPerView:1.5 },
      720: { slidesPerView:2 },
      900: { slidesPerView:2 },
      1200: { slidesPerView:2 },
    }
  });
</script>

<?php include "page_footer.php"; ?>