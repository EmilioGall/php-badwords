<?php

$user_paragraph = $_GET["paragraph"];

$user_word = $_GET["bad-word"];

?>


<!DOCTYPE html>
<html lang="en">

<head>

   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Link Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <!-- /Link Bootstrap -->

   <title>PHP - Response Bad Words</title>

</head>

<body>

   <div class="container-sm">

      <h1 class="my-3 text-center text-primary">Result of your censure:</h1>

      <div class="row g-2 justify-content-center">

         <!-- Output Paragraph as written -->
         <div class="col-8 border rounded-4 p-3">
   
            <h2>Paragraph as written:</h2>
   
            <p> <?php echo $user_paragraph; ?> </p>
   
            <h5>Length: <em><?php echo strlen($user_paragraph); ?></em> characters</h5>
   
         </div>
         <!-- /Output Paragraph as written -->
   
         <!-- Output censored Paragraph-->
         <div class="col-8 border rounded-4 p-3">
   
            <h2>Paragraph censored:</h2>
   
            <p> <?php echo str_replace($user_word, "***", $user_paragraph); ?> </p>
   
            <h5>Length: <em><?php echo strlen(str_replace($user_word, "***", $user_paragraph)); ?></em> characters</h5>
   
         </div>
         <!-- /Output censored Paragraph-->

      </div>

   </div>

</body>

</html>