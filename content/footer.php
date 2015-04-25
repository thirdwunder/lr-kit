<div class="row">
  <div id="copyright" class="col-xs-12 col-sm-8 col-md-8">
    <h3><?php _e('More from Luxury Retreats','tw'); ?></h3>

      <ul id="footerLinks">
        <li><a href="javascript:;" id="showDestinations" data-name="Our Destinations" title="Our Destinations"><?php _e('Our Destinations','tw');?></a></li>
        <li><a href="http://www2.luxuryretreats.com/content/about" data-name="About"><?php _e('About Us','tw');?></a></li>
        <li><a href="http://www2.luxuryretreats.com/tabletapp" data-name="Our App" title="Our App"><?php _e('App Store','tw');?></a></li>
        <li><a href="http://www2.luxuryretreats.com/Content/Press/" data-name="Press" title="Press"><?php _e('Press','tw');?></a></li>
        <li><a href="http://www2.luxuryretreats.com/careers/" data-name="Careers" title="Careers"><?php _e('Careers','tw');?></a></li>
        <li><a href="http://www2.luxuryretreats.com/Content/PrivacyTerms/" data-name="Privacy &amp; Terms" title="Privacy and Terms"><?php _e('Privacy and Terms','tw'); ?></a></li>
        <li><a href="http://fr.luxuryretreats.com/" data-name="Français" title="Français"><?php _e('Français','tw');?></a></li>
      </ul>

    <div class="copyright">
    <?php if(function_exists('tw_copyright')){ tw_copyright(); }else{ _e('Copyright © 1999-2015 Luxury Retreats. All rights reserved.','tw'); } ?>
    </div><!-- .copyright -->

  </div>
  <div id="credit" class="col-xs-12 col-sm-4 col-md-4">

    <?php
      $footer_social  = isset($tgo['enable_footer_social']) ? !!$tgo['enable_footer_social'] : true;
      if($footer_social):

        if(function_exists('tw_get_theme_social_options')){
          $square_social_icons = false;
          $social_info   = tw_get_theme_social_options($square_social_icons);
        }elseif(function_exists('get_lr_social')){
          $social_info = get_lr_social();
        }else{
          $social_info = false;
        }

        if($social_info):
          unset($social_info['rss']);
          $count = count($social_info);
        ?>
      <div id="footer-social" class="footer-social <?php //echo $footer_social_class;?>">
        <h3><?php _e("Let's Socialize",'tw'); ?></h3>
        <ul>
          <?php foreach($social_info as $network=>$details): ?>
            <li class="width-<?php echo $count; ?>">
              <a class="contact-<?php echo $network; ?>" href="<?php echo $details['url']; ?>" target="_blank" title="<?php echo ucfirst($network); ?>">
                <?php if($square_social_icons):?>
                  <i class="fa <?php echo $details['icon']; ?>"></i>
                <?php else: ?>
                  <span class="fa-stack fa-lg">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa <?php echo $details['icon']; ?> fa-stack-1x fa-inverse"></i>
                  </span>
                <?php endif; ?>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    <?php endif; ?>

  <?php else: ?>
    <?php
      if(function_exists('tw_credit')){
        tw_credit();
      }else{
        echo 'Developed by <a href="http://www.thirdwunder.com/" title="Third Wunder">Third Wunder</a>';
      }
    ?>
  <?php endif; ?>

  </div><!-- #credit -->
</div>