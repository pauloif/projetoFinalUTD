$(document).ready( function () {
  $(".myTable").DataTable({  	
   	language: {
      url: "//cdn.datatables.net/plug-ins/1.11.3/i18n/pt_br.json"          
   	},
   	colReorder: true,
   	"ordering": false,
   	"bPaginate": true,
   	"pageLength": 25,
   	"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Todos"]],
   	"responsive": true, "lengthChange": false, "autoWidth": false, 
    initComplete: function(){
      var api = this.api();

      new $.fn.dataTable.Buttons(api, {
         buttons: [
            /*{
	            extend:    'copyHtml5',
	            text:      '<span class="iconify" data-icon="akar-icons:copy"></span>',
	            titleAttr: 'Copiar'
	        },

	        {
	            extend:    'csv',
	            text:      ' <span class="iconify" data-icon="fa-solid:file-csv"></span> ',
	            titleAttr: 'CSV'
	        },*/
	        {
	            extend:    'pageLength',
	            text:      '<span class="iconify" data-icon="ic:twotone-table-rows"></span> ',
	            titleAttr: 'QTD Registros'
	        },
	        {
	            extend:    'excel',
	            text:      ' <span class="iconify" data-icon="ant-design:file-excel-filled"></span> ',
	            titleAttr: 'Excel'
	        },
	        
	        {
	            extend:    'pdf',
	            text:      ' <span class="iconify" data-icon="ant-design:file-pdf-filled"></span> ',
	            titleAttr: 'PDF'
	        },
	        {
	            extend:    'print',
	            text:      '<span class="iconify" data-icon="ant-design:printer-filled"></span> ',
	            titleAttr: 'PDF'
	        },
	        {
	            extend:    'colvis',
	            text:      '<span class="iconify" data-icon="akar-icons:eye"></span> ',
	            titleAttr: 'Mostrar/Ocutar'
	        },

         ]
      });

      api.buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');  
   }
  });
});


$(document).ready(function(){
 $('body').addClass('sidebar-collapse');
});

//layout-fixed control-sidebar-slide-open sidebar-collapse