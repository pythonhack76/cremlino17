<?php 

if(isset($_POST['submit'])) {
    $allowed_ext = array('png','jpg','jpeg','gif');

    if(!empty($_FILES['upload']['name'])) {
        print_r($_FILES);
        $file_name = $_FILES['upload']['name'];
        $file_size = $_FILES['upload']['size'];
        $file_tmp = $_FILES['upload']['tmp_name'];
        $target_dir = "uploads/${file_name}"; 
    } else {
        $message = '<p style="color: red;">seleziona un file </p>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<body>
    <?php echo $message ?? null; ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
    Seleziona immagina da caricare:
    <input type="file" name="upload">
    <input type="submit" value="Submit" name="submit">
</form>
</body>
</html>