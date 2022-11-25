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
        $('#compTable').DataTable();
      } );
        $('.btn-edit').click(function() {
            var url = $(this).data('url');
            $('#modalEdit #id').val('')
            $('#modalEdit #name').val('')
            $('#modalEdit #email').val('')
            $('#modalEdit #logo').val('')
            $('#modalEdit #website').val('')
            $.ajax({
                type: "get",
                url: url,
                dataType: "json",
                success: function(res) {
                    $('#modalEdit #id').val(res['id'])
                    $('#modalEdit #name').val(res['name'])
                    $('#modalEdit #email').val(res['email'])
                    $('#modalEdit #website').val(res['website'])
                    console.log(res)
                }
            });
        });
    </script>