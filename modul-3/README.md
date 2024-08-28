# OOP PADA PHP

## PENGERTIAN OOP
Paradigma pemrograman berorientasi objek yang mana objek ini merepresentasikan entitas dunia nyata. Setiap objek memiliki properti dan metode yang terkait.

`Inheritance`: Child dari sebuah class mewarisi property dan method dari class parent.

```php
<?php 
    class Person {
        protected $name;

        public function getName() {

        }
    }

    class Student extends Person {
        private $studentID;

        public function getStudentID() {
            
        }
    }
?>
```

`Polimorphism`: Memungkinkan object diperlakukan secara seragam melalui satu interface.

```php
<?php 
    class Person {
        protected $name;

        public function getName() {

        }
    }

    class Student extends Person {
        private $studentID;

        public function getStudentID() {
            
        }

        public function getName() {
            
        }
    }

    class Teacher extends Person {
        public $teacherID;

        public function getName() {

        }
    }
?>
```

`Encapsulation`: Membungkus properti dan method dalam satu class.

```php
<?php 
    class Person {
        protected $name;

        public function getName() {

        }
    }

    class Student extends Person {
        private $name, $studentID;

        public function getStudentID() {
            return $this->studentID;
        }

        public function getName() {
            return $this->name;
        }

        public function setName($name) {
            $this->name = $name;
        }

        public function setStudentID($studentID) {
            $this->studentID = $studentID;
        }
    }

    class Teacher extends Person {
        public $teacherID;

        public function getName() {

        }
    }
?>
```

`Abstraction`: Memungkinkan untuk menyembunyikan detail implementasi internal object dan hanya menampilkan fungsionalitas.

```php
<?php 
    class Person {
        protected $name;

        public function getName() {

        }
    }

    class Student extends Person {
        private $name, $studentID;

        public function getStudentID() {
            return $this->studentID;
        }

        public function getName() {
            return $this->name;
        }

        public function setName($name) {
            $this->name = $name;
        }

        public function setStudentID($studentID) {
            $this->studentID = $studentID;
        }
    }

    class Teacher extends Person {
        public $teacherID;

        public function getName() {

        }
    } 

    abstract class Course {
        abstract function getCourseDetails();
    }

    class OnlineCourse extends Course {
        public function getCourseDetails() {

        }
    }

    class OfflineCourse extends Course {
        public function getCourseDetails() {

        }
    }
?>
```

`Kode Lengkap`:

