<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">

    <title> HeritageStep | Admin</title>

    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/style-responsive.css')}}" rel="stylesheet">

    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/js/uikit-icons.min.js"></script>

    <style>
        .table{
            font-family: Arial;
            font-size: 13px;
        }
        .header {
            margin-bottom: 20px;
        }

        .sidebar {
            margin-right: 20px;
        }

        .container {
            padding: 20px;
        }
    </style>
  </head>

  <body>

    <header class="header black-bg">
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
        </div>
        <a href="/dashboard" class="logo"><b>HeritageStep Indonesia</b></a>
        <div class="top-menu">
            <ul class="nav pull-right top-menu mt-4">
            </ul>
        </div>
    </header>

    <section>
      <!--sidebar start-->
      <aside>
            <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="/home"><img src="img/user.png" class="img-circle" width="100"></a></p>
              	  <h5 class="centered"> Welcome Admin!</h5>
              	  	
                  <li class="mt">
                      <a class="nav-link {{ Request::path() === '/home' ? 'bg-primary' :''}} " href="/home">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>


                    <li class="sub-menu">
                      <a href="javascript:;" >
                      <i class="fa fa-th"></i>
                          <span>Product</span>
                      </a>
                      <ul class="sub">
                            <li><a  class="nav-link {{ Request::path() === 'item' ? 'bg-primary' :''}} " href="/item_admin">
                                <span>Product</span>
                                </a>
                            </li>
                            <li><a  class="nav-link {{ Request::path() === 'kategori' ? 'bg-primary' :''}} " href="/kategori">
                                <span>Product's Category</span>
                                </a>
                            </li>
                      </ul>
                    </li>
                    <li class="sub-menu">
                        <a class="nav-link {{ Request::path() === 'customer' ? 'bg-primary' :''}} " href="/customer">
                            <i class="glyphicon glyphicon-user"></i>
                            <span>Customer</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a class="nav-link {{ Request::path() === 'laporan' ? 'bg-primary' :''}} " href="/report">
                        <i class="fa fa-book"></i>
                            <span>Logout</span>
                        </a>
                    </li>
              </ul>
              <!-- sidebar menu end-->
            </div>
        </aside>
        <div class="uk-section uk-flex uk-flex-center" style="background-color: #D9D9D9;">
            @yield('container')
        </div>
      
    </section>
</body>
</html>