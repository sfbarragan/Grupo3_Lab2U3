<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/factura.css">
    <link rel="stylesheet" href="../CSS/menu.css">
    <link rel="stylesheet" href="../CSS/piedepagina.css">
    <title>Facturación</title>
</head>
<body>
    <nav>
        <ul class="menu">
          <li><a href="../index.html">Home</a></li>
          <li><a href="../gestion.html">Gestión</a></li>
          <li><a href="../nosotros.html">Nosotros</a></li>
        </ul>
    </nav>
    <div class="contenedor">
        <div>
            <form action="facturas.php" method="post" class="pago">
                <table class="pagos">
                    <tr>
                        <td>
                            <h2>Método de Pago</h2>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Selecciona un metodo de pago</p>
                            <select name="metodo" class="tarjeta">
                                <option value="VISA" selected>VISA
                                <option value="PAYPAL">PayPal
                                <option value="MASTERCARD">Mastercard
                                <option value="AMERICAN">American Express
                                <option value="DISCOVER">Discover
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Número de Tarjeta</p>
                            <input type="number" name="Tarjeta" placeholder="Numero de tarjeta" class="llenado">
                        </td>
                        <td>
                            <p>Fecha de caducidad &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; Codigo de Seguridad</p>
                            <select name="mes">
                                <option value="--">--
                                <option value="1">1
                                <option value="2">2
                                <option value="3">3
                                <option value="4">4
                                <option value="5">5
                                <option value="6">6
                                <option value="7">7
                                <option value="8">8
                                <option value="9">9
                                <option value="10">10
                                <option value="11">11
                                <option value="12">12  
                            </select>
                            <select name="año">
                                <option value="--">--
                                <option value="2021">2021
                                <option value="2022">2022
                                <option value="2023">2023
                                <option value="2024">2024
                                <option value="2025">2025
                                <option value="2026">2026
                                <option value="2027">2027
                                <option value="2028">2028
                                <option value="2029">2029
                                <option value="2030">2030
                                <option value="2031">2031
                                <option value="2032">2032  
                            </select>
                            <input type="text" size="2" class="cod">?
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h2>Información de Facturación</h2>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Nombre &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                Apellidos</p>
                            <input type="text" placeholder="Nombre" name="Nombre">
                            <input type="text" placeholder="Apellidos" name="Apellido">
                        </td>
                        <td>
                            <p>Ciudad</p>
                            <input type="text" placeholder="Ciudad" class="llenado" name="ciudad">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Direccion de Facturación</p>
                            <input type="email" placeholder="example@gmail.com" class="llenado" name="correo1">
                        </td>
                        <td>
                            <p>Código Postal</p>
                            <input type="text" name="codPos">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p>Direccion de Facturación (segunda linea)</p>
                            <input type="email" placeholder="example@gmail.com" class="llenado" name="correo2">
                        </td>
                    </tr>   
                    <tr>
                        <td>
                            <p>País</p>
                            <select name="paises" class="pais">
                                <option value="--">--
                                <option value="Ecuador">Ecuador
                                <option value="Argentina">Argentina
                                <option value="Chile">Chile
                                <option value="Bolivia">Bolivia
                                <option value="Peru">Peru
                                <option value="El Salvador">El salvador
                                <option value="Colombia">Colombia
                                <option value="Venezuela">Venezuela
                                <option value="Brasil">Brasil
                            </select>
                        </td>
                        <td>
                            <p>Teléfono</p>
                            <input type="number" class="llenado" name="telefono">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" value="Continuar">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <div>
            <div class="metodos">
                <h2>Métodos de Pago</h2>
                <p>Aceptamos los siguientes métodos de Pago seguro: </p>
                <img src="../img/american-express.png" alt="american-express" width="100px">
                <img src="../img/discover.jpg" alt="discover"  width="100px">
                <img src="../img/mastercard.png" alt="mastercard"  width="100px">
                <img src="../img/paypal.png" alt="paypal"  width="100px">
                <img src="../img/visa.png" alt="visa"  width="100px">
            </div>
            
        </div>
   </div>
    <div class="detalle">
                <h2>Resumen de Factura</h2>
                <table class="resumen">
                    <tr>
                        <td>
                            <p><b>Subtotal</b> </p>
                        </td>
                        <td>
                            <p id="sub">USD $1000,99</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p id="des">NVIDIA RTX 3090 GT</p>
                        </td>
                        <td>
                            <p id="precio">USD $1000,99 </p>
                        </td>
                    </tr>  
                    <tr>
                        <td>
                            <p> IVA 12%</p>
                        </td>
                        <td>
                            <p id="iva">USD $120,11</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p><b>Total</b> </p>
                        </td>
                        <td>
                            <p id="total"><b>USD $1121.10</b> </p>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        </div>   
    <?php
          $mPago=$_POST['metodo'];
          $nTarjeta=$_POST['Tarjeta'];
          $mCaducidad=$_POST['mes'];
          $aCaducidad=$_POST['año'];
          $cod=$_POST['cod'];
          $nombre=$_POST['Nombre'];
          $apellido=$_POST['Apellido'];
          $ciudad=$_POST['ciudad'];
          $correo1=$_POST['correo1'];
          $cPostal=$_POST['codPos'];
          $correo2=$_POST['correo2'];
          $pais=$_POST['paises'];
          $telefono=$_POST['telefono'];
          
          echo "<table class='cliente'>";
          echo "<thead>";
          echo "<th> Metodo Pago</th>";
          echo "<th> Número Tarjeta</th>";
          echo "<th> Fecha de Caducidad</th>";
          echo "<th> Cliente</th>";
          echo "<th> Ciudad</th>";
          echo "<th> Correo</th>";
          echo "<th> Cod. Postal</th>";
          echo "<th> País</th>";
          echo "<th> Teléfono</th>";
          echo "</thead>";
          echo "<tbody>";
          echo "<tr class='fil'>";
          echo "<td class='col'>",$mPago,"</td>";
          echo "<td class='col'>",$nTarjeta,"</td>";
          echo "<td class='col'>",$mCaducidad,"/", $aCaducidad,"</td>";
          echo "<td class='col'>",$nombre, " ", $apellido,"</td>";
          echo "<td class='col'>",$ciudad,"</td>";
          echo "<td class='col'>",$correo1,"</td>";
          echo "<td class='col'>",$cPostal, "</td>";
          echo "<td class='col'>",$pais,"</td>";
          echo "<td class='col'>",$telefono,"</td>";
          echo "</tr>";
          echo "</tbody>";
          echo "</table>";
         
    ?>

