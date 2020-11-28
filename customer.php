<?php
  include('includes/config.php');
  
  if (isset($_GET['id']) && (int)$_GET['id'] > 0&& (int)$_GET['id'] < 6) {
  // *******************
  // Fetch one
  // GET '/customers/:id'
  //********************

  // write query for all customers
  $sql = 'SELECT * FROM customer WHERE id = '.$_GET['id'];

  // get the result set (set of rows)
  $result = mysqli_query($conn, $sql);

  // fetch the resulting rows as an array
  $customer = mysqli_fetch_all($result, MYSQLI_ASSOC);
  $content = 'single.php';

} else {
  $content = 'includes/partials/error.php';
}
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'includes/partials/head.php';?>
<body>
  <div class='wrapper'>
    <div class = "nav">
      <a href="index.php">Home</a>
    </div>
    <div class = 'header'>
      <h1> Customer Information</h1>
    </div>
    <div class = "container">
      <?php include($content); ?>
    </div>

    <!-- sticky footer -->
    <div class="push"></div>
  </div>
  <div class="footer">
    <?php include 'includes/partials/footer.php' ?>
  </div>
</body>
</html>
