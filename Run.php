<?php

  //$command = 'ls';
  //exec($command, $out, $status);
  $message = exec('python3 ./scraping/NewsScraper.py');
  print_r($message);


?>
