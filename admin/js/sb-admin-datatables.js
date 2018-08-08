// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#dataTable').DataTable({
      dom: 'Bfrtip',
      buttons: [
          {
              extend:    'excelHtml5',
              text:      '<i class="fa fa-file-excel-o"></i>',
              titleAttr: 'Export Excel'
          },
          {
              extend:    'csvHtml5',
              text:      '<i class="fa fa-file-archive-o"></i>',
              titleAttr: 'Export CSV'
          },
          {
              extend:    'pdfHtml5',
              text:      '<i class="fa fa-file-pdf-o"></i>',
              titleAttr: 'Export PDF'
          }
      ]
  });
});
