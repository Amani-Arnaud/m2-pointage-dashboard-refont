# 📌 Tableau de bord Pointage

## 📖 Description
refont du **TP Master I** de l'application tableau de bord de pointage en A.G.L.
Ce projet est une application web développée avec le framework **Laravel**.  

---

## ⚙️ Prérequis

Avant de commencer, assure-toi d’avoir installé sur ta machine :

- **PHP** (>= 8.2 recommandé)
- **Composer**
- **Laravel** 12.0
- **MySQL**
- **Git**

---

## 🚀 Installation

Suivre les étapes ci-dessous pour installer et lancer le projet localement.

### 1️⃣ Cloner le projet
```bash
git clone https://github.com/Amani-Arnaud/m2-pointage-dashboard-refont.git
```

### 2️⃣ Accéder au répertoire du projet
```bash
cd m2-pointage-dashboard-refont
```

### 3️⃣ Copier et renommer le fichier d’environnement
```bash
cp .env.example .env
```

### 4️⃣ Installer les dépendances avec Composer
```bash
composer install
```

### 5️⃣ Générer la clé de l’application
 ```bash
php artisan key:generate
```

### 6️⃣ Migrer la base de données
```bash
php artisan migrate
```

### 7️⃣ Lancer le serveur
```bash
php artisan serve
```


### Fin
Thank you 🙏🏾