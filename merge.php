<?php
if (isset($_POST['submit'])) {
    $selectedFiles = $_FILES['selected_files'];

    $mergedContent = '';
    foreach ($selectedFiles['tmp_name'] as $key => $tmpName) {
        $file = $selectedFiles['name'][$key];

        $content = file_get_contents($tmpName);
        $mergedContent .= $content;
    }

    // Fichier de sortie fusionné
    $mergedFile = 'fichier-fusionne.txt';
    file_put_contents($mergedFile, $mergedContent);

    echo "Les fichiers ont été fusionnés avec succès dans le fichier : $mergedFile";
}
?>
