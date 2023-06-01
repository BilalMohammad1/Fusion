<!DOCTYPE html>
<html>
<head>
    <title>Fusion de fichiers</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="script.js"></script>
</head>
<body>
    <div class="container">
        <img src="exalog.png" alt="Logo" class ="logo">
        <h1>Fusion de fichiers</h1>

        <?php include 'merge.php'; ?>

        <form method="POST" enctype="multipart/form-data">
            <div id="file-list" class="file-list">
                <input type="file" name="selected_files[]">
                <button type="button" onclick="addFileInput()">+</button>
            </div>
            <br>
            <button type="submit" name="submit">Fusionner</button>
        </form>
    </div>
</body>
</html>
