<!DOCTYPE html>
<html>
    <head>
        <title>
            Search ~ Change | Rug Locator | Carpet Culture
        </title>
        <link rel="stylesheet" type="text/css" href="main.css" />
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        
    </head>
    <body>
        <div class="flex-container">
            <header>
                <h1>Rug Locator | Carpet Culture</h1>
            </header>
            
            <div class="main">
                
                <?php
                    require_once('database.php');
                    //if (!empty($_POST['submit'])) {
                    $design = filter_input(INPUT_POST, 'design');
                    $queryDesign = 'SELECT * FROM locate WHERE DESIGN_NO = :design ORDER BY SL ASC';
                    $statement1 = $db->prepare($queryDesign);
                    $statement1 -> bindValue(':design', $design);
                    $statement1 -> execute();
                    $designs = $statement1 -> fetchAll();
                    $statement1 -> closeCursor();
                    
                    $dolly = filter_input(INPUT_POST, 'dolly');
                    $queryDolly = 'SELECT * FROM locate WHERE DOLLY_NO = :dolly ORDER BY SL ASC';
                    $statement2 = $db->prepare($queryDolly);
                    $statement2 -> bindValue(':dolly', $dolly);
                    $statement2 -> execute();
                    $dollys = $statement2 -> fetchAll();
                    $statement2 -> closeCursor();
                    
                    $design2 = filter_input(INPUT_POST, 'design2');
                    $dolly2 = filter_input(INPUT_POST, 'dolly2');
                    $queryDesign2 = 'UPDATE locate SET DOLLY_NO = :dolly2 WHERE DESIGN_NO = :design2';
                    $statement3 = $db->prepare($queryDesign2);
                    $statement3 -> bindValue(':design2', $design2);
                    $statement3 -> bindValue(':dolly2', $dolly2);
                    $statement3 -> execute();
                    $designs2 = $statement3 -> fetchAll();
                    $statement3 -> closeCursor();
       
                    //}else {
                ?>
                <div>
                    <a href="http://locate.carpet-culture.com/kindex.php" class="w3-btn w3-red">RESET ALL</a>
                   <a href="https://docs.google.com/spreadsheets/d/12Tsna-xKa960iexzAKQK7EPr--J24IJDknWL1jIvPJM/edit?usp=sharing" target="_blank" class="w3-btn w3-green">Google Sheet List</a>
                   <a href="/add.php" class="w3-btn w3-blue">Add a Rug</a>
                   <a href="/delete.php" class="w3-btn w3-red">Delete a Rug</a>
                    <br><br>
                    <hr><hr>
                </div>
                <div>
                    <h2 style="color: grey;"><u>SEARCH A RUG</u></h2>
                    <form name="search" action="kindex.php" onsubmit="return validateForm()" method="post">
                        <span style="font-size: 24px; font-weight: bolder;">Enter Design Number: </span>
                        <input type="text" id="design" name="design" value="<?php echo $design ?>" onclick="document.getElementById('design').value= '' ">&nbsp;&nbsp;&nbsp;
                        <input class="w3-btn w3-green" type="submit" name="submit1" value="Search"> <br><br>
                        <span><?php foreach ($designs as $sku) : ?></span>
                        <span style="font-size: 24px; font-weight: bolder; text-align: center;">Rug No# <? echo $sku[1] ?> <br> </span>
                        <button class="button button3"><?php echo $sku[2]; ?></button><br>
                        <?php endforeach; ?>
                    </form>
                </div>
                <hr><hr>
                <div>
                    <h2 style="color: grey"><u>LIST ALL RUGS in a DOLLY</u></h2>
                    <form action="kindex.php" method="post">
                        
                        <select name="dolly" id="dolly" class="v" onchange="this.form.submit()">
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
                            <option value="*">Show All</option>
                        </select>
                    </form><br>
                    <table align="center">
                        <tr>
                            <th><span style="color: red; font-size: 24px;"><b><?php echo $dolly; ?></b></span> > Rugs</th>
                        </tr>
                        <?php foreach ($dollys as $dls) : ?>
                        <tr>
                            <td style="font-size: 16px; font-weight: bolder; text-align: center;"><?php echo $dls[1]; ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                    
                    <hr><hr>
                <div>
                    <h2 style="color: grey"><u>CHANGE DOLLY</u></h2>
                    <form name="change" action="kindex.php" method="post" onsubmit="return validateForm()">
                        <span style="font-size: 24px; font-weight: bolder;">Enter Design Number: </span>
                        <input type="text" id="design2" name="design2" value="<?php echo $design2 ?>" onclick="document.getElementById('design2').value= '' ">&nbsp;&nbsp;&nbsp;
                        <br>
                        <span style="font-size: 24px; font-weight: bolder;">Select Dolly Number: </span>
                        <select name="dolly2" id="dolly2" class="v">
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
                        <input class="w3-btn w3-green" type="submit" name="submit3" value="Change" class="w3-btn w3-green"> <br><br>
                        <span style="font-size: 24px; font-weight: bolder; text-align: center;"><? echo $design2 ?> &nbsp; moved to <?php echo $dolly2 ?> <br> </span>
                    </form><br>
                </div>
                
                <br><br>
        <footer>&copy;2018-Avijit Roy Kabyo</footer>
        </div>
    </body>
</html>