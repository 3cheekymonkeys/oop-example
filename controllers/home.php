<?php

class home extends Controller {
    protected function Index() {
        $data = new HomeModel();
        $this->ReturnView($data->Index(),'',true);
    }
    protected function Sort() {
        $data = new HomeModel();
        $this->ReturnView($data->Index(), 'index',false);
    }
}