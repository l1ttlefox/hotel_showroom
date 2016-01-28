<!DOCTYPE html>
<html>
	<head>
		
		<link rel="stylesheet" type="text/css" href="/css/style.css">
		<link rel="stylesheet" type="text/css" href="/css/dependings.css">
		<link rel="stylesheet" type="text/css" href="/lib/slick/slick.css">
		<link rel="stylesheet" type="text/css" href="/lib/pinScroll/scrollpane.css">
		<meta charset="utf-8">
		<meta name="description" content="">
		<meta name="keywords" content="">
        <script src="/lib/jquery/jquery-1.11.1.min.js"></script>
		<link rel="shortcut icon" href="/images/favicon.ico">
		<script src="/lib/jquery.bxslider/jquery.bxslider.js"></script>
		<script src="/lib/pinScroll/pinscroll.js"></script>
		<script src="/lib/slick/slick.js"></script>
		<script src="/lib/js/script.js"></script>
		<script src="/lib/jquery-ui-1.11.4/jquery-ui.js"></script>
		<!-- <link rel="stylesheet" type="text/css" href="/lib/jquery-ui-1.11.4/jquery-ui.css"> -->
		<script src="http://maps.googleapis.com/maps/api/js"></script>
		<title><?//=$pageInfo['title_'.$Main->lang]?></title>
        <script>
        	 
        </script>
	</head>
	<body>
		
		<div id="content" >
			<div id="header" class="">
				<div class="wrapper header">
					<div class="header_left">
						<div class="header_top">
							<div class="social_links">
								<a href="#"></a>
								<a href="#"></a>
								<a href="#"></a>
								<a href="#"></a>
								<a href="#"></a>
								<a href="#"></a>
								<div class="both"></div>
							</div>
						</div>
						<div class="header_menu">
							<div class="hm_item">
								<a id="hotels" href="#" class="" >
									ОТЕЛИ
								</a>
								<div class="hidden_hotel_block"></div>
							</div>
							<div class="hm_item">
								<a href="#">
									ПРЕДЛОЖЕНИЯ
								</a>
							</div>
							<div class="hm_item">
								<a href="#">
									СОБЫТИЯ
								</a>
							</div>
							<div class="both"></div>
						</div>
					</div>
					<div class="logo_wr">
						<a href="#" class="logo"></a>
					</div>
					<div class="header_right">
						<div class="header_top">
							<div class="telephone_info">
								(812) 555-12-34 / (812) 555-12-34
							</div>
							<div class="business_info">
								Онлайн бронирование гостиниц сети "Исротель" в Израиле
							</div>
						</div>
						<div class="header_menu">
							<div class="hm_item">
								<a href="#">
									ОТЕЛИ
								</a>
							</div>
							<div class="hm_item">
								<a href="#">
									ПРЕДЛОЖЕНИЯ
								</a>
							</div>
							<div class="hm_item">
								<a href="#">
									СОБЫТИЯ
								</a>
							</div>
							<div class="both"></div>
						</div>
					</div>
					<div class="both"></div>
					<div class="hidden_hotel_block">
						<div class="hotels_list_wr">
							<div class="hotel_colomn">
								<div class="hotels_list_item">
									<a href="#" class="hotels_title">
										Eilat
									</a>
								</div>
								<?
								for($t=1;$t<=9;$t++){
								?>
								<div class="hotels_list_item">
									<a href="#">
										Royal Beach Eilat
									</a>
								</div>
								<?}?>
							</div>
							<div class="hotel_colomn">
								<div class="hotels_list_item">
									<a href="#" class="hotels_title">
										Eilat
									</a>
								</div>
								<?
								for($t=1;$t<=3;$t++){
								?>
								<div class="hotels_list_item">
									<a href="#">
										Royal Beach Eilat
									</a>
								</div>
								<?}?>
								<div class="hotels_list_item">
									<a href="#" class="hotels_title">
										Eilat
									</a>
								</div>
								<?
								for($t=1;$t<=5;$t++){
								?>
								<div class="hotels_list_item">
									<a href="#">
										Royal Beach Eilat
									</a>
								</div>
								<?}?>
							</div>
							<div class="hotel_colomn">
								<div class="hotels_list_item">
									<a href="#" class="hotels_title">
										Tel Aviv
									</a>
								</div>
								<?
								for($t=1;$t<=2;$t++){
								?>
								<div class="hotels_list_item">
									<a href="#">
										Royal Beach Eilat
									</a>
								</div>
								<?}?>
								<div class="hotels_list_item">
									<a href="#" class="hotels_title">
										Tel Aviv
									</a>
								</div>
								<div class="blue_colomn_part">
									<div class="blue_colomn_title">
										Isrotel Exclusive Collection
									</div>
									<?
									for($t=1;$t<=5;$t++){
									?>
									<div class="hotels_list_item">
										<a href="#">
											Royal Beach Eilat
										</a>
									</div>
									<?}?>
								</div>
							</div>
							<div class="both"></div>
						</div>
						<div class="promotion_wr">
							<div class="promotion_title">
								The Ultimate Desert Experience
							</div>
							<div class="promotiom_img">
								<img src="/images/main_slider_slide_1.jpg" />
							</div>
							<div class="promotiom_info">
								<div class="promotion_bonus_wr">
									<div class="promotion_bonus background">
										<div>
											15%
										</div>
										<div>
											скидка
										</div>
									</div>
								</div>
								<div class="promotiom_info_text">
									Акция действительна с 24 до 26 декабря
								</div>
							</div>
							<a href="#" class="promotion_detail background">
								Подробнее
							</a>
						</div>
					</div><!-----end_of_hidden_hotel_block----->
				</div>
			</div><!-----end_of_header----->
		  	<div id="page">
				<div class="wrapper">