// JavaScript Document
/*
 *  page init
 */

(function($){
	$(document).ready(function(){

		if (location.pathname.match(/(.*company)/)){
			$("#globalNav>ul>li").eq(1).attr('id', 'nowCom');
	
		} else if (location.pathname.match(/(.*business)/)){
			$("#globalNav>ul>li").eq(2).attr('id', 'nowBis');
		
		} else if (location.pathname.match(/(.*recruit)/)){
			$("#globalNav>ul>li").eq(3).attr('id', 'nowRct');
		
		}

		$("#news>ul>li").each(function(j){
			if(j % 2 === 1)
			{
				$(this).addClass("odd");
			} else
			{
				$(this).addClass("even");
			}
		});
		$("#footerArea").each(function(){
			var istopPage = (location.pathname.match(/(.*index)/) || (location.pathname.length < 2));

			if(istopPage){

				$(this).css("margin-top", 0);
			} else {

				$(this).css("margin-top", 100);
			}
		});
	});
})(jQuery);

/*
 *  href=# click
 */
(function($){
	$('a[href^=#]').click(function() {
		var href = $(this).attr('href');
		var positionTop = 0;

		if ($(href).length > 0) {
			positionTop = $(href).position().top;
		}
		return false;
	});
})(jQuery);


/*
 *  globalNav
 */

(function($){
	$.fn.DisplaySubNavArea = function(){
		this.each(function(){
			var $sub = $(">ul", this);
			$(this).hover(function(){
				$sub.show();
			},function(){
				$sub.hide();
			});
		});
	};
	$(function(){
		$("#globalNav>ul>li").DisplaySubNavArea();
	});
})(jQuery);


/*
 *  pickUpService
 */

(function($){
	$.fn.MainPageChangeBackGround = function(){
		$(this).hover(function(){
			var $pickUpServiceElement = $(this);
			$pickUpServiceElement.addClass(".curl-top-right").css("cursor","pointer").stop().animate({
				color: '#4040bf',
				opacity: 0.6,
			}, 300);
			$pickUpServiceElement.find(".btn-detail").stop().animate({
				backgroundColor: '#dcdcdc',
				color: '#333399'
			}, 300);
		},function(){
			var $pickUpServiceElement = $(this);
			$pickUpServiceElement.removeClass(".curl-top-right").stop().animate({
				color: '#333399',
				opacity: 1,
			}, 300);
			$pickUpServiceElement.find('.btn-detail').stop().animate({
				backgroundColor: '#333399',
				color: '#fff'
			}, 300);
		});
	};
	$(function(){
		$(".pickUpServiceElement").MainPageChangeBackGround();
	});
})(jQuery);

/*
 *  business
 */

(function($){
	$.fn.BussinessPageChangeBackGround = function(){
		$(this).hover(function(){
			var $businessDetail = $(this);
			$businessDetail.animate({
				color: '#4040bf',
				opacity: 0.6,
			}, 300);
		},function(){
			var $businessDetail = $(this);
			$businessDetail.stop().animate({
				color: '#333399',
				opacity: 1,
			}, 300);
		});
	};
	$(function(){
		$(".businessDetail").BussinessPageChangeBackGround();
	});
})(jQuery);
