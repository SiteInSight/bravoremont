<!DOCTYPE HTML>
<html lang="ru">

<head>
<title>Ремонт квартир в Минске - фото и примеры работ</title>
<meta name="description" content=""/>
    <link rel="preconnect" href="https://nebo.by/" crossorigin>
<link rel="preconnect" href="https://content.nebo.by/" crossorigin>
<link rel="preconnect" href="https://cdn-cis.jivosite.com/" crossorigin>
<link rel="preconnect" href="https://code.jivosite.com/" crossorigin>
<link rel="preconnect" href="https://telemetry.jivosite.com/" crossorigin>
<link rel="preconnect" href="https://yastatic.net/" crossorigin>
<link rel="preconnect" href="https://site.yandex.net/" crossorigin>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
<meta content="telephone=no" name="format-detection" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="shortcut icon" href="https://nebo.by/favicon.ico"/>

<link rel="preconnect" href="https://content.nebo.by/template/css/fonts/SegoeUIRegular/SegoeUIRegular.woff" as="font" type="font/woff" >
<link rel="preconnect" href="https://content.nebo.by/template/css/fonts/SegoeUILight/SegoeUILight.woff" as="font" type="font/woff">
<style>
@font-face {
  font-family: "Segoe UI";
  font-display: swap;
  src:url("https://content.nebo.by/template/css/fonts/SegoeUIRegular/SegoeUIRegular.woff") format("woff");
  font-style: normal;
  font-weight: normal;
}
@font-face {
  font-family: "Segoe UI Light";
  font-display: swap;
  src:url("https://content.nebo.by/template/css/fonts/SegoeUILight/SegoeUILight.woff") format("woff");
  font-style: normal;
  font-weight: normal;
}
</style>

<link rel="stylesheet" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'"  href="https://content.nebo.by/template/css/general.min.css"><link rel="stylesheet"  href="https://content.nebo.by/template/css/critical.min.css"><link rel="stylesheet"  href="https://content.nebo.by/template/css/general-mq.min.css"><!--
<link rel="stylesheet" href="https://content.nebo.by/template/css/critical.css" type="text/css"/>
<link rel="stylesheet" href="https://content.nebo.by/template/css/general.css" type="text/css"/>
<link rel="stylesheet" href="https://content.nebo.by/template/css/general-mq.css" type="text/css"/>
-->
<script>
var session_token = 'ff6a7d2623c18f6ff9b9d3e2c73cf764';
</script>

<script type="text/javascript" src="https://content.nebo.by/template/js/jquery.min.js"></script>
    <script async type="text/javascript" src="https://content.nebo.by/modules/lazyload/lazyload.min.js"></script>
<!--<script type="text/javascript" src="https://content.nebo.by/template/js/content.js"></script>
<script type="text/javascript" src="https://content.nebo.by/template/js/jquery.cookie.js"></script>-->
<script  type="text/javascript" src="https://content.nebo.by/template/js/content.min.js"></script><script  type="text/javascript" src="https://content.nebo.by/template/js/jquery.cookie.min.js"></script><script>
    //ymaps.ready(init);
	function init() {
		var geolocation = ymaps.geolocation;
		$.ajax({
			type: "POST",
			url: "https://nebo.by/admin/admin_controller.php",
			data: { action: 'add_geo', country: geolocation.country,region: geolocation.region,city:geolocation.city,ip:'213.87.138.60' },
			cache: false
		});
	}
</script>
<!--<script async type="text/javascript" src="https://content.nebo.by/template/js/forms/inputmask.js"></script>
<script async type="text/javascript" src="https://content.nebo.by/template/js/forms/jquery.inputmask.js"></script>
<script async type="text/javascript" src="https://content.nebo.by/template/js/forms/forms_new.js"></script>-->
<script async type="text/javascript" src="https://content.nebo.by/template/js/forms/inputmask.min.js"></script><script async type="text/javascript" src="https://content.nebo.by/template/js/forms/jquery.inputmask.min.js"></script><script async type="text/javascript" src="https://content.nebo.by/template/js/forms/forms_new.min.js"></script><script>
    jQuery(function($){
        
        $('#toOrderModal-wrapper').appendTo('html');

        $(document).on('click','.toOrderModalOpen', function(){
			if(typeof random_string_url != 'undefined'){
				save_calc_link();
			}
            openToOrderModal();
        });

        $(document).on('click','#toOrderModal-overlay', function(){
            closeToOrderModal();
        });

        $(document).on('click','#toOrderModalClose > i', function(){
            closeToOrderModal();
        });

       /* $(window).keydown(function (event) {
            if (event.keyCode == 27) { // Кнопка ESC
                closeToOrderModal();
            }
        });*/
    });
    function openToOrderModal() {

        if ($('#toOrderModal').find('*').length == 0) {

        var toOrderURL = location.host+location.pathname;
        var toOrderInfo = $('.toOrderModalInfo').val();
        var toOrderReferer = $.cookie('referer_link');

        $.ajax({
            type: "POST",
            url: "https://content.nebo.by/modules/toOrder/toOrderModalAjax.php",
            data: { toOrderURL:toOrderURL,toOrderInfo:toOrderInfo,toOrderReferer:toOrderReferer},
            cache: false,
            success: function(data)
            {
                if(data != "") {

                    $('#toOrderModal').html(data);
                    $(".toOrder_form .us_mobile").focus();
                }
            }
        });

        }
        $('html').addClass('blur');
        $('#toOrderModal-wrapper').css('visibility', 'visible');
    }
    function closeToOrderModal() {
        $('html').removeClass('blur');
        $('#toOrderModal-wrapper').css('visibility','hidden');
    }

</script>

<div id="toOrderModal-wrapper" class="callme-wrapper">

    <div id="toOrderModal-overlay" class="callme-overlay">
    </div>

    <div id="toOrderModal" class="callme">

    </div>
</div>        <script async src="https://content.nebo.by/modules/randomsize/resize.js"></script>
    
</head>
<script>var personal_page = false;</script>

 
<div class="topmenu-wrapper endFloat">
<div class="topmenu-container endFloat">



<div class="topmenu-links">	
	<ul class="topmenu-links-ul">
		<li class="topmenu-links-item "><a href="https://nebo.by/">Мебель</a></li>
		<li class="topmenu-links-item "><a href="https://steklo.nebo.by/">Стекло, зеркала</a></li>
		<li class="topmenu-links-item active"><a href="https://remont.nebo.by/">Ремонт</a></li>
		<li class="topmenu-links-item "><a href="https://potolki.nebo.by/">Потолки</a></li>
		<li class="topmenu-links-item "><a href="https://divan.nebo.by/">Мягкая мебель</a></li>
		<li class="topmenu-links-item "><a href="https://dveri.nebo.by/">Двери, перегородки</a></li>

		<!--<li class="topmenu-links-item "><a href="https://interior.nebo.by/">Дизайн</a></li>-->
	</ul>
</div>	



	
<div class="topmenu-actions">	

		
	
	
</div>	

</div>
</div>

<div class="width100 header eF">
<div class="width1004 eF">

    <div class="header_logo_block">
        <a href="http://nebo.by">
        <img src="https://nebo.by/img/logo.png" alt="NEBO.by"/>
        </a>
    </div>
    
        
    <label  class="header_mobile_contacts" onclick="click_header_toggle_mobile();"><span>Позвонить</span><span>Закрыть</span></label>
    
    <div class="contacts_box">
    <div class="contacts_box_phones">
                      
			
				<div class="cbSchedule">
					<i class="schedule-svg"></i>
					<div>
						<span style="color:#333">пн-вс 9:00-21:00</span>
					</div>
				</div>
                
                                
            </div>
   
     
           <div class="contacts_box_phones" style="display: block;">
                      
                <div class="cbPhone"><i class="velcom-logo-svg"></i><div class="cbPhonekod">44</div><div class="cbPhonenumber">791-98-91</div></div>
                <div class="contacts_phones_row_call"><a href="tel:+37544-791-98-91"><span>Вызов</span></a></div>
                
                <div class="cbPhone"><i class="mts-logo-svg"></i><div class="cbPhonekod">29</div><div class="cbPhonenumber">265-64-23<i class="viber-logo"></i></div></div>
                <div class="contacts_phones_row_call"><a href="tel:+37529-265-64-23"><span>Вызов</span></a></div>
                                
            </div> 
    

            
    
    
    <div class="contacts_box_other">
    	<div class="cbEmail"><i class="email-svg"></i><div><a href="mailto:info@nebo.by" title="Написать на электронную почту">info@nebo.by</a></div></div>
		
		<div class="cbMessengers">
				
					<div>
						<span style="margin-left: 8px;">Написать в</span>
					</div>
					
					<div>
						<a href="viber://chat?number=%2B375292656423" title="Написать в Viber"><i class="viber-button-svg"></i></a>

                    </div>
					
        </div>
				
    </div>    
    </div>
    



    
     
    

</div>
</div>

<script type="text/javascript" src="https://content.nebo.by/template/js/fixed-header.js"></script>
<input type="hidden" id="numBlock" value="true" />
 
<div class="submenu"> 
<div class="fixed-header" id="FixHead">
<div class="FH_container">


<a href="javascript:void(0);" onclick="fxHideShow(777); selectStr();" id="fx777" class="gamburger fx_head sub_arrow">
<span>Все товары</span>
</a>
<div class="gamburger_arrow"></div>
<a class="fixed-header-home" href="https://remont.nebo.by" onclick="fxHideShow(0);" id="fx0" ><span>Ремонт квартир</span></a>


<a id="cssplay_menutoggle" onclick="click_toggle();">
	<label title="Меню"></label>
	<span>МЕНЮ</span>
</a>

<div class="cssplay_menuwrap">

        <div class="cssplay_close" onclick="click_toggle();">
            <span></span>
            <span></span>
        </div>

    <div id="cssplay_menu">
		<a href="https://remont.nebo.by/foto.php" onclick="fxHideShow(1);" id="fx1" class="fx_head" ><span>Галерея</span></a>
		<a href="https://remont.nebo.by/rassrochka.php" onclick="fxHideShow(4);" id="fx4" class="fx_head" ><span>Рассрочка</span></a>
        <a href="https://remont.nebo.by/price.php" onclick="fxHideShow(3);" id="fx3" class="fx_head"><span>Цены</span></a>
		<a href="https://remont.nebo.by/faq.php" onclick="fxHideShow(2);" id="fx2" class="fx_head" ><span>Вопросы</span></a>
        <a href="https://remont.nebo.by/otzyvy.php" onclick="fxHideShow(5);" id="fx5" class="fx_head" ><span>Отзывы</span></a>
		<a href="https://remont.nebo.by/contacts.php" onclick="fxHideShow(6);" id="fx6" class="fx_head" ><span>О нас</span></a>
    </div>
</div>

<label id="cssplay_resetlabel"></label>


</div>
</div>



<!-- ПОДКЛЮЧЕНИЕ НЕБО-МЕНЮ (потом надо будет перенести на nebo.by и подключать ко всем поддоменам. И fixed-header.js надо тож из одного файла подключать)-->
<div class="fixed-header1 lazy for_nebomenu fx" id="FixHead777" style="display: none;" data-bg="url(https://content.nebo.by/template/img/nebomenu_back_summer.jpg)">
<script async type="text/javascript" src="https://content.nebo.by/template/js/swipe.min.js"></script><!--<script type="text/javascript" src="https://content.nebo.by/template/js/swipe.js"></script>-->
<script async type="text/javascript">
var leftDoxFlag = true;
var flagMouse = false;
var x=0, y=0, x1=0, y1=0;
var element_id = null;
var mouseFlag = false;
var timeout_id = null;
var first_down = false;
$(document).ready(function(){

	$("div .nebomenu_leftbox").hover(
		function(){
			flagMouse = true;
        },
        function(){
			flagMouse = false;
			leftDoxFlag = true;
		}
    );

	$(".nebomenu_leftbox a").hover(
        function(){
			element_id = $(this).attr('id');
			if(leftDoxFlag){
				$(".nebomenu_leftbox a").each(function (){
					$(this).removeClass("nebomenu_leftbox_hover");
				});
				$(".nebomenu_rightbox > div").each(function (){
					$(this).hide();
				});
				$(this).addClass("nebomenu_leftbox_hover");
				$("#rightbox"+element_id.substr(3)).show();
				leftDoxFlag = false;
			}else{
				timeout_id = setTimeout(function(){
					if(flagMouse && mouseFlag){
						$(".nebomenu_leftbox a").each(function (){
							$(this).removeClass("nebomenu_leftbox_hover");
						});
						$(".nebomenu_rightbox > div").each(function (){
							$(this).hide();
						});
						$("#"+element_id).addClass("nebomenu_leftbox_hover");
						$("#rightbox"+element_id.substr(3)).show();
						mouseFlag = false;
						leftDoxFlag = false;
					}
				},500);
			}			
        },
        function(){
			clearTimeout(timeout_id);
		}
    );
	
	setInterval(function(){
		if(flagMouse){
			$('.nebomenu_leftbox').mousemove(function(e){
				x = e.pageX;
				y = e.pageY;
			});
		}
	},20);

	setInterval(function(){
		if(flagMouse){
			if((Math.abs(x-x1)<=2 && Math.abs(y-y1)>=4) || ((x1-x)>=2 && Math.abs(y-y1)>=4) || (x1>x)){
				if(first_down){
					leftDoxFlag = true;
					first_down = false;
				}else{
					first_down = true;
				}
			}else if((Math.abs(x-x1)>=2 && Math.abs(y-y1)>=4) || (Math.abs(x-x1)>=2 && Math.abs(y-y1)<=4)){
				leftDoxFlag = false;
				first_down = false;
			}else if((Math.abs(x-x1)==0 && Math.abs(y-y1)==0)){
				mouseFlag = true;
				first_down = true;
			}			
			x1 = x;
			y1 = y;
		}
	}, 40);
});
</script>


