<?php
class Validation {
    public $currentValue;
    public $values = array();
    public $errors = array();

    public function __construct() {}

    public function post($key) {
        $this->values[$key] = trim($_POST[$key]);
        $this->currentValue = $key;
        return $this;
    }

    public function isEmpty() {
        if (empty($this->values[$this->currentValue])) {
            $this->errors[$this->currentValue]['empty'] = "Field must not be empty";
        }
        return $this;
    }

    public function minLength($length) {
        if (strlen($this->values[$this->currentValue]) < $length) {
            $this->errors[$this->currentValue]['minLength'] = "Field must be at least {$length} characters long";
        }
        return $this;
    }

    public function maxLength($length) {
        if (strlen($this->values[$this->currentValue]) > $length) {
            $this->errors[$this->currentValue]['maxLength'] = "Field must not exceed {$length} characters";
        }
        return $this;
    }

    public function isEmail() {
        if (!filter_var($this->values[$this->currentValue], FILTER_VALIDATE_EMAIL)) {
            $this->errors[$this->currentValue]['isEmail'] = "Invalid email format";
        }
        return $this;
    }

    // Add more validation methods as needed

    public function getErrors() {
        return $this->errors;
    }

    public function submit(){
        if(empty($this->errors)){
            return true;
        }else{
            return false;
        }
    }
}

// Example usage
// $validator = new Validation();

// $errors = $validator
//     ->post('username')
//     ->isEmpty()
//     ->minLength(5)
//     ->maxLength(20)
//     ->post('email')
//     ->isEmpty()
//     ->isEmail()
//     ->getErrors();

// print_r($errors);
