$jsondata = file_get_contents("reviews.json");
  $json = json_decode($jsondata,true);
  $output = "<ul>";
  foreach($json ['movies'] as $movie){
      $output .= "<li>".$movie['reviewFullText']."</li>";
      $output .= "<li>".$movie['rating']."</li>";
      $output .= "<li>".$movie['reviewCreatedOnDate']."<li>";  
  }
  $output .="</ul>";
 

 echo $output; 