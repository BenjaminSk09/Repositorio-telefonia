<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pagina Lineas Telefonicas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
        <div class="container">
        <h1>Lineas Telefonicas</h1>
                <table class="table table-border table-striped">
                    <thead>
                         <tr>
                            <th>No. Telefono</th>
                            <th>Fecha de pago</th>
                            <th>Meses de atraso </th>
                            <th>Plan Id</th>
                            <th>Cliente Id</th>
                        </tr>
                    </thead>
                <tbody>
            <?php foreach($datos as $telef):?>
                        <tr>
                            <td><?php echo $telef[ 'no_telefono'];?></td>
                            <td><?php echo $telef[ 'fecha_pago'];?></td>
                            <td><?php echo $telef[ 'meses_atraso'];?></td>
                            <td><?php echo $telef[ 'plan_id'];?></td>
                            <td><?php echo $telef[ 'cliente_id'];?></td>
                        </tr>
            <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>