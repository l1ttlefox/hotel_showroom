<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="/lib/jquery-ui-1.11.4/jquery-ui.css">
		<link rel="stylesheet" type="text/css" href="/css/style.css">
		<link rel="stylesheet" type="text/css" href="/css/dependings.css">
		<meta charset="utf-8">
		<meta name="description" content="">
		<meta name="keywords" content="">
        <script src="/lib/jquery/jquery-1.11.1.min.js"></script>
		<link rel="shortcut icon" href="/images/favicon.ico">
		<script src="/lib/jquery-ui-1.11.4/jquery-ui.js"></script>
		<script src="/lib/jquery.bxslider/jquery.bxslider.js"></script>
		<script src="http://maps.googleapis.com/maps/api/js"></script>
		<title><?//=$pageInfo['title_'.$Main->lang]?></title>
        <script>
        	///==========================================
            $(document).ready(function(){
            		
			    $('.main_page_slider').bxSlider({
			    	nextText: '',
			    	prevText: ''
			    });
			      $('.slider_carousel').bxSlider({
				    slideWidth: 380,
				    minSlides: 2,
				    maxSlides: 3,
				    moveSlides: 1,
				    slideMargin: 10,
				    pager:false,
				    nextText: '',
			    	prevText: ''
				  });
	            $('.hotel_slider').bxSlider({
	            	  pager: false,
		              prevText: '',
		              nextText: ''			
	            });
	           header_collapse();
	           open_hotels();
	           initMap();
			});
			function header_collapse(){
				$(window).scroll(function() {
				   if ($(this).scrollTop() > 99){
				   	$("#header").addClass("collapsed");
				   		return false;
				   }else if($(this).scrollTop() < 99){
				    $("#header").removeClass("collapsed");
				   }
				  });
			 
			}
			function open_hotels(){
				$(document).click(function (e) { // событие клика по веб-документу
            		var div = $(".hidden_hotel_block"); // тут указываем ID элемента
					if (!div.is(e.target) // если клик был не по нашему блоку
					    && div.has(e.target).length === 0) { // и не по его дочерним элементам
						$(".header").removeClass("open_hotels"); // скрываем его
						return false;
					}
					
					
				});
				$("#hotels").click(function(){
					$(this).parent().parent().parent().parent().toggleClass("open_hotels");
					return false;
				});
			
			}
			/*Настройки карты - для поп ап картинки лучше где то отдельно сверстать html 
			 *и потом вставлять его в карту через переменную
			 */
			
			function initMap() {
				  var styles = [
				    {
					    featureType: "all",
					    stylers: [
					      { saturation: -100 }
					    ]
					  },
					  {
					  	featureType: "road",
					  	stylers: [
					      { hue: "#fff" },
					      { saturation: 0 }
					    ]
					  },
					  {
					    featureType: "poi.business",
					    elementType: "labels",
					    stylers: [
					      { visibility: "off" }
					    ]
					  },
					  {
					    featureType: "poi.park",
					    stylers: [
					      { hue: "#e3e3e3" },
					      { lightness: 30 }
					    ]
					  }
				  ];
				  var mapOptions = {
				    zoom: 16,
				    center: new google.maps.LatLng(55.6468, 37.581),
				    scrollwheel: false,
				    mapTypeControlOptions: {
				      mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
				    }
				  };
				  var map = new google.maps.Map(document.getElementById('map'), mapOptions);
					
				  var contentString = $("#insert_map").html();
				  
				  var infowindow = new google.maps.InfoWindow({
				    content: contentString
				  });
				  var pageColor = $("#map").attr("data-color");					
				  var marker = new google.maps.Marker({
				    position: mapOptions.center,
				    map: map,
				    icon:'/images/map_pin_' +pageColor+ '.png'
				  });
				  marker.addListener('click', function() {
				    infowindow.open(map, marker);
				  });
				  var styledMap = new google.maps.StyledMapType(styles,
    				{name: "Styled Map"});
				  map.mapTypes.set('map_style', styledMap);
				  map.setMapTypeId('map_style');
				}

			///===========================================
			
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
			  	<div id="slider">
			  		<div id="#slider_1" class="main_page_slider">
			  			<div class="slide">
			  				<div class="slide_over">
								<img src="/images/main_slider_slide_1.jpg" />
							</div>
			  				<div class="slide_text_part">
								<div class="slide_info_part_table">
									<div class="slide_info_part_td">
										<div class="slide_info">
											<div class="slide_info_title">
												Отдых мечты
											</div>
											<div class="slide_info_text">
												Lorem Ipsum is simply 
												dummy text of the printing 
												and typesettin
											</div>
											<a href="#" class="promotion_detail background">
												Подробнее
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="both"></div>
			  			</div>
			  		</div>
			  	</div>
			  	<div class="main_content" id="main_page">
			  		<div class="content_block border">
			  			<div class="content_block_title_wr">
			  				<div class="content_block_title">
				  				ЭКСКЛЮЗИВНЫЕ 
				  				<span class="color">
				  					КОЛЛЕКЦИИ ISROTEL
				  				</span>
				  			</div>
				  		</div>
			  			<div id="slider_carousel">
			  				<div class="slider_carousel">
			  					<div class="slide">
			  						<a href="#">
			  							<img src="/images/common_slider_slide_1.jpg" />
			  							<div class="sc_table">
				  							<div class="sc_td">
				  								<img src="/images/collection_logo_1.png" />
				  							</div>
				  						</div>
			  						</a>
			  					</div>
			  					<div class="slide">
			  						<a href="#">
			  							<img src="/images/common_slider_slide_5.jpg" />
			  							<div class="sc_table">
				  							<div class="sc_td">
				  								<img src="/images/collection_logo_2.png" />
				  							</div>
				  						</div>
			  						</a>
			  					</div>
			  					<div class="slide">
			  						<a href="#">
			  							<img src="/images/common_slider_slide_6.jpg" />
			  							<div class="sc_table">
				  							<div class="sc_td">
				  								<img src="/images/collection_logo_3.png" />
				  							</div>
				  						</div>
			  						</a>
			  					</div>
			  								  					
			  				</div>
			  				
			  			</div>
			  		</div><!--------end_of_content_block--->
			  		<div class="content_block border">
			  			<div class="content_block_title_wr">
			  				<div class="content_block_title color">
				  				ПРЕДЛОЖЕНИЯ
				  			</div>
				  		</div>
				  		<div class="proposal_wr">
				  			<?
							for($t=1;$t<=3;$t++){
							?>
				  			<div class="proposal_block">
				  				<div class="proposal_name_wr">
				  					<div class="proposal_name">
				  						<span class="first_query">
				  							Carmin
				  						</span>
				  						<span class="second_query">
				  							<span>
				  								Специальное предложение:
				  							</span>
				  							<span>
				  								 5 ночей в Isrotel Yam Suf
				  							</span>
				  						</span>
			  						</div>
				  				</div>
				  				<div class="proposal_img">
				  					<img src="/images/common_slider_slide_6.jpg" />
				  				</div>
				  				<div class="proposal_info_wr background_light">
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
									<div class="pi_parts_wr">
										<div class="pi_left">
											<div class="price_label">
												Цена за ночь:
											</div>
											<div class="price_number color">
												<span>
													$
												</span>
												12000
											</div>
											<div class="price_label">
												Одна персона/ночь
											</div>
										</div>
										<div class="pi_right">
											<div class="price_label">
												c 07/10/2015
											</div>
											<div class="type_info color">
												M. Week/B&BM. Week/B&B
											</div>
											<div class="price_label">
												до 31/12/2015
											</div>
										</div>
										<div class="both"></div>
									</div>
									<div class="proposal_bot">
										<a href="#" class="promotion_detail background">
											Подробнее
										</a>
									</div>
				  				</div>
				  			</div><!---------end_of_proposal_block--->
				  			<?}?>
				  			<div class="both"></div>
				  		</div>
			  		</div><!--------end_of_content_block--->
			  		<div class="content_block border">
			  			<div class="content_block_title_wr">
			  				<div class="content_block_title">
				  				ОТЕЛИ
				  				<span class="color">
				  					ISROTEL В ИЗРАИЛЕ
				  				</span>
				  			</div>
				  		</div>
				  		<div class="hotels_wr">
				  			<?
							for($t=1;$t<=6;$t++){
							?>
				  			<div class="separate_hotel">
				  				<div class="hotel_slider">
				  					<div class="slide">
				  						<a href="#">
				  							<div class="hotel_area">
					  							Пустыня Негев
					  						</div>
					  						<div class="hotel_name">
					  							Isrotel Ramo Inn
					  						</div>
					  						<img src="/images/common_offer_slide_2.jpg" />
					  					</a>
				  					</div>
				  					
				  				</div>
				  			</div>
				  			<?}?>
				  			<div class="both"></div>
				  		</div>
			  		</div><!--------end_of_content_block--->
			  		
			  	</div><!--end_of_main_content-->
			  </div><!--end_of_wrapper-->
		   	</div><!-------------------end_of_page-----------------> 
	    </div><!-------------------end_of_content----------------->
		<div id="footer">
			<div class="footer_top">
				<div class="wrapper">
					<div class="footer_contact_wr">
						<div class="footer_contact_part">
							<div class="footer_contact_title">
								Поделитесь с друзьями
							</div>
							<div class="footer_contact_text">
								Расскажите родным и близким
							</div>	
							<a href="#"></a>
						</div>
						<div class="footer_contact_part">
							<div class="footer_contact_title">
								Напишите нам
							</div>
							<div class="footer_contact_text">
								Нажмите на конверт
							</div>	
							<a href="#"></a>
						</div>
						<div class="footer_contact_part">
							<div class="footer_contact_title">
								Позвоните нам
							</div>
							<div class="footer_contact_text">
								972-8-6387797; 972-8-6387777
							</div>	
							<a href="#"></a>
						</div>
						<div class="both"></div>
					</div>
					<div class="footer_menu">
						<div class="fm_item">
							<a href="#">
								ОТЕЛИ
							</a>
						</div>
						<div class="fm_item">
							<a href="#">
								ПРЕДЛОЖЕНИЯ
							</a>
						</div>
						<div class="fm_item">
							<a href="#">
								СОБЫТИЯ
							</a>
						</div>
						<div class="fm_item">
							<a href="#">
								СПА
							</a>
						</div>
						<div class="fm_item">
							<a href="#">
								ЭКСКУРСИИ
							</a>
						</div>
						<div class="fm_item">
							<a href="#">
								ТРАНСФЕРЫ
							</a>
						</div>
						<div class="both"></div>
					</div>
					<div class="footer_socials_wr">
						<div class="footer_socials">
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
					</div>
				</div>
			</div>
			<div class="footer_bot">
				<div class="wrapper">
					<div class="footer_links_wr">
						<div class="footer_links_block">
							<div class="fl_title_wr">
								<div class="fl_title">
									КОНФЕРЕНЦИЯ
								</div>
							</div>
							<div class="fl_link">
								<a href="#">
									Beresheet Mitzpe Ramon 
								</a>
							</div>
							<div class="fl_link">
								<a href="#">
									Carmel Forest Spa Resort  
								</a>
							</div>
							<div class="fl_link">
								<a href="#">
									Royal Beach Eil 
								</a>
							</div>
						</div>
						<div class="footer_links_block">
							<div class="fl_title_wr">
								<div class="fl_title">
									ОТЕЛИ
								</div>
							</div>
							<?
							for($t=1;$t<=15;$t++){
							?>
							<div class="fl_link">
								<a href="#">
									Beresheet Mitzpe Ramon 
								</a>
							</div>
							<?}?>
						</div>
						<div class="footer_links_block">
							<div class="fl_title_wr">
								<div class="fl_title">
									ОТЕЛИ ПО РАЙОНАМ
								</div>
							</div>
							<div class="fl_link">
								<a href="#">
									Eilat Tel Aviv 
								</a>
							</div>
							<div class="fl_link">
								<a href="#">
									Dead Sea  
								</a>
							</div>
							<div class="fl_link">
								<a href="#">
									Negev Desert 
								</a>
							</div>
							<div class="fl_link">
								<a href="#">
									Northern Israel Jerusalem 
								</a>
							</div>
							<div class="fl_link">
								<a href="#">
									Jerusalem 
								</a>
							</div>
						</div>
						<div class="footer_links_block">
							<div class="fl_title_wr">
								<div class="fl_title">
									О КОМПАНИИ
								</div>
							</div>
							<div class="fl_link">
								<a href="#">
									Company Profile 
								</a>
							</div>
							<div class="fl_link">
								<a href="#">
									Isrotel Timeline 
								</a>
							</div>
							<div class="fl_link">
								<a href="#">
									Isrotel's Affiliate Program 
								</a>
							</div>
						</div>
						<div class="both"></div>
					</div>
					<div class="copyright_wr">
						© 2015 Webmaster studio. Все права защищены.
					</div>
				</div>
			</div>
		</div>
	</body>
</html>