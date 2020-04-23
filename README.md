

# Lionwiki-t2t for YunoHost



*[Lire ce readme en français.](./README_fr.md)*

> *This package allow you to install Lionwiki-t2t quickly and simply on a YunoHost server.  
If you don't have YunoHost, please see [here](https://yunohost.org/#/install) to know how to install and enjoy it.*

## Overview

LionWiki is a minimalist Wiki engine programmed in PHP. It is extensible, templatable, file based (it doesn't need database like MySQL) and requires just one file to function (30 kb). It is suitable for small websites, personal notebooks or journals. This version is using the lightweight markup language TXT2TAGS.


## Screenshot

![](screenshot_lionwikit2t.png)


## Configuration

In the root folder of this app, there are two files: config.php and config.t2t for changing password and general behavior. 

## Documentation

 * Official documentation: https://github.com/farvardin/lionwiki-t2t
 * More about txt2tags: https://github.com/farvardin/whatistxt2tags
 

## YunoHost specific features

#### Multi-users support

This is only a single password for editing the wiki (it's not multi-user), and one other password for administration. Both are set to the same one defined in the lionwiki-t2t during the installation by YunoHost.

You can set the wiki to private (only readable when you are connected to YunoHost SSO) or public (readable by the whole internet).

You can install multiple instance of this app.


#### Supported architectures

* All. It's only using PHP.


## Limitations

* No different user accounts. Configuration only by ssh.


## Additional information

You must define a base color during the installation (in hexadecimal format). You can choose it using this online tool for example: https://www.w3schools.com/colors/colors_picker.asp


It will modify the templates/minimaxing/minimaxing.less file and compile it using the lessc command (from the node-less package).

After the installation, you can edit the base color found in /var/www/lionwikit2t/templates/minimaxing/minimaxing.less file.

Search for:

```
/* For YunoHost config */
@MainColor: #D17732;
```

Go inside your installation folder (adapt it to your case, if it's the second instance you've installed, it will be named /var/www/lionwikit2t__2/):

```
cd /var/www/lionwikit2t
```


Then compile it with:

```
lessc templates/minimaxing/minimaxing.less > templates/minimaxing/minimaxing.css
```

If something goes wrong, you can go back to the original default file:

```
cp templates/minimaxing/minimaxing_org.css templates/minimaxing/minimaxing.css
```


## License
MIT license


## Links

 * Report a bug: https://github.com/farvardin/lionwiki-t2t_ynh/issues
 * App website: https://github.com/farvardin/lionwiki-t2t
 * YunoHost website: https://yunohost.org/

