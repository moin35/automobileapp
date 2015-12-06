<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<style type="text/css">
  .circle-tile {
    margin-bottom: 15px;
    text-align: center;
}
.circle-tile-heading {
    border: 3px solid rgba(255, 255, 255, 0.3);
    border-radius: 100%;
    color: #FFFFFF;
    height: 80px;
    margin: 0 auto -40px;
    position: relative;
    transition: all 0.3s ease-in-out 0s;
    width: 80px;
}
.circle-tile-heading .fa {
    line-height: 80px;
}
.circle-tile-content {
    padding-top: 50px;
}
.circle-tile-number {
    font-size: 26px;
    font-weight: 700;
    line-height: 1;
    padding: 5px 0 15px;
}
.circle-tile-description {
    text-transform: uppercase;
}
.circle-tile-footer {
    background-color: rgba(0, 0, 0, 0.1);
    color: rgba(255, 255, 255, 0.5);
    display: block;
    padding: 5px;
    transition: all 0.3s ease-in-out 0s;
}
.circle-tile-footer:hover {
    background-color: rgba(0, 0, 0, 0.2);
    color: rgba(255, 255, 255, 0.5);
    text-decoration: none;
}
.circle-tile-heading.dark-blue:hover {
    background-color: #2E4154;
}
.circle-tile-heading.green:hover {
    background-color: #138F77;
}
.circle-tile-heading.orange:hover {
    background-color: #DA8C10;
}
.circle-tile-heading.blue:hover {
    background-color: #2473A6;
}
.circle-tile-heading.red:hover {
    background-color: #CF4435;
}
.circle-tile-heading.purple:hover {
    background-color: #7F3D9B;
}
.tile-img {
    text-shadow: 2px 2px 3px rgba(0, 0, 0, 0.9);
}

.dark-blue {
    background-color: #34495E;
}
.green {
    background-color: #16A085;
}
.blue {
    background-color: #2980B9;
}
.orange {
    background-color: #F39C12;
}
.red {
    background-color: #E74C3C;
}
.purple {
    background-color: #8E44AD;
}
.dark-gray {
    background-color: #7F8C8D;
}
.gray {
    background-color: #95A5A6;
}
.light-gray {
    background-color: #BDC3C7;
}
.yellow {
    background-color: #F1C40F;
}
.text-dark-blue {
    color: #34495E;
}
.text-green {
    color: #16A085;
}
.text-blue {
    color: #2980B9;
}
.text-orange {
    color: #F39C12;
}
.text-red {
    color: #E74C3C;
}
.text-purple {
    color: #8E44AD;
}
.text-faded {
    color: rgba(255, 255, 255, 0.7);
}

/****** User-Profile ******/

.navbar-side li.side-user {
    border-bottom: 1px solid #142638;
    border-top: medium none !important;
    display: block;
    padding: 15px;
    text-align: center;
    width: 100%;
}

.navbar-side .side-user img {
  display: block;
  margin-bottom: 15px;
  margin-left: 20px;
  width: 150px;
  height: 150px;
}

.navbar-side .side-user .welcome {
    color: #9AA4AF;
    font-style: italic;
    margin: 0;
}

.navbar-side .side-user .welcome .fa {
    padding-right: 0;
}

.navbar-side .side-user .name {
    color: #CCD1D7;
    font-family: "Ubuntu","Helvetica Neue",Helvetica,Arial,sans-serif;
    font-size: 20px;
    font-weight: 300;
    margin: 0;
    padding: 0px;
}
/****** End User-Profile ******/

.admin-content {
  padding: 20px;
}

/* Edit Below to Customize Widths > 768px */
@media (min-width:768px) {

.side-nav {
  margin-left: -225px;
  left: 225px;
  width: 225px;
  position: fixed;
  top: 50px;
  height: 100%;
  border-radius: 0;
  border: none;
  overflow: auto;
}

.side-nav >li .dropdown > ul .dropdown-menu {
  min-width: 225px;
  margin: 0;
  padding: 0;
  border: none;
  border-radius: 0;
  background-color: transparent;
  box-shadow: none;
  -webkit-box-shadow: none;
}

.side-nav>li>a {
  width: 225px;
}



.navbar-collapse {
    padding-left: 15px !important;
    padding-right: 15px !important;
}

}

/* New */

.navbar-side .side-nav .panel {
 margin: 0px;
 padding: 0px;
}

.navbar-side ul.side-nav {
  background-color: #2C3E50;
  border-bottom: 1px solid #54677A;
  font-size: 13px;
  margin-bottom: 0;
  margin-top: 0;
  border-left: 1px solid #54677A;
}

.navbar-side .navbar-nav > li > a:hover {
  background-color: #34495E !important;
}

.navbar-side .navbar-nav > li > a:focus {
  background-color: #34495E !important;
}

.navbar-side .navbar-nav > li > a:active {
 background-color: #34495E !important;
 color: #000;
 outline: medium none;
 text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1)
}

.navbar-side .navbar-nav > li > a {
 background-color: #34495E;
 outline: medium none;
 text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1);
}

