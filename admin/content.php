<div id="form">
                <?php
                if (isset($_GET['save'])){
                ?>
                    <form  method="post">
                        <div class="row justify-content-center">
                            <div class="col-xl-10 col-lg-12 col-md-9">
                                <div class="card o-hidden border-0 shadow-lg my-5">
                                    <div class="card-body p-0">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-0 col-sm-0 d-none d-lg-block"></div>
                                            <div class="col-lg-6 col-md-12 col-sm-12">
                                                <div class="p-5">
                                                    <form class="user">
                                                        <div class="form-group">                                   
                                                            <?php
                                                            if(isset($_GET['save'])){
                                                            ?>
                                                            <label for="">Pais de Proveniencia</label>
                                                            <input type="text" name="pais_proveniencia" class="form-control form-control-user" placeholder="Pais de Proveniencia" value="<?php if(isset($_GET['edit'])) echo $getROW['pais_proveniencia']; ?>">
                                                            <?php
                                                            }
                                                            ?>
                                                        </div>
                                                        <div class="form-group">
                                                            <?php
                                                            if(isset($_GET['save'])){
                                                            ?>
                                                            <label for="">Producto</label>
                                                            <input type="text" name="producto" class="form-control form-control-user" placeholder="Producto" value="<?php if(isset($_GET['edit'])) echo $getROW['producto']; ?>">
                                                            <?php
                                                            }
                                                            ?>
                                                        </div>
                                                        <div class="form-group">
                                                        <?php
                                                        if(isset($_GET['save'])){
                                                        ?>
                                                            <label for="">Descripcion</label>
                                                            <input type="text" name="descripcion" class="form-control form-control-user" placeholder="Descripcion" value="<?php if(isset($_GET['edit'])) echo $getROW['descripcion']; ?>">
                                                        <?php
                                                        }
                                                        ?>
                                                    </div>
                                                    <div class="form-group">
                                                        <?php
                                                        if(isset($_GET['save'])){
                                                        ?>
                                                            <label for="">Fecha de Exportacion</label>
                                                            <input type="date" name="fecha_exportacion" class="form-control form-control-user" placeholder="Fecha de Exportacion" value="<?php if(isset($_GET['edit'])) echo $getROW['fecha_exportacion']; ?>">
                                                        <?php
                                                        }
                                                        ?>
                                                    </div>
                                                    <div class="form-group">
                                                        <?php
                                                        if(isset($_GET['save'])){
                                                        ?>
                                                            <label for="">Pais Receptor</label>
                                                            <input type="text" name="pais_receptor" class="form-control form-control-user" placeholder="Pais Receptor" value="<?php if(isset($_GET['edit'])) echo $getROW['pais_receptor']; ?>">
                                                        <?php
                                                        }
                                                        ?>
                                                    </div>
                                                        <div>
                                                            <?php
                                                            if(isset($_GET['save'])){
                                                            ?>
                                                            <button type="submit" class="btn btn-outline-primary" name="save">Agregar</button>
                                                            <a href="pais.php"><button class="btn btn-outline-primary" type="button">Cancelar</button></a>
                                        
                                                            <?php
                                                            }
                                                            ?>
                                                        </div>
                                                    </form> 
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-0 col-sm-0 d-none d-lg-block"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>      
                <?php
                }
                ?>
            </div>
            <div class="container">
                <td><a href="#" data-toggle="modal" data-target="#addModal"><button class="btn btn-outline-info"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                </svg>Agregar</button></a></td>
            </div><br>
            <!-- Modal de Agregar-->
            <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Añadir</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">Seguro que desea <b>Agregar</b> un nuevo usuario<br><br>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                                <a class="btn btn-primary" href="?save">Continuar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            