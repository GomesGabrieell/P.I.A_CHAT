var i = setInterval(function () {
    clearInterval(i);

    // The desired code is only this:
    document.getElementById("loader").style.display = "none";
    document.getElementById("tudo_page").style.display = "block";
   
},200);
