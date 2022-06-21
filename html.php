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

    <title>HTML</title>

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
    <script src="assets/js/ui-modals.js"></script>

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="assets/js/config.js"></script>
   
  </head>

  <body>
  
  <div class="loader hidden"></div>
   
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
                <li class="nav-item lh-1 me-3">
                  <a href="logout.php"></a> Logout</a>
                </li>

              
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">

              <!-- Accordion -->
              <div class="row">
                <div class="col-md mb-12 mb-md-0">
                  <div class="accordion mt-3" id="accordionExample">
                    <div class="card accordion-item ">
                      <h2 class="accordion-header" id="headingOne">
                        <button
                          type="button"
                          class="accordion-button collapsed"
                          data-bs-toggle="collapse"
                          aria-expanded="false"
                          data-bs-target="#accordionOne"
                          aria-controls="accordionOne"
                        >
                          Introdução
                        </button>
                      </h2>

                      <div
                        id="accordionOne"
                        class="accordion-collapse collapse "
                        data-bs-parent="#accordionExample"
                      >
                        <div class="accordion-body">
                          <p>Sejam todos bem-vindos ao mundo da World , Wide Web, ou somente a web. Neste curso abordaremos de forma simples e fácil a linguagem de marcação, que é o coração da web – A hypertext Markup Language (HTML) , juntamente com a linguagem CSS (Cascading Style Sheet) que juntas criam as páginas web.</p>
                          <p>Neste curso tentaremos transmitir de forma fácil e simples o HTML , também incluímos um video de principais TAGs para ajudá-los a crias suas próprias páginas web sem muito complicação</p>
                          <p>Vocês perceberão que isso não difícil de aprender. Os tópicos que abordaremos no curso são :</p>
                          <ul>
                              <li>Ambiente de Desenvolvimento web – Visual Studio Code; conceito de HTML</li>
                              <li>Estrutura da linguagem</li>
                              <li>Principais Tags</li>
                          </ul>
                         
                        </div>
                      </div>
                    </div>
                    <div class="card accordion-item">
                      <h2 class="accordion-header" id="headingTwo">
                        <button
                          type="button"
                          class="accordion-button collapsed"
                          data-bs-toggle="collapse"
                          data-bs-target="#accordionTwo"
                          aria-expanded="false"
                          aria-controls="accordionTwo"
                        >
                          Vídeo 1
                        </button>
                      </h2>
                      <div
                        id="accordionTwo"
                        class="accordion-collapse collapse"
                        aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample"
                      >
                        <div class="accordion-body">
                          <div class="embed">
                          <iframe width="896" height="504" src="https://www.youtube.com/embed/1LJGQb_pn6k?list=PLiInvBAtTPBPqaQxtMs29TE762F23YgzU" title="Curso HTML para INICIANTES 1/4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                          </div>

                          <!-- Button trigger modal -->
                            <button style="margin-top:15px" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-questao1">
                              Questão
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="modal-questao1" tabindex="-1" role="dialog"  aria-hidden="true">
                              <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Responda a questão</h5>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="row">
                                      <div class="col-md-12 mb-3">
                                        <p>qual a forma correta de se usar charset utf-8 na página?</p>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12 mb-3">
                                        A) <input type="radio" value="a" name="questao1" id="questao1"> <?php echo htmlentities('<html charset="UTF-8"></html>'); ?>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12 mb-3">
                                        B) <input type="radio" value="b" name="questao1" id="questao1"> <?php echo htmlentities('<meta charset="UTF-8">'); ?> 
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12 mb-3">
                                        C) <input type="radio" value="c" name="questao1" id="questao1"> <?php echo htmlentities('<charset></charset>'); ?> 
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12 mb-3">
                                        D) <input type="radio" value="d" name="questao1" id="questao1"> 
                                      </div>
                                    </div>
                                    
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                    <button type="button" class="btn btn-primary" onclick="questao1();">Enviar</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="card accordion-item">
                      <h2 class="accordion-header" id="headingVideo2">
                        <button
                          type="button"
                          class="accordion-button collapsed"
                          data-bs-toggle="collapse"
                          data-bs-target="#accordionVideo2"
                          aria-expanded="false"
                          aria-controls="accordionVideo2"
                        >
                          Vídeo 2
                        </button>
                      </h2>
                      <div
                        id="accordionVideo2"
                        class="accordion-collapse collapse"
                        aria-labelledby="headingVideo2"
                        data-bs-parent="#accordionExample"
                      >
                        <div class="accordion-body">
                          <div class="embed">
                          <iframe width="896" height="504" src="https://www.youtube.com/embed/QYR3IJ0M70s?list=PLiInvBAtTPBPqaQxtMs29TE762F23YgzU" title="Curso HTML para INICIANTES 2/4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                          </div>

                          <!-- Button trigger modal -->
                            <button style="margin-top:15px" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-questao2">
                              Questão
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="modal-questao2" tabindex="-1" role="dialog"  aria-hidden="true">
                              <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Responda a questão</h5>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="row">
                                      <div class="col-md-12 mb-3">
                                        <p>Qual a forma correta de se criar uma lista? </p>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12 mb-3">
                                    A) <input type="radio" value="a" name="questao2" ><?php echo htmlentities('<li><item></item></li>'); ?>

                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12 mb-3">
                                        B) <input type="radio" value="b" name="questao2" > <?php echo htmlentities('<list><item></item></list>'); ?>

                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12 mb-3">
                                        C) <input type="radio" value="c" name="questao2" i> <?php echo htmlentities('<ul><li></li></ul>'); ?>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12 mb-3">
                                        D) <input type="radio" value="d" name="questao2" > 

                                      </div>
                                    </div>
                                    
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                    <button type="button" class="btn btn-primary" onclick="questao2();">Enviar</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="card accordion-item">
                      <h2 class="accordion-header" id="headingVideo3">
                        <button
                          type="button"
                          class="accordion-button collapsed"
                          data-bs-toggle="collapse"
                          data-bs-target="#accordionVideo3"
                          aria-expanded="false"
                          aria-controls="accordionVideo3"
                        >
                          Vídeo 3
                        </button>
                      </h2>
                      <div
                        id="accordionVideo3"
                        class="accordion-collapse collapse"
                        aria-labelledby="headingVideo3"
                        data-bs-parent="#accordionExample"
                      >
                        <div class="accordion-body">
                          <div class="embed">
                          <iframe width="896" height="504" src="https://www.youtube.com/embed/xhoQAJ-nTcg?list=PLiInvBAtTPBPqaQxtMs29TE762F23YgzU" title="Curso HTML para INCIANTES 3/4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                          </div>

                          <!-- Button trigger modal -->
                            <button style="margin-top:15px" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-questao3">
                              Questão
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="modal-questao3" tabindex="-1" role="dialog"  aria-hidden="true">
                              <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Responda a questão</h5>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="row">
                                      <div class="col-md-12 mb-3">
                                        <p>Qual a forma correta de se criar uma imagem?</p>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12 mb-3">
                                        A) <input type="radio" value="a" name="questao3" > <?php echo htmlentities('<img>link imagem</img>'); ?>

                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12 mb-3">
                                        B) <input type="radio" value="b" name="questao3" > <?php echo htmlentities('<img src="link imagem">'); ?>

                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12 mb-3">
                                        C) <input type="radio" value="c" name="questao3" i><?php echo htmlentities('<figure scr="link imagem"></figure>'); ?>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12 mb-3">
                                        D) <input type="radio" value="d" name="questao3" >

                                      </div>
                                    </div>
                                    
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                    <button type="button" class="btn btn-primary" onclick="questao3();">Enviar</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="card accordion-item">
                      <h2 class="accordion-header" id="headingVideo4">
                        <button
                          type="button"
                          class="accordion-button collapsed"
                          data-bs-toggle="collapse"
                          data-bs-target="#accordionVideo4"
                          aria-expanded="false"
                          aria-controls="accordionVideo4"
                        >
                          Vídeo 4
                        </button>
                      </h2>
                      <div
                        id="accordionVideo4"
                        class="accordion-collapse collapse"
                        aria-labelledby="headingVideo4"
                        data-bs-parent="#accordionExample"
                      >
                        <div class="accordion-body">
                          <div class="embed">
                          <iframe width="896" height="504" src="https://www.youtube.com/embed/6cAah8YvGW0?list=PLiInvBAtTPBPqaQxtMs29TE762F23YgzU" title="Curso HTML para INCIANTES 4/4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                          </div>

                          <!-- Button trigger modal -->
                            <button style="margin-top:15px" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-questao4">
                              Questão
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="modal-questao4" tabindex="-1" role="dialog"  aria-hidden="true">
                              <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Responda a questão</h5>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="row">
                                      <div class="col-md-12 mb-3">
                                        <p>Qual tag abaixo pertence ao corpo de uma tabela </p>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12 mb-3">
                                        A) <input type="radio" value="a" name="questao4" > <?php echo htmlentities('<thead>'); ?>

                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12 mb-3">
                                        B) <input type="radio" value="b" name="questao4" > <?php echo htmlentities('<footer>'); ?>

                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12 mb-3">
                                        C) <input type="radio" value="c" name="questao4" i> <?php echo htmlentities('<tf>'); ?>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12 mb-3">
                                        D) <input type="radio" value="d" name="questao4" > 

                                      </div>
                                    </div>
                                    
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                    <button type="button" class="btn btn-primary" onclick="questao4();">Enviar</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="card accordion-item">
                      <h2 class="accordion-header" id="headingVideo5">
                        <button
                          type="button"
                          class="accordion-button collapsed"
                          data-bs-toggle="collapse"
                          data-bs-target="#accordionVideo5"
                          aria-expanded="false"
                          aria-controls="accordionVideo5"
                        >
                          Vídeo 5
                        </button>
                      </h2>
                      <div
                        id="accordionVideo5"
                        class="accordion-collapse collapse"
                        aria-labelledby="headingVideo5"
                        data-bs-parent="#accordionExample"
                      >
                        <div class="accordion-body">
                          <div class="embed">
                          <iframe width="896" height="504" src="https://www.youtube.com/embed/-FQP7hD-J6A" title="TODAS AS TAGS HTML QUE VOCÊ PRECISA SABER" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                          </div>

                          <!-- Button trigger modal -->
                            <button style="margin-top:15px" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-questao5">
                              Questão
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="modal-questao5" tabindex="-1" role="dialog"  aria-hidden="true">
                              <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Responda a questão</h5>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="row">
                                      <div class="col-md-12 mb-3">
                                        <p>Qual tag abaixo pertence ao HTML </p>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12 mb-3">
                                        A) <input type="radio" value="a" name="questao5" > <?php echo htmlentities('<weight>'); ?>

                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12 mb-3">
                                        B) <input type="radio" value="b" name="questao5" > <?php echo htmlentities('<super>'); ?>

                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12 mb-3">
                                        C) <input type="radio" value="c" name="questao5" i> <?php echo htmlentities('<sup>'); ?>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12 mb-3">
                                        D) <input type="radio" value="d" name="questao5" >

                                      </div>
                                    </div>
                                    
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                    <button type="button" class="btn btn-primary" onclick="questao5();">Enviar</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="card accordion-item">
                      <h2 class="accordion-header" id="headingPesquisar">
                        <button
                          type="button"
                          class="accordion-button collapsed"
                          data-bs-toggle="collapse"
                          data-bs-target="#accordionPesquisar"
                          aria-expanded="false"
                          aria-controls="accordionPesquisar"
                        >
                          Pesquisar Vídeos
                        </button>
                      </h2>
                      <div
                        id="accordionPesquisar"
                        class="accordion-collapse collapse"
                        aria-labelledby="headingPesquisar"
                        data-bs-parent="#accordionExample"
                      >
                        <div class="accordion-body">
                          
                        
                          <div class="col-md-4" style="padding:0px;">
                            <p>Informe a pesquisa</p>
                            <p><input type="text" name="q"  id="textoPesquisar" class="form-control" ></p>
                          </div>
                          <div class="col-md-4" style="padding: 0px;">
                            <p>Informe a quantidade de vídeos</p>
                            <p><input type="text" name="q"  id="qtdeVideos" class="form-control" ></p>
                          </div>
                          <di class="col-md-12" style="padding: 0px;">
                            <button style="margin-bottom: 30px;" onclick="pesquisar();" type="button" class="btn btn-primary">Pesquisar</button>
                          </di>
                         
                      
                      <div id="video">

                      </div>
                          
                        </div>
                      </div>
                    </div>
                    <div class="card accordion-item">
                      <h2 class="accordion-header" id="headingvideo">
                        <button
                          type="button"
                          class="accordion-button collapsed"
                          data-bs-toggle="collapse"
                          data-bs-target="#accordionvideo"
                          aria-expanded="false"
                          aria-controls="accordionvideo"
                        >
                          Avaliação
                        </button>
                      </h2>
                      <div
                        id="accordionvideo"
                        class="accordion-collapse collapse"
                        aria-labelledby="headingvideo"
                        data-bs-parent="#accordionExample"
                      >
                        <div class="accordion-body">
                          <div class="row">
                            <div class="col-md-12">
                              <div id="avisoAvaliacao"></div>
                            <div class="alert alert-primary" role="alert">
                              <b>PERGUNTA 1</b>
                            </div>
                              <p>Assinale a alteranativa correta: </p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12 mb-3">
                              A) <input type="radio" name="avaliacao1" value="a"> HTML e CSS são tecnológias utilizadas na criação de páginas Web: HTML(html e xhtml) para a estrutura, CSS para o estilo e layout, incluindo WebFonts.
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12 mb-3">
                              B) <input type="radio" name="avaliacao1" value="b"> CSS é uma linguagem de programação poderosa e requer HTML para o seu funcionamento.
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12 mb-3">
                              C) <input type="radio" name="avaliacao1" value="c"> HTML é um programa que favorece o desenvlvimento de arquivos em CSS.
                             </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12 mb-3">
                              D) <input type="radio" name="avaliacao1" value="d"> Ambos são os conseitos fundamentais aplicados em dados abertos conectados.
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                            <div class="alert alert-primary" role="alert">
                              <b>PERGUNTA 2</b>
                            </div>
                              <p>Qual tag usa-se para colocar títulos nas páginas </p>
                             
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12 mb-3">
                              A) <input type="radio" name="avaliacao2" value="a"> <?php echo htmlentities('<H1>'); ?>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12 mb-3">
                              B) <input type="radio" name="avaliacao2" value="b"> <?php echo htmlentities('<Heade>'); ?>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12 mb-3">
                              C) <input type="radio" name="avaliacao2" value="c"> <?php echo htmlentities('<Title>'); ?>
                             </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12 mb-3">
                              D) <input type="radio" name="avaliacao2" value="d"> <?php echo htmlentities('<Div>'); ?> 
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                            <div class="alert alert-primary" role="alert">
                              <b>PERGUNTA 3</b>
                            </div>
                              <p>Qual tag se usar para declarar uma imagem. </p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12 mb-3">
                              A) <input type="radio" name="avaliacao3" value="a"> <?php echo htmlentities('<img>'); ?>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12 mb-3">
                              B) <input type="radio" name="avaliacao3" value="b"> <?php echo htmlentities('<Figcaption>'); ?>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12 mb-3">
                              C) <input type="radio" name="avaliacao3" value="c"> <?php echo htmlentities('<Figure>'); ?>
                             </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12 mb-3">
                              D) <input type="radio" name="avaliacao3" value="d"> <?php echo htmlentities('<H2>'); ?>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                            <div class="alert alert-primary" role="alert">
                              <b>PERGUNTA 4</b>
                            </div>
                              <p>como defino paragrafos no meu código.</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12 mb-3">
                              A) <input type="radio" name="avaliacao4" value="a"><?php echo htmlentities('<p></p>'); ?>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12 mb-3">
                              B) <input type="radio" name="avaliacao4" value="b"> <?php echo htmlentities('<div></div>'); ?>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12 mb-3">
                              C) <input type="radio" name="avaliacao4" value="c"> <?php echo htmlentities('<H1></H1>'); ?>
                             </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12 mb-3">
                              D) <input type="radio" name="avaliacao4" value="d"> <?php echo htmlentities('<style></style>'); ?>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                            <div class="alert alert-primary" role="alert">
                              <b>PERGUNTA 5</b>
                            </div>
                              <p>No HTML todos sabemos que tecla "ENTER" não cria espaços nem quebra de linhas, ele usa um código epecifica para quebra de linhas.Como se chama? </p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12 mb-3">
                              A) <input type="radio" name="avaliacao5" value="a"> <?php echo htmlentities('<tag></tag>'); ?>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12 mb-3">
                              B) <input type="radio" name="avaliacao5" value="b"> <?php echo htmlentities('<br></br>'); ?>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12 mb-3">
                              C) <input type="radio" name="avaliacao5" value="c"> <?php echo htmlentities('<link></link>'); ?>
                             </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12 mb-3">
                              D) <input type="radio" name="avaliacao5" value="d"> <?php echo htmlentities('<enter></enter>'); ?> 
                            </div>
                          </div>
                          <div>
                            <div class="col-md-12">
                              <button onclick="avaliacao();" class="btn btn-primary" id="btn-avaliacao">Enviar</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card accordion-item ">
                      <h2 class="accordion-header" id="headingCert">
                        <button
                          type="button"
                          class="accordion-button collapsed"
                          data-bs-toggle="collapse"
                          aria-expanded="false"
                          data-bs-target="#accordionCert"
                          aria-controls="accordionCert"
                        >
                          Certificado
                        </button>
                      </h2>

                      <div
                        id="accordionCert"
                        class="accordion-collapse collapse "
                        data-bs-parent="#accordionExample"
                      >
                        <div class="accordion-body">
                          <div id="avisoCertificado"></div>
                          <button class="btn btn-primary" id="certificado" onclick="certificado();">Emitir Certificado</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--/ Accordion -->

              <!--/ Advance Styling Options -->
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

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <script>
       $(document).ready(function(){
        $('.disclaimer').hide();
        $.ajax({
            url: '/requests/notas.php',
            method: 'POST',
            success: function (response) {
              if(response == 0){
                $('#avisoAvaliacao').html('');
                $('#avisoCertificado').html('<div class="alert alert-danger" role="alert"> Faça a avaliação para emitir seu certificado</div>');
                $('#certificado').attr('disabled',true); 
                $('#btn-avaliacao').attr('disabled',false); 
              }
              else{
                var obj = JSON.parse(response);
                if(obj.html == null){
                  $('#avisoAvaliacao').html('');
                  $('#avisoCertificado').html('<div class="alert alert-danger" role="alert"> Faça a avaliação para emitir seu certificado</div>');
                  $('#certificado').attr('disabled',true); 
                  $('#btn-avaliacao').attr('disabled',false); 
                }
                else{
                  $('#avisoCertificado').html('');
                  $('#avisoAvaliacao').html('<div class="alert alert-danger" role="alert"> Sua avaliação já foi realizada veja sua pontuação no menu Notas</div>');
                  $('#certificado').attr('disabled',false); 
                  $('#btn-avaliacao').attr('disabled',true);  
                }
              }
              

              
              
            },
            error: function () {
              close();
              swal({
                title:'Ocorreu um erro ao efetuar login',
                icon:'error'
              });
            }
          });
      });

      function questao1(){
        var questao1 = $("input[name='questao1']:checked").val();
        if(questao1=='b')
        swal('Parabéns','Você acertou, resposta certa é a B','success');
        else
          swal('Aviso','Esta reposta está errada, resposta certa é a B','warning');
      }

      function questao2(){
        var questao1 = $("input[name='questao2']:checked").val();
        if(questao1 =='c')
        swal('Parabéns','Você acertou, resposta certa é a C','success');
        else
          swal('Aviso','Esta reposta está errada, resposta certa é a C','warning');
      }

      function questao3(){
        var questao1 = $("input[name='questao3']:checked").val();
        if(questao1=='b')
        swal('Parabéns','Você acertou, resposta certa é a B','success');
        else
          swal('Aviso','Esta reposta está errada, resposta certa é a B','warning');
      }

      function questao4(){
        var questao1 = $("input[name='questao5']:checked").val();
        if(questao1=='a')
        swal('Parabéns','Você acertou, resposta certa é a A','success');
        else
          swal('Aviso','Esta reposta está errada, resposta certa é a A','warning');
      }

      function questao5(){
        var questao1 = $("input[name='questao5']:checked").val();
        if(questao1=='c')
        swal('Parabéns','Você acertou, resposta certa é a C','success');
        else
          swal('Aviso','Esta reposta está errada, resposta certa é a C','warning');
      }

      

      function avaliacao(){
        $('.loader').removeClass('hidden');
        var nota = 0;
        if($("input[name='avaliacao1']:checked").val() == 'a')
        nota = nota +2;
        if($("input[name='avaliacao2']:checked").val() == 'c')
        nota = nota +2;
        if($("input[name='avaliacao3']:checked").val() == 'a')
        nota = nota +2;
        if($("input[name='avaliacao4']:checked").val() == 'a')
        nota = nota +2;
        if($("input[name='avaliacao5']:checked").val() == 'b')
        nota = nota +2;

        if(nota >= 6 ){
          $.ajax({
            url: '/requests/avaliacao.php',
            method: 'POST',
            data: {
              nota: nota,
              curso: 'html'
            },
            success: function (response) {
              if(response ==1){
                $('#avisoCertificado').html('');
                $('#avisoAvaliacao').html('<div class="alert alert-danger" role="alert"> Sua avaliação já foi realizada veja sua pontuação no menu Notas</div>');
                $('#certificado').attr('disabled',false); 
                $('#btn-avaliacao').attr('disabled',true); 
                swal('Nota','Você tirou '+nota+' nesta avaliação, agora você pode emitir seu certificado','success');
              }
              else
              swal('Atenção','Erro ao registrar nota, tente novamente','warning');

              $('.loader').addClass('hidden');
              
              
            },
            error: function () {
              $('.loader').addClass('hidden');
              swal({
                title:'Ocorreu um erro',
                icon:'error'
              });
            }
          });

        }
        else{
          $('.loader').addClass('hidden');
          swal('Nota','Você precisa tirar 6 nesta avaliação e sua nota foi: '+nota+', tente novamente','success');
        }
        
        

        

        
      }

      function certificado(){
        $.ajax({
            url: '/requests/certificado.php',
            method: 'POST',
            data: {
              curso: 'HTML'
            },
            success: function (response) {
              window.open('relatorio.php', '_blank');
            },
            error: function () {
              close();
              swal({
                title:'Ocorreu um erro ao efetuar login',
                icon:'error'
              });
            }
          });
        
      }

      function pesquisar(){
         $('.loader').removeClass('hidden');
        $.ajax({
            url: '/requests/youtube.php',
            method: 'POST',
            data: {
              pesquisa: $('#textoPesquisar').val(),
              qtdeVideos: $('#qtdeVideos').val()
            },
            success: function (response) {
              
              response = JSON.parse(response);
              $('#video').html('');
              response.items.forEach($item=>{
                console.log($item.id.videoId);
              $('#video').append(`<div class="embed" style="margin-bottom: 25px"><iframe width="420" height="315" src="http://www.youtube.com.br/embed/`+$item.id.videoId+`" frameborder="0" allowfullscreen></iframe></div>`);
              })
              $('.loader').addClass('hidden');
             
            },
            error: function () {
              $('.loader').addClass('hidden');
              swal({
                title:'Ocorreu um erro ao efetuar login',
                icon:'error'
              });
            }
          });
      }
    </script>
  </body>
</html>
