<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210923172123 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE team ADD conference_id INT NOT NULL, ADD division_id INT NOT NULL');
        $this->addSql('ALTER TABLE team ADD CONSTRAINT FK_C4E0A61F604B8382 FOREIGN KEY (conference_id) REFERENCES conference (id)');
        $this->addSql('ALTER TABLE team ADD CONSTRAINT FK_C4E0A61F41859289 FOREIGN KEY (division_id) REFERENCES division (id)');
        $this->addSql('CREATE INDEX IDX_C4E0A61F604B8382 ON team (conference_id)');
        $this->addSql('CREATE INDEX IDX_C4E0A61F41859289 ON team (division_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE team DROP FOREIGN KEY FK_C4E0A61F604B8382');
        $this->addSql('ALTER TABLE team DROP FOREIGN KEY FK_C4E0A61F41859289');
        $this->addSql('DROP INDEX IDX_C4E0A61F604B8382 ON team');
        $this->addSql('DROP INDEX IDX_C4E0A61F41859289 ON team');
        $this->addSql('ALTER TABLE team DROP conference_id, DROP division_id');
    }
}
