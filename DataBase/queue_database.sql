CREATE TABLE `admin` (
    `username` varchar(10),
    `password` varchar(25)
);

INSERT INTO admin (username, password)
VALUES (`admin`, `pass123`);

CREATE TABLE `user_table` (
    `id` int AUTO_INCREMENT PRIMARY KEY,
    `id_num` varchar(10),
    `password` varchar(255),
    `fullname` varchar(300),
    `office` varchar(300),
    `windows` int(1),
    `campus` varchar(300),
    `created_on` datetime,
    `updated_on` datetime
);

CREATE TABLE `transaction_table` (
    `id` int AUTO_INCREMENT PRIMARY KEY,
    `client_type` varchar(255),
    `id_num` varchar(10),
    `fullname` varchar(300),
    `mobile_num` varchar(20),
    `email` varchar(255),
    `transaction_department` varchar(255),
    `transaction_id` int,
    `transaction_window` int,
    `served_by` varchar(25),
    `status` int,
    `created_on` datetime,
    `updated_on` datetime
);

CREATE TABLE `transaction_type` (
    `id` int AUTO_INCREMENT PRIMARY KEY,
    `department` varchar(255),
    `created_on` datetime,
    `updated_on` datetime
);

INSERT INTO transaction_type(id, department)
VALUES (`1`,`Registrar`);
VALUES (`2`,`Accounting`);
VALUES (`3`,`Cashier`);
VALUES (`4`,`EDP`);

CREATE TABLE `transaction_list` (
    `id` int AUTO_INCREMENT PRIMARY KEY,
    `transaction_num` int,
    `transaction` varchar(255),
    `created_on` datetime,
    `updated_on` datetime
);

INSERT INTO transaction_list(id, transaction_num, transaction)
VALUES (`1`, `1`, `1`);
VALUES (`2`, `1`, `2`);
VALUES (`3`, `1`, `3`);
VALUES (`4`, `1`, `4`);
VALUES (`5`, `1`, `5`);
VALUES (`6`, `2`, `Balance`);
VALUES (`7`, `2`, `Clearance`);
VALUES (`8`, `2`, `---`);
VALUES (`9`, `3`, `Clearance`);
VALUES (`10`, `3`, `Enrollent`);
VALUES (`11`, `3`, `---`);
VALUES (`12`, `4`, `Enrollent`);
VALUES (`13`, `4`, `ID`);
VALUES (`14`, `4`, `---`);