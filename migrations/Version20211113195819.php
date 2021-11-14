<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211113195819 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE game (id INT AUTO_INCREMENT NOT NULL, favorite_id INT NOT NULL, underdog_id INT NOT NULL, fav_line INT DEFAULT NULL, dog_line INT DEFAULT NULL, spread INT DEFAULT NULL, time DATETIME NOT NULL, UNIQUE INDEX UNIQ_232B318CAA17481D (favorite_id), UNIQUE INDEX UNIQ_232B318C7E59BAA3 (underdog_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE game ADD CONSTRAINT FK_232B318CAA17481D FOREIGN KEY (favorite_id) REFERENCES team (id)');
        $this->addSql('ALTER TABLE game ADD CONSTRAINT FK_232B318C7E59BAA3 FOREIGN KEY (underdog_id) REFERENCES team (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE game');
    }
}
