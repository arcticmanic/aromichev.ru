<div class="sidebar">
			<ul class="main-menu sidebar_main-menu">
				<li class="<?php if (( stripos($_SERVER["REQUEST_URI"], '/index') !== false) or ( $_SERVER["REQUEST_URI"] == '/')) { ?>active <?php }  ?>main-menu_item">
					<a <?php if (( stripos($_SERVER["REQUEST_URI"], '/index') !== false) or ( $_SERVER["REQUEST_URI"] == '/')) { ?> class="active" <?php }  ?> href="/index.php">Обо мне</a>
				</li>
				<li class="<?php if ( stripos($_SERVER["REQUEST_URI"], '/portfolio') !== false) { ?>active <?php }  ?>main-menu_item">
					<a <?php if ( stripos($_SERVER["REQUEST_URI"], '/portfolio') !== false) { ?> class="active" <?php }  ?> href="/portfolio.php">Мои работы</a>
				</li>
				<li class="<?php if ( stripos($_SERVER["REQUEST_URI"], '/callback') !== false) { ?>active <?php }  ?>main-menu_item">
					<a <?php if ( stripos($_SERVER["REQUEST_URI"], '/callback') !== false) { ?> class="active" <?php }  ?> href="/callback.php">Связаться со мной</a>
				</li>
			</ul>
			<ul class="contacts sidebar_contacts">
				<span>Контакты</span>
				<li class="contacts_item1"><a href="mailto:arctic.manic@gmail.com"><div class="contacts_icon email"></div>arctic.manic@gmail.com</a></li>
				<li class="contacts_item2"><a href="tel://+79602329943"><div class="contacts_icon tel"></div>+79602329943</a></li>
				<li class="contacts_item3"><a href="skype:arcticmanic?chat"><div class="contacts_icon skype"></div>arcticmanic</a></li>
			</ul>
		</div>