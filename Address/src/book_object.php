<?php

    class Contact {

            private $name;
            private $phone;
            private $address;
            private $sexImage;


            function __construct($name, $phone, $address, $sexImage = "/images/possible.jpeg"){
                $this->name = $name;
                $this->phone = $phone;
                $this->address = $address;
                $this->sex = $sexImage;
            }

// getters and setters
            function getName(){
                return $this->name;
            }

            function setName($new_name){
                $this->name = (string) $new_name;
            }

            function getPhone(){
                return $this->phone;
            }

            function setPhone($new_phone){
                $this->phone = (float) $new_phone;
            }

            function getAddress(){
                return $this->address;
            }

            function setAddress($new_address){
                $this->address = $new_address;
            }

            function getSexImage(){
                return $this->sex;
            }

            function setSexImage($new_sex){
                $this->sex = $new_sex;
            }

//session methods
            function save(){
                array_push($_SESSION['list_of_contacts'], $this);
            }

            static function getAll(){
                return $_SESSION['list_of_contacts'];
            }

            static function deleteAll(){
                $_SESSION['list_of_contacts'] = array();
            }
//delete single method (PLEASE GOD TELL ME WHY THIS WONT WORK)
            // static function deleteSingle($del_name){
            //
            //     $contacts = $_SESSION['list_of_contacts'];
            //
            //     $key = array_search($del_name, $contacts);
            //
            //     unset($contacts[$key]);
            //
            //     $contacts = $_SESSION['list_of_contacts'];
            //
            //     return $_SESSION['list_of_contacts'];
            // }


    }

?>
