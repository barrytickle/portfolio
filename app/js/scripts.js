$(document).ready(function(){
  $("#hamburger").on("click", function(){
    $("body").toggleClass('no-move');
    $(this).toggleClass("active");
    $("nav").toggleClass('active');

    function animate(){
      $("nav a").each(function(i){
        setTimeout(function(){
          $("nav a").eq(i).toggleClass('fadeInLeft');
        }, 150 * (i + 1));
      });
    }
    setTimeout(animate, 150);
  });
  /*Stops the snap scroll on a mobile view */
  if($(window).width() > 760){
    $.scrollify({
      section : ".js--window",
    });
  }


if($("#instafeed").length){
  /* Will grab all images from my instagram feed, with the hashtag #photography */
    var userFeed = new Instafeed({
        get: 'user',
        userId: '360878604',
        target: 'instafeed',
        filter: function(image) {
            return image.tags.indexOf('photography') >= 0;
        },
        resolution: 'standard_resolution',
        accessToken: '360878604.9376d23.571acc7cf73047939ad4e74bcae2e60b',
        template: '<a href="{{image}}" data-title="{{caption}}" data-lightbox="photography" class="photography-box"><div class="photo-box" style="background-image:url({{image}});" alt="{{caption}}" title="{{caption}}"></div></a>'
    });
    userFeed.run();
}

/*
    Will grab all images from my instagram feed, with the hashtag #photography
    Only if the user is on the home page.
 */

if($("#photography--home").length){
    var userJson = new Instafeed({
        get: 'user',
        userId: '360878604',
        limit: 3,
        mock:true,
        filter: function(image) {
            return image.tags.indexOf('photography') >= 0;
        },
        resolution: 'standard_resolution',
        accessToken: '360878604.9376d23.571acc7cf73047939ad4e74bcae2e60b',
        success: function (data) {
        var images = data.data;
          for (i = 0; i < images.length; i++) {
            var image = images[i].images[this.options.resolution].url;
            var url = images[i].link;
            var template = '<a class="img-block wew animated slideInRight" style="background-image:url({{image}});" href="{{url}}" target="_blank"></a>';
            template = template.replace('{{image}}', image);
            template = template.replace('{{url}}', url);
            if(i == 0 ){
              $("#photography--home").find('.column').first().html(template);
            }else{
              $("#photography--home").find('.column').last().append(template);
            }

          }
      }
    });
    userJson.run();
}


});
