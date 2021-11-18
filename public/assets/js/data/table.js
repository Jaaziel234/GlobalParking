
$(document).ready(function() {
 $('#example').DataTable( {
     dom: 'Bfrtip',
     buttons: [
         {
           /* {--Boton de PDF --} */
             extend: 'pdf',

             text: '<button class="btn btn-outline-danger border:none; btn-sm mb-0">PDF <i class="fas fa-file-pdf"></i></button>'
         },

         {
           extend: 'excel',

           text: '<button class="btn btn-outline-success border:none; btn-sm mb-0">EXCEL <i class="fas fa-file-excel"></i></button>'
         },

         {
           extend: 'csv',

           text: '<button class="btn btn-outline-success border:none; btn-sm mb-0">CSV <i class="fas fa-file-csv"></i></button>'
         },

         {
           extend: 'print',

           text: '<button class="btn btn-outline-primary border:none; btn-sm mb-0">Imprimir <i class="fas fa-print"></i></button>'
         },


          {
         extend:'colvis',
         
         text:  '<button class="btn btn-outline-warning border:none; btn-sm mb-0">Acciones  <i class="fas fa-arrow-circle-down"></i></button>'

       }, 
      
     ],
     

     "language": {
         "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
     },

     "lengthMenu": [[5,10,50], [5,10,50]]
 } );
} );
