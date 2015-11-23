<?php
if(!function_exists('tw_slugify')){
  function tw_slugify($text){
    $text = preg_replace('~[^\\pL\d]+~u', '-', $text); // replace non letter or digits by -
    $text = trim($text, '-'); // trim
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text); // transliterate
    $text = strtolower($text); // lowercase
    $text = preg_replace('~[^-\w]+~', '', $text); // remove unwanted characters
    if (empty($text)){
      return 'n-a';
    }
    return $text;
  }
}

if(!function_exists('lr_get_base_url')){
  function lr_get_base_url(){
    return 'http://www.luxuryretreats.com/';
  }
}

if(!function_exists('lr_get_magazine_url')){
  function lr_get_magazine_url(){
    return 'http://magazine.luxuryretreats.com/';
  }
}

if(!function_exists('lr_get_social')){
  function lr_get_social(){
    $social = array(
      "facebook"    => array( 'url'=>"https://www.facebook.com/luxuryretreats", 'icon'=>'fa-facebook'),
      "twitter"     => array( 'url'=>"https://twitter.com/luxuryretreats", 'icon'=>'fa-twitter'),
      "pinterest"   => array( 'url'=>"http://pinterest.com/luxuryretreats", 'icon'=>'fa-pinterest'),
      "googleplus"  => array( 'url'=>"https://plus.google.com/+Luxuryretreats", 'icon'=>'fa-google-plus'),
      "linkedin"    => array( 'url'=>"http://www.linkedin.com/company/luxury-retreats", 'icon'=>'fa-linkedin'),
      "instagram"   => array( 'url'=>"http://instagram.com/luxuryretreats", 'icon'=>'fa-instagram'),
    );
    $social_info = array();
    if(function_exists('tw_get_theme_social_options')){
      $square_social_icons = false;
      $social_info   = tw_get_theme_social_options($square_social_icons);
      if(is_array($social_info) && count($social_info)>0){
        unset($social_info['rss']);
        $temp = array();
        foreach($social as $k=>$v){
          $temp[$k] = $social_info[$k];
        }
        $social_info = $temp;
      }else{
        $social_info = $social;
      }
    }else{
      $social_info = $social;
    }

    return $social_info;

  }
}

if(!function_exists('lr_get_destinations')){
function lr_get_destinations(){
  $destinations = array(
    'Austria'=> array(
                        'name'=>'Austria',
                        'url'=>lr_get_base_url().'destinations/europe/austria/',
                        'destinations'=> array(
                          array(
                                'name'=>'Austrian Alps',
                                'url'=> lr_get_base_url().'destinations/europe/austria/austrian-alps/',
                                ),
                        ),
                      ),
    'Caribbean'=> array(
                        'name'=>'Caribbean',
                        'url'=>lr_get_base_url().'destinations/caribbean/',
                        'destinations'=> array(
                          array(
                                'name'=>'Anguilla',
                                'url'=> lr_get_base_url().'destinations/caribbean/anguilla/',
                                ),
                          array(
                                'name'=>'Bahamas',
                                'url'=> lr_get_base_url().'destinations/caribbean/bahamas',
                                ),
                          array(
                                'name'=>'Bahamas',
                                'url'=> lr_get_base_url().'destinations/caribbean/bahamas/',
                                ),
                          array(
                                'name'=>'Barbados',
                                'url'=> lr_get_base_url().'destinations/caribbean/barbados/',
                                ),
                          array(
                                'name'=>'Bonaire',
                                'url'=> lr_get_base_url().'destinations/caribbean/bonaire/',
                                ),
                          array(
                                'name'=>'Dominican Republic',
                                'url'=> lr_get_base_url().'destinations/caribbean/dominican-republic/',
                                ),
                          array(
                                'name'=>'Grenada',
                                'url'=> lr_get_base_url().'destinations/caribbean/grenada/',
                                ),
                          array(
                                'name'=>'Jamaica',
                                'url'=> lr_get_base_url().'destinations/caribbean/jamaica/',
                                ),
                          array(
                                'name'=>'Puerto Rico',
                                'url'=> lr_get_base_url().'destinations/caribbean/puerto-rico/',
                                ),
                          array(
                                'name'=>'St. Barts',
                                'url'=> lr_get_base_url().'destinations/caribbean/st-barts/',
                                ),
                          array(
                                'name'=>'St. Croix',
                                'url'=> lr_get_base_url().'destinations/caribbean/st-croix/',
                                ),
                          array(
                                'name'=>'St. John',
                                'url'=> lr_get_base_url().'destinations/caribbean/st-john/',
                                ),
                          array(
                                'name'=>'St. Lucia',
                                'url'=> lr_get_base_url().'destinations/caribbean/st-lucia/',
                                ),
                          array(
                                'name'=>'St. Martin',
                                'url'=> lr_get_base_url().'destinations/caribbean/st-martin/',
                                ),
                          array(
                                'name'=>'St. Thomas',
                                'url'=> lr_get_base_url().'destinations/caribbean/st-thomas/',
                                ),
                          array(
                                'name'=>'Tortola',
                                'url'=> lr_get_base_url().'destinations/caribbean/tortola/',
                                ),
                          array(
                            'name'=>'Turks and Caicos',
                            'url'=>lr_get_base_url().'destinations/caribbean/turks-and-caicos/',
                          ),
                          array(
                            'name'=>'Virgin Gorda',
                            'url'=>lr_get_base_url().'destinations/caribbean/virgin-gorda/',
                          ),
                        ),
                      ),
    'Canada'=>array(
                    'name'=>'Canada',
                    'url'=>lr_get_base_url().'destinations/north-america/canada/',
                    'destinations'=>array(
                      array(
                        'name'=>'Mont Tremblant',
                        'url'=>lr_get_base_url().'destinations/north-america/canada/mont-tremblant/',
                      ),
                      array(
                        'name'=>'Whistler (BC)',
                        'url'=>lr_get_base_url().'destinations/north-america/canada/bc/whistler/',
                      ),
                    ),
                  ),
    'Central America'=>array(
                        'name'=>'Central America',
                        'url'=>lr_get_base_url().'destinations/central-america/',
                        'destinations'=>array(
                          array(
                            'name'=>'Belize',
                            'url'=>lr_get_base_url().'destinations/central-america/belize/',
                          ),
                          array(
                            'name'=>'Costa Rica',
                            'url'=>lr_get_base_url().'destinations/central-america/costa-rica/',
                          ),
                        ),
                      ),
    'Croatia'=>array(
                      'name'=>'Croatia',
                      'url'=>lr_get_base_url().'destinations/europe/croatia/',
                      'destinations'=>array(
                        array(
                          'name'=>'Dubrovnik Riviera',
                          'url'=>lr_get_base_url().'destinations/europe/croatia/dubrovnik-riviera/',
                        ),
                        array(
                          'name'=>'Hvar',
                          'url'=>lr_get_base_url().'destinations/europe/croatia/hvar/',
                        ),
                        //array(
                        //  'name'=>'Korcula',
                        //  'url'=>lr_get_base_url().'destinations/europe/croatia/korcula/',
                        //),
                        array(
                          'name'=>'Pelijesac Peninsula',
                          'url'=>lr_get_base_url().'destinations/europe/croatia/pelijesac-peninsula/',
                        ),
                        array(
                          'name'=>'Split Riviera',
                          'url'=>lr_get_base_url().'destinations/europe/croatia/split-riviera/',
                        ),
                      ),
                    ),
    'France'=>array(
                      'name'=>'France',
                      'url'=>lr_get_base_url().'destinations/europe/france/',
                      'destinations'=>array(
                        array(
                          'name'=>'Corsica',
                          'url'=>lr_get_base_url().'destinations/europe/france/corsica/',
                        ),
                        array(
                          'name'=>'French Alps',
                          'url'=>lr_get_base_url().'destinations/europe/france/french-alps/',
                        ),
                        array(
                          'name'=>'French Riviera',
                          'url'=>lr_get_base_url().'destinations/europe/france/french-riviera/',
                        ),
                        array(
                          'name'=>'Paris',
                          'url'=>lr_get_base_url().'destinations/europe/france/paris/',
                        ),
                        array(
                          'name'=>'Provence',
                          'url'=>lr_get_base_url().'destinations/europe/france/provence/',
                        ),
                      ),
                    ),
    'Greece'=>array(
                   'name'=>'Greece',
                   'url'=>lr_get_base_url().'destinations/europe/greece/',
                    'destinations'=>array(
                      array(
                        'name' => 'Crete',
                        'url'=> lr_get_base_url().'destinations/europe/greece/crete/',
                      ),
                      array(
                        'name' => 'Mykonos',
                        'url'=> lr_get_base_url().'destinations/europe/greece/mykonos/',
                      ),
                      array(
                        'name' => 'Paros',
                        'url'=> lr_get_base_url().'destinations/europe/greece/paros/',
                      ),
                      array(
                        'name' => 'Santorini',
                        'url'=> lr_get_base_url().'destinations/europe/greece/santorini/',
                      ),
                      array(
                        'name' => 'Zakynthos',
                        'url'=> lr_get_base_url().'destinations/europe/greece/zakynthos/',
                      ),
                    ),
                  ),
    'Hawaii'=>array(
                    'name'=>'Hawaii',
                    'url'=>lr_get_base_url().'destinations/north-america/hawaii/',
                    'destinations'=>array(
                      array(
                        'name'=>'Big Island',
                        'url'=>lr_get_base_url().'destinations/north-america/hawaii/big-island/',
                      ),
                      array(
                        'name'=>'Kauai',
                        'url'=>lr_get_base_url().'destinations/north-america/hawaii/kauai/',
                      ),
                      array(
                        'name'=>'Maui',
                        'url'=>lr_get_base_url().'destinations/north-america/hawaii/maui/',
                      ),
                      array(
                        'name'=>'Oahu',
                        'url'=>lr_get_base_url().'destinations/north-america/hawaii/oahu/',
                      ),
                    ),
                  ),
    'Indian Ocean'=>array(
                    'name'=>'Indian Ocean',
                    'url'=>lr_get_base_url().'destinations/africa/indian-ocean/',
                    'destinations'=>array(
                      array(
                        'name'=>'Mauritius',
                        'url'=>lr_get_base_url().'destinations/africa/indian-ocean/mauritius/',
                      ),
                    ),
                  ),
    'Indonesia'=>array(
                    'name'=>'Indonesia',
                    'url'=>lr_get_base_url().'destinations/asia/indonesia/',
                    'destinations'=>array(
                      array(
                        'name'=>'Bali',
                        'url'=>lr_get_base_url().'destinations/asia/indonesia/bali/',
                      ),
                      array(
                        'name'=>'Lombok',
                        'url'=>lr_get_base_url().'destinations/asia/indonesia/lombok/',
                      ),
                    ),
                  ),
    'Italy'=>array(
                    'name'=>'Italy',
                    'url'=>lr_get_base_url().'destinations/europe/italy/',
                    'destinations'=>array(
                      array(
                        'name'=>'Amalfi Coast',
                        'url'=>lr_get_base_url().'destinations/europe/italy/amalfi-coast/',
                      ),
                      array(
                        'name'=>'Lake Como',
                        'url'=>lr_get_base_url().'destinations/europe/italy/lake-como/',
                      ),
                      array(
                        'name'=>'Puglia',
                        'url'=>lr_get_base_url().'destinations/europe/italy/puglia/',
                      ),
                      array(
                        'name'=>'Sardinia',
                        'url'=>lr_get_base_url().'destinations/europe/italy/sardinia/',
                      ),
                      array(
                        'name'=>'Sicily',
                        'url'=>lr_get_base_url().'destinations/europe/italy/sicily/',
                      ),
                      array(
                        'name'=>'Tuscany',
                        'url'=>lr_get_base_url().'destinations/europe/italy/tuscany/',
                      ),
                      array(
                        'name'=>'Umbria',
                        'url'=>lr_get_base_url().'destinations/europe/italy/umbria/',
                      ),
                    ),
                ),
    'Mexico'=>array(
                    'name'=>'Mexico',
                    'url'=>lr_get_base_url().'destinations/north-america/mexico/',
                    'destinations'=>array(
                      array(
                        'name'=>'Cabo San Lucas',
                        'url'=>lr_get_base_url().'destinations/north-america/mexico/cabo-san-lucas/',
                      ),
                      array(
                        'name'=>'Puerto Vallarta',
                        'url'=>lr_get_base_url().'destinations/north-america/mexico/puerto-vallarta/',
                      ),
                      array(
                        'name'=>'Punta Mita',
                        'url'=>lr_get_base_url().'destinations/north-america/mexico/punta-mita/',
                      ),
                      array(
                        'name'=>'Riviera Maya',
                        'url'=>lr_get_base_url().'destinations/north-america/mexico/riviera-maya/',
                      ),
                    ),
                ),
    'Portugal'=>array(
                    'name'=>'Portugal',
                    'url'=>lr_get_base_url().'destinations/europe/portugal/',
                    'destinations'=>array(
                      array(
                        'name'=>'Algarve',
                        'url'=>lr_get_base_url().'destinations/europe/portugal/algarve/',
                      ),
                      array(
                        'name'=>'Lisbon Area',
                        'url'=>lr_get_base_url().'destinations/europe/portugal/lisbon-area/',
                      ),
                      array(
                        'name'=>'Northern Portugal',
                        'url'=>lr_get_base_url().'destinations/europe/portugal/northern-portugal/',
                      ),
                    ),
                  ),
    'South Africa'=>array(
                    'name'=>'South Africa',
                    'url'=>lr_get_base_url().'destinations/africa/south-africa/',
                    'destinations'=>array(
                      array(
                        'name'=>'Cape Town',
                        'url'=>lr_get_base_url().'destinations/africa/south-africa/cape-town/',
                      ),
                      array(
                        'name'=>'Madikwe Game Reserve',
                        'url'=>lr_get_base_url().'destinations/africa/south-africa/madikwe-game-reserve/',
                      ),
                    ),
                  ),
    'Spain'=>array(
                    'name'=>'Spain',
                    'url'=>lr_get_base_url().'destinations/europe/spain/',
                    'destinations'=>array(
                      array(
                        'name'=>'Andalucia',
                        'url'=>lr_get_base_url().'destinations/europe/spain/andalucia/',
                      ),
                      array(
                        'name'=>'Barcelona',
                        'url'=>lr_get_base_url().'destinations/europe/spain/barcelona/',
                      ),
                      array(
                        'name'=>'Costa Brava',
                        'url'=>lr_get_base_url().'destinations/europe/spain/costa-brava/',
                      ),
                      array(
                        'name'=>'Costa del Sol',
                        'url'=>lr_get_base_url().'destinations/europe/spain/costa-del-sol/',
                      ),
                      array(
                        'name'=>'Ibiza',
                        'url'=>lr_get_base_url().'destinations/europe/spain/ibiza/',
                      ),
                      array(
                        'name'=>'Mallorca',
                        'url'=>lr_get_base_url().'destinations/europe/spain/mallorca/',
                      ),
                    ),
                  ),
    'Switzerland'=>array(
                    'name'=>'Switzerland',
                    'url'=>lr_get_base_url().'destinations/europe/switzerland/',
                    'destinations'=>array(
                      array(
                        'name'=>'Swiss Alps',
                        'url'=>lr_get_base_url().'destinations/europe/switzerland/swiss-alps/',
                      ),
                    ),
                  ),
    'Thailand'=>array(
                    'name'=>'Thailand',
                    'url'=>lr_get_base_url().'destinations/asia/thailand/',
                    'destinations'=>array(
                      array(
                        'name'=>'Koh Samui',
                        'url'=>lr_get_base_url().'destinations/asia/thailand/koh-samui/',
                      ),
                      array(
                        'name'=>'Phuket',
                        'url'=>lr_get_base_url().'destinations/asia/thailand/phuket/',
                      ),
                    ),
                  ),
    'United States'=>array(
                    'name'=>'United States',
                    'url'=>lr_get_base_url().'destinations/north-america/united-states/',
                    'destinations'=>array(
                      array(
                        'name'=>'California',
                        'url'=>lr_get_base_url().'search?RegionIds=1%7C1%7C109%2C1%7C1%7C238%2C1%7C1%7C240%2C1%7C1%7C237%2C1%7C1%7C239%2C1%7C1%7C245',
                        'destinations'=>array(
                          array(
                            'name'=>'Desert Cities',
                            'url'=>lr_get_base_url().'destinations/north-america/united-states/california---desert-cities/',
                          ),
                          array(
                            'name'=>'Lake Tahoe',
                            'url'=>lr_get_base_url().'destinations/north-america/united-states/california---lake-tahoe/',
                          ),
                          array(
                            'name'=>'Los Angeles',
                            'url'=>lr_get_base_url().'destinations/north-america/united-states/california---los-angeles/',
                          ),
                          array(
                            'name'=>'Napa and Sonoma',
                            'url'=>lr_get_base_url().'destinations/north-america/united-states/california---napa---sonoma/',
                          ),
                          array(
                            'name'=>'San Diego',
                            'url'=>lr_get_base_url().'destinations/north-america/united-states/california---san-diego/',
                          ),
                        ),
                      ),
                      array(
                        'name'=>'Colorado',
                        'url'=>lr_get_base_url().'search?RegionIds=1%7C1%7C244%2C1%7C1%7C245%2C1%7C1%7C246%2C1%7C1%7C247',
                        'destinations'=>array(
                          array(
                            'name'=>'Breckenridge',
                            'url'=>lr_get_base_url().'destinations/north-america/united-states/colorado-breckenridge/',
                          ),
                          array(
                            'name'=>'Greater Aspen',
                            'url'=>lr_get_base_url().'destinations/north-america/united-states/colorado---greater-aspen/',
                          ),
                          array(
                            'name'=>'Telluride',
                            'url'=>lr_get_base_url().'destinations/north-america/united-states/colorado-telluride/',
                          ),
                          array(
                            'name'=>'Vail Valley',
                            'url'=>lr_get_base_url().'destinations/north-america/united-states/colorado-vail-valley/',
                          ),
                        ),
                      ),
                      array(
                        'name'=>'Florida',
                        'url'=>lr_get_base_url().'search?RegionIds=1%7C1%7C252%2C1%7C1%7C254%2C1%7C1%7C253%2C1%7C1%7C251',
                        'destinations'=>array(
                          array(
                            'name'=>'Fort Lauderdale',
                            'url'=>lr_get_base_url().'destinations/north-america/united-states/florida---fort-lauderdale/',
                          ),
                          array(
                            'name'=>'Gulf Coast',
                            'url'=>lr_get_base_url().'destinations/north-america/united-states/florida---gulf-coast/',
                          ),
                          array(
                            'name'=>'Miami',
                            'url'=>lr_get_base_url().'destinations/north-america/united-states/florida---miami/',
                          ),
                          array(
                            'name'=>'The Palm Beaches',
                            'url'=>lr_get_base_url().'destinations/north-america/united-states/florida---the-palm-beaches/',
                          ),
                        ),
                      ),
                      array(
                        'name'=>'New York',
                        'url'=>lr_get_base_url().'destinations/north-america/united-states/new-york/',
                      ),
                      array(
                        'name'=>'Utah',
                        'url'=>lr_get_base_url().'destinations/north-america/united-states/utah/',
                      ),
                      array(
                        'name'=>'Wyoming',
                        'url'=>lr_get_base_url().'destinations/north-america/united-states/wyoming/',
                      ),
                    ),
                  ),
  );
  return $destinations;
}
}

