$(document).ready(function(){
    $(".hamburger").click(function(){
       $(".mixui").toggleClass("collapse");
    });
});

$(document).ready(function(){
    $('.menu-toggle').click(function(){
        $('nav').toggleClass('active')
    })
    $('ul li').click(function(){
        $(this).siblings().removeClass('active')
        $(this).toggleClass('active')
    })
})

$(document).ready(function(){
            $("#bu").click(function(){
             $("#blog").load("src/news.php");
            });
        });	

$(function () {
    $("#btnSearch").click(function () {
        $.ajax({
            url: "src/sys/cal-search.php",
            type: "post",
            data: {itemname: $("#itemname").val(), ddclass: $("#ddclass").val(),ddroom: $("#ddroom").val(), ddlevel: $("#ddlevel").val()},
            beforeSend: function () {
                $(".loader").show();
            },
            complete: function () {
                $(".loader").hide();
            },
            success: function (data) {
                $("#list-data").html(data);
            }
        });
    });
    $("#searchform").on("keyup keypress",function(e){
       var code = e.keycode || e.which;
       if(code==13){
           $("#btnSearch").click();
           return false;
       }
    });
});	
$(document).ready(function(){
    $("#add").click(function(){
     $("#blog").load("src/table.php");
    });
});	


 $(document).ready(function(){
    $(".profile").click(function(){
       $(".form-popup").toggleClass("open");
    });
});


$(document).ready(function(){
    $(".close").click(function(){
        $(".modal").removeClass("active");
     });
    $(".modal").click(function(){
        $(".modal").removeClass("active");
     });
})

const buttons = document.querySelectorAll('button');

buttons.forEach(button => {
	button.addEventListener('click', function(e) {
        // 1
		let x = e.clientX;
		let y = e.clientY;

        // 2
		let buttonTop = e.target.offsetTop;
		let buttonLeft = e.target.offsetLeft;

        // 3
		let xInside = x - buttonLeft;
		let yInside = y - buttonTop;

        let circle = document.createElement('span');
        circle.classList.add('circle');
        circle.style.top = yInside + 'px';
        circle.style.left = xInside + 'px';

        this.appendChild(circle);
	});
});

$(document).ready(function(){
    $(".hamburger")
})