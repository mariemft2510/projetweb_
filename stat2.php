<?php  
 $connect = mysqli_connect("localhost", "root", "", "crud");  
 $query = "SELECT typepublication, count(*) as number FROM publication GROUP BY typepublication";  
 $result = mysqli_query($connect, $query);  
 $query2 = "SELECT numan, count(*) as number FROM publication GROUP BY numan";  
 $result2 = mysqli_query($connect, $query2);  
 
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
                          ['typepublication', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["typepublication"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage par rapport de typepublication ',  
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
                          ['numan', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result2))  
                          {  
                               echo "['".$row["numan"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage par rapport aux numans',  
                      is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart2'));  
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
            
        </table>   




      </body>  
 </html> 