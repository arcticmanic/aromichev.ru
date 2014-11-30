<?php require_once 'header.php' ?>
	<div class="container">
		<?php require_once 'nav.php' ?>
		<div class="content">
			<div class="content_main-info main-info">
				<h1 class="content_h1">Основная информация</h1>
				<div class="clear"></div>
				<div class="userpic content_userpic">
					<img src="img/userpic.jpg" alt="avatar">
				</div>
				<table class="main-info_table">
					<tr>
						<td colspan="2"><span>Меня зовут:</span> Ромичев Антон Сергеевич</td>
					</tr>
					<tr>
						<td colspan="2"><span>Мой возраст:</span> 25 лет</td>
					</tr>
					<tr>
						<td colspan="2"><span>Мой город:</span> Санкт-Петербург, Россия</td>
					</tr>
					<tr>
						<td colspan="2"><span>Моя специализация:</span> FRONTEND разработчик</td>
					</tr>
					<tr>
						<td class="skills"><span>Ключевые навыки:</span></td>
						<td>
							<ul class="skill-list">
								<li class="skill-list-item1 gradient">html</li>
								<li class="skill-list-item2 gradient">css</li>
								<li class="skill-list-item3 gradient">javascript</li>
								<li class="skill-list-item4 gradient">gulp</li>
								<li class="skill-list-item5 gradient">git</li>
							</ul>
						</td>
					</tr>
				</table>
			</div>
			<div class="content_experience experience">
				<h1 class="content_h1">Опыт работы</h1>
				<ul>
					<li class="content_experience_item1 experience_item">
						<div class="experience_item_pic"></div>
						<p>Сайт-Мастер - Веб-разработчик</p>
						<p>Июнь 2014 - Настоящее время</p>
					</li>
					<li class="content_experience_item1 experience_item">
						<div class="experience_item_pic"></div>
						<p>Технологии для Человека - Младший Веб-разработчик</p>
						<p>Июнь 2013 - Декабрь 2013</p>
					</li>
					<li class="content_experience_item2 experience_item">
						<div class="experience_item_pic"></div>
						<p>ЛАНК Телеком - Оператор ПК</p>
						<p>Декабрь 2012 - Июнь 2013</p>
					</li>
				</ul>
			</div>
			<div class="content_education education">
				<h1 class="content_h1">Образование</h1>
				<ul>
					<li class="content_education_item2 education_item">
						<div class="education_item_pic education_item_pic2"></div>
						<p>Курсы Loftschool.ru</p>
						<p>Ноябрь 2014 - по настоящее время</p>
					</li>
					<li class="content_education_item1 education_item">
						<div class="education_item_pic education_item_pic1"></div>
						<p>Высшее образование. СПБГУАП</p>
						<p>Сентрябрь 2007 - Июль 2012</p>
					</li>
				</ul>
			</div>
		</div>
	</div>
<?php require_once 'footer.php' ?>