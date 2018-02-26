<?php $__env->startSection('content'); ?>
    <!-- page-banner-section
			================================================== -->
    <section class="page-banner-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2><b>Qui sommes nous?</b></h2>
                </div>
                <div class="col-md-6">
                    <ul class="page-depth">
                        <li><a href="<?php echo e(route('home')); ?>"><b>Bao-Technoligies</b></a></li>
                        <li><a href="<?php echo e(route('apropos')); ?>"><b>Qui sommes nous ?</b></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End page-banner section -->

    <!-- about section MOT DE BIENVENUE DU CHEF D'ENTREPRISE
        ================================================== -->
    <section  class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img class="img-rounded" src="upload/others/bao_welcome.jpg" alt="">
                </div>
                <div class="col-md-6">
                    <h2 style="color: #00008B" class="mb-none">Mot de Bienvenue...</h2><hr class="solid">
                    <p>Disposé d'une technologie de pointe dans ce present siècle, n'est plus une option pour les entrepries.</p>
                    <p>Mais une neccesité vitale qui s'est impose a toutes entreprises qui se veut serieuse et dynamique, car la technologie conditionnne la bonne circulation et
                        utilisation de l'information qui constitue la moelle epiniere de l'entreprise.</p>
                    <p>C'est dans cette optique que <strong style="color : #00008B">BAO</strong>-<strong style="color: #F7230C">TECNOLOGIE</strong> est née, pour etre une reponse efficiente et efficace. </p>
                    <p>Notre principale raison d'etre est de vous accompagner depuis la naissance de l'idée jusqu'a sa concretisation</p>
                    Qu’il soit question de Muliti-Nationale, PME localisée en un
                    seul endroit ou encore de grandes entreprises
                    réparties sur plusieurs sites, employant des dizaines
                    voire des milliers de personnes et agissant dans plusieurs
                    domaines d’activités nous sommes à leurs côtés pour leur offrir la technologie precise adaptée a la situation actuelle.
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p style="margin-top: 5px">
                            <strong style="color : #00008B">BAO</strong>-<strong style="color: #F7230C">TECNOLOGIE</strong> accompagne les entreprises pour que la Technologie
                            ne soit plus un défi pour elles, mais plutôt le partenaire
                            de leurs fonctionnement et un associé sur lequel les
                            décideurs peuvent compter pour leur expansion et leur croissance.
                            Avec nous votre allez plus loin...
                        </p>
                    </div>
                 </div>
            </div>
        </div>
    </section>
    <!-- End about section -->

    <!-- suite about section
        ================================================== -->
    <section style="padding-top: 2px; padding-bottom: 0px" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img class="img-rounded" src="upload/others/bao_work.jpg" alt="">
                </div>
                <div class="col-md-6">
                    <h2 style="color: #F7230C">Que Faisons Nous?</h2>
                    Notre philosophie historique sur la polyvalence de nos collaborateurs contribue à l’élaboration d’organisations optimisées favorisant la réduction des coûts sans altérer la qualité de service.
                    Grâce à la qualité de ses recrutements et de son management opérationnel,
                    BAO TECHNOLOGIE se veut être le  leader des services aux occupants,
                    met a disposition des équipes stables qui participent à la construction
                    et à la mise en place de vos projets stratégiques dans la durée
                    </p>
                    <p>Notre volonté : </p>
                    <ul style="list-style: none" class="offer-list">
                        <li><i class="fa fa-cube"></i><b class="text-success">Inventé le visuel pour vous !</b></li>
                        <li><i class="fa fa-cube"></i> Guider votre demarche !</li>
                        <li><i class="fa fa-cube"></i> Etres l'outils dont vous avez besoin !</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End team section -->

    <!-- Que faisons nous section
      ================================================== -->
    <section style="padding-top: 4px; padding-bottom:0px" class="team-section">
        <div class="title-section">
            <h1 style="color: #00008B">Notre <strong style="color: #F7230C">Equipe</strong></h1>
        </div>
        <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="team-post">
                                <img class="img-rounded" src="upload/team/bao_manager.jpg" alt="">
                                <h2>Mr ...</h2>
                                <span style="color: #00008B"><b>Chef d'Entreprise</b></span>
                                <p>Ingenieur de haut niveau il est le garant moral de l'entreprise et represente la membrane
                                    principale du systeme decisionnelle de La Boite A Outils.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="team-post">
                                <img class="img-rounded" src="upload/team/bao_dr.jpg" alt="">
                                <h2>Madame ...</h2>
                                <span style="color: #00008B"><b>Directeur General</b></span>
                                <p>Il est charge du management Operationel de l'entreprise, il s'assure de la bonne gestion des ressources de l'entreprise</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="team-post">
                                <img class="img-rounded" src="upload/team/bao_schef.jpg" alt="">
                                <h2>Mr ...</h2>
                                <span style="color: #00008B"><b>Chef de Service</b></span>
                                <p>Agent principale d'encadrement et de suivi du personnel de l'entreprise.</p>
                            </div>
                        </div>
                    </div>
        </div>
        </div>
    </section>
    <!-- End team section -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>