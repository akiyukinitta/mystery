<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500;700&display=swap" rel="stylesheet">
	<link
		href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500;700&family=Shippori+Mincho:wght@400;500;700&display=swap"
		rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
	<link rel="stylesheet" type="text/css"
		href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />　
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js"> -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"
		integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>
	<script src="//cdn.jsdelivr.net/npm/gsap@3.7.0/dist/ScrollTrigger.min.js"></script>
	<style>

	</style>
      <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header class="ly_header">
		<div class="ly_header_inner">
			<div class="bl_headerUtils">
				<a class="bl_headerUtils_logo" href="index.html"><img src="images/common/logo_green.svg" alt=""></a>
				<!-- <a class="el_btn" href="#">お問い合わせ</a> -->

				<!-- ハンバーガーボタン -->
				<button type="button" id="btn20" class="btn-trigger" aria-controls="global-nav" aria-expanded="false">
					<!-- <span class="p-hamburger__line">
					  <span class="u-visuallyHidden">
						メニューを開閉する
					  </span>
					</span> -->
					<span></span>
					<span></span>
				</button>


				<!-- /ハンバーガーボタン -->

			</div>
			<!-- /.bl_headerUtils -->
			<div class="bl_headerNavBg"></div>
			<div class="bl_headerNavWrapper" id="nav">
				<nav id="nav_inner">
					<ul class="bl_headerNav">
						<li class="bl_headerNav_item">
							<a class="bl_headerNav_link" href="index.html">HOME</a>
						</li>
						<li class="bl_headerNav_item">
							<a class="bl_headerNav_link" href="products.html">PRODUCT</a>
							<p class="bl_headerChildNav_ttl js_accordion_link" role="button">
								<span>カテゴリー</span>
							</p>
							<ul class="bl_headerChildNav js_accordion_cont">
								<li class="bl_headerChildNav_item">
									<a class="bl_headerChildNav_link" href="driver.html">DRIVER</a>
								</li>
								<li class="bl_headerChildNav_item">
									<a class="bl_headerChildNav_link" href="#">FW/UT</a>
								</li>
								<li class="bl_headerChildNav_item">
									<a class="bl_headerChildNav_link" href="#">IRON</a>
								</li>
								<li class="bl_headerChildNav_item">
									<a class="bl_headerChildNav_link" href="#">WEDGE</a>
								</li>
								<li class="bl_headerChildNav_item">
									<a class="bl_headerChildNav_link" href="#">PUTTER</a>
								</li>
								<li class="bl_headerChildNav_item">
									<a class="bl_headerChildNav_link" href="#">SHAFT</a>
								</li>
								<li class="bl_headerChildNav_item">
									<a class="bl_headerChildNav_link" href="#">ACCESSORY</a>
								</li>
							</ul>

						</li>
						<li class="bl_headerNav_item">
							<a class="bl_headerNav_link" href="#">CATALOGUE</a>
						</li>
						<li class="bl_headerNav_item">
							<a class="bl_headerNav_link" href="news.html">NEWS</a>
						</li>
						<li class="bl_headerNav_item">
							<a class="bl_headerNav_link" href="media.html">MEDIA</a>
						</li>
						<li class="bl_headerNav_item">
							<a class="bl_headerNav_link" href="#">試打会</a>
						</li>
						<li class="bl_headerNav_item">
							<a class="bl_headerNav_link" href="#">試打レポート</a>
						</li>
						<li class="bl_headerNav_item">
							<a class="bl_headerNav_link" href="#">ABOUT US</a>
						</li>
						<li class="bl_headerNav_item">
							<a class="bl_headerNav_link" href="#">HISTORY</a>
						</li>
						<li class="bl_headerNav_item">
							<a class="bl_headerNav_link" href="#">PROCESS</a>
						</li>

					</ul>
					<ul class="bl_headerNav">

						<li class="bl_headerNav_item">
							<a class="bl_headerNav_link" href="shoplist.html">SHOPLIST</a>
							<p class="bl_headerChildNav_ttl js_accordion_link" role="button">
								<span>エリア</span>
							</p>
							<ul class="bl_headerChildNav js_accordion_cont">
								<li class="bl_headerChildNav_item">
									<a class="bl_headerChildNav_link" href="shoplist.html#hokkaidou">北海道・東北エリア</a>
								</li>
								<li class="bl_headerChildNav_item">
									<a class="bl_headerChildNav_link" href="shoplist.html#kantou">関東エリア</a>
								</li>
								<li class="bl_headerChildNav_item">
									<a class="bl_headerChildNav_link" href="#">甲信越・北陸エリア</a>
								</li>
								<li class="bl_headerChildNav_item">
									<a class="bl_headerChildNav_link" href="#">中国エリア</a>
								</li>
								<li class="bl_headerChildNav_item">
									<a class="bl_headerChildNav_link" href="#">四国エリア</a>
								</li>
								<li class="bl_headerChildNav_item">
									<a class="bl_headerChildNav_link" href="#">九州・沖縄エリア</a>
								</li>
								<li class="bl_headerChildNav_item">
									<a class="bl_headerChildNav_link" href="#">海外エリア</a>
								</li>
							</ul>
						</li>
						<li class="bl_headerNav_item">
							<a class="bl_headerNav_link" href="contact.html">CONTACT</a>
						</li>
						<li class="bl_headerNav_item">
							<a class="bl_headerNav_link" href="link.html">LINKS</a>
						</li>
						<li class="bl_headerNav_item">
							<a class="bl_headerNav_link" href="#">COMPANY</a>
						</li>
						<li class="bl_headerNav_item bl_headerNav_item--language">
							<a class="bl_headerNav_link" href="#">Languages</a>
							<ul class="bl_headerChildNav bl_headerChildNav--language">
								<li class="bl_headerChildNav_item">
									<a class="bl_headerChildNav_link" href="index.html"><img
											src="images/common/japan_icon.jpg" alt=""></a>
								</li>
								<li class="bl_headerChildNav_item">
									<a class="bl_headerChildNav_link" href="http://www.mysterygolf.net/main.html"><img
											src="images/common/korea_icon.jpg" alt=""></a>
								</li>
								<li class="bl_headerChildNav_item">
									<a class="bl_headerChildNav_link" href="#"><img src="images/common/taiwan_icon.jpg"
											alt=""></a>
								</li>
								<li class="bl_headerChildNav_item">
									<a class="bl_headerChildNav_link" href="#"><img src="images/common/china_icon.jpg"
											alt=""></a>
								</li>
								<li class="bl_headerChildNav_item">
									<a class="bl_headerChildNav_link" href="#"><img
											src="images/common/thailand_icon.jpg" alt=""></a>
								</li>
							</ul>
						</li>
					</ul>
				</nav>
				<!-- <a class="bl_headerUtils_logo bl_headerNav_logo" href="#"><img src="images/common/logo_green.svg" alt=""></a> -->

			</div>
		</div>
		<!-- /.ly_header_inner -->
	</header>