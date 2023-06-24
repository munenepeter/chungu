/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
DROP TABLE IF EXISTS `activity_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `activity_log` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `log_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject_id` bigint unsigned DEFAULT NULL,
  `event` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `causer_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `causer_id` bigint unsigned DEFAULT NULL,
  `properties` json DEFAULT NULL,
  `batch_uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `subject` (`subject_type`,`subject_id`),
  KEY `causer` (`causer_type`,`causer_id`),
  KEY `activity_log_log_name_index` (`log_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `lunar_addresses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lunar_addresses` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` bigint unsigned DEFAULT NULL,
  `country_id` bigint unsigned DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `line_one` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `line_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `line_three` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_instructions` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta` json DEFAULT NULL,
  `shipping_default` tinyint(1) NOT NULL DEFAULT '0',
  `billing_default` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lunar_addresses_customer_id_foreign` (`customer_id`),
  KEY `lunar_addresses_country_id_foreign` (`country_id`),
  CONSTRAINT `lunar_addresses_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `lunar_countries` (`id`),
  CONSTRAINT `lunar_addresses_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `lunar_customers` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `lunar_assets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lunar_assets` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `lunar_attributables`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lunar_attributables` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `attributable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attributable_id` bigint unsigned NOT NULL,
  `attribute_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lunar_attributables_attributable_type_attributable_id_index` (`attributable_type`,`attributable_id`),
  KEY `lunar_attributables_attribute_id_foreign` (`attribute_id`),
  CONSTRAINT `lunar_attributables_attribute_id_foreign` FOREIGN KEY (`attribute_id`) REFERENCES `lunar_attributes` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `lunar_attribute_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lunar_attribute_groups` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `attributable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` json NOT NULL,
  `handle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `lunar_attribute_groups_handle_unique` (`handle`),
  KEY `lunar_attribute_groups_attributable_type_index` (`attributable_type`),
  KEY `lunar_attribute_groups_position_index` (`position`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `lunar_attributes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lunar_attributes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `attribute_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attribute_group_id` bigint unsigned NOT NULL,
  `position` int NOT NULL,
  `name` json NOT NULL,
  `handle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL,
  `default_value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `configuration` json NOT NULL,
  `system` tinyint(1) NOT NULL,
  `validation_rules` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filterable` tinyint(1) NOT NULL DEFAULT '0',
  `searchable` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `lunar_attributes_attribute_type_handle_unique` (`attribute_type`,`handle`),
  KEY `lunar_attributes_attribute_group_id_foreign` (`attribute_group_id`),
  KEY `lunar_attributes_attribute_type_index` (`attribute_type`),
  KEY `lunar_attributes_position_index` (`position`),
  KEY `lunar_attributes_type_index` (`type`),
  KEY `lunar_attributes_searchable_index` (`searchable`),
  KEY `lunar_attributes_filterable_index` (`filterable`),
  CONSTRAINT `lunar_attributes_attribute_group_id_foreign` FOREIGN KEY (`attribute_group_id`) REFERENCES `lunar_attribute_groups` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `lunar_brand_discount`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lunar_brand_discount` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `brand_id` bigint unsigned NOT NULL,
  `discount_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lunar_brand_discount_brand_id_foreign` (`brand_id`),
  KEY `lunar_brand_discount_discount_id_foreign` (`discount_id`),
  CONSTRAINT `lunar_brand_discount_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `lunar_brands` (`id`) ON DELETE CASCADE,
  CONSTRAINT `lunar_brand_discount_discount_id_foreign` FOREIGN KEY (`discount_id`) REFERENCES `lunar_discounts` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `lunar_brands`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lunar_brands` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `lunar_cart_addresses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lunar_cart_addresses` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `cart_id` bigint unsigned NOT NULL,
  `country_id` bigint unsigned DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `line_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `line_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `line_three` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_instructions` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'shipping',
  `shipping_option` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lunar_cart_addresses_cart_id_foreign` (`cart_id`),
  KEY `lunar_cart_addresses_country_id_foreign` (`country_id`),
  KEY `lunar_cart_addresses_type_index` (`type`),
  CONSTRAINT `lunar_cart_addresses_cart_id_foreign` FOREIGN KEY (`cart_id`) REFERENCES `lunar_carts` (`id`),
  CONSTRAINT `lunar_cart_addresses_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `lunar_countries` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `lunar_cart_line_discount`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lunar_cart_line_discount` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `cart_line_id` bigint unsigned NOT NULL,
  `discount_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lunar_cart_line_discount_cart_line_id_foreign` (`cart_line_id`),
  KEY `lunar_cart_line_discount_discount_id_foreign` (`discount_id`),
  CONSTRAINT `lunar_cart_line_discount_cart_line_id_foreign` FOREIGN KEY (`cart_line_id`) REFERENCES `lunar_carts` (`id`) ON DELETE CASCADE,
  CONSTRAINT `lunar_cart_line_discount_discount_id_foreign` FOREIGN KEY (`discount_id`) REFERENCES `lunar_discounts` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `lunar_cart_lines`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lunar_cart_lines` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `cart_id` bigint unsigned NOT NULL,
  `purchasable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `purchasable_id` bigint unsigned NOT NULL,
  `quantity` int unsigned NOT NULL,
  `meta` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lunar_cart_lines_cart_id_foreign` (`cart_id`),
  KEY `lunar_cart_lines_purchasable_type_purchasable_id_index` (`purchasable_type`,`purchasable_id`),
  CONSTRAINT `lunar_cart_lines_cart_id_foreign` FOREIGN KEY (`cart_id`) REFERENCES `lunar_carts` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `lunar_carts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lunar_carts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned DEFAULT NULL,
  `merged_id` bigint unsigned DEFAULT NULL,
  `currency_id` bigint unsigned NOT NULL,
  `channel_id` bigint unsigned NOT NULL,
  `order_id` bigint unsigned DEFAULT NULL,
  `coupon_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `completed_at` datetime DEFAULT NULL,
  `meta` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lunar_carts_user_id_foreign` (`user_id`),
  KEY `lunar_carts_merged_id_foreign` (`merged_id`),
  KEY `lunar_carts_currency_id_foreign` (`currency_id`),
  KEY `lunar_carts_channel_id_foreign` (`channel_id`),
  KEY `lunar_carts_order_id_foreign` (`order_id`),
  KEY `lunar_carts_coupon_code_index` (`coupon_code`),
  KEY `lunar_carts_completed_at_index` (`completed_at`),
  CONSTRAINT `lunar_carts_channel_id_foreign` FOREIGN KEY (`channel_id`) REFERENCES `lunar_channels` (`id`),
  CONSTRAINT `lunar_carts_currency_id_foreign` FOREIGN KEY (`currency_id`) REFERENCES `lunar_currencies` (`id`),
  CONSTRAINT `lunar_carts_merged_id_foreign` FOREIGN KEY (`merged_id`) REFERENCES `lunar_carts` (`id`),
  CONSTRAINT `lunar_carts_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `lunar_orders` (`id`),
  CONSTRAINT `lunar_carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `lunar_channelables`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lunar_channelables` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `channel_id` bigint unsigned NOT NULL,
  `channelable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `channelable_id` bigint unsigned NOT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '0',
  `starts_at` datetime DEFAULT NULL,
  `ends_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lunar_channelables_channel_id_foreign` (`channel_id`),
  KEY `lunar_channelables_channelable_type_channelable_id_index` (`channelable_type`,`channelable_id`),
  KEY `lunar_channelables_ends_at_index` (`ends_at`),
  CONSTRAINT `lunar_channelables_channel_id_foreign` FOREIGN KEY (`channel_id`) REFERENCES `lunar_channels` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `lunar_channels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lunar_channels` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `handle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `default` tinyint(1) NOT NULL DEFAULT '0',
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `lunar_channels_handle_unique` (`handle`),
  KEY `lunar_channels_default_index` (`default`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `lunar_collection_customer_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lunar_collection_customer_group` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `collection_id` bigint unsigned NOT NULL,
  `customer_group_id` bigint unsigned NOT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '0',
  `starts_at` timestamp NULL DEFAULT NULL,
  `ends_at` timestamp NULL DEFAULT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lunar_collection_customer_group_collection_id_foreign` (`collection_id`),
  KEY `lunar_collection_customer_group_customer_group_id_foreign` (`customer_group_id`),
  KEY `lunar_collection_customer_group_enabled_index` (`enabled`),
  KEY `lunar_collection_customer_group_starts_at_index` (`starts_at`),
  KEY `lunar_collection_customer_group_ends_at_index` (`ends_at`),
  KEY `lunar_collection_customer_group_visible_index` (`visible`),
  CONSTRAINT `lunar_collection_customer_group_collection_id_foreign` FOREIGN KEY (`collection_id`) REFERENCES `lunar_collections` (`id`),
  CONSTRAINT `lunar_collection_customer_group_customer_group_id_foreign` FOREIGN KEY (`customer_group_id`) REFERENCES `lunar_customer_groups` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `lunar_collection_discount`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lunar_collection_discount` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `discount_id` bigint unsigned NOT NULL,
  `collection_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lunar_collection_discount_discount_id_foreign` (`discount_id`),
  KEY `lunar_collection_discount_collection_id_foreign` (`collection_id`),
  CONSTRAINT `lunar_collection_discount_collection_id_foreign` FOREIGN KEY (`collection_id`) REFERENCES `lunar_collections` (`id`) ON DELETE CASCADE,
  CONSTRAINT `lunar_collection_discount_discount_id_foreign` FOREIGN KEY (`discount_id`) REFERENCES `lunar_discounts` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `lunar_collection_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lunar_collection_groups` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `handle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lunar_collection_groups_handle_index` (`handle`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `lunar_collection_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lunar_collection_product` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `collection_id` bigint unsigned NOT NULL,
  `product_id` bigint unsigned NOT NULL,
  `position` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lunar_collection_product_collection_id_foreign` (`collection_id`),
  KEY `lunar_collection_product_product_id_foreign` (`product_id`),
  KEY `lunar_collection_product_position_index` (`position`),
  CONSTRAINT `lunar_collection_product_collection_id_foreign` FOREIGN KEY (`collection_id`) REFERENCES `lunar_collections` (`id`),
  CONSTRAINT `lunar_collection_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `lunar_products` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `lunar_collections`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lunar_collections` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `collection_group_id` bigint unsigned NOT NULL,
  `_lft` int unsigned NOT NULL DEFAULT '0',
  `_rgt` int unsigned NOT NULL DEFAULT '0',
  `parent_id` int unsigned DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'static',
  `attribute_data` json NOT NULL,
  `sort` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'custom',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lunar_collections_collection_group_id_foreign` (`collection_group_id`),
  KEY `lunar_collections__lft__rgt_parent_id_index` (`_lft`,`_rgt`,`parent_id`),
  KEY `lunar_collections_type_index` (`type`),
  KEY `lunar_collections_sort_index` (`sort`),
  CONSTRAINT `lunar_collections_collection_group_id_foreign` FOREIGN KEY (`collection_group_id`) REFERENCES `lunar_collection_groups` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `lunar_countries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lunar_countries` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iso3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iso2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phonecode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capital` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `native` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emoji` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emoji_u` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `lunar_countries_iso3_unique` (`iso3`),
  UNIQUE KEY `lunar_countries_iso2_unique` (`iso2`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `lunar_currencies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lunar_currencies` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exchange_rate` decimal(10,4) NOT NULL,
  `decimal_places` int NOT NULL DEFAULT '2',
  `enabled` tinyint(1) NOT NULL DEFAULT '0',
  `default` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `lunar_currencies_code_unique` (`code`),
  KEY `lunar_currencies_decimal_places_index` (`decimal_places`),
  KEY `lunar_currencies_enabled_index` (`enabled`),
  KEY `lunar_currencies_default_index` (`default`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `lunar_customer_customer_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lunar_customer_customer_group` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` bigint unsigned NOT NULL,
  `customer_group_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lunar_customer_customer_group_customer_id_foreign` (`customer_id`),
  KEY `lunar_customer_customer_group_customer_group_id_foreign` (`customer_group_id`),
  CONSTRAINT `lunar_customer_customer_group_customer_group_id_foreign` FOREIGN KEY (`customer_group_id`) REFERENCES `lunar_customer_groups` (`id`),
  CONSTRAINT `lunar_customer_customer_group_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `lunar_customers` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `lunar_customer_group_discount`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lunar_customer_group_discount` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `discount_id` bigint unsigned NOT NULL,
  `customer_group_id` bigint unsigned NOT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '0',
  `starts_at` timestamp NULL DEFAULT NULL,
  `ends_at` timestamp NULL DEFAULT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lunar_customer_group_discount_discount_id_foreign` (`discount_id`),
  KEY `lunar_customer_group_discount_customer_group_id_foreign` (`customer_group_id`),
  KEY `lunar_customer_group_discount_enabled_index` (`enabled`),
  KEY `lunar_customer_group_discount_starts_at_index` (`starts_at`),
  KEY `lunar_customer_group_discount_ends_at_index` (`ends_at`),
  KEY `lunar_customer_group_discount_visible_index` (`visible`),
  CONSTRAINT `lunar_customer_group_discount_customer_group_id_foreign` FOREIGN KEY (`customer_group_id`) REFERENCES `lunar_customer_groups` (`id`),
  CONSTRAINT `lunar_customer_group_discount_discount_id_foreign` FOREIGN KEY (`discount_id`) REFERENCES `lunar_discounts` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `lunar_customer_group_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lunar_customer_group_product` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `customer_group_id` bigint unsigned NOT NULL,
  `product_id` bigint unsigned NOT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '0',
  `starts_at` timestamp NULL DEFAULT NULL,
  `ends_at` timestamp NULL DEFAULT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  `purchasable` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lunar_customer_group_product_customer_group_id_foreign` (`customer_group_id`),
  KEY `lunar_customer_group_product_product_id_foreign` (`product_id`),
  KEY `lunar_customer_group_product_enabled_index` (`enabled`),
  KEY `lunar_customer_group_product_starts_at_index` (`starts_at`),
  KEY `lunar_customer_group_product_ends_at_index` (`ends_at`),
  KEY `lunar_customer_group_product_visible_index` (`visible`),
  KEY `lunar_customer_group_product_purchasable_index` (`purchasable`),
  CONSTRAINT `lunar_customer_group_product_customer_group_id_foreign` FOREIGN KEY (`customer_group_id`) REFERENCES `lunar_customer_groups` (`id`),
  CONSTRAINT `lunar_customer_group_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `lunar_products` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `lunar_customer_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lunar_customer_groups` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `handle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `default` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `lunar_customer_groups_handle_unique` (`handle`),
  KEY `lunar_customer_groups_default_index` (`default`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `lunar_customer_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lunar_customer_user` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lunar_customer_user_customer_id_foreign` (`customer_id`),
  KEY `lunar_customer_user_user_id_foreign` (`user_id`),
  CONSTRAINT `lunar_customer_user_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `lunar_customers` (`id`),
  CONSTRAINT `lunar_customer_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `lunar_customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lunar_customers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vat_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_ref` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attribute_data` json DEFAULT NULL,
  `meta` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lunar_customers_account_ref_index` (`account_ref`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `lunar_discount_purchasables`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lunar_discount_purchasables` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `discount_id` bigint unsigned NOT NULL,
  `purchasable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `purchasable_id` bigint unsigned NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'condition',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lunar_discount_purchasables_discount_id_foreign` (`discount_id`),
  KEY `purchasable_idx` (`purchasable_type`,`purchasable_id`),
  KEY `lunar_discount_purchasables_type_index` (`type`),
  CONSTRAINT `lunar_discount_purchasables_discount_id_foreign` FOREIGN KEY (`discount_id`) REFERENCES `lunar_discounts` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `lunar_discount_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lunar_discount_user` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `discount_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lunar_discount_user_discount_id_foreign` (`discount_id`),
  KEY `lunar_discount_user_user_id_foreign` (`user_id`),
  CONSTRAINT `lunar_discount_user_discount_id_foreign` FOREIGN KEY (`discount_id`) REFERENCES `lunar_discounts` (`id`) ON DELETE CASCADE,
  CONSTRAINT `lunar_discount_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `lunar_discounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lunar_discounts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `handle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coupon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `starts_at` datetime NOT NULL,
  `ends_at` datetime DEFAULT NULL,
  `uses` int unsigned NOT NULL DEFAULT '0',
  `max_uses` mediumint unsigned DEFAULT NULL,
  `max_uses_per_user` mediumint unsigned DEFAULT NULL,
  `priority` mediumint unsigned NOT NULL DEFAULT '1',
  `stop` tinyint(1) NOT NULL DEFAULT '0',
  `restriction` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `lunar_discounts_handle_unique` (`handle`),
  UNIQUE KEY `lunar_discounts_coupon_unique` (`coupon`),
  KEY `lunar_discounts_type_index` (`type`),
  KEY `lunar_discounts_starts_at_index` (`starts_at`),
  KEY `lunar_discounts_ends_at_index` (`ends_at`),
  KEY `lunar_discounts_uses_index` (`uses`),
  KEY `lunar_discounts_priority_index` (`priority`),
  KEY `lunar_discounts_stop_index` (`stop`),
  KEY `lunar_discounts_restriction_index` (`restriction`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `lunar_languages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lunar_languages` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `default` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `lunar_languages_code_unique` (`code`),
  KEY `lunar_languages_default_index` (`default`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `lunar_media_product_variant`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lunar_media_product_variant` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `media_id` bigint unsigned NOT NULL,
  `product_variant_id` bigint unsigned NOT NULL,
  `primary` tinyint(1) NOT NULL DEFAULT '0',
  `position` smallint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lunar_media_product_variant_media_id_foreign` (`media_id`),
  KEY `lunar_media_product_variant_product_variant_id_foreign` (`product_variant_id`),
  KEY `lunar_media_product_variant_primary_index` (`primary`),
  KEY `lunar_media_product_variant_position_index` (`position`),
  CONSTRAINT `lunar_media_product_variant_media_id_foreign` FOREIGN KEY (`media_id`) REFERENCES `media` (`id`) ON DELETE CASCADE,
  CONSTRAINT `lunar_media_product_variant_product_variant_id_foreign` FOREIGN KEY (`product_variant_id`) REFERENCES `lunar_product_variants` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `lunar_order_addresses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lunar_order_addresses` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `order_id` bigint unsigned NOT NULL,
  `country_id` bigint unsigned DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `line_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `line_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `line_three` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postcode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_instructions` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'shipping',
  `shipping_option` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lunar_order_addresses_order_id_foreign` (`order_id`),
  KEY `lunar_order_addresses_country_id_foreign` (`country_id`),
  KEY `lunar_order_addresses_type_index` (`type`),
  CONSTRAINT `lunar_order_addresses_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `lunar_countries` (`id`),
  CONSTRAINT `lunar_order_addresses_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `lunar_orders` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `lunar_order_lines`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lunar_order_lines` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `order_id` bigint unsigned NOT NULL,
  `purchasable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `purchasable_id` bigint unsigned NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `identifier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_price` bigint unsigned NOT NULL,
  `unit_quantity` smallint unsigned NOT NULL DEFAULT '1',
  `quantity` int unsigned NOT NULL,
  `sub_total` bigint unsigned NOT NULL,
  `discount_total` bigint unsigned NOT NULL DEFAULT '0',
  `tax_breakdown` json NOT NULL,
  `tax_total` bigint unsigned NOT NULL,
  `total` bigint unsigned NOT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci,
  `meta` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lunar_order_lines_order_id_foreign` (`order_id`),
  KEY `lunar_order_lines_purchasable_type_purchasable_id_index` (`purchasable_type`,`purchasable_id`),
  KEY `lunar_order_lines_type_index` (`type`),
  KEY `lunar_order_lines_identifier_index` (`identifier`),
  KEY `lunar_order_lines_unit_price_index` (`unit_price`),
  KEY `lunar_order_lines_unit_quantity_index` (`unit_quantity`),
  KEY `lunar_order_lines_sub_total_index` (`sub_total`),
  KEY `lunar_order_lines_discount_total_index` (`discount_total`),
  KEY `lunar_order_lines_tax_total_index` (`tax_total`),
  KEY `lunar_order_lines_total_index` (`total`),
  CONSTRAINT `lunar_order_lines_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `lunar_orders` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `lunar_orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lunar_orders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` bigint unsigned DEFAULT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `channel_id` bigint unsigned NOT NULL,
  `new_customer` tinyint(1) NOT NULL DEFAULT '0',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_reference` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_total` bigint unsigned NOT NULL,
  `discount_breakdown` json DEFAULT NULL,
  `discount_total` bigint unsigned NOT NULL DEFAULT '0',
  `shipping_total` bigint unsigned NOT NULL DEFAULT '0',
  `tax_breakdown` json NOT NULL,
  `tax_total` bigint unsigned NOT NULL,
  `total` bigint unsigned NOT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci,
  `currency_code` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `compare_currency_code` varchar(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exchange_rate` decimal(10,4) NOT NULL DEFAULT '1.0000',
  `placed_at` datetime DEFAULT NULL,
  `meta` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `lunar_orders_reference_unique` (`reference`),
  KEY `lunar_orders_user_id_foreign` (`user_id`),
  KEY `lunar_orders_channel_id_foreign` (`channel_id`),
  KEY `lunar_orders_status_index` (`status`),
  KEY `lunar_orders_sub_total_index` (`sub_total`),
  KEY `lunar_orders_discount_total_index` (`discount_total`),
  KEY `lunar_orders_shipping_total_index` (`shipping_total`),
  KEY `lunar_orders_tax_total_index` (`tax_total`),
  KEY `lunar_orders_total_index` (`total`),
  KEY `lunar_orders_placed_at_index` (`placed_at`),
  KEY `lunar_orders_customer_id_foreign` (`customer_id`),
  KEY `lunar_orders_new_customer_index` (`new_customer`),
  CONSTRAINT `lunar_orders_channel_id_foreign` FOREIGN KEY (`channel_id`) REFERENCES `lunar_channels` (`id`),
  CONSTRAINT `lunar_orders_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `lunar_customers` (`id`),
  CONSTRAINT `lunar_orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `lunar_prices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lunar_prices` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `customer_group_id` bigint unsigned DEFAULT NULL,
  `currency_id` bigint unsigned DEFAULT NULL,
  `priceable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priceable_id` bigint unsigned NOT NULL,
  `price` bigint unsigned NOT NULL,
  `compare_price` bigint unsigned DEFAULT NULL,
  `tier` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lunar_prices_customer_group_id_foreign` (`customer_group_id`),
  KEY `lunar_prices_currency_id_foreign` (`currency_id`),
  KEY `lunar_prices_priceable_type_priceable_id_index` (`priceable_type`,`priceable_id`),
  KEY `lunar_prices_price_index` (`price`),
  KEY `lunar_prices_tier_index` (`tier`),
  CONSTRAINT `lunar_prices_currency_id_foreign` FOREIGN KEY (`currency_id`) REFERENCES `lunar_currencies` (`id`),
  CONSTRAINT `lunar_prices_customer_group_id_foreign` FOREIGN KEY (`customer_group_id`) REFERENCES `lunar_customer_groups` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `lunar_product_associations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lunar_product_associations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `product_parent_id` bigint unsigned NOT NULL,
  `product_target_id` bigint unsigned NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lunar_product_associations_product_parent_id_foreign` (`product_parent_id`),
  KEY `lunar_product_associations_product_target_id_foreign` (`product_target_id`),
  KEY `lunar_product_associations_type_index` (`type`),
  CONSTRAINT `lunar_product_associations_product_parent_id_foreign` FOREIGN KEY (`product_parent_id`) REFERENCES `lunar_products` (`id`),
  CONSTRAINT `lunar_product_associations_product_target_id_foreign` FOREIGN KEY (`product_target_id`) REFERENCES `lunar_products` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `lunar_product_option_value_product_variant`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lunar_product_option_value_product_variant` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `value_id` bigint unsigned NOT NULL,
  `variant_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lunar_product_option_value_product_variant_value_id_foreign` (`value_id`),
  KEY `lunar_product_option_value_product_variant_variant_id_foreign` (`variant_id`),
  CONSTRAINT `lunar_product_option_value_product_variant_value_id_foreign` FOREIGN KEY (`value_id`) REFERENCES `lunar_product_option_values` (`id`),
  CONSTRAINT `lunar_product_option_value_product_variant_variant_id_foreign` FOREIGN KEY (`variant_id`) REFERENCES `lunar_product_variants` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `lunar_product_option_values`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lunar_product_option_values` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `product_option_id` bigint unsigned NOT NULL,
  `name` json NOT NULL,
  `position` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lunar_product_option_values_product_option_id_foreign` (`product_option_id`),
  KEY `lunar_product_option_values_position_index` (`position`),
  CONSTRAINT `lunar_product_option_values_product_option_id_foreign` FOREIGN KEY (`product_option_id`) REFERENCES `lunar_product_options` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `lunar_product_options`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lunar_product_options` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` json NOT NULL,
  `position` int NOT NULL DEFAULT '0',
  `handle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `lunar_product_options_handle_unique` (`handle`),
  KEY `lunar_product_options_position_index` (`position`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `lunar_product_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lunar_product_types` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `lunar_product_variants`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lunar_product_variants` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `product_id` bigint unsigned NOT NULL,
  `tax_class_id` bigint unsigned NOT NULL,
  `attribute_data` json DEFAULT NULL,
  `tax_ref` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit_quantity` int unsigned NOT NULL DEFAULT '1',
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gtin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mpn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ean` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `length_value` decimal(10,4) DEFAULT '0.0000',
  `length_unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'mm',
  `width_value` decimal(10,4) DEFAULT '0.0000',
  `width_unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'mm',
  `height_value` decimal(10,4) DEFAULT '0.0000',
  `height_unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'mm',
  `weight_value` decimal(10,4) DEFAULT '0.0000',
  `weight_unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'mm',
  `volume_value` decimal(10,4) DEFAULT '0.0000',
  `volume_unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'mm',
  `shippable` tinyint(1) NOT NULL DEFAULT '1',
  `stock` int NOT NULL DEFAULT '0',
  `backorder` int NOT NULL DEFAULT '0',
  `purchasable` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'always',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lunar_product_variants_product_id_foreign` (`product_id`),
  KEY `lunar_product_variants_tax_class_id_foreign` (`tax_class_id`),
  KEY `lunar_product_variants_tax_ref_index` (`tax_ref`),
  KEY `lunar_product_variants_unit_quantity_index` (`unit_quantity`),
  KEY `lunar_product_variants_sku_index` (`sku`),
  KEY `lunar_product_variants_gtin_index` (`gtin`),
  KEY `lunar_product_variants_mpn_index` (`mpn`),
  KEY `lunar_product_variants_ean_index` (`ean`),
  KEY `lunar_product_variants_length_value_index` (`length_value`),
  KEY `lunar_product_variants_width_value_index` (`width_value`),
  KEY `lunar_product_variants_height_value_index` (`height_value`),
  KEY `lunar_product_variants_weight_value_index` (`weight_value`),
  KEY `lunar_product_variants_volume_value_index` (`volume_value`),
  KEY `lunar_product_variants_shippable_index` (`shippable`),
  KEY `lunar_product_variants_stock_index` (`stock`),
  KEY `lunar_product_variants_backorder_index` (`backorder`),
  KEY `lunar_product_variants_purchasable_index` (`purchasable`),
  CONSTRAINT `lunar_product_variants_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `lunar_products` (`id`),
  CONSTRAINT `lunar_product_variants_tax_class_id_foreign` FOREIGN KEY (`tax_class_id`) REFERENCES `lunar_tax_classes` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `lunar_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lunar_products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `brand_id` bigint unsigned DEFAULT NULL,
  `product_type_id` bigint unsigned NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attribute_data` json NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lunar_products_product_type_id_foreign` (`product_type_id`),
  KEY `lunar_products_status_index` (`status`),
  KEY `lunar_products_brand_id_foreign` (`brand_id`),
  CONSTRAINT `lunar_products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `lunar_brands` (`id`),
  CONSTRAINT `lunar_products_product_type_id_foreign` FOREIGN KEY (`product_type_id`) REFERENCES `lunar_product_types` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `lunar_saved_searches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lunar_saved_searches` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `staff_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `component` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `term` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filters` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lunar_saved_searches_staff_id_foreign` (`staff_id`),
  KEY `lunar_saved_searches_component_index` (`component`),
  CONSTRAINT `lunar_saved_searches_staff_id_foreign` FOREIGN KEY (`staff_id`) REFERENCES `lunar_staff` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `lunar_staff`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lunar_staff` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `lunar_staff_email_unique` (`email`),
  KEY `lunar_staff_admin_index` (`admin`),
  KEY `lunar_staff_firstname_index` (`firstname`),
  KEY `lunar_staff_lastname_index` (`lastname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `lunar_staff_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lunar_staff_permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `staff_id` bigint unsigned NOT NULL,
  `handle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lunar_staff_permissions_staff_id_foreign` (`staff_id`),
  KEY `lunar_staff_permissions_handle_index` (`handle`),
  CONSTRAINT `lunar_staff_permissions_staff_id_foreign` FOREIGN KEY (`staff_id`) REFERENCES `lunar_staff` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `lunar_states`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lunar_states` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `country_id` bigint unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lunar_states_country_id_foreign` (`country_id`),
  CONSTRAINT `lunar_states_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `lunar_countries` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `lunar_taggables`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lunar_taggables` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tag_id` bigint unsigned NOT NULL,
  `taggable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `taggable_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lunar_taggables_tag_id_foreign` (`tag_id`),
  KEY `lunar_taggables_taggable_type_taggable_id_index` (`taggable_type`,`taggable_id`),
  CONSTRAINT `lunar_taggables_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `lunar_tags` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `lunar_tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lunar_tags` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lunar_tags_value_index` (`value`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `lunar_tax_classes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lunar_tax_classes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `default` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lunar_tax_classes_default_index` (`default`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `lunar_tax_rate_amounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lunar_tax_rate_amounts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tax_class_id` bigint unsigned DEFAULT NULL,
  `tax_rate_id` bigint unsigned DEFAULT NULL,
  `percentage` decimal(7,3) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lunar_tax_rate_amounts_tax_class_id_foreign` (`tax_class_id`),
  KEY `lunar_tax_rate_amounts_tax_rate_id_foreign` (`tax_rate_id`),
  KEY `lunar_tax_rate_amounts_percentage_index` (`percentage`),
  CONSTRAINT `lunar_tax_rate_amounts_tax_class_id_foreign` FOREIGN KEY (`tax_class_id`) REFERENCES `lunar_tax_classes` (`id`),
  CONSTRAINT `lunar_tax_rate_amounts_tax_rate_id_foreign` FOREIGN KEY (`tax_rate_id`) REFERENCES `lunar_tax_rates` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `lunar_tax_rates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lunar_tax_rates` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tax_zone_id` bigint unsigned DEFAULT NULL,
  `priority` tinyint unsigned NOT NULL DEFAULT '1',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lunar_tax_rates_tax_zone_id_foreign` (`tax_zone_id`),
  KEY `lunar_tax_rates_priority_index` (`priority`),
  CONSTRAINT `lunar_tax_rates_tax_zone_id_foreign` FOREIGN KEY (`tax_zone_id`) REFERENCES `lunar_tax_zones` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `lunar_tax_zone_countries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lunar_tax_zone_countries` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tax_zone_id` bigint unsigned DEFAULT NULL,
  `country_id` bigint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lunar_tax_zone_countries_tax_zone_id_foreign` (`tax_zone_id`),
  KEY `lunar_tax_zone_countries_country_id_foreign` (`country_id`),
  CONSTRAINT `lunar_tax_zone_countries_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `lunar_countries` (`id`),
  CONSTRAINT `lunar_tax_zone_countries_tax_zone_id_foreign` FOREIGN KEY (`tax_zone_id`) REFERENCES `lunar_tax_zones` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `lunar_tax_zone_customer_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lunar_tax_zone_customer_groups` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tax_zone_id` bigint unsigned DEFAULT NULL,
  `customer_group_id` bigint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lunar_tax_zone_customer_groups_tax_zone_id_foreign` (`tax_zone_id`),
  KEY `lunar_tax_zone_customer_groups_customer_group_id_foreign` (`customer_group_id`),
  CONSTRAINT `lunar_tax_zone_customer_groups_customer_group_id_foreign` FOREIGN KEY (`customer_group_id`) REFERENCES `lunar_customer_groups` (`id`),
  CONSTRAINT `lunar_tax_zone_customer_groups_tax_zone_id_foreign` FOREIGN KEY (`tax_zone_id`) REFERENCES `lunar_tax_zones` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `lunar_tax_zone_postcodes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lunar_tax_zone_postcodes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tax_zone_id` bigint unsigned DEFAULT NULL,
  `country_id` bigint unsigned DEFAULT NULL,
  `postcode` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lunar_tax_zone_postcodes_tax_zone_id_foreign` (`tax_zone_id`),
  KEY `lunar_tax_zone_postcodes_country_id_foreign` (`country_id`),
  KEY `lunar_tax_zone_postcodes_postcode_index` (`postcode`),
  CONSTRAINT `lunar_tax_zone_postcodes_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `lunar_countries` (`id`),
  CONSTRAINT `lunar_tax_zone_postcodes_tax_zone_id_foreign` FOREIGN KEY (`tax_zone_id`) REFERENCES `lunar_tax_zones` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `lunar_tax_zone_states`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lunar_tax_zone_states` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tax_zone_id` bigint unsigned DEFAULT NULL,
  `state_id` bigint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lunar_tax_zone_states_tax_zone_id_foreign` (`tax_zone_id`),
  KEY `lunar_tax_zone_states_state_id_foreign` (`state_id`),
  CONSTRAINT `lunar_tax_zone_states_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `lunar_states` (`id`),
  CONSTRAINT `lunar_tax_zone_states_tax_zone_id_foreign` FOREIGN KEY (`tax_zone_id`) REFERENCES `lunar_tax_zones` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `lunar_tax_zones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lunar_tax_zones` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zone_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_display` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL,
  `default` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lunar_tax_zones_zone_type_index` (`zone_type`),
  KEY `lunar_tax_zones_active_index` (`active`),
  KEY `lunar_tax_zones_default_index` (`default`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `lunar_transactions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lunar_transactions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `parent_transaction_id` bigint unsigned DEFAULT NULL,
  `order_id` bigint unsigned NOT NULL,
  `success` tinyint(1) NOT NULL,
  `type` enum('refund','intent','capture') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'capture',
  `driver` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int unsigned NOT NULL,
  `reference` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_type` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_four` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `captured_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lunar_transactions_order_id_foreign` (`order_id`),
  KEY `lunar_transactions_success_index` (`success`),
  KEY `lunar_transactions_amount_index` (`amount`),
  KEY `lunar_transactions_reference_index` (`reference`),
  KEY `lunar_transactions_card_type_index` (`card_type`),
  KEY `lunar_transactions_parent_transaction_id_foreign` (`parent_transaction_id`),
  KEY `lunar_transactions_captured_at_index` (`captured_at`),
  KEY `lunar_transactions_type_index` (`type`),
  CONSTRAINT `lunar_transactions_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `lunar_orders` (`id`),
  CONSTRAINT `lunar_transactions_parent_transaction_id_foreign` FOREIGN KEY (`parent_transaction_id`) REFERENCES `lunar_transactions` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `lunar_urls`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lunar_urls` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `language_id` bigint unsigned NOT NULL,
  `element_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `element_id` bigint unsigned NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `default` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lunar_urls_language_id_foreign` (`language_id`),
  KEY `lunar_urls_element_type_element_id_index` (`element_type`,`element_id`),
  KEY `lunar_urls_slug_index` (`slug`),
  KEY `lunar_urls_default_index` (`default`),
  CONSTRAINT `lunar_urls_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `lunar_languages` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `media`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `media` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversions_disk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint unsigned NOT NULL,
  `manipulations` json NOT NULL,
  `custom_properties` json NOT NULL,
  `generated_conversions` json NOT NULL,
  `responsive_images` json NOT NULL,
  `order_column` int unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `media_uuid_unique` (`uuid`),
  KEY `media_model_type_model_id_index` (`model_type`,`model_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `search_index`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `search_index` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `index` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `search_index_key_index` (`key`),
  KEY `search_index_index_index` (`index`),
  KEY `search_index_field_index` (`field`),
  FULLTEXT KEY `search_index_content_fulltext` (`content`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1);
INSERT INTO `migrations` VALUES (2,'2014_10_12_100000_create_password_resets_table',1);
INSERT INTO `migrations` VALUES (3,'2019_08_19_000000_create_failed_jobs_table',1);
INSERT INTO `migrations` VALUES (4,'2019_12_14_000001_create_personal_access_tokens_table',1);
INSERT INTO `migrations` VALUES (5,'2021_07_29_100000_create_channels_table',1);
INSERT INTO `migrations` VALUES (6,'2021_07_29_100001_create_languages_table',1);
INSERT INTO `migrations` VALUES (7,'2021_07_29_100002_create_channelables_table',1);
INSERT INTO `migrations` VALUES (8,'2021_07_29_100003_create_currencies_table',1);
INSERT INTO `migrations` VALUES (9,'2021_07_29_100004_create_attribute_groups_table',1);
INSERT INTO `migrations` VALUES (10,'2021_07_29_100005_create_attributes_table',1);
INSERT INTO `migrations` VALUES (11,'2021_07_29_100006_create_attributables_table',1);
INSERT INTO `migrations` VALUES (12,'2021_07_29_100010_create_product_types_table',1);
INSERT INTO `migrations` VALUES (13,'2021_07_29_100011_create_tax_classes_table',1);
INSERT INTO `migrations` VALUES (14,'2021_07_29_100012_create_tax_zones_table',1);
INSERT INTO `migrations` VALUES (15,'2021_07_29_100020_create_products_table',1);
INSERT INTO `migrations` VALUES (16,'2021_07_29_100025_create_product_associations_table',1);
INSERT INTO `migrations` VALUES (17,'2021_07_29_100030_create_product_variants_table',1);
INSERT INTO `migrations` VALUES (18,'2021_07_29_100040_create_customer_groups_table',1);
INSERT INTO `migrations` VALUES (19,'2021_07_29_100041_create_customer_group_product_table',1);
INSERT INTO `migrations` VALUES (20,'2021_07_29_100041_create_customers_table',1);
INSERT INTO `migrations` VALUES (21,'2021_07_29_100042_create_customer_customer_group_table',1);
INSERT INTO `migrations` VALUES (22,'2021_07_29_100042_create_customer_user_table',1);
INSERT INTO `migrations` VALUES (23,'2021_07_29_100050_create_prices_table',1);
INSERT INTO `migrations` VALUES (24,'2021_07_30_100000_create_countries_table',1);
INSERT INTO `migrations` VALUES (25,'2021_07_30_100001_create_states_table',1);
INSERT INTO `migrations` VALUES (26,'2021_07_30_100002_create_addresses_table',1);
INSERT INTO `migrations` VALUES (27,'2021_07_30_100003_create_tax_zone_countries_table',1);
INSERT INTO `migrations` VALUES (28,'2021_07_30_100004_create_tax_zone_states_table',1);
INSERT INTO `migrations` VALUES (29,'2021_07_30_100005_create_tax_zone_postcodes_table',1);
INSERT INTO `migrations` VALUES (30,'2021_07_30_100006_create_tax_zone_customer_groups_table',1);
INSERT INTO `migrations` VALUES (31,'2021_07_30_100007_create_tax_rates_table',1);
INSERT INTO `migrations` VALUES (32,'2021_07_30_100008_create_tax_rate_amounts_table',1);
INSERT INTO `migrations` VALUES (33,'2021_08_10_101547_create_media_table',1);
INSERT INTO `migrations` VALUES (34,'2021_08_10_102000_create_collection_groups_table',1);
INSERT INTO `migrations` VALUES (35,'2021_08_10_103000_create_collections_table',1);
INSERT INTO `migrations` VALUES (36,'2021_08_10_103001_create_collection_product_table',1);
INSERT INTO `migrations` VALUES (37,'2021_08_10_103002_create_collection_customer_group_table',1);
INSERT INTO `migrations` VALUES (38,'2021_08_17_142630_create_activity_log_table',1);
INSERT INTO `migrations` VALUES (39,'2021_08_19_110000_create_staff_table',1);
INSERT INTO `migrations` VALUES (40,'2021_08_19_113700_create_staff_permissions_table',1);
INSERT INTO `migrations` VALUES (41,'2021_09_09_100000_create_product_options_table',1);
INSERT INTO `migrations` VALUES (42,'2021_09_09_100001_create_product_option_values_table',1);
INSERT INTO `migrations` VALUES (43,'2021_09_09_100010_create_product_option_value_product_variant_table',1);
INSERT INTO `migrations` VALUES (44,'2021_09_10_100000_create_tags_table',1);
INSERT INTO `migrations` VALUES (45,'2021_09_10_100001_create_taggables_table',1);
INSERT INTO `migrations` VALUES (46,'2021_09_29_100000_create_urls_table',1);
INSERT INTO `migrations` VALUES (47,'2021_10_01_090000_create_orders_table',1);
INSERT INTO `migrations` VALUES (48,'2021_10_01_090001_create_order_lines_table',1);
INSERT INTO `migrations` VALUES (49,'2021_10_01_090002_create_order_addresses_table',1);
INSERT INTO `migrations` VALUES (50,'2021_10_01_090003_create_transactions_table',1);
INSERT INTO `migrations` VALUES (51,'2021_10_01_100000_create_carts_table',1);
INSERT INTO `migrations` VALUES (52,'2021_10_01_100001_create_cart_addresses_table',1);
INSERT INTO `migrations` VALUES (53,'2021_10_01_100001_create_cart_lines_table',1);
INSERT INTO `migrations` VALUES (54,'2022_01_12_100000_add_columns_to_attributes_table',1);
INSERT INTO `migrations` VALUES (55,'2022_01_12_100001_add_attribute_data_to_product_variants_table',1);
INSERT INTO `migrations` VALUES (56,'2022_01_12_100002_add_default_column_to_tax_classes_table',1);
INSERT INTO `migrations` VALUES (57,'2022_01_18_100000_add_starts_ends_at_to_channelables_table',1);
INSERT INTO `migrations` VALUES (58,'2022_01_18_100001_add_customer_id_to_orders_table',1);
INSERT INTO `migrations` VALUES (59,'2022_02_25_100000_create_saved_searches_table',1);
INSERT INTO `migrations` VALUES (60,'2022_03_11_100000_remove_formatting_columns_from_currencies_table',1);
INSERT INTO `migrations` VALUES (61,'2022_03_17_100000_add_fields_to_transactions_table',1);
INSERT INTO `migrations` VALUES (62,'2022_03_29_100000_update_quantity_on_cart_lines_table',1);
INSERT INTO `migrations` VALUES (63,'2022_03_30_100000_update_quantity_on_order_lines_table',1);
INSERT INTO `migrations` VALUES (64,'2022_05_10_100000_fix_last_four_on_transactions_table',1);
INSERT INTO `migrations` VALUES (65,'2022_05_19_100000_add_attributes_to_customers_table',1);
INSERT INTO `migrations` VALUES (66,'2022_06_29_100000_create_assets_table',1);
INSERT INTO `migrations` VALUES (67,'2022_07_15_100000_set_last_four_to_nullable_on_transactions',1);
INSERT INTO `migrations` VALUES (68,'2022_07_23_215417_add_handle_position_to_product_options_table',1);
INSERT INTO `migrations` VALUES (69,'2022_07_23_215418_add_position_to_product_option_values_table',1);
INSERT INTO `migrations` VALUES (70,'2022_08_09_100000_create_media_variant_table',1);
INSERT INTO `migrations` VALUES (71,'2022_08_09_100001_create_brands_table',1);
INSERT INTO `migrations` VALUES (72,'2022_08_09_100002_add_brand_id_to_products_table',1);
INSERT INTO `migrations` VALUES (73,'2022_08_30_000000_create_search_index_table',1);
INSERT INTO `migrations` VALUES (74,'2022_09_05_100000_add_account_ref_to_customers_table',1);
INSERT INTO `migrations` VALUES (75,'2022_09_08_100000_add_position_to_media_product_variant_table',1);
INSERT INTO `migrations` VALUES (76,'2022_11_13_110447_update_prices_on_prices_table',1);
INSERT INTO `migrations` VALUES (77,'2022_11_13_111734_update_prices_on_orders_table',1);
INSERT INTO `migrations` VALUES (78,'2022_11_13_111744_update_prices_on_order_lines_table',1);
INSERT INTO `migrations` VALUES (79,'2022_11_18_100000_create_discounts_table',1);
INSERT INTO `migrations` VALUES (80,'2022_11_18_100005_create_cart_line_discount_table',1);
INSERT INTO `migrations` VALUES (81,'2022_11_18_100010_create_brand_discount_table',1);
INSERT INTO `migrations` VALUES (82,'2022_11_18_100015_create_customer_group_discount_table',1);
INSERT INTO `migrations` VALUES (83,'2022_11_18_100020_create_discount_collections_table',1);
INSERT INTO `migrations` VALUES (84,'2022_11_18_100030_create_discount_purchasables_table',1);
INSERT INTO `migrations` VALUES (85,'2022_12_09_100000_add_new_customer_flag_to_orders_table',1);
INSERT INTO `migrations` VALUES (86,'2023_03_03_100001_add_discount_breakdown_to_orders_table',1);
INSERT INTO `migrations` VALUES (87,'2023_03_03_100001_add_max_uses_per_user_to_discounts_table',1);
INSERT INTO `migrations` VALUES (88,'2023_03_13_100030_create_discount_user_table',1);
INSERT INTO `migrations` VALUES (89,'2023_04_04_000000_add_expires_at_to_personal_access_tokens_table',1);