<div class="FH_container1 nebomenu endFloat">
    <div  class="nebomenu_close_layer"  onclick="fxHideShow(777);"></div>     
        <div class="nebomenu_leftbox">
			<div class="nebomenu_close"  onclick="fxHideShow(777);">
				<span></span>
				<span></span>
			</div>

        <div class="nebomenu_leftbox_content">    
            <a id="str1" class="nebomenu_search">
				<div class="ya-site-form ya-site-form_inited_no" onclick="return {'action':'/search.php','arrow':false,'bg':'transparent','fontsize':16,'fg':'#000000','language':'ru','logo':'rb','publicname':'Поиск по nebo.by','suggest':false,'target':'_self','tld':'ru','type':3,'usebigdictionary':false,'searchid':2288897,'input_fg':'#333333','input_bg':'#ffffff','input_fontStyle':'normal','input_fontWeight':'normal','input_placeholder':'','input_placeholderColor':'#000000','input_borderColor':'#a6a6a6'}"><form action="https://yandex.ru/search/site/" method="get" target="_self" accept-charset="utf-8"  aria-label="Поиск по сайту"><input type="hidden" name="searchid" value="2288897"/><input type="hidden" name="l10n" value="ru"/><input type="hidden" name="reqenc" value=""/><input type="search" name="text" value="" aria-label="Поиск по сайту"/><input type="submit" value="Найти" aria-label="Найти"/></form></div><style type="text/css">.ya-page_js_yes .ya-site-form_inited_no { display: none; }</style><script type="text/javascript">(function(w,d,c){var s=d.createElement('script'),h=d.getElementsByTagName('script')[0],e=d.documentElement;if((' '+e.className+' ').indexOf(' ya-page_js_yes ')===-1){e.className+=' ya-page_js_yes';}s.type='text/javascript';s.async=true;s.charset='utf-8';s.src=(d.location.protocol==='https:'?'https:':'http:')+'//site.yandex.net/v2.0/js/all.js';h.parentNode.insertBefore(s,h);(w[c]||(w[c]=[])).push(function(){Ya.Site.Form.init()})})(window,document,'yandex_site_callbacks');</script>
			</a>
            <a id="str2" href="https://nebo.by/"><span>Мебель на заказ</span></a>
			<a id="str3" href="https://steklo.nebo.by"><span>Стекло и зеркала</span></a>
			<a id="str8" href="https://remont.nebo.by/"><!--<img src="https://steklo.nebo.by/img/42-42-remont.png" />--><span>Ремонт квартир</span></a> 
            <a id="str4" href="https://potolki.nebo.by/"><span>Натяжные потолки</span></a>
			<a id="str5" href="https://divan.nebo.by/"><span>Мягкая мебель</span></a>			
            <a id="str6" href="https://dveri.nebo.by/"><span>Двери и арки</span></a> 
        <!--<a id="str7"  href="https://pol.nebo.by/"><span>Напольные покрытия</span></a> -->
		<!--<a id="str10"  href="https://interior.nebo.by/"><span>Дизайн интерьера</span></a>-->
			<a id="str10"  href="https://raspil.nebo.by/"><span>Распил ДСП</span></a>
           <!-- <a id="str9" href=""><span style="line-height: 43px;">Еще на сайте</span></a> -->
        </div> 
    </div>  
    
    <div class="nebomenu_rightbox" style="">
    
<!-- Акции -->    
		<div id="rightbox1" style="display:none;">
          <div class="rightbox_container">
		  
			<div class="rightbox_column_double">
           <a class="rightbox_tile promo" href="https://interior.nebo.by/">
                <img data-original="https://content.nebo.by/template/img/tiles/507-415-sale-interior.jpg" />
                
				<div style="position:absolute;bottom:80px;font:42px 'Segoe UI Light'">
					<div style="">-15%</div>
					<div style="line-height:20px;font-size:16px">на дизайн интерьера</div>
					<div style="line-height:20px;font-size:16px">до 1 января</div>
				
				</div>
            </a>
			
			<a class="rightbox_tile promo" href="https://potolki.nebo.by/">
                <img data-original="https://content.nebo.by/template/img/tiles/507-159-sale-potolki.jpg" />
                
				<div style="position:absolute;bottom:10px;font:42px 'Segoe UI Light'">
					<div style="">1 год</div>
					<div style="line-height:20px;font-size:16px">бесплатного сервисного обслуживания</div>
					<div style="line-height:20px;font-size:16px">при заказе натяжных потолков</div>
				
				</div>
            </a>
            </div>  

				<a class="rightbox_tile promo" href="https://remont.nebo.by/">
                <img data-original="https://content.nebo.by/template/img/tiles/251-415-sale-remont.jpg"/>
                
				<div style="position:absolute;top:10px;font:42px 'Segoe UI Light';color:white;">
					<div style="">до 1 года</div>
					<div style="line-height:20px;font-size:16px">беспроцентная рассрочка</div>
					<div style="line-height:20px;font-size:16px">на ремонт квартиры</div>
				
				</div>
            </a>
          

           </div> 
        </div>
        
<!-- Мебель на заказ -->        
		<div id="rightbox2" style="display:none;">
            <div class="rightbox_container">

                <div class="submenu_column">
                    <a class="submenu_tile wide" href="https://nebo.by/mebel-na-zakaz/">
						<img data-original="https://content.nebo.by/template/img/tiles/251-123-mebel-catalog.jpg"/>
                        <div>Каталог мебели</div>
                    </a>
					  
					<div class="submenu_linkstile">
						<a class="submenu_link dark" href="https://nebo.by/mebel-na-zakaz/kuhni/"><span>Кухни</span></a>
						<a class="submenu_link dark" href="https://nebo.by/mebel-na-zakaz/shkafy-kupe/"><span>Шкафы-купе</span></a>
						<a class="submenu_link dark" href="https://nebo.by/mebel-na-zakaz/shkafy-raspashnye/"><span>Распашные шкафы</span></a>
						<a class="submenu_link dark" href="https://nebo.by/mebel-na-zakaz/garderobnye/"><span>Гардеробные</span></a>
						<a class="submenu_link dark" href="https://nebo.by/mebel-na-zakaz/mebel-dlya-vannoy/"><span>Мебель для ванной</span></a>
						<a class="submenu_link dark" href="https://nebo.by/mebel-na-zakaz/mebel-dlya-tualeta/"><span>Мебель для туалета</span></a>
						<a class="submenu_link dark" href="https://nebo.by/mebel-na-zakaz/mebel-dlya-zhivotnyh/"><span>Мебель для животных</span></a>
						
						
						
					</div>
                </div>

                <div class="submenu_column">
					<div class="submenu_linkstile">
						<a class="submenu_link yellow" href="https://nebo.by/material/ldsp/"><span>Цвета ЛДСП</span></a>
						<a class="submenu_link yellow" href="https://nebo.by/constructors/"><span>Конструкторы мебели</span></a>
						<a class="submenu_link yellow" href="https://nebo.by/rassrochka.php"><span>Рассрочка 0% до 5 месяцев</span></a>
					</div>

					<div class="submenu_linkstile">
						
						
						<a class="submenu_link dark" href="https://nebo.by/mebel-na-zakaz/detskaya-mebel/"><span>Детская мебель</span></a>
						<a class="submenu_link dark" href="https://nebo.by/mebel-na-zakaz/kompyuternye-stoly/"><span>Компьютерные столы</span></a>
						<a class="submenu_link dark" href="https://nebo.by/mebel-na-zakaz/polki/"><span>Полки и стеллажи</span></a>
						
						<a class="submenu_link dark" href="https://nebo.by/mebel-na-zakaz/spalnaya-mebel/"><span>Спальная мебель</span></a>
						<a class="submenu_link dark" href="https://nebo.by/mebel-na-zakaz/tualetnye-stoliki/"><span>Туалетные столики</span></a>
						
						<a class="submenu_link dark" href="https://nebo.by/mebel-na-zakaz/komody/"><span>Комоды</span></a>
						<a class="submenu_link dark" href="https://nebo.by/mebel-na-zakaz/prihozhie/"><span>Прихожие</span></a>
						
						
					</div>


                </div>

                <div class="submenu_column">

					<a class="submenu_tile wide" href="https://nebo.by/contacts.php">
                        <i class="phone-w-svg"></i>
                        <span>Контакты</span>
                    </a>
					
					<div class="submenu_linkstile">
						<a class="submenu_link dark" href="https://nebo.by/mebel-na-zakaz/gorki-i-sekcii/"><span>Горки и стенки</span></a>
						<a class="submenu_link dark" href="https://nebo.by/mebel-na-zakaz/tumby-tv/"><span>Тумбы ТВ</span></a>
						<a class="submenu_link dark" href="https://nebo.by/mebel-na-zakaz/zhurnalnye-stoly/"><span>Журнальные столы</span></a>
						<a class="submenu_link dark" href="https://nebo.by/mebel-na-zakaz/mebel-dlya-balkona/"><span>Мебель для балкона</span></a>
						
						
					</div>

					
                </div>



            </div>

        </div>
		
		
		
 <!-- Изделия из стекла --> 


<div id="rightbox3" style="display:none;">
            <div class="rightbox_container">
            
                <div class="rightbox_column">
						
					<div class="rightbox_linkstile">	
                    <a class="rightbox_tile" href="https://steklo.nebo.by/skinali-dlya-kuhni-iz-stekla.php">
						<img data-original="https://content.nebo.by/template/img/tiles/251-123-skinali.jpg"/>
                        <div style="color:white;">Скинали для кухни</div>
                    </a>
					  
 
					  <a class="rightbox_link dark" href="https://steklo.nebo.by/katalog-foto-dlya-skinali.php" style="margin-top:-5px;">
                        <span>Каталог изображений</span>
                      </a>
					  
					  <a class="rightbox_link dark" href="https://steklo.nebo.by/skinali-dlya-kuhni-iz-stekla.php#il-skinali-portfolio">
                        <span>Готовые работы</span>
                      </a>
                      
                      <a class="rightbox_link dark" href="https://steklo.nebo.by/price-skinali.php">
                        <span>Цены на скинали</span>
                      </a>
					</div>

					<a class="rightbox_link" href="https://steklo.nebo.by/panno-iz-stekla.php"><span>Картины на стекле</span></a>
					<a class="rightbox_link" href="https://steklo.nebo.by/steklyannye-polki.php"><span>Полки из стекла</span></a>	
					<a class="rightbox_link" href="https://steklo.nebo.by/gidrofobnoe-pokrytie-stekla.php"><span>Гидрофобная защита</span></a>
					<a class="rightbox_link" href="https://steklo.nebo.by/osteklenie-sten.php"><span>Остекление стен</span></a>

					  
					  
					
					
				</div>
                
				
                <div class="rightbox_column">
				
					<a class="rightbox_tile" href="https://steklo.nebo.by/steklyannye-dushevye-kabiny.php">
						<img data-original="https://content.nebo.by/template/img/tiles/251-287-shower.jpg"/>
                        <div style="color:white;">Душевые кабины</div>
                    </a>
					
					<a class="rightbox_tile" href="https://steklo.nebo.by/ekran-na-batareyu-iz-stekla.php">
						<img data-original="https://content.nebo.by/template/img/tiles/251-123-ekran.jpg"/>
                        <div style="color:white;">Экраны на батарею</div>
                    </a>

                </div>
                
                <div class="rightbox_column">
					
					<div class="rightbox_linkstile">
					
					<a class="rightbox_link" href="https://steklo.nebo.by/mozaika-s-fotopechatyu-iz-stekla.php"><span>Мозаика из стекла</span></a>
					
					 </div>
					
					<a class="rightbox_link yellow" href="https://steklo.nebo.by/o-nas.php"><span>Контакты</span></a>
					<a class="rightbox_link yellow" href="https://steklo.nebo.by/rassrochka.php"><span>Рассрочка 0%</span></a>
					<a class="rightbox_link yellow" href="https://steklo.nebo.by/oplata.php"><span>Способы оплаты</span></a>
					<a class="rightbox_link yellow" href="https://steklo.nebo.by/skinali-optom.php"><span>Дилерам</span></a>
				

                </div>
                
                
                
            </div>
        
        </div>
		
		
		
		<!-- Натяжные потолки --> 

		<div id="rightbox4" style="display:none;">
            <div class="rightbox_container">
            
                <div class="rightbox_column">
				
                      
                      <a class="submenu_tile wide" href="https://potolki.nebo.by/info.php">
                        <i class="price-w-svg"></i>            
                        <span>Цены</span>
                      </a>
					  
					  <a class="submenu_tile medium" href="https://potolki.nebo.by/calculator.php">
                        <i class="calculator-w-svg"></i>            
                        <span>Калькулятор</span>
                      </a>
					  
					  <a class="submenu_tile medium" href="https://potolki.nebo.by/skidki.php">
                        <i class="sales-w-svg"></i>            
                        <span>Скидки</span>
                      </a>
                      
                      
                      
                      
                      <a class="submenu_tile medium" href="https://potolki.nebo.by/faq.php">
                        <i class="icon-faq-svg"></i>            
                        <span>Вопросы</span>
                      </a>
                      
                      <a class="submenu_tile medium" href="https://potolki.nebo.by/otzyvy.php">
                        <img data-original="https://content.nebo.by/template/img/tiles/123-123-otzyvy.png"/>
                        <span>Отзывы</span>
                      </a>
                      
                </div>
                
                <div class="rightbox_column">
                    <a class="rightbox_tile" href="https://potolki.nebo.by/gallery.php">
                <img data-original="https://content.nebo.by/template/img/tiles/251-379-potolki-gallery.jpg">
                
				<div>Фотогалерея</div>
            </a>

                
                </div> 
                
                <div class="rightbox_column">
					<a class="rightbox_link" href="https://potolki.nebo.by/tkanevyye-natyazhnyye-potolki.php"><span>Тканевые натяжные потолки</span></a>
					<a class="rightbox_link" href="https://potolki.nebo.by/dizaynerskiye-natyazhnyye-potolki.php"><span>Дизайнерские натяжные потолки</span></a>
					<a class="rightbox_link" href="https://potolki.nebo.by/nemetskiye-natyazhnyye-potolki.php"><span>Немецкие натяжные потолки</span></a>
					<a class="rightbox_link" href="https://potolki.nebo.by/frantsuzskie-natyazhnye-potolki.php"><span>Французские натяжные потолки</span></a>
					<a class="rightbox_link" href="https://potolki.nebo.by/belgiyskiye-natyazhnyye-potolki.php"><span>Бельгийские натяжные потолки</span></a>
					<a class="rightbox_link" href="https://potolki.nebo.by/rossiyskiye-natyazhnyye-potolki.php"><span>Российские натяжные потолки</span></a>
					<a class="rightbox_link" href="https://potolki.nebo.by/kitayskiye-natyazhnyye-potolki.php"><span>Китайские натяжные потолки</span></a>
                </div>
                
                
                
            </div>
        
        </div>


		
        
 <!-- Мягкая мебель -->       
        
        
        <div id="rightbox5" style="display:none;">
            <div class="rightbox_container">
            
                <div class="rightbox_column">
				
				<div class="rightbox_linkstile">	
                    <a class="rightbox_tile" href="https://divan.nebo.by/catalog/">
						<img data-original="https://content.nebo.by/template/img/tiles/251-123-divany.jpg"/>
                        <div style="color:white;">Диваны</div>
                    </a>
					  
 
					  <a class="rightbox_link dark" href="https://divan.nebo.by/catalog/divany-uglovye.php" style="margin-top:-5px;">
                        <span>Угловые диваны</span>
                      </a>
					  
					  <a class="rightbox_link dark" href="https://divan.nebo.by/catalog/divany-pryamye.php">
                        <span>Прямые диваны</span>
                      </a>
                      
                      <a class="rightbox_link dark" href="https://divan.nebo.by/catalog/divan-krovat.php">
                        <span>Диваны-кровати</span>
                      </a>
					  
					  <a class="rightbox_link dark" href="https://divan.nebo.by/catalog/kuhonnye-divany.php">
                        <span>Кухонные диваны</span>
                      </a>
					</div>
					
					<a class="rightbox_link" href="https://divan.nebo.by/catalog/krovati.php">Кожаные кровати</a>
                    <a class="rightbox_link" href="https://divan.nebo.by/catalog/kresla.php">Кресла</a>
                    <a class="rightbox_link" href="https://divan.nebo.by/catalog/puf.php">Пуфы и банкетки</a>
					
					
             
                      
                </div>
                
                <div class="rightbox_column">

                    
                
                </div>
                
                <div class="rightbox_column">

                </div>
                
                
                
            </div>
        
        </div>





 



