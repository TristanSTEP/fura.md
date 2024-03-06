// document.getElementById('openPopupButton').addEventListener('click', function() {
//     document.getElementById('pop-up').style.display = 'block';
// });

// document.getElementById('closePopupButton').addEventListener('click', function() {
//     document.getElementById('pop-up').style.display = 'none';
// });

const openBtn = document.querySelectorAll(".openPopupButton")
const popup = document.getElementById("pop-up")
const closeBtn = document.getElementById("closePopupButton")

openBtn.forEach(element => {
    element.addEventListener("click", function() {
        if (popup.style.display === "none") {
            popup.style.display = "block"
        }
    })
})

closeBtn.addEventListener("click", function() {
    if (popup.style.display === "block") {
        popup.style.display = "none"
    }
})
