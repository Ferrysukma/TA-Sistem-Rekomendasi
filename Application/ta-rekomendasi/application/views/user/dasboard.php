<!-- Begin Page Content -->
<div class="container-fluid"> 

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Blank Page</h1>
        
<!-- Basic Card Example -->
<h6>Hai, <?= $user['nama']; ?></h6>
<form action="" method="post">
        <input type="hidden" value="<?= $user['nama']; ?>" name="nama">
        <div class="card shadow mb-4">
                <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Record</h6>
                </div>
                <div class="card-body">
                        <div class="form-group">
                                <label for="exampleFormControlSelect1">Pendidikan terakhir ?</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="pendidikan">
                                <option>SMA</option>
                                <option>SMK</option>
                                </select>
                        </div>
                        <div class="form-group">
                                <label for="exampleFormControlSelect1">Jurusan di SMA/SMK ?</label>
                                <select class="form-control" id="exampleFormControlSelect2" name="jurusan">
                                <option>SMA - IPA</option>
                                <option>SMA - IPS</option>
                                <option>SMK - TKJ</option>
                                <option>SMK - RPL</option>
                                <option>SMK - Multimedia</option>
                                <option>SMK - Akuntansi</option>
                                <option>SMK - Otomotif</option>
                                </select>
                        </div>
                </div>
        </div> <br>
        <div class="card shadow mb-4">
                <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Nilai Raport</h6>
                </div>
                <div class="card-body">
                        <div class="form-group">
                                <label for="exampleInputEmail1">Bahasa Inggris</label>
                                <input type="text" class="form-control" id="exampleInputEmail2" name="bing">
                                <?php echo form_error('bing', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                                <label for="exampleInputEmail1">Bahasa Indonesia</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="bind">
                                <?php echo form_error('bind', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                                <label for="exampleInputEmail1">Matematika</label>
                                <input type="text" class="form-control" id="exampleInputEmail3" name="matematika">
                                <?php echo form_error('matematika', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                                <label for="exampleInputEmail1">Fisika</label>
                                <input type="text" class="form-control" id="exampleInputEmail4" name="fisika">
                                <?php echo form_error('fisika', '<small class="text-danger">', '</small>'); ?>
                        </div>
                </div>
        </div>
        <button type="submit" class="btn btn-primary float-right">Submit</button>
</form>
</div>
        <!-- /.container-fluid -->
