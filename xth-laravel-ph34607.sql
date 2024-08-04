-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 03, 2024 at 04:47 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xth-laravel-ph34607`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `image`, `created_at`, `updated_at`) VALUES
(2, 'banners/W4c9U3dlyktbyZ8xNIid1cBuVQvs2U85z72KhQkO.webp', '2024-08-02 20:32:26', '2024-08-02 20:33:23'),
(3, 'banners/GzkScQcY3hKmx9DW6YGPc4HPPxODmyQlCftRankE.webp', '2024-08-02 20:33:41', '2024-08-02 20:42:42');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 3, '2024-08-02 03:45:46', '2024-08-02 03:45:46'),
(2, 4, '2024-08-02 04:06:29', '2024-08-02 04:06:29'),
(3, 5, '2024-08-02 18:45:59', '2024-08-02 18:45:59');

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

CREATE TABLE `cart_items` (
  `id` bigint UNSIGNED NOT NULL,
  `cart_id` bigint UNSIGNED NOT NULL,
  `product_variant_id` bigint UNSIGNED NOT NULL,
  `quantity` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(18, 'Áo polo nữ', 'categories/fjow8T3q5supCYKYtS1utE26Wu1ApvYHAEC6zD6w.webp', '2024-07-30 05:19:50', '2024-08-01 18:27:19'),
(19, 'Áo polo nam', 'categories/Qk6IVITQ2cVGN4jAKUUFViCnPvc62beaSBw4H34S.webp', '2024-07-30 05:34:40', '2024-08-01 18:27:04'),
(20, 'Áo thun nam', 'categories/cenY0llkEsu1DjZKdE8ZDmIGjL5vofCrmuKqCsR4.webp', '2024-07-31 02:50:26', '2024-08-01 18:49:37'),
(21, 'Áo thun nữ', 'categories/hqYageOA338NojA3sO2isUgfhj2zKWjfbQaUs86F.webp', '2024-07-31 02:50:43', '2024-08-01 18:49:21');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_07_30_093901_create_categories_table', 1),
(6, '2024_07_30_143549_create_products_table', 2),
(7, '2024_07_30_144435_create_product_galleries_table', 2),
(8, '2024_07_30_144512_create_product_colors_table', 2),
(9, '2024_07_30_144521_create_product_sizes_table', 2),
(10, '2024_07_30_144548_create_product_variants_table', 2),
(11, '2024_08_01_152724_create_carts_table', 3),
(12, '2024_08_01_152913_create_cart_items_table', 3),
(13, '2024_08_01_153024_create_orders_table', 3),
(14, '2024_08_01_153036_create_order_items_table', 3),
(15, '2024_08_02_163713_create_promotions_table', 4),
(16, '2024_08_03_030816_create_banners_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receiver_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receiver_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receiver_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receiver_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'unpaid',
  `total_price` double(15,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `user_email`, `user_name`, `user_address`, `user_phone`, `receiver_email`, `receiver_name`, `receiver_address`, `receiver_phone`, `order_status`, `payment_status`, `total_price`, `created_at`, `updated_at`) VALUES
(10, 3, 'huong1@gmail.com', 'Nguyễn Văn Hướng', 'Hà Nội', '0987654321', 'vanA@gmail.com', 'Nguyễn Văn A', 'Hải Dương', '0987654231', 'pending', 'unpaid', 349000.00, '2024-08-02 09:17:33', '2024-08-02 09:17:33'),
(11, 5, 'huong2@gmail.com', 'Nguyễn Văn Hướng', 'Hà Nội', '0987654321', 'vanA@gmail.com', 'Nguyễn Văn A', 'Hải Phòng', '0987654231', 'pending', 'unpaid', 200000.00, '2024-08-02 19:05:04', '2024-08-02 19:05:04'),
(12, 5, 'huong1@gmail.com', 'Nguyễn Văn Hướng', 'Hà Nội', '0987654321', 'vanA@gmail.com', 'Nguyễn Văn A', 'Hải Phòng', '0987654231', 'pending', 'unpaid', 298000.00, '2024-08-02 20:50:25', '2024-08-02 20:50:25');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint UNSIGNED NOT NULL,
  `product_variant_id` bigint UNSIGNED NOT NULL,
  `order_id` bigint UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_sku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price_sale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `variant_size_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `variant_color_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `product_variant_id`, `order_id`, `product_name`, `product_sku`, `product_image`, `product_price`, `product_price_sale`, `variant_size_name`, `variant_color_name`, `quantity`, `created_at`, `updated_at`) VALUES
(13, 89, 10, 'Áo Polo nam Supima cổ dệt', 'WNHS9XOM', 'products/HjZGbvNuULz4h5AVebyKbfP7zcdWKFRJplR7qmXr.webp', '249000', '200000', 'S', 'Black', '1', '2024-08-02 09:17:33', '2024-08-02 09:17:33'),
(14, 78, 10, 'Áo Polo Ultra Active', '0KJ0WHLG', 'products/P4NIDekIrXNCvbnmzri8jykBJfoA29exlcTc1x3r.webp', '249000', '149000', 'M', 'White', '1', '2024-08-02 09:17:33', '2024-08-02 09:17:33'),
(15, 57, 11, 'Áo Polo nữ xơ dừa cổ', '9RNXYMJU', 'products/tpVkBCOLOPor91Z8vJgL7DAGFGv6tE735Ye1rtrI.webp', '249000', '200000', 'S', 'Black', '1', '2024-08-02 19:05:04', '2024-08-02 19:05:04'),
(16, 73, 12, 'Áo Polo Ultra Active', '0KJ0WHLG', 'products/P4NIDekIrXNCvbnmzri8jykBJfoA29exlcTc1x3r.webp', '249000', '149000', 'S', 'Black', '2', '2024-08-02 20:50:25', '2024-08-02 20:50:25');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` bigint NOT NULL,
  `price_sale` bigint DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `is_20_sale` tinyint(1) NOT NULL DEFAULT '0',
  `is_hot` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `sku`, `category_id`, `image`, `price`, `price_sale`, `description`, `is_active`, `is_20_sale`, `is_hot`, `created_at`, `updated_at`) VALUES
