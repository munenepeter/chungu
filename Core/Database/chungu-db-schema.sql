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
  `status` varchar(300),
  `image` varchar(300),
  `category_id` varchar(300),
  `created_at` datetime,
  `updated_at` datetime
);


DROP TABLE `products`;