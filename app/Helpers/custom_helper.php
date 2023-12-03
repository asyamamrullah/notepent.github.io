<?php
function login() {
    $db = \Config\Database::connect();
    return $db->table('tb_user')->where('id_user', session('id_user'))->get()->getRow();

}
function count_data($table) {
    $db = \config\Database::connect();
    return $db->table($table)->countAllResults();

}
?>