<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20261009094844 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE pays (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) DEFAULT NULL, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('ALTER TABLE serie ADD le_pays_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE serie ADD CONSTRAINT FK_AA3A9334892B3433 FOREIGN KEY (le_pays_id) REFERENCES pays (id)');
        $this->addSql('CREATE INDEX IDX_AA3A9334892B3433 ON serie (le_pays_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE pays');
        $this->addSql('ALTER TABLE serie DROP FOREIGN KEY FK_AA3A9334892B3433');
        $this->addSql('DROP INDEX IDX_AA3A9334892B3433 ON serie');
        $this->addSql('ALTER TABLE serie DROP le_pays_id');
    }
}
