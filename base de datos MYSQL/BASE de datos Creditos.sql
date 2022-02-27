-- MySQL Workbench Forward Engineering

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
SHOW WARNINGS;
-- -----------------------------------------------------
-- Schema creditos
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `creditos` ;

-- -----------------------------------------------------
-- Schema creditos
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `creditos` DEFAULT CHARACTER SET utf8mb4 ;
SHOW WARNINGS;
USE `creditos` ;

-- -----------------------------------------------------
-- Table `billeteras`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `billeteras` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `billeteras` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `NombreBilletera` VARCHAR(255) NOT NULL,
  `ValorTotal` VARCHAR(255) NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `rutas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `rutas` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `rutas` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `NombreRuta` VARCHAR(255) NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `clientes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `clientes` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `TipoDocumento` VARCHAR(255) NOT NULL,
  `NDocumento` VARCHAR(255) NOT NULL,
  `FechaExpedicion` VARCHAR(255) NOT NULL,
  `LugarExpedicion` VARCHAR(255) NOT NULL,
  `FechaNacimiento` VARCHAR(255) NOT NULL,
  `LugarNacimiento` VARCHAR(255) NOT NULL,
  `TipoCliente` VARCHAR(255) NOT NULL,
  `PrimerNombre` VARCHAR(255) NOT NULL,
  `SegundoNombre` VARCHAR(255) NOT NULL,
  `PrimerApellido` VARCHAR(255) NOT NULL,
  `SegundoApellido` VARCHAR(255) NOT NULL,
  `Sexo` VARCHAR(255) NOT NULL,
  `EstadoCivil` VARCHAR(255) NOT NULL,
  `NivelEducativo` VARCHAR(255) NOT NULL,
  `DeclaracionRenta` VARCHAR(255) NOT NULL,
  `DireccionCobro` VARCHAR(255) NOT NULL,
  `BarrioCobro` VARCHAR(255) NOT NULL,
  `DirrecionResidencia` VARCHAR(255) NOT NULL,
  `BarrioResidencia` VARCHAR(255) NOT NULL,
  `TelefonoResidencia` VARCHAR(255) NOT NULL,
  `TelefonoAdicional` VARCHAR(255) NOT NULL,
  `Celular` VARCHAR(255) NOT NULL,
  `CelularAdicionar` VARCHAR(255) NOT NULL,
  `Email` VARCHAR(255) NOT NULL,
  `PersonaAcargo` VARCHAR(255) NOT NULL,
  `TipoVivienda` VARCHAR(255) NOT NULL,
  `Estrato` VARCHAR(255) NOT NULL,
  `NombreArredandor` VARCHAR(255) NOT NULL,
  `NumeroArredando` VARCHAR(255) NOT NULL,
  `Zona` VARCHAR(255) NOT NULL,
  `Banco` VARCHAR(255) NOT NULL,
  `NumeroCuenta` VARCHAR(255) NOT NULL,
  `observaciones` VARCHAR(255) NOT NULL,
  `Ruta` BIGINT(20) UNSIGNED NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `clientes_ruta_foreign` (`Ruta` ASC) ,
  CONSTRAINT `clientes_ruta_foreign`
    FOREIGN KEY (`Ruta`)
    REFERENCES `rutas` (`id`)
    ON DELETE CASCADE)
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `creditos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `creditos` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `creditos` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `TipoCredito` VARCHAR(255) NOT NULL,
  `FechaInicio` TIME NOT NULL,
  `FechaCancelacion` TIME NOT NULL,
  `NumeroCuotas` VARCHAR(255) NOT NULL,
  `NumeroCuotasCancelada` VARCHAR(255) NOT NULL,
  `UltimaCuota` VARCHAR(255) NOT NULL,
  `ValorTotalCredito` VARCHAR(255) NOT NULL,
  `EstadoCredito` VARCHAR(255) NOT NULL,
  `Porcentaje` VARCHAR(255) NOT NULL,
  `BilleteraSalida` BIGINT(20) UNSIGNED NOT NULL,
  `BilleteraEntrada` BIGINT(20) UNSIGNED NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `creditos_billeterasalida_foreign` (`BilleteraSalida` ASC) ,
  INDEX `creditos_billeteraentrada_foreign` (`BilleteraEntrada` ASC) ,
  CONSTRAINT `creditos_billeteraentrada_foreign`
    FOREIGN KEY (`BilleteraEntrada`)
    REFERENCES `billeteras` (`id`)
    ON DELETE CASCADE,
  CONSTRAINT `creditos_billeterasalida_foreign`
    FOREIGN KEY (`BilleteraSalida`)
    REFERENCES `billeteras` (`id`)
    ON DELETE CASCADE)
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `failed_jobs`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `failed_jobs` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` VARCHAR(255) NOT NULL,
  `connection` TEXT NOT NULL,
  `queue` TEXT NOT NULL,
  `payload` LONGTEXT NOT NULL,
  `exception` LONGTEXT NOT NULL,
  `failed_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  PRIMARY KEY (`id`),
  UNIQUE INDEX `failed_jobs_uuid_unique` (`uuid` ASC) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `ingresos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ingresos` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `ingresos` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `NombreIngresos` VARCHAR(255) NOT NULL,
  `CodigoIngresos` VARCHAR(255) NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `ingresoscaja`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ingresoscaja` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `ingresoscaja` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Obsevacion` VARCHAR(255) NOT NULL,
  `TipoIngresos` BIGINT(20) UNSIGNED NOT NULL,
  `Billetera` BIGINT(20) UNSIGNED NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `ingresoscaja_tipoingresos_foreign` (`TipoIngresos` ASC) ,
  INDEX `ingresoscaja_billetera_foreign` (`Billetera` ASC) ,
  CONSTRAINT `ingresoscaja_billetera_foreign`
    FOREIGN KEY (`Billetera`)
    REFERENCES `billeteras` (`id`)
    ON DELETE CASCADE,
  CONSTRAINT `ingresoscaja_tipoingresos_foreign`
    FOREIGN KEY (`TipoIngresos`)
    REFERENCES `ingresos` (`id`)
    ON DELETE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `logitud_latitud`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `logitud_latitud` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `logitud_latitud` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Logitud` VARCHAR(255) NOT NULL,
  `Latitud` VARCHAR(255) NOT NULL,
  `Rutas` BIGINT(20) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `logitud_latitud_rutas_foreign` (`Rutas` ASC) ,
  CONSTRAINT `logitud_latitud_rutas_foreign`
    FOREIGN KEY (`Rutas`)
    REFERENCES `rutas` (`id`)
    ON DELETE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `migrations`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `migrations` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` VARCHAR(255) NOT NULL,
  `batch` INT(11) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 13
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `pagos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `pagos` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `pagos` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Cliente` BIGINT(20) UNSIGNED NOT NULL,
  `Credito` BIGINT(20) UNSIGNED NOT NULL,
  `BilleteraPago` BIGINT(20) UNSIGNED NOT NULL,
  `FechaPago` TIME NOT NULL,
  `Valor` VARCHAR(255) NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `pagos_billeterapago_foreign` (`BilleteraPago` ASC) ,
  INDEX `pagos_cliente_foreign` (`Cliente` ASC) ,
  INDEX `pagos_credito_foreign` (`Credito` ASC) ,
  CONSTRAINT `pagos_billeterapago_foreign`
    FOREIGN KEY (`BilleteraPago`)
    REFERENCES `billeteras` (`id`)
    ON DELETE CASCADE,
  CONSTRAINT `pagos_cliente_foreign`
    FOREIGN KEY (`Cliente`)
    REFERENCES `clientes` (`id`)
    ON DELETE CASCADE,
  CONSTRAINT `pagos_credito_foreign`
    FOREIGN KEY (`Credito`)
    REFERENCES `creditos` (`id`)
    ON DELETE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `password_resets`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `password_resets` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` VARCHAR(255) NOT NULL,
  `token` VARCHAR(255) NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  INDEX `password_resets_email_index` (`email` ASC) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `personal_access_tokens`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `personal_access_tokens` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` VARCHAR(255) NOT NULL,
  `tokenable_id` BIGINT(20) UNSIGNED NOT NULL,
  `name` VARCHAR(255) NOT NULL,
  `token` VARCHAR(64) NOT NULL,
  `abilities` TEXT NULL DEFAULT NULL,
  `last_used_at` TIMESTAMP NULL DEFAULT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `personal_access_tokens_token_unique` (`token` ASC) ,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type` ASC, `tokenable_id` ASC) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `users` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `users` (
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `email_verified_at` TIMESTAMP NULL DEFAULT NULL,
  `password` VARCHAR(255) NOT NULL,
  `remember_token` VARCHAR(100) NULL DEFAULT NULL,
  `created_at` TIMESTAMP NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `users_email_unique` (`email` ASC) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4
COLLATE = utf8mb4_unicode_ci;

SHOW WARNINGS;

