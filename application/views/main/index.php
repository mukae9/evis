<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">

<div id="load">
    <img src="<?php echo base_url('images/gain.gif'); ?>" style="width:250px; margin: auto; display: block;" >
</div>
<div class="count2"></div>
<div >
    <div  >
        <?php
        $ua = $_SERVER['HTTP_USER_AGENT'];
        if ((strpos($ua, 'Android') !== false) && (strpos($ua, 'Mobile') !== false) 
        || (strpos($ua, 'iPhone') !== false) 
        || (strpos($ua, 'Windows Phone') !== false)) { ?>

            <div class="video_position">
                <video id="video"  class="v1" src="<?php echo base_url('video/sma_back.mp4');?>" style="width:100%; object-fit: cover;">
                </video>
                <div class="box hougan"></div>
            </div>
            <section class="container-flexbox video_1">
                <div   style="font-size: 1.4em;">
                    <div style=" padding-right: 32px; padding-top: 42px; ">
                        <img src="<?php echo base_url('images/evislogo.png');  ?>" style="margin: 0 auto; width: 200px;" >
                    </div>

                    <div class="th_btn">
                        <a href="#works" style=" color: #fefefe;">
                            <span>W</span><span>o</span><span>r</span><span>k</span><span>s</span>
                        </a>
                    </div>
                </div>
            </section>
        <?php 
        } elseif ((strpos($ua, 'Android') !== false) || (strpos($ua, 'iPad') !== false)) { 
        ?>
            <div class="video_position">
                <video id="video"  class="v2" src="<?php echo base_url('video/sample.mp4');?>" style="width:100%; object-fit: cover; min-height: 500px;">
                </video>
                <div class="box hougan"></div>
            </div>
              
            <section class="container-flexbox video_2">
                <div   style="font-size: 1.4em;">
                    <div style=" padding-right: 32px;     padding-top: 82px; ">
                        <img src="<?php echo base_url('images/evislogo.png');  ?>" style="margin: 0 auto; width: 260px;" >
                    </div>
                    <div class="th_btn">
                        <a href="#works"  style=" color: #fefefe;">
                            <span>W</span><span>o</span><span>r</span><span>k</span><span>s</span>
                        </a>
                </div>
              </div>
            </section>
        <?php 
        } else { 
        ?>
            <div class="video_position">
                <video id="video" class="v3" src="<?php echo base_url('video/sample.mp4');?>" style="width:100%;  object-fit: cover;">
                </video>
                <div class="box hougan"></div>
            </div>

            <section class="container-flexbox video_3">
                <div   style="font-size: 1.4em;">
                    <div style=" padding-right: 52px; padding-top: 82px; ">
                        <img src="<?php echo base_url('images/evislogo.png');  ?>" style="margin: 0 auto; width: 300px;" >
                    </div>
                    <div class="th_btn">
                        <a href="#works" style=" color: #fefefe;">
                            <span>W</span><span>o</span><span>r</span><span>k</span><span>s</span>
                        </a>
                    </div>
                </div>
            </section>
        <?php 
        } 
        ?>


    </div>

    <div style="clear: both;"></div>	
    <a name="about" style="margin-top:-50px; padding-top:50px;"></a>

    <div class="height50" style=" background-color: #fefefe;"></div>
    <div class="container">
        <div class="desc_container">
            <img src="<?php echo base_url('images/about.jpeg');  ?>" class="animated desc_img" data-animate="fadeInUp"  >
            <div class="desc_text" >
                <h2 class="desc_h2" style="    background: -webkit-linear-gradient(-180deg, #0d2f46, #5ab2f1);
                  -webkit-background-clip: text;
                  ;">About EVIS
                </h2>
                <p class="detail_container desc_plus">
                Studio EVIS(エヴィス)は大阪を拠点として関西で映像の撮影・編集を行なっている映像制作チームです。「新しいことに寄りそう映像」をコンセプトに、中小企業や個人事業のスタートアップ・独立開業などにあたって必要となるプロモーション映像や、アーティストのミュージックビデオの制作を行なっています。<br><br>また上記の映像と組み合わせたウェブ制作やPRイベント企画も得意としており、映像制作→ウェブ制作→PRまで一貫したフォローも高評を得ています。
                </p>

                <div class="works_position" >
                    <span class="works_text" >Works→</span>
                    <a href="#works">
                        <img src="<?php echo base_url('images/rings.svg');  ?>" style="    vertical-align: middle;">
                    </a>
                </div>
            </div>
        </div>

        <div style="padding-top: 18%;"></div> 
        <div class="clear"></div>

        <div class="news_box">
            <ul>
                <li><span class="works_text" >NEWS</span></li>
                <li>2019.10月 新しい制作実績を公開しました。</a></li>
                <li>2019.7月 共同代表の北中が
                関西大学施設（スタートアップカフェ大阪）主催の講演会にて映像事業に関する講演を行います。<a href="http://www.kansai-u.ac.jp/umeda/event-seminar/startup/freelance-talk-session-kansai---.html" target="_blank">詳細</a></li>
                <!--<li>2019.7月 共同代表の向江が上記の講演会でウェブ制作およびイベント企画について講演します。<a href="http://www.kansai-u.ac.jp/umeda/event-seminar/startup/freelance-talk-session-kansai---.html" target="_blank">詳細</a></li>-->
                <li>2019.6月 制作依頼件数が早くも10件を超えました。</li>
                <li>2019.6月 共同代表の向江が就労移行支援事業所からの委託を受けデザイン・プログラミング講師として招かれることになりました。</li>
                <li>2019.5月1日 各々で活動していた北中、向江が活動を統合し、StudioEVISを発足させました。</li>
            </ul>
        </div>
        <div class="clear"></div>
    </div>

    <div style="clear: both;"></div>	
        <a name="service"  style="
          margin-top:-50px;
          padding-top:50px;
        "></a>
    <div class="height50" style=" background-color: #fefefe;"></div>
    <div class="container padding48" style="background-color: #f8fcff; ">
        <div class="desc_container">
            <img src="<?php echo base_url('images/evis01.jpg');  ?>" class="animated desc_img2" data-animate="fadeInUp"   >     
            <div class="desc_text2" >
                <h2 class="desc_h2" style="left: 0px;">Service</h2>
                <p class="detail_container desc_plus" style="color: #0d2f46;">
                企業・店舗プロモーション｜イベント・セミナー撮影｜アーティストPV
                <br>
                <span >+</span>
                <br>
                WEB・システム開発｜イベント企画 ※映像と一貫しての制作が基本です。<br><br>撮影したい具体的な内容が決まっている方はもちろん、「集客のために映像を作りたいが、どのような映像内容がいいのか分からない」「この予算でどれくらいのものが作れるのか」などの構想段階であっても、お気軽にご相談頂ければフォローさせて頂きます。
                </p>
                <div class="works_position2" >
                    <span class="works_text">Contact→</span><a href="#contact"><img src="<?php echo base_url('images/rings.svg');  ?>" style="    vertical-align: middle;"></a>
                </div>
            </div>
        </div>
        <div class="padding80"></div>
        <div class="clear"></div>
    </div>

    <a name="works" style="margin-top:-50px; padding-top:50px;"></a>

    <div style="background-color: #fefefe; padding-top: 42px;">
        <h2 style="font-size: 4em;  background: -webkit-linear-gradient(0deg, #0d2f46, #5ab2f1);
          -webkit-background-clip: text;
          -webkit-text-fill-color: transparent; font-family: 'Raleway', sans-serif; text-align: center;">Works</h2>
    </div>

    <div>
        <div class="padding64" style="  background-color: rgb(62, 130, 178);">
            <div class="threebox animated" data-animate="fadeInUp" style="    max-width: 900px; margin: 0 auto;">

                <div class="threebox_img">
                    <div class="movie">
                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/kZj0mYHnhlw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                  
                <div class="threebox_img">
                    <div class="movie">
                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/g0rZ9wbZtb0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>

                <div class="threebox_img">
                    <div class="movie">
                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/RpamCuIfluk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                  
                <div class="threebox_img">
                    <div class="movie">
                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/wifd6LxvXlk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>

                <div class="threebox_img">
                    <div class="movie">
                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/RtBNQnsIPro" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                 
                    </div>
                </div>

                <div class="clear"></div>
                <p style="color: #fefefe;font-weight: bold; text-align: center; font-size: 1.2em;padding: 42px 24px 24px;">現在の製作費目安<br>100,000円〜500,000円</p>
            </div>
        </div>
        <a name="staff"  style="margin-top:-50px;padding-top:50px;"></a>

        <div style="background-color: #fefefe; padding-top: 42px;">
            <h2 style="font-size: 4em;  background: -webkit-linear-gradient(0deg, #0d2f46, #5ab2f1);-webkit-background-clip: text;
            -webkit-text-fill-color: transparent; font-family: 'Raleway', sans-serif; text-align: center;">Work Flow</h2>
        </div>

        <div style="background-color: #fefefe; overflow: hidden;">
            <div style=" width: 74%; margin: 42px auto;">
                <div class="staff_img">
                <img src="<?php echo base_url('images/flow.jpg');  ?>" class="animated" data-animate="fadeInUp"  style="width: 100%; padding: 0px 0px;" >	
                </div>
                <div class="staff_text">
                    <ul style="color: #0d2f46; font-size: 0.8em;">
                        <li class="flow_h" style="margin-top: 16px;">①お打ち合わせ</li>
                        <li>映像をつくる目的や経緯、映像にもとめることなどをお伺いします。ご要望のポイントを押さえつつ、カフェで談笑するような話しやすい雰囲気での打ち合わせを心がけています。予算感やスケジュールに関しても、遠慮なくご相談ください。<li>

                        <li class="flow_h" style="margin-top: 16px;">②企画・絵コンテ作成</li>
                        <li>打ち合わせ内容をもとにこちらから企画提案を行ったり、時にはお客様もプチ監督になった気持ちで一緒に企画を考えたり。一緒にワクワクできるような企画制作を行います。</li>

                        <li class="flow_h" style="margin-top: 16px;">③撮影</li>
                        <li>完成した企画に合わせ、現場で撮影を行います。基本は少人数チームとしてフットワークの軽さを活かしつつ、企画内容によっては外注クリエイター等とも協力した中〜大規模撮影も可能です。</li>

                        <li class="flow_h" style="margin-top: 16px;">
                        ④映像編集<li>
                        <li>色調補正、アニメーションやCGによる演出などを行います。クリエイターとしてのこだわりと、お客様の思いを紡いでいく作業です。</li>

                        <li class="flow_h" style="margin-top: 16px;">
                        ⑤納品</li>
                        <li>ご要望のフォーマットで納品します。納品までの期間は、企画内容や映像の長さによって異なります。</li>
                        <li style="padding-top: 42px; text-align: center;"><span class="works_text" >Contact→</span><a href="#contact"><img src="<?php echo base_url('images/rings.svg');  ?>" style="    vertical-align: middle;"></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <a name="contact"  style="margin-top:-50px; padding-top:50px;"></a>

        <div style="background-color: #fefefe; padding-top: 42px;">
            <h2 style="font-size: 4em;  background: -webkit-linear-gradient(0deg, #0d2f46, #5ab2f1);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent; font-family: 'Raleway', sans-serif; text-align: center;">Contact</h2>
        </div>

        <div class="container" style="background-color: #fefefe; padding: 42px 0px 0px;">
            <form method="post" action="contact.php" id="the-form" >
                <ul class="entry_form"  style="margin-top: 0px;     padding-top: 0px; color: #0d2f46; font-size: 0.9em;">
                    <div class="entry_formbox">
                        <li style="margin-top:32px; width: 90%; margin: 0 auto; font-size: 0.9em; padding: 12px 0px;">お問い合わせやお見積もりの依頼を頂いても、料金の発生やこちらから営業の電話などは一切ございませんので気軽にご相談ください。</li>


                        <li class="entry-title" style="margin-top: 42px;     padding-top: 0px;">貴社名/屋号<span class="req">必須</span></li>
                        <li class="entry-detail"><input type="text"  name="shaname" class="form_entry validate required" ></li>
                          
                        <li><div class="clear"></div></li>
                          
                        <li class="entry-title">担当者名<span class="req">必須</span></li>
                        <li class="entry-detail"><input type="text"  name="name" class="form_entry validate required" ></li>
                        <li><div class="clear"></div></li>

                        <li class="entry-title">メールアドレス<span class="req">必須</span></li>
                        <li class="entry-detail"><input type="text"  placeholder="記入ミスにご注意ください" name="mail" value="" class="form_entry validate required" ></li>
                        <li><div class="clear"></div></li>
                          
                        <li class="entry-title">電話番号<span class="req">必須</span></li>
                        <li class="entry-detail"><input type="text"  name="pp" value="" class="form_entry validate required" ></li>
                        <li><div class="clear"></div></li>
                        <li class="entry-title">お問い合わせの区分<span class="req">必須</span></li>
                        <li class="entry-detail" style="padding-top: 22px;">
                        <input name="kubun" type="radio" value="一般"  class="radiobotan">
                        <label class="radio-font">事前のお問い合わせ/ご相談</label>
                        <br>
                        <input name="kubun" type="radio" value="学生"  class="radiobotan">
                        <label class="radio-font">お見積もり依頼</label><br>
                        <input name="kubun" type="radio" value="学生"  class="radiobotan">
                        <label class="radio-font">その他</label><br>
                        </li>
                        <li><div class="clear"></div></li>
                        <li class="entry-title">おおよそのご予算</li>
                        <li class="entry-detail"><input type="text"  name="fee" class="form_entry validate required" ></li> 
                        <li><div class="clear"></div></li>
                        <li class="entry-title">EVISを知ったきっかけ</li>
                        <li class="entry-detail">
                        <select name="known" class="nenrei">
                        <option  value="不明">
                        覚えてない</option>
                        <option  value="Twitter" >
                        Twitter</option>
                        <option  value="Instagram">
                        Instagram</option>
                        <option  value="Facebook">
                        Facebook</option>
                        <option value="ネット広告">
                        ネット広告</option>
                        <option  value="ネット検索">
                        ネット検索</option>
                        <option value="知り合いの口コミ">
                        お知り合いの口コミ</option>
                        <option  value="その他">
                        その他</option>
                        </select>
                        </li>
                        <li><div class="clear"></div></li>
                        <li class="entry-title">お問い合わせ詳細<span class="req">必須</span>
                        <li class="entry-detail"><textarea name="youbou"  rows="5" id="3" class="form_entry" maxlength="200"></textarea></li>

                        <li><div class="clear"></div></li>
                          
                        <li style="padding-top:32px; width: 90%; margin: 0 auto; font-size: 0.9em;">※お問い合わせより３営業日以内を基本にご返信いたします。具体的なご相談ですとより早く的確にご回答できるかと思います。</li>
                          
                          
                        <li class="center tap" style="text-align: center; margin: 0 auto; margin-top:32px;">
                            <input type="submit" value="送　信"  style="    background-color: #0075a9;
                            font-size: 1em;
                            color: #fefefe;
                            line-height: 2.8em;
                            width: 180px;">
                        </li>
                        <div id="result" style="padding: 40px;"></div>
                    </div>
                </ul>
            </form>
        </div>   
    </div>

</div>
</div>
<script>

var video = document.getElementById('video');

// 自動再生する
video.autoplay = true;
// 繰り返し再生する
video.loop = true;
// 無音で再生する
video.muted = true;

</script>


