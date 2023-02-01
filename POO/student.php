<?php

class Student {
    private int $id;
    private string $firstname;
    private string $lastname;
    private string $email;
    private array $grades;
    
    public function __construct(string $firstname, string $lastname, string $email)
    {
        $this-> id = -1;
        $this-> firstname = $firstname;
        $this-> lastname = $lastname;
        $this-> email = $email;
        $this-> grades = [];
    }
    
    /// GETTER
    public function getId() : string
    {
        return $this->id;
    }
    
    public function getFirstName() : string
    {
        return $this->firstname;
    }
    
    public function getLastName() : string
    {
        return $this->lastname;
    }
    
    public function getEmail() : string
    {
        return $this->email;
    }
    
    public function getGrades() : array
    {
        return $this->grades;
    }
    

    /// SETTER
    public function setId(int $id) : void
    {
        $this->id = $id;
    }
    
    public function setFirstName(string $firstname) : void
    {
        $this->firstname = $firstname;
    }
    
    public function setLastName(string $lastname) : void
    {
        $this->lastname = $lastname;
    }
    
    public function setEmail(string $email) : void
    {
        $this->email = $email;
    }
    
    public function setGrades(array $grades) : void
    {
        $this->grade = $grades;
    }
    
    /// METHOD
    
    public function getFullName() : string
    {
        return this->firstname.' '.this->lastname;
    }
    public function addGrade(int $grade) : array 
    {
        $this->grades[] = $grade;
        return $this->grades;
    }
    
    public function removeGrade(int $grade) : array
    {
        $first= array_search($id, $this->grades);
        if($first !== false){
            unset($this->grade[$first]);
        }
        return $this->grades;
    }
    
    public function getAverage() : ? float
    {
        $sum=0;
        
        foreach($this->grades as $key=>$grade)
        {
            $sum+=$grade;
        }
        
        $count = count($this->grades);
        
        if($count !== 0)
        {
            return $sum/$count;
        }
        else 
        {
            return null;
        }
        
    }
}
?>