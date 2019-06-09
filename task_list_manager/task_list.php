<!DOCTYPE html>
<html lang="en-us">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial scale=1.0"/>

  <title>Task List Manager</title>
  <link href="main.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<header>
  <h1>Task List Manager</h1>
</header>
<main>
  <!-- Part 1: The Errors -->
  <?php if (count($errors) > 0) : ?>
    <h2>Errors</h2>
    <ul>
      <?php foreach ($errors as $error) : ?>
        <li><?php echo htmlspecialchars($error) ?></li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>

  <!-- Part 2: The Tasks -->
  <!-- Part 3: The Add Form -->
  <!-- Part 4: The Delete Form -->
</main>
</body>
</html>