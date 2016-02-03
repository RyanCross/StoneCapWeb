DROP SCHEMA IF EXISTS stonecapDB CASCADE;
CREATE SCHEMA stonecapDB; 
-- Table: stonecapDB.users
-- Columns:
--    username          - The username for the account, supplied during registration.
--    registration_date - The date the user registered. Set automatically.
--    password          - The password for the account, supplied during registration
--    email             - the users email for the account, supplied during registration.
CREATE TABLE stonecapDB.users (
	username 		VARCHAR(30) PRIMARY KEY,
	pw              VARCHAR(30),
    email           VARCHAR(70),
    registration_date 	TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO stonecapDB.users VALUES('test', 'pass', 'email@email.com');

