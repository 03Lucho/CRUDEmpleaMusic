<!DOCTYPE html>
<html>
<head>
    <title>Lista de Aprendices</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/index.css')); ?>">
</head>
<body>
    <h1>Lista de Aprendices</h1>
    <a href="<?php echo e(route('aprendices.create')); ?>">Crear Nuevo Aprendiz</a>
    
    <?php if(session('success')): ?>
        <p><?php echo e(session('success')); ?></p>
    <?php endif; ?>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Telefono</th>
                <th>Descripcion</th>
                <th>Foto</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $aprendices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aprendiz): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($aprendiz->nombre); ?></td>
                    <td><?php echo e($aprendiz->apellido); ?></td>
                    <td><?php echo e($aprendiz->email); ?></td>
                    <td><?php echo e($aprendiz->telefono); ?></td>
                    <td><?php echo e($aprendiz->descripcion); ?></td>
                    <td><img src="<?php echo e(asset('storage/fotos_aprendiz/' . $aprendiz->Imagen)); ?>"></td>
                    <td>
                        <a href="<?php echo e(route('aprendices.edit', $aprendiz->idaprendiz)); ?>">Editar</a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</body>
</html>
<?php /**PATH C:\laragon\www\empleamusic\resources\views/aprendiz/index.blade.php ENDPATH**/ ?>