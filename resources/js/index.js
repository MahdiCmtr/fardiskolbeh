import Axios from "axios";

document.addEventListener("DOMContentLoaded", DomLoaded);

function DomLoaded() {
    try {
        $(".type-estate").materialSelect();
        $(".category-estate").materialSelect();
    } catch (errr) {}
    try {
        $('.file-upload1').file_upload();
        $('.file-upload2').file_upload();
        $('.file-upload3').file_upload();
    } catch (errr) {}

}
