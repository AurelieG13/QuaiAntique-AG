<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230306110142 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE formule2 (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, price DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE menu2 (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE menu3 (id INT AUTO_INCREMENT NOT NULL, formule_id INT NOT NULL, name VARCHAR(255) NOT NULL, INDEX IDX_4A9495F2A68F4D1 (formule_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE menu3 ADD CONSTRAINT FK_4A9495F2A68F4D1 FOREIGN KEY (formule_id) REFERENCES formule (id)');
        $this->addSql('ALTER TABLE formule ADD menu2_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE formule ADD CONSTRAINT FK_605C9C9837AC24DC FOREIGN KEY (menu2_id) REFERENCES menu2 (id)');
        $this->addSql('CREATE INDEX IDX_605C9C9837AC24DC ON formule (menu2_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE formule DROP FOREIGN KEY FK_605C9C9837AC24DC');
        $this->addSql('ALTER TABLE menu3 DROP FOREIGN KEY FK_4A9495F2A68F4D1');
        $this->addSql('DROP TABLE formule2');
        $this->addSql('DROP TABLE menu2');
        $this->addSql('DROP TABLE menu3');
        $this->addSql('DROP INDEX IDX_605C9C9837AC24DC ON formule');
        $this->addSql('ALTER TABLE formule DROP menu2_id');
    }
}
