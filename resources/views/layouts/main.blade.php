<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="hhttps://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

    {{--   table --}}
    <link href="https://unpkg.com/bootstrap-table@1.21.2/dist/bootstrap-table.min.css" rel="stylesheet">
    <script src="https://unpkg.com/bootstrap-table@1.21.2/dist/bootstrap-table.min.js"></script>
    <script src="https://unpkg.com/bootstrap-table@1.21.2/dist/extensions/mobile/bootstrap-table-mobile.min.js"></script>

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <style>
        .card-view{
            padding: 5px;
            align-items: center;
        }
        .card-view:not(:last-child){
            border-bottom: 1px solid #f5f5f5;
        }
    </style>
    <title>Inventory Management System</title>

</head>
<body id="body-pd">
<header class="header mb-3" id="header">
    <div class="header_toggle"><i class='bx bx-menu' id="header-toggle"></i></div>
    <h4>@yield('title')</h4>
</header>
<div class="l-navbar" id="nav-bar">
    @include('components.navbar')
</div>
<div class="height-100">
    @yield('content')
</div>

<script>
    document.addEventListener("DOMContentLoaded", function (event) {

        const showNavbar = (toggleId, navId, bodyId, headerId) => {
            const toggle = document.getElementById(toggleId),
                nav = document.getElementById(navId),
                bodypd = document.getElementById(bodyId),
                headerpd = document.getElementById(headerId)

// Validate that all variables exist
            if (toggle && nav && bodypd && headerpd) {
                toggle.addEventListener('click', () => {
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

        showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')

        /*===== LINK ACTIVE =====*/
        const linkColor = document.querySelectorAll('.nav_link')

        function colorLink() {
            if (linkColor) {
                linkColor.forEach(l => l.classList.remove('active'))
                this.classList.add('active')
            }
        }

        linkColor.forEach(l => l.addEventListener('click', colorLink))

        // Your code to run since DOM is loaded and ready
    });
</script>
</body>
</html>
