<?php
  // Get the Data from the Form

  // Validate Investment

  // Validate Interest Rate

  // Validate Years

  // Set Error Message to empty string if no invalid entries

  // If an error message exists, go to the index page

  // Calculate the future value

  // Apply currency and percent formatting

?>

<!DOCTYPE html>
<html lang="en-us">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Future Value Calculator</title>
  <link href="main.css" rel="stylesheet" type="text/css">

</head>
<body>
<main>
  <h1>Future Value Calculator</h1>

  <label>Investment Amount:</label>
  <span><?php echo $investment_f; ?></span><br>

  <label>Yearly Interest Rate:</label>
  <span><?php echo $yearly_rate_f; ?></span><br>

  <label>Number of Years:</label>
  <span><?php echo $years; ?></span><br>

  <label>Future Value:</label>
  <span><?php echo $future_value_f; ?></span><br>
</main>
</body>
</html>