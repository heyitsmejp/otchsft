<?php
require("config.php");
include_once $external_dir . dbconfig.php;
include_once db_connect.php;


function createUser($username, $password, $email){
    /*
     * Check if username is available
     * generate salt
     * prepend salt to password
     * hash salted password
     * store user name, salted password, and salt in users table
     * return true if all OK, otherwise return false
     */
    
    
}

function login($username, $password){
    
    /* Sanitize input.
     * Check if username exists. if it does, then proceed. 
     * checkBrute. If there are 5 bad login attempts in the last 30 minutes
     * then don't let user login.
     * select hash (hash1) and salt from DB
     * prepend salt to the password entered by user and hash it (hash2)
     * if hash1 equals hash2 the password is valid. let them in.
     * If not equal, add an entry to the login attempts table
     */
    
    }
function checkBrute($username){
    /*
     * select count(*) from login_attemps where username = $username
     * and time >= now - 30 minutes
     * if record count >= 5, don't let user in.
     */
    
    
}

function add_login_attempt($login){
    /*
     * Insert into login_attemps username, time values (name, time)
     */
    
}