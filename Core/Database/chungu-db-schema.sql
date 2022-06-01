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
INSERT INTO users (
    username,
    email,
    password,
    role,
    created_at,
    updated_at
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
  );
CREATE TABLE `products` (
  `id` varchar(300) PRIMARY KEY,
  `name` varchar(300),
  `price` varchar(300),
  `quantity` varchar(300),
  `status` varchar(100) DEFAULT "Available" NOT NULL,
  `image` varchar(300),
  `category_id` varchar(300),
  `created_at` datetime,
  `updated_at` datetime
);
DROP TABLE `products`;
CREATE TABLE `categories` (
  `id` varchar(300) PRIMARY KEY,
  `name` varchar(300),
  `image` varchar(300),
  `created_at` datetime,
  `updated_at` datetime
);
INSERT INTO `categories` (`id`, `name`, `image`, `updated_at`, `created_at`)
VALUES (
    "cat-5ece4797eaf5e",
    "earrings",
    "/static/imgs/earrings\\6295eb0fa03121653992207.jpeg",
    "2022-05-31 13:16:47",
    "2022-05-31 13:16:47"
  );
INSERT INTO `categories` (`id`, `name`, `image`, `updated_at`, `created_at`)
VALUES (
    'cat-62962f89b29b3',
    'rings',
    '/static/imgs/earrings\\6295eb0fa03121653992207.jpeg',
    '2022-06-01 13:16:47',
    '2022-06-01 13:16:47'
  );
INSERT INTO `categories` (`id`, `name`, `image`, `updated_at`, `created_at`)
VALUES (
    'cat-62962f98473f6',
    'anklets',
    '/static/imgs/earrings\\6295eb0fa03121653992207.jpeg',
    '2022-06-02 13:16:47',
    '2022-06-02 13:16:47'
  );
INSERT INTO `categories` (`id`, `name`, `image`, `updated_at`, `created_at`)
VALUES (
    'cat-62962fb1d0ca6',
    'bracelets',
    '/static/imgs/earrings\\6295eb0fa03121653992207.jpeg',
    '2022-06-03 13:16:47',
    '2022-06-03 13:16:47'
  );
INSERT INTO `categories` (`id`, `name`, `image`, `updated_at`, `created_at`)
VALUES (
    'cat-62962ffec3fe7',
    'belts',
    '/static/imgs/earrings\\6295eb0fa03121653992207.jpeg',
    '2022-06-03 13:16:47',
    '2022-06-03 13:16:47'
  );