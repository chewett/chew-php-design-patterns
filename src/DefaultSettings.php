<?php

/**
 * Class DefaultSettings
 * Simple class to show how you can specify default options, and pass in any overrides.
 * This uses a really nice feature in php using array() + array()
 *
 * PHP documentation on array() + array():
 * The + operator returns the right-hand array appended to the left-hand array; for keys that exist in both arrays, the
 * elements from the left-hand array will be used, and the matching elements from the right-hand array will be ignored.
 *
 * See: http://php.net/manual/en/language.operators.array.php
 * 
 * @author Christopher Hewett <chewett@hotmail.co.uk>
 */
class DefaultSettings {

    /**
     * This allows you to return Hello $name, with some customisable options
     * @param string $name Name you want to say hello to
     * @param array $options Any configurable options
     * @return string String to reuturn
     */
    public static function returnHello($name, $options=array()) {
        //Here we specify the default options, This lets you specify anything that isnt nesscarily passed in
        $defaultOptions = [
            'noHello' => false,
            'noName' => false
        ];
        //Here we merge the user provided options with the default. If an array key is given in options it isnt copied
        //If it isnt then we use the default. Smart little feature to copy only if its not present.
        $fullOptions = $options + $defaultOptions;

        //Do the rest of the function
        $returnString = "";
        if(!$fullOptions['noHello']) {
            $returnString .= "Hello";
        }

        if(!$fullOptions['noName']) {
            if($returnString != "") {
                $returnString .= " ";
            }
            $returnString .= $name;
        }

        return $returnString;
    }

}
