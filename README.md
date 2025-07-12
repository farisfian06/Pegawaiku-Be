# Pegawaiku - Employee and Division Management System

<p align="center">
<img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
</p>

## About Pegawaiku

Pegawaiku is a web-based application for managing employees and divisions within an organization. Built with modern technologies, it provides an efficient way to handle employee data and organizational structure.

## Tech Stack

- Laravel 11
- Laravel Breeze (Authentication)
- Laravel Sanctum (API Authentication)
- MySQL Database
- PHP 8.2+

## Features

- Employee Management
  - Create, Read, Update, Delete (CRUD) operations
  - Employee profile management
  
- Division Management
  - Read operation
  
- Authentication & Authorization
  - Secure login system
  - API authentication

## Installation Guide
Follow these steps to install and run the application in your local development environment:

1. Clone the latest version of the repository
2. Run `composer install` to install required PHP dependencies
3. Copy `.env.example` to `.env` and edit database credentials according to your database server
4. Run `php artisan key:generate` to generate a new application key
5. Run `php artisan migrate` to create database tables. You can add `--seed` flag to populate the database with dummy data
6. Run `php artisan serve` to start the development server

### Prerequisites
- PHP 8.2 or higher
- Composer
- MySQL
- Node.js & NPM
