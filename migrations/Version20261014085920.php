<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20261014085920 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE serie DROP FOREIGN KEY `FK_AA3A9334892B3433`');
        $this->addSql('DROP INDEX IDX_AA3A9334892B3433 ON serie');
        $this->addSql('ALTER TABLE serie CHANGE le_pays_id idPays INT DEFAULT NULL');
        $this->addSql('ALTER TABLE serie ADD CONSTRAINT FK_AA3A933447626230 FOREIGN KEY (idPays) REFERENCES pays (id)');
        $this->addSql('CREATE INDEX IDX_AA3A933447626230 ON serie (idPays)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE serie DROP FOREIGN KEY FK_AA3A933447626230');
        $this->addSql('DROP INDEX IDX_AA3A933447626230 ON serie');
        $this->addSql('ALTER TABLE serie CHANGE idPays le_pays_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE serie ADD CONSTRAINT `FK_AA3A9334892B3433` FOREIGN KEY (le_pays_id) REFERENCES pays (id)');
        $this->addSql('CREATE INDEX IDX_AA3A9334892B3433 ON serie (le_pays_id)');
    }
}
