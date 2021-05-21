<form class="post-form" action="mail.php" method="post">
   <input type="text" name="from" placeholder="Ваше имя">
   <div class="post-form__item">
      <input type="email" name="email" placeholder="Ваш e-mail">
      <input type="tel" name="tel" placeholder="Ваш телефон">
   </div>
   <textarea name="message" id="summernote"></textarea>
   <div class="post-form__button">
      <input type="submit" name="send" value="Отправить">
   </div>
</form>
<script>
   $(document).ready(function () {
      $('#summernote').summernote({
         height: 600
      });
   });
</script>