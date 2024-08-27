# OOP PADA PHP

## PENGERTIAN OOP
Paradigma pemrograman berorientasi objek yang mana objek ini merepresentasikan entitas dunia nyata. Setiap objek memiliki properti dan metode yang terkait.

## KONSEP DASAR OOP
`Class`: Rancangan dasar dari sebuah object. `Class` mendefinisikan properti dan method yang akan dimiliki object.

```php
class Mahasiswa {

...

}
```

`Object`: Instance dari sebuah class.

```php
    $mahasiswa = new Mahasiswa();

    // Mengisi data mahasiswa ke dalam properti
    $mahasiswa->nama = "Azka Syams Maulana";
    $mahasiswa->nim = 230200204;
    $mahasiswa->jurusan = "Komputer dan Bisnis";

    // Memanggil method tampilkanData() untuk menampilkan data mhs
    $mahasiswa->tampilkanData();
```

`Property`: Atribut atau karakteristik dari sebuah objek.

```php
public $nama, $nim, $jurusan;

```

`Method`: Fungsi yang terkait dengan objek.

```php
public function tampilkanData() {
      echo "Nama: " . $this->nama . "<br>";
      echo "NIM: " . $this->nim . "<br>";
      echo "Jurusan: " . $this->jurusan . "<br>";
  }
```

`Contoh Lengkap`

```php
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
```

`Hasil`: ![image](https://github.com/user-attachments/assets/56975445-3165-49aa-85e1-c4f20ade43bf)

`Inheritance`: Child dari sebuah class mewarisi property dan method dari class parent.

```php
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
```

`Hasil`: ![image](https://github.com/user-attachments/assets/ed71e0b1-4259-4786-8991-45a041b2ef1c)

`Polimorphism`: Memungkinkan object diperlakukan secara seragam melalui satu interface.

```php
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
```

`Hasil`: ![image](https://github.com/user-attachments/assets/4fe94329-eeef-4327-8ecd-0ebf10b240ef)

`Encapsulation`: Membungkus properti dan method dalam satu class.

```php
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
```

`Hasil`: ![image](https://github.com/user-attachments/assets/7f061f52-7c4a-4dc3-a4aa-fd607dbc9e68)

`Abstraction`: Memungkinkan untuk menyembunyikan detail implementasi internal object dan hanya menampilkan fungsionalitas

```php
<?php 
    // Abstract class Pengguna
    abstract class Pengguna {
        // Method abstrak yang harus diimplementasi
        abstract public function aksesFitur();
    }

    // Class Mahasiswa, mengimplementasi class Pengguna
    class Mahasiswa extends Pengguna {
        // Property private, hanya bisa diakses class Mahasiswa
        private $nama, $nim;

        // Method yang pertama kali dipanggil saat objek dibuat
        public function __construct($nama, $nim) {
            // Menginisialisasi property nama dan nim
            $this->nama = $nama;
            $this->nim = $nim;
        }

        // Implementasi method abstrak aksesFitur()
        public function aksesFitur() {
            echo $this->nama . ", " . $this->nim . ", " . " bisa akses fitur mahasiswa. <br>";
        }
    }

    // Class Dosen, mengimplementasi class Pengguna
    class Dosen extends Pengguna {
        // Property private, hanya bisa diakses class Dosen
        private $nama, $mataKuliah;

        // Method yang pertama kali dipanggil saat objek dibuat
        public function __construct($nama, $mataKuliah) {
            // Menginisialisasi property nama dan mataKuliah
            $this->nama = $nama;
            $this->mataKuliah = $mataKuliah;
        }

        // Implementasi method abstrak aksesFitur()
        public function aksesFitur() {
            echo $this->nama . ", " . $this->mataKuliah . ", " . " bisa akses fitur dosen. <br>";
        }
    }

    // Instance objek dari class Dosen
    $dosen = new Dosen("Ego Irfandi", "Pemrograman");

    // Memanggil method aksesFitur() untuk menampilkan data dosen dan memberi akses fitur
    $dosen->aksesFitur();

    // Instance objek dari class Mahasiswa
    $mahasiswa = new Mahasiswa("Bikra Abna", 230202005);

    // Memanggil method aksesFitur() untuk menampilkan data dosen dan memberi akses fitur
    $mahasiswa->aksesFitur();
?>
```

`Hasil`: ![image](https://github.com/user-attachments/assets/c3147d46-ae54-45df-adf2-e2aeda962254)

## PENERAPAN OOP DALAM PHP
1. Dalam Framework. Hampir semua framework PHP (Laravel, CodeIgniter, Symfony) menggunakan konsep OOP.
2. Permainan
3. Aplikasi Web
