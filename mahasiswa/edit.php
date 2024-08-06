<div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Form Mahasiswa</h6>
                        </div>
                        
                        <div class="card-body">
                        
                            <div class="table-responsive">

                            <?php
                            include "../db.php";
                            $nim=$_GET['nim'];
                            $db=new db;

                            $mhs=$db->get_MhdByNim($nim);
                            $result=$mhs->fetch_array();
                            ?>
                            <form method="POST" id="formEditMhs">
                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama</label>
                                    <input type="hidden" class="form-control" name="nim" value="<?php echo $result['nim']; ?>">
                                    <input type="text" class="form-control" name="nama" value="<?php echo $result['nama']; ?>">
                                   
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Alamat</label>
                                    <input type="text" class="form-control" name="alamat" value="<?php echo $result['alamat']; ?>">
                                   
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Jurusan</label>
                                    <input type="text" class="form-control" name="jurusan" value="<?php echo $result['jurusan']; ?>">
                                   
                                </div>
                               
                                <button type="submit" class="btn btn-primary" >Simpan</button>
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
    

   