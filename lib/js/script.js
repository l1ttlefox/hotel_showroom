///==========================================
$(document).ready(function(){
	
	
	$("#datepicker").datepicker();
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
    $('.hotel_images_slider').bxSlider({
	    slideWidth: 230,
	    minSlides: 5,
	    maxSlides: 5,
	    moveSlides: 1,
	    slideMargin: 0,
	    pager:false,
	    nextText: '',
    	prevText: ''
	  });
    $('.slider-for').slick({
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  fade: true,
	  prevArrow:'<div type="button" class="slick-prev"></button>',
	  nextArrow:'<button type="button" class="slick-next"></button>',
	  asNavFor: '.slider-nav'
	});
	$('.slider-nav').slick({
	  slidesToShow: 5,
	  slidesToScroll: 1,
	  asNavFor: '.slider-for',
	  centerMode: true,
	  focusOnSelect: true,
	  prevArrow:'<div type="button" class="slick-prev"></button>',
	  nextArrow:'<button type="button" class="slick-next"></button>'
	});
	
	$('.scroll-pane').jScrollPane();
   hotelNav();
   header_collapse();
   open_hotels();
   popUpImg();
   popUpRoom();
   mapAcc();
   area_filter();
   dataTour();
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
 
};
function mapAcc(){
	$(".map_acc_item").click(function(){
		if($(this).parent().hasClass("open_sub")){
			$(this).parent().removeClass("open_sub");
		}else{
			$(".map_acc").each(function(){
				$(".map_acc").removeClass("open_sub");
			});
			$(this).parent().addClass("open_sub");
		}
	});
}
function popUpImg(){
	$("#hotel_images .slide").click(function(){
		
		$("#pop_up_img").removeClass("hidden");
		var src = $(this).find("img").attr("src");
		var split = src.split('/');
		var replaceImg = split[split.length-1];
		$('#big_img img').attr('src', '/images/hotel/pop_up/' + replaceImg);
		
	});
	$(".close").click(function(){
		$(this).parent()
		.parent()
		.parent()
		.parent()
		.parent()
		.parent()
		.addClass("hidden");
	});
					
};
function popUpRoom(){
	$(".proposal_block").click(function(){
		
		$("#pop_up_room").removeClass("hidden");
						
	});
	$(".close").click(function(){
		$(this).parent()
		.parent()
		.parent()
		.parent()
		.parent()
		.parent()
		.addClass("hidden");
	});
					
};
function hotelNav(){
	
	$(".hotel_nav_top").click(function(){
		$(this).parent().toggleClass("nav_open");
		$(".hn_dd_item a").click(function(event){
			event.preventDefault();
	 		var $c = $(this).attr("href");
			$('html, body').animate({
                scrollTop: $("#" + $c).offset().top-200
            }, 800);

		 	$(".hotel_nav_top").parent().removeClass("nav_open");
			return false;
			
		});
	});
};
function area_filter(){
	$(".cb_filter:nth-child(1) .cb_filter_top").click(function(){
		if(!$(this).parent().hasClass("show_filter")){
			$(this).parent().addClass("show_filter");
			$(".area_dd_item").click(function(){
			var area = $(this).find("div").text();
			$("#area").text(area);
			$(".area_filter").find("input").val(area);
			$(".cb_filter:nth-child(1)").removeClass("show_filter");
		});
			
		}else{
			$(this).parent().removeClass("show_filter");
		}
		
	});
	
	$(".cb_filter:nth-child(2) .cb_filter_top").click(function(){
		$(document).click(function (e) { // событие клика по веб-документу
        		var div = $(".map_dd_wr"); // тут указываем ID элемента
				if (!div.is(e.target) // если клик был не по нашему блоку
				    && div.has(e.target).length === 0) { // и не по его дочерним элементам
					$(".map_dd_wr").addClass("hidden"); // скрываем его
					$(".map_filter").text("Показать карту");
					$(".map_filter").parent().removeClass("show_map");
					return false;
				}
											
			});
		if(!$(".map_dd_wr").hasClass("hidden")){
			$(".map_filter").text("Показать карту");
			$(".map_filter").parent().removeClass("show_map");												
		}else{
			$(".map_dd_wr").removeClass("hidden");
			$(".map_filter").text("Скрыть карту");
			$(".map_filter").parent().addClass("show_map");
			return false;
		}
		
	});
};
function dataTour(){
	
	$.datepicker.setDefaults($.datepicker.regional['ru']);
	$("#datepicker").datepicker({
		showOtherMonths: true,
		dateFormat: "yy-mm-dd"
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