<?php
session_start();
$_SESSION = array();

include("lib/captcha/simple-php-captcha.php");
$_SESSION['captcha'] = simple_php_captcha();
?>

<?php require_once 'header.php' ?>
		<div class="container">
			<?php require_once 'nav.php' ?>
			<div class="content">
				<div class="content_callback-form">
					<div class="callback-form_title">У Вас интересный проект? Напишите мне</div>
					<form action="sendmail.php" class="callback-form" id="callback-form">
						<label for="fio" class="label-name">Имя</label>
						<input type="text" class="input-name" id="fio" name="fio" placeholder="Как к Вам обращаться"><span class="error-tooltip input-fio_error-tooltip"></span>

						<label for="email" class="label-email">Email</label>
						<input type="text" class="input-email" id="email" name="email" placeholder="Куда мне писать"><span class="error-tooltip input-email_error-tooltip"></span>

						<label for="message" class="label-message">Сообщение</label>
						<textarea name="message" id="message" cols="30" rows="10" class="textarea-msg" placeholder="Кратко в чем суть"></textarea><span class="error-tooltip textarea-msg_error-tooltip"></span>

						<label for="captcha" class="label_captcha">Введите код, указанный на картинке</label>
					    <img class="captcha" src="<?php echo $_SESSION['captcha']['image_src'];  ?>" alt="captcha">
						<input type="text" class="input-captcha" id="captcha" name="captcha" placeholder="Введите код"><span class="error-tooltip input-captcha_error-tooltip"></span>

						<div class="clear"></div>

						<input class="input-submit" type="submit" id="input-submit" value="Отправить">
						<input class="input-clear" id="input-clear" type="reset" value="Очистить">

						<span id="process"></span>
					</form>
				</div>
			</div>
		</div>
<?php require_once 'footer.php' ?>