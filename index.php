
<?php
/*
	@package Text_Diff
*/

	require_once 'horde-text-diff-master\zibrav.php';
	require_once 'db_class.php';


	/* */
	/*
	for ($i=0; $i < 5; $i++) {
		$new_mass[$i] = array();
		for ($j=0; $j < 16; $j++) { 
			
			$new_mass[$i][$j] = rand()%10;
		}
	}

	*/
	$new_mass[0] =array();
	$new_mass[0][0]="1212";
	$new_mass[0][1]="1212";
	$new_mass[0][2]="1212";
	$new_mass[0][3]="1212";
	$new_mass[0][4]="1212";
	$new_mass[0][5]="1212";
	$new_mass[0][6]="1212";
	$new_mass[0][7]="1212";
	$new_mass[0][8]="1212";
	$new_mass[0][9]="1212";
	$new_mass[0][10]="1212";
	$new_mass[0][11]="1212";
	$new_mass[0][12]="1212";
	$new_mass[0][13]="1212";
	$new_mass[0][14]="1212";
	$new_mass[0][15]="1212";
	

	/* дані з бази сюдим 
	$result = Db_a::getRecordById($id);
	$lol = Db_a::createRecord($result);
	$result = Db_a::deleteRecordById($id);
	*/
	
	/*  */
	$db = new DataBase();
	$all_base_rows = DataBase::getAllRecords();


	$elements_to_compare = array();
	$input_new_elements = array();
	foreach ($new_mass as $m_id) {
		$new = null;
		foreach ($all_base_rows as $b) {

			if($m_id[1]==$b[1]){
				array_push($elements_to_compare, $b);
				$new = null;
				break;
			}
			echo $m_id[1]." ".$b[1]."\n";
			$new = $m_id[1];
		}
		if($new)
			array_push($input_new_elements, $new);
	}

/*	var_dump($elements_to_compare);*/

/*-------------------------------------------------------------------------------------*/

	$update_elements = '';
	$iter=0;
	while(isset($elements_to_compare[$iter])){
		$row = DataBase::getRecordById($elements_to_compare[$iter][1]);
		var_dump($row);
		var_dump($elements_to_compare[$iter]);

		$diff = new Horde_Text_Diff('auto', array($elements_to_compare,$row));
		$renderer = new Horde_Text_Diff_Renderer_Inline($diff);
		echo $renderer->render($diff);
		/*$update_elements .= "out[".$iter."][".$jter."] = ".$renderer->render($diff).PHP_EOL;*/
		
		$iter++;
	}
	echo "u\n";
	var_dump($update_elements);

/*------------------------------------------------------------------------------------------*/

	die();
	$str_mass="";
	
	$i = 0;
	while (isset($new_mass[$i])) {
		for ($j = 0; $j < 16; $j++) { 
			$str_mass .= "out[".$i."][".$j."] = ".$new_mass[$i][$j].PHP_EOL;
			
		}
		$i++;
	}

	if(!file_put_contents("f2.txt", $str_mass ) ){
		echo "rrrr";
		die();
	}

	/*$diff = new Horde_Text_Diff('auto', array($lines1, $lines2));
	/* Output the diff in unified format. 
	$renderer = new Horde_Text_Diff_Renderer_Inline($diff);
	echo $renderer->render($diff);
	text_format($renderer->render($diff));
	file_put_contents("temp.txt", $result);
	*/







	function text_format($string){
		$result = str_ireplace("=", "= </div>", $string);
		$result = str_ireplace("<ins>", "<div style='background:green; display: inline-block;'>", $result);
		$result = str_ireplace("out", "</p><p><div style='display: inline-block;'>out", $result);
		$result = str_ireplace("</ins>", "</div>", $result);
		$result = str_ireplace("<del>", "<div style='background:red;display: inline-block;'><s>", $result);
		$result = str_ireplace("</del>", "</s></div>&nbsp;", $result);
	}