

    let QA = document.querySelectorAll(".QA1");
    let para = document.querySelectorAll(".QAtext");
    let svg = document.querySelectorAll(".QA1 svg");

    let closenav = document.querySelector(".closenav")
    let opennav = document.querySelector(".opennav")
    let shownav = document.querySelector(".header11 .navbar")

    opennav.addEventListener("click",function(){
      shownav.style.left = "0%"
    })
    closenav.addEventListener("click",function(){
      shownav.style.left = "-100%"
    })

    QA.forEach((value, i) => {
      value.addEventListener("click", function () {
        para[i].classList.toggle("showpara");
        svg[i].classList.toggle("rotate");
      });
    });



  