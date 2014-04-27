<?php

/*-----------------------------------------------------------------------------------*/
/*	Button Config
/*-----------------------------------------------------------------------------------*/

$yer_shortcodes['button'] = array(
	'no_preview' => true,
	'params' => array(
		'url' => array(
			'std' => '',
			'type' => 'text',
			'label' => __('Button URL', 'textdomain'),
			'desc' => __('Add the button\'s url eg http://example.com', 'textdomain')
		),
		'style' => array(
			'type' => 'select',
			'label' => __('Button Style', 'textdomain'),
			'desc' => __('Select the button\'s style, ie the button\'s colour', 'textdomain'),
			'options' => array(
				'grey' => 'Grey',
				'black' => 'Black',
				'green' => 'Green',
				'light-blue' => 'Light Blue',
				'blue' => 'Blue',
				'red' => 'Red',
				'orange' => 'Orange',
				'purple' => 'Purple'
			)
		),
		'size' => array(
			'type' => 'select',
			'label' => __('Button Size', 'textdomain'),
			'desc' => __('Select the button\'s size', 'textdomain'),
			'options' => array(
				'small' => 'Small',
				'medium' => 'Medium',
				'large' => 'Large'
			)
		),
		'type' => array(
			'type' => 'select',
			'label' => __('Button Type', 'textdomain'),
			'desc' => __('Select the button\'s type', 'textdomain'),
			'options' => array(
				'round' => 'Round',
				'square' => 'Square'
			)
		),
		'target' => array(
			'type' => 'select',
			'label' => __('Button Target', 'textdomain'),
			'desc' => __('_self = open in same window. _blank = open in new window', 'textdomain'),
			'options' => array(
				'_self' => '_self',
				'_blank' => '_blank'
			)
		),
		'content' => array(
			'std' => 'Button Text',
			'type' => 'text',
			'label' => __('Button\'s Text', 'textdomain'),
			'desc' => __('Add the button\'s text', 'textdomain'),
		)
	),
	'shortcode' => '[yer_button url="{{url}}" style="{{style}}" size="{{size}}" type="{{type}}" target="{{target}}"] {{content}} [/yer_button]',
	'popup_title' => __('Insert Button Shortcode', 'textdomain')
);

/*-----------------------------------------------------------------------------------*/
/*	Alert Config
/*-----------------------------------------------------------------------------------*/

$yer_shortcodes['alert'] = array(
	'no_preview' => true,
	'params' => array(
		'style' => array(
			'type' => 'select',
			'label' => __('Alert Style', 'textdomain'),
			'desc' => __('Select the alert\'s style, ie the alert colour', 'textdomain'),
			'options' => array(
				'white' => 'White',
				'grey' => 'Grey',
				'red' => 'Red',
				'yellow' => 'Yellow',
				'green' => 'Green'
			)
		),
		'content' => array(
			'std' => 'Your Alert!',
			'type' => 'textarea',
			'label' => __('Alert Text', 'textdomain'),
			'desc' => __('Add the alert\'s text', 'textdomain'),
		)
		
	),
	'shortcode' => '[yer_alert style="{{style}}"] {{content}} [/yer_alert]',
	'popup_title' => __('Insert Alert Shortcode', 'textdomain')
);

/*-----------------------------------------------------------------------------------*/
/*	Toggle Config
/*-----------------------------------------------------------------------------------*/

$yer_shortcodes['toggle'] = array(
	'no_preview' => true,
	'params' => array(
		'title' => array(
			'type' => 'text',
			'label' => __('Toggle Content Title', 'textdomain'),
			'desc' => __('Add the title that will go above the toggle content', 'textdomain'),
			'std' => 'Title'
		),
		'content' => array(
			'std' => 'Content',
			'type' => 'textarea',
			'label' => __('Toggle Content', 'textdomain'),
			'desc' => __('Add the toggle content. Will accept HTML', 'textdomain'),
		),
		'state' => array(
			'type' => 'select',
			'label' => __('Toggle State', 'textdomain'),
			'desc' => __('Select the state of the toggle on page load', 'textdomain'),
			'options' => array(
				'open' => 'Open',
				'closed' => 'Closed'
			)
		),
		
	),
	'shortcode' => '[yer_toggle title="{{title}}" state="{{state}}"] {{content}} [/yer_toggle]',
	'popup_title' => __('Insert Toggle Content Shortcode', 'textdomain')
);

