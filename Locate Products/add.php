<!DOCTYPE html>
<html>
    <head>
        <title>
            Rug Locator | Carpet Culture
        </title>
        <link rel="stylesheet" type="text/css" href="main.css" />
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        
        <script type="text/javascript">
        function valid(){            document.getElementById('result').style.display="inline-block";
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
                    $dolly2 = filter_input(INPUT_POST, 'dolly2');
                    $queryDesign2 = 'INSERT INTO locate (DESIGN_NO, DOLLY_NO) VALUES(:design2, :dolly2)';
                    $statement3 = $db->prepare($queryDesign2);
                    $statement3 -> bindValue(':design2', $design2);
                    $statement3 -> bindValue(':dolly2', $dolly2);
                    $statement3 -> execute();
                    $designs2 = $statement3 -> fetchAll();
                    $statement3 -> closeCursor();
                    $message1="Design# ";
                    $message2=" added to ";
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
                    <h2 style="color: grey"><u>ADD RUGS TO DOLLY</u></h2>
                    <form name="add" action="" method="post">
                        <span style="font-size: 24px; font-weight: bolder;">Enter Design Number: </span>
                        <input type="text" id="design2" name="design2" required value="<?php echo $design2 ?>" >&nbsp;&nbsp;&nbsp;
                        <br>
                        <span style="font-size: 24px; font-weight: bolder;">Select Dolly Number: </span>
                        <select name="dolly2" id="dolly2" class="v" required>
                            <option value="">Select Dolly# </option>
                            <option value="Dolly-1">Dolly-1</option>
                            <option value="Dolly-2">Dolly-2</option>
                            <option value="Dolly-3">Dolly-3</option>
                            <option value="Dolly-4">Dolly-4</option>
                            <option value="Dolly-5">Dolly-5</option>
                            <option value="Dolly-6">Dolly-6</option>
                            <option value="Dolly-7">Dolly-7</option>
                            <option value="Dolly-8">Dolly-8</option>
                            <option value="Dolly-9">Dolly-9</option>
                            <option value="Dolly-10">Dolly-10</option>
                            <option value="Floor-11">Floor-11</option>
                            <option value="Dolly-12">Dolly-12</option>
                            <option value="Dolly-13">Dolly-13</option>
                            <option value="Dolly-14">Dolly-14</option>
                            <option value="Dolly-15">Dolly-15</option>
                            <option value="Dolly-16">Dolly-16</option>
                            <option value="Dolly-17">Dolly-17</option>
                            <option value="Dolly-18">Dolly-18</option>
                            <option value="Dolly-19">Dolly-19</option>
                            <option value="Dolly-20">Dolly-20</option>
                            <option value="Dolly-21">Dolly-21</option>
                            <option value="Dolly-22">Dolly-22</option>
                            <option value="Dolly-23A">Dolly-23A</option>
                            <option value="Dolly-23B">Dolly-23B</option>
                            <option value="Dolly-24">Dolly-24</option>
                            <option value="Basement Dolly-1">Basement Dolly-1</option>
                            <option value="Basement Dolly-2">Basement Dolly-2</option>
                            <option value="Basement Dolly-3">Basement Dolly-3</option>
                            <option value="Basement Dolly-4">Basement Dolly-4</option>
                            <option value="Basement Dolly-5">Basement Dolly-5</option>
                            <option value="Basement Dolly-6">Basement Dolly-6</option>
                            <option value="Basement Dolly-7">Basement Dolly-7</option>
                            <option value="Basement Dolly-8">Basement Dolly-8</option>
                            <option value="Basement Dolly-9">Basement Dolly-9</option>
                            <option value="Basement Dolly-10">Basement Dolly-10</option>
                            <option value="Basement Dolly-11">Basement Dolly-11</option>
                            <option value="Basement Dolly-12">Basement Dolly-12</option>
                            <option value="Basement Dolly-13">Basement Dolly-13</option>
                            <option value="Basement Dolly-14">Basement Dolly-14</option>
                            <option value="Basement Floor-1">Basement Floor-1</option>
                            <option value="Basement Floor-2">Basement Floor-2</option>
                        </select>&nbsp; &nbsp;
                        <br><br>
                        <input class="w3-btn w3-green" type="submit" name="submit" value="Submit" class="w3-btn w3-green";> <br><br>
                        <span style="font-size: 24px; font-weight: bolder; text-align: center;" id="result"><? echo $message1, $design2, $message2, $dolly2?> <br> </span>
                    </form><br>
                </div>
                <br><br>
        <footer>&copy;2018-Avijit Roy Kabyo</footer>
        </div>
    </body>
</html>
