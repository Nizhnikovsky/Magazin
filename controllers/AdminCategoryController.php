<?php
/**
 * Created by PhpStorm.
 * User: Nizhn
 * Date: 06.02.2018
 * Time: 21:37
 */

class AdminCategoryController extends AdminBase
{
    /**
     * Action для страницы "Управление товарами"
     */
    public function actionIndex()
    {
        //Проверка доступа
        self::checkAdmin();
        
        //Получаем список категорий
        $categoriesList = Category::getCategoriesListAdmin();
        
        //Подключаем вид
        require_once (ROOT . '/views/admin_category/index.php');
        return true;
    }
    /**
     * Action для страницы "Добавить категорию"
     */
    public function actionCreate()
    {
        // Проверка доступа
        self::checkAdmin();
        
        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $name = $_POST['title'];
            $sortOrder = $_POST['sort_order'];
            $status = $_POST['status'];
            
            // Флаг ошибок в форме
            $errors = false;
            
            // При необходимости можно валидировать значения нужным образом
            if (!isset($name) || empty($name)) {
                $errors[] = 'Заполните поля';
            }
            
            
            if ($errors == false) {
                // Если ошибок нет
                // Добавляем новую категорию
                Category::createCategory($name, $sortOrder, $status);
                
                // Перенаправляем пользователя на страницу управлениями категориями
                header("Location: /admin/category");
            }
        }
        
        require_once(ROOT . '/views/admin_category/create.php');
        return true;
    }
    
    /**
     * Action для страницы "Редактировать категорию"
     */
    public function actionUpdate($id)
    {
        // Проверка доступа
        self::checkAdmin();
        
        // Получаем данные о конкретной категории
        $category = Category::getCategoryById($id);
        
        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Получаем данные из формы
            $name = $_POST['title'];
            $sortOrder = $_POST['sort_order'];
            $status = $_POST['status'];
           // print_r($_POST);
            //die();
            // Сохраняем изменения
            Category::updateCategoryById($id, $name, $sortOrder, $status);
            
            // Перенаправляем пользователя на страницу управлениями категориями
            header("Location: /admin/category");
        }
        
        // Подключаем вид
        require_once(ROOT . '/views/admin_category/update.php');
        return true;
    }
    
    /**
     * Action для страницы "Удалить категорию"
     * @param int $id
     */
    public function actionDelete($id)
    {
        // Проверка доступа
        self::checkAdmin();
        
        // Обработка формы
        if (isset($_POST['submit'])) {
            // Если форма отправлена
            // Удаляем категорию
            Category::deleteCategoryById($id);
            
            // Перенаправляем пользователя на страницу управлениями товарами
            header("Location: /admin/category");
        }
        
        // Подключаем вид
        require_once(ROOT . '/views/admin_category/delete.php');
        return true;
    }


}