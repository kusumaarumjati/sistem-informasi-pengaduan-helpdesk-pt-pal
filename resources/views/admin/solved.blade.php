<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
  <!-- Favicon -->
  <link rel="icon" href={!! asset('assets/img/brand/favicon.png !!} type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href={!! asset('assets/vendor/nucleo/css/nucleo.css !!} type="text/css">
  <link rel="stylesheet" href={!! asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css !!}type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href={!! asset('assets/css/argon.css?v=1.2.0 !!} type="text/css">

  <style>
.button {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {background-color: #4CAF50;} /* Green */
.button2 {background-color: #008CBA;} /* Blue */
</style>
</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="../assets/img/brand/palz.jpeg" width="1000" height="900" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="dashboard.html">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="icons.html">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">Icons</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="map.html">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">Google</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="profile.html">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">Profile</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tables.html">
                <i class="ni ni-bullet-list-67 text-default"></i>
                <span class="nav-link-text">Tables</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.html">
                <i class="ni ni-key-25 text-info"></i>
                <span class="nav-link-text">Login</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="register.html">
                <i class="ni ni-circle-08 text-pink"></i>
                <span class="nav-link-text">Register</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="upgrade.html">
                <i class="ni ni-send text-dark"></i>
                <span class="nav-link-text">Upgrade</span>
              </a>
            </li>
          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">Documentation</span>
          </h6>
          <!-- Navigation -->
          <ul class="navbar-nav mb-md-3">
            <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html" target="_blank">
                <i class="ni ni-spaceship"></i>
                <span class="nav-link-text">Getting started</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html" target="_blank">
                <i class="ni ni-palette"></i>
                <span class="nav-link-text">Foundation</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/components/alerts.html" target="_blank">
                <i class="ni ni-ui-04"></i>
                <span class="nav-link-text">Components</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/plugins/charts.html" target="_blank">
                <i class="ni ni-chart-pie-35"></i>
                <span class="nav-link-text">Plugins</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active active-pro" href="upgrade.html">
                <i class="ni ni-send text-dark"></i>
                <span class="nav-link-text">Upgrade to PRO</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
   <!--  <nav class="navbar navbar-top navbar-expand navbar-dark bg-default border-bottom"> -->
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
         <!--  <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">??</span>
            </button>
          </form> -->
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <!-- <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-bell-55"></i>
              </a> -->
              <!-- <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden"> -->
                <!-- Dropdown header -->
             <!--    <div class="px-3 py-3">
                  <h6 class="text-sm text-muted m-0">You have <strong class="text-primary">13</strong> notifications.</h6>
                </div> -->
                <!-- List group -->
              <!--   <div class="list-group list-group-flush">
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto"> -->
                        <!-- Avatar -->
                      <!--   <img alt="Image placeholder" src="../assets/img/theme/team-1.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>2 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto"> -->
                        <!-- Avatar -->
                      <!--   <img alt="Image placeholder" src="../assets/img/theme/team-2.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>3 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto"> -->
                        <!-- Avatar -->
                       <!--  <img alt="Image placeholder" src="../assets/img/theme/team-3.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>5 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Your posts have been liked a lot.</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto"> -->
                        <!-- Avatar -->
                       <!--  <img alt="Image placeholder" src="../assets/img/theme/team-4.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>2 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto"> -->
                        <!-- Avatar -->
                      <!--   <img alt="Image placeholder" src="../assets/img/theme/team-5.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>3 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                      </div>
                    </div>
                  </a>
                </div> -->
                <!-- View all -->
                <!-- <a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>
              </div> -->
            </li>
            <li class="nav-item dropdown">
             <!--  <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-ungroup"></i>
              </a> -->
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-dark bg-default  dropdown-menu-right ">
                <div class="row shortcuts px-4">
                 <!--  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-red">
                      <i class="ni ni-calendar-grid-58"></i>
                    </span>
                    <small>Calendar</small>
                  </a> -->
                 <!--  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-orange">
                      <i class="ni ni-email-83"></i>
                    </span>
                    <small>Email</small>
                  </a> -->
                 <!--  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-info">
                      <i class="ni ni-credit-card"></i>
                    </span>
                    <small>Payments</small>
                  </a> -->
                  <!-- <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-green">
                      <i class="ni ni-books"></i>
                    </span>
                    <small>Reports</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-purple">
                      <i class="ni ni-pin-3"></i>
                    </span>
                    <small>Maps</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-yellow">
                      <i class="ni ni-basket"></i>
                    </span>
                    <small>Shop</small>
                  </a> -->
                </div>
              </div>
            </li>
          </ul>
          <!-- <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="../assets/img/theme/team-4.jpg">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">Isqi Hajri</span>
                  </div>
                </div>
              </a> -->
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>My profile</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-settings-gear-65"></i>
                  <span>Settings</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-calendar-grid-58"></i>
                  <span>Activity</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-support-16"></i>
                  <span>Support</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header pb-6 d-flex align-items-center" style="min-height: 325px; background-image: url(../assets/img/theme/kapal-1.jpeg); background-size: 1090px; background-position:center;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-7"></span>
      <!-- Header container -->
      <div class="container">
         <div  class="row justify-content-center">
          <div class="col-xl-10 col-lg-10 col-md-4 px-2">
               <h1 class="h1">
            <h1  align="center" class="display-1 text-white">Pelaporan Gangguan</h1>
             <h1 align="center" class="display-1 text-white">Divisi Kawasan</h1>
           <!--  <p class="text-white mt-0 mb-5">This is your profile page. You can see the progress you've made with your work and manage your projects or assigned tasks</p> -->
           <!--  <a href="#!" class="btn btn-neutral">Edit profile</a> -->
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-4 order-xl-2">
          <div class="card card-profile">
       <!--      <img src="../assets/img/theme/img-1-1000x600.jpg" alt="Image placeholder" class="card-img-top">
            <h1  align="center" class="display-1 text-white">Pelaporan Gangguan</h1>
             <h1 align="center" class="display-1 text-white">Divisi Kawasan</h1> -->
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                 <!--  <a href="#">
                    <img src="../assets/img/theme/team-4.jpg" class="rounded-circle">
                  </a> -->
                </div>
              </div>
            </div>
            <div class="card-header text-center border-0 pt-8 pt-md-0 pb-0 pb-md-0">

             <!--  <div class="d-flex justify-content-between">
                <a href="#" class="btn btn-sm btn-info  mr-4 ">Connect</a>
                <a href="#" class="btn btn-sm btn-default float-right">Message</a>
              </div> -->
            </div>
           <!--  <div class="card-body pt-0">
              <div class="row">
                <div class="col">
                  <div class="card-profile-stats d-flex justify-content-center">
                    <div class="col-sm-24">
        <div class="timeline-container">
          <div class="timeline-label"> -->
         <!--    <h1  align="center" class="display-1 text-white" style="text-align: center; margin-left: 50px">Pelaporan Gangguan</h1> -->
           <!--  <h1 class="label label-success arrowed-in-right label-lg" style="text-align: top; margin-left: 10px;"><b>Cara Penggunaan Aplikasi</b></h1> -->
           <!--  <div class="line" style="margin-top: 65px; margin-left: 35px;"> </div> -->
        <!--   </div>
          <div class="timeline-items">
            <div class="timeline-item clearfix">
              <div class="timeline-info">
                 <i class="timeline-indicator ace-icon fa fa-stack-2x btn btn-success no-hover">1</i>
                
              </div>
              <div class="widget-box transparent">
                <div class="widget-header widget-header-small">
                  <h3 class="widget-title smaller"> -->
                   <!--  <br> -->
                   <!--  <span class="grey">Klik "Cari NIP" dan masukan NIP anda</span>
                  </h3>
                </div>

                <div class="widget-body">
                  <div class="widget-main">
                    <span class="green" style="font-size: 14px">Jika NIP benar maka inputan nama, div/dept, no telp akan terisi otomatis</span><br>
                    <span class="red" style="font-size: 14px">Jika NIP salah maka akan keluar notif "*NIP tidak ditemukan*"</span>
                    <div class="space-1"></div>
                  </div>
                </div>
              </div>
            </div>
             </br>
            <div class="timeline-item clearfix">
              <div class="timeline-info">
                <i class="timeline-indicator ace-icon fa fa-stack-2x btn btn-success no-hover">2</i>
              </div>
              <div class="widget-box transparent">
                <div class="widget-header widget-header-small">
                  <h3 class="widget-title smaller">
                    <span class="grey">Pilih kategori masalah</span>
                  </h3>
                </div>
              </div>
            </div>
            <div class="timeline-item clearfix">
              <div class="timeline-info">
                <i class="timeline-indicator ace-icon fa fa-stack-2x btn btn-success no-hover">3</i>
              </div>
              <div class="widget-box transparent">
                <div class="widget-header widget-header-small">
                  <h3 class="widget-title smaller">
                    <span class="grey">Isikan Tambah keterangan</span>
                  </h3>
                </div>
                <div class="widget-body">
                  <div class="widget-main">
                    <span class="green" style="font-size: 14px">Keterangan troble atau masalah yang akan dilaporkan</span><br>
                    <div class="space-1"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="timeline-item clearfix">
              <div class="timeline-info">
                <i class="timeline-indicator ace-icon fa fa-stack-2x btn btn-success no-hover">4</i>
              </div>
              <div class="widget-box transparent">
                <div class="widget-header widget-header-small">
                  <h3 class="widget-title smaller">
                    <span class="grey">Tambahkan Foto</span>
                  </h3>
                </div>
                <div class="widget-body">
                  <div class="widget-main">
                    <span class="green" style="font-size: 14px">Upload foto atau hasil screenshoot untuk mempermudah identifikasi masalah pelaporan</span><br>
                    <div class="space-1"></div>
                  </div>
                </div>
              </div>
            </div> -->

       <!--    </div> --><!-- /.timeline-items -->
       <!--  </div> --><!-- /.timeline-container -->
      <!-- </div>
              -->      <!--  <div>
                      <span class="heading">22</span>
                      <span class="description">Friends</span>
                    </div> -->
                    <!-- <div>
                      <span class="heading">10</span>
                      <span class="description">Photos</span>
                    </div> -->
                    <!-- <div>
                      <span class="heading">89</span>
                      <span class="description">Comments</span>
                    </div> -->
                 <!--  </div>
                </div>
              </div> -->
              <!-- <div class="text-center">
                <h5 class="h3">
                  Jessica Jones<span class="font-weight-light">, 27</span>
                </h5> -->
                <!-- <div class="h5 font-weight-300">
                  <i class="ni location_pin mr-2"></i>Bucharest, Romania
                </div> -->
               <!--  <div class="h5 mt-4">
                  <i class="ni business_briefcase-24 mr-2"></i>Solution Manager - Creative Tim Officer
                </div> -->
                <!-- <div>
                  <i class="ni education_hat mr-2"></i>University of Computer Science
                </div> -->
              <!-- </div> -->
            </div>-->
          </div>
        </div>
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
               <!--  <div class="col-8">
                  <h3 class="mb-0">Edit profile </h3>
                </div> -->
              <!--   <div class="col-4 text-right">
                  <a href="#!" class="btn btn-sm btn-primary">Settings</a>
                </div> -->
              </div>
            </div>
             <div class="card-body">
              <form>
                <h6 class="heading-small text-muted mb-4"><b>Form Cek Gangguan</b></h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-sm-9">
                      <div class="form-group">
                        <label class="form-control-label" for="no_antrian">No Antrian</label>
                        <input type="text" id="no_antrian" name="no_antrian" class="form-control" placeholder="No Antrian" onchange="cekNip(this)"s/>
                       <!--  <button href="#modal-form" role="button" class="btn btn-info btn-sm col-xs-9 col-sm-2" data-toggle="modal" style="background: blue !important; border-color: blue !important"> Cari NIP
                        </button> -->
                      </div>
                    </div>
                    <!-- <div class="col-lg-4"> -->
                      <div class="form-group">
                        <br>
                        <!-- <label class="form-control-label" for="input-email">Email address</label>
                        <input type="email" id="input-email" class="form-control" placeholder="jesse@example.com"> -->
                        <button href="#modal-form" role="button" style="margin-top: 7px;" class="btn btn-success"  data-toggle="modal" style="background: green !important; border-color: green !important"> <i class="fa-caret-square-o-right"></i> Cek Progress
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <div class="col-sm-12">
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
               <!--  <div class="col-8">
                  <h3 class="mb-0">Edit profile </h3>
                </div> -->
              <!--   <div class="col-4 text-right">
                  <a href="#!" class="btn btn-sm btn-primary">Settings</a>
                </div> -->
              </div>
            </div>

             <div class="card-body">
              <form>
                <h1 class="heading-small mb-4" style="font-size: 24px"><b>Informasi Gangguan TA-</b></h1>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-sm-9">
                      <div class="form-group">
                          <button href="#modal-form" role="button" style="margin-top: 7px;" class="btn btn-info"  data-toggle="modal" style="background: green !important; border-color: green !important"> <i class="fa-caret-square-o-right"></i> No antrian : <br> 1970
                          </button>
                       <!--  <label class="form-control-label" for="no_antrian">No Antrian</label>
                        <input type="text" id="no_antrian" name="no_antrian" class="form-control" placeholder="No Antrian" onchange="cekNip(this)"s/> -->
                       <!--  <button href="#modal-form" role="button" class="btn btn-info btn-sm col-xs-9 col-sm-2" data-toggle="modal" style="background: blue !important; border-color: blue !important"> Cari NIP
                        </button> -->
                      </div>
                    </div>
                    <!-- <div class="col-lg-4"> -->
                      <div class="col-sm-16">
                      <div class="form-group">
                        <div>
                          <button href="#modal-form" role="button" style="margin-top: 7px; padding-left: 15px" class="btn btn-warning"  data-toggle="modal" style="background: green !important; border-color: green !important"> <i class="fa-caret-square-o-right"></i> Status : <br> Waiting
                          </button>
                        </div>
                       <!--  <label class="form-control-label" for="no_antrian">No Antrian</label>
                        <input type="text" id="no_antrian" name="no_antrian" class="form-control" placeholder="No Antrian" onchange="cekNip(this)"s/> -->
                       <!--  <button href="#modal-form" role="button" class="btn btn-info btn-sm col-xs-9 col-sm-2" data-toggle="modal" style="background: blue !important; border-color: blue !important"> Cari NIP
                        </button> -->

                      </div>
                    </div>

                    <table class="table">
                      <tbody>
                        <tr>
                          <!--<th scope="row">1</th>-->
                          <td>NIP</td>
                          <td>151911513043</td>
                          
                        </tr>
                        <tr>
                          <!--<th scope="row">2</th>-->
                          <td>Nama</td>
                          <td>Paijo</td>
                        </tr>

                         <tr>
                          <!--<th scope="row">2</th>-->
                          <td>Tanggal Laporan</td>
                          <td>23-04-2021</td>
                        </tr>

                         <tr>
                          <!--<th scope="row">2</th>-->
                          <td>Divisi</td>
                          <td>Kawasan</td>
                        </tr>

                         <tr>
                          <!--<th scope="row">2</th>-->
                          <td>Keluhan</td>
                          <td>AC tidak dingin</td>
                        </tr>

                         <tr>
                          <!--<th scope="row">2</th>-->
                          <td>Masalah</td>
                          <td>Timer AC tidak bisa mati</td>
                        </tr>

                         <tr>
                          <!--<th scope="row">2</th>-->
                          <td>Foto</td>
                          <td>Thornton</td>
                        </tr>
                        
                      </tbody>
                    </table>
                    </div>
                  </div>
                </form>
              </div>



            </div>
          </div>






                    <!-- </div> -->
                 <!--  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label class="form-control-label" for="nama">Nama</label>
                        <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama" readonly/> -->
                       <!--  <button href="#modal-form" role="button" class="btn btn-info btn-sm col-xs-9 col-sm-2" data-toggle="modal" style="background: blue !important; border-color: blue !important"> Cari NIP
                        </button> -->
                     <!--  </div>
                    </div>

                    <div class="col-sm-12">
                      <div class="form-group">
                        <label class="form-control-label" for="divisi">Divisi/Departemen</label>
                        <input type="text" id="divisi" name="divisi" class="form-control" placeholder="Divisi/Departemen" readonly/> -->
                       <!--  <button href="#modal-form" role="button" class="btn btn-info btn-sm col-xs-9 col-sm-2" data-toggle="modal" style="background: blue !important; border-color: blue !important"> Cari NIP
                      </div>
                    </div>
                  <!--  <div class="form-group">
                    <div class="col-sm-12">
                     
                   </div> -->
                  <!--   <div class="col-sm-12">
                      <label class="form-control-label" for="kategori_masalah">Kategori Masalah</label>
                        <select name="detail_kategori" class="chosen-select form-control tag-input-style" id="form-field-select-4" data-placeholder="Pilih kategori">
                                                    <optgroup label="AC">
                                                        <option value="1" > Instalasi Baru (AC)</option>  
                                                        <option value="2" > Gangguan (AC)</option>  
                                                        <option value="3" > Lainnya (AC)</option> 
                                                    </optgroup>
                                                  <optgroup label="Air">
                                                        <option value="4" > Instalasi Baru (Air)</option> 
                                                        <option value="5" > Gangguan (Air)</option> 
                                                        <option value="6" > Lainnya (Air)</option>  
                                                        <option value="7" > Permintaan Supply (Air)</option>  
                                                    </optgroup>
                                                  <optgroup label="Telp">
                                                        <option value="21" > Gangguan (Telp)</option> 
                                                        <option value="22" > Instalasi Baru (Telp)</option> 
                                                        <option value="23" > Lainnya (Telp)</option>  
                                                    </optgroup>
                                                  <optgroup label="Listrik">
                                                        <option value="18" > Perbaikan (Listrik)</option> 
                                                        <option value="19" > Instalasi Baru (Listrik)</option>  
                                                        <option value="20" > Gangguan (Listrik)</option>  
                                                    </optgroup>
                                                  <optgroup label="Jalan">
                                                        <option value="12" > Perbaikan (Jalan)</option> 
                                                    </optgroup>
                                                  <optgroup label="Dermaga">
                                                        <option value="11" > Perbaikan (Dermaga)</option> 
                                                    </optgroup>
                                                  <optgroup label="Kantor">
                                                        <option value="13" > Perbaikan (Kantor)</option>  
                                                    </optgroup>
                                                  <optgroup label="Bengkel">
                                                        <option value="10" > Perbaikan (Bengkel)</option> 
                                                    </optgroup>
                                                  <optgroup label="APAR">
                                                        <option value="8" > Penambahan APAR</option>  
                                                        <option value="9" > Pengecekan APAR</option>  
                                                    </optgroup>
                                                  <optgroup label="Kebersihan">
                                                        <option value="15" > Pengangkutan Sampah</option> 
                                                        <option value="16" > Penataan Taman</option>  
                                                    </optgroup>
                                                  <optgroup label="Tata Ruang Tata Graha">
                                                        <option value="17" > Permintaan Desain Interior & Furnishing</option> 
                                                    </optgroup>
                                              </select>
                                              <br>
                    </div > -->

                  <!--  <div class="col-sm-12">
                      <div class="form-group">
                        <label class="form-control-label" for="notelp">No Telp Ext</label>
                        <input type="text" id="notelp" name="notelp" class="form-control" placeholder="No Telp Ext"/>
                        </button> --> 
                       <!--  <button href="#modal-form" role="button" class="btn btn-info btn-sm col-xs-9 col-sm-2" data-toggle="modal" style="background: blue !important; border-color: blue !important"> Cari NIP
                        </button> -->
                     <!--  </div>
                    </div>


                    <div class="col-sm-12">
                      <div class="form-group">
                        <label class="form-control-label" for="keterangan">Tambahkan Keterangan</label>
                        <input type="text" id="keterangan" name="keterangan" class="form-control" placeholder="Tambahkan Keterangan"/> -->
                       <!--  <button href="#modal-form" role="button" class="btn btn-info btn-sm col-xs-9 col-sm-2" data-toggle="modal" style="background: blue !important; border-color: blue !important"> Cari NIP
                        </button> -->
                     <!--  </div>
                    </div>

                   <div class="col-sm-12">
                    <div class="form-group"> -->
                   <!--  <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Foto Trouble <font color="red"><sup>**Jika Perlu</sup></font> </label> -->
                    <!--  -->




  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.2.0"></script>
</body>

</html>