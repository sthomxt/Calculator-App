<?php

class View {
    public static $filename;
    public $view;

    public function __construct() {
        $this->filename = basename($_SERVER['SCRIPT_NAME']);
    }

    // MVC view method to display front end
    public static function show_view($view) {
        ob_start();
            include_once 'views/' . $view . '.php';
            $output = ob_get_contents();

        ob_end_clean();

        return $output ;
    }
}