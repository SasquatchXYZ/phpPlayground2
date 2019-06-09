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
  <h2>Tasks</h2>
  <?php if (count($task_list) === 0) : ?>
    <p>There are not task in the task list.</p>
  <?php else : ?>
    <ul>
      <?php foreach ($task_list as $id => $task) : ?>
        <li><?php echo $id + 1 . '. ' . htmlspecialchars($task) ?></li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>

  <!-- Part 3: The Add Form -->
  <h2>Add Task</h2>
  <?php if  : ?>
    <ul>
      <?php foreach  : ?>
        <li><?php echo  ?></li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>

  <!-- Part 4: The Delete Form -->
  <?php if  : ?>
    <ul>
      <?php foreach  : ?>
        <li><?php echo  ?></li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>
</main>
</body>
</html>