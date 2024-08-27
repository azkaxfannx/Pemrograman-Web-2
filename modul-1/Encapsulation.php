<?php 
    // Class Mahasiswa sebagai blueprint untuk objek mahasiswa
    class Mahasiswa {
        // Property private untuk menyimpan data mhs (nama, nim, jurusan)
        private $nama, $nim, $jurusan;

        // Method untuk set data mhs sekaligus
        public function setData($nama, $nim, $jurusan) {
            $this->nama = $nama;
            $this->nim = $nim;
            $this->jurusan = $jurusan;
        }

        // Method untuk mengatur nama / setter nama
        public function setNama($nama) {
            $this->nama = $nama;
        }

        // Method untuk mengatur nim / setter nim
        public function setNim($nim) {
            $this->nim = $nim;
        }

        // Method untuk mengatur jurusan / setter jurusan
        public function setJurusan($jurusan) {
            $this->jurusan = $jurusan;
        }

        // Method untuk mengambil nama / getter nama
        public function getNama() {
            return $this->nama;
        }

        // Method untuk mengambil nim / getter nim
        public function getNim() {
            return $this->nim;
        }

        // Method untuk mengambil jurusan / getter jurusan
        public function getJurusan() {
            return $this->jurusan;
        }

        // Method untuk menampilkan data mhs
        public function tampilkanData() {
            echo "Nama: " . $this->getNama() . "<br>";
            echo "NIM: " . $this->getNim() . "<br>";
            echo "Jurusan: " . $this->getJurusan() . "<br>";
        }
    }

    // Instance objek dari class Mahasiswa
    $mahasiswa = new Mahasiswa();

    // Set data mhs
    $mahasiswa->setData("Azka Syams Maulana", 230202004, "Komputer dan Bisnis");

    // Tampilkan data mhs
    $mahasiswa->tampilkanData();

    // Set ulang nama dan nim mhs
    $mahasiswa->setNama("Bikra Abna");
    $mahasiswa->setNim(230202005);

    echo "<br>";

    // Tampilkan lagi data mhs
    $mahasiswa->tampilkanData();

    echo "<br>";

    // Ambil / get nama dan nim mhs baru
    echo $mahasiswa->getNama();
    echo "<br>";
    echo $mahasiswa->getNim();
?>