if(!function_exists('lr_get_regions')){
function lr_get_regions(){
	$africa = array(
    'id'=> 4,
    'name' =>'Africa',
    'region_2' => array(
      tw_slugify('Indian Ocean') => array(
        'id'=>23,
        'name'=>'Indian Ocean',
        'region_3' => array(
          tw_slugify('Mauritius')=> array( 'id'=>221, 'name'=>'Mauritius',
            'region_4' =>array(
              tw_slugify('Bel Ombre')=>array( 'id'=>1413, 'name'=>'Bel Ombre'),
            ),
          ),
        ),
      ),
      tw_slugify('South Africa') => array( 'id'=>17, 'name'=>'South Africa',
        'region_3' => array(

          tw_slugify('Cape Town')=> array( 'id'=>114, 'name'=>'Cape Town',
            'region_4' =>array(
              tw_slugify('Bakoven')    => array('id'=>1288, 'name'=>'Bakoven'),
              tw_slugify('Bantry Bay') => array('id'=>1287, 'name'=>'Bantry Bay'),
              tw_slugify('Camps Bay')  => array('id'=>569 , 'name'=>'Camps Bay'),
              tw_slugify('Clifton')    => array('id'=>568 , 'name'=>'Clifton'),
              tw_slugify('Hout Bay')   => array('id'=>1266, 'name'=>'Hout Bay'),
              tw_slugify('Llandudno')  => array('id'=>605 , 'name'=>'Llandudno'),
            ),
          ),
          tw_slugify('Madikwe Game Reserve')=> array( 'id'=>201, 'name'=>'Madikwe Game Reserve',
            'region_4' =>array(
              tw_slugify('Molori')    => array('id'=>1256, 'name'=>'Molori'),
              tw_slugify('Morukuru')  => array('id'=>1308, 'name'=>'Morukuru'),
              ),
            ),

        ),
      ),
    ),
  );

$asia = array(
    'id'=> 5,
    'name' =>'Asia',
    'region_2' => array(
      tw_slugify('Indonesia') => array('id'=>235, 'name'=>'Indonesia', 'region_3' => array(
          tw_slugify('Bali')    => array('id'=>115, 'name'=>'Bali',   'region_4'=>array(
              tw_slugify('Batubelig')  => array('id'=>1671, 'name'=>'Batubelig'),
              tw_slugify('Berawa')  => array('id'=>1672, 'name'=>'Berawa'),
              tw_slugify('Canggu')  => array('id'=>1151, 'name'=>'Canggu'),
              tw_slugify('Cemagi')  => array('id'=>1448, 'name'=>'Cemagi'),
              tw_slugify('Jimbaran Hill')  => array('id'=>1000, 'name'=>'Jimbaran Hill'),
              tw_slugify('Petitenget')  => array('id'=>1670, 'name'=>'Petitenget'),
              tw_slugify('Sanur-Ketewel')  => array('id'=>1360, 'name'=>'Sanur-Ketewel'),
              tw_slugify('Seminyak')  => array('id'=>570, 'name'=>'Seminyak'),
              tw_slugify('Seseh')  => array('id'=>1361, 'name'=>'Seseh'),
              tw_slugify('Tabanan')  => array('id'=>1488, 'name'=>'Tabanan'),
              tw_slugify('The Bukit')  => array('id'=>1363, 'name'=>'The Bukit'),
              tw_slugify('Uluwatu')  => array('id'=>1001, 'name'=>'Uluwatu'),
              tw_slugify('Umalas')  => array('id'=>1145, 'name'=>'Umalas'),
            )
          ),
          tw_slugify('Lombok')  => array('id'=>235, 'name'=>'Lombok', 'region_4'=>array(
              tw_slugify('Malimbu Bay')  => array('id'=>1516, 'name'=>'Malimbu Bay'),
              tw_slugify('Sira Beach')  => array('id'=>1517, 'name'=>'Sira Beach'),
            )
          ),
        )
      ),
      tw_slugify('Thailand ') => array('id'=>155, 'name'=>'Thailand', 'region_3' => array(
          tw_slugify('Koh Samui')  => array('id'=>155, 'name'=>'Koh Samui', 'region_4'=>array(
              tw_slugify('Baan Makam')  => array('id'=>914, 'name'=>'Baan Makam'),
              tw_slugify('Baan Taling Ngam')  => array('id'=>1470, 'name'=>'Baan Taling Ngam'),
              tw_slugify('Bang Por')  => array('id'=>876, 'name'=>'Bang Por'),
              tw_slugify('Bang Rak')  => array('id'=>894, 'name'=>'Bang Rak'),
              tw_slugify('Bophut')  => array('id'=>872, 'name'=>'Bophut'),
              tw_slugify('Chaweng')  => array('id'=>866, 'name'=>'Chaweng'),
              tw_slugify('Choeng Mon')  => array('id'=>896, 'name'=>'Choeng Mon'),
              tw_slugify('Laem Set')  => array('id'=>940, 'name'=>'Laem Set'),
              tw_slugify('Laem Sor')  => array('id'=>938, 'name'=>'Laem Sor'),
              tw_slugify('Laem Yai')  => array('id'=>1723, 'name'=>'Laem Yai'),
              tw_slugify('Lamai')  => array('id'=>1332, 'name'=>'Lamai'),
              tw_slugify('Lipa Noi')  => array('id'=>915, 'name'=>'Lipa Noi'),
              tw_slugify('Maenam')  => array('id'=>895, 'name'=>'Maenam'),
              tw_slugify('Nathon')  => array('id'=>1469, 'name'=>'Nathon'),
              tw_slugify('Plai Laem')  => array('id'=>937, 'name'=>'Plai Laem'),
              tw_slugify('Samui Beach Village')  => array('id'=>865, 'name'=>'Samui Beach Village'),
              tw_slugify('Taling Ngam')  => array('id'=>867, 'name'=>'Taling Ngam'),
            )
          ),
          tw_slugify('Phuket')     => array('id'=>161, 'name'=>'Phuket',    'region_4'=>array(
              tw_slugify('Bang Tao')  => array('id'=>962, 'name'=>'Bang Tao'),
              tw_slugify('Cape Yamu')  => array('id'=>1399, 'name'=>'Cape Yamu'),
              tw_slugify('Cherng Lay')  => array('id'=>1036, 'name'=>'Cherng Lay'),
              tw_slugify('Cherngtalay')  => array('id'=>1188, 'name'=>'Cherngtalay'),
              tw_slugify('Kamala')  => array('id'=>905, 'name'=>'Kamala'),
              tw_slugify('Kata')  => array('id'=>978, 'name'=>'Kata'),
              tw_slugify('Phang Nga')  => array('id'=>979, 'name'=>'Phang Nga'),
              tw_slugify('Surin')  => array('id'=>1264, 'name'=>'Surin'),
            )
          ),
        )
      ),
    ),
  );

$europe = array(
    'id'=> 2,
    'name' =>'Europe',
    'region_2' => array(
      tw_slugify('Austria')      => array('id'=>25, 'name'=>'Austria', 'region_3' => array(
          tw_slugify('Austrian Alps')  => array('id'=>216, 'name'=>'Austrian Alps', 'region_4'=>array(
              tw_slugify('St. Anton')  => array('id'=>1376, 'name'=>'St. Anton'),
            )
          ),
        )
      ),
      tw_slugify('Croatia')      => array('id'=>20, 'name'=>'Croatia', 'region_3' => array(
          tw_slugify('Dubrovnik Riviera')   => array('id'=>183, 'name'=>'Dubrovnik Riviera',  'region_4'=>array(
              tw_slugify('Dubrovnik')  => array('id'=>1039, 'name'=>'Dubrovnik'),
            )
          ),
          tw_slugify('Hvar')                => array('id'=>227, 'name'=>'Hvar',               'region_4'=>array(
              tw_slugify('Hvar Town')  => array('id'=>1452, 'name'=>'Hvar Town'),
            )
          ),
          tw_slugify('Pelijesac Peninsula') => array('id'=>230, 'name'=>'Pelijesac Peninsula','region_4'=>array(
              tw_slugify('Orebic')  => array('id'=>1472, 'name'=>'Orebic'),
            )
          ),
          tw_slugify('Split Riviera')       => array('id'=>226, 'name'=>'Split Riviera',      'region_4'=>array(
              tw_slugify('Kastela')  => array('id'=>1683, 'name'=>'Kastela'),
              tw_slugify('Makarska')  => array('id'=>1715, 'name'=>'Makarska'),
              tw_slugify('Primosten')  => array('id'=>1471, 'name'=>'Primosten'),
              tw_slugify('Split')  => array('id'=>1454, 'name'=>'Split'),
              tw_slugify('Trogir')  => array('id'=>1455, 'name'=>'Trogir'),
            )
          ),
        )
      ),
      tw_slugify('France')       => array('id'=>7,  'name'=>'France', 'region_3' => array(
          tw_slugify('Corsica')         => array('id'=>206, 'name'=>'Corsica',        'region_4'=>array(
              tw_slugify('Bonifacio')  => array('id'=>1271, 'name'=>'Bonifacio'),
              tw_slugify('Calvi')  => array('id'=>1426, 'name'=>'Calvi'),
              tw_slugify('Lumio')  => array('id'=>1425, 'name'=>'Lumio'),
              tw_slugify('Porto-Vecchio')  => array('id'=>1386, 'name'=>'Porto-Vecchio'),
              tw_slugify('Saint-Florent')  => array('id'=>1427, 'name'=>'Saint-Florent'),
              tw_slugify('St-Lucie de Porto-Vecchio')  => array('id'=>1428, 'name'=>'St-Lucie de Porto-Vecchio'),
            )
          ),
          tw_slugify('French Alps')     => array('id'=>136, 'name'=>'French Alps',    'region_4'=>array(
              tw_slugify('Chamonix')  => array('id'=>933, 'name'=>'Chamonix'),
              tw_slugify('Courchevel')  => array('id'=>660, 'name'=>'Courchevel'),
              tw_slugify('Megeve')  => array('id'=>1373, 'name'=>'Megeve'),
              tw_slugify('Meribel')  => array('id'=>662, 'name'=>'Meribel'),
              tw_slugify("Val D'Isere")  => array('id'=>663, 'name'=>"Val D'Isere"),
            )
          ),
          tw_slugify('French Riviera')  => array('id'=>102, 'name'=>'French Riviera', 'region_4'=>array(
              tw_slugify('Bandol Area')  => array('id'=>1429, 'name'=>'Bandol Area'),
              tw_slugify('Cannes Area')  => array('id'=>445, 'name'=>'Cannes Area'),
              tw_slugify('Cassis Area')  => array('id'=>1415, 'name'=>'Cassis Area'),
              tw_slugify('Hyeres Area')  => array('id'=>1686, 'name'=>'Hyeres Area'),
              tw_slugify('Menton Area')  => array('id'=>1382, 'name'=>'Menton Area'),
              tw_slugify('Nice Area')  => array('id'=>441, 'name'=>'Nice Area'),
              tw_slugify('St. Raphael Area')  => array('id'=>757, 'name'=>'St. Raphael Area'),
              tw_slugify('St. Tropez Area')  => array('id'=>748, 'name'=>'St. Tropez Area'),
              tw_slugify('Vence Area')  => array('id'=>761, 'name'=>'Vence Area'),
            )
          ),
          tw_slugify('Paris')           => array('id'=>113, 'name'=>'Paris',          'region_4'=>array(
              tw_slugify('1er Arrondissement')  => array('id'=>1679, 'name'=>'1er Arrondissement'),
              tw_slugify('2e Arrondissement')  => array('id'=>557, 'name'=>'2e Arrondissement'),
              tw_slugify('3e Arrondissement')  => array('id'=>1435, 'name'=>'3e Arrondissement'),
              tw_slugify('4e Arrondissement')  => array('id'=>1436, 'name'=>'4e Arrondissement'),
              tw_slugify('5e Arrondissement')  => array('id'=>1677, 'name'=>'5e Arrondissement'),
              tw_slugify('6e Arrondissement')  => array('id'=>1002, 'name'=>'6e Arrondissement'),
              tw_slugify('7e Arrondissement')  => array('id'=>1150, 'name'=>'7e Arrondissement'),
              tw_slugify('8e Arrondissement')  => array('id'=>993, 'name'=>'8e Arrondissement'),
              tw_slugify('14e Arrondissement')  => array('id'=>1459, 'name'=>'14e Arrondissement'),
              tw_slugify('15e Arrondissement')  => array('id'=>1487, 'name'=>'15e Arrondissement'),
              tw_slugify('16e Arrondissement')  => array('id'=>1149, 'name'=>'16e Arrondissement'),
              tw_slugify('17e Arrondissement')  => array('id'=>1432, 'name'=>'17e Arrondissement'),
            )
          ),
          tw_slugify('Provence')        => array('id'=>89, 'name'=>'Provence',        'region_4'=>array(
              tw_slugify('Aix-en-Provence Area')  => array('id'=>739, 'name'=>'Aix-en-Provence Area'),
              tw_slugify('Alpilles Area')  => array('id'=>742, 'name'=>'Alpilles Area'),
              tw_slugify('Arles Area')  => array('id'=>1389, 'name'=>'Arles Area'),
              tw_slugify('Avignon Area')  => array('id'=>744, 'name'=>'Avignon Area'),
              tw_slugify('Luberon Area')  => array('id'=>740, 'name'=>'Luberon Area'),
              tw_slugify('Orange Area')  => array('id'=>1689, 'name'=>'Orange Area'),
              tw_slugify('St Remy')  => array('id'=>1282, 'name'=>'St Remy'),
              tw_slugify('Uzes Area')  => array('id'=>1259, 'name'=>'Uzes Area'),
              tw_slugify('Ventoux Area')  => array('id'=>741, 'name'=>'Ventoux Area'),
            )
          ),
        )
      ),
      tw_slugify('Greece')       => array('id'=>11, 'name'=>'Greece', 'region_3' => array(
          tw_slugify('Corfu')   => array('id'=>143, 'name'=>'Corfu',  'region_4'=>array(
              tw_slugify('Agios Stefanos')  => array('id'=>1652, 'name'=>'Agios Stefanos'),
              tw_slugify('Dassia')  => array('id'=>1691, 'name'=>'Dassia'),
              tw_slugify('Kassiopi Bay')  => array('id'=>1650, 'name'=>'Kassiopi Bay'),
              tw_slugify('Kentroma')  => array('id'=>1651, 'name'=>'Kentroma'),
              tw_slugify('Viros')  => array('id'=>1653, 'name'=>'Viros'),
            )
          ),
          tw_slugify('Crete')   => array('id'=>127, 'name'=>'Crete',  'region_4'=>array(
              tw_slugify('Almirida')  => array('id'=>1280, 'name'=>'Almirida'),
              tw_slugify('Chania')  => array('id'=>873, 'name'=>'Chania'),
              tw_slugify('Elounda')  => array('id'=>617, 'name'=>'Elounda'),
              tw_slugify('Gavalochori')  => array('id'=>1356, 'name'=>'Gavalochori'),
              tw_slugify('Maroulas')  => array('id'=>1661, 'name'=>'Maroulas'),
            )
          ),
          tw_slugify('Mykonos') => array('id'=>70,  'name'=>'Mykonos','region_4'=>array(
              tw_slugify('Agio Sostis')  => array('id'=>286, 'name'=>'Agio Sostis'),
              tw_slugify('Agios Ioannis')  => array('id'=>283, 'name'=>'Agios Ioannis'),
              tw_slugify('Agios Lazaros')  => array('id'=>846, 'name'=>'Agios Lazaros'),
              tw_slugify('Agrari')  => array('id'=>287, 'name'=>'Agrari'),
              tw_slugify('Aleomandra')  => array('id'=>282, 'name'=>'Aleomandra'),
              tw_slugify('Costa Ilios')  => array('id'=>292, 'name'=>'Costa Ilios'),
              tw_slugify('Diafkotis')  => array('id'=>291, 'name'=>'Diafkotis'),
              tw_slugify('Elia')  => array('id'=>1659, 'name'=>'Elia'),
              tw_slugify('Fanari')  => array('id'=>1043, 'name'=>'Fanari'),
              tw_slugify('Ftelia')  => array('id'=>863, 'name'=>'Ftelia'),
              tw_slugify('Houlakia')  => array('id'=>285, 'name'=>'Houlakia'),
              tw_slugify('Kalafatis')  => array('id'=>1311, 'name'=>'Kalafatis'),
              tw_slugify('Kanalia')  => array('id'=>800, 'name'=>'Kanalia'),
              tw_slugify('Lia Beach')  => array('id'=>402, 'name'=>'Lia Beach'),
              tw_slugify('Megali Ammos')  => array('id'=>567, 'name'=>'Megali Ammos'),
              tw_slugify('Mykonos Town')  => array('id'=>650, 'name'=>'Mykonos Town'),
              tw_slugify('Panormos')  => array('id'=>1275, 'name'=>'Panormos'),
              tw_slugify('Platis Gialos')  => array('id'=>290, 'name'=>'Platis Gialos'),
              tw_slugify('Pouli')  => array('id'=>1042, 'name'=>'Pouli'),
              tw_slugify('Pyrgi')  => array('id'=>1274, 'name'=>'Pyrgi'),
              tw_slugify('Super Paradise')  => array('id'=>1045, 'name'=>'Super Paradise'),
              tw_slugify('Tigani')  => array('id'=>496, 'name'=>'Tigani'),
            )
          ),
          tw_slugify('Paros')   => array('id'=>105, 'name'=>'Paros',  'region_4'=>array(
              tw_slugify('Agia Eirini')  => array('id'=>1657, 'name'=>'Agia Eirini'),
              tw_slugify('Agkeria')  => array('id'=>1693, 'name'=>'Agkeria'),
              tw_slugify('Aliki')  => array('id'=>1658, 'name'=>'Aliki'),
              tw_slugify('Ambelas')  => array('id'=>1358, 'name'=>'Ambelas'),
              tw_slugify('Drios')  => array('id'=>1372, 'name'=>'Drios'),
              tw_slugify('Kostos')  => array('id'=>1694, 'name'=>'Kostos'),
              tw_slugify('Makria Miti')  => array('id'=>1656, 'name'=>'Makria Miti'),
              tw_slugify('Parikia')  => array('id'=>506, 'name'=>'Parikia'),
              tw_slugify('Santa Maria')  => array('id'=>1354, 'name'=>'Santa Maria'),
            )
          ),
          tw_slugify('Santorini')   => array('id'=>97, 'name'=>'Santorini',  'region_4'=>array(
              tw_slugify('Agia Paraskevi')  => array('id'=>1500, 'name'=>'Agia Paraskevi'),
              tw_slugify('Akrotiri')  => array('id'=>1499, 'name'=>'Akrotiri'),
              tw_slugify('Fira')  => array('id'=>403, 'name'=>'Fira'),
              tw_slugify('Imerovigli')  => array('id'=>404, 'name'=>'Imerovigli'),
              tw_slugify('Megalochori')  => array('id'=>599, 'name'=>'Megalochori'),
              tw_slugify('Pyrgos')  => array('id'=>606, 'name'=>'Pyrgos'),
              tw_slugify('Vourvoulos')  => array('id'=>1322, 'name'=>'Vourvoulos'),
            )
          ),
          tw_slugify('Zakynthos')   => array('id'=>120, 'name'=>'Zakynthos',  'region_4'=>array(
              tw_slugify('Agios Nikolaos')  => array('id'=>1186, 'name'=>'Agios Nikolaos'),
              tw_slugify('Akrotiri')  => array('id'=>840, 'name'=>'Akrotiri'),
              tw_slugify('Tragaki')  => array('id'=>1007, 'name'=>'Tragaki'),
            )
          ),
        )
      ),
      tw_slugify('Italy')        => array('id'=>8,  'name'=>'Italy', 'region_3' => array(
          tw_slugify('Amalfi Coast')=> array('id'=>61,  'name'=>'Amalfi Coast', 'region_4'=>array(
              tw_slugify('Amalfi')  => array('id'=>1139, 'name'=>'Amalfi'),
              tw_slugify('Capri')  => array('id'=>231, 'name'=>'Capri'),
              tw_slugify('Maiori')  => array('id'=>1336, 'name'=>'Maiori'),
              tw_slugify('Massa Lubrense')  => array('id'=>1138, 'name'=>'Massa Lubrense'),
              tw_slugify('Positano')  => array('id'=>1136, 'name'=>'Positano'),
              tw_slugify("Sant'Agata sui Due Golfi")  => array('id'=>1711, 'name'=>"Sant'Agata sui Due Golfi"),
              tw_slugify('Sorrento')  => array('id'=>1137, 'name'=>'Sorrento'),
            )
          ),
          tw_slugify('Lake Como')   => array('id'=>212, 'name'=>'Lake Como',    'region_4'=>array(
              tw_slugify('Argegno')  => array('id'=>1359, 'name'=>'Argegno'),
              tw_slugify('Bellagio')  => array('id'=>1338, 'name'=>'Bellagio'),
              tw_slugify('Civenna')  => array('id'=>1339, 'name'=>'Civenna'),
              tw_slugify('Como')  => array('id'=>1343, 'name'=>'Como'),
              tw_slugify('Lezzeno')  => array('id'=>1342, 'name'=>'Lezzeno'),
              tw_slugify('Vassena')  => array('id'=>1340, 'name'=>'Vassena'),
            )
          ),
          tw_slugify('Liguria')     => array('id'=>68,  'name'=>'Liguria',      'region_4'=>array(
              tw_slugify('Bordighera')  => array('id'=>1674, 'name'=>'Bordighera'),
            )
          ),
          tw_slugify('Puglia')      => array('id'=>103, 'name'=>'Puglia',       'region_4'=>array(
              tw_slugify('Bernalda')  => array('id'=>1706, 'name'=>'Bernalda'),
              tw_slugify('Brindisi Area')  => array('id'=>1126, 'name'=>'Brindisi Area'),
              tw_slugify('Casarano')  => array('id'=>1417, 'name'=>'Casarano'),
              tw_slugify('Castro')  => array('id'=>1420, 'name'=>'Castro'),
              tw_slugify('Cisternino')  => array('id'=>1418, 'name'=>'Cisternino'),
              tw_slugify('Manduria')  => array('id'=>1722, 'name'=>'Manduria'),
              tw_slugify('Mesagne')  => array('id'=>1441, 'name'=>'Mesagne'),
              tw_slugify('Ostuni Area')  => array('id'=>1128, 'name'=>'Ostuni Area'),
            )
          ),
          tw_slugify('Sardinia')    => array('id'=>63,  'name'=>'Sardinia',     'region_4'=>array(
              tw_slugify('Castelsardo Area')  => array('id'=>1709, 'name'=>'Castelsardo Area'),
              tw_slugify('Costa Paradisco')  => array('id'=>1705, 'name'=>'Costa Paradisco'),
              tw_slugify('Olbia Area')  => array('id'=>1118, 'name'=>'Olbia Area'),
              tw_slugify('Porto Cervo')  => array('id'=>1710, 'name'=>'Porto Cervo'),
              tw_slugify('Porto Rotondo')  => array('id'=>1291, 'name'=>'Porto Rotondo'),
            )
          ),
          tw_slugify('Sicily')      => array('id'=>62,  'name'=>'Sicily',       'region_4'=>array(
              tw_slugify('Castelvetrano')  => array('id'=>1698, 'name'=>'Castelvetrano'),
              tw_slugify('Catania Area')  => array('id'=>652, 'name'=>'Catania Area'),
              tw_slugify('Centuripe')  => array('id'=>1440, 'name'=>'Centuripe'),
              tw_slugify('Favignana')  => array('id'=>1712, 'name'=>'Favignana'),
              tw_slugify('Noto Area')  => array('id'=>502, 'name'=>'Noto Area'),
              tw_slugify('Selinunte')  => array('id'=>1713, 'name'=>'Selinunte'),
              tw_slugify('Siracusa Area')  => array('id'=>1132, 'name'=>'Siracusa Area'),
              tw_slugify('Trapani')  => array('id'=>1410, 'name'=>'Trapani'),
            )
          ),
          tw_slugify('Tuscany')     => array('id'=>54,  'name'=>'Tuscany',      'region_4'=>array(
              tw_slugify('Arezzo Area')  => array('id'=>245, 'name'=>'Arezzo Area'),
              tw_slugify('Chianti Area')  => array('id'=>241, 'name'=>'Chianti Area'),
              tw_slugify('Cortona')  => array('id'=>1324, 'name'=>'Cortona'),
              tw_slugify('Florence Area')  => array('id'=>224, 'name'=>'Florence Area'),
              tw_slugify('Grosseto Area')  => array('id'=>467, 'name'=>'Grosseto Area'),
              tw_slugify('Lucca Area')  => array('id'=>254, 'name'=>'Lucca Area'),
              tw_slugify('Montaione Area')  => array('id'=>1134, 'name'=>'Montaione Area'),
              tw_slugify('Montalcino Area')  => array('id'=>1033, 'name'=>'Montalcino Area'),
              tw_slugify('Montecatini Area')  => array('id'=>1224, 'name'=>'Montecatini Area'),
              tw_slugify('Montepulciano Area')  => array('id'=>1285, 'name'=>'Montepulciano Area'),
              tw_slugify('Pisa Area')  => array('id'=>236, 'name'=>'Pisa Area'),
              tw_slugify('Siena Area')  => array('id'=>249, 'name'=>'Siena Area'),
              tw_slugify("Val D'Orcia")  => array('id'=>1307, 'name'=>"Val D'Orcia"),
            )
          ),
          tw_slugify('Umbria')      => array('id'=>55,  'name'=>'Umbria',       'region_4'=>array(
              tw_slugify('Assisi Area')  => array('id'=>612, 'name'=>'Assisi Area'),
              tw_slugify('Castello di Reschio')  => array('id'=>1294, 'name'=>'Castello di Reschio'),
              tw_slugify('Orvieto Area')  => array('id'=>644, 'name'=>'Orvieto Area'),
              tw_slugify('Perugia Area')  => array('id'=>468, 'name'=>'Perugia Area'),
              tw_slugify('Terni Area')  => array('id'=>1121, 'name'=>'Terni Area'),
              tw_slugify('Todi Area')  => array('id'=>566, 'name'=>'Todi Area'),
            )
          ),
        )
      ),
      tw_slugify('Portugal')     => array('id'=>13, 'name'=>'Portugal', 'region_3' => array(
          tw_slugify('Algarve')           => array('id'=>73,  'name'=>'Algarve',          'region_4'=>array(
              tw_slugify('Almancil')  => array('id'=>528, 'name'=>'Almancil'),
              tw_slugify('Lagos')  => array('id'=>1397, 'name'=>'Lagos'),
              tw_slugify('Quinta do Lago')  => array('id'=>321, 'name'=>'Quinta do Lago'),
            )
          ),
          tw_slugify('Lisbon Area')       => array('id'=>218, 'name'=>'Lisbon Area',      'region_4'=>array(
              tw_slugify('Aroeira')  => array('id'=>1403, 'name'=>'Aroeira'),
              tw_slugify('Serra da Arrabida')  => array('id'=>1391, 'name'=>'Serra da Arrabida'),
              tw_slugify('Sintra')  => array('id'=>1392, 'name'=>'Sintra'),
            )
          ),
          tw_slugify('Northern Portugal') => array('id'=>229, 'name'=>'Northern Portugal','region_4'=>array(
              tw_slugify('Douro Valley')  => array('id'=>1460, 'name'=>'Douro Valley'),
              tw_slugify('Minho')  => array('id'=>1461, 'name'=>'Minho'),
            )
          ),
        )
      ),
      tw_slugify('Spain')        => array('id'=>12, 'name'=>'Spain', 'region_3' => array(
          tw_slugify('Andalucia')     => array('id'=>153, 'name'=>'Andalucia',    'region_4'=>array(
              tw_slugify('Ronda')  => array('id'=>1290, 'name'=>'Ronda'),
            )
          ),
          tw_slugify('Barcelona')     => array('id'=>190, 'name'=>'Barcelona',    'region_4'=>array(
              tw_slugify('Barcelona City')  => array('id'=>1201, 'name'=>'Barcelona City'),
              tw_slugify('Castelltercol')  => array('id'=>1187, 'name'=>'Castelltercol'),
              tw_slugify('Sitges')  => array('id'=>1175, 'name'=>'Sitges'),
            )
          ),
          tw_slugify('Costa Brava')   => array('id'=>189, 'name'=>'Costa Brava',  'region_4'=>array(
              tw_slugify('Begur')  => array('id'=>1196, 'name'=>'Begur'),
              tw_slugify('Besalu')  => array('id'=>1180, 'name'=>'Besalu'),
              tw_slugify('Cadaques')  => array('id'=>1331, 'name'=>'Cadaques'),
              tw_slugify('Girona')  => array('id'=>1179, 'name'=>'Girona'),
              tw_slugify('La Bisbal')  => array('id'=>1197, 'name'=>'La Bisbal'),
              tw_slugify('Palafrugell')  => array('id'=>1442, 'name'=>'Palafrugell'),
              tw_slugify('Sant Mori')  => array('id'=>1183, 'name'=>'Sant Mori'),
            )
          ),
          tw_slugify('Costa del Sol') => array('id'=>72,  'name'=>'Costa del Sol','region_4'=>array(
              tw_slugify('Malaga')  => array('id'=>1474, 'name'=>'Malaga'),
              tw_slugify('Marbella')  => array('id'=>1473, 'name'=>'Marbella'),
            )
          ),
          tw_slugify('Ibiza')         => array('id'=>192, 'name'=>'Ibiza',        'region_4'=>array(
              tw_slugify('Cala Conta')  => array('id'=>1695, 'name'=>'Cala Conta'),
              tw_slugify('Cala Jondal')  => array('id'=>1696, 'name'=>'Cala Jondal'),
              tw_slugify('Cala Mastella')  => array('id'=>1697, 'name'=>'Cala Mastella'),
              tw_slugify('Cala Moli')  => array('id'=>1666, 'name'=>'Cala Moli'),
              tw_slugify('Cala Salada')  => array('id'=>1687, 'name'=>'Cala Salada'),
              tw_slugify('Cala Vadella')  => array('id'=>1540, 'name'=>'Cala Vadella'),
              tw_slugify('Can Pep Simo')  => array('id'=>1688, 'name'=>'Can Pep Simo'),
              tw_slugify('Can Teresita')  => array('id'=>1542, 'name'=>'Can Teresita'),
              tw_slugify('Es Cubells')  => array('id'=>1662, 'name'=>'Es Cubells'),
              tw_slugify('Ibiza')  => array('id'=>1209, 'name'=>'Ibiza'),
              tw_slugify('Roca Llisa')  => array('id'=>1704, 'name'=>'Roca Llisa'),
              tw_slugify('Sa Caleta')  => array('id'=>1663, 'name'=>'Sa Caleta'),
              tw_slugify('San Agustin')  => array('id'=>1633, 'name'=>'San Agustin'),
              tw_slugify('San Jose')  => array('id'=>1665, 'name'=>'San Jose'),
              tw_slugify('Sant Antoni de Portmany')  => array('id'=>1668, 'name'=>'Sant Antoni de Portmany'),
              tw_slugify('Santa Eularia des Riu')  => array('id'=>1667, 'name'=>'Santa Eularia des Riu'),
            )
          ),
          tw_slugify('Mallorca')      => array('id'=>108, 'name'=>'Mallorca',     'region_4'=>array(
              tw_slugify('Andratx')  => array('id'=>538, 'name'=>'Andratx'),
              tw_slugify('Bendinat')  => array('id'=>1530, 'name'=>'Bendinat'),
              tw_slugify('Binissalem')  => array('id'=>1531, 'name'=>'Binissalem'),
              tw_slugify('Cala Vinyes')  => array('id'=>1535, 'name'=>'Cala Vinyes'),
              tw_slugify('Deia')  => array('id'=>1644, 'name'=>'Deia'),
              tw_slugify('Pollensa')  => array('id'=>549, 'name'=>'Pollensa'),
              tw_slugify('Port de Pollensa')  => array('id'=>553, 'name'=>'Port de Pollensa'),
              tw_slugify('Santanyi')  => array('id'=>1532, 'name'=>'Santanyi'),
              tw_slugify('Soller')  => array('id'=>1495, 'name'=>'Soller'),
              tw_slugify('Son Vida')  => array('id'=>1536, 'name'=>'Son Vida'),
              tw_slugify('Valldemossa Urbanization George Sand')  => array('id'=>1533, 'name'=>'Valldemossa Urbanization George Sand'),
            )
          ),
        )
      ),
      tw_slugify('Switzerland')  => array('id'=>16, 'name'=>'Switzerland', 'region_3' => array(
          tw_slugify('Swiss Alps')  => array('id'=>88, 'name'=>'Swiss Alps', 'region_4'=>array(
              tw_slugify('Gstaad')  => array('id'=>1379, 'name'=>'Gstaad'),
              tw_slugify('Saas Fee')  => array('id'=>1378, 'name'=>'Saas Fee'),
              tw_slugify('Verbier')  => array('id'=>1377, 'name'=>'Verbier'),
              tw_slugify('Zermatt')  => array('id'=>352, 'name'=>'Zermatt'),
            )
          ),
        )
      ),
    ),
  );

$north_america = array(
    'id'=> 1,
    'name' =>'North America',
    'region_2' => array(
      tw_slugify('Canada')          => array('id'=>14, 'name'=>'Canada', 'region_3' => array(
          tw_slugify('Mont Tremblant')  => array('id'=>128, 'name'=>'Mont Tremblant', 'region_4'=>array(
              tw_slugify('Lac Mercier')  => array('id'=>1702, 'name'=>'Lac Mercier'),
              tw_slugify('Mont Tremblant Station')  => array('id'=>619, 'name'=>'Mont Tremblant Station'),
            )
          ),
          tw_slugify('Whistler (BC)')   => array('id'=>74, 'name'=>'Whistler (BC)',   'region_4'=>array(
              tw_slugify('Creekside')  => array('id'=>818, 'name'=>'Creekside'),
              tw_slugify('Whistler')  => array('id'=>325, 'name'=>'Whistler'),
            )
          ),
        )
      ),
      tw_slugify('Caribbean')       => array('id'=>5,  'name'=>'Caribbean', 'region_3' => array(
          tw_slugify('Anguilla')            => array('id'=>9, 'name'=>'Anguilla', 'region_4'=>array(
              tw_slugify('Barnes Bay')  => array('id'=>54, 'name'=>'Barnes Bay'),
              tw_slugify('Black Garden Bay')  => array('id'=>365, 'name'=>'Black Garden Bay'),
              tw_slugify('Blowing Point')  => array('id'=>59, 'name'=>'Blowing Point'),
              tw_slugify('Cove Bay')  => array('id'=>1277, 'name'=>'Cove Bay'),
              tw_slugify('Crocus Bay')  => array('id'=>1609, 'name'=>'Crocus Bay'),
              tw_slugify('Cul De Sac')  => array('id'=>677, 'name'=>'Cul De Sac'),
              tw_slugify('Dropsey Bay')  => array('id'=>1035, 'name'=>'Dropsey Bay'),
              tw_slugify('Forest Bay')  => array('id'=>844, 'name'=>'Forest Bay'),
              tw_slugify('Island Harbor')  => array('id'=>60, 'name'=>'Island Harbor'),
              tw_slugify('Limestone Bay')  => array('id'=>1006, 'name'=>'Limestone Bay'),
              tw_slugify('Little Bay')  => array('id'=>1310, 'name'=>'Little Bay'),
              tw_slugify('Little Harbor')  => array('id'=>364, 'name'=>'Little Harbor'),
              tw_slugify('Lockrum Estate')  => array('id'=>58, 'name'=>'Lockrum Estate'),
              tw_slugify('Long Bay')  => array('id'=>55, 'name'=>'Long Bay'),
              tw_slugify('Long Path')  => array('id'=>1335, 'name'=>'Long Path'),
              tw_slugify('Maundays Bay')  => array('id'=>841, 'name'=>'Maundays Bay'),
              tw_slugify('Rendezvous Bay')  => array('id'=>53, 'name'=>'Rendezvous Bay'),
              tw_slugify('Sandy Hill')  => array('id'=>417, 'name'=>'Sandy Hill'),
              tw_slugify('Shoal Bay East')  => array('id'=>51, 'name'=>'Shoal Bay East'),
              tw_slugify('Shoal Bay West')  => array('id'=>52, 'name'=>'Shoal Bay West'),
            )
          ),
          tw_slugify('Bahamas')             => array('id'=>29, 'name'=>'Bahamas', 'region_4'=>array(
              tw_slugify('Berry Islands')  => array('id'=>295, 'name'=>'Berry Islands'),
              tw_slugify('Eleuthera Island')  => array('id'=>390, 'name'=>'Eleuthera Island'),
              tw_slugify('Exuma Cays')  => array('id'=>337, 'name'=>'Exuma Cays'),
              tw_slugify('Grand Bahama Island')  => array('id'=>67, 'name'=>'Grand Bahama Island'),
              tw_slugify('Harbor Island')  => array('id'=>388, 'name'=>'Harbor Island'),
              tw_slugify('Lyford Cay')  => array('id'=>386, 'name'=>'Lyford Cay'),
              tw_slugify('New Providence Island')  => array('id'=>65, 'name'=>'New Providence Island'),
              tw_slugify('Paradise Island')  => array('id'=>1350, 'name'=>'Paradise Island'),
            )
          ),
          tw_slugify('Barbados')            => array('id'=>10, 'name'=>'Barbados', 'region_4'=>array(
              tw_slugify('Church Point')  => array('id'=>1325, 'name'=>'Church Point'),
              tw_slugify('Derricks')  => array('id'=>14, 'name'=>'Derricks'),
              tw_slugify('Fitts Village')  => array('id'=>16, 'name'=>'Fitts Village'),
              tw_slugify('Fustic Village')  => array('id'=>19, 'name'=>'Fustic Village'),
              tw_slugify('Gibbs Bay')  => array('id'=>4, 'name'=>'Gibbs Bay'),
              tw_slugify('Gibbs Beach')  => array('id'=>18, 'name'=>'Gibbs Beach'),
              tw_slugify('Mullins Bay')  => array('id'=>3, 'name'=>'Mullins Bay'),
              tw_slugify('Paynes Bay')  => array('id'=>7, 'name'=>'Paynes Bay'),
              tw_slugify('Polo Ridge')  => array('id'=>31, 'name'=>'Polo Ridge'),
              tw_slugify('Porters')  => array('id'=>13, 'name'=>'Porters'),
              tw_slugify('Prospect')  => array('id'=>1203, 'name'=>'Prospect'),
              tw_slugify("Reed's Bay")  => array('id'=>5, 'name'=>"Reed's Bay"),
              tw_slugify('Royal Westmoreland')  => array('id'=>9, 'name'=>'Royal Westmoreland'),
              tw_slugify('Sandy Lane')  => array('id'=>1, 'name'=>'Sandy Lane'),
              tw_slugify('Speightstown')  => array('id'=>8, 'name'=>'Speightstown'),
              tw_slugify('St. James')  => array('id'=>12, 'name'=>'St. James'),
              tw_slugify('St. Peter')  => array('id'=>11, 'name'=>'St. Peter'),
              tw_slugify('Sugar Hill Resort')  => array('id'=>29, 'name'=>'Sugar Hill Resort'),
              tw_slugify('The Garden')  => array('id'=>17, 'name'=>'The Garden'),
              tw_slugify('Turtle Beach')  => array('id'=>24, 'name'=>'Turtle Beach'),
              tw_slugify('Westmoreland')  => array('id'=>23, 'name'=>'Westmoreland'),
            )
          ),
          tw_slugify('Bonaire')             => array('id'=>220, 'name'=>'Bonaire', 'region_4'=>array(
              tw_slugify('Kralendijk')  => array('id'=>1408, 'name'=>'Kralendijk'),
            )
          ),
          tw_slugify('Dominican Republic')  => array('id'=>30, 'name'=>'Dominican Republic', 'region_4'=>array(
              tw_slugify('Cabarete')  => array('id'=>642, 'name'=>'Cabarete'),
              tw_slugify('Cabrera')  => array('id'=>68, 'name'=>'Cabrera'),
              tw_slugify('Casa De Campo')  => array('id'=>69, 'name'=>'Casa De Campo'),
              tw_slugify('Playa Grande')  => array('id'=>1524, 'name'=>'Playa Grande'),
              tw_slugify('Punta Cana')  => array('id'=>351, 'name'=>'Punta Cana'),
            )
          ),
          tw_slugify('Grenada')             => array('id'=>43, 'name'=>'Grenada', 'region_4'=>array(
              tw_slugify('Calivigny')  => array('id'=>198, 'name'=>'Calivigny'),
            )
          ),
          tw_slugify('Jamaica')             => array('id'=>32, 'name'=>'Jamaica', 'region_4'=>array(
              tw_slugify('Discovery Bay')  => array('id'=>85, 'name'=>'Discovery Bay'),
              tw_slugify('Mammee Bay')  => array('id'=>83, 'name'=>'Mammee Bay'),
              tw_slugify('Montego Bay')  => array('id'=>81, 'name'=>'Montego Bay'),
              tw_slugify('Negril')  => array('id'=>87, 'name'=>'Negril'),
              tw_slugify('Ocho Rios')  => array('id'=>79, 'name'=>'Ocho Rios'),
              tw_slugify('Oracabessa')  => array('id'=>88, 'name'=>'Oracabessa'),
              tw_slugify('Runaway Bay')  => array('id'=>86, 'name'=>'Runaway Bay'),
              tw_slugify('Tryall Club')  => array('id'=>1613, 'name'=>'Tryall Club'),
              tw_slugify('Whitehouse')  => array('id'=>1283, 'name'=>'Whitehouse'),
            )
          ),
          tw_slugify('Puerto Rico')         => array('id'=>134, 'name'=>'Puerto Rico', 'region_4'=>array(
              tw_slugify('Dorado Beach')  => array('id'=>1520, 'name'=>'Dorado Beach'),
              tw_slugify('Rio Grande')  => array('id'=>1518, 'name'=>'Rio Grande'),
            )
          ),
          tw_slugify('St. Barts')           => array('id'=>42, 'name'=>'St. Barts', 'region_4'=>array(
              tw_slugify('Anse des Cayes')  => array('id'=>174, 'name'=>'Anse des Cayes'),
              tw_slugify('Camaruche')  => array('id'=>192, 'name'=>'Camaruche'),
              tw_slugify('Colombier')  => array('id'=>186, 'name'=>'Colombier'),
              tw_slugify('Deve')  => array('id'=>193, 'name'=>'Deve'),
              tw_slugify('Flamands Beach')  => array('id'=>1522, 'name'=>'Flamands Beach'),
              tw_slugify('Flamands Hillside')  => array('id'=>181, 'name'=>'Flamands Hillside'),
              tw_slugify('Gouverneur')  => array('id'=>187, 'name'=>'Gouverneur'),
              tw_slugify('Grand Cul de Sac')  => array('id'=>176, 'name'=>'Grand Cul de Sac'),
              tw_slugify('Grand Fond')  => array('id'=>194, 'name'=>'Grand Fond'),
              tw_slugify('Gustavia')  => array('id'=>182, 'name'=>'Gustavia'),
              tw_slugify('Lorient Beach')  => array('id'=>1523, 'name'=>'Lorient Beach'),
              tw_slugify('Lorient Hillside')  => array('id'=>188, 'name'=>'Lorient Hillside'),
              tw_slugify('Lurin')  => array('id'=>177, 'name'=>'Lurin'),
              tw_slugify('Marigot')  => array('id'=>183, 'name'=>'Marigot'),
              tw_slugify('Mont Jean')  => array('id'=>189, 'name'=>'Mont Jean'),
              tw_slugify('Petit Cul de Sac')  => array('id'=>178, 'name'=>'Petit Cul de Sac'),
              tw_slugify('Petite Saline')  => array('id'=>195, 'name'=>'Petite Saline'),
              tw_slugify('Pointe Milou')  => array('id'=>184, 'name'=>'Pointe Milou'),
              tw_slugify('Saint Jean')  => array('id'=>190, 'name'=>'Saint Jean'),
              tw_slugify('Saline')  => array('id'=>1276, 'name'=>'Saline'),
              tw_slugify('Toiny')  => array('id'=>185, 'name'=>'Toiny'),
              tw_slugify('Vitet')  => array('id'=>191, 'name'=>'Vitet'),
            )
          ),
          tw_slugify('St. Croix')           => array('id'=>36, 'name'=>'St. Croix', 'region_4'=>array(
              tw_slugify('Buccaneer Golf Course')  => array('id'=>316, 'name'=>'Buccaneer Golf Course'),
              tw_slugify('Cane Bay')  => array('id'=>112, 'name'=>'Cane Bay'),
              tw_slugify('Christiansted')  => array('id'=>110, 'name'=>'Christiansted'),
              tw_slugify('Columbus Landing')  => array('id'=>307, 'name'=>'Columbus Landing'),
              tw_slugify('East End')  => array('id'=>314, 'name'=>'East End'),
              tw_slugify('Green Cay')  => array('id'=>1265, 'name'=>'Green Cay'),
              tw_slugify('Judiths Fancy')  => array('id'=>302, 'name'=>'Judiths Fancy'),
              tw_slugify('Seven Hills')  => array('id'=>114, 'name'=>'Seven Hills'),
            )
          ),
          tw_slugify('St. John')            => array('id'=>37, 'name'=>'St. John', 'region_4'=>array(
              tw_slugify('Battery Hill')  => array('id'=>396, 'name'=>'Battery Hill'),
              tw_slugify('Bordeaux Mountain')  => array('id'=>997, 'name'=>'Bordeaux Mountain'),
              tw_slugify('Caneel Hill')  => array('id'=>1292, 'name'=>'Caneel Hill'),
              tw_slugify('Catherineberg')  => array('id'=>127, 'name'=>'Catherineberg'),
              tw_slugify('Chocolate Hole')  => array('id'=>120, 'name'=>'Chocolate Hole'),
              tw_slugify('Coral Bay')  => array('id'=>398, 'name'=>'Coral Bay'),
              tw_slugify('Cruz Bay')  => array('id'=>596, 'name'=>'Cruz Bay'),
              tw_slugify('Gift Hill')  => array('id'=>122, 'name'=>'Gift Hill'),
              tw_slugify('Great Cruz Bay')  => array('id'=>118, 'name'=>'Great Cruz Bay'),
              tw_slugify('Hart Bay')  => array('id'=>406, 'name'=>'Hart Bay'),
              tw_slugify('Haulover Bay')  => array('id'=>126, 'name'=>'Haulover Bay'),
              tw_slugify('Klein Bay')  => array('id'=>420, 'name'=>'Klein Bay'),
              tw_slugify('Northshore')  => array('id'=>124, 'name'=>'Northshore'),
              tw_slugify('Peter Bay')  => array('id'=>119, 'name'=>'Peter Bay'),
              tw_slugify('Rendez Vous Bay')  => array('id'=>123, 'name'=>'Rendez Vous Bay'),
              tw_slugify('Upper Carolina')  => array('id'=>125, 'name'=>'Upper Carolina'),
              tw_slugify('Virgin Grand')  => array('id'=>1319, 'name'=>'Virgin Grand'),
            )
          ),
          tw_slugify('St. Lucia')           => array('id'=>27, 'name'=>'St. Lucia', 'region_4'=>array(
              tw_slugify("Bois D'Orange")  => array('id'=>49, 'name'=>"Bois D'Orange"),
              tw_slugify('Cap Estate')  => array('id'=>47, 'name'=>'Cap Estate'),
              tw_slugify('Castries')  => array('id'=>1018, 'name'=>'Castries'),
              tw_slugify('Gros Islet')  => array('id'=>358, 'name'=>'Gros Islet'),
              tw_slugify('Marigot Bay')  => array('id'=>718, 'name'=>'Marigot Bay'),
              tw_slugify('Soufriere')  => array('id'=>48, 'name'=>'Soufriere'),
              tw_slugify('Vigie')  => array('id'=>416, 'name'=>'Vigie'),
            )
          ),
          tw_slugify('St. Martin')          => array('id'=>26, 'name'=>'St. Martin', 'region_4'=>array(
              tw_slugify('Cupecoy')  => array('id'=>44, 'name'=>'Cupecoy'),
              tw_slugify('Grand Case')  => array('id'=>39, 'name'=>'Grand Case'),
              tw_slugify('Happy Bay')  => array('id'=>788, 'name'=>'Happy Bay'),
              tw_slugify('Terres Basses - Baie Longue')  => array('id'=>798, 'name'=>'Terres Basses - Baie Longue'),
              tw_slugify('Terres Basses - Baie Rouge')  => array('id'=>34, 'name'=>'Terres Basses - Baie Rouge'),
              tw_slugify('Terres Basses - Hillside')  => array('id'=>40, 'name'=>'Terres Basses - Hillside'),
              tw_slugify('Terres Basses - Plum Bay')  => array('id'=>36, 'name'=>'Terres Basses - Plum Bay'),
            )
          ),
          tw_slugify('St. Thomas')          => array('id'=>35, 'name'=>'St. Thomas', 'region_4'=>array(
              tw_slugify('Bakkero')  => array('id'=>107, 'name'=>'Bakkero'),
              tw_slugify('East End')  => array('id'=>106, 'name'=>'East End'),
              tw_slugify('Estate Bakkeroe')  => array('id'=>1580, 'name'=>'Estate Bakkeroe'),
              tw_slugify('Flag Hill')  => array('id'=>108, 'name'=>'Flag Hill'),
              tw_slugify('Mahogany Run Golf Course')  => array('id'=>1581, 'name'=>'Mahogany Run Golf Course'),
              tw_slugify('Northside')  => array('id'=>367, 'name'=>'Northside'),
              tw_slugify('Peterborg')  => array('id'=>99, 'name'=>'Peterborg'),
              tw_slugify('Skyline Drive')  => array('id'=>98, 'name'=>'Skyline Drive'),
            )
          ),
          tw_slugify('Tortola')             => array('id'=>39, 'name'=>'Tortola', 'region_4'=>array(
              tw_slugify('Apple Bay')  => array('id'=>855, 'name'=>'Apple Bay'),
              tw_slugify('Beef Island')  => array('id'=>134, 'name'=>'Beef Island'),
              tw_slugify('Belmont')  => array('id'=>136, 'name'=>'Belmont'),
              tw_slugify('Brewers Bay')  => array('id'=>1269, 'name'=>'Brewers Bay'),
              tw_slugify('Cooten Bay')  => array('id'=>1412, 'name'=>'Cooten Bay'),
              tw_slugify('Green Bank')  => array('id'=>137, 'name'=>'Green Bank'),
              tw_slugify('Havers Hill')  => array('id'=>139, 'name'=>'Havers Hill'),
              tw_slugify('Little Bay')  => array('id'=>138, 'name'=>'Little Bay'),
              tw_slugify('Long Bay')  => array('id'=>145, 'name'=>'Long Bay'),
              tw_slugify("Smuggler's Cove")  => array('id'=>1717, 'name'=>"Smuggler's Cove"),
              tw_slugify('Trunk Bay')  => array('id'=>1263, 'name'=>'Trunk Bay'),
            )
          ),
          tw_slugify('Turks and Caicos')    => array('id'=>34, 'name'=>'Turks and Caicos', 'region_4'=>array(
              tw_slugify('Babalua Beach')  => array('id'=>1387, 'name'=>'Babalua Beach'),
              tw_slugify('Blue Mountain')  => array('id'=>704, 'name'=>'Blue Mountain'),
              tw_slugify('Chalk Sound')  => array('id'=>1046, 'name'=>'Chalk Sound'),
              tw_slugify('Grace Bay')  => array('id'=>1017, 'name'=>'Grace Bay'),
              tw_slugify('Leeward')  => array('id'=>1157, 'name'=>'Leeward'),
              tw_slugify('Long Bay Beach')  => array('id'=>593, 'name'=>'Long Bay Beach'),
              tw_slugify('Ocean Drive')  => array('id'=>1163, 'name'=>'Ocean Drive'),
              tw_slugify('Ocean Point')  => array('id'=>1158, 'name'=>'Ocean Point'),
              tw_slugify('Parrot Cay')  => array('id'=>96, 'name'=>'Parrot Cay'),
              tw_slugify('Richmond Hills')  => array('id'=>1571, 'name'=>'Richmond Hills'),
              tw_slugify('Silly Creek')  => array('id'=>1156, 'name'=>'Silly Creek'),
              tw_slugify('Taylor Bay Beach')  => array('id'=>628, 'name'=>'Taylor Bay Beach'),
              tw_slugify('Thompson Cove')  => array('id'=>1165, 'name'=>'Thompson Cove'),
              tw_slugify('Turtle Tail')  => array('id'=>870, 'name'=>'Turtle Tail'),
            )
          ),
          tw_slugify('Virgin Gorda')        => array('id'=>38, 'name'=>'Virgin Gorda', 'region_4'=>array(
              tw_slugify('Crooks Bay')  => array('id'=>1346, 'name'=>'Crooks Bay'),
              tw_slugify('Little Trunk Bay')  => array('id'=>653, 'name'=>'Little Trunk Bay'),
              tw_slugify('Mahoe Bay')  => array('id'=>130, 'name'=>'Mahoe Bay'),
              tw_slugify('Nail Bay')  => array('id'=>133, 'name'=>'Nail Bay'),
              tw_slugify('Necker Island')  => array('id'=>338, 'name'=>'Necker Island'),
              tw_slugify('North Sound')  => array('id'=>1306, 'name'=>'North Sound'),
              tw_slugify('Oil Nut Bay')  => array('id'=>1576, 'name'=>'Oil Nut Bay'),
              tw_slugify('The Baths')  => array('id'=>131, 'name'=>'The Baths'),
              tw_slugify('Windy Hill')  => array('id'=>415, 'name'=>'Windy Hill'),
            )
          ),
        )
      ),
      tw_slugify('Central America') => array('id'=>6,  'name'=>'Central America', 'region_3' => array(
          tw_slugify('Belize')      => array('id'=>11, 'name'=>'Belize',     'region_4'=>array(
              tw_slugify('Ambergris Caye')  => array('id'=>297, 'name'=>'Ambergris Caye'),
              tw_slugify('Cayo Espanto')  => array('id'=>202, 'name'=>'Cayo Espanto'),
            )
          ),
          tw_slugify('Costa Rica')  => array('id'=>94, 'name'=>'Costa Rica', 'region_4'=>array(
              tw_slugify('Cartago')  => array('id'=>1305, 'name'=>'Cartago'),
              tw_slugify('Cobano')  => array('id'=>1724, 'name'=>'Cobano'),
              tw_slugify('Dominical')  => array('id'=>382, 'name'=>'Dominical'),
              tw_slugify('Guanacaste')  => array('id'=>591, 'name'=>'Guanacaste'),
              tw_slugify('Los Suenos')  => array('id'=>1465, 'name'=>'Los Suenos'),
              tw_slugify('Manuel Antonio')  => array('id'=>383, 'name'=>'Manuel Antonio'),
              tw_slugify('Montezuma')  => array('id'=>1181, 'name'=>'Montezuma'),
              tw_slugify('Nosara')  => array('id'=>1299, 'name'=>'Nosara'),
              tw_slugify('Papagayo')  => array('id'=>381, 'name'=>'Papagayo'),
              tw_slugify('Playa Hermosa')  => array('id'=>1298, 'name'=>'Playa Hermosa'),
              tw_slugify('Playa Herradura')  => array('id'=>1326, 'name'=>'Playa Herradura'),
              tw_slugify('Santa Teresa')  => array('id'=>737, 'name'=>'Santa Teresa'),
              tw_slugify('Tango Mar')  => array('id'=>588, 'name'=>'Tango Mar'),
            )
          ),
        )
      ),
      tw_slugify('Hawaii')          => array('id'=>3,  'name'=>'Hawaii', 'region_3' => array(
          tw_slugify('Big Island')  => array('id'=>159, 'name'=>'Big Island', 'region_4'=>array(
              tw_slugify('Hualalai Resort')  => array('id'=>1235, 'name'=>'Hualalai Resort'),
              tw_slugify('Kohala Ranch')  => array('id'=>1237, 'name'=>'Kohala Ranch'),
              tw_slugify('Mauna Kea Resort')  => array('id'=>987, 'name'=>'Mauna Kea Resort'),
              tw_slugify('Mauna Lani Resort')  => array('id'=>986, 'name'=>'Mauna Lani Resort'),
              tw_slugify('Puako')  => array('id'=>1236, 'name'=>'Puako'),
              tw_slugify('Waikoloa Beach Resort')  => array('id'=>988, 'name'=>'Waikoloa Beach Resort'),
            )
          ),
          tw_slugify('Kauai')       => array('id'=>112, 'name'=>'Kauai',      'region_4'=>array(
              tw_slugify('Anini')  => array('id'=>780, 'name'=>'Anini'),
              tw_slugify('Haena')  => array('id'=>1370, 'name'=>'Haena'),
              tw_slugify('Hanalei')  => array('id'=>1369, 'name'=>'Hanalei'),
              tw_slugify('Kalihiwai')  => array('id'=>1371, 'name'=>'Kalihiwai'),
              tw_slugify('Kilauea')  => array('id'=>766, 'name'=>'Kilauea'),
            )
          ),
          tw_slugify('Maui')        => array('id'=>5,   'name'=>'Maui',       'region_4'=>array(
              tw_slugify("Ka'anapali")  => array('id'=>76, 'name'=>"Ka'anapali"),
              tw_slugify('Kapalua')  => array('id'=>77, 'name'=>'Kapalua'),
              tw_slugify('Kihei')  => array('id'=>727, 'name'=>'Kihei'),
              tw_slugify('Kula')  => array('id'=>558, 'name'=>'Kula'),
              tw_slugify('Lahaina')  => array('id'=>706, 'name'=>'Lahaina'),
              tw_slugify('Makena')  => array('id'=>75, 'name'=>'Makena'),
              tw_slugify('Napili')  => array('id'=>78, 'name'=>'Napili'),
              tw_slugify('North Shore')  => array('id'=>707, 'name'=>'North Shore'),
              tw_slugify('Wailea')  => array('id'=>73, 'name'=>'Wailea'),
            )
          ),
          tw_slugify('Oahu')        => array('id'=>6,   'name'=>'Oahu',       'region_4'=>array(
              tw_slugify('Aina Haina')  => array('id'=>1615, 'name'=>'Aina Haina'),
              tw_slugify('Diamond Head')  => array('id'=>860, 'name'=>'Diamond Head'),
              tw_slugify('Hawaii Kai')  => array('id'=>1220, 'name'=>'Hawaii Kai'),
              tw_slugify('Honolulu')  => array('id'=>1233, 'name'=>'Honolulu'),
              tw_slugify('Kahala')  => array('id'=>1219, 'name'=>'Kahala'),
              tw_slugify('Kailua')  => array('id'=>859, 'name'=>'Kailua'),
              tw_slugify('Ko Olina')  => array('id'=>1621, 'name'=>'Ko Olina'),
              tw_slugify('Lanikai')  => array('id'=>279, 'name'=>'Lanikai'),
              tw_slugify('Manoa Valley')  => array('id'=>1272, 'name'=>'Manoa Valley'),
              tw_slugify('North Shore')  => array('id'=>627, 'name'=>'North Shore'),
              tw_slugify('Waikiki')  => array('id'=>713, 'name'=>'Waikiki'),
            )
          ),
        )
      ),
      tw_slugify('Mexico')          => array('id'=>4,  'name'=>'Mexico', 'region_3' => array(
          tw_slugify('Cabo San Lucas')  => array('id'=>7,   'name'=>'Cabo San Lucas',  'region_4'=>array(
              tw_slugify('Cabo Bello')  => array('id'=>205, 'name'=>'Cabo Bello'),
              tw_slugify('Chileno Bay')  => array('id'=>308, 'name'=>'Chileno Bay'),
              tw_slugify('East Cape')  => array('id'=>503, 'name'=>'East Cape'),
              tw_slugify('Medano Beach')  => array('id'=>424, 'name'=>'Medano Beach'),
              tw_slugify('Palmilla')  => array('id'=>210, 'name'=>'Palmilla'),
              tw_slugify('Pedregal')  => array('id'=>203, 'name'=>'Pedregal'),
              tw_slugify('Puerto Los Cabos')  => array('id'=>995, 'name'=>'Puerto Los Cabos'),
              tw_slugify('Punta Ballena')  => array('id'=>395, 'name'=>'Punta Ballena'),
              tw_slugify('San Jose Del Cabo')  => array('id'=>695, 'name'=>'San Jose Del Cabo'),
              tw_slugify('Santa Carmela')  => array('id'=>300, 'name'=>'Santa Carmela'),
              tw_slugify('The Corridor - Blue Sea')  => array('id'=>1003, 'name'=>'The Corridor - Blue Sea'),
              tw_slugify('The Corridor - Cabo del Sol')  => array('id'=>694, 'name'=>'The Corridor - Cabo del Sol'),
              tw_slugify('The Corridor - Cerro Colorado')  => array('id'=>726, 'name'=>'The Corridor - Cerro Colorado'),
            )
          ),
          tw_slugify('Puerto Vallarta') => array('id'=>104, 'name'=>'Puerto Vallarta', 'region_4'=>array(
              tw_slugify('Alta Vista')  => array('id'=>974, 'name'=>'Alta Vista'),
              tw_slugify('Amapas')  => array('id'=>809, 'name'=>'Amapas'),
              tw_slugify('Bucerias')  => array('id'=>703, 'name'=>'Bucerias'),
              tw_slugify('Conchas Chinas')  => array('id'=>735, 'name'=>'Conchas Chinas'),
              tw_slugify('Hilltop')  => array('id'=>1550, 'name'=>'Hilltop'),
              tw_slugify('La Cruz')  => array('id'=>1238, 'name'=>'La Cruz'),
              tw_slugify('Mismaloya')  => array('id'=>702, 'name'=>'Mismaloya'),
              tw_slugify('Nuevo Vallarta')  => array('id'=>635, 'name'=>'Nuevo Vallarta'),
              tw_slugify('Punto del Burro')  => array('id'=>787, 'name'=>'Punto del Burro'),
              tw_slugify('Real Del Mar')  => array('id'=>1300, 'name'=>'Real Del Mar'),
              tw_slugify('South Zone')  => array('id'=>814, 'name'=>'South Zone'),
            )
          ),
          tw_slugify('Punta Mita')      => array('id'=>124, 'name'=>'Punta Mita',      'region_4'=>array(
              tw_slugify('El Banco')  => array('id'=>1315, 'name'=>'El Banco'),
              tw_slugify('Four Seasons')  => array('id'=>782, 'name'=>'Four Seasons'),
              tw_slugify('Hacienda de Mita')  => array('id'=>783, 'name'=>'Hacienda de Mita'),
              tw_slugify('Kupuri')  => array('id'=>1402, 'name'=>'Kupuri'),
              tw_slugify('La Punta Estates')  => array('id'=>1243, 'name'=>'La Punta Estates'),
              tw_slugify('La Seranata')  => array('id'=>1669, 'name'=>'La Seranata'),
              tw_slugify('Lagos Del Mar')  => array('id'=>1021, 'name'=>'Lagos Del Mar'),
              tw_slugify('Los Ranchos')  => array('id'=>784, 'name'=>'Los Ranchos'),
              tw_slugify('Los Veneros')  => array('id'=>1244, 'name'=>'Los Veneros'),
              tw_slugify('Pontoquito')  => array('id'=>1229, 'name'=>'Pontoquito'),
              tw_slugify('Punta Vista')  => array('id'=>1529, 'name'=>'Punta Vista'),
              tw_slugify('San Pancho')  => array('id'=>1568, 'name'=>'San Pancho'),
              tw_slugify('Signature Estates')  => array('id'=>1154, 'name'=>'Signature Estates'),
            )
          ),
          tw_slugify('Riviera Maya')    => array('id'=>44,  'name'=>'Riviera Maya',    'region_4'=>array(
              tw_slugify('Akumal')  => array('id'=>394, 'name'=>'Akumal'),
              tw_slugify('Cancun')  => array('id'=>839, 'name'=>'Cancun'),
              tw_slugify('Isla Mujeres')  => array('id'=>880, 'name'=>'Isla Mujeres'),
              tw_slugify('Maroma Beach')  => array('id'=>1526, 'name'=>'Maroma Beach'),
              tw_slugify('Playa Del Carmen')  => array('id'=>393, 'name'=>'Playa Del Carmen'),
              tw_slugify('Playa Paraiso')  => array('id'=>618, 'name'=>'Playa Paraiso'),
              tw_slugify('Playa Secreto')  => array('id'=>723, 'name'=>'Playa Secreto'),
              tw_slugify('Puerto Aventuras')  => array('id'=>357, 'name'=>'Puerto Aventuras'),
              tw_slugify('Puerto Morelos')  => array('id'=>949, 'name'=>'Puerto Morelos'),
              tw_slugify('Sian Kaan')  => array('id'=>711, 'name'=>'Sian Kaan'),
              tw_slugify('Soliman Bay')  => array('id'=>1211, 'name'=>'Soliman Bay'),
              tw_slugify('Tulum')  => array('id'=>1210, 'name'=>'Tulum'),
            )
          ),
        )
      ),
      tw_slugify('United States')   => array('id'=>1,  'name'=>'United States', 'region_3' => array(
          tw_slugify('California - Desert Cities')  => array('id'=>239, 'name'=>'California - Desert Cities',   'region_4'=>array(
              tw_slugify('Indian Wells')  => array('id'=>1588, 'name'=>'Indian Wells'),
              tw_slugify('Indio')  => array('id'=>1589, 'name'=>'Indio'),
              tw_slugify('La Quinta')  => array('id'=>1587, 'name'=>'La Quinta'),
              tw_slugify('Palm Desert')  => array('id'=>1701, 'name'=>'Palm Desert'),
              tw_slugify('Palm Springs')  => array('id'=>1585, 'name'=>'Palm Springs'),
            )
          ),
          tw_slugify('California - Lake Tahoe')     => array('id'=>241, 'name'=>'California - Lake Tahoe',      'region_4'=>array(
              tw_slugify('Lake Tahoe')  => array('id'=>1592, 'name'=>'Lake Tahoe'),
            )
          ),
          tw_slugify('California - Los Angeles')    => array('id'=>237, 'name'=>'California - Los Angeles',     'region_4'=>array(
              tw_slugify('Beach Cities & South Bay')  => array('id'=>1559, 'name'=>'Beach Cities & South Bay'),
              tw_slugify('Downtown LA')  => array('id'=>1560, 'name'=>'Downtown LA'),
              tw_slugify('Greater LA')  => array('id'=>1561, 'name'=>'Greater LA'),
              tw_slugify('Hollywood')  => array('id'=>1562, 'name'=>'Hollywood'),
              tw_slugify('Malibu')  => array('id'=>1564, 'name'=>'Malibu'),
              tw_slugify('Orange County')  => array('id'=>1565, 'name'=>'Orange County'),
              tw_slugify('Platinum Triangle')  => array('id'=>1566, 'name'=>'Platinum Triangle'),
              tw_slugify('Santa Monica')  => array('id'=>1567, 'name'=>'Santa Monica'),
            )
          ),
          tw_slugify('California - Napa and Sonoma')=> array('id'=>240, 'name'=>'California - Napa and Sonoma', 'region_4'=>array(
              tw_slugify('Glen Ellen')  => array('id'=>1618, 'name'=>'Glen Ellen'),
              tw_slugify('Healdsburg')  => array('id'=>1616, 'name'=>'Healdsburg'),
              tw_slugify('Kenwood')  => array('id'=>1619, 'name'=>'Kenwood'),
              tw_slugify('Napa Valley')  => array('id'=>1727, 'name'=>'Napa Valley'),
              tw_slugify('Sonoma')  => array('id'=>1590, 'name'=>'Sonoma'),
              tw_slugify('St. Helena')  => array('id'=>1591, 'name'=>'St. Helena'),
            )
          ),
          tw_slugify('California - San Diego')      => array('id'=>238, 'name'=>'California - San Diego',       'region_4'=>array(
              tw_slugify('Beaches')  => array('id'=>1573, 'name'=>'Beaches'),
              tw_slugify('Coronado')  => array('id'=>1716, 'name'=>'Coronado'),
              tw_slugify('Encinitas')  => array('id'=>1680, 'name'=>'Encinitas'),
              tw_slugify('La Jolla')  => array('id'=>1574, 'name'=>'La Jolla'),
              tw_slugify('North County')  => array('id'=>1575, 'name'=>'North County'),
              tw_slugify('Rancho Santa Fe')  => array('id'=>1624, 'name'=>'Rancho Santa Fe'),
            )
          ),
          tw_slugify('California - Santa Barbara')  => array('id'=>249, 'name'=>'California - Santa Barbara',   'region_4'=>array(
              tw_slugify('Santa Barbara')  => array('id'=>1612, 'name'=>'Santa Barbara'),
            )
          ),
          tw_slugify('Colorado - Breckenridge')     => array('id'=>244, 'name'=>'Colorado - Breckenridge',      'region_4'=>array(
              tw_slugify('Breckenridge')  => array('id'=>1596, 'name'=>'Breckenridge'),
            )
          ),
          tw_slugify('Colorado - Greater Aspen')    => array('id'=>245, 'name'=>'Colorado - Greater Aspen',     'region_4'=>array(
              tw_slugify('Aspen Highlands')  => array('id'=>1606, 'name'=>'Aspen Highlands'),
              tw_slugify('Downtown Aspen')  => array('id'=>1597, 'name'=>'Downtown Aspen'),
              tw_slugify('Starwood Area')  => array('id'=>1605, 'name'=>'Starwood Area'),
            )
          ),
          tw_slugify('Colorado - Steamboat Springs')=> array('id'=>256, 'name'=>'Colorado - Steamboat Springs', 'region_4'=>array(
              tw_slugify('Steamboat Springs')  => array('id'=>1682, 'name'=>'Steamboat Springs'),
            )
          ),
          tw_slugify('Colorado - Telluride')        => array('id'=>246, 'name'=>'Colorado - Telluride',         'region_4'=>array(
              tw_slugify('Mountain Village')  => array('id'=>1599, 'name'=>'Mountain Village'),
              tw_slugify('Town of Telluride')  => array('id'=>1600, 'name'=>'Town of Telluride'),
            )
          ),
          tw_slugify('Colorado - Vail Valley')      => array('id'=>247, 'name'=>'Colorado - Vail Valley',       'region_4'=>array(
              tw_slugify('Bachelor Gulch')  => array('id'=>1602, 'name'=>'Bachelor Gulch'),
              tw_slugify('Beaver Creek Village')  => array('id'=>1603, 'name'=>'Beaver Creek Village'),
              tw_slugify('Eagle-Vail')  => array('id'=>1699, 'name'=>'Eagle-Vail'),
              tw_slugify('Vail Village')  => array('id'=>1601, 'name'=>'Vail Village'),
            )
          ),
          tw_slugify('Florida - Fort Lauderdale')   => array('id'=>252, 'name'=>'Florida - Fort Lauderdale',    'region_4'=>array(
              tw_slugify('Fort Lauderdale Beach')  => array('id'=>1628, 'name'=>'Fort Lauderdale Beach'),
              tw_slugify('Hollywood Beach')  => array('id'=>1627, 'name'=>'Hollywood Beach'),
            )
          ),
          tw_slugify('Florida - Gulf Coast')        => array('id'=>254, 'name'=>'Florida - Gulf Coast',         'region_4'=>array(
              tw_slugify('Naples')  => array('id'=>1630, 'name'=>'Naples'),
            )
          ),
          tw_slugify('Florida - Miami')             => array('id'=>253, 'name'=>'Florida - Miami',              'region_4'=>array(
              tw_slugify('Fisher Island')  => array('id'=>1631, 'name'=>'Fisher Island'),
              tw_slugify('Hibiscus Island')  => array('id'=>1726, 'name'=>'Hibiscus Island'),
              tw_slugify('North Bay Village')  => array('id'=>1647, 'name'=>'North Bay Village'),
              tw_slugify('Palm Island')  => array('id'=>1636, 'name'=>'Palm Island'),
              tw_slugify('Venetian Islands')  => array('id'=>1635, 'name'=>'Venetian Islands'),
            )
          ),
          tw_slugify('Florida - The Palm Beaches')  => array('id'=>251, 'name'=>'Florida - The Palm Beaches',   'region_4'=>array(
              tw_slugify('West Palm Beach')  => array('id'=>1625, 'name'=>'West Palm Beach'),
            )
          ),
          tw_slugify('New York')                    => array('id'=>213, 'name'=>'New York',                     'region_4'=>array(
              tw_slugify('New York City')  => array('id'=>1345, 'name'=>'New York City'),
            )
          ),
          tw_slugify('Utah')                        => array('id'=>173, 'name'=>'Utah',                         'region_4'=>array(
              tw_slugify('Deer Crest')  => array('id'=>1466, 'name'=>'Deer Crest'),
              tw_slugify('Deer Valley')  => array('id'=>929, 'name'=>'Deer Valley'),
              tw_slugify('Oakley')  => array('id'=>1641, 'name'=>'Oakley'),
              tw_slugify('Park City')  => array('id'=>930, 'name'=>'Park City'),
              tw_slugify('The Canyons')  => array('id'=>947, 'name'=>'The Canyons'),
            )
          ),
          tw_slugify('Wyoming')                     => array('id'=>198, 'name'=>'Wyoming',                      'region_4'=>array(
              tw_slugify('Jackson Hole')  => array('id'=>1239, 'name'=>'Jackson Hole'),
              tw_slugify('Jackson Hole - Teton Village')  => array('id'=>1490, 'name'=>'Jackson Hole - Teton Village'),
              tw_slugify('Wilson')  => array('id'=>1684, 'name'=>'Wilson'),
            )
          ),
        )
      ),
    ),
  );


  $regions = array(
    tw_slugify('Africa') => $africa,
    tw_slugify('Asia') => $asia,
    tw_slugify('europe') => $europe,
    tw_slugify('north-america') => $north_america,
  );
  return $regions;
}
}

