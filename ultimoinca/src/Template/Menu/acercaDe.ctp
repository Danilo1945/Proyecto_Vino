<div class="hide" style="color: white">
    <?= $this->layout = "publico"; ?>
</div>

<style>

    body{
        font-family: "Lato";
    }

    .portafolio{
        width: 100%;
        max-width: 2000px;
        margin: auto;
    }

    .portafolio h1{
        text-align: center;
        font-size: 38px;
        margin: 15px 0px 40px;
    }

    .portafolio-container{
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between;
    }

    .portafolio-item{
        width: 30%;
        position: relative;
        overflow: hidden;
    }

    .portafolio-img{
        -webkit-transition: all 0.5s;
        transition: all 0.5s;
    }

    .portafolio-text{
        position: absolute;
        bottom: 0;
        padding: 20px;

        background: rgba(0,0,0,0.7);
        color: #fff;

        -webkit-transform: translateY(100%);

        -ms-transform: translateY(100%);

        transform: translateY(100%);

        -webkit-transition: all 0.5s ease-out;

        transition: all 0.5s ease-out;
    }

    .portafolio-text p{
        text-align: justify;
    }

    .portafolio-item:hover .portafolio-text{
        -webkit-transform: translateY(0%);
        -ms-transform: translateY(0%);
        transform: translateY(0%);
    }

    .portafolio-item:hover .portafolio-img{
        -webkit-transform: scale(1.15);
        -ms-transform: scale(1.15);
        transform: scale(1.15);
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



<div class="row" style=" align-items: center">


    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-x1-12">
        <div class="row">
            <div class="col-0 col-sm-0 col-md-2 col-lg-2 col-x1-2">

            </div> 
            <div class="col-12 col-sm-12 col-md-10 col-lg-10 col-x1-10">
                <h3 class="Color_dorado">ASOCIACIÓN DE COMERCIALIZADORES AGROPECUARIOS DE QUINTICUSIG</h3>
            </div> 
        </div>

    </div>

    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-x1-12">
        <br>
        <br>
        <br>

    </div>


    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-x1-4" >
        <div class="row">
            <div class="col-0 col-sm-0 col-md-2 col-lg-2 col-x1-2">
            </div>
            <div class="col-12 col-sm-12 col-md-10 col-lg-10 col-x1-10">
                <div class="card" style="width:400px ; height: 500px;">
                    <?= $this->Html->image('vino1.jpg', ['alt' => 'CakePHP']) ?> 
                    <div class="card-body">
                        <h4 class="card-title">MISIÓN</h4>
                        <p class="card-text" style="text-justify: auto ">
                            Ser una Empresa líder en la producción y distribución de vino de mortiño, con reconocimiento en
                            el mercado vinícola local y nacional, ofreciendo un producto del resultado de un proceso con altos
                            estándares de calidad, y buenas prácticas de manufactura que satisfaga los paladares de los
                            consumidores más exigentes</p>
                        <p style="color: black"></p>

                    </div>
                </div>
            </div>

        </div>
    </div>





    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-x1-4" >
        <div class="row">
            <div class="col-0 col-sm-0 col-md-1 col-lg-1 col-x1-1">
            </div>
            <div class="col-12 col-sm-12 col-md-11 col-lg-11 col-x1-11">
                <div class="card" style="width:400px ; height: 500px;">
                    <?= $this->Html->image('vino2.jpg', ['alt' => 'CakePHP']) ?>
                    <div class="card-body">
                        <h4 class="card-title">VISIÓN</h4>
                        <p class="card-text"> Posicionar sólidamente a la Empresa Ultimo Inca hasta el año 2020 dentro del mercado local y
                            nacional como líder y pionera en la producción de vinos de mortiño y caracterizarse por una
                            producción que cumpla con procesos de estricto control de calidad, teniendo un impacto positivo
                            en mejorar la calidad de vida de sus integrantes.</p>
                        <!--<a href="#" class="btn btn-primary">Hacer pedido</a>-->
                    </div>
                </div>
            </div>
        </div>
    </div>





    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-x1-4" >
        <div class="card" style="width:400px ; height: 500px;">
            <?= $this->Html->image('vino3.jpg', ['alt' => 'CakePHP']) ?>
            <div class="card-body">
                <h4 class="card-title">UBICACIÓN</h4>
                <p class="card-text">La Planta de producción de Vino de Mortiño el Ultimo Inca de la Asociación de Productores y
                    Comercializadores Agropecuarios de Quinticusig se encuentra ubicada en la Comunidad de
                    Quinticusig en el cerro Guingopana, a 3000 metros de altura, pertenece al Cantón Sigchos,
                    Provincia Cotopaxi.</p>
                <!--<a href="#" class="btn btn-primary">Hacer Pedido</a>-->
            </div>
        </div>
    </div>

    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-x1-12">
        <br>
        <br>
        <br>


    </div>





    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-x1-4" >
        <div class="row">
            <div class="col-0 col-sm-0 col-md-2 col-lg-2 col-x1-2">
            </div>
            <div class="col-12 col-sm-12 col-md-10 col-lg-10 col-x1-10">
                <div class="card" style="width:400px ; height: 500px;">
                    <?= $this->Html->image('vino4.jpg', ['alt' => 'CakePHP']) ?>
                    <div class="card-body">
                        <h4 class="card-title">LA FÁBRICA?</h4>
                        <p class="card-text" style="text-justify: auto ">
                            La Asociación de Productores y Comercializadores Agropecuarios de Quinticusig nace con la
                            iniciativa de trabajar asociadamente en búsqueda de mejorar la economía de sus 22 socias/os 12
                            mujeres y 10 hombres que actualmente trabajan en un emprendimiento innovador como es la
                            producción de vino de mortiño.</p>
                        <p style="color: black"></p>

                    </div>
                </div>
            </div>

        </div>
    </div>









    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-x1-12">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>







</div>