(37, 'Áo Polo nữ cổ dệt', 'ao-polo-nu-co-det-uetdq0fv', 'UETDQ0FV', 18, 'products/ShOjnSQ4fkUau2FRsmifFCrcMBVpwRJHtRMfLYiL.webp', 249000, 200000, 'Áo Polo nữ cổ dệt phối màuC9POL001M Áo Polo Tokyo 2023 phiên bản 4.0 - Mát hơn - Bền hơn - Chống UV cực đỉnh.Nâng cấp từ chiếc áo Polo quen thuộc, Polo Tokyo với tính năng ưu việt đem lại cảm giác khoan khoái.', 1, 0, 1, '2024-08-01 07:53:38', '2024-08-01 07:53:38'),
(38, 'Áo Polo nữ xơ dừa cổ', 'ao-polo-nu-xo-dua-co-9rnxymju', '9RNXYMJU', 18, 'products/tpVkBCOLOPor91Z8vJgL7DAGFGv6tE735Ye1rtrI.webp', 249000, 200000, 'Áo Polo nữ xơ dừa cổ phối màuC9POL001M Áo Polo Tokyo 2023 phiên bản 4.0 - Mát hơn - Bền hơn - Chống UV cực đỉnh.Nâng cấp từ chiếc áo Polo quen thuộc, Polo Tokyo với tính năng ưu việt đem lại cảm giác khoan khoái', 1, 0, 1, '2024-08-01 07:58:55', '2024-08-01 07:58:55'),
(39, 'Áo Polo Ultra Active', 'ao-polo-ultra-active-0kj0whlg', '0KJ0WHLG', 19, 'products/P4NIDekIrXNCvbnmzri8jykBJfoA29exlcTc1x3r.webp', 249000, 149000, 'Áo Polo Ultra Active - Điểm 10 trong tầm giá - Sự lựa chọn tuyệt vời cho phái mạnh với độ bền cao nhờ chất liệu được xử lý đặc biệt, không bai dão. Mang đến sự thoải mái, thoáng mát và thấm hút tốt cho cả ngày dài vận động.', 1, 0, 1, '2024-08-01 08:02:38', '2024-08-01 18:22:02'),
(40, 'Áo Polo nam Supima cổ dệt', 'ao-polo-nam-supima-co-det-wnhs9xom', 'WNHS9XOM', 19, 'products/HjZGbvNuULz4h5AVebyKbfP7zcdWKFRJplR7qmXr.webp', 249000, 200000, 'Áo Polo nam Supima cổ dệt - Điểm 10 trong tầm giá - Sự lựa chọn tuyệt vời cho phái mạnh với độ bền cao nhờ chất liệu được xử lý đặc biệt, không bai dão. Mang đến sự thoải mái, thoáng mát và thấm hút tốt cho cả ngày dài vận động.', 1, 0, 1, '2024-08-01 08:05:25', '2024-08-01 08:05:25');

