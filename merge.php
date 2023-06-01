<?php
if (isset($_POST['submit'])) {
    $selectedFiles = $_FILES['selected_files'];

    // Créer un dossier pour les fichiers fusionnés
    $mergedFolder = '../Fusion-fichier/';
    mkdir($mergedFolder);

    $mergedContent = '';
    foreach ($selectedFiles['tmp_name'] as $key => $tmpName) {
        $file = $selectedFiles['name'][$key];
        $targetFile = $mergedFolder . $file;

        // Déplacer le fichier téléchargé vers le dossier fusionné
        move_uploaded_file($tmpName, $targetFile);

        $content = file_get_contents($targetFile);
        $mergedContent .= $content;
    }

    // Fichier de sortie fusionné
    $mergedFile = 'fichier-fusionne.txt';
    file_put_contents($mergedFile, $mergedContent);

    echo "Les fichiers ont été fusionnés avec succès dans le dossier : $mergedFolder";
}
?>
