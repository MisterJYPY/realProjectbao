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
                    <img class="img-rounded" src="upload/others/4.jpg" alt="">
                </div>
                <div class="col-md-6">
                    <h2 style="color: #00008B" class="mb-none">Mot de Bienvenue...</h2><hr class="solid">
                    <p>Disposé d'une technologie de pointe dans ce present siècle, n'est plus une option pour les entrepries.</p>
                    <p>Mais une neccesité vitale qui s'est impose a toutes entreprises qui se veut serieuse et dynamique, car la technologie conditionnne la bonne circulation et
                        utilisation de l'information qui constitue la moelle epiniere de l'entreprise.</p>
                    <p>C'est dans cette optique que <strong style="color : #00008B">BAO</strong>-<strong style="color: #F7230C">TECNOLOGIE</strong>est née, pour etre une reponse efficiente et efficace. </p>
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
                    <img src="upload/others/4.jpg" alt="">
                </div>
                <div class="col-md-6">
                    <h2 style="color: #F7230C">Que Faisons Nous?</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.</p>
                    <p>Ut enim ad minim veniam,	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.</p>
                    <p>Ut enim ad minim veniam,	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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
                                <img src="upload/team/5.jpg" alt="">
                                <h2>John Doe</h2>
                                <span style="color: #00008B"><b>Chef d'Entreprise</b></span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="team-post">
                                <img src="upload/team/2.jpg" alt="">
                                <h2>Kenan Januzi</h2>
                                <span style="color: #00008B"><b>Directeur General</b></span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="team-post">
                                <img src="upload/team/6.jpg" alt="">
                                <h2>Hunejs Dauti</h2>
                                <span style="color: #00008B"><b>Chef de Service</b></span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
        </div>
        </div>
    </section>
    <!-- End team section -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>