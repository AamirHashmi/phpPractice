 function showSearchBar() {
    
    var searchButton = document.getElementById("searchBtn");
    var searchBar = document.getElementById("searchBar");    
   
        
    if (searchBar.style.visibility === "hidden") {
        searchBar.style.visibility = "visible";
    } 

    else {
        searchBar.style.visibility = "hidden";
    }
}
    