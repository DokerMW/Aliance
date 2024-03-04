<!DOCTYPE html>
<html lang="ru">
   <?php 
	$extra_styles = '<link rel="stylesheet" href="./css/about.css" />
   <link rel="stylesheet" href="./css/contracts.css" />
   <link rel="stylesheet" href="./css/404.css" />'; $head_subtitle = 'Политика конфиденциальности';
   include_once('./template_parts/head.php'); ?>
   <body>
      <div class="wrapper">
         <?php $general_header_style = 'dark';
				$main_logo_path = './img/icons/sprite.svg#main_logo_d';
				include_once('./template_parts/header.php');
			?>
         <main>
            <section class="not-found">
               <div class="_container">
                  <div class="not-found__body">
                     <h2 class="not-found__title">404</h2>
                     <h3 class="not-found__subtitle">Страница не найдена</h3>
                     <div class="not-found__text">
                        Мы не смогли найти страницу с таким адресом, попробуйте перейти на главную
                        или напишите нам.
                     </div>
                     <a href="./index.php" class="not-found__btn btn">Вернуться на главную</a>
                  </div>
               </div>
            </section>
            <?php include_once('./template_parts/modals.php') ?>
         </main>
         <?php include_once('./template_parts/footer.php') ?>
      </div>
   </body>
</html>
