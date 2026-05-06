window.onload = function () {
  const btn = document.querySelector(".mode-btn");
    if (localStorage.getItem("mode")==="dark"){
        document.body.classList.add("dark");
        if(btn) btn.innerHTML="☀️";
    }else{
        if (btn) btn.innerHTML= "🌙";}


};
function toggleMode(){
    
    
 document.body.classList.toggle("dark");

  const btn = document.querySelector(".mode-btn");

    if(document.body.classList.contains("dark")) {
        localStorage.setItem("mode","dark");
        if (btn) btn.innerHTML="☀️";
    } else {
        localStorage.setItem("mode", "light");
        if (btn) btn.innerHTML= "🌙";}}

function filterRegions(category) {
  let cards = document.querySelectorAll(".region-card");
    cards.forEach(card =>{
        let cardCategory = card.getAttribute("data-category");
        if (category === "all" || cardCategory === category){
            card.style.display = "block";
        }else{card.style.display = "none";}
    });
}
