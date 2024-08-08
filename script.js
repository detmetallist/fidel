$(window).on('load', function (){
	var win_height=$(window).height();
	var win_width=$(window).width();
	var win_height_popolam=Math.round(win_height/2);
	var win_width_popolam=Math.round(win_width/2);
	var mouse_procent_x=0;
	var mouse_procent_y=0;
	var img_top=0;
	var img_left=0;
	var bg_top=0;
	var bg_left=0;
	var stars_top=0;
	var stars_left=0;
	var scrol_top=$(document).scrollTop();
	var img_length=$('.img_content').length;
	let img_top_global=[0,0,0,0];
	let pic_top=[0,0,0,0];
	let pic_bottom=[0,0,0,0];
	let vis=[0,0,0,0];
	let proc=[0,0,0,0];
	let top_animate=[0,0,0,0];
	var coordX=0;
	var coordY=0;
	for(i=0; i<img_length; i++){
		img_top_global[i]=Math.round($('.img_content').eq(i).offset().top);
		vis[i]=$('.img_content').eq(i).height()+win_height;
	}
	$("html").mousemove(function (pos) {
		if($(window).width()>1000){
			mouse_procent_x=Math.round((pos.pageX-win_width_popolam)/win_width_popolam*100);
			mouse_procent_y=Math.round((pos.pageY-$(document).scrollTop()-win_height_popolam)/win_height_popolam*100);
			img_top=Math.round(mouse_procent_y/100*50);
			img_left=Math.round(mouse_procent_x/100*50);
			bg_top=Math.round(mouse_procent_y/100*10);
			bg_left=Math.round(mouse_procent_x/100*10);
			stars_top=Math.round(mouse_procent_y/100*2);
			stars_left=Math.round(mouse_procent_x/100*2);
			$('.img_content img').css('top',img_top).css('left',img_left);
			$('.img_bg img').css('top',bg_top).css('left',bg_left);
			$('.img_stars img').css('top',stars_top).css('left',stars_left);
		}
	})
	$(".text_img_first .img_side").mousemove(function(pos){
		if($(window).width()>1000){
			coordX=Math.round(pos.pageX-$(this).offset().left-$(".blur_circle").width()/2);
			coordY=Math.round(pos.pageY-$(this).offset().top-$(".blur_circle").width()/2);
			$(".blur_circle").css('left',coordX).css('top',coordY);
		}
	})
	$(".text_img_first .img_side").mouseout(function(pos){
		$(".blur_circle").css('left','-300').css('top','-300');
	})
	$(window).resize(function(){
		win_height=$(window).height();
		win_width=$(window).width();
		win_height_popolam=Math.round(win_height/2);
		win_width_popolam=Math.round(win_width/2);
		for(i=0; i<img_length; i++){
			img_top_global[i]=Math.round($('.img_content').eq(i).offset().top);
			vis[i]=$('.img_content').eq(i).height()+win_height;
		}
	})
	$(document).scroll(function(){
		scrol_top=$(document).scrollTop();
		for(i=0; i<img_length; i++){
			pic_top[i]=img_top_global[i]-scrol_top-win_height;
			pic_bottom[i]=img_top_global[i]-scrol_top+$('.img_content').eq(i).height();
			if(pic_top[i]<0&&pic_bottom[i]>0){
				proc[i]=Math.round(-pic_top[i]/vis[i]*100);
				top_animate[i]=-proc[i]+50;
				$('.img_content').eq(i).stop().animate({'top':top_animate[i]},500);
			}
		}
	})
	$('.mobile_menu_button').click(function(){
		$(".mobile_menu").fadeIn(300);
	})
	$('.mobile_menu_close').click(function(){
		$(".mobile_menu").fadeOut(300);
	})
	$(".popup_over").click(function(){
		$(".popup").fadeOut(200);
	})
	$("form").submit(function() { 
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "send.php", //Change
			data: th.serialize()
		}).done(function() {
			$(".popup_container").fadeOut(0);
			$(".popup, .popup_container.popup_thanks").fadeIn(200);		
			setTimeout(function() {
				$(".popup").fadeOut();
				th.trigger("reset");
			}, 5000);
		});
		return false;
	});	
	$(".spoiler").click(function(){
		if($(this).hasClass('active')){
			$(this).removeClass('active');
		} else {
			$(".spoiler").removeClass('active');
			$(this).addClass('active');
		}	
	})
	$(".pricing_tabs a").click(function(){
		$(".pricing_tabs li").removeClass('active');
		$(this).parent('li').addClass('active');
		var id=$(this).attr('href');
		$('.pricing_table').fadeOut(0);
		$(id).css('display','flex');
		return false;
	})
	$("a[href='#login']").click(function(){
		$(".popup_container").fadeOut(0);
		$(".popup, .popup_container.popup_login").fadeIn(300);
		return false;
	})
	$(".invisible-password").click(function(){
		$(this).fadeOut(200);
		$(".visible-password").fadeIn(200);
		$("#password").prop('type','text');
	})
	$(".visible-password").click(function(){
		$(this).fadeOut(200);
		$(".invisible-password").fadeIn(200);
		$("#password").prop('type','password');
	})
})