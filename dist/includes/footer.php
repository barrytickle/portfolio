      <footer>
        <div class="footer-banner">
          <a class="block block--contact" href="/contact-us/">
            <div class="content">
              <h2>Ready to start your journey?</h2>
              <p>You can find me via my social media accounts, or if you prefer a more personal approach. My email can also be found via contact me.</p>
            </div>
          </a>
          <a class="block block--hire" href="/contact-us/?hire=true">
            <div class="content">
              <h2>Interested in hiring me?</h2>
              <p>Get in touch to find out what I can do for you and your team.</p>
            </div>
          </div>
        </a>
        <div class="footer-content">
          <div class="col">
            <h3>About me</h3>
            <p>Barry is a web designer & developer in Newton-Le-Willows, Merseyside.</p>
          </div>
          <div class="col">
            <nav>
              <a href="/">Home</a>
              <a href="/cv.pdf">My CV</a>
              <a href="/resources/">My Resources</a>
              <a href="/contact-us/">Contact Me</a>
            </nav>
          </div>
          <div class="col">
            <div class="logo">Barry.</div>
            <div class="copyright">Copyright &copy; Barry <?php echo date('Y');?>. All Rights Reserved.</div>
            <div class="social--group">
              <a href="https://www.facebook.com/barry.tickle12" target="_blank"><img src="/images/icons/social/facebook.svg" alt="Barry Tickle Facebook Link" title="Barry Tickle Facebook Link"></a>
              <a href="https://twitter.com/barry_tickle" target="_blank"><img src="/images/icons/social/twitter.svg" alt="Barry Tickle Twitter Link" title="Barry Tickle Twitter Link"></a>
              <a href="https://www.instagram.com/barrytickle/" target="_blank"><img src="/images/icons/social/instagram.svg" alt="Barry Tickle Instagram Link" title="Barry Tickle Instagram Link"></a>
              <a href="https://www.linkedin.com/in/barrytickle/" target="_blank"><img src="/images/icons/social/linkedin.svg" alt="Barry Tickle LinkedIn Link" title="Barry Tickle LinkedIn Link"></a>
            </div>
        </div>
      </footer>
    </main>
    <script src="/js/main.js" charset="utf-8"></script>
    <?php
      $page = $_SERVER['REQUEST_URI'];
      if($page == '/contact-us/' || $page == '/contact-us/?hire=true'){
     ?>
     <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
           <script type="text/javascript">
               // When the window has finished loading create our google map below
               google.maps.event.addDomListener(window, 'load', init);

               function init() {
                   // Basic options for a simple Google Map
                   // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                   var mapOptions = {
                       // How zoomed in you want the map to start at (always required)
                       zoom: 11,

                       // The latitude and longitude to center the map (always required)
                       center: new google.maps.LatLng(53.4524381, -2.6527741),

                       // How you would like to style the map.
                       // This is where you would paste any style found on Snazzy Maps.
                       styles: [{"featureType":"all","elementType":"geometry.fill","stylers":[{"weight":"2.00"}]},{"featureType":"all","elementType":"geometry.stroke","stylers":[{"color":"#9c9c9c"}]},{"featureType":"all","elementType":"labels.text","stylers":[{"visibility":"on"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"landscape","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"landscape.man_made","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"color":"#eeeeee"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#7b7b7b"}]},{"featureType":"road","elementType":"labels.text.stroke","stylers":[{"color":"#ffffff"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#46bcec"},{"visibility":"on"}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#c8d7d4"}]},{"featureType":"water","elementType":"labels.text.fill","stylers":[{"color":"#070707"}]},{"featureType":"water","elementType":"labels.text.stroke","stylers":[{"color":"#ffffff"}]}]
                   };

                   // Get the HTML DOM element that will contain your map
                   // We are using a div with id="map" seen below in the <body>
                   var mapElement = document.getElementById('map');

                   // Create the Google Map using our element and options defined above
                   var map = new google.maps.Map(mapElement, mapOptions);

                   // Let's also add a marker while we're at it
                   var marker = new google.maps.Marker({
                       position: new google.maps.LatLng(53.4524381, -2.6527741),
                       map: map,
                       title: 'Snazzy!'
                   });
               }
           </script>
         <?php } ?>
          <?php if($page == '/'){ ?>
          <script>var wew = new Wew(); wew.init();</script>
        <?php } ?>
    </body>
</html>
