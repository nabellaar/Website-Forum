<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>My Topics</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-text mx-3">Forume</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url('/') }}">
                    <span class="mx-3">Home</span>
                </a>
            </li>


            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url('/my_topics') }}">
                    <span class="mx-3">My Topics</span>
                </a>
            </li>


            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url('/my_answers') }}">
                    <span class="mx-3">My Answers</span>
                </a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ url('/liked_topics') }}">
                    <span class="mx-3">Liked Topics</span>
                </a>
            </li>

            <!-- Button to trigger the modal -->
            <button type="button" class="btn btn-primary p-2 justify-content-center mx-4 my-3" data-toggle="modal" data-target="#commentModal1" 
            style="border-color: #435AE7; background-color: #fff; color: #435AE7;">
            + Create a New Topic
            </button>

            <!-- Modal -->
            <div class="modal fade" id="commentModal1" tabindex="-1" role="dialog" aria-labelledby="commentModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="commentModalLabel" style="color: #000000;">Create your topic</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="commentTitle" style="color: #435AE7;">Title</label>
                    <input type="text" class="form-control" id="commentTitle" name="commentTitle" required>
                </div>
                <div class="form-group">
                    <label for="commentContent" style="color: #435AE7;">Content</label>
                    <textarea class="form-control" id="commentContent" name="commentContent" rows="5" required></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Submit</button>
            </div>
            </div>
            </div>
            </div>     
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small"
                                placeholder="Search for Topics" aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline small" style="color: #000;">Monica David</span>
                                <img class="img-profile rectangle" src="img/monica.png">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- MULAI CONTENT/ISI DISINI -->
                <div class="container-fluid">
                    <!-- Content Row -->
                    <div class="row">
                        <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-7">
                            <div class="row">
                                <div class="card shadow mb-4 col-lg-12 col-md-12">
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <h5 style="color: #435AE7;">Question</h5>
                                        <p style="color:#000; font-size: 15px; margin-top: 15px;">What's the difference between HTML, CSS,
                                            and JavaScript, and how do they work together to build a web page?</p>
                                        <hr style="margin-top: 30px;">
                                        <img style="height: 30px;" src="img/topic1.png" alt="">
                                        <p style="font-size: 12px; margin-left: 35px; margin-top: -23px;" >Posted by <span style="color: #435AE7;">Monica David</span></p>
                                        <p style="font-size: 12px; margin-left: 30%; margin-top: -33px;" >20min ago</p>
                                        <p style="margin-left: 80%; margin-top: -30px; color: #435AE7; font-size: 15px;">see all response ></p>
                                    </div>
                                </div>
                         <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-7">
                            <div class="row">
                                <div class="card shadow mb-4 col-lg-12 col-md-12">
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <h5 style="color: #435AE7;">Hi! let me know the answer</h5>
                                        <p style="color:#000; font-size: 15px; margin-top: 15px;">What is the difference between "div" and "span" elements in HTML?</p>
                                        <hr style="margin-top: 30px;">
                                        <img style="height: 30px;" src="img/topic1.png" alt="">
                                        <p style="font-size: 12px; margin-left: 35px; margin-top: -23px;" >Posted by <span style="color: #435AE7;">Monica David</span></p>
                                        <p style="font-size: 12px; margin-left: 30%; margin-top: -33px;" >3h ago</p>
                                        <p style="margin-left: 80%; margin-top: -30px; color: #435AE7; font-size: 15px;">see all response ></p>
                                    </div>
                                </div>
                         <!-- Area Chart -->
                         <div class="col-xl-12 col-lg-7">
                            <div class="row">
                                <div class="card shadow mb-4 col-lg-12 col-md-12">
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <h5 style="color: #435AE7;">Just Asking</h5>
                                        <p style="color:#000; font-size: 15px; margin-top: 15px;">How do I add an image to a web page using HTML?</p>
                                        <hr style="margin-top: 30px;">
                                        <img style="height: 30px;" src="img/topic1.png" alt="">
                                        <p style="font-size: 12px; margin-left: 35px; margin-top: -23px;" >Posted by <span style="color: #435AE7;">Monica David</span></p>
                                        <p style="font-size: 12px; margin-left: 30%; margin-top: -33px;" >4h ago</p>
                                        <p style="margin-left: 80%; margin-top: -30px; color: #435AE7; font-size: 15px;">see all response ></p>
                                    </div>
                                </div>
                         <!-- Area Chart -->
                         <div class="col-xl-12 col-lg-7">
                            <div class="row">
                                <div class="card shadow mb-4 col-lg-12 col-md-12">
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <h5 style="color: #435AE7;">Question</h5>
                                        <p style="color:#000; font-size: 15px; margin-top: 15px;">What are the important design principles to consider 
                                        in creating an attractive website?</p>
                                        <hr style="margin-top: 30px;">
                                        <img style="height: 30px;" src="img/topic1.png" alt="">
                                        <p style="font-size: 12px; margin-left: 35px; margin-top: -23px;" >Posted by <span style="color: #435AE7;">Monica David</span></p>
                                        <p style="font-size: 12px; margin-left: 30%; margin-top: -33px;" >1d ago</p>
                                        <p style="margin-left: 80%; margin-top: -30px; color: #435AE7; font-size: 15px;">see all response ></p>
                                    </div>
                                </div>
                         <!-- Area Chart -->
                         <div class="col-xl-12 col-lg-7">
                            <div class="row">
                                <div class="card shadow mb-4 col-lg-12 col-md-12">
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <h5 style="color: #435AE7;">Let me know the answer</h5>
                                        <p style="color:#000; font-size: 15px; margin-top: 15px;">What is the first step in planning to create a website?</p>
                                        <hr style="margin-top: 30px;">
                                        <img style="height: 30px;" src="img/topic1.png" alt="">
                                        <p style="font-size: 12px; margin-left: 35px; margin-top: -23px;" >Posted by <span style="color: #435AE7;">Monica David</span></p>
                                        <p style="font-size: 12px; margin-left: 30%; margin-top: -33px;" >3d ago</p>
                                        <p style="margin-left: 80%; margin-top: -30px; color: #435AE7; font-size: 15px;">see all response ></p>
                                    </div>
                                </div>
                         <!-- Area Chart -->
                         <div class="col-xl-12 col-lg-7">
                            <div class="row">
                                <div class="card shadow mb-4 col-lg-12 col-md-12">
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <h5 style="color: #435AE7;">Just asking</h5>
                                        <p style="color:#000; font-size: 15px; margin-top: 15px;">How do you arrange and organize 
                                        interesting content on a website?</p>
                                        <hr style="margin-top: 30px;">
                                        <img style="height: 30px;" src="img/topic1.png" alt="">
                                        <p style="font-size: 12px; margin-left: 35px; margin-top: -23px;" >Posted by <span style="color: #435AE7;">Monica David</span></p>
                                        <p style="font-size: 12px; margin-left: 30%; margin-top: -33px;" >1h ago</p>
                                        <p style="margin-left: 80%; margin-top: -30px; color: #435AE7; font-size: 15px;">see all response ></p>
                                    </div>
                                </div>
            
            <!-- End of Page Wrapper -->
            
            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Select "Logout" below if you are ready to end your current session.
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="/logout">Logout</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bootstrap core JavaScript-->
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="js/sb-admin-2.min.js"></script>

            <!-- Page level plugins -->
            <script src="vendor/chart.js/Chart.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="js/demo/chart-area-demo.js"></script>
            <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>