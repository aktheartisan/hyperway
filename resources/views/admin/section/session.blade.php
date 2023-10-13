<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    @if (session('success'))
    Swal.fire(
      'Success!',
      '{{session('success')}}', // Use the session message here
      'success'
    )
    @endif
  </script>