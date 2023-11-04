<!DOCTYPE html>
<html lang="en">
<head>    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Directorio Telef&oacute;nico</title>
</head>
<body class="antialiased">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <h2>Directorio Telef&oacute;nico</h2>
        
        <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
            
            <div class="grid grid-cols-1 md:grid-cols-2">

                <div class="p-6">

                <p>
                    <a href="<?php echo e(route('directorio.crear')); ?>" class="btn btn-primary">Agregar nuevo</a>
                    <a href="<?php echo e(route('directorio.buscar')); ?>" class="btn btn-success">Buscar</a>
                </p>

                <table class="table">
                    <thead>
                        <th scope="col" name="codigo">C&oacute;digo</th>
                        <th scope="col" name="nombre">Nombre</th>
                        <th scope="col" name="tipoElectrodomestico">Apellido</th>
                        <th scope="col" name="precio">Tel&eacute;fono</th>
                        <th scope="col">Ver contactos</th>
                        <th scope="col">Eliminar</th>
                    </thead>
                    <tbody>
                           
                    
                    
  <?php $__currentLoopData = $directorios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
    <th scope="row"><?php echo e($item->codigoEntrada); ?></th>
      <td><?php echo e($item->nombre); ?></td>
      <td><?php echo e($item->apellido); ?></td>
      <td><?php echo e($item->telefono); ?></td>
      
      <td>
                                    <a href="<?php echo e(route('contacto.index')); ?>" class="btn btn-info">Ver</a>
                                </td>
                                <td>
                                    <a href="<?php echo e(route('directorio.delete')); ?>" class="btn btn-danger">Eliminar</a>
                                </td>
     

    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                    
                   
                    </tbody>

                </table>

                </div>

            </div>

        </div>


    </div>
</body>
</html><?php /**PATH C:\wamp64\www\examen1\resources\views/directorio.blade.php ENDPATH**/ ?>