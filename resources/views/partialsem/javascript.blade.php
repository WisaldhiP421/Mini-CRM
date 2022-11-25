<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>

<!-- page script -->
<script>
$(document).ready( function () {
      $('#empTable').DataTable();
    } );
$('.btn-edit').click(function() {
    var url = $(this).data('url');
    $('#modalEdit #id').val('')
    $('#modalEdit #fname').val('')
    $('#modalEdit #lname').val('')
    $('#modalEdit #email').val('')
    $('#modalEdit #no_hp').val('')
    $('#modalEdit .gender').prop('checked', false);
    $('#modalEdit .hobby').prop('checked', false);
    $('#modalEdit #user_id').val('')
    $.ajax({
        type: "get",
        url: url,
        dataType: "json",
        success: function(res) {
            $('#modalEdit #id').val(res['id'])
            $('#modalEdit #fname').val(res['fname'])
            $('#modalEdit #lname').val(res['lname'])
            $('#modalEdit #email').val(res['email'])
            $('#modalEdit #no_hp').val(res['no_hp'])
            $('#modalEdit #user_id').val(res['user_id'])
            
            $.each(res['hobby'],function(key,hobby){
              $(`input[value="${hobby}"]`).prop('checked', true);
              
            })
    
            $(`input[value="${res['gender']}"]`).prop('checked', true);
        }
    });
});
</script>