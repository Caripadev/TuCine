<?php   
$page_title = 'Contacto - Optimo';
include_once('layouts/header.php');  ?>



<!-- Page content-->
            <section class="py-3">
                <div class="container px-5">
                    <!-- Contact form-->
                 <form method="POST" action="contactenos.php">
                    <div class="bg-light rounded-3 py-3 px-4 px-md-5 mb-5">
                        <div class="text-center mb-5">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                            <h1 class="fw-bolder">Estamos al alcance de tu mano.</h1>
                            <p class="lead fw-normal text-muted mb-0">Envíenos un mensaje, y un representante le contactará tan pronto como sea posible</p>
                        </div>
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg col-xl">
                                <form id="contactForm" method="POST" action="contactenos.php" data-sb-form-api-token="API_TOKEN">
                         <!-- First ROw-->
                            <div class="row mb-3">
                                <!--Name-->
                                    <div class="form-floating col-md-6">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Escriba su Nombre" required>
                                        <label for="name">Nombre:</label>
                                    </div>

                                <!--Lastname-->
                                <div class="form-floating col-md-6">
                                    <input type="text"  id="lastname" name="lastname" class="form-control" placeholder="Escriba su apellido" required>
                                    <label for="exampleFormControlSelect1">Apellido:</label>  
                                </div>
                            </div>

                            <!--Second row-->
                            <div class="row mb-3">
                                <!--City-->
                                <div class="form-floating col-md-6">
                                    <input type="text" id="city" name="city" class="form-control" placeholder="En que ciudad está" required>
                                    <label for="exampleFormControlInput1">Ciudad:</label>    
                                </div>
                                <!--State-->
                                <div class="col-md-6">
                                    <label for="exampleFormControlSelect1">Estado:</label>
                                <div class="form-group has-feedback">
                                    
                
                                        <select class="form-select" aria-label="Default select example" placeholder="Seleccione su Estado" id="state" name="state" required>
                                        	<option>Seleccione su Estado</option>
                                        	<option>Estoy en otro pais</option>
                                        	<option>Amazonas</option>
                                        	<option>Anzoátegui</option>
                                        	<option>Apure</option>
                                        	<option>Aragua</option>
                                        	<option>Barinas</option>
                                        	<option>Bolívar</option>
                                        	<option>Carabobo</option>
                                        	<option>Cojedes</option>
                                        	<option>Delta Amacuro</option>
                                        	<option>Distrito Capital</option>
                                        	<option>Falcón</option>
                                        	<option>Guárico</option>
                                        	<option>Lara</option>
                                        	<option>Mérida</option>
                                        	<option>Miranda</option>
                                        	<option>Monagas</option>
                                        	<option>Nueva Esparta</option>
                                        	<option>Portuguesa</option>
                                        	<option>Sucre</option>
                                        	<option>Táchira</option>
                                        	<option>Trujillo</option>
                                        	<option>Vargas</option>
                                        	<option>Yaracuy</option>
                                        	<option>Zulia</option>
                                        </select>                                
                                    </div>  

                                </div>
                            </div>
