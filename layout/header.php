
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freelance Coders</title>
    <link rel="icon" href="images/LOGO/bracket.png" type="image/png">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/Home/section.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
      #load-container{
        width: 100%;
        height: 100%;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 10000;
        text-align: center;
        padding-top: 40vh;
        background-color: #d2d9f8a8;
        display: none;
      }
      .loading {
        display: inline-block;
        position: relative;
        width: 80px;
        height: 80px;
      }
      .loading div {
        display: inline-block;
        position: absolute;
        left: 8px;
        width: 16px;
        background: #9dafff;
        border-radius: 10px;
        animation: lds-facebook 1.2s cubic-bezier(0, 0.5, 0.5, 1) infinite;
      }
      .loading div:nth-child(1) {
        left: 8px;
        animation-delay: -0.24s;
      }
      .loading div:nth-child(2) {
        left: 32px;
        animation-delay: -0.12s;
      }
      .loading div:nth-child(3) {
        left: 56px;
        animation-delay: 0;
      }
      @keyframes lds-facebook {
        0% {
          top: 8px;
          height: 64px;
        }
        50%, 100% {
          top: 24px;
          height: 32px;
        }
      }

    </style>
  </head>
<body>
  <div id="load-container">
    <div class="loading" id="my-button"><div></div><div></div><div></div></div>
  </div>
  <script>
    window.onload = function () {
        var loadContainer = document.getElementById('load-container');
        var laddaButton = document.getElementById('my-button');
        loadContainer.style.display = 'block';
        setTimeout(function () {
            loadContainer.style.display = 'none';
        }, 2000);
    };
</script>
  <script>
    //background
document.body.addEventListener("pointermove", (e)=>{
    const { currentTarget: el, clientX: x, clientY: y } = e;
    const { top: t, left: l, width: w, height: h } = el.getBoundingClientRect();
    el.style.setProperty('--posX',  x-l-w/2);
    el.style.setProperty('--posY',  y-t-h/2);
  })
  </script>
<section id="Login-Container">
    <div id="Login">
        <strong>
            <h2 id="Login-title">Login</h2>
            <i class="loginClose fa fa-close"></i>
        </strong>
        <br>
        <form action="server/server-login.php" method="post">
            <label for="">User Name :</label>
            <input type="text" name="loginUser" id="loginUser" maxlength="20">
            <br>
            <br>
            <br>
            <br>
            <label for="">Password : </label>
            <input type="password" name="loginPass" id="loginPass" minlength="5" maxlength="20">
            <br>
            <br>
            <br>
            <p id="loginMessage"></p>
            <br>
            <br>
            <input type="reset" name="" id="" value="Reset">
            <input type="button" name="" id="login-submit" value="Login">
            
        </form>
    </div>
</section>
<section id="Register-Container">
    <div id="Register">
        <strong>
            <h2 id="Register-title">Register</h2>
            <i class="registerClose fa fa-close"></i>
        </strong>
        <br>
        <form action="server/server-register.php" method="post">
            <label for="">Real Name :</label>
            <input type="text" name="registerName" id="registerName" maxlength="20">
            <br>
            <br>
            <br>
            <br>
            <label for="">User Name :</label>
            <input type="text" name="registerUser" id="registerUser" maxlength="20">
            <br>
            <br>
            <br>
            <br>
            <label for="">Password : </label>
            <input type="password" name="registerPass" id="registerPass" minlength="5" maxlength="20">
            <br>
            <br>
            <br>
            <label for="">rePassword : </label>
            <input type="password" name="" id="registerRePass" minlength="5" maxlength="20">
            <br>
            <br>
            <br>
            <p id="RegisterMessage"></p>
            <br>
            <br>
            <input type="reset" name="" id="" value="Reset">
            <input type="button" name="" id="register-submit" value="Login">
        </form>
    </div>
</section>
  
<div id="header-container">
    <header id="header">
        <!-- لوگو -->
        <div id="logo-container">
            <h1 id="logo"><a href="index.html">Freelance Coders <div id="anime-con"><span id="anime-4"></span></div></a></h1>
        </div>
        <!-- منو -->
            <div id="menu-container">
                <div id="side-bar-btn">
                    <div id="side-bar-btn-line1"></div>
                    <div id="side-bar-btn-line"></div>
                    <div id="side-bar-btn-line2"></div>
                </div>
                <!-- ورود و ثبت نام -->
                <?php
                    if(!(isset($_SESSION['state_login']) && $_SESSION['state_login'] === true)){
                ?>
                <div id="reg-log">
                    <p class="reg-log" id="login" onmouseenter="showMoraba()" onmouseleave="hideMoraba()" >LOGIN</p>
                    <p class="reg-log" id="reg" onmouseenter="showMoraba1()" onmouseleave="hideMoraba1()" >REGISTER</p>
                    <span id="moraba"></span>
                    <span id="moraba1"></span>
                </div>
                <?php
                    }
                    elseif(isset($_SESSION['state_login']) && $_SESSION['state_login'] === true){
                ?>
                <div id="profile">
                    <div id="profile-child">
                        <div>پروفایل</div>
                        <div>دوره های من</div>
                        <?php
                         if(isset($_SESSION['state_login']) && $_SESSION['state_login'] === true && $_SESSION['type'] === 'admin'){
                            ?>
                            <div><a href="admin/index.php">مدیریت</a></div>
                            <?php
                         }
                        ?>
                        <?php
                        if(isset($_SESSION['state_login']) && $_SESSION['state_login'] === true)
                        {
                        ?>
                        <div onclick="location.href='server/server-logout.php'" style="cursor:pointer">خروج</div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <?php
                }
                ?>
                <script>
                    const profile = document.getElementById('profile')
                    const profileChild = document.getElementById('profile-child')

                    let isProf =true
                    profile.addEventListener('click',()=>{
                        if(isProf == true){
                            profileChild.style.display = 'flex';
                            isProf =false
                        }
                        else{
                            profileChild.style.display = 'none';
                            isProf =true
                        }
                    })
                </script>
                <!-- لیست -->
                <nav id="list">
                    <ul id="list-ul">
                        <div id="after-list"></div>

                        <li id="Home" class="list-item fa-solid fa-house"></li>

                        <li id="learn" class="list-item fa-solid fa-graduation-cap">
                        </li>

                        <li id="contact" class="list-item fa-solid fa-id-card"></li>

                        <li id="about" class="list-item fa-solid fa-person-circle-exclamation"></li>

                        <label id="search" for="search-input" class="list-item fa-brands fa-searchengin">
                        </label>

                        <div id="list-menu">
                            <ul id="list-menu-ul">
                                <li><a href="">Front End</a></li>
                                <li><a href="">Back End</a></li> 
                                <li><a href="">Full Stack Developer</a></li>
                                <li><a href="">Data Science</a></li>
                                <li><a href="">Game Developer</a></li>
                                <li><a href="">Mobile Developer</a></li>
                                <li><a href="">UI/UX Designer</a></li>
                                <li><a href="">System Administrator</a></li>
                                <li><a href="">Software Engineer</a></li>
                                <li><a href="">Software Architect</a></li>
                                <li><a href="">Software Tester</a></li>
                            </ul>
                            <div id="border-1"></div>
                            <div id="border-2"></div>
                        </div>
                    </ul>
                </nav>
            </div>
            <div id="search-bar">
            <input id="search-input" type="search" placeholder="Search" spellcheck="true">
    </header>
</div>