/*-----------------------------------------------------------------------------------*/
/*	Tabs Config
/*-----------------------------------------------------------------------------------*/

$yer_shortcodes['tabs'] = array(
    'params' => array(),
    'no_preview' => true,
    'shortcode' => '[yer_tabs] {{child_shortcode}}  [/yer_tabs]',
    'popup_title' => __('Insert Tab Shortcode', 'textdomain'),
    
    'child_shortcode' => array(
        'params' => array(
            'title' => array(
                'std' => 'Title',
                'type' => 'text',
                'label' => __('Tab Title', 'textdomain'),
                'desc' => __('Title of the tab', 'textdomain'),
            ),
            'content' => array(
                'std' => 'Tab Content',
                'type' => 'textarea',
                'label' => __('Tab Content', 'textdomain'),
                'desc' => __('Add the tabs content', 'textdomain')
            )
        ),
        'shortcode' => '[yer_tab title="{{title}}"] {{content}} [/yer_tab]',
        'clone_button' => __('Add Tab', 'textdomain')
    )
);

/*-----------------------------------------------------------------------------------*/
/*	Columns Config
/*-----------------------------------------------------------------------------------*/

$yer_shortcodes['columns'] = array(
	'params' => array(),
	'shortcode' => ' {{child_shortcode}} ', // as there is no wrapper shortcode
	'popup_title' => __('Insert Columns Shortcode', 'textdomain'),
	'no_preview' => true,
	
	// child shortcode is clonable & sortable
	'child_shortcode' => array(
		'params' => array(
			'column' => array(
				'type' => 'select',
				'label' => __('Column Type', 'textdomain'),
				'desc' => __('Select the type, ie width of the column.', 'textdomain'),
				'options' => array(
					'yer_one_third' => 'One Third',
					'yer_one_third_last' => 'One Third Last',
					'yer_two_third' => 'Two Thirds',
					'yer_two_third_last' => 'Two Thirds Last',
					'yer_one_half' => 'One Half',
					'yer_one_half_last' => 'One Half Last',
					'yer_one_fourth' => 'One Fourth',
					'yer_one_fourth_last' => 'One Fourth Last',
					'yer_three_fourth' => 'Three Fourth',
					'yer_three_fourth_last' => 'Three Fourth Last',
					'yer_one_fifth' => 'One Fifth',
					'yer_one_fifth_last' => 'One Fifth Last',
					'yer_two_fifth' => 'Two Fifth',
					'yer_two_fifth_last' => 'Two Fifth Last',
					'yer_three_fifth' => 'Three Fifth',
					'yer_three_fifth_last' => 'Three Fifth Last',
					'yer_four_fifth' => 'Four Fifth',
					'yer_four_fifth_last' => 'Four Fifth Last',
					'yer_one_sixth' => 'One Sixth',
					'yer_one_sixth_last' => 'One Sixth Last',
					'yer_five_sixth' => 'Five Sixth',
					'yer_five_sixth_last' => 'Five Sixth Last'
				)
			),
			'content' => array(
				'std' => '',
				'type' => 'textarea',
				'label' => __('Column Content', 'textdomain'),
				'desc' => __('Add the column content.', 'textdomain'),
			)
		),
		'shortcode' => '[{{column}}] {{content}} [/{{column}}] ',
		'clone_button' => __('Add Column', 'textdomain')
	)
);

/*-----------------------------------------------------------------------------------*/
/*	Divider Config
/*-----------------------------------------------------------------------------------*/

