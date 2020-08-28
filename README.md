# Laravel Mise à Niveau


## Installation nécessaire pour le cours :

**Vous devez tous avoir `git` sur vos machines pour pouvoir clone le repo qui servira de base pour le cours.**

### Pour ceux sous Linux :

Vous pouvez utiliser directement le docker-compose fourni dans le repo.

Pour lancer le projet :

```bash
docker-compose up -d
```

Pour accéder au container php (pour lancer certaines commandes)

```bash
docker-compose exec php ma_commande
```

L'application devrait apparaître sur [localhost:8080](http://localhost:8080)

### Pour ceux sous Mac :

Vous pouvez soit utiliser le docker-compose fourni (docker est très mal optimisé sous Mac) ou sinon vous pouvez utiliser Valet (qui demande un peu plus de lecture de documentation mais qui marche beaucoup mieux)

[Documentation Valet](https://laravel.com/docs/7.x/valet#introduction)


#### Installation de Valet :

**Homebrew doit être installé sur votre machine**

Ensuite vous pouvez installer php & mysql :

```bash
brew update
brew install php
brew install mysql
```

Ensuite nous avons besoin de composer, suivez l'installation sur le site de [composer](https://getcomposer.org/)


Si tout va bien jusqu'ici, vous pouvez lancer la commande :
```bash
composer global require laravel/valet
```

Ensuite vous devez register valet dans votre système :
```bash
~/.composer/vendor/bin/valet install
```

Faites attention que rien ne tourne sur le port 80 (Skype, docker etc)

Si la commande ne marche pas, [RTFM](https://laravel.com/docs/7.x/valet)

Enfin, vous pouvez retourner à la racine du repo et utiliser Valet pour lancer votre projet :

```bash
valet start
valet link
```

L'url de votre site est ```laravel-man.test```

**Attention** : valet gère que le serveur php/nginx, pour la base de donnée, vous devez lancer le service manuellement :

```bash
brew services start mysql
```


### Pour ceux sur Windows :

Pour ceux qui persistent à utiliser windows vous pouvez télécharger Laragon :

[Télécharger Laragon](https://sourceforge.net/projects/laragon/files/releases/4.0/laragon-full.exe)

[Documentation de Laragon](https://laragon.org/docs/install.html)
