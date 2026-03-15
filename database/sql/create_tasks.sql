-- Executar:
-- "mysql -u root -p < database/sql/create_tasks.sql"

-- Criar banco de dados:
CREATE DATABASE IF NOT EXISTS `taskflow`;

USE `taskflow`;

-- Criar tabela:
CREATE TABLE IF NOT EXISTS`tasks` (
    `id` bigint unsigned NOT NULL AUTO_INCREMENT,
    `title` varchar(255) NOT NULL,
    `description` text DEFAULT NULL,
    `status` enum('pendente', 'concluida') NOT NULL DEFAULT 'pendente',
    `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,

    -- Criar índices:
    PRIMARY KEY (`id`),
    KEY `tasks_status_index` (`status`),
    KEY `tasks_created_at_index` (`created_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
