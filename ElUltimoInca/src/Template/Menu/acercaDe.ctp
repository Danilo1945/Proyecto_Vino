<div class="hide">
    <?= $this->layout = "publico"; ?>
</div>



  
    
    
    
    
    
    
    
    <style>

            .Color_primP{
                background: black;

            }
            .Color_secundarioP{
                background: #E0E0E0;

            }

            nav{
                position:   inherit;
                top: 0;


            }
            .banner_pos{
                
            }
            .menu-principal{
               
                position: float;
            }

            #abajo_menu{
                position: static;
            }
            
      


#menu{
                background-color: #000;
                width: 10%;
                
            }
            #menu ul {
                list-style: none;
            }
            #menu ul li {
                display: inline-block;
            }
            #menu ul li a{
                color: #ffd700;
                display: block;
                padding: 20px;
                text-decoration: none;
            }
            #menu ul li a:hover{
                background-color: #9e9e9e;
            }
            .item-r{
                background-color: black;
                float: right;
            }      

        </style>
        <script >

            $(document).ready(function () {
                $('.slider').slider();

                $(".button-collapse").sideNav();



                $(".button-collapse").click(function () {

                    $("#asd").css("position", "initial");

                });
              

            });

        </script>




   <!--///////////////////inicio contenido-->

    <section class="portafolio">
		<h1>ASOCIACIÓN DE COMERCIALIZADORES AGROPECUARIOS DE QUINTICUSIG</h1>
		<div class="portafolio-container">
			<section class="portafolio-item">
				  <figure><?= $this->Html->image('vino1.jpg', ['alt' => 'CakePHP']) ?></figure>
				<section class="portafolio-text">
					<h2>MISIÓN</h2>
					<p> Ser una Empresa líder en la producción y distribución de vino de mortiño, con reconocimiento en
                                            el mercado vinícola local y nacional, ofreciendo un producto del resultado de un proceso con altos
                                            estándares de calidad, y buenas prácticas de manufactura que satisfaga los paladares de los
                                            consumidores más exigentes</p>
				</section>
			</section>
                    
			<section class="portafolio-item">
				<figure><?= $this->Html->image('vino2.jpg', ['alt' => 'CakePHP']) ?></figure>
				<section class="portafolio-text">
					<h2>VISIÓN</h2>
					<p> Posicionar sólidamente a la Empresa Ultimo Inca hasta el año 2020 dentro del mercado local y
                                            nacional como líder y pionera en la producción de vinos de mortiño y caracterizarse por una
                                            producción que cumpla con procesos de estricto control de calidad, teniendo un impacto positivo
                                            en mejorar la calidad de vida de sus integrantes.</p>
				</section>
			</section>
                    
			<section class="portafolio-item">
				<figure><?= $this->Html->image('vino3.jpg', ['alt' => 'CakePHP']) ?></figure>
				<section class="portafolio-text">
					<h2>UBICACIÓN</h2>
					<p> La Planta de producción de Vino de Mortiño el Ultimo Inca de la Asociación de Productores y
                                            Comercializadores Agropecuarios de Quinticusig se encuentra ubicada en la Comunidad de
                                            Quinticusig en el cerro Guingopana, a 3000 metros de altura, pertenece al Cantón Sigchos,
                                            Provincia Cotopaxi.</p>
				</section>
			</section>
                 
                </div>
                <center><section class="portafolio-item">
				<figure><?= $this->Html->image('vino4.jpg', ['alt' => 'CakePHP']) ?></figure>
				<section class="portafolio-text">
					<h2>LA FABRICA?</h2>
					<p> La Asociación de Productores y Comercializadores Agropecuarios de Quinticusig nace con la
                                            iniciativa de trabajar asociadamente en búsqueda de mejorar la economía de sus 22 socias/os 12
                                            mujeres y 10 hombres que actualmente trabajan en un emprendimiento innovador como es la
                                            producción de vino de mortiño.</p>
				</section>
			</section>
                    </center>
		</div>
	</section>
<!--////////////////////////////fin contenido-->
