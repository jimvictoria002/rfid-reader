<?php
    // Get the UIDresult from the POST request
    $UIDresult = isset($_POST["UIDresult"]) ? $_POST["UIDresult"] : '';

    // Set CORS headers
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
    header("Access-Control-Allow-Headers: Content-Type, Authorization");

    // Prepare the PHP code to be written to the file
    $Write = "<?php\n";
    $Write .= "// Set CORS headers\n";
    $Write .= "header(\"Access-Control-Allow-Origin: *\");\n";
    $Write .= "header(\"Access-Control-Allow-Methods: GET, POST, OPTIONS\");\n";
    $Write .= "header(\"Access-Control-Allow-Headers: Content-Type, Authorization\");\n\n";
    $Write .= "// Process UIDresult\n";
    $Write .= "\$UIDresult = '" . addslashes($UIDresult) . "';\n";
    $Write .= "echo \$UIDresult;\n";
    $Write .= "?>";

    // Write the content to 'UIDContainer.php'
    file_put_contents('UIDContainer.php', $Write);
?>
