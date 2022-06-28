<?php
require 'conexion.php';
if(isset($_POST['submit'])){
   $insertData  = $collection->insertOne([

       'Nombre' => $_POST['Nombre'],
       'Apellido' => $_POST['Apellido'],
	   'Edad' => $_POST['Edad'],
	   'Sexo' => $_POST['Sexo'],
       'Email' => $_POST['Email'],

   ]);
   header("Location: index.php");

}


?>


<?PHP include ("nav.php");?>

<body>


<div class="container">

   <h1>Crear estudiante</h1>

   <a href="index.php" class="btn btn-outside-dark">Volver</a>


   <div class="card  bg-glass">
                <div class="card-body ">
                    <form method="POST" >
                        
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Nombre</label>
                            <div class="col-md-3">
                                <input id="name" type="text" class="form-control" name="Nombre" >
  
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Apellido</label>
                            <div class="col-md-3">
                                <input id="apellido" type="text" class="form-control " name="Apellido" >
  
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Edad</label>
                            <div class="col-md-3">
                                <input type="number" class="form-control " name="Edad" >
  
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputState" class="col-md-4 col-form-label text-md-end">Sexo</label>

                            <div class="col-md-3">
                            <select  d="inputState" class="form-control"  name="Sexo" >
										<option selected><?php echo $estudiante->Sexo; ?></option>
                                        <option value="Masculino">Masculino</option>
                                        <option value="Femenino">Femenino</option>
                                        
                                </select>
 
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Email</label>
                            <div class="col-md-3">
                                <input type="email" class="form-control " name="Email" >
  
                            </div>
                        </div>
                        
                        
                        
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" name="submit" class="btn text-white btn-dark">
                                    Registrar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <?php include('footer.php') ?>
</body>

</html>