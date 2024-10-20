Application Overview
This is a simple CRUD application for managing chess players and calculating their Elo ratings.

Features:
Player Management:

Add new players with their names and Elo ratings.
Edit player details (name and Elo rating).
Delete players.
Elo Calculation:

Input game results, number of games, average opponent Elo rating, and development coefficient (K).
The application calculates and updates the player's new Elo rating based on the provided inputs.
Database:

The application connects to a MySQL database, where player data and Elo ratings are stored.
Security:

Sensitive information, such as database credentials, is stored in a .env file, ensuring that these details are not exposed in the code or on GitHub.
Installation:

Clone the repository.
Run composer install to install dependencies.
Create your own .env file based on the .env.example file.
Import the database structure using the provided database.php file.