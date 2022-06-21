<?php
session_start();
if(!isset($_SESSION['liberar']) || ($_SESSION['liberar'] == false)){header('Location:index.php');}
?>
<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="pt-br"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Principal</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="assets/js/config.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.bundle.min.js"></script>
  </head>

  <body>
     <!-- Layout wrapper -->
     <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
              <span class="app-brand-logo demo">
                <img src="assets/img/logo.png" alt="">
              </span>
              <span class="app-brand-text demo menu-text fw-bolder ms-2">INCLUTEC</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item active">
              <a href="principal.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Principal</div>
              </a>
            </li>
            <!-- Cards -->
            <li class="menu-item">
              <a href="cursos.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Basic">Cursos</div>
              </a>
            </li>
            <!-- Notas -->
            <li class="menu-item">
              <a href="notas.php" class="menu-link">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div data-i18n="Basic">Notas</div>
              </a>
            </li>
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                <li class="nav-item lh-1 me-3">
                  <a href="logout.php"> Logout</a>
                </li>

                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
              <div class="col-md-12">
                                <canvas id="grafico_like"></canvas>
                                </div>
                </div>
    

                

                
              </div>
            </div>
            <!-- / Content -->

           

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="assets/vendor/libs/jquery/jquery.js"></script>
    <script src="assets/vendor/libs/popper/popper.js"></script>
    <script src="assets/vendor/js/bootstrap.js"></script>
    <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

<script>
    $(document).ready(function(){
      $('.disclaimer').hide();
    var algoritimo = 0;
    var javascript = 0;
    var html = 0;
    var css=0;

  
        $.ajax({
            url: '/requests/notas.php',
            method: 'POST',
            success: function (response) {
              if(response != 0){
                var obj = JSON.parse(response);
                if(obj.algoritimo != null)
                  algoritimo = obj.algoritimo;

                  if(obj.javascript != null)
                  javascript = obj.javascript;

                  if(obj.html != null)
                  html = obj.html;

                  if(obj.css != null)
                  css = obj.css;
                
              }


              var optionslike= {
        scales: {
          xAxes: [{
            ticks: {
              beginAtZero:true,
              min: 0,
            }
          }],
         yAxes: [{
            ticks: {
              beginAtZero:true,
              min: 0,
            }
          }],
        },
         hover: {
          onHover: function(e) {
            $("#grafico_like").css("cursor", e[0] ? "pointer" : "default");
          }
        },
        tooltips: {
          enabled: true,
            mode: 'single',
       }
    
      };

        datalike = {
                datasets: [
                        {
                        label: "Algoritimos",
                        backgroundColor: "#fdd530",
                        data: [algoritimo]
                        }, {
                        label: "JavaScript",
                        backgroundColor: "#bd0707",
                        data: [javascript]
                        },
                        {
                        label: "HTML",
                        backgroundColor: "#8282ff",
                        data: [html]
                        },
                        {
                        label: "CSS",
                        backgroundColor: "#75eb74",
                        data: [css]
                        }
                    ],
                labels: [] 
                }

                var canvaslike = document.getElementById("grafico_like");
                var ctxlike = canvaslike.getContext("2d");
                canvaslike.height="120"
                var myNewChartLike = new Chart(ctxlike, {
                type: 'bar',
                data: datalike,
                options: optionslike,
                });
              

              
              
            },
            error: function () {
              close();
              swal({
                title:'Ocorreu um erro ao efetuar login',
                icon:'error'
              });
            }
          });
      

        


                
    })
</script>
  </body>
</html>
