<?php

return [
	[
		'id' => 1,
		'entity_id' => 1,
		'name' => 'birthday',
		'type' => 'string',
		'is_required' => 1,
		'default' => null,
		'title' => 'Дата рождения',
		'description' => null,
		'sort' => 20,
		'status' => 1,
	],
	[
		'id' => 2,
		'entity_id' => 1,
		'name' => 'iin',
		'type' => 'string',
		'is_required' => 1,
		'default' => null,
		'title' => 'ИИН',
		'description' => null,
		'sort' => 10,
		'status' => 1,
	],
	[
		'id' => 3,
		'entity_id' => 1,
		'name' => 'sex',
		'type' => 'enum',
		'is_required' => 1,
		'default' => null,
		'title' => 'Пол',
		'description' => null,
		'sort' => 30,
		'status' => 1,
	],
	[
		'id' => 4,
		'entity_id' => 2,
		'name' => 'is_enable_notify',
		'type' => 'boolean',
		'is_required' => 1,
		'default' => '1',
		'title' => 'Включить уведомления',
		'description' => null,
		'sort' => 10,
		'status' => 1,
	],
	[
		'id' => 5,
		'entity_id' => 2,
		'name' => 'is_enable_mail_notify',
		'type' => 'boolean',
		'is_required' => 1,
		'default' => '1',
		'title' => 'Включить уведомления о письмах',
		'description' => null,
		'sort' => 10,
		'status' => 0,
	],
	[
		'id' => 6,
		'entity_id' => 2,
		'name' => 'is_enable_sign',
		'type' => 'boolean',
		'is_required' => 1,
		'default' => '0',
		'title' => 'Включить подпись к письму',
		'description' => null,
		'sort' => 10,
		'status' => 0,
	],
	[
		'id' => 7,
		'entity_id' => 2,
		'name' => 'sign_text',
		'type' => 'safe_string',
		'is_required' => 0,
		'default' => '""',
		'title' => 'Текст подписи',
		'description' => null,
		'sort' => 10,
		'status' => 0,
	],
	[
		'id' => 8,
		'entity_id' => 2,
		'name' => 'language',
		'type' => 'enum',
		'is_required' => 0,
		'default' => '"ru"',
		'title' => 'Язык',
		'description' => null,
		'sort' => 10,
		'status' => 1,
	],
];