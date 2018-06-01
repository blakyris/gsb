<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180528182424 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE product CHANGE manufacturer_id manufacturer_id INT DEFAULT NULL, CHANGE category category INT DEFAULT NULL, CHANGE price price INT DEFAULT NULL, CHANGE quantity quantity INT DEFAULT NULL, CHANGE thumbnail thumbnail VARCHAR(255) DEFAULT NULL, CHANGE dose dose INT DEFAULT NULL');
        $this->addSql('ALTER TABLE expense_report CHANGE totalPrice totalPrice INT NOT NULL, CHANGE refundedPortion refundedPortion DOUBLE PRECISION DEFAULT NULL, CHANGE lastStatutUpdate lastStatutUpdate DATE DEFAULT NULL, CHANGE statutUpdateBy statutUpdateBy INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user CHANGE roles roles JSON NOT NULL, CHANGE is_active is_active TINYINT(1) DEFAULT NULL, CHANGE memberOf memberOf INT DEFAULT NULL');
        $this->addSql('ALTER TABLE calendar_events CHANGE all_day all_day TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE manufacturer CHANGE phone phone VARCHAR(255) DEFAULT NULL, CHANGE email email VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE calendar_events CHANGE all_day all_day TINYINT(1) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE expense_report CHANGE totalPrice totalPrice NUMERIC(5, 3) NOT NULL, CHANGE refundedPortion refundedPortion DOUBLE PRECISION DEFAULT \'NULL\', CHANGE lastStatutUpdate lastStatutUpdate DATE DEFAULT \'NULL\', CHANGE statutUpdateBy statutUpdateBy INT DEFAULT NULL');
        $this->addSql('ALTER TABLE manufacturer CHANGE phone phone VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8_unicode_ci, CHANGE email email VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8_unicode_ci');
        $this->addSql('ALTER TABLE product CHANGE category category INT DEFAULT NULL, CHANGE manufacturer_id manufacturer_id INT DEFAULT NULL, CHANGE price price INT DEFAULT NULL, CHANGE quantity quantity INT DEFAULT NULL, CHANGE thumbnail thumbnail VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8_unicode_ci, CHANGE dose dose INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user CHANGE roles roles LONGTEXT NOT NULL COLLATE utf8mb4_bin, CHANGE is_active is_active TINYINT(1) DEFAULT \'NULL\', CHANGE memberOf memberOf INT DEFAULT NULL');
    }
}
