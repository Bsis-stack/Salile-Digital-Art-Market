const $d = document.querySelector.bind(document);
window.addEventListener("DOMContentLoaded", () => {
    const dateDisplay = $d("footer div:last-child");
    const copyrightDisplay = $d("footer div:first-child");

    if (dateDisplay && copyrightDisplay) {

        const today = new Date();
        const formattedDate =
                (today.getMonth() + 1) + '/' +
                (today.getDate()) + '/' +
                (today.getFullYear());
        dateDisplay.textContent = formattedDate;
        copyrightDisplay.style.textAlign = "center";
        copyrightDisplay.style.width = "100%";
        copyrightDisplay.style.display = "block";

        dateDisplay.style.textAlign = "right";


    }
});

