<!DOCTYPE html>
<html lang="en-us">
<!-- The Head Section -->
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale = 1.0">

  <title>My Guitar Shop</title>
  <link href="main.css" rel="stylesheet" type="text/css">

</head>
<!-- The Body Section -->
<body>

<main>
  <h1>Database Error</h1>
  <p>There was an error connection to the database.</p>
  <p>The database must be installed as described in the appendix.</p>
  <p>The database must be running as described in chapter 1.</p>
  <p>Error Message: <?php echo $error_message; ?></p>
</main>

<footer>
  <p>&copy; <?php echo date("Y"); ?> My Guitar Shop, Inc.</p>
</footer>
</body>
</html>