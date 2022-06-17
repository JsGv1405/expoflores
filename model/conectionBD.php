<?php

function conection(){
    return $conection = mysqli_connect("127.0.0.1:3307", "root", "", "picoyplaca");
}