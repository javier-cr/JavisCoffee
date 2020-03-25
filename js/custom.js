(function () {
    'use strict';
    window.addEventListener('load', function () {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function (form) {
            form.addEventListener('submit', function (event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();

//If url matches pattern, show order success modal
var url = window.location.href;
        if (url.indexOf('?order=success') != -1) {
            $('#orderSuccess').modal('show');
        }

//If url matches pattern, show order success modal
var url = window.location.href;
        if (url.indexOf('?order=fail') != -1) {
            $('#orderFail').modal('show');
        }