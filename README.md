# Anandaloke Hospital Project

This is a custom PHP website for Anandaloke Hospital with a built-in admin backend system. It uses MySQL as the database.

## Prerequisites

To run this project locally, you will need:
1. **PHP** (v7.4 or later is recommended, with the `mysqli` extension enabled)
2. **MySQL / MariaDB** database server
3. **Web Server** (such as Apache or Nginx)

> [!TIP]
> The easiest way to get all prerequisites is to install a local stack like **XAMPP**, **WAMP**, or **Laragon** (Windows) / **MAMP** (macOS).

---

## Step-by-Step Setup Guide

### 1. Copy Project Files to the Web Server Root
Move or copy the project folder to your local web server's document directory:
- **XAMPP**: `C:\xampp\htdocs\anandaloke`
- **WAMP**: `C:\wamp64\www\anandaloke`
- **Laragon**: `C:\laragon\www\anandaloke`

### 2. Set Up the MySQL Database
1. Open your database administration tool (e.g., **phpMyAdmin** at `http://localhost/phpmyadmin` or any SQL client like DBeaver/HeidiSQL).
2. Create a new database named `anandaloke_datas` (or a name of your choice).
3. Import the SQL dump file located in this project:
   - `backup-2.15.2025_15-12-43_anandaloke/mysql/anandaloke_datas.sql`
   - *Note:* Alternatively, you can use the command line:
     ```bash
     mysql -u your_username -p anandaloke_datas < backup-2.15.2025_15-12-43_anandaloke/mysql/anandaloke_datas.sql
     ```

### 3. Configure Database Connection
Update the database credentials in the configuration file to match your local database settings:
- Open `backend/include/db-config.php`
- Modify the following variables:
  ```php
  $server = "localhost";
  $db = "anandaloke_datas"; // Name of your local database
  $user = "root";           // Your local database username (e.g. root)
  $pass = "";               // Your local database password (empty by default on XAMPP)
  ```

### 4. Start the Web Server
1. Start your Apache (or Nginx) and MySQL services from your local development stack control panel (e.g. XAMPP Control Panel).
2. Open your browser and navigate to:
   - **Frontend Site**: `http://localhost/anandaloke/index.php`
   - **Admin Backend**: `http://localhost/anandaloke/backend/index.php`

---

## Key Project Locations

- **Frontend Pages**: Root directory containing `index.php`, `career.php`, `doctors.php`, etc.
- **Admin Panel**: Inside the `backend` folder.
- **Database Connection Config**: `backend/include/db-config.php`
- **Database Backup Dump**: `backup-2.15.2025_15-12-43_anandaloke/mysql/anandaloke_datas.sql`
