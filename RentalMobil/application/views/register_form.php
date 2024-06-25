<div class="page-wrapper">
    <div class="wrapper wrapper--w680">
        <div class="card card-4">
            <div class="card-body">
                <h2 class="title">Registrasi</h2>
                <form method="POST" action="<?php echo base_url('register') ?>">
                    <div class="row row-space">
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label" for="nama">Nama</label>
                                <input class="input--style-4" type="text" name="nama" id="nama">
                                <?php echo form_error('nama', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Username</label>
                                <input class="input--style-4" type="text" name="username" id="username">
                                <?php echo form_error('username', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="input-group">
                                <label class="label">Alamat</label>
                                <input class="input--style-4" type="text" name="alamat" id="alamat">
                                <?php echo form_error('alamat', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="input-group">
                                <label class="label">Gender</label>
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <select name="gender" id="gender">
                                        <option disabled="disabled" selected="selected">Plih Gender</option>
                                        <option>Laki-Laki</option>
                                        <option>Perempuan</option>
                                    </select>
                                    <div class="select-dropdown"></div>
                                    <?php echo form_error('gender', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Telepon</label>
                                    <input class="input--style-4" type="text" name="no_telepon" id="no_telepon">
                                    <?php echo form_error('no_telepon', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">No Ktp</label>
                                    <input class="input--style-4" type="text" name="no_ktp" id="no_ktp">
                                    <?php echo form_error('no_ktp', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Password</label>
                                    <input class="input--style-4 form-control" type="password" name="password" id="password">
                                    <?php echo form_error('password', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                            </div>
                        </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>