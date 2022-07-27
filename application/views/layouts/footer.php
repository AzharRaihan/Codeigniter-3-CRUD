<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
  $(document).ready(function () {
    $('.delete').click(function (e) { 
      e.preventDefault();
      confirmMessage = confirm('Are you sure? You want to delete this Data?')
      if(confirmMessage){
        var id = $(this).val();
        $.ajax({
          type: "DELETE",
          url: "employee-delete/"+id,
          success: function (response) {
            window.location.reload();
          }
        });
      }
    });
  });
</script>
</body>
</html>