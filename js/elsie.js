$(function(){

  /* playback */
  $(document).keypress(function(e){
    var audio = $('audio').get(0);
    if(e.keyCode == 27) {  // ESCAPE
     if (audio.paused) 
       audio.play()
     else
       audio.pause()
    }
  })

  /* prevent form redirect */
  $('form#editor').submit(function(){ return false });
  
  $('input').keydown(function(e){

 //   var code = (e.keyCode ? e.keyCode : e.which);
  //  console.log(e.which);

//    if(e.which == 47) {  // grave accent ` return false; } 

    if(e.which == 13) { 
      var stopTime = $('audio').get(0).currentTime;
      var startTime = stopTime - 5;
      $("<span/>", { text: $('input').val() })
        .attr('data-start', startTime)
        .attr('data-stop', stopTime)
        .appendTo('#lines');
      
      $.post('save_line.php',
        {
          'line': $('input#line').val(), 
          'start': startTime,
          'stop': stopTime 
        }
      )

      jQuery('audio').annotatevideo({
        start : $('#lines span:last').attr('data-start'),
        stop  : $('#lines span:last').attr('data-stop'),
        elem  : $('#lines span:last')
      })

      $('input').val('');
    }
  })

  $('#content span').each(function(){
    jQuery('audio').annotatevideo({
          start : $(this).attr('data-start'),
          stop  : $(this).attr('data-stop'),
          elem  : $(this)
    });
  });

  /* viewing spans */
  $('#view').toggle(
    function(){
      $(this).text('hide');
      $('span').show().wrap('<p/>');
    },
    function(){
      $(this).text('view');
      $('span').hide().unwrap('<p/>');
    }
  )

  /* choosing current audio */
  $('#files p a').click( function(){
    $('audio').replaceWith($('<audio/>', {'src':$(this).attr('href'), 'controls':'controls'}))  
    return false;
  })
/*
  $('#files p a').click(
    function(){
      var href = $(this).attr('href'); 
      $('audio').get(0).load(href)
      return false;
    }
  )
*/

})
