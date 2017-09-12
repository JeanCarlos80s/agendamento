## Projeto Simples de Agendamento de Reuniões

Foi implementado somente a funcionalidade de listar e cadastrar reuniões, utilizando repository pattern e validações simples, como verificar campos requeridos. Ficaram de fora as as funcionalidades de alterar e deletar um agendamento e muitas outras regras de negócios que poderiam ser feitas.

## Template

Utilizei o template start bootstrap

## Dump do Banco

CREATE TABLE `reuniaos` (
	`id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	`nome` VARCHAR(50) NOT NULL COLLATE 'utf8_unicode_ci',
	`data_reuniao` DATE NOT NULL,
	`hora_reuniao` TIME NOT NULL,
	`descricao` TEXT NOT NULL COLLATE 'utf8_unicode_ci',
	`created_at` TIMESTAMP NOT NULL DEFAULT '0000-00-00 00:00:00',
	`updated_at` TIMESTAMP NOT NULL DEFAULT '0000-00-00 00:00:00',
	PRIMARY KEY (`id`)
)
COLLATE='utf8_unicode_ci'
ENGINE=InnoDB
AUTO_INCREMENT=1
;