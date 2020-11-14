<?php include "sendemail.php" ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Keffect Digital" />
    <meta name="description" content="Wellness Ayurvedic Centre" />
    <meta name="keywords" content="" />

    <title>Wellness Ayurvedic Centre</title>

    <!-- Favicon -->
    <link rel="icon" href="images/favicon.ico" />

    <!--  Css Files  -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.css"
      rel="stylesheet"
      id="bootstrap-css"
    />
    <script
      src="https://kit.fontawesome.com/4738fcddfc.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="css/animate.min.css" />
    <script
      src="https://kit.fontawesome.com/4738fcddfc.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="css/slick.css" />
    <link rel="stylesheet" href="css/venobox.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/responsive.css" />

    <style>
      #header_part {
        background: #fff;
      }

      #header_part a {
        color: #000;
      }
      .my_nav {
        position: static;

        background: #fff;
      }
      #nav_list ul li a {
        color: #000;
      }
    </style>
  </head>

  <body>
    <!--  Pre-Loader Start -->
    <div id="preloader">
      <div class="pre_img">
        <img src="images/pre-loader.gif" alt="preloader" />
      </div>
    </div>
    <!--  Pre-Loader End -->

    <!--  Header Part Start  -->
    <header id="header_part">
      <nav class="navbar navbar-default my_nav">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="row">
            <div class="navbar-header">
              <button
                type="button"
                class="navbar-toggle collapsed"
                data-toggle="collapse"
                data-target="#nav_list"
                aria-expanded="false"
              >
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="main_logo" href="index.html">
                <img src="images/Wellness-Logo.png" alt="LOGO" />
              </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="nav_list">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="index.html">Home</a></li>
              </ul>
            </div>
            <!-- /.navbar-collapse -->
          </div>
        </div>
        <!-- /.container -->
      </nav>
    </header>
    <!--  Header Part End  -->

    <!--  Contact Part Start  -->
    <section id="contact_part">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="section_head contact_head text-center">
              <h2>Book <span>Appointment</span></h2>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="contact_form">
              <form action="" method="POST" class="form-group">
                <div class="col-sm-12">
                  <div class="input-group date" id="datepicker-1">
                    <input
                      type="text"
                      name="appointmentDate"
                      class="form-control"
                      placeholder="Date *"
                    />
                    <span class="input-group-addon">
                      <i class="fas fa-calendar-alt"></i>
                    </span>
                  </div>
                </div>

                <div class="col-sm-12">
                  <input
                    type="text"
                    name="name"
                    class="form-control c_name"
                    placeholder="Full Name *"
                    required=""
                  />
                </div>

                <div class="col-sm-12">
                  <div class="input-group date" id="datepicker-2">
                    <input
                      type="text"
                      name="dateOfBirth"
                      class="form-control"
                      placeholder="Date of Birth *"
                      id="dateOfBirth"
                    />
                    <span class="input-group-addon">
                      <i class="fas fa-calendar-alt"></i>
                    </span>
                  </div>
                </div>

                <div class="col-sm-12">
                  <input
                    type="text"
                    name="age"
                    class="form-control c_name"
                    placeholder="Age *"
                    required=""
                  />
                </div>

                <div class="col-sm-12">
                  <input
                    type="text"
                    name="MRDnumber"
                    class="form-control c_name"
                    placeholder="MRD Number of existing patient *"
                    required=""
                  />
                </div>

                <div class="col-sm-12">
                  <input
                    type="tel"
                    name="phone"
                    class="form-control c_name"
                    placeholder="Phone *"
                    required=""
                  />
                </div>

                <div class="col-sm-12">
                  <input
                    type="email"
                    name="email"
                    class="form-control c_email"
                    placeholder="Email *"
                    required=""
                  />
                </div>

                <div class="col-sm-12">
                  <select name="gender">
                    <option value="">Choose Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                  </select>
                </div>

                <div class="col-sm-12">
                  <input
                    type="text"
                    name="address"
                    class="form-control c_name"
                    placeholder="Address *"
                    required=""
                  />
                </div>

                <div class="col-sm-12">
                  <input
                    type="text"
                    name="streetAddress"
                    class="form-control c_name"
                    placeholder="Street Address *"
                    required=""
                  />
                </div>

                <div class="col-sm-12">
                  <input
                    type="text"
                    name="city"
                    class="form-control c_name"
                    placeholder="City *"
                    required=""
                  />
                </div>

                <div class="col-sm-12">
                  <input
                    type="text"
                    name="pincode"
                    class="form-control c_name"
                    placeholder="Pincode *"
                    required=""
                  />
                </div>

                <div class="col-sm-12">
                  <input
                    type="text"
                    name="state"
                    class="form-control c_name"
                    placeholder="State *"
                    required=""
                  />
                </div>
                <div class="col-sm-12 text-center">
                  <button class="btn btn-primary" name="submit">
                    Submit Now
                  </button>
                </div>
              </form>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row">
              <div class="col-sm-12">
                <div class="contact_info">
                  <ul>
                    <li class="c_call">
                      <i class="fa fa-phone"></i>
                      <aside>
                        <h3>Give us a Call</h3>
                        <a href="callto:+917736225830">+91 77362 25830</a>
                      </aside>
                    </li>
                    <li class="c_mail">
                      <i class="fa fa-envelope-o"></i>
                      <aside>
                        <h3>Send a Mail</h3>
                        <a href="mailto:hello@keffect.com">hello@keffect.com</a>
                      </aside>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </section>
    <!--  Contact Part End  -->

    <!--  footer Part Start  -->
    <?php include "includes/Footer.php" ?>
    <!--  Footer Part End  -->

    <!--  Bact to Top button start -->
    <div id="backtotop">
      <i class="fa fa-arrow-up backtotop_btn"></i>
    </div>
    <!--  Bact to Top button End -->

    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/imagesloaded.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.filterizr.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/venobox.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/script.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCm8veVh4ipYx0T0217Njyu1zPiwm60f3U&callback=initMap"></script>
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"
    ></script>
    <script>
      $(function () {
        $("#datepicker-1").datepicker({
          format: "dd/mm/yyyy",
          autoclose: true,
          todayHighlight: true,
          showOtherMonths: true,
          selectOtherMonths: true,
          autoclose: true,
          changeMonth: true,
          changeYear: true,
          orientation: "button",
        });
      });
    </script>

    <script>
      $(function () {
        $("#datepicker-2").datepicker({
          format: "dd/mm/yyyy",
          autoclose: true,
          todayHighlight: true,
          showOtherMonths: true,
          selectOtherMonths: true,
          autoclose: true,
          changeMonth: true,
          changeYear: true,
          orientation: "button",
        });
      });
    </script>
  </body>
</html>
