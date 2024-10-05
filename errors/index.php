<?php
// Log an error message to 'error-custom.log' in the specified directory
error_log('Some errors occurred', 3, '/opt/lampp/htdocs/PhPJourney/PhP-journey/errors/error-custom.log');

// Require the contact.php file (ensure it's in the right directory)
require('edit.php');
?>
