<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180327071511 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE user_calendar_events (user_id INT NOT NULL, calendar_events_id INT NOT NULL, INDEX IDX_EB3D2399A76ED395 (user_id), INDEX IDX_EB3D2399DE069B2F (calendar_events_id), PRIMARY KEY(user_id, calendar_events_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE calendar_events (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, start_date DATE NOT NULL, start_time TIME NOT NULL, end_date DATE NOT NULL, end_time TIME NOT NULL, creator INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user_calendar_events ADD CONSTRAINT FK_EB3D2399A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_calendar_events ADD CONSTRAINT FK_EB3D2399DE069B2F FOREIGN KEY (calendar_events_id) REFERENCES calendar_events (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE user_calendar_events DROP FOREIGN KEY FK_EB3D2399DE069B2F');
        $this->addSql('DROP TABLE user_calendar_events');
        $this->addSql('DROP TABLE calendar_events');
    }
}
