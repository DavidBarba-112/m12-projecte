<?php require "vista/layouts/header.php"; ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8 border mt-5 mb-5">
            <a href="<?php echo urlsite ?>?page=carrusel&opcion=nuevo">Nuevo</a>
            <table class="table">
                <tr>
                    <td>Id Producte</td>
                    <td>Nom</td>
                    <td>Descripcio</td>
                    <td>Preu</td>
                    
                    <td>Accion</td>
                </tr>
                <?php foreach($datos as $v): ?>
                
                    <tr>
                        <td><?php echo $v->id_producte ?> </td>
                        <td><?php echo $v->nom ?> </td>
                        <td><?php echo $v->descripcio ?> </td>
                        <td><?php echo $v->preu ?> </td>
                        

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
