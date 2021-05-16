<?php
  include_once("cabecera.html");
  include_once("aside.html");
?>
<link href="css/estiloHistorial.css" rel="stylesheet" type="text/css">
<script src="https://kit.fontawesome.com/b965409e0d.js" crossorigin="anonymous"></script>

<section>
<h3 id="tituloH">Historial de ventas</h3>
      <div id="buscador">
                <table class="contenedorB">
                    <tr>
                        <td>
                            <input type="text" placeholder="Buscar" class="buscar">
                        </td>
                        <td>
                            <a href="#" id="lupa"><i class="fas fa-search"></i></a>
                        </td>
                    </tr>
                </table>
       </div>

  <form name="formTablaGral">
    <input type="hidden" name="txtClave">
    <input type="hidden" name="txtOpe">
    <table border="1">
      <tr>
        <td>No.Pedido</td>

        <td>No.Mesa</td>

        <td>Producto</td>

        <td>Total</td>

        <td>Forma Pago</td>

        <td>Fecha</td>

        <td>Hora</td>
      </tr>
      <tr>
         <td>1</td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
      </tr>
      <tr>
         <td>2</td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
      </tr>
      <tr>
         <td>3</td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
      </tr>
    </table>
  </form>
</section>
<br><br><br><br><br><br><br><br>
<br><br><br><br><br>

<?php

  include_once("pie.html");
?>