<!-- Двери и арки -->        
		<div id="rightbox6" style="display:none;">
            <div class="rightbox_container">
            
                <div class="rightbox_column">
				
				<div class="rightbox_linkstile">	
                    <a class="rightbox_tile" href="https://dveri.nebo.by/catalog/">
						<img data-original="https://content.nebo.by/template/img/tiles/251-123-interior-doors.jpg"/>
                        <div style="color:white;">Межкомнатные двери</div>
                    </a>
					  
 
					<!--  <a class="rightbox_link dark" href="https://divan.nebo.by/catalog/divany-uglovye.php" style="margin-top:-5px;">
                        <span>Угловые диваны</span>
                      </a>
					  
					  <a class="rightbox_link dark" href="https://divan.nebo.by/catalog/divany-pryamye.php">
                        <span>Прямые диваны</span>
                      </a>
                      
                      <a class="rightbox_link dark" href="https://divan.nebo.by/catalog/divan-krovat.php">
                        <span>Диваны-кровати</span>
                      </a>
					  
					  <a class="rightbox_link dark" href="https://divan.nebo.by/catalog/kuhonnye-divany.php">
                        <span>Кухонные диваны</span>
                      </a>-->
					  
					</div>
					
					
                      

                      
                    

                      
                </div>
                
                <div class="rightbox_column">
					<a class="submenu_tile wide" href="https://dveri.nebo.by/metaldveri/">
                        <i class="icon-entry-door-svg"></i>             
                        <span>Входные двери</span>
					</a>

                
                </div>
                
                <div class="rightbox_column">

                </div>
                
                
                
            </div>
        
        </div>
        
        
        
        
<!-- Напольные покрытия       
		<div id="rightbox7" style="display:none;">
            <div class="rightbox_container">
            <div class="rightbox_column">
			
				<a class="submenu_tile medium" href="https://pol.nebo.by">
                    <i class="home-w-svg"></i>            
                    <span>Главная</span>
                 </a>
				 
				 <a class="submenu_tile medium" href="https://pol.nebo.by/contacts.php">
                        <i class="phone-w-svg"></i>            
                        <span>Контакты</span>
                      </a>
					  
            <a class="submenu_tile wide" href="https://pol.nebo.by/laminat/">
                        <i class="laminat-w-svg"></i>           
                        <span>Ламинат - каталог</span>
                      </a>                        
            
                      
                                            
                      
                      
                      
					  <a class="rightbox_tile" href="https://pol.nebo.by/price-laminat.php">
                        <img src="https://content.nebo.by/template/img/tiles/123-123-price.png" />            
                        <span>Услуги</span>
                      </a>
                      
                      
                      
                      

                      
                </div>
                
                <div class="rightbox_column">
				
				 
					  
					  <a class="submenu_tile wide" href="https://pol.nebo.by/furnitura/">
                        <i class="pol-accry-w-svg"></i>            
                        <span>Комплектующие</span>
                      </a>
					  
					  
					  <a class="submenu_tile wide darkGreenTile" href="https://pol.nebo.by/linoleum/">
                        <i class="linoleum-w-svg"></i>           
                        <span>Линолеум - каталог</span>
                      </a>
                      
                
                
                
                      
                      
                      <a class="rightbox_tile darkGreenTile" href="https://pol.nebo.by/price-linoleum.php">
                        <img src="https://content.nebo.by/template/img/tiles/123-123-price.png" />            
                        <span>Услуги</span>
                      </a>
                      
                     
                      
                      
                      
                      
                     
                      


                </div>
                
                <div class="rightbox_column">

                </div>
                
                
                
            </div>
        
        </div>    -->  


		
        
 <!-- Ремонт квартир --> 

		<div id="rightbox8" style="display:none;">
            <div class="rightbox_container">
            
                <div class="rightbox_column">
                    <a class="rightbox_tile" href="https://remont.nebo.by/">
                     <img data-original="https://content.nebo.by/template/img/tiles/251-123-home.png"/>
                        <span>Главная страница</span>
                      </a>
                      
                      <a class="rightbox_tile" href="https://remont.nebo.by/price.php">
                        <img data-original="https://content.nebo.by/template/img/tiles/251-123-price.png"/>
                        <span>Цены на ремонт</span>
                      </a>
                      
                      
                      <a class="rightbox_tile" href="https://remont.nebo.by/foto.php">
                        <img data-original="https://content.nebo.by/template/img/tiles/123-123-gallery.png"/>
                        <span>Фотогалерея</span>
                      </a>
                      
                      
                      <a class="rightbox_tile" href="https://remont.nebo.by/otzyvy.php">
                        <img data-original="https://content.nebo.by/template/img/tiles/123-123-otzyvy.png"/>
                        <span>Отзывы</span>
                      </a>
                      
                </div>
                
                <div class="rightbox_column">
                    <a class="rightbox_tile" href="https://remont.nebo.by">
                        <img data-original="https://content.nebo.by/template/img/tiles/251-379-remont-akciya.jpg"/>
                        <span class="specialtile">Закажи ремонт и получи<br /> -5% на все товары NEBO!</span>
                      </a>

                
                </div> 
                
                <div class="rightbox_column">

                </div>
                
                
                
            </div>
        
        </div>
		
		
		 <!-- Ремонт квартир --> 

		<div id="rightbox10" style="display:none;">
            <div class="rightbox_container">
            
                <div class="rightbox_column">

                      
                </div>
                
                <div class="rightbox_column">

                
                </div> 
                
                <div class="rightbox_column">

                </div>
                
                
                
            </div>
        
        </div>
        
        
        
 <!-- Еще на сайте --> 

		<div id="rightbox9" style="display:none;">
            <div class="rightbox_container">
            
            <div class="rightbox_column">
                    <a class="rightbox_tile" href="https://interior.nebo.by">
                        <img data-original="https://content.nebo.by/template/img/tiles/251-379-other-interior.jpg"/>
                        <span class="otherltile" style="background: #9c678f;">Дизайн интерьера</span>
                      </a>

                
                </div>
            
                <div class="rightbox_column_double">
                    <a class="rightbox_tile" href="https://raspil.nebo.by">
                     <img data-original="https://content.nebo.by/template/img/tiles/507-251-other-raspil.jpg"/>
                        <span class="otherltile" style="background: #679c84;">Распил ДСП</span>
                      </a>
                      
                      <a class="rightbox_tile" href="https://oboi.nebo.by">
                        <img data-original="https://content.nebo.by/template/img/tiles/251-123-catalog-oboi.png"/>
                        <span>Жидкие обои</span>
                      </a>
                      

                      

                </div>
                
                 

                
                
                
            </div>
        
        </div>
	</div> 
</div></div>
<!-- Конец-->






<!-- ЦЕНЫ------------------------------------------
<div class="fixed-header1 fx" id="FixHead3" style="display: none;url(https://content.nebo.by/template/img/nebomenu_back_summer.jpg)">

<div class="FH_container1  endFloat">

					  
					 <a class="submenu_tile medium" href="https://remont.nebo.by/rassrochka.php">
                        <i class="piggy-bank-w-svg"></i>            
                        <span>Рассрочка</span>
                      </a>

                    <a class="submenu_tile  wide" href="https://remont.nebo.by/price.php">
                        <i class="price-w-svg"></i>            
                        <span>Цены на ремонт квартир</span>
                      </a>

    </div>
</div>
-->





</div>   






<!-- НАВЕРХ------------------------------------------>

<a href="javascript:void(0);" class="go_top" onclick="go_top();">
<div>
    <!--[if gte IE 9]> <!---->
      <svg version="1.1" id="Isolation_Mode" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 35 35" enable-background="new 0 0 35 35" xml:space="preserve">
        <path fill="#0B0A0B" d="M17.5,35C7.8,35,0,27.2,0,17.5C0,7.9,7.8,0,17.5,0C27.1,0,35,7.9,35,17.5C35,27.2,27.1,35,17.5,35z M17.5,2.2C9.1,2.2,2.2,9.1,2.2,17.5c0,8.4,6.9,15.3,15.3,15.3c8.4,0,15.3-6.9,15.3-15.3C32.8,9.1,25.9,2.2,17.5,2.2z"></path>
        <polygon fill="#0B0A0B" points="15.8,14.5 10.7,19.9 10.7,15.5 17.5,8.3 24.3,15.5 24.3,19.9 19.2,14.5 19.2,26.7 15.8,26.7"></polygon>
      </svg>
    <!--<![endif]-->
  </div>
  <div>Наверх</div>
