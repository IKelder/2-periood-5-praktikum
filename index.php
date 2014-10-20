<?php require("validation.php"); ?>
<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>2. periood - 5.praktikum</title>
    </head>
    <body>
      <pre><?php print_r($_POST); ?></pre>
      <form action="index.php" method="post">
      <div class="form_field">
      <?php if ($issubmitted) { echo $usernamemessage; } ?>
        <span>kasutajanimi:</span>
        <input type="text" name="username">
      </div>
      <div class="form_field">
        <input type="submit" name="submit">
      </div>
    </body>
  </html>