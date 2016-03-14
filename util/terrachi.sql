-- DROP SCHEMA IF EXISTS terrachi;

-- CREATE SCHEMA terrachi;

-- SET search_path = terrachi;

DROP TABLE IF EXISTS game_status;
DROP TABLE IF EXISTS authentication;

-- Table: terrachi.user_info
-- Columns:
--    league          	- The league for the account, supplied during registration.
--    registration_date - The date the user registered. Set automatically.
--    description       - A user-supplied description.
--    state 			- The game state. 0 = Team creation, 1 = Draft, 2 = Week-by-week play.
--    round   			- The draft round number (Only looked at if state = 1)
--    week   			- The week that the league is in.
CREATE TABLE game_status (
  serial_key      VARCHAR(20) PRIMARY KEY,
  game_owner      VARCHAR(100) NOT NULL,
  activated       BOOLEAN DEFAULT FALSE,
  activation_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  completed       BOOLEAN DEFAULT FALSE,
  completion_date TIMESTAMP,
  donated         BOOLEAN DEFAULT FALSE,
  donation_date   TIMESTAMP
);

CREATE INDEX game_onwer ON game_status(game_owner);

-- Table: terrachi.authentication
-- Columns:
--    league      - The league tied to the authentication info.
--    password_hash - The hash of the user's password + salt. Expected to be SHA1.
--    salt          - The salt to use. Expected to be a SHA1 hash of a random input.
CREATE TABLE authentication (
	email          VARCHAR(100) PRIMARY KEY NOT NULL,
	password_hash  VARCHAR(40) NOT NULL,
	salt 		   VARCHAR(40) NOT NULL
);

-- Table: terrachi.log
-- Columns:
--    log_id     - A unique ID for the log entry. Set by a sequence.
--    league   - The user whose action generated this log entry.
--    ip_address - The IP address of the user at the time the log was entered.
--    log_date   - The date of the log entry. Set automatically by a default value.
--    action     - What the user did to generate a log entry (i.e., "logged in").
-- CREATE TABLE terrachi.log (
-- log_id  	SERIAL PRIMARY KEY,
-- league 		VARCHAR(30) NOT NULL REFERENCES terrachi.user_info,
-- ip_address 	VARCHAR(15) NOT NULL,
-- log_date 	TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
-- action 		VARCHAR(50) NOT NULL
-- );
