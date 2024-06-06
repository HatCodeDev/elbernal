import 'bootstrap/dist/js/bootstrap.bundle';
import 'bootstrap'


 import DataTable from 'datatables.net-dt';
 import DataTableLib from 'datatables.net-bs5';
 import 'datatables.net-buttons-bs5';
 import ButtonsHtml5 from 'datatables.net-buttons/js/buttons.html5';
 import 'datatables.net-buttons/js/buttons.print';
 import 'datatables.net-responsive';
 import JsZip from 'jszip'; 
 window.JSZip = JsZip

 DataTable.use(DataTableLib);
 DataTable.use(ButtonsHtml5);

 let botones = [
     {
         title:'El Bernal',
         extend:'excelHtml5',
         text:'<i class="fa-solid fa-file-excel"></i> Excel',
         className:'btn btn-success'
     },
     {
         title:'El Bernal',
         extend:'print',
         text:'<i class="fa-solid fa-print"></i> Imprimir',
         className:'btn btn-dark'
     }
 ]

 let idioma = {
     search:'Buscar', zeroRecords:'No hay usuarios',
     info:'Mostrando del _START_ a _END_ de _TOTAL_ usuarios',
     infoFiltered: '(Fitrados de _MAX_registros.)'
 }

  let table = new DataTable('.table',{
      responsive: true, language:idioma,
      layout:{
          topStart:{
          buttons:botones
          }
      }
  })