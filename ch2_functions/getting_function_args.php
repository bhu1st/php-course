<?php 

	function some_func($a, $b) {
        for ($i = 0; $i < func_num_args(); ++$i) {
            $param = func_get_arg($i);
            echo "Received parameter $param.<br/>";
        }
    }

    function some_other_func($a, $b) {
        $param = func_get_args();
        
		$param = join(", ", $param); // joins array elements returns as string separated by comma (,)
		
        echo "Received parameters: $param.<br/>";
    }

    some_func(1,2,3,4,5,6,7,8);
    some_other_func(1,2,3,4,5,6,7,8);
	
?>