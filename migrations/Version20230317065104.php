<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230317065104 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE booking (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, seats INT NOT NULL, date_booking DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', time_booking TIME NOT NULL COMMENT \'(DC2Type:time_immutable)\', created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_E00CEDDEA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE booking_allergy (booking_id INT NOT NULL, allergy_id INT NOT NULL, INDEX IDX_910F07953301C60 (booking_id), INDEX IDX_910F0795DBFD579D (allergy_id), PRIMARY KEY(booking_id, allergy_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE booking ADD CONSTRAINT FK_E00CEDDEA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE booking_allergy ADD CONSTRAINT FK_910F07953301C60 FOREIGN KEY (booking_id) REFERENCES booking (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE booking_allergy ADD CONSTRAINT FK_910F0795DBFD579D FOREIGN KEY (allergy_id) REFERENCES allergy (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE booking DROP FOREIGN KEY FK_E00CEDDEA76ED395');
        $this->addSql('ALTER TABLE booking_allergy DROP FOREIGN KEY FK_910F07953301C60');
        $this->addSql('ALTER TABLE booking_allergy DROP FOREIGN KEY FK_910F0795DBFD579D');
        $this->addSql('DROP TABLE booking');
        $this->addSql('DROP TABLE booking_allergy');
    }
}
