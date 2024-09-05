<?php

    const SERVER="localhost";
    const DB="prestamos";
    const USER="root";
    const PASS="";//no hay contraseña para la bbdd

    //constante para enviar parametros al modelo que se va a conectar a la bbdd
    
    const SGBD="mysql:host=".SERVER.";dbname=".DB;

    const METHOD="AES-256-CBC";
    const SECRET_KEY='$PRESTAMOS@2024';
    const SECRET_IV='307970';