<?php
$path = $_SERVER['DOCUMENT_ROOT'].'/includes/';
include $path.'head.php';
?>
<style>
body,html{
  padding-bottom:0;
}
</style>
  <div class="section-error">
    <div class="hero">
      <h1>Error 404</h1>
      <div class="error--message">
        <p>I swore I put that page somewhere... sorry about that...</p>
        <a onclick="window.history.back();" style="cursor:pointer;">return to previous page</a>
      </div>
    </div>
  </div>
