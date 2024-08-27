<?php 
    // Membuat class Mahasiswa
    class Mahasiswa {
        // Mendeklarasikan property yang hanya bisa diakses class Mahasiswa
        private $nama, $nim, $jurusan;

        // Mendeklarasikan method untuk menampung data dan menampilkan data
        public function tampilkanData($nama, $nim, $jurusan) {
            $this->nama = $nama;
            $this->nim = $nim;
            $this->jurusan = $jurusan;

            echo $this->nama . ", " . $this->nim . ", " . $this->jurusan; 
        }
    }

    // Instance objek dari class Mahasiswa
    $mahasiswa = new Mahasiswa();

    // Memanggil method tampilkanData() untuk meng-set lalu menampilkan data yang di-set
    $mahasiswa->tampilkanData("Azka Syams Maulana", 230202004, "Komputer dan Bisnis");
?>