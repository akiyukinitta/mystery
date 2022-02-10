<?php if ( !defined( 'ABSPATH' ) ) exit; ?>
<?php get_header(); ?>

<main>
		<section class="ly_Contact">
			<div class="ly_Contact_inner ly_inner">
				<h1 class="el_lv1heading el_lv1heading--1 hp_en js_eachTextAnime">
					CONTACT
				</h1>

				<div class="un_contactTel">
					<h2 class="el_lv2heading--1 el_lv2heading--1 bl_Contact_lv2heading">
						<span class="el_lv2headingDecoration-en hp_en">TEL</span>
						<span class="el_lv2headingDecoration-ja hp_ja">電話でのお問い合わせ</span>
					</h2>
					<div class="un_contactContents_wrapper un_contactTelContents_wrapper gsap_card anime_card_onTxt">
						<p class="un_contactTel_desc">
							お電話でのお問い合わせをご希望の方は、<br class="hp_pcNone">こちらからご連絡ください。
						</p>
						<a href="tel:06-6390-6131" class="un_contactTel_telephoneNumber">
							<span class="un_contactTel_telephoneNumberDecoration">06-6390-6131</span>
						</a>
						<p class="un_contactTel_businessHours">
							11:00～18:00（平日のみ）
						</p>
					</div>
				</div><!-- /.un_contactTel -->
				<div class="un_contactForm">
					<h2 class="el_lv2heading--1 el_lv2heading--1 bl_Contact_lv2heading">
						<span class="el_lv2headingDecoration-en hp_en">FORM</span>
						<span class="el_lv2headingDecoration-ja hp_ja">フォームでのお問い合わせ</span>
					</h2>
					<div class="un_contactContents_wrapper un_contactFormContents_wrapper gsap_card anime_card_onTxt">
						<p class="un_contactForm_desc">
							お問合せには可能な限り迅速にお答えできるよう心がけておりますが、内容によってはお時間をいただく場合や、お答えできない場合がございます。予めご了承ください。
						</p>
						<div class="un_contactForm_contents_wrapper">
							<div class="un_contactForm_content_wrapper">
								<p class="un_contactForm_content_ttl un_contactForm_content_mandatoryTitle">お名前</p>
								<div class="un_contactForm_content_input_wrapper un_contactForm_content_input_smallWrapper">
									<span class="un_contactForm_content_inputDecoration un_contactForm_content_inputDecorations"><input type="text" placeholder="姓"></span>
									<span class="un_contactForm_content_inputDecoration un_contactForm_content_inputDecorations un_mt08_sp"><input type="text" placeholder="名"></span>
								</div>
							</div>
							<div class="un_contactForm_content_wrapper">
								<p class="un_contactForm_content_ttl un_contactForm_content_mandatoryTitle">フリガナ</p>
								<div class="un_contactForm_content_input_wrapper un_contactForm_content_input_smallWrapper">
									<span class="un_contactForm_content_inputDecoration un_contactForm_content_inputDecorations"><input type="text" placeholder="セイ"></span>
									<span class="un_contactForm_content_inputDecoration un_contactForm_content_inputDecorations un_mt08_sp"><input type="text" placeholder="メイ"></span>
								</div>
							</div>
							<div class="un_contactForm_content_wrapper">
								<p class="un_contactForm_content_ttl un_contactForm_content_mandatoryTitle">電話番号</p>
								<div class="un_contactForm_content_input_wrapper">
									<span class="un_contactForm_content_inputDecoration"><input type="text" placeholder="06-6390-6131"></span>
								</div>
							</div>
							<div class="un_contactForm_content_wrapper">
								<p class="un_contactForm_content_ttl un_contactForm_content_mandatoryTitle">メールアドレス</p>
								<div class="un_contactForm_content_input_wrapper">
									<span class="un_contactForm_content_inputDecoration"><input type="text" placeholder="info@mystery-jp.com"></span>
								</div>
							</div>
							<div class="un_contactForm_content_wrapper">
								<p class="un_contactForm_content_ttl">会社名</p>
								<div class="un_contactForm_content_input_wrapper">
									<span class="un_contactForm_content_inputDecoration"><input type="text" placeholder="株式会社和宏エンタープライズ"></span>
								</div>
							</div>
							<div class="un_contactForm_content_wrapper">
								<p class="un_contactForm_content_ttl un_contactForm_content_mandatoryTitle">お問い合わせ項目</p>
								<div class="un_contactForm_content_input_wrapper">
									<span class="un_contactForm_content_inputDecoration"><input type="select" placeholder="製品について"></span>
								</div>
							</div>
							<div class="un_contactForm_content_wrapper">
								<p class="un_contactForm_content_ttl">お問い合わせ内容</p>
								<div class="un_contactForm_content_input_wrapper">
									<span class="un_contactForm_content_inputDecoration"><input type="textarea" placeholder="お問い合わせ内容について、詳しくお聞かせください"></span>
								</div>
							</div>
							<div class="un_contactForm_content_wrapper">
								<div class="un_contactForm_content_input_wrapper un_contactForm_content_input_confirmWrapper">
									<span class="un_contactForm_content_inputDecoration un_contactForm_content_inputDecorationConfirm"><input type="checkbox"></span>
									<p class="un_contactForm_content_ttl un_contactForm_content_ttlConfirm un_contactForm_content_mandatoryTitle un_contactForm_checkbox">内容をご確認の上チェックを入れてください</p>
								</div>
							</div>
							<div class="un_contactForm_btn_wrapper">
								<a href="" class="bl_viewMore_btn un_contactForm_btn">
									<span class="bl_viewMore_btn_text">送信する</span>
									 <svg xmlns="http://www.w3.org/2000/svg" width="116" height="116" viewBox="0 0 116 116"
										style="" class="bl_viewMore_btnCircleBg">
							
										<circle cx="58" cy="58" r="34" />
									</svg>
									<svg xmlns="http://www.w3.org/2000/svg" width="116" height="116" viewBox="0 0 116 116"
										style="" class="bl_viewMore_btnCircle">
										<!-- cxはx軸の中心 cyはy軸の中心 rは半径 -->
										<circle cx="58" cy="58" r="34" />
									</svg>
								</a>
							</div>
						</div>
					</div>
				</div><!-- /.un_contactForm -->
			</div>
		</section><!-- /.ly_Contact -->
	</main>

<?php get_footer(); ?>