## Configuration

In the root folder of this app, there are two files: `config.php` and `config.t2t`

- `config.php` is for changing password, the template used, default page. You can also define an administrator password which has some more rights (it's possible to lock some pages and modify them only with the administrator password, add some IP address to a blacklist)

- `config.t2t` is for tweaking your wiki syntax. You can define more tags (using the txt2tags rules) for specific behaviors.

The `pheditor.php` tool at the root of the site allows you to edit all the necessary configuration files. You can remove or rename it from its interface. The password is the same as the one defined during installation.

#### Multi-users support

This is only a single password for editing the wiki (it's not multi-user), and one other password for administration. Both are set to the same one defined in the lionwiki-t2t during the installation by YunoHost.

You can set the wiki to private (only readable when you are connected to YunoHost SSO) or public (readable by the whole internet).

You can install multiple instance of this app.

## Additional information

You must define a base color during the installation (in hexadecimal format). You can choose it using this online tool for example: https://www.w3schools.com/colors/colors_picker.asp

It will modify the `templates/minimaxing/minimaxing.less` file and compile it using the lessc command (from the node-less package).

After the installation, you can edit the base color found in `/var/www/lionwikit2t/templates/minimaxing/minimaxing.less` file.

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

