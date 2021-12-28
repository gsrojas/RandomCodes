   
<form name="frmoperations" id="frmoperations">
    <div class="col-md-10 col-sm-10  ">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Introducción a la Administración Pública<small>Alumnos Inscritos</small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                   </ul>
                     <div class="clearfix"></div>
                  </div>
                  
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <p class="text-muted font-13 m-b-30">
                      Preguntas Asignadas.
                    </p>
          
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>Email</th>
                          <th>Nombres</th>
                          <th>#</th>
                          <th>Sección</th>
                          <th>Pregunta</th>
                          <th>Fecha Solicitud</th>
                          
                        </tr>
                      </thead>
                      <tbody>

                       <?php
                          $qrys1='SELECT numero,seccion,texto_op,email,nombres,fecha_creacion FROM rnd_asignacion_Temas_v ';
                          $results1 = mysql_query($qrys1) or die("Error en: en la consulta: " . mysql_error());   
                               //se insertan los valores en la tabla correspondiente
                               while ($rows1 = mysql_fetch_array($results1)){
                                $numero  = $rows1['numero'];
                                $seccion = $rows1['seccion'];
                                $texto_op = $rows1['texto_op'];
                                $email = $rows1['email'];
                                $nombres = $rows1['nombres'];
                                $fecha_creacion = $rows1['fecha_creacion'];
                         ?>
                        <tr>
                          <td><?php echo $email ?></td>
                          <td><?php echo $nombres ?></td>
                          <td><?php echo $numero?></td>
                          <td><?php echo $seccion ?></td>
                          <td><?php echo $texto_op ?></td>
                          <td><?php echo $fecha_creacion ?></td>
                        </tr>
                      <?php
                       } 
                      ?>
                       
                      </tbody>
                    </table>
          
          
                  </div>




               </div>
            </div>
    </div>         
</form>            