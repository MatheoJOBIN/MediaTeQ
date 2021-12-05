function docsearch() {
    value = document.querySelector("#search_document").value.toLowerCase();
    livre = document.querySelectorAll(".livre");
    for (i = 0; i < livre.length; i++) {
        content = livre[i].dataset.titre.toLowerCase();
        if(content.includes(value)){
            livre[i].style.display = "block";
        }else{
            livre[i].style.display = "none";
        }
    }
}