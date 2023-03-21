<?php require "vista/layouts/header.php"; ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-10 border mt-5 mb-5">
            <a href="<?php echo urlsite ?>?page=carrusel&opcion=nuevo">Nuevo</a>
            <table class="table">
                <tr>
                    <td>Id_Treballador</td>
                    <td>Nom</td>
                    <td>Cognoms</td>
                    <td>Email</td>
                    <td>Direccio</td>
                    <td>DNI</td>
                    <td>Data_Alta</td>


                    <td>Accion</td>
                </tr>
                <?php foreach($datos as $v): ?>
                
                    <tr>
                        <td><?php echo $v->id_client ?> </td>
                        <td><?php echo $v->nom ?> </td>
                        <td><?php echo $v->cognoms ?> </td>
                        <td><?php echo $v->email ?> </td>
                        <td><?php echo $v->direccio ?> </td>
                        <td><?php echo $v->dni ?> </td>
                        <td><?php echo $v->data_alta ?> </td>


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
