<?php $__env->startSection('titre'); ?>
    Oukalê - Se connecter
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenu'); ?>
<div class="container-fluid page-body-wrapper full-page-wrapper d-flex">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <!-- <div class="brand-logo">
                <img src="assets/images/logo.png" alt="logo">
              </div> -->
              <h4>Connexion au dashbord de oukalê.</h4>
              <br/>
              <form class="pt-3" method="POST" action="<?php echo e(route('connexion-utilisateur')); ?>">
              <?php if(Session::has('success')): ?>
                <div class="alert alert-success"><?php echo e(session('success')); ?></div>
                <?php endif; ?>
                <?php if(Session::has('fail')): ?>
                <div class="alert alert-danger"><?php echo e(session('fail')); ?></div>
                <?php endif; ?>
                <?php echo csrf_field(); ?>
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="InputEmail1" name="email" placeholder="Email" value="<?php echo e(old('email')); ?>">
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
                  <input type="password" class="form-control form-control-lg" id="InputPassword1" name="password" placeholder="Mot de passe" value="<?php echo e(old('password')); ?>">
                  <span class="text-danger"><?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
                </div>
                <div class="mt-3" >
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Se connecter</button>
                </div>
                <!-- <div class="mt-3">
                  <a class="  btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn " href="">Se connecter</a>
                </div> -->
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">

                  </div>
                  <a href="<?php echo e(route('mot-de-passe-oublie')); ?>" class="auth-link text-black">Mot de passe oublié ?</a>
                </div>
                <div class="mb-2">

                </div>
                <div class="text-center mt-4 font-weight-light">
                  Vous n'avez pas encore de compte ? <a href="<?php echo e(route('creer-un-compte')); ?>" class="text-primary">Créer un compte</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\DELL PC\Downloads\dashboard-oukale-19f6487b67badb095dd006b0adbadf6067e039f2\resources\views/auth/connexion.blade.php ENDPATH**/ ?>