<?php
/*
*	종성(jongseong) - final consonant
*	@author Lukas Eichberg
*/
enum Jongseong:int {
	case NONE 			= 0;	//
	case GIYEOK			= 1;	// ㄱ
	case SSANGGIYEOK	= 2;	// ㄲ
	case GIYEOKSIOT		= 3;	// ㄳ
	case NIEUN			= 4;	// ㄴ
	case NIEUNJIEUT		= 5;	// ㄵ
	case NIEUNHIEUT		= 6;	// ㄶ
	case DIGEUT			= 7;	// ㄷ
	case RIEUL			= 8;	// ㄹ
	case RIEULGIYEOK	= 9;	// ㄺ
	case RIEULMIEUM		= 10;	// ㄻ
	case RIEULBIEUP		= 11;	// ㄼ
	case RIEULSIOT		= 12;	// ㄽ
	case RIEULTIEUT		= 13;	// ㄾ
	case RIEULPIEUP		= 14;	// ㄿ
	case RIEULHIEUT		= 15;	// ㅀ
	case MIEUM			= 16;	// ㅁ
	case BIEUP			= 17;	// ㅂ
	case BIEUPSIOT		= 18;	// ㅄ
	case SIOT			= 19;	// ㅅ
	case SSANGSIOT		= 20;	// ㅆ
	case IEUNG			= 21;	// ㅇ
	case JIEUT			= 22;	// ㅈ
	case CHIEUT			= 23;	// ㅊ
	case KIEUK			= 24;	// ㅋ
	case TIEUT			= 25;	// ㅌ
	case PIEUP			= 26;	// ㅍ
	case HIEUT			= 27;	// ㅎ
	
	private const JAMO = [
		"", "ㄱ", "ㄲ", "ㄳ", "ㄴ",
		"ㄵ", "ㄶ", "ㄷ", "ㄹ", "ㄺ",
		"ㄻ", "ㄼ", "ㄽ", "ㄾ", "ㄿ",
		"ㅀ", "ㅁ", "ㅂ", "ㅄ", "ㅅ",
		"ㅆ", "ㅇ", "ㅈ", "ㅊ", "ㅋ",
		"ㅌ", "ㅍ", "ㅎ"
	];

	public static function fromJamo(String $jamo):?Jongseong {
		// 효율적이지 않지만 효과가있다
		// Not efficient but effective
		if (($index = array_search($jamo, self::JAMO)) !== false) {
			return Jongseong::from($index);
		}
		return null;
	}
	
	public function toString() {
		return self::JAMO[$this->value];
	}
}
?>
