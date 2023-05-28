<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>

    <title>Library</title>

    <link rel="stylesheet" type="text/css" href="{{asset('welcome/css/bootstrap.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('welcome/css/font-awesome.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('welcome/css/style.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('welcome/css/responsive.css')}}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/686ef0aebd.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="{{asset('images/logo-black.svg')}}">
    <style>
        html {
            scroll-behavior: smooth;
        }
        .social a{
            box-sizing: border-box;
            margin: 0 15px;
            color: #fff;
        }
        .social a i{
            font-size: 24px;
            color: #fff;
        }
        .footer_link{
            display: block;
            color: #fff;
            text-decoration: none;
        }
        .footer_link:hover{
            color: #fff;
            text-decoration: none;
        }

    </style>
</head>

<body>

<div class="hero_area">
    <header class="header_section">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
                <a class="navbar-brand" href="{{route('index')}}">
            <span>
        IITU Library
            </span>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class=""> </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#categories">Categories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#accordion"> FAQ </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#blog"> Blog </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact Us</a>
                        </li>
                        @auth
                            <li class="nav-item"><a href="{{ route('dashboard') }}" class="nav-link">Home</a></li>
                        @else
                            <li class="nav-item"><a href="{{ route('index') }}" class="nav-link">Log in</a></li>
                        @endauth
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <section class="slider_section ">
        <div id="customCarousel1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="detail-box">
                                    <h2>
                                        IITU Library
                                    </h2>
                                    <h1>
                                        International IT University
                                    </h1>
                                    <p>
                                        The library of the International University of Information Technologies was
                                        organized in 2009 as a structural unit of the university. The library's fund
                                        consists of educational, methodical and scientific literature on traditional and
                                        electronic media in three languages: Kazakh, Russian and English.

                                        The library's mission is TO READ, STUDY, AND EXPLORE.
                                    </p>
                                    <a href="{{route('index')}}">
                                        Log in
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="img-box">
                                    <img src="{{asset('images/iitu-logo.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


<section id="categories" class="catagory_section layout_padding">
    <div class="catagory_container">
        <div class="container ">
            <div class="heading_container heading_center">
                <h2>
                    Books Categories
                </h2>
            </div>
            <div class="row">
                @foreach($categories as $category)
                    <div class="col-sm-6 col-md-4 ">
                        <div class="box ">
                            <div class="img-box">
                                <img src="{{asset('welcome/images/cat1.png')}}" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    {{$category->name}}
                                </h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="about_section layout_padding">
    <div class="container ">
        <div class="row">
            <div class="col-md-6">
                <div class="img-box">
                    <img src="{{asset('welcome/images/about-img.png')}}" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="detail-box">
                    <div class="heading_container">
                        <h2>
                            About Our Library IMS
                        </h2>
                    </div>
                    <p>
                        At cumque tenetur iste molestiae, vel eum reiciendis assumenda! Numquam, repudiandae.
                        Consequuntur obcaecati recusandae aliquam, amet doloribus eius dolores officiis cumque?
                        Quibusdam praesentium pariatur sapiente mollitia, amet hic iusto voluptas! Iusto quo earum vitae
                        excepturi, ipsam aliquid deleniti assumenda culpa deserunt.
                    </p>
                    <a href="">
                        Read More
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="accordion" class="catagory_section layout_padding">
    <div class="catagory_container">
        <div class="container ">
            <div class="heading_container heading_center mb-4">
                <h2>
                    Frequently asked questions
                </h2>
            </div>
            @include('components/welcome/accordion')
        </div>

    </div>

</section>

