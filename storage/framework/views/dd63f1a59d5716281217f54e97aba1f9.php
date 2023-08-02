<!DOCTYPE html>
<html>
<head>
    <title>Lista de Aprendices</title>
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
                    <td><?php echo e($aprendiz->Imagen); ?></td>
                    <td>
                        <a href="<?php echo e(route('aprendices.show', $aprendiz->idaprendiz)); ?>">Ver</a>
                        <a href="<?php echo e(route('aprendices.edit', $aprendiz->idaprendiz)); ?>">Editar</a>
                        <form action="<?php echo e(route('aprendices.destroy', $aprendiz->idaprendiz)); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</body>
</html>
<?php /**PATH C:\laragon\www\empleamusic\resources\views/aprendiz/index.blade.php ENDPATH**/ ?>