<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Dosen</h6>
        </div>

        <div class="card-body">

            <div class="table-responsive">

                <?php
                include "../db.php";
                $id = $_GET['id'];
                $db = new db;

                $Jdwl = $db->get_JdwlByID($id);
                $result = $Jdwl->fetch_array();

                $matkul = $db->get_allMtkl();
                $dosen = $db->get_allDsn();

                ?>
                <form method="POST" id="formEditJdwl">

                    <div class="form-group">
                        <label for="exampleInputEmail1">ID Dosen</label>
                        <input type="hidden" class="form-control" name="id" value="<?php echo $result['id']; ?>">
                        <select class="form-select form-control" aria-label="Default select example" name="id_dosen">
                            <?php while ($listDosen = $dosen->fetch_array()) { ?>
                                <option value="<?php echo $listDosen['id_dosen']; ?>" <?php if ($listDosen['id_dosen'] == $result['id_dosen'])
                                       echo 'selected'; ?>>
                                    <?php echo $listDosen['id_dosen']; ?>
                                </option>
                            <?php } ?>
                        </select>

                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kode Matkul</label>
                        <select class="form-select form-control" aria-label="Default select example"
                            value="<?php echo $result['kd_matkul']; ?>">
                            <?php while ($listMatkul = $matkul->fetch_array()) { ?>
                                <option
                                value="<?php echo $listMatkul['kd_matkul']; ?>"
                                <?php if ($listMatkul['kd_matkul'] == $result['kd_matkul']) echo 'selected' ?>>
                                    <?php echo $listMatkul['kd_matkul']; ?>
                                </option>
                            <?php } ?>
                        </select>

                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Waktu</label>
                        <input type="text" class="form-control" name="waktu" value="<?php echo $result['waktu']; ?>">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Ruang</label>
                        <input type="text" class="form-control" name="ruang" value="<?php echo $result['ruang']; ?>">

                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>

            </div>
        </div>
    </div>

</div>

<!-- Page level plugins -->
<script src="asset/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="asset/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="asset/js/demo/datatables-demo.js"></script>