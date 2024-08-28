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