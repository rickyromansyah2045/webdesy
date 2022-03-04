<?= $this->extend('layout/dashboard_template.php'); ?>

<?= $this->section('isi'); ?>

<div id="layoutSidenav_content">
                <main>
                    <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
                        <div class="container">
                            <div class="page-header-content pt-4">
                                <div class="row align-items-center justify-content-between">
                                    <div class="col-auto mt-4">
                                        <h1 class="page-header-title">
                                            <div class="page-header-icon"><i data-feather="activity"></i></div>
                                            Blogs
                                        </h1>
                                        <div class="page-header-subtitle">Create Blog, For Your Audiens</div>
                                    </div>
                                    <div class="col-12 col-xl-auto mt-4">
                                        <button class="btn btn-white p-3" id="reportrange">
                                            <i class="mr-2 text-primary" data-feather="calendar"></i>
                                            <span></span>
                                            <i class="ml-1" data-feather="chevron-down"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
                        
                        <!-- Example DataTable for Dashboard Demo-->
                        <div class="card mb-4">
                        <div class="card-header">Create Blogs</div>
                            <div class="card-body">
                               
                            </div>
                        </div>
                    </div>
                </main>
                <!-- END Page Content -->

<?= $this->endSection(); ?>