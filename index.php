<?php 
    include('license.php');
?>
<!DOCTYPE html>
<html lang="id">
 <head>
   <?php include("./partials/_head.php"); ?>
   <title><?= $title ?></title>
 </head>
 <body>

    <!-- s:main -->
    <main>
        <!-- Hero -->
        <section class="section section bg-soft pb-3 overflow-hidden z-2">
            <div class="container z-2">
                <div class="row justify-content-center text-center pt-6">
                    <div class="col-lg-8 col-xl-8">
                        <h1 class="display-2 mb-3">Monitoring Tegangan</h1>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-lg">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-4 col-md-6 col-sm-10 mb-4">
                        <!-- Icon box -->
                        <div class="card bg-primary shadow-soft text-center border-light">
                            <div class="card-header">
                                <span class="display-4 text-uppercase">Status Baterai</span>
                            </div>
                            <div class="icon-box text-center mb-5 mb-md-0">
                                <div class="icon icon-shape icon-xxl bg-soft shadow-soft border border-light rounded-circle mb-3">
                                    <span class="fas fa-battery-quarter text-red-500"></span>
                                </div>
                                <h2 class="h5 my-3"><strong>25%</strong></h2>
                            </div>
                        </div>
                        <!-- End of Icon box -->
                    </div>

                    <!-- s:tegangan -->
                    <div class="col-12 col-lg-4 col-md-6 col-sm-10 mb-4">
                        <!-- Icon box -->
                        <div class="card bg-primary shadow-soft text-center border-light">
                            <div class="card-header">
                                <span class="display-4 text-uppercase">Tegangan</span>
                            </div>
                            <div class="icon-box text-center mb-5 mb-md-0">
                                <div class="icon icon-shape icon-xxl bg-soft shadow-soft border border-light rounded-circle mb-3">
                                    <span class="fas fa-bolt text-warning"></span>
                                </div>
                                <h2 class="h5 my-3"><strong>15V</strong></h2>
                            </div>
                        </div>
                        <!-- End of Icon box -->
                    </div>
                    <!-- e:tegangan -->

                    <!-- s:lampu -->
                    <div class="col-12 col-lg-4 col-md-6 col-sm-10 mb-4">
                        <!-- Icon box -->
                        <div class="card bg-primary shadow-soft text-center border-light">
                            <div class="card-header">
                                <span class="display-4 text-uppercase">Lampu</span>
                            </div>
                            <div class="icon-box text-center mb-5 mb-md-0">
                                <div class="icon icon-shape icon-xxl bg-soft shadow-soft border border-light rounded-circle mb-3">
                                    <span class="fas fa-lightbulb text-dark"></span>
                                </div>
                                <h2 class="h5 my-3"><strong>Padam</strong></h2>
                            </div>
                        </div>
                        <!-- End of Icon box -->
                    </div>
                    <!-- e:lampu -->
                </div>
            </div>
        </section>
    </main>
    <!-- e:main -->

 </body>
</html>