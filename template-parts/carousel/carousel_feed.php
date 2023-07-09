<?php
function carousel($name){
    echo '<div id="'.$name.'" class="carousel slide" data-bs-ride="carousel">';
?>

    <div class="carousel-indicators">
        <button type="button" data-bs-target="#<?php echo $name;?>" data-bs-slide-to="0" class="active"></button>
        <?php
        for($i = 1; $i <= 5; $i++){ 
           echo '<button type="button" data-bs-target="#'.$name.'" data-bs-slide-to="'.$i.'"></button>';  
        }?>
    </div>
</div>

<?php
}
?>