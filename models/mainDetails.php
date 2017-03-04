<?php

class MainModel extends Model {
        
    public function getSiteSettings($value) {
        $this->query("SELECT * FROM configuration WHERE configuration_key = '".$value."' ");
        $this->execute();
        $data = $this->Singleset();
        return $data;
    }


}