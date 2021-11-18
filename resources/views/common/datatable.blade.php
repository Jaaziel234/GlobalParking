



<script>
    $(document).ready(function() {
     $('#example').DataTable( {
         dom: 'Bfrtip',
         buttons: [
             {
                 extend: 'print',
                 exportOptions: {
                     columns: ':visible'
                 },
                 text: '<button class="btn btn-outline-primary border:none; btn-sm mb-0">Imprimir <i class="fas fa-print"></i></button>'
             },

             {
                 extend: 'pdf',
                 exportOptions: {
                     columns: ':visible'
                 },
                 text: '<button class="btn btn-outline-danger border:none; btn-sm mb-0">PDF <i class="fas fa-file-pdf"></i></button>'
             },

              {
                 extend: 'excel',
                 exportOptions: {
                     columns: ':visible'
                 },
                 text: '<button class="btn btn-outline-success border:none; btn-sm mb-0">EXCEL <i class="fas fa-file-excel"></i></button>'
             },

             /* {
                 extend: 'csv',
                 exportOptions: {
                     columns: ':visible'
                 },
                 text: '<button class="btn btn-outline-success border:none; btn-sm mb-0">CSV <i class="fas fa-file-csv"></i></button>'
             },  */

             {
                 extend: 'colvis',
                 exportOptions: {
                     columns: ':visible'
                 },
                 text:  '<button class="btn btn-outline-info border:none; btn-sm mb-0">Acciones  <i class="fas fa-arrow-circle-down"></i></button>'
             },
             
         ],
         
         "language": {
             "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
         },
 
         "lengthMenu": [[10,50], [10,50]]
     } );
 } );
     </script>

