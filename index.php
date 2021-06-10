<?php
    $data = file_get_contents("test.json");
    $data = json_decode($data, true);
    foreach ($data as $row ) 
    {
        pre_t($row['reviewFullText']);
        if(empty($row['reviewFullText'])) {
            echo 'without text ' .$row['reviewFullText'] ;
        }elseif ($row['reviewFullText']) {
            echo ' with text ' ;
        }
    }

    foreach ($data as $row ) 
    {
        pre_m($row['rating']);
        if($row['rating'] >=3 ) {
            echo ' ' .$row['rating'] ;
        }else{
            echo ' Raiting is too LOW  ' ;
        }
    }
    
// ///////////////////////////////////////////////////////////
        

   
    $text = $_GET['Text'];
    $rating = $_GET['Rating'];
    $date = $_GET['Date'];
    $minrat = $_GET['Minrat'];
    
    // //  pre_r($_GET);
    // //   if(isset($_GET['Submit'])){
    // //       echo "".$_GET['Text'].'<br />';
    //   }
        // pre_r($_GET);

    ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
  </head>
  <body>

      <form action="" method="GET">
        <label for="text">Prioritize by text:</label>
            <select name="Text">
                <option value="yes" selected>Yes</option>
                <option value="no">No</option>
            </select>
            
        <label for="rating">Order by rating:</label>
            <select name="Rating">
                <option value="highestfirst" selected>Highest First</option>
                <option value="lowestfirst">Lowest First</option>
            </select>

        <label for="date">Order by date:</label>
            <select name="Date">
                <option value="newestfirst">Newest First</option>
                <option value="oldestfirst" selected>Oldest First</option>
            </select>

        <label for="minrat">Minimum Rating:</label>
            <select name="Minrat">
                <option value="1" selected>1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>

      <input type="submit" name="submit" value="Submit">

      </form>
      <?php
      function pre_t( $array ) 
      {
          echo '<pre>';
          print_r($array);
          echo '</pre>';
      }
      function pre_r( $array ) 
      {
          echo '<pre>';
          print_r($array);
          echo '</pre>';
      }
      function pre_d( $array ) 
      {
          echo '<pre>';
          print_r($array);
          echo '</pre>';
      }
      function pre_m( $array ) 
      {
          echo '<pre>';
          print_r($array);
          echo '</pre>';
      }
      ?>
      
  </body>
  </html>
