{{$head_sub}}
<link rel="StyleSheet" href="{{$template}}/inc/board/border_test_01.css" type="text/css">
<div class="module_contents">
  <!-- sub banner-->
  <div class="nt_imgArea subimgArea" id="tt">
    <div class="con" style="background-image: url({{$template}}/img/_des/de01/de01_img01.jpg);">
      <p class="animated fadeInRight" id="tt">
        <b>"회원"</b>님의 성공을 위해 최선을 다하겠습니다.
      </p>
    </div>
  </div>



  <!-- mobile sub123 menu-->
  <div class="snb123">
    <a href="#none" class="current-text">협회참여<i class="glyphicon glyphicon-chevron-down"></i></a>
    <ul class="snb-inner col-3">
      <li><a href="{{$template}}/mp2/sub1.php?sub=01" class="on">회원가입</a></li>
      <li><a href="{{$template}}/mp2/sub1.php?sub=01">회원가입 <i class="glyphicon glyphicon-chevron-down"></i></a>
      </li>
      <!-- <li> <ul>
           <li><a href="{{$template}}/mp2/sub8.php?sub=08">인증회원사</a></li>
           <li><a href="{{$template}}/mp2/sub9.php?sub=09">일반회원사</a></li>
           <li><a href="{{$template}}/mp2/sub10.php?sub=10">특별회원</a></li>
            </ul>
        </li> -->
      <li><a href="{{$template}}/mp2/sub2.php?sub=02">협력기관안내 <i class="glyphicon glyphicon-chevron-down"></i></a>
      </li>
      <li>
        <ul>
          <li><a href="{{$template}}/mp2/sub2.php?sub=02">협력사</a></li>
          <li><a href="{{$template}}/mp2/sub4.php?sub=04">회원사</a></li>
          <li><a href="{{$template}}/mp2/sub5.php?sub=05">인증사</a></li>
          <li><a href="{{$template}}/mp2/sub6.php?sub=06">공인교육기관</a></li>
          <li><a href="{{$template}}/mp2/sub7.php?sub=07">해외투자처</a></li>
        </ul>
      </li>


      <li><a href="{{$template}}/mp2/sub11.php">기부금 캠페인 <i class="glyphicon glyphicon-chevron-down"></i></a>
      </li>
      <li><a href="{{$template}}/mp2/sub12.php">전문위원 신청<i class="glyphicon glyphicon-chevron-down"></i></a>

    </ul>
  </div>
  <!-- // mobile sub123 menu-->



  <div style="background-color: #fff;">




    <div class="container ">
      <!-- sub menu01-->
      <div id="s_navi">
        <h3>협회참여</h3>
        <ul id="sub_menu">
          <li {{if $get.sub eq "01" }}class="on" {{else}}{{/if}}>
            <a href="{{$template}}/mp2/sub1.php?sub=01">회원가입 <i class="glyphicon glyphicon-chevron-down"></i></a>
          </li>
          <li>
            <ul>
              <a href="{{$template}}/mp2/sub8.php?sub=08">회원사 복지몰(삼성전자)</a>
              <!--<a href="{{$template}}/mp2/sub9.php?sub=09">일반회원사</a>
           <a href="{{$template}}/mp2/sub10.php?sub=10">특별회원</a> -->
            </ul>
          </li>
          <li {{if $get.sub eq "02" }}class="on" {{else}}{{/if}} class="menu_hidden">
            <a href="{{$template}}/mp2/sub2.php?sub=02">협력기관안내<i class="glyphicon glyphicon-chevron-down"></i></a>
            <ul class="menu_hidden_sub">
              <a {{if $get.sub eq "02" }}class="on" {{else}}{{/if}} href="{{$template}}/mp2/sub2.php?sub=02">협력사</a>
              <a {{if $get.sub eq "04" }}class="on" {{else}}{{/if}} href="{{$template}}/mp2/sub4.php?sub=04">회원사</a>
              <a {{if $get.sub eq "05" }}class="on" {{else}}{{/if}} href="{{$template}}/mp2/sub5.php?sub=05">인증사</a>
              <a {{if $get.sub eq "06" }}class="on" {{else}}{{/if}} href="{{$template}}/mp2/sub6.php?sub=06">공인교육기관</a>
              <a {{if $get.sub eq "07" }}class="on" {{else}}{{/if}} href="{{$template}}/mp2/sub7.php?sub=07">해외투자처</a>
            </ul>
          </li>


          <li><a href="{{$template}}/mp2/sub11.php">기부금 캠페인 <i class="glyphicon glyphicon-chevron-down"></i></a>
          <li><a href="{{$template}}/mp2/sub12.php">전문위원 신청 <i class="glyphicon glyphicon-chevron-down"></i></a>
          </li>


        </ul>
      </div>
      <!--// sub menu01-->




      <!-- sub menu title -->
      <div class="title-wrap">
        <div class="bottom-text">
          <span><i class="glyphicon glyphicon-home"></i> 협회참여 > 회원가입</span>
          <hr>
          </hr>
          <h2 class="cont-title">회원가입</h2>
          <div class="de30">
          </div>



          <!-- 디자인원본모듈 -->
          <center>
            <div class="tab-container">
              <div class="tab active" data-tab="message">초대의 말</div>
              <div class="tab" data-tab="guide">가입안내</div>
              <div class="tab" data-tab="benefits">회원혜택</div>
            </div>




            <div id="message" class="tab-content active">
              <br><br><br>
              <!-- <p>Here is the information on how to join.</p> -->
              <img class="subinfro_promotion animate-box" style="width:930px;"
                src="https://raw.githubusercontent.com/parkhk502/img/refs/heads/main/koraia/sub3/massege2.jpg" />
              <br><br><br><br>
              <a href="https://startups.koraia.org/membership.html" target="_blank"><img
                  class="subinfro_promotion animate-box"
                  src="https://raw.githubusercontent.com/startups-koraia/startups/refs/heads/main/img/btn.jpg" /></a>
            </div>
            <div id="guide" class="tab-content">
              <!--    <p>Here are the member benefits.</p> -->
              <img class="subinfro_promotion animate-box" style="width:101%;"
                src="https://github.com/parkhk502/img/blob/main/koraia/sub3/%ED%9A%8C%EC%9B%90%ED%98%9C%ED%83%9D_01.png?raw=true" />
              <br><br><br><br>
              <a href="https://startups.koraia.org/membership.html" target="_blank"><img
                  class="subinfro_promotion animate-box"
                  src="https://raw.githubusercontent.com/startups-koraia/startups/refs/heads/main/img/btn.jpg" /></a>


            </div>
            <div id="benefits" class="tab-content">
              <style>
                .benefits-grade-selector { display: flex; justify-content: center; gap: 8px; margin: 10px 0 14px; flex-wrap: wrap; }
                .benefits-grade-selector .grade-btn { border: 1px solid #ddd; background: #fff; padding: 8px 12px; cursor: pointer; font-weight: 600; border-radius: 4px; }
                .benefits-grade-selector .grade-btn.active { border-color: #333; color: #fff; background: #333; }

                .benefits-btn-row { display: flex; justify-content: center; gap: 10px; align-items: center; margin: 10px 0 16px; flex-wrap: nowrap; overflow-x: auto; }
                .benefits-btn-row img { height: 80px; object-fit: contain; cursor: pointer; }

                .benefits-content { display: none; text-align: center; margin-top: 16px; }
                .benefits-content img { max-width: 100%; height: auto; }

                .grade-sticky { position: fixed; right: 16px; top: 140px; z-index: 1000; }
                .grade-sticky img { width: 140px; height: auto; display: block; }

                @media (max-width: 1024px) { .grade-sticky img { width: 110px; } }
                @media (max-width: 768px) {
                  .grade-sticky { right: 8px; top: 110px; }
                  .benefits-btn-row img { height: 64px; }
                }
              </style>

              <div class="benefits-grade-selector">
                <button type="button" class="grade-btn active" data-grade="프리미엄">프리미엄</button>
                <button type="button" class="grade-btn" data-grade="부회장사">부회장사</button>
                <button type="button" class="grade-btn" data-grade="이사사">이사사</button>
                <button type="button" class="grade-btn" data-grade="무료">무료</button>
              </div>

              <div class="benefits-btn-row">
                <img id="benefit-btn-1" alt="benefit button 1" />
                <img id="benefit-btn-2" alt="benefit button 2" />
                <img id="benefit-btn-3" alt="benefit button 3" />
                <img id="benefit-btn-4" alt="benefit button 4" />
              </div>

              <div class="benefits-content" id="benefit-content">
                <img id="benefit-content-img" alt="benefit content" />
              </div>

              <div class="grade-sticky" aria-hidden="true">
                <img id="grade-sticky-img" alt="selected grade" />
              </div>

              <script>
                (function () {
                  var currentGrade = '프리미엄';
                  var gradeBtns = document.querySelectorAll('#benefits .grade-btn');
                  var btnImgs = [
                    document.getElementById('benefit-btn-1'),
                    document.getElementById('benefit-btn-2'),
                    document.getElementById('benefit-btn-3'),
                    document.getElementById('benefit-btn-4')
                  ];
                  var stickyImg = document.getElementById('grade-sticky-img');
                  var contentWrap = document.getElementById('benefit-content');
                  var contentImg = document.getElementById('benefit-content-img');

                  function buildPath(grade, suffix) { return './' + encodeURIComponent(grade) + suffix; }
                  function updateUI(grade) {
                    currentGrade = grade;
                    gradeBtns.forEach(function (b) { b.classList.toggle('active', b.getAttribute('data-grade') === grade); });
                    btnImgs.forEach(function (img, idx) {
                      var num = (idx + 1).toString().padStart(2, '0');
                      img.src = buildPath(grade, '_btn' + num + '.png');
                      img.alt = grade + ' 버튼 ' + (idx + 1);
                    });
                    stickyImg.src = buildPath(grade, '.png');
                    stickyImg.alt = grade;
                    contentWrap.style.display = 'none';
                    contentImg.removeAttribute('src');
                  }

                  gradeBtns.forEach(function (btn) {
                    btn.addEventListener('click', function () { updateUI(this.getAttribute('data-grade')); });
                  });

                  btnImgs.forEach(function (img) {
                    img.addEventListener('click', function () {
                      contentImg.src = buildPath(currentGrade, 'contents.png');
                      contentImg.alt = currentGrade + ' 혜택 내용';
                      contentWrap.style.display = 'block';
                      var y = img.getBoundingClientRect().top + window.pageYOffset - 80;
                      try { window.scrollTo({ top: y, behavior: 'smooth' }); } catch (e) { window.scrollTo(0, y); }
                    });
                  });

                  updateUI(currentGrade);
                })();
              </script>
            </div>




            <script>
              document.querySelectorAll('.tab').forEach(tab => {
                tab.addEventListener('click', function () {
                  document.querySelectorAll('.tab').forEach(t => t.classList.remove('active'));
                  document.querySelectorAll('.tab-content').forEach(content => content.classList.remove('active'));




                  this.classList.add('active');
                  document.getElementById(this.getAttribute('data-tab')).classList.add('active');
                });
              });
            </script>
            <!-- <img class="subinfro_promotion animate-box" style="width:100%;" src="https://github.com/startups-koraia/startups/blob/main/24_m_table_0725.jpg?raw=true" /> -->



          </center><br /><br />




          <!--
<center>
<section class="w-btn-neon2 animate-box" type="button"> <a href="https://startups.koraia.org/membership.html" target="_blank" >회원사 가입 신청 바로가기 <i class="glyphicon glyphicon-new-window"></i></a>
</section>
</center>
-->
          <br /><br /><br /><br /><br />




          <!--가입절차안내 -->
          <!--<div class="de30">
<i class="glyphicon glyphicon-check"></i><font>가입절차안내</font> </div>
<center><img class="animate-box" src="{{$template}}/img/_des/mp2/mp2_sub1_info2.jpg" alt="가입절차안내" / > -->
          </center>
          <!--//가입절차안내 -->
          <br />







          <!--// 디자인원본모듈 -->



          <br /><br />
        </div>
        <!--// sub menu title -->
      </div>




      <!-- content-->



    </div>



  </div>
</div>
<script>
  //snb
  function snbFixed() {
    var scrolltopH = $(window).scrollTop();
    var visualH = $('.sub-visual').height() - $('.snb123').height();
    if (scrolltopH >= visualH) {
      $('.snb123').addClass('fixed');
    } else {
      $('.snb123').removeClass('fixed');
    }
  }
  $(window).scroll(function () {
    scrollBtn();
    snbFixed();
  });


  $('.current-text').on('click', function () {
    if ($(this).hasClass('on')) {
      $(this).removeClass('on');
    } else {
      $(this).addClass('on');
      $('.snb-inner a, .sub-visual, .contents').on('click', function () {
        $('.current-text').removeClass('on');
      });
    }
  });
  var snbW = $(window).width();
  $snbLocation = $('.current-text');
  $(window).on('resize', function () {
    if (snbW != $(window).width()) {
      $snbflag = $snbLocation.css('display');
      if ($snbflag == 'block') {
        $snbLocation.removeClass('on');
      } else if ($snbflag == 'none') {
        $snbLocation.removeClass('on');
      }
      snbW = $(window).width();
    }
  });
</script>



{{$foot}}