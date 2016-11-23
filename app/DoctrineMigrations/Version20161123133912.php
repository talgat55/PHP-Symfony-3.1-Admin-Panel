<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20161123133912 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        $table = $schema->createTable('tasks');
        $table->addColumn('id', 'integer', array(
            'autoincrement' => true,
        ));
        $table->setPrimaryKey(array('id'));
        $table->addColumn('name', 'string');
        $table->addColumn('description', 'string');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        $schema->dropTable('tasks');
    }
}
