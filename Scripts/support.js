
let questions = document.querySelectorAll("#faqs h3");

for (let question of questions) {
    let answer = question.nextElementSibling;

    answer.style.display = "none";

    question.addEventListener("click", function() {
        if (answer.style.display === "none") {
            answer.style.display = "block";
        } else {
            answer.style.display = "none";
        }
    });
}
