
/**
 * First, we will load all of this project's Javascript utilities and other
 * dependencies. Then, we will be ready to develop a robust and powerful
 * application frontend using useful Laravel and JavaScript libraries.
 */

 $(document).ready(function() {

   $('#homeCarousel').owlCarousel({
      loop: true,
      animateOut: 'fadeOut',
      animateIn: 'fadeIn',
      center: true,
      items: 1,
      margin: 0,
      autoplay: true,
      dots: true,
      nav: true,
      navText: [
        "<img src='https://res.cloudinary.com/hjp6lmmoa/image/upload/v1503760804/left-arrow_grqonx.png'/>",
        "<img src='https://res.cloudinary.com/hjp6lmmoa/image/upload/v1503760804/right-arrow_ixpnkr.png'/>",
      ],
      autoplayTimeout: 3000,
      smartSpeed: 450,
      responsive: {
        0: {
          items: 1
        },
        768: {
          items: 1
        },
        1170: {
          items: 1
        }
      }
      });

    //Home traveler carousel
    $('#travelHome').owlCarousel({
      loop: true,
      center: true,
      items: 3,
      margin: 0,
      autoplay: true,
      dots:false,
      nav: true,
      navText: [
        "<i class='fa fa-chevron-left'></i>",
        "<i class='fa fa-chevron-right'></i>"
      ],
      autoplayTimeout: 8500,
      smartSpeed: 450,
      responsive: {
        0: {
          items: 1
        },
        768: {
          items: 2
        },
        1170: {
          items: 3
        }
      }
  });



  //Home Tab Pannel
    $(".home-tab-pannel ul li").click(function() {
        var tab_id = $(this).attr('data-find');

        $('.finder').removeClass('current-finder');
        $(".home-tab-pannel ul li.current-flight-tab").removeClass("current-flight-tab")


        $(this).addClass('current-flight-tab');
        $("#"+tab_id).addClass('current-finder');

    });


  //Custom Select
    $('.selectholder').each(function(){
		$(this).children().hide();
		var description = $(this).children('label').text();
		$(this).append('<span class="desc">'+description+'</span>');
		$(this).append('<span class="pulldown"></span>');
		// set up dropdown element
		$(this).append('<div class="selectdropdown"></div>');
	  $(this).children('select').children('option').each(function(){
			if($(this).attr('value') != '0') {
				$drop = $(this).parent().siblings('.selectdropdown');
				var name = $(this).attr('value');
				$drop.append('<span>'+name+'</span>');
			}
		});
		// on click, show dropdown
		$(this).click(function(){
			if($(this).hasClass('activeselectholder')) {
				// roll up roll up
				$(this).children('.selectdropdown').slideUp(200);
				$(this).removeClass('activeselectholder');
				// change span back to selected option text
				if($(this).children('select').val() != '0') {
					$(this).children('.desc').fadeOut(100, function(){
						$(this).text($(this).siblings("select").val());
						$(this).fadeIn(100);
					});
				}
			}
			else {
				// if there are any other open dropdowns, close 'em
				$('.activeselectholder').each(function(){
					$(this).children('.selectdropdown').slideUp(200);
					// change span back to selected option text
					if($(this).children('select').val() != '0') {
						$(this).children('.desc').fadeOut(100, function(){
							$(this).text($(this).siblings("select").val());
							$(this).fadeIn(100);
						});
					}
					$(this).removeClass('activeselectholder');
				});
				// roll down
				$(this).children('.selectdropdown').slideDown(200);
				$(this).addClass('activeselectholder');
				// change span to show select box title while open
				if($(this).children('select').val() != '0') {
					$(this).children('.desc').fadeOut(100, function(){
						$(this).text($(this).siblings("select").children("option[value=0]").text());
						$(this).fadeIn(100);
					});
				}
			}
		});
	});
	// select dropdown click action
	$('.selectholder .selectdropdown span').click(function(){
		$(this).siblings().removeClass('active');
		$(this).addClass('active');
		var value = $(this).text();
		$(this).parent().siblings('select').val(value);
		$(this).parent().siblings('.desc').fadeOut(100, function(){
			$(this).text(value);
			$(this).fadeIn(100);
		});
	});

  //Hotel Date Picker
    var dateSelect     = $('#hotel-datepicker');
    var dateDepart     = $('#hotel-start-date');
    var dateReturn     = $('#hotel-end-date');
    var spanDepart     = $('#hotel-date-depart');
    var spanReturn     = $('#hotel-date-return');
    var spanDateFormat = 'ddd, MMMM D yyyy';

    dateSelect.datepicker({
      autoclose: true,
      format: "yyyy/mm/dd",
      maxViewMode: 0,
      startDate: "now"
    }).on('change', function() {
      var start = $.format.date(dateDepart.datepicker('getDate'), spanDateFormat);
      var end = $.format.date(dateReturn.datepicker('getDate'), spanDateFormat);
      spanDepart.text(start);
      spanReturn.text(end);
    });

  //Flight Date Picker
    var fligtSelect = $('#flight-datepicker');
    var fligtDepart     = $('#flight-start-date');
    var flightReturn     = $('#flight-end-date');
    var flightSpanDepart     = $('#flight-date-depart');
    var flightSpanReturn     = $('#flight-date-return');
    var flightDateFormat = 'ddd, MMMM D yyyy';


    fligtSelect.datepicker({
      autoclose: true,
      format: "mm/dd",
      maxViewMode: 0,
      startDate: "now"
    }).on('change', function() {
      var start = $.format.date(fligtDepart.datepicker('getDate'), flightDateFormat);
      var end = $.format.date(flightReturn.datepicker('getDate'), flightDateFormat);
      flightSpanDepart.text(start);
      flightSpanReturn.text(end);
    });

    //Tour Date Picker
    var tourSelect = $('#tour-datepicker');
    var tourDepart     = $('#tour-start-date');
    var tourReturn     = $('#tour-end-date');
    var tourSpanDepart     = $('#tour-date-depart');
    var tourSpanReturn     = $('#tour-date-return');
    var tourDateFormat = 'ddd, MMMM D yyyy';

    tourSelect.datepicker({
      autoclose: true,
      format: "mm/dd",
      maxViewMode: 0,
      startDate: "now"
    }).on('change', function() {
      var start = $.format.date(tourDepart.datepicker('getDate'), tourDateFormat);
      var end = $.format.date(tourReturn.datepicker('getDate'), tourDateFormat);
      tourSpanDepart.text(start);
      tourSpanReturn.text(end);
    });







 });
