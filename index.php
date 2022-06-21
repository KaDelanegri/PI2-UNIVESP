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
  lang="en"
  class="light-style customizer-hide"
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

    <title>Login</title>

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

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="assets/vendor/css/pages/page-auth.css" />
    <!-- Helpers -->
    <script src="assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="assets/js/config.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

  
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  </head>

  <body style="background-color: #eeeeee;">
  <div class="loader hidden"></div>
    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <a href="index.html" class="app-brand-link gap-2">
                  <span class="app-brand-logo demo">
                    <img src="assets/img/logo.png" alt="">
                  </span>
                  <span class="app-brand-text demo text-body fw-bolder">INCLUTEC</span>
                </a>
              </div>
              <!-- /Logo -->
              

              <form id="formAuthentication" class="mb-3" action="principal.html" method="POST">
                <div class="mb-3">
                  <label for="email" class="form-label" alt="Sign in">Nome</label>
                  <input
                  alt="Sign in"
                    type="text"
                    class="form-control"
                    id="nome"
                    name="email-username"
                    autofocus
                  />
                </div>
                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Senha</label>
                  </div>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="senha"
                      class="form-control"
                      name="password"
                      aria-describedby="password"
                    />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                </div>
                <div class="mb-3">
                  <button class="btn btn-primary d-grid w-100" type="button" onclick="logar();" arial-label="Clique para logar">Logar</button>
                </div>
              </form>

              <p class="text-center">
                <span>Não é cadastrado?</span>
                <a href="#">
                  <span  id="abrirCadastrar">Crie uma conta</span>
                </a>
              </p>
              
            </div>
          </div>
          <!-- /Register -->
        </div>
      </div>
    </div>

    <!-- Modal -->
<div class="modal " id="modal-cadastrar" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastrar</h5>
        <button type="button" class="close" onclick="fecharModal();" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="email" class="form-label">Nome Login</label>
            <input
              type="text"
              class="form-control"
              id="nome-cadastro"
              name="email-username"
              autofocus
            />
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Nome Completo</label>
            <input
              type="text"
              class="form-control"
              id="nome-completo-cadastro"
              name="email-username"
              autofocus
            />
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Senha</label>
            <input
              type="password"
              class="form-control"
              id="senha-cadastro"
              name="senha-username"
              autofocus
            />
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" onclick="fecharModal();">Fechar</button>
        <button type="button" onclick="cadastrar();" class="btn btn-primary">Salvar</button>
      </div>
    </div>
  </div>
</div>

    <!-- / Content -->

    

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

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <script>
      $(document).ready(function(){
        $('.disclaimer').hide();
      })

      $('#abrirCadastrar').on('click',function(){
        $('#modal-cadastrar').modal('show');
      })

      function logar(){
        $('#loader').removeClass('hidden');
          $.ajax({
            url: '/requests/login.php',
            method: 'POST',
            data: {
              nome: $('#nome').val(),
              senha: $('#senha').val()
            },
            success: function (response) {
              $('#loader').addClass('hidden');
              if(response ==1)
                window.location.href = "principal.php";
              else
                swal('Atenção','Login inválido','warning');
              
              
            },
            error: function () {
              $('#loader').addClass('hidden');
              swal({
                title:'Ocorreu um erro ao efetuar login',
                icon:'error'
              });
            }
          });
      }
      function cadastrar(){
        $('#loader').removeClass('hidden');
          $.ajax({
            url: '/requests/cadastrar.php',
            method: 'POST',
            data: {
              nome: $('#nome-cadastro').val(),
              nomeCompleto: $('#nome-completo-cadastro').val(),
              senha: $('#senha-cadastro').val()
            },
            success: function (response) {
              $('#loader').addClass('hidden');
              if(response ==1){
                $('#modal-cadastrar').modal('hide');
                swal('Aviso','Cadastro efeutado com sucesso, faça o login','success');
              }
              else
              swal('Atenção','Erro ao cadastrar tente novamente','warning');
              
              
            },
            error: function () {
              $('#loader').addClass('hidden');
              swal({
                title:'Ocorreu um erro ao efetuar login',
                icon:'error'
              });
            }
          });
      }

      function fecharModal(){
        $('#modal-cadastrar').modal('hide');
      }
      
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  </body>
</html>
