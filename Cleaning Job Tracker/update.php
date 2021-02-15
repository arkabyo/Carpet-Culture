<!DOCTYPE html>
<!-- Avijit Roy -->
<html>
  <head>
    <title>Search Status</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
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
              <th>ID</th>
              <th>
                Phone<br>
                <form action="" method="post">
                  <input type="text" id="phone" name="phone"
                    value="<?php echo $phone ?>" onclick="document.getElementById('phone').value = ''"><br>
                  <input class="submit" type="submit" value="Search">
                </form>
              </th>
              <th>
                Name
              </th>
              <th>Qty</th>
              <th>
                Tag
              </th>
              <th>Status</th>
              <th>Date</th>
            </tr>
            <br>
            <?php foreach ($phones as $phn) : ?>
            <tr>
              <td><?php echo $phn[0]; ?></td>
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
    <footer>&copy;2017-Avijit Roy Kabyo</footer>
    </div>
  </body>
</html>