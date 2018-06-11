<?php
	include 'php/businessLogic.php';

	function tableComingShows(){

		$bl = new businessLogic();

		$result = $bl->getcomingshows();

		$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";       

		// output data of each row
		while($row = $result->fetch_assoc()) {
			$row = array_map("utf8_encode", $row);
		    echo "<tr  class='past-shows--row past-shows__table--body'>";
		    echo "<td>" . $row['fecha'] . "</td>";
		    $place=$row['lugar'];
		    $sepplace=explode(' / ', $place);
		    echo "<td>" . $sepplace[0] . "</td>"; 
		    echo "<td class='past-shows__venue'>" . $sepplace[1] . "</td>";
		    echo "<td class='past-shows__country'>" . $sepplace[2] . "</td>";
		    echo "<td class='past-shows__bands'>" . $row['con'] . "</td>";

		    if (empty($row['evento'])){

		    	echo "<td class='past-shows__event'>*Not available</td>";

		    }

		    else{
		    $evento=$row['evento'];

			    echo "<td class='past-shows__button past-shows__button--tickets'><a class='past-shows--link' href='$evento' target='_blank'><div class='past-shows--button'>Go</div></a></td>";
               
		    }

		    if (empty($row['tickets'])){

		    	echo "<td class='past-shows__tickets'>*Not available</td>";
		        echo "</tr>";

		    }

		    else{
		    $ticket=$row['tickets'];

			    echo "<td class='past-shows__button past-shows__button--tickets'><a class='past-shows--link' href='$ticket' target='_blank'><div class='past-shows--button'>Buy</div></a></td>";
			    echo "</tr>";
               
		    }		    


		}
	}

	function tablePastShows(){

		$bl = new businessLogic();

		$result = $bl->getpastshows();

		$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";       

		// output data of each row
		while($row = $result->fetch_assoc()) {
			$row = array_map("utf8_encode", $row);
		    echo "<tr  class='past-shows--row past-shows__table--body'>";
		    echo "<td>" . $row['fecha'] . "</td>";
		    $place=$row['lugar'];
		    $sepplace=explode(' / ', $place);
		    echo "<td>" . $sepplace[0] . "</td>"; 
		    echo "<td class='past-shows__venue'>" . $sepplace[1] . "</td>";
		    echo "<td class='past-shows__country'>" . $sepplace[2] . "</td>";
		    echo "<td class='past-shows__bands'>" . $row['con'] . "</td>";

		}
	}

?>