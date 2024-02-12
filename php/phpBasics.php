<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 
    // first line of PHP code.
    /* 
    multi
    line
    comment
    */
    $name = "Dipesh Paudel";
    $sentence = "Dipesh Paudel - Frontend Developer.";
    $age = 22;
    $ageMinus = -34;
    $isMember = true;
    $brands = array("Nike", "Adidas", "Puma");

    // echo $name . "<br/>";
    // echo $sentence . "<br/>";
    // echo $age . "<br/>";
    // echo $ageMinus . "<br/>";
    // echo $isMember . "<br/>";
    // echo $brands[0] . "<br/>";
    // echo $brands[1] . "<br/>";
    // echo $brands[2] . "<br/>";

    // $person = $name;
    // echo $person . "<br/>";
    // $condition = $age > $ageMinus;
    // echo $condition . "<br/>";
    // $lengthOfString = strlen($name);
    // echo $lengthOfString . "<br/>";
    // echo $isMember ? "You are a member" : "You are not a member";
    // echo "<br/>";


    // $realNames = ["Prakash", "Dinesh", "Dipesh"];
    
    // foreach($realNames as $realName) {
    //   echo $realName . "<br/>";
    // }

    function displaySentence($sentence){
      return $sentence;
    }
    echo displaySentence("This is a sentence.");
  
    ?>
  </body>
</html>