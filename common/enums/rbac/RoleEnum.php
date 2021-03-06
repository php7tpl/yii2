<?php

namespace common\enums\rbac;

use yii2rails\extension\enum\base\BaseEnum;

/**
 * Class RoleEnum
 * 
 * Этот класс был сгенерирован автоматически.
 * Не вносите в данный файл изменения, они затрутся при очередной генерации.
 * Изменить набор констант можно через управление RBAC в админке.
 * 
 * @package common\enums\rbac
 */
class RoleEnum extends BaseEnum {

	// Администратор системы
	const ADMINISTRATOR = 'rAdministrator';

	// Идентифицированный пользователь
	const USER = 'rUser';

	// Гость системы
	const GUEST = 'rGuest';

	// Не идентифицированный пользователь
	const UNKNOWN_USER = 'rUnknownUser';

	// Разработчик
	const DEVELOPER = 'rDeveloper';

}