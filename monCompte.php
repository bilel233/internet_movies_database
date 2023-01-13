


<!DOCTYPE html>
<html>
  <head>
    <title>Registration Form</title>
    <link rel="stylesheet" type="text/css" href="monCompte.css">
  </head>
  <body>
    <div class="container">
      <form action="monCompte.php" method="post">
        <h1>Registration Form</h1>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <input type="submit" value="Register">
      </form>
    </div>
  </body>
</html>

