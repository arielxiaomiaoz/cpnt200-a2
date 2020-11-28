<?php
  include 'includes/config.php';

  // write query for all customers
  $sql = 'SELECT * FROM customer';

  // get the result set (set of rows)
  $result = mysqli_query($conn, $sql);

  // fetch the resulting rows as an array
  $customers = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'includes/partials/head.php'?>
<body>
  <div class = 'wrapper'>
    <div class = "nav">
      <a href="index.php">Home</a>
    </div>
    <div class = 'header'>
      <h1> Customer Information</h1>
    </div>
    <!-- list the following customer information  -->
    <div class = 'container'>
      <?php foreach($customers as $customer){?>
        <table border = '2'>
          <tr>
            <td class = 'name'><a href="customer.php?id=<?php echo $customer['id']; ?>"><?php echo $customer['first_name']." ".$customer['last_name']; ?></a></td>
          </tr>
          <tr>
            <td>Phone Number: <?php echo $customer['phone']; ?></td>
          </tr>
          <tr>
            <td>Email: <?php echo $customer['email']; ?></td>
          </tr>
        </table><?php  } ?>
    </div>
    <div class="push"></div>
  </div>
  <!-- sticky footer -->
  <div class="footer">
    <?php include 'includes/partials/footer.php' ?>
  </div>
</body> 
</html>