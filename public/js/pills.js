const toggle = document.querySelector(".toggle");
const menu = document.querySelector(".menu");
const items = document.querySelectorAll(".item");

/* Toggle mobile menu */
function toggleMenu() {
  if (menu.classList.contains("active")) {
    menu.classList.remove("active");
    toggle.querySelector("a").innerHTML = "<i class='fas fa-bars'></i>";
  } else {
    menu.classList.add("active");
    toggle.querySelector("a").innerHTML = "<i class='fas fa-times'></i>";
  }
}

/* Activate Submenu */
function toggleItem() {
  if (this.classList.contains("submenu-active")) {
    this.classList.remove("submenu-active");
  } else if (menu.querySelector(".submenu-active")) {
    menu.querySelector(".submenu-active").classList.remove("submenu-active");
    this.classList.add("submenu-active");
  } else {
    this.classList.add("submenu-active");
  }
}

/* Close Submenu From Anywhere */
function closeSubmenu(e) {
  let isClickInside = menu.contains(e.target);

  if (!isClickInside && menu.querySelector(".submenu-active")) {
    menu.querySelector(".submenu-active").classList.remove("submenu-active");
  }
}
/* Event Listeners */
toggle.addEventListener("click", toggleMenu, false);
for (let item of items) {
  if (item.querySelector(".submenu")) {
    item.addEventListener("click", toggleItem, false);
  }
  item.addEventListener("keypress", toggleItem, false);
}
document.addEventListener("click", closeSubmenu, false);

var timeSets = [];

    $(function () {
        var isMouseDown = false;
        $("#timeTable td")
                .mousedown(function () {
                    isMouseDown = true;
                    $(this).toggleClass("highlighted");                  
                    return false; 
                })
                .mouseover(function () {
                    if (isMouseDown) {
                        $(this).toggleClass("highlighted");                        
                    }
                });
        $(document).mouseup(function () {
                    isMouseDown = false;
                });
        $('#btn-save-TS').on('click', function () {
            saveTimeSave();
        });        
    });
    

function myFunction() {
    // Declare variables
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById('myInput');
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName('li');

    // Loop through all list items, and hide those who don't match the search query
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
$('.collapsibleContent').find('li').click(function(e) {
    let txt = $(this).text();
    $(this).parent().prev('.pill-container').text(txt);
});

$(function() {
    $('.overflow').click(function () {
        var collection = $(this).find('li');
        $.each(collection,function(idx,obj){
            console.log($(obj).html());

        });
    });
});

function test(name) {
    content=document.querySelector('.card');
    jQuery.post('src/ps/medread.php',{
            name:name
        },
        function (data){
            var test = JSON.parse(data)
            content.innerHTML = '<div class="circle"></div><div class="content"><div class="name">'+test[1]+'</div><div class="description">'+test[2]+'</div><a href="#" onclick="addusermed(\''+name+'\')">Add To Schelude</a></div><div class="img"><image src="public/uploads/'+test[4]+'"/></div>';
        }

    );




}

function addusermed(name) {

   jQuery.post('src/ps/medadd.php',{
       name:name


   },
   function (data){
        console.log(data)})



}