.navbar-side .navbar-nav .sublink {
  color: #000 ;
}

.navbar-side .side-nav li, .navbar-side .side-nav li.panel {
 border-bottom: 1px solid #142638;
 border-top: 1px solid #54677A;
 border-left: 1px solid #54677A;
 border-right: 1px solid #54677A;
}
.navbar-side .side-nav li.panel ul li {
 border-bottom: medium none;
 border-top: medium none;
}

/* Top Menu Color */

.navbar-s1 {
  background-color: #2C3E50;
  margin-left: 0;
  border-bottom: 2px solid #2C3E50;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
  z-index: 1030;
}

.navbar-s1 .navbar-brand {
  display: inline-block;
  transition: all 0.3s ease-in-out 0s;
}

.navbar-s1 .navbar-brand:hover,
.navbar-s1 .navbar-brand:focus {
  color: #ffffff;
  background-color: transparent;
}

.navbar-s1 .navbar-text {
  color: #999999;
}

.navbar-s1 .navbar-nav > li > a {
  color: #999999;
}

.navbar-s1 .navbar-nav > li > a:hover,
.navbar-s1 .navbar-nav > li > a:focus {
  color: #ffffff;
  background-color: transparent;
}

.navbar-s1 .navbar-nav > .active > a,
.navbar-s1 .navbar-nav > .active > a:hover,
.navbar-s1 .navbar-nav > .active > a:focus {
  color: #ffffff;
  background-color: #080808;
}

.navbar-s1 .navbar-nav > .disabled > a,
.navbar-s1 .navbar-nav > .disabled > a:hover,
.navbar-s1 .navbar-nav > .disabled > a:focus {
  color: #444444;
  background-color: transparent;
}

.navbar-s1 .navbar-toggle {
  border-color: #333333;
}

.navbar-s1 .navbar-toggle:hover,
.navbar-s1 .navbar-toggle:focus {
  background-color: #333333;
}

.navbar-s1 .navbar-toggle .icon-bar {
  background-color: #ffffff;
}

.navbar-s1 .navbar-collapse,
.navbar-s1 .navbar-form {
  border-color: #101010;
}

.navbar-s1 .navbar-nav > .open > a,
.navbar-s1 .navbar-nav > .open > a:hover,
.navbar-s1 .navbar-nav > .open > a:focus {
  color: #ffffff;
  background-color: #080808;
}

@media (max-width: 767px) {
  .navbar-s1 .navbar-nav .open .dropdown-menu > .dropdown-header {
    border-color: #080808;
  }
  .navbar-s1 .navbar-nav .open .dropdown-menu .divider {
    background-color: #080808;
  }
  .navbar-s1 .navbar-nav .open .dropdown-menu > li > a {
    color: #999999;
  }
  .navbar-s1 .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-s1 .navbar-nav .open .dropdown-menu > li > a:focus {
    color: #ffffff;
    background-color: transparent;
  }
  .navbar-s1 .navbar-nav .open .dropdown-menu > .active > a,
  .navbar-s1 .navbar-nav .open .dropdown-menu > .active > a:hover,
  .navbar-s1 .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: #ffffff;
    background-color: #080808;
  }
  .navbar-s1 .navbar-nav .open .dropdown-menu > .disabled > a,
  .navbar-s1 .navbar-nav .open .dropdown-menu > .disabled > a:hover,
  .navbar-s1 .navbar-nav .open .dropdown-menu > .disabled > a:focus {
    color: #444444;
    background-color: transparent;
  }
}

.navbar-s1 .navbar-link {
  color: #999999;
}

.navbar-s1 .navbar-link:hover {
  color: #ffffff;
}

</style>
 @yield('head')
