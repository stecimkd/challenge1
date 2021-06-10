<?php
    include 'index.php'
?>
<?php
    include 'movie-id.php'
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <!-- Drop Down view | Text, Rating, Date, Min Rating, |-->
    <div>
      <label for="text">Prioritize by text:</label>
      <select name="Text">
        <option value="first" selected>Yes</option>
        <option value="second">No</option>
      </select>
    </div>

    <div>
      <label for="rating">Order by rating:</label>
      <select name="Rating">
        <option value="first" selected>Highest First</option>
        <option value="second">Lowest First</option>
      </select>
    </div>

    <div>
      <label for="date">Order by date:</label>
      <select name="Date">
        <option value="first">Newest First</option>
        <option value="second" selected>Oldest First</option>
      </select>
    </div>

    <div>
      <label for="minimum-rating">Minimum Rating:</label>
      <select name="Minimum rating">
        <option value="first" selected>1</option>
        <option value="second">2</option>
        <option value="third">3</option>
        <option value="fourth">4</option>
        <option value="fiveth">5</option>
      </select>
    </div>
     <!-- submit button -->
     <div>
      <button name="button">Search</button>
    </div>
  </body>
</html>
