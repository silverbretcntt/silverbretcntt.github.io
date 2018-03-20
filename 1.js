$(function(){
	$(window).scroll(function(){
		vitrihientai = $('html, body').scrollTop();
		if(vitrihientai > 337){
			$('.navbar-fixed-top').addClass('nho');
		}
		 else if(vitrihientai <= 337){
			$('.navbar-fixed-top').removeClass('nho');
		}
	});
	$('.btn1').click(function(){
		$('html, body').animate({scrollTop:$('#sanpham').offset().top});
		return false;
	})
		$('.btn2').click(function(){
		$('html, body').animate({scrollTop:$('#gioithieu').offset().top});
		return false;
	})
		$('.btn3').click(function(){
		$('html, body').animate({scrollTop:$('#lienhe').offset().top});
		return false;
	})

});
