<div id="ws-cmn-filter" class="cmn-filter">
   <div class="container">
      <div id="fltr-rw" class="filters">
      <div class="ws-cats">   
      <?php 
      //$categories = get_categories(['hide_empty' => true]);
      $categories = get_categories(['hide_empty' => true, 'number' => 6]);
      echo '<ul>';
      foreach($categories as $category) {
         if( is_category() ){
            $obj = get_queried_object();
            $isActive = ( is_category() && ($obj->slug == $category->slug) ) ? 'active' : '';
            echo '<li><a class="'.$isActive.'" href="'.get_category_link($category->term_id).'">' . $category->name . '</a></li>';
         }else{
            echo '<li><a href="'.get_category_link($category->term_id).'">' . $category->name . '</a></li>';   
         }         
      }
      echo '</ul>';
      ?>
      </div>
      <div class="search-btn">
         <a href="javascript:void(0);" class="search-act" id="show-sbar"></a>         
      </div>
      </div>
      <div id="search-rw" class="search-fld" style="display:none;">
      <?php get_search_form(); ?>
      <a href="javascript:void(0);" class="search-close" id="hide-sbar"></a>     
      </div>
      </div>
      
   </div>
</div>