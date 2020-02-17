# Melis Tool Creator Symfony
This module handle the Tool Creator configuration to activate Symfony option on
the selection in the Tool Creator.

### Prerequisites
You will need to install the following in order to have this module running:
* melisplatform/melis-tool-creator
* melisplatform/melis-platform-framework-symfony
* melisplatform/melis-platform-framework-symfony-tool-creator
* melisplatform/melis-platform-frameworks

### Installing
```
composer require melisplatform/melis-tool-creator-symfony
```

Enabling Symfony option on Tool creator
```
return [
    'tool-creator-third-party-frameworks' => [
        'symfony'
    ]
];

```

By just activating this module on the Melis Platform Back-office this will automatically added to the 
selection of Third party frameworks tool creation.

## Authors
* **Melis Technology** - [www.melistechnology.com](https://www.melistechnology.com/)

See also the list of [contributors](https://github.com/melisplatform/melis-core/contributors) who participated in this project.


## License
This project is licensed under the OSL-3.0 License - see the [LICENSE](LICENSE) file for details