</head>
<body>
<nav class="navbar navbar-s1 navbar-side" role="navigation">

  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="">Your Compay Logo</a>
  </div>

  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul id="side" class="nav navbar-nav side-nav">

      <li class="side-user">
        <img class="img-circle " alt="" src="http://s20.postimg.org/5gsu6gp31/yogi.jpg">
        <p class="welcome"><i class="fa fa-key"></i> Logged in as</p>
        <p class="name">Yogi Bear <i class="fa fa-sign-out"></i>
          </a>
        </p>
      </li>

      <li><a href=""><i class="fa fa-dashboard"></i> Dashboard</a></li>

      <li class="panel">
        <a class="accordion-toggle" data-target="#catalog" data-toggle="collapse" data-parent="#side"> Catalog <i class="fa fa-caret-down"></i></a>
        <ul id="catalog" class="collapse nav">
          <li>
            <a class="sublink" href=""> <i class="fa fa-angle-double-right"></i> Categories</a>
          </li>
          <li>
            <a class="sublink" href=""> <i class="fa fa-angle-double-right"></i> Products</a>
          </li>
          <li class="panel">
            <a class="accordion-toggle" data-target="#affliate" data-toggle="collapse">Affliate <i class="fa fa-caret-down"></i></a>
            <ul id="affliate" class="collapse nav">
              <li>
                <a class="sublink" href=""> <i class="fa fa-angle-double-right"></i> Categories</a>
              </li>
              <li>
                <a class="sublink" href=""> <i class="fa fa-angle-double-right"></i> Products</a>
              </li>
            </ul>
          </li>
        </ul>
      </li>

      <li class="panel">
        <a class="accordion-toggle" data-target="#extension" data-toggle="collapse" data-parent="#side"> Extension <i class="fa fa-caret-down"></i></a>
        <ul id="extension" class="collapse nav">
          <li>
            <a class="sublink" href=""> <i class="fa fa-angle-double-right"></i> Extension Installer</a>
          </li>
          <li>
            <a class="sublink" href=""> <i class="fa fa-angle-double-right"></i> Products</a>
          </li>
          <li class="panel">
            <a class="accordion-toggle" data-target="#modules" data-toggle="collapse">Modules <i class="fa fa-caret-down"></i></a>
            <ul id="modules" class="collapse nav">
              <li>
                <a class="sublink" href=""> <i class="fa fa-angle-double-right"></i> Categories</a>
              </li>
              <li>
                <a class="sublink" href=""> <i class="fa fa-angle-double-right"></i> Products</a>
              </li>
            </ul>
          </li>
        </ul>
      </li>

      <li class="panel">
        <a class="accordion-toggle" data-target="#sale" data-toggle="collapse" data-parent="#side"> Sale <i class="fa fa-caret-down"></i></a>
        <ul id="sale" class="collapse nav">
          <li>
            <a class="sublink" href=""> <i class="fa fa-angle-double-right"></i> Extension Installer</a>
          </li>
          <li>
            <a class="sublink" href=""> <i class="fa fa-angle-double-right"></i> Products</a>
          </li>
          <li class="panel">
            <a class="accordion-toggle sub-link" data-target="#customer" data-toggle="collapse">Customer <i class="fa fa-caret-down"></i></a>
            <ul id="customer" class="collapse nav">
              <li>
                <a class="sublink" href=""> <i class="fa fa-angle-double-right"></i> Categories</a>
              </li>
              <li>
                <a class="sublink" href=""> <i class="fa fa-angle-double-right"></i> Products</a>
              </li>
            </ul>
          </li>
        </ul>
      </li>

      <li class="panel">
        <a class="accordion-toggle" data-target="#system" data-toggle="collapse" data-parent="#side"> System <i class="fa fa-caret-down"></i></a>
        <ul id="system" class="collapse nav">
          <li>
            <a class="sublink" href=""> <i class="fa fa-angle-double-right"></i> Extension Installer</a>
          </li>
          <li>
            <a class="sublink" href=""> <i class="fa fa-angle-double-right"></i> Products</a>
          </li>
          <li class="panel">
            <a class="accordion-toggle sub-link" data-target="#setting" data-toggle="collapse">Setting <i class="fa fa-caret-down"></i></a>
            <ul id="setting" class="collapse nav">
              <li>
                <a class="sublink" href=""> <i class="fa fa-angle-double-right"></i> Categories</a>
              </li>
              <li>
                <a class="sublink" href=""> <i class="fa fa-angle-double-right"></i> Products</a>
              </li>
            </ul>
          </li>
        </ul>
      </li>

      <li class="panel">
        <a class="accordion-toggle" data-target="#reports" data-toggle="collapse" data-parent="#side"> Reports <i class="fa fa-caret-down"></i></a>
        <ul id="reports" class="collapse nav">
          <li>
            <a class="sublink" href=""> <i class="fa fa-angle-double-right"></i> Extension Installer</a>
          </li>
          <li>
            <a class="sublink" href=""> <i class="fa fa-angle-double-right"></i> Products</a>
          </li>
          <li class="panel">
            <a class="accordion-toggle sub-link" data-target="#report-sale" data-toggle="collapse">Sale <i class="fa fa-caret-down"></i></a>
            <ul id="report-sale" class="collapse nav">
              <li>
                <a class="sublink" href=""> <i class="fa fa-angle-double-right"></i> Categories</a>
              </li>
              <li>
                <a class="sublink" href=""> <i class="fa fa-angle-double-right"></i> Products</a>
              </li>
            </ul>
          </li>
        </ul>
      </li>

    </ul>

    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown user-dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Your Username<b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li class="dropdown-header">Store <i class="fa fa-shopping-cart"></i></li>

          <li><a href="" target="_blank">Your Demo Store</a></li>

          <li class="divider"></li>
          <li><a class="sublink" href="">Profile</a></li>
          <li><a class="sublink" href="">Settings</a></li>
          <li><a class="sublink" href="">logout</a></li>
        </ul>
      </li>
    </ul>

  </div>
</nav>

<div class="container">
  <div class="row">
   
@yield('body')
  </div>
</div>
<div class="container">
  <div id="navBar" class="navbar navbar-inverse navbar-fixed-bottom">
  <div class="navbar-inner">
     <span class="navbar-text">@All Rights Reserve Brand Name</span>
   
  </div>
</div>
</div>
</body>
</html>