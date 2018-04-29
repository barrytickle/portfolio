<?php include $_SERVER['DOCUMENT_ROOT'].'/includes/header.php' ?>
  <section class="container-sml content--container">
    <div class="center-intro">
      <h1>Come and say hello.</h1>
      <p>
        My aim is to provide you with the best experience possible by bringing your business online. By giving your business a touch of creativity, combined with practicality. You will be more available to those who could value your company the most.
      </p>

    </div>
  </section>
  <div id="map" style="height:40vh; width:100%;"></div>
  <section class="container-sml content--container">
    <div class="form--block">
      <div>
        <p>
          The end goal of all my sites is to provide you with a system which performs as well as it looks. While providing small startup companies with a strong chance of increasing their online presence.
        </p>
      </div>
      <div class="form">
        <form action="/includes/form/send.php" method="post" enctype="multipart/form-data" data-parsley-validate>
          <input type="text" placeholder="Your name" name="name" required>
          <input type="email" placeholder="Your email" name="email" required>
          <input type="text" placeholder="Your phone number (optional)" name="phone">
          <input type="text" placeholder="Your website (optional)" name="website">
          <textarea placeholder="Your message" name="message" data-gramm_editor="false"></textarea>
          <?php
            if(isset($_GET['hire'])){
           ?>
           <input type="hidden" name="Hire" value="User would like to hire you">
          <?php } ?>
          <input type="submit" value="Send message">
        </form >
      </div>

    </div>
  </section>

<?php include $_SERVER['DOCUMENT_ROOT'].'/includes/footer.php' ?>
