
 <?php get_header() ?>
 <div class="body-container">
   <div class="about">
     <div class="section-header yellow-color">
       <p>Кто мы такие?</p>
     </div>
    <section id="about">
        <div class=section-image>
          	<img src="<?php echo get_template_directory_uri(); ?>/assets/img/glases.gif" alt="">
        </div>
        <div class=" standart-font yellow-color section-text">
           <p class='section-p'>Мы молодая веб-студия. Молодая от слова совсем. У нас не так много опыта и мы активно ищем заказы, хотим развиваться и сотрудничать: хотим развиваться и сотрудничать. Мы готовы предложить следующие форматы взаимодействия</p>
           <p class='section-p'>Мы - адепты честности в мире бизнеса и IT. Наша идеология - простота, искренность и смелость. Нам всем порядком надоели накрученные лайки, купленные отзывы и идеальные фотографии. Мы говорим с пользователем открыто, не пускаем пыль в глаза и не вешаем лапшу на уши. Если у вас достаточно храбрости, то мы сработаемся</p>
        </div>
    </section>
   </div>
   <div class="services">
     <div class="section-header yellow-color">
       <p>Что мы делаем</p>
     </div>
   <section id="services">
     <div class=section-image>
       <p></p>
     </div>
     <div class=" standart-font yellow-color section-text">
        <p class='section-p'>Мы начинаем работу с каждым новым клиентом и партнером с чистого листа и подбираем решения, которые будут соответствовать конкретному запросу и контексту</p>
        <ul>
          <li class="menu-accord"><p>Дизайн</p>
              <div class='under-text'>
                <p>Веб-дизайн</p>
                <p>Прототипирование</p>
                <p>Редизайн</p>
                <p>Оформление соцсетей</p>
              </div>
          </li>
          <li class="menu-accord"><p>Pазработка</p></li>
            <div class='under-text'>
              <p>Разработка сайтов “под ключ” </p>
              <p>Wordpress/Django</p>
                <ul class="under-under">
                  <li class="menu-accord" style="list-style-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/dot.png")"><p>CMS</p></li>
                    <div class='under-text'>
                      <p>Django CMS</p>
                      <p>Wordpress</p>
                      <p>Opencart</p>
                    </div>
                  <li class="menu-accord"style="list-style-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/dot.png")" ><p>Backend</p></li>
                    <div class='under-text'>
                      <p>Django/Symfony</p>
                    </div>
                </ul>
            </div>
            <li class="menu-accord"><p>Программирование</p></li>
              <div class='under-text'>
                <p>Боты для telegram</p>
                <p>Парсинг</p>
              </div>
        </ul>
     </div>
   </section>
   </div>
   <!----
   <div class="cases">
       portfolio
       <section id="cases">
          <div class="swiper-container swiper-container-initialized swiper-container-horizontal">
              <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(-1964px, 0px, 0px);">
              <?php display_port()?>
              </div>
          </div>
       </section>
   </div>
--->
  <div class="cases">
    <div class="section-header yellow-color">
      <p>Kейсы</p>
    </div>
  <section id="cases">
    <div class=section-image>
      <p></p>
    </div>
    <div class="standart-font yellow-color section-text">
       <p class='section-p'>Мы начинаем работу с каждым новым клиентом и партнером с чистого листа и подбираем решения, которые будут соответствовать конкретному запросу и контексту</p>
    </div>
  </section>
  </div>
   <div class="contacts">
         <div class="section-header yellow-color">
           <p>Контакты</p>
         </div>
     <section id="contacts">
           <div class="section-image image-contacts">
             <img src="<?php echo get_template_directory_uri(); ?>/assets/img/explore.gif" alt="">
             <p></p>
           </div>
           <div class="standart-font yellow-color section-text">
             <table>
               <tr class="left-side">
                 <th>@</th>
                 <th>phone</th>
                 <th>telegram</th>
                 <th>behance</th>
                 <th>instagram</th>
               </tr>
               <tr class="right-side">
                   <th><a href="fishfishstudio@gmail.com" target="_blank">fishfishstudio@gmail.com</a> </th>
                   <th>+7 904 551 18 12 </th>
                   <th>@n_Set</th>
                   <th><a href="https://www.behance.net/fishfish_studio" target="_blank">https://www.behance.net/fishfish_studio</a></th>
                   <th><a href="https://www.instagram.com/fishfish" target="_blank">https://www.instagram.com/fishfish</a></th>
               </tr>
             </table>
           </div>
      </section>
 </div>
    <!---
  <aside>
      <form action="">
          <input type="hidden">
          <div class="phone-chain">
              <p>Phone</p>
              <input type="text" name="phone">
          </div>
          <input type="button" class="ff-btn-app" value="Отправить">
        </form>
  </aside>
  -->

 <?php get_footer() ?>
