<!DOCTYPE html>
<html lang="en">
  <?php
  readfile("header.php");
  date_default_timezone_set('America/Indiana/Indianapolis');
  ?>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <span class="navbar-brand">Nelundaar Challenge</span>
      <div class="container">
        <ul class="nav navbar-nav">
          <li role="presentation" class="active"><a href="home.php">Home</a></li>
          <li role="presentation" ><a href="games.php">Games</a></li>
          <li role="presentation" ><a href="leaders.php">Leaders</a></li>
        </ul>
      </div>
    </nav>
		<div class="page-header" style="padding-top: 70px;">
			<h1 class="text-center">Welcome!</h1>
			<?php
                $day = date("z");	
                if(($day >= 349) || ($day <= 9)){
                echo "<p class='text-center'>Today's bowls are listed below.  All games in EST.  (".date("n/j").")</p>";
                }
                else{
                echo "<p class='text-center'>Please submit your bowl selections by December 16th if you have not already done so.</p>";
                }
            ?>
		</div>
    <div class="container-fluid">
      <?php
        $date = date("n/j");
        $day = date("z");
        if(($day >= 349) || ($day <= 9)){
          echo "<table class='table table-hover table-striped table-fixed'>";
            //Generate Table
            $data = file("data.csv");
            $dataArray = [];
            for($i=0; $i<count($data); $i++){
              array_push($dataArray, explode(",",$data[$i]));
            }
            //Head
            echo "<thead><tr>";
              //echo "<th class='date'>".$dataArray[0][0]."</th>";
              echo "<th class='time'>".$dataArray[0][1]."</th>";
              echo "<th class='tv'>".$dataArray[0][2]."</th>";
              echo "<th class='bowl'>".$dataArray[0][3]."</th>";
              for($i=6; $i<count($dataArray[0])-1; $i++){
                echo "<th class='teamname'>".$dataArray[0][$i]."</th>";
              }
            echo "</tr></thead>";
              //Body
            echo "<tbody>";
              for($i=1; $i<count($dataArray); $i++){
                if($dataArray[$i][0] == $date){
                  echo "<tr>";
                    //echo "<td class='date'>".$dataArray[$i][0]."</td>";
                    echo "<td class='time'>".$dataArray[$i][1]."</td>";
                    echo "<td class='tv'>".$dataArray[$i][2]."</td>";
                    echo "<td class='bowl'>".$dataArray[$i][3]."</td>";
                    echo "<td class='teamname'>"; if(empty($dataArray[$i][6])){echo "-";}else{echo $dataArray[$i][6];} echo "</td>";
                    echo "<td class='teamname'>"; if(empty($dataArray[$i][7])){echo "-";}else{echo $dataArray[$i][7];} echo "</td>";
                    echo "<td class='teamname'>"; if($dataArray[$i][8]==1){echo $dataArray[$i][6];}elseif($dataArray[$i][8]==2){echo $dataArray[$i][7];}else{echo "-";} echo "</td>";
                    for($j=9; $j<count($dataArray[$i])-1; $j++){
                      echo "<td class='teamname'>";
                        if($dataArray[$i][$j] == $dataArray[$i][8] && is_numeric($dataArray[$i][8])){echo "&#x2714; ";}
                        elseif($dataArray[$i][$j] != $dataArray[$i][8] && is_numeric($dataArray[$i][8])){echo "&#x2718; ";}
                        if($dataArray[$i][$j]==1){echo $dataArray[$i][6];}elseif($dataArray[$i][$j]==2){echo $dataArray[$i][7];}else{echo "-";}
                      echo "</td>";
                    }
                  echo "</tr>";
                }
              }
            echo "</tbody>";
          echo "</table>";
        }
      ?>
    </div>
  </body>
</html>
