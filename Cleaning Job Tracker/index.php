<?php
   require('database.php');
   if (isset($_POST['submit'])) {
       $phone = $_POST['phone'];
       $name = $_POST['name'];
       $qty = $_POST['qty'];
       $tagnum = $_POST['tagnum'];
       $status = $_POST['status'];
       $date = $_POST['date'];
       $query = "INSERT INTO customers (PHONE, SNAME, QTY, TAGNUM, STATUS, DateTime)
             VALUES (:PHONE, :SNAME, :QTY, :TAGNUM, :STATUS, :DATE)";
           
   $statement = $db->prepare($query);
   $statement->bindValue(':PHONE', $phone);
   $statement->bindValue(':SNAME', $name);
   $statement->bindValue(':QTY', $qty);
   $statement->bindValue(':TAGNUM', $tagnum);
   $statement->bindValue(':STATUS', $status);    
   $statement->bindValue(':DATE', $date);    
   $statement->execute();
   $statement->closeCursor();
   include('success.php');
   
   }else  {
      
   ?>
<!DOCTYPE html>
<!-- Avijit Roy -->
<html>
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Cleaning Tracker - Carpet Culture</title>
      <link rel="stylesheet" type="text/css" href="main.css" />
      <script src="main.js"></script>
   </head>
   <body>
      <div class="flex-container">
         <header>
            <h1>Cleaning Traker - Carpet Culture</h1>
         </header>
         <nav class="nav">
            <ul>
               <li><a class="active" href="index.php">Home</a></li>
               <li><a href="update.php">Search & update</a></li>
            </ul>
         </nav>
         <div class="main">
            <form class="form" action="" method="post" name="entry" onsubmit="return validateForm(); checkForm(this); return false;">
                  <label>Phone Number</label> <input type="text" name="phone" id="phone"><br><br>
                  <label>Customer Name</label> <input type="text" name="name" id="name"><br><br>
                  <label>Quantity</label> <input type="text" name="qty" id="qty"><br><br>
                  <label>Tag Num</label> <textarea name="tagnum" cols="40" rows="5" id="tag"></textarea>
                  <br><br>
                  <label>Select Status:</label>
                  <select name="status" size="5" style="width: 50%" id="status">
                     <option value="Ordered- at Carpet Culture">Ordered- at Carpet Culture</option>
                     <option value="At Facility">At Facility</option>
                     <option value="Cleaned- at Carpet Culture">Cleaned- at Carpet Culture</option>
                     <option value="Picked Up by Customer">Picked Up by Customer</option>
                     <option value="Delivered">Delivered</option>
                  </select>
                  <br><br>
                  <label>Date</label>
                  <input id = "date" name="date" type="date" max="2017-12-31" min="2014-01-01"> 
                  <br><br><br>  
                  <label></label>       
                  <input id="submit" class="button" type="submit" value="Submit" name="submit"><br>
                  <label></label>
                  <button id="reset" class="button" type="reset" value="Reset">Reset</button>
                  <br><br><br>
            </form>
         </div>
         <footer>&copy;2017-Avijit Roy Kabyo</footer>
      </div>
   </body>
</html>
<?php } ?>