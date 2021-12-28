<form name="frmoperations" id="frmoperations" action="procesar.php">
<input type="hidden" name="currentUser" id="currentUser" value ="<?php echo $uid ?>">  
<div class="col-md-10 col-sm-10  ">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Introducción a la Administración Pública<small>Asignación de Preguntas</small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                   </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <div class="bs-example" data-example-id="simple-jumbotron">
                    <div class="jumbotron">
                      <h1>Bienvenidas y bienvenidos</h1>
                      <p>Lee con atención. Este proceso es para asignar las preguntas que debes responder
                          para el Examen Final de Introducción a la Administración 2020. Para iniciar, presiona el botón de
                          “Obtener”. A continuación, verás el número con las preguntas que fueron asignadas de manera
                          aleatoria.</p>

                          <p>No puedes repetir este proceso, una vez que des click no puedes solicitar nuevas preguntas, ni
                          responder distintas a las que te fueron asignadas.</p>
                        <br/>
                        <button type="button" class="btn btn-success" onclick="solicitarTemas();">Obtener</button>
                   <br/>
                    </div>
                  </div>

                </div>
              </div>
            </div>
   <script>
   function solicitarTemas()
   {
             
      document.getElementById("frmoperations").submit();
      return true;
           

   }

   </script>      
</form>            