<!DOCTYPE html>
<html>
    <head>
        <title>
            Rug Locator | Carpet Culture
        </title>
        <link rel="stylesheet" type="text/css" href="main.css" />
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        
        <script type="text/javascript">
        function valid(){
            
            document.getElementById('result').style.display="inline-block";
        }
        </script>
    </head>
    <body>
        <div class="flex-container">
            <header>
                <h1>Rug Locator | Carpet Culture</h1>
            </header>
            <?php
                    if (!empty($_POST['submit']))  {
                    require_once('database.php');
                    $design2 = filter_input(INPUT_POST, 'design2');
                    $queryDesign2 = 'DELETE FROM locate WHERE DESIGN_NO = :design2';
                    $statement3 = $db->prepare($queryDesign2);
                    $statement3 -> bindValue(':design2', $design2);
                    $statement3 -> execute();
                    $designs2 = $statement3 -> fetchAll();
                    $statement3 -> closeCursor();
                    $message1="Design# ";
                    $message2=" Deleted.";
                    }
                ?>
            <div class="main">
                <div>
                    <a href="/kindex.php" class="w3-btn w3-blue">HOME</a>
                    <a href="/add.php" class="w3-btn w3-red">RESET ALL</a>
                   <a href="https://docs.google.com/spreadsheets/d/12Tsna-xKa960iexzAKQK7EPr--J24IJDknWL1jIvPJM/edit?usp=sharing" target="_blank" class="w3-btn w3-green">Google Sheet List</a>
                   <a href="/add.php" class="w3-btn w3-blue">Add a Rug</a>
                   <a href="/delete.php" class="w3-btn w3-red">Delete a Rug</a>
                    <br><br>
                    <hr><hr>
                </div>
                <div>
                    <h2 style="color: grey"><u>DELETE A RUG</u></h2>
                    <form name="delete" action="" method="post">
                        <span style="font-size: 24px; font-weight: bolder;">Enter Design Number: </span>
                        <input type="number" id="design2" name="design2" required value="<?php echo $design2 ?>" >&nbsp;&nbsp;&nbsp;
                        <br><br>
                        <input class="w3-btn w3-green" type="submit" name="submit" value="DELETE" class="w3-btn w3-green";> <br><br>
                        <span style="font-size: 24px; font-weight: bolder; text-align: center;" id="result"><? echo $message1, $design2, $message2 ?> <br> </span>
                    </form><br>
                </div>
                <br><br>
        <footer>&copy;2018-Avijit Roy Kabyo</footer>
        </div>
    </body>
</html>