-- --------------------------------------------------------

--
-- Table structure for table `product_colors`
--

CREATE TABLE `product_colors` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_colors`
--

INSERT INTO `product_colors` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Black', '2024-07-31 03:15:28', '2024-07-31 03:15:28'),
(2, 'White', '2024-07-31 03:15:28', '2024-07-31 03:15:28'),
(3, 'Blue', '2024-07-31 03:15:28', '2024-07-31 03:15:28'),
(4, 'Yellow', '2024-07-31 03:15:28', '2024-07-31 03:15:28');

-- --------------------------------------------------------

--
-- Table structure for table `product_galleries`
--

CREATE TABLE `product_galleries` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_sizes`
--

CREATE TABLE `product_sizes` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_sizes`
--

INSERT INTO `product_sizes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'S', '2024-07-31 03:15:28', '2024-07-31 03:15:28'),
(2, 'M', '2024-07-31 03:15:28', '2024-07-31 03:15:28'),
(3, 'L', '2024-07-31 03:15:28', '2024-07-31 03:15:28'),
(4, 'XL', '2024-07-31 03:15:28', '2024-07-31 03:15:28');

-- --------------------------------------------------------

--
-- Table structure for table `product_variants`
--

CREATE TABLE `product_variants` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `product_color_id` bigint UNSIGNED NOT NULL,
  `product_size_id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_variants`
--

