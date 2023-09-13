<!-- Libs JS -->
<script src="assets/libs/jquery/dist/jquery.min.js"></script>
<script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/simplebar/dist/simplebar.min.js"></script>

<!-- Theme JS -->
<script src="assets/js/theme.min.js"></script>
<script src="assets/js/lightbox.js"></script>
<script src="assets/js/datatables.js"></script>


<script>
    $(function () {
        $("#DataTable").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#DataTable_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>
</body>


</html>