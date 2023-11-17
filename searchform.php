<!-- Search form -->
<?php
include get_template_directory() . '/template-parts/form/form-select.php';

function searchform(){
    if(is_search()){
        $class_name = "search-page";
        $class_name_input = "form-control py-1 fs-2";
        $id_name = "search-page";
        $id_close = "";
        $button_close = "";
        $button_search = "<button class=\"fw-bold fs-5 px-4 rounded-0\" type=\"submit\" id=\"button-addon2\">\n";
        $button_search .= esc_html__('ค้นหา', 'mix style' );
        $button_search .= "</button>\n";
    }
    else{
        $class_name = "animate__animated animate__fadeInDown";
        $id_name = "search";
        $id_close = "closesearch";
        $button_close = "<a href=\"javascript:closesearch();\">\n";
        $svg_close = "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"currentColor\" class=\"bi bi-x-lg\" viewBox=\"0 0 16 16\">\n
    <path d=\"M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z\"/>\n
    </svg>\n";
        $button_close .= $svg_close;
        $button_close .= "</a>\n";
        $class_name_input = "form-control py-1 fs-2";
        $button_search = "";
    }
   $output = "<form role = \"search\" method=\"get\" class=\"py-1 bg-white search-form $class_name \" id=".$id_name ." action=". esc_url( home_url( '/' ) ).">\n";
   $output .= "<div class=\"input-group\">\n";
   $output .= "<input name=\"s\" type=\"text\" class=\" $class_name_input \" value=\"".get_search_query()."\" placeholder=\"".esc_attr_x( 'ค้นหาข้อมูลที่นี้ &hellip;', 'placeholder', 'mix style' )."\" autocomplete=\"off\" aria-label=\"Recipient's username\" aria-describedby=\"button-addon2\">\n";
   $output .= $button_search;
   $output .= "<div class=\"d-flex align-items-center\" id=".$id_close.">\n";
   $output .= $button_close;
   $output .= "</div>\n</div>\n";
   if(is_search()) $output .= formselect();
   $output .= "</form>\n";

   echo $output;
}

searchform();
?>