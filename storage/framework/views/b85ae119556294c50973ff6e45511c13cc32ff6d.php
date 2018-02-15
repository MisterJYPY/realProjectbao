<?php $__env->startSection('content'); ?>

    <?php if(Session::has('infCurrentMessage')): ?>

        <div class="alert alert-warning alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <?php echo e(Session::get('infCurrentMessage')); ?> <strong><i class="glyphicon glyphicon-thumbs-up"></i></strong>
        </div>
    <?php endif; ?>

    <div class="container-fluid">

        <div class="row">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header center">
                        <h4  style="color: maroon">Tous les messages lu <mark>(<?php echo e(count($allReadPost)); ?>)</mark></h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nom </th>
                                    <th>Mail</th>
                                    <th>message</th>
                                    <th>send</th>
                                    <th>read</th>
                                    <th>delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i=1; ?>
                                <?php $__currentLoopData = $allReadPost; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $currentReadmessage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <th scope="row"><?php echo e($i); ?></th>
                                        <td><?php echo e($currentReadmessage['nom']); ?></td>
                                        <td><?php echo e($currentReadmessage['intitule']); ?></td>
                                        <td> <a href="<?php echo e(route('viewMessage',$currentReadmessage['id'])); ?>" ><strong style="color:#0069d9"><?php echo e((strlen($currentReadmessage['description'])<8)?$currentReadmessage['description']:substr($currentReadmessage['description'],0,5)."..."); ?></strong></a></td>
                                        <td><?php echo e($currentReadmessage['created_at']); ?></td>
                                        <td><?php echo e($currentReadmessage['updated_at']); ?></td>
                                        <td><a href="<?php echo e(route('delMessage',$currentReadmessage['id'])); ?>" class="alert-danger">Del</a></td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <?php echo e($allReadPost ->links()); ?>

            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 style="color: maroon">Tous vos messages Non encore lu <mark>(<?php echo e(count($allNewpost)); ?>)</mark></h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-sm">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nom</th>
                                    <th>Mail</th>
                                    <th>message</th>
                                    <th>send</th>
                                    <th>read here</th>
                                    <th>delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $j=1; $cpt=0;?>
                                <?php $__currentLoopData = $allNewpost; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $currentMessageNotRead): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <th scope="row"><?php echo e($j); ?></th>
                                        <td><?php echo e($currentMessageNotRead['nom']); ?></td>
                                        <td><?php echo e($currentMessageNotRead['intitule']); ?></td>
                                        <td> <strong style="color:#0069d9"><?php echo e((strlen($currentMessageNotRead['description'])<8)?$currentMessageNotRead['description']:substr($currentMessageNotRead['description'],0,5)."..."); ?></strong></td>
                                        <td><?php echo e($currentMessageNotRead['created_at']); ?></td>
                                        <td><a href="<?php echo e(route('viewMessage',$currentMessageNotRead['id'])); ?>" >Here</a></td>
                                        <td><a href="<?php echo e(route('delMessage',$currentMessageNotRead['id'])); ?>" class="alert-danger">Del</a></td>

                                    </tr>
                                    <?php $j++;?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                    <?php echo e($allNewpost ->links()); ?>

                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 style="color:blue">Tous vos messages archivés <mark>(<?php echo e(count($allBackMessage)); ?>)</mark></h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-sm">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nom</th>
                                    <th>Mail</th>
                                    <th>message</th>
                                    <th>send</th>
                                    <th>read here</th>
                                    <th>delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $j=1; $cpt=0;?>
                                <?php $__currentLoopData = $allBackMessage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $currentMessageNotRead): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <th scope="row"><?php echo e($j); ?></th>
                                        <td><?php echo e($currentMessageNotRead['nom']); ?></td>
                                        <td><?php echo e($currentMessageNotRead['intitule']); ?></td>
                                        <td> <strong style="color:#0069d9"><?php echo e((strlen($currentMessageNotRead['description'])<8)?$currentMessageNotRead['description']:substr($currentMessageNotRead['description'],0,5)."..."); ?></strong></td>
                                        <td><?php echo e($currentMessageNotRead['created_at']); ?></td>
                                        <td><a href="<?php echo e(route('viewMessage',$currentMessageNotRead['id'])); ?>" >Here</a></td>
                                        <td><a href="<?php echo e(route('delMessage',$currentMessageNotRead['id'])); ?>" class="alert-danger">Del</a></td>

                                    </tr>
                                    <?php $j++;?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                    <?php echo e($allBackMessage->links()); ?>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.templateDash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>