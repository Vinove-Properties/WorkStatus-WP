<?php

/* Unique options for every EP theme */

$admin_url = EPCL_PLUGIN_URL.'/functions/admin';

/* Blog */

Redux::setSection( $opt_name, array(
	'title' => esc_html__('Blog', 'epcl_framework'),
	'icon' => 'el-icon-edit',
) );

// Global Options

Redux::setSection( $opt_name, array(
	'title' => esc_html__('Global Options', 'epcl_framework'),
    // 'icon' => 'el-icon-edit',
    'subsection' => true,
	'fields' => array(
        array(
			'id' => 'enable_breadcrumbs',
			'type' => 'switch',
			'title' => esc_html__('Display Breadcrumbs on posts/pages', 'epcl_framework'),
			'desc' => esc_html__('This is compatible with Yoast SEO or Breadcrumbs NavXT plugins if installed.', 'epcl_framework'),
			'default' => 0
        ),
        array(
			'id' => 'breadcrumbs_type',
			'type' => 'button_set',
            'title' => esc_html__('Breadcrumbs Plugin', 'epcl_framework'),
            'required' => array('enable_breadcrumbs', '=', '1'),
			'desc' => __('You can check how to enable breadcrumbs for Yoast SEO: <a href="https://kb.yoast.com/kb/implement-wordpress-seo-breadcrumbs/#enable-and-configure-the-yoast-breadcrumbs" target="_blank">here</a>', 'epcl_framework'),
            'options' => array(
                'yoast' => 'Yoast SEO',
                'navxt' => 'NavXT',
            ),
			'default' => 'yoast'
        ),
        array(
			'id' => 'pagination_method_grid',
			'type' => 'button_set',
            'title' => esc_html__('Pagination Method Grid Posts', 'epcl_framework'),
            // 'desc' => esc_html__('On Grid style posts.', 'epcl_framework'),
            // 'required' => array('enable_breadcrumbs', '=', '1'),
			'subtitle' => '',
            'options' => array(
                'classic' => 'Classic',
                'loadmore' => 'Ajax Load More',
            ),
			'default' => 'classic'
        ),
        array(
			'id' => 'pagination_method_classic',
			'type' => 'button_set',
            'title' => esc_html__('Pagination Method Classic Posts', 'epcl_framework'),
            // 'desc' => esc_html__('On Classic style posts.', 'epcl_framework'),
            // 'required' => array('enable_breadcrumbs', '=', '1'),
			'subtitle' => '',
            'options' => array(
                'classic' => 'Classic',
                'loadmore' => 'Ajax Load More',
            ),
			'default' => 'classic'
		),
        array(
			'id' => 'enable_global_date',
			'type' => 'switch',
			'title' => esc_html__('Display Date', 'epcl_framework'),
			'desc' => esc_html__('If is OFF, it will disable dates on posts, lists, carousel, widgets, etc.', 'epcl_framework'),
			'default' => 1
        ),
        array(
			'id' => 'global_date_mode',
			'type' => 'button_set',
            'title' => esc_html__('Date Display', 'epcl_framework'),
            'desc' => __('Note: <b>modified date</b> will not affect the post order on the homepage, its just a visual change.', 'epcl_framework'),
            // 'required' => array('enable_breadcrumbs', '=', '1'),
			'subtitle' => esc_html__('Default: Published Date', 'epcl_framework'),
            'options' => array(
                'published' => 'Published Date',
                'modified' => 'Modified Date',
            ),
			'default' => 'published'
		),
        array(
			'id' => 'enable_global_comments',
			'type' => 'switch',
			'title' => esc_html__('Display Comments Counter', 'epcl_framework'),
			'desc' => esc_html__('If is OFF, it will disable dates on posts, lists, etc.', 'epcl_framework'),
			'default' => 1
        ),
        array(
			'id' => 'enable_global_category',
			'type' => 'switch',
			'title' => esc_html__('Display Categories', 'epcl_framework'),
			'desc' => esc_html__('If is OFF, it will disable categories on posts, lists, carousel, widgets, etc.', 'epcl_framework'),
			'default' => 1
        ),
        array(
			'id' => 'enable_global_views',
			'type' => 'switch',
			'title' => esc_html__('Display Views Counter', 'epcl_framework'),
			'desc' => esc_html__('If is ON, it will enable views counter on posts, lists, etc.', 'epcl_framework'),
			'default' => 0
        ),
        array(
			'id' => 'enable_global_counter',
			'type' => 'switch',
			'title' => esc_html__('Display Global Counter', 'epcl_framework'),
			'desc' => esc_html__('This option will override any page module settings, it is useful if you want to disable the Resources Counter on every page (homes, archives, categories, etc).', 'epcl_framework'),
			'default' => 1
        ),
        array(
			'id' => 'counter_text',
			'type' => 'text',
			'title' => esc_html__('Global counter Text', 'epcl_framework'),
			'fullwidth' => true,
			'desc' => __('If you don\' want to use the default text "We have x resources.." you can replace it here.<br>Example of usage: <b>Hello! We have %s resources for you...</b>', 'epcl_framework'),
        ),
        array(
			'id' => 'counter_text_archives',
			'type' => 'text',
			'title' => esc_html__('Global counter Text on archives', 'epcl_framework'),
			'fullwidth' => true,
			'desc' => __('If you don\' want to use the default text "We found x resources.." you can replace it here.<br>Example of usage: <b>We found %s resources for you...</b>', 'epcl_framework'),
        ),
        array(
			'id' => 'enable_global_filters',
			'type' => 'switch',
			'title' => esc_html__('Display Filters before post lists', 'epcl_framework'),
			'desc' => esc_html__('This option affects the global articles list with filters (red one).', 'epcl_framework'),
			'default' => 1
        ),
        array(
			'id' => 'filters_search_box',
			'type' => 'switch',
			'title' => esc_html__('Display Search Box on Filters', 'epcl_framework'),
			'desc' => esc_html__('This option affects the global articles list with filters (red one).', 'epcl_framework'),
			'default' => 1
        ),
        array(
			'id' => 'searchform_text',
			'type' => 'text',
			'title' => esc_html__('Search Form Text', 'epcl_framework'),
			'fullwidth' => true,
			'desc' => __('If you don\' want to use the default text "Search in resources.." you can replace it here.<br>Example of usage: <b>Search in the blog...</b>', 'epcl_framework'),
        ),
        array(
			'id' => 'filters_category',
			'type' => 'switch',
			'title' => esc_html__('Display Category Select Box on Filters', 'epcl_framework'),
			'desc' => esc_html__('This option affects the global articles list with filters (red one).', 'epcl_framework'),
			'default' => 1
        ),
        array(
			'id' => 'filters_category_mobile',
			'type' => 'switch',
			'title' => esc_html__('Display Category Select Box on Mobile', 'epcl_framework'),
			'desc' => esc_html__('This option affects the global articles list with filters (red one).', 'epcl_framework'),
			'default' => 0
        ),
        array(
			'id' => 'filters_author',
			'type' => 'switch',
			'title' => esc_html__('Display Author Select Box on Filters', 'epcl_framework'),
			'desc' => esc_html__('If you are a solo blogger it is recommended to disable this option.', 'epcl_framework'),
			'default' => 1
        ),
        array(
			'id' => 'hosted_comments',
			'type' => 'radio',
			'title' => esc_html__('Comments Support', 'epcl_framework'),
			'desc' => esc_html__('This option affects posts and pages.', 'epcl_framework'),
			'options' => array('1' => 'Self Hosted', '2' => 'Disqus', '3' => 'Facebook'),
			'default' => 1
		),
		array(
			'id' => 'disqus_id',
			'type' => 'text',
			'title' => esc_html__('Disqus ID', 'epcl_framework'),
			'desc' => esc_html__('This option affects posts and pages.', 'epcl_framework'),
			'required' => array('hosted_comments', '=', '2'),
        ),
        array(
			'id' => 'facebook_lang_code',
			'type' => 'text',
			'title' => esc_html__('Facebook Language Code', 'epcl_framework'),
			'desc' => __('<b>es_ES</b> = spanish, <b>en_US</b> = English, <b>fr_FR</b> = French.<br>You can search for your <a href="https://gist.github.com/mechastorm/3626739">code here.</a>.', 'epcl_framework'),
			'required' => array('hosted_comments', '=', '3'),
		),
        array(
			'id' => 'facebook_app_id',
			'type' => 'text',
			'title' => esc_html__('Facebook Moderation APP ID', 'epcl_framework'),
			'desc' => __('It is recommended to create an APP and link to your FB comments to moderate it, <a href="https://developers.facebook.com/docs/plugins/comments/#moderation">check all information here.</a>', 'epcl_framework'),
			'required' => array('hosted_comments', '=', '3'),
		),
	)
) );

// Grid Posts Options

Redux::setSection( $opt_name, array(
	'title' => esc_html__('Grid Posts', 'epcl_framework'),
    // 'icon' => 'el-icon-edit',
    'subsection' => true,
	'fields' => array(
        array(
            'id'   => 'info_normal',
            'type' => 'info',
            'style' => 'info',
            'icon' => 'el el-info-circle',
            'title' => esc_html__('Important:', 'epcl_framework'),
            'desc' => esc_html__('All these options affects grid post with 3 columns and grid with sidebar (2 columns)', 'epcl_framework')
        ),
        array(
			'id' => 'grid_display_author',
			'type' => 'switch',
			'title' => esc_html__('Display Author', 'epcl_framework'),
			'desc' => esc_html__('If disabled, this option will hide author and resources counter.', 'epcl_framework'),
			'default' => 1
        ),
        array(
			'id' => 'author_counter',
			'type' => 'switch',
			'title' => esc_html__('Display Author Resources counter', 'epcl_framework'),
			'desc' => esc_html__('Here you can hide resoruces counter, separately. If you are a solo blogger it is recommended to disable this option.', 'epcl_framework'),
			'default' => 1
        ),
        array(
			'id' => 'grid_counter_text',
			'type' => 'text',
			'title' => esc_html__('Author Resources text (Optional)', 'epcl_framework'),
			'desc' => __('If you don\' want to use the default text "X resources" below author, you can replace it here.<br>Example of usage: <b>%s Resources </b>', 'epcl_framework'),
        ),
        array(
			'id' => 'grid_display_excerpt',
			'type' => 'switch',
			'title' => esc_html__('Display Excerpt', 'epcl_framework'),
			'desc' => esc_html__('If disabled, all words after your posts titles.', 'epcl_framework'),
			'default' => 1
        ),
        array(
			'id' => 'small_excerpt_length',
			'type' => 'text',
			'title' => esc_html__('Excerpt length', 'epcl_framework'),
            'desc' => __('The max number of words to show after post titles. Recommended: 17', 'epcl_framework'),
            'validate' => 'no_special_chars',
            'default' => 17
        ),
        array(
			'id' => 'enable_meta_data',
			'type' => 'switch',
			'title' => esc_html__('Display Meta data', 'epcl_framework'),
			'desc' => esc_html__('This option will enable the date, comments and downloads counter.', 'epcl_framework'),
			'default' => 0
        ),
	)
) );

// Classic Posts Option

Redux::setSection( $opt_name, array(
	'title' => esc_html__('Classic Posts', 'epcl_framework'),
    // 'icon' => 'el-icon-edit',
    'subsection' => true,
	'fields' => array(
        array(
			'id' => 'classic_display_author',
			'type' => 'switch',
			'title' => esc_html__('Display Author', 'epcl_framework'),
			'desc' => esc_html__('If disabled, this option will hide author.', 'epcl_framework'),
			'default' => 1
        ),
        array(
			'id' => 'classic_display_excerpt',
			'type' => 'switch',
			'title' => esc_html__('Display Excerpt', 'epcl_framework'),
			'desc' => esc_html__('If disabled, all words after your posts titles.', 'epcl_framework'),
			'default' => 1
        ),
        array(
			'id' => 'large_excerpt_length',
			'type' => 'text',
			'title' => esc_html__('Excerpt length', 'epcl_framework'),
            'desc' => __('The max number of words to show after post titles. Recommended: 30', 'epcl_framework'),
            'validate' => 'no_special_chars',
            'default' => 30
        ),
        array(
			'id' => 'classic_enable_meta_data',
			'type' => 'switch',
			'title' => esc_html__('Display Meta data on Classic Posts', 'epcl_framework'),
			'desc' => esc_html__('Enable the date, comments and downloads counter.', 'epcl_framework'),
			'default' => 1
        ),
	)
) );

// Layouts

Redux::setSection( $opt_name, array(
	'title' => esc_html__('Layouts', 'epcl_framework'),
    // 'icon' => 'el-icon-edit',
    'subsection' => true,
	'fields' => array(
        array(
			'id' => 'mobile_layout',
			'type' => 'button_set',
			'title' => esc_html__('Mobile Layout', 'epcl_framework'),
			'subtitle' => '',
			'desc' => __('By default is added some space on mobile devices, if you want to remove those spaces select fullwidth.', 'epcl_framework'),
			'options' => array('boxed' => 'Boxed (with margins)', 'fullwidth' => 'Fullwidth'),
			'default' => 'boxed'
        ),
        array(
			'id' => 'posts_page_layout',
			'type' => 'select',
			'title' => esc_html__('Articles layout on posts page (homepage without modules).', 'epcl_framework'),
            'desc' => esc_html__('By default is used grid posts (3 columns), some customers uses 1 page as homepage and another one for Blog.', 'epcl_framework'),
            'options'  => array(
                'classic' => esc_html__('Classic Posts', 'epcl_framework'),
                'grid_3_cols' => esc_html__('Grid 3 columns', 'epcl_framework'),
                'grid_4_cols' => esc_html__('Grid 4 columns', 'epcl_framework'),
                'grid_sidebar' => esc_html__('Grid with sidebar', 'epcl_framework'),                
            ),
			'default' => 'grid_3_cols'
        ),
        array(
			'id' => 'archive_layout',
			'type' => 'select',
			'title' => esc_html__('Articles layout on archives page.', 'epcl_framework'),
            'desc' => esc_html__('By default is used classic posts.', 'epcl_framework'),
            'options'  => array(
                'classic' => esc_html__('Classic Posts', 'epcl_framework'),
                'grid_3_cols' => esc_html__('Grid 3 columns', 'epcl_framework'),
                'grid_4_cols' => esc_html__('Grid 4 columns', 'epcl_framework'),
                'grid_sidebar' => esc_html__('Grid with sidebar', 'epcl_framework'),                
            ),
			'default' => 'classic'
        ),
        array(
			'id' => 'search_layout',
			'type' => 'select',
			'title' => esc_html__('Articles layout on search results page.', 'epcl_framework'),
            'desc' => esc_html__('By default is used classic posts.', 'epcl_framework'),
            'options'  => array(
                'classic' => esc_html__('Classic Posts', 'epcl_framework'),
                'grid_3_cols' => esc_html__('Grid 3 columns', 'epcl_framework'),
                'grid_4_cols' => esc_html__('Grid 4 columns', 'epcl_framework'),
                'grid_sidebar' => esc_html__('Grid with sidebar', 'epcl_framework'),
            ),
			'default' => 'classic'
        ),
	)
) );

// Archives

Redux::setSection( $opt_name, array(
	'title' => esc_html__('Archives', 'epcl_framework'),
    // 'icon' => 'el-icon-edit',
    'subsection' => true,
	'fields' => array(
        array(
			'id' => 'archives_cat_description',
			'type' => 'switch',
			'title' => esc_html__('Display Category Title and Description instead of Counter', 'epcl_framework'),
			'desc' => esc_html__('This option affects only Categories and Tags pages.', 'epcl_framework'),
			'default' => 0
        ),
        array(
			'id' => 'archives_search_term',
			'type' => 'switch',
			'title' => esc_html__('Display current Search Term instead of Counter', 'epcl_framework'),
			'desc' => esc_html__('This option affects only Search page.', 'epcl_framework'),
			'default' => 0
        ),
	)
) );

// Single Post

Redux::setSection( $opt_name, array(
	'title' => esc_html__('Single Post Content', 'epcl_framework'),
    // 'icon' => 'el-icon-edit',
    'subsection' => true,
	'fields' => array(
        array(
			'id' => 'enable_filters_single',
			'type' => 'switch',
			'title' => esc_html__('Display Filters before post content', 'epcl_framework'),
			'desc' => esc_html__('This option affects only single posts, not pages.', 'epcl_framework'),
			'default' => 0
        ),
        array(
			'id' => 'single_post_layout',
			'type' => 'button_set',
			'title' => esc_html__('Post Layout', 'epcl_framework'),
			'subtitle' => '',
			'desc' => __('This option will override any post setting, it is useful if you want to show all your post with the same layout.<br><b>Important:</b> this option only affects standard posts with images, not video or galleries.', 'epcl_framework'),
			'options' => array('1' => 'Inherit from every Post', '2' => 'Standard', '3' => 'Fullcover',),
			'default' => '1'
        ),
        array(
			'id' => 'enable_featured_image',
			'type' => 'switch',
			'title' => esc_html__('Display Featured image globally', 'epcl_framework'),
			'desc' => esc_html__('If is OFF, all featured images from all posts will be hidden.', 'epcl_framework'),
			'default' => 1
		),
        array(
			'id' => 'single_enable_meta_data',
			'type' => 'switch',
			'title' => esc_html__('Display Meta data on Single Post', 'epcl_framework'),
			'desc' => esc_html__('Enable the date, comments and downloads counter.', 'epcl_framework'),
			'default' => 1
        ),
        array(
			'id' => 'enable_author_top',
			'type' => 'switch',
			'title' => esc_html__('Display Author information (next to the date)', 'epcl_framework'),
			'desc' => esc_html__('This option only affects posts.', 'epcl_framework'),
			'default' => 0
		),
		array(
			'id' => 'enable_author',
			'type' => 'switch',
			'title' => esc_html__('Display Author Box (below post content)', 'epcl_framework'),
			'desc' => esc_html__('This option only affects posts.', 'epcl_framework'),
			'default' => 1
		),
		array(
			'id' => 'siblings_posts',
			'type' => 'switch',
			'title' => esc_html__('Display next/prev posts', 'epcl_framework'),
			'desc' => esc_html__('This option will enable siblings posts after the author information.', 'epcl_framework'),
			'default' => 1
        ),
        array(
			'id' => 'enable_tags',
			'type' => 'switch',
			'title' => esc_html__('Display tags below single post', 'epcl_framework'),
			'desc' => esc_html__('This option will enable tags after share url box.', 'epcl_framework'),
			'default' => 1
		),
	)
) );

// Share buttons

Redux::setSection( $opt_name, array(
	'title' => esc_html__('Share Buttons', 'epcl_framework'),
    // 'icon' => 'el-icon-edit',
    'subsection' => true,
	'fields' => array(
        array(
			'id' => 'enable_share_buttons',
			'type' => 'switch',
			'title' => esc_html__('Display Share Buttons', 'epcl_framework'),
			'desc' => esc_html__('Show share buttons on the bottom of the post.', 'epcl_framework'),
			'default' => 1
        ),
        array(
			'id' => 'share_url_method',
			'type' => 'button_set',
			'title' => esc_html__('Share URL Method', 'epcl_framework'),
			'subtitle' => 'Default: Permalink',
			'desc' => __('If you experience any strange character when sharing your articles on social networks, select Shortlink.', 'epcl_framework'),
			'options' => array(
                'permalink' => 'Permalink',
                'shortlink' => 'Shortlink'
            ),
			'default' => 'permalink'
        ),
        array(
			'id' => 'enable_share_buttons_page',
			'type' => 'switch',
			'title' => esc_html__('Display Share Buttons on Pages', 'epcl_framework'),
			'desc' => esc_html__('Show share buttons on the bottom of the page.', 'epcl_framework'),
			'default' => 0
        ),
        array(
			'id' => 'enable_sticky_share_buttons',
			'type' => 'switch',
			'title' => esc_html__('Display Sticky Share Buttons', 'epcl_framework'),
			'desc' => esc_html__('Show floating share buttons at the left of the post.', 'epcl_framework'),
            'default' => 1,
        ),
        array(
			'id' => 'enable_sticky_share_buttons_page',
			'type' => 'switch',
			'title' => esc_html__('Display Sticky Share Buttons on Pages', 'epcl_framework'),
			'desc' => esc_html__('Show floating share buttons at the left of all pages.', 'epcl_framework'),
            'default' => 0,
        ),
        array(
			'id' => 'enable_single_facebook',
			'type' => 'switch',
			'title' => '<i class="fa-stack fa-lg"><i class="fa fa-square-o fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x"></i></i> '.__('Display Facebook', 'epcl_framework'),
			'desc' => esc_html__('Enable or disable this specific network.', 'epcl_framework'),
            'default' => 1,
        ),
        array(
			'id' => 'enable_single_twitter',
			'type' => 'switch',
			'title' => '<i class="fa-stack fa-lg"><i class="fa fa-square-o fa-stack-2x"></i><i class="fa fa-twitter fa-stack-1x"></i></i> '.__('Display Twitter', 'epcl_framework'),
			'desc' => esc_html__('Enable or disable this specific network.', 'epcl_framework'),
            'default' => 1,
        ),
        array(
			'id' => 'enable_single_whatsapp',
			'type' => 'switch',
			'title' => '<i class="fa-stack fa-lg"><i class="fa fa-square-o fa-stack-2x"></i><i class="fa fa-whatsapp fa-stack-1x"></i></i> '.__('Display Whatsapp', 'epcl_framework'),
			'desc' => esc_html__('Enable or disable this specific network (only visible on mobile).', 'epcl_framework'),
            'default' => 1,
        ),
        array(
			'id' => 'enable_single_email',
			'type' => 'switch',
			'title' => '<i class="fa-stack fa-lg"><i class="fa fa-square-o fa-stack-2x"></i><i class="fa fa-envelope fa-stack-1x"></i></i> '.__('Display Email', 'epcl_framework'),
			'desc' => esc_html__('Enable or disable share by email.', 'epcl_framework'),
            'default' => 1,
        ),
        array(
			'id' => 'enable_single_pinterest',
			'type' => 'switch',
			'title' => '<i class="fa-stack fa-lg"><i class="fa fa-square-o fa-stack-2x"></i><i class="fa fa-pinterest fa-stack-1x"></i></i> '.__('Display Pinterest', 'epcl_framework'),
			'desc' => esc_html__('Enable or disable this specific network.', 'epcl_framework'),
            'default' => 0,
        ),
        array(
			'id' => 'enable_single_linkedin',
			'type' => 'switch',
			'title' => '<i class="fa-stack fa-lg"><i class="fa fa-square-o fa-stack-2x"></i><i class="fa fa-linkedin fa-stack-1x"></i></i> '.__('Display Linkedin', 'epcl_framework'),
			'desc' => esc_html__('Enable or disable this specific network.', 'epcl_framework'),
            'default' => 0,
        ),
        array(
			'id' => 'enable_single_telegram',
			'type' => 'switch',
			'title' => '<i class="fa-stack fa-lg"><i class="fa fa-square-o fa-stack-2x"></i><i class="fa fa-telegram fa-stack-1x"></i></i> '.__('Display Telegram', 'epcl_framework'),
			'desc' => esc_html__('Enable or disable this specific network.', 'epcl_framework'),
            'default' => 0,
        ),
        array(
			'id' => 'enable_single_vk',
			'type' => 'switch',
			'title' => '<i class="fa-stack fa-lg"><i class="fa fa-square-o fa-stack-2x"></i><i class="fa fa-vk fa-stack-1x"></i></i> '.__('Display VKontakte', 'epcl_framework'),
			'desc' => esc_html__('Enable or disable this specific network (popular on Russia).', 'epcl_framework'),
            'default' => 0,
        ),
	)
) );


?>