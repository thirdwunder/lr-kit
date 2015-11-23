<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
<!--
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
-->
      <a class="navbar-brand" href="<?php echo lr_get_base_url(); ?>">
        <img src="https://resources.luxuryretreats.com/www/images/v5/luxury_retreats_logo.png" />
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="#" data-toggle="modal" data-target="#subMenuWrapper" role="button" aria-expanded="false"><?php _e('Vacation Ideas','tw');?> <span class="caret"></span></a>
        </li>

        <li><a href="<?php echo lr_get_magazine_url(); ?><?php if($tracking_code){ echo '?'.$tracking_code; } ?>" title="<?php _e('Luxury Retreats Magazine','tw');?>" target="_blank"><?php _e('Magazine','tw'); ?></a></li>

        <li><a href="<?php echo lr_get_base_url(); ?>content/contact/<?php if($tracking_code){ echo '?'.$tracking_code; } ?>" target="_blank"><?php _e('Contact','tw'); ?></a>
        </li>
        <li><a href="<?php echo lr_get_base_url(); ?>#login<?php if($tracking_code){ echo '?'.$tracking_code; } ?>" class="btn btn-primary"><?php _e('Log In','tw');?></a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div id="subMenuWrapper" class="subMenuWrapper modal hidden-xs">
  <div id="vacationIdeaWrapper" class="vacationIdeaWrapper" >
    <div class="container">
      <h3 class="headerDdTitle ideaTitle"><?php _e('Get Inspired','tw'); ?></h3>
      <div class="row">
        <div class="hidden-xs col-sm-8 col-md-8 ideaLeft">
          <h4 class="ideaSubtitle"><?php _e('Browse Our Top Villa Collections:','tw');?></h4>

          <div class="row">
            <div class="col-sm-4 ideaArea">
                <a id="headerBeachfrontLink" class="ideaImgLnk" title="Beachfront retreats" href="<?php echo lr_get_base_url(); ?>destinations?collections=HasBeach<?php if($tracking_code){ echo '&'.$tracking_code; } ?>">


                    <div>
                        <img class="ideaImg" src="https://resources.luxuryretreats.com/www/images/v5/header_idea_beachfront.jpg" alt="beachfront escapes">
                    </div>
                    <div class="ideaOverlay">
                        <div class="ideaIconWrapper">
                            <img class="ideaIcon" src="https://resources.luxuryretreats.com/www/images/v5/iCol_beachfront.png" alt="beachfront escapes icon">
                        </div>
                        <div><?php _e('Beachfront Escapes','lr');?></div>
                    </div>
                </a>
            </div>
            <div class="col-sm-4 ideaArea">
                <a id="headerGroupsLink" class="ideaImgLnk" title="Group Destinations" href="<?php echo lr_get_base_url(); ?>destinations?collections=LargeGroups<?php if($tracking_code){ echo '&'.$tracking_code; } ?>">

                    <div>

                        <img class="ideaImg" src="https://resources.luxuryretreats.com/www/images/v5/header_idea_groups.jpg" alt="good for groups">

                    </div>
                    <div class="ideaOverlay">
                        <div class="ideaIconWrapper">
                            <img class="ideaIcon" src="https://resources.luxuryretreats.com/www/images/v5/iCol_groups.png" alt="good for groups icon">
                        </div>
                        <div><?php _e('Good for Groups','lr');?></div>
                    </div>
                </a>
            </div>
            <div class="col-sm-4 ideaArea">
                <a id="headerCityLink" class="ideaImgLnk" title="City Retreats" href="<?php echo lr_get_base_url(); ?>destinations?collections=CityLife<?php if($tracking_code){ echo '&'.$tracking_code; } ?>">

                    <div>
                        <img class="ideaImg" src="https://resources.luxuryretreats.com/www/images/v5/header_idea_city.jpg" alt="city breaks">

                    </div>
                    <div class="ideaOverlay">
                        <div class="ideaIconWrapper">
                            <img class="ideaIcon" src="https://resources.luxuryretreats.com/www/images/v5/iCol_city.png" alt="city breaks icon">
                        </div>
                        <div><?php _e('City Breaks','lr');?></div>
                    </div>
                </a>
            </div>
          </div><!-- row -->

        </div><!-- ideaLeft -->
        <div class="hidden-xs col-sm-4 col-md-4 ideaRight">
          <h4 class="ideaSubtitle"><?php _e('Explore Our Top Destinations:','tw');?></h4>
          <ul id="ideaList" class="ideaList">
              <li><a href="<?php echo lr_get_base_url(); ?>destinations/caribbean/st-barts/<?php if($tracking_code){ echo '?'.$tracking_code; } ?>" title="St. Barts, Caribbean" data-region="3"><?php _e('St. Barts, Caribbean','lr');?></a></li>
              <li><a href="<?php echo lr_get_base_url(); ?>destinations/caribbean/turks-caicos/<?php if($tracking_code){ echo '?'.$tracking_code; } ?>" title="Turks and Caicos, Caribbea" data-region="3"><?php _e('Turks and Caicos, Caribbean','lr');?></a></li>
              <li><a href="<?php echo lr_get_base_url(); ?>destinations/caribbean/barbados/<?php if($tracking_code){ echo '?'.$tracking_code; } ?>" title="Barbados, Caribbean" data-region="3"><?php _e('Barbados, Caribbean','lr');?></a></li>
              <li><a href="<?php echo lr_get_base_url(); ?>destinations/europe/italy/tuscany/<?php if($tracking_code){ echo '?'.$tracking_code; } ?>" title="Tuscany, Italy" data-region="3"><?php _e('Tuscany, Italy','lr');?></a></li>
              <li><a href="<?php echo lr_get_base_url(); ?>destinations/north-america/mexico/riviera-maya/<?php if($tracking_code){ echo '?'.$tracking_code; } ?>" title="Riviera Maya, Mexico" data-region="3"><?php _e('Riviera Maya, Mexico','lr');?></a></li>
              <li><a href="<?php echo lr_get_base_url(); ?>destinations/north-america/united-states/california---desert-cities/<?php if($tracking_code){ echo '?'.$tracking_code; } ?>" title="Palm Springs, California" data-region="4"><?php _e('Palm Springs, California','lr');?></a></li>
          </ul>


        </div><!-- ideaRight -->
      </div>
    </div>
    <div id="xIdea" class="headerCloser" data-dismiss="modal"><i class="fa fa-times"></i></div>
  </div>
</div>