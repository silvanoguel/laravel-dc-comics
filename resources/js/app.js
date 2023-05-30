import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])


const deleteBtn = document.querySelectorAll("#delete_btn");

deleteBtn.forEach((element) => {
    element.addEventListener("click", (event) => {
        if (!confirm("are you sure to cancel ?")) {
            event.preventDefault();
        }
    });

});