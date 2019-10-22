<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="col-md-12 ">
            <div class="mb-3" style="margin-bottom: 10px;">
                <div class="row">
                    <div class="col-md-2">
                        <strong>Search By :</strong>
                    </div>
                    <div class="col-md-3">
                        <select  class="form-control" id="fileds">
                            <option value="name">Name</option>
                            <option value="category">Category</option>
                        </select>
                    </div>
                    <div class="col-md-7">
                        <input id="target"  type="text" class="form-control" placeholder="Search">
                    </div>
                </div>
            </div>

            <div class="panel panel-default mt-3">
                <div class="panel-body">
                    <div class="row">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Group Type</th>
                                    <th scope="col">Account Name</th>
                                    <th scope="col">Post Text</th>
                                    <th scope="col">Time</th>

                                </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($post->groupInfo->name); ?></td>
                                <td><?php echo e($post->accountInfo->name); ?></td>
                                <td><?php echo e($post->post_text); ?></td>
                                <td><?php echo e($post->created_at); ?></td>

                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        <?php echo e($posts->links()); ?>


                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>\
<?php $__env->startSection('js'); ?>
<script>
    $( "#target" ).change(function() {
        alert( "Handler for .change() called." );
        // here send data via ajax and load this data into dom
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>