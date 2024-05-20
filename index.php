<!DOCTYPE html>
<html lang="en">

<head>

   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Link Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <!-- /Link Bootstrap -->

   <title>PHP - Form Bad Words</title>

</head>

<body>

   <div class="container-sm">

      <h1 class="my-3 text-center text-primary">Censor a text</h1>

      <div class="row justify-content-center">

         <form class="col-8" action="response.php" method="GET">

            <!-- Paragraph Input -->
            <div class="mb-3 border rounded-3 p-2">

               <label for="user-paragraph" class="form-label">
                  Enter here a paragraph.
               </label>

               <textarea class="form-control" id="user-paragraph" name="paragraph" rows="4"></textarea>

            </div>
            <!-- /Paragraph Input -->

            <!-- Word Input -->
            <div class="mb-3 border rounded-3 p-2">

               <label for="user-word" class="form-label">
                  Insert here a word to censor.
               </label>

               <input type="text" class="form-control" id="user-word" name="bad-word">

            </div>
            <!-- /Word Input -->

            <button type="submit" class="btn btn-primary">Submit</button>

         </form>

      </div>

   </div>

</body>

</html>