<?php

namespace Framework;

class View{

    protected $view_folder = '/app/Views/';

    public function view( $file )
    {
        include( $this->get_view_file( $file ));
    }

    public function get_view_file( $file )
    {
        return APP_DIR.$this->view_folder.$file;
    }

}