</a><div class="content_container eF">
	<!--<link rel="stylesheet" type="text/css" href="https://content.nebo.by/modules/neboslide/neboslide.css">
    <script async src="https://content.nebo.by/modules/neboslide/neboslide.js"></script>
	<script async type="text/javascript" src="https://content.nebo.by/template/js/swipe.js"></script>
	<link rel="stylesheet" href="https://content.nebo.by/modules/neboslide/jquery.mCustomScrollbar.css" />
	<script async src="https://content.nebo.by/modules/owl-carousel/new/owl.carousel.js"></script>
    <script async src="https://content.nebo.by/modules/owl-carousel/new/carousel.js"></script>
    <link rel="stylesheet" href="https://nebo.by/inc_gallery/jquery-ui.css" />
    <script async src="https://content.nebo.by/template/js/color-filter/jquery-ui.js"></script>-->

            <script>
            var user_agent = '';
            var authid = '';
        </script>
        <link rel="stylesheet" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'"  href="https://content.nebo.by/modules/neboslide/neboslide.min.css"><link rel="stylesheet" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'"  href="https://nebo.by/inc_gallery/jquery-ui.min.css"><link rel="stylesheet" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'"  href="https://content.nebo.by/modules/neboslide/jquery.mCustomScrollbar.min.css"><script async type="text/javascript" src="https://content.nebo.by/modules/neboslide/neboslide.min.js"></script><script async type="text/javascript" src="https://content.nebo.by/template/js/swipe.min.js"></script><script  type="text/javascript" src="https://content.nebo.by/modules/owl-carousel/new/owl.carousel.min.js"></script><script  type="text/javascript" src="https://content.nebo.by/modules/owl-carousel/new/carousel.min.js"></script><script async type="text/javascript" src="https://content.nebo.by/template/js/color-filter/jquery-ui.min.js"></script>    <script async src="https://content.nebo.by/modules/neboslide/jquery.mCustomScrollbar.concat.min.js"></script>

	<script>
		if(neboslideOpen==true)
		{
			$(window).keydown(function (event) {
				if (event.keyCode == 27) { // Кнопка ESC
					fixMenuOn();
				}
			});
		}
		(function($){
			$(window).load(function(){

			    $('.nsAttachedBlock').resizable({
                    aspectRatio: true,
                    maxWidth: 600,
                    minWidth: 200
                });
			    $('.nsAttachedBlock').draggable();

                var nsBackgroundColor = sessionStorage.getItem('nsBackgroundColor');
                if(nsBackgroundColor != null)
                {
                    $('.nsImage-container').css('background-color',nsBackgroundColor);
                }

				if (nsWindowWidth > nsMaxMobileRes) {
					$("#nsContent-scroll").mCustomScrollbar({
						scrollButtons:{ enable: false },
						scrollInertia: 0,
						callbacks: {
							whileScrolling: function () {
								//alert(this.mcs.topPct);
								if (Math.abs(this.mcs.top) < $('.nsProduct').height()) // Активируем таб №1 при скролле
								{
									$('.nsTabs-tab.nsDiscussion-tab').removeClass('current');
									$('.nsTabs-tab.nsInfo-tab').removeClass('current');
									$('.nsTabs-tab.nsProduct-tab').addClass('current');
								}
								if (Math.abs(this.mcs.top) > ($('.nsProduct').height()) * 0.7) // Активируем таб №2 при скролле
								{
									$('.nsTabs-tab.nsDiscussion-tab').removeClass('current');
									$('.nsTabs-tab.nsProduct-tab').removeClass('current');
									$('.nsTabs-tab.nsInfo-tab').addClass('current');
								}
								if (Math.abs(this.mcs.top) > ($('.nsProduct').height() + $('.nsInfo').height()) * 0.7) // Активируем таб №3 при скролле
								{
									$('.nsTabs-tab.nsProduct-tab').removeClass('current');
									$('.nsTabs-tab.nsInfo-tab').removeClass('current');
									$('.nsTabs-tab.nsDiscussion-tab').addClass('current');
								}
							}
						}
					});
				}
			});



		})(jQuery);

		
        function changeBackgroundColor(color) {
            $('.nsImage-container').css('background-color',color);
            sessionStorage.setItem('nsBackgroundColor', color);
        }
	</script>

    
    </head>
<!--<div class="nsOverlay-background"></div>-->
<div class="nsOverlay hidden">
    <div class="nsModal product expanded">


        <!-- НАЗАД К РОДИТЕЛЬСКОМУ АРТИКУЛУ  -->

        <div class="nsModalBackToParent">
				<div class="nsModalBackToParentArrow"><span>Назад</span></div>
                <div class="nsModalBackToParentImage">
				</div>
        </div>
        

        

        <!-- ИЗОБРАЖЕНИЕ  -->
            
            
                <div id="nsImage-container" class="nsImage-container">


					<input type="hidden" id="nsCurrent_img_id" value="">
                    <div class="nsImage-body">

                        <div class="nsRelatedProductsTags"></div>


                        <div class="nsImage-viewlayer MainImage">
							
							<div class="nsImageNav">
								<div class="nsImageNav-left" onclick="prev_photo();">
								   <i></i> 
								</div>
                            
								<div class="nsImageNav-right" onclick="next_photo();">
									<i></i>
								</div>
							</div>
							
							<div class="nsImageZoom-layer" style="display:none;">
								<div class="nsImageZoom">
									<div class="nsImageZoom-in" onclick="imageZoomIn();">+</div>                            
									<div class="nsImageZoom-out" style="display:none;" onclick="imageZoomOut();">-</div>
								</div>
							</div>
						
                            <div class="nsImagePseudo-viewlayer">
                                <input type="hidden" id="tag_left_percent">
                                <input type="hidden" id="tag_top_percent">
                            </div>
							<img src="" style="display:none;" id="photo_prev">
							<img src="" class="nsImageView nsPrevImage" id="big_photo_prev" style="visibility:hidden;">
							<img src="" class="nsImageView nsCurrentImage" id="big_photo">
                            <img src="" class="nsImageView nsNextImage" id="big_photo_next" style="visibility:hidden;">
                            <img src="" style="display:none;" id="photo_next">

                            <div class="nsLoader">
                                <!--<img src="https://content.nebo.by/template/img/gif/loader.svg">-->
                            </div>
                        </div>

                        
                        
                        <div class="nsActions">

									<div class="nsModalColorBlock">
										
										<div class="nsModalColors">
											<div class="ColorfulColor" title="Выбрать">
												<input type="color"  class="select_color" list="colorList" onchange="changeBackgroundColor(this.value);">
												<datalist id="colorList">
													<option value="#EEEEEE">#EEEEEE</option>
													<option value="#D1CBC5">#D1CBC5</option>
													<option value="#A6A2A3">#A6A2A3</option>
													<option value="#D7CCD7">#D7CCD7</option>
													<option value="#ADCFD8" title="Голубой пастельный">#ADCFD8</option>
													<option value="#000000" title="Черный">#000000</option>
													<option value="#FFFFFF" title="Белый">#FFFFFF</option>
													<option value="#483C35">#483C35</option>
													<option value="#E5D8D0" title="Бежевый">#E5D8D0</option>
													<option value="#F6ECC9" title="Сливочная пастель">#F6ECC9</option>

												</datalist>
											</div>
										</div>
										<div class="nsModalColorsTitle"><span>Цвет фона</span></div>
									</div>

                                    
									<div class="ppAltImages-wrapper">
										<div class="ppAltImages-container">
											<div class="ppAltImages-leftArrow"></div>
											<div class="ppAltImages-rightArrow"></div>
											<div class="ppOwl_nsCarousel">

												</div>
											</div>
									</div>
                            <div class="ppAltImages-preload"></div>
 
                                        

                                    <div onclick="click_nsExpandModeToggle();" class="nsExpandToggle btn med">
                                        <i></i>
                                    </div>

                        </div>
                        <div class="nsAttachedBlock">
                            <div class="closeAttachedBlock" onclick="ns_close_globals();">
                                <span>✖</span>
                            </div>
                            <div class="nsAttachedGlobalId"></div>
                        </div>
                    </div>

                    
                </div>
             
  <!-- СОДЕРЖАНИЕ  -->


               <div class="nsContent-container">
					<div class="nsContent-mask">

						<div id="nsContent-scroll" class="nsContent-scroll">
							<div class="nsContent-body">
								<!-- AJAX  -->
							</div>
						</div>


					</div>

					<div class="nsTabs">

						<ul>
							<a href="javascript:void(0);"><li class="nsTabs-tab nsImage-tab" ><i></i></li></a>
							<a href="javascript:void(0);"><li class="nsTabs-tab nsProduct-tab" ><i></i></li></a>
							<a href="javascript:void(0);"><li class="nsTabs-tab nsInfo-tab" ><i></i></li></a>

														<!--<a href="#nsDiscussion"><li class="nsTabs-tab nsDiscussion-tab"><i></i></li></a>-->
						</ul>

					</div>

				</div>
			   
  <!-- КНОПКИ ЗАКРЫТЬ И КОРЗИНА  -->
  
				<div class="nsMainControls">
					<div class="nsClose">
						<a class="nsClose-button" href="javascript:void(0)" onclick="nsClose_photo();fixMenuOn();return false;">
							<i class="icon-close-svg"></i>
						</a>
					</div>
					
					<div class="nsCart" class="">
						<a class="nsCart-info" title="Посмотрите вашу корзину" href="#" target="_blank">
							<i class=""></i>
							<span class="nsCart-count"></span>
						</a>
						<div class="nsCart-preview">
						</div>
					</div>
					
					<div class="nsFavorite" class="">
						<a class="nsFavorite-info" title="Посмотрите вашу корзину" href="#" target="_blank">
							<i class=""></i>
							<span class="nsFavorite-count"></span>
						</a>
						<div class="nsFavorite-preview">
						</div>
					</div>
					
				</div>
  
  

    </div>
</div>


<div class="breadCrumbs-wrapper endFloat">
    <div class="breadCrumbs-container endFloat">
        <div class="breadCrumbs">
           <a href="/">Главная</a>
            <i></i>
            <a href="/gallery/">Ремонт квартир</a>        </div>
    </div>
</div>
<div id="sort_head" class="width100">
    
</div>
<div class="catalogTabs-wrapper">
</div>
<div class="catalogTabs-container">
</div>


<div class="catalogTabs-maincontent">

<h1 id="title_h1">Фото ремонтов квартир</h1>




<div class="width1004 m_lr2_padding eF" id="text_pre">
</div>            
            
   

  <script>
