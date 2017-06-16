/* HOME SCROLL */
$(document).ready(function() {
	$('#fullpage').fullpage({
		scrollingSpeed: 600,
		css3: true,
		easing: 'easeInOutCubic',
		paddingBottom: '0px',
    responsiveHeight: 568,
		afterLoad: function(anchorLink, index){
			if(index != 1) {
				$("#page-header").addClass("scroll");
			} else {
				$("#page-header").removeClass('scroll');
			}				
		}
	});
});

/* SCROLL HEADER ANIMATION */
$(window).scroll(function() {
	if($(window).scrollTop() > 50) {
    $("#page-header").addClass("scroll");
	} else {
    $("#page-header").removeClass("scroll");
  }
});




$(function () {
    var i = 1;

    function slider() {
        var l = $("#fadeslider .slide-fadeslider").length;
        if (i == l) {
            i = 0;
        }
        $("#fadeslider .slide-fadeslider:nth-child(" + i + ")").fadeOut(1000);
        $("#fadeslider .slide-fadeslider").removeClass('active');
        i++;
        $("#fadeslider .slide-fadeslider:nth-child(" + i + ")").fadeIn(500);
        $("#fadeslider .slide-fadeslider:nth-child(" + i + ")").addClass('active');
        if (i >= l) {
            i = 0;
        }
    }

    function sliderTo(index) {

        //var l = $("#fadeslider .slide-fadeslider").length;
        console.log("l");

        $("#fadeslider .slide-fadeslider").removeClass('active');
        i = index;
        console.log(i);

        $("#fadeslider .slide-fadeslider:nth-child(" + i + ")").addClass('active');

    }

    function sliderback() {
        var l = $("#fadeslider .slide-fadeslider").length;
        if (i == 0) {
            i = l + 1;
        }
        $("#fadeslider .slide-fadeslider").fadeOut(500);
        $(".slidelist div").removeClass("active");
        i--;
        if (i <= 0) {
            i = l;
        }
        $("#fadeslider .slide-fadeslider:nth-child(" + i + ")").fadeIn(500);
        $(".slidelist div:nth-child(" + i + ")").addClass("active");
    }
    $(".slidenext").click(function () {
        slider();
    });
    $(".slideback").click(function () {
        sliderback();
    });

    $('.slideback,.slidenext').hover(function (ev) {
        clearInterval(timer);
    }, function (ev) {
        timer = setInterval(slider, 500);
    });
    $('#trigger-image-1').click(function () {
        $(".slidelist h3").removeClass("active");
       
        $(this).addClass("active");
        sliderTo(1);
    })
    $('#trigger-image-2').click(function () {
        $(".slidelist h3").removeClass("active");
       
        $(this).addClass("active");
        sliderTo(2);
    })
    $('#trigger-image-3').click(function () {
        $(".slidelist h3").removeClass("active");
         
        $(this).addClass("active");
        sliderTo(3)
    })
    $('#trigger-image-4').click(function () {
        $(".slidelist h3").removeClass("active");
         
        $(this).addClass("active");
        sliderTo(4)
    })
})