
<script src="<?php echo URLROOT; ?>/public/js/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
<script type="text/javascript">
    $(document).ready( function () {
        $('#myTable').DataTable();
        $( "#myTable thead tr th:nth-last-child(1)" ).removeClass( "sorting");
        $( "#myTable thead tr th:nth-last-child(2)" ).removeClass( "sorting");
    } );
</script>
<script src="<?php echo URLROOT; ?>/public/js/popper.js"></script>
<script src="<?php echo URLROOT; ?>/public/js/bootstrap.min.js"></script>
<script src="<?php echo URLROOT; ?>/public/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="<?php echo URLROOT; ?>/public/js/main.js"></script>

</body>

</html>