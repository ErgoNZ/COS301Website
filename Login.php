<?php
//first connect to the database
require_once('includes/connect.php');
session_start();
?>

<!DOCTYPE html>
<html lang = "en">
    <head>
        <link rel="stylesheet" href="Style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
    </head>
<body>
    <div class="parent">
        <div class="div1"> 
            <nav class="PcCheck">
                <ul>
                    <li class="PcCheck"><a href="Profile.php"><img class="ProfileImageNav" src="Image/Placeholder.png"></a></li>
                    <li class="PcCheck"><a href="Index.php">Home Page</a></li>
                    <li class="PcCheck"><a href="UserPage.php">Your Page</a></li>
                    <li>                        
                        <form class="Search" action="UserSearch.html">
                            <input class="Search" type="search" placeholder="Search...">
                        </form>
                    </li>
                </ul>
            </nav>
                    <div class="subcontainer">
                        <nav class="navbar">
                            <div class="hamburger">
                                <span class="bar"></span>
                                <span class="bar"></span>
                                <span class="bar"></span>
                            </div>
                            <ul class="nav-menu">
                                <li class="nav-item">
                                    <a class="nav-link" href="Profile.php"><img class="ProfileImageNav" src="Image/Placeholder.png"></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="Index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="UserPage.php">Your Page</a>
                                </li>
                            </ul>
                            <form class="Search" action="UserSearch.html" id="searchbar">
                                <input class="Search" type="search" placeholder="Search..." id="searchbar">
                            </form>
                        </nav>
                    </div>
        </div>
    <br />
        <div class="UserPageTxt"> 
            <div class="LoginBox">
                <div class="AccLogin">
                <p class="PostTitle">Login</p>
                <p class="PostContent">Enter your username and password here.</p>
                    <form action="UserSearch.html">
                        <input type="text" placeholder="Enter your username here..." name="Username">
                        <br />
                        <input type="text" placeholder="Enter your password here..." name="Password">
                        <br />
                        <input type="submit" value="Login">
                    </form>
                </div>
                    <div class="CreateAcc">
                    <p class="PostTitle">Or create an account</p>
                    <p class="PostContent">Enter the username and password for your new account here.</p>
                    <form action="UserSearch.html">
                        <input type="text" placeholder="Account Username..." name="NewUsername">
                        <br />
                        <input type="text" placeholder="Account Password.." name="NewPassword">
                        <br />
                        <input type="submit" value="Create an account">
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="script.js"></script>
</html>