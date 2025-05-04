# Basic E-Commerce Website

This project is a basic e-commerce website using HTML, CSS, JavaScript for the frontend, and PHP with MySQL (phpMyAdmin) for the backend. It features user authentication and basic product listings, allowing users to browse products and log in securely.

---

## Features
- **Frontend**: Product catalog with responsive design.
- **Backend**: User registration/login and admin panel for managing products.
- **Database**: Stores user details and product information.

---

## Installation
1. Import the provided SQL file into phpMyAdmin to set up the database.
2. Update `db_config.php` with your database credentials.
3. Place files in the server's root directory and access via `http://localhost/{project-folder}`.

---

## File Structure
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <div class="project-root">
        <h1>Project Root</h1>
        <ul>
            <li><a href="index.html">index.html</a> - Homepage displaying the product catalog</li>
            <li><a href="style.css">style.css</a> - CSS for styling the frontend</li>
            <li><a href="app.js">app.js</a> - JavaScript for frontend interactivity</li>
            <li><a href="login.html">login.html</a> - Login page for user authentication</li>
            <li><a href="db_config.php">db_config.php</a> - Database connection configuration file</li>
            <li>
                <a href="#">admin/</a> - (Optional) Admin functionality folder
                <ul>
                    <li><a href="admin/add_product.php">add_product.php</a> - Page to add products</li>
                    <li><a href="admin/edit_product.php">edit_product.php</a> - Page to edit existing products</li>
                    <li><a href="admin/delete_product.php">delete_product.php</a> - Page to delete products</li>
                </ul>
            </li>
            <li>
                <a href="#">assets/</a> - Directory for images, icons, or other media
                <ul>
                    <li><a href="assets/images/">images/</a> - Product images or site graphics</li>
                       </ul>
            </li>
        </ul>
    </div>
</body>
</html>

---

## Future Enhancements
- Add payment integration.
- Implement order management.
- Enhance security and usability.

---

## Technologies Used
- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP, MySQL
- **Server**: XAMPP/WAMP

---

