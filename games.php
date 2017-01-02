<!DOCTYPE html>
<html lang="en">
    <?php
        readfile("header.php");
    ?>
	<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <span class="navbar-brand">Bobs Bowl Challenge</span>
      <div class="container">
        <ul class="nav navbar-nav">
          <li role="presentation" ><a href="home.php">Home</a></li>
          <li role="presentation" class="active"><a href="games.php">Games</a></li>
          <li role="presentation" ><a href="leaders.php">Leaders</a></li>
        </ul>
      </div>
    </nav>
    <div class="container-fluid" style="padding-top: 70px;">
        <?php
            $month = date("M");
            $day = date("j");
            if(($month <= 11 && $day < 17) && ($month >= 0 && $day >= 9)){
            echo "<p class='text-center'>Picks will not be shown before the day of the first game.</p>";
            }
        ?>
      <table class="table table-hover table-striped table-fixedheader">
        <?php
          $data = file("data.csv");
          $dataArray = [];
          for($i=0; $i<count($data); $i++){
            array_push($dataArray, explode(",",$data[$i]));
          }
          //Head
          echo "<thead><tr>";
            echo "<th class='date'>".$dataArray[0][0]."</th>";
            //echo "<th class='time'>".$dataArray[0][1]."</th>";
            //echo "<th class='tv'>".$dataArray[0][2]."</th>";
            echo "<th class='bowl'>".$dataArray[0][3]."</th>";
            for($i=6; $i<count($dataArray[0])-1; $i++){
              echo "<th class='teamname'>".$dataArray[0][$i]."</th>";
            }

          echo "</tr></thead>";
          //Body
          echo "<tbody>";
            for($i=1; $i<count($dataArray); $i++){
              //echo $modalTeam1;
              echo "<tr>";
                echo "<td class='date'>".$dataArray[$i][0]."</td>";
                //echo "<td class='time'>".$dataArray[$i][1]."</td>";
                //echo "<td class='tv'>".$dataArray[$i][2]."</td>";
                echo "<td class='bowl'>".$dataArray[$i][3]."</td>";
                echo "<td class='teamname'>"; if(empty($dataArray[$i][6])){echo "-";}else{echo $dataArray[$i][6];} echo "</td>";
                echo "<td class='teamname'>"; if(empty($dataArray[$i][7])){echo "-";}else{echo $dataArray[$i][7];} echo "</td>";
                echo "<td class='teamname'>"; if($dataArray[$i][8]==1){echo $dataArray[$i][6];}elseif($dataArray[$i][8]==2){echo $dataArray[$i][7];}else{echo "-";} echo "</td>";
                for($j=9; $j<count($dataArray[$i])-1; $j++){
                  echo "<td class='teamname'>";
                  $month = date("M");
                  $day = date("j");
                  if(($month == 11 && $day >= 17) || ($month == 0 && $day <= 9)){
                  //if(($month == 12 && $day >= 17) || ($month == 1 && $day <= 9)){
                    if($dataArray[$i][$j] == $dataArray[$i][8] && is_numeric($dataArray[$i][8])){echo "&#x2714; ";}
                    elseif($dataArray[$i][$j] != $dataArray[$i][8] && is_numeric($dataArray[$i][8]) && !empty($dataArray[$i][8])){echo "&#x2718; ";}
                    if($dataArray[$i][$j]==1){echo $dataArray[$i][6];}elseif($dataArray[$i][$j]==2){echo $dataArray[$i][7];}else{echo "-";}
                  }
                  else{
                    echo "-";
                  }
                  echo "</td>";
                }
              echo "</tr>";
            }
          echo "</tbody>";
        ?>
      </table>
    </div>
	</body>
</html>
