<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/addpill.css">
    <script src="https://kit.fontawesome.com/7cb8d277e6.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>HOME</title>
</head>
<body>
<div class="base-container">
    
<div class = "pillsearch">
    <section class="medadd-form">
    <h1>Upload</h1>
    <form action="addpill" method="POST" ENCTYPE="multipart/form-data">
        <?php if(isset($messages)) {
            foreach ($messages as $message) {
                echo $messages;
            }
        }
        ?>
        <input name="name" type="text" placeholder="title">
        <input name="group" type="text" placeholder="group">
        <textarea name="description" rows="5" placeholder="description"></textarea>
        <input type="file" name="file">
        <button type="submit">send</button>
    </form>
    </section>
    <div class="profile-container">

        <div class="search">
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
            <div class="overflow">
            <ul id="myUL">
                <?php
                require_once 'public/phpview/selectnames.php';

                ?>

            </div>
            </ul>
        </div>
    </div>




</div>
    <nav>
        <ul class="menu">
            <img class="logo" src="public/img/logo.svg"><a href="#"></a></li>
            <li class="item">
                <div class="home">
                    <a href="/home">
                        <i class="fas fa-home"></i>
                        <span class="nav__text">Home</span>
                    </a>
                </div>
            </li>

            <li class="item">
                <a href="/pills">
                    <i class="fas fa-pills"></i>
                    <span class="nav__text">Pils</span>
                </a>
            </li>

            <li class="item">
                <a href="#">
                    <i class="fas fa-stopwatch"></i>
                    <span class="nav__text">Alarm</span>
                </a>
            </li>

            <li class="item has-submenu">
                <a href="#">
                    <i class="fas fa-cog"></i>
                    <span class="nav__text">Settings</span>
                </a>
                <ul class="submenu">
                    <li class="subitem"><a href="#">About</a></li>


                    <li class="subitem">
                        <form class="logout" action="logout" method="POST">
                            <button type="submit">Logout</button>
                        </form>
                </ul>
            </li>


            <!-- <li class="item button"><a href="#">Log In</a></li>
             <li class="item button secondary"><a href="#">Sign Up</a></li>-->
            <li class="toggle"><a href="#"><i class="fas fa-bars"></i></a></li>
        </ul>
    </nav>

</div>

<script type="text/javascript" src="public/js/pills.js"></script>


</body>
