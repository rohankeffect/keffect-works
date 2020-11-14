<?php include "sendemail.php" ?>
<?php
if($_POST){
    require('fpdf/fpdf.php');
    // $name = $_POST['usname'];
    // $dob = $_POST['dob'];
    // $job = $_POST['job'];
    $appointmentDate = $_POST['appointmentDate'];
    $name = $_POST['name'];
    $dateOfBirth = $_POST['dateOfBirth'];
    $age = $_POST['age'];
    $MRDnumber = $_POST['MRDnumber'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $streetAddress = $_POST['streetAddress'];
    $city = $_POST['city'];
    $pincode = $_POST['pincode'];
    $state = $_POST['state'];
    $title = 'User Report';
    $note="*We will inform you of the time and date via phone";
    $downloadInfo = "Download this pdf for future reference";

    $pdf = new FPDF();
    $pdf -> AddPage();
    $pdf->SetTitle($title);
    // Arial bold 15
    $pdf->SetFont('Arial','B',15);
    // Calculate width of title and position
    $w = $pdf->GetStringWidth($title)+6;
    $pdf->SetX((210-$w)/2);
    // Colors of frame, background and text
    $pdf->SetDrawColor(221,221,221,1);
    $pdf->SetFillColor(10,158,0,1);
    // $pdf->SetTextColor(255,255,255,1);
    $pdf->SetTextColor(0,0,0,1);
    // Thickness of frame (1 mm)
    $pdf->SetLineWidth(1);
    // Title
    // Cell(width, height, content, border, nextline parametters, alignement[c - center], fill)
    $pdf->Cell($w, 9, $title, 1, 1, 'C', true);
    // Line break
    $pdf->Ln(10);

    $pdf->Cell(150, 9, $note, 1, 1, 'C');
    // Line break
    $pdf->Ln(10);





    $pdf->SetTextColor(0,0,0,1);
    $w = $pdf->GetStringWidth($note)+10;
    // $pdf->SetX((170-$w)/2);
    $pdf->Cell(80, 10, 'Name of Patient:', 1, 0, 'L');
    $pdf->Cell($w, 10, $name, 1, 1, 'L');

    // $pdf->SetX((170-$w)/2);
    $pdf->Cell(80, 10, 'Appointment Date Requested:', 1, 0, 'L');
    $pdf->Cell($w, 10, $appointmentDate, 1, 1, 'L');

    // $pdf->SetX((170-$w)/2);
    $pdf->Cell(80, 10, 'Date of Birth:', 1, 0, 'L');
    $pdf->Cell($w, 10, $dateOfBirth, 1, 1, 'L');

    // $pdf->SetX((170-$w)/2);
    $pdf->Cell(80, 10, 'Age:', 1, 0, 'L');
    $pdf->Cell($w, 10, $age, 1, 1, 'L');

    // $pdf->SetX((170-$w)/2);
    $pdf->Cell(80, 10, 'MRD Number:', 1, 0, 'L');
    $pdf->Cell($w, 10, $MRDnumber, 1, 1, 'L');

    // $pdf->SetX((170-$w)/2);
    $pdf->Cell(80, 10, 'Phone Number:', 1, 0, 'L');
    $pdf->Cell($w, 10, $phone, 1, 1, 'L');

    // $pdf->SetX((170-$w)/2);
    $pdf->Cell(80, 10, 'Email:', 1, 0, 'L');
    $pdf->Cell($w, 10, $email, 1, 1, 'L');

    // $pdf->SetX((170-$w)/2);
    $pdf->Cell(80, 10, 'Gender:', 1, 0, 'L');
    $pdf->Cell($w, 10, $gender, 1, 1, 'L');

    // $pdf->SetX((170-$w)/2);
    $pdf->Cell(80, 10, 'Address:', 1, 0, 'L');
    $pdf->Cell($w, 10, $address, 1, 0, 'L');



    $pdf->Cell(80, 10, 'Street Address:', 1, 0, 'L');
    $pdf->Cell($w, 10, $streetAddress, 1, 1, 'L');

    $pdf->Cell(80, 10, 'State:', 1, 0, 'L');
    $pdf->Cell($w, 10, $state, 1, 1, 'L');

    $pdf->Cell(80, 10, 'City:', 1, 0, 'L');
    $pdf->Cell($w, 10, $city, 1, 1, 'L');

    $pdf->Cell(80, 10, 'Pincode:', 1, 0, 'L');
    $pdf->Cell($w, 10, $pincode, 1, 1, 'L');

    // Line break
    $pdf->Ln(10);

    $pdf->Cell(150, 9, $downloadInfo, 1, 1, 'C');
    

    $pdf->Output();
}
?>

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
    <section id="contact_part" class="appointment-booking-system">
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
                      data-date-start-date = "+0d"
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
                    placeholder="MRD Number of existing patient"
                    
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

              <div class="col-sm-12">
                <div class="text-center telephonic">
                  <h2>Telephonic appointments</h2>

                  <p>To book an appointment via phone, please contact our help desk:</p>

                  <h1><a href="tel:7907060312">7907060312</a></h1>

                  <p>For accommodation for Inpatient, contact booking desk: (0471) 2521210</p>
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
        var dateToday = new Date();
        dateToday.setDate(dateToday.getDate());


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
          startDate: dateToday,
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
