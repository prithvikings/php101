<<<<<<< HEAD
# Open-Voting-System
=======
# Open Voting System

A web-based voting system built with PHP and MySQL, allowing users to vote for their preferred groups, track voting status, and update vote counts. This system includes secure login and user session management.

## Features
- User login and session management.
- Users can vote for a group.
- Tracks the voting status (voted or not).
- Vote count is updated in real-time.
- Responsive and user-friendly UI built with Tailwind CSS.
- Admin and user roles with different access levels.

## Technologies Used
- **Frontend:** HTML, CSS (Tailwind CSS)
- **Backend:** PHP
- **Database:** MySQL
- **Server:** Apache (XAMPP)

## Requirements
- PHP 7.4 or higher
- MySQL (or MariaDB)
- Apache server (XAMPP recommended)
- Composer (if using dependencies)

## Installation

### Step 1: Clone the Repository
```bash
git clone https://github.com/yourusername/voting-system.git
cd voting-system
```
### Step 2: Set Up XAMPP
1. Download and install XAMPP.
2. Start Apache and MySQL from the XAMPP control panel.

### Step 3: Configure the Database
1. Open phpMyAdmin and create a new database called `voting_system`.
2. Import the `voting_system.sql` file (if available) into the newly created database.

### Step 4: Update Database Credentials
Open `connect.php` and set the correct MySQL credentials:

```php
$servername = "localhost";
$username = "root";
$password = ""; // Set your MySQL password if needed
$dbname = "voting_system";
```

### Step 5:
Access the project via http://localhost/voting-system in your browser. Log in to the system and start voting!

## Contributing
Feel free to fork the project, submit issues, and contribute to the code! Please ensure that any pull requests adhere to the existing coding style.

## License
This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

![Screenshot 2025-01-25 183528](https://github.com/user-attachments/assets/bfbd67de-c4d2-4948-a777-3597ff786319)

![Screenshot 2025-01-25 183357](https://github.com/user-attachments/assets/231bab6b-9619-457d-81d3-9f6d29e750f1)


>>>>>>> 8aaa40e59809e9840d9b11b909a9ac9d1f5e067a
