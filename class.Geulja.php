<?php
/*
*	글자(geulja) - character / letter / syllable
*	@author Lukas Eichberg
*/
include_once('enum.Choseong.php');
include_once('enum.Jungseong.php');
include_once('enum.Jongseong.php');

class Geulja {
	private const HANGEUL_BLOCK_OFFSET 	= 44032;
	private const INITIAL_BLOCK_SIZE 	= 588;
	private const MEDIAL_BLOCK_SIZE 	= 28;

	public Choseong		$choseong;
	public Jungseong	$jungseong;
	public Jongseong	$jongseong;
	
	public function __construct(Choseong $choseong, Jungseong $jungseong, Jongseong $jongseong) {
		$this->choseong		= $choseong;
		$this->jungseong	= $jungseong;
		$this->jongseong	= $jongseong;
	}
	
	public static function fromGeulja(String $char):?Geulja {
		if (mb_strlen($char) == 1) {
			$unicode = mb_ord($char, "UTF-8");
			$unicode -= self::HANGEUL_BLOCK_OFFSET;
			$choseong = floor($unicode / self::INITIAL_BLOCK_SIZE);
			$unicode %= self::INITIAL_BLOCK_SIZE;
			$jungseong = floor($unicode / self::MEDIAL_BLOCK_SIZE);
			$unicode %= self::MEDIAL_BLOCK_SIZE;
			$jongseong = $unicode;
			return new Geulja(
				Choseong::from($choseong),
				Jungseong::from($jungseong),
				Jongseong::from($jongseong)
			);
		}
		return null;
	}
	
	public function hasFinal():bool {
		return $this->jongseong->value != Jongseong::NONE;
	}
	
	public function __toString():String {
		return mb_chr(
			$this->choseong->value * self::INITIAL_BLOCK_SIZE +
			$this->jungseong->value * self::MEDIAL_BLOCK_SIZE +
			$this->jongseong->value + self::HANGEUL_BLOCK_OFFSET, "UTF-8"
		);
	}
	
}
?>
