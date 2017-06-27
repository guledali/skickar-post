-- Adminer 4.3.0 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `messages`;
CREATE TABLE `messages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `page`;
CREATE TABLE `page` (
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `page` (`content`) VALUES
(' <section class=\"mt-5\">\r\n                <div class=\"container\">\r\n            <div class=\"accordion\">\r\n                <ul class=\"list-unstyled\">\r\n                    <li class=\"open js-question-wrapper\">\r\n                        <div class=\"question\">\r\n                            <h2>Utbildningar</h2>\r\n                            <i class=\"fa fa-arrow-down\" aria-hidden=\"true\"></i>\r\n                        </div>\r\n                        <div class=\"answer\">\r\n                            <p>Har gått i flera skolor runt om  landet, gymnasieskolor har varit primärt didaktus men ett kort tag innan studerade jag i huddinge gymnasiet, efter de var de ett halvår hällefors där jag gick på en folkhögskola med inriktning industridesign. Sedan kom jag in på lärarprogrammet i dalarna. Vilket jag hoppade väldigt fort läste sedan fristående kurser i stockholms universitet. </p>\r\n                        </div>\r\n                    </li>\r\n                    <li class=\"js-question-wrapper\">\r\n                        <div class=\"question\">\r\n                            <h2>Arbete</h2>\r\n                            <i class=\"fa fa-arrow-down\" aria-hidden=\"true\"></i>\r\n                        </div>\r\n                        <div class=\"answer\">\r\n                            <p>Jag har jobbat som telefonförsäljare, jag har praktisserat i coop 3 månader och sen har haft student jobb som att sortera poster.</p>\r\n                        </div>\r\n                    </li>\r\n                    <li class=\"js-question-wrapper\">\r\n                        <div class=\"question\">\r\n                            <h2>Fritiden</h2>\r\n                            <i class=\"fa fa-arrow-down\" aria-hidden=\"true\"></i>\r\n                        </div>\r\n                        <div class=\"answer\">\r\n                            <p>Jag gör inte så mycket under fritiden läser gärna neil gaiman om jag har tid. Älskar att läsa serier och lyssna på rapmusik</p>\r\n                        </div>\r\n                    </li>\r\n                </ul>\r\n            </div>\r\n        </div>\r\n    </section>\r\n');

-- 2017-06-17 09:24:54