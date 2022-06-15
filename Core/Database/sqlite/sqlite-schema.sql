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

CREATE TABLE `categories` (
  `id` varchar(300) PRIMARY KEY NOT NULL,
  `name` varchar(300) NOT NULL,
  `slug` varchar(300) NOT NULL,
  `image` varchar(300) NOT NULL,
  `created_at` datetime,
  `updated_at` datetime
);
DROP TABLE  `categories`;

  INSERT INTO `categories` (`id`, `name`, `slug`, `image`, `created_at`, `updated_at`) VALUES
('cat-5ece4797eaf5e', 'earrings', 'earrings', '/static/imgs/categories\\earrings.jpeg', '2022-05-31 10:16:47.000000', '2022-05-31 10:16:47.000000'),
('cat-62962f89b29b3', 'rings', 'rings', '/static/imgs/categories\\rings.jpeg', '2022-06-01 10:16:47.000000', '2022-06-01 10:16:47.000000'),
('cat-62962f98473f6', 'anklets', 'anklets', '/static/imgs/categories\\anklets.jpeg', '2022-06-02 10:16:47.000000', '2022-06-10 10:16:47.000000'),
('cat-62962fb1d0ca6', 'bracelets', 'bracelets', '/static/imgs/categories\\bracelets.jpeg', '2022-06-03 10:16:47.000000', '2022-06-03 10:16:47.000000'),
('cat-62962ffec3fe7', 'belts', 'belts', '/static/imgs/categories\\belts.jpeg', '2022-06-03 10:16:47.000000', '2022-06-12 10:16:47.000000'),
('cat-629785244dce4', 'necklaces', 'necklaces', '/static/imgs/categories\\necklaces.jpeg', '2022-06-03 10:16:47.000000', '2022-06-13 10:16:47.000000');