<?php

function prompt_tablename() {

echo "Enter the name of your table: "; echo "\n";
$handle = fopen ("php://stdin","r");
$line = fgets($handle);
return trim($line);
}

function prompt_continue() {

echo "Are you sure you want to do this?  Type 'yes' to continue: ";
$handle = fopen ("php://stdin","r");
$line = fgets($handle);
if(trim($line) != 'yes'){
    echo "ABORTING!\n";
    exit;
}
echo "\n";
echo "Thank you, continuing...\n"; 

}


class ColorCLI
{
                static $foreground_colors = array(
                        'black'        => '0;30', 'dark_gray'    => '1;30',
                        'blue'         => '0;34', 'light_blue'   => '1;34',
                        'green'        => '0;32', 'light_green'  => '1;32',
                        'cyan'         => '0;36', 'light_cyan'   => '1;36',
                        'red'          => '0;31', 'light_red'    => '1;31',
                        'purple'       => '0;35', 'light_purple' => '1;35',
                        'brown'        => '0;33', 'yellow'	 => '1;33',
                        'light_gray'   => '0;37', 'white'        => '1;37',
                );

                static $background_colors = array(
                        'black'        => '40', 'red'          => '41',
                        'green'        => '42', 'yellow'       => '43',
                        'blue'         => '44', 'magenta'      => '45',
                        'cyan'         => '46', 'light_gray'   => '47',
                );

                 public static function info($str) {
                                 echo ColorCLI::getCs($str, 'light_blue','black');
                 }
                 public static function error($str) {
                                 echo ColorCLI::getCs($str, 'red','black');
                 }
                 public static function success($str) {
                                 echo ColorCLI::getCs($str, 'green','black');
                 }

                // Returns colored string
                public static function getCs($string, $foreground_color = null, $background_color = null) {
                        $colored_string = "";

                        // Check if given foreground color found
                        if ( isset(self::$foreground_colors[$foreground_color]) ) {
                                $colored_string .= "\033[" . self::$foreground_colors[$foreground_color] . "m";
                        }
                        // Check if given background color found
                        if ( isset(self::$background_colors[$background_color]) ) {
                                $colored_string .= "\033[" . self::$background_colors[$background_color] . "m";
                        }

                        // Add string and end coloring
                        $colored_string .=  $string . "\033[0m";

                        return $colored_string . "\n";
                }

                // Returns all foreground color names
                public static function getForegroundColors() {
                        return array_keys(self::$foreground_colors);
                }

                // Returns all background color names
                public static function getBackgroundColors() {
                        return array_keys(self::$background_colors);
                }
}

