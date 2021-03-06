 
 <?php $__env->startSection('content'); ?>

   <section class="dashboard-counts section-padding">
     <div class="container-fluid">
       <div class="row">
         <!-- Count item widget-->
         <div class="col-xl-2 col-md-4 col-6">
           <div class="wrapper count-title d-flex">
             <div class="icon"><i class="icon-user"></i></div>
             <div class="name"><strong class="text-uppercase">Visites</strong><span> A l'instant</span>
               <div class="count-number">0</div>
             </div>
           </div>
         </div>
         <!-- Count item widget-->
         <div class="col-xl-2 col-md-4 col-6">
           <div class="wrapper count-title d-flex">
             <div class="icon"><i class="icon-padnote"></i></div>
             <div class="name"><strong class="text-uppercase">Visites</strong><span> Jour</span>
               <div class="count-number"><?php echo e(Session::get('connectDay')); ?></div>
             </div>
           </div>
         </div>
         <!-- Count item widget-->
         <div class="col-xl-2 col-md-4 col-6">
           <div class="wrapper count-title d-flex">
             <div class="icon"><i class="icon-check"></i></div>
             <div class="name"><strong class="text-uppercase">Nbre Visites</strong><span> 7 derniers Jours</span>
               <div class="count-number">0</div>
             </div>
           </div>
         </div>
         <!-- Count item widget-->
         <div class="col-xl-2 col-md-4 col-6">
           <div class="wrapper count-title d-flex">
             <div class="icon"><i class="icon-bill"></i></div>
             <div class="name"><strong class="text-uppercase"> Articles </strong><span> Tous</span>
               <div class="count-number"><?php echo e($nbreArticles); ?></div>
             </div>
           </div>
         </div>
         <!-- Count item widget-->
         <div class="col-xl-2 col-md-4 col-6">
           <div class="wrapper count-title d-flex">
             <div class="icon"><i class="icon-list"></i></div>
             <div class="name"><strong class="text-uppercase">Services</strong><span> All</span>
               <div class="count-number"><?php echo e($nbreServices); ?></div>
             </div>
           </div>
         </div>
         <!-- Count item widget-->
         <div class="col-xl-2 col-md-4 col-6">
           <div class="wrapper count-title d-flex">
             <div class="icon"><i class="icon-list-1"></i></div>
             <div class="name"><strong class="text-uppercase">Personnels</strong><span> All</span>
               <div class="count-number"><?php echo e($nbrePersonnels); ?></div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </section>

      <section class="dashboard-header section-padding">
        <div class="container-fluid">
          <div class="row d-flex align-items-md-stretch">
            <!-- To Do List-->
            <div class="col-lg-3 col-md-6">
              <div class="card to-do">
                <h2 class="display h4">To do List</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <ul class="check-lists list-unstyled">
                  <li class="d-flex align-items-center">
                    <input type="checkbox" id="list-1" name="list-1" class="form-control-custom">
                    <label for="list-1">Similique sunt in culpa qui officia</label>
                  </li>
                  <li class="d-flex align-items-center">
                    <input type="checkbox" id="list-2" name="list-2" class="form-control-custom">
                    <label for="list-2">Ed ut perspiciatis unde omnis iste</label>
                  </li>
                  <li class="d-flex align-items-center">
                    <input type="checkbox" id="list-3" name="list-3" class="form-control-custom">
                    <label for="list-3">At vero eos et accusamus et iusto </label>
                  </li>
                  <li class="d-flex align-items-center">
                    <input type="checkbox" id="list-4" name="list-4" class="form-control-custom">
                    <label for="list-4">Explicabo Nemo ipsam voluptatem</label>
                  </li>
                  <li class="d-flex align-items-center">
                    <input type="checkbox" id="list-5" name="list-5" class="form-control-custom">
                    <label for="list-5">Similique sunt in culpa qui officia</label>
                  </li>
                  <li class="d-flex align-items-center">
                    <input type="checkbox" id="list-6" name="list-6" class="form-control-custom">
                    <label for="list-6">At vero eos et accusamus et iusto </label>
                  </li>
                  <li class="d-flex align-items-center">
                    <input type="checkbox" id="list-7" name="list-7" class="form-control-custom">
                    <label for="list-7">Similique sunt in culpa qui officia</label>
                  </li>
                  <li class="d-flex align-items-center">
                    <input type="checkbox" id="list-8" name="list-8" class="form-control-custom">
                    <label for="list-8">Ed ut perspiciatis unde omnis iste</label>
                  </li>
                </ul>
              </div>
            </div>
            <!-- Pie Chart-->
            <div class="col-lg-3 col-md-6">
              <div class="card project-progress">
                <h2 class="display h4">Project Beta progress</h2>
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <div class="pie-chart">
                  <canvas id="pieChart" width="300" height="300"> </canvas>
                </div>
              </div>
            </div>
            <!-- Line Chart -->
            <div class="col-lg-6 col-md-12 flex-lg-last flex-md-first align-self-baseline">
              <div class="card sales-report">
                <h2 class="display h4">Sales marketing report</h2>
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor amet officiis</p>
                <div class="line-chart">
                  <canvas id="lineCahrt"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Updates Section -->
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.templateDash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>