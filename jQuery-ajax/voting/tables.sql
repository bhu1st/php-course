CREATE TABLE messages(
mes_id INT PRIMARY KEY AUTO_INCREMENT,
msg TEXT,
up INT,
down INT);

CREATE TABLE Voting_IP(
ip_id INT PRIMARY KEY AUTO_INCREMENT,
mes_id_fk INT,
ip_add VARCHAR(40),
FOREIGN KEY(mes_id_fk)
REFERENCES messages(mes_id));