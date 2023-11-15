<?php
declare(strict_types=1);

function dbug($value)
{
    echo '<pre style="background-color:darkgreen;color:orange;font-weight:bold;overflow: auto;padding: 1rem;font-family:monospace;">';
    print_r($value);
    // var_dump($value);
    echo '</pre>';
}

function dd($value)
{
    dbug($value);
    die('Script php arrété !!!');
}

function uploadImage($image) {
    // Validate the image
    if (!$image['error']) {
        // Get image extension
        $imageExtension = strtolower(pathinfo($image['name'], PATHINFO_EXTENSION));

        // Allow only certain file types
        $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
        if (!in_array($imageExtension, $allowedExtensions)) {
            throw new Exception('Invalid image format');
        }

        // Generate a unique filename
        $imageFilename = uniqid() . '.' . $imageExtension;

        // Upload the image
        if (!move_uploaded_file($image['tmp_name'], '../uploads/' . $imageFilename)) {
            throw new Exception('Failed to upload image');
        }

        // Return the uploaded image filename
        return $imageFilename;
    } else {
        // Handle image upload error
        if ($image['error'] === UPLOAD_ERR_INI_SIZE) {
            throw new Exception('The image is too large');
        } elseif ($image['error'] === UPLOAD_ERR_FORM_SIZE) {
            throw new Exception('The image is too large (exceeds form limit)');
        } elseif ($image['error'] === UPLOAD_ERR_PARTIAL) {
            throw new Exception('The image was only partially uploaded');
        } elseif ($image['error'] === UPLOAD_ERR_NO_FILE) {
            throw new Exception('No image was selected');
        } else {
            throw new Exception('An unknown error occurred while uploading the image');
        }
    }
}