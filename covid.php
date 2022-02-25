<?php
function zeroCases($recovers,$newCases,$activeCases){
	echo ceil($activeCases/($recovers-$newCases));
}
zeroCases(4000,2000,77000);
?>