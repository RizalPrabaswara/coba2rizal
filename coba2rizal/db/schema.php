<?php

use Itseasy\Database\Metadata\Object\MysqlTableObject;
use Laminas\Db\Metadata\Object\ColumnObject;
use Laminas\Db\Metadata\Object\ConstraintObject;
use Laminas\Db\Metadata\Object\TriggerObject;

return [
    "tables" => [
        function () {
            $table = new MysqlTableObject("user");
            $table->setEngine("InnoDB");
            $table->setCharset("utf8mb4");
            $table->setCollation("utf8mb4_unicode_ci");
            $table->setColumns([
                function () use ($table) {
                    $column = new ColumnObject("id", $table->getName());
                    $column->setDataType("int");
                    $column->setNumericUnsigned(true);
                    $column->setErrata("auto_increment", true);
                    $column->setIsNullable(false);
                    return $column;
                },
                function () use ($table) {
                    $column = new ColumnObject("username", $table->getName());
                    $column->setDataType("varchar");
                    $column->setCharacterMaximumLength(255);
                    $column->setIsNullable(false);
                    return $column;
                },
                function () use ($table) {
                    $column = new ColumnObject("email", $table->getName());
                    $column->setDataType("varchar");
                    $column->setCharacterMaximumLength(255);
                    $column->setIsNullable(false);
                    return $column;
                },
                function () use ($table) {
                    $column = new ColumnObject("password", $table->getName());
                    $column->setDataType("varchar");
                    $column->setCharacterMaximumLength(255);
                    $column->setIsNullable(false);
                    return $column;
                },
                function () use ($table) {
                    $column = new ColumnObject("tech_creation_date", $table->getName());
                    $column->setDataType("datetime");
                    $column->setIsNullable(true);
                    return $column;
                },
                function () use ($table) {
                    $column = new ColumnObject("tech_modification_date", $table->getName());
                    $column->setDataType("datetime");
                    $column->setIsNullable(true);
                    return $column;
                }
            ]);
            $table->setConstraints([
                function ()  use ($table) {
                    $constraint = new ConstraintObject("PRIMARY", $table->getName());
                    $constraint->setType("PRIMARY KEY");
                    $constraint->setColumns(["id"]);
                    return $constraint;
                }
            ]);
            return $table;
        },
        function () {
            $table = new MysqlTableObject("City");
            $table->setEngine("InnoDB");
            $table->setCharset("utf8mb4");
            $table->setCollation("utf8mb4_unicode_ci");
            $table->setColumns([
                function () use ($table) {
                    $column = new ColumnObject("id", $table->getName());
                    $column->setDataType("int");
                    $column->setNumericUnsigned(true);
                    $column->setErrata("auto_increment", true);
                    $column->setIsNullable(false);
                    return $column;
                },
                function () use ($table) {
                    $column = new ColumnObject("city_name", $table->getName());
                    $column->setDataType("varchar");
                    $column->setCharacterMaximumLength(255);
                    $column->setIsNullable(false);
                    return $column;
                },
                function () use ($table) {
                    $column = new ColumnObject("city_creation_date", $table->getName());
                    $column->setDataType("datetime");
                    $column->setIsNullable(true);
                    return $column;
                },
                function () use ($table) {
                    $column = new ColumnObject("city_modification_date", $table->getName());
                    $column->setDataType("datetime");
                    $column->setIsNullable(true);
                    return $column;
                }
            ]);
            $table->setConstraints([
                function ()  use ($table) {
                    $constraint = new ConstraintObject("PRIMARY", $table->getName());
                    $constraint->setType("PRIMARY KEY");
                    $constraint->setColumns(["id"]);
                    return $constraint;
                }
            ]);
            return $table;
        },
        function () {
            $table = new MysqlTableObject("Building");
            $table->setEngine("InnoDB");
            $table->setCharset("utf8mb4");
            $table->setCollation("utf8mb4_unicode_ci");
            $table->setColumns([
                function () use ($table) {
                    $column = new ColumnObject("id", $table->getName());
                    $column->setDataType("int");
                    $column->setNumericUnsigned(true);
                    $column->setErrata("auto_increment", true);
                    $column->setIsNullable(false);
                    return $column;
                },
                function () use ($table) {
                    $column = new ColumnObject("id_city", $table->getName());
                    $column->setDataType("int");
                    $column->setNumericUnsigned(true);
                    $column->setIsNullable(true);
                    return $column;
                },
                function () use ($table) {
                    $column = new ColumnObject("building_name", $table->getName());
                    $column->setDataType("varchar");
                    $column->setCharacterMaximumLength(255);
                    $column->setIsNullable(false);
                    return $column;
                },
                function () use ($table) {
                    $column = new ColumnObject("building_creation_date", $table->getName());
                    $column->setDataType("datetime");
                    $column->setIsNullable(true);
                    return $column;
                },
                function () use ($table) {
                    $column = new ColumnObject("building_modification_date", $table->getName());
                    $column->setDataType("datetime");
                    $column->setIsNullable(true);
                    return $column;
                }
            ]);
            $table->setConstraints([
                function ()  use ($table) {
                    $constraint = new ConstraintObject("PRIMARY", $table->getName());
                    $constraint->setType("PRIMARY KEY");
                    $constraint->setColumns(["id"]);
                    return $constraint;
                }
            ]);
            return $table;
        },
        function () {
            $table = new MysqlTableObject("Shelf");
            $table->setEngine("InnoDB");
            $table->setCharset("utf8mb4");
            $table->setCollation("utf8mb4_unicode_ci");
            $table->setColumns([
                function () use ($table) {
                    $column = new ColumnObject("id", $table->getName());
                    $column->setDataType("int");
                    $column->setNumericUnsigned(true);
                    $column->setErrata("auto_increment", true);
                    $column->setIsNullable(false);
                    return $column;
                },
                function () use ($table) {
                    $column = new ColumnObject("id_building", $table->getName());
                    $column->setDataType("int");
                    $column->setNumericUnsigned(true);
                    $column->setIsNullable(true);
                    return $column;
                },
                function () use ($table) {
                    $column = new ColumnObject("shelf_name", $table->getName());
                    $column->setDataType("varchar");
                    $column->setCharacterMaximumLength(255);
                    $column->setIsNullable(false);
                    return $column;
                },
                function () use ($table) {
                    $column = new ColumnObject("status", $table->getName());
                    $column->setDataType("varchar");
                    $column->setCharacterMaximumLength(255);
                    $column->setIsNullable(false);
                    return $column;
                },
                function () use ($table) {
                    $column = new ColumnObject("shelf_creation_date", $table->getName());
                    $column->setDataType("datetime");
                    $column->setIsNullable(true);
                    return $column;
                },
                function () use ($table) {
                    $column = new ColumnObject("shelf_modification_date", $table->getName());
                    $column->setDataType("datetime");
                    $column->setIsNullable(true);
                    return $column;
                }
            ]);
            $table->setConstraints([
                function ()  use ($table) {
                    $constraint = new ConstraintObject("PRIMARY", $table->getName());
                    $constraint->setType("PRIMARY KEY");
                    $constraint->setColumns(["id"]);
                    return $constraint;
                }
            ]);
            return $table;
        },
        function () {
            $table = new MysqlTableObject("Slot");
            $table->setEngine("InnoDB");
            $table->setCharset("utf8mb4");
            $table->setCollation("utf8mb4_unicode_ci");
            $table->setColumns([
                function () use ($table) {
                    $column = new ColumnObject("id", $table->getName());
                    $column->setDataType("int");
                    $column->setNumericUnsigned(true);
                    $column->setErrata("auto_increment", true);
                    $column->setIsNullable(false);
                    return $column;
                },
                function () use ($table) {
                    $column = new ColumnObject("id_shelf", $table->getName());
                    $column->setDataType("int");
                    $column->setNumericUnsigned(true);
                    $column->setIsNullable(true);
                    return $column;
                },
                function () use ($table) {
                    $column = new ColumnObject("slot_name", $table->getName());
                    $column->setDataType("varchar");
                    $column->setCharacterMaximumLength(255);
                    $column->setIsNullable(false);
                    return $column;
                },
                function () use ($table) {
                    $column = new ColumnObject("status", $table->getName());
                    $column->setDataType("varchar");
                    $column->setCharacterMaximumLength(255);
                    $column->setIsNullable(false);
                    return $column;
                },
                function () use ($table) {
                    $column = new ColumnObject("slot_creation_date", $table->getName());
                    $column->setDataType("datetime");
                    $column->setIsNullable(true);
                    return $column;
                },
                function () use ($table) {
                    $column = new ColumnObject("slot_modification_date", $table->getName());
                    $column->setDataType("datetime");
                    $column->setIsNullable(true);
                    return $column;
                }
            ]);
            $table->setConstraints([
                function ()  use ($table) {
                    $constraint = new ConstraintObject("PRIMARY", $table->getName());
                    $constraint->setType("PRIMARY KEY");
                    $constraint->setColumns(["id"]);
                    return $constraint;
                }
            ]);
            return $table;
        },

    ],
    "triggers" => [
        function () {
            $trigger = new TriggerObject();
            $trigger->setName("user_BINS");
            $trigger->setActionTiming("BEFORE");
            $trigger->setEventManipulation("INSERT");
            $trigger->setEventObjectTable("user");
            $trigger->setActionOrientation("ROW");
            $trigger->setActionStatement(
                "BEGIN
                SET NEW.tech_creation_date = UTC_TIMESTAMP(), NEW.tech_modification_date = UTC_TIMESTAMP(); 
                END"
            );
            return $trigger;
        },
        function () {
            $trigger = new TriggerObject();
            $trigger->setName("city_BINS");
            $trigger->setActionTiming("BEFORE");
            $trigger->setEventManipulation("INSERT");
            $trigger->setEventObjectTable("City");
            $trigger->setActionOrientation("ROW");
            $trigger->setActionStatement(
                "BEGIN
                SET NEW.city_creation_date = UTC_TIMESTAMP(), NEW.city_modification_date = UTC_TIMESTAMP(); 
                END"
            );
            return $trigger;
        },
        function () {
            $trigger = new TriggerObject();
            $trigger->setName("building_BINS");
            $trigger->setActionTiming("BEFORE");
            $trigger->setEventManipulation("INSERT");
            $trigger->setEventObjectTable("Building");
            $trigger->setActionOrientation("ROW");
            $trigger->setActionStatement(
                "BEGIN
                SET NEW.building_creation_date = UTC_TIMESTAMP(), NEW.building_modification_date = UTC_TIMESTAMP(); 
                END"
            );
            return $trigger;
        },
        function () {
            $trigger = new TriggerObject();
            $trigger->setName("shelf_BINS");
            $trigger->setActionTiming("BEFORE");
            $trigger->setEventManipulation("INSERT");
            $trigger->setEventObjectTable("Shelf");
            $trigger->setActionOrientation("ROW");
            $trigger->setActionStatement(
                "BEGIN
                SET NEW.shelf_creation_date = UTC_TIMESTAMP(), NEW.shelf_modification_date = UTC_TIMESTAMP(); 
                END"
            );
            return $trigger;
        },
        function () {
            $trigger = new TriggerObject();
            $trigger->setName("slot_BINS");
            $trigger->setActionTiming("BEFORE");
            $trigger->setEventManipulation("INSERT");
            $trigger->setEventObjectTable("Slot");
            $trigger->setActionOrientation("ROW");
            $trigger->setActionStatement(
                "BEGIN
                SET NEW.slot_creation_date = UTC_TIMESTAMP(), NEW.slot_modification_date = UTC_TIMESTAMP(); 
                END"
            );
            return $trigger;
        },
        function () {
            $trigger = new TriggerObject();
            $trigger->setName("user_BUPD");
            $trigger->setActionTiming("BEFORE");
            $trigger->setEventManipulation("UPDATE");
            $trigger->setEventObjectTable("user");
            $trigger->setActionOrientation("ROW");
            $trigger->setActionStatement(
                "BEGIN
                SET NEW.tech_modification_date = UTC_TIMESTAMP(); 
                END"
            );
            return $trigger;
        },
        function () {
            $trigger = new TriggerObject();
            $trigger->setName("city_BUPD");
            $trigger->setActionTiming("BEFORE");
            $trigger->setEventManipulation("UPDATE");
            $trigger->setEventObjectTable("City");
            $trigger->setActionOrientation("ROW");
            $trigger->setActionStatement(
                "BEGIN
                SET NEW.city_modification_date = UTC_TIMESTAMP(); 
                END"
            );
            return $trigger;
        },
        function () {
            $trigger = new TriggerObject();
            $trigger->setName("building_BUPD");
            $trigger->setActionTiming("BEFORE");
            $trigger->setEventManipulation("UPDATE");
            $trigger->setEventObjectTable("Building");
            $trigger->setActionOrientation("ROW");
            $trigger->setActionStatement(
                "BEGIN
                SET NEW.building_modification_date = UTC_TIMESTAMP(); 
                END"
            );
            return $trigger;
        },
        function () {
            $trigger = new TriggerObject();
            $trigger->setName("shelf_BUPD");
            $trigger->setActionTiming("BEFORE");
            $trigger->setEventManipulation("UPDATE");
            $trigger->setEventObjectTable("Shelf");
            $trigger->setActionOrientation("ROW");
            $trigger->setActionStatement(
                "BEGIN
                SET NEW.shelf_modification_date = UTC_TIMESTAMP(); 
                END"
            );
            return $trigger;
        },
        function () {
            $trigger = new TriggerObject();
            $trigger->setName("slot_BUPD");
            $trigger->setActionTiming("BEFORE");
            $trigger->setEventManipulation("UPDATE");
            $trigger->setEventObjectTable("Slot");
            $trigger->setActionOrientation("ROW");
            $trigger->setActionStatement(
                "BEGIN
                SET NEW.slot_modification_date = UTC_TIMESTAMP(); 
                END"
            );
            return $trigger;
        }
    ]
];
