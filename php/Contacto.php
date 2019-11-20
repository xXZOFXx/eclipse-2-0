

<!DOCTYPE html>
<html lang="es" dir="ltr">
   <head>
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-134913003-1"></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments);}
         gtag('js', new Date());

         gtag('config', 'UA-134913003-1');
      </script>
      <script src="https://www.google.com/recaptcha/api.js" async defer></script>
      <script type="text/javascript">
         var onloadCallback = function() {
           grecaptcha.render('html_element', {
             'sitekey' : '6LdC_5UUAAAAAPgikwYhiwCbZIETi-oA7qjofsWg'
           });
         };
      </script>
      <meta charset="utf-8">
      <link rel="icon" href="../../images/ieclipse.png" width="10" height="10">
      <title>Contacto</title>
      <script src="../../js/jquery.js" type="text/javascript"></script>
      <link rel="stylesheet" href="../../css/contacto.css">
      <script src="../../js/bootstrap.js" type="text/javascript"></script>
      <link rel="stylesheet" href="../../css/bootstrap.css">
      <link rel="stylesheet" href="../../css/leaflet.css">
      <script src="../../js/leaflet.js" type="text/javascript"></script>
      <!--<script src="../../js/mapa-leaflet.js"></script>-->
      <!--
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
         <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
         -->
      <!--leaflet<link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css"
         integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
         crossorigin=""/>
         <script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"
         integrity="sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg=="
         crossorigin=""></script>-->
   </head>
   <body>
      <!--navbar-->
      <div id="header"></div>
      <!--navbar fin-->
      <header>
         <div class="overlay"></div>
         <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
         </video>
         <div class="container h-100">
            <div class="d-flex text-center h-100">
               <div class="my-auto w-100 text-white">
                  <h1 class="display-3">Contacto</h1>
               </div>
            </div>
         </div>
      </header>
      <br>
      <div class="row">
         <div class="col">
            <div>
               <!--div padre-->
               <!--<form class="container" action="../../Inicio/formulario.php" method="POST">-->
               <form class="container">
                  <div class="row">
                     <div class="col-md-6 mb-3">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm"><span class="text-danger">*</span>Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
                     </div>
                     <div class="col-md-6 mb-3">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm"><span class="text-danger">*</span>Apellidos</label>
                        <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos"  required>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-6 mb-3">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm"><span class="text-danger">*</span>Empresa/Negocio</label>
                        <input type="text" class="form-control" id="empresa" name="empresa" placeholder="Empresa" required>
                     </div>
                     <!--<div class="invalid-feedback">
                        </div>-->
                     <!--div class="row"-->
                     <div class="col-md-6 mb-3">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Teléfono</label>
                        <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Teléfono">
                        <!--<div class="invalid-feedback">
                           </div>-->
                     </div>
                     <!--/div-->
                  </div>
                  <div class="row">
                     <div class="col-md-6 mb-3">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm"><span class="text-danger">*</span>Correo</label>
                        <input type="mail" class="form-control" id="correo" name="correo" placeholder="Correo" required>
                        <div class="invalid-feedback">
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">País</label>
                        <select class="custom-select custom-select mb-2" id="pais" name="pais">
                           <option >País</option>
                           <option value="AFG">Afghanistan</option>
                           <option value="ALA">Åland Islands</option>
                           <option value="ALB">Albania</option>
                           <option value="DZA">Algeria</option>
                           <option value="ASM">American Samoa</option>
                           <option value="AND">Andorra</option>
                           <option value="AGO">Angola</option>
                           <option value="AIA">Anguilla</option>
                           <option value="ATA">Antarctica</option>
                           <option value="ATG">Antigua and Barbuda</option>
                           <option value="ARG">Argentina</option>
                           <option value="ARM">Armenia</option>
                           <option value="ABW">Aruba</option>
                           <option value="AUS">Australia</option>
                           <option value="AUT">Austria</option>
                           <option value="AZE">Azerbaijan</option>
                           <option value="BHS">Bahamas</option>
                           <option value="BHR">Bahrain</option>
                           <option value="BGD">Bangladesh</option>
                           <option value="BRB">Barbados</option>
                           <option value="BLR">Belarus</option>
                           <option value="BEL">Belgium</option>
                           <option value="BLZ">Belize</option>
                           <option value="BEN">Benin</option>
                           <option value="BMU">Bermuda</option>
                           <option value="BTN">Bhutan</option>
                           <option value="BOL">Bolivia, Plurinational State of</option>
                           <option value="BES">Bonaire, Sint Eustatius and Saba</option>
                           <option value="BIH">Bosnia and Herzegovina</option>
                           <option value="BWA">Botswana</option>
                           <option value="BVT">Bouvet Island</option>
                           <option value="BRA">Brazil</option>
                           <option value="IOT">British Indian Ocean Territory</option>
                           <option value="BRN">Brunei Darussalam</option>
                           <option value="BGR">Bulgaria</option>
                           <option value="BFA">Burkina Faso</option>
                           <option value="BDI">Burundi</option>
                           <option value="KHM">Cambodia</option>
                           <option value="CMR">Cameroon</option>
                           <option value="CAN">Canada</option>
                           <option value="CPV">Cape Verde</option>
                           <option value="CYM">Cayman Islands</option>
                           <option value="CAF">Central African Republic</option>
                           <option value="TCD">Chad</option>
                           <option value="CHL">Chile</option>
                           <option value="CHN">China</option>
                           <option value="CXR">Christmas Island</option>
                           <option value="CCK">Cocos (Keeling) Islands</option>
                           <option value="COL">Colombia</option>
                           <option value="COM">Comoros</option>
                           <option value="COG">Congo</option>
                           <option value="COD">Congo, the Democratic Republic of the</option>
                           <option value="COK">Cook Islands</option>
                           <option value="CRI">Costa Rica</option>
                           <option value="CIV">Côte d'Ivoire</option>
                           <option value="HRV">Croatia</option>
                           <option value="CUB">Cuba</option>
                           <option value="CUW">Curaçao</option>
                           <option value="CYP">Cyprus</option>
                           <option value="CZE">Czech Republic</option>
                           <option value="DNK">Denmark</option>
                           <option value="DJI">Djibouti</option>
                           <option value="DMA">Dominica</option>
                           <option value="DOM">Dominican Republic</option>
                           <option value="ECU">Ecuador</option>
                           <option value="EGY">Egypt</option>
                           <option value="SLV">El Salvador</option>
                           <option value="GNQ">Equatorial Guinea</option>
                           <option value="ERI">Eritrea</option>
                           <option value="EST">Estonia</option>
                           <option value="ETH">Ethiopia</option>
                           <option value="FLK">Falkland Islands (Malvinas)</option>
                           <option value="FRO">Faroe Islands</option>
                           <option value="FJI">Fiji</option>
                           <option value="FIN">Finland</option>
                           <option value="FRA">France</option>
                           <option value="GUF">French Guiana</option>
                           <option value="PYF">French Polynesia</option>
                           <option value="ATF">French Southern Territories</option>
                           <option value="GAB">Gabon</option>
                           <option value="GMB">Gambia</option>
                           <option value="GEO">Georgia</option>
                           <option value="DEU">Germany</option>
                           <option value="GHA">Ghana</option>
                           <option value="GIB">Gibraltar</option>
                           <option value="GRC">Greece</option>
                           <option value="GRL">Greenland</option>
                           <option value="GRD">Grenada</option>
                           <option value="GLP">Guadeloupe</option>
                           <option value="GUM">Guam</option>
                           <option value="GTM">Guatemala</option>
                           <option value="GGY">Guernsey</option>
                           <option value="GIN">Guinea</option>
                           <option value="GNB">Guinea-Bissau</option>
                           <option value="GUY">Guyana</option>
                           <option value="HTI">Haiti</option>
                           <option value="HMD">Heard Island and McDonald Islands</option>
                           <option value="VAT">Holy See (Vatican City State)</option>
                           <option value="HND">Honduras</option>
                           <option value="HKG">Hong Kong</option>
                           <option value="HUN">Hungary</option>
                           <option value="ISL">Iceland</option>
                           <option value="IND">India</option>
                           <option value="IDN">Indonesia</option>
                           <option value="IRN">Iran, Islamic Republic of</option>
                           <option value="IRQ">Iraq</option>
                           <option value="IRL">Ireland</option>
                           <option value="IMN">Isle of Man</option>
                           <option value="ISR">Israel</option>
                           <option value="ITA">Italy</option>
                           <option value="JAM">Jamaica</option>
                           <option value="JPN">Japan</option>
                           <option value="JEY">Jersey</option>
                           <option value="JOR">Jordan</option>
                           <option value="KAZ">Kazakhstan</option>
                           <option value="KEN">Kenya</option>
                           <option value="KIR">Kiribati</option>
                           <option value="PRK">Korea, Democratic People's Republic of</option>
                           <option value="KOR">Korea, Republic of</option>
                           <option value="KWT">Kuwait</option>
                           <option value="KGZ">Kyrgyzstan</option>
                           <option value="LAO">Lao People's Democratic Republic</option>
                           <option value="LVA">Latvia</option>
                           <option value="LBN">Lebanon</option>
                           <option value="LSO">Lesotho</option>
                           <option value="LBR">Liberia</option>
                           <option value="LBY">Libya</option>
                           <option value="LIE">Liechtenstein</option>
                           <option value="LTU">Lithuania</option>
                           <option value="LUX">Luxembourg</option>
                           <option value="MAC">Macao</option>
                           <option value="MKD">Macedonia, the former Yugoslav Republic of</option>
                           <option value="MDG">Madagascar</option>
                           <option value="MWI">Malawi</option>
                           <option value="MYS">Malaysia</option>
                           <option value="MDV">Maldives</option>
                           <option value="MLI">Mali</option>
                           <option value="MLT">Malta</option>
                           <option value="MHL">Marshall Islands</option>
                           <option value="MTQ">Martinique</option>
                           <option value="MRT">Mauritania</option>
                           <option value="MUS">Mauritius</option>
                           <option value="MYT">Mayotte</option>
                           <option selected="true" value="MEX">México</option>
                           <option value="FSM">Micronesia, Federated States of</option>
                           <option value="MDA">Moldova, Republic of</option>
                           <option value="MCO">Monaco</option>
                           <option value="MNG">Mongolia</option>
                           <option value="MNE">Montenegro</option>
                           <option value="MSR">Montserrat</option>
                           <option value="MAR">Morocco</option>
                           <option value="MOZ">Mozambique</option>
                           <option value="MMR">Myanmar</option>
                           <option value="NAM">Namibia</option>
                           <option value="NRU">Nauru</option>
                           <option value="NPL">Nepal</option>
                           <option value="NLD">Netherlands</option>
                           <option value="NCL">New Caledonia</option>
                           <option value="NZL">New Zealand</option>
                           <option value="NIC">Nicaragua</option>
                           <option value="NER">Niger</option>
                           <option value="NGA">Nigeria</option>
                           <option value="NIU">Niue</option>
                           <option value="NFK">Norfolk Island</option>
                           <option value="MNP">Northern Mariana Islands</option>
                           <option value="NOR">Norway</option>
                           <option value="OMN">Oman</option>
                           <option value="PAK">Pakistan</option>
                           <option value="PLW">Palau</option>
                           <option value="PSE">Palestinian Territory, Occupied</option>
                           <option value="PAN">Panama</option>
                           <option value="PNG">Papua New Guinea</option>
                           <option value="PRY">Paraguay</option>
                           <option value="PER">Peru</option>
                           <option value="PHL">Philippines</option>
                           <option value="PCN">Pitcairn</option>
                           <option value="POL">Poland</option>
                           <option value="PRT">Portugal</option>
                           <option value="PRI">Puerto Rico</option>
                           <option value="QAT">Qatar</option>
                           <option value="REU">Réunion</option>
                           <option value="ROU">Romania</option>
                           <option value="RUS">Russian Federation</option>
                           <option value="RWA">Rwanda</option>
                           <option value="BLM">Saint Barthélemy</option>
                           <option value="SHN">Saint Helena, Ascension and Tristan da Cunha</option>
                           <option value="KNA">Saint Kitts and Nevis</option>
                           <option value="LCA">Saint Lucia</option>
                           <option value="MAF">Saint Martin (French part)</option>
                           <option value="SPM">Saint Pierre and Miquelon</option>
                           <option value="VCT">Saint Vincent and the Grenadines</option>
                           <option value="WSM">Samoa</option>
                           <option value="SMR">San Marino</option>
                           <option value="STP">Sao Tome and Principe</option>
                           <option value="SAU">Saudi Arabia</option>
                           <option value="SEN">Senegal</option>
                           <option value="SRB">Serbia</option>
                           <option value="SYC">Seychelles</option>
                           <option value="SLE">Sierra Leone</option>
                           <option value="SGP">Singapore</option>
                           <option value="SXM">Sint Maarten (Dutch part)</option>
                           <option value="SVK">Slovakia</option>
                           <option value="SVN">Slovenia</option>
                           <option value="SLB">Solomon Islands</option>
                           <option value="SOM">Somalia</option>
                           <option value="ZAF">South Africa</option>
                           <option value="SGS">South Georgia and the South Sandwich Islands</option>
                           <option value="SSD">South Sudan</option>
                           <option value="ESP">Spain</option>
                           <option value="LKA">Sri Lanka</option>
                           <option value="SDN">Sudan</option>
                           <option value="SUR">Suriname</option>
                           <option value="SJM">Svalbard and Jan Mayen</option>
                           <option value="SWZ">Swaziland</option>
                           <option value="SWE">Sweden</option>
                           <option value="CHE">Switzerland</option>
                           <option value="SYR">Syrian Arab Republic</option>
                           <option value="TWN">Taiwan, Province of China</option>
                           <option value="TJK">Tajikistan</option>
                           <option value="TZA">Tanzania, United Republic of</option>
                           <option value="THA">Thailand</option>
                           <option value="TLS">Timor-Leste</option>
                           <option value="TGO">Togo</option>
                           <option value="TKL">Tokelau</option>
                           <option value="TON">Tonga</option>
                           <option value="TTO">Trinidad and Tobago</option>
                           <option value="TUN">Tunisia</option>
                           <option value="TUR">Turkey</option>
                           <option value="TKM">Turkmenistan</option>
                           <option value="TCA">Turks and Caicos Islands</option>
                           <option value="TUV">Tuvalu</option>
                           <option value="UGA">Uganda</option>
                           <option value="UKR">Ukraine</option>
                           <option value="ARE">United Arab Emirates</option>
                           <option value="GBR">United Kingdom</option>
                           <option value="USA">United States</option>
                           <option value="UMI">United States Minor Outlying Islands</option>
                           <option value="URY">Uruguay</option>
                           <option value="UZB">Uzbekistan</option>
                           <option value="VUT">Vanuatu</option>
                           <option value="VEN">Venezuela, Bolivarian Republic of</option>
                           <option value="VNM">Viet Nam</option>
                           <option value="VGB">Virgin Islands, British</option>
                           <option value="VIR">Virgin Islands, U.S.</option>
                           <option value="WLF">Wallis and Futuna</option>
                           <option value="ESH">Western Sahara</option>
                           <option value="YEM">Yemen</option>
                           <option value="ZMB">Zambia</option>
                           <option value="ZWE">Zimbabwe</option>
                        </select>
                        <br>
                        <!--<div class="row">
                           <div class="col">
                             <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Correo</label>
                             <input type="mail" class="form-control" id="validation3" placeholder="Correo" required>
                             <div class="invalid-feedback">

                             </div>
                           </div>
                           </div>-->
                     </div>
                  </div>
                  <div class="row">
                     <div class="col">
                        <label for="colFormLabelSm" class="col-sm-7 col-form-label col-form-label-sm">¿En qué podemos ayudarte?</label>
                        <div class="col-xs-7">
                           <textarea class="form-control" id="comentarios" name="comentarios" placeholder="Escribe tus comentarios, quejas o sugerencias" rows="6"></textarea>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <input type="hidden" id="oculto" name="oculto">
                  </div>
                  <br>
                  <div class="row">
                     <div class="col-md-8">
                        <div class="g-recaptcha" id="recaptcha" data-sitekey="6LcfAZYUAAAAAD8ku-JMIQO0xYZBBoITKEN9-gnP" data-error="Por favor marca la casilla del Captcha" required></div>
                     </div>
                     <div class="col-md-3 btnEnviar">
                        <!--<button name="submit" type="submit" class="btn btn-primary">Enviar</button>-->
                        <button onclick="enviarBtn();" class="btn btn-primary">Enviar</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
         <div class="col info">
            <div class="container">
               <!--<div class="">-->
               <div class="sucursal">
                  <h3 >CORPORATIVO</h3>
                  <p class="">Viaducto Miguel Alemán No.806, Piso 7,</p>
                  <p class="">Col. Nápoles, Alcaldía Benito Juárez,</p>
                  <p class="">Ciudad de México</p>
                  <p class="">Tel. + 52 (55) 36852090</p>
               </div>
               <div class="sucursal">
                  <h3>REGIONAL QUERÉTARO</h3>
                  <p class="">Sendero de Granada #2. </p>
                  <p class="">Col. Milenio 3,</p>
                  <p class="">Querétaro, Qro</p>
                  <p class="">Tel. + 52 (442) 1612594</p>
               </div>
               <br>
               <center>
                  <button class="btn btn-primary" onclick="location.href='mailto:comentarios@eclipsemex.com';">
                  <i class="fa fa-envelope" aria-hidden="true"></i> Comentarios, Quejas o Sugerencias
                  </button>
               </center>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-6 col-sm-12" id="botonWeb">
            <div class="mapa">
               <div class="card">
                  <div class="card-header" style="color:white;">
                     CORPORATIVO
                  </div>
                  <div id="mapid1" style="width: 100%; height: 300px;"></div>
                  <div class="card-footer text-muted"> </div>
               </div>
            </div>
         </div>
         <div class="col-md-6 col-sm-12" id="botonWebSeg">
            <div class="mapa">
               <div class="card">
                  <div class="card-header" style="color:white;">
                     REGIONAL QUERÉTARO
                  </div>
                  <div id="mapid2" style="width: 100%; height: 300px;"></div>
                  <div class="card-footer text-muted"> </div>
               </div>
            </div>
         </div>
      </div>
      <br>
      <script type="text/javascript">
         var mymap1 = L.map('mapid1').setView([19.3991627, -99.1716421], 16);

         L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
         maxZoom: 19,
         attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, ' +
           '<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
           'Imagery © <a href="http://mapbox.com">Mapbox</a>',
         id: 'mapbox.streets'
         }).addTo(mymap1);

         var marker1 = L.marker([19.3990501,-99.1715485,20.75]).addTo(mymap1)
                       .bindPopup('Grupo Eclipse')
                       .openPopup();


         var mymap2 = L.map('mapid2').setView([20.5945036,-100.3586869,20.75], 16 );

         L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
         maxZoom: 19,
         attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, ' +
           '<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
           'Imagery © <a href="http://mapbox.com">Mapbox</a>',
         id: 'mapbox.streets'
         }).addTo(mymap2);

         var marker2 = L.marker([20.5945036,-100.3586869,20.75]).addTo(mymap2)
                     .bindPopup('Querétaro')
                     .openPopup();
      </script>
      <div id="footer"></div>
      <!--footer fin-->
   </body>
   <!--<script type="text/javascript">
      var map = L.map('map').setView([19.3991627, -99.1716421], 19);

      L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
         attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
      }).addTo(map);

      L.marker([19.3991627, -99.1716421]).addTo(map)
         .bindPopup('Grupo Eclipse')
         .openPopup();

      </script>-->
   <script>
      /*
      $(document).ready(function(){
      cambiarMapa();

      function cambiarMapa() {

        var width = document.documentElement.clientWidth;
        var btnMov = document.getElementById("botonMovil");
        var btnWeb = document.getElementById("botonWeb");
        var btnMovSeg = document.getElementById("botonMovilSeg");
        var btnWebSeg = document.getElementById("botonWebSeg");

        btnWebSeg.style.display = "block";
        btnWeb.style.display = "block";
        btnMov.style.display = "none";
        btnMovSeg.style.display = "none";


        if (width < 1000 ){
          btnMov.style.display = "block";
          btnWeb.style.display = "none";
          btnMovSeg.style.display = "block";
          btnWebSeg.style.display = "none";
        }else {
          btnMov.style.display = "none";
          btnWeb.style.display = "block";
          btnMovSeg.style.display = "none";
          btnWebSeg.style.display = "block";
        }
      }
      }); */
   </script>
   <script type="text/javascript">
      $(function(){
          $("#header").load("../../navbar.html");
          $("#footer").load("../../footer.html");
      });

   </script>
   <script>
      function enviarBtn(){
          var nombre=document.getElementById('nombre').value;
          var apellidos=document.getElementById('apellidos').value;
          var empresa=document.getElementById('empresa').value;
          var telefono=document.getElementById('telefono').value;
          var correo=document.getElementById('correo').value;
          var pais=document.getElementById('pais').value;
          var comentarios=document.getElementById('comentarios').value;
          var oculto=document.getElementById('oculto').value;
          /*var $captcha = $( '#recaptcha' ),
              response = grecaptcha.getResponse();*/

          /*if (response.length === 0) {
              $( '.msg-error').text( "el reCAPTCHA es obligatorio" );
          }*/

          //else{

              if (nombre == "" || apellidos == "" || empresa == "" || correo == "") {
                  alert("Llena los campos obligatorios");
              }else{
                  $.ajax({
                      url: '../../Inicio/formulario.php',
                      //url: '../../Inicio/formulario.php',
                      type: 'POST',
                      data: {
                          nombre: nombre,
                          apellidos: apellidos,
                          empresa: empresa,
                          telefono: telefono,
                          correo: correo,
                          pais: pais,
                          comentarios: comentarios,
                          oculto: oculto
                      },
                      async:false,
                      success: function(msg) {
                        alert('Registro enviado.');
                        //window.location.replace("../../Inicio/Contacto");
                      }
                  });
              }

          //}

      }
   </script>
</html>
