$(document).ready(function(){
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);
  
  function drawChart() {
    var from = $('#txt_date_from').val();
    var to = $('#txt_date_to').val();
    ajaxLoader();
    $.ajax({
      url: baseurl + 'dashboard/statistic/statistic_product',
      type: 'POST',
      data:
        {
          from: from,
          to: to
        },
      dataType: 'json',
      success: function (result) {
        if (result['result'] === 's'){
          $('#curve_chart').show();
          $('#span_error').hide();
          var data = new google.visualization.DataTable();
          data.addColumn('string', 'Product Name');
          data.addColumn('number', 'Product Sold');
          
          for (var x = 0; x < result['total']; x++){
            data.addRow([result['product_name'][x], parseInt(result['total_order'][x])]);
          }
          
          var options = {
            title: 'Statistic Product',
            legend: { position: 'bottom' }
          };

          var chart = new google.visualization.BarChart(document.getElementById('curve_chart'));

          chart.draw(data, options);
        }
        else{
          $('#curve_chart').hide();
          $('#span_error').show();
          $('#span_error').html(result['message']);
        }
      }
    });
  };
  
  //Initial State
  $('#btn_apply').click(function(){
    drawChart();
  });
  
  $('#txt_date_from').datepicker({
    todayHighlight: true,
    zIndexOffset: '9999',
    format: 'd M yy'
  });
  
  $('#txt_date_to').datepicker({
    todayHighlight: true,
    zIndexOffset: '9999',
    format: 'd M yy'
  });
  //End Initial State
});
