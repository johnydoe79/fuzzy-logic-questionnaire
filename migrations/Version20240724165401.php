<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240724165401 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'change TestResults';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE test_result DROP CONSTRAINT fk_84b3c63d1e27f6bf');
        $this->addSql('DROP INDEX idx_84b3c63d1e27f6bf');
        $this->addSql('ALTER TABLE test_result ADD results JSON NOT NULL');
        $this->addSql('ALTER TABLE test_result DROP question_id');
        $this->addSql('ALTER TABLE test_result DROP is_correct');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE test_result ADD question_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE test_result ADD is_correct BOOLEAN NOT NULL');
        $this->addSql('ALTER TABLE test_result DROP results');
        $this->addSql('ALTER TABLE test_result ADD CONSTRAINT fk_84b3c63d1e27f6bf FOREIGN KEY (question_id) REFERENCES question (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX idx_84b3c63d1e27f6bf ON test_result (question_id)');
    }
}
