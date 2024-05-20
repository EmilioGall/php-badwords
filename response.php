<?php

$user_paragraph = $_GET["paragraph"];

$user_word = $_GET["bad-word"];


?>


<!DOCTYPE html>
<html lang="en">

<head>

   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <title>PHP - Response Bad Words</title>

</head>

<body>

   <h1>RESULTS:</h1>

   <!-- Output Paragraph as written -->
   <div>

      <h2>Paragraph as written:</h2>

      <p> <?php echo $user_paragraph; ?> </p>

      <h5>Length:  <em><?php echo strlen($user_paragraph); ?></em> characters</h5>

   </div>
   <!-- /Output Paragraph as written -->

   <!-- Output censored Paragraph-->
   <div>

      <h2>Paragraph censored:</h2>

      <p> <?php echo str_replace($user_word,"***", $user_paragraph); ?> </p>

      <h5>Length:  <em><?php echo strlen(str_replace($user_word,"***", $user_paragraph)); ?></em> characters</h5>

   </div>
   <!-- /Output censored Paragraph-->

</body>

</html>