<?php
  require('database.php');
  $query = 'SELECT * 
            FROM categories 
            ORDER BY categoryID';
  $statement = $db->prepare($query);
  $statement->execute();
  $categories = $statement->fetchAll();
  $statement->closeCursor();
?>

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
<header>
  <h1>Product Manager</h1>
</header>

<main>
  <h1>Add Product</h1>

</main>
<footer>
  <p>&copy; <?php echo date('Y'); ?> My Guitar Shop, Inc.</p>
</footer>
</body>
</html>
