<?php 
    // Class Mahasiswa sebagai blueprint untuk objek mahasiswa
    class Mahasiswa {
        // Property public untuk menyimpan data mhs (nama, nim, jurusan)
        public $nama, $nim, $jurusan;
        
        // Method untuk menampilkan semua data mhs
        public function tampilkanData() {
            echo "Nama: " . $this->nama . "<br>";
            echo "NIM: " . $this->nim . "<br>";
            echo "Jurusan: " . $this->jurusan . "<br>";
        }
    }

    // Instance objek dari class Mahasiswa
    $mahasiswa = new Mahasiswa();

    // Mengisi data mahasiswa ke dalam properti
    $mahasiswa->nama = "Azka Syams Maulana";
    $mahasiswa->nim = 230200204;
    $mahasiswa->jurusan = "Komputer dan Bisnis";

    // Memanggil method tampilkanData() untuk menampilkan data mhs
    $mahasiswa->tampilkanData();
?>