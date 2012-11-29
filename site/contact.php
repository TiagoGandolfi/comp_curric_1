<!DOCTYPE html>
<html lang="pt-br">   <!--alterado a linguagem-->
  <head>
    <meta charset="utf-8">
    <title>Site Tiago</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Tiago Cesar Gandolfi - tiago_gandolfi@hotmail.com"> <!--colocado nome e e-mail-->

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    
  </head>

  <body>

  
    <div class="navbar navbar-inverse navbar-fixed-top">
          <div class="navbar-inner">
            <div class="container-fluid">
            <a class="brand" href="#">Meu site</a>
              <div class="nav-collapse collapse">
                <ul class="nav">
                  <li><a href="page1.php">Pagina 1</a></li>
                  <li><a href="page2.php">Pagina 2</a></li>
                  <li><a href="aboutme.php">Sobre Mim</a></li>
                  <li class="active"><a href="contact.php">Contato</a></li>
                </ul>
              </div><!--/.nav-collapse -->
            </div>
          </div>
        </div>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
          <div class="well sidebar-nav">
            <p align="justify">Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, 
              paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é 
              amistosis quis leo. Manduma pindureta quium dia nois Sapien in monti palavris qui num significa nadis i pareci 
              latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostispaga. <br><br>Sapien in monti palavris qui num significa nadis i pareci 
              latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.Sapien in monti palavris qui num significa nadis i pareci 
              latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostisSapien in monti palavris qui num significa nadis i pareci 
              latim. Interessantiss quisso pudia ce rece num gostisSapien in monti palavris qui num significa nadis i pareci 
              latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis</p>
          </div><!--/.well -->
        </div><!--/span-->
    

   
        <div class="span9">
         <div class="hero-unit li">

            <form action = "formulario.php" method="POST">

              <fieldset>  


                <legend> Formulario de contato</legend>

                <input type="hidden" name="pagina" value="contato">

                <label for="idNome">Nome:</Label>
                <input type="text" name="nome" id="idNome">

                <label for="idEmail">E-mail:</Label>
                <input type="email" name="email" id="idEmail">
                 
                <label for = "idMensagem">Mensagem: </label>
                <textarea name="mensagem" id="idMensagem" rows"3"></textarea>
                <br>
                <br>
                <br>

                <button class="btn btn-primary">Enviar Informações</button>

              </fieldset>
            </form>     

          </div>    
        </div>
      <br>
      <hr>
      <br>
      <br>
      <br>
      
            <p><br> <br><br><br> <br></p>
          </div><!--/.well -->
        </div><!--/span-->


      <footer>
        <br>
        <p align="center">&copy; Tiago Cesar Gandolfi - 2012</p>
      </footer>

    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap-transition.js"></script>
    <script src="../assets/js/bootstrap-alert.js"></script>
    <script src="../assets/js/bootstrap-modal.js"></script>
    <script src="../assets/js/bootstrap-dropdown.js"></script>
    <script src="../assets/js/bootstrap-scrollspy.js"></script>
    <script src="../assets/js/bootstrap-tab.js"></script>
    <script src="../assets/js/bootstrap-tooltip.js"></script>
    <script src="../assets/js/bootstrap-popover.js"></script>
    <script src="../assets/js/bootstrap-button.js"></script>
    <script src="../assets/js/bootstrap-collapse.js"></script>
    <script src="../assets/js/bootstrap-carousel.js"></script>
    <script src="../assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>
