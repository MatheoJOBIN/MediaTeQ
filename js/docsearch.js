function docsearch() {
    value = document.querySelector("#search_document").value.toLowerCase();
    titre = document.querySelectorAll("#Document_livre_titre");
    for (i = 0; i < titre.length; i++) {
        content = titre[i].textContent || titre[i].innerText;
        content = content.toLowerCase();
        if(content.includes(value)){
            titre[i].style.display = "block";
        }else{
            titre[i].style.display = "none";
        }
    }
}