<?php

class article extends Controller {
    protected function Index() {
        $data = new ArticleModel();
        $this->returnView($data->Index(),'',true);
    }

    protected function read() {
        $data = new ArticleModel();
        $this->returnView($data->read(),'',true);
    }

    protected function view() {
        $data = new ArticleModel();
        $this->returnView($data->read(),'',true);
    }

    protected function error() {
        $data = new ArticleModel();
        $this->returnView($data->error(),'',true);
    }

}