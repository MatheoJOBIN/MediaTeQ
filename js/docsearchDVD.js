function docsearch() {
    value = document.querySelector("#search_document").value.toLowerCase();
    dvd = document.querySelectorAll(".dvd");
    for (i = 0; i < dvd.length; i++) {
        content = dvd[i].dataset.titre.toLowerCase();
        if(content.includes(value)){
            dvd[i].style.display = "block";
        }else{
            dvd[i].style.display = "none";
        }
    }
}