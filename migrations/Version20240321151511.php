<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240321151511 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE customer ADD energy VARCHAR(255) DEFAULT NULL, CHANGE business_account business_account VARCHAR(255) NOT NULL, CHANGE event_account event_account VARCHAR(255) NOT NULL, CHANGE last_event_account last_event_account VARCHAR(255) NOT NULL, CHANGE file_number file_number INT NOT NULL, CHANGE name name VARCHAR(255) NOT NULL, CHANGE postcode postcode INT NOT NULL, CHANGE city city VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE customer DROP energy, CHANGE business_account business_account VARCHAR(255) DEFAULT NULL, CHANGE event_account event_account VARCHAR(255) DEFAULT NULL, CHANGE last_event_account last_event_account VARCHAR(255) DEFAULT NULL, CHANGE file_number file_number INT DEFAULT NULL, CHANGE name name VARCHAR(255) DEFAULT NULL, CHANGE postcode postcode INT DEFAULT NULL, CHANGE city city VARCHAR(255) DEFAULT NULL');
    }
}
