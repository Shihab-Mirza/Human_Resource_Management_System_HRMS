
$(function () {

    // ------------------------------------------------------- //
    // Tooltips init
    // ------------------------------------------------------ //

    $('[data-toggle="tooltip"]').tooltip()

    // ------------------------------------------------------- //
    // Universal Form Validation
    // ------------------------------------------------------ //

    $('.form-validate').each(function() {
        $(this).validate({
            errorElement: "div",
            errorClass: 'is-invalid',
            validClass: 'is-valid',
            ignore: ':hidden:not(.summernote),.note-editable.card-block',
            errorPlacement: function (error, element) {
                // Add the `invalid-feedback` class to the error element
                error.addClass("invalid-feedback");
                //console.log(element);
                if (element.prop("type") === "checkbox") {
                    error.insertAfter(element.siblings("label"));
                }
                else {
                    error.insertAfter(element);
                }
            }
        });
    });



    // ------------------------------------------------------- //
    // Adding fade effect to dropdowns
    // ------------------------------------------------------ //
    $('.dropdown').on('show.bs.dropdown', function () {
        $(this).find('.dropdown-menu').first().stop(true, true).fadeIn(100).addClass('active');
    });
    $('.dropdown').on('hide.bs.dropdown', function () {
        $(this).find('.dropdown-menu').first().stop(true, true).fadeOut(100).removeClass('active');
    });


   // ------------------------------------------------------- //
    // Search Popup
    // ------------------------------------------------------ //
    $('.search-open').on('click', function (e) {
        e.preventDefault();
        $('.search-panel').fadeIn(100);
    })
    $('.search-panel .close-btn').on('click', function () {
        $('.search-panel').fadeOut(100);
    });


    // ------------------------------------------------------- //
    // Sidebar Functionality
    // ------------------------------------------------------ //
    $('.sidebar-toggle').on('click', function () {
        $(this).toggleClass('active');

        $('#sidebar').toggleClass('shrinked');
        $('.page-content').toggleClass('active');
        $(document).trigger('sidebarChanged');

        if ($('.sidebar-toggle').hasClass('active')) {
            $('.navbar-brand .brand-sm').addClass('visible');
            $('.navbar-brand .brand-big').removeClass('visible');
            $(this).find('i').attr('class', 'fa fa-long-arrow-right');
        } else {
            $('.navbar-brand .brand-sm').removeClass('visible');
            $('.navbar-brand .brand-big').addClass('visible');
            $(this).find('i').attr('class', 'fa fa-long-arrow-left');
        }
    });


});




/*document.addEventListener('DOMContentLoaded', () => {
    // Tooltips init
    const tooltips = document.querySelectorAll('[data-toggle="tooltip"]');
    tooltips.forEach(tooltip => {
        new bootstrap.Tooltip(tooltip);
    });

    // Universal Form Validation
    const forms = document.querySelectorAll('.form-validate');
    forms.forEach(form => {
        form.addEventListener('submit', (e) => {
            let isValid = true;
            const inputs = form.querySelectorAll('input, select, textarea');

            inputs.forEach(input => {
                // Basic validation example
                if (!input.checkValidity()) {
                    isValid = false;
                    const errorElement = document.createElement('div');
                    errorElement.className = 'invalid-feedback';
                    errorElement.textContent = input.validationMessage;
                    input.classList.add('is-invalid');
                    input.insertAdjacentElement('afterend', errorElement);
                } else {
                    input.classList.remove('is-invalid');
                    input.classList.add('is-valid');
                }
            });

            if (!isValid) {
                e.preventDefault(); // Prevent form submission if invalid
            }
        });
    });

    // Adding fade effect to dropdowns
    const dropdowns = document.querySelectorAll('.dropdown');
    dropdowns.forEach(dropdown => {
        dropdown.addEventListener('show.bs.dropdown', () => {
            const menu = dropdown.querySelector('.dropdown-menu');
            menu.style.display = 'block';
            menu.classList.add('active');
        });

        dropdown.addEventListener('hide.bs.dropdown', () => {
            const menu = dropdown.querySelector('.dropdown-menu');
            menu.style.display = 'none';
            menu.classList.remove('active');
        });
    });

    // Search Popup
    const searchOpenBtn = document.querySelector('.search-open');
    const searchPanel = document.querySelector('.search-panel');
    const closeBtn = searchPanel.querySelector('.close-btn');

    searchOpenBtn.addEventListener('click', (e) => {
        e.preventDefault();
        searchPanel.style.display = 'block';
    });

    closeBtn.addEventListener('click', () => {
        searchPanel.style.display = 'none';
    });

    // Sidebar Functionality
    const sidebarToggle = document.querySelector('.sidebar-toggle');
    const sidebar = document.getElementById('sidebar');
    const pageContent = document.querySelector('.page-content');

    sidebarToggle.addEventListener('click', () => {
        sidebarToggle.classList.toggle('active');
        sidebar.classList.toggle('shrinked');
        pageContent.classList.toggle('active');

        const isActive = sidebarToggle.classList.contains('active');
        const brandSmall = document.querySelector('.navbar-brand .brand-sm');
        const brandBig = document.querySelector('.navbar-brand .brand-big');

        if (isActive) {
            brandSmall.classList.add('visible');
            brandBig.classList.remove('visible');
            sidebarToggle.querySelector('i').className = 'fa fa-long-arrow-right';
        } else {
            brandSmall.classList.remove('visible');
            brandBig.classList.add('visible');
            sidebarToggle.querySelector('i').className = 'fa fa-long-arrow-left';
        }
    });
});
*/


