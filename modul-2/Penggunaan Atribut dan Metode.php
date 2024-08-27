<?php 
    // Membuat class Mahasiswa
    class Mahasiswa {
        // Mendeklarasikan property yang hanya bisa diakses class Mahasiswa
        private $nama, $nim, $jurusan;

        // Method yang pertama kali dipanggil saat object dibuat
        public function __construct($nama, $nim, $jurusan) {
            $this->nama = $nama;
            $this->nim = $nim;
            $this->jurusan = $jurusan;
        }

        // Mendeklarasikan method untuk menampilkan data
        public function tampilkanData() {
            echo $this->nama . ", " . $this->nim . ", " . $this->jurusan; 
        }

        public function updateJurusan($jurusan) {
            $this->jurusan = $jurusan;
        }

        public function setNim($nim) {
            $this->nim = $nim;
        }
    }

    // Instance objek dari class Mahasiswa sekalian set datanya
    $mahasiswa = new Mahasiswa("Azka Syams Maulana", 230202004, "Komputer dan Bisnis");

    // Memanggil method tampilkanData() untuk menampilkan data yang tadi sudah di-set
    $mahasiswa->tampilkanData();

    // Memanggil method updateJurusan() untuk update data jurusan
    $mahasiswa->updateJurusan("Teknik Mesin");

    // Memanggil method setNim() untuk update data nim
    $mahasiswa->setNim(230202005);

    // Memanggil method tampilkanData() untuk menampilkan data baru yang tadi di-set
    echo "<br>";
    $mahasiswa->tampilkanData();
?>