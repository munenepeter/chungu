CREATE TABLE `users` (
  `id` INTEGER PRIMARY KEY AUTOINCREMENT,
  `username` varchar(255),
  `email` varchar(255),
  `password` varchar(255),
  `role` varchar(255),
  `created_at` datetime,
  `updated_at` datetime
);
--@block
INSERT INTO `users` (
    `username`,
    `email`,
    `password`,
    `role`,
    `created_at`,
    `updated_at`
  )
VALUES(
    'admin',
    'admin@chungu.co.ke',
    '81dc9bdb52d04dc20036dbd8313ed055',
    'admin',
    '2022-03-24 09:33:40',
    '2022-03-24 09:33:40'
  ),
  (
    'maeve',
    'maeve@chungu.co.ke',
    '81dc9bdb52d04dc20036dbd8313ed055',
    'user',
    '2022-03-24 09:33:40',
    '2022-03-24 09:33:40'
  ),
  (
    'peter',
    'peter@chungu.co.ke',
    '81dc9bdb52d04dc20036dbd8313ed055',
    'user',
    '2022-03-24 09:33:40',
    '2022-03-24 09:33:40'
  ),
  (
    'Test',
    'test@chungu.co.ke',
    '81dc9bdb52d04dc20036dbd8313ed055',
    'user',
    '2022-03-24 09:33:40',
    '2022-03-24 09:33:40'
  );
DROP TABLE `users`;
CREATE TABLE `products` (
  `id` varchar(300) PRIMARY KEY,
  `name` varchar(300),
  `color` varchar(40),
  `price` varchar(300),
  `quantity` varchar(300),
  `status` varchar(100) DEFAULT "Available" NOT NULL,
  `image` varchar(300),
  `category_id` varchar(300),
  `created_at` datetime,
  `updated_at` datetime
);
DROP TABLE `products`;

DELETE FROM `products` WHERE `category_id` IS NULL;


UPDATE `products`
SET `color` = 'silver'
WHERE
`color` = 'Silver';


CREATE TABLE `categories` (
  `id` varchar(300) PRIMARY KEY NOT NULL,
  `name` varchar(300) NOT NULL,
  `image` varchar(300) NOT NULL,
  `created_at` datetime,
  `updated_at` datetime
);
DROP TABLE  `categories`;

--
  INSERT INTO `categories` (`id`, `name`,  `image`, `created_at`, `updated_at`) VALUES
('cat-5ece4797eaf5e', 'earrings',  '/static/imgs/categories\\earring.svg', '2022-06-29 10:16:47.000000', '2022-06-29 11:10:47.000000'),
('cat-62962f89b29b3', 'rings',  '/static/imgs/categories\\ring.svg', '2022-06-11 10:16:47.000000', '2022-06-01 10:26:47.000000'),
('cat-62962f98473f6', 'anklets',  '/static/imgs/categories\\anklet.svg', '2022-06-22 10:16:47.000000', '2022-06-27 10:16:47.000000'),
('cat-62962fb1d0ca6', 'bracelets',  '/static/imgs/categories\\bracelet.svg', '2022-06-29 10:16:47.000000', '2022-06-24 10:16:47.000000'),
('cat-62962ffec3fe7', 'belts',  '/static/imgs/categories\\belt.svg', '2022-06-20 10:16:47.000000', '2022-06-16 10:26:47.000000'),
('cat-62ac4aec68b30', 'perfume',  '/static/imgs/categories\\perfume.svg', '2022-06-13 10:16:47.000000', '2022-06-26 10:16:47.000000'),
('cat-629785244dce4', 'necklaces',  '/static/imgs/categories\\necklace.svg', '2022-06-23 10:16:47.000000', '2022-06-23 10:16:47.000000');


CREATE TABLE `sources` (
  `id` INTEGER PRIMARY KEY AUTOINCREMENT,
  `name` varchar(255),
  `email` varchar(255),
  `location` varchar(255),
  `link` varchar(255),
  `created_at` datetime,
  `updated_at` datetime
);