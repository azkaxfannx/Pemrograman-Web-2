<?php 
    // Interface Pengguna untuk parent
    interface Pengguna {
        // Method yang harus diimplementasikan
        public function aksesFitur();
    }

    // Class Dosen, mengimplementasi class Pengguna
    class Dosen implements Pengguna {
        // Property private, hanya bisa diakses class Dosen
        private $nama, $mataKuliah;

        // Method yang pertama kali dipanggil saat objek dibuat
        public function __construct($nama, $mataKuliah) {
            // Menginisialisasi property nama dan mataKuliah
            $this->nama = $nama;
            $this->mataKuliah = $mataKuliah;
        }

        // Implementasi method
        public function aksesFitur() {
            echo $this->nama . ", " . $this->mataKuliah . ", " . " bisa akses fitur dosen. <br>";
        }
    }

    // Class Mahasiswa, mengimplementasi class Pengguna
    class Mahasiswa implements Pengguna {
        // Property private, hanya bisa diakses class Mahasiswa
        private $nama, $nim;

        // Method yang pertama kali dipanggil saat objek dibuat
        public function __construct($nama, $nim) {
            // Menginisialisasi property nama dan nim
            $this->nama = $nama;
            $this->nim = $nim;
        }

        // Implementasi method
        public function aksesFitur() {
            echo $this->nama . ", " . $this->nim . ", " . " bisa akses fitur mahasiswa. <br>";
        }
    }

    // Instance objek dari class Dosen
    $dosen = new Dosen("Ego Irfandi", "Pemrograman");

    // Memanggil method aksesFitur() untuk menampilkan data dosen dan memberi akses fitur
    $dosen->aksesFitur();

    // Instance objek dari class Dosen
    $mahasiswa = new Mahasiswa("Bikra Abna", 230202005);

    // Memanggil method aksesFitur() untuk menampilkan data mhs dan memberi akses fitur
    $mahasiswa->aksesFitur();
?>