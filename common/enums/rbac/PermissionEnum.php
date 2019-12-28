<?php

namespace common\enums\rbac;

use yii2rails\extension\enum\base\BaseEnum;

/**
 * Class PermissionEnum
 * 
 * Этот класс был сгенерирован автоматически.
 * Не вносите в данный файл изменения, они затрутся при очередной генерации.
 * Изменить набор констант можно через управление RBAC в админке.
 * 
 * @package common\enums\rbac
 */
class PermissionEnum extends BaseEnum {

	// Доступ к REST-клиенту
	const REST_CLIENT_ALL = 'oRestClientAll';

	// Доступ к Yii генератору
	const GII_MANAGE = 'oGiiManage';

	// Управление языками
	const LANG_MANAGE = 'oLangManage';

	// Управление RBAC
	const RBAC_MANAGE = 'oRbacManage';

	// Доступ в админ панель
	const BACKEND_ALL = 'oBackendAll';

	// Управление логами
	const LOGREADER_MANAGE = 'oLogreaderManage';

	// Управление статусом оффлайн
	const OFFLINE_MANAGE = 'oOfflineManage';

	// Управление чистильщиком
	const CLEANER_MANAGE = 'oCleanerManage';

	// Управление уведомлениями
	const NOTIFY_MANAGE = 'oNotifyManage';

	// Шифрование данных
	const ENCRYPT_MANAGE = 'oEncryptManage';

	// Управление композер-пакетами
	const VENDOR_MANAGE = 'oVendorManage';

	// Управление файлами
	const FILE_MANAGE = 'oFileManage';

	// Редактирование руководства
	const GUIDE_MODIFY = 'oGuideModify';

	// Управление файловым хранилищем
	const STORAGE_MANAGE = 'oStorageManage';

	// Управление статьями сайта
	const ARTICLE_POST_MANAGE = 'oArticlePostManage';

	// Скачивание файлов
	const STORAGE_FILE_DOWNLOAD = 'oStorageFileDownload';

	// Загрузка файлов
	const STORAGE_FILE_UPLOAD = 'oStorageFileUpload';

	// Управление корпоративной частью почты
	const STAFF_MANAGE = 'oStaffManage';

	// Управление мета-моделями
	const MODEL_MANAGE = 'oModelManage';

	// Управление категориями
	const ARTICLE_CATEGORY_MANAGE = 'oArticleCategoryManage';

	// Просмотр категорий статей
	const ARTICLE_CATEGORY_READ = 'oArticleCategoryRead';

	// Чтение статьи
	const ARTICLE_POST_READ = 'oArticlePostRead';

	// Управление пользователями
	const ACCOUNT_MANAGE = 'oAccountManage';

}