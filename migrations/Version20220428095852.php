<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220428095852 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE reservations');
        $this->addSql('DROP TABLE supplements');
        $this->addSql('DROP TABLE supplements_liaison');
        $this->addSql('ALTER TABLE themes ADD age_minimum INT NOT NULL, ADD age_maximum INT NOT NULL, ADD nb_enfants_minimum INT NOT NULL, ADD nb_enfants_maximum INT NOT NULL, DROP ageMinimum, DROP ageMaximum, DROP nbEnfantsMinimum, DROP nbEnfantsMaximum, CHANGE immageIllustration immage_illustration VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE reservations (id INT AUTO_INCREMENT NOT NULL, id_theme INT NOT NULL, id_client INT NOT NULL, date_reserved VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE supplements (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, description VARCHAR(1000) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, prix DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE supplements_liaison (id INT AUTO_INCREMENT NOT NULL, id_supplement INT NOT NULL, id_reservation INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE themes ADD ageMinimum SMALLINT NOT NULL, ADD ageMaximum SMALLINT NOT NULL, ADD nbEnfantsMinimum SMALLINT NOT NULL, ADD nbEnfantsMaximum SMALLINT NOT NULL, DROP age_minimum, DROP age_maximum, DROP nb_enfants_minimum, DROP nb_enfants_maximum, CHANGE immage_illustration immageIllustration VARCHAR(255) NOT NULL');
    }
}
