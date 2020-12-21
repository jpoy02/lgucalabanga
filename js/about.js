const about = document.querySelector('.about-nav');
const btns = document.querySelectorAll('.btn');
const conts = document.querySelectorAll('.content');



about.addEventListener("click", function (e) {
    const id = (e.target.dataset.id);
    const element = document.getElementById(id);

    console.log(id);

    if (id) {
        btns.forEach(function (btn) {
            btn.classList.remove("btn-active")
        });
        e.target.classList.add("btn-active");

        conts.forEach(function (cont) {
            cont.classList.remove("active");
        });

        element.classList.add("active");
    }

});