<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240320123653 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE customer (id INT AUTO_INCREMENT NOT NULL, compte_affaire VARCHAR(255) DEFAULT NULL, business_account VARCHAR(255) NOT NULL, event_account VARCHAR(255) NOT NULL, last_event_account VARCHAR(255) NOT NULL, file_number INT NOT NULL, civility VARCHAR(255) DEFAULT NULL, current_owner VARCHAR(255) DEFAULT NULL, name VARCHAR(255) NOT NULL, firstname VARCHAR(255) DEFAULT NULL, road_information VARCHAR(255) DEFAULT NULL, postcode INT NOT NULL, city VARCHAR(255) NOT NULL, home_phone_number INT DEFAULT NULL, mobile_phone_number INT DEFAULT NULL, job_phone_number INT DEFAULT NULL, email VARCHAR(255) DEFAULT NULL, registration_date DATE DEFAULT NULL, purchase_date DATE DEFAULT NULL, last_event_date DATE DEFAULT NULL, make VARCHAR(255) DEFAULT NULL, model VARCHAR(255) DEFAULT NULL, version VARCHAR(255) DEFAULT NULL, vin VARCHAR(255) DEFAULT NULL, registration VARCHAR(255) DEFAULT NULL, type VARCHAR(255) DEFAULT NULL, mileage INT DEFAULT NULL, vn_seller VARCHAR(255) DEFAULT NULL, vo_seller VARCHAR(255) DEFAULT NULL, commentary VARCHAR(255) DEFAULT NULL, type_seller VARCHAR(255) DEFAULT NULL, seller_file_number VARCHAR(255) DEFAULT NULL, event_date DATE DEFAULT NULL, origin_event VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE customer');
    }
}
