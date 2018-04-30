<?php
  $dir = scandir('../');


  /* Function cleanify will take a string, remove all dashes and replace them with space, returning the string as a capitalized element. */
  function cleanify($string){
    $string = str_replace('-', ' ', $string);
    return ucfirst($string);
  }

  /* Key delete will look for a key within an array, which is passed through as $key, will delete this from an array */
  function key_delete($array, $key){
    if(array_search($key, $array)){
      $del = array_search($key, $array);
      unset($array[$del]);
      return $array;
    }
  }

  /* This looks for the current page the user is on */
    $current = $_SERVER['REQUEST_URI'];

    /* this string replace will remove the /case-study/ from the url, while also removing all slashes */
    $current = str_replace('/','',$current);
    $current = str_replace('case-studies','',$current);

    /* call to the array, key delete will remove the index.php within the array found within the case study page. */
    $dir = key_delete($dir, 'index.php');

    /* Array shift aims to remove the . and .. from every default folder directory */
    array_shift($dir);
    array_shift($dir);
    $count = count($dir);

    $current = array_search($current, $dir);
    $count = intval($count)-1;

    /* the array will list all case studies in order, the $current variable will return a string of the current case study the user is on, using the array list. The next will be the next page in the array, previous will be the previous page within the array. */
    if($current == $count){
      $next = $dir[0];
    }else{
      $next = $dir[intval($current)+1];
    }

    if($current == 0){
      $previous = end($dir);
    }else{
      $previous = $dir[intval($current)-1];
    }

 ?>

<div class="prev--study">
  Previous: <a href="/case-studies/<?php echo $previous; ?>/"><?php echo cleanify($previous); ?></a>
</div>
<div class="website--visit">
  <a href="<?php echo $website; ?>" target="_blank">Visit Website</a>
</div>
<div class="next--study">
  Next: <a href="/case-studies/<?php echo $next; ?>/"><?php echo cleanify($next); ?></a>
</div>
