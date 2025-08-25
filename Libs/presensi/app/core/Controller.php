<?php
class Controller {
    public function view($view, $data = []) {
        // Ekstrak data agar bisa diakses sebagai variabel di view
        extract($data);
        
        // UBAH BARIS INI
        require_once APP_ROOT . '/app/views/' . $view . '.php';
    }

    public function model($model) {
        // UBAH BARIS INI
        require_once APP_ROOT . '/app/models/' . $model . '.php';
        return new $model;
    }
}