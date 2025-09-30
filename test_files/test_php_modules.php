<?php
echo "<h1>PHP Configuration Test</h1>";
echo "<h2>PHP Version: " . phpversion() . "</h2>";

echo "<h3>Essential Modules Status:</h3>";
$essential_modules = [
    'mbstring', 'mysqli', 'pdo_mysql', 'gd', 'curl', 
    'json', 'xml', 'zip', 'bcmath', 'soap', 
    'intl', 'imap', 'ldap', 'bz2', 'imagick', 'pspell'
];

echo "<table border='1' style='border-collapse: collapse;'>";
echo "<tr><th>Module</th><th>Status</th></tr>";

foreach ($essential_modules as $module) {
    $status = extension_loaded($module) ? "[SUCCESS] Loaded" : "[ERROR] Missing";
    echo "<tr><td>$module</td><td>$status</td></tr>";
}
echo "</table>";

echo "<h3>Disabled Modules Check:</h3>";
$disabled_modules = ['apcu', 'opcache'];
echo "<table border='1' style='border-collapse: collapse;'>";
echo "<tr><th>Module</th><th>Status</th></tr>";

foreach ($disabled_modules as $module) {
    $status = extension_loaded($module) ? "[ERROR] Still Enabled" : "[SUCCESS] Disabled";
    echo "<tr><td>$module</td><td>$status</td></tr>";
}
echo "</table>";

echo "<h3>MySQL Connection Test:</h3>";
try {
    $mysqli = new mysqli('localhost', 'root', '$MARIADB_ROOT_PASS', 'mysql');
    if ($mysqli->connect_error) {
        echo "[ERROR] MySQL Connection failed: " . $mysqli->connect_error;
    } else {
        echo "[SUCCESS] MySQL Connection successful";
        $mysqli->close();
    }
} catch (Exception $e) {
    echo "[ERROR] MySQL Error: " . $e->getMessage();
}

echo "<h3>PHP SAPI:</h3>";
echo "Current SAPI: " . php_sapi_name();

echo "<h3>Loaded Extensions Count:</h3>";
echo "Total extensions: " . count(get_loaded_extensions());
?>
