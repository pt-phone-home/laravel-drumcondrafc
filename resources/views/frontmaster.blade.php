<!DOCTYPE html>
<html lang="en">
<head>
    @include('components.head')
    <title> @yield('title')</title>
</head>
<body>
    <div class="container">
       @include('components.banner') 
       @include('components.header')
       
        @yield('content')

        @include('components.footer')
    </div>
    
    @include('components.add')
    <script src="/js/app.js"></script>
    @include('components.scripts')
    <script>
            const sideNavBtn1 = document.querySelector(".sidenav-btn");
            const sideNavMenu = document.querySelector(".sidebar-nav");
            const sideNavClose = document.querySelector(".sidebar-nav-close");
            let logo = document.querySelector(".logo");

            sideNavBtn1.onclick = function() {
                sideNavMenu.style.display = "block";
            };

            // window.onclick = function(e) {
            //   if (e.target == body1) {
            //     sideNavMenu.style.display = "none";
            //   }
            // };

            sideNavClose.onclick = function() {
                sideNavMenu.style.display = "none";
            };
        </script>
</body>
</html>