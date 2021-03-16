<?php 
    include('license.php');
?>
<!DOCTYPE html>
<html lang="id">
 <head>
   <?php include("partials/_head.php"); 
   $title = explode(" ", SITE_TITLE);
   ?>
 </head>
 <body>

    <!-- s:main -->
    <main>
        <!-- Hero -->
        <section class="section section bg-soft pb-3 overflow-hidden z-2">
            <div class="container z-2">
                <div class="row justify-content-center text-center pt-3">
                    <div class="col-lg-11 col-xl-11">
                        <div class="card bg-primary shadow-soft border-light px-4 py-1 mb-6">
                            <div class="card-header">
                                <h1 class="display-2 mb-3 text-uppercase text-coolgray-8 font-weight-light"><?= $title[0]?> <span class="text-blue-4"><?= $title[1]?></h1>
                            </div>
                            <div class="card-body text-center">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 mx-auto">
                                        <img class="mx-auto" src="<?=$base_url?>assets/images/monitoring.svg" alt="illustration" id="illustration">
                                    </div>
                                </div>
                                <div class="row" id="loadingInfo">
                                    <button class="btn btn-primary btn-lg mx-auto mt-3" type="button" disabled="disabled">
                                        <span class="spinner-border" role="status" aria-hidden="true"></span>
                                        <span class="ml-1">Mohon tunggu, memuat data....</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="row">
                <div class="alert alert-secondary shadow-soft mx-auto" role="alert">
                    <span class="alert-inner--icon">
                        <span class="fas fa-database text-blue-4"></span>
                    </span>

                    <span class="alert-inner--text text-coolgray-8">
                        <strong>Data</strong> terakhir&colon; <strong id="dateTime">-</strong></span>
                </div>
            </div>
        </div>

        <section class="section section-lg-s" id="displayData">
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