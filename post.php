<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $message = $_POST['massage'];
    if (empty($message)) {
        echo "Name is empty";
    } else {
        echo $message;
    }
}

?>