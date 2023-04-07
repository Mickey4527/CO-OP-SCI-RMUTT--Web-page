<?php

$class = $_POST['ddclass'];

if($class == ""){
    echo '<p class="t-center">เลือกชั้นที่เรียน</p>';
}
else if($class > "6"){
    echo '<p class="t-center">ผิดผลาด</p>';
    }
    
else{
echo '<br><a style="text-decoration: underline;" href="assets/class/m', $class ,'.pdf"><span class="material-icons">get_app</span>ดาวโหลดตารางเรียนชั้นมัธยมศึกษาปีที่&nbsp;',$class, '</a>';
}

?>