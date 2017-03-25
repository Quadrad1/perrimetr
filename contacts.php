<?php
	require_once("header.php");
 ?>
 <div class="navigation">
   <div class="navigation__block">


   </div>
   <div class="navigation__block">
     <p>
      <i class="fa fa-phone" aria-hidden="true"></i>
       Телефон: +7 861 238-86-13 или +7 918 252-07-36
     </p>
   </div>
   <div class="navigation__block">
     <p>
       <i class="fa fa-map-marker" aria-hidden="true"></i>
       350089, Россия, Краснодарский край г. Краснодар, ул. ген. И.Л. Шифрина, д.7
     </p>
     <p>
          2000-2017 © Типография «Куранты» Печать полиграфической продукции в Казани.
     </p>
   </div>
     <form class="" action="contacts.php" method="post">
       <div class="inputs">
         <input type="text" name="name" value="" placeholder="Ваше имя" required>
         <input type="text" name="sutname" value="" placeholder="Ваша фамилия" required>
				 <input type="text" name="email" value="" placeholder="Ваш email" required>
         <input type="text" name="number" value="" placeholder="Ваше номер">

       </div>

       <textarea class = "text-area" required>  </textarea>
			 <button  name="Отправить" value="Отправить" class = "send">Отправить</button>

     </form>

 </div>
 <?php
   require_once("footer.php");
  ?>
