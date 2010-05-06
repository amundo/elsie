$(function(){

  $(document).keypress(function(e){
    var audio = $('audio').get(0);
    if(e.keyCode == 27) { 
     if (audio.paused) 
       audio.play()
     else
       audio.pause()
    }
  })

  $('form#editor').submit(function(){
    return false
  });
  
  $('input').keypress(function(e){
    if(e.keyCode == 13) { 
      var stopTime = $('audio').get(0).currentTime;
      var startTime = stopTime - 5;
      $("<span/>", 
        { text: $('input').val() }
       )
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

  $('#files p a').click(
    function(){
      var href = $(this).attr('href'); 
      console.log('href: ' + href);
      $('audio').get(0).load()
      return false;
    }
  )

})
