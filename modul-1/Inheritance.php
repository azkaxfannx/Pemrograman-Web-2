<?php 
    // Class Pengguna sebagai parent
    class Pengguna {
        // Property protected, hanya bisa diakses class Pengguna dan turunannya
        protected $nama;

        // Method yang pertama kali dipanggil saat objek dibuat
        public function __construct($nama) {
            $this->nama = $nama;
        }

        // Method protected, hanya bisa diakses class Pengguna dan turunannya
        protected function getNama() {
            return $this->nama;
        }
    }

    // Class Dosen, turunan dari class Pengguna
    class Dosen extends Pengguna {
        // Property private, hanya bisa diakses class Dosen
        private $mataKuliah;

        // Method yang pertama kali dipanggil saat objek dibuat
        public function __construct($nama, $mataKuliah) {
            // Memanggil method construct dari class parent
            parent::__construct($nama);

            // Menginisialisasi property mataKuliah
            $this->mataKuliah = $mataKuliah;
        }

        // Method untuk menampilkan data dosen
        public function tampilData() {
            // Memanggil method dari class parent
            echo "Nama: " . $this->getNama() . "<br>";
            echo "Mata Kuliah: " . $this->mataKuliah . "<br>";
        }
    }

    // Instance objek dari class Dosen
    $dosen = new Dosen("Ego Irfandi", "Pemrograman");

    // Memanggil method tampilData() untuk menampilkan data dosen
    $dosen->tampilData();
?>