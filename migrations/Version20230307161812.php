<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230307161812 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE opening_hours ADD opened_lunch_hour TIME NOT NULL, ADD opened_dinner_hour TIME NOT NULL, ADD closed_lunch_hour TIME NOT NULL, ADD closed_dinner_hour TIME NOT NULL, DROP opening_time, DROP closing_time');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE opening_hours ADD opening_time TIME NOT NULL, ADD closing_time TIME NOT NULL, DROP opened_lunch_hour, DROP opened_dinner_hour, DROP closed_lunch_hour, DROP closed_dinner_hour');
    }
}
