CREATE TABLE members(

    member_id INT AUTO_INCREMENT PRIMARY KEY,

    full_name VARCHAR(100),

    email VARCHAR(100),

    password VARCHAR(100)
);

CREATE TABLE prayer_requests(

    request_id INT AUTO_INCREMENT PRIMARY KEY,

    member_name VARCHAR(100),

    prayer_text TEXT
);

CREATE TABLE events(

    event_id INT AUTO_INCREMENT PRIMARY KEY,

    event_name VARCHAR(100),

    event_date DATE
);

INSERT INTO events(event_name, event_date)
VALUES

('Youth Service', '2026-05-15'),

('Sunday Worship', '2026-05-18'),

('Community Outreach', '2026-05-25');