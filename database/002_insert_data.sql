
START TRANSACTION;

INSERT INTO clie (username, email, password) VALUES
    ('admin', 'admin@email', '1111');

INSERT INTO trac (trac_name, img_fname, nation) VALUES
    ('SPA' 'spa.jpg', 'Belgium'),
    ('Monza', 'monza.jpg', 'Italy'),
    ('Silverstone', 'silverstone.jpg', 'Great Britain'),
    ('Shangai', 'shangai.jpg', 'China'),
    ('Las Vegas', 'las_vegas.jpg', 'United States'),
    ('Monte Carlo', 'monte_carlo.jpg', 'Monaco');

INSERT INTO cham (champ_name, champ_start_date, champ_end_date) VALUES
    ('Campionato 2021', '2021-03-28', '2021-12-12'),
    ('Campionato 2022', '2022-04-01', '2022-11-29'),
    ('Campionato 2023', '2023-03-24', '2023-12-27'),
    ('Campionato 2024', '2024-03-28', '2024-12-11'),
    ('Campionato 2025', '2025-02-28', '2025-11-10'),
    ('Campionato 2026', '2025-03-08', '2025-12-13')