<?php

class Personne{
    public string $name;
    public string $surname;
    public int $age;
    public string $adress;
    public int $birthdayYear;

    public function infos(){
        return [$this ->name, $this ->surname,$this ->birthdayYear,
                $this ->age, $this ->adress];
    }

    public function changeAdress($adress){
        return $this->adress = $adress;
    }

    public function calculateAge(){

        return 2024 - $this->birthdayYear;

    }

    


    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of surname
     */ 
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set the value of surname
     *
     * @return  self
     */ 
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get the value of age
     */ 
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @return  self
     */ 
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get the value of adress
     */ 
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * Set the value of adress
     *
     * @return  self
     */ 
    public function setAdress($adress)
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * Get the value of birthday
     */ 
    public function getBirthday()
    {
        return $this->birthdayYear;
    }

    /**
     * Set the value of birthday
     *
     * @return  self
     */ 
    public function setBirthday($birthday)
    {
        $this->birthdayYear = $birthday;

        return $this;
    }
}