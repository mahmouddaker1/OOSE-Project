<?php

interface User {
  public function login($email, $password);
}

interface Student {
    public function register_course(Student $Student, Course $Course);
    public function access_learning_material(Student $Student, Course $Course);
    public function access_results(Student $Student, Course $Course);
    public function rate_course(Student $Student, Course $Course);
    public function request_course_drop(Student $Student, Course $Course);
    public function get_diploma(Student $Student, Diploma $Diploma);
    public function access_courses(StudentsCourses $StudentsCourse);
}

?>