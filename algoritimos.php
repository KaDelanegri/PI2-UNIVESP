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

    <title>Algoritimos</title>

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
                <!-- Place this tag where you want the button to render. -->
                <li class="nav-item lh-1 me-3">
                  <a href="logout.php"> Logout</a>
                </li>

                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

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
                          <p>Em nossa vida temos por hábito repetir diariamente situações de forma automática sem nos darmos conta ou analisarmos como o fazemos, exemplos são muitos vamos citar um deles como: Escovar os dentes ao acordar. É algo tão normal em nosso cotidiano que não nos damos conta de que há uma sequencia de passos ordenados para conseguirmos realizar a tarefa de forma satisfatória, o que provavelmente não se daria se não fossem seguidos. Vamos analisar a ação e seus passos:  Acordar, sentar na cama, calçar os chinelos, levantar, ir até o banheiro, ascender à luz, pegar a escova de dente, pegar a pasta de dente, abrir a pasta de dente, colocar a pasta de dente na escova, fechar a pasta de dente, escovar os dentes, abrir a torneira, enxaguar a boca, limpar o resíduo da pasta de dente da escova, fechar a torneira, guardar a pasta de dentes, guardar a escova de dente, apagar a luz e sair do banheiro. Perceba que há alguns passos que tornariam a situação insatisfatória como no caso de, por exemplo: Pegar a pasta de dentes, mas não abri-la e tentar colocar pasta na escova, sem abrir antes seria impossível realizar a ação não é mesmo? Imagine também como você poderia escovar os dentes sem ter a pasta na escova ou ainda como enxaguaria a boca se você não abriu a torneira para ter acesso à água para realizar esse passo?</p>
                          <p>Exemplos são muitos em nosso cotidiano, como tomar um café com pão na chapa, os procedimentos são outros, mas há uma sequência para que possa se tornar possível a realização da ação satisfatoriamente, e a essa sequência chamamos de algoritmo. 
                          <p>Neste momento imagino que você esteja surpreso por notar que sempre usou algoritmos em sua vida sem ter se dado conta e mais que isso, notou que não seja algo tão difícil quanto o nome sugere, mas talvez deva estar se perguntando “o qual é a definição de algoritmo então?” ou talvez: “mas isso não é aplicado em maquinas? Então como se dá isso?”, e imagino que muitas outras perguntas.</p>
                          <p>No intuito de responder muitas dessas dúvidas e curiosidades e enriquecer seu conhecimento, apresentamos nosso curso de algoritmos. Nele abordaremos diversos temas, desde o conceito, passando por estruturas para montar um algoritmo, exercícios com exemplos do cotidiano e ao final de cada vídeo aula haverá exercícios valendo nota, para que você possa testar seus conhecimentos adquiridos ou ainda conhecer os temas que você teve maior dificuldade e rever, ou mesmo procurar conteúdos adicionais sobre o assunto.</p>
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
                          <iframe width="853" height="480" src="https://www.youtube.com/embed/Xo1V_JL1yAg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                                        <p>Segundo o professor Sérgio Amadeu da Silveira, é correto afirmar que:</p>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12 mb-3">
                                        A) <input type="radio" value="a" name="questao1" id="questao1"> Os algoritmos estão em todas as partes e só podem trazer benefícios, por essa razão não há motivos para preocupações.
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12 mb-3">
                                        B) <input type="radio" value="b" name="questao1" id="questao1"> Os algoritmos são fundamentais apenas nas realizações de cálculos e por essa razão não vão interferir em outros aspectos da sociedade quando houver uma intermediação algorítmica.
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12 mb-3">
                                        C) <input type="radio" value="c" name="questao1" id="questao1"> Os algoritmos são fundamentais nas realizações de cálculos e por essa razão não vão interferir em outros aspectos da sociedade quando houver uma intermediação algorítmica.
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12 mb-3">
                                        D) <input type="radio" value="d" name="questao1" id="questao1"> Os algoritmos são importantes e existe a necessidade de uma regulação algorítmica quando se trata de um algoritmo de grande relevância pública.
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
                          <iframe width="853" height="480" src="https://www.youtube.com/embed/M2Af7gkbbro" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                                        <p>Utilizando a ferramenta para representação em pseudocódigo Visualg. E considerando a existência das 6 regras para nomeação de identificadores, quais das palavras abaixo não pode ser utilizada para ser identificador: </p>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12 mb-3">
                                        A) <input type="radio" value="a" name="questao2" > Nota2.

                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12 mb-3">
                                        B) <input type="radio" value="b" name="questao2" > Peixe_boi.

                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12 mb-3">
                                        C) <input type="radio" value="c" name="questao2" i> 10_casas. 
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12 mb-3">
                                        D) <input type="radio" value="d" name="questao2" > Algoritmos.

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
                          <iframe width="853" height="480" src="https://www.youtube.com/embed/IuI8o58n4bM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                                        <p>De acordo com a explicação nesta aula do professor Marcelo Linder, é correto afirmar que:</p>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12 mb-3">
                                        A) <input type="radio" value="a" name="questao3" > Para um melhor aprendizado, mais importante que observar a resolução da questão apresentada, é tentar solucionar praticando e posteriormente conferir se conseguiu chegar à resposta correta.

                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12 mb-3">
                                        B) <input type="radio" value="b" name="questao3" > Toda questão se resolve da mesma forma, então basta assistir e decorar como se faz um exercício que será possível resolver qualquer problema.

                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12 mb-3">
                                        C) <input type="radio" value="c" name="questao3" i> Por se tratar de pseudocódigo, não há a necessidade de conhecer e entender o processo realizado para se chegar à solução apresentada. 
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12 mb-3">
                                        D) <input type="radio" value="d" name="questao3" >Pela sua experiência como professor, ninguém consegue resolver o exercício apresentado.

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
                          <iframe width="900" height="506" src="https://www.youtube.com/embed/t9_dHIy0QxA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                                        <p>Dentre os modelos abaixo de Algoritmos de Ordenação, qual foi desenvolvido por Sir Tony Hoare: </p>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12 mb-3">
                                        A) <input type="radio" value="a" name="questao4" > Pancake Sor.

                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12 mb-3">
                                        B) <input type="radio" value="b" name="questao4" > Quick Sort.

                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12 mb-3">
                                        C) <input type="radio" value="c" name="questao4" i> Bubble Sort. 
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12 mb-3">
                                        D) <input type="radio" value="d" name="questao4" > Merge Sort.

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
                          <iframe width="900" height="506" src="https://www.youtube.com/embed/4QWoOoYffh8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                                        <p>De acordo com o conteúdo estudado é correto afirmar que: </p>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12 mb-3">
                                        A) <input type="radio" value="a" name="questao5" > Estrutura condicional simples e composta é a mesma coisa.

                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12 mb-3">
                                        B) <input type="radio" value="b" name="questao5" > Em todo caso só é possível usar a estrutura condicional simples e com as mesmas instruções para se resolver qualquer problema de forma satisfatória.

                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12 mb-3">
                                        C) <input type="radio" value="c" name="questao5" i> Em todo caso só é possível usar a estrutura condicional composta e com as mesmas instruções para se resolver qualquer problema de forma satisfatória. 
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12 mb-3">
                                        D) <input type="radio" value="d" name="questao5" > A depender do caso é melhor usar a estrutura condicional simples ou composta, ou ainda as duas estruturas dentro do mesmo caso e ainda com um grupo diferente de instruções.

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
                      <h2 class="accordion-header" id="headingVideo6">
                        <button
                          type="button"
                          class="accordion-button collapsed"
                          data-bs-toggle="collapse"
                          data-bs-target="#accordionVideo6"
                          aria-expanded="false"
                          aria-controls="accordionVideo6"
                        >
                          Vídeo 6
                        </button>
                      </h2>
                      <div
                        id="accordionVideo6"
                        class="accordion-collapse collapse"
                        aria-labelledby="headingVideo6"
                        data-bs-parent="#accordionExample"
                      >
                        <div class="accordion-body">
                          <div class="embed">
                          <iframe width="900" height="506" src="https://www.youtube.com/embed/ikJ18ZMdSLw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                          </div>

                          <!-- Button trigger modal -->
                            <button style="margin-top:15px" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-questao6">
                              Questão
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="modal-questao6" tabindex="-1" role="dialog"  aria-hidden="true">
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
                                        <p>Na estrutura de repetição, existe o comando “enquanto”. Em qual item abaixo não faz parte da propriedade deste comando: </p>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12 mb-3">
                                        A) <input type="radio" value="a" name="questao6" > Expressão de controle.

                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12 mb-3">
                                        B) <input type="radio" value="b" name="questao6" > Expressão condicional.

                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12 mb-3">
                                        C) <input type="radio" value="c" name="questao6" i> Inicialização. 
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12 mb-3">
                                        D) <input type="radio" value="d" name="questao6" > Atualização.

                                      </div>
                                    </div>
                                    
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                    <button type="button" class="btn btn-primary" onclick="questao6();">Enviar</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="card accordion-item">
                      <h2 class="accordion-header" id="headingVideo7">
                        <button
                          type="button"
                          class="accordion-button collapsed"
                          data-bs-toggle="collapse"
                          data-bs-target="#accordionVideo7"
                          aria-expanded="false"
                          aria-controls="accordionVideo7"
                        >
                          Vídeo 7
                        </button>
                      </h2>
                      <div
                        id="accordionVideo7"
                        class="accordion-collapse collapse"
                        aria-labelledby="headingVideo7"
                        data-bs-parent="#accordionExample"
                      >
                        <div class="accordion-body">
                          <div class="embed">
                          <iframe width="900" height="506" src="https://www.youtube.com/embed/nPOH6pxMpmM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                          </div>

                          <!-- Button trigger modal -->
                            <button style="margin-top:15px" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-questao7">
                              Questão
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="modal-questao7" tabindex="-1" role="dialog"  aria-hidden="true">
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
                                        <p>Após os estudos de função e procedimento em um algoritmo é possível afirmar que: </p>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12 mb-3">
                                        A) <input type="radio" value="a" name="questao7" > Vai deixar mais extenso o código, pois está adicionando ainda mais coisas nele, dificultando sua manutenção ou correção. 

                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12 mb-3">
                                        B) <input type="radio" value="b" name="questao7" > Vai possibilitar reduzir o código, pois evitará possíveis repetições e facilitará em caso de manutenção ou correção.

                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12 mb-3">
                                        C) <input type="radio" value="c" name="questao7" i> Vai desorganizar o código para que ninguém além de quem o escreveu possa entendê-lo. 
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12 mb-3">
                                        D) <input type="radio" value="d" name="questao7" > Vai trazer mais segurança ao código, impedindo que ele seja modificado. 

                                      </div>
                                    </div>
                                    
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                    <button type="button" class="btn btn-primary" onclick="questao7();">Enviar</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                      </div>
                    </div>
                    <div class="card accordion-item">
                      <h2 class="accordion-header" id="headingVideo8">
                        <button
                          type="button"
                          class="accordion-button collapsed"
                          data-bs-toggle="collapse"
                          data-bs-target="#accordionVideo8"
                          aria-expanded="false"
                          aria-controls="accordionVideo8"
                        >
                          Vídeo 8
                        </button>
                      </h2>
                      <div
                        id="accordionVideo8"
                        class="accordion-collapse collapse"
                        aria-labelledby="headingVideo8"
                        data-bs-parent="#accordionExample"
                      >
                        <div class="accordion-body">
                          <div class="embed">
                          <iframe width="900" height="506" src="https://www.youtube.com/embed/j9473xQ39vY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                          </div>

                          <!-- Button trigger modal -->
                            <button style="margin-top:15px" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-questao8">
                              Questão
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="modal-questao8" tabindex="-1" role="dialog"  aria-hidden="true">
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
                                        <p>Considerando a utilização do Vetlog, veja o seguinte programa para apresentação de elementos pares:  </p>
                                        <br>
                                        <img class="card-img-top" src="assets/img/questao8.png"  />
                                        <br>
                                        <p>Digitando os seguintes valores: 1, 3, 5, 4, 6, 8, 3, o que aparecerá na execução do programa: </p>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12 mb-3">
                                        A) <input type="radio" value="a" name="questao8" > O total de pares foi 3. 

                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12 mb-3">
                                        B) <input type="radio" value="b" name="questao8" >  O total de pares foi 3. Valor PAR na Posicao 4; Valor PAR na Posicao 5; Valor PAR na Posicao 6.

                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12 mb-3">
                                        C) <input type="radio" value="c" name="questao8" i> Valor PAR na Posicao 4; Valor PAR na Posicao 5; Valor PAR na Posicao 6. O total de pares foi 3. 
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12 mb-3">
                                        D) <input type="radio" value="d" name="questao8" > Valor PAR na Posicao 4; Valor PAR na Posicao 5; Valor PAR na Posicao 6; Valor PAR na Posicao 3.

                                      </div>
                                    </div>
                                    
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                    <button type="button" class="btn btn-primary" onclick="questao8();">Enviar</button>
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
                              <p>Em termos mais simples qual é a definição de Algoritmos? </p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12 mb-3">
                              A) <input type="radio" name="avaliacao1" value="a"> Em termos mais simples, é possível afirmarmos que um algoritmo é um conjunto de ações que independente de sua ordem de execução, irá solucionar uma tarefa específica.
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12 mb-3">
                              B) <input type="radio" name="avaliacao1" value="b"> Em termos mais simples, é possível afirmarmos que um algoritmo é uma receita que explica todos os passos necessários para se solucionar uma tarefa específica.
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12 mb-3">
                              C) <input type="radio" name="avaliacao1" value="c"> Em termos mais simples, é possível afirmarmos que um algoritmo é uma tarefa específica que pode somente resolver cálculos complexos.
                             </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12 mb-3">
                              D) <input type="radio" name="avaliacao1" value="d"> Em termos mais simples, é possível afirmarmos que um algoritmo é um conjunto de ações que independente de sua ordem de execução só conseguirá resolver problemas simples e não os complexos. 
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                            <div class="alert alert-primary" role="alert">
                              <b>PERGUNTA 2</b>
                            </div>
                              <p>Para construção de um pseudcódigo para representação de um algoritmo que efetue a multiplicação de dois inteiros, temos um passo a passo necessário: </p>
                              <p>I- Definir os dados de entrada, ou seja, quais dados serão fornecidos; </p>
                              <p>II- Ler atentamente o enunciado do problema, compreendendo-o e destacando os pontos mais importantes; </p>
                              <p>III- Definir o processamento, ou seja, quais cálculos serão efetuados e quais as restrições para esses cálculos. O processamento é responsável pela obtenção dos dados de saída com base nos dados de entrada; </p>
                              <p>IV- Elaborar o algoritmo; </p>
                              <p>V- Definir as variáveis necessárias para armazenar as entradas e efetuar o processamento; </p>
                              <p>VI- Definir os dados de saída, ou seja, quais dados serão gerados depois do processamento; </p>
                              <p>VII- Testar o algoritmo realizando simulações; </p><br>
                              <p>Considerando o passo a passo a acima informar a ordem proposta para ser efetuada a multiplicação: </p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12 mb-3">
                              A) <input type="radio" name="avaliacao2" value="a"> I – II – III – IV – V – VI – VII
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12 mb-3">
                              B) <input type="radio" name="avaliacao2" value="b"> II – I – III – VI – V – VI – VII
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12 mb-3">
                              C) <input type="radio" name="avaliacao2" value="c"> II – I – VI – III – V – IV – VII
                             </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12 mb-3">
                              D) <input type="radio" name="avaliacao2" value="d"> I – II – VI – III – V – VI – VII 
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                            <div class="alert alert-primary" role="alert">
                              <b>PERGUNTA 3</b>
                            </div>
                              <p>Na estrutura de repetição, se dividem em 3 tipos: Estruturas Pré-testadas; Estruturas Pós-testadas e Estrutura de controle. Onde também se subdividem em 2 tipos indeterminada e determinada. Considerando a estrutura de controle, quais das opções abaixo é similar a esta. </p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12 mb-3">
                              A) <input type="radio" name="avaliacao3" value="a"> Estrutura pré-testada – determinada.
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12 mb-3">
                              B) <input type="radio" name="avaliacao3" value="b"> Estrutura pós-testada – determinada.
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12 mb-3">
                              C) <input type="radio" name="avaliacao3" value="c"> Estrutura pré-testada – indeterminada.
                             </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12 mb-3">
                              D) <input type="radio" name="avaliacao3" value="d"> Estrutura pós-testada – indeterminada. 
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                            <div class="alert alert-primary" role="alert">
                              <b>PERGUNTA 4</b>
                            </div>
                              <p>Na aula de função e procedimento, temos o operador “retorne”. Em qual momento ele funciona corretamente:</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12 mb-3">
                              A) <input type="radio" name="avaliacao4" value="a"> Este operador pode ser utilizado várias vezes, sem restrição.
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12 mb-3">
                              B) <input type="radio" name="avaliacao4" value="b"> Este operador pode ser utilizado várias vezes, desde que a condição esteja em execução fora da função. 
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12 mb-3">
                              C) <input type="radio" name="avaliacao4" value="c"> Este operador pode ser utilizado várias vezes, desde que a condição esteja em execução dentro da função. 
                             </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12 mb-3">
                              D) <input type="radio" name="avaliacao4" value="d"> Este operador pode ser utilizado somente uma vez. 
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                            <div class="alert alert-primary" role="alert">
                              <b>PERGUNTA 5</b>
                            </div>
                              <p>Na estrutura de repetição do algoritmo são divididas em três tipos, conforme as figuras a seguir: </p>
                              <img src="assets/img/atividade5-1.png" alt="" styel="margin-bottom:10px">
                              <img src="assets/img/atividade5-2.png" alt="" styel="margin-bottom:10px">
                              <img src="assets/img/atividade5-3.png" alt="" styel="margin-bottom:10px">
                              <br>
                              <p>Informe a ordem correta de cada figura: </p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12 mb-3">
                              A) <input type="radio" name="avaliacao5" value="a"> Estruturas pré-testadas, estruturas pós-testadas e estrutura de controle. 
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12 mb-3">
                              B) <input type="radio" name="avaliacao5" value="b"> Estrutura pós-testadas, estrutura pré-testadas e estrutura de controle.
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12 mb-3">
                              C) <input type="radio" name="avaliacao5" value="c"> Estruturas pós-testadas, estrutura de controle e estruturas pré-testadas.
                             </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12 mb-3">
                              D) <input type="radio" name="avaliacao5" value="d"> Estruturas pré-testadas,  estrutura de controle e estruturas pós-testadas. 
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
                if(obj.algoritimo == null){
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
        if(questao1=='d')
        swal('Parabéns','Você acertou, resposta certa é a D','success');
        else
          swal('Aviso','Esta reposta está errada, resposta certa é a D','warning');
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
        if(questao1=='a')
        swal('Parabéns','Você acertou, resposta certa é a A','success');
        else
          swal('Aviso','Esta reposta está errada, resposta certa é a A','warning');
      }

      function questao4(){
        var questao1 = $("input[name='questao5']:checked").val();
        if(questao1=='b')
        swal('Parabéns','Você acertou, resposta certa é a B','success');
        else
          swal('Aviso','Esta reposta está errada, resposta certa é a B','warning');
      }

      function questao5(){
        var questao1 = $("input[name='questao5']:checked").val();
        if(questao1=='d')
        swal('Parabéns','Você acertou, resposta certa é a D','success');
        else
          swal('Aviso','Esta reposta está errada, resposta certa é a D','warning');
      }

      function questao6(){
        var questao1 = $("input[name='questao6']:checked").val();
        if(questao1=='a')
        swal('Parabéns','Você acertou, resposta certa é a A','success');
        else
          swal('Aviso','Esta reposta está errada, resposta certa é a A','warning');
      }

      function questao7(){
        var questao1 = $("input[name='questao7']:checked").val();
        if(questao1=='b')
        swal('Parabéns','Você acertou, resposta certa é a B','success');
        else
          swal('Aviso','Esta reposta está errada, resposta certa é a B','warning');
      }

      function questao8(){
        var questao1 = $("input[name='questao8']:checked").val();
        if(questao1=='c')
        swal('Parabéns','Você acertou, resposta certa é a C','success');
        else
          swal('Aviso','Esta reposta está errada, resposta certa é a C','warning');
      }

      function avaliacao(){
        $('.loader').removeClass('hidden');
        var nota = 0;
        if($("input[name='avaliacao1']:checked").val() == 'b')
        nota = nota +2;
        if($("input[name='avaliacao2']:checked").val() == 'c')
        nota = nota +2;
        if($("input[name='avaliacao3']:checked").val() == 'a')
        nota = nota +2;
        if($("input[name='avaliacao4']:checked").val() == 'c')
        nota = nota +2;
        if($("input[name='avaliacao5']:checked").val() == 'd')
        nota = nota +2;

        if(nota >= 6 ){
          $.ajax({
            url: '/requests/avaliacao.php',
            method: 'POST',
            data: {
              nota: nota,
              curso: 'algoritimo'
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
              curso: 'Algoritimos'
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
