-- Verwijder database Mvc_smartphone_2408C
DROP DATABASE IF EXISTS `Mvc_sneakers_2408C`;

-- Maak een nieuwe database aan Mvc_smartphone_2408C
CREATE DATABASE `Mvc_sneakers_2408C`;

-- Gebruik database Mvc_smartphone_2408C
USE `Mvc_sneakers_2408C`;

CREATE TABLE Sneakers
(
     Id                 SMALLINT        UNSIGNED    NOT NULL        AUTO_INCREMENT
    ,Merk               VARCHAR(50)                 NOT NULL
    ,Model              VARCHAR(50)                 NOT NULL	
    ,IsActief           BIT                         NOT NULL        DEFAULT 1
    ,Opmerking          VARCHAR(255)                    NULL        DEFAULT NULL
    ,DatumAangemaakt    DATETIME(6)                 NOT NULL
    ,DatumGewijzigd     DATETIME(6)                 NOT NULL
    ,CONSTRAINT         PK_Smartphones_Id    PRIMARY KEY     CLUSTERED(Id)
) ENGINE=InnoDB;

-- Step: 04
-- *****************************************************************
-- Doel : Vul de tabel Sneakers met gegevens
-- *****************************************************************
-- Versie       Datum           Auteur              Omschrijving
-- ******       *****           ******              ************
-- 01           18-02-2025      Arjan de Ruijter    Vulling Sneakers
-- *****************************************************************

INSERT INTO Sneakers
(
      Merk
     ,Model
     ,IsActief
     ,Opmerking
     ,DatumAangemaakt
     ,DatumGewijzigd
)
VALUES
 ('Nike', 'Air Jordan 1', 1, NULL, SYSDATE(6), SYSDATE(6)),
 ('Adidas', 'Yeezy Boost 350', 1, NULL, SYSDATE(6), SYSDATE(6)),
 ('New Balance', '9060', 1, NULL, SYSDATE(6), SYSDATE(6));