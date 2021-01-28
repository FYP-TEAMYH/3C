<?php
 include 'db_connect.php';?>
<!DOCTYPE HTML>
<html>
<head>
 <meta charset="utf-8">
 <title>Chart Test</title>
 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

 function drawChart() {
 var data = google.visualization.arrayToDataTable([

    ['Order Item','Order quantity'],
    <?php 
			$query = "SELECT * from order_item";

			 $exec = mysqli_query($con,$query);
			 while($row = mysqli_fetch_array($exec)){

			 echo "['".$row['order_item_name']."',".$row['order_item_quantity']."],";
			 }
			 ?> 
 
 ]);

 var options = {
 title: 'Number of Students according to their class',
 };
 var chart = new google.visualization.PieChart(document.getElementById("columnchart12"));
 chart.draw(data,options);
 }
	
    </script>

</head>
<body>
 <div class="container-fluid">
 <div id="columnchart12" style="width: 100%; height: 500px;"></div>
 </div>

</body>
</html>

<?php
 $query = "SELECT COUNT(*) totalOrders FROM order_item;";
 $result = mysqli_query( $con, $query );
 $totalAdmins = mysqli_fetch_assoc( $result );
 echo $totalAdmins['totalOrders'];
$dataPoints = array(
	array("y" => 25, "label" => "Sunday"),
	array("y" => 15, "label" => "Monday"),
	array("y" => 25, "label" => "Tuesday"),
);
 
?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	title: {
		text: "Push-ups Over a Week"
	},
	axisY: {
		title: "Number of Push-ups"
	},
	data: [{
		type: "line",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>




<?php
//index.php
$connect = mysqli_connect("localhost", "root", "", "fyp");
$query = '
SELECT sensors_temperature_data, 
UNIX_TIMESTAMP(CONCAT_WS(" ", sensors_data_date, sensors_data_time)) AS datetime 
FROM tbl_sensors_data 
ORDER BY sensors_data_date DESC, sensors_data_time DESC
';
$result = mysqli_query($connect, $query);
$rows = array();
$table = array();

$table['cols'] = array(
 array(
  'label' => 'Date Time', 
  'type' => 'datetime'
 ),
 array(
  'label' => 'Temperature (°C)', 
  'type' => 'number'
 )
);

while($row = mysqli_fetch_array($result))
{
 $sub_array = array();
 $datetime = explode(".", $row["datetime"]);
 $sub_array[] =  array(
      "v" => 'Date(' . $datetime[0] . '000)'
     );
 $sub_array[] =  array(
      "v" => $row["sensors_temperature_data"]
     );
 $rows[] =  array(
     "c" => $sub_array
    );
}
$table['rows'] = $rows;
$jsonTable = json_encode($table);

?>


<html>
 <head>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script type="text/javascript">
   google.charts.load('current', {'packages':['corechart']});
   google.charts.setOnLoadCallback(drawChart);
   function drawChart()
   {
    var data = new google.visualization.DataTable(<?php echo $jsonTable; ?>);

    var options = {
     title:'Sensors Data',
     legend:{position:'bottom'},
     chartArea:{width:'95%', height:'65%'}
    };

    var chart = new google.visualization.LineChart(document.getElementById('line_chart'));

    chart.draw(data, options);
   }
  </script>
  <style>
  .page-wrapper
  {
   width:1000px;
   margin:0 auto;
  }
  </style>
 </head>  
 <body>
  <div class="page-wrapper">
   <br />
   <h2 align="center">Display Google Line Chart with JSON PHP & Mysql</h2>
   <div id="line_chart" style="width: 100%; height: 500px"></div>
  </div>
 </body>
</html>



<html>
<head>
 <meta charset="utf-8">
 <script type="text/javascript" src="https://www.google.com/jsapi"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <script type="text/javascript">
 google.load("visualization", "1", {packages:["corechart"]});
 google.setOnLoadCallback(drawChart);
 function drawChart() {
 var data = google.visualization.arrayToDataTable([

['Order Item','Order quantity'],
 <?php 
			$query = "SELECT * from order_item";

			 $exec = mysqli_query($con,$query);
			 while($row = mysqli_fetch_array($exec)){

			 echo "['".$row['order_item_name']."',".$row['order_item_quantity']."],";
			 }
			 ?> 
 
 ]);

 var options = {
 title: 'Order Details ',
          is3D: true,
 };
 var chart = new google.visualization.BarChart(document.getElementById("barchart_values"));
 chart.draw(data,options);
 }
    </script>

</head>
<body>
 <div class="container-fluid">
 <div id="barchart_values" style="width: 900px; height: 300px;"></div>
 </div>

</body>
</html>