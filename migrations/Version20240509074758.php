<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240509074758 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE prd_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE ticket_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE users_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE prd (id INT NOT NULL, prix DOUBLE PRECISION NOT NULL, lib VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE ticket (id INT NOT NULL, valide BOOLEAN NOT NULL, total DOUBLE PRECISION NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE ticket_prd (ticket_id INT NOT NULL, prd_id INT NOT NULL, PRIMARY KEY(ticket_id, prd_id))');
        $this->addSql('CREATE INDEX IDX_FF1FD45B700047D2 ON ticket_prd (ticket_id)');
        $this->addSql('CREATE INDEX IDX_FF1FD45B14B663BB ON ticket_prd (prd_id)');
        $this->addSql('CREATE TABLE users (id INT NOT NULL, username VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_IDENTIFIER_USERNAME ON users (username)');
        $this->addSql('ALTER TABLE ticket_prd ADD CONSTRAINT FK_FF1FD45B700047D2 FOREIGN KEY (ticket_id) REFERENCES ticket (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE ticket_prd ADD CONSTRAINT FK_FF1FD45B14B663BB FOREIGN KEY (prd_id) REFERENCES prd (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE prd_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE ticket_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE users_id_seq CASCADE');
        $this->addSql('ALTER TABLE ticket_prd DROP CONSTRAINT FK_FF1FD45B700047D2');
        $this->addSql('ALTER TABLE ticket_prd DROP CONSTRAINT FK_FF1FD45B14B663BB');
        $this->addSql('DROP TABLE prd');
        $this->addSql('DROP TABLE ticket');
        $this->addSql('DROP TABLE ticket_prd');
        $this->addSql('DROP TABLE users');
    }
}
