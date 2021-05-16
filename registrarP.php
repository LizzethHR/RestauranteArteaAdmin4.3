<?php
  include_once("cabecera.html");
  include_once("aside.html");
?>
<link href="css/estiloHistorial.css" rel="stylesheet" type="text/css">

    <section>
          <h3 id="tituloH">Agregar Producto</h3>
           <form action="registro.php" method="post">
               <div>

                 <label for="nombre">Nombre:</label><br>
                  <input type="text" name="nombreP" placeholder="nombre de producto"><br><br>


                 <label for="descripcion">Descripcion:</label><br>
                    <input type="text" name="descripcionP" placeholder="descripcion"><br><br>


                  <label for="Precio">Precio:</label><br>
                    <input type="number" name="precioP" placeholder="precio del producto"><br><br>

                     <label for="Categoria">Categoria</label><br>
                          <select name="desplegableC">
                               <option value="1">Promociones</option>
                               <option value="2">Desayuno</option>
                               <option value="3">Comida</option>
                               <option value="10">Cena</option>
                               <option value="11">Bebidas</option>
                               <option value="12">Postres</option>
                          </select>
                                <br><br>


                        <form method="POST" action="CargarArchivos.php" enctype="multipart/form-data">
                            <label for="imagen">Imagen:</label><br>
                               <input type="file" name="fileP"><br><br>
                        </form>

                  <input type="submit" value="Registrar">

               </div>
           </form>
    </section>
    <br>
<!-- <br><br><br><br><br><br><br><br>
<br><br><br><br><br> -->


<?php

  include_once("pie.html");
?>
