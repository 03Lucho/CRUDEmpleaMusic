<link rel="icon" type="image/x-icon" href="<?php echo e(asset('assets/logo.ico')); ?>" />
<link href="<?php echo e(asset('css/iniciarsesio.css')); ?>" rel="stylesheet">

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="background-color: rgba(4, 79, 7, 0.412)"><?php echo e(__('Iniciar Sesion')); ?></div>

                        <div class="card-body">
                            <form method="POST" action="<?php echo e(route('login')); ?>">
                                <?php echo csrf_field(); ?>
                                <div style="text-align: center" class="logo">
                                    <img src="assets/logo.ico" alt="">
                                </div>
                                <div class="form-group row">
                                    <label for="role" class="col-md-4 col-form-label text-md-end"><?php echo e(__('Rol')); ?></label>

                                    <div class="col-md-6">
                                        <select id="role" class="form-control" name="role" required>
                                            <option value="aprendiz">Aprendiz</option>
                                            <option value="profesor">Docente</option>
                                            <option value="admin">Admin</option>
                                        </select>
                                    </div>
                                </div><br>

                                <div class="row mb-3">
                                    <label for="email"class="col-md-4 col-form-label text-md-end"><?php echo e(__('Direccion Email')); ?></label>

                                    <div class="col-md-6">
                                        <input id="email" type="email"
                                            class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email"
                                            value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>

                                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password"class="col-md-4 col-form-label text-md-end"><?php echo e(__('Contraseña')); ?></label>

                                    <div class="col-md-6" ">
                                        <input id="password" type="password"
                                            class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password"
                                            required autocomplete="current-password">

                                        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="invalid-feedback" role="alert">
                                                <strong><?php echo e($message); ?></strong>
                                            </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>

                                <div class="row mb-3" style="background-color: rgba(11, 151, 227, 0.473)">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                                <?php echo e(old('remember') ? 'checked' : ''); ?>>
                                            <label class="form-check-label" for="remember">
                                                <?php echo e(__('Recuerdame')); ?>

                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            <?php echo e(__('Iniciar Sesion')); ?>

                                        </button>

                                        <?php if(Route::has('password.request')): ?>
                                            <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                                                <?php echo e(__('Olvidaste tu contraseña?')); ?>

                                            </a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\CrudC-crea\resources\views/auth/login.blade.php ENDPATH**/ ?>