```php
<?php 
    // Membuat class Person sebagai blueprint
    class Person {
        // Membuat property private
        private $name;

        // Method yang akan pertama dijalankan ketika objek dibuat
        public function __construct($name) {
            $this->name = $name;
        }

        // Method untuk menangkap data nama yang di-set
        public function getName() {
            return $this->name;
        }

        // Method untuk meng-set data nama
        public function setName($name) {
            $this->name = $name;
        }

        // Method untuk memberikan role/peran masing-masing
        public function getRole() {
            return "Human";
        }
    }

    // Membat class Dosen yang mewarisi Person
    class Dosen extends Person {
        // Membuat property private
        private $nidn;

        // Method yang akan pertama dijalankan ketika objek dibuat
        public function __construct($name, $nidn) {
            parent::__construct($name);
            $this->nidn = $nidn;
        }

        // Method untuk mendapatkan role/peran masing-masing
        public function getRole() {
            return "Dosen";
        }

        // Method untuk menampilkan data dosen yang tadi di-set
        public function tampilDosen() {
            echo $this->getName() . ", " . $this->nidn . ", " . "sebagai " . $this->getRole();
        }
    }

    // Membat class Dosen yang mewarisi Person
    class Mahasiswa extends Person {
        // Membuat property private
        private $nim;

        // Method yang akan pertama dijalankan ketika objek dibuat
        public function __construct($name, $nim) {
            parent::__construct($name);
            $this->nim = $nim;
        }

        // Method untuk mendapatkan role/peran masing-masing
        public function getRole() {
            return "Mahasiswa";
        }

        // Method untuk menampilkan data mahasiswa yang tadi di-set
        public function tampilMahasiswa() {
            echo $this->getName() . ", " . $this->nim . ", " . "sebagai " . $this->getRole();
        }
    }

    // Membat class Student yang mewarisi Person
    class Student extends Person {
        // Membuat property private
        private $studentID;

        // Method yang akan pertama dijalankan ketika objek dibuat
        public function __construct($name, $studentID) {
            parent::__construct($name);
            $this->studentID = $studentID;
        }

        // Method untuk menangkap data studentID
        public function getStudentID() {
            return $this->studentID;
        }

        // Method untuk meng-set data name
        public function setName($name) {
            parent::setName($name);
        }

        // Method untuk meng-set data student ID
        public function setStudentID($studentID) {
            $this->studentID = $studentID;
        }

        // Method untuk menampilkan data student
        public function tampilStudent() {
            echo $this->getName() . ", " . $this->studentID;
        }
    }

     // Membat class Teacher yang mewarisi Person
    class Teacher extends Person {
        // Membuat property publik
        public $teacherID;

        // Method yang akan pertama dijalankan ketika objek dibuat
        public function __construct($name, $teacherID) {
            parent::__construct($name);
            $this->teacherID = $teacherID;
        }

        // Method untuk menangkap data nama
        public function getName() {
            return parent::getName();
        }
    } 

    // Class abstract Course
    abstract class Course {
        // Membuat method abstract getCourseDetails
        abstract public function getCourseDetails();
    }

    // Membuat class OnlineCourse yang mewarisi Course
    class OnlineCourse extends Course {
        // Method untuk melihat rincian dari course
        public function getCourseDetails() {
            return "Ini kursus daring,";
        }
    }

    // Mmebuat class OfflineCourse yang mewarisi Course
    class OfflineCourse extends Course {
        // Method untuk melihat rincian dari course
        public function getCourseDetails() {
            return "ini kursus luring.";
        }
    }

    // Membuat abstract class Jurnal
    abstract class Jurnal {
        // Membuat method abstract PengajanJurnal()
        abstract function pengajuanJurnal();
    }

    // Membuat class JurnalDosen yang mewarisi Jurnal
    class JurnalDosen extends Jurnal {
        // Method pengajuanJurnal() khusus JurnalDosen
        public function pengajuanJurnal() {
            return "Jurnal Dosen Mengajukan ke Jurusan.";
        }
    }
    
    // Membuat class JurnalMahasiswa yang mewarisi Jurnal
    class JurnalMahasiswa extends Jurnal {
        // Method pengajuanJurnal() khusus JurnalMahasiswa
        public function pengajuanJurnal() {
            return "Jurnal Mahasiswa Mengajukan ke Prodi.";
        }
    }

    // Instance objek Dosen dan menampilkan data yang di-instance
    $dosen = new Dosen("Ego Irfandi", 230202017);
    $dosen->tampilDosen();
    echo "<br><br>";

    // Instance objek Mahasiswa dan menampilkan data yang di-instance
    $mahasiswa = new Mahasiswa("Bikra Abna", 230202005);
    $mahasiswa->tampilMahasiswa();
    echo "<br><br>";

    // Instance objek Student, mengisi dan mengubah data, juga menampilkan data yang di-instance
    $student = new Student("Azka Syams Maulana", 230202017);
    $student->tampilStudent();
    echo "<br>";
    echo $student->getName();
    echo "<br>";
    echo $student->getStudentID();
    echo "<br>";
    $student->setName("Bikra Abna");
    $student->setStudentID(230202005);
    $student->tampilStudent();
    echo "<br><br>";

    // Instance objek Teacher dan menampilkan data nama
    $teacher = new Teacher("Ego Irfandi", 230202017);
    echo $teacher->getName();
    echo "<br><br>";

    // Instance objek Course dan menampilkan data yang di-instance
    $course = [new OnlineCourse, new OfflineCourse];

    foreach ($course as $c) {
        echo $c->getCourseDetails() . " ";
    }
    echo "<br><br>";

    // Instance objek Jurnal dan menampilkan data yang di-instance
    $jurnal = [new JurnalDosen, new JurnalMahasiswa];

    foreach ($jurnal as $j) {
        echo $j->pengajuanJurnal() . " ";
    }
?>
```

`Hasil`: ![image](https://github.com/user-attachments/assets/45e3bf67-3b1e-446e-8f98-18ba7950ab8d)
