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
	  prevNextButtons: false,
	  pageDots: false
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
	$('.clip_cover, .play_btn').on('click', function(){
		$('.clip_cover').fadeOut();
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
		$('.main-navigation, .btn_menu').toggleClass('open');
	});



	// CUSTOM SCROLL BAR HOME
	$(".display_articles").mCustomScrollbar();



	//HORIZONTAL SCROLL SONG

	// windowW= $(window).width();

	// if(windowW > 800){
	// 	i=0;
	// 	$( ".title-wrapper" ).each(function() {

	// 		var $holder = $(this);
	// 		var $list = $holder.find("ul.title-list");

	// 		articleArtist = $list.find('.article_artist');
	// 		articleTitle = $list.find('.article_title');
	// 		articleArtistW = articleArtist.width();
	// 		articleTitletW = articleTitle.innerWidth();

	// 		//SET LEFT TITLE POSITION
	// 		articleTitle.css({
	// 			"left": articleArtistW+20,
	// 			"width": articleTitletW
	// 			});

	// 		var $listUW = $list.width();
	// 		var $clonedList = $list.clone();
	// 		var listWidth = $list.find("li").length;
	// 		var endPos = $holder.width() - listWidth;
	// 		var listWidth = articleTitletW + articleArtistW + 100 ;

	// 		$list.find("li").css('width' , listWidth );	
	// 		$clonedList.find("li").css('width' , listWidth );	

	// 		if( listWidth > 750){
	// 			$clonedList.addClass("cloned").appendTo($holder);

	// 		var AnimName= "infinite"+i;

	// 		$holder.attr( 'anim', AnimName );

	// 		//TimelineMax
	// 		var AnimName = new TimelineMax({repeat: -1, paused: false});
	// 		var time = 2;

	// 		AnimName.fromTo($list, time, {left:0}, {left: -listWidth, ease: Linear.easeNone}, 0);
	// 		AnimName.fromTo($clonedList, time, {left:listWidth}, {left:0, ease: Linear.easeNone}, 0);
	// 		AnimName.set($list, {left: listWidth});
	// 		AnimName.to($clonedList, time, {left: -listWidth, ease: Linear.easeNone}, time);
	// 		AnimName.to($list, time, {left: 0, ease: Linear.easeNone}, time);
			
	// 		AnimName.pause();

	// 		//Pause/Play
	// 		$holder.on("mouseenter", function(){
	// 			// $clonedList.addClass("visible");
	// 			AnimName.play();
	// 			$(this).find('.cloned').animate({'opacity': "1"}, 200); 

	// 		}).on("mouseleave", function(){
	// 			// $clonedList.removeClass("visible");
	// 			AnimName.pause();
	// 			$(this).find('.cloned').animate({'opacity': "0", "left" : listWidth}, 800);
	// 				$('.title-list:not(.cloned)').animate({'left': "0px"}, 800, "swing"); 
	// 		});
	// 		i++;
	// 		}

	// 	});
	// }

	//token 4089084524.1677ed0.8dcb32e3183e41fcbaad5cd4012ad6ae
	var token = '4089084524.1677ed0.8dcb32e3183e41fcbaad5cd4012ad6ae', // learn how to obtain it below
	    userid = 4089084524, // User ID - get it in source HTML of your Instagram profile or look at the next example :)
	    num_photos = 10; // how much photos do you want to get
	 
	$.ajax({
		url: 'https://api.instagram.com/v1/users/' + userid + '/media/recent', // or /users/self/media/recent for Sandbox
		dataType: 'jsonp',
		type: 'GET',
		data: {access_token: token, count: num_photos},
		success: function(data){
			for( x in data.data ){
				$('#rudr_instafeed').append('<li><a href="https://www.instagram.com/dopeman_magazine/" target="_blank"><img src="'+data.data[x].images.low_resolution.url+'"></a></li>'); // data.data[x].images.low_resolution.url - URL of image, 306х306
				// data.data[x].images.thumbnail.url - URL of image 150х150
				// data.data[x].images.standard_resolution.url - URL of image 612х612
				// data.data[x].link - Instagram post URL 
			}
				var insta_wall = $('#rudr_instafeed').flickity({
				  cellAlign: 'left',
				  contain: true,
				  isWrapped: true,
				  pageDots: false,
				  prevNextButtons: false
				});
				insta_wall.data('flickity');

				var mixtape_prev = $('.insta_header .btn_prev');
				var mixtape_next = $('.insta_header .btn_next');

				mixtape_prev.on( 'click', function() {
				  insta_wall.flickity('previous');
				});

				mixtape_next.on( 'click', function() {
				  insta_wall.flickity('next');
				});

		},
		error: function(data){
			console.log(data); // send the error notifications to console
		}
	});

		//SLIDER WALL INSTA


	//DISPLAY CATEGORY ARCHIVE MOBILE


	windowW= $(window).width();
	console.log(windowW);
	if(windowW < 800){
		$('.sidebar_category_filter').on('click', function(){
			$('.category_list').slideToggle();
			$('.sidebar_category_filter').toggleClass('open');
		})
	};




});