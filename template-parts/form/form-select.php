<?php
// call list category for select form
function selectform($taxonomy = 'category', $orderby = 'name', $order = 'ASC') {
  $options = '';
  $args = array(
    'taxonomy' => $taxonomy,
    'orderby' => $orderby,
    'order'   => $order
  );
  $categories = get_categories( $args );
  foreach ( $categories as $category ) {
    $selected = '';
    if (isset($_GET['cat']) && $_GET['cat'] == $category->term_id) {
        $selected = 'selected';
    }
     $options .= '<option value="' . $category->term_id . '" ' . $selected . '>' . $category->name . '</option>';
  }
	return $options;
}

// call form select
function formselect(){
    $output =   "<div class=\"col-md-12 d-flex justify-content-center py-3\">\n<div class=\"col-md-5\">\n";
    $output .=  "<label for=\"category\" class=\"form-label\">".esc_html__('หมวดหมู่', 'mix style' )."</label>\n";
    $output .=  "<select class=\"form-select form-select-lg mb-3 border border-4 border-organ rounded-0\" ";
    $output .=  "name=\"cat\" id=\"category\" aria-label=\".form-select-lg example\">\n";
    $output .=  "<option value=\"\">".esc_html__('เลือกหมวดหมู่', 'mix style' )."</option>";
    $output .=  selectform();
    $output .=  "</select></div></div>";

    return $output;
}
?>