</body>
<footer class="main-footer">
    <div class="container">
      <div class="column column--50-25">
        <h2 class="footer__title">Company</h2>
        <p class="footer__txt"> «Cuando todo parece ir en contra de usted, recuerde que el avión despega en contra del viento, no con él.»</p>
        <cite class="footer__author"> innovations...</cite>
      </div>
     
      <div class="column column--50-25">
        <h2 class="footer__title">Redes Sociales</h2>
        <div class="footer__socials">
          <div class="social-icon">
            <i class="fab fa-facebook-f"></i>
            <a class="social__link" href="">Facebook</a>
          </div>
          <div class="social-icon">
            <i class="fab fa-twitter"></i>
            <a class="social__link" href="">Twiter</a>
          </div>
          <div class="social-icon">
            <i class="fab fa-pinterest"></i>
            <a class="social__link" href="">Instagram</a>
          </div>
        </div>
      </div>
      <div class="column column--50-25">
        <h2 class="footer__title">Contacto</h2>
        <div class="contact-icon">
          <i class="fas fa-map-marker-alt"></i>
          <p class="contact__txt">New Tecnology</p>
        </div>
        <div class="contact-icon">
          <i class="fas fa-phone-alt"></i>
          <p class="contact__txt">02-2710145</p>
        </div>
        <div class="contact-icon">
          <i class="fas fa-envelope"></i>
          <p class="contact__txt">innovations@gmail.com.com</p>
        </div>
      </div>
    </div>
      <p class="copy">© 2021 Innovations COMPANY. All Rights Reserved | Design by <span class="color-span">innovations</span></p>
  </footer>
</html>