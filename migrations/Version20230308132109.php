<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230308132109 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE images ADD CONSTRAINT FK_E01FBE6AA05DD37A FOREIGN KEY (dishes_id) REFERENCES dish (id)');
        $this->addSql('CREATE INDEX IDX_E01FBE6AA05DD37A ON images (dishes_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE images DROP FOREIGN KEY FK_E01FBE6AA05DD37A');
        $this->addSql('DROP INDEX IDX_E01FBE6AA05DD37A ON images');
    }
}
