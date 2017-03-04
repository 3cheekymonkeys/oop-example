  <footer id="footer">
    <div class="footer_top">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="footer_widget wow fadeInLeftBig">
            <h2>Flickr Images</h2>
          </div>
        </div>
        
        <!-- end of flicker images not sure why we have this -->

        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="footer_widget wow fadeInDown">
            <h2>Tag</h2>
            <ul class="tag_nav">
              $pages = $query->fetchAll();
              foreach ($pages as $pageC) { ?>
              <li><a href="<?fg echo $pageC['urls']; ?>"><?fg echo $pageC['title']; ?></a></li>
              <?fg } ?>
            </ul>
          </div>
        </div>
        
        <!-- end of tagging system -->

        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="footer_widget wow fadeInRightBig">
            <h2>Contact</h2>
            <p>This is an example site that we made for a client to show the potential of having AI built into your website's - We dont monitor this website nor do we have any knowledge of the information on here. All information gathered on this site is from other sources that our AI has thought was interesting.</p>
            <p>All news on this website is upto date and current.</p>
            <address>
            Perfect News,1238 S . 123 St.Suite 25 Town City 3333,USA Phone: 123-326-789 Fax: 123-546-567
            </address>
          </div>
        </div>

        <!-- end of contact column -->

      </div>
    </div>

    <div class="footer_bottom">
      <p class="copyright">Copyright &copy; <?fg echo date("Y"); ?> <a href="http://www.nc-web-services.co.uk/blogs">NC Web Services</a></p>
      <p class="developer"><a style="color:#999" href="http://www.nc-web-services.co.uk/">Developed By NC Web Services</a></p>
    </div>
  </footer>
</div>
<script src="<?php ECHO ROOT_URL.ROOT_PATH.'/views/'.THEME;?>/assets/js/jquery.min.js"></script> 
<script src="<?php ECHO ROOT_URL.ROOT_PATH.'/views/'.THEME;?>/assets/js/wow.min.js"></script> 
<script src="<?php ECHO ROOT_URL.ROOT_PATH.'/views/'.THEME;?>/assets/js/bootstrap.min.js"></script> 
<script src="<?php ECHO ROOT_URL.ROOT_PATH.'/views/'.THEME;?>/assets/js/slick.min.js"></script> 
<script src="<?php ECHO ROOT_URL.ROOT_PATH.'/views/'.THEME;?>/assets/js/jquery.li-scroller.1.0.js"></script> 
<script src="<?php ECHO ROOT_URL.ROOT_PATH.'/views/'.THEME;?>/assets/js/jquery.newsTicker.min.js"></script> 
<script src="<?php ECHO ROOT_URL.ROOT_PATH.'/views/'.THEME;?>/assets/js/jquery.fancybox.pack.js"></script> 
<script src="<?php ECHO ROOT_URL.ROOT_PATH.'/views/'.THEME;?>/assets/js/custom.js"></script>

<script>
function addLink() {
        //Get the selected text and append the extra info
        var selection = window.getSelection(),
            pagelink = '<br /><br /> Read more at: ' + document.location.href,
            copytext = selection + pagelink,
            newdiv = document.createElement('div');

        //hide the newly created container
        newdiv.style.position = 'absolute';
        newdiv.style.left = '-99999px';

        //insert the container, fill it with the extended text, and define the new selection
        document.body.appendChild(newdiv);
        newdiv.innerHTML = copytext;
        selection.selectAllChildren(newdiv);

        window.setTimeout(function () {
            document.body.removeChild(newdiv);
        }, 100);
    }

    document.addEventListener('copy', addLink);
</script>
</body>
</html>