<!--Third row-->
                            <div class="row mb-3">
                                <!--Postal Code-->
                                <div class="form-floating col-md-6">
                                    <input type="text" id="postalcode" name="postalcode" class="form-control" placeholder="Escriba su Código Postal" required>
                                    <label for="exampleFormControlInput1">Código Postal:</label>
                                </div>
                                <!--Countries-->                                                  
                                <div class="col-md-6">
                                    <label for="exampleFormControlSelect1">País</label>  
                                <div class="form-group has-feedback">                     
                                        <select class="form-select" aria-label="Default select example" id='country' name='country' required><option>Seleccione su País</option><option>Afganistán</option><option>Albania</option><option>Alemania</option><option>Andorra</option><option>Angola</option><option>Antigua y Barbuda</option><option>Arabia Saudita</option><option>Argelia</option><option>Argentina</option><option>Armenia</option><option>Australia</option><option>Austria</option><option>Azerbaiyán</option><option>Bahamas</option><option>Bangladés</option><option>Barbados</option><option>Baréin</option><option>Bélgica</option><option>Belice</option><option>Benín</option><option>Bielorrusia</option><option>Birmania</option><option>Bolivia</option><option>Bosnia y Herzegovina</option><option>Botsuana</option><option>Brasil</option><option>Brunéi</option><option>Bulgaria</option><option>Burkina Faso</option><option>Burundi</option><option>Bután</option><option>Cabo Verde</option><option>Camboya</option><option>Camerún</option><option>Canadá</option><option>Catar</option><option>Chad</option><option>Chile</option><option>China</option><option>Chipre</option><option>Ciudad del Vaticano</option><option>Colombia</option><option>Comoras</option><option>Corea del Norte</option><option>Corea del Sur</option><option>Costa de Marfil</option><option>Costa Rica</option><option>Croacia</option><option>Cuba</option><option>Dinamarca</option><option>Dominica</option><option>Ecuador</option><option>Egipto</option><option>El Salvador</option><option>Emiratos Árabes Unidos</option><option>Eritrea</option><option>Eslovaquia</option><option>Eslovenia</option><option>España</option><option>Estados Unidos</option><option>Estonia</option><option>Etiopía</option><option>Filipinas</option><option>Finlandia</option><option>Fiyi</option><option>Francia</option><option>Gabón</option><option>Gambia</option><option>Georgia</option><option>Ghana</option><option>Granada</option><option>Grecia</option><option>Guatemala</option><option>Guyana</option><option>Guinea</option><option>Guinea ecuatorial</option><option>Guinea-Bisáu</option><option>Haití</option><option>Honduras</option><option>Hungría</option><option>India</option><option>Indonesia</option><option>Irak</option><option>Irán</option><option>Irlanda</option><option>Islandia</option><option>Islas Marshall</option><option>Islas Salomón</option><option>Israel</option><option>Italia</option><option>Jamaica</option><option>Japón</option><option>Jordania</option><option>Kazajistán</option><option>Kenia</option><option>Kirguistán</option><option>Kiribati</option><option>Kuwait</option><option>Laos</option><option>Lesoto</option><option>Letonia</option><option>Líbano</option><option>Liberia</option><option>Libia</option><option>Liechtenstein</option><option>Lituania</option><option>Luxemburgo</option><option>Madagascar</option><option>Malasia</option><option>Malaui</option><option>Maldivas</option><option>Malí</option><option>Malta</option><option>Marruecos</option><option>Mauricio</option><option>Mauritania</option><option>México</option><option>Micronesia</option><option>Moldavia</option><option>Mónaco</option><option>Mongolia</option><option>Montenegro</option><option>Mozambique</option><option>Namibia</option><option>Nauru</option><option>Nepal</option><option>Nicaragua</option><option>Níger</option><option>Nigeria</option><option>Noruega</option><option>Nueva Zelanda</option><option>Omán</option><option>Países Bajos</option><option>Pakistán</option><option>Palaos</option><option>Panamá</option><option>Papúa Nueva Guinea</option><option>Paraguay</option><option>Perú</option><option>Polonia</option><option>Portugal</option><option>Reino Unido</option><option>República Centroafricana</option><option>República Checa</option><option>República de Macedonia</option><option>República del Congo</option><option>República Democrática del Congo</option><option>República Dominicana</option><option>República Sudafricana</option><option>Ruanda</option><option>Rumanía</option><option>Rusia</option><option>Samoa</option><option>San Cristóbal y Nieves</option><option>San Marino</option><option>San Vicente y las Granadinas</option><option>Santa Lucía</option><option>Santo Tomé y Príncipe</option><option>Senegal</option><option>Serbia</option><option>Seychelles</option><option>Sierra Leona</option><option>Singapur</option><option>Siria</option><option>Somalia</option><option>Sri Lanka</option><option>Suazilandia</option><option>Sudán</option><option>Sudán del Sur</option><option>Suecia</option><option>Suiza</option><option>Surinam</option><option>Tailandia</option><option>Tanzania</option><option>Tayikistán</option><option>Timor Oriental</option><option>Togo</option><option>Tonga</option><option>Trinidad y Tobago</option><option>Túnez</option><option>Turkmenistán</option><option>Turquía</option><option>Tuvalu</option><option>Ucrania</option><option>Uganda</option><option>Uruguay</option><option>Uzbekistán</option><option>Vanuatu</option><option>Venezuela</option><option>Vietnam</option><option>Yemen</option><option>Yibuti</option><option>Zambia</option><option>Zimbabue</option></select>                                </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                            <div class="form-floating col-md-12">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                <label for="inputEmail4">Correo Electronico:</label>
                            </div>
                            </div>
                                    <!-- Submit success message-->
                                    <!---->
                                    <!-- This is what your users will see when the form-->
                                    <!-- has successfully submitted
                                    <div class="d-none" id="submitSuccessMessage">
                                        <div class="text-center mb-3">
                                            <div class="fw-bolder">Form submission successful!</div>
                                            To activate this form, sign up at
                                            <br />
                                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                        </div>
                                    </div>-->


                                    <!-- Submit error message-->
                                    <!---->
                                    <!-- This is what your users will see when there is-->
                                    <!-- an error submitting the form
                                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>-->
                                    <!-- Submit Button-->
                            <!--Fourth row-->
                            <div class="row mb-1">
                                <!--Message-->                                                 
                                <div class="col-md-12">
                                    <label for="exampleFormControlSelect1" >Mensaje:</label>
                                <div class="form-group has-feedback">
                                    <textarea rows="1" maxlength="100" class="form-control" id="message" name="message" placeholder="Escriba su mensaje" required></textarea>      
                                </div> 
                                </div>
                            </div>  
                            </div>
                            <!-- Submit form --> 
								<div class="d-grid gap-2 mx-auto mb-3 mt-3">
 								 <button class="btn btn-primary" type="submit">Enviar</button>
								</div>
                             
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Contact cards-->
                    <div class="row gx-5 row-cols-2 row-cols-lg-4 py-5">
                        <div class="col">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-chat-dots"></i></div>
                            <div class="h5 mb-2">Chatea con nosotros</div>
                            <p class="text-muted mb-0">Chatea en vivo con un especialista de soporte.</p>
                        </div>
                        <div class="col">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-people"></i></div>
                            <div class="h5">Pregnta a la Comunidad</div>
                            <p class="text-muted mb-0">Explora la comunidad y comunicate con otros usuarios.</p>
                        </div>
                        <div class="col">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-question-circle"></i></div>
                            <div class="h5">Centro de Soporte</div>
                            <p class="text-muted mb-0">busca las preguntas frecuentes y articulos de soporte para consegui solucion.</p>
                        </div>
                        <div class="col">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-telephone"></i></div>
                            <div class="h5">Llamanos</div>
                            <p class="text-muted mb-0">llamanos durante horarios de oficinas: (+++) 000-000-000.</p>
                        </div>
                    </div>
                </div>
            </section>
        </main>



<?php   include_once('layouts/footer.php');  ?>