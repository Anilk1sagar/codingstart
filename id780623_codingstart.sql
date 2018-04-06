-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 29, 2017 at 11:41 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id780623_codingstart`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `p_id` int(11) NOT NULL,
  `p_title` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `p_imgLink` text COLLATE utf8_unicode_ci NOT NULL,
  `p_description` text COLLATE utf8_unicode_ci NOT NULL,
  `p_keyFeatures` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `p_downloadLink` text COLLATE utf8_unicode_ci NOT NULL,
  `p_demoLink` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`p_id`, `p_title`, `p_imgLink`, `p_description`, `p_keyFeatures`, `p_downloadLink`, `p_demoLink`) VALUES
(1, 'Accordion Menu', 'accordion-menu.png', 'This is a Accordion Menu Using jQuery And CSS. it works fine in all modern or old browsers and also in computer or smartphones.', 'jQuery, HTML5 and CSS3', 'Codes/Download/Accordion Menu Using jQuery And CSS.zip', 'Codes/demo/Accordion Menu Using jQuery And CSS/index.html'),
(2, 'Auto Expanding Textarea', 'auto-expanding-textarea.png', 'This is a Auto Expanding Textarea. It help to create a textarea on your webpages or website. It works fine in all modern or old browsers and also in computer or smartphones.', 'Javascript & jQuery, HTML5 and CSS3', 'Codes/Download/Auto Expanding Textarea Using JavaScript And CSS.zip', 'Codes/demo/Auto Expanding Textarea Using JavaScript And CSS/index.html'),
(3, 'Background color change with Skroll', 'background change.png', 'This is a Background color change with Skroll. this will give you very cool look to your website and it is very easy to use and works all cross browsers.', 'Javascript, HTML5 and CSS3', 'Codes/Download/Background color change with Skrollr.zip', 'Codes/demo/Background color change with Skrollr/index.html'),
(4, 'Bike HTML , CSS', 'bike.png', 'This is a Bike HTML + CSS. this is made for learning. it use only html and css.', 'HTML5 and CSS3', 'Codes/Download/Bike HTML + CSS.zip', 'Codes/demo/Bike HTML + CSS/index.html'),
(5, 'Bootstrap Progress Bars', 'progressbar.png', 'This is Bootstrap progress bars for your webpages. it has a very easy and readable code. this code include animated, Colored Progress Bars, Colored strip Progress Bar.', 'Bootstrap Framework, HTML5 and CSS3, Bootstrap Javascript', 'Codes/Download/Bootstrap progress bars.zip', 'Codes/demo/Bootstrap progress bars/index.html'),
(6, 'JavaScript Calculator', 'calculator.png', 'This is simple javascript calculator with system calculator functionality. It has easy understandable code.', 'HTML5 and CSS3, JavaScript', 'Codes/Download/Calculator.zip', 'Codes/demo/Calculator/index.html'),
(7, 'Collapsing header using javascript', 'collaps header.png', 'This is Collapsing header for your webpages. It collapse while you scroll the webpage it is very useful and cool to having on your website. it has a very easy and readable code.', 'HTML5 and CSS3, javascript & jQuery', 'Codes/Download/collaps header.zip', 'Codes/demo/collaps header/index.html'),
(8, 'PHP Contact Form', 'contact form.png', 'This is a php full working contact form. you can use this form in your websites. It has easy understandable code. It has material design ui.', 'PHP, HTML, CSS', 'Codes/Download/contact form.zip', 'Codes/demo/contact form/index.php'),
(9, 'CSS and jQuery control Electric box', 'electricbox.png', 'This is a html, css, jquery full working Electric box. this electric box made for only learning purpose. User can download and fun with it and learn from Electric box code.', 'Javascript & jQuery, HTML5 and CSS3, Bootstrap Framework', 'Codes/Download/CSS3, AND jQuery full control Electric box.zip', 'Codes/demo/CSS3, AND jQuery full control Electric box/index.html'),
(10, 'jQuery Image Slider', 'slider.png', 'This is a jQuery cycle plugin image slider. this Image slider is very easy to use. it has horizontal, vertical, flip, slide and fade effects. This is not responsive slider but works fine in all cross browsers.', 'jQuery Plugin, HTML5 and CSS3, jQuery', 'Codes/Download/css3, jquery cool slider.zip', 'Codes/demo/css3, jquery cool slider/index.html'),
(11, 'Digital Clock With Complete Time And Date', 'digital-clock.png', 'This is Digital Clock With Complete Time And Date for your webpages. it has a very easy and readable code. It work fine in all browsers. It will show you exact time and date.', 'Javascript & jQuery, HTML5 and CSS3', 'Codes/Download/Digital Clock With Complete Time And Date Using CSS And JavaScript.zip', 'Codes/demo/Digital Clock With Complete Time And Date Using CSS And JavaScript/index.html'),
(12, 'Full Responsive Table', 'responsive-table.png', 'This is Full Responsive Table for your webpages. it has a very easy and readable code. this table very usefull and it is full responsive and works fine in all cross browser.', 'Bootstrap Framework, HTML5 and CSS3', 'Codes/Download/Full Responsive Table Using HTML And CSS.zip', 'Codes/demo/Full Responsive Table Using HTML And CSS/index.html'),
(13, 'Facebook Phishing Page', 'facebook phishing.png', 'This is a facebook phishing page. It is not for hacking and cheating . it is only for learning purpose.', 'PHP, HTML, CSS', 'Codes/Download/facebook phishing.zip', 'http://viid.me/qepy9S'),
(14, 'HTML and CSS Login box', 'login.png', 'This is a simple html css login and registration page for those user who want to add login and registration system in our websites or web pages.', 'HTML and CSS, jQuery, Media Query for Responsive', 'Codes/Download/html5 and css3 login.zip', 'Codes/demo/html5 and css3 login/index.html'),
(15, 'HTML, CSS, AND jQuery audio Piano', 'piano.png', 'This is a html, css, jquery full working audio piano. this piano made for only learning purpose. User can download and fun with it and learn from piano code.', 'Javascript & jQuery, HTML and CSS, Sound Audios', 'Codes/Download/html, css, and jquery piano.zip', 'Codes/demo/piano/index.html'),
(16, 'Image hover zoom Effect', 'image-hover-effect.png', 'This is image hover zoom effect using html ccss it shows css image hover effect it has very simple code. download and learn css image hover effect.', 'Javascript & jQuery, HTML and CSS', 'Codes/Download/image hover effect.zip', 'Codes/demo/image hover effect/index.html'),
(17, 'jQuery image Slider (No-Plugin)', 'jquery-slider-no-plugin.png', 'This is a jQuery image slider with no-plugin. this Image slider is very easy to use. This image slider code is very easy to understand so uder cn learn and modifi code to add some more features on it.', 'Javascript & jQuery, HTML and CSS', 'Codes/Download/jquery slider (no-plugin).zip', 'Codes/demo/jquery slider (no-plugin)/index.html'),
(18, 'jQuery simple PopUp-box', 'popup-box.png', 'This is jQuery simple PopUp-box for your webpages. It is very simple pop up box using jQuery. It open when you click the button. it has a very easy and readable code.', 'jQuery, HTML and CSS', 'Codes/Download/jQuery Simple and cool Popup-box.zip', 'Codes/demo/jQuery Simple and cool Popup-box/index.html'),
(19, 'Login With Background Animation', 'login with background animation.png', 'This is a log in form using html and css with simple and nice background animation.', 'HTML, CSS', 'Codes/Download/login with background animation.zip', 'Codes/demo/login with background animation/index.html'),
(20, 'Css Moon', 'moon.png', 'This is a moon using css and javascript with simple and nice background animation.', 'HTML and CSS, Javascript', 'Codes/Download/Moon.zip', 'Codes/demo/Moon/index.html'),
(21, 'Parallax effect using javascript', 'parallax.png', 'This is parallax effect using javascript for your webpages. it has a very easy and readable code. It is very simple parallax effect using only javascript and no plug-in use. you can use in your website. It works fine in all cross browsers.', 'Javascript, HTML and CSS', 'Codes/Download/Parallax.zip', 'Codes/demo/Parallax effect using javascript/index.html'),
(22, 'Password Strength Checker Using JavaScript and CSS', 'password-strenght-checker.png', 'This is Password Strength Checker Using JavaScript and CSS for your webpages. it has a very easy and readable code. you can use in your website. It works fine in all cross browsers.', 'Javascript, HTML and CSS', 'Codes/Download/Password Strength Checker.zip', 'Codes/demo/Password Strength Checker/index.html'),
(23, 'Play Sound On Notification Using JavaScript And CSS', 'play-sound-notification.png', 'This is Play Sound On Notification Using JavaScript And CSS for your webpages. it has a very easy and readable code. It is also chating system whenever you recive a notification it play sound. you can use in your website. It works fine in all cross browsers', 'Javascript, HTML and CSS', 'Codes/Download/Play Sound On Notification.zip', 'Codes/demo/Play Sound On Notification/index.html'),
(24, 'Responsive jQuery Image Slider', 'responsive-slider.png', 'This is a jQuery cycle-2 plugin responsive image slider. this Image slider is very easy to use. it has horizontal, vertical, flip, slide and fade effects. This is fully responsive slider works fine in all cross browsers.', 'Javascript, HTML and CSS, jQuery Plugin', 'Codes/Download/responsive jquery slider.zip', 'Codes/demo/responsive jquery slider/index.html'),
(25, 'Responsive Menu Bar Using CSS and JS', 'menu using js.png', 'This is a responsive css3 and javascript navigation bar. it works fine in all modern or old browsers and also in computer or smartphones.', 'Javascript, HTML and CSS', 'Codes/Download/Responsive menu bar using css3 and js.zip', 'Codes/demo/responsivemenu/index.html'),
(26, 'Responsive navigation bar', 'menu.png', 'This is a simple responsive and cross platform navigation bar. This navigation bar works fine in Computer , tablets, and smartphones.', 'HTML, CSS', 'Codes/Download/css3 responsive navigation.zip', 'Codes/demo/css3 responsive navigation/responsive.html'),
(27, 'Simple Sidebar Navigation', 'sidebar navigation.png', 'This is a simple javascript sidebar navigation. This navigation bar is very easy to use. This is fully responsive navigation bar works fine in all cross browsers.', 'Javascript, HTML and CSS', 'Codes/Download/Sidebar Navigation.zip', 'Codes/demo/Sidebar Navigation/index.html'),
(28, 'Simple Custom Popup Box', 'best-custom-pop-up-box.png', 'This is Simple Custom Popup Box for your webpages. It is very simple pop up box using jQuery. It open when you click the button. it has a very easy and readable code.', 'Javascript & jQuery, HTML and CSS', 'Codes/Download/Simple And Best Custom Popup Box.zip', 'Codes/demo/Simple And Best Custom Popup Box Using jQuery And CSS/index.html'),
(29, 'Simple Drop Down menu', 'simple drop down menu.png', 'This is a drop down navigation bar which help user to build or learn to make a dropdown navigation bar. This bar is only for learning purpose.', 'HTML, CSS', 'Codes/Download/Simple Drop down menu.zip', 'Codes/demo/Simple Drop down menu/index.html'),
(30, 'Simple Value Countdown Using jQuery', 'value-countdown.png', 'This is Simple Value Countdown for your webpages. It has a very easy and readable code. you can use in your website. It works fine in all cross browsers.', 'Javascript, HTML and CSS', 'Codes/Download/Simple Value Countdown Using jQuery.zip', 'Codes/demo/Simple Value Countdown Using jQuery/index.html');
<div class="error"><h1>Error</h1><p><strong>SQL query:</strong>
<a href="db_sql.php?sql_query=SHOW+TABLE+STATUS+FROM+%60id780623_codingstart%60+WHERE+Name+%3D+%27users%27&amp;show_query=1&amp;db=id780623_codingstart&amp;token=e455e47a7a82f8d768aae74124e24248"><span class="nowrap"><img src="themes/dot.gif" title="Edit" alt="Edit" class="icon ic_b_edit" />&nbsp;Edit</span></a>    </p>
<p>
<code class="sql"><pre>
SHOW TABLE STATUS FROM `id780623_codingstart` WHERE Name = 'users'
</pre></code>
</p>
<p>
    <strong>MySQL said: </strong><a href="./url.php?url=https%3A%2F%2Fdev.mysql.com%2Fdoc%2Frefman%2F5.7%2Fen%2Ferror-messages-server.html" target="mysql_doc"><img src="themes/dot.gif" title="Documentation" alt="Documentation" class="icon ic_b_help" /></a>
</p>
<code>#2006 - MySQL server has gone away</code><br/></div>