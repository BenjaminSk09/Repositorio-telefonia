<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pagina Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1>Clientes</h1>
            <table class="table table-border table-striped text-center table-dark">
                    <thead>
                        <tr>
                            <th>ID del Cliente</th>
                            <th>Apellido</th>
                            <th>Nombre</th>
                            <th>Correo Electronico</th>
                            <th>Calle y Avenida</th>
                            <th>No. Casa</th>
                            <th>Zona</th>
                        </tr>
                    </thead>
                <tbody>
                <?php foreach($datos as $clientes): ?>
                        <tr>
                            <td><?php echo $clientes[ 'cliente_id'];?></td>
                            <td><?php echo $clientes[ 'apellido'];?></td>
                            <td><?php echo $clientes[ 'nombre'];?></td>
                            <td><?php echo $clientes[ 'correo_electronico'];?></td>
                            <td><?php echo $clientes[ 'calle_avenida'];?></td>
                            <td><?php echo $clientes[ 'no_casa'];?></td> 
                            <td><?php echo $clientes[ 'zona'];?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>