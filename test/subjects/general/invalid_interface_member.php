<?php

	interface Foo 
	{
		var $bold; # { Error: Interfaces may not include member variables } 
	}

?>
