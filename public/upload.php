<?php
if (isset($_FILES['file'])) {
    $name = $_FILES['file']['name'];
    $tmp = $_FILES['file']['tmp_name'];
    move_uploaded_file($tmp, "uploads/" . $name);
    echo "Uploaded as uploads/" . htmlspecialchars($name);
}
?>