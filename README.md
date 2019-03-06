# BoilerDrop

BackdropCMS project boilerplate.

**/!\\** This is a work in progress. Always backup your stuff before testing new tools. Contributions are welcome. **/!\\**

## File structure

```
.
├── README.md
├── .gitignore
├── config
│   ├── active (*ignored*)
│   ├── staging (*ignored*)
│   └── versioned (**versioned**)
├── docroot (Your website lives here)
    └── drush/yourproject.aliases.drushrc.php
└── scripts
    ├── create_project
    ├── fix_permissions
    ├── config_export
    ├── config_import
    ├── update_local_from_dev
    └── update_local_from_prod
```

## Usage

Clone this repository:
```bash
git clone https://github.com/opi/boilerdrop
```

Use the `create_project` script to automatically download sources, translations and create local settings and drush aliases files.    
Usage:
```bash
./scripts/create_project <project_name> <language>
```

Use [lando](https://docs.devwithlando.io/) for a quick development server. A `.lando.yml` file is already configured for you.
Usage:
```bash
lando start
```

## Configuration managment settings

Use the following configuration in your `settings.php` file.

```php
$config_directories['active'] = '../config/active';
$config_directories['staging'] = '../config/staging';
```

Ressources:

- http://www.jenlampton.com/blog/managing-backdrop-cms-config-files-git
- https://github.com/backdrop/backdrop-issues/issues/855#issuecomment-91406032

## Configuration managment usage

### Export (development process)

```bash
./scripts/config_export
```

It will export current configuration into the `config/versioned` folder. Use
`git diff` to review changes.

### Import (in production)

```bash
./scripts/config_import
```

It will import versioned configuration from the `config/versioned` folder.

Visit `yoursite.com/admin/config/development/configuration/full/import` to
update your production site.

## Update local project with production data & settings

```bash
./scripts/update_local_from_prod
```

It will update the database, rsync the files and configuration.

## Todo

See [TODO.md](TODO.md).
