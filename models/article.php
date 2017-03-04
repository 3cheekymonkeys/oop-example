<?php

class articleModel extends Model {

    public function Index() {
        return;
    }

    public function error() {
        $header = new HeaderModel;
        $header->set_fbtitle('404 Page');
        $header->set_fbdescription('Unfortunately, the page you were looking for could not be found. It may be temporarily unavailable, moved or no longer exists');
        $header->set_fbogURL(ROOT_URL.ROOT_PATH);
        $data['title'] = '404 Error Page';
        $data['fb_title'] = $header->get_fbtitle();
        $data['fb_description'] = $header->get_fbdescription();
        $data['fb_ogURL'] = $header->get_fbogURL();
        $data['fb_image'] = $header->get_fbimage();
        return $data;
    }

    public function view() {
        $header = new HeaderModel;
        $header->set_fbtitle('404 Page');
        $header->set_fbdescription('Unfortunately, the page you were looking for could not be found. It may be temporarily unavailable, moved or no longer exists');
        $header->set_fbogURL(ROOT_URL.ROOT_PATH);
        $data['title'] = '404 Error Page';
        $data['fb_title'] = $header->get_fbtitle();
        $data['fb_description'] = $header->get_fbdescription();
        $data['fb_ogURL'] = $header->get_fbogURL();
        $data['fb_image'] = $header->get_fbimage();
        return $data;
    }

    public function read() {
        // create a new Header Model
        $header = new HeaderModel;
        $siteDetails = new MainModel;

        $sitename = $siteDetails->getSiteSettings('sitename');
        $siteslogan = $siteDetails->getSiteSettings('siteslogan');
        $sitesImage = $siteDetails->getSiteSettings('sitelogo');

        $data['sitename'] = $sitename['configuration_value'];
        $data['siteslogan'] = $siteslogan['configuration_value'];
        $data['image'] = $sitesImage['configuration_value'];

        //$footer = new FooterModel;

        // sanatise GET
        $get = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING);
        
        // get the article information
        $this->query("SELECT * FROM content WHERE urls = :urls AND publish_up < :datenow");
        $this->bind(':urls', $get['id']);
        $this->bind('datenow', date("U"));
        $this->execute();

        // return the data
        $article = $this->Singleset();
        $data['title'] = $article['title'].' | '.$data['sitename'];

        // set the FB tags
        $header->set_fbtitle($data['sitename']);
        $header->set_fbdescription($data['siteslogan']);
        $header->set_fbogURL(ROOT_URL.ROOT_PATH.'/article/view/'.$article['urls']);
        $header->set_fbimage($article['images']);

        // get the FB tags
        $data['fb_title'] = $header->get_fbtitle();
        $data['fb_description'] = $header->get_fbdescription();
        $data['fb_ogURL'] = $header->get_fbogURL();
        $data['fb_image'] = $header->get_fbimage();
        
        // return the data to the template
        return $data;
    }
}