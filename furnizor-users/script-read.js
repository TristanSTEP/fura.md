// update in read.html start

// let form = document.getElementById("form-read");
// let cancelBtn = document.getElementById("cancel");
// let openBtn = document.getElementById("edit-btn");


// openBtn.addEventListener("click", function() {
//     if (form.style.display === "none") {
//         form.style.display = "block";
//     } else {
//         form.style.display = "none";
//     }
// })

// cancelBtn.addEventListener("click", function() {
//     if (form.style.display === "block") {
//         form.style.display = "none";
//     }
// })

// update in read.html end

// CONFIRM DELETE POPUP

const confirmPopup =  document.getElementById('confirm-delete-popup');
const deleteOpen = document.getElementById('delete');
const closePopup = document.getElementById('confirm-no');

deleteOpen.onclick = function() {
    confirmPopup.style.display = 'flex';
}

closePopup.onclick = function() {
    confirmPopup.style.display = 'none';
}

window.onclick = function(event) {
    if (event.target == confirmPopup) {
        confirmPopup.style.display = 'none';
    }
}