<?php
  include "setting/include_foot.php";
?>
<div style="position:relative;">
<div id="page_footer">
  <div class="footer_links" style="background-image:url('/img/footer/family01.png');" data-href="http://vepotex.or.kr" ></div>
  <div class="footer_links" style="background-image:url('/img/footer/family02.png');" data-href="http://www.fiti.re.kr" ></div>
  <div class="footer_links" style="background-image:url('/img/footer/family03.png');" data-href="https://www.dyetec.or.kr" ></div>
  <div class="footer_links" style="background-image:url('/img/footer/family04.png');" data-href="http://www.motie.go.kr" ></div>
  <div class="footer_links" style="background-image:url('/img/footer/family05.png');" data-href="https://www.kiat.or.kr/" ></div>
  <div id="footer_math2market" class="font_bold txtCenter">"Images supplied by and reproduced with permission from Math2Market GmbH, Germany"</div>
  <div class="clear_both"></div>
  <div class="txtCenter" id="footer_info">
    <a href="/pages/agreement/" target="_self" onfocus="this.blur();"><span class='copy_menu pages_memo font_regular'>이용약관</span></a>
    <a href="/pages/policy/" target="_self" onfocus="this.blur();"><span class='copy_menu pages_memo font_bold'>개인정보처리방침</span></a>
    <a href="/pages/emailcollectionrefuse/" target="_self" onfocus="this.blur();"><span class='copy_menu pages_memo font_regular'>이메일무단수집거부</span></a>
    <?php
      $company_item_k = 0;
      if( $foot_company ) { echo "<span class='company_item pages_memo font_bold'>".$foot_company."</span>"; }
      if( $foot_address ) { echo "<span class='company_item pages_memo font_regular'>".$foot_address."</span>"; }
      if( $foot_fax ) { echo "<span class='company_item pages_memo font_regular'>팩스 : ".$foot_fax."</span>"; }
      if( $foot_no_access ) { echo "<span class='company_item pages_memo font_regular'>사업자등록번호 : ".$foot_no_access."</span>"; }
      if( $foot_owner ) { echo "<span class='company_item pages_memo font_regular'>대표 : ".$foot_owner."</span>"; }
      echo "<span class='company_item pages_memo font_regular'>담당자 전화번호 및 이메일 : ".$foot_tel." , ".$foot_email."</span>";
    ?>
    <span class="company_item pages_description font_light txtCenter" id="footer_copy">COPYRIGHT 2022 <?=$foot_company?>. ALL RIGHTS RESERVED.</span>
  </div>
</div>
</div>