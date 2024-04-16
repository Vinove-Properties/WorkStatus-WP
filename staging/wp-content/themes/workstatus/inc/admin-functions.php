<?php
add_filter( 'post_row_actions', 'wssurvey_list_row_actions', 10, 2 );
function wssurvey_list_row_actions( $actions, $post ) {
	if( $post->post_type == "survey" ){
		$url = admin_url( 'admin.php?page=survey-entries&post=' . $post->ID );
		//$edit_link = add_query_arg( array( 'action' => 'view' ), $url );
		$actions['billa'] = sprintf( '<a href="%1$s">%2$s</a>',
		esc_url( $url ),
		esc_html( __( 'Survey Entries', 'workstatus' ) )
		);
	}
	return $actions;
}

add_action( 'admin_menu', function(){
	add_submenu_page( null, "Workstatus Survey", "Workstatus Survey", 'manage_options', 'survey-entries', 'inhouse_survey_cb');
});

function inhouse_survey_cb(){
$post_id = ( isset($_GET['post']) && !empty($_GET['post']) ) ? (int)$_GET['post'] : 0; ?>
<div class="wrap">
    <h1>Survey Data : <?php echo get_the_title( $post_id ); ?></h1>
    <table class="wp-list-table widefat striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Survey Data</th>
                <th>Posted on</th>
            </tr>
        </thead>
        <tbody>
            <?php
            global $wpdb;
            $dbObj = $wpdb;
		    if( isset( $_SERVER['HTTP_HOST'] ) && ($_SERVER['HTTP_HOST'] != "localhost") ){
		    $dbObj = new wpdb( 'workstatus-io-crm-prod-db-user', '7DsEMIA5ppFAAyK', 'workstatus-io-crm-prod-db', 'localhost' );
		    }
            $results = $dbObj->get_results("SELECT * FROM ws_survey_data where survey_id = $post_id", ARRAY_A);
            if ($results) {
                foreach ($results as $row) {
                	$timestamp 	= strtotime($row['created_at']);
                	$data 		= json_decode($row['data']);
                	$bypass 	= ['post_id', 'su-nonce', 'email_addr'];
                	$syData 	= '';
                	foreach( $data as $key => $val ){
	                	if( !in_array($key, $bypass) ){

	                		if( strpos($key, 'que-') !== false ){
	                			$syData .= '<strong>'.$val.'</strong>';
	                		}	                		
	                		if( strpos($key, 'ans-') !== false ){
	                			if( $val !== "other" ){
	                				$syData .= '<p>'.$val.'</p>';
	                			}			
	                		}
	                	}	                	
                	}
                    echo "<tr>";
                    echo "<td>" . esc_html($row['ID']) . "</td>";
                    echo "<td>" . esc_html($row['email']) . "</td>";
                    echo "<td>".$syData."</td>";
                    echo "<td>" . date('d-m-Y H:i:s', $timestamp) . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='3'>No data found</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<?php 
}
?>