<?php
//  _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _
// |                                           |
// |     config post for show in carousel      |
// |     and news feed                         |
// |_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _|
//
    function menu_feed($list_menu) {
        $output = '';
        foreach ($list_menu as $key => $value) {
            $output .= '<div class="col-sm"><div class="card-box ms-2 bg-white align-items-center justify-content-center rounded-3 shadow">
                            <a href="'.$value['link'].'" class="btn btn-menu">
                                <div class="icon"><i class="'.$value['icon'].'"></i></div>
                                <div class="title w-100 d-flex justify-content-center text-center">'.$value['title'].'</div>
                            </a>
                        </div></div>';
        }
        return $output;
    }
?>
