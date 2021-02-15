<!DOCTYPE html>
<!-- Avijit Roy -->
<html>
  <head>
    <title>Search Status</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" type="image/png" href="img/favicon-32x32.png">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" type="image/png" sizes="144x144" href="img/favicon-144x144.png">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" type="image/png" sizes="114x114" href="img/favicon-114x114.png">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" type="image/png" sizes="72x72" href="img/favicon-72x72.png">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" type="image/png" sizes="57x57" href="img/favicon-57x57.png">
  </head>
  <body>
    <div class="flex-container">
      <header>
        <h1>Search & Update the Status</h1>
      </header>
      <nav class="nav">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a class="active" href="update.php">Search & Update</a></li>
        </ul>
      </nav>
      <div class="main">
        <?php
          require_once('database.php');
          // Get category ID
          //if (isset($_POST['submit'])) {
          
          $phone = filter_input(INPUT_POST, 'phone');
          $queryPhone = 'SELECT * FROM customers WHERE PHONE = :phone ORDER BY PHONE ASC';     
          $statement1 = $db->prepare($queryPhone);
          $statement1 -> bindValue(':phone', $phone);
          $statement1->execute();
          $phones = $statement1 -> fetchAll();
          $statement1 -> closeCursor();
          //}else {
          ?>
        <div>
          <table align="center" class="result" width="100%">
            <tr>
              <th>
                Phone &nbsp;
                <form action="" method="post">
                  <input style="background: beige;" type="text" id="phone" name="phone"
                    value="<?php echo $phone ?>" onclick="document.getElementById('phone').value = ''"><br>
                  <input class="submit" type="submit" value="Search">
                </form>
              </th>
              <th>Name</th>
              <th>Qty</th>
              <th>Tag</th>
              <th>Status</th>
              <th>Date</th>
            </tr>
            <br>
            <?php foreach ($phones as $phn) : ?>
            <tr>
              <td><?php echo $phn[1]; ?></td>
              <td><?php echo $phn[2]; ?></td>
              <td><?php echo $phn[3]; ?></td>
              <td><?php echo $phn[4]; ?></td>
              <td><?php echo $phn[5]; ?></td>
              <td><?php echo $phn[6]; ?></td>
            </tr>
            <?php endforeach; ?>
          </table>
        </div>
      </div>
      <br><br>
      <footer>&copy;2017-Avijit Roy</footer>
    </div>
  </body>
</html>