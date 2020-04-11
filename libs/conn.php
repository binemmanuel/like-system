<?php
try {
    // Enabling SQL error reporting.
    mysqli_error(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    // Establich the connection.
    $conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

    // Set charset.
    $conn->set_charset('utf8');
} catch (\mysqli_sql_exception $e) {
    //throw $e;
    ?>
    <pre>
        <?php throw new \mysqli_sql_exception($e->getMessage(), $e->getCode()); ?>
    </pre>
    <?php
}

