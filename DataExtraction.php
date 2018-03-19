<?php

  /*Run php to run python script each hour for extraction of file*/
  //include_once('Run.php');
  /*Require to Establish connection to database*/
  include_once('Connection.php');
  echo "start";
  echo exec('python3 scraping/NewsScraper.py');
  /*Get Contents of JSON file*/
  $Json_Feed = file_get_contents('scraped_articles.json',true);
  
  /*Decodeing JSON format as an associative array*/
  $Feed = json_decode($Json_Feed,true);

  /*Running lop through each article and inserting data into database*/
  foreach($Feed as $key=>$value){
  
        foreach($value as $key1=>$value1){
        
                //echo "$key1 => $value1\n";
               
               foreach($value1["articles"] as $article){
               
                   
                      $title = $article["title"];
                      $content = $article["text"];
                      $Date = $article["published"];
                      $Date = date_create($Date);
                      
                      $sql = "Insert into Feeds(Title,Date,Description) values ('".$title."','".$Date."','".$content."')"; 
                      $result = $conn->query($sql);
                      
                      //echo $title;
               
               }
        }
  
  }
  //echo $Feed["newsarticles"]["cnn"]["articles"][0]["title"];
 // echo $k;

?>
