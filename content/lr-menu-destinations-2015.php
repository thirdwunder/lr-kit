<?php $destinations = lr_get_destinations() ;?>
<div id="destinationsMenu" class="collapse">
    <div id="destinationsMenuWrapper" class="container">
        <span class="footerTlt"><?php _e('Our Destinations','tw'); ?><a data-toggle="collapse" href="#destinationsMenu" aria-expanded="false" aria-controls="destinationsMenu" id="hideDestinations" class="hideDestGuide"><?php _e('Hide','tw');?></a></span>
        <div id="topDestination" class="clearfix">
          <nav class="">
            <ul class="topDestinationListBlock col-xs-6 col-sm-4 col-md-2">
              <li>

                <h3 class="topDestinationTlt">
                  <a title="<?php echo $destinations['Austria']['name'];?> villas &amp; vacation rentals" href="<?php echo $destinations['Austria']['url'];?><?php if($tracking_code){ echo '?'.$tracking_code; } ?>"><?php echo $destinations['Austria']['name'];?></a>
                </h3>
                <ul>
                  <?php foreach($destinations['Austria']['destinations'] as $city): ?>
                  <li>
                    <a title="<?php echo $city['name'];?>" href="<?php echo $city['url'];?><?php if($tracking_code){ echo '?'.$tracking_code; } ?>"><?php echo $city['name'];?></a>
                  </li>
                  <?php endforeach; ?>
                </ul>

                <h3 class="topDestinationTlt">
                  <a title="<?php echo $destinations['Caribbean']['name'];?> villas &amp; vacation rentals" href="<?php echo $destinations['Caribbean']['url'];?><?php if($tracking_code){ echo '?'.$tracking_code; } ?>"><?php echo $destinations['Caribbean']['name'];?></a>
                </h3>
                <ul>
                  <?php foreach($destinations['Caribbean']['destinations'] as $city): ?>
                  <li>
                    <a title="<?php echo $city['name'];?>" href="<?php echo $city['url'];?><?php if($tracking_code){ echo '?'.$tracking_code; } ?>"><?php echo $city['name'];?></a>
                  </li>
                  <?php endforeach; ?>
                </ul>
              </li>
            </ul>
            <ul class="topDestinationListBlock col-xs-6 col-sm-4 col-md-2">
              <li>
<!--
                <ul>
                  <li>
                    <a href="/destinations/caribbean/turks-and-caicos/" title="Turks and Caicos">Turks and Caicos</a>
                  </li>
                  <li>
                    <a href="/destinations/caribbean/virgin-gorda/" title="Virgin Gorda">Virgin Gorda</a>
                  </li>
                </ul>
