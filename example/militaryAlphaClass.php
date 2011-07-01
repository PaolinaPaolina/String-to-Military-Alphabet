<?php

/**
 * String to Military Alphabet Class
 * 
 * See help file to implement
 * 
 * @version 1.0
 * @author Kyle King (kyle.king@highergroundstudio.com)
 * @copyright Higher Ground Studio 2011
 */
class StringToMilitaryPhonetic {

    /**
     * Convert string to Military Phonetic Alphabet
     * Example=> 1b3s => One-Bravo-Three-Sierra
     * 
     *
     * @param string $str String to convert
	 * @param bool $NoNubmConv Do you want the numbers to be converted (i.e. 4 to four)?
	 * @param bool $NoSpaceConv Do you want spaces to be converted (i.e. " " to space)?
     * @return string Converted
     */
    function convert($str, $NoNumbConv = false, $NoSpaceConv = false) {
	//Setup Military Alphabet
	$MilitaryPhonetics = array(
        'a' => 'Alfa',
        'b' => 'Bravo',
        'c' => 'Charlie',
        'd' => 'Delta',
        'e' => 'Echo',
        'f' => 'Foxtrot',
        'g' => 'Golf',
        'h' => 'Hotel',
        'i' => 'India',
        'j' => 'Juliett',
        'k' => 'Kilo',
        'l' => 'Lima',
        'm' => 'Mike',
        'n' => 'November',
        'o' => 'Oscar',
        'p' => 'Papa',
        'q' => 'Quebec',
        'r' => 'Romeo',
        's' => 'Sierra',
        't' => 'Tango',
        'u' => 'Uniform',
        'v' => 'Victor',
        'w' => 'Whiskey',
        'x' => 'Xray',
        'y' => 'Yankee',
        'z' => 'Zulu',
		'0' => 'Zero',
        '1' => 'One',
        '2' => 'Two',
        '3' => 'Three',
        '4' => 'Four',
        '5' => 'Five',
        '6' => 'Six',
        '7' => 'Seven',
        '8' => 'Eight',
        '9' => 'Nine',
		'~' => 'Tilde',
        '@' => 'At',
        '#' => 'Pound',
        '$' => 'Dollar',
        '%' => 'Percent',
        '^' => 'Caret',
        '&' => 'Ampersand',
        '*' => 'Asterisk',
        '(' => 'LeftParenthesis',
        ')' => 'RightParenthesis',
        '-' => 'Dash',
        '_' => 'Underscore',
        '+' => 'Plus',
        '-' => 'Minus',
        '?' => 'QuestionMark',
        '!' => 'ExclamationMark',
        '>' => 'GreaterThan',
        '<' => 'LessThan',
        '.' => 'Period',
        ',' => 'Comma',
        '=>' => 'Colon',
        ';' => 'SemiColon',
        '[' => 'LeftSquareBracket',
        ']' => 'RightSquareBracket',
        '{' => 'LeftCurlyBracket',
        '}' => 'RightCurlyBracket',
        '/' => 'ForwardSlash',
        '\\' => 'BackSlash',
        '|' => 'Pipe',
        "'" => 'SingleQuote',
        '"' => 'DoubleQuote',
        '`' => 'BackTick',
        '\'' => 'Tick',
        ' ' => 'Space',
    );
		//String to lowercase
		$str = strtolower($str);
		//Convert into array
        $strArr = str_split($str);
		$converted = "";
		//Convert each character to military alphabet
		foreach ($strArr as &$value) {
			//If there is nothing there yet no need for dash
			if (empty($converted)){
				//Check if it is numeric and $numbConv is false
				if (is_numeric($value) && $NoNumbConv){
					$converted = $value;
				}else{
					$converted = $MilitaryPhonetics[$value];
				}
			} else {
				//Check if NoSpaceConv is false and value is a space
				if ($value == ' ' && $NoSpaceConv){
					$converted = $converted . " ";
				} else {
					//Check if it is numeric and $numbConv is false
					if (is_numeric($value) && $NoNumbConv){
						if (substr($converted, -1) == ' '){
							$converted = $converted . $value;
						} else{
							$converted = $converted . "-" . $value;
						}
					}else{
						//Check if last character was a space
						if (substr($converted, -1) == ' '){
							$converted = $converted . $MilitaryPhonetics[$value];
						}else{
							$converted = $converted . "-" . $MilitaryPhonetics[$value];
						}
					}
				}
			}
		}
        return $converted;
    }

}

?>
