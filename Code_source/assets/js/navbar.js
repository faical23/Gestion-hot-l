let burger_mostache = true
$(document).ready(function() {
    $("#mostache").click(function() {
        if (burger_mostache) {
            this.style = "transform: rotate(180deg);"
            $(".menu_mobile").css("bottom", "0px");
            burger_mostache = false;
        } else {
            this.style = "transform: rotate(0deg);"
            $(".menu_mobile").css("bottom", "2000px");
            burger_mostache = true;
        }
    })
});














let all_menu = document.querySelectorAll(".item_navbar_menu")
all_menu.forEach(elemnt => {
    elemnt.addEventListener("click", () => {
        elemnt.id = "active";
    })
})