<footer>
<div id="footer" style="text-align:center;">
<h2><img src="<?php echo base_url('images/evislogo.png');  ?>" style="margin: 0 auto; width: 260px;     padding: 42px 82px 16px;
" ></h2>

<div class="footer_nav">
</div>
<p id="copyright"><small>&copy; 2016-2019 @EVIS All Rights Reserved.</small></p>
</div>
</footer>

	
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script src="slick.min.js"></script>
<script>
   $(function() {
     $('.thumb-item').slick({
          infinite: true,
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
          fade: true,
		 // 自動再生時にスライドのエリアにマウスオンで一時停止するかどうか
  pauseOnHover: true,
  // 自動再生時にドットにマウスオンで一時停止するかどうか
  pauseOnDotsHover: true,
  // 切り替えのアニメーション。ease,linear,ease-in,ease-out,ease-in-out
  cssEase: 'ease-in-out',
		 // 自動再生。trueで自動再生される。
  autoplay: true,
  // 自動再生で切り替えをする時間
  autoplaySpeed: 3000,
          asNavFor: '.thumb-item-nav' //サムネイルのクラス名
     });
     $('.thumb-item-nav').slick({
          infinite: true,
          slidesToShow: 4,
          slidesToScroll: 1,
          asNavFor: '.thumb-item', //スライダー本体のクラス名
          focusOnSelect: true,
     });
});
</script>

<script src="https://cdn.jsdelivr.net/npm/vue@2.5.22/dist/vue.js"></script>
<script>
	

	
$('.animated').css("opacity","0");
$(window).on('load scroll', function(){
　
  var elem = $('.animated');
　　
  elem.each(function () {

    var isAnimate = $(this).data('animate');
    var elemOffset = $(this).offset().top;
    var scrollPos = $(window).scrollTop();
    var wh = $(window).height();

    if(scrollPos > elemOffset - wh + (wh / 4)){	
      $(this).addClass(isAnimate);
	
    }
  });

});
	


</script>


<script>

	new Vue({
  el: '#contact',
  data: {
    scrollY: 0,
    timer: null
  },
  created: function () {
    // ハンドラを登録
    window.addEventListener('scroll', this.handleScroll)
  },
  beforeDestroy: function () {
    // ハンドラを解除（コンポーネントやSPAの場合忘れずに！）
    window.removeEventListener('scroll', this.handleScroll)
  },
  methods: {
    // 違和感のない程度に200ms間隔でscrollデータを更新する例
    handleScroll: function () {
      if (this.timer === null) {
        this.timer = setTimeout(function () {
          this.scrollY = window.scrollY
          clearTimeout(this.timer)
          this.timer = null
        }.bind(this), 200)
      }
    }
  }
})
</script>	

<script>

	new Vue({
  el: '.pc_header',
  data: {
    scrollY: 0,
    timer: null
  },
  created: function () {
    // ハンドラを登録
    window.addEventListener('scroll', this.handleScroll)
  },
  beforeDestroy: function () {
    // ハンドラを解除（コンポーネントやSPAの場合忘れずに！）
    window.removeEventListener('scroll', this.handleScroll)
  },
  methods: {
    // 違和感のない程度に200ms間隔でscrollデータを更新する例
    handleScroll: function () {
      if (this.timer === null) {
        this.timer = setTimeout(function () {
          this.scrollY = window.scrollY
          clearTimeout(this.timer)
          this.timer = null
        }.bind(this), 200)
      }
    }
  }
})
</script>	



<script>
	
	


$('.menu-trigger').on('click',function(){
  if($(this).hasClass('active')){
    $(this).removeClass('active');
    $('nav').removeClass('open');
    $('.overlay').removeClass('open');
  } else {
    $(this).addClass('active');
    $('nav').addClass('open');
    $('.overlay').addClass('open');
  }
});
$('.overlay').on('click',function(){
  if($(this).hasClass('open')){
    $(this).removeClass('open');
    $('.menu-trigger').removeClass('active');
    $('nav').removeClass('open');      
  }
});
	
$(function() {
	 $('#mousikomi-botan4').click(function(){
			 $('#mousikomi-open4').slideToggle(500);
	 });
});


$(function(){
	setTimeout(function(){
  $('#load').fadeOut(1000);
},1900)});
	
$(function() {
    var height=$(".v1").height();
	var height2=window.innerHeight;
    $(".video_1").css("height", height+50).css("min-height", height2);
	  
		$(".hougan").css("height", height).css("min-height", height2);
  
	$(".v1").css("min-height", height2);//10pxだけ余裕をもたせる
});
	
$(function() {
    var height=$(".v2").height();
	var height2=window.innerHeight;
    $(".video_2").css("height", height+50).css("min-height", height2);
	$(".hougan").css("height", height);
    
	$(".v2").css("min-height", height2);//10pxだけ余裕をもたせる
});
	
$(function() {
    var height=$(".v3").height();
	var height2=window.innerHeight;
    $(".video_3").css("height", height+50).css("min-height", height2);
	$(".hougan").css("height", height).css("min-height", height2);
	$(".v3").css("min-height", height2);//10pxだけ余裕をもたせる
});

jQuery(function($) {
    $('#the-form').submit(function(event) {
        // HTMLでの送信をキャンセル
        event.preventDefault();

        // 操作対象のフォーム要素を取得
        var $form = $(this);

        // 送信ボタンを取得
        // （後で使う: 二重送信を防止する。）
        var $button = $form.find('button');

        // 送信
        $.ajax({
            url: $form.attr('action'),
            type: $form.attr('method'),
            data: $form.serialize()
                + '&delay=1',  // （デモ用に入力値をちょいと操作します）
            timeout: 10000,  // 単位はミリ秒

            // 送信前
            beforeSend: function(xhr, settings) {
                // ボタンを無効化し、二重送信を防止
                $button.attr('disabled', true);
            },
            // 応答後
            complete: function(xhr, textStatus) {
                // ボタンを有効化し、再送信を許可
                $button.attr('disabled', false);
            },

            // 通信成功時の処理
            success: function(result, textStatus, xhr) {
                // 入力値を初期化
                $form[0].reset();

                $('#result').text('お問い合わせが完了致しました。ご登録頂いたメールアドレスにご返信させて頂きます。');
            },

            // 通信失敗時の処理
            error: function(xhr, textStatus, error) {}
        });
    });

});	
	
	
</script>
</body>
</html>
