<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo $__env->yieldContent('title'); ?></title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
  </head>
  <body>
      <?php echo $__env->make('includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <div class="container">
        <?php echo $__env->yieldContent('content'); ?>
      </div>
  </body>
</html>
