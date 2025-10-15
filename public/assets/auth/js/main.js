$(".toggle-password").click(function () {
    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $($(this).attr("toggle"));
    if (input.attr("type") === "password") {
        input.attr("type", "text");
    } else {
        input.attr("type", "password");
    }
});




    // Open Modal
    document.getElementById('openModalBtn').addEventListener('click', function () {
        const modal = new bootstrap.Modal(document.getElementById('exampleModal3'));
        modal.show();
    });

    // Redirect to Homepage After Modal Closes
    const modalElement = document.getElementById('exampleModal3');
    modalElement.addEventListener('hidden.bs.modal', function () {
        window.location.href = "{{ route('dashboard') }}";
    });

