<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/home.css">
    <script src="https://kit.fontawesome.com/7cb8d277e6.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>HOME</title>
</head>
<body>
<div class="base-container">
    <div class="homecontent">
        <div class="profile-container">

                <div class="profile-card">

                    <div class="card-header">
                        <?php
                        require_once 'public/phpview/userdet.php';

                        ?>
                      <div class="pic">
                        <i class="fas fa-user-circle"></i>
                      </div>
                    </div>
                    <div class="card-footer">
                        <form class="accountinfo"></form>
                            <div class="info">
                                <?php
                                require_once 'public/phpview/userdetails.php';

                                ?>
                            </div>
                        </form>
                    </div>
                  </div>
                
        
            <form class="status2">
                <ul id="myUL">
                <?php
                require_once 'public/phpview/selectdiseases.php';

                ?>

                </ul>
                <a href="/addpill">
                    <i class="fas fa-plus"></i>
                </a>
            </form>
            
        </div>
    <table class ="tabelka"  id="timeTable">
        <th></th>
        <th class="titelCell" align="center">00</th>
        <th class="titelCell" align="center">01</th>
        <th class="titelCell" align="center">02</th>
        <th class="titelCell" align="center">03</th>
        <th class="titelCell" align="center">04</th>
        <th class="titelCell" align="center">05</th>
        <th class="titelCell" align="center">06</th>
        <th class="titelCell" align="center">07</th>
        <th class="titelCell" align="center">08</th>
        <th class="titelCell" align="center">09</th>
        <th class="titelCell" align="center">10</th>
        <th class="titelCell" align="center">11</th>
        <th class="titelCell" align="center">12</th>
        <th class="titelCell" align="center">13</th>
        <th class="titelCell" align="center">14</th>
        <th class="titelCell" align="center">15</th>
        <th class="titelCell" align="center">16</th>
        <th class="titelCell" align="center">17</th>
        <th class="titelCell" align="center">18</th>
        <th class="titelCell" align="center">19</th>
        <th class="titelCell" align="center">20</th>
        <th class="titelCell" align="center">21</th>
        <th class="titelCell" align="center">22</th>
        <th class="titelCell" align="center">23</th>

        <tr>
            <th class="dayCell"> Mon</th>
            <td class="ticCell" id="t10" ></td>
            <td class="ticCell" id="t11" ></td>
            <td class="ticCell" id="t12" ></td>
            <td class="ticCell" id="t13" ></td>
            <td class="ticCell" id="t14" ></td>
            <td class="ticCell" id="t15" ></td>
            <td class="ticCell" id="t16" ></td>
            <td class="ticCell" id="t17" ></td>
            <td class="ticCell" id="t18" ></td>
            <td class="ticCell" id="t19" ></td>
            <td class="ticCell" id="t110" ></td>
            <td class="ticCell" id="t111" ></td>
            <td class="ticCell" id="t112" ></td>
            <td class="ticCell" id="t113" ></td>
            <td class="ticCell" id="t114" ></td>
            <td class="ticCell" id="t115" ></td>
            <td class="ticCell" id="t116" ></td>
            <td class="ticCell" id="t117" ></td>
            <td class="ticCell" id="t118" ></td>
            <td class="ticCell" id="t119" ></td>
            <td class="ticCell" id="t120" ></td>
            <td class="ticCell" id="t121" ></td>
            <td class="ticCell" id="t122" ></td>
            <td class="ticCell" id="t123" ></td>

        </tr>
        <tr>
            <th class="dayCell"> Tue</th>
            <td class="ticCell" id="t20" ></td>
            <td class="ticCell" id="t21" ></td>
            <td class="ticCell" id="t22" ></td>
            <td class="ticCell" id="t23" ></td>
            <td class="ticCell" id="t24" ></td>
            <td class="ticCell" id="t25" ></td>
            <td class="ticCell" id="t26" ></td>
            <td class="ticCell" id="t27" ></td>
            <td class="ticCell" id="t28" ></td>
            <td class="ticCell" id="t29" ></td>
            <td class="ticCell" id="t210" ></td>
            <td class="ticCell" id="t211" ></td>
            <td class="ticCell" id="t212" ></td>
            <td class="ticCell" id="t213" ></td>
            <td class="ticCell" id="t214" ></td>
            <td class="ticCell" id="t215" ></td>
            <td class="ticCell" id="t216" ></td>
            <td class="ticCell" id="t217" ></td>
            <td class="ticCell" id="t218" ></td>
            <td class="ticCell" id="t219" ></td>
            <td class="ticCell" id="t220" ></td>
            <td class="ticCell" id="t221" ></td>
            <td class="ticCell" id="t222" ></td>
            <td class="ticCell" id="t223" ></td>
        </tr>
        <tr>
            <th class="dayCell"> Wed</th>
            <td class="ticCell" id="t30" ></td>
            <td class="ticCell" id="t31" ></td>
            <td class="ticCell" id="t32" ></td>
            <td class="ticCell" id="t33" ></td>
            <td class="ticCell" id="t34" ></td>
            <td class="ticCell" id="t35" ></td>
            <td class="ticCell" id="t36" ></td>
            <td class="ticCell" id="t37" ></td>
            <td class="ticCell" id="t38" ></td>
            <td class="ticCell" id="t39" ></td>
            <td class="ticCell" id="t310" ></td>
            <td class="ticCell" id="t311" ></td>
            <td class="ticCell" id="t312" ></td>
            <td class="ticCell" id="t313" ></td>
            <td class="ticCell" id="t314" ></td>
            <td class="ticCell" id="t315" ></td>
            <td class="ticCell" id="t316" ></td>
            <td class="ticCell" id="t317" ></td>
            <td class="ticCell" id="t318" ></td>
            <td class="ticCell" id="t319" ></td>
            <td class="ticCell" id="t320" ></td>
            <td class="ticCell" id="t321" ></td>
            <td class="ticCell" id="t322" ></td>
            <td class="ticCell" id="t323" ></td>
        </tr>

        <tr>
            <th class="dayCell"> Thu</th>
            <td class="ticCell" id="t40" ></td>
            <td class="ticCell" id="t41" ></td>
            <td class="ticCell" id="t42" ></td>
            <td class="ticCell" id="t43" ></td>
            <td class="ticCell" id="t44" ></td>
            <td class="ticCell" id="t45" ></td>
            <td class="ticCell" id="t46" ></td>
            <td class="ticCell" id="t47" ></td>
            <td class="ticCell" id="t48" ></td>
            <td class="ticCell" id="t49" ></td>
            <td class="ticCell" id="t410" ></td>
            <td class="ticCell" id="t411" ></td>
            <td class="ticCell" id="t412" ></td>
            <td class="ticCell" id="t413" ></td>
            <td class="ticCell" id="t414" ></td>
            <td class="ticCell" id="t415" ></td>
            <td class="ticCell" id="t416" ></td>
            <td class="ticCell" id="t417" ></td>
            <td class="ticCell" id="t418" ></td>
            <td class="ticCell" id="t419" ></td>
            <td class="ticCell" id="t420" ></td>
            <td class="ticCell" id="t421" ></td>
            <td class="ticCell" id="t422" ></td>
            <td class="ticCell" id="t423" ></td>
        </tr>

        <tr>
            <th class="dayCell"> Fri</th>
            <td class="ticCell" id="t50" ></td>
            <td class="ticCell" id="t51" ></td>
            <td class="ticCell" id="t52" ></td>
            <td class="ticCell" id="t53" ></td>
            <td class="ticCell" id="t54" ></td>
            <td class="ticCell" id="t55" ></td>
            <td class="ticCell" id="t56" ></td>
            <td class="ticCell" id="t57" ></td>
            <td class="ticCell" id="t58" ></td>
            <td class="ticCell" id="t59" ></td>
            <td class="ticCell" id="t510" ></td>
            <td class="ticCell" id="t511" ></td>
            <td class="ticCell" id="t512" ></td>
            <td class="ticCell" id="t513" ></td>
            <td class="ticCell" id="t514" ></td>
            <td class="ticCell" id="t515" ></td>
            <td class="ticCell" id="t516" ></td>
            <td class="ticCell" id="t517" ></td>
            <td class="ticCell" id="t518" ></td>
            <td class="ticCell" id="t519" ></td>
            <td class="ticCell" id="t520" ></td>
            <td class="ticCell" id="t521" ></td>
            <td class="ticCell" id="t522" ></td>
            <td class="ticCell" id="t523" ></td>
        </tr>
        <tr>
            <th class="dayCell"> Sat</th>
            <td class="ticCell" id="t60" ></td>
            <td class="ticCell" id="t61" ></td>
            <td class="ticCell" id="t62" ></td>
            <td class="ticCell" id="t63" ></td>
            <td class="ticCell" id="t64" ></td>
            <td class="ticCell" id="t65" ></td>
            <td class="ticCell" id="t66" ></td>
            <td class="ticCell" id="t67" ></td>
            <td class="ticCell" id="t68" ></td>
            <td class="ticCell" id="t69" ></td>
            <td class="ticCell" id="t610" ></td>
            <td class="ticCell" id="t611" ></td>
            <td class="ticCell" id="t612" ></td>
            <td class="ticCell" id="t613" ></td>
            <td class="ticCell" id="t614" ></td>
            <td class="ticCell" id="t615" ></td>
            <td class="ticCell" id="t616" ></td>
            <td class="ticCell" id="t617" ></td>
            <td class="ticCell" id="t618" ></td>
            <td class="ticCell" id="t619" ></td>
            <td class="ticCell" id="t620" ></td>
            <td class="ticCell" id="t621" ></td>
            <td class="ticCell" id="t622" ></td>
            <td class="ticCell" id="t623" ></td>
        </tr>
        <tr>
            <th class="dayCell"> Sun</th>
            <td class="ticCell" id="t70" ></td>
            <td class="ticCell" id="t71" ></td>
            <td class="ticCell" id="t72" ></td>
            <td class="ticCell" id="t73" ></td>
            <td class="ticCell" id="t74" ></td>
            <td class="ticCell" id="t75" ></td>
            <td class="ticCell" id="t76" ></td>
            <td class="ticCell" id="t77" ></td>
            <td class="ticCell" id="t78" ></td>
            <td class="ticCell" id="t79" ></td>
            <td class="ticCell" id="t710" ></td>
            <td class="ticCell" id="t711" ></td>
            <td class="ticCell" id="t712" ></td>
            <td class="ticCell" id="t713" ></td>
            <td class="ticCell" id="t714" ></td>
            <td class="ticCell" id="t715" ></td>
            <td class="ticCell" id="t716" ></td>
            <td class="ticCell" id="t717" ></td>
            <td class="ticCell" id="t718" ></td>
            <td class="ticCell" id="t719" ></td>
            <td class="ticCell" id="t720" ></td>
            <td class="ticCell" id="t721" ></td>
            <td class="ticCell" id="t722" ></td>
            <td class="ticCell" id="t723" ></td>
        </tr>
    </table>
        <form method="POST">

            <button type="button" class="saveBtn" id="btn-save-TS">Save Schedule</button>
            <label for="cars">Choose a pill:</label>
            <select name="pills" id="pills" onchange="tableupdate()">
                <?php
                require_once 'public/phpview/selectnamesschelude.php';

                ?>

            </select>
        </form>
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
                        <button class="subitem" type="submit">Logout</button>
                </li>
            </ul>


        
       <!-- <li class="item button"><a href="#">Log In</a></li>
        <li class="item button secondary"><a href="#">Sign Up</a></li>-->
        <li class="toggle"><a href="#"><i class="fas fa-bars"></i></a></li>
    </ul>
</nav>

</div>
<script type="text/javascript" src="public/js/test.js"></script>

<script src="test.js"></script>
</body>
