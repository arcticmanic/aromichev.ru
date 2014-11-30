$(function(){

   $('#callback-form').submit(function(){
      var errors = false;
      // $(this).find('span').empty();
      // $(this).find('input:not(#input-submit, #input-clear), textarea').css('background','#fff');

      // $(this).find('input:not(#input-submit, #input-clear), textarea').each(function(){
         // $(this).next().css('display','none');
         // if( $.trim( $(this).val() ) == '' ) {
            // errors = true;
            // $(this).next().css('display','inline-block');
            // $(this).next().text( 'Введите ' + $(this).prev().text() );
            // $(this).css('background','#fdd5d2');
         // }
      // });

      if( !errors ){
         var data = $('#callback-form').serialize();
         $.ajax({
            url: 'sendmail.php',
            type: 'POST',
            data: data,
            beforeSend: function(){
               $('#process').text('Отправляю...');
            },
            success: function(res){
                  $('#callback-form').find('input:not(#input-submit, #input-clear), textarea').val('');
                  $('#process').empty();
               /*if( res == 1 ){
                  $('#callback-form').find('input:, textarea').val('');
                  $('#process').empty();
               }else{
                  $('#process').text('Ошибка отправки');
               };*/
               //alert( "Data Saved: " + res )
            },
            error: function(){
               alert('Ошибка!');
            }
         });
      }

      return false;
   });

});