-->


                <h3 class="topDestinationTlt">
                  <a title="<?php echo $destinations['Canada']['name'];?> villas &amp; vacation rentals" href="<?php echo $destinations['Canada']['url'];?><?php if($tracking_code){ echo '?'.$tracking_code; } ?>"><?php echo $destinations['Canada']['name'];?></a>
                </h3>
                <ul>
                  <?php foreach($destinations['Canada']['destinations'] as $city): ?>
                  <li>
                    <a title="<?php echo $city['name'];?>" href="<?php echo $city['url'];?><?php if($tracking_code){ echo '?'.$tracking_code; } ?>"><?php echo $city['name'];?></a>
                  </li>
                  <?php endforeach; ?>
                </ul>

                <h3 class="topDestinationTlt">
                  <a title="<?php echo $destinations['Central America']['name'];?> villas &amp; vacation rentals" href="<?php echo $destinations['Central America']['url'];?><?php if($tracking_code){ echo '?'.$tracking_code; } ?>"><?php echo $destinations['Central America']['name'];?></a>
                </h3>
                <ul>
                  <?php foreach($destinations['Central America']['destinations'] as $city): ?>
                  <li>
                    <a title="<?php echo $city['name'];?>" href="<?php echo $city['url'];?><?php if($tracking_code){ echo '?'.$tracking_code; } ?>"><?php echo $city['name'];?></a>
                  </li>
                  <?php endforeach; ?>
                </ul>

                <h3 class="topDestinationTlt">
                  <a title="<?php echo $destinations['Croatia']['name'];?> villas &amp; vacation rentals" href="<?php echo $destinations['Croatia']['url'];?><?php if($tracking_code){ echo '?'.$tracking_code; } ?>"><?php echo $destinations['Croatia']['name'];?></a>
                </h3>
                <ul>
                  <?php foreach($destinations['Croatia']['destinations'] as $city): ?>
                  <li>
                    <a title="<?php echo $city['name'];?>" href="<?php echo $city['url'];?><?php if($tracking_code){ echo '?'.$tracking_code; } ?>"><?php echo $city['name'];?></a>
                  </li>
                  <?php endforeach; ?>
                </ul>

                <h3 class="topDestinationTlt">
                  <a title="<?php echo $destinations['France']['name'];?> villas &amp; vacation rentals" href="<?php echo $destinations['France']['url'];?><?php if($tracking_code){ echo '?'.$tracking_code; } ?>"><?php echo $destinations['France']['name'];?></a>
                </h3>
                <ul>
                  <?php foreach($destinations['France']['destinations'] as $city): ?>
                  <li>
                    <a title="<?php echo $city['name'];?>" href="<?php echo $city['url'];?><?php if($tracking_code){ echo '?'.$tracking_code; } ?>"><?php echo $city['name'];?></a>
                  </li>
                  <?php endforeach; ?>
                </ul>

              </li>
            </ul>
            <ul class="topDestinationListBlock col-xs-6 col-sm-4 col-md-2">
              <li>
<!--
                <ul>
                  <li>
                    <a href="/destinations/europe/france/paris/" title="Paris">Paris</a>
                  </li>
                  <li>
                    <a href="/destinations/europe/france/provence/" title="Provence">Provence</a>
                  </li>
                </ul>
