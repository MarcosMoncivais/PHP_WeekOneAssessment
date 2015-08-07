<?php
  class Contact
  {
    private $name;
    private $email;
    private $address;
    private $number;
    

    function __construct ($name, $email, $address, $number)
    {
      $this->name = $name;
      $this->email = $email;
      $this->address = $address;
      $this->number = $number;
     
    }

    function setName($new_name)
    {
      $this->name = $new_name;
    }

    function getName()
    {
      return $this->name;
    }

    function setEmail($new_email)
    {
      $this->email = $new_email;
    }

    function getEmail()
    {
      return $this->email;
    }

    function setAddress($new_address)
    {
      $this->address = $new_address;
    }

    function getAddress()
    {
      return $this->address;
    }

    function setNumber($new_number)
    {
      $this->number = $new_number;
    }

    function getNumber()
    {
      return $this->number;
    }

    function save()
    {
      array_push($_SESSION['list_of_contacts'], $this);
    }

    static function getAll()
    {
      return $_SESSION['list_of_contacts'];
    }

    static function deleteAll()
    {
      $_SESSION['list_of_contacts'] = array();
    }
  }