$yer_shortcodes['divider'] = array(
    'no_preview' => true,
    'params' => array(
        'style' => array(
            'type' => 'select',
            'label' => __('Divider Style', 'yerlix'),
            'desc' => __('Select the divider\'s style', 'yerlix'),
            'options' => array(
                'bold' => 'Bold Line',
                'thin' => 'Thin Line',
                'medium' => 'Medium Line',
                'dashed' => 'Dashed Line',
                'dark' => 'Dark Line',
                'light' => 'Light Line'
            )
        ),
        'text' => array(
            'type' => 'select',
            'label' => __('Divider Text', 'yerlix'),
            'desc' => __('Select the divider\'s text option', 'yerlix'),
            'options' => array(
                'notext' => 'No Text',
                'textleft' => 'Text Left',
                'textright' => 'Text Right',
                'textcenter' => 'Text Center'
            )
        ),
        'content' => array(
            'std' => 'Divider Text',
            'type' => 'text',
            'label' => __('Divider Text', 'yerlix'),
            'desc' => __('Add the divider\'s text', 'yerlix'),
        )

    ),
    'shortcode' => '[yer_divider style="{{style}}" text="{{text}}"] {{content}} [/yer_divider]',
    'popup_title' => __('Insert Divider Shortcode', 'yerlix')
);

/*-----------------------------------------------------------------------------------*/
/*	Testimonial Config
/*-----------------------------------------------------------------------------------*/

$yer_shortcodes['testimonial'] = array(
    'no_preview' => true,
    'params' => array(
        'style' => array(
            'type' => 'select',
            'label' => __('Testimonial Style', 'yerlix'),
            'desc' => __('Select the testimonial\'s style', 'yerlix'),
            'options' => array(
                'dark' => 'Dark Style',
                'light' => 'Light Style'
            )
        ),
        'avatar' => array(
            'std' => '',
            'type' => 'text',
            'label' => __('Testimonial Author photo link', 'yerlix'),
            'desc' => __('Add the testimonial\'s author photo link.', 'yerlix'),
        ),
        'name' => array(
            'std' => 'Testimonial Author',
            'type' => 'text',
            'label' => __('Testimonial Author', 'yerlix'),
            'desc' => __('Add the testimonial\'s author', 'yerlix'),
        ),
        'link' => array(
            'std' => '',
            'type' => 'text',
            'label' => __('Testimonial Link', 'yerlix'),
            'desc' => __('Add the testimonial\'s link', 'yerlix'),
        ),
        'content' => array(
            'std' => 'Testimonial Text',
            'type' => 'textarea',
            'label' => __('Testimonial Text', 'yerlix'),
            'desc' => __('Add the testimonial\'s text', 'yerlix'),
        )

    ),
    'shortcode' => '[yer_testimonial style="{{style}}" avatar="{{avatar}}" name="{{name}}"] {{content}} [/yer_testimonial]',
    'popup_title' => __('Insert Testimonial Shortcode', 'yerlix')
);


/*-----------------------------------------------------------------------------------*/
/*	Team Config
/*-----------------------------------------------------------------------------------*/

$yer_shortcodes['team'] = array(
    'no_preview' => true,
    'params' => array(
        'style' => array(
            'type' => 'select',
            'label' => __('Team box Style', 'yerlix'),
            'desc' => __('Select the team box\'s style', 'yerlix'),
            'options' => array(
                'dark' => 'Dark Style',
                'light' => 'Light Style'
            )
        ),
        'avatar' => array(
            'std' => '',
            'type' => 'text',
            'label' => __('Team Author photo link', 'yerlix'),
            'desc' => __('Add the team\'s author photo link.', 'yerlix'),
        ),
        'name' => array(
            'std' => '',
            'type' => 'text',
            'label' => __('Team Author', 'yerlix'),
            'desc' => __('Add the team\'s author', 'yerlix'),
        ),
        'prof' => array(
            'std' => 'Designer',
            'type' => 'text',
            'label' => __('Team Prof', 'yerlix'),
            'desc' => __('Add the prof. team\'s author', 'yerlix'),
        ),
        'fblink' => array(
            'std' => '',
            'type' => 'text',
            'label' => __('Facebook Link', 'yerlix'),
            'desc' => __('Add the facebook link', 'yerlix'),
        ),
        'twilink' => array(
            'std' => '',
            'type' => 'text',
            'label' => __('Twitter Link', 'yerlix'),
            'desc' => __('Add the twitter link', 'yerlix'),
        ),
        'glink' => array(
            'std' => '',
            'type' => 'text',
            'label' => __('Google+ Link', 'yerlix'),
            'desc' => __('Add the google+ link', 'yerlix'),
        ),
        'content' => array(
            'std' => 'Testimonial Text',
            'type' => 'textarea',
            'label' => __('Testimonial Text', 'yerlix'),
            'desc' => __('Add the testimonial\'s text', 'yerlix'),
        )

    ),
    'shortcode' => '[yer_team style="{{style}}" avatar="{{avatar}}" name="{{name}}" prof="{{prof}}" fblink="{{fblink}}" twilink="{{twilink}}" glink="{{glink}}"] {{content}} [/yer_team]',
    'popup_title' => __('Insert Team Shortcode', 'yerlix')
);

