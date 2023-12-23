-- creating database
create UserDatabase;

-- Switch to the newly created database
USE UserDatabase;

-- Create a table to store user credentials (user ID, username, and hashed password)
CREATE TABLE UserCredentials (
    UserID INT AUTO_INCREMENT PRIMARY KEY,
    Username VARCHAR(50) UNIQUE NOT NULL,
    HashedPassword VARCHAR(255) NOT NULL -- Adjust the length as per the hashing algorithm used
);

-- Example of inserting a user into the UserCredentials table
INSERT INTO UserCredentials (Username, HashedPassword)
VALUES 
('mdwaqass.khan23@vit.edu', password'12311318')),
('yashashree.mehare23@vit.edu', password'12311168')),
('yash.mehenndale23@vit.edu', password'12311704')),
('deep.mehta23@vit.edu', password'12311271')),
('harsh.mehta23@vit.edu', password'12311238')),
('akshan.meshram23@vit.edu', password'12311382'));