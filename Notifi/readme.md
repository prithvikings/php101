# Notifi - Your Smart Reminder

Notifi is a smart reminder application designed to help you stay organized and on track. Built with a modern web stack, Notifi offers user authentication, task management, reminders, and even AI-powered guidance to streamline your productivity.

## Features

* **User Authentication:** Secure login and logout functionality to protect your data.
* **Task Management:**
    * Create new tasks with descriptions and due dates.
    * Edit existing tasks to update details.
    * Delete tasks that are no longer needed.
* **Reminders:** Set custom reminders for your tasks to ensure you never miss a deadline.
* **AI-Powered Path Creation:** Leverage artificial intelligence to get a clear, step-by-step path on how to approach your tasks.
* **Newsletter Subscription:** Users can subscribe to receive updates and helpful tips via email, powered by PHP Mailer.

## Technologies Used

* **Frontend:**
    * HTML: For structuring the web pages.
    * JavaScript: For dynamic user interactions and functionality.
    * Tailwind CSS: A utility-first CSS framework for rapid UI development.
* **Backend:**
    * PHP: Server-side scripting language for handling logic and database interactions.
* **Database:**
    * MySQL (implied): Used to store application data in a database named `notifi`.
* **Email:**
    * PHP Mailer: A library for sending emails, used for the newsletter feature.

## Database Schema

The application utilizes a single database named `notifi` with the following tables:

1.  **`user_register`:** Stores user registration information.
    * `user_id` (INT, PRIMARY KEY, AUTO_INCREMENT)
    * `username` (VARCHAR)
    * `email` (VARCHAR, UNIQUE)
    * `password` (VARCHAR)
    * `registration_date` (TIMESTAMP)
    * ... (other relevant user registration fields)

2.  **`user_details`:** Stores additional details about registered users.
    * `detail_id` (INT, PRIMARY KEY, AUTO_INCREMENT)
    * `user_id` (INT, FOREIGN KEY referencing `user_register.user_id`)
    * `first_name` (VARCHAR)
    * `last_name` (VARCHAR)
    * ... (other user-specific details)

3.  **`user_task`:** Stores the tasks created by users.
    * `task_id` (INT, PRIMARY KEY, AUTO_INCREMENT)
    * `user_id` (INT, FOREIGN KEY referencing `user_register.user_id`)
    * `task_title` (VARCHAR)
    * `task_description` (TEXT)
    * `due_date` (DATE)
    * `reminder_time` (DATETIME)
    * `created_at` (TIMESTAMP)
    * `updated_at` (TIMESTAMP)
    * ... (other task-related fields)

## Installation

1.  **Clone the repository:**
    ```bash
    git clone <https://github.com/prithvikings/Notifi.git>
    cd notifi
    ```

2.  **Set up the database:**
    * Create a new database named `notifi` in your MySQL server.
    * Import the provided SQL schema (if available) or create the tables manually based on the schema described above.
    * Update the database connection details in your PHP configuration files (e.g., `config.php` or similar).

3.  **Configure PHP Mailer:**
    * Ensure you have PHP Mailer installed (you might need to install it via Composer if it's not included).
    * Configure the SMTP settings or other mail transport options in your PHP files responsible for sending the newsletter.

4.  **Set up the web server:**
    * Ensure your web server (e.g., Apache, Nginx) is configured to serve the PHP files.
    * Make sure PHP is enabled for your web server.

5.  **Access the application:**
    * Open your web browser and navigate to the URL where you have hosted the Notifi application.

## Contributing

Contributions to Notifi are welcome! If you have ideas for improvements, bug fixes, or new features, please feel free to submit a pull request.

1.  Fork the repository.
2.  Create a new branch for your feature or fix.
3.  Make your changes and commit them.
4.  Push your branch to your forked repository.
5.  Submit a pull request to the main repository.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Acknowledgements

* [Tailwind CSS](https://tailwindcss.com/) for the excellent CSS framework.
* [PHP Mailer](https://github.com/PHPMailer/PHPMailer) for the reliable email sending capabilities.
* Any other libraries or resources you have utilized.

## Contact

If you have any questions or suggestions, feel free to reach out.