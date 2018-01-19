jQuery(function($){
  $('.loadmore').click(function(){

    var button = $(this),
        data = {
          'action': 'loadmore',
          'query': loadmore_params.posts, // that's how we get params from wp_localize_script() function
          'page' : loadmore_params.current_page
        };
    $.ajax({
      url : loadmore_params.ajaxurl, // AJAX handler
      data : data,
      type : 'POST',
      beforeSend : function ( xhr ) {
        button.text('加载中...'); // change the button text, you can also add a preloader image
      },
      success : function( data ){
        if( data ) {
          button.text( '加载更多' ).prev().after(data); // insert new posts
          loadmore_params.current_page++;
          if (loadmore_params.current_page == loadmore_params.max_page)
            button.remove(); // if last page, remove the button
        } else {
          button.remove(); // if no data, remove the button as well
        }
      }
    });
  });
  function resetNewsTitleSize() {
    var containerWidth = $(".news__content").width();
    var title = $(".news__content h1:first");
    var oldSize = parseInt(title.css('font-size'));
    var newSize;
    title.css({
      'display': 'inline-block',
      'white-space': 'nowrap'
    });
    newSize = (containerWidth / title.width()) * oldSize;
    title.css({
      'font-size': Math.min(oldSize, newSize) + 'px',
      'display': 'block'
    });
  }
  resetNewsTitleSize();
});