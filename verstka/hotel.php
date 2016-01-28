<?include($_SERVER["DOCUMENT_ROOT"]."/verstka/default/header.php");?>
	<div class="main_content" id="red_style">
		<div class="top_hotel_img">
			<img src="/images/main_slider_slide_1.jpg" />
			<div class="th_table">
				<div class="th_td">
					<div class="top_hotel_name_wr">
						
						<img src="/images/collection_logo_1.png" />
						<div class="top_hotel_name">
							<div class="background"></div>
							<div class="thn_text">
								Cramim Спа-центр и винная
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="content_block border">
			<div class="content_block_title_wr">
  				<div class="content_block_title">
	  				СПА ОТЕЛЬ И ВИННАЯ
	  				<span class="color_light">
	  					В ИЕРУСАЛИМСКИХ ГОРАХ
	  				</span>
	  			</div>
	  		</div>
	  		<div class="hotel_nav_wr">
  				<div class="hotel_nav">
  					<div class="hotel_nav_top background">
  						<div class="hotel_nav_icons">
  							Все об отеле
  						</div>
  					</div>
  					<div class="hotel_nav_dd border">
  						<div class="hn_dd_item">
  							<a href="#" class="color border_light">
  								Галерея
  							</a>
  						</div>
  						<div class="hn_dd_item">
  							<a href="pop_rooms" class="color border_light">
  								Популярные комнаты
  							</a>
  						</div>
  						<div class="hn_dd_item">
  							<a href="pop_rooms" class="color border_light">
  								Специальные сделки
  							</a>
  						</div>
  						<div class="hn_dd_item">
  							<a href="map_section" class="color border_light">
  								Расположение отеля
  							</a>
  						</div>
  						<div class="hn_dd_item">
  							<a href="fun_section" class="color border_light">
  								Чем можно заняться?
  							</a>
  						</div>
  						<div class="hn_dd_item">
  							<a href="#" class="color border_light">
  								Где можно поесть?
  							</a>
  						</div>
  						<div class="hn_dd_item">
  							<a href="#" class="color border_light">
  								События
  							</a>
  						</div>
  						<div class="hn_dd_item">
  							<a href="feedback_section" class="color border_light">
  								Обзоры
  							</a>
  						</div>
  					</div>
  				</div>
  			</div><!--end_of_hotel_nav_wr-->
  			<div id="hotel_images">
  				<div class="hotel_images_slider">
  					<div class="slide" data-index="1">
  						<img src="/images/hotel/slider/hotel_slide_1.jpg" />
  					</div>
  					<div class="slide" data-index="2">
  						<img src="/images/hotel/slider/hotel_slide_2.jpg" />
  					</div>
  					<div class="slide video_slide" data-index="3">
  						<img src="/images/hotel/slider/hotel_slide_3.jpg" />
  					</div>
  					<div class="slide" data-index="4">
  						<img src="/images/hotel/slider/hotel_slide_4.jpg" />
  					</div>
  					<div class="slide" data-index="5">
  						<img src="/images/hotel/slider/hotel_slide_5.jpg" />
  					</div>
  				</div>
  			</div>
		</div><!---end_of_content_block border-->
		<div id="pop_rooms" class="content_block border">
  			<div class="content_block_title_wr">
  				<div class="content_block_title">
	  				ПОПУЛЯРНЫЕ
	  				<span class="color_light">
	  					НОМЕРА
	  				</span>
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
	  					<div class="pi_parts_wr">
							<div class="pi_left">
								<div class="popular_room_descr color">
									The spacious modern room 
									opens onto a balcony 
									with breathtaking
								</div>
							</div>
							<div class="pi_right">
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
  		<div id="map_section" class="content_block border">
  			<div class="content_block_title_wr">
  				<div class="content_block_title">
	  				РАСПОЛОЖЕНИЕ
	  				<span class="color_light">
	  					ОТЕЛЯ
	  				</span>
	  			</div>
	  		</div>
	  		<div class="map_info_wr border background_light">
	  			<div class="map_menu border">
	  				<div class="map_title background">
	  					Рекомендации
	  				</div>
	  				<div class="map_acc">
	  					<div class="map_acc_item ">
  							<div class="border_light hotel_location">
  								Распложение отеля
  							</div>
  						</div>
  						<div class="map_acc_hidden">
  							<div class="color_light">
  								Some text
  							</div>
  							<div class="color_light">
  								Some text
  							</div>
  							<div class="color_light">
  								Some text
  							</div>
  						</div>
	  				</div>
	  				<div class="map_acc">
	  					<div class="map_acc_item ">
  							<div class="border_light hotel_fun">
  								Чем можно заняться
  							</div>
  						</div>
  						<div class="map_acc_hidden">
  							<div class="color_light">
  								Some text
  							</div>
  							<div class="color_light">
  								Some text
  							</div>
  							<div class="color_light">
  								Some text
  							</div>
  						</div>
	  				</div>
	  				<div class="map_acc">
	  					<div class="map_acc_item ">
  							<div class="border_light hotel_food">
  								Где можно поесть
  							</div>
  						</div>
  						<div class="map_acc_hidden">
  							<div class="color_light">
  								Some text
  							</div>
  							<div class="color_light">
  								Some text
  							</div>
  							<div class="color_light">
  								Some text
  							</div>
  						</div>
	  				</div>
	  			</div>
	  			<div id="map" class="map_wr" data-color="9c0058"></div>
	  			<div class="both"></div>
	  			<div id="insert_map">
					<div class="border" id="pop_map">
						<div class="pop_map_inner">
							<div class="pop_map_img">
								<img src="/images/common_slider_slide_1.jpg">
							</div>
							<div class="pop_map_content">
								<div class="pop_up_title color">
									Крамин SPA Центр и Винная
								</div>
								<div class="pop_up_text">
									Крамин SPA Центр и Винная
								</div>
								<a href="#" class="pop_up_but background">
									Подробнее
								</a>
							</div>
							<div class="both"></div>
						 </div>
					</div>
				</div>
	  		</div>
  		</div><!--------end_of_content_block--->
  		<div id="fun_section" class="content_block border">
  			<div class="content_block_title_wr">
  				<div class="content_block_title">
	  				ЧЕМ МОЖНО
	  				<span class="color_light">
	  					ЗАНЯТЬСЯ
	  				</span>
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
	  				
	  			</div><!---------end_of_proposal_block--->
	  			<?}?>
	  			<div class="both"></div>
	  		</div>
  		</div><!--------end_of_content_block--->
  		<div id="feedback_section" class="content_block border">
  			<div class="content_block_title_wr">
  				<div class="content_block_title color_light">
	  				ОТЗЫВЫ
	  			</div>
	  		</div>
	  		<div class="feedback_section_wr">
	  			
	  			<?
				for($t=1;$t<=3;$t++){
				?>
	  			<div class="feedback_block background_light">
	  				<div class="feedback_user_info">
	  					<div class="feedback_user border_light">
	  						MARTHA
	  					</div>
	  					<div class="feedback_data">
	  						24/09/2015
	  					</div>
	  				</div>
	  				<div class="feedback_text">
	  					“Hands down this is one of the most beautiful hotels we've ever stayed at! The crater views were excellent. My wife and I stayed at a room with private pool and had a great time. The only down side I can think of is that Beresheet is located on the edge of a small town, and there weren't too many options for a night out (restaurants, bars etc.).”
	  				</div>
	  				<div class="feedback_detail">
	  					<a href="#" class="color_light">
	  						Подробнее
	  					</a>
	  				</div>
	  			</div>
	  			<?}?>
	  			<div class="both"></div>
	  		</div>
  		</div>
	</div>	

<?include($_SERVER["DOCUMENT_ROOT"]."/verstka/default/footer.php");?>