-->


                <h3 class="topDestinationTlt">
                  <a title="<?php echo $destinations['Greece']['name'];?> villas &amp; vacation rentals" href="<?php echo $destinations['Greece']['url'];?><?php if($tracking_code){ echo '?'.$tracking_code; } ?>"><?php echo $destinations['Greece']['name'];?></a>
                </h3>
                <ul>
                  <?php foreach($destinations['Greece']['destinations'] as $city): ?>
                  <li>
                    <a title="<?php echo $city['name'];?>" href="<?php echo $city['url'];?><?php if($tracking_code){ echo '?'.$tracking_code; } ?>"><?php echo $city['name'];?></a>
                  </li>
                  <?php endforeach; ?>
                </ul>

                <h3 class="topDestinationTlt">
                  <a title="<?php echo $destinations['Hawaii']['name'];?> villas &amp; vacation rentals" href="<?php echo $destinations['Hawaii']['url'];?><?php if($tracking_code){ echo '?'.$tracking_code; } ?>"><?php echo $destinations['Hawaii']['name'];?></a>
                </h3>
                <ul>
                  <?php foreach($destinations['Hawaii']['destinations'] as $city): ?>
                  <li>
                    <a title="<?php echo $city['name'];?>" href="<?php echo $city['url'];?><?php if($tracking_code){ echo '?'.$tracking_code; } ?>"><?php echo $city['name'];?></a>
                  </li>
                  <?php endforeach; ?>
                </ul>

                <h3 class="topDestinationTlt">
                  <a title="<?php echo $destinations['Indian Ocean']['name'];?> villas &amp; vacation rentals" href="<?php echo $destinations['Indian Ocean']['url'];?><?php if($tracking_code){ echo '?'.$tracking_code; } ?>"><?php echo $destinations['Indian Ocean']['name'];?></a>
                </h3>
                <ul>
                  <?php foreach($destinations['Indian Ocean']['destinations'] as $city): ?>
                  <li>
                    <a title="<?php echo $city['name'];?>" href="<?php echo $city['url'];?><?php if($tracking_code){ echo '?'.$tracking_code; } ?>"><?php echo $city['name'];?></a>
                  </li>
                  <?php endforeach; ?>
                </ul>

                <h3 class="topDestinationTlt">
                  <a title="<?php echo $destinations['Indonesia']['name'];?> villas &amp; vacation rentals" href="<?php echo $destinations['Indonesia']['url'];?><?php if($tracking_code){ echo '?'.$tracking_code; } ?>"><?php echo $destinations['Indonesia']['name'];?></a>
                </h3>
                <ul>
                  <?php foreach($destinations['Indonesia']['destinations'] as $city): ?>
                  <li>
                    <a title="<?php echo $city['name'];?>" href="<?php echo $city['url'];?><?php if($tracking_code){ echo '?'.$tracking_code; } ?>"><?php echo $city['name'];?></a>
                  </li>
                  <?php endforeach; ?>
                </ul>

              </li>
            </ul>
            <ul class="topDestinationListBlock col-xs-6 col-sm-4 col-md-2">
              <li>
                <h3 class="topDestinationTlt">
                  <a title="<?php echo $destinations['Italy']['name'];?> villas &amp; vacation rentals" href="<?php echo $destinations['Italy']['url'];?><?php if($tracking_code){ echo '?'.$tracking_code; } ?>"><?php echo $destinations['Italy']['name'];?></a>
                </h3>
                <ul>
                  <?php foreach($destinations['Italy']['destinations'] as $city): ?>
                  <li>
                    <a title="<?php echo $city['name'];?>" href="<?php echo $city['url'];?><?php if($tracking_code){ echo '?'.$tracking_code; } ?>"><?php echo $city['name'];?></a>
                  </li>
                  <?php endforeach; ?>
                </ul>

                <h3 class="topDestinationTlt">
                  <a title="<?php echo $destinations['Mexico']['name'];?> villas &amp; vacation rentals" href="<?php echo $destinations['Mexico']['url'];?><?php if($tracking_code){ echo '?'.$tracking_code; } ?>"><?php echo $destinations['Mexico']['name'];?></a>
                </h3>
                <ul>
                  <?php foreach($destinations['Mexico']['destinations'] as $city): ?>
                  <li>
                    <a title="<?php echo $city['name'];?>" href="<?php echo $city['url'];?><?php if($tracking_code){ echo '?'.$tracking_code; } ?>"><?php echo $city['name'];?></a>
                  </li>
                  <?php endforeach; ?>
                </ul>

                <h3 class="topDestinationTlt">
                  <a title="<?php echo $destinations['Portugal']['name'];?> villas &amp; vacation rentals" href="<?php echo $destinations['Portugal']['url'];?><?php if($tracking_code){ echo '?'.$tracking_code; } ?>"><?php echo $destinations['Portugal']['name'];?></a>
                </h3>
                <ul>
                  <?php foreach($destinations['Portugal']['destinations'] as $city): ?>
                  <li>
                    <a title="<?php echo $city['name'];?>" href="<?php echo $city['url'];?><?php if($tracking_code){ echo '?'.$tracking_code; } ?>"><?php echo $city['name'];?></a>
                  </li>
                  <?php endforeach; ?>
                </ul>

              </li>
            </ul>
            <ul class="topDestinationListBlock col-xs-6 col-sm-4 col-md-2">
              <li>

                <h3 class="topDestinationTlt">
                  <a title="<?php echo $destinations['South Africa']['name'];?> villas &amp; vacation rentals" href="<?php echo $destinations['South Africa']['url'];?><?php if($tracking_code){ echo '?'.$tracking_code; } ?>"><?php echo $destinations['South Africa']['name'];?></a>
                </h3>
                <ul>
                  <?php foreach($destinations['South Africa']['destinations'] as $city): ?>
                  <li>
                    <a title="<?php echo $city['name'];?>" href="<?php echo $city['url'];?><?php if($tracking_code){ echo '?'.$tracking_code; } ?>"><?php echo $city['name'];?></a>
                  </li>
                  <?php endforeach; ?>
                </ul>

                <h3 class="topDestinationTlt">
                  <a title="<?php echo $destinations['Spain']['name'];?> villas &amp; vacation rentals" href="<?php echo $destinations['Spain']['url'];?><?php if($tracking_code){ echo '?'.$tracking_code; } ?>"><?php echo $destinations['Spain']['name'];?></a>
                </h3>
                <ul>
                  <?php foreach($destinations['Spain']['destinations'] as $city): ?>
                  <li>
                    <a title="<?php echo $city['name'];?>" href="<?php echo $city['url'];?><?php if($tracking_code){ echo '?'.$tracking_code; } ?>"><?php echo $city['name'];?></a>
                  </li>
                  <?php endforeach; ?>
                </ul>

                <h3 class="topDestinationTlt">
                  <a title="<?php echo $destinations['Switzerland']['name'];?> villas &amp; vacation rentals" href="<?php echo $destinations['Switzerland']['url'];?><?php if($tracking_code){ echo '?'.$tracking_code; } ?>"><?php echo $destinations['Switzerland']['name'];?></a>
                </h3>
                <ul>
                  <?php foreach($destinations['Switzerland']['destinations'] as $city): ?>
                  <li>
                    <a title="<?php echo $city['name'];?>" href="<?php echo $city['url'];?><?php if($tracking_code){ echo '?'.$tracking_code; } ?>"><?php echo $city['name'];?></a>
                  </li>
                  <?php endforeach; ?>
                </ul>

                <h3 class="topDestinationTlt">
                  <a title="<?php echo $destinations['Thailand']['name'];?> villas &amp; vacation rentals" href="<?php echo $destinations['Thailand']['url'];?><?php if($tracking_code){ echo '?'.$tracking_code; } ?>"><?php echo $destinations['Thailand']['name'];?></a>
                </h3>
                <ul>
                  <?php foreach($destinations['Thailand']['destinations'] as $city): ?>
                  <li>
                    <a title="<?php echo $city['name'];?>" href="<?php echo $city['url'];?><?php if($tracking_code){ echo '?'.$tracking_code; } ?>"><?php echo $city['name'];?></a>
                  </li>
                  <?php endforeach; ?>
                </ul>

              </li>
            </ul>
            <ul class="topDestinationListBlock col-xs-6 col-sm-4 col-md-2">
              <li>
                <h3 class="topDestinationTlt">
                  <a title="<?php echo $destinations['United States']['name'];?> villas &amp; vacation rentals" href="<?php echo $destinations['United States']['url'];?><?php if($tracking_code){ echo '?'.$tracking_code; } ?>"><?php echo $destinations['United States']['name'];?></a>
                </h3>
                <ul>
                  <?php foreach($destinations['United States']['destinations'] as $states): ?>
                  <li>
                    <?php if(isset($states['destinations'])): ?>
                    <h4 class="topDestinationTlt">
                      <a title="<?php echo $states['name'];?>" href="<?php echo $states['url'];?><?php if($tracking_code){ echo '&'.$tracking_code; } ?>"><?php echo $states['name'];?></a>
                    </h4>
                    <ul>
                      <?php foreach($states['destinations'] as $city): ?>
                      <li>
                        <a href="<?php echo $city['url']; ?><?php if($tracking_code){ echo '?'.$tracking_code; } ?>" title="<?php echo $city['name']; ?>"><?php echo $city['name']; ?></a>
                      </li>
                      <?php endforeach; ?>
                    </ul>


                    <?php else: ?>
                    <a title="<?php echo $states['name'];?>" href="<?php echo $states['url'];?><?php if($tracking_code){ echo '?'.$tracking_code; } ?><?php if($tracking_code){ echo '?'.$tracking_code; } ?>"><?php echo $states['name'];?></a>
                    <?php endif; ?>
                  </li>
                  <?php endforeach; ?>
                </ul>

              </li>
            </ul>
          </nav>
        </div>
    </div>
</div>
