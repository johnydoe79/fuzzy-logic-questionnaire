<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240724154237 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'fill Questions and Answers tables';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('INSERT INTO question (question_text) VALUES (\'1 + 1 = \')');
        $this->addSql('INSERT INTO answer (question_id, answer_text, is_correct) VALUES (currval(\'question_id_seq\'), \'3\', false)');
        $this->addSql('INSERT INTO answer (question_id, answer_text, is_correct) VALUES (currval(\'question_id_seq\'), \'2\', true)');
        $this->addSql('INSERT INTO answer (question_id, answer_text, is_correct) VALUES (currval(\'question_id_seq\'), \'0\', false)');

        $this->addSql('INSERT INTO question (question_text) VALUES (\'2 + 2 = \')');
        $this->addSql('INSERT INTO answer (question_id, answer_text, is_correct) VALUES (currval(\'question_id_seq\'), \'4\', true)');
        $this->addSql('INSERT INTO answer (question_id, answer_text, is_correct) VALUES (currval(\'question_id_seq\'), \'3 + 1\', true)');
        $this->addSql('INSERT INTO answer (question_id, answer_text, is_correct) VALUES (currval(\'question_id_seq\'), \'10\', false)');

        $this->addSql('INSERT INTO question (question_text) VALUES (\'3 + 3 = \')');
        $this->addSql('INSERT INTO answer (question_id, answer_text, is_correct) VALUES (currval(\'question_id_seq\'), \'1 + 5\', true)');
        $this->addSql('INSERT INTO answer (question_id, answer_text, is_correct) VALUES (currval(\'question_id_seq\'), \'1\', false)');
        $this->addSql('INSERT INTO answer (question_id, answer_text, is_correct) VALUES (currval(\'question_id_seq\'), \'6\', true)');
        $this->addSql('INSERT INTO answer (question_id, answer_text, is_correct) VALUES (currval(\'question_id_seq\'), \'2 + 4\', true)');

        $this->addSql('INSERT INTO question (question_text) VALUES (\'4 + 4 = \')');
        $this->addSql('INSERT INTO answer (question_id, answer_text, is_correct) VALUES (currval(\'question_id_seq\'), \'8\', true)');
        $this->addSql('INSERT INTO answer (question_id, answer_text, is_correct) VALUES (currval(\'question_id_seq\'), \'4\', false)');
        $this->addSql('INSERT INTO answer (question_id, answer_text, is_correct) VALUES (currval(\'question_id_seq\'), \'0\', false)');
        $this->addSql('INSERT INTO answer (question_id, answer_text, is_correct) VALUES (currval(\'question_id_seq\'), \'0 + 8\', true)');

        $this->addSql('INSERT INTO question (question_text) VALUES (\'5 + 5 = \')');
        $this->addSql('INSERT INTO answer (question_id, answer_text, is_correct) VALUES (currval(\'question_id_seq\'), \'6\', false)');
        $this->addSql('INSERT INTO answer (question_id, answer_text, is_correct) VALUES (currval(\'question_id_seq\'), \'18\', false)');
        $this->addSql('INSERT INTO answer (question_id, answer_text, is_correct) VALUES (currval(\'question_id_seq\'), \'10\', true)');
        $this->addSql('INSERT INTO answer (question_id, answer_text, is_correct) VALUES (currval(\'question_id_seq\'), \'9\', false)');
        $this->addSql('INSERT INTO answer (question_id, answer_text, is_correct) VALUES (currval(\'question_id_seq\'), \'0\', false)');

        $this->addSql('INSERT INTO question (question_text) VALUES (\'6 + 6 = \')');
        $this->addSql('INSERT INTO answer (question_id, answer_text, is_correct) VALUES (currval(\'question_id_seq\'), \'3\', false)');
        $this->addSql('INSERT INTO answer (question_id, answer_text, is_correct) VALUES (currval(\'question_id_seq\'), \'9\', false)');
        $this->addSql('INSERT INTO answer (question_id, answer_text, is_correct) VALUES (currval(\'question_id_seq\'), \'0\', false)');
        $this->addSql('INSERT INTO answer (question_id, answer_text, is_correct) VALUES (currval(\'question_id_seq\'), \'12\', true)');
        $this->addSql('INSERT INTO answer (question_id, answer_text, is_correct) VALUES (currval(\'question_id_seq\'), \'5 + 7\', true)');

        $this->addSql('INSERT INTO question (question_text) VALUES (\'7 + 7 = \')');
        $this->addSql('INSERT INTO answer (question_id, answer_text, is_correct) VALUES (currval(\'question_id_seq\'), \'5\', false)');
        $this->addSql('INSERT INTO answer (question_id, answer_text, is_correct) VALUES (currval(\'question_id_seq\'), \'14\', true)');

        $this->addSql('INSERT INTO question (question_text) VALUES (\'8 + 8 = \')');
        $this->addSql('INSERT INTO answer (question_id, answer_text, is_correct) VALUES (currval(\'question_id_seq\'), \'16\', true)');
        $this->addSql('INSERT INTO answer (question_id, answer_text, is_correct) VALUES (currval(\'question_id_seq\'), \'12\', false)');
        $this->addSql('INSERT INTO answer (question_id, answer_text, is_correct) VALUES (currval(\'question_id_seq\'), \'9\', false)');
        $this->addSql('INSERT INTO answer (question_id, answer_text, is_correct) VALUES (currval(\'question_id_seq\'), \'5\', false)');

        $this->addSql('INSERT INTO question (question_text) VALUES (\'9 + 9 = \')');
        $this->addSql('INSERT INTO answer (question_id, answer_text, is_correct) VALUES (currval(\'question_id_seq\'), \'18\', true)');
        $this->addSql('INSERT INTO answer (question_id, answer_text, is_correct) VALUES (currval(\'question_id_seq\'), \'9\', false)');
        $this->addSql('INSERT INTO answer (question_id, answer_text, is_correct) VALUES (currval(\'question_id_seq\'), \'17 + 1\', true)');
        $this->addSql('INSERT INTO answer (question_id, answer_text, is_correct) VALUES (currval(\'question_id_seq\'), \'2 + 16\', true)');

        $this->addSql('INSERT INTO question (question_text) VALUES (\'10 + 10 = \')');
        $this->addSql('INSERT INTO answer (question_id, answer_text, is_correct) VALUES (currval(\'question_id_seq\'), \'0\', false)');
        $this->addSql('INSERT INTO answer (question_id, answer_text, is_correct) VALUES (currval(\'question_id_seq\'), \'2\', false)');
        $this->addSql('INSERT INTO answer (question_id, answer_text, is_correct) VALUES (currval(\'question_id_seq\'), \'8\', false)');
        $this->addSql('INSERT INTO answer (question_id, answer_text, is_correct) VALUES (currval(\'question_id_seq\'), \'20\', true)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DELETE FROM question');
        $this->addSql('DELETE FROM answer');
    }
}
