<?php 
    class Student{
        var $name;
        var $major;
        var $gpa;

        function __construct($name, $major, $gpa){
            $this->name = $name;
            $this->major = $major;
            $this->gpa = $gpa;
        }

        function hasHonors(){
            if($this->gpa >= 7)
                return "True";
            
            return "False";
        }
    }

    $student1 = new Student("Tom", "Business", 8);
    $student2 = new Student("Hung", "Art", 6);

    echo $student1->hasHonors();
?>