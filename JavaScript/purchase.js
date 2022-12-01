function validate() {
    if (reviewForm.review.value == "Write Your Review Here" || reviewForm.review.value == "") {
        alert("Add A Review!");
        return false;
    }
}

var item = document.getElementById("display");
var itemName = document.getElementById("item-name");
var price = document.getElementById("price");
const size = document.getElementById("size");

//Depending On What Item Is Clicked, The Information Will Be Displayed
if (sessionStorage.getItem("item") == "accessories") {
    item.innerHTML = '<picture> <source srcset="Images/accessory-m.png" media="(min-width: 700px)"> <img src="Images/accessory-s.png" alt="Item"> </picture>';
    itemName.value = 'Sasuke Funko Pop Key Chain';
    price.value = '$45.00';
}
else if (sessionStorage.getItem("item") == "apparel") {
    item.innerHTML = '<picture> <source srcset="Images/t-shirt-m.png" media="(min-width: 700px)"> <img src="Images/t-shirt-s.png" alt="Item"> </picture>';
    itemName.value = 'Naruto And Sasuke T-Shirt';
    price.value = '$25.00';
    size.style.display = "block";
}
else if (sessionStorage.getItem("item") == "best") {
    item.innerHTML = '<picture> <source srcset="Images/best-seller-l.png" media="(min-width: 700px)"> <img src="Images/best-seller-s.png" alt="Item"> </picture>';
    itemName.value = 'Kurumi Key Chain';
    price.value = '$15.00';
}
else if (sessionStorage.getItem("item") == "figurines") {
    item.innerHTML = '<picture> <source srcset="Images/figurine-m.png" media="(min-width: 700px)"> <img src="Images/figurine-es.png" alt="Item"> </picture>';
    itemName.value = 'Levi Figurine';
    price.value = '$75.00';
}
else if (sessionStorage.getItem("item") == "new") {
    item.innerHTML = '<picture> <source srcset="Images/new-arrivals-l.png" media="(min-width: 700px)"> <img src="Images/new-arrivals-s.png.png" alt="Item"> </picture>';
    itemName.value = 'My Hero Academia Key Chains';
    price.value = '$45.00';
}
else if (sessionStorage.getItem("item") == "posters") {
    item.innerHTML = '<picture> <source srcset="Images/poster-m.png" media="(min-width: 700px)"> <img src="Images/poster-es.png" alt="Item"> </picture>';
    itemName.value = 'Naruto Poster';
    price.value = '$50.00';
}

function cart() {
    if (sessionStorage.getItem ("profile") == 0) {
        alert("Please Log In/Sign Up");
        return false;
    }
    else if (sessionStorage.getItem ("profile") == 1) {
        alert("Added To Cart");
    }
}