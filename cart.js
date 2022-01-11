<!--
//Depending On What Item Is Clicked, The Information Will Be Displayed
if (sessionStorage.getItem("item") == "accessories") 
    picture.innerHTML = '<picture> <source srcset="Images/accessory-m.png" media="(min-width: 700px)"> <img src="Images/accessory-s.png" alt="Item"> </picture>';
else if (sessionStorage.getItem("item") == "apparel") 
    picture.innerHTML = '<picture> <source srcset="Images/t-shirt-m.png" media="(min-width: 700px)"> <img src="Images/t-shirt-s.png" alt="Item"> </picture>';
else if (sessionStorage.getItem("item") == "best") 
    picture.innerHTML = '<picture> <source srcset="Images/best-seller-l.png" media="(min-width: 700px)"> <img src="Images/best-seller-s.png" alt="Item"> </picture>';
else if (sessionStorage.getItem("item") == "figurines") 
    picture.innerHTML = '<picture> <source srcset="Images/figurine-m.png" media="(min-width: 700px)"> <img src="Images/figurine-es.png" alt="Item"> </picture>';
else if (sessionStorage.getItem("item") == "new") 
    picture.innerHTML = '<picture> <source srcset="Images/new-arrivals-l.png" media="(min-width: 700px)"> <img src="Images/new-arrivals-s.png.png" alt="Item"> </picture>';
else if (sessionStorage.getItem("item") == "posters") 
    picture.innerHTML = '<picture> <source srcset="Images/poster-m.png" media="(min-width: 700px)"> <img src="Images/poster-es.png" alt="Item"> </picture>';
    
//-->