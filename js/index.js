[].slice.call(document.querySelectorAll('.dropdown .nav-link')).forEach(function(el){
    el.addEventListener('click', onClick, false);
});

function onClick(e){
    e.preventDefault();
    var el = this.parentNode;
    el.classList.contains('show-submenu') ? hideSubMenu(el) : showSubMenu(el);
}

function showSubMenu(el){
    el.classList.add('show-submenu');
    document.addEventListener('click', function onDocClick(e){
        e.preventDefault();
        if(el.contains(e.target)){
            return;
        }
        document.removeEventListener('click', onDocClick);
        hideSubMenu(el);
    });
}

function hideSubMenu(el){
    el.classList.remove('show-submenu');
}

$(function () {
    $("#bsearch").click(function(){
        $.ajax({
            url: "check_search.php",
            type: "post",
            data: {ddclass: $("#ddclass").val()},
            success: function (data) {
                $("#list-data").html(data);
            }
        });
    });
});

$(function(){
    $("#Login").click(function() {
        $.ajax({
            url: "login_b.php?action=Login",
            type: "post",
            data: {txtusername:$("#txtusername").val(),txtpassword:$("#txtpassword").val()},
            beforeSend: function () {
                $(".loader").show();
            },
            complete: function () {
                $(".loader").hide();
            },
            success: function (data) {
                $("#alert").html(data);
            }
        });
    });
});
