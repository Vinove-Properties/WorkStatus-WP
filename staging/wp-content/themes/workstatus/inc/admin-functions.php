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

add_action('admin_init', function(){

if( isset($_GET['sd-action']) && !empty($_GET['sd-action']) ){
if ( ! isset( $_GET['_wpnonce'] ) || ! wp_verify_nonce( $_GET['_wpnonce'], 'exp-logs' ) ) {
    die("Invalid Export Link");
} 
$post_id = ( isset($_GET['post']) && !empty($_GET['post']) ) ? (int)$_GET['post'] : 0; 
    global $wpdb;
    $dbObj = $wpdb;
    if( isset( $_SERVER['HTTP_HOST'] ) && ($_SERVER['HTTP_HOST'] != "localhost") ){
    $dbObj = new wpdb( 'workstatus-io-crm-prod-db-user', '7DsEMIA5ppFAAyK', 'workstatus-io-crm-prod-db', 'localhost' );
    }
    $results = $dbObj->get_results("SELECT * FROM ws_survey_data where survey_id = {$post_id} ORDER BY ID DESC",
    ARRAY_A);

    if( $results ){
        $delimiter  = ","; 
        $filename   = "ws-surevy-data".time().".csv"; 
        $f          = fopen('php://memory', 'w'); 
        $fields     = ['Email', 'Survey Data', 'Created on'];
        fputcsv($f, $fields, $delimiter); 
        foreach( $results as $row ){
            $srData = [];
            $timestamp  = strtotime($row['created_at']);
            $data       = json_decode($row['data']);
            $bypass     = ['post_id', 'su-nonce', 'email_addr'];
            
            $syData     = '';
            foreach( $data as $key => $val ){
                if( !in_array($key, $bypass) ){
                    if( strpos($key, 'que-') !== false ){
                        //$syData .= '<strong>'.$val.'</strong>';
                        $syData .= $val."\r\n";
                    }                           
                    if( strpos($key, 'ans-') !== false ){
                        if( $val !== "other" ){
                            $syData .= $val."\r\n";
                        }           
                    }
                }                       
            }

            $srData[] = esc_html($row['email']);
            $srData[] = $syData;
            $srData[] = date('d-m-Y H:i:s', $timestamp);
            fputcsv($f, $srData, $delimiter); 
        }        
        fseek($f, 0); 
        header('Content-Type: text/csv'); 
        header('Content-Disposition: attachment; filename="' . $filename . '";'); 
        fpassthru($f); 
        die;
    }else{
        die("No data found");
    }
}
});

function inhouse_survey_cb(){
$post_id = ( isset($_GET['post']) && !empty($_GET['post']) ) ? (int)$_GET['post'] : 0;
$url     = admin_url('admin.php?page=survey-entries&post='.$post_id.'&sd-action=export');
$dwnLink = wp_nonce_url( $url, 'exp-logs' );
?>
<div class="wrap">
    <h1>Survey Data : <?php echo get_the_title( $post_id ); ?></h1>
    <div class="svy-actions" style="margin:10px 0;">
    <a href="<?php echo $dwnLink; ?>" class="button button-primary">Export Survey Data</a>
    </div>
    <table class="wp-list-table widefat striped">
        <thead>
            <tr>
                <!-- <th>ID</th> -->
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
            $results = $dbObj->get_results("SELECT * FROM ws_survey_data where survey_id = {$post_id} ORDER BY ID DESC",
            ARRAY_A);
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
                    //echo "<td>" . esc_html($row['ID']) . "</td>";
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