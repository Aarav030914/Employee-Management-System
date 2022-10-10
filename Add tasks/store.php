<?php
	
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		
		
        
        $data = [
            'Username' => $_POST['username'],
            'Description' => $_POST['description'],
            'Date' => $_POST['date'],
            'Start_Time' => $_POST['start_time'],
            'End_Time' => $_POST['end_time'],
        ];
			
		
		
        $inp = file_get_contents('employe_task.json');
        $jsonarray = json_decode($inp);
        $tempArray = array();
        $i = 0;
        while($i < count($jsonarray)){
            array_push($tempArray, $jsonarray[$i]);
            $i++;
        }
        array_push($tempArray, $data);
        if(file_put_contents('employe_task.json', json_encode($tempArray))){
            echo "Data added";
        }
        else{
            echo "Error";
        }
	}
?>
