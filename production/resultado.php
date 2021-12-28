   
<form name="frmoperations" id="frmoperations">
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
                    <h2>
                    INSTRUCCIONES:
                    </h2>
                    <div  class="alert alert-success alert-dismissible " role="alert">
                     <strong>1. Lee atentamente cada una de las preguntas. Reflexiona cuidadosamente la respuesta ANTES de escribirla.</strong>  
                       <br /> 
                     <strong>2. TODAS las respuestas deberán comenzar con un párrafo claramente diferenciado que verse sobre la RESPUESTA CONCRETA A LAS PREGUNTAS o argumentos presentados. Debe recuadrarse dicho párrafo donde se plantee la respuesta concreta y precisa.</strong> 
                    <br />
                    <strong>3. Una vez establecida la respuesta, argumenta CÓMO LA SUSTENTAS. Es decir, organiza tu respuesta ex ante y desarrolla los elementos mínimos indispensables para sostenerla.</strong>  
                    <br />
                    <strong> 4. Finaliza con un párrafo claramente diferenciado que vincule CÓMO SU DESARROLLO SOSTIENE LA RESPUESTA INICIALMENTE PLANTEADA.</strong>  
                    <br />
                    <strong> 5. DE NO CUMPLIR CON EL NUMERAL 2 y/o 4 (escribir en el primer párrafo la respuesta concreta y recuadrarla, ni finalizar con un párrafo diferenciado) SERÁ PENALIZADO CON DOS PUNTOS DE LA CALIFICACIÓN.</strong>  
                    </div>
                  
                     <br />
                    
                       <h2>
                         Primera Sección
                       </h2>
                     <div class="clearfix"></div>
                   </div>
                  <div class="x_content">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Sección</th>
                          <th>Pregunta</th>
                          <th>Fecha Solicitud</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                          $qrys1='SELECT numero,seccion,texto_op,email,nombres,DATE_FORMAT(fecha_creacion,"%d/%m/%Y") AS  fecha_creacion FROM rnd_asignacion_Temas_v WHERE seccion=1 and id_usuario =' .$uid;
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
                          <th scope="row"><?php echo $numero?></th>
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
              <div class="x_content">
                      <h2>Segunda Sección</h2>
                      <div class="clearfix"></div>
                   </div>
                  <div class="x_content">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Sección</th>
                          <th>Pregunta</th>
                          <th>Fecha Solicitud</th>
                        </tr>
                      </thead>
                      <tbody>

                       <?php
                          $qrys2='SELECT numero,seccion,texto_op,email,nombres, DATE_FORMAT(fecha_creacion,"%d/%m/%Y") AS fecha_creacion  FROM rnd_asignacion_Temas_v WHERE seccion=2 and id_usuario =' .$uid;
                          $results2 = mysql_query($qrys2) or die("Error en: en la consulta: " . mysql_error());   
                               //se insertan los valores en la tabla correspondiente
                               while ($rows2 = mysql_fetch_array($results2)){
                                $numero2  = $rows2['numero'];
                                $seccion2 = $rows2['seccion'];
                                $texto_op2 = $rows2['texto_op'];
                                $email2 = $rows2['email'];
                                $nombres2 = $rows2['nombres'];
                                $fecha_creacion2 = $rows2['fecha_creacion'];
                         ?>
                        <tr>
                          <th scope="row"><?php echo $numero2?></th>
                          <td><?php echo $seccion2 ?></td>
                          <td><?php echo $texto_op2 ?></td>
                          <td><?php echo $fecha_creacion2 ?></td>
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