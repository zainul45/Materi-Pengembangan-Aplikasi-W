<?php
    function validateName(&$errors, $field_list, $field_name, &$error_con) {
        $pattern = "/^[a-zA-Z'-]+$/";// format surname (alfabet)
        
        if (!isset($field_list[$field_name]) || empty($field_list[$field_name])){
            $errors = 'Field is required';
        }
        else if (!preg_match($pattern, $field_list[$field_name])){
            $errors = 'Must contain alphabets only';
        }
        $error_con = true;
    }
    function validateFirstname(&$errors, $field_list, $field_name, &$error_con) {
        $pattern = "/^[a-zA-Z'-]+$/";// format surname (alfabet)
        
        if (!isset($field_list[$field_name]) || empty($field_list[$field_name])){
            $errors = 'Field is required';
        }
        else if (!preg_match($pattern, $field_list[$field_name])){
            $errors = 'Must contain alphabets only';
        }
        $error_con = true;
    }
    function validateEmail(&$errors, $field_list, $field_name, &$error_con) {
        $pattern = "/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix";// format email
        
        if (!isset($field_list[$field_name]) || empty($field_list[$field_name])){
            $errors = 'Field is required';
            $error_con = true;
        }
        else if (!preg_match($pattern, $field_list[$field_name])){
            $errors = 'Invalid email address';
            $error_con = true;
        }
    }
    function validateNumber(&$errors, $field_list, $field_name, &$error_con) {
        $pattern = "/^[0-9]+$/"; // format mobile number
        
        if (!isset($field_list[$field_name]) || empty($field_list[$field_name])){
            $errors = 'Field is required';
            $error_con = true;
        }
        else if (!preg_match($pattern, $field_list[$field_name])){
            $errors = 'Must contain numeric only';
            $error_con = true;
        }
        else if (strlen($field_list[$field_name]) < 10) {
            $errors = 'Mobile number is less than 10 digits long';
            $error_con = true;
        }
    }
    function validatePassword(&$errors, $field_list, $field_name, &$error_con) {
        $pattern = "/^.*(?=.{8,})(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).*$/";// format password
        
        if (!isset($field_list[$field_name]) || empty($field_list[$field_name])){
            $errors = 'Field is required';
            $error_con = true;
        }
        else if (!preg_match($pattern, $field_list[$field_name])){
            $errors = 'Must contain 8 characters alphabets (both lowercase & uppercase) & numerics';
            $error_con = true;
        }
    }
    function validateConfirmPassword(&$errors, $field_list, $field_name, &$error_con, &$passwd) {
        $pattern = "/^.*(?=.{8,})(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).*$/";// format password
        
        if (!isset($field_list[$field_name]) || empty($field_list[$field_name])){
            $errors = 'Field is required';
            $error_con = true;
        }
        else if ($field_list[$field_name] != $passwd){
            $errors = "Password do not match";
            $error_con = true;
        }
    }
?>