INSERT INTO `product_variants` (`id`, `product_id`, `product_color_id`, `product_size_id`, `image`, `quantity`, `created_at`, `updated_at`) VALUES
(41, 37, 1, 1, 'product_variants/JtIRPrNTBqCG3RPPRs9k9RGXJoNkhqMFSBHTHuiO.jpg', 5, '2024-08-01 07:53:38', '2024-08-01 07:53:38'),
(42, 37, 2, 1, 'product_variants/PBP1teIfEBjE5g176rUZRuHBRghtrV2TMeyQoFy2.jpg', 5, '2024-08-01 07:53:38', '2024-08-01 07:53:38'),
(43, 37, 3, 1, 'product_variants/jCZYSoHj2QiJ1v6N74bx7jY6b6Mefcmfq9CW8utb.png', 5, '2024-08-01 07:53:38', '2024-08-01 07:53:38'),
(44, 37, 4, 1, 'product_variants/PaLzzSphAf3gbNP2Z9CiHwaCOL0F2mNosWcZDFnj.jpg', 5, '2024-08-01 07:53:38', '2024-08-01 07:53:38'),
(45, 37, 1, 2, 'product_variants/TALT61dbNqNoQC2kIg4YijLvMhOSnTYSEhzisyUy.jpg', 5, '2024-08-01 07:53:38', '2024-08-01 07:53:38'),
(46, 37, 2, 2, 'product_variants/0u7ld71tTGHxp0XeWcYpgtbCjCRiDBdNDT7FaOvq.jpg', 5, '2024-08-01 07:53:38', '2024-08-01 07:53:38'),
(47, 37, 3, 2, 'product_variants/boVDbl1lfl7gI6ketdCzZr9DtZAAifDoN2WHzX7K.png', 5, '2024-08-01 07:53:38', '2024-08-01 07:53:38'),
(48, 37, 4, 2, 'product_variants/uI2diCAHyJGXaozpjA3YJtLirjjGxKx5BTAI2htU.jpg', 5, '2024-08-01 07:53:38', '2024-08-01 07:53:38'),
(49, 37, 1, 3, 'product_variants/4zJ6JYnghlr9AKhI9ulhPtQNyty9o83ibfLwj64B.jpg', 5, '2024-08-01 07:53:38', '2024-08-01 07:53:38'),
(50, 37, 2, 3, 'product_variants/Q15H6TlACsTptERFSGew5SkF9f9uSOV0H9Uo0ID6.jpg', 5, '2024-08-01 07:53:38', '2024-08-01 07:53:38'),
(51, 37, 3, 3, 'product_variants/KvIC5g1I0KLBxNbpo8JaUdM4kN5nyVSdVmK7nEWf.png', 5, '2024-08-01 07:53:38', '2024-08-01 07:53:38'),
(52, 37, 4, 3, 'product_variants/EwDeznz3gjTBBmS5Ut016aYWuIw3m7OZ8c5kv3eB.jpg', 5, '2024-08-01 07:53:38', '2024-08-01 07:53:38'),
(53, 37, 1, 4, 'product_variants/zkAbOw7WDBG2YxfdZJTU3jDq95hp0CCExzDEtbiv.jpg', 5, '2024-08-01 07:53:38', '2024-08-01 07:53:38'),
(54, 37, 2, 4, 'product_variants/668BGTyu0TTrhwgOantPn0jDcsgNw9tTeHI9pVpI.jpg', 5, '2024-08-01 07:53:38', '2024-08-01 07:53:38'),
(55, 37, 3, 4, 'product_variants/l9quCnwp7xKqMAapwNmmbCZFwyrxvsQd1pOCgDFH.png', 5, '2024-08-01 07:53:38', '2024-08-01 07:53:38'),
(56, 37, 4, 4, 'product_variants/Y6UilwdCt2L8pyzRh4c1ZjKdXW0qM18z9Kh9XUJw.jpg', 5, '2024-08-01 07:53:38', '2024-08-01 07:53:38'),
(57, 38, 1, 1, 'product_variants/CWjd4yxIdQaII9XuVCymOkIKbIUId7DnDNXOzsnJ.jpg', 5, '2024-08-01 07:58:55', '2024-08-01 07:58:55'),
(58, 38, 2, 1, 'product_variants/Kg3tpiexj3XDhVSDhoppHJ3z80lRtSvGpG3JPEIw.jpg', 5, '2024-08-01 07:58:55', '2024-08-01 07:58:55'),
(59, 38, 3, 1, 'product_variants/ZZbcZJ8nEHlQtG7Q2pFs3tkymiohEO7weT6mBqh3.png', 5, '2024-08-01 07:58:55', '2024-08-01 07:58:55'),
(60, 38, 4, 1, 'product_variants/oY0vvwxIgkrcBWqizObmf85n8gGisJnHRKZlrnFp.jpg', 5, '2024-08-01 07:58:55', '2024-08-01 07:58:55'),
(61, 38, 1, 2, 'product_variants/L7tWlNv1sQTQnhaFCdLUk8xjQQ6HFzhjxs2HwF1J.jpg', 5, '2024-08-01 07:58:55', '2024-08-01 07:58:55'),
(62, 38, 2, 2, 'product_variants/3C2mkYMOBQL0f5C0FANWydzKpg52kHfeSFQ2JlLW.jpg', 5, '2024-08-01 07:58:55', '2024-08-01 07:58:55'),
(63, 38, 3, 2, 'product_variants/l4Ej40KSqJC8NoffdLfrVwoXaaage7l0TWd5pvR7.png', 5, '2024-08-01 07:58:55', '2024-08-01 07:58:55'),
(64, 38, 4, 2, 'product_variants/Wi4sYqaydxhityxjrN2T3FyqENIaY1Z0xoqpiZ8e.jpg', 5, '2024-08-01 07:58:55', '2024-08-01 07:58:55'),
(65, 38, 1, 3, 'product_variants/LM3ijIfkeFHhhPblXGjQFilbJPw0tPWdIhkPIoZg.jpg', 5, '2024-08-01 07:58:55', '2024-08-01 07:58:55'),
(66, 38, 2, 3, 'product_variants/967E0yFUoyfU2SG0bwiTMmg5DFxgBcnPmG8MvVnf.jpg', 5, '2024-08-01 07:58:55', '2024-08-01 07:58:55'),
(67, 38, 3, 3, 'product_variants/Bwcm5h6sz144Z7imOUVC7UbJJZhpI9lmFNkCUhbS.png', 5, '2024-08-01 07:58:55', '2024-08-01 07:58:55'),
(68, 38, 4, 3, 'product_variants/xUgJMuj2Z6wTv6MmzXeKX0sWYDIqStelSKVHeX7V.jpg', 5, '2024-08-01 07:58:55', '2024-08-01 07:58:55'),
(69, 38, 1, 4, 'product_variants/u9iJgdRWwVMz6THe7lQyFgnNzIHJVCT4fqL3kLx6.jpg', 5, '2024-08-01 07:58:55', '2024-08-01 07:58:55'),
(70, 38, 2, 4, 'product_variants/24cIDHUMnvxaHkJb5ULZHxLHSZ2T0PCrG3jvCxqe.jpg', 5, '2024-08-01 07:58:55', '2024-08-01 07:58:55'),
(71, 38, 3, 4, 'product_variants/peqMmd9qYns63Y0uuFxhkMp9OhqZprS1d1PWHPnG.png', 5, '2024-08-01 07:58:55', '2024-08-01 07:58:55'),
(72, 38, 4, 4, 'product_variants/ArcuwFRtR0sZK6tCcF14VyxLlIlVWX0uWZ7pjsPa.jpg', 5, '2024-08-01 07:58:55', '2024-08-01 07:58:55'),
(73, 39, 1, 1, 'product_variants/niezEqpI6naaI64Ov1PJdsyBaUFIdVKsgRMuiLsg.jpg', 5, '2024-08-01 08:02:39', '2024-08-01 08:02:39'),
(74, 39, 2, 1, 'product_variants/BLn0p1tXJjdaMR0aO0Vw3BtPLHiylSW3IeabpbmG.jpg', 5, '2024-08-01 08:02:39', '2024-08-01 08:02:39'),
(75, 39, 3, 1, 'product_variants/doVwkoFCW0z3buhY8gE57bSIPhKPGACepiEpjNFz.png', 5, '2024-08-01 08:02:39', '2024-08-01 08:02:39'),
(76, 39, 4, 1, 'product_variants/dnl0Op8WMreDbhTwS1inMEn44mjJHv4nUP3cRAqQ.jpg', 5, '2024-08-01 08:02:39', '2024-08-01 08:02:39'),
(77, 39, 1, 2, 'product_variants/imQWUB7jXR5PfVcZd6WaQfM1m2gL9KlcXOmLTlEa.jpg', 5, '2024-08-01 08:02:39', '2024-08-01 08:02:39'),
(78, 39, 2, 2, 'product_variants/zuDnHiNZdqU1bkkx9jw2hdC0ceM4nsDWewqZ6czT.jpg', 5, '2024-08-01 08:02:39', '2024-08-01 08:02:39'),
(79, 39, 3, 2, 'product_variants/V86RSlYsBkH3u3ZpGB5Sg8jCum01H8XzNxF3hOCy.png', 5, '2024-08-01 08:02:39', '2024-08-01 08:02:39'),
(80, 39, 4, 2, 'product_variants/PO9i4UEsL5zbw8OHti2zekkyQ3htGYs5BHcwsHo4.jpg', 5, '2024-08-01 08:02:39', '2024-08-01 08:02:39'),
(81, 39, 1, 3, 'product_variants/pUZiMekGDasWL0byW6v7LWqjx6wQHBWzEfCnYlpD.jpg', 5, '2024-08-01 08:02:39', '2024-08-01 08:02:39'),
(82, 39, 2, 3, 'product_variants/sDiBVeKxxEvxQlfLa5HZYPug2yCOsLC01VvBNYT2.jpg', 5, '2024-08-01 08:02:39', '2024-08-01 08:02:39'),
(83, 39, 3, 3, 'product_variants/XWpKsGfLuMhyXUzF1keROa6HoBJkCc3bQInk7YT0.png', 5, '2024-08-01 08:02:39', '2024-08-01 08:02:39'),
(84, 39, 4, 3, 'product_variants/8I1gKWN04CnDRWpAUWKW35RakmAg4sseROxz1gi6.jpg', 5, '2024-08-01 08:02:39', '2024-08-01 08:02:39'),
(85, 39, 1, 4, 'product_variants/NqvALnVviKOe7SlP2CJxAQoJithvuOhTo2gI6ceB.jpg', 5, '2024-08-01 08:02:39', '2024-08-01 08:02:39'),
(86, 39, 2, 4, 'product_variants/yDRX0OxY1FjXGmi3O1sh4wZL5Zh4DJftdyffYf1T.jpg', 5, '2024-08-01 08:02:39', '2024-08-01 08:02:39'),
(87, 39, 3, 4, 'product_variants/tKrHbr0aunT8xDhLr1EaGbkLkfa1w4DcASzPMraz.png', 5, '2024-08-01 08:02:39', '2024-08-01 08:02:39'),
(88, 39, 4, 4, 'product_variants/hWgiwAsr851WAs0v0lgt00JKoQ957ENXTVjdArWG.jpg', 5, '2024-08-01 08:02:39', '2024-08-01 08:02:39'),
(89, 40, 1, 1, 'product_variants/szcyttvbxBYkoAGoazQRrXI6q7B7iyAeH6IVTyad.jpg', 5, '2024-08-01 08:05:25', '2024-08-01 08:05:25'),
(90, 40, 2, 1, 'product_variants/lhHe4ffr1I2LHCZ1cIgke09HXycpyjSDKfHnfvCj.jpg', 5, '2024-08-01 08:05:25', '2024-08-01 08:05:25'),
(91, 40, 3, 1, 'product_variants/XeMjau2pS3elsN1k0OPslYZ47IbKgfpC7seDal1X.png', 5, '2024-08-01 08:05:25', '2024-08-01 08:05:25'),
(92, 40, 4, 1, 'product_variants/lOcd9qnDs6YhtdF319keHsJIy7YQvsGbd94hUsGC.jpg', 5, '2024-08-01 08:05:25', '2024-08-01 08:05:25'),
(93, 40, 1, 2, 'product_variants/JAVgELtEBmaLVHoVrQl6iuXfZEf8hKNxEjDvJaeq.jpg', 5, '2024-08-01 08:05:25', '2024-08-01 08:05:25'),
(94, 40, 2, 2, 'product_variants/MvdvFR000UPrn89GFQeJhxV2CyVpOVB7PjfcarrW.jpg', 5, '2024-08-01 08:05:25', '2024-08-01 08:05:25'),
(95, 40, 3, 2, 'product_variants/I54VPj4Z8nAPmdqWWxpdNt2uPC4SfxFUXX5EYOjD.png', 5, '2024-08-01 08:05:25', '2024-08-01 08:05:25'),
(96, 40, 4, 2, 'product_variants/I5tmeoHqu2lDvaxNY4bQJJWXFUs5etiZPB3FEXUU.jpg', 5, '2024-08-01 08:05:25', '2024-08-01 08:05:25'),
(97, 40, 1, 3, 'product_variants/C74FTy9lzJpSSjULFywVUBFphJqXUa8o9grFLOkx.jpg', 5, '2024-08-01 08:05:25', '2024-08-01 08:05:25'),
(98, 40, 2, 3, 'product_variants/8nxuqiGjbwheKvTzXvXSOEkeUuyIpSwIOzEJiy9w.jpg', 5, '2024-08-01 08:05:25', '2024-08-01 08:05:25'),
(99, 40, 3, 3, 'product_variants/cmiS7mQLC3jRAJN0sfu7LmBNdJ6up85FzsQjFFiy.png', 5, '2024-08-01 08:05:25', '2024-08-01 08:05:25'),
(100, 40, 4, 3, 'product_variants/S40JNL2X535aucWf7fidUVkX9gVhHpWaQXnzN0sx.jpg', 5, '2024-08-01 08:05:25', '2024-08-01 08:05:25'),
(101, 40, 1, 4, 'product_variants/TDR9IvP2U5muhlKXnI55AxxUDpvDCvKeI4yZv50q.jpg', 5, '2024-08-01 08:05:25', '2024-08-01 08:05:25'),
(102, 40, 2, 4, 'product_variants/dfTRyMCofs1j3c05W0qyaAAaGXtawPbiYDa94imz.jpg', 5, '2024-08-01 08:05:25', '2024-08-01 08:05:25'),
(103, 40, 3, 4, 'product_variants/n3kGcmedty5O0GsdJL11fqhETNtzztemp0FCSbYG.png', 5, '2024-08-01 08:05:25', '2024-08-01 08:05:25'),
(104, 40, 4, 4, 'product_variants/2DF4GwW9e3jLc4fCIP3q45OFZXIcJi2jfDBUneZd.jpg', 5, '2024-08-01 08:05:25', '2024-08-01 08:05:25');

