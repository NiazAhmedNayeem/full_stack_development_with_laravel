<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>NIAZ</title>
    <link rel="icon" href="{{'/'}}website/assets/icon.png" type="image/x-icon">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- utility css file -->
    <link rel="stylesheet" href="{{'/'}}website/css/utility.css">
    <!-- style css file -->
    <link rel = "stylesheet" href = "{{'/'}}website/css/style.css">
    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>

<!-- Scroll to top button with scroll progress  -->
<div id="progress">
    <span id="progress-value"><i class="fas fa-angle-up"></i></span>
</div>



<!-- navbar section -->
<nav class = "navbar">
    <div class = "container">
        <div class = "brand-and-toggler">
            <a href = "index.html" class = "navbar-brand"><img src="{{'/'}}website/assets/logo.png" width="50" height="50"/></a>
            <button type = "button" class = "navbar-toggler" id = "navbar-toggler">
            <span>
              <i class = "fas fa-bars"></i>
            </span>
            </button>
        </div>

        <div class = "navbar-collapse">
            <ul class = "navbar-nav">
                <li class = "nav-item">   <!--"nav-active" for nav selection -->
                    <a href = "index.html" class = "nav-link">home</a>
                </li>
                <li class = "nav-item">
                    <a href = "#about" class = "nav-link">about</a>
                </li>
                <li class = "nav-item">
                    <a href = "#resume" class = "nav-link">resume</a>
                </li>
                <li class = "nav-item">
                    <a href = "#services" class = "nav-link">services</a>
                </li>
                <li class = "nav-item">
                    <a href = "#skills" class = "nav-link">skills</a>
                </li>
                <li class = "nav-item">
                    <a href = "#projects" class = "nav-link">projects</a>
                </li>
                <li class = "nav-item">
                    <a href = "#contact" class = "nav-link">contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- end of navbar section -->



<!-- home page -->
<section class = "home container ">
    <div class = "row">
        <div class = "row-left">
            <h3>hello!</h3>
            <h1>i'm <span>Niaz Ahmed</span></h1>
            <!-- <h2> Software Engineer</h2> -->
            <h2><span class="auto-type-1"></span> </h2>
            <div class = "home-pg-btn">
                <a href="#about"><button type = "button" class = "btn">hire me</button></a>
                <a href="#services"><button type = "button" class = "btn">my works</button></a>

                <!-- ------------------------------------- -->

                <!-- background music add here-->
                <div class="" >
                    <img src="{{'/'}}website/assets/play.png" style="height: 55px; margin-top: 14px;" id="icon-1"/>
                </div>

                <audio id="mySong">
                    <source src="{{'/'}}website/media/song.mp3" type="audio/mp3">
                </audio>

                <!-- -------------------------------------- -->
            </div>
        </div>

        <div class = "row-right">
            <div class = "img-border">
                <div class = "img-container">
                    <img src = "{{'/'}}website/assets/my-photo-home.jpg" alt = "my photo">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of home page -->

<!-- -------------------------------------------------------------------------- -->


<!-- about page -->
<section id="about" class = "about container">
    <div class = "title">
        <h2>about</h2>
        <div>
            <h2 style="color:#72B626">about me</h2>
        </div>
    </div>

    @foreach($abouts as $about)
    <div class = "row">
        <div class = "row-left">
            <img src = "{{$about->image}}" alt = "about photo">
        </div>

        <div class = "row-right">
            <h1 class = "text">{{$about->about}}</h1>
            <div class = "about-content">
                <ul>
                    <li class = "text">
                        <span>Name: </span>
                        <span>{{$about->name}}</span>
                    </li>
                    <li class = "text">
                        <span>Date of Birth: </span>
                        <span>{{$about->dob}}</span>
                    </li>
                    <li class = "text">
                        <span>Address: </span>
                        <span>{{$about->address}}</span>
                    </li>
                    <li class = "text">
                        <span>Email: </span>
                        <span>{{$about->email}}</span>
                    </li>
                    <li class = "text">
                        <span>Zip code: </span>
                        <span>{{$about->zip}}</span>
                    </li>
                    <li class = "text">
                        <span>Phone: </span>
                        <span>+88{{$about->phone}}</span>
                    </li>
                </ul>
            </div>

            <h3>{{$about->project}} <span class="auto-type-3"></span></h3>
            <a href="{{$about->url}}" target="blank"><button type = "button" class = "btn">download cv</button></a>
        </div>
        @endforeach
    </div>
