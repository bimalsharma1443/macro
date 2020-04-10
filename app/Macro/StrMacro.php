<?php

namespace App\Macro;

class StrMacro {

	public function partNumber() {
		return function($number){
            return 'ABIK-'.substr($number, 0,3).'-'.substr($number, 3);
        };
	}

}