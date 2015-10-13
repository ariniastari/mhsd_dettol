    <div id="topfoo">
        <p class="one">Anda juga bisa memberikan dukungan dengan menggunakan hashtag #karenatangan</p>
        <?php
            $tweets = searchTweets(3, '#karenatangan');
            $counter = 2;
            foreach ($tweets['statuses'] as $value) { 
                switch ($counter) {
                    case 2:
                        $number = "two";
                        break;
                    case 3:
                        $number = "three";
                        break;
                    case 4:
                        $number = "four";
                        break;
                }
        ?>
              <p class="<?php echo $number; ?>">
                <?php echo $value['text']; ?>    
                - <?php echo "@".$value['user']['screen_name']; ?>
              </p>  
            <?php
                $counter++;
            }
          ?>
    </div>

    <div id="footer">
        <p>
            <img src="<?php echo get_template_directory_uri(); ?>/logo.png" alt="Dettol" width="60" height="62" />
            <img src="<?php echo get_template_directory_uri(); ?>/logo-footer-right.png" alt="Dettol" width="60" height="62" />
        </p>
        <small>
            &copy; Copyright Dettol 2014<br />
         <a href="http://legal.reckittbenckiser.com/ID/PrivacyStatement.htm" target="_blank">Privacy Policy</a> | <a href="http://www.dettol.co.id/contactus.php" target="_blank">Hubungi Kami</a> <br />
       </small>
        <p class="info">Untuk informasi lebih lanjut:</p>
        <p class="sitedettol"><a href="http://www.dettol.co.id/" target="_blank">www.dettol.co.id</a>
        </p>
    </div>
    <?php wp_footer(); ?>
</body>

</html>