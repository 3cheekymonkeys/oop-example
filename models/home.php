<?php

class HomeModel extends Model {

    public function sort() {
        return;
    }

    public function Index() {

        // call the other models that we need
        $header = new HeaderModel;
        $siteDetails = new MainModel;
        $common = new Common;

        // gather the site settings from the main model based on input
        $sitename = $siteDetails->getSiteSettings('sitename');
        $siteslogan = $siteDetails->getSiteSettings('siteslogan');
        $sitesImage = $siteDetails->getSiteSettings('sitelogo');

        $data['sitename'] = $sitename['configuration_value'];
        $data['siteslogan'] = $siteslogan['configuration_value'];
        $data['image'] = $sitesImage['configuration_value'];

        // set the facebook titles
        $header->set_fbtitle($data['sitename']);
        $header->set_fbdescription($data['siteslogan']);
        $header->set_fbogURL(ROOT_URL.ROOT_PATH);
        $header->set_fbimage($data['image']);

        // set the title of the web page
        $data['title'] = $data['sitename'];

        // get the FB tags
        $data['fb_title'] = $header->get_fbtitle();
        $data['fb_description'] = $header->get_fbdescription();
        $data['fb_ogURL'] = $header->get_fbogURL();
        $data['fb_image'] = $header->get_fbimage();

        // get a quote for loading screen
        $this->query("SELECT * FROM quotes ORDER BY RAND() LIMIT 1");
        $this->execute();
        $data['quote'] = $this->singleSet();

        // get the top menu
        $data['topMenu'] = $header->getTopMenu();

        // get the main menu
        $data['mainMenu'] = $common->mainMenu();

        // get trending
        $data['trending'] = $common->getTrending(9);

        // get featured
        $data['featured'] = $common->getFeaturedNews(9);

        // get latest news
        $data['latest'] = $common->getLatestNews(5);

        // get popular news
        $data['popular'] = $common->getPopularNews(5);

        foreach ($data['mainMenu'] as $getNews) {
            $ud = $getNews['id'];
            $data['news'][$ud] = $common->getNewsList($ud,6);
        }

        return $data;
    }
}