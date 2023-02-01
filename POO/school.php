<?php

class Student {
    private int $id;
    private User $teacher;
    private array $students;
    
    public function __construct(User $teacher)
    {
        $this-> id = -1;
        $this-> teacher = $teacher;
        $this-> students = [];
    }
    
    /// GETTER
    public function getId() : int
    {
        return $this->id;
    }
    
    public function getTeacher() : string
    {
        return $this->teacher;
    }
    
    public function getStudents() : string
    {
        return $this->students;
    }
    
    

    /// SETTER
    public function setId(int $id) : void
    {
        $this->id = $id;
    }
    
    public function setTeacher(string $teacher) : void
    {
        $this->teacher = $firstname;
    }
    
    public function setStudent(string $students) : void
    {
        $this->students = $students;
    }
    
    
    /// METHOD
    
    public function addStudent(Student $students) : array
    {
        $this->student[] = $student;
        return $this->student;
    }
    
    public function removeStudent(Student $student): array
    {
        foreach($this->students as $key=>$student)
        {
            if($student->getId() === $students->getId())
            {
                unset($this->students[$key]);
            }
        }
        return $this->students;
    }
}

?>