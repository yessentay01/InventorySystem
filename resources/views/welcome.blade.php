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
    <style>
        html {
            scroll-behavior: smooth;
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
              Library IMS
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
                            <a class="nav-link" href="#blog"> Blog </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact Us</a>
                        </li>
                        @auth
                            <li  class="nav-item"><a href="{{ route('dashboard') }}" class="nav-link">Home</a></li>
                        @else
                            <li class="nav-item"> <a href="{{ route('index') }}" class="nav-link">Log in</a></li>
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
                                    <h5>
                                        Library IMS
                                    </h5>
                                    <h1>
                                        For All Your <br>
                                        Reading Needs
                                    </h1>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste quam velit saepe
                                        dolorem deserunt quo quidem ad optio.
                                    </p>
                                    <a href="">
                                        Read More
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="img-box">
                                    <img src="{{asset('welcome/images/slider-img.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="detail-box">
                                    <h5>
                                        Library IMS
                                    </h5>
                                    <h1>
                                        For All Your <br>
                                        Reading Needs
                                    </h1>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste quam velit saepe
                                        dolorem deserunt quo quidem ad optio.
                                    </p>
                                    <a href="">
                                        Read More
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="img-box">
                                    <img src="{{asset('welcome/images/slider-img.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="detail-box">
                                    <h5>
                                        Library IMS
                                    </h5>
                                    <h1>
                                        For All Your <br>
                                        Reading Needs
                                    </h1>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste quam velit saepe
                                        dolorem deserunt quo quidem ad optio.
                                    </p>
                                    <a href="">
                                        Read More
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="img-box">
                                    <img src="{{asset('welcome/images/slider-img.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel_btn_box">
                <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                    <span class="sr-only">Next</span>
                </a>
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
                <p>
                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                    alteration
                </p>
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
                            About Our     Library IMS
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
                        <img src="{{asset('welcome/images/b1.jpg')}}" alt="">
                        <h4 class="blog_date">
                <span>
                  19 January 2021
                </span>
                        </h4>
                    </div>
                    <div class="detail-box">
                        <h5>
                            Eius, dolor? Vel velit sed doloremque
                        </h5>
                        <p>
                            Incidunt magni explicabo ullam ipsa quo consequuntur eveniet illo? Aspernatur nam dolorem a
                            neque? Esse eaque dolores hic debitis cupiditate, ad beatae voluptatem numquam dignissimos
                            ab porro
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
                        <img src="{{asset('welcome/images/b2.jpg')}}" alt="">
                        <h4 class="blog_date">
                <span>
                  19 January 2021
                </span>
                        </h4>
                    </div>
                    <div class="detail-box">
                        <h5>
                            Minus aliquid alias porro iure fuga
                        </h5>
                        <p>
                            Officiis veritatis id illo eligendi repellat facilis animi adipisci praesentium. Tempore ab
                            provident porro illo ex obcaecati deleniti enim sequi voluptas at. Harum veniam eos nisi
                            distinctio! Porro, reiciendis eius.
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



<section id="contact"  class="contact_section layout_padding">
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
                    <img src="{{asset('welcome/images/contact-img.png')}}" alt="">
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
                        About Us
                    </h4>
                    <p>
                        Vitae aut explicabo fugit facere alias distinctio, exem commodi mollitia minusem dignissimos
                        atque asperiores incidunt vel voluptate iste
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
                        Newsletter
                    </h4>
                    <form action="#">
                        <input type="text" placeholder="Enter email"/>
                        <button type="submit">
                            Subscribe
                        </button>
                    </form>
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
