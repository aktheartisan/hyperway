<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<!-- <script>
$(document).ready(function() {
    $('input[type="file"]').change(function() {
        var file = $(this).prop('files')[0];
        var allowedTypes = ['image/jpeg', 'image/png'];

        if (file && allowedTypes.includes(file.type)) {
            // Valid image format selected
            // You can perform any additional actions here
        } else {
            // Invalid image format selected, reset the input
            $(this).val('');
            Toastify({
                text: "Please select a valid JPEG or PNG image.",
                duration: 3000,
                gravity: "top",
                position: "right",
                style: {
                    background: "linear-gradient(to right, #00b09b, #96c93d)",
                }
            }).showToast();
        }
    });
});
</script> -->
<script>
$(document).ready(function() {
    $('input[type="file"]').change(function() {
        var file = $(this).prop('files')[0];
        var allowedTypes = ['image/jpeg', 'image/png'];
       var maxFileSize = 1 * 1024 * 1024; // 1 MB

        if (file) {
            if (!allowedTypes.includes(file.type)) {
                // Invalid image format, reset the input
                $(this).val('');
                Toastify({
                    text: "Please select a valid JPEG or PNG image.",
                    duration: 3000,
                    gravity: "top",
                    position: "right",
                    style: {
                        background: "linear-gradient(to right, #00b09b, #96c93d)",
                    }
                }).showToast();
            } else if (file.size > maxFileSize) {
                // Invalid image size, reset the input
                $(this).val('');
                Toastify({
                    text: "Image size should be 2MB or less.",
                    duration: 3000,
                    gravity: "top",
                    position: "right",
                    style: {
                        background: "linear-gradient(to right, #ff6347, #f08080)",
                    }
                }).showToast();
            } else {
                // Valid image format and size selected
                // You can perform any additional actions here
            }
        }
    });
});
</script>