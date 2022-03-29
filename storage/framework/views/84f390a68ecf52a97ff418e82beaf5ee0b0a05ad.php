<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h1 class="mt-4">Blog</h1>
    
        <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
       <?php endif; ?>

        <form action="<?php echo url ('store'); ?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="<?php echo csrf_token();?>">

            <div class="form-group">
                <label for="exampleInput">Title</label>
                <input type="text" class="form-control"  id="exampleInput" 
                    name="title" placeholder="Enter title" value="<?php echo old('title');?>">
            </div>


            <div class="form-group">
                <label for="exampleInputEmail">Content</label>
                <input type="text" class="form-control"  id="exampleInput"
                    name="content" placeholder="Enter content" value="<?php echo old('content');?>">
            </div>


            <div class="form-group">
                <label for="exampleInputl">Image</label>
                <input type="file" class="form-control"  id="exampleInput" 
                    name="image" placeholder="" value="<?php echo old('image');?>">
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>




    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\task9\resources\views/create.blade.php ENDPATH**/ ?>