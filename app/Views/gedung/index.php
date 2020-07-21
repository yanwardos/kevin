<div id="content" class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 col-sm-12">
            <table class="table table-striped table-dark table-borderless table-hover table-sm p-1 ">
                <thead>
                    <tr class="d-flex">
                        <th scope="col" class="col-2">
                            Id Gedung
                        </th>
                        <th scope="col" class="col-6">
                            Nama Gedung
                        </th>
                        <th scope="col" class="col-4">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($gedungs as $gedung) {?>
                    <tr class="d-flex">
                        <th scope="row" class="col-2">
                            <?php echo $gedung['id_gedung'];?>
                        </th>
                        <td class="col-6">
                            <?php echo $gedung['nama_gedung'];?>
                        </td>
                        <td class="col-4">
                            <button class="btn btn-dark btn-sm p-1 m-1">Edit</button>
                            <button class="btn btn-dark btn-sm p-1 m-1">Hapus</button>
                            <a href="#" class="btn btn-dark btn-sm p-1 m-1">Cek data</a>
                        </td>
                    </tr>
                    <?php } ?>
                    <tr>
                        <td colspan="3">
                            Data
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 col-md-10 col-sm-12 card container">
            <form action="<?php echo base_url().'/adged'?>" method="POST">
                <div class="card-header p-1">Tambah Data Gedung</div>
                <div class="card-body p-2 container">
                    <div class="row">
                        <div class="form-group col-lg-6 float-left">
                            <label for="nama" class="mr-sm-2 m-0">Nama Gedung</label>
                            <input type="text" name="nama" id="nama" class="form-control">
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