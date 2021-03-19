<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<script src="http://<?= $server; ?>assets/bootstrap/js/jquery.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.3.1/jszip-2.5.0/dt-1.10.24/b-1.7.0/b-colvis-1.7.0/b-html5-1.7.0/b-print-1.7.0/datatables.min.js"></script>


<script>

<?php if($_SESSION['level'] == "petugas") : ?>

    $(document).ready(function(){
    $('#datatable').DataTable({
        dom : 'frt',
        button : [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    });

<?php endif; ?>

<?php if($_SESSION['level'] == "admin") : ?>

$(document).ready(function(){
$('#datatable').DataTable({
    dom : 'Bfrt',
    button : [
        'copy', 'csv', 'excel', 'pdf', 'print'
    ]
});
});

<?php endif; ?>

</script>
</body>
</html>