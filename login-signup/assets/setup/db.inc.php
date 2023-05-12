<?php

require 'env.php';


$conn = mysqli_connect('localhost', 'u392818579_anlytics_users', 'MRke4T/o', 'u392818579_spaze_analytic');

if (!$conn)
{
    die("Connection failed: ". mysqli_connect_error());
}
