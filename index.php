<?php 
    include('license.php');
?>
<!DOCTYPE html>
<html lang="id">
 <head>
   <?php include("partials/_head.php"); ?>
 </head>
 <body>

    <!-- s:main -->
    <main>
        <!-- Hero -->
        <section class="section section bg-soft pb-3 overflow-hidden z-2">
            <div class="container z-2">
                <div class="row justify-content-center text-center pt-3">
                    <div class="col-lg-8 col-xl-8">
                        <h1 class="display-2 font-weight-bold mb-2">
                            <?= SITE_TITLE ?>
                        </h1>
                        <button class="btn btn-primary" id="loadingInfo" type="button" disabled="disabled">
                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true">
                            </span> <span class="ml-1">Mohon tunggu, memuat data....</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-lg-s">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-4 col-md-6 col-sm-8 mb-4">
                        <!-- Icon box -->
                        <div class="card bg-primary shadow-soft text-center border-light">
                            <div class="card-header">
                                <span class="display-4 text-uppercase">Status Baterai</span>
                            </div>
                            <div class="card-body">
                                <div class="icon-box text-center mb-5 mb-md-0">
                                    <div class="icon icon-shape icon-2xl bg-soft shadow-soft border border-light rounded-circle mb-3">
                                        <span id="batteryIcon" class="fas fa-battery-empty text-red-5"></span>
                                    </div>
                                    <div class="progress-wrapper">
                                        <div class="progress progress-lg">
                                            <div id="batteryBar" class="progress-bar progress-bar-animation bg-coolgray-8" role="progressbar" style="width: 0.1%;"></div>
                                        </div>
                                    </div>
                                    <h2 class="h5"><span id="batteryPercentage">0%</span></h2>
                                </div>
                            </div>
                        </div>
                        <!-- End of Icon box -->
                    </div>

                    <!-- s:tegangan -->
                    <div class="col-12 col-lg-4 col-md-6 col-sm-8 mb-4">
                        <!-- Icon box -->
                        <div class="card bg-primary shadow-soft text-center border-light">
                            <div class="card-header">
                                <span class="display-4 text-uppercase">Tegangan</span>
                            </div>
                            <div class="card-body">
                                <div class="icon-box text-center mb-5 mb-md-0">
                                    <div class="icon icon-shape icon-2xl bg-soft shadow-soft border border-light rounded-circle mb-3">
                                        <span class="fas fa-bolt text-warning"></span>
                                    </div>
                                    <h2 class="h5 my-3" id="voltLabel"><strong>0V</strong></h2>
                                </div>
                            </div>
                        </div>
                        <!-- End of Icon box -->
                    </div>
                    <!-- e:tegangan -->

                    <!-- s:lampu -->
                    <div class="col-12 col-lg-4 col-md-6 col-sm-8 mb-4">
                        <!-- Icon box -->
                        <div class="card bg-primary shadow-soft text-center border-light">
                            <div class="card-header">
                                <span class="display-4 text-uppercase">Lampu</span>
                            </div>
                            <div class="card-body">
                                <div class="icon-box text-center mb-5 mb-md-0">
                                    <div class="icon icon-shape icon-2xl bg-soft shadow-soft border border-light rounded-circle mb-3">
                                        <span class="fas fa-lightbulb text-dark" id="lampIcon"></span>
                                    </div>
                                    <h2 class="h5 my-3" id="lampLabel"><strong>Padam</strong></h2>
                                </div>
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

    <?php include("partials/_script.php");?>

 </body>
</html>