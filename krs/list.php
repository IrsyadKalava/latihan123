<div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Dosen</h6>
                        </div>
                        
                        <div class="card-body">
                        <button class="btn btn-info btn-user" id="addDsn" style="margin-bottom: 30px;">Tambah</button>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID KRS</th>
                                            <th>NIM</th>
                                            <th>ID Jadwal</th>
                                            <th>ID Semester</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>ID KRS</th>
                                            <th>NIM</th>
                                            <th>ID Jadwal</th>
                                            <th>ID Semester</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>

                                    <?php
   include "../db.php";
   $db=new db;
   $krs=$db->get_allKrs();
   $no=1;
   
   while ($result=$krs->fetch_array()) {
    ?>
            <tr>
                <td>
                    <?php echo $no++; ?>
                </td>
                <td>
                    <?php echo $result['id']; ?>
                </td>
                <td>
                    <?php echo $result['nim']; ?>
                </td>
                <td>
                    <?php echo $result['id_jadwal']; ?>
                </td>
                <td>
                    <?php echo $result['id_semester']; ?>
                </td>
               
                <td>
                    <button class="btn btn-success btn-user" id="editDsn" value="<?php echo $result['id']; ?>">Edit</button>
                    <button class="btn btn-danger btn-user" id="deleteDsn" value="<?php echo $result['id']; ?>">Delete</button>
                </td>
            </tr>
            <?php
   }
  ?>
                                      
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>

                 <!-- Page level plugins -->
    <script src="asset/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="asset/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="asset/js/demo/datatables-demo.js"></script>
    <script>
        $(document).ready(function(){  

            $("#addDsn").click(function(){
                $.ajax({
                    url: 'dosen/add.php',
                    type: 'get',
                    success: function(data) {
                        $('#contentData').html(data);
                    }
                });
        
            });  

        });
        </script>

   