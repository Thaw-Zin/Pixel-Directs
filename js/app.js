 var isMobile = window.matchMedia("only screen and (max-width: 768px)");
  var isTablet = window.matchMedia("only screen and (min-width: 768px) and (max-width : 1199px)");
 $(document).ready(function() {
 	$(".page-title").fadeIn(4000);
 	$("#menu").hide();
    $('.action-next').hide();

 	$('#slider').hide();
 	$(document).on('click','.portfolio a#goslider', function(e) {  
 		e.stopPropagation();
 		$('.portfolio div.container-fluid').hide();
 		$('#myCarousel').carousel($(this).data('slide-to')-0);
 		$('#slider').show();
 	});
 	$(document).on('click','#close_slider', function(){
 		$('#slider').hide();
 		$('.portfolio div.container-fluid').fadeIn();
 	});
    $('#close_slider').hover(function(){
        $('.action-next').text("Close");
        $('.action-next').fadeIn();
        }, function() {
        $('.action-next').hide();
    });
    $('#next_slider').hover(function(){
        $('.action-next').text("Next");
        $('.action-next').fadeIn();
        }, function() {
        $('.action-next').hide();
    });
    $('#prev_slider').hover(function(){
        $('.action-next').text("Prev");
        $('.action-next').fadeIn();
        }, function() {
        $('.action-next').hide();
    });
   
 	
if(isMobile.matches)
{
	$('#fullpage').fullpage({
		
        autoScrolling: false,
        scrollBar: true,
        easing: 'easeInOutCubic',
        easingcss3: 'ease',
        loopBottom: true,
        loopTop: true,
        loopHorizontal: true,
        continuousVertical: true,
        normalScrollElements: '#element1, .element2',
        scrollOverflow: true,
        touchSensitivity: 15,
        normalScrollElementTouchThreshold: 5,
    	//Accessibility
    	keyboardScrolling: true,
    	animateAnchor: true,
    	recordHistory: true,
    	//Custom selectors
    	sectionSelector: '.section',
    	slideSelector: '.slide',
	});
    $(".mb-menu").hide();
    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
        if (scroll >= 400) {
            //alert("Mobile Menu show")
            $(".mb-menu").fadeIn("slow");

        } else {
            $(".mb-menu").fadeOut("scrolling");
        }

    });
}
else if(isTablet.matches)
{
    $('#fullpage').fullpage({
        scrollingSpeed: 1000,
        //anchors: ['pixeldirect', 'WhatWeDo', 'WhatWeDid', 'WhereWeAre', 'WeAreHiring'],
        anchors: ['pixeldirect', 'WhatWeDo', 'WhatWeDid', 'WhereWeAre'],
        autoScrolling: false,
        scrollBar: true,
        easing: 'easeInOutCubic',
        easingcss3: 'ease',
        loopBottom: true,
        loopTop: true,
        loopHorizontal: true,
        continuousVertical: true,
        normalScrollElements: '#element1, .element2',
        scrollOverflow: true,
        touchSensitivity: 15,
        normalScrollElementTouchThreshold: 5,
        //Accessibility
        keyboardScrolling: true,
        animateAnchor: true,
        recordHistory: true,
        //Custom selectors
        sectionSelector: '.section',
        slideSelector: '.slide',
    });
    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
        if (scroll >= 600) {
            $("#menu").fadeIn("slow");
            $("#menu").css("background-color", "rgba(255, 255, 255, 1)");
        } else {
            $("#menu").fadeOut("scrolling");
        }
    });

}
else {
        $('#fullpage').fullpage({
        //sectionsColor: ['#1bbc9b', '#4BBFC3', '#7BAABE', 'whitesmoke', '#ccddff'],
        scrollingSpeed: 1000,
        //anchors: ['pixeldirect', 'WhatWeDo', 'WhatWeDid', 'WhereWeAre', 'WeAreHiring'],
        anchors: ['pixeldirect', 'WhatWeDo', 'WhatWeDid', 'WhereWeAre'],
        /******** test start ********/
        /*menu: '#menu',
        resize: false,
        autoScrolling: false,
        scrollBar: true,*/
        /******** start end ********/
        menu: '#menu',
        resize: false,
        scrollBar: false,
        scrollOverflow: true,

        afterLoad: function(anchorLink, index){
            //using index
            if(index == 1){
                $("#menu").hide();
            }
            if(index == 2)
            {
                $("#menu").show();
                $("#menu").css("background-color", "rgba(255, 255, 255, 0)");
            }
            if(index == 3){
                $("#menu").show();
                $("#menu").css("background-color", "rgba(255, 255, 255, 1)");
            }
            else if(index == 4)
            {
                $("#menu").show();
                $("#menu").css("background-color", "rgba(255, 255, 255, 0)");
            }
            else if(index == 5)
            {
                $("#menu").show();
                $("#menu").css("background-color", "rgba(255, 255, 255, 0)");
            }
            else if(index == 6)
            {
                $("#menu").show();
                $("#menu").css("background-color", "rgba(255, 255, 255, 0)");
            }
        },
        onLeave: function(index, nextIndex, direction){
            var leavingSection = $(this);
              //after leaving section 2
              if(index == 1 && direction =='down'){
                  //alert("Up and go to section 2!");
              }
              else if(index == 2 && direction == 'up'){
                 // alert("Going to section 1!");
                 $("#menu").fadeOut('fast');
             }
             else if(index == 2 && direction == 'down'){
                $("#menu").fadeOut('fast');
             }
             else if(index == 3 && direction == 'up'){
                $("#menu").fadeOut('slow');
             }
             else if(index == 3 && direction == 'down'){
                $("#menu").fadeOut('fast');
             }
             else if(index == 4 && direction == 'up'){
                $("#menu").fadeOut('fast');
             }
             else if(index == 4 && direction == 'down'){
                $("#menu").fadeOut('fast');
             }
             else if(index == 5 && direction == 'up'){
                $("#menu").fadeOut('fast');
             }
             else if(index == 5 && direction == 'down'){
                $("#menu").fadeOut('fast');
             }
             /*else if(index == 6 && direction == 'up'){
                $("#menu").fadeOut('fast');
             }
             else if(index == 6 && direction == 'down'){
                $("#menu").fadeOut('fast');
             }*/
         }
     });
}
            ////////////////////////// for Location and map ////////////////////
            
            $( ".contact-form" ).hide();
            $(document).on('click','#chatus', function(){
                $('#chat').attr('id','viewmap');
                $('#viewmap').text('VIEW MAP');
                $( ".contact-form" ).show();
                $("#googleMap").hide();
            });
            $(document).on('click','#where', function(){
                $('#viewmap').attr('id','chat');
                $('#chat').text("LET'S CHAT");
                $( ".contact-form" ).hide();
                $("#googleMap").show();
            });
            $(document).on('click','#chat', function() {  
                $(this).attr('id','viewmap');
                $(this).text('VIEW MAP');
                $("#googleMap").hide( "slide", 
                    { direction: "left"  }, 5 );
                $(".contact-form").show( "slide", 
                    { direction: "right"  }, 800 );
            });

            $(document).on('click','#viewmap', function() {  
                $(this).attr('id','chat');
                $(this).text("LET'S CHAT");
                $(".contact-form").hide( "slide", 
                    { direction: "right"  }, 5 );
                  //$(".contact-form").fadeOut();
                  $("#googleMap").show( "slide", 
                    { direction: "left"  }, 800 );
              });

            /***********  MOBILE ***********/
            $( "#viewmap1" ).hide();
            $(document).on('click','#chat1', function() {  
            	$(this).attr('id','viewmap1');
            	$(this).text("VIEW MAP ");
            	$("#map_canvas").hide( "slide", 
            		{ direction: "left"  }, 5 );
            	$(".contact-form1").show( "slide", 
            		{ direction: "right"  }, 800 );
            });

            $(document).on('click','#viewmap1', function() {  
            	$(this).attr('id','chat1');
            	$(this).text("LET'S CHAT !");
            	$(".contact-form1").hide( "slide", 
            		{ direction: "right"  }, 5 );
            	$("#map_canvas").show( "slide", 
            		{ direction: "left"  }, 800 );
            });

             /////////////////////// for menu change when element reach at the top ///////////////////
             var secondpage = $('#section1').offset().top,
             $window = $(window);

             var distance = $('.image-set').offset().top,
             $window = $(window);

             var distance1 = $('#section3').offset().top,
             $window = $(window);

             var section4 = $('.direction-map').offset().top,
             $window = $(window);

             var section5 = $('#section5').offset().top,
             $window = $(window);

             $window.scroll(function() {
             	if ( $window.scrollTop() >= secondpage) {
                        //$("#menu").css("background-color", "red");
                        $("#menu").fadeIn("slow");
                    }
                    if ( $window.scrollTop() >= distance ) {
                    $("#menu").css("background-color", "rgba(255, 255, 255, 1)");  ///// #fff ///
                }
                if ( $window.scrollTop() >= distance1 ) {
                	$("#menu").css("background-color", "rgba(255, 255, 255, 0)");
                }
                if ( $window.scrollTop() >= section4 ) {
                	$("#menu").css("background-color", "rgba(255, 255, 255, 1)");
                }
                if ( $window.scrollTop() >= section5 ) {
                    //alert("Your div has reached the top");
                    $("#menu").css("background-color", "rgba(255, 255, 255, 0)");
                }
                else if ( $window.scrollTop() <= distance ) {
                    //alert("Your div has reached the top");
                    $("#menu").css("background-color", "rgba(255, 255, 255, 0.5)");

                }
            });

          ////////////////////////////// Text fade out when near the Top ///////////////////
          $(window).scroll(function () {
          	$('[id^="box"]').each(function () {
          		if (($(this).offset().top - $(window).scrollTop()) < 55) {
          			$(this).stop().fadeTo(600, 0);
          		}
          		else if (($(this).offset().top - $(window).scrollTop()) < 60) {
          			$(this).css('opacity','0.2');
          		} 
          		else if (($(this).offset().top - $(window).scrollTop()) < 80) {
          			$(this).css('opacity','0.5');
          		} 
          		else {
          			$(this).stop().fadeTo('slow', 600);
          		}
          	});
          });
          
      });