/*-----------------------------------------------------------------------------------*/
/*	Partner Config
/*-----------------------------------------------------------------------------------*/

$yer_shortcodes['partner'] = array(
    'no_preview' => true,
    'params' => array(
        'style' => array(
            'type' => 'select',
            'label' => __('Partner box Style', 'yerlix'),
            'desc' => __('Select the partner box\'s style', 'yerlix'),
            'options' => array(
                'dark' => 'Dark Style',
                'light' => 'Light Style'
            )
        ),
        'logo' => array(
            'std' => '',
            'type' => 'text',
            'label' => __('Partner logo link', 'yerlix'),
            'desc' => __('Add the partner\'s logo link.', 'yerlix'),
        ),
        'content' => array(
            'std' => '',
            'type' => 'text',
            'label' => __('Partner Title', 'yerlix'),
            'desc' => __('Add the partner\'s title', 'yerlix'),
        ),

        'link' => array(
            'std' => '',
            'type' => 'text',
            'label' => __('Partner Link', 'yerlix'),
            'desc' => __('Add the partner link', 'yerlix'),
        ),

    ),
    'shortcode' => '[yer_partner style="{{style}}" logo="{{logo}}" link="{{link}}"]{{content}}[/yer_partner]',
    'popup_title' => __('Insert Partner Shortcode', 'yerlix')
);


/*-----------------------------------------------------------------------------------*/
/*	Service Config
/*-----------------------------------------------------------------------------------*/

$yer_shortcodes['service'] = array(
    'no_preview' => true,
    'params' => array(
        'style' => array(
            'type' => 'select',
            'label' => __('Partner box Style', 'yerlix'),
            'desc' => __('Select the partner box\'s style', 'yerlix'),
            'options' => array(
                'dark' => 'Dark Style',
                'light' => 'Light Style'
            )
        ),
        'icon' => array(
            'std' => '',
            'type' => 'text',
            'label' => __('Service icon link', 'yerlix'),
            'desc' => __('Add the service\'s icon link.', 'yerlix'),
        ),
        'name' => array(
            'std' => '',
            'type' => 'text',
            'label' => __('Service Title', 'yerlix'),
            'desc' => __('Add the service title', 'yerlix'),
        ),
        'content' => array(
            'std' => '',
            'type' => 'textarea',
            'label' => __('Short Description', 'yerlix'),
            'desc' => __('Add the service\'s description', 'yerlix'),
        ),


    ),
    'shortcode' => '[yer_service style="{{style}}" icon="{{icon}}" name="{{name}}"]{{content}}[/yer_service]',
    'popup_title' => __('Insert Service Shortcode', 'yerlix')
);

/*-----------------------------------------------------------------------------------*/
/*	Map Config
/*-----------------------------------------------------------------------------------*/

$yer_shortcodes['map'] = array(
    'no_preview' => true,
    'params' => array(
        'address' => array(
            'std' => 'Chisinau',
            'type' => 'text',
            'label' => __('Add the Address', 'yerlix'),
            'desc' => __('Add the address', 'yerlix'),
        ),
        'width' => array(
            'std' => '100%',
            'type' => 'text',
            'label' => __('Map width', 'yerlix'),
            'desc' => __('Add the width', 'yerlix'),
        ),
        'height' => array(
            'std' => '400px',
            'type' => 'text',
            'label' => __('Map height', 'yerlix'),
            'desc' => __('Add the map height', 'yerlix'),
        ),


    ),
    'shortcode' => '[yer_map address="{{address}}" width="{{width}}" height="{{height}}"]',
    'popup_title' => __('Insert Map Shortcode', 'yerlix')
);

?>