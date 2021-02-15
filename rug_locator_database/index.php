<?php
$user = $_POST['user'];
$pass = $_POST['pass'];

if(
	$user == "" //add a username
	&& $pass == "" // add a password
)
{
        include("kindex.php");	//route to main file ;-) 
}
else
{
    if(isset($_POST))
    {?> <html>
            <head>
                <title>Search ~ Change | Rug Locator | Carpet Culture</title>
                <style>
                    body{
                        width: 400px;
                        height: 300px;
                        border: solid red 5px;
                        margin-left: auto;
                        margin-right: auto;
                        margin-top: 10%;
                        font-size: 18px;
                    }
                    div{
                        padding: 20%;
                    }
                    #submit{
                        width: 100%;
                    }
                    #user{
                        width: 50%;
                    }
                    #pass{
                        width: 50%;
                    }
                </style>
            </head>
            <body>
                <div>
                    <form method="POST" action="">
                    Username  <input id="user" type="text" name="user"></input><br/><br />
                    Password  <input id="pass" type="password" name="pass"></input><br/><br />
                    <input id="submit" type="submit" name="submit" value="Submit"></input>
                    </form>
                </div>
            </body>
        </html>
    <?}
}
?>