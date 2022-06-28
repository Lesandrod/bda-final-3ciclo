<?php
require 'conexion.php';


if (isset($_GET['id'])) {
   
   $estudiante = $collection->findOne(['_id' => new MongoDB\BSON\ObjectID($_GET['id'])]);

}


if(isset($_POST['submit'])){


   $collection->updateOne(

       ['_id' => new MongoDB\BSON\ObjectID($_GET['id'])],

       ['$set' => ['Nombre' => $_POST['Nombre'],
                  'Apellido' => $_POST['Apellido'],
                  'Edad' => $_POST['Edad'],
                  'Sexo' => $_POST['Sexo'],
                  'Email' => $_POST['Email']
                  ]]

   );
   header("Location: index.php");

}

?>
<?PHP include ("nav.php");?>
<body>

<a href="index.php" class="btn btn-outside-dark m-2">Volver</a>
<div class="container text-center">

   <h1>Editar</h1>
   
   <div class="card  bg-glass">
                <div class="card-body ">
                    <form method="POST" >
                        
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Nombre</label>
                            <div class="col-md-3">
                                <input id="name" type="text" value="<?php echo $estudiante->Nombre; ?>" class="form-control" name="Nombre" >
  
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Apellido</label>
                            <div class="col-md-3">
                                <input id="apellido" type="text" value="<?php echo $estudiante->Apellido; ?>" class="form-control " name="Apellido" >
  
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Edad</label>
                            <div class="col-md-3">
                                <input type="number" class="form-control" value="<?php echo $estudiante->Edad; ?>" name="Edad" >
  
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
                                <input type="email" class="form-control" value="<?php echo $estudiante->Email; ?>" name="Email" >
  
                            </div>
                        </div>
                        
                        
                        
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" name="submit" class="btn text-white btn-dark">
                                    Guardar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

   


   

</div>

</body>

</html>