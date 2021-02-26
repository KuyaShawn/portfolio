<?php

/* This file should be moved to your home directory on the
 * server and then deleted from your local directory
 *
 */

// Connect to DB
function connect()
{
    $username = 'eabenoja_grcuser';
    $password = 'ZmawSxed,Wl,';
    $hostname = 'localhost';
    $database = 'eabenoja_grc';

    $cnxn = @mysqli_connect($hostname, $username, $password, $database)
    or die("Error connecting to database");
    return $cnxn;
}