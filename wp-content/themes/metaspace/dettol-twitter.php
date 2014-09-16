<div class="row forth">
  <div class="col-md-3 col-sm-3 hidden-xs">
    Anda juga bisa memberikan dukungan dengan menggunakan hashtag <strong>#misihidupsehat</strong>
  </div>
  <?php
    $tweets = searchTweets(3, '#misihidupsehat');
    foreach ($tweets['statuses'] as $value) { ?>
      <div class="col-md-3 col-sm-3 col-xs-6">
        <?php echo $value['text']; ?>    
        <i class="fa fa-twitter"></i> - <?php echo "@".$value['user']['screen_name']; ?>
      </div>  
    <?php
    }
  ?>
</div>