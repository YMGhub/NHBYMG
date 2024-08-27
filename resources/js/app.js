import "./bootstrap";
import "flowbite";
import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();



document.getElementById('checkAll')
    .addEventListener('change', function () {
        let checkboxes =
            document.querySelectorAll('.chk');
        checkboxes.forEach(function (checkbox) {
            checkbox.checked = this.checked;
        }, this);
    });
