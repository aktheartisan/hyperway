<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
<script>
    $(document).ready(function () {
        $('#videoInput').change(function () {
            const allowedExtensions = ['mp4', 'mov', 'avi', 'mkv']; // Add more video extensions as needed
            const selectedFile = this.files[0];
            if (selectedFile) {
                const fileExtension = selectedFile.name.split('.').pop().toLowerCase();
                if (!allowedExtensions.includes(fileExtension)) {
                    Toastify({
                        text: 'Please select a valid video file (mp4, mov, avi, mkv, etc.)',
                        duration: 3000, // Duration of the toast message in milliseconds
                        close: true, // Show a close button
                        gravity: 'top', // Position of the toast message
                        position: 'center', // Alignment within the position
                        style: {
                        background: "linear-gradient(to right, #ff6347, #f08080)",
                    }// Background color of the toast
                    }).showToast();

                    $(this).val(''); // Clear the input
                }
            }
        });
    });
</script>