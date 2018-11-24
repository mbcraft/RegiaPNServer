<?php

                                
class FA {
                 
   private static function __getAdditionalClasses($additional_classes) {
        if ($additional_classes!=null && is_array($additional_classes))
            return join(' ',$additional_classes);
        else
            $more_classes = $additional_classes;
        if ($more_classes==null)
            return "fa-fw";
        return $more_classes;
   }                
    public static function brand_500px($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-500px ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Adn($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-adn ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Amazon($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-amazon ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Android($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-android ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Angellist($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-angellist ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Apple($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-apple ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Behance($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-behance ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Behance_square($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-behance-square ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Bitbucket($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-bitbucket ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Bitbucket_square($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-bitbucket-square ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Bitcoin($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-bitcoin ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Black_tie($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-black-tie ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Btc($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-btc ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Buysellads($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-buysellads ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Cc_amex($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-cc-amex ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Cc_diners_club($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-cc-diners-club ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Cc_discover($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-cc-discover ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Cc_jcb($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-cc-jcb ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Cc_mastercard($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-cc-mastercard ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Cc_paypal($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-cc-paypal ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Cc_stripe($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-cc-stripe ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Cc_visa($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-cc-visa ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Chrome($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-chrome ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Codepen($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-codepen ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Connectdevelop($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-connectdevelop ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Contao($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-contao ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Css3($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-css3 ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Dashcube($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-dashcube ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Delicious($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-delicious ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Deviantart($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-deviantart ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Digg($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-digg ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Dribbble($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-dribbble ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Dropbox($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-dropbox ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Drupal($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-drupal ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Empire($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-empire ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Expeditedssl($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-expeditedssl ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Facebook($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-facebook ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Facebook_f($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-facebook-f ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Facebook_official($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-facebook-official ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Facebook_square($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-facebook-square ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Firefox($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-firefox ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Flickr($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-flickr ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Fonticons($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-fonticons ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Forumbee($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-forumbee ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Foursquare($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-foursquare ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Ge($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-ge ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Get_pocket($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-get-pocket ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Gg($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-gg ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Gg_circle($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-gg-circle ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Git($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-git ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Git_square($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-git-square ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Github($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-github ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Github_alt($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-github-alt ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Github_square($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-github-square ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Gittip($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-gittip ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Google($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-google ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Google_plus($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-google-plus ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Google_plus_square($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-google-plus-square ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Google_wallet($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-google-wallet ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Gratipay($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-gratipay ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Hacker_news($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-hacker-news ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Houzz($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-houzz ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Html5($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-html5 ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Instagram($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-instagram ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Internet_explorer($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-internet-explorer ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Ioxhost($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-ioxhost ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Joomla($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-joomla ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Jsfiddle($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-jsfiddle ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Lastfm($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-lastfm ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Lastfm_square($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-lastfm-square ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Leanpub($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-leanpub ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Linkedin($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-linkedin ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Linkedin_square($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-linkedin-square ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Linux($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-linux ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Maxcdn($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-maxcdn ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Meanpath($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-meanpath ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Medium($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-medium ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Odnoklassniki($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-odnoklassniki ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Odnoklassniki_square($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-odnoklassniki-square ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Opencart($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-opencart ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Openid($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-openid ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Opera($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-opera ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Optin_monster($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-optin-monster ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Pagelines($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-pagelines ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Paypal($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-paypal ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Pied_piper($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-pied-piper ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Pied_piper_alt($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-pied-piper-alt ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Pinterest($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-pinterest ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Pinterest_p($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-pinterest-p ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Pinterest_square($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-pinterest-square ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Qq($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-qq ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Ra($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-ra ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Rebel($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-rebel ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Reddit($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-reddit ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Reddit_square($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-reddit-square ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Renren($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-renren ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Safari($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-safari ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Sellsy($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-sellsy ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Share_alt($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-share-alt ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Share_alt_square($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-share-alt-square ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Shirtsinbulk($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-shirtsinbulk ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Simplybuilt($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-simplybuilt ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Skyatlas($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-skyatlas ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Skype($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-skype ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Slack($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-slack ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Slideshare($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-slideshare ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Soundcloud($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-soundcloud ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Spotify($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-spotify ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Stack_exchange($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-stack-exchange ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Stack_overflow($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-stack-overflow ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Steam($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-steam ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Steam_square($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-steam-square ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Stumbleupon($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-stumbleupon ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Stumbleupon_circle($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-stumbleupon-circle ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Tencent_weibo($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-tencent-weibo ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Trello($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-trello ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Tripadvisor($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-tripadvisor ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Tumblr($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-tumblr ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Tumblr_square($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-tumblr-square ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Twitch($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-twitch ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Twitter($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-twitter ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Twitter_square($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-twitter-square ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Viacoin($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-viacoin ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Vimeo($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-vimeo ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Vimeo_square($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-vimeo-square ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Vine($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-vine ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Vk($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-vk ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Wechat($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-wechat ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Weibo($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-weibo ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Weixin($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-weixin ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Whatsapp($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-whatsapp ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Wikipedia_w($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-wikipedia-w ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Windows($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-windows ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Wordpress($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-wordpress ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Xing($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-xing ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Xing_square($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-xing-square ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Y_combinator($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-y-combinator ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Y_combinator_square($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-y-combinator-square ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Yahoo($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-yahoo ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Yc($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-yc ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Yc_square($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-yc-square ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Yelp($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-yelp ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Youtube($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-youtube ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Youtube_play($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-youtube-play ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function brand_Youtube_square($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-youtube-square ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function chart_Area_chart($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-area-chart ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function chart_Bar_chart($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-bar-chart ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function chart_Bar_chart_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-bar-chart-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function chart_Line_chart($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-line-chart ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function chart_Pie_chart($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-pie-chart ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function currency_Bitcoin($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-bitcoin ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function currency_Btc($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-btc ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function currency_Cny($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-cny ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function currency_Dollar($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-dollar ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function currency_Eur($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-eur ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function currency_Euro($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-euro ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function currency_Gbp($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-gbp ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function currency_Gg($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-gg ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function currency_Gg_circle($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-gg-circle ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function currency_Ils($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-ils ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function currency_Inr($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-inr ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function currency_Jpy($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-jpy ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function currency_Krw($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-krw ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function currency_Money($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-money ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function currency_Rmb($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-rmb ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function currency_Rouble($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-rouble ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function currency_Rub($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-rub ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function currency_Ruble($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-ruble ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function currency_Rupee($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-rupee ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function currency_Shekel($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-shekel ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function currency_Sheqel($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-sheqel ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function currency_Try($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-try ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function currency_Turkish_lira($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-turkish-lira ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function currency_Usd($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-usd ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function currency_Won($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-won ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function currency_Yen($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-yen ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function directional_Align_center($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-align-center ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function directional_Align_justify($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-align-justify ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function directional_Align_left($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-align-left ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function directional_Align_right($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-align-right ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function directional_Bold($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-bold ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function directional_Chain($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-chain ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function directional_Chain_broken($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-chain-broken ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function directional_Clipboard($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-clipboard ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function directional_Columns($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-columns ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function directional_Copy($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-copy ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function directional_Cut($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-cut ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function directional_Dedent($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-dedent ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function directional_Eraser($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-eraser ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function directional_File($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-file ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function directional_File_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-file-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function directional_File_text($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-file-text ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function directional_File_text_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-file-text-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function directional_Files_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-files-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function directional_Floppy_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-floppy-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function directional_Font($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-font ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function directional_Header($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-header ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function directional_Indent($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-indent ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function directional_Italic($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-italic ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function directional_Link($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-link ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function directional_List($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-list ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function directional_List_alt($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-list-alt ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function directional_List_ol($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-list-ol ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function directional_List_ul($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-list-ul ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function directional_Outdent($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-outdent ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function directional_Paperclip($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-paperclip ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function directional_Paragraph($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-paragraph ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function directional_Paste($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-paste ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function directional_Repeat($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-repeat ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function directional_Rotate_left($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-rotate-left ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function directional_Rotate_right($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-rotate-right ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function directional_Save($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-save ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function directional_Scissors($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-scissors ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function directional_Strikethrough($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-strikethrough ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function directional_Subscript($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-subscript ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function directional_Superscript($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-superscript ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function directional_Table($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-table ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function directional_Text_height($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-text-height ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function directional_Text_width($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-text-width ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function directional_Th($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-th ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function directional_Th_large($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-th-large ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function directional_Th_list($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-th-list ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function directional_Underline($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-underline ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function directional_Undo($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-undo ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function directional_Unlink($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-unlink ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function fileType_File($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-file ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function fileType_File_archive_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-file-archive-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function fileType_File_audio_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-file-audio-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function fileType_File_code_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-file-code-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function fileType_File_excel_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-file-excel-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function fileType_File_image_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-file-image-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function fileType_File_movie_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-file-movie-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function fileType_File_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-file-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function fileType_File_pdf_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-file-pdf-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function fileType_File_photo_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-file-photo-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function fileType_File_picture_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-file-picture-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function fileType_File_powerpoint_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-file-powerpoint-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function fileType_File_sound_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-file-sound-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function fileType_File_text($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-file-text ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function fileType_File_text_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-file-text-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function fileType_File_video_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-file-video-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function fileType_File_word_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-file-word-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function fileType_File_zip_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-file-zip-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function formControls_Check_square($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-check-square ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function formControls_Check_square_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-check-square-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function formControls_Circle($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-circle ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function formControls_Circle_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-circle-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function formControls_Dot_circle_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-dot-circle-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function formControls_Minus_square($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-minus-square ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function formControls_Minus_square_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-minus-square-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function formControls_Plus_square($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-plus-square ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function formControls_Plus_square_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-plus-square-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function formControls_Square($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-square ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function formControls_Square_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-square-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function gender_Genderless($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-genderless ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function gender_Intersex($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-intersex ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function gender_Mars($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-mars ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function gender_Mars_double($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-mars-double ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function gender_Mars_stroke($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-mars-stroke ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function gender_Mars_stroke_h($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-mars-stroke-h ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function gender_Mars_stroke_v($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-mars-stroke-v ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function gender_Mercury($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-mercury ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function gender_Neuter($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-neuter ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function gender_Transgender($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-transgender ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function gender_Transgender_alt($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-transgender-alt ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function gender_Venus($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-venus ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function gender_Venus_double($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-venus-double ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function gender_Venus_mars($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-venus-mars ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function hand_Hand_grab_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-hand-grab-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function hand_Hand_lizard_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-hand-lizard-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function hand_Hand_o_down($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-hand-o-down ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function hand_Hand_o_left($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-hand-o-left ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function hand_Hand_o_right($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-hand-o-right ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function hand_Hand_o_up($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-hand-o-up ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function hand_Hand_paper_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-hand-paper-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function hand_Hand_peace_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-hand-peace-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function hand_Hand_pointer_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-hand-pointer-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function hand_Hand_rock_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-hand-rock-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function hand_Hand_scissors_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-hand-scissors-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function hand_Hand_spock_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-hand-spock-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function hand_Hand_stop_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-hand-stop-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function hand_Thumbs_down($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-thumbs-down ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function hand_Thumbs_o_down($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-thumbs-o-down ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function hand_Thumbs_o_up($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-thumbs-o-up ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function hand_Thumbs_up($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-thumbs-up ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function medical_Ambulance($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-ambulance ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function medical_H_square($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-h-square ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function medical_Heart($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-heart ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function medical_Heart_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-heart-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function medical_Heartbeat($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-heartbeat ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function medical_Hospital_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-hospital-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function medical_Medkit($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-medkit ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function medical_Plus_square($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-plus-square ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function medical_Stethoscope($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-stethoscope ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function medical_User_md($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-user-md ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function medical_Wheelchair($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-wheelchair ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function payment_Cc_amex($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-cc-amex ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function payment_Cc_diners_club($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-cc-diners-club ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function payment_Cc_discover($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-cc-discover ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function payment_Cc_jcb($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-cc-jcb ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function payment_Cc_mastercard($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-cc-mastercard ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function payment_Cc_paypal($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-cc-paypal ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function payment_Cc_stripe($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-cc-stripe ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function payment_Cc_visa($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-cc-visa ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function payment_Credit_card($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-credit-card ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function payment_Google_wallet($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-google-wallet ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function payment_Paypal($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-paypal ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function spinner_Circle_o_notch($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-spin fa-circle-o-notch ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function spinner_Cog($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-spin fa-cog ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function spinner_Gear($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-spin fa-gear ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function spinner_Refresh($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-spin fa-refresh ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function spinner_Spinner($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-spin fa-spinner ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function textEditor_Align_center($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-align-center ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function textEditor_Align_justify($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-align-justify ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function textEditor_Align_left($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-align-left ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function textEditor_Align_right($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-align-right ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function textEditor_Bold($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-bold ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function textEditor_Chain($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-chain ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function textEditor_Chain_broken($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-chain-broken ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function textEditor_Clipboard($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-clipboard ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function textEditor_Columns($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-columns ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function textEditor_Copy($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-copy ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function textEditor_Cut($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-cut ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function textEditor_Dedent($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-dedent ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function textEditor_Eraser($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-eraser ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function textEditor_File($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-file ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function textEditor_File_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-file-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function textEditor_File_text($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-file-text ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function textEditor_File_text_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-file-text-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function textEditor_Files_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-files-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function textEditor_Floppy_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-floppy-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function textEditor_Font($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-font ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function textEditor_Header($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-header ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function textEditor_Indent($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-indent ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function textEditor_Italic($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-italic ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function textEditor_Link($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-link ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function textEditor_List($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-list ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function textEditor_List_alt($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-list-alt ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function textEditor_List_ol($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-list-ol ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function textEditor_List_ul($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-list-ul ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function textEditor_Outdent($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-outdent ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function textEditor_Paperclip($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-paperclip ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function textEditor_Paragraph($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-paragraph ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function textEditor_Paste($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-paste ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function textEditor_Repeat($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-repeat ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function textEditor_Rotate_left($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-rotate-left ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function textEditor_Rotate_right($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-rotate-right ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function textEditor_Save($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-save ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function textEditor_Scissors($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-scissors ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function textEditor_Strikethrough($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-strikethrough ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function textEditor_Subscript($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-subscript ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function textEditor_Superscript($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-superscript ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function textEditor_Table($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-table ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function textEditor_Text_height($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-text-height ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function textEditor_Text_width($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-text-width ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function textEditor_Th($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-th ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function textEditor_Th_large($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-th-large ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function textEditor_Th_list($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-th-list ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function textEditor_Underline($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-underline ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function textEditor_Undo($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-undo ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function textEditor_Unlink($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-unlink ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function transportation_Ambulance($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-ambulance ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function transportation_Automobile($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-automobile ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function transportation_Bicycle($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-bicycle ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function transportation_Bus($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-bus ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function transportation_Cab($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-cab ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function transportation_Car($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-car ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function transportation_Fighter_jet($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-fighter-jet ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function transportation_Motorcycle($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-motorcycle ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function transportation_Plane($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-plane ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function transportation_Rocket($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-rocket ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function transportation_Ship($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-ship ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function transportation_Space_shuttle($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-space-shuttle ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function transportation_Subway($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-subway ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function transportation_Taxi($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-taxi ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function transportation_Train($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-train ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function transportation_Truck($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-truck ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function transportation_Wheelchair($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-wheelchair ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function videoPlayer_Arrows_alt($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-arrows-alt ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function videoPlayer_Backward($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-backward ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function videoPlayer_Compress($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-compress ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function videoPlayer_Eject($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-eject ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function videoPlayer_Expand($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-expand ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function videoPlayer_Fast_backward($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-fast-backward ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function videoPlayer_Fast_forward($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-fast-forward ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function videoPlayer_Forward($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-forward ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function videoPlayer_Pause($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-pause ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function videoPlayer_Play($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-play ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function videoPlayer_Play_circle($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-play-circle ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function videoPlayer_Play_circle_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-play-circle-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function videoPlayer_Random($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-random ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function videoPlayer_Step_backward($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-step-backward ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function videoPlayer_Step_forward($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-step-forward ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function videoPlayer_Stop($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-stop ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function videoPlayer_Youtube_play($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-youtube-play ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Adjust($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-adjust ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Anchor($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-anchor ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Archive($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-archive ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Area_chart($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-area-chart ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Arrows($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-arrows ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Arrows_h($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-arrows-h ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Arrows_v($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-arrows-v ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Asterisk($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-asterisk ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_At($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-at ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Automobile($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-automobile ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Balance_scale($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-balance-scale ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Ban($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-ban ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Bank($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-bank ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Bar_chart($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-bar-chart ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Bar_chart_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-bar-chart-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Barcode($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-barcode ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Bars($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-bars ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Battery_0($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-battery-0 ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Battery_1($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-battery-1 ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Battery_2($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-battery-2 ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Battery_3($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-battery-3 ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Battery_4($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-battery-4 ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Battery_empty($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-battery-empty ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Battery_full($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-battery-full ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Battery_half($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-battery-half ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Battery_quarter($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-battery-quarter ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Battery_three_quarters($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-battery-three-quarters ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Bed($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-bed ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Beer($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-beer ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Bell($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-bell ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Bell_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-bell-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Bell_slash($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-bell-slash ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Bell_slash_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-bell-slash-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Bicycle($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-bicycle ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Binoculars($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-binoculars ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Birthday_cake($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-birthday-cake ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Bolt($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-bolt ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Bomb($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-bomb ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Book($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-book ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Bookmark($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-bookmark ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Bookmark_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-bookmark-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Briefcase($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-briefcase ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Bug($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-bug ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Building($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-building ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Building_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-building-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Bullhorn($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-bullhorn ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Bullseye($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-bullseye ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Bus($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-bus ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Cab($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-cab ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Calculator($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-calculator ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Calendar($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-calendar ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Calendar_check_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-calendar-check-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Calendar_minus_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-calendar-minus-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Calendar_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-calendar-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Calendar_plus_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-calendar-plus-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Calendar_times_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-calendar-times-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Camera($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-camera ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Camera_retro($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-camera-retro ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Car($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-car ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Caret_square_o_down($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-caret-square-o-down ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Caret_square_o_left($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-caret-square-o-left ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Caret_square_o_right($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-caret-square-o-right ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Caret_square_o_up($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-caret-square-o-up ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Cart_arrow_down($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-cart-arrow-down ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Cart_plus($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-cart-plus ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Cc($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-cc ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Certificate($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-certificate ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Check($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-check ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Check_circle($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-check-circle ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Check_circle_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-check-circle-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Check_square($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-check-square ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Check_square_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-check-square-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Child($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-child ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Circle($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-circle ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Circle_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-circle-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Circle_o_notch($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-circle-o-notch ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Circle_thin($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-circle-thin ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Clock_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-clock-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Clone($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-clone ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Close($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-close ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Cloud($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-cloud ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Cloud_download($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-cloud-download ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Cloud_upload($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-cloud-upload ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Code($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-code ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Code_fork($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-code-fork ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Coffee($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-coffee ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Cog($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-cog ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Cogs($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-cogs ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Comment($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-comment ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Comment_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-comment-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Commenting($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-commenting ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Commenting_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-commenting-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Comments($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-comments ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Comments_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-comments-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Compass($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-compass ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Copyright($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-copyright ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Creative_commons($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-creative-commons ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Credit_card($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-credit-card ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Crop($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-crop ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Crosshairs($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-crosshairs ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Cube($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-cube ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Cubes($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-cubes ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Cutlery($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-cutlery ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Dashboard($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-dashboard ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Database($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-database ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Desktop($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-desktop ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Diamond($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-diamond ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Dot_circle_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-dot-circle-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Download($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-download ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Edit($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-edit ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Ellipsis_h($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-ellipsis-h ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Ellipsis_v($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-ellipsis-v ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Envelope($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-envelope ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Envelope_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-envelope-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Envelope_square($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-envelope-square ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Eraser($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-eraser ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Exchange($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-exchange ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Exclamation($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-exclamation ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Exclamation_circle($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-exclamation-circle ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Exclamation_triangle($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-exclamation-triangle ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_External_link($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-external-link ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_External_link_square($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-external-link-square ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Eye($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-eye ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Eye_slash($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-eye-slash ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Eyedropper($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-eyedropper ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Fax($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-fax ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Feed($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-feed ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Female($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-female ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Fighter_jet($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-fighter-jet ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_File_archive_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-file-archive-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_File_audio_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-file-audio-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_File_code_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-file-code-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_File_excel_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-file-excel-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_File_image_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-file-image-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_File_movie_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-file-movie-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_File_pdf_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-file-pdf-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_File_photo_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-file-photo-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_File_picture_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-file-picture-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_File_powerpoint_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-file-powerpoint-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_File_sound_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-file-sound-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_File_video_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-file-video-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_File_word_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-file-word-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_File_zip_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-file-zip-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Film($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-film ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Filter($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-filter ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Fire($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-fire ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Fire_extinguisher($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-fire-extinguisher ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Flag($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-flag ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Flag_checkered($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-flag-checkered ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Flag_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-flag-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Flash($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-flash ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Flask($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-flask ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Folder($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-folder ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Folder_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-folder-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Folder_open($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-folder-open ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Folder_open_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-folder-open-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Frown_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-frown-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Futbol_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-futbol-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Gamepad($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-gamepad ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Gavel($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-gavel ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Gear($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-gear ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Gears($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-gears ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Gift($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-gift ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Glass($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-glass ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Globe($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-globe ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Graduation_cap($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-graduation-cap ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Group($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-group ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Hand_grab_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-hand-grab-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Hand_lizard_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-hand-lizard-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Hand_paper_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-hand-paper-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Hand_peace_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-hand-peace-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Hand_pointer_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-hand-pointer-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Hand_rock_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-hand-rock-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Hand_scissors_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-hand-scissors-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Hand_spock_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-hand-spock-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Hand_stop_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-hand-stop-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Hdd_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-hdd-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Headphones($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-headphones ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Heart($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-heart ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Heart_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-heart-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Heartbeat($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-heartbeat ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_History($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-history ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Home($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-home ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Hotel($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-hotel ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Hourglass($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-hourglass ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Hourglass_1($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-hourglass-1 ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Hourglass_2($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-hourglass-2 ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Hourglass_3($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-hourglass-3 ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Hourglass_end($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-hourglass-end ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Hourglass_half($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-hourglass-half ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Hourglass_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-hourglass-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Hourglass_start($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-hourglass-start ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_I_cursor($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-i-cursor ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Image($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-image ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Inbox($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-inbox ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Industry($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-industry ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Info($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-info ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Info_circle($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-info-circle ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Institution($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-institution ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Key($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-key ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Keyboard_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-keyboard-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Language($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-language ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Laptop($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-laptop ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Leaf($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-leaf ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Legal($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-legal ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Lemon_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-lemon-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Level_down($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-level-down ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Level_up($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-level-up ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Life_bouy($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-life-bouy ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Life_buoy($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-life-buoy ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Life_ring($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-life-ring ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Life_saver($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-life-saver ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Lightbulb_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-lightbulb-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Line_chart($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-line-chart ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Location_arrow($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-location-arrow ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Lock($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-lock ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Magic($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-magic ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Magnet($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-magnet ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Mail_forward($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-mail-forward ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Mail_reply($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-mail-reply ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Mail_reply_all($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-mail-reply-all ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Male($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-male ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Map($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-map ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Map_marker($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-map-marker ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Map_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-map-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Map_pin($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-map-pin ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Map_signs($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-map-signs ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Meh_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-meh-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Microphone($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-microphone ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Microphone_slash($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-microphone-slash ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Minus($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-minus ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Minus_circle($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-minus-circle ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Minus_square($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-minus-square ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Minus_square_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-minus-square-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Mobile($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-mobile ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Mobile_phone($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-mobile-phone ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Money($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-money ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Moon_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-moon-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Mortar_board($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-mortar-board ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Motorcycle($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-motorcycle ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Mouse_pointer($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-mouse-pointer ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Music($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-music ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Navicon($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-navicon ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Newspaper_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-newspaper-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Object_group($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-object-group ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Object_ungroup($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-object-ungroup ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Paint_brush($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-paint-brush ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Paper_plane($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-paper-plane ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Paper_plane_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-paper-plane-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Paw($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-paw ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Pencil($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-pencil ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Pencil_square($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-pencil-square ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Pencil_square_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-pencil-square-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Phone($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-phone ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Phone_square($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-phone-square ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Photo($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-photo ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Picture_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-picture-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Pie_chart($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-pie-chart ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Plane($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-plane ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Plug($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-plug ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Plus($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-plus ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Plus_circle($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-plus-circle ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Plus_square($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-plus-square ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Plus_square_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-plus-square-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Power_off($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-power-off ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Print($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-print ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Puzzle_piece($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-puzzle-piece ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Qrcode($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-qrcode ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Question($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-question ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Question_circle($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-question-circle ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Quote_left($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-quote-left ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Quote_right($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-quote-right ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Random($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-random ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Recycle($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-recycle ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Refresh($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-refresh ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Registered($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-registered ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Remove($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-remove ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Reorder($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-reorder ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Reply($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-reply ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Reply_all($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-reply-all ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Retweet($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-retweet ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Road($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-road ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Rocket($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-rocket ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Rss($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-rss ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Rss_square($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-rss-square ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Search($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-search ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Search_minus($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-search-minus ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Search_plus($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-search-plus ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Send($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-send ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Send_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-send-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Server($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-server ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Share($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-share ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Share_alt($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-share-alt ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Share_alt_square($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-share-alt-square ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Share_square($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-share-square ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Share_square_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-share-square-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Shield($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-shield ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Ship($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-ship ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Shopping_cart($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-shopping-cart ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Sign_in($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-sign-in ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Sign_out($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-sign-out ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Signal($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-signal ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Sitemap($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-sitemap ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Sliders($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-sliders ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Smile_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-smile-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Soccer_ball_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-soccer-ball-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Sort($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-sort ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Sort_alpha_asc($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-sort-alpha-asc ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Sort_alpha_desc($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-sort-alpha-desc ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Sort_amount_asc($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-sort-amount-asc ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Sort_amount_desc($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-sort-amount-desc ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Sort_asc($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-sort-asc ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Sort_desc($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-sort-desc ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Sort_down($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-sort-down ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Sort_numeric_asc($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-sort-numeric-asc ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Sort_numeric_desc($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-sort-numeric-desc ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Sort_up($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-sort-up ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Space_shuttle($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-space-shuttle ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Spinner($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-spinner ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Spoon($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-spoon ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Square($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-square ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Square_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-square-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Star($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-star ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Star_half($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-star-half ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Star_half_empty($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-star-half-empty ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Star_half_full($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-star-half-full ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Star_half_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-star-half-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Star_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-star-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Sticky_note($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-sticky-note ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Sticky_note_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-sticky-note-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Street_view($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-street-view ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Suitcase($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-suitcase ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Sun_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-sun-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Support($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-support ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Tablet($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-tablet ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Tachometer($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-tachometer ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Tag($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-tag ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Tags($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-tags ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Tasks($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-tasks ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Taxi($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-taxi ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Television($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-television ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Terminal($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-terminal ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Thumb_tack($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-thumb-tack ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Thumbs_down($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-thumbs-down ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Thumbs_o_down($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-thumbs-o-down ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Thumbs_o_up($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-thumbs-o-up ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Thumbs_up($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-thumbs-up ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Ticket($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-ticket ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Times($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-times ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Times_circle($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-times-circle ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Times_circle_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-times-circle-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Tint($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-tint ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Toggle_down($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-toggle-down ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Toggle_left($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-toggle-left ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Toggle_off($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-toggle-off ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Toggle_on($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-toggle-on ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Toggle_right($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-toggle-right ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Toggle_up($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-toggle-up ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Trademark($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-trademark ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Trash($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-trash ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Trash_o($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-trash-o ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Tree($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-tree ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Trophy($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-trophy ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Truck($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-truck ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Tty($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-tty ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Tv($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-tv ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Umbrella($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-umbrella ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_University($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-university ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Unlock($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-unlock ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Unlock_alt($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-unlock-alt ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Unsorted($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-unsorted ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Upload($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-upload ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_User($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-user ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_User_plus($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-user-plus ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_User_secret($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-user-secret ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_User_times($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-user-times ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Users($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-users ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Video_camera($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-video-camera ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Volume_down($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-volume-down ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Volume_off($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-volume-off ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Volume_up($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-volume-up ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Warning($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-warning ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Wheelchair($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-wheelchair ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Wifi($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-wifi ".$more_classes."' $tooltip_text></i>";
    }
                        
    public static function webApplication_Wrench($additional_classes = null,$tooltip = null) {
        $more_classes = self::__getAdditionalClasses($additional_classes);
        $tooltip_text = $tooltip != null ? 'title="'.$tooltip.'"' : '';
    
        return "<i class='fa fa-wrench ".$more_classes."' $tooltip_text></i>";
    }
                       
}
                