$(window).bind('load', function() {
        setTimeout(function() {
            $(window).bind('popstate', function() {
                location.reload();
            });
        }, 0);
});


	var text_search = '0';
    sessionStorage.setItem("session_token","ff6a7d2623c18f6ff9b9d3e2c73cf764");
	$("document").ready(function($){
		$('.main .fsFilter-property-link').click(function(){
			if($(".main .fsFilter-box").hasClass("opened")){
				scrollToFilterRow();
			}
		});

	});
	
	function fix_chrome_sortmenu(){
		$('.main .fsFilter-property-options').each(function(){
			var elem_prop = $(this);
			elem_prop.find('input[type="checkbox"]').each(function(){
				if($(this)[0].hasAttribute('checked')){
					$(this).prop('checked',true);
				}else{
					$(this).prop('checked',false);
				}
			});
		});
		//get_tags();
	}

	function scrollToFilterRow(){
		$("html, body").animate({ scrollTop: $('.main .fsFilter-row').offset().top },290);
	}

       function get_link(in_value)
        {
            if(in_value != "")
            {
                document.location = 'https://remont.nebo.by/gallery/'+in_value + '/';
            }
            else
            {
               document.location = 'https://remont.nebo.by/gallery/'+in_value;
            }
        }

		var brand_kol = 0;
		var material_kol = 0;
		//var param_mass = ['brand','material','inserts','colors','material_polotna'];
		function get_url_str(flag)
		{
			material_kol = 0;
			first = true;
			var material_str = '';
			$('.main .fsFilter-property-options').each(function(){
				$(this).find(':checked').each(function(){
					if(this.checked && this.hasAttribute('link')){
						if(first){
							material_str = this.getAttribute('link');
							first = false;
							material_kol++
						}else{
							material_str += '_'+this.getAttribute('link');
							material_kol++;
						}
					}
				});
			});
			if(flag){
				if(material_str==''){
					$('#material_hidden').val(0);
				}else{
					$('#material_hidden').val(material_str);
				}
				$('#unit_hidden').val(0);
							
				var url_str = '';
				if(material_str==''){

                    if($('#sort_hidden').val() != 'popular')
                    {
                        if(location.href == 'https://nebo.by/mebel-na-zakaz/')
                        {
                            url_str = 'all/'+$('#sort_hidden').val()+'/';
                        }
                        else
                        {
                            url_str = $('#sort_hidden').val()+'/';
                        }

                    }
                    else
                    {
                        url_str = '';
                    }

				}else if(material_str!='' && material_kol==1){

                    if($('#sort_hidden').val() != 'popular')
                    {
                        url_str += material_str+'.php'+'/'+$('#sort_hidden').val()+'/';
                    }
                    else
                    {
                        url_str += material_str+'.php';
                    }

				}else if(material_str!='' && material_kol>1){
                    if($('#sort_hidden').val() != 'popular')
                    {
                        url_str += material_str+'/'+$('#sort_hidden').val()+'/';
                    }
					else
                    {
                        url_str += material_str+'/';
                    }
				}
				return url_str;
			}else{
				if(material_kol==0 && $('#material_hidden').val()!=0){
					material_kol++;
				}
			}
		}
		function select_option(flag_all, type, id_ckb){
			$('#model_search').val(0);
			$('#product_name_search').val(0);
			if(flag_all){
				$('.block_'+type).find(':checkbox').each(function(){
					this.checked = false;
					if($(this).attr('pod_prop')=='' && id_ckb!=$(this).attr('id')){
						transform($(this),0);
					}
				});
				$('#'+id_ckb).prop('checked',true);
				window.history.pushState(null, null , '/gallery/'+get_url_str(true));
			}else{
				var all_flag = false;
				$('.block_'+type).find(':checkbox').each(function(){
					if(this.checked) all_flag = true;
				});
				if(all_flag){
					$('#'+type+'1').removeAttr("checked");
				}else{
					$('#'+type+'1').prop('checked',true);
				}
				window.history.pushState(null, null , '/gallery/'+get_url_str(true));
			}
			load_ajax_sort();
		}
		
		
	function transform(elem,type){
		
		if(type==0){
			if(elem.checked){
				var parent = $(elem).parent().parent();
				parent.find('a').first().hide();
				parent.find('select').show();
			}else{
				var parent = $(elem).parent().parent();
				parent.find('select').hide();
				parent.find('a').first().show();
				var id_el = $(elem).attr('id');
				$(elem).attr('link', $('#hidden_'+id_el).attr('link'));
				$(elem).attr('text', $('#hidden_'+id_el).attr('text'));
				parent.find('select').val(parent.find('select option:first').val());
			}
		}else{
			$(elem).hide();
			$(elem).parent().find('select').show();
		}
	}

	function select_prop(elem,id){
		$('#'+id).attr('link', $(elem).val());
		$('#'+id).attr('text', $(elem).find(":selected").text());
		$('#'+id)[0].checked = true;
		$('#'+id).trigger('onchange');
	
	}
	var inProgress = false;
	var load = true;
	var block = 1;
    var detail_kol = 5;
    var global_view_mode = 'wide';
	function load_photos()
	{
	    		var max_width = 300;
		var min_width = 140;
		var otstup = 10;
		var prodGrid_box_width = $('.catalog_origin.prodGrid_box').width();

        //var view_mode = $.cookie('view_mode');


        var randomsize_mode = '';
        if($(".randomsize").hasClass('cut'))
        {
            randomsize_mode = 'cut';
        }

		var min_kol_photo = parseInt(prodGrid_box_width / max_width);
		var photo_box_width = min_kol_photo * max_width + (min_kol_photo - 1) * otstup;
		if(photo_box_width < prodGrid_box_width){
			min_kol_photo = min_kol_photo + 1;
		}

		var max_kol_photo = parseInt(prodGrid_box_width / min_width);

		var kol = parseInt($('.catalog_origin .prodGrid_image.rand').length);
        var general_kol = JSON.parse(sessionStorage.getItem('nsData')).length;


		
        
		var unit = $('#unit_hidden').val();
		var material = $('#material_hidden').val();
		var sort = $('#sort_hidden').val();
		var kurs = $('#kurs').val();
		var category_num = $('#category_num').val();
		var model_search = $('#model_search').val();
		var product_name_search = $('#product_name_search').val();
		var async_val = true;

		if($(window).width() > '860')
        {
            if(kol < 30)
            {
                async_val = false;
            }
        }
        else
        {
            if(kol < 8)
            {
                async_val = false;
            }
        }


        var URL = location.href;

        var global_ids = [];
        var nsObj = JSON.parse(sessionStorage.getItem('nsData'));

        var max_in_row = 0;

        if(global_view_mode == 'detail')
        {
            max_in_row = kol + detail_kol;

            if(max_in_row > general_kol)
            {
                max_in_row = general_kol;
            }
            for (var i = kol; i < max_in_row; i++) {
                global_ids.push(nsObj[i].global_id);
            }
        }
        else
        {
            max_in_row = kol+max_kol_photo;

            if(max_in_row > general_kol)
            {
                max_in_row = general_kol;
            }
            for (var i = kol; i < max_in_row; i++) {
                global_ids.push(nsObj[i].global_id);
            }
        }




        if(global_ids.length > 0)
        {

		$("#load").show();
		if(kol != 0) {
			inProgress = true;
			$.ajax({
				type: "POST",
				url: "https://content.nebo.by/template/catalog/catalog-ajax.php",
				data: {
					                    					GLOBAL_SECTION_ID:'6',
					GLOBAL_SUBSECTION_ID:'20',
					GLOBAL_CATEGORY_ID:'',
					GLOBAL_SUBCATEGORY_ID:'',
                    CATALOG_REGION:'',
					block: block,
					kol: kol,
                    general_kol: general_kol,
					unit: unit,
					price_sort: sort,
					kurs: kurs,
					material: material,
					category_num: category_num,
					model_search: model_search,
                    product_name_search: product_name_search,
					min_kol_photo: min_kol_photo,
					max_kol_photo: max_kol_photo,
					prodGrid_box_width: prodGrid_box_width,
                    randomsize_mode:randomsize_mode,
                    session_token:'ff6a7d2623c18f6ff9b9d3e2c73cf764',
                    URL:URL,
                    max_width:max_width,
                    min_width:min_width,
                    otstup:otstup,
					text_search:text_search,
                    global_ids:global_ids,
                    view_mode:global_view_mode
				},
				cache: false,
                async:async_val,
				success: function (data) {
					if (data != "") {
						$(".lazy_gallery.catalog_origin").append(data);
						$("#load").hide();
						inProgress = false;
						block++;
                        $('.prodGrid_cell').removeClass('last_cell');
						$('.prodGrid_cell').last().addClass('last_cell');
					}
					else {
						$("#load").hide();
						inProgress = false;
						load = false;
					}
				}
			});
		}
        //$('.randomsize').css('display','block');
        }
       if(kol != 0 && kol == general_kol && min_kol_photo < 3 && $(window).width() > '860')
        {
            $('.last_cell').width($(".prodGrid_cell:not(.last_cell)").last().width());
            $('.last_cell img').height($(".prodGrid_cell:not(.last_cell)").last().find('img').height());
        }
	}
	var open_page = false;
		function load_ajax_sort()
		{
            $(".lazy_gallery.catalog_origin").html('');
            $(".lazy_gallery.catalog_origin").hide();
			get_tags();
			get_url_str(false);
                        var max_width = 300;
			var min_width = 140;
			var otstup = 10;

            var cookie_view_mode = $.cookie('view_mode');
            var settings_view_mode = '';
            var view_mode = '';

               


            if(cookie_view_mode == settings_view_mode)
            {
                view_mode = cookie_view_mode;
            }
            else
            {
                view_mode = settings_view_mode;
            }

            if(settings_view_mode == 'detail' || settings_view_mode == 'wide' )
            {
                if(cookie_view_mode == null)
                {
                    view_mode = settings_view_mode;
                }
                else
                {
                    view_mode = cookie_view_mode;
                }

            }

            global_view_mode = view_mode;

            /**  режим отображения если мало фото */
            if(view_mode == 'wide' || view_mode == null || view_mode == '')
            {
                $('.lazy_gallery').addClass('wide');
                $('.lazy_gallery').removeClass('vertical');
                $('.lazy_gallery').removeClass('detail');
            }
            else if(view_mode == 'detail')
            {
                $('.lazy_gallery').addClass('detail');
                $('.lazy_gallery').removeClass('wide');
                $('.lazy_gallery').removeClass('vertical');
            }
            else
            {
                $('.lazy_gallery').addClass('vertical');
                $('.lazy_gallery').removeClass('wide');
                $('.lazy_gallery').removeClass('detail');
            }
			var prodGrid_box_width = $('.catalog_origin.prodGrid_box').width();

            var randomsize_mode = '';
            if($(".randomsize").hasClass('cut'))
            {
                randomsize_mode = 'cut';
            }

			var min_kol_photo = parseInt(prodGrid_box_width / max_width);
			var photo_box_width = min_kol_photo * max_width + (min_kol_photo - 1) * otstup;
			if(photo_box_width < prodGrid_box_width){
				min_kol_photo = min_kol_photo + 1;
			}

			var max_kol_photo = parseInt(prodGrid_box_width / min_width);

			
            
			var unit = $('#unit_hidden').val();
			var material = $('#material_hidden').val();
			var sort = $('#sort_hidden').val();
			var kurs = $('#kurs').val();
			var model_search = $('#model_search').val();
			var product_name_search = $('#product_name_search').val();
			$("#load").show();
			var title_flag = false;
			var index_flag = false;
			var category_num = 0;
			if(material_kol==1){
				title_flag = true;
				category_num = 1;
			}else if(material_kol==0  && window.location.search.replace( '?', '')==''){
				index_flag = true;
			}

            var URL = location.href;


			$('#category_num').val(category_num);

					$.ajax({
						type: "POST",
						url: "https://content.nebo.by/template/catalog/catalog-sort-ajax.php",
						data: {                                                        type:'0',GLOBAL_SECTION_ID:'6',
							GLOBAL_SUBSECTION_ID:'20',
							GLOBAL_CATEGORY_ID:'',
							GLOBAL_SUBCATEGORY_ID:'',  CATALOG_REGION:'', unit: unit, material: material,URL:URL,  session_token:'ff6a7d2623c18f6ff9b9d3e2c73cf764', view_mode:view_mode},
						cache: false,
						success: function(data)
						{

						  
							data_obj = JSON.parse(data);

							// ЕСЛИ ТЕКСТ В БД ЕСТЬ
							if(data_obj.founded == 1)
                            {
                                $('title').html(data_obj.title);
                                $('#title_h1').html(data_obj.title_h1);
                                $('#text_specification').html(data_obj.text);
                                $('#text_pre').html(data_obj.text_pre);
                            }
                            else
                            {
                                $('title').html('Ремонт квартир в Минске - фото и примеры работ');
                                $('#title_h1').html('Фото ремонтов квартир');
                                $('#text_specification').html('');
                                $('#text_pre').html('');
                            }

							if(($(".main .fsFilter-box").hasClass("opened") || $(".main .fsFilter-box").hasClass("start")) && open_page){
								allow_open = false;
								scrollToFilterRow();
							}
							setTimeout(function(){
                                if (sessionStorage.getItem("nsDataTab") === null)
                                {
                                    $('.catalogTabs-wrapper').html(data_obj.sort_tabs);
                                }
								$('#sort_head').html(data_obj.sort_head);
								$('#sort_foot').html(data_obj.sort_foot);
								allow_open = true;
							},300);
							open_page = true;
						}
					});

				if(window.location.search.match(new RegExp('text_search' + '=([^&=]+)'))==null){
					$('#search_num1').val('');
					text_search = 0;
				}

            $.ajax({
                type: "POST",
                url: "https://content.nebo.by/template/catalog/catalog-sort-ajax.php",
                data: { type:'2',GLOBAL_SECTION_ID:'6',
                    GLOBAL_SUBSECTION_ID:'20',
                    GLOBAL_CATEGORY_ID:'',
                    GLOBAL_SUBCATEGORY_ID:'',  CATALOG_REGION:'',
                                                            unit: unit, price_sort:sort, kurs:kurs, material: material, category_num:category_num,
                    model_search: model_search, product_name_search:product_name_search, text_search:text_search},
                cache: false,
                dataType: "json",
                success: function(data)
                {

                    if(JSON.stringify(data) != "null")
                    {
                    sessionStorage.setItem('nsData', JSON.stringify(data));

                    var general_kol = JSON.parse(sessionStorage.getItem('nsData')).length;
                    var global_ids = [];
                    var nsObj = JSON.parse(sessionStorage.getItem('nsData'));

					refresh_sortmenu(material);

                        if(view_mode == 'detail')
                        {
                            if(detail_kol > general_kol)
                            {
                                for (var i = 0; i < general_kol; i++) {
                                    global_ids.push(nsObj[i].global_id);
                                }
                            }
                            else
                            {
                                for (var i = 0; i < detail_kol; i++) {
                                    global_ids.push(nsObj[i].global_id);
                                }
                            }
                        }
                        else
                        {
                            if(max_kol_photo > general_kol)
                            {
                                for (var i = 0; i < general_kol; i++) {
                                    global_ids.push(nsObj[i].global_id);
                                }
                            }
                            else
                            {
                                for (var i = 0; i < max_kol_photo; i++) {
                                    global_ids.push(nsObj[i].global_id);
                                }
                            }
                        }

                        /**  режим отображения если мало фото */
                        if(view_mode == 'wide' || view_mode == null || view_mode == '') {
                            if (general_kol < (min_kol_photo * 2)+3) {
                                $('.lazy_gallery').addClass('vertical');
                                $('.lazy_gallery').removeClass('wide');
                                view_mode = 'vertical';
                                global_view_mode = 'vertical';
                            }
                            else {
                                $('.lazy_gallery').addClass('wide');
                                $('.lazy_gallery').removeClass('vertical');
                            }

                        prodGrid_box_width = $('.catalog_origin.prodGrid_box').width();
                        min_kol_photo = parseInt(prodGrid_box_width / max_width);
                        photo_box_width = min_kol_photo * max_width + (min_kol_photo - 1) * otstup;
                        if(photo_box_width < prodGrid_box_width){
                            min_kol_photo = min_kol_photo + 1;
                        }
                        max_kol_photo = parseInt(prodGrid_box_width / min_width);
                        }
                        /**  конец */

                    $.ajax({
                        type: "POST",
                        url: "https://content.nebo.by/template/catalog/catalog-sort-ajax.php",
                        data: {type:'1',GLOBAL_SECTION_ID:'6',
                            GLOBAL_SUBSECTION_ID:'20',
                            GLOBAL_CATEGORY_ID:'',
                            GLOBAL_SUBCATEGORY_ID:'',  CATALOG_REGION:'',
                                                                                    unit: unit, price_sort:sort, kurs:kurs, material: material, category_num:category_num,
                            model_search: model_search, product_name_search:product_name_search, min_kol_photo:min_kol_photo, max_kol_photo:max_kol_photo, prodGrid_box_width:prodGrid_box_width,
                            randomsize_mode:randomsize_mode, URL:URL,  session_token:'ff6a7d2623c18f6ff9b9d3e2c73cf764', max_width:max_width, min_width:min_width, otstup:otstup, text_search:text_search, global_ids:global_ids,view_mode:view_mode},
                        cache: false,
                        success: function(data)
                        {
                            // alert(JSON.stringify(data));
                            //$('.load_sort').hide();
                            if(data!=""){
                                //$(".lazy_gallery.catalog_origin").html('');
                                $(".lazy_gallery.catalog_origin").html(data);
                                $(".lazy_gallery.catalog_origin").show();
                                $('.prodGrid_cell').animate({opacity:'1'},500);
                                $("#load").hide();
                                load = true;
                                block = 1;
                            }
                            else{
                                load = false;
                                $(".lazy_gallery.catalog_origin").html('<div class="prodGrid_notfound"><h1>Ничего не найдено</h1><div>Попробуйте упростить условия поиска удалив некоторые фильтры</div></div>');
                                $(".lazy_gallery.catalog_origin").show();
                                $("#load").hide();
                            }

                        }
                    });
                    }
                    else
                    {
                        load = false;
                        $(".lazy_gallery.catalog_origin").html('<div class="prodGrid_notfound"><h1>Ничего не найдено</h1><div>Попробуйте упростить условия поиска удалив некоторые фильтры</div></div>');
                        $(".lazy_gallery.catalog_origin").show();
                        $("#load").hide();
                    }
                }
            });




            //$('.randomsize').css('display','block');
		}
		
	function select_sort(val){
		//var sort_str = '0';
		/*
		if(val=='up'){
			sort_str = ' CASE WHEN lt.price = \'0.00\' THEN 1 ELSE 0 END ASC, lt.price ASC, ';
		}else if(val=='down'){
			sort_str = ' CASE WHEN lt.price = \'0.00\' THEN 1 ELSE 0 END ASC, lt.price DESC, ';
		}else if(val=='new'){
			sort_str = 'gt.id DESC, ';
		}*/

        var material_str = '';
        $('.main .fsFilter-property-options').each(function(){
            $(this).find(':checked').each(function(){
                if(this.checked && this.hasAttribute('link')){
                    if(first){
                        material_str = this.getAttribute('link');
                        first = false;
                        material_kol++
                    }else{
                        material_str += '_'+this.getAttribute('link');
                        material_kol++;
                    }
                }
            });
        });

		$('#sort_hidden').val(val);
        //$(".lazy_gallery.catalog_origin").html('');

        var clear_href = location.href;

        $('#price_sort option').each(function(indx){
            var clear_val =  $(this).val();
            clear_href =  clear_href.replace(new RegExp(clear_val+"/",'g'),"");

          });

        if(material_str == '' && location.href == 'https://nebo.by/mebel-na-zakaz/')
        {
            clear_href = clear_href.replace(new RegExp("all/", 'g'), "");
        }

        window.history.pushState(null, null , clear_href);

        if((location.href[location.href.length-1]) != "/")
        {
            window.history.pushState(null, null , location.href+'/'+val+'/');
        }
        else
        {
            if(material_str == '' && location.href == 'https://nebo.by/mebel-na-zakaz/')
            {
                window.history.pushState(null, null , location.href+'all/'+val+'/');
            }
            else
            {
                window.history.pushState(null, null , location.href+val+'/');
            }


        }
		load_ajax_sort();
	}
		
	function click_link(el){
		var ckb = $('#'+el.parentElement.getAttribute('for'));		
		if(ckb.is(':checked')){
			ckb.prop("checked","");
		}else{
			ckb.prop("checked","checked");
		}
		ckb.trigger('onchange');
	}
	
	function refresh_sortmenu(material){
		var editor_view = 2;
				var title_text = 'Попробуйте упросить условия поиска';
		$('.main .fsFilter-property-options').each(function(){
			var prop_id_arr = [];
			var all_prop_id = [];
			var elem_prop = $(this);
			var filter_id = $(this).attr('filter_id');
			$(this).find('li').each(function(){
				if($(this).attr('li_all')!='' && $(this).css('display')!='none'){
					prop_id_arr.push($(this).find('a').attr('properties_id'));
				}
			});
			$.ajax({
				type: "POST",
				url: "https://content.nebo.by/template/catalog/catalog-sort-ajax.php",
				data: {type:'3',sub_type: 'ckb',CATALOG_ID:'58', GLOBAL_SECTION_ID:'6',  CATALOG_REGION:'', editor_view:editor_view,material:material,prop_id_arr:prop_id_arr,filter_id:filter_id},
				cach: false,
				success: function(data){
					if(data!="null"){
						var data_obj = JSON.parse(data);
						var prop_kol = data_obj.length;
						for(var i = 0; i < prop_kol; i++){
							all_prop_id.push(data_obj[i].id);
						}
					}
					elem_prop.find('li').each(function(){
						var elem_li = $(this)[0];
						if(elem_li.getAttribute('li_all')==null){
							var li_prop_id = $(elem_li).find('a')[0].getAttribute('properties_id');
							var span_elem = $(elem_li).find('span');
							span_elem.removeClass('SortWithoutResult');
							$(elem_li).find('a').attr('title','');
							$(elem_li).find('i').attr('title','');
							if($.inArray(li_prop_id, all_prop_id)<0){
								span_elem.addClass('SortWithoutResult');
								elem_li.parentElement.append(elem_li);
								$(elem_li).find('a').attr('title',title_text);
								$(elem_li).find('i').attr('title',title_text);
							}
							
							
							if($(elem_li).find('select').length>0){
								var elem_li_select = $(elem_li).find('select');
								var prop_id_arr_option = [];
								$(elem_li_select).find('option').each(function(){
									prop_id_arr_option.push($(this).attr('properties_id'));
								});
								$.ajax({
									type: "POST",
									url: "https://content.nebo.by/template/catalog/catalog-sort-ajax.php",
									data:   {type:'3', sub_type: 'select', editor_view:editor_view, 											 LOCAL_TABLE:'local_remont_gallery', CATALOG_ID:'58', GLOBAL_SECTION_ID:'6',  CATALOG_REGION:'', material:material,filter_id:filter_id,li_prop_id:li_prop_id,prop_id_arr_option:prop_id_arr_option,filter_id:filter_id},
									cach: false,
									success: function(data_select){
										var all_prop_id_select = [];
										if(data_select!="null"){
											var data_select_obj = JSON.parse(data_select);
											var prop_kol_select = data_select_obj.length;
											for(var i = 0; i < prop_kol_select; i++){
												all_prop_id_select.push(data_select_obj[i].id);
											}
										}
										$(elem_li_select).find('option').removeClass('SortWithoutResult');
										$(elem_li_select).find('option').attr('title','');
										$(elem_li_select).find('option').each(function(){
											if($(this)[0].getAttribute('main_prop')==null && !$(this).is(':selected') ){
												var option_properties_id = $(this).attr('properties_id');
												if($.inArray(option_properties_id, all_prop_id_select)<0){
													$(this)[0].parentElement.append($(this)[0]);
													$(this).addClass('SortWithoutResult');												
													$(this).attr('title',title_text);											
												}
											}
										});
									}
								});
					
							}
					
								
						}
					});
				}
			});
		});
	}
    </script>

