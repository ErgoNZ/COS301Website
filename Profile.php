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
                    <li class="PcCheck"><a class="CurrentPage" href="Profile.php"><img class="ProfileImageNav" src="Image/Placeholder.png"></a></li>
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
                                    <a class="nav-link" id="CurrentPage" href="Profile.php"><img class="ProfileImageNav" src="Image/Placeholder.png"></a>
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
            <div class="Item">
                <p class="PostTitle">Settings</p>
                <p class="PostContent"> This is your settings page here you can swap your profile image with the other avaliable options, as well as updating your about section that is dispalyed on your page.</p>
                <p class="PostTitle">About:</p>
                    <form class="AboutUser" action="UserSearch.html">
                        <textarea class="text" placeholder="User about text goes here"></textarea>
                        <input type="submit" value="Update about info">
                    </form>
                    <p class="PostTitle">Profile image:</p>
                    <p class="PostContent">Current profile image:</p>
                    <img class="ProfileImage" src="Image/Search.png">
                    <br />
                    <form class="AboutUser">
                        <input type="file">
                        <br />
                        <br />
                        <input type="submit" value="Update profile picture">
                    </form>
                </div>
            </div>
        </div>
    </body>
    <script src="script.js"></script>
</html>