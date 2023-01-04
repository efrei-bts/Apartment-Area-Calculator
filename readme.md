# Exercice du 4/01/2022

Génération d'un formulaire qui contient la longueur et largeur de chaque pièce et qui donne la surface totale d'un appartement.

### Files:
|   **File**    |                                                                                              **Description**                                                                                              |
|:-------------:|:---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------:|
|   index.php   | C'est le fichier principale du site, c'est le premier fichier appeler par défaut.<br/>C'est lui qui va faire la redirection aux autres fichiers si boin.<br/>Dans notre cas il affiche aussi le resultat. |
 |   form.php    |                                                                 Contient le formulaire par défaut, celui qui demande le nombre de salles.                                                                 |
| formRooms.php |                                                                            Contient le formulaire des mesures de chaque salle.                                                                            |
| formField.php |                                  Contient les champs des mesures d'une salle.<br/>Le contenue de ce fichier sera inclue le nombre de fois nécéssaire au *formRooms.php*                                   |