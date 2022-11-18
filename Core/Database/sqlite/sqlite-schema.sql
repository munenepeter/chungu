CREATE TABLE `users` (
  `id` varchar(300) PRIMARY KEY,
  `username` varchar(255),
  `email` varchar(255),
  `password` varchar(255),
  `role` varchar(255),
    `birthday` datetime NULL,
 `first_name` varchar(255) NULL,
  `last_name` varchar(255) NULL,
  `phone_no` varchar(255) NULL,
 `address` varchar(255) NULL,
  `gender` varchar(255) NULL,
  `created_at` datetime,
  `updated_at` datetime
);



ALTER TABLE `users`


DELETE FROM `users` WHERE `id` IS NULL;
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

  INSERT INTO `categories` (`id`, `name`,  `image`, `created_at`, `updated_at`) VALUES
('cat-5ece4797eaf5e', 'earrings',  '/static/imgs/categories\\earring.svg', '2022-06-29 10:16:47.000000', '2022-06-29 11:10:47.000000'),
('cat-62962f89b29b3', 'rings',  '/static/imgs/categories\\ring.svg', '2022-06-11 10:16:47.000000', '2022-06-01 10:26:47.000000'),
('cat-62962f98473f6', 'anklets',  '/static/imgs/categories\\anklet.svg', '2022-06-22 10:16:47.000000', '2022-06-27 10:16:47.000000'),
('cat-62962fb1d0ca6', 'bracelets',  '/static/imgs/categories\\bracelet.svg', '2022-06-29 10:16:47.000000', '2022-06-24 10:16:47.000000'),
('cat-62962ffec3fe7', 'belts',  '/static/imgs/categories\\belt.svg', '2022-06-20 10:16:47.000000', '2022-06-16 10:26:47.000000'),
('cat-62ac4aec68b30', 'perfume',  '/static/imgs/categories\\perfume.svg', '2022-06-13 10:16:47.000000', '2022-06-26 10:16:47.000000'),
('cat-629785244dce4', 'necklaces',  '/static/imgs/categories\\necklace.svg', '2022-06-23 10:16:47.000000', '2022-06-23 10:16:47.000000');

DROP TABLE  `categories`;


CREATE TABLE `brands` (
  `id` varchar(300) PRIMARY KEY NOT NULL,
  `name` varchar(300) NOT NULL,
  `created_at` datetime,
  `updated_at` datetime
);


DROP TABLE  `brands`;
--
  INSERT INTO `brands` (`id`, `name`, `created_at`, `updated_at`) VALUES
('bra-5ece4797eaf5e', 'fashona', '2022-06-29 10:16:47.000000', '2022-10-29 11:10:47.000000'),
('bra-62962f89b29b3', 'maxima', '2022-06-11 10:16:47.000000', '2022-10-01 10:26:47.000000'),
('bra-62962f98473f6', 'nova', '2022-06-22 10:16:47.000000', '2022-10-27 10:16:47.000000'),
('bra-62962fb1d0ca6', 'bold', '2022-06-29 10:16:47.000000', '2022-10-24 10:16:47.000000'),
('bra-62962ffec3fe7', 'samba', '2022-06-20 10:16:47.000000', '2022-10-16 10:26:47.000000'),
('bra-62ac4aec68b30', 'koko', '2022-06-13 10:16:47.000000', '2022-10-26 10:16:47.000000'),
('bra-629785244dce4', 'kenya', '2022-06-23 10:16:47.000000', '2022-10-23 10:16:47.000000');


CREATE TABLE `sources` (
  `id` INTEGER PRIMARY KEY AUTOINCREMENT,
  `name` varchar(255),
  `email` varchar(255),
  `location` varchar(255),
  `link` varchar(255),
  `phone` varchar(255),
  `created_at` datetime,
  `updated_at` datetime
);

DELETE FROM `sources` WHERE `id` < 3;


SELECT
 p.id, p.name, p.color,p.price, p.quantity, p.status, p.image, p.created_at, p.updated_at,
 c.id as category_id, c.name as categoryName, c.image as categoryImage
 FROM products p 
 INNER JOIN categories c 
 WHERE 
 p.`category_id` = c.`id`;