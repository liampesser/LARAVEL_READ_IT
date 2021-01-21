$(function(){


    $('#posts_index_more').click(function(e){
      e.preventDefault();

      let offset = $('#posts_list .col-md-6').length;
      let limit = (typeof $(this).data('limit') !== typeof undefined && $(this).data('limit') !== false)? $(this).data('limit') : 10;

        $.get($(this).data('url'), {
            offset,
            limit: $(this).data('limit')
        },function(reponse){
          // Le PHP devrait retourner la vue complète à appender (div)
      	  $('#posts_list').append(reponse)
                          .find('.col-md-6:nth-last-of-type(-n+10)')
                          .addClass('fadeInUp ftco-animated');
        });

    });

  });
