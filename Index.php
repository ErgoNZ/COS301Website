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
                    <li class="PcCheck"><a class="CurrentPage" href="Index.php">Home Page</a></li>
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
                                    <a class="nav-link" id="CurrentPage" href="Index.php">Home</a>
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
                <img class="UserImagePost" src="Image/Placeholder.png" alt="Profile image of user">
                <p class="PostTitle">This is a title for a post</p>
                <P class="PostContent">This is the normal text for the posts. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent quis rhoncus purus. Vestibulum dignissim ipsum non arcu porta sollicitudin. Sed quis urna aliquet, sagittis nibh et, vehicula erat. Curabitur iaculis, turpis vel pharetra consectetur, ante orci tempus nisi, vel interdum ligula eros non justo. Aliquam hendrerit ut nisl ac porta. Aenean consequat pellentesque vestibulum. Nulla accumsan in massa vel feugiat. Nullam ut posuere lorem, nec iaculis elit. Nunc pharetra lacus eu elementum porta. Nam in sodales turpis. Integer placerat, mauris quis sagittis varius, turpis est vehicula justo, sit amet tincidunt lectus nisi a neque.</P>
                <p class="Date">By Usernamehere <br> 18:20 01/02/2022</p>
            </div>
                <div class="Item"> 
                    <p class="MainText">Hello World!</p>
                </div>
            </div>
        </div>
    </body>
    <script src="script.js"></script>
</html>