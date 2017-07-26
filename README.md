# BoilerDrop

BackdropCMS project boilerplate

## File structure

```
.
├── README.md
├── .gitignore
├── config
│   ├── active (*ignored*)
│   ├── staging (*ignored*)
│   └── versioned (**versionned**)
├── docroot (Your website lives here)
└── scripts
    ├── config_export
    └── config_import
```

## Usage

Clone this repository and remove the `.git` folder.

Install BackdropCMS into the `docroot` folder (helper script to come, see
TODO.md).

## Configuration managment settings

Use the following configuration in your `settings.php` file.

```
$config_directories['active'] = '../config/active';
$config_directories['staging'] = '../config/staging';
```

Ressources:

- http://www.jenlampton.com/blog/managing-backdrop-cms-config-files-git
- https://github.com/backdrop/backdrop-issues/issues/855#issuecomment-91406032

## Configuration managment usage

### Export (development process)

```
$ ./scripts/config_export
```

It will export current configuration into the `config/versionned` folder. Use 
`git diff` to review changes.

### Import (in production)

```
$ ./scripts/config_import
```

It will import versioned configuration from the `config/versionned` folder.

Visit `yoursite.com/admin/config/development/configuration/full/import` to
update your production site.
