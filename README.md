Это небольшое приложение сделано на основе выполнения нижеприведенной задачи
и не является результатом ТОЛЬКО выполнения пунктов этой задачи, так как в последующем
функционал был немного расширен. В частности был добавлен компонент для работы с сессиями,
к-й среди прочего включает систему автологина, основанную на хранении сессий в базе данных.
Также добавлена система регистрации с солью и пагинация.

Некоторые компоненты позаимствованы из разных источников. Но это не значит что я не разбираюсь
в использованном компоненте. Код был тщательным образом изучен, не единожды опробован и взят на вооружение. Более подробное
описание могу дать по запросу.

Буду очень благодарен за конструктивную критику, замечания и дельные советы!
Это будет очередная бесценная крупица в мою базу знаний.

Мой почтовый ящик:


    okeanol777@gmail.com

_**Среда разработки**_

OC Debian 8 x64

XAMPP for Linux 5.6.30-1
	
	-Apache/2.4.25 (Unix) 
	
	-PHP/5.6.30
	
	-MariaDB/10.1.21
	

Использованные библиотеки:

composer, phpactiverecord, twig


OOP, MVC
	

*******************************************************************

**ЗАДАЧА**


_Технологии: PHP, MySQL_


Концепция

Данная система позволяет нескольким пользователям сохранять мнения и оценки нескольких 
продуктах. Пользователи имеют возможность просматривать оценки и мнения других пользователей.
Должна быть среди прочего предусмотрена защита от SQL-инъекций, и XSS-атак.

Первая страница

На первой странице пользователь должен ввести имя пользователя и пароль. 
Все остальные страницы доступны только после правильного ввода имени пользователя и пароля.

Вторая страница

На второй странице пользователь видит список продуктов.
В этом списке для каждого продукта показываются: название продукта, 
меню для выбора рейтинга (от 1 до 5), поле для ввода комментария. 
Когда пользователь заходит на эту страницу, в меню для выбора рейтинга 
должен показаться рейтинг, который пользователь поставил продукту 
в последний раз, а в поле комментария – комментарий, который пользователь 
написал в последний раз. В списке пользователь может изменить рейтинг 
и комментарий, после чего нажать кнопку “Сохранить”. 
После этого введенная информация сохранится в базе данных, а пользователь 
снова окажется на странице со списком продуктов. 
Пользователь может несколько раз поставить рейтинг одному и тому же продукту, 
при этом система будет использовать рейтинг, который был поставлен в последний раз. 
Если пользователь поставил рейтинг продукту, то он может его и убрать.

Третья страница

Название продукта на второй странице является ссылкой на третью страницу. 
На третьей странице написано название продукта, ниже идет список пользователей.
Для каждого пользователя в этом списке пишется следующая информация: 
имя пользователя (то же самое имя, которое используется при входе в систему), 
рейтинг, который данный пользователь поставил данному продукту, комментарий 
данного пользователя о данном продукте. Если пользователь не поставил рейтинг продукту, 
то он не пишется в данном списке. Внизу списка пишется сумма всех рейтингов 
и среднее значение рейтинга для данного продукта.