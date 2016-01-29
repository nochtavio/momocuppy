$(document).ready(function(){
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);
  
  function drawChart() {
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Date');
    data.addColumn('number', 'Member Registered');
    data.addRows([
      ['2004', 11],
      ['2005', 13],
      ['2006', 15],
      ['2007', 7],
      ['2008', 12]
    ]);

    var options = {
      title: 'Statistic Member',
      legend: { position: 'bottom' }
    };

    var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

    chart.draw(data, options);
  };
  
  //Initial State
  $('#btn_apply').click(function(){
    drawChart();
  });
  
  $('#txt_date_from').datepicker({
    todayHighlight: true,
    zIndexOffset: '9999',
    format: 'yyyy-m-d'
  });
  //End Initial State
});
