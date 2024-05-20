<?php

?>


<!DOCTYPE html>
<html lang="en">

<head>

   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <title>PHP - Form Bad Words</title>

</head>

<body>

   <form action="response.php" method="GET">

      <!-- Paragraph Input -->
      <div>

         <label for="paragraph">Enter here a paragraph.</label>

         <input type="text" name="paragraph">

      </div>
      <!-- /Paragraph Input -->

      <!-- Word Input -->
      <div>

         <label for="bad-word">Insert here a word to censor.</label>

         <input type="text" name="bad-word">

      </div>
      <!-- /Word Input -->

      <button type="submit">Submit</button>

   </form>

</body>

</html>