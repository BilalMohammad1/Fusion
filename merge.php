<?php
if(isset($_POST['submit'])) {
    $selectedFiles = $_POST['selected_files'];

    $mergedContent = '';
    foreach ($selectedFiles as $file) {
        $content = file_get_contents($file);
        $mergedContent .= $content;
    }

    $mergedFile = '/home/bmohammad/Documents/fusion/fusionne.txt';
    file_put_contents($mergedFile, $mergedContent);

    echo "Les fichiers ont été fusionnés avec succès dans le fichier : $mergedFile";
}
?>