<div class="load_sort">
 <img id="load_pic"  src="https://content.nebo.by/template/img/gif/loading_gif.gif" /> 
</div>
<div class="width100 endFloat fs-container main">


	<!-- КАТЕГОРИИ-->

	<div class="fsCategory-wrapper endFloat" >
		<div class="fsCategory-container endFloat">
	
			
			
		</div>
	</div>	
	<!-- ФИЛЬТРЫ-->

    	<div class="fsFilter-wrapper endFloat" >
		<div class="fsFilter-container endFloat">
		
		<div class="fsFilter-row-wrapper">
		<div class="fsFilter-row">
								<div class="fsFilter-box start opened">
				<div class="fsFilter-property-link used">Комната</div>
				<div class="fsFilter-property-options block_komnata" filter_id="130">
					<ul>
						<li li_all>
							<label for="komnata1"><i class="checkbox" ><input type="checkbox"  id="komnata1" onchange="select_option(true,'komnata','komnata1');"><label></label></i>
								<a href="https://remont.nebo.by/gallery/" onclick="click_link(this);event.preventDefault();"><span>Все</span></a></label>
						</li>
						
						<li ><label for="komnata2"><i class="checkbox"><input type="checkbox"   id="komnata2" link="vannaya" text="Ванная" onchange="select_option(false,'komnata','komnata2');"><label></label></i>
								<a  href="https://remont.nebo.by/gallery/vannaya.php" properties_id="1043" onclick="select_option(true,'komnata','komnata2');event.preventDefault();">
								<span>Ванная</span></a><input type="hidden" id="hidden_komnata2" link="vannaya" text="Ванная"></label></li><li ><label for="komnata3"><i class="checkbox"><input type="checkbox"   id="komnata3" link="gostinaya" text="Гостиная" onchange="select_option(false,'komnata','komnata3');"><label></label></i>
								<a  href="https://remont.nebo.by/gallery/gostinaya.php" properties_id="1041" onclick="select_option(true,'komnata','komnata3');event.preventDefault();">
								<span>Гостиная</span></a><input type="hidden" id="hidden_komnata3" link="gostinaya" text="Гостиная"></label></li><li ><label for="komnata4"><i class="checkbox"><input type="checkbox"   id="komnata4" link="kuhnya" text="Кухня" onchange="select_option(false,'komnata','komnata4');"><label></label></i>
								<a  href="https://remont.nebo.by/gallery/kuhnya.php" properties_id="1062" onclick="select_option(true,'komnata','komnata4');event.preventDefault();">
								<span>Кухня</span></a><input type="hidden" id="hidden_komnata4" link="kuhnya" text="Кухня"></label></li><li ><label for="komnata5"><i class="checkbox"><input type="checkbox"   id="komnata5" link="spalnya" text="Спальня" onchange="select_option(false,'komnata','komnata5');"><label></label></i>
								<a  href="https://remont.nebo.by/gallery/spalnya.php" properties_id="1039" onclick="select_option(true,'komnata','komnata5');event.preventDefault();">
								<span>Спальня</span></a><input type="hidden" id="hidden_komnata5" link="spalnya" text="Спальня"></label></li><li ><label for="komnata6"><i class="checkbox"><input type="checkbox"   id="komnata6" link="tualet" text="Туалет" onchange="select_option(false,'komnata','komnata6');"><label></label></i>
								<a  href="https://remont.nebo.by/gallery/tualet.php" properties_id="1063" onclick="select_option(true,'komnata','komnata6');event.preventDefault();">
								<span>Туалет</span></a><input type="hidden" id="hidden_komnata6" link="tualet" text="Туалет"></label></li><li ><label for="komnata7"><i class="checkbox"><input type="checkbox"   id="komnata7" link="prihozhaya" text="Прихожая" onchange="select_option(false,'komnata','komnata7');"><label></label></i>
								<a  href="https://remont.nebo.by/gallery/prihozhaya.php" properties_id="1038" onclick="select_option(true,'komnata','komnata7');event.preventDefault();">
								<span>Прихожая</span></a><input type="hidden" id="hidden_komnata7" link="prihozhaya" text="Прихожая"></label></li><li ><label for="komnata8"><i class="checkbox"><input type="checkbox"   id="komnata8" link="koridor" text="Коридор" onchange="select_option(false,'komnata','komnata8');"><label></label></i>
								<a  href="https://remont.nebo.by/gallery/koridor.php" properties_id="1066" onclick="select_option(true,'komnata','komnata8');event.preventDefault();">
								<span>Коридор</span></a><input type="hidden" id="hidden_komnata8" link="koridor" text="Коридор"></label></li><li ><label for="komnata9"><i class="checkbox"><input type="checkbox"   id="komnata9" link="lodjiya" text="Лоджия" onchange="select_option(false,'komnata','komnata9');"><label></label></i>
								<a  href="https://remont.nebo.by/gallery/lodjiya.php" properties_id="1065" onclick="select_option(true,'komnata','komnata9');event.preventDefault();">
								<span>Лоджия</span></a><input type="hidden" id="hidden_komnata9" link="lodjiya" text="Лоджия"></label></li><li ><label for="komnata10"><i class="checkbox"><input type="checkbox"   id="komnata10" link="detskaya" text="Детская" onchange="select_option(false,'komnata','komnata10');"><label></label></i>
								<a  href="https://remont.nebo.by/gallery/detskaya.php" properties_id="1042" onclick="select_option(true,'komnata','komnata10');event.preventDefault();">
								<span>Детская</span></a><input type="hidden" id="hidden_komnata10" link="detskaya" text="Детская"></label></li><li ><label for="komnata11"><i class="checkbox"><input type="checkbox" checked  id="komnata11" link="balkon" text="Балкон" onchange="select_option(false,'komnata','komnata11');"><label></label></i>
								<a  href="https://remont.nebo.by/gallery/balkon.php" properties_id="1064" onclick="select_option(true,'komnata','komnata11');event.preventDefault();">
								<span>Балкон</span></a><input type="hidden" id="hidden_komnata11" link="balkon" text="Балкон"></label></li><li ><label for="komnata12"><i class="checkbox"><input type="checkbox"   id="komnata12" link="mansarda" text="Мансарда" onchange="select_option(false,'komnata','komnata12');"><label></label></i>
								<a  href="https://remont.nebo.by/gallery/mansarda.php" properties_id="1040" onclick="select_option(true,'komnata','komnata12');event.preventDefault();">
								<span>Мансарда</span></a><input type="hidden" id="hidden_komnata12" link="mansarda" text="Мансарда"></label></li><li ><label for="komnata13"><i class="checkbox"><input type="checkbox"   id="komnata13" link="narujnaya-otdelka" text="Наружная отделка" onchange="select_option(false,'komnata','komnata13');"><label></label></i>
								<a  href="https://remont.nebo.by/gallery/narujnaya-otdelka.php" properties_id="1067" onclick="select_option(true,'komnata','komnata13');event.preventDefault();">
								<span>Наружная отделка</span></a><input type="hidden" id="hidden_komnata13" link="narujnaya-otdelka" text="Наружная отделка"></label></li><li ><label for="komnata14"><i class="checkbox"><input type="checkbox"   id="komnata14" link="garderobnaya" text="Гардеробная" onchange="select_option(false,'komnata','komnata14');"><label></label></i>
								<a  href="https://remont.nebo.by/gallery/garderobnaya.php" properties_id="1414" onclick="select_option(true,'komnata','komnata14');event.preventDefault();">
								<span>Гардеробная</span></a><input type="hidden" id="hidden_komnata14" link="garderobnaya" text="Гардеробная"></label></li>					</ul>
				</div>
			</div>
			                        <!-- 2ой ряд -->
					<div class="fsFilter-box ">
				<div class="fsFilter-property-link ">Стиль</div>
				<div class="fsFilter-property-options block_style_global" filter_id="36">
					<ul>
						<li li_all>
							<label for="style_global1"><i class="checkbox" ><input type="checkbox" checked id="style_global1" onchange="select_option(true,'style_global','style_global1');"><label></label></i>
								<a href="https://remont.nebo.by/gallery/" onclick="click_link(this);event.preventDefault();"><span>Все</span></a></label>
						</li>
						
						<li ><label for="style_global2"><i class="checkbox"><input type="checkbox"   id="style_global2" link="modern" text="Современный" onchange="select_option(false,'style_global','style_global2');"><label></label></i>
								<a  href="https://remont.nebo.by/gallery/modern.php" properties_id="281" onclick="select_option(true,'style_global','style_global2');event.preventDefault();">
								<span>Современный</span></a><input type="hidden" id="hidden_style_global2" link="modern" text="Современный"></label></li><li ><label for="style_global3"><i class="checkbox"><input type="checkbox"   id="style_global3" link="classic" text="Классический" onchange="select_option(false,'style_global','style_global3');"><label></label></i>
								<a  href="https://remont.nebo.by/gallery/classic.php" properties_id="280" onclick="select_option(true,'style_global','style_global3');event.preventDefault();">
								<span>Классический</span></a><input type="hidden" id="hidden_style_global3" link="classic" text="Классический"></label></li>					</ul>
				</div>
			</div>
			                        <!-- 2ой ряд -->
					<div class="fsFilter-box ">
				<div class="fsFilter-property-link ">Класс</div>
				<div class="fsFilter-property-options block_class_global" filter_id="37">
					<ul>
						<li li_all>
							<label for="class_global1"><i class="checkbox" ><input type="checkbox" checked id="class_global1" onchange="select_option(true,'class_global','class_global1');"><label></label></i>
								<a href="https://remont.nebo.by/gallery/" onclick="click_link(this);event.preventDefault();"><span>Все</span></a></label>
						</li>
						
						<li ><label for="class_global2"><i class="checkbox"><input type="checkbox"   id="class_global2" link="standard" text="Стандарт" onchange="select_option(false,'class_global','class_global2');"><label></label></i>
								<a  href="https://remont.nebo.by/gallery/standard.php" properties_id="282" onclick="select_option(true,'class_global','class_global2');event.preventDefault();">
								<span>Стандарт</span></a><input type="hidden" id="hidden_class_global2" link="standard" text="Стандарт"></label></li><li ><label for="class_global3"><i class="checkbox"><input type="checkbox"   id="class_global3" link="premium" text="Премиум" onchange="select_option(false,'class_global','class_global3');"><label></label></i>
								<a  href="https://remont.nebo.by/gallery/premium.php" properties_id="283" onclick="select_option(true,'class_global','class_global3');event.preventDefault();">
								<span>Премиум</span></a><input type="hidden" id="hidden_class_global3" link="premium" text="Премиум"></label></li>					</ul>
				</div>
			</div>
			                        <!-- 2ой ряд -->
            <!-- 2ой ряд -->
						
		</div>
		</div>

		</div>
	</div>
    	<!-- СОРТИРОВКИ-->
