<?php $__env->startSection('title'); ?>
  Welcome
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <div class="row">
    <div class="col-md-6">
      <h3>Sign Up</h3>
      <form action="<?php echo e(route('signup')); ?>" method="post">
        <div class="form-group">
          <label for="email">Your E-mail</label>
          <input class="form-control" type="text" name="email" id="email">
        </div>
        <div class="form-group">
          <label for="email">Your First Name</label>
          <input class="form-control" type="text" name="first_name" id="first_name">
        </div>
        <div class="form-group">
          <label for="email">Password</label>
          <input class="form-control" type="password" name="password" id="password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <input type="hidden" name="_token" value="<?php echo e(Session::token()); ?>">
      </form>
    </div>
    <div class="col-md-6">
      <h3>Sign In</h3>
      <form action="#" method="post">
        <div class="form-group">
          <label for="email">Your E-mail</label>
          <input class="form-control" type="text" name="email" id="email">
        </div>
        <div class="form-group">
          <label for="email">Your First Name</label>
          <input class="form-control" type="text" name="first_name" id="first_name">
        </div>
        <div class="form-group">
          <label for="email">Password</label>
          <input class="form-control" type="password" name="password" id="password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>