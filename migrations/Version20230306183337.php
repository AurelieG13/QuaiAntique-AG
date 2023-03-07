<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230306183337 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE formules_menus (menu_id INT NOT NULL, formule_id INT NOT NULL, INDEX IDX_79256B92CCD7E912 (menu_id), INDEX IDX_79256B922A68F4D1 (formule_id), PRIMARY KEY(menu_id, formule_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE formules_menus ADD CONSTRAINT FK_79256B92CCD7E912 FOREIGN KEY (menu_id) REFERENCES menu (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE formules_menus ADD CONSTRAINT FK_79256B922A68F4D1 FOREIGN KEY (formule_id) REFERENCES formule (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE menu DROP FOREIGN KEY FK_7D053A932A68F4D1');
        $this->addSql('DROP INDEX IDX_7D053A932A68F4D1 ON menu');
        $this->addSql('ALTER TABLE menu DROP formule_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE formules_menus DROP FOREIGN KEY FK_79256B92CCD7E912');
        $this->addSql('ALTER TABLE formules_menus DROP FOREIGN KEY FK_79256B922A68F4D1');
        $this->addSql('DROP TABLE formules_menus');
        $this->addSql('ALTER TABLE menu ADD formule_id INT NOT NULL');
        $this->addSql('ALTER TABLE menu ADD CONSTRAINT FK_7D053A932A68F4D1 FOREIGN KEY (formule_id) REFERENCES formule (id)');
        $this->addSql('CREATE INDEX IDX_7D053A932A68F4D1 ON menu (formule_id)');
    }
}