-- --------------------------------------------------------

--
-- Table structure for table `promotions`
--

CREATE TABLE `promotions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount_amount` decimal(8,2) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `promotions`
--

INSERT INTO `promotions` (`id`, `name`, `discount_amount`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(2, 'sale30', '0.30', '2024-08-02', '2024-08-10', '2024-08-02 10:06:19', '2024-08-02 10:17:12'),
(3, 'sale50', '0.50', '2024-08-01', '2024-08-11', '2024-08-02 10:09:16', '2024-08-02 10:09:16'),
(4, 'sale60', '0.60', '2024-08-10', '2024-08-15', '2024-08-02 10:11:02', '2024-08-02 10:11:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'member'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `type`) VALUES
(1, 'Nguyễn Văn Hướng', 'huongnvph34607@fpt.edu.vn', NULL, '$2y$12$2FDKKOgY81sPfpPybgKogOfG0dOrZrM.6Iek9mw0VFSJ7cpCZ42BK', NULL, '2024-08-01 21:02:58', '2024-08-01 21:02:58', 'member'),
(2, 'huong123', 'longquach105@gmail.com', NULL, '$2y$12$SN/D/kSKvSYJUAuYijHpaOLuQmYAT4X0PvUHURXfi9UyJhaRwdWde', NULL, '2024-08-02 01:08:08', '2024-08-02 01:08:08', 'member'),
(3, 'huong1', 'Cuong@admin.com', NULL, '$2y$12$6diGVzo0nYFrMJbADF6/NO9b2v7OJR6Cmcjnk4aqk8Sd8MeQ3alBK', NULL, '2024-08-02 01:09:28', '2024-08-02 01:09:28', 'member'),
(4, 'huong2', 'baoAnh@gmail.com', NULL, '$2y$12$rxttCrNv9mleohUoY/wAbeRNLh8ZblyYGg/DfciTPijFj1voYbciC', NULL, '2024-08-02 01:10:10', '2024-08-02 01:10:10', 'member'),
(5, 'admin', 'admin123@gmail.com', NULL, '$2y$12$QKXTrM7GJ1pol1EhhmfEIOW9g.fVyCYnn9xkJ/cYjTyAXLodwRHs.', NULL, '2024-08-02 18:41:21', '2024-08-02 18:41:21', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`);

--
-- Indexes for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_items_cart_id_foreign` (`cart_id`),
  ADD KEY `cart_items_product_variant_id_foreign` (`product_variant_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_product_variant_id_foreign` (`product_variant_id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD UNIQUE KEY `products_sku_unique` (`sku`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `product_colors`
--
ALTER TABLE `product_colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_galleries`
--
ALTER TABLE `product_galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_galleries_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_sizes`
--
ALTER TABLE `product_sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_variants`
--
ALTER TABLE `product_variants`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_variant_unique` (`product_id`,`product_color_id`,`product_size_id`),
  ADD KEY `product_variants_product_color_id_foreign` (`product_color_id`),
  ADD KEY `product_variants_product_size_id_foreign` (`product_size_id`);

--
-- Indexes for table `promotions`
--
ALTER TABLE `promotions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `product_colors`
--
ALTER TABLE `product_colors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_galleries`
--
ALTER TABLE `product_galleries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_sizes`
--
ALTER TABLE `product_sizes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_variants`
--
ALTER TABLE `product_variants`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `promotions`
--
ALTER TABLE `promotions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD CONSTRAINT `cart_items_cart_id_foreign` FOREIGN KEY (`cart_id`) REFERENCES `carts` (`id`),
  ADD CONSTRAINT `cart_items_product_variant_id_foreign` FOREIGN KEY (`product_variant_id`) REFERENCES `product_variants` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_items_product_variant_id_foreign` FOREIGN KEY (`product_variant_id`) REFERENCES `product_variants` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `product_galleries`
--
ALTER TABLE `product_galleries`
  ADD CONSTRAINT `product_galleries_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `product_variants`
--
ALTER TABLE `product_variants`
  ADD CONSTRAINT `product_variants_product_color_id_foreign` FOREIGN KEY (`product_color_id`) REFERENCES `product_colors` (`id`),
  ADD CONSTRAINT `product_variants_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `product_variants_product_size_id_foreign` FOREIGN KEY (`product_size_id`) REFERENCES `product_sizes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
