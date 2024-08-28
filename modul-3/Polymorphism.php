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