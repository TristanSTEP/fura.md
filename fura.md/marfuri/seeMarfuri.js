const Formular = document.querySelector("#formular");
const Form_2 = document.querySelector("#form_2");
const Form_3 = document.querySelector("#form_3");
const BTN_3 = document.querySelector("#btn_3");

let formsVisible = false; 

BTN_3.addEventListener("click", (e) => {
    e.preventDefault()

    // if (!formsVisible) {
    //     Form_2.style.display = "flex";
    //     Form_3.style.display = "flex";
    //     Formular.style.height = "330px"; 
    // } else {
    //     Form_2.style.display = "none";
    //     Form_3.style.display = "none";
    //     Formular.style.height = "185px"; 
    // }

    if (!formsVisible) {
        Form_2.style.display = "flex";
        Form_3.style.display = "flex";
        Formular.style.height = "auto"; 
    } else {
        Form_2.style.display = "none";
        Form_3.style.display = "none";
        Formular.style.height = "auto"; 
    }
    formsVisible = !formsVisible;
});

const Harta_btn = document.querySelector(".fa-map-location-dot");
const VizualizareHarta = document.querySelector("#info_harta");
const InchideHarta_btn = document.querySelector(".fa-xmark");

if (Harta_btn && VizualizareHarta && InchideHarta_btn) {
    Harta_btn.addEventListener("click", (e) => {
        e.preventDefault();
        VizualizareHarta.style.display = "flex";
    });

    InchideHarta_btn.addEventListener("click", (e) => {
        e.preventDefault();
        VizualizareHarta.style.display = "none";
    });
}

const Info_btn = document.querySelector(".fa-circle-info");
const VizualizareDetaliata = document.querySelector("#info_detaliata");
const InchideInfo_btn = document.querySelector("#btn_inchide_info");

if (Info_btn && VizualizareDetaliata && InchideInfo_btn) {
    Info_btn.addEventListener("click", (e) => {
        e.preventDefault();
        VizualizareDetaliata.style.display = "flex";
    });

    InchideInfo_btn.addEventListener("click", (e) => {
        e.preventDefault();
        VizualizareDetaliata.style.display = "none";
    });
}



