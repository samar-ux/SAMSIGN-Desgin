let pup = document.querySelector(".content #pup");
let btn_Close = document.querySelector(".btn-Close");


function changeToggle(){
    pup.classList.toggle("activate");
}

btn_Close.addEventListener("click" , ()=>{
    pup.classList.remove("activate");
    console.log("kero");
})