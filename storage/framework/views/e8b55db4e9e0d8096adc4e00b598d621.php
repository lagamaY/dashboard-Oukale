<?php $__env->startSection('titre'); ?>
Oukalê - S'enregistrer
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenu'); ?>
<div class="container-fluid page-body-wrapper full-page-wrapper d-flex">
<div class="content-wrapper d-flex align-items-center auth px-0">
    <div class="row w-100 mx-0">
    <div class="col-lg-4 mx-auto">
    <div class="auth-form-light text-left py-5 px-4 px-sm-5">

        <h4 class="font-weight-light text-center">Accéder au dashbord de Oukalê !</h4>
        <br />
        <form class="pt-3" action="<?php echo e(route('enregistrement-utilisateur')); ?>" method="POST">
        <?php if(Session::has('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
        <?php endif; ?>
        <?php if(Session::has('fail')): ?>
        <div class="alert alert-danger"><?php echo e(session('fail')); ?></div>
        <?php endif; ?>
        <?php echo csrf_field(); ?>

        <div class="form-group">
        <input type="text" class="form-control form-control-lg" id="name" name="name" placeholder="Nom & prénoms"
        value="<?php echo e(old('name')); ?>">
        <span class="text-danger"><?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
        </div>
        <div class="form-group">
        <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="Email"
            value="<?php echo e(old('email')); ?>">
        <span class="text-danger"><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
        </div>

        <div class="form-group">
        <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Mot de passe" value="<?php echo e(old('password')); ?>">
        <span class="text-danger"><?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
        </div>
        <div class="form-group">
        <input type="password" class="form-control form-control-lg" id="password_conf" name="password_confirmation"
            placeholder="Confirmer le mot de passe">
        <!-- <span class="text-danger"><?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span> -->
        </div>


        <br/>
        <div class="mt-3 text-center ">
            <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium
            auth-form-btn">S'inscrire</button>
            </div>
            <!-- <div class="mt-3 text-center " >
                  <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="">S'inscrire</a>
                </div> -->
                <div class="text-center mt-4 font-weight-light">
                Vous avez déjà un compte ?  <a href="<?php echo e(route('connexion')); ?>" class="text-primary">Se connecter</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DELL PC\Downloads\dashboard-oukale-19f6487b67badb095dd006b0adbadf6067e039f2\resources\views/auth/enregistrement.blade.php ENDPATH**/ ?>