<!DOCTYPE html>
    <html lang="en-US">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Home page">
        <meta name="author" content="Alexander DeJesus">
        <title>
            Home
        </title>
        <link rel="icon" type="image/x-icon" href="./icons/codinghelp-high-resolution-logo-white-on-transparent-background.png">
        <link rel="stylesheet" href="./css/CustomCSS/dash.css">
        <link rel="stylesheet" href="./css/bootstrap.min.css">

    </head>

    <!-- The body -->

    <body>
        <!-- Nav Bar -->
        <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
            <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="./home.php">CodingHelp</a>
                
            <ul class="navbar-nav px-3">
                <li class="nav-item text-nowrap">
                <a class="nav-link" href="./sign-in.php">Sign in</a>
                </li>
            </ul>
        </nav>


        <!-- Body of the page -->


        <div class="container-fluid">
            <div class="row">
                <!-- Side Nav -->
                <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                    <div class="sidebar-sticky">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">
                                    <span data-feather="home"></span>
                                    Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="icon"></span>
                                    Text
                                </a>
                            </li>
                        </ul>

                        <!-- Border Text -->
                        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                            <span>Border Text</span>
                            
                            <a class="d-flex align-items-center text-muted" href="#">
                                <span data-feather="plus-circle"></span>
                            </a>
                        </h6>

                        <ul class="nav flex-column mb-2">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="file-text"></span>
                                    Text
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <!-- Body of page -->
                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                    
                </main>
            </div>
        </div>
        

        <!-- Icons -->
        <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
        <script>
            feather.replace()
        </script>
    </body>

</html>