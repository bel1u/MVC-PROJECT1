<?php
/*
 * Распологаются базовые функции доступные ото всюду
 */
function session($name) {
    return $_SESSION[$name];
}

function has_session($name) {
    return isset($_SESSION[$name]);
}

function put_session($name, $value) {
    $_SESSION[$name] = $value;
}