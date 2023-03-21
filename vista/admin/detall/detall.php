<?php require "vista/layouts/header.php"; ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8 border mt-5 mb-5">
            <a href="<?php echo urlsite ?>?page=carrusel&opcion=nuevo">Nuevo</a>
            <table class="table">
                <tr>
                    <td>Id Detall</td>
                    <td>Descripcio</td>
                    <td>Import</td>
                <!--<td>id_treballador</td> -->
                <!--<td>id_presupost</td> -->

                    <td>Accion</td>
                </tr>
                <?php foreach($datos as $v): ?>
                
                    <tr>
                        <td><?php echo $v->id_detall_presupost ?> </td>
                        <td><?php echo $v->descripcio ?> </td>
                        <td><?php echo $v->cognoms ?> </td>
                        <td><?php echo $v->import ?> </td>
                        

                        <td>
                        <a href="<?php echo urlsite ?>?page=carrusel&opcion=editar&id=<?php echo $v->id?> ">Editar</a>
                        <a href="<?php echo urlsite ?>?page=carrusel&opcion=eliminar&id=<?php echo $v->id?> ">Eliminar</a>
                
                        </td>
                    </tr>
                <?php endforeach ?>
                
            </table>
            
        </div>
    </div>
</div>
<?php require "vista/layouts/footer.php"; ?>
