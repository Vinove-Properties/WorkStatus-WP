<div class="filters">
<div class="filter-by">Filter By</div>
<div class="grid-33">
<div id="tg-feature" class="select-cat">
  <div class="select-box active input-field" onclick="apnSelect('tg-feature');">
    <span class="error"></span>
    <a href="javascript:void(0);" class="select-first" id="lbl-feature">Feature</a> 
    <span class="arrow-btn"></span>
  </div>
  <?php 
      $fterms = get_terms('feature', array('hide_empty' => true));
      if($fterms ){
          echo '<div class="select-list"><ul class="in-options">';
          foreach( $fterms as $row ){
              echo '<li><a href="javascript:void(0);" onclick="tax_filter('.$row->term_id.', \'feature\', \''.$row->name.'\')">'.$row->name.'</a></li>';
          }
          echo '</div></ul>';
      }
  ?>
</div>
</div>

<div class="grid-33">
<div id="tg-industrie" class="select-cat">
<input type="hidden" value="0" name="hd-feature" id="hd-feature-input">
<input type="hidden" value="0" name="hd-industry" id="hd-industry-input">	
<div class="select-box active input-field" onclick="apnSelect('tg-industrie');">
<span class="error"></span>
<a href="javascript:void(0);" class="select-first" id="lbl-industrie">Industry</a> 
<span class="arrow-btn"></span>
</div>
<?php 
$fterms = get_terms('industrie', array('hide_empty' => true));
if($fterms ){
  echo '<div class="select-list"><ul class="in-options">';
  foreach( $fterms as $row ){
      echo '<li><a href="javascript:void(0);" onclick="tax_filter('.$row->term_id.', \'industrie\', \''.$row->name.'\')">'.$row->name.'</a></li>';
  }
  echo '</div></ul>';
}
?>
</div>
</div>	
<div class="grid-33">
<?php get_search_form(); ?>
</div>
<div class="clear"></div>
</div>