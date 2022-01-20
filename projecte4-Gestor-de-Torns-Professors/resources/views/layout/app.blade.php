<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="icon" type="image/png" sizes="32x32" href="../images/favicon.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.9.1/css/OverlayScrollbars.min.css'>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!-- Bulma Version 0.9.0-->
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" type="text/css" href="css/blog.css">
</head>

<body>
    <!-- START NAV -->
    <nav class="navbar">
        <div class="container">
            <div class="navbar-brand">
                <a class="navbar-item" href="../">
                    <img src="" alt="Logo">
                </a>
                <span class="navbar-burger burger" data-target="navbarMenu">
                        <span></span>
                <span></span>
                <span></span>
                </span>
            </div>
            <div id="navbarMenu" class="navbar-menu">
                <div class="navbar-end">
                    <a class="navbar-item is-active">
                            Home
                        </a>
                    <a class="navbar-item">
                            Examples
                        </a>
                    <a class="navbar-item">
                            Features
                        </a>
                    <a class="navbar-item">
                            Team
                        </a>
                    <a class="navbar-item">
                            Archives
                        </a>
                    <a class="navbar-item">
                            Help
                        </a>
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link">
                                Account
                            </a>
                        <div class="navbar-dropdown">
                            <a class="navbar-item">
                                    Dashboard
                                </a>
                            <a class="navbar-item">
                                    Profile
                                </a>
                            <a class="navbar-item">
                                    Settings
                                </a>
                            <hr class="navbar-divider">
                            <div class="navbar-item">
                                Logout
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- END NAV -->

    @yield('content')


        <script src='https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.9.1/js/OverlayScrollbars.min.js'></script>
        <script>
        document.addEventListener("DOMContentLoaded", function() {
        //The first argument are the elements to which the plugin shall be initialized
        //The second argument has to be at least a empty object or a object with your desired options
        OverlayScrollbars(document.querySelectorAll("body"), { });
        });
        </script>
</body>

<footer class="footer has-background-primary">
    <div class="content has-text-centered has-text-white">
      <h1>Loremipusm</h1>
      <div class="columns">
        <div class="column">
          <h6>About Us</h6>
          <p class="has-text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat.
          </p>
        </div>
        <div class="column">
          <h6>Important</h6>
          <ul>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
          </ul>
        </div>
        <div class="column">
          <h6>Important</h6>
          <ul>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
          </ul>
        </div>
        <div class="column">
          <h6>Subscribe</h6>
          <div class="control has-icons-left has-icons-right">
            <input class="input is-medium" type="email" placeholder="Email">
            <span class="icon is-left">
            <i class="fa fa-envelope"></i>
            </span>
          </div>
          <a class="button is-success is-rounded">Subscribe</a>
        </div>
      </div>
    </div>
  </footer>
  <div class="has-background-success has-text-white bottom">
    <div class="container is-fluid">
      <div class="columns">
        <div class="column">
          <p>Mdfas.</p>
        </div>
        <div class="column has-text-right">
          <i class="fa fa-facebook-square"></i>
          <i class="fa fa-twitter-square"></i>
          <i class="fa fa-google-plus-square"></i>
          <i class="fa fa-linkedin-square"></i>
        </div>
      </div>
    </div>
  </div>

  <script src="{{ asset('/js/app.js') }}"></script>
</html>
