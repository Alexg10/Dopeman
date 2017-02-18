$( document ).ready(function() {
    $('.category_container').on('mouseenter', function(){
		$(this).find('.scroll_btn').addClass('scroll_btn_visible');
		
		cat = $(this).attr("class");
		cat= cat.split(" ").pop();
		// setInterval(function(){
		// 	scroll_cat(cat);
		// },400);
	});
    $('.category_container').on('mouseleave', function(){
		$(this).find('.scroll_btn').removeClass('scroll_btn_visible');
	});


	var questionContainerWidth = $('.question_ans_container').outerWidth();
	answerContainerWidth= $('.answer_container').outerWidth();
	var answer_container = questionContainerWidth -45;
	console.log(answer_container); 
	$('.answer_container').css('width',questionContainerWidth);

	$('.answer_container').css('right',-answer_container);
	$('.answer_container').on('click', function(){
		answer();
	});

	function answer(){
		if(!$('.answer_container').hasClass('answer_container_visible')){
			setTimeout(function(){
				$('.answer_container').toggleClass('answer_container_visible');
			},800);
			$('.answer_container').animate({
				'min-height': "390px",
			}, 400);
			console.log("kndsf");
		}else{
			setTimeout(function(){
				$('.answer_container').animate({
					'min-height': "306px",
				}, 400);
			},200);
			$('.answer_container').toggleClass('answer_container_visible');
		}
	}

	$('.section_title').on('click', function(){
		var lastClass = $('.article_display_cat').attr('class').split(' ').pop();
		console.log(lastClass);
		
		$('.article_display_cat').removeClass(lastClass);
		$('.section_title').removeClass('active');
		$(this).addClass('active');
		class_name = $(this).parent().attr('class').split(" ").pop();
		$('.article_display_cat').addClass(class_name);
	})



	// function scroll_cat(cat){
	// 	console.log(cat);
	// 	listen_height = $('.'+cat+' .article_container_height').outerHeight();
	// 	pos_scroll = 0;
	// 	// pos_scroll = pos_scroll.substring(1);
	// 	console.log(listen_height);
	// }
pos_scroll =0;
	var interval;
	// $('.scrolldown').mouseenter(function(){

	// 	if(interval) clearInterval(interval);
	// 	var container = $(this).parents('.scroll_btn').siblings('.display_articles').find('.article_container_height');
	// 	var pos_scroll = parseInt(container.css('transform').split(',')[5]);
	// 	var pos_scroll_per = pos_scroll.toString().replace("-","");

	// 	pos_scroll = container.attr('data-posHeight');
	// 	console.log(pos_scroll);

	// 	pos_scroll_per = pos_scroll_per;
	// 	var pos_scroll_per = pos_scroll_per / container;

	// 	console.log(pos_scroll_per);

	// 	interval = setInterval(function(){
	// 		pos_scroll += 10;
	// 		container.css({'-webkit-transform':'translateY(-'+pos_scroll+'px)'})
	// 	}, 200);

	// 	container.attr('data-posHeight', pos_scroll);
	// 	console.log(pos_scroll);


	// });
	// $('.scrolldown').mouseleave(function(){
	// 	if(interval) clearInterval(interval);
	// });

	// $('.scrolldown').hover(function(){
	// 	while( pos_scroll >= 0){
	// 		// $(this).prev('.article_container_height').css('transform':'translateY(-px)');
	// 		$(this).parents('.scroll_btn').siblings('.display_articles').find('.article_container_height').css({'-webkit-transform':'translateY('+pos_scroll+'%)'});
	// 		console.log(pos_scroll);
	// 		pos_scroll= pos_scroll - 1;
	// 	};
	// });


	$('.scrolldown').mouseover(function(){

		// if(interval) clearInterval(interval);
		var container = $(this).parents('.scroll_btn').siblings('.display_articles').find('.article_container_height');
		// var pos_scroll = parseInt(container.css('transform').split(',')[5]);
		// var pos_scroll_per = pos_scroll.toString().replace("-","");

		// pos_scroll = container.attr('data-posHeight');
		// console.log(pos_scroll);

		// pos_scroll_per = pos_scroll_per;
		// var pos_scroll_per = pos_scroll_per / container;

		// console.log(pos_scroll_per);


			container.animate({
			    'transform' : 'translateY("-=30px")'//moves up
		    });


		// container.attr('data-posHeight', pos_scroll);
		// console.log(pos_scroll);


	});
	$('.scrolldown').mouseleave(function(){
		if(interval) clearInterval(interval);
	});




	//SLIDER MORE CONTENT

	var related_slider = $('.related_content').flickity({
	  cellAlign: 'left',
	  contain: true,
	  prevNextButtons: false
	});

	related_slider.data('flickity');
	var related_prev = $('.related_post .btn_prev');
	var related_next = $('.related_post .btn_next');

	related_prev.on( 'click', function() {
	  related_slider.flickity('previous');
	});

	related_next.on( 'click', function() {
	  related_slider.flickity('next');
	});

	// $('.slideTxt').autoTextTape({
	// 	moveOnHover: true,
	// 	speed:"fast",
	// 	tapeOffset: 10
	// });

	//SLIDER HOME ALBUMS
	var homepage_album = $('.mixtape_slider').flickity({
	  cellAlign: 'left',
	  contain: true,
	  items: 3,
	  isWrapped: true,
	  prevNextButtons: false
	});
	homepage_album.data('flickity');

	var mixtape_prev = $('.mixtape_container .btn_prev');
	var mixtape_next = $('.mixtape_container .btn_next');

	mixtape_prev.on( 'click', function() {
	  homepage_album.flickity('previous');
	});

	mixtape_next.on( 'click', function() {
	  homepage_album.flickity('next');
	});



	// $(document).on("mouseenter", ".article", function(e) {
	//  	$(this).addClass('hover');
	// });

	$('.article').mouseleave(function(){
		$(this).find('.autoscroll-tape__tape').animate({
			left: 0
		}, 600)
	});

	// $(document).on("mouseenter", ".article", function(e) {
	// 	if($(this).hasClass('hover')){
	// 		e.stopImmediatePropagation();

	// 		console.log("kndsf");
	// 	 	$(this).find('.slideTxt').trigger('mouseover');
	// 	}
	// })




		// $('.slideTxt').jTicker({
		// duration : 1000, // speed
		// effect   : 'linear' // animation type	 
		// });



	var clipboard = new Clipboard('.copyLink');
	$('.copyLink').on('click', function(e){
		e.preventDefault();
	})


	clipboard.on('success', function(e) {
	    $('.link_alert').addClass('visible');
	    setTimeout(function(){
	    	$('.link_alert').removeClass('visible').css('display','inline-block');

	    }, 1500)
	    e.clearSelection();
	});


	//SINGLE VIDEO PLAY VIDEO FADE COVER
	$('.clip_cover').on('click', function(){
		$(this).fadeOut();
		$('.play_btn').fadeOut();
		$('.embed_youtube').css('position','relative');
		$('.embed_youtube').css('zIndex','1');

		$('.embed_youtube')[0].src += "&autoplay=1";
	})

	//SINGLE VIDEO RESIZE HEIGHT
	height = $('.clip_cover').outerHeight();
	$('.embed_youtube').css('height', height);
	$(window).on('resize', function(){
		height = $('.clip_cover').outerHeight();
		$('.embed_youtube').css('height', height);
	});


	//SEARCH BAR ANIM
	$(".search-field").focus( function(){
		$(".main-navigation_left").addClass('open');
	});	

	$(".search-field").focusout(function() {
		$(".main-navigation_left").removeClass('open');
	});	


	//MOBILE BTN
	$('.btn_menu').on('click', function(){
		$('.main-navigation').toggleClass('open');
	});










	
});