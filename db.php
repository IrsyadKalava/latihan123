<?php

class db
{
    private $koneksi;

    function __construct()
    {
        $this->koneksi = $koneksi = new mysqli("localhost", "root", "", "db_pelatihan_irsyadikhsanudin");

    }

    function get_user($username, $password)
    {
        $data = $this->koneksi->query("select * from tbl_user_irsyadikhsanudin where username='$username' and password='$password'");
        return $data;
    }

    // start mahasiswa
    function get_allMhs()
    {
        $data = $this->koneksi->query("select * from tbl_mahasiswa_irsyadikhsanudin");
        return $data;
    }

    function add_mhs($nim, $nama, $alamat, $jurusan)
    {
        $this->koneksi->query("insert into tbl_mahasiswa_irsyadikhsanudin(nim,nama,alamat,jurusan) values('$nim','$nama','$alamat','$jurusan')");
        return true;

    }

    function update_mhs($nim, $nama, $alamat, $jurusan)
    {
        $this->koneksi->query("UPDATE tbl_mahasiswa_irsyadikhsanudin SET nama = '$nama', alamat = '$alamat', jurusan = '$jurusan' WHERE nim='$nim'");
        return true;
    }

    function get_MhdByNim($nim)
    {
        $data = $this->koneksi->query("select * from tbl_mahasiswa_irsyadikhsanudin where nim='$nim'");
        return $data;
    }

    function del_mhs($nim)
    {
        $this->koneksi->query("delete from tbl_mahasiswa_irsyadikhsanudin where nim='$nim'");
        return true;

    }
    // end mahasiswa



    // start dosen
    function get_allDsn()
    {
        $data = $this->koneksi->query("select * from tbl_dosen_irsyadikhsanudin");
        return $data;
    }

    function add_dsn($id_dosen, $nama, $alamat)
    {
        $this->koneksi->query("insert into tbl_dosen_irsyadikhsanudin(id_dosen,nama,alamat) values('$id_dosen','$nama','$alamat')");
        return true;

    }

    function update_dsn($id_dosen, $nama, $alamat)
    {
        $this->koneksi->query("UPDATE tbl_dosen_irsyadikhsanudin SET nama = '$nama', alamat = '$alamat' WHERE id_dosen='$id_dosen'");
        return true;
    }

    function get_DsnByID($id_dosen)
    {
        $data = $this->koneksi->query("select * from tbl_dosen_irsyadikhsanudin where id_dosen='$id_dosen'");
        return $data;
    }

    function del_dsn($id_dosen)
    {
        $this->koneksi->query("delete from tbl_dosen_irsyadikhsanudin where id_dosen='$id_dosen'");
        return true;

    }
    // end dosen



    // start jadwal
    function get_allJdwl()
    {
        $data = $this->koneksi->query("select * from tbl_jadwal_irsyadikhsanudin");
        return $data;
    }

    function add_jdwl($id, $id_dosen, $kd_matkul, $waktu, $ruang)
    {
        $this->koneksi->query("insert into tbl_jadwal_irsyadikhsanudin(id,id_dosen,kd_matkul,waktu,ruang) values('$id', `$id_dosen`, `$kd_matkul`, `$waktu`, `$ruang`)");
        return true;

    }

    function update_jdwl($id, $id_dosen, $kd_matkul, $waktu, $ruang)
    {
        $this->koneksi->query("UPDATE tbl_jadwal_irsyadikhsanudin SET id_dosen = '$id_dosen', kd_matkul = '$kd_matkul', waktu = '$waktu', ruang = '$ruang' WHERE id='$id'");
        return true;
    }

    function get_JdwlByID($id)
    {
        $data = $this->koneksi->query("select * from tbl_jadwal_irsyadikhsanudin where id='$id'");
        return $data;
    }

    function del_jdwl($id)
    {
        $this->koneksi->query("delete from tbl_jadwal_irsyadikhsanudin where id='$id'");
        return true;

    }
    // end jadwal



    // start dosen
    function get_allKrs()
    {
        $data = $this->koneksi->query("select * from tbl_krs_irsyadikhsanudin");
        return $data;
    }

    function add_krs($id, $nim, $id_jadwal, $id_semester)
    {
        $this->koneksi->query("insert into tbl_krs_irsyadikhsanudin(id,nim,id_jadwal,id_semester) values('$id','$nim','$id_jadwal', `$id_semester`)");
        return true;

    }

    function update_krs($id, $nim, $id_jadwal, $id_semester)
    {
        $this->koneksi->query("UPDATE tbl_krs_irsyadikhsanudin SET nim = '$nim', id_jadwal = '$id_jadwal', id_semester = '$id_semester' WHERE id='$id'");
        return true;
    }

    function get_KrsByID($id)
    {
        $data = $this->koneksi->query("select * from tbl_krs_irsyadikhsanudin where id='$id'");
        return $data;
    }

    function del_krs($id)
    {
        $this->koneksi->query("delete from tbl_krs_irsyadikhsanudin where id='$id'");
        return true;

    }
    // end dosen



    // start semester
    function get_allSmstr()
    {
        $data = $this->koneksi->query("select * from tbl_semester_irsyadikhsanudin");
        return $data;
    }
    // end semester



    // start matkul
    function get_allMtkl()
    {
        $data = $this->koneksi->query("select * from tbl_matkul_irsyadikhsanudin");
        return $data;
    }
    // end semester
}

?>