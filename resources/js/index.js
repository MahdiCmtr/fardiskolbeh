import Axios from "axios";

document.addEventListener("DOMContentLoaded", DomLoaded);

function DomLoaded() {
    try {
        $(".type-estate").materialSelect();
        $(".category-estate").materialSelect();
    } catch (errr) {}
    

}
