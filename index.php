<?php
    // Regular Expression

    // $data = "01571321141";
    $data = "gou@gmail.com";

    /**
     * . ? \D \d \s \w \W
     */
    // $pattern = "/^(01|8801|\+8801)[0-9]{9}$/";
    $pattern = "/[a-zA-Z0-9@.]com/";

    if (preg_match($pattern, $data)) {
        echo "Okay";
    } else {
        echo "Not Okay";
    }
?>