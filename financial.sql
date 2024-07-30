-- File: create_admin_files_db.sql

-- Drop tables if they exist to avoid conflicts during creation
DROP TABLE IF EXISTS admin_files;
DROP TABLE IF EXISTS files;
DROP TABLE IF EXISTS admins;

-- Create ⁠ admins ⁠ table
CREATE TABLE admins (
    admin_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    admin_type ENUM('standard', 'super') NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Create ⁠ files ⁠ table
CREATE TABLE files (
    file_id INT AUTO_INCREMENT PRIMARY KEY,
    admin_id INT NOT NULL,
    file_name VARCHAR(255) NOT NULL,
    file_path VARCHAR(255) NOT NULL,
    uploaded_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (admin_id) REFERENCES admins(admin_id)
        ON DELETE CASCADE -- Delete files if the corresponding admin is deleted
);

-- Create ⁠ admin_files ⁠ table
CREATE TABLE admin_files (
    admin_id INT NOT NULL,
    file_id INT NOT NULL,
    access_level ENUM('view', 'edit') NOT NULL,
    PRIMARY KEY (admin_id, file_id),
    FOREIGN KEY (admin_id) REFERENCES admins(admin_id)
        ON DELETE CASCADE,
    FOREIGN KEY (file_id) REFERENCES files(file_id)
        ON DELETE CASCADE
);