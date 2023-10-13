<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script type="text/javascript">
  $(function() {
    $(".number").on('input', function(e) {
      $(this).val($(this).val().replace(/[^0-9]/g, ''));
    });
    $(".text").on('input', function(e) {
      $(this).val($(this).val().replace(/[^a-z A-Z]/g, ''));
    });
  });
</script>