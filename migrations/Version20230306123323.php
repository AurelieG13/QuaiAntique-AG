<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230306123323 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE formule DROP FOREIGN KEY FK_605C9C9837AC24DC');
        $this->addSql('ALTER TABLE formule DROP FOREIGN KEY FK_605C9C98CCD7E912');
        $this->addSql('ALTER TABLE formule_menu DROP FOREIGN KEY FK_369BC4362A68F4D1');
        $this->addSql('ALTER TABLE formule_menu DROP FOREIGN KEY FK_369BC436CCD7E912');
        $this->addSql('ALTER TABLE menu3 DROP FOREIGN KEY FK_4A9495F2A68F4D1');
        $this->addSql('ALTER TABLE menus4_formule DROP FOREIGN KEY FK_A8C3A3962A68F4D1');
        $this->addSql('ALTER TABLE menus4_formule DROP FOREIGN KEY FK_A8C3A396B739E83');
        $this->addSql('DROP TABLE formule');
        $this->addSql('DROP TABLE formule2');
        $this->addSql('DROP TABLE formule_menu');
        $this->addSql('DROP TABLE menu');
        $this->addSql('DROP TABLE menu2');
        $this->addSql('DROP TABLE menu3');
        $this->addSql('DROP TABLE menus4');
        $this->addSql('DROP TABLE menus4_formule');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE formule (id INT AUTO_INCREMENT NOT NULL, menu_id INT DEFAULT NULL, menu2_id INT DEFAULT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, description VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, price DOUBLE PRECISION NOT NULL, INDEX IDX_605C9C9837AC24DC (menu2_id), INDEX IDX_605C9C98CCD7E912 (menu_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE formule2 (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, description LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, price DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE formule_menu (formule_id INT NOT NULL, menu_id INT NOT NULL, INDEX IDX_369BC4362A68F4D1 (formule_id), INDEX IDX_369BC436CCD7E912 (menu_id), PRIMARY KEY(formule_id, menu_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE menu (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE menu2 (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE menu3 (id INT AUTO_INCREMENT NOT NULL, formule_id INT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_4A9495F2A68F4D1 (formule_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE menus4 (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE menus4_formule (menus4_id INT NOT NULL, formule_id INT NOT NULL, INDEX IDX_A8C3A396B739E83 (menus4_id), INDEX IDX_A8C3A3962A68F4D1 (formule_id), PRIMARY KEY(menus4_id, formule_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE formule ADD CONSTRAINT FK_605C9C9837AC24DC FOREIGN KEY (menu2_id) REFERENCES menu2 (id)');
        $this->addSql('ALTER TABLE formule ADD CONSTRAINT FK_605C9C98CCD7E912 FOREIGN KEY (menu_id) REFERENCES menu (id)');
        $this->addSql('ALTER TABLE formule_menu ADD CONSTRAINT FK_369BC4362A68F4D1 FOREIGN KEY (formule_id) REFERENCES formule (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE formule_menu ADD CONSTRAINT FK_369BC436CCD7E912 FOREIGN KEY (menu_id) REFERENCES menu (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE menu3 ADD CONSTRAINT FK_4A9495F2A68F4D1 FOREIGN KEY (formule_id) REFERENCES formule (id)');
        $this->addSql('ALTER TABLE menus4_formule ADD CONSTRAINT FK_A8C3A3962A68F4D1 FOREIGN KEY (formule_id) REFERENCES formule (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE menus4_formule ADD CONSTRAINT FK_A8C3A396B739E83 FOREIGN KEY (menus4_id) REFERENCES menus4 (id) ON DELETE CASCADE');
    }
}
