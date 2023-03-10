<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230310180632 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE restaurant ADD address VARCHAR(255) NOT NULL, ADD phone_number VARCHAR(10) NOT NULL');
        $this->addSql('ALTER TABLE user CHANGE name name VARCHAR(50) NOT NULL, CHANGE firstname firstname VARCHAR(50) NOT NULL, CHANGE phone_number phone_number VARCHAR(10) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE restaurant DROP address, DROP phone_number');
        $this->addSql('ALTER TABLE user CHANGE name name VARCHAR(100) NOT NULL, CHANGE firstname firstname VARCHAR(100) NOT NULL, CHANGE phone_number phone_number VARCHAR(30) DEFAULT NULL');
    }
}
