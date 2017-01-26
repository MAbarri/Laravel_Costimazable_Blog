$(function() {


  $('.dropdown-menu').on('click', function(e) {
    e.stopPropagation();
  });
  $('#dropdownMenu1').on('click', function(e) {
    if(!$('#sidebar_filter_areas').hasClass( "open" )){
    $('#sidebar_filter_areas').addClass('open');} else {
      $('#sidebar_filter_areas').removeClass('open');
    }
  });
  
    $('input[type=date]').datepicker({
        format: 'yyyy-mm-dd',
        todayHighlight: true
    });

    $('#color').colorpicker().on('changeColor.colorpicker', function(event){
        $(this).css('background-color', event.color.toHex());
    });

    if( !$('input[type=date]').val() ) {
        $('input[type=date]').datepicker("setDate", new Date());
    }

    $('img.chosen-one').click(function(){
        $('input[name="language"]').val($(this).attr("alt"));
        $('#anakin-skywalker').submit();
    });
});
