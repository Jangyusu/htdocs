window.addEventListener("DOMContentLoaded", function () {

    var nav = document.querySelector("nav");

    nav.addEventListener("click", function (e) {
        e.target.style.color = "red";

        var target = e.target.textContent;

        localStorage.page = target;
    })

    var idx = 0;
    switch (localStorage.page) {
        case "index": idx = 0;
            break;
        case "company": idx = 1;
            break;
        case "service": idx = 2;
            break;
        case "mypage": idx = 3;
            break;
    }
    nav.children[idx].style.color = "red";



    var fButton = document.querySelector("button"),
        favorites,
        imgArry = [];

    fButton.addEventListener("click", function () {
        favorites = document.querySelectorAll("input:checked");

        for (var i = 0; i < favorites.length; i++) {
            imgArry.push(favorites[i].nextElementSibling.src);
        };

        localStorage.favorites = imgArry;
    });

    var imgString = localStorage.favorites,
        myimg = imgString.split(",");

    var div = document.querySelector("div");

    for (var i = 0; i < myimg.length; i++) {
        div.innerHTML += `<img src="${myimg[i]}"></img>`;
    }

})
