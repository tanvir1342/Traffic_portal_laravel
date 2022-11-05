<html>
    <link href="css.side" rel="stylesheet">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap");
        :root{--header-height: 3rem;--nav-width: 68px;
            --first-color: #32344e;
            --first-color-light: #b8b4c9;
            --white-color: #F7F6FB;
            --body-font: 'Nunito', sans-serif;
            --normal-font-size: 1rem;
            --z-fixed: 100}*,::before,::after{box-sizing: border-box}
            body{
                position: relative;
                margin: var(--header-height) 0 0 0;
                padding: 0 1rem;font-family: var(--body-font);
                font-size: var(--normal-font-size);
                }
                a{text-decoration: none}.header{width: 100%;
                height: var(--header-height);
                position: fixed;top: 0;left: 0;display: flex;
                align-items: center;
                justify-content: space-between;
                padding: 0 1rem;
                background-color: var(--white-color);
                z-index: var(--z-fixed);transition: .5s}.header_toggle{color: var(--first-color);font-size: 1.5rem;cursor: pointer
                }
                .header_img{width: 35px;height: 35px;display: flex;justify-content: center;border-radius: 50%;overflow: hidden}
                .header_img img{width: 40px}
                .l-navbar{position: fixed;top: 0;left: -30%;width: var(--nav-width);
                    height: 100vh;background-color: var(--first-color);
                    padding: .5rem 1rem 0 0;transition: .5s;
                    z-index: var(--z-fixed)
                }
                .nav{
                    height: 100%;
                    display: flex;flex-direction: column;justify-content: space-between;overflow: hidden
                }
                .nav_logo, .nav_link{
                    display: grid;
                    grid-template-columns: max-content max-content;align-items: center;
                    column-gap: 1rem;padding: .5rem 0 .5rem 1.5rem}
                .nav_logo{margin-bottom: 2rem}
                .nav_logo-icon{font-size: 1.25rem;color: var(--white-color)}
                .nav_logo-name{color: var(--white-color);font-weight: 700}
                .nav_link{
                    position: relative;
                     color: var(--first-color-light);
                     margin-bottom: 1.5rem;transition: .3s}
                     .nav_link:hover{color: var(--white-color)}
                     .nav_icon{font-size: 1.25rem}
                     .show{left: 0}
                     .body-pd{padding-left: calc(var(--nav-width) + 1rem)}
                     .active{color: var(--white-color)}
                     .active::before{content: '';
                     position: absolute;left: 0;
                     width: 2px;height: 32px;
                     background-color: var(--white-color)}.
                     height-100{height:100vh}
                     @media screen and (min-width: 768px){body{margin: calc(var(--header-height) + 1rem) 0 0 0;padding-left: calc(var(--nav-width) + 2rem)}.header{height: calc(var(--header-height) + 1rem);padding: 0 2rem 0 calc(var(--nav-width) + 2rem)}.header_img{width: 40px;height: 40px}.header_img img{width: 45px}.l-navbar{left: 0;padding: 1rem 1rem 0 0}.show{width: calc(var(--nav-width) + 156px)}.body-pd{padding-left: calc(var(--nav-width) + 188px)}}
    </style>
    <body id="body-pd">
        <header class="header" id="header">
            <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
            {{-- <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div> --}}
        </header>
        <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div>
                     <a href="#" class="nav_logo"><i class='bx bxs-traffic' style='color:#ffffff'  ></i><span class="nav_logo-name">Traffic Portal</span> </a>
                    <div class="nav_list">
                         <a href="#" class="nav_link"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> </a> 
                         <a href="#" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Static</span> </a> 
                         <a href="#" class="nav_link"> <i class='bx bxs-objects-horizontal-center bx-tada bx-flip-horizontal nav_icon' ></i> <span class="nav_name">Traffic Points</span> </a> 
                         <a href="#" class="nav_link"> <i class='bx bx-mail-send bx-tada bx-flip-horizontal nav_icon'></i> <span class="nav_name">Send Mail</span> </a>
                         <a href="#" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Profile</span> </a> 
                    </div>
                </div> <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
            </nav>
        </div>





        <script>
                document.addEventListener("DOMContentLoaded", function(event) {   
                const showNavbar = (toggleId, navId, bodyId, headerId) =>{
                const toggle = document.getElementById(toggleId),
                nav = document.getElementById(navId),
                bodypd = document.getElementById(bodyId),
                headerpd = document.getElementById(headerId)
                
                // Validate that all variables exist
                if(toggle && nav && bodypd && headerpd){
                toggle.addEventListener('click', ()=>{
                // show navbar
                nav.classList.toggle('show')
                // change icon
                toggle.classList.toggle('bx-x')
                // add padding to body
                bodypd.classList.toggle('body-pd')
                // add padding to header
                headerpd.classList.toggle('body-pd')
                })
                }
                }
                
                showNavbar('header-toggle','nav-bar','body-pd','header')
                
                /*===== LINK ACTIVE =====*/
                const linkColor = document.querySelectorAll('.nav_link')
                
                function colorLink(){
                if(linkColor){
                linkColor.forEach(l=> l.classList.remove('active'))
                this.classList.add('active')
                }
                }
                linkColor.forEach(l=> l.addEventListener('click', colorLink))
                
                    // Your code to run since DOM is loaded and ready
                });
        </script>
</html>