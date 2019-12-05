<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Profil</h1>
<div class="card mb-3" style="max-width: 540px;">
    <div class="row no-gutters">
        <div class="col-md-4">
            <img src="<?= base_url(); ?>assets/user.png" class="card-img" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <p class="card-text"><?= $user['id_user']; ?></p>
                <p class="card-text"><?= $user['nama']; ?></p>
                <p class="card-text"><?= $user['email']; ?></p>
            </div>
        </div>
    </div>
</div> <br> <br>

<h1 class="h4 mb-4 text-gray-500">Rekomendasi</h1>

<!-- Content Row -->
<div class="row">

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
<div class="card border-left-primary shadow h-100 py-2">
    <div class="card-body">
        <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="h5 mb-0 font-weight-bold text-primary  text-uppercase mb-1">Earnings (Monthly)</div>
            </div>
            <div class="col-auto">
            </div>
        </div>
    </div>
</div>
</div>
<div class="col-xl-3 col-md-6 mb-4">
<div class="card border-left-success shadow h-100 py-2">
    <div class="card-body">
        <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="h5 mb-0 font-weight-bold text-success  text-uppercase mb-1">Earnings (Monthly)</div>
            </div>
            <div class="col-auto">
            </div>
        </div>
    </div>
</div>
</div>
<div class="col-xl-3 col-md-6 mb-4">
<div class="card border-left-warning shadow h-100 py-2">
    <div class="card-body">
        <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="h5 mb-0 font-weight-bold text-warning  text-uppercase mb-1">Earnings (Monthly)</div>
            </div>
            <div class="col-auto">
            </div>
        </div>
    </div>
</div>
</div>
<div class="col-xl-3 col-md-6 mb-4">
<div class="card border-left-danger shadow h-100 py-2">
    <div class="card-body">
        <div class="row no-gutters align-items-center">
            <div class="col mr-2">
                <div class="h5 mb-0 font-weight-bold text-danger  text-uppercase mb-1">Earnings (Monthly)</div>
            </div>
            <div class="col-auto">
            </div>
        </div>
    </div>
</div>
</div>

</div>

</div>