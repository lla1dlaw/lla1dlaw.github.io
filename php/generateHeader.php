<?php

function generateHeader()
{
    echo "<div id='header-container'>
            <header>
                <div id=banner-container>
                    <a href='../index.php'><img id='banner-img' src='./assets/images/microchip.png' alt='Logo' class='banner'></a>
                    <p id='banner-text' class='banner'>LIAM LAIDLAW</p>
                </div>
                <nav id='nav-bar'>
                    <a class='nav-bar-element' href='../index.php'>Home</a>
                    <a class='nav-bar-element' href='../about.php'>About Me</a>
                    <a class='nav-bar-element' href='../projects.php'>Projects</a>
                    <a class='nav-bar-element' href='../contact.php'>Contact</a>
                    <a id='linked-in-link' class='nav-bar-element' href='https://www.linkedin.com/in/liam-laidlaw-8b86a8294/' target='_blank'><i class='fa-brands fa-linkedin'></i></a>
                    <a id='github-link' class='nav-bar-element' href='https://github.com/lla1dlaw' target='_blank'><i class='fa-brands fa-square-github'></i></a>
                </nav>
            </header>
        </div>";
}

generateHeader();
