## Configuration

Dans le dossier racine de l'application il y a 2 fichiers, `config.php` et `config.t2t`

- config.php permet de modifier le mot de passe, le choix du template utilis� et la page par d�faut. Vous pouvez �galement d�finir ici un mot de passe administrateur (pour bloquer certaines pages en �dition)

- `config.t2t` est pour customiser votre syntaxe wiki. Vous pouvez d�finir l� de nouvelles balises (utilisant les r�gles txt2tags) pour des comportements sp�cifiques.

- L'outil `pheditor.php` � la racine du site permet d'�diter tous les fichiers de configuration n�cessaires. Vous pouvez le retirer ou le renommer depuis son interface. Le mot de passe est le m�me que celui d�finit lors de l'installation.

#### Support multi-utilisateurs

Il y a un seul mot de passe pour �diter ce wiki (dans le fichier config.php), et un autre pour l'administration. C'est le m�me qui a a �t� cr�� lors de l'installation par YunoHost.

Vous pouvez passer le wiki en mode priv� ou public, selon vos usages.

## Informations additionnelles

Vous devez d�finir une couleur de base durant l'installation, au format hexad�cimal. Vous pouvez la choisir en utilisant cet outil en ligne : https://www.w3schools.com/colors/colors_picker.asp

La couleur choisie va modifier le fichier `templates/minimaxing/minimaxing.less` et le compiler en utilisant la commande lessc (du paquet node-less).

Apr�s l'installation, vous pouvez �diter la couleur de base dans le fichier `/var/www/lionwikit2t/templates/minimaxing/minimaxing.less` 

Recherchez pour :

```
/* For YunoHost config */
@MainColor: #D17732;
```

Allez dans le dossier d'installation (� adapter � votre cas, si c'est la seconde instance install�e, cela sera nomm� `/var/www/lionwikit2t__2/`) :

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

