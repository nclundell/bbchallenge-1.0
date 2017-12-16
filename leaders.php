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
          <!--<li role="presentation" ><a href="games.php">Games</a></li>-->
          <li role="presentation" class="active"><a href="leaders.php">Leaders</a></li>
        </ul>
      </div>
    </nav>
		<div class="center-block container two-column" style="padding-top: 70px;">
      <table class="table table-striped">
        <thead>
          <tr>
            <th class="name">Name</th>
            <th class="points">Points</th>
          <tr>
        </thead>
        <tbody>
          <?php
            $data = file("data.csv");
            $dataArray = [];
            for($i=0; $i<count($data); $i++){
              array_push($dataArray, explode(",",$data[$i]));
            }
            $leaders = array_fill_keys($dataArray[0], 0);
            array_pop($leaders);
            for($i=0; $i<9; $i++){
              array_shift($leaders);
            }
            for($i=1; $i<count($dataArray); $i++){
              for($j=9; $j<count($dataArray[$i]); $j++){
                if($dataArray[$i][$j] == $dataArray[$i][8] && is_numeric($dataArray[$i][8])){
                  $leaders[$dataArray[0][$j]] += $dataArray[$i][5];
                }
              }
            }
            array_multisort(array_values($leaders), SORT_DESC, array_keys($leaders), SORT_ASC, $leaders);
            $l_keys = array_keys($leaders);
            $l_vals = array_values($leaders);
            for($i=0; $i<count($leaders); $i++){
              echo "<tr>";
              echo "<td class='name'>".$l_keys[$i]."</td>";
              echo "<td class='points'>".$l_vals[$i]."</td>";
              echo "</tr>";
            }
          ?>
        </tbody>
      </table>
		</div>
	</body>
</html>
