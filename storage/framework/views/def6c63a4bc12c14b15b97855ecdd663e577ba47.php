

<?php $__env->startSection('content'); ?>
From: <?php echo e($message->userFrom->name); ?>

<br>
Email:  <?php echo e($message->userFrom->email); ?>

<br>
Subject: <?php echo e($message->subject); ?>

<hr>
Message:
<br>
<br>
 <?php echo e($message->body); ?>

 <hr>
<a href="<?php echo e(route('create',[$message->userFrom->id,$message->subject])); ?>" class="btn btn-primary">Reply</a>
<a href="<?php echo e(route('delete',$message->id)); ?>" class="btn btn-danger float-right">Delete</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Keisuke\Desktop\Message_system\resources\views/read.blade.php ENDPATH**/ ?>