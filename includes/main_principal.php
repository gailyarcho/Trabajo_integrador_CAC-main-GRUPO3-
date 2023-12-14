

<?php include 'includes/conexion.php'; ?>
<?php $conexion = new conexion(); # me conecto a la base de datos
 $oradores= $conexion->consultar("SELECT * FROM `oradores` limit 6"); # traer los primeros 6 oradores
?>


<section class="BSAS__contenedor" id="conferencia">

<div class="BSAS__contenedor__texto">
    <h1>Conf Bs As</h1>
    <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque omnis, debitis possimus autem nam
        nemo fuga delectus ipsa, repellat, facilis quas cupiditate. Culpa illum nam tempora unde iure
        ratione?Lorem ipsum dolor sit amet.
    </p>
    <div class="BSAS__contenedor__a">
        <a href="#" class="BSAS__a__izq">Quiero ser orador</a>
        <a href="<?php echo BASE_URL; ?>pages/tickets.php" class="BSAS__a__der  ">Comprar tickets</a>
    </div>
</div>
</section>
<main>
<!---->
          <section class="container mb-4" id="oradores">
          
          <h2 class="titulo-gral row justify-content-center ">Conoce a los <b><spam class="row justify-content-center">ORADORES</spam></b></h2>

        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php #leemos proyectos 1 por 1
                        foreach($oradores as $orador){ 
                ?>
                    <div class="col">
                        <div class="card h-100 shadow p-3 mb-5 bg-body rounded">
                            <img class="img-fluid card-img-top" style="object-fit:cover; width:100%; height:100%;" src="<?php echo BASE_URL; ?>assets/upload/<?php echo $orador['imagen'];?>" alt="<?php echo $orador['nombre'];?>">
                           
                            <div class="card-body">
                                
                                <h5 class="card-title"><?php echo $orador['nombre'];?> <?php echo $orador['apellido'];?></h5>
                                <p class="card-text"><?php echo $orador['mail'];?></p>
                                <p class="card-text"><?php echo $orador['tema'];?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
        </div>
        <?php 

        if ( isset( $_SESSION['usuario']) and  $_SESSION['usuario']=="Admin") {
         
        ?>
            <div class="d-flex justify-content-center">
               <a class="btn btn-lg btn-success mt-3 text-center" href="./pages/listado_admin.php">Crud de oradores</a>
            </div>       
        <?php 
        } else {
           
        ?>
           <div class="d-flex justify-content-center">
               <a class="btn btn-lg btn-success mt-3 text-center" href="./pages/listado.php">Conoce más oradores</a>
            </div> 
        <?php 
        }
        ?>
                    
       
    </section>
          
<!---->
        <section id="lugar" class="contenedor__Lugar">

            <div class="Lugar__img">

            </div>
            <div class="Lugar__texto">
                <h2>Bs. As. - octubre</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur est odit, praesentium commodi
                    ipsa
                    modi. Dignissimos quasi ad, reprehenderit eveniet tempore ipsa labore. Non reprehenderit aperiam
                    minima.
                </p>
                <a href="#">Conocé más</a>
            </div>


        </section>
        
        <!--form orador nuevo-->
        <section class="container" id="form-orador">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-7">
                <h2 class="titulo-gral">Conviértete en un <span>orador</span></h2>
                <p class="text-center">Anótate como orador para dar una charla ignite. Cuéntanos de qué quieres hablar!</p>
                <form action="includes/insertar.php" method="post" enctype="multipart/form-data">
                    <div class="row gx-2">
                        <div class="col-md mb-3">
                            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" aria-label="Nombre" required>
                        </div>
                        <div class="col-md mb-3">
                            <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Apellido" aria-label="Apellido" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email" aria-label="Email" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="archivo">Imagen del Orador</label>
                        <input required class="form-control" type="file" name ="archivo" id="archivo">
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <textarea class="form-control" name="tema" id="tema" rows="4"
                                placeholder="Sobre qué quieres hablar?" required></textarea>
                            <div id="emailHelp" class="form-text mb-3">Recuerda incluir un título para tu charla.</div>
                            <div class="d-grid">
                                <input type="submit" class=" btn btn-lg btn-success mt-3 text-center" value="Guardar Orador">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--fin form orador nuevo-->
        <main>

        </main>
 
    </main>





































