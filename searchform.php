<?php
function searchform(){
    if(is-search()){
        $class_name = "search-form py-1 bg-white animate__animated animate__fadeInDown";
        $id_name = "search";
        $id_close = "closesearch";
        $button_close = "<a href=\"javascript:closesearch();\">\n";
        $svg_close = "<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" fill=\"currentColor\" class=\"bi bi-x-lg\" viewBox=\"0 0 16 16\">\n
    <path d=\"M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z\"/>\n
    </svg>\n";
        $button_close .= $svg_close;
        $button_close .= "</a>\n";

    }
    else{
        $class_name = "search-form py-1 bg-white border border-2 border-organ";
        $id_name = "search-page";
        $id_close = "";
        $button_close = "";
    }
   $output = "<form role = \"search\" method=\"get\" class=".$class_name ." id=".$id_name ." action=". esc_url( home_url( '/' ) ).">\n";
   $output .= "<div class=\"input-group\">\n";
   $output .= "<input name=\"s\" type=\"text\" class=\"form-control py-1 fs-2\" value=\"".get_search_query()."\" placeholder=\"".esc_attr_x( 'ค้นหาข้อมูลที่นี้ &hellip;', 'placeholder', 'mix style' )."\" autocomplete=\"off\" aria-label=\"Recipient's username\" aria-describedby=\"button-addon2\">\n";
   $output .= "<div class=\"d-flex align-items-center\" id=".$id_close.">\n";
   $output .= $button_close;
   $output .= "</div>\n</div>\n</form>\n";

   echo $output;
}

//searchform();
?>

<?php
    function searchform(){ ?>
<form role="search" method="get" class="search-form py-1 bg-white animate__animated animate__fadeInDown" id="search" action="<?php echo esc_url( home_url( '/' ) ); ?>" >
    <div class="input-group">
        <input name="s" type="text" class="form-control py-1 fs-2" value="<?php echo get_search_query(); ?>" placeholder="<?php echo esc_attr_x( 'ค้นหาข้อมูลที่นี้ &hellip;', 'placeholder', 'mix style' ); ?>" autocomplete="off" aria-label="Recipient's username" aria-describedby="button-addon2">
		<div class="d-flex align-items-center" id="closesearch">
			<a href="javascript:closesearch();">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
  <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
</svg>
			</a>
		</div>
    </div>
</form> 
    <?php }
    //searchform();
?>