<section id="blog" class="blog_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                From Our Blog
            </h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="box">
                    <div class="img-box">
                        <img src="{{asset('images/blog1.jpg')}}" alt="">
                        <h4 class="blog_date">
                <span>
                   14 February 2019
                </span>
                        </h4>
                    </div>
                    <div class="detail-box">
                        <h5>
                            Robocon 2019
                        </h5>
                        <p>
                            The Robotics Championship among students was held for the first time in 2019 at the Halyk
                            Arena Ice Palace with the participation of 15 teams from all over Kazakhstan.
                            General sponsor: Foundation of the First President of the Republic of Kazakhstan – Elbasy.
                            Additional sponsor: Halyk bank
                            The aim of the project is to obtain modern technical knowledge by the youth of Kazakhstan
                            for
                            the further implementation of their startup projects and active participation in the
                            innovation activities of Kazakhstan.
                            Project Description: The IITU Robocon Championship is a competition between robotics teams
                            based on the Arduino platform. It gives young scientists the opportunity to start developing
                            robots "from scratch", starting with design and mechanics, then electronics and ending with
                            writing a robot intelligence program, i.e. a participant in the championship is a ready-made
                            young specialist suitable for the position of junior laboratory assistant in any scientific
                            institute engaged in science in the field of IT, electronics and robotics.
                        </p>
                        <a href="">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box">
                    <div class="img-box">
                        <img src="{{asset('images/blog2.jpg')}}" alt="">
                        <h4 class="blog_date">
                <span>
                    19 May 2019
                </span>
                        </h4>
                    </div>
                    <div class="detail-box">
                        <h5>
                            HackDay 2019
                        </h5>
                        <p>
                            HackDay is an event where participants work on bringing their ideas to a prototype.
                            Participation in HackDay is an opportunity for two days in a powerful creative environment
                            to implement a project for which there was no time, assemble a team or fit into an
                            interesting project. Participants can come with a ready-made idea for implementation, or
                            they can assemble a team directly on this day.

                            History of creation: The HackDay format was developed by Yahoo! in 2005, to implement
                            creative ideas of employees, and to present prototypes to a top manager. Yahoo Hack Day is a
                            regular event that the company arranges for developers in different countries of the world
                            to demonstrate their achievements and attract talents to cooperation.
                        </p>
                        <a href="">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="contact" class="contact_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6 ">
                <div class="heading_container ">
                    <h2 class="">
                        Contact Us
                    </h2>
                </div>
                <form action="#">
                    <div>
                        <input type="text" placeholder="Name"/>
                    </div>
                    <div>
                        <input type="email" placeholder="Email"/>
                    </div>
                    <div>
                        <input type="text" placeholder="Pone Number"/>
                    </div>
                    <div>
                        <input type="text" class="message-box" placeholder="Message"/>
                    </div>
                    <div class="btn-box">
                        <button>
                            SEND
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <div class="img-box">
                    <img src="{{asset('images/contact.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- end contact section -->

<!-- info section -->

<section class="info_section layout_padding2">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3 info-col">
                <div class="info_detail">
                    <h4>
                        Quick links
                    </h4>
                    <p>
                        <a class="footer_link" href="#categories">Categories</a>
                        <a class="footer_link" href="#accordion"> FAQ </a>
                        <a class="footer_link"  href="#blog"> Blog </a>
                        <a class="footer_link"  href="#contact">Contact Us</a>
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 info-col">
                <div class="info_contact">
                    <h4>
                        Address
                    </h4>
                    <div class="contact_link_box">
                        <a href="">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <span>
                  Manasa 34/1
                </span>
                        </a>
                        <a href="">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <span>
                  Call 87273308569
                </span>
                        </a>
                        <a href="">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <span>
        library.iitu.kz@mail.ru
                </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 info-col">
                <div class="info_contact">
                    <h4>
                        Social media
                    </h4>

                    <div class="social">
                        <a href="https://www.instagram.com/iitu_kz" target="_blank">
                                <i class="fab fa-instagram"></i></a>

                            <a href="https://www.facebook.com/pages/International%20Information%20Technology%20University/455162331170935/"
                               target="_blank">
                                <i class="fab fa-facebook"></i></a>
                        <a href="https://www.youtube.com/@IITUAlmaty" target="_blank">
                                <i class="fab fa-youtube"></i></a>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>


<script src="{{asset('welcome/js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('welcome/js/bootstrap.js')}}"></script>
<script src="{{asset('welcome/js/custom.js')}}"></script>
</script>

</body>

</html>
