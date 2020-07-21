<div id="content" class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
            <ul class="nav flex-column">
                <li class="nav-item">
                <a class="nav-link active" href="#">
                    <span data-feather="home"></span>
                    Dashboard <span class="sr-only">(current)</span>
                </a>
                </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>Saved reports</span>
                <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
                </a>
            </h6>
                <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    Year-end sale
                </a>
                </li>
            </ul>
            </div>
        </nav>
        <div class="col-md-10">
            <table class="table table-striped table-dark table-borderless table-hover table-sm p-1 col-lg-75 col-md-">
                <thead>
                    <tr class="">
                        <th scope="col" class="">
                            Id Rekord
                        </th>
                        <th scope="col">
                            Waktu Rekord
                        </th>
                        <th scope="col">
                            Gedung
                        </th>
                        <th scope="col">
                            Tegangan
                        </th>
                        <th scope="col">
                            KWh
                        </th>
                        <th scope="col">
                            Arus
                        </th>
                        <th scope="col">
                            Frekuensi
                        </th>
                        <th scope="col">
                            Daya Aktif
                        </th>
                        <th scope="col">
                            Daya Tampak
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($monitorings as $data) {?>
                    <tr class="">
                        <th scope="row">
                            <?php echo $data['id_rekord']?>
                        </th>
                        <td>
                            <?php echo $data['waktu_rekord']?>
                            </td>
                            <td>
                            <?php echo $data['id_gedung']?>
                            </td>
                            <td>
                            <?php echo $data['tegangan']?>
                            </td>
                            <td>
                            <?php echo $data['kwh']?>
                            </td>
                            <td>
                            <?php echo $data['arus']?>
                            </td>
                            <td>
                            <?php echo $data['frekuensi']?>
                            </td>
                            <td>
                            <?php echo $data['daya_aktif']?>
                            </td>
                            <td>
                            <?php echo $data['daya_tampak']?>
                            </td>
                    </tr>
                    <?php } ?>
                    <tr>
                        <td colspan="3">
                            <div>

                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>

            
            <div class="card col-lg-12 col-md-8 col-sm-12 p-1 container">
                <form action="<?php echo base_url().'/admon'?>" method="POST">
                    <div class="card-header p-1">Tambah Data</div>
                    <div class="card-body p-2 container">
                        <div class="row">
                            <div class="form-group col-lg-6 float-left">
                                <label for="gedung" class="mr-sm-2 m-0">Gedung</label>
                                <select name="gedung" id="gedung" class="custom-select mr-sm-2">
                                    <option selected value="-1">Pilih Gedung ...</option>
                                    <?php foreach ($gedungs as $item ) { ?>
                                        <option value="<?php echo $item['id_gedung']?>"><?php echo $item['nama_gedung']?></option>
                                    <?php }?>
                                </select>
                            </div>
                            <div class="form-group col-lg-6 float-left">
                                <label for="waktu" class="mr-sm-2 m-0">Waktu Pencatatan</label>
                                <input type="datetime-local" name="waktu" id="waktu" class="form-control">
                            </div>
                            <div class="form-group col-lg-6 float-left">
                                <label for="tegangan" class="mr-sm-2 m-0">Tegangan</label>
                                <input type="number" name="tegangan" id="tegangan" class="form-control">
                            </div>
                            <div class="form-group col-lg-6 float-left">
                                <label for="kwh" class="mr-sm-2 m-0">KwH</label>
                                <input type="number" name="kwh" id="kwh" class="form-control">
                            </div>
                            <div class="form-group col-lg-6 float-left">
                                <label for="arus" class="mr-sm-2 m-0">Arus</label>
                                <input type="number" name="arus" id="arus" class="form-control">
                            </div>
                            <div class="form-group col-lg-6 float-left">
                                <label for="frekuensi" class="mr-sm-2 m-0">Frekuensi</label>
                                <input type="number" name="frekuensi" id="frekuensi" class="form-control">
                            </div>
                            <div class="form-group col-lg-6 float-left">
                                <label for="daya_aktif" class="mr-sm-2 m-0">Daya Aktif</label>
                                <input type="number" name="daya_aktif" id="daya_aktif" class="form-control">
                            </div>
                            <div class="form-group col-lg-6 float-left">
                                <label for="daya_tampak" class="mr-sm-2 m-0">Daya Tampak</label>
                                <input type="number" name="daya_tampak" id="daya_tampak" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-primary btn-md p-1 m-1 float-right">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>