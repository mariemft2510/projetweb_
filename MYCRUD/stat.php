<?php  
 $connect = mysqli_connect("localhost", "root", "", "crud");  
 $query = "SELECT prix, count(*) as number FROM Services GROUP BY prix";  
 $result = mysqli_query($connect, $query);  
 $query2 = "SELECT evaluation, count(*) as number FROM Services GROUP BY evaluation";  
 $result2 = mysqli_query($connect, $query2);  
 $query3 = "SELECT datetr, count(*) as number FROM Services GROUP BY datetr";  
 $result3 = mysqli_query($connect, $query3);  
?>  

 <!DOCTYPE html>  

 <html>  
      <head>  
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript"> 

            google.charts.load("current", {packages:["corechart"]});
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['prix', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["prix"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage par rapport de prix ',  
                      is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script>  





<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript"> 

            google.charts.load("current", {packages:["corechart"]});
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['evaluation', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result2))  
                          {  
                               echo "['".$row["evaluation"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage par rapport aux evaluations',  
                      is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart2'));  
                chart.draw(data, options);  
           }  
           </script> 





<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript"> 

            google.charts.load("current", {packages:["corechart"]});
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['datetr', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result3))  
                          {  
                               echo "['".$row["datetr"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage par rapport au date ',  
                      
                      is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart3'));  
                chart.draw(data, options);  
           }  
           </script> 


      </head>  
      <body>  
        <table>
            <tr>
                <th><div id="piechart" style="width: 800px; height: 400px;"></div>  </th>
                <th><div id="piechart2" style="width: 800px; height: 400px;"></div>  </th>

            </tr>
            <tr>
                <th><div id="piechart3" style="width: 800px; height: 400px;"></div>  </th>
            </tr>
        </table>   




      </body>  
 </html> 