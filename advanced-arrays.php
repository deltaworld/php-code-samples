<html>
  <head>
    <title>I am the King of Arrays!</title>
  </head>
  <body>
    <p>
      <?php
      // On the line below, create your own associative array:
    $myArray = array(1, 2, 3, 4);

      // On the line below, output one of the values to the page:
     echo $myArray[1];
        echo "<br>";      
      // On the line below, loop through the array and output
      // *all* of the values to the page:
    $length = count($myArray);
    echo $length;
    for ($i = 0; $i < $length; $i++) {
        echo $myArray[$i];
        echo '<br>';
    }
     
      ?>
    </p>
  </body>
</html>