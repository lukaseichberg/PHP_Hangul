<?php
/*
*	초성(choseong) - initial consonant
*	@author Lukas Eichberg
*/
enum Choseong:int {
	case GIYEOK			= 0;	// ㄱ
	case SSANGGIYEOK	= 1;	// ㄲ
	case NIEUN			= 2;	// ㄴ
	case DIGEUT			= 3;	// ㄷ
	case SSANGDIGEUT	= 4;	// ㄸ
	case RIEUL			= 5;	// ㄹ
	case MIEUM			= 6;	// ㅁ
	case BIEUP			= 7;	// ㅂ
	case SSANGBIEUP		= 8;	// ㅃ
	case SIOT			= 9;	// ㅅ
	case SSANGSIOT		= 10;	// ㅆ
	case IEUNG			= 11;	// ㅇ
	case JIEUT			= 12;	// ㅈ
	case SSANGJIEUT		= 13;	// ㅉ
	case CHIEUT			= 14;	// ㅊ
	case KIEUK			= 15;	// ㅋ
	case TIEUT			= 16;	// ㅌ
	case PIEUP			= 17;	// ㅍ
	case HIEUT			= 18;	// ㅎ
	
	private const JAMO = [
		"ㄱ", "ㄲ", "ㄴ", "ㄷ", "ㄸ",
		"ㄹ", "ㅁ", "ㅂ", "ㅃ", "ㅅ",
		"ㅆ", "ㅇ", "ㅈ", "ㅉ", "ㅊ",
		"ㅋ", "ㅌ", "ㅍ", "ㅎ"
	];

	public static function fromJamo(String $jamo):?Choseong {
		// 효율적이지 않지만 효과가있다
		// Not efficient but effective
		if (($index = array_search($jamo, self::JAMO)) !== false) {
			return Choseong::from($index);
		}
		return null;
	}
	
	public function toString() {
		return self::JAMO[$this->value];
	}
}
?>
