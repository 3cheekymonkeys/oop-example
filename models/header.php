<?php

class HeaderModel extends Model {
        
    private $fb_title;
    private $fb_description;
    private $fb_ogURL;
    private $fb_image;

    public function set_fbtitle($title) {
        $this->fb_title = $title; 
    }

    public function set_fbdescription($description) {
        $this->fb_description = $description; 
    }

    public function set_fbogURL($url) {
        $this->fb_ogURL = $url; 
    }

    public function set_fbimage($img) {
        $this->fb_image = $img; 
    }

    public function get_fbtitle() {
        return $this->fb_title;
    }

    public function get_fbdescription() {
        return $this->fb_description;
    }

    public function get_fbogURL() {
        return $this->fb_ogURL;
    }

    public function get_fbimage() {
        return $this->fb_image;
    }

    public function GetTopMenu() {
        $this->query("SELECT title,urls FROM pageContent WHERE top = 1");
        $this->execute();

        $topMenu = $this->resultset();
        return $topMenu;
    }


}