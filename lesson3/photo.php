<?php

include "const.php";

try {
  // указываем где хранятся шаблоны
  $loader = new Twig_Loader_Filesystem('templates');

  // инициализируем Twig
  $twig = new Twig_Environment($loader);

  // подгружаем шаблон
  $template = $twig->loadTemplate('photo.tmpl');

  $photo = stripcslashes($_GET['photo']);
  if (!file_exists(PHOTO_PATH . '/' .$photo)) throw new Exception ('Фото отсутствует');

  // передаём в шаблон переменные и значения
  // выводим сформированное содержание
  echo $template->render(array(
            'title' => 'Все фотографии',
            'path_to_photo' => PHOTO_PATH,
            'photo' => $photo
            ));
  
} catch (Exception $e) {
  die ('ERROR: ' . $e->getMessage());
}
