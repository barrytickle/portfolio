<?php
  function generate_title(){
    $crumbs = explode("/",$_SERVER["REQUEST_URI"]);
    array_pop($crumbs);
    array_shift($crumbs);

    $crumbs = array_reverse($crumbs);
    function clean($crumb){
      $crumb = str_replace('.php', '_', $crumb);
      $crumb = str_replace('', ' ', $crumb);
      $crumb = str_replace('-', ' ', $crumb);
      return $crumb;
    }

    if(empty($crumbs)){
      echo 'Home | barrytickle.com | Web Design & Development in Newton-Le-Willows';
    }else{
      foreach($crumbs as $crumb){
          echo ucfirst(clean($crumb) . ' | ');
      }
      echo 'barrytickle.com | Web design & Development in Newton-Le-Willows';
    }
  }
 ?>
<head>
    <meta charset="utf-8">
    <title><?php generate_title(); ?></title>
    <link rel="stylesheet" href="/css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $description; ?>" />
    <meta name="theme-color" content="#ff2d55">
  </head>
