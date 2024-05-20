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

         <label for="user-paragraph">Enter here a paragraph.</label>

         <textarea id="user-paragraph" name="paragraph" rows="4" cols="50">

         </textarea>

      </div>
      <!-- /Paragraph Input -->

      <!-- Word Input -->
      <div>

         <label for="user-word">Insert here a word to censor.</label>

         <input type="text" name="bad-word" id="user-word">

      </div>
      <!-- /Word Input -->

      <button type="submit">Submit</button>

   </form>

</body>

</html>