<?php

  $jsondata = file_get_contents("reviews.json");
  $json = json_decode($jsondata,true);
  foreach($json ["movies"] as $movie){
      $output .= "<li>".$movie['rating']."</li>";
       if ($movie['rating'] = $id) {
           $movie = 'good';
       }else {
           $movie = 'bad';
       }
  }
  $output .="</ul>";
  
  echo $json['movies'][0]['rating'];
  ?>
