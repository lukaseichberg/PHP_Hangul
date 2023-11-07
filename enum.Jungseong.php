<?php
/*
*	중성(jungseong) - medial vowel
*	@author Lukas Eichberg
*/
enum Jungseong:int {
	case A 		= 0;	// ㅏ
	case AE		= 1;	// ㅐ
	case YA		= 2;	// ㅑ
	case YAE	= 3;	// ㅒ
	case EO		= 4;	// ㅓ
	case E		= 5;	// ㅔ
	case YEO	= 6;	// ㅕ
	case YE		= 7;	// ㅖ
	case O		= 8;	// ㅗ
	case WA		= 9;	// ㅘ
	case WAE	= 10;	// ㅙ
	case OE		= 11;	// ㅚ
	case YO		= 12;	// ㅛ
	case U		= 13;	// ㅜ
	case WO		= 14;	// ㅝ
	case WE		= 15;	// ㅞ
	case WI		= 16;	// ㅟ
	case YU		= 17;	// ㅠ
	case EU		= 18;	// ㅡ
	case UI		= 19;	// ㅢ
	case I		= 20;	// ㅣ
	
	private const JAMO = [
		"ㅏ", "ㅐ", "ㅑ", "ㅒ", "ㅓ",
		"ㅔ", "ㅕ", "ㅖ", "ㅗ", "ㅘ",
		"ㅙ", "ㅚ", "ㅛ", "ㅜ", "ㅝ",
		"ㅞ", "ㅟ", "ㅠ", "ㅡ", "ㅢ",
		"ㅣ"
	];

	public static function fromJamo(String $jamo):?Jungseong {
		// 효율적이지 않지만 효과가있다
		// Not efficient but effective
		if (($index = array_search($jamo, self::JAMO)) !== false) {
			return Jungseong::from($index);
		}
		return null;
	}
	
	public function toString() {
		return self::JAMO[$this->value];
	}
}
?>
