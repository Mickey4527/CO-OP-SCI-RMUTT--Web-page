<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
  <input name="s" type="text" class="search-field" value="<?php echo get_search_query(); ?>" placeholder="<?php echo esc_attr_x( 'ค้นหาข้อมูลที่นี้ &hellip;', 'placeholder', 'mix style' ); ?>" autocomplete="off" aria-label="Recipient's username" aria-describedby="button-addon2">
	</label>
	<input type="submit" class="search-submit" value="Search" />
</form>