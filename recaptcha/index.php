<!DOCTYPE html>
<html lang="en">
  <head>
    <title>reCaptcha</title>
  </head>
    <body>
        <form action="process.php" method="post">
            <label for="name">Name:</label>
            <input name="name" required><br />

            <label for="email">Email:</label>
            <input name="email" type="email" required><br />
            
            <div class="g-recaptcha" data-sitekey="6LctGhITAAAAAIORrWsIeIPJvhQ5X-kbYGwQo6RT"></div>
            
            <input type="submit" value="Submit" />
        </form>
        <script src='https://www.google.com/recaptcha/api.js'></script>
  </body>
</html>