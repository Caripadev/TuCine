<?php

  $page_title = 'Precios - Optimos';
include_once('layouts/header.php'); 
require_once('includes/config.php');?>

           <!-- Pricing section-->
            <section class="bg-light py-5">
                <div class="container px-5 my-5">
                    <div class="text-center mb-5">
                        <h1 class="fw-bolder">Planes de Suscripcion</h1>
                        <p class="lead fw-normal text-muted mb-0">Unete a a la comunidad que suma para ser Optimos</p>
                    </div>
                    <div class="row gx-5 justify-content-center">
                        <!-- Pricing card free-->
                        <div class="col-lg-6 col-xl-4">
                            <div class="card mb-5 mb-xl-0">
                                <div class="card-body p-5">
                                    <div class="small text-uppercase fw-bold text-muted">Free</div>
                                    <div class="mb-3">
                                        <span class="display-4 fw-bold">$0</span>
                                        <span class="text-muted">/ mo.</span>
                                    </div>
                                    <ul class="list-unstyled mb-4">
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                            <strong>Beneficio resaltado</strong>
                                        </li>
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                            Beneficio normal
                                        </li>
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                            //////////
                                        </li>
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                            ////////
                                        </li>
                                        <li class="mb-2 text-muted">
                                            <i class="bi bi-x"></i>
                                            beneficio no disponible
                                        </li>
                                        <li class="mb-2 text-muted">
                                            <i class="bi bi-x"></i>
                                            /////////
                                        </li>
                                        <li class="mb-2 text-muted">
                                            <i class="bi bi-x"></i>
                                            ///////////
                                        </li>
                                        <li class="text-muted">
                                            <i class="bi bi-x"></i>
                                            ///////
                                        </li>
                                    </ul>
                                    <div class="d-grid"><a class="btn btn-outline-primary" href="plan/free.php">Escoger este plan</a></div>
                                </div>
                            </div>
                        </div>
                        <!-- Pricing card pro-->
                        <div class="col-lg-6 col-xl-4">
                            <div class="card mb-5 mb-xl-0">
                                <div class="card-body p-5">
                                    <div class="small text-uppercase fw-bold">
                                        <i class="bi bi-star-fill text-warning"></i>
                                        Pro
                                    </div>
                                    <div class="mb-3">
                                        <span class="display-4 fw-bold">$9</span>
                                        <span class="text-muted">/ mo.</span>
                                    </div>
                                    <ul class="list-unstyled mb-4">
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                            <strong>5 users</strong>
                                        </li>
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
/////////////////////////
                                        </li>
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
////////////////////////////////////////
                                        </li>
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
///////////////////////////////////////
                                        </li>
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
///////////////////////////////////////
                                        </li>
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
///////////////////////////////////
                                        </li>
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
////////////////////////
                                        </li>
                                        <li class="text-muted">
                                            <i class="bi bi-x"></i>
/////////////////////////////////////////
                                        </li>
                                    </ul>
                                    <div class="d-grid"><a class="btn btn-primary" href="plan/enterprise.php">Me gusta este plan</a></div>
                                </div>
                            </div>
                        </div>
                        <!-- Pricing card enterprise-->
                        <div class="col-lg-6 col-xl-4">
                            <div class="card">
                                <div class="card-body p-5">
                                    <div class="small text-uppercase fw-bold text-muted">Enterprise</div>
                                    <div class="mb-3">
                                        <span class="display-4 fw-bold">$49</span>
                                        <span class="text-muted">/ mo.</span>
                                    </div>
                                    <ul class="list-unstyled mb-4">
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                            <strong>Unlimited users</strong>
                                        </li>
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
////////////////////////////////////////
                                        </li>
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
***********************************
                                        </li>
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
*/////////////////////////
                                        </li>
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
////////////////////////////////////
                                        </li>
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
/////////////////////////////
                                        </li>
                                        <li class="mb-2">
                                            <i class="bi bi-check text-primary"></i>
                                            <strong>Unlimited</strong>
////////////////////////////////// 
                                       </li>
                                        <li class="text-muted">
                                            <i class="bi bi-check text-primary"></i>
                                            /////////////
                                        </li>
                                    </ul>
                                    <div class="d-grid"><a class="btn btn-outline-primary" href="plan/empresas.php">Plan Empresarial</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>




<?php include_once('layouts/footer.php'); ?>