<script>
if(/Chrome/.test(navigator.userAgent) && /Google Inc/.test(navigator.vendor)){
	fix_chrome_sortmenu();
}
</script>

	<div class="fsSort-wrapper endFloat" >
		<div class="fsSort-container endFloat">
            			<div class="fsSort-box">

                				<div class="fsSort-sorting">
				<form action="" method=post>
					<span>&darr;&uarr;</span>
					<select name="price_sort" id="price_sort" onchange="select_sort(this.value);" aria-label="Выбор сортировки">
                                                    <option  value="popular">Популярные</option>
                                                                        <option  value="new">Новые</option>
                                                                        					</select>
					   
				</form>
				</div>
                				
				<div class="fsSort-search">

                    <script>
$(document).ready(function() {
      $('#form_search').keydown(function(event){
        if(event.keyCode == 13) {
          event.preventDefault();
          return false;
      }
   });
});
 var searchButton = false;

	function submit_form_search()
	{
		var text_num = $('#search_num1').val();
				if($('#search_class').val()==1)
				{
					var search_cat = $('#search_cat').val();
					window.self.location.href = "https://remont.nebo.by/gallery/"+search_cat+".php";
				}
				else if($('#search_class').val()==2)
				{
					var search_cat = $('#search_cat').val();
					window.self.location.href = "https://remont.nebo.by/gallery/index.php?models="+search_cat;
				}
				else if($('#search_class').val()==3)
				{
					var search_cat = $('#search_cat').val();					
					window.self.location.href = "https://remont.nebo.by/gallery/index.php?product_name_search="+search_cat;
				}
				else if($('#search_class').val()==4)
				{
					var search_cat = $('#search_cat').val().toLowerCase();					
					window.self.location.href = "https://remont.nebo.by/gallery/index.php?text_search="+search_cat;
				}
				else if((!text_num.search(/[0-9]/) && text_num!="") || ($('#search_class').val()==5 || $('#search_class').val()==6))
				{
					if($('#search_class').val()==5 || $('#search_class').val()==6)
					{
						text_num = $('#search_cat').val();
					}
					var url = "https://remont.nebo.by/gallery/index.php?search_num="+text_num;
					window.self.location.href = url;
					event.preventDefault();
				}
				else{
					$("#not_found").slideDown();
					setTimeout(function(){$("#not_found").slideUp();},3000);
				}
	}
	
	function searching_variant(text){
		
		$.ajax({
			type: "POST",
			url: "https://content.nebo.by/template/catalog/search-ajax.php",
			data: {  text: text, LOCAL_TABLE: 'local_remont_gallery', SEARCH_BY_NAME:'' , CATALOG_ID:'58'},
			cache: false,
			success: function(data)
			{
				$('.fsSort-search-advice-container').html(data);
				suggest_count = $('.search').length;
				suggest_selected = 1;
				var select_text = $('.fsSort-search-advice-container').find('.active').html();
				$('#search_num').val(select_text);
				var elem = $('.fsSort-search-advice-container').find('.active');
				if(elem.hasClass("prop")){
					$("#search_class").val(1);
					$("#search_cat").val(elem.attr("name"));
				}else if(elem.hasClass("model")){
					$("#search_class").val(2);
					$("#search_cat").val(elem.attr("name"));
				}else if(elem.hasClass("product_name")){
					$("#search_class").val(3);
					$("#search_cat").val(elem.attr("name"));
				}else if(elem.hasClass("search_text")){
					$("#search_class").val(4);
					$("#search_cat").val(elem.attr("name"));
				}else if(elem.hasClass("mpn")){
					$("#search_class").val(5);
					$("#search_cat").val(elem.attr("name"));
				}else if(elem.hasClass("art")){
					$("#search_class").val(6);
					$("#search_cat").val(elem.attr("name"));
				}
			}
		});
		$('.fsSort-search-advice-container').show();
	}
	
    function searching(I){
		$('#not_found').hide();
        switch(I.keyCode) {
            case 13:  // enter
				$('.fsSort-search-advice-container').fadeOut(350).html('');
				submit_form_search();				
			break;
            case 27:  // escape
				$('.fsSort-search-advice-container').hide();
                return false;
            break;
			case 38: 
            case 40:
                I.preventDefault();
                if(suggest_count){
                    key_activate( I.keyCode-39 );
                }
            break;
			
            default:
				setTimeout(function(){
					var text = $.trim($('#search_num1').val().toLowerCase());
					$("#search_class").val(0);
					$("#search_cat").val("");
					$('#search_num').val(text);
					if(text!=""){
						searching_variant(text);
					}
					else
					{
						$('.fsSort-search-advice-container').hide();
						$('.fsSort-search-advice-container').html("");
					}
				},100);
            break;
        }
    };
	
	function variant_click(element)
	{
		var text = element.innerText;
		$('#search_num').val(text);
		$('#search_num1').val(text);
		if(element.classList.contains("prop")){
			$("#search_class").val(1);
			$("#search_cat").val(element.getAttribute("name"));
		}else if(element.classList.contains("model")){
			$("#search_class").val(2);
			$("#search_cat").val(element.getAttribute("name"));
		}else if(element.classList.contains("product_name")){
			$("#search_class").val(3);
			$("#search_cat").val(element.getAttribute("name"));
		}else if(element.classList.contains("mpn")){
			$("#search_class").val(5);
			$("#search_cat").val(element.getAttribute("name"));
		}else if(element.classList.contains("art")){
			$("#search_class").val(6);
			$("#search_cat").val(element.getAttribute("name"));
		}
		
		$('.fsSort-search-advice-container').fadeOut(350).html('');
		submit_form_search();
	}
    $('html').click(function(){
        $('.fsSort-search-advice-container').hide();
    });
    $('#search_num1').click(function(event){
        if(suggest_count)
            $('.fsSort-search-advice-container').show();
        event.stopPropagation();
    });
	
	function key_activate(n){
		$('.fsSort-search-advice-container div').eq(suggest_selected-1).removeClass('active');
	 
		if(n == 1 && suggest_selected < suggest_count){
			suggest_selected++;
		}else if(n == -1 && suggest_selected > 0){
			suggest_selected--;
		}
	 
		if( suggest_selected > 0){
			$('.fsSort-search-advice-container div').eq(suggest_selected-1).addClass('active');
			$("#search_num").val( $('.fsSort-search-advice-container div').eq(suggest_selected-1).text() );
			$("#search_num1").val( $('.fsSort-search-advice-container div').eq(suggest_selected-1).text() );
			if($('.fsSort-search-advice-container div').eq(suggest_selected-1).hasClass("prop")){
				$("#search_class").val(1);
				$("#search_cat").val($('.fsSort-search-advice-container div').eq(suggest_selected-1).attr('name'));
			}else if($('.fsSort-search-advice-container div').eq(suggest_selected-1).hasClass("model")){
				$("#search_class").val(2);
				$("#search_cat").val($('.fsSort-search-advice-container div').eq(suggest_selected-1).attr('name'));
			}else if($('.fsSort-search-advice-container div').eq(suggest_selected-1).hasClass("product_name")){
				$("#search_class").val(3);
				$("#search_cat").val($('.fsSort-search-advice-container div').eq(suggest_selected-1).attr('name'));
			}else if($('.fsSort-search-advice-container div').eq(suggest_selected-1).hasClass("mpn")){
				$("#search_class").val(5);
				$("#search_cat").val($('.fsSort-search-advice-container div').eq(suggest_selected-1).attr('name'));
			}else if($('.fsSort-search-advice-container div').eq(suggest_selected-1).hasClass("art")){
				$("#search_class").val(6);
				$("#search_cat").val($('.fsSort-search-advice-container div').eq(suggest_selected-1).attr('name'));
			}
		}
	}
</script>  

<div  class="fsSort-search-toggle" onclick="click_fsSort_search_toggle();">
	<i class="search-svg"></i>
	<i class="close-svg"></i>
</div>

<div  class="fsSort-search-box">

	<input class="fsSort-search-textfield" name="search_num1" id="search_num1" autocomplete="off" placeholder="поиск..."  onkeyup="if(event.keyCode==13){submit_form_search();}else{searching(event);}" value="" type="search" aria-label="Поиск по каталогу"/>
	
	<form method="post" enctype="multipart/form-data" name="form_search" id="form_search" role="search">
	<input type="hidden" name="search" id="search" value="ok" />
	<input type="hidden" name="search_num" id="search_num" value="" />
	<input type="hidden" name="search_class" id="search_class" value="" />
	<input type="hidden" name="search_cat" id="search_cat" value="" />
	<input type="button" name="btn_search" style="display: none;"/>
	<input class="fsSort-search-btn" type="button"   onclick="searchButton=true; submit_form_search()" aria-label="Поиск"/>
	<div id="not_found" style="display:none;">Ничего не найдено</div>
	</form>

	<div class="fsSort-search-advice-wrapper">
		<div class="fsSort-search-advice-container">

		</div>
	</div> 
    
</div>

				</div>
		
			</div>
		</div>
	</div>
</div>



<input type="hidden" id="unit_hidden" value="balkon">
<input type="hidden" id="material_hidden" value="balkon">
    <input type="hidden" id="sort_hidden" value="popular">

<input type="hidden" name="kurs" id="kurs"  value="2.2000"/>
<input type="hidden" id="category_num"  value="0"/>
<input type="hidden" id="model_search"  value="0"/>
<input type="hidden" id="product_name_search"  value="0"/>

<script type="text/javascript">
//num=1;
var isMobile = {
    Android: function() {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function() {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function() {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }
};
		var inProgress = false;
		var load = true;
		var block = 1;


setInterval(function() {
    var offset = window.offsetY || window.scrollY || $(window).scrollTop() || 0;
    if(!isMobile.any()){
        if(offset != 0 || (screen.height > $(".prodGrid_wrapper.catalog_origin").offset().top && screen.height > $(".prodGrid_wrapper.catalog_origin").height()+$(".prodGrid_wrapper.catalog_origin").offset().top) )
        {
            if(offset >= $(".prodGrid_wrapper.catalog_origin").height()+$(".fs-container").height() - screen.height*3 && !inProgress && load){
                load_photos();
            }else{
                $('#load').hide();
            }

            if(offset < $(".prodGrid_wrapper.catalog_origin").height()+$(".fs-container").height() - screen.height*3 && !inProgress)
            {
                blocks_is_loaded = true;
            }
            else
            {
                blocks_is_loaded = false;
            }
            if(inProgress == false && load == true)
            {
                blocks_is_loaded = true;
            }
        }
    }
    else{

        if(offset != 0 || (screen.height > $(".prodGrid_wrapper.catalog_origin").offset().top && screen.height > $(".prodGrid_wrapper.catalog_origin").height()+$(".prodGrid_wrapper.catalog_origin").offset().top) )
        {
            if (offset + screen.height * 3 >= $(".prodGrid_wrapper.catalog_origin").height() + $(".fs-container").height() - screen.height * 4 && !inProgress && load) {
                load_photos();
            } else {
                $('#load').hide();

            }

            if (offset + screen.height * 3 < $(".prodGrid_wrapper.catalog_origin").height() + $(".fs-container").height() - screen.height * 4 && !inProgress) {
                blocks_is_loaded = true;
            }
            else {
                blocks_is_loaded = false;
            }
            if (inProgress == false && load == true) {
                blocks_is_loaded = true;
            }
        }
    }
}, 100);


function photo_like(global_id,elem){
	var flag_like = true;
	var like_cookie = getCookie('like_cookie');
	var massLike = new Array();
	if(like_cookie!=''){
		massLike = like_cookie.split(',');
	}
	var kol_like = massLike.length;
	for(var i=0; i<kol_like; i++){
		if(global_id==massLike[i]){
			flag_like = false;
			break;
		}
	}
	if(flag_like){
		var kol = 1;
		if(elem!=false){
			if($('.prodGrid_cell').index(elem)==0){
				kol = 0.03;
			}else if($('.prodGrid_cell').index(elem)>0 && $('.prodGrid_cell').index(elem)<20){
				kol = 0.15;
			}else if($('.prodGrid_cell').index(elem)>19 && $('.prodGrid_cell').index(elem)<50){
				kol = 0.5;
			}
		}
		massLike[kol_like] = global_id;
		document.cookie = "like_cookie="+massLike;
		$.post("https://content.nebo.by/template/catalog/like.php", { GLOBAL_SECTION_ID:'6',
			GLOBAL_SUBSECTION_ID:'20',
			GLOBAL_CATEGORY_ID:'',
			GLOBAL_SUBCATEGORY_ID:'', global_id: global_id, kol: kol});
	}
};

function getCookie(name) {
  var matches = document.cookie.match(new RegExp(
    "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
  ));
  return matches ? decodeURIComponent(matches[1]) : '';
};

</script>


<div class="tags_container main">
	<div class="tags_box">
		
	</div>
</div>

<script>
$(function(){
	$('body').on('mouseover','.main .tags_item_del',function() {
			$('.main .tags_item').addClass('tags_item_del_all');
		})
		.on('mouseout','.main .tags_item_del',function() {
			$('.main .tags_item').removeClass('tags_item_del_all');
		});
});
$.urlParam = function(name){
	var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
	 if (results==null){
	   return null;
	}
	else{
	   return results[1] || 0;
	}
}
function get_tags(){
	$('.main .tags_box').html('');
	var select_tags_flag = false;

	$('.main .fsFilter-property-options').each(function(){
		$(this).find(':checked').each(function(){
			if(this.checked && this.hasAttribute('text')){
				select_tags_flag = true;
				var text = $(this).attr('text');
				var elem_id = $(this).attr('id');
				var text_input = $('#hidden_'+elem_id).attr('text');
				var pod_prop = 'pod_prop="'+elem_id+'"';
				if(text!=text_input){
				}
				$('.main .tags_box').append('<div class="tags_item" '+pod_prop+' onclick="del_tag('+elem_id+', this);"><span class="tags_text">'+text+'</span></div>');
			}
		});
	});
	if(select_tags_flag){
		$('.main .tags_box').append('<div class="tags_item_del" onclick="del_tag(false);"><span class="tags_text">сбросить все</span></div>');
	}
	
	if($.urlParam('models')!=null || $.urlParam('product_name_search')!=null || $.urlParam('text_search')!=null || $.urlParam('search_num')!=null){
		var text = '';
		if($.urlParam('text_search')!=null){
			text = decodeURIComponent(decodeURIComponent($.urlParam('text_search')));
			print_search_tag(text);
		}else if($.urlParam('search_num')!=null){
			text = $.urlParam('search_num');
			print_search_tag(text);
		}else{
			var type_search = 0;
			var search_num = 0;
			if($.urlParam('models')!=null){
				type_search = 1;
				search_num = $.urlParam('models');
			}
			if($.urlParam('product_name_search')!=null){
				type_search = 2;
				search_num = $.urlParam('product_name_search');
			}
			if(type_search>0){
				$.ajax({
					type: "POST",
					url: "https://content.nebo.by/template/catalog/catalog-sort-ajax.php",
					data: {type:'4',LOCAL_TABLE:'local_remont_gallery',type_search:type_search,search_num:search_num, SEARCH_BY_NAME:''},
					cache: false,
					success: function(data){
						print_search_tag(data);
					}
				});
			}
		}
	}
	toggle_used_fsFilter();
}
function print_search_tag(text){
	$('.main .tags_box').append('<div class="tags_item" onclick="del_search_tag(this);"><span class="tags_text">'+text+'</span></div>');
	$('.main .tags_box').append('<div class="tags_item_del" onclick="del_tag(false);"><span class="tags_text">сбросить все</span></div>');
}
function del_search_tag(elem){
	$(elem).remove();
	$('.main .tags_item_del').remove();
	$('#model_search').val(0);
	$('#product_name_search').val(0);
	window.history.pushState(null, null , 'https://remont.nebo.by/gallery/');
	load_ajax_sort();
}

function del_tag(elem_id, el){
	$('#model_search').val(0);
	$('#product_name_search').val(0);
	if(elem_id){
		if($(el).attr('pod_prop')!=''){
			del_tag_and_transform(elem_id);
		}
		$(elem_id).prop("checked","");
		$(elem_id).trigger('onchange');
	}
	else{
		$('#unit_hidden').val(0);
		$('.main .tags_item').each(function(){
			var pod_prop = $(this).attr('pod_prop');
			if(pod_prop!=''){
				del_tag_and_transform($('#'+pod_prop));
			}
		});

		$('.main .fsFilter-property-options').each(function(){
			$(this).find(':checkbox').each(function(){
				if(this.hasAttribute('text')){
					this.checked = false;
				}else{
					$(this).prop('checked',true);
				}
			});
			
		});
		toggle_used_fsFilter();
		window.history.pushState(null, null , 'https://remont.nebo.by/gallery/'+get_url_str(true));
		load_ajax_sort();
	}
}
function del_tag_and_transform(elem_id){
	var id_el = $(elem_id).attr('id');
	$(elem_id).attr('link', $('#hidden_'+id_el).attr('link'));
	$(elem_id).attr('text', $('#hidden_'+id_el).attr('text'));
	var parent_elem = $(elem_id).parent().parent();
	parent_elem.find('select').hide();
	parent_elem.find('span').first().parent().show();
	parent_elem.find('select').val(parent_elem.find('select option:first').val());
}

function toggle_used_fsFilter(){
	$('.main .fsFilter-property-options').each(function(){
		var used_prop = false;
		$(this).find(':checked').each(function(){
			if(this.checked && this.hasAttribute('text')){
				used_prop = true;
			}
		});
		if(used_prop){
			$(this).parent().find('.fsFilter-property-link').addClass('used');
		}else{
			$(this).parent().find('.fsFilter-property-link').removeClass('used');
		}
	});
}
</script>
<div class="prodGrid_wrapper catalog_origin id58 randomsize cut endFloat">
	<div class="prodGrid_container  endFloat">
		<div class="prodGrid_box wide lazy_gallery catalog_origin endFloat" catalog_name="catalog_origin">


		</div>
			</div>
</div>


<div class="width1004">
    <div id="resize_load"></div>
  <div id="load" class="lazy_load">
  </div>
</div>

<div class="width1004 m_lr2_padding eF" id="text_specification">
</div>


<div id="sort_foot" class="width100" style="display: none;">
    </div>

</div>


    <script>
        sessionStorage.removeItem('nsDataTab');</script>
    <script>
        $(document).ready(function() {

            $(window).load(function() {
                $('#sort_foot').show();
                load_ajax_sort();
            });
        });

        function resize_rs() {

            if (blocks_is_loaded == true) {

                $('#resize_load').hide();
                $('.spec_wrapper').remove();
                var otstup = 10;
                                var max_width = 300;
                var min_width = 140;

                var max_height = 450;
                var min_height = 70;

                //Вычисляется размер prodGrid_box
                var prodGrid_box_width = $('.prodGrid_box').width();

                var start_kol_photo = 0;
                //Вычисляем минимально возможное кол-во фоток в ряду
                var min_kol_photo = parseInt(prodGrid_box_width / max_width);

                var photo_box_width = min_kol_photo * max_width + (min_kol_photo - 1) * otstup;

                if (photo_box_width < prodGrid_box_width) {
                    min_kol_photo = min_kol_photo + 1;
                }

                $('.prodGrid_box ').each(function () {
                    var class_name = '.'+$(this).attr('catalog_name');
                    randomsize(start_kol_photo, min_kol_photo, false,max_width,class_name);
                });

            }
            if (blocks_is_loaded == false)
            {
                $('#resize_load').show();
                setTimeout(function() {
                    resize_rs();
                },500);

            }
        }

        var doit;
        function resizedw(appwidth){
            var window_changed = $(window).width() != appwidth;
            if ($(window).width() != appwidth){
                resize_rs();
            }
            past_width = $(window).width();
        }

        var past_width = $(window).width();

        $(window).resize(function(){

            if(global_view_mode != 'detail') //не разрешаем ресайз для detailed view
            {
                clearTimeout(doit);
                doit = setTimeout(function() {
                    resizedw(past_width);
                }, 100);
            }

        });

       </script>




	</div>

 <div class="width100 footer eF">
     <div class="width1004 eF">
       
       
           
    <label  class="header_mobile_contacts" onclick="click_header_toggle_mobile();"><span>Позвонить</span><span>Закрыть</span></label>
    
    <div class="contacts_box">
    <div class="contacts_box_phones">
                      
			
				<div class="cbSchedule">
					<i class="schedule-svg"></i>
					<div>
						<span style="color:#333">пн-вс 9:00-21:00</span>
					</div>
				</div>
                
                                
            </div>
   
     
           <div class="contacts_box_phones" style="display: block;">
                      
                <div class="cbPhone"><i class="velcom-logo-svg"></i><div class="cbPhonekod">44</div><div class="cbPhonenumber">791-98-91</div></div>
                <div class="contacts_phones_row_call"><a href="tel:+37544-791-98-91"><span>Вызов</span></a></div>
                
                <div class="cbPhone"><i class="mts-logo-svg"></i><div class="cbPhonekod">29</div><div class="cbPhonenumber">265-64-23<i class="viber-logo"></i></div></div>
                <div class="contacts_phones_row_call"><a href="tel:+37529-265-64-23"><span>Вызов</span></a></div>
                                
            </div> 
    

            
    
    
    <div class="contacts_box_other">
    	<div class="cbEmail"><i class="email-svg"></i><div><a href="mailto:info@nebo.by" title="Написать на электронную почту">info@nebo.by</a></div></div>
		
		<div class="cbMessengers">
				
					<div>
						<span style="margin-left: 8px;">Написать в</span>
					</div>
					
					<div>
						<a href="viber://chat?number=%2B375292656423" title="Написать в Viber"><i class="viber-button-svg"></i></a>

                    </div>
					
        </div>
				
    </div>    
    </div>
    



        
        <div class="footer_links_box">
      
       <div><span>Основное</span>
        <div><a href="https://remont.nebo.by/">Главная страница</a></div>
        <div><a href="https://remont.nebo.by/foto.php">Фотогалерея</a></div>
        <div><a href="https://remont.nebo.by/price.php">Цены</a></div>
        <div><a href="https://remont.nebo.by/otzyvy.php">Отзывы</a></div>
        </div>
        
 

    
    <div><span>Прочее</span>
        <div><a href="https://remont.nebo.by/sitemap.php">Карта сайта</a></div>
    </div>

    </div>




        
    </div>
</div>

<div class="width100 footer2 eF">
	<div class="width1004 eF m_lr2_padding">

        
<div class="footer2-stats">
            <span><b>56</b> человек сейчас на сайте вместе с Вами</span>
<span><b>126</b> человек в мае остались довольны сотрудничеством с нами</span>
</div>


		
	</div>
</div>



<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(13465708, "init", {
        id:13465708,
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/13465708" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119683498-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-119683498-1');
</script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-W4LQLLZ');</script>
<!-- End Google Tag Manager -->

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W4LQLLZ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = 'waLahNNkIl';var d=document;var w=window;function l(){var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();
</script>
<!-- {/literal} END JIVOSITE CODE -->

<script>
    $(window).load(function(){
        var lazyLoadInstance = new LazyLoad({
            elements_selector: ".lazy"
        });
    });
</script>

    
</body>
</html>