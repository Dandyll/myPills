

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
    
    var saveTimeSave = function () {
        for (i = 1; i < 8; i++) {
            for (j = 0; j < 24; j++) {
                if ($("#t" + i + "" + j).css("backgroundColor") == "rgb(135, 206, 235)") {
                    if (timeSets.indexOf(i + "" + j) == -1) {
                        timeSets.push(i + "" + j);
                    }
                }else{
                    realIndex = timeSets.indexOf(i + "" + j);
                    if (realIndex != -1) {
                        timeSets.splice(realIndex, 1);
                    }
                }
            }
        }

        //var arlist = timeSets.valueOf();
        //console.log(arlist);

        var arlist = JSON.stringify( timeSets.valueOf());
        console.log(arlist)

        var med_name = document.querySelector('select[name=pills]').value



        jQuery.post('src/ps/tableadd.php',{
                arlist:arlist,
                med_name:med_name

            },
            function (data){
                console.log(data);
            }
        );

       /* $.tableadd({
            type: 'POST',
            url: 'tableadd.php',
            data : { json: arlist },
            success: function(data) {
                alert(data);
                $("p").text(data);
            }
        });*/


    };



function tableupdate() {

    medname = document.querySelector('select[name=pills]').value;



    jQuery.post('src/ps/tableread.php',{
            medname:medname

        },
        function (data){
            arrdata = data;
            arrdata = arrdata.slice(4,-4)
            arrdata = arrdata.split('\\",\\"')
            console.log(arrdata);

            for (i = 1; i < 8; i++) {
                for (j = 0; j < 24; j++) {

                    document.querySelector('#t'+i+j).classList.remove('highlighted');

                }

            }
            for (i=0;i<arrdata.length;i++) {

                document.querySelector('#t'+arrdata[i]).classList.add('highlighted');
            }



           /* day =[];
            for (i=0;i<arrdata.length;i++) {
                day.push(arrdata[i][0]);
                arrdata[i]=arrdata[i].slice(1);
            }
            console.log(arrdata);
            console.log(day);

*/
        }
    );
}
tableupdate();