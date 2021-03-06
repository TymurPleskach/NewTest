<?php

$I = new AcceptanceTester($scenario);
$I->wantTo('Netpeak test task');
$I->maximizeWindow();


$I->amGoingTo('follow the link to the main page of the Netpeak website.');
$I->amOnURL('https://netpeak.ua/');


$I->amGoingTo('the "Работа в Netpeak" page by clicking on the "Карьера" button.');
$I->waitForElementClickable("//*[@id='rec278727844']/div/div/div/div[1]/div/nav/div[1]/div[1]/ul/li[4]/a", 15);
$I->click("//*[@id='rec278727844']/div/div/div/div[1]/div/nav/div[1]/div[1]/ul/li[4]/a");


$I->switchToNextTab();

$I->amGoingTo('the application page by clicking the button - "I want to work for Netpeak".');
$I->waitForElementClickable("/html/body/div[5]/div/div/div[2]/div/a", 15);
$I->click("/html/body/div[5]/div/div/div[2]/div/a");


$I->amGoingTo('Upload a file with an invalid format in the "Резюме" block, and check that a message appears on the page stating that the image format is incorrect.');
$I->waitForElementClickable("//*[@id='upload']", 15);
$I->attachFile('//*[@id="upload"]', 'Testimg.jpeg');
# так просто загрузить картинку невыходит, до проверки текста и не дошло.


$I->amGoingTo('fill in the block "3. Личные данные" with random data.');
$I->fillField("//*[@id='inputName']", "Randomname");
$I->fillField("//*[@id='inputLastname']", "Randomlastname");
$I->fillField("//*[@id='inputEmail']", "Random@Email.com");
$I->fillField("//*[@id='inputPhone']", "+38805553535");


$I->amGoingTo('click on the "Отправить анкету" button.');
$I->click("//*[@id='submit']");


$I->amGoingTo('Check that the message on the current page - "Все поля являются обязательными для заполнения" - is highlighted in red. ');
# и тут не справился


$I->amGoingTo('the "Курсы" page by clicking the appropriate button in the menu and make sure that the desired page opens. ');
# кнопка "Курсы" отсутствут, предположил, что вмето неё "Интернатура"
$I->click("//*[@id='main-menu']/ul/li[3]/a");
$I->wait(2);
$I->seeElement('//*[@id="hero"]/div/div/h1');

$I->amGoingTo("say that this autotest is terrible, like it was expected from my first codeception autotest.");


?>