$(document).ready(function(){
  
  //ALL
	if($(window).width() >= 768){
		$(window).scroll(function() {
		  if ($(document).scrollTop() <= $('#carousel').height() - 80) {
		    $('nav').addClass('expand');
		  } else {
		    $('nav').removeClass('expand');
		  }
		});
	}
  // $('#quote-carousel').carousel({
  //   pause: true,
  //   interval: 4000,
  // });

  // var quoteblock = $('.quote');
  // quoteblock.each(function(){
  // 	if($(this).text().length > 177){
  // 		$(this).text($(this).text().substring(0, 172) + ' ..."');
  // 	}
  // });

  //GALLERY
  var $lightbox = $('#lightbox');

  $('.white-panel').on('click', function(event) {
    var $img = $(this).find('img'), 
    src = $img.attr('src'),
    alt = $img.attr('alt'),
    css = {
        'maxWidth': $(window).width() - 100,
        'maxHeight': $(window).height() - 100
    };

    $lightbox.find('.close').addClass('hidden');
    $lightbox.find('img').attr('src', src);
    $lightbox.find('img').attr('alt', alt);
    $lightbox.find('img').css(css);
    $lightbox.modal('show');
  });

  $lightbox.on('shown.bs.modal', function (e) {
    var $img = $lightbox.find('img');
        
    $lightbox.find('.modal-dialog').css({'width': $img.width()});
    $lightbox.find('.close').removeClass('hidden');
  });

  //EVENTS
  $("[rel='tooltip']").tooltip();    

  $('.event-thumbnail').hover(
    function(){
      $(this).find('.event-caption').slideDown(250); //.fadeIn(250)
    },
    function(){
      $(this).find('.event-caption').slideUp(250); //.fadeOut(205)
    }
  ); 

  //ADMIN
  $("div.tab-menu>div.list-group>a").click(function(e) {
    e.preventDefault();
    $(this).siblings('a.active').removeClass("active");
    $(this).addClass("active");
    var index = $(this).index();
    $("div.tab>div.tab-content").removeClass("active");
    $("div.tab>div.tab-content").eq(index).addClass("active");
  });

  var $d = new Date();
  var $m = $d.getMonth();
  var $y = $d.getFullYear();

  function addMonths(){
    var $months = [ "January", "February", "March", "April", "May", "June", 
                 "July", "August", "September", "October", "November", "December" ];

    var $tempVar = ""; 
    var ctr2 = 0;

    for($ctr = 0; $ctr < 12; $ctr++){
      ctr2 = $ctr+1;
      $tempVar += '<option value="' + ctr2 + '"';
      if($ctr == $m){
        $tempVar += ' selected="selected">';
      } else{
        $tempVar += '>';
      }

      $tempVar += $months[$ctr] + "</option>";
    }

    $("#dateyear").html($months[$m] + " " + $y);

    return $tempVar;
  }

  function addYear(currentYear){
    var $min = currentYear - 30;
    var $max = currentYear + 31;
    var $tempVar = "";

    for($ctr = $min; $ctr < $max; $ctr++){

      $tempVar += '<option value="' + $ctr + '"';
      if($ctr == currentYear){
        $tempVar += ' selected="selected">';
      } else{
        $tempVar += '>';
      }

      $tempVar += $ctr + "</option>";
    }
    return $tempVar;
  }

  $("#idmdate").html(addMonths());
  $("#idydate").html(addYear($y))


  //eto gamitin mo para dun sa td
  function daysInMonth(month,year) {
    return new Date(year, month + 1, 0).getDate();
  }

});