<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250813193925 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE project DROP CONSTRAINT fk_2fb3d0eeb03a8386');
        $this->addSql('DROP INDEX idx_2fb3d0eeb03a8386');
        $this->addSql('ALTER TABLE project DROP created_by_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE project ADD created_by_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE project ADD CONSTRAINT fk_2fb3d0eeb03a8386 FOREIGN KEY (created_by_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX idx_2fb3d0eeb03a8386 ON project (created_by_id)');
    }
}
