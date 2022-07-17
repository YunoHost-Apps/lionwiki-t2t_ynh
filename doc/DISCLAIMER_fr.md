## Configuration

Dans le dossier racine de l'application il y a 2 fichiers, `config.php` et `config.t2t`

- config.php permet de modifier le mot de passe, le choix du template utilisé et la page par défaut. Vous pouvez également définir ici un mot de passe administrateur (pour bloquer certaines pages en édition)

- `config.t2t` est pour customiser votre syntaxe wiki. Vous pouvez définir là de nouvelles balises (utilisant les règles txt2tags) pour des comportements spécifiques.

- L'outil `pheditor.php` à la racine du site permet d'éditer tous les fichiers de configuration nécessaires. Vous pouvez le retirer ou le renommer depuis son interface. Le mot de passe est le même que celui définit lors de l'installation.

#### Support multi-utilisateurs

Il y a un seul mot de passe pour éditer ce wiki (dans le fichier config.php), et un autre pour l'administration. C'est le même qui a a été créé lors de l'installation par YunoHost.

Vous pouvez passer le wiki en mode privé ou public, selon vos usages.

## Informations additionnelles

Vous devez définir une couleur de base durant l'installation, au format hexadécimal. Vous pouvez la choisir en utilisant cet outil en ligne : https://www.w3schools.com/colors/colors_picker.asp

La couleur choisie va modifier le fichier `templates/minimaxing/minimaxing.less` et le compiler en utilisant la commande lessc (du paquet node-less).

Après l'installation, vous pouvez éditer la couleur de base dans le fichier `/var/www/lionwikit2t/templates/minimaxing/minimaxing.less` 

Recherchez pour :

```
/* For YunoHost config */
@MainColor: #D17732;
```

Allez dans le dossier d'installation (à adapter à votre cas, si c'est la seconde instance installée, cela sera nommé `/var/www/lionwikit2t__2/`) :

```
cd /var/www/lionwikit2t
```

Ensuite compilez le fichier avec :

```
lessc templates/minimaxing/minimaxing.less > templates/minimaxing/minimaxing.css
```

Si quelque chose se passe mal, vous pouvez revenir au fichier original :

```
cp templates/minimaxing/minimaxing_org.css templates/minimaxing/minimaxing.css
```

