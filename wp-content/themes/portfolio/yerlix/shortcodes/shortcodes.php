<?php

/*-----------------------------------------------------------------------------------*/
/*	Column Shortcodes
/*-----------------------------------------------------------------------------------*/

if (!function_exists('yer_one_third')) {
	function yer_one_third( $atts, $content = null ) {
	   return '<div class="ale-one-third">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('yer_one_third', 'yer_one_third');
}

if (!function_exists('yer_one_third_last')) {
	function yer_one_third_last( $atts, $content = null ) {
	   return '<div class="ale-one-third ale-column-last">' . do_shortcode($content) . '</div><div class="clear"></div>';
	}
	add_shortcode('yer_one_third_last', 'yer_one_third_last');
}

if (!function_exists('yer_two_third')) {
	function yer_two_third( $atts, $content = null ) {
	   return '<div class="ale-two-third">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('yer_two_third', 'yer_two_third');
}

if (!function_exists('yer_two_third_last')) {
	function yer_two_third_last( $atts, $content = null ) {
	   return '<div class="ale-two-third ale-column-last">' . do_shortcode($content) . '</div><div class="clear"></div>';
	}
	add_shortcode('yer_two_third_last', 'yer_two_third_last');
}

if (!function_exists('yer_one_half')) {
	function yer_one_half( $atts, $content = null ) {
	   return '<div class="ale-one-half">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('yer_one_half', 'yer_one_half');
}

if (!function_exists('yer_one_half_last')) {
	function yer_one_half_last( $atts, $content = null ) {
	   return '<div class="ale-one-half ale-column-last">' . do_shortcode($content) . '</div><div class="clear"></div>';
	}
	add_shortcode('yer_one_half_last', 'yer_one_half_last');
}

if (!function_exists('yer_one_fourth')) {
	function yer_one_fourth( $atts, $content = null ) {
	   return '<div class="ale-one-fourth">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('yer_one_fourth', 'yer_one_fourth');
}

if (!function_exists('yer_one_fourth_last')) {
	function yer_one_fourth_last( $atts, $content = null ) {
	   return '<div class="ale-one-fourth ale-column-last">' . do_shortcode($content) . '</div><div class="clear"></div>';
	}
	add_shortcode('yer_one_fourth_last', 'yer_one_fourth_last');
}

if (!function_exists('yer_three_fourth')) {
	function yer_three_fourth( $atts, $content = null ) {
	   return '<div class="ale-three-fourth">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('yer_three_fourth', 'yer_three_fourth');
}

if (!function_exists('yer_three_fourth_last')) {
	function yer_three_fourth_last( $atts, $content = null ) {
	   return '<div class="ale-three-fourth ale-column-last">' . do_shortcode($content) . '</div><div class="clear"></div>';
	}
	add_shortcode('yer_three_fourth_last', 'yer_three_fourth_last');
}

if (!function_exists('yer_one_fifth')) {
	function yer_one_fifth( $atts, $content = null ) {
	   return '<div class="ale-one-fifth">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('yer_one_fifth', 'yer_one_fifth');
}

if (!function_exists('yer_one_fifth_last')) {
	function yer_one_fifth_last( $atts, $content = null ) {
	   return '<div class="ale-one-fifth ale-column-last">' . do_shortcode($content) . '</div><div class="clear"></div>';
	}
	add_shortcode('yer_one_fifth_last', 'yer_one_fifth_last');
}

if (!function_exists('yer_two_fifth')) {
	function yer_two_fifth( $atts, $content = null ) {
	   return '<div class="ale-two-fifth">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('yer_two_fifth', 'yer_two_fifth');
}

if (!function_exists('yer_two_fifth_last')) {
	function yer_two_fifth_last( $atts, $content = null ) {
	   return '<div class="ale-two-fifth ale-column-last">' . do_shortcode($content) . '</div><div class="clear"></div>';
	}
	add_shortcode('yer_two_fifth_last', 'yer_two_fifth_last');
}

if (!function_exists('yer_three_fifth')) {
	function yer_three_fifth( $atts, $content = null ) {
	   return '<div class="ale-three-fifth">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('yer_three_fifth', 'yer_three_fifth');
}

if (!function_exists('yer_three_fifth_last')) {
	function yer_three_fifth_last( $atts, $content = null ) {
	   return '<div class="ale-three-fifth ale-column-last">' . do_shortcode($content) . '</div><div class="clear"></div>';
	}
	add_shortcode('yer_three_fifth_last', 'yer_three_fifth_last');
}

if (!function_exists('yer_four_fifth')) {
	function yer_four_fifth( $atts, $content = null ) {
	   return '<div class="ale-four-fifth">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('yer_four_fifth', 'yer_four_fifth');
}

if (!function_exists('yer_four_fifth_last')) {
	function yer_four_fifth_last( $atts, $content = null ) {
	   return '<div class="ale-four-fifth ale-column-last">' . do_shortcode($content) . '</div><div class="clear"></div>';
	}
	add_shortcode('yer_four_fifth_last', 'yer_four_fifth_last');
}

if (!function_exists('yer_one_sixth')) {
	function yer_one_sixth( $atts, $content = null ) {
	   return '<div class="ale-one-sixth">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('yer_one_sixth', 'yer_one_sixth');
}

if (!function_exists('yer_one_sixth_last')) {
	function yer_one_sixth_last( $atts, $content = null ) {
	   return '<div class="ale-one-sixth ale-column-last">' . do_shortcode($content) . '</div><div class="clear"></div>';
	}
	add_shortcode('yer_one_sixth_last', 'yer_one_sixth_last');
}

if (!function_exists('yer_five_sixth')) {
	function yer_five_sixth( $atts, $content = null ) {
	   return '<div class="ale-five-sixth">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('yer_five_sixth', 'yer_five_sixth');
}

if (!function_exists('yer_five_sixth_last')) {
	function yer_five_sixth_last( $atts, $content = null ) {
	   return '<div class="ale-five-sixth ale-column-last">' . do_shortcode($content) . '</div><div class="clear"></div>';
	}
	add_shortcode('yer_five_sixth_last', 'yer_five_sixth_last');
}


/*-----------------------------------------------------------------------------------*/
/*	Buttons
/*-----------------------------------------------------------------------------------*/

if (!function_exists('yer_button')) {
	function yer_button( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'url' => '#',
			'target' => '_self',
			'style' => 'grey',
			'size' => 'small',
			'type' => 'round'
	    ), $atts));
		
	   return '<a target="'.$target.'" class="ale-button '.$size.' '.$style.' '. $type .'" href="'.$url.'">' . do_shortcode($content) . '</a>';
	}
	add_shortcode('yer_button', 'yer_button');
}


/*-----------------------------------------------------------------------------------*/
/*	Alerts
/*-----------------------------------------------------------------------------------*/

if (!function_exists('yer_alert')) {
	function yer_alert( $atts, $content = null ) {
		extract(shortcode_atts(array(
			'style'   => 'white'
	    ), $atts));
		
	   return '<div class="ale-alert '.$style.'">' . do_shortcode($content) . '</div>';
	}
	add_shortcode('yer_alert', 'yer_alert');
}


/*-----------------------------------------------------------------------------------*/
/*	Toggle Shortcodes
/*-----------------------------------------------------------------------------------*/

if (!function_exists('yer_toggle')) {
	function yer_toggle( $atts, $content = null ) {
	    extract(shortcode_atts(array(
			'title'    	 => 'Title goes here',
			'state'		 => 'open'
	    ), $atts));
	
		return "<div data-id='".$state."' class=\"ale-toggle\"><span class=\"ale-toggle-title\">". $title ."</span><div class=\"ale-toggle-inner\">". do_shortcode($content) ."</div></div>";
	}
	add_shortcode('yer_toggle', 'yer_toggle');
}


/*-----------------------------------------------------------------------------------*/
/*	Tabs Shortcodes
/*-----------------------------------------------------------------------------------*/

if (!function_exists('yer_tabs')) {
	function yer_tabs( $atts, $content = null ) {
		$defaults = array();
		extract( shortcode_atts( $defaults, $atts ) );
		
		STATIC $i = 0;
		$i++;

		// Extract the tab titles for use in the tab widget.
		preg_match_all( '/tab title="([^\"]+)"/i', $content, $matches, PREG_OFFSET_CAPTURE );
		
		$tab_titles = array();
		if( isset($matches[1]) ){ $tab_titles = $matches[1]; }
		
		$output = '';
		
		if( count($tab_titles) ){
		    $output .= '<div id="ale-tabs-'. $i .'" class="ale-tabs"><div class="ale-tab-inner">';
			$output .= '<ul class="ale-nav ale-clearfix">';
			
			foreach( $tab_titles as $tab ){
				$output .= '<li><a href="#ale-tab-'. sanitize_title( $tab[0] ) .'">' . $tab[0] . '</a></li>';
			}
		    
		    $output .= '</ul>';
		    $output .= do_shortcode( $content );
		    $output .= '</div></div>';
		} else {
			$output .= do_shortcode( $content );
		}
		
		return $output;
	}
	add_shortcode( 'yer_tabs', 'yer_tabs' );
}

if (!function_exists('yer_tab')) {
	function yer_tab( $atts, $content = null ) {
		$defaults = array( 'title' => 'Tab' );
		extract( shortcode_atts( $defaults, $atts ) );
		
		return '<div id="ale-tab-'. sanitize_title( $title ) .'" class="ale-tab">'. do_shortcode( $content ) .'</div>';
	}
	add_shortcode( 'yer_tab', 'yer_tab' );
}

/*-----------------------------------------------------------------------------------*/
/*	Dividers
/*-----------------------------------------------------------------------------------*/

if (!function_exists('yer_divider')) {
    function yer_divider( $atts, $content = null ) {
        extract(shortcode_atts(array(
            'style'   => 'bold',
            'text'    => 'textcenter'
        ), $atts));

        $output = '';

        if($text=='notext'){
            $output = '<div class="ale-divider '.$style.'"></div>';
        } else {
            $output = '<div class="ale-divider '.$style.'"><span class="'.$text.'">'.do_shortcode($content).'</span></div>';
        }

        return $output;
    }
    add_shortcode('yer_divider', 'yer_divider');
}

/*-----------------------------------------------------------------------------------*/
/*	Testimonials
/*-----------------------------------------------------------------------------------*/

if (!function_exists('yer_testimonial')) {
    function yer_testimonial( $atts, $content = null ) {
        extract(shortcode_atts(array(
            'style'   => 'dark',
            'name'    => '',
            'avatar'  => '',
            'link'    => '',
        ), $atts));

        return '<div class="ale-testimonial '.$style.' cf"><div class="lefttestimonialpart"><div class="avatarimage"><a href="'.$link.'" target="_blank"><img src="'.$avatar.'" /></a></div><div class="testititle">'.$name.'</div></div><div class="righttestimonialpart">'.do_shortcode($content).'</div></div>';
    }
    add_shortcode('yer_testimonial', 'yer_testimonial');
}

/*-----------------------------------------------------------------------------------*/
/*	Team
/*-----------------------------------------------------------------------------------*/

if (!function_exists('yer_team')) {
    function yer_team( $atts, $content = null ) {
        extract(shortcode_atts(array(
            'style'   => 'dark',
            'name'    => '',
            'avatar'  => '',
            'prof'    => '',
            'fblink'    => '',
            'twilink'    => '',
            'glink'    => '',
        ), $atts));

        if($fblink) {
            $fbbutton = '<div class="fbbut"><a href="'.$fblink.'">Facebook</a></div>';
        }
        if($twilink) {
            $twibutton = '<div class="twibut"><a href="'.$twilink.'">Twitter</a></div>';
        }
        if($glink) {
            $gbutton = '<div class="gbut"><a href="'.$glink.'">Google</a></div>';
        }

        return '<div class="ale-team '.$style.' cf"><div class="imagebox"><img src="'.$avatar.'" /></div><div class="testititle">'.$name.'</div><div class="prof">'.$prof.'</div><div class="teamtextbox">'.do_shortcode($content).'</div><div class="socialbut">'.$fbbutton.$twibutton.$gbutton.'</div></div>';
    }
    add_shortcode('yer_team', 'yer_team');
}

/*-----------------------------------------------------------------------------------*/
/*	Partner
/*-----------------------------------------------------------------------------------*/

if (!function_exists('yer_partner')) {
    function yer_partner( $atts, $content = null ) {
        extract(shortcode_atts(array(
            'style'   => 'dark',
            'logo'  => '',
            'link'    => '',
        ), $atts));

        return '<div class="ale-partner '.$style.' cf"><div class="imagebox"><a href="'.$link.'" target="_blank" title="'.do_shortcode($content).'"><img src="'.$logo.'" /></a></div><div class="partnertitle">'.do_shortcode($content).'</div></div>';
    }
    add_shortcode('yer_partner', 'yer_partner');
}

/*-----------------------------------------------------------------------------------*/
/*	Service
/*-----------------------------------------------------------------------------------*/

if (!function_exists('yer_service')) {
    function yer_service( $atts, $content = null ) {
        extract(shortcode_atts(array(
            'style'   => 'dark',
            'icon'  => '',
            'name'    => '',
        ), $atts));

        return '<div class="ale-service '.$style.' cf"><div class="iconbox"><img src="'.$icon.'" /></div><div class="servicetitle">'.$name.'</div><div class="servicedescription">'.do_shortcode($content).'</div></div>';
    }
    add_shortcode('yer_service', 'yer_service');
}

/*-----------------------------------------------------------------------------------*/
/*	Map
/*-----------------------------------------------------------------------------------*/

if (!function_exists('yer_map')) {
    function yer_map( $atts, $content = null ) {
        extract(shortcode_atts(array(
            'address'   => false,
            'widht'  => '100%',
            'height'    => '400px',
        ), $atts));

        $address = $atts['address'];

        if( $address ) :

            wp_print_scripts( 'google-maps-api' );

            $coordinates = yer_map_get_coordinates( $address );

            if( !is_array( $coordinates ) )
                return;

            $map_id = uniqid( 'yer_map_' );

            ob_start(); ?>
            <div class="yer_map_canvas" id="<?php echo esc_attr( $map_id ); ?>" style="height: <?php echo esc_attr( $atts['height'] ); ?>; width: <?php echo esc_attr( $atts['width'] ); ?>"></div>
            <script type="text/javascript">
                var map_<?php echo $map_id; ?>;
                function yer_run_map_<?php echo $map_id ; ?>(){
                    var location = new google.maps.LatLng("<?php echo $coordinates['lat']; ?>", "<?php echo $coordinates['lng']; ?>");
                    var map_options = {
                        zoom: 15,
                        center: location,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                    }
                    map_<?php echo $map_id ; ?> = new google.maps.Map(document.getElementById("<?php echo $map_id ; ?>"), map_options);
                    var marker = new google.maps.Marker({
                        position: location,
                        map: map_<?php echo $map_id ; ?>
                    });
                }
                yer_run_map_<?php echo $map_id ; ?>();
            </script>
        <?php
        endif;
        return ob_get_clean();

    }
    add_shortcode('yer_map', 'yer_map');


    //Loads Google Map API
    function yer_map_load_scripts() {
        wp_register_script( 'google-maps-api', 'http://maps.google.com/maps/api/js?sensor=false' );
    }
    add_action( 'wp_enqueue_scripts', 'yer_map_load_scripts' );


    //Retrieve coordinates for an address
    function yer_map_get_coordinates( $address, $force_refresh = false ) {

        $address_hash = md5( $address );

        $coordinates = get_transient( $address_hash );

        if ($force_refresh || $coordinates === false) {

            $args       = array( 'address' => urlencode( $address ), 'sensor' => 'false' );
            $url        = add_query_arg( $args, 'http://maps.googleapis.com/maps/api/geocode/json' );
            $response 	= wp_remote_get( $url );

            if( is_wp_error( $response ) )
                return;

            $data = wp_remote_retrieve_body( $response );

            if( is_wp_error( $data ) )
                return;

            if ( $response['response']['code'] == 200 ) {

                $data = json_decode( $data );

                if ( $data->status === 'OK' ) {

                    $coordinates = $data->results[0]->geometry->location;

                    $cache_value['lat'] 	= $coordinates->lat;
                    $cache_value['lng'] 	= $coordinates->lng;
                    $cache_value['address'] = (string) $data->results[0]->formatted_address;

                    // cache coordinates for 3 months
                    set_transient($address_hash, $cache_value, 3600*24*30*3);
                    $data = $cache_value;

                } elseif ( $data->status === 'ZERO_RESULTS' ) {
                    return __( 'No location for the address.', 'yerlix' );
                } elseif( $data->status === 'INVALID_REQUEST' ) {
                    return __( 'Bad request. Did you enter an address name?', 'yerlix' );
                } else {
                    return __( 'Error, please check if you have entered the shortcode correctly.', 'yerlix' );
                }

            } else {
                return __( 'Can\'t connect Google API.', 'yerlix' );
            }

        } else {
            // return cached results
            $data = $coordinates;
        }

        return $data;
    }


    //Fix bug with responsive
    function yer_map_css() {
        echo '<style type="text/css">
            .yer_map_canvas img {
                max-width: none;
          }</style>';
    }
    add_action( 'wp_head', 'yer_map_css' );
}


?>