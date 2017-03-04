<?php

class Common extends Model {
    
    // get the main menu   
    public function mainMenu() {
        $this->query("SELECT title,link,id FROM menu WHERE published = '1'");
        $this->execute();
        $menu = $this->resultset();
        return $menu;
    }

    // get the trending news
    public function getTrending($limit) {
        $this->query("SELECT title,urls,images FROM content WHERE publish_up < '".date("U")."' AND state = '1' ORDER BY hits DESC LIMIT 0,".$limit);
        $this->execute();
        $trending = $this->resultset();
        return $trending;   
    }

    // get the featured news
    public function getFeaturedNews($limit) {
        $this->query("SELECT title,introtext,urls,images,xrefrencelink FROM content WHERE featured = '1' and publish_up < '".date("U")."' and state = '1' ORDER BY publish_up DESC LIMIT 0,".$limit);
        $this->execute();
        $featured = $this->resultset();
        return $featured;      
    }

    // get the latest news
    public function getLatestNews($limit) {
        $this->query("SELECT title,introtext,urls,images FROM content WHERE publish_up < '".date("U")."' AND state = '1' ORDER BY publish_up DESC LIMIT 0,".$limit);
        $this->execute();
        $latest = $this->resultset();
        return $latest;      
    }

    // get the popular news
    public function getPopularNews($limit) {
        $this->query("SELECT title,introtext,urls,images FROM content WHERE publish_up < '".date("U")."' and state = '1' ORDER BY hits DESC LIMIT ".$limit);
        $this->execute();
        $popular = $this->resultset();
        return $popular;      
    }

    // get news list to fill up the main news page
    public function getNewsList($id,$limit) {
        $this->query("SELECT title,introtext,urls,images FROM content WHERE publish_up < '".date("U")."' and catid = '".$id."' and state = '1' ORDER BY hits DESC LIMIT ".$limit);
        $this->execute();
        $newlist = $this->resultset();
        return $newlist;      
    }


}