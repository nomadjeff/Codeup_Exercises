<?php

 // List array items formatted for CLI
 function listItems($list)
 {
     // Return string of list items separated by newlines.
     // Should be listed [KEY] Value like this:
     // [1] TODO item 1
     // [2] TODO item 2 - blah
     // DO NOT USE ECHO, USE RETURN

    $listString="";

    foreach ($list as $key => $item) {
        // Display each item and a newline
        $listString .= "[". ++$key ."] {$item}\n";
    }
        return $listString;
 }

 // Get STDIN, strip whitespace and newlines,
 // and convert to uppercase if $upper is true
 function getInput()
 {
     // Return filtered STDIN input
    $mystring = strtoupper(trim(fgets(STDIN)));
    return $mystring;
 }

function fileToArray($filename) {

    $handle = fopen($filename, 'r');
    $contents = fread($handle, filesize($filename));
    fclose($handle);
    
    $contentsArray = explode("\n", $contents);

    return $contentsArray;
}

// Create array to hold list of todo items
$items = array();

// The loop!
do {
    // foreach ($items as $key => $item) {
    //     echo "[". ++$key ."] {$item}\n";
    // }

    echo listItems($items);

    // Show the menu options
    echo '(N)ew item, (O)pen file, (R)emove item, (Q)uit : ';

    // Get the input from user
    // Use trim() to remove whitespace and newlines
    $input = strtoupper(trim(fgets(STDIN)));

    // Check for actionable input
    if ($input == 'N') {
        // Ask for entry
        echo 'Enter item: ';
        // Add entry to list array
        $new_item = trim(fgets(STDIN));
        
        echo 'Put on top of list?' . PHP_EOL;
        $put_on_top = trim(fgets(STDIN));

        if (strtoupper($put_on_top) == 'Y') {

            array_unshift($items, $new_item);
        }

        else {

            $items[] = $new_item;
        }
    } 
    elseif (strtoupper($input) == 'R') {
        // Remove which item?
        echo 'Enter item number to remove: ';
        // Get array key
        $key = trim(fgets(STDIN)) - 1;
        // Remove from array
        unset($items[$key]);
    }
    elseif (strtoupper($input) == 'F') {
        array_shift($items);
    }
    elseif (strtoupper($input) == 'L') {
        array_pop($items);
    }
    elseif (strtoupper($input) == 'O') {
        echo 'Enter a file name or path: ';
        $filename = trim(fgets(STDIN));
        $contentsArray = fileToArray($filename);

        if (!empty($items)) {
            echo "Your list already has items in it. Would you like to add the file items to your existing list? (Y or N): ";
            $userResponse = trim(fgets(STDIN));

            if (strtoupper($userResponse) == 'Y') {
                $items = array_merge($items, $contentsArray);
            }
            else {
                $items = $contentsArray;
            }
        }

        else {
            $items = $contentsArray;
        }
    }

// Exit when input is (Q)uit
} while (strtoupper($input) != 'Q');

// Say Goodbye!
echo "Goodbye!\n";

// Exit with 0 errors
exit(0);