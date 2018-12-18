
 $(document).ready(function(){

  var window_width = $( window ).width();
  if(window_width > 320){
    window_width = 292
  }else{
    window_width = window_width - 50;
  }

  $( "#dialog" ).dialog({
    autoOpen: false,
    modal: true,
    width: window_width,
    dialogClass: 'critereon-dialog',
    position: {my: 'center', at: 'center'}
  });

  $(".critereon-input").keyup(function(){
    var max_value = parseInt($(this).attr('max'));
    var this_value = parseInt($(this).val());
    if (this_value > max_value){
      $("#critereon-max").html(max_value);
      $("#dialog").dialog('open');
      $(this).val(0)
    }

    if (this_value < 0){
      $(this).val(0)
    }
  });

 });

