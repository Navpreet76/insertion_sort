<?php
		/* Populate a sample array with 100 values where each value is a random number between 0 and 10000. Implement a selection sort algorithm that returns a new array that's sorted with smallest number on the left. Do this without creating another array */

		for($x = 1; $x <= 100; $x++)
		{
			$numbers[] = rand(1, 10000);

		}
		var_dump($numbers);

		function insertion_sort($numbers)
		{
			for($counter = 0; $counter < (count($numbers) - 1); $counter++)
			{
				$length = $counter + 1;
				$first = $numbers[$counter];

				if($numbers[$length] < $first)
				{
					for($num = 0; $num < $length; $num++)
					{
						if($numbers[$length] < $numbers[$num])
						{
							$temporary = $numbers[$num];
							$numbers[$num] = $numbers[$length];
							$numbers[$length] = $temporary;

						}
					}
				}
			}
		}
		function microtime_float()
		{
			list($usec, $sec) = explode(" ", microtime());
			return ((float)$usec + (float)$sec);
		}

		$time_start = microtime_float();

		insertion_sort($numbers);

		$time_end = microtime_float();

		$time = $time_end - $time_start;

		echo "Did nothing in $time seconds\n";
?>