</section>
<!-- end of about page -->

<!-- -------------------------------------------------------------------------- -->


<!-- resume page -->
<section id="resume" class = "resume container">
    <div class = "title">
        <h2>resume</h2>
        <div>
            <h2 style="color:#72B626">my resume</h2>
        </div>
    </div>

        @foreach($resumes as $resume)

            <h1 class = "text">{{$resume->res}}</h1>
        @endforeach


    <div class = "row">
        @foreach($resumes as $resume)
        <div class = "item">
            <div class = "icon">
                <i class = "fas fa-graduation-cap"></i>
            </div>
            <span>{{$resume->passyr}}</span>
            <h2>{{$resume->department}} - <span>{{$resume->major}}</span></h2>
            <p class = "text">{{$resume->institute}}</p>
        </div>
        @endforeach
    </div>

</section>
<!-- end of resume page -->

<!-- -------------------------------------------------------------------------- -->


<!-- services page -->
<section id="services" class = "services container">
    <div class = "title">
        <h2>services</h2>
        <div>
            <h2 style="color:#72B626">my services</h2>
        </div>
    </div>

    <div class = "row">
        <div class = "item">
            <span><i class = "fab fa-sketch"></i></span>
            <h2>web design</h2>
        </div>

        <div class = "item">
            <span><i class = "fas fa-camera-retro"></i></span>
            <h2>photography</h2>
        </div>

        <div class = "item">
            <span><i class = "fas fa-code"></i></span>
            <h2>web developer</h2>
        </div>

        <div class = "item">
            <span><i class = "fas fa-flask"></i></span>
            <h2>branding</h2>
        </div>

        <div class = "item">
            <span><i class = "fab fa-app-store"></i></span>
            <h2>app developing</h2>
        </div>

        <div class = "item">
            <span><i class = "fas fa-box-open"></i></span>
            <h2>product strategy</h2>
        </div>
    </div>

    <button type = "button" class = "btn">view more</button>
</section>
<!-- end of services page -->

<!-- -------------------------------------------------------------------------- -->


<!-- skills page -->
<section id="skills" class = "skills container">
    <div class = "title">
        <h2>skills</h2>
        <div>
            <h2 style="color:#72B626">my skills</h2>
        </div>
    </div>

    <div class = "row">

        <div class = "item">
            <div class = "item-text">
                <span>HTML5</span>
                <span class = "w-85">100%</span>
            </div>
            <div class = "progress">
                <div class = "progress-bar w-85"></div>
            </div>
        </div>

        <div class = "item">
            <div class = "item-text">
                <span>CSS</span>
                <span class = "w-80">80%</span>
            </div>
            <div class = "progress">
                <div class = "progress-bar w-80"></div>
            </div>
        </div>


        <div class = "item">
            <div class = "item-text">
                <span>PHP</span>
                <span class = "w-68">60%</span>
            </div>
            <div class = "progress">
                <div class = "progress-bar w-68"></div>
            </div>
        </div>


        <div class = "item">
            <div class = "item-text">
                <span>JavaScript</span>
                <span class = "w-75">75%</span>
            </div>
            <div class = "progress">
                <div class = "progress-bar w-75"></div>
            </div>
        </div>


        <div class = "item">
            <div class = "item-text">
                <span>Laravel</span>
                <span class = "w-75">75%</span>
            </div>
            <div class = "progress">
                <div class = "progress-bar w-75"></div>
            </div>
        </div>

        <div class = "item">
            <div class = "item-text">
                <span>Photoshop</span>
                <span class = "w-90">90%</span>
            </div>
            <div class = "progress">
                <div class = "progress-bar w-90"></div>
            </div>
        </div>


    </div>
</section>
<!-- end of skills page -->

<!-- -------------------------------------------------------------------------- -->


<!-- projects page -->
<section id="projects" class = "projects container">
    <div class = "title">
        <h2>projects</h2>
        <div>
            <h2 style="color:#72B626">my projects</h2>
        </div>
    </div>

    <div class = "row">
        <div class = "item">
            <div class = "item-overlay">
                <a href = "#">branding & illustration design</a>
                <h3>web design</h3>
            </div>
        </div>

        <div class = "item">
            <div class = "item-overlay">
                <a href = "#">branding & illustration design</a>
                <h3>web design</h3>
            </div>
        </div>

        <div class = "item">
            <div class = "item-overlay">
                <a href = "#">branding & illustration design</a>
                <h3>web design</h3>
            </div>
        </div>

        <div class = "item">
            <div class = "item-overlay">
                <a href = "#">branding & illustration design</a>
                <h3>web design</h3>
            </div>
        </div>

        <div class = "item">
            <div class = "item-overlay">
                <a href = "#">branding & illustration design</a>
                <h3>web design</h3>
            </div>
        </div>

        <div class = "item">
            <div class = "item-overlay">
                <a href = "#">branding & illustration design</a>
                <h3>web design</h3>
            </div>
        </div>
    </div>
</section>
<!-- end of projects page -->

<!-- -------------------------------------------------------------------------- -->


<!-- contact page -->
<section id="contact" class = "contact container">
    <div class = "title">
        <h2>contact</h2>
        <div>
            <h2 style="color:#72B626">get in touch</h2>
        </div>
    </div>

    <h1 class = "text">Ready to innovate? Grow? Discover your business potential. We invite you to get in touch - we look forward to hearing from you and answering your questions.</h1>

    <div class = "row">
        <div class = "col-left">
            <h2>feel free to ask us!</h2>
            <p class = "text">Fill in the form then one of our consultants will get back to you as soon as possible.</p>

            <div class = "contact-info">
                <span><i class = "fas fa-envelope-open"></i></span>
                <h3>
                    <span class = "text">mail me</span> <br>
                    developer.niaz@gmail.com
                </h3>
            </div>

            <div class = "contact-info">
                <span><i class = "fas fa-phone-square-alt"></i></span>
                <h3>
                    <span class = "text">call me</span> <br>
                    +880 1966 509310
                </h3>
            </div>

            <div class = "contact-social-links">
                <a href = "https://www.facebook.com/NiazAhmedNayeem/" target="blank">
                    <i class = "fab fa-facebook-f"></i>
                </a>
                <a href = "https://twitter.com/NiazAhmedNayeem" target="blank">
                    <i class = "fab fa-twitter"></i>
                </a>
                <a href = "https://github.com/NiazAhmedNayeem" target="blank">
                    <i class = "fab fa-github"></i>
                </a>
            </div>
        </div>

        <div class = "col-right">

            <form class = "contact-form" action="login.php" method="POST">

                <div class = "form-group">
                    <input type = "text" placeholder="your name" id="name" name="name">
                    <input type = "email" placeholder="your email" id="email" name="email">
                    <input type = "text" placeholder="your subject" id="subject" name="subject">
                </div>
                <textarea rows = "5" id="message"  placeholder="your message"  name="message"></textarea>
                <button type = "submit" class = "btn">send message</button>
            </form>

        </div>
    </div>
</section>
<!-- end of contact page -->

<!-- -------------------------------------------------------------------------- -->
<!-- visitor page -->
<section class = "visitor container">
    <div class = "title">
        <h2>Visitor</h2>
        <div>
            <h2 style="color:#72B626">Visitor</h2>
        </div>
    </div>

    <div class = "row">
        <div class = "item">
            <h1 style="color:#72B626">01</h1>
            <h2>online</h2>
        </div>


        <div class = "item">
            <h1 style="color:#72B626">13</h1>
            <h2>This week</h2>
        </div>

        <div class = "item">
            <h1 id="count" style="color:#72B626">00</h1>
            <h2>Total Visitor</h2>
        </div>


    </div>
</section>
<!-- end of visitor page -->

<!-- -------------------------------------------------------------------------- -->


<!-- footer -->
<footer class = "footer container">
    <div class = "row">
        <div class = "col">
            <!-- <img src="assets/logo.png" style="height: 70px; width: 150px; text-align: center;"/> -->
            <h3 class = "footer-title" style="color:#72B626">about</h3>
            <p class = "text" style="text-align: justify;">I'm Niaz Ahmed Nayeem, a website designer, and developer, I do professional work, with dedication and effort. If you want to make any kind of website contact with me. Thank you.</p>
            <div class = "social-links">
                <a href = "https://www.github.com/NiazAhmedNayeem/" target="blank"><i class = "fab fa-github"></i></a>
                <a href = "https://twitter.com/NiazAhmedNayeem" target="blank"><i class = "fab fa-twitter"></i></a>
                <a href = "https://www.facebook.com/NiazAhmedNayeem/" target="blank"><i class = "fab fa-facebook"></i></a>
                <a href = "https://www.instagram.com/niazahmednayeem/" target="blank"><i class = "fab fa-instagram"></i></a>
            </div>
        </div>

        <div class = "col">
            <h3 class = "footer-title" style="color:#72B626">links</h3>
            <div class = "footer-links">
                <a href = "index.html" class = "nav-text">
                    <i class = "fas fa-long-arrow-alt-right"></i>
                    home
                </a>
                <a href = "#about" class = "text">
                    <i class = "fas fa-long-arrow-alt-right"></i>
                    about
                </a>
                <a href = "#services" class = "text">
                    <i class = "fas fa-long-arrow-alt-right"></i>
                    services
                </a>
                <a href = "#contact" class = "text">
                    <i class = "fas fa-long-arrow-alt-right"></i>
                    contact
                </a>
            </div>
        </div>

        <div class = "col">
            <h3 class = "footer-title" style="color:#72B626">more</h3>
            <div class = "footer-links">
                <a href = "#" class = "text">
                    <i class = "fas fa-long-arrow-alt-right"></i>
                    web design
                </a>
                <a href = "#" class = "text">
                    <i class = "fas fa-long-arrow-alt-right"></i>
                    web development
                </a>
                <a href = "#" class = "text">
                    <i class = "fas fa-long-arrow-alt-right"></i>
                    business strategy
                </a>
                <a href = "#" class = "text">
                    <i class = "fas fa-long-arrow-alt-right"></i>
                    graphics design
                </a>
            </div>
        </div>

        <div class = "col">
            <h3 class = "footer-title" style="color:#72B626">have a question?</h3>
            <div>
            <span>
              <i class = "fas fa-map-marker-alt"></i>
            </span>
                <span class = "text">Mohammadpur, Dhaka, Bangladesh</span>
            </div>

            <div>
            <span>
              <i class = "fas fa-phone"></i>
            </span>
                <span class = "text">+880 1966 509310</span>
            </div>

            <div>
            <span>
              <i class = "fas fa-envelope"></i>
            </span>
                <span class = "text">developer.niaz@gmail.com</span>
            </div>

            <div>
            <span>
              <i class = "fas fa-globe-asia"></i>
            </span>
                <a href="https://niazahmednayeem.github.io/portfolio/" target="blank"> <span class = "text">niazahmednayeem.github.io/portfolio</span></a>
            </div>

        </div>
    </div>

    <div class = "footer-text">
        <p class = "text" style="color:#72B626">&copy; 2023 All Rights Reserved | Niaz </p>
    </div>
</footer>
<!-- end of footer -->


<!-- custom js file -->
<script src="{{'/'}}website/js/script.js"></script>

<script src="https://unpkg.com/typed.js@2.0.132/dist/typed.umd.js"></script>

<!-- Setup and start animation! -->
<script>
    var typed = new Typed('.auto-type-1', {
        strings: ['Software Engineer', 'A FREELANCE WEB DESIGNER and developer'],
        typeSpeed: 50,
        backSpeed: 20,
        loop: true
    });
</script>


<script>
    var typed = new Typed('.auto-type-3', {
        strings: ['Project complete'],
        typeSpeed: 50,
        backSpeed: 50,
        loop: true
    });
</script>


<!-- background music add here-->
<script>
    var mySong = document.getElementById("mySong");
    var icon = document.getElementById("icon-1");
    icon.onclick=function(){
        if(mySong.paused) {
            mySong.play();
            icon.src = "{{'/'}}website/assets/paused.png";
        }
        else {
            mySong.pause();
            icon.src = "{{'/'}}website/assets/play.png";
        }
    }
</script>


<!-- for visitor count -->
<script>
    const countEl = document.getElementById('count');

    updateVisitCount();

    function updateVisitCount(){
        fetch('https://api.countapi.xyz/update/niazahmednayeem.github.io/portfolio/?amount=1')
            .then(res => res.json())
            .then(res => {
                countEl.innerHTML = res.value;
            });
    }
</script>

</body>
</html>