if(!function_exists('lr_update_region')){
function lr_update_region($r_id, $r_name, $r_slug, $r_level, $parent_id=0){
    $taxonomy = 'lr_property_region';
    $parent=null;

    if($parent_id!==0){
      $parent = get_term_by('id', $parent_id, $taxonomy);
      if(is_wp_error($parent)){
        $parent=null;
      }
    }

    if($r_id && $r_name && $r_slug && $r_level){
      //find term by slug
      $region = get_term_by('slug', $r_slug, $taxonomy);
      if(!$region){
        $region = wp_insert_term(
                  $r_name, // the term
                  $taxonomy, // the taxonomy
                  array(
                    //'description'=> 'A yummy apple.',
                    'slug' => $r_slug,
                    'parent'=> $parent->term_id,
                  )
                );
        if(is_wp_error($region)){
        }else{
          $region_term_id = $region['term_id'];
        }
      }else{
        $region_term_id = $region->term_id;
      }


      if(!$region_meta = get_option('tax_meta_'.$region_term_id)){
        $region_meta = update_option('tax_meta_'.$region_term_id, array('lr_property_region_id'=>$r_id,'lr_property_region_level'=>$r_level ));
      }
      return $region_term_id;
    }else{
      return 'error';
    }
}
}


if(!function_exists('lr_get_tracking_params')){
  function lr_get_tracking_params(){
    $params = array(
      'src',
      'c3',
      'c3api',
      'c3ch',
      'c3nid',
      'utm_source',
      'utm_medium',
      'utm_campaign',
      'utm_term',
      'utm_content',
      'cluid',
      'DBMK',
      'gclid',
    );
    return $params;
  }
}

if(!function_exists('add_tracking_query_vars')){
  function add_tracking_query_vars($aVars) {
    $params = lr_get_tracking_params();
    foreach($params as $p){
      $aVars[] = $p;
    }
    return $aVars;
  }
  add_filter('query_vars', 'add_tracking_query_vars');
}

function lr_get_general_options(){
  $lr_general_options = get_option('lr_theme_general_options', false);
  return $lr_general_options;
}

function is_enabled_branded_header(){
  $options = lr_get_general_options();

  $is_enabled = is_array($options) && isset($options['enable_branded_header']) && $options['enable_branded_header'] ? true : false;
  return $is_enabled;
}

function is_enabled_branded_footer(){
  $options = lr_get_general_options();
  $is_enabled = is_array($options) && isset($options['enable_branded_footer']) && $options['enable_branded_footer'] ? true : false;
  return $is_enabled;
}

function is_enabled_legacy_properties(){
  $options = lr_get_general_options();
  $is_enabled = is_array($options) && isset($options['enable_legacy']) && $options['enable_legacy'] ? true : false;
  return $is_enabled;
}