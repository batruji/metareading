<?php
/**
 * Get an category in a db friendly way, by checking globals and passed variables to avoid extra class instantiations
 * @param mixed $id
 * @return EM_Category
 */
function em_get_category($id = false) {
	global $EM_Category;
	//check if it's not already global so we don't instantiate again
	if( is_object($EM_Category) && get_class($EM_Category) == 'EM_Category' ){
		if( $EM_Category->term_id == $id ){
			return $EM_Category;
		}elseif( is_object($id) && $EM_Category->term_id == $id->term_id ){
			return $EM_Category;
		}
	}
	if( is_object($id) && get_class($id) == 'EM_Category' ){
		return $id;
	}else{
		return new EM_Category($id);
	}
}
class EM_Category extends EM_Object {	
	//Taxonomy Fields
	var $id = '';
	var $term_id;
	var $name;
	var $slug;
	var $term_group;
	var $term_taxonomy_id;
	var $taxonomy;
	var $description = '';
	var $parent = 0;
	var $count;
	//extra attributes imposed by EM_Category
	var $image_url = '';
	var $color;
	
	/**
	 * Gets data from POST (default), supplied array, or from the database if an ID is supplied
	 * @param $category_data
	 * @return null
	 */
	function EM_Category( $category_data = false ) {
		global $wpdb;
		$this->ms_global_switch();
		//Initialize
		$category = array();
		if( !empty($category_data) ){
			//Load category data
			if( is_object($category_data) && !empty($category_data->taxonomy) && $category_data->taxonomy == EM_TAXONOMY_CATEGORY ){
				$category = $category_data;
			}elseif( !is_numeric($category_data) ){
				$category = get_term_by('slug', $category_data, EM_TAXONOMY_CATEGORY);
				if( !$category ){
					$category = get_term_by('name', $category_data, EM_TAXONOMY_CATEGORY);				    
				}
			}else{		
				$category = get_term_by('id', $category_data, EM_TAXONOMY_CATEGORY);
			}
		}
		if( is_object($category) || is_array($category) ){
			foreach($category as $key => $value){
				$this->$key = $value;
			}
		}
		$this->id = $this->term_id; //backward compatability
		$this->ms_global_switch_back();
		do_action('em_category',$this, $category_data);
	}
	
	function get_color(){
		if( empty($this->color) ){
			global $wpdb;
			$color = $wpdb->get_var('SELECT meta_value FROM '.EM_META_TABLE." WHERE object_id='{$this->term_id}' AND meta_key='category-bgcolor' LIMIT 1");
			$this->color = ($color != '') ? $color:'#FFFFFF';
		}
		return $this->color;
	}
	
	function get_image_url(){
		if( empty($this->image_url) ){
			global $wpdb;
			$image_url = $wpdb->get_var('SELECT meta_value FROM '.EM_META_TABLE." WHERE object_id='{$this->term_id}' AND meta_key='category-image' LIMIT 1");
			$this->image_url = ($image_url != '') ? $image_url:'';
		}
		return $this->image_url;
	}
	
	function get_image_id(){
		if( empty($this->image_id) ){
			global $wpdb;
			$image_id = $wpdb->get_var('SELECT meta_value FROM '.EM_META_TABLE." WHERE object_id='{$this->term_id}' AND meta_key='category-image-id' LIMIT 1");
			$this->image_id = ($image_id != '') ? $image_id:'';
		}
		return $this->image_id;
	}
	
	function get_url(){
		if( empty($this->link) ){
			$this->ms_global_switch();
			$this->link = get_term_link($this->slug, EM_TAXONOMY_CATEGORY);
			$this->ms_global_switch_back();
			if ( is_wp_error($this->link) ) $this->link = '';
		}
		return $this->link;
	}
	
	/**
	 * Depreciated, don't use.
	 * @return mixed
	 */
	function has_events(){
		global $wpdb;
		return false;
	}
	
	function output_single($target = 'html'){
		$format = get_option ( 'dbem_category_page_format' );
		return apply_filters('em_category_output_single', $this->output($format, $target), $this, $target);	
	}
	
	function output($format, $target="html") {
		preg_match_all('/\{([a-zA-Z0-9_]+)\}([^{]+)\{\/[a-zA-Z0-9_]+\}/', $format, $conditionals);
		if( count($conditionals[0]) > 0 ){
			//Check if the language we want exists, if not we take the first language there
			foreach($conditionals[1] as $key => $condition){
				$format = str_replace($conditionals[0][$key], apply_filters('em_category_output_condition', '', $condition, $conditionals[0][$key], $this), $format);
			}
		}
		$category_string = $format;		 
	 	preg_match_all("/(#@?_?[A-Za-z0-9]+)({([a-zA-Z0-9,]+)})?/", $format, $placeholders);
	 	$replaces = array();
		foreach($placeholders[1] as $key => $result) {
			$replace = '';
			$full_result = $placeholders[0][$key];
			switch( $result ){
				case '#_CATEGORYNAME':
					$replace = $this->name;
					break;
				case '#_CATEGORYID':
					$replace = $this->term_id;
					break;
				case '#_CATEGORYNOTES':
				case '#_CATEGORYDESCRIPTION':
					$replace = $this->description;
					break;
				case '#_CATEGORYIMAGE':
				case '#_CATEGORYIMAGEURL':
					if( $this->get_image_url() != ''){
						if($result == '#_CATEGORYIMAGEURL'){
		        			$replace =  $this->get_image_url();
						}else{
							if( empty($placeholders[3][$key]) ){
								$replace = "<img src='".esc_url($this->get_image_url())."' alt='".esc_attr($this->name)."'/>";
							}else{
								$image_size = explode(',', $placeholders[3][$key]);
								if( $this->array_is_numeric($image_size) && count($image_size) > 1 ){
								    if( get_option('dbem_disable_timthumb') && $this->get_image_id() ){
								        //since we previously didn't store image ids along with the url to the image (since taxonomies don't allow normal featured images), sometimes we won't be able to do this, which is why we check there's a valid image id first
								    	$this->ms_global_switch();
								    	$replace = wp_get_attachment_image($this->get_image_id(), $image_size);
								    	$this->ms_global_switch_back();
								    }else{
										$width = ($image_size[0]) ? 'width="'.esc_attr($image_size[0]).'"':'';
										$height = ($image_size[1]) ? 'height="'.esc_attr($image_size[1]).'"':'';
										$replace = "<img src='".esc_url(em_get_thumbnail_url($this->get_image_url(), $image_size[0], $image_size[1]))."' alt='".esc_attr($this->name)."' $width $height />";
								    }
								}else{
									$replace = "<img src='".esc_url($this->get_image_url())."' alt='".esc_attr($this->name)."'/>";
								}
							}
						}
					}
					break;
				case '#_CATEGORYCOLOR':
					$replace = $this->get_color(); 
					break;
				case '#_CATEGORYLINK':
				case '#_CATEGORYURL':
					$link = $this->get_url();
					$replace = ($result == '#_CATEGORYURL') ? $link : '<a href="'.$link.'">'.esc_html($this->name).'</a>';
					break;
				case '#_CATEGORYSLUG':
					$replace = $this->slug;
					break;
				case '#_CATEGORYEVENTSPAST': //depreciated, erroneous documentation, left for compatability
				case '#_CATEGORYEVENTSNEXT': //depreciated, erroneous documentation, left for compatability
				case '#_CATEGORYEVENTSALL': //depreciated, erroneous documentation, left for compatability
				case '#_CATEGORYPASTEVENTS':
				case '#_CATEGORYNEXTEVENTS':
				case '#_CATEGORYALLEVENTS':
					//convert depreciated placeholders for compatability
					$result = ($result == '#_CATEGORYEVENTSPAST') ? '#_CATEGORYPASTEVENTS':$result; 
					$result = ($result == '#_CATEGORYEVENTSNEXT') ? '#_CATEGORYNEXTEVENTS':$result;
					$result = ($result == '#_CATEGORYEVENTSALL') ? '#_CATEGORYALLEVENTS':$result;
					//forget it ever happened? :/
					if ($result == '#_CATEGORYPASTEVENTS'){ $scope = 'past'; }
					elseif ( $result == '#_CATEGORYNEXTEVENTS' ){ $scope = 'future'; }
					else{ $scope = 'all'; }					
					$events_count = EM_Events::count( array('category'=>$this->term_id, 'scope'=>$scope) );
					if ( $events_count > 0 ){
					    $args = array('category'=>$this->term_id, 'scope'=>$scope, 'pagination'=>1, 'ajax'=>0);
					    $args['format_header'] = get_option('dbem_category_event_list_item_header_format');
					    $args['format_footer'] = get_option('dbem_category_event_list_item_footer_format');
					    $args['format'] = get_option('dbem_category_event_list_item_format');
						$args['limit'] = get_option('dbem_category_event_list_limit');
						$args['page'] = (!empty($_REQUEST['pno']) && is_numeric($_REQUEST['pno']) )? $_REQUEST['pno'] : 1;
					    $replace = EM_Events::output($args);
					} else {
						$replace = get_option('dbem_category_no_events_message','</ul>');
					}
					break;
				case '#_CATEGORYNEXTEVENT':
					$events = EM_Events::get( array('category'=>$this->term_id, 'scope'=>'future', 'limit'=>1, 'orderby'=>'event_start_date,event_start_time') );
					$replace = get_option('dbem_category_no_event_message');
					foreach($events as $EM_Event){
						$replace = $EM_Event->output(get_option('dbem_category_event_single_format'));
					}
					break;
				default:
					$replace = $full_result;
					break;
			}
			$replaces[$full_result] = apply_filters('em_category_output_placeholder', $replace, $this, $full_result, $target);
		}
		krsort($replaces);
		foreach($replaces as $full_result => $replacement){
			$category_string = str_replace($full_result, $replacement , $category_string );
		}
		return apply_filters('em_category_output', $category_string, $this, $format, $target);	
	}
	
	function can_manage( $capability_owner = 'edit_categories', $capability_admin = false ){
		global $em_capabilities_array;
		//Figure out if this is multisite and require an extra bit of validation
		$multisite_check = true;
		$can_manage = current_user_can($capability_owner);
		//if multisite and supoer admin, just return true
		if( is_multisite() && is_super_admin() ){ return true; }
		if( EM_MS_GLOBAL && !is_main_site() ){
			//User can't admin this bit, as they're on a sub-blog
			$can_manage = false;
			if(array_key_exists($capability_owner, $em_capabilities_array) ){
				$this->add_error( $em_capabilities_array[$capability_owner]);
			}
		}
		return $can_manage;
	}
}
?>