<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181015181705 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE dunna_estates (id INT AUTO_INCREMENT NOT NULL, city_key INT DEFAULT NULL, city_area_key INT DEFAULT NULL, street_name_key INT DEFAULT NULL, street_number INT DEFAULT NULL, property_type_key INT DEFAULT NULL, google_coordinates VARCHAR(255) DEFAULT NULL, price DOUBLE PRECISION DEFAULT NULL, area INT DEFAULT NULL, rooms INT DEFAULT NULL, floor INT DEFAULT NULL, deal_type_key INT DEFAULT NULL, contact_person_key INT DEFAULT NULL, url VARCHAR(255) DEFAULT NULL, description LONGTEXT DEFAULT NULL, creation_date DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE dunna_estates');
    }
}
