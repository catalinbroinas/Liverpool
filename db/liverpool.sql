-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: iul. 30, 2022 la 10:55 AM
-- Versiune server: 10.4.20-MariaDB
-- Versiune PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `liverpool`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `calendar`
--

CREATE TABLE `calendar` (
  `id` int(4) NOT NULL,
  `month` text CHARACTER SET utf8 NOT NULL,
  `year` int(4) NOT NULL,
  `data` date NOT NULL,
  `city` text CHARACTER SET utf8 NOT NULL,
  `stadium` text CHARACTER SET utf8 NOT NULL,
  `iconC` text CHARACTER SET utf8 NOT NULL,
  `iconT` text CHARACTER SET utf8 NOT NULL,
  `team` text CHARACTER SET utf8 NOT NULL,
  `status` varchar(9) CHARACTER SET utf8 NOT NULL,
  `goalsH` varchar(5) CHARACTER SET utf8 DEFAULT NULL,
  `goalsA` varchar(5) CHARACTER SET utf8 DEFAULT NULL,
  `link` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `calendar`
--

INSERT INTO `calendar` (`id`, `month`, `year`, `data`, `city`, `stadium`, `iconC`, `iconT`, `team`, `status`, `goalsH`, `goalsA`, `link`) VALUES
(1, '1', 2020, '2020-01-02', 'Liverpool', 'Anfield Road', 'plIcon.png', 'sheff.ico', 'Sheffield United', 'disputed', '2', '0', 'https://www.liverpoolfc.com/match/2019-20/first-team/liverpool-v-sheffield-united-live-matchday-blog'),
(2, '1', 2020, '2020-01-11', 'Londra', 'Tottenham Hotspur', 'plIcon.png', 'spurs.png', 'Tottenham Hotspur', 'disputed', '0', '1', 'https://www.liverpoolfc.com/match/2019-20/first-team/tottenham-hotspur-v-liverpool-live-matchday-blog'),
(6, '2', 2020, '2020-02-01', 'Liverpool', 'Anfield Road', 'plIcon.png', 'south.png', 'Southampton', 'disputed', '4', '0', 'https://www.liverpoolfc.com/match/2019-20/first-team/liverpool-v-southampton-live-matchday-blog'),
(7, '1', 2020, '2020-01-19', 'Liverpool', 'Anfield Road', 'plIcon.png', 'utd.ico', 'Manchester United', 'disputed', '2', '0', 'https://www.liverpoolfc.com/match/2019-20/first-team/liverpool-v-manchester-united-live-matchday-blog'),
(9, '2', 2020, '2020-02-04', 'Liverpool', 'Anfield Road', 'faIcon.png', 'shrews.png', 'Shrewsbury Town', 'disputed', '1', '0', 'https://www.liverpoolfc.com/match/2019-20/first-team/liverpool-v-shrewsbury-town-live-matchday-blog'),
(11, '1', 2020, '2020-01-05', 'Liverpool', 'Anfield Road', 'faIcon.png', 'eve.png', 'Everton', 'disputed', '1', '0', 'https://www.liverpoolfc.com/match/2019-20/first-team/liverpool-v-everton-live-fa-cup-matchday-blog'),
(15, '1', 2020, '2020-01-23', 'Wolverhampton', 'Molineux', 'plIcon.png', 'wolves.png', 'Wolverhampton', 'disputed', '1', '2', 'https://www.liverpoolfc.com/match/2019-20/first-team/wolverhampton-wanderers-v-liverpool-live-matchday-blog'),
(16, '1', 2020, '2020-01-26', 'Shrewsbury', 'New Meadow', 'faIcon.png', 'shrews.png', 'Shrewsbury Town', 'disputed', '2', '2', 'https://www.liverpoolfc.com/match/2019-20/first-team/shrewsbury-town-v-liverpool-fa-cup-live-match-blog'),
(17, '1', 2020, '2020-01-29', 'Londra', 'London Stadium', 'plIcon.png', 'west.png', 'West Ham United', 'disputed', '0', '2', 'https://www.liverpoolfc.com/match/2019-20/first-team/west-ham-united-v-liverpool-live-match-blog'),
(18, '7', 2019, '2019-07-11', 'Tranmere', 'Pranton Park', 'friendly.png', 'tranm.png', 'Tranmere Rovers', 'disputed', '0', '6', 'https://www.liverpoolfc.com/match/2019-20/first-team/liverpool-v-southampton-live-matchday-blog'),
(19, '7', 2019, '2019-07-14', 'Bradford', 'Northem Commercials', 'friendly.png', 'brad.png', 'Bradford City', 'disputed', '1', '3', 'https://www.liverpoolfc.com/match/2019-20/first-team/bradford-city-v-liverpool-live-matchday-blog'),
(20, '7', 2019, '2019-07-20', 'Notre Dame', 'Notre Dame', 'friendly.png', 'bvb.png', 'Borussia Dortmund', 'disputed', '3', '2', 'https://www.liverpoolfc.com/match/2019-20/first-team/liverpool-v-borussia-dortmund-live-match-blog'),
(21, '7', 2019, '2019-07-21', 'Boston', 'Fenway Park', 'friendly.png', 'sev.png', 'Sevilla', 'disputed', '2', '1', 'https://www.liverpoolfc.com/match/2019-20/first-team/liverpool-v-sevilla-live-match-blog'),
(22, '7', 2019, '2019-07-25', 'New York', 'Yankee', 'friendly.png', 'scp.png', 'Sporting CF', 'disputed', '2', '2', 'https://www.liverpoolfc.com/match/2019-20/first-team/liverpool-v-sporting-cp-live-match-blog'),
(23, '7', 2019, '2019-07-28', 'Edinburgh', 'Murrayfield', 'friendly.png', 'napoli.png', 'Napoli', 'disputed', '3', '0', 'https://www.liverpoolfc.com/match/2019-20/first-team/liverpool-v-napoli-live-match-blog'),
(24, '7', 2019, '2019-07-31', 'Geneva', 'Stade de Geneve', 'friendly.png', 'lyon.png', 'Lyon', 'disputed', '1', '3', 'https://www.liverpoolfc.com/match/2019-20/first-team/liverpool-v-lyon-live-match-blog'),
(25, '8', 2019, '2019-08-04', 'Londra', 'Wembley', 'commsh1.jpg', 'city1.png', 'Manchester City', 'disputed', '1', '1', 'https://www.liverpoolfc.com/match/2019-20/first-team/liverpool-v-manchester-city-live-community-shield-blog'),
(26, '8', 2019, '2019-08-09', 'Liverpool', 'Anfield Road', 'plIcon.png', 'norwich.png', 'Norwich City', 'disputed', '4', '1', 'https://www.liverpoolfc.com/match/2019-20/first-team/liverpool-v-norwich-city-live-matchday-blog'),
(27, '8', 2019, '2019-08-14', 'Istanbul', 'Besiktas Park', 'superCupIcon.png', 'chelsea.ico', 'Chelsea', 'disputed', '2', '2', 'https://www.liverpoolfc.com/match/2019-20/first-team/liverpool-v-chelsea-uefa-super-cup-matchday-blog'),
(28, '8', 2019, '2019-08-17', 'Southampton', 'St Mary`s', 'plIcon.png', 'south.png', 'Southampton', 'disputed', '1', '2', 'https://www.liverpoolfc.com/match/2019-20/first-team/southampton-v-liverpool-live-matchday-blog'),
(29, '8', 2019, '2019-08-24', 'Liverpool', 'Anfield Road', 'plIcon.png', 'arsenal.png', 'Arsenal', 'disputed', '3', '1', 'https://www.liverpoolfc.com/match/2019-20/first-team/liverpool-v-arsenal-live-matchday-blog'),
(30, '8', 2019, '2019-08-31', 'Burnley', 'Turf Moor', 'plIcon.png', 'burn.png', 'Burnley', 'disputed', '0', '3', 'https://www.liverpoolfc.com/match/2019-20/first-team/burnley-v-liverpool-live-matchday-blog'),
(31, '9', 2019, '2019-09-14', 'Liverpool', 'Anfield Road', 'plIcon.png', 'newcastle.png', 'Newcastle United', 'disputed', '3', '1', 'https://www.liverpoolfc.com/match/2019-20/first-team/liverpool-v-newcastle-united-live-matchday-blog'),
(32, '2', 2020, '2020-02-15', 'Norwich', 'Carrow Road', 'plIcon.png', 'norwich.png', 'Norwich City', 'disputed', '0', '1', 'https://www.liverpoolfc.com/match/2019-20/first-team/norwich-city-v-liverpool-live-matchday-blog'),
(35, 'Aprilie', 5, '2020-04-05', 'Manchester', 'Etihad', 'plIcon.png', 'city1.png', 'Manchester City', 'no', NULL, NULL, '#'),
(36, '9', 2019, '2019-09-17', 'Napoli', 'San Paolo', 'uclIcon.png', 'napoli.png', 'Napoli', 'disputed', '2', '0', 'https://www.liverpoolfc.com/match/2019-20/first-team/napoli-v-liverpool-live-matchday-blog'),
(37, '9', 2019, '2019-09-22', 'Londra', 'Standford Bridge', 'plIcon.png', 'chelsea.ico', 'Chelsea', 'disputed', '1', '2', 'https://www.liverpoolfc.com/match/2019-20/first-team/chelsea-v-liverpool-live-matchday-blog'),
(38, '9', 2019, '2019-09-25', 'Milton Keynes', 'Stadium MK', 'carabaoCup.png', 'mkDons.png', 'MK Dons', 'disputed', '0', '2', 'https://www.liverpoolfc.com/match/2019-20/first-team/mk-dons-v-liverpool-live-matchday-blog'),
(39, '9', 2019, '2019-09-28', 'Sheffield', 'Bramall Lane', 'plIcon.png', 'sheff.ico', 'Sheffield United', 'disputed', '0', '1', 'https://www.liverpoolfc.com/match/2019-20/first-team/sheffield-united-v-liverpool-live-matchday-blog'),
(40, '10', 2019, '2019-10-02', 'Liverpool', 'Anfield Road', 'uclIcon.png', 'redBull.png', 'RB Salzburg', 'disputed', '4', '3', 'https://www.liverpoolfc.com/match/2019-20/first-team/liverpool-v-fc-salzburg-live-champions-league-match-blog'),
(41, '10', 2019, '2019-10-05', 'Liverpool', 'Anfield Road', 'plIcon.png', 'lester.png', 'Leicester City', 'disputed', '2', '1', 'https://www.liverpoolfc.com/match/2019-20/first-team/liverpool-v-leicester-city-live-matchday-blog'),
(42, '10', 2019, '2019-10-20', 'Manchester', 'Old Trafford', 'plIcon.png', 'utd.ico', 'Manchester United', 'disputed', '1', '1', 'https://www.liverpoolfc.com/match/2019-20/first-team/manchester-united-v-liverpool-live-matchday-blog'),
(43, '10', 2019, '2019-10-23', 'Genk', 'KRC Genk Arena', 'uclIcon.png', 'genk.png', 'KRC Genk', 'disputed', '1', '4', 'https://www.liverpoolfc.com/match/2019-20/first-team/genk-v-liverpool-live-matchday-blog'),
(44, '10', 2019, '2019-10-27', 'Liverpool', 'Anfield Road', 'plIcon.png', 'spurs.png', 'Tottenham Hotspur', 'disputed', '2', '1', 'https://www.liverpoolfc.com/match/2019-20/first-team/liverpool-v-tottenham-hotspur-live-matchday-blog'),
(45, '10', 2019, '2019-10-30', 'Liverpool', 'Anfield Road', 'carabaoCup.png', 'arsenal.png', 'Arsenal', 'disputed', '5', '5', 'https://www.liverpoolfc.com/match/2019-20/first-team/liverpool-v-arsenal-carabao-cup-live-matchday-blog'),
(46, '11', 2019, '2019-11-02', 'Birmingham', 'Villa Park', 'plIcon.png', 'avfc.png', 'Aston Vlla', 'disputed', '1', '2', 'https://www.liverpoolfc.com/match/2019-20/first-team/aston-villa-v-liverpool-live-matchday-blog'),
(47, '11', 2019, '2019-11-05', 'Liverpool', 'Anfield Road', 'uclIcon.png', 'genk.png', 'KRC Genk', 'disputed', '2', '1', 'https://www.liverpoolfc.com/match/2019-20/first-team/liverpool-v-genk-live-matchday-blog'),
(48, '11', 2019, '2019-11-10', 'Liverpool', 'Anfield Road', 'plIcon.png', 'city1.png', 'Manchester City', 'disputed', '3', '1', 'https://www.liverpoolfc.com/match/2019-20/first-team/liverpool-v-manchester-city-live-matchday-blog'),
(49, '11', 2019, '2019-11-23', 'Londra', 'Selhurst Park', 'plIcon.png', 'crystal.png', 'Crystal Palace', 'disputed', '1', '2', 'https://www.liverpoolfc.com/match/2019-20/first-team/crystal-palace-v-liverpool-live-matchday-blog'),
(50, '11', 2019, '2019-11-27', 'Liverpool', 'Anfield Road', 'uclIcon.png', 'napoli.png', 'Napoli', 'disputed', '1', '1', 'https://www.liverpoolfc.com/match/2019-20/first-team/liverpool-v-napoli-live-matchday-blog'),
(51, '11', 2019, '2019-11-30', 'Liverpool', 'Anfield Road', 'plIcon.png', 'brigh.png', 'Brighton', 'disputed', '2', '1', 'https://www.liverpoolfc.com/match/2019-20/first-team/fixtures-and-results'),
(52, '12', 2019, '2019-12-04', 'Liverpool', 'Anfield Road', 'plIcon.png', 'eve.png', 'Everton', 'disputed', '5', '2', 'https://www.liverpoolfc.com/match/2019-20/first-team/liverpool-v-everton-live-matchday-blog'),
(53, '12', 2019, '2019-12-07', 'Bournemouth', 'Vitality Stadium', 'plIcon.png', 'afc.png', 'AFC Bournemouth', 'disputed', '0', '3', 'https://www.liverpoolfc.com/match/2019-20/first-team/bournemouth-v-liverpool-live-matchday-blog'),
(54, '12', 2019, '2019-12-10', 'Salzburg', 'Red Bull Arena', 'uclIcon.png', 'redBull.png', 'RB Salzburg', 'disputed', '0', '2', 'https://www.liverpoolfc.com/match/2019-20/first-team/salzburg-v-liverpool-live-matchday-blog'),
(55, '12', 2019, '2019-12-14', 'Liverpool', 'Anfield Road', 'plIcon.png', 'watford.png', 'Watford', 'disputed', '2', '0', 'https://www.liverpoolfc.com/match/2019-20/first-team/liverpool-v-watford-live-matchday-blog'),
(56, '12', 2019, '2019-12-17', 'Birmingham', 'Villa Park', 'carabaoCup.png', 'avfc.png', 'Aston Vlla', 'disputed', '5', '0', 'https://www.liverpoolfc.com/match/2019-20/first-team/aston-villa-v-liverpool-carabao-cup-live-match-blog'),
(57, '12', 2019, '2019-12-26', 'Leicester', 'King Power Stadium', 'plIcon.png', 'lester.png', 'Leicester City', 'disputed', '0', '4', 'https://www.liverpoolfc.com/match/2019-20/first-team/leicester-city-v-liverpool-live-matchday-blog'),
(58, '12', 2019, '2019-12-29', 'Liverpool', 'Anfield Road', 'plIcon.png', 'wolves.png', 'Wolverhampton', 'disputed', '1', '0', 'https://www.liverpoolfc.com/match/2019-20/first-team/liverpool-v-wolverhampton-wanderers-live-matchday-blog'),
(59, '12', 2019, '2019-12-18', 'Doha', 'Khalifa Stadium', 'world.png', 'cfM.png', 'CF Monterrey', 'disputed', '1', '2', 'https://www.liverpoolfc.com/match/2019-20/first-team/fifa-club-world-cup-match-one-live-blog'),
(60, '12', 2019, '2019-12-21', 'Doha', 'Khalifa Stadium', 'world.png', 'flamengo.png', 'Flamengo', 'disputed', '0', '0', 'https://www.liverpoolfc.com/match/2019-20/first-team/liverpool-v-flamengo-fifa-club-world-cup-final-live-blog'),
(61, '2', 2020, '2020-02-18', 'Madrid', 'Estadio Metropolitano', 'uclIcon.png', 'athM.png', 'Atletico Madrid', 'disputed', '1', '0', 'https://www.liverpoolfc.com/match/2019-20/first-team/atletico-madrid-v-liverpool-live-champions-league-match-blog'),
(62, '2', 2020, '2020-02-24', 'Liverpool', 'Anfield Road', 'plIcon.png', 'west.png', 'West Ham', 'disputed', '3', '2', 'https://www.liverpoolfc.com/match/2019-20/first-team/liverpool-v-west-ham-united-live-matchday-blog'),
(63, '2', 2020, '2020-02-29', 'Watford', 'Vicarage Road', 'plIcon.png', 'watford.png', 'Watford', 'disputed', '3', '0', 'https://www.liverpoolfc.com/match/2019-20/first-team/watford-v-liverpool-live-matchday-blog'),
(64, '3', 2020, '2020-03-03', 'Londra', 'Standford Bridge', 'faIcon.png', 'chelsea.ico', 'Chelsea', 'disputed', '2', '0', 'https://www.liverpoolfc.com/match/2019-20/first-team/chelsea-v-liverpool-fa-cup-live-matchday-blog'),
(65, '3', 2020, '2020-03-07', 'Liverpool', 'Anfield Road', 'plIcon.png', 'afc.png', 'AFC Bournemouth', 'disputed', '2', '1', 'https://www.liverpoolfc.com/match/2019-20/first-team/liverpool-v-bournemouth-live-matchday-blog'),
(66, '3', 2020, '2020-03-11', 'Liverpool', 'Anfield Road', 'uclIcon.png', 'athM.png', 'Atletico Madrid', 'disputed', '1', '0', 'https://www.liverpoolfc.com/match/2019-20/first-team/liverpool-v-atletico-madrid-champions-league-live-match-blog'),
(69, '', 0, '2020-07-26', 'Newcastle', 'ST. James Park', 'plIcon.png', 'newcastle.png', 'Newcastle United', 'dis', '1', '3', 'https://www.liverpoolfc.com/news/first-team/403507-match-report-liverpool-newcastle-premier-league'),
(71, '', 0, '2020-08-14', 'Newcastle', 'Standford Bridge', 'plIcon.png', 'newcastle.png', 'Newcastle United', 'disputed', '2', '2', 'http://localhost/Liverpool/view/AdminCalendar.php'),
(74, '8', 2020, '2020-08-22', 'Salzburg', 'Sportplatz Langau', 'friendly.png', 'vfbS.png', 'VFB Stuttgart', 'disputed', '0', '3', 'https://www.liverpoolfc.com/news/first-team/406319-match-report-stuttgart-pre-season-austria'),
(76, '8', 2020, '2020-08-25', 'Salzburg', 'Red Bull Arena', 'friendly.png', 'redBull.png', 'RB Salzburg', 'disputed', '2', '2', 'https://www.liverpoolfc.com/news/first-team/406623-liverpool-salzburg-friendly-match-report'),
(77, '8', 2020, '2020-08-29', 'Londra', 'Wembley', 'commsh1.jpg', 'arsenal.png', 'Arsenal', 'disputed', '1', '1', 'https://www.liverpoolfc.com/news/first-team/407082-community-shield-arsenal-liverpool-match-report'),
(78, '6', 2020, '2020-06-11', 'Liverpool', 'Anfield Road', 'friendly.png', 'blackburn.png', 'Blackburn Rovers', 'disputed', '6', '0', 'https://www.liverpoolfc.com/news/first-team/398399-match-report-liverpool-blackburn-rovers-friendly-anfield'),
(79, '6', 2020, '2020-06-21', 'Liverpool', 'Goodison Park', 'plIcon.png', 'eve.png', 'Everton', 'disputed', '0', '0', 'https://www.liverpoolfc.com/news/first-team/399393-match-report-everton-premier-league'),
(80, '6', 2020, '2020-06-24', 'Liverpool', 'Anfield Road', 'plIcon.png', 'crystal.png', 'Crystal Palace', 'disputed', '4', '0', 'https://www.liverpoolfc.com/news/first-team/399680-match-report-crystal-palace-premier-league'),
(81, '7', 2020, '2020-07-02', 'Manchester', 'Etihad Stadium', 'plIcon.png', 'city.png', 'Manchester City', 'disputed', '4', '0', 'https://www.liverpoolfc.com/news/first-team/400574-match-report-liverpool-manchester-city-premier-league'),
(82, '7', 2020, '2020-07-05', 'Liverpool', 'Anfield Road', 'plIcon.png', 'avfc.png', 'Aston Villa', 'disputed', '2', '0', 'https://www.liverpoolfc.com/news/first-team/400574-match-report-liverpool-manchester-city-premier-league'),
(83, '7', 2020, '2020-07-08', 'Brighton', 'Falmer Stadium', 'plIcon.png', 'brigh.png', 'Brighton', 'disputed', '1', '3', 'https://www.liverpoolfc.com/news/first-team/401327-brighton-liverpool-match-report-premier-league'),
(84, '7', 2020, '2020-07-11', 'Liverpool', 'Anfield Road', 'plIcon.png', 'burn.png', 'Burnley', 'disputed', '1', '1', 'https://www.liverpoolfc.com/news/first-team/401695-liverpool-burnley-match-report-premier-league'),
(85, '7', 2020, '2020-07-15', 'Londra', 'Emirates Stadium', 'plIcon.png', 'arsenal.png', 'Arsenal', 'disputed', '2', '1', 'https://www.liverpoolfc.com/news/first-team/402090-match-report-arsenal-premier-league'),
(86, '7', 2020, '2020-07-22', 'Liverpool', 'Anfield Road', 'plIcon.png', 'chelsea.ico', 'Chelsea', 'disputed', '5', '3', 'https://matchcentre.liverpoolfc.com/?utm_medium=referral&amp;utm_source=lfc-website-carousel&amp;utm_campaign=match-centre'),
(87, '7', 2020, '2020-07-26', 'Newcastle', 'St Jmes Park', 'plIcon.png', 'newcastle.png', 'Newcastle United', 'disputed', '1', '3', 'https://www.liverpoolfc.com/news/first-team/403507-match-report-liverpool-newcastle-premier-league'),
(88, '9', 2020, '2020-09-12', 'Liverpool', 'Anfield Road', 'plIcon.png', 'leeds.png', 'Leeds United', 'disputed', '4', '3', 'https://www.liverpoolfc.com/match/2020-21/first-team/liverpool-v-leeds-united-premier-league'),
(89, '9', 2020, '2020-09-20', 'Londra', 'Standford Bridge', 'plIcon.png', 'chelsea.ico', 'Chelsea', 'disputed', '0', '2', 'https://www.liverpoolfc.com/match/2020-21/first-team/chelsea-v-liverpool-premier-league'),
(90, '9', 2020, '2020-09-28', 'Liverpool', 'Anfield Road', 'plIcon.png', 'arsenal.png', 'Arsenal', 'disputed', '3', '1', 'https://www.liverpoolfc.com/match/2020-21/first-team/liverpool-v-arsenal-premier-league'),
(91, '10', 2020, '2020-10-04', 'Birmingham', 'Villa Park', 'plIcon.png', 'avfc.png', 'Aston Vlla', 'disputed', '7', '2', 'https://www.liverpoolfc.com/match/2020-21/first-team/aston-villa-v-liverpool-premier-league'),
(92, '10', 2020, '2020-10-17', 'Liverpool', 'Goodison Park', 'plIcon.png', 'eve.png', 'Eerton', 'disputed', '2', '2', 'https://www.liverpoolfc.com/match/2020-21/first-team/everton-v-liverpool-premier-league'),
(93, '10', 2020, '2020-10-24', 'Liverpool', 'Anfield Road', 'plIcon.png', 'sheff.ico', 'Sheffield United', 'disputed', '2', '1', 'https://www.liverpoolfc.com/match/2020-21/first-team/liverpool-v-sheffield-united-premier-league'),
(94, '10', 2020, '2020-10-31', 'Liverpool', 'Anfield Road', 'plIcon.png', 'west.png', 'West Ham', 'disputed', '2', '1', 'https://www.liverpoolfc.com/match/2020-21/first-team/liverpool-v-west-ham-united-premier-league'),
(95, '11', 2020, '2020-11-07', 'Manchester', 'Etihad Stadium', 'plIcon.png', 'city.png', 'Manchester City', 'disputed', '1', '1', 'https://www.liverpoolfc.com/match/2020-21/first-team/manchester-city-v-liverpool-premier-league'),
(96, '11', 2020, '2020-11-22', 'Liverpool', 'Anfield Road', 'plIcon.png', 'lester.png', 'Leicester City', 'disputed', '3', '0', 'https://www.liverpoolfc.com/match/2020-21/first-team/liverpool-v-leicester-city-premier-league'),
(97, '11', 2020, '2020-11-28', 'Brighton', 'Falmer Stadium', 'plIcon.png', 'brigh.png', 'Brighton', 'disputed', '1', '1', 'https://www.liverpoolfc.com/match/2020-21/first-team/brighton-hove-albion-v-liverpool-premier-league'),
(98, '12', 2020, '2020-12-06', 'Liverpool', 'Anfield Road', 'plIcon.png', 'wolves.png', 'Wolverhampton', 'disputed', '4', '0', 'https://www.liverpoolfc.com/match/2020-21/first-team/liverpool-v-wolverhampton-wanderers-premier-league'),
(99, '12', 2020, '2020-12-13', 'Londra', 'Craven Cottage', 'plIcon.png', 'fulham.png', 'Fulham', 'disputed', '1', '1', 'https://www.liverpoolfc.com/match/2020-21/first-team/fulham-v-liverpool-premier-league'),
(100, '12', 2020, '2020-12-16', 'Liverpool', 'Anfield Road', 'plIcon.png', 'spurs.png', 'Tottenham', 'disputed', '2', '1', 'https://www.liverpoolfc.com/match/2020-21/first-team/liverpool-v-tottenham-hotspur-premier-league'),
(101, '12', 2020, '2020-12-19', 'Londra', 'Selhurst Park', 'plIcon.png', 'crystal.png', 'Crystal Palace', 'disputed', '0', '7', 'https://www.liverpoolfc.com/match/2020-21/first-team/crystal-palace-v-liverpool-premier-league'),
(102, '12', 2020, '2020-12-27', 'Liverpool', 'Anfield Road', 'plIcon.png', 'westBrom.png', 'West Bromwich', 'disputed', '1', '1', 'https://www.liverpoolfc.com/match/2020-21/first-team/liverpool-v-west-bromwich-albion-premier-league'),
(103, '12', 2020, '2020-12-30', 'Newcastle', 'St. James` Park', 'plIcon.png', 'newcastle.png', 'Newcastle United', 'disputed', '0', '0', 'https://www.liverpoolfc.com/match/2020-21/first-team/newcastle-united-v-liverpool-premier-league'),
(104, '9', 2020, '2020-09-05', 'Liverpool', 'Anfield Road', 'friendly.png', 'blackpool.ico', 'Blackpool', 'disputed', '7', '2', 'https://www.liverpoolfc.com/news/first-team/407522-match-report-liverpool-blackpool-friendly'),
(105, '9', 2020, '2020-09-24', 'Lincoln', 'LNER Stadium', 'carabaoCup.png', 'lincoln.png', 'Lincoln City', 'disputed', '2', '7', 'https://www.liverpoolfc.com/match/2020-21/first-team/lincoln-city-v-liverpool-carabao-cup'),
(106, '10', 2020, '2020-10-01', 'Liverpool', 'Anfield Road', 'carabaoCup.png', 'arsenal.png', 'Arsenal', 'disputed', '0', '0', 'https://www.liverpoolfc.com/match/2020-21/first-team/liverpool-v-arsenal-carabao-cup'),
(108, '1', 2021, '2021-01-04', 'Southampton', 'St Mary`s', 'plIcon.png', 'south.png', 'Southampton', 'disputed', '1', '0', 'https://www.liverpoolfc.com/match/2020-21/first-team/southampton-v-liverpool-premier-league'),
(109, '1', 2021, '2021-01-21', 'Liverpool', 'Anfield Road', 'plIcon.png', 'burn.png', 'Burnley', 'disputed', '0', '1', 'https://www.liverpoolfc.com/match/2020-21/first-team/liverpool-v-burnley-premier-league'),
(110, '1', 2021, '2021-01-17', 'Liverpool', 'Anfield Road', 'plIcon.png', 'utd.ico', 'Manchester United', 'disputed', '0', '0', 'https://www.liverpoolfc.com/match/2020-21/first-team/liverpool-v-manchester-united-premier-league'),
(111, '1', 2021, '2021-01-28', 'Londra', 'Tottenham Hotspur', 'plIcon.png', 'spurs.png', 'Tottenham Hotspur', 'disputed', '1', '3', 'https://www.liverpoolfc.com/match/2020-21/first-team/tottenham-hotspur-v-liverpool-premier-league'),
(112, '1', 2021, '2021-01-31', 'Londra', 'London Stadium', 'plIcon.png', 'west.png', 'West Ham', 'disputed', '1', '3', 'https://www.liverpoolfc.com/match/2020-21/first-team/west-ham-united-v-liverpool-premier-league'),
(113, '2', 2021, '2021-02-03', 'Liverpool', 'Anfield Road', 'plIcon.png', 'brigh.png', 'Brighton', 'disputed', '0', '1', 'https://www.liverpoolfc.com/match/2020-21/first-team/liverpool-v-brighton-hove-albion-premier-league'),
(114, '2', 2021, '2021-02-07', 'Liverpool', 'Anfield Road', 'plIcon.png', 'city.png', 'Manchester City', 'disputed', '1', '4', 'https://www.liverpoolfc.com/match/2020-21/first-team/liverpool-v-manchester-city-premier-league'),
(115, '2', 2021, '2021-02-13', 'Leicester', 'King Power Stadium', 'plIcon.png', 'lester.png', 'Leicester City', 'disputed', '3', '1', 'https://www.liverpoolfc.com/match/2020-21/first-team/leicester-city-v-liverpool-premier-league'),
(116, '2', 2021, '2021-02-20', 'Liverpool', 'Anfield Road', 'plIcon.png', 'eve.png', 'Everton', 'disputed', '0', '2', 'https://www.liverpoolfc.com/match/2020-21/first-team/liverpool-v-everton-premier-league'),
(117, '2', 2021, '2021-02-28', 'Sheffield', 'Bramall Lane', 'plIcon.png', 'sheff.ico', 'Sheffield United', 'disputed', '0', '2', 'https://www.liverpoolfc.com/match/2020-21/first-team/sheffield-united-v-liverpool-premier-league'),
(118, '3', 2021, '2021-03-07', 'Liverpool', 'Anfield Road', 'plIcon.png', 'fulham.png', 'Fulham', 'disputed', '0', '1', 'https://www.liverpoolfc.com/match/2020-21/first-team/liverpool-v-fulham-premier-league'),
(119, '3', 2021, '2021-03-15', 'Wolverhampton', 'Molineux', 'plIcon.png', 'wolves.png', 'Wolverhampton', 'disputed', '0', '1', 'https://www.liverpoolfc.com/match/2020-21/first-team/wolverhampton-wanderers-v-liverpool-premier-league'),
(120, '3', 2021, '2021-03-04', 'Liverpool', 'Anfield Road', 'plIcon.png', 'chelsea.ico', 'Chelsea', 'disputed', '0', '1', 'https://matchcentre.liverpoolfc.com/#/'),
(121, '4', 2021, '2021-04-03', 'Londra', 'Emirates Stadium', 'plIcon.png', 'arsenal.png', 'Arsenal', 'disputed', '0', '3', 'https://www.liverpoolfc.com/match/2020-21/first-team/arsenal-v-liverpool-premier-league'),
(122, '4', 2021, '2021-04-10', 'Liverpool', 'Anfield Road', 'plIcon.png', 'avfc.png', 'Aston Villa', 'disputed', '2', '1', 'https://www.liverpoolfc.com/match/2020-21/first-team/liverpool-v-aston-villa-premier-league'),
(123, '4', 2021, '2021-04-19', 'Leeds', 'Ellan Road', 'plIcon.png', 'leeds.png', 'Leeds United', 'disputed', '1', '1', 'https://www.liverpoolfc.com/match/2020-21/first-team/leeds-united-v-liverpool-premier-league'),
(124, '4', 2021, '2021-04-24', 'Liverpool', 'Anfield Road', 'plIcon.png', 'newcastle.png', 'Newcastle United', 'disputed', '1', '1', 'https://www.liverpoolfc.com/match/2020-21/first-team/liverpool-v-newcastle-united-premier-league'),
(125, '5', 2021, '2021-05-13', 'Manchester', 'Old Traford', 'plIcon.png', 'utd.ico', 'Manchester United', 'disputed', '2', '4', 'https://www.liverpoolfc.com/match/2020-21/first-team/manchester-united-v-liverpool-premier-league'),
(126, '5', 2021, '2021-05-08', 'Liverpool', 'Anfield Road', 'plIcon.png', 'south.png', 'Southampton', 'disputed', '2', '0', 'https://www.liverpoolfc.com/match/2020-21/first-team/liverpool-v-southampton-premier-league'),
(127, '5', 2021, '2021-05-16', 'West Bromwich', 'The Hawthons', 'plIcon.png', 'westBrom.png', 'West Bromwich', 'disputed', '1', '2', 'https://www.liverpoolfc.com/match/2020-21/first-team/west-bromwich-albion-v-liverpool-premier-league'),
(128, '5', 2021, '2021-05-19', 'Burnley', 'Turf Moor', 'plIcon.png', 'burn.png', 'Burnley', 'disputed', '0', '3', 'https://www.liverpoolfc.com/match/2020-21/first-team/burnley-v-liverpool-premier-league'),
(129, '5', 2021, '2021-05-23', 'Liverpool', 'Anfield Road', 'plIcon.png', 'crystal.png', 'Crystal Palace', 'disputed', '2', '0', 'https://www.liverpoolfc.com/match/2020-21/first-team/liverpool-v-crystal-palace-premier-league'),
(130, '10', 2020, '2020-10-21', 'Amsterdam', 'Amsterdam Arena', 'uclIcon.png', 'ajax.png', 'Ajax', 'disputed', '0', '1', 'https://www.liverpoolfc.com/match/2020-21/first-team/afc-ajax-v-liverpool-champions-league'),
(131, '10', 2020, '2020-10-27', 'Liverpool', 'Anfield Road', 'uclIcon.png', 'midtjylland.png', 'FC Midtjylland', 'disputed', '2', '0', 'https://www.liverpoolfc.com/match/2020-21/first-team/liverpool-v-fc-midtjylland-champions-league'),
(132, '11', 2020, '2020-11-03', 'Bergamo', 'Gewiss Stadium', 'uclIcon.png', 'atalanta.ico', 'Atalanta', 'disputed', '0', '5', 'https://www.liverpoolfc.com/match/2020-21/first-team/atalanta-bc-v-liverpool-champions-league'),
(133, '11', 2020, '2020-11-25', 'Liverpool', 'Anfield Road', 'uclIcon.png', 'atalanta.ico', 'Atalanta', 'disputed', '0', '2', 'https://www.liverpoolfc.com/match/2020-21/first-team/liverpool-v-atalanta-bc-champions-league'),
(134, '12', 2020, '2020-12-01', 'Liverpool', 'Anfield Road', 'uclIcon.png', 'ajax.png', 'Ajax', 'disputed', '1', '0', 'https://www.liverpoolfc.com/match/2020-21/first-team/liverpool-v-afc-ajax-champions-league'),
(135, '12', 2020, '2020-12-09', 'Herning', 'SAS Arena', 'uclIcon.png', 'midtjylland.png', 'FC Midtjylland', 'disputed', '1', '1', 'https://www.liverpoolfc.com/match/2020-21/first-team/fc-midtjylland-v-liverpool-champions-league'),
(136, '1', 2021, '2021-01-08', 'Birmingham', 'Villa Park', 'faIcon.png', 'avfc.png', 'Aston Villa', 'disputed', '1', '4', 'https://www.liverpoolfc.com/match/2020-21/first-team/aston-villa-v-liverpool-fa-cup'),
(137, '1', 2021, '2021-01-24', 'Manchester', 'Old Trafford', 'faIcon.png', 'utd.ico', 'Manchester United', 'disputed', '3', '2', 'https://www.liverpoolfc.com/match/2020-21/first-team/manchester-united-v-liverpool-fa-cup'),
(138, '2', 2021, '2021-02-16', 'Budapesta', 'Puskas Arena', 'uclIcon.png', 'rbLeipzig.png', 'RB Leipzig', 'disputed', '0', '2', 'https://www.liverpoolfc.com/match/2020-21/first-team/rb-leipzig-v-liverpool-champions-league'),
(139, '3', 2021, '2021-03-10', 'Liverpool', 'Anfield Road', 'uclIcon.png', 'rbLeipzig.png', 'RB Leipzig', 'disputed', '2', '0', 'https://www.liverpoolfc.com/match/2020-21/first-team/liverpool-v-rb-leipzig-champions-league'),
(140, '4', 2021, '2021-04-06', 'Madrid', 'Alfredo Di Stefano', 'uclIcon.png', 'real.png', 'Real Madrid', 'disputed', '3', '1', 'https://www.liverpoolfc.com/match/2020-21/first-team/real-madrid-v-liverpool-champions-league'),
(141, '4', 2021, '2021-04-14', 'Liverpool', 'Anfield Road', 'uclIcon.png', 'real.png', 'Real Madrid', 'disputed', '0', '0', 'https://www.liverpoolfc.com/match/2020-21/first-team/liverpool-v-real-madrid-champions-league'),
(142, '8', 2021, '2021-08-14', 'Norwich', 'Carrow Road', 'plIcon.png', 'norwich.png', 'Norwich City', 'disputed', '0', '3', 'https://video.liverpoolfc.com/player/0_1gjmwxdy/?contentReferences=FOOTBALL_FIXTURE%3Ag2210278&amp;page=0&amp;pageSize=20&amp;sortOrder=desc&amp;title=Highlights%3A%20Norwich%200-3%20LFC&amp;listType=LIST-DEFAULT'),
(143, '8', 2021, '2021-08-21', 'Liverpool', 'Anfield Road', 'plIcon.png', 'burn.png', 'Burnley', 'disputed', '2', '0', 'https://video.liverpoolfc.com/player/0_7y5skfk0/?contentReferences=FOOTBALL_FIXTURE%3Ag2210286&amp;page=0&amp;pageSize=20&amp;sortOrder=desc&amp;title=Highlights%3A%20LFC%202-0%20Burnley&amp;listType=LIST-DEFAULT'),
(144, '8', 2021, '2021-08-28', 'Liverpool', 'Anfield Road', 'plIcon.png', 'chelsea.ico', 'Chelsea', 'disputed', '1', '1', 'https://video.liverpoolfc.com/player/0_wq6parqk/?contentReferences=FOOTBALL_FIXTURE%3Ag2210294&amp;page=0&amp;pageSize=20&amp;sortOrder=desc&amp;title=Highlights%3A%20LFC%201-1%20Chelsea&amp;listType=LIST-DEFAULT'),
(145, '9', 2021, '2021-09-12', 'Leeds', 'Elland Road', 'plIcon.png', 'leeds.png', 'Leeds', 'disputed', '0', '3', 'https://video.liverpoolfc.com/player/0_gxafzadv/?contentReferences=FOOTBALL_FIXTURE%3Ag2210306&amp;page=0&amp;pageSize=20&amp;sortOrder=desc&amp;title=Highlights%3A%20Leeds%20Utd%200-3%20LFC&amp;listType=LIST-DEFAULT'),
(146, '9', 2021, '2021-09-15', 'Liverpool', 'Anfield Road', 'uclIcon.png', 'ac.png', 'AC Milan', 'disputed', '2', '0', 'https://video.liverpoolfc.com/player/0_v8rup2cf/?contentReferences=FOOTBALL_FIXTURE%3Ag2244582&amp;page=0&amp;pageSize=20&amp;sortOrder=desc&amp;title=Highlights%3A%20LFC%203-2%20Milan&amp;listType=LIST-DEFAULT'),
(147, '9', 2021, '2021-09-18', 'Liverpool', 'Anfield Road', 'plIcon.png', 'crystal.png', 'Crystal Palace', 'disputed', '3', '0', 'https://video.liverpoolfc.com/player/0_xk5dgnu1/?contentReferences=FOOTBALL_FIXTURE%3Ag2210314&amp;page=0&amp;pageSize=20&amp;sortOrder=desc&amp;title=Highlights%3A%20LFC%203-0%20Crystal%20Palace&amp;listType=LIST-DEFAULT'),
(148, '9', 2021, '2021-09-21', 'Norwich', 'Carrow Road', 'carabaoCup.png', 'norwich.png', 'Norwich City', 'disputed', '0', '3', 'https://video.liverpoolfc.com/player/0_ddfvjcgr'),
(149, '9', 2021, '2021-09-25', 'Brentford', 'Brentford Community', 'plIcon.png', 'brentford.png', 'Brentford City', 'disputed', '3', '3', 'https://video.liverpoolfc.com/player/0_5j5fsdzg/?contentReferences=FOOTBALL_FIXTURE%3Ag2210322&amp;page=0&amp;pageSize=20&amp;sortOrder=desc&amp;title=Highlights%3A%20Brentford%203-3%20LFC&amp;listType=LIST-DEFAULT'),
(150, '9', 2021, '2021-09-28', 'Porto', 'Dragao', 'uclIcon.png', 'porto.png', 'FC Porto', 'disputed', '1', '5', 'https://video.liverpoolfc.com/player/0_m7w3axov/?contentReferences=FOOTBALL_FIXTURE%3Ag2244597&amp;page=0&amp;pageSize=20&amp;sortOrder=desc&amp;title=Highlights%3A%20Porto%201-5%20Liverpool&amp;listType=LIST-DEFAULT'),
(151, '10', 2021, '2021-10-03', 'Liverpool', 'Anfield Road', 'plIcon.png', 'city.png', 'Manchester City', 'disputed', '2', '2', 'https://video.liverpoolfc.com/player/0_vfam7wha/?contentReferences=FOOTBALL_FIXTURE%3Ag2210336&amp;page=0&amp;pageSize=20&amp;sortOrder=desc&amp;title=Highlights%3A%20LFC%202-2%20Man%20City&amp;listType=LIST-DEFAULT'),
(152, '10', 2021, '2021-10-16', 'Watford', 'Vicarage Road', 'plIcon.png', 'watford.png', 'Watford', 'disputed', '0', '5', 'https://video.liverpoolfc.com/player/0_o0pqotnd/?contentReferences=FOOTBALL_FIXTURE%3Ag2210350&amp;page=0&amp;pageSize=20&amp;sortOrder=desc&amp;title=Highlights%3A%20Watford%200-5%20LFC&amp;listType=LIST-DEFAULT'),
(153, '10', 2021, '2021-10-19', 'Madrid', 'Wabda Metropolitano', 'uclIcon.png', 'ath.png', 'Atletico Madrid', 'disputed', '2', '3', 'https://video.liverpoolfc.com/player/0_d5n64a1u/?contentReferences=FOOTBALL_FIXTURE%3Ag2244612&amp;page=0&amp;pageSize=20&amp;sortOrder=desc&amp;title=Highlights%3A%20Atletico%20Madrid%202-3%20LFC&amp;listType=LIST-DEFAULT'),
(154, '10', 2021, '2021-10-24', 'Manchester', 'Old Trafford', 'plIcon.png', 'utd.ico', 'Manchester Utd', 'disputed', '0', '5', 'https://video.liverpoolfc.com/player/0_5rh2a7wm/?contentReferences=FOOTBALL_FIXTURE%3Ag2210358&amp;page=0&amp;pageSize=20&amp;sortOrder=desc&amp;title=Highlights%3A%20Man%20Utd%200-5%20LFC&amp;listType=LIST-DEFAULT'),
(155, '10', 2021, '2021-10-27', 'Preston', 'Deepdale', 'carabaoCup.png', 'preston.png', 'Preston', 'disputed', '0', '2', 'https://video.liverpoolfc.com/player/0_tavlx3tw'),
(156, '10', 2021, '2021-10-30', 'Liverpool', 'Anfield Road', 'plIcon.png', 'brigh.png', 'Brighton', 'disputed', '2', '2', 'https://video.liverpoolfc.com/player/0_iuxtzrfu/?contentReferences=FOOTBALL_FIXTURE%3Ag2210364&amp;page=0&amp;pageSize=20&amp;sortOrder=desc&amp;title=Highlights%20LFC%202-2%20Brighton&amp;listType=LIST-MATCH-HIGHLIGHTS'),
(157, '11', 2021, '2021-11-03', 'Liverpool', 'Anfield Road', 'uclIcon.png', 'ath.png', 'Atletico Madrid', 'disputed', '2', '0', 'https://video.liverpoolfc.com/player/0_xhjls6rh'),
(158, '11', 2021, '2021-11-07', 'Londra', 'London Stadium', 'plIcon.png', 'west.png', 'West Ham', 'disputed', '3', '2', 'https://video.liverpoolfc.com/player/0_62dlay6r/?contentReferences=FOOTBALL_FIXTURE%3Ag2210380&amp;page=0&amp;pageSize=20&amp;sortOrder=desc&amp;title=Bitesize%3A%20West%20Ham%203-2%20LFC&amp;listType=LIST-MATCH-HIGHLIGHTS'),
(159, '11', 2021, '2021-11-20', 'Liverpool', 'Anfield Road', 'plIcon.png', 'arsenal.png', 'Arsenal', 'disputed', '4', '0', 'https://video.liverpoolfc.com/player/0_r65tfwcq'),
(160, '11', 2021, '2021-11-24', 'Liverpool', 'Anfield Road', 'uclIcon.png', 'porto.png', 'FC Porto', 'disputed', '2', '0', 'https://video.liverpoolfc.com/player/0_59v6dvg1/'),
(161, '11', 2021, '2021-11-27', 'Liverpool', 'Anfield Road', 'plIcon.png', 'south.png', 'Southampton', 'disputed', '4', '0', 'https://video.liverpoolfc.com/player/0_fc892z0o'),
(162, '12', 2021, '2021-12-01', 'Liverpool', 'Goodison', 'plIcon.png', 'eve.png', 'Everton', 'disputed', '1', '4', 'https://video.liverpoolfc.com/player/0_9el6vga0'),
(163, '12', 2021, '2021-12-04', 'Wolverhampton', 'Molineux', 'plIcon.png', 'wolves.png', 'Wolves', 'disputed', '0', '1', 'https://video.liverpoolfc.com/player/0_i5ub6g8q/?contentReferences=FOOTBALL_FIXTURE%3Ag2210420&amp;page=0&amp;pageSize=20&amp;sortOrder=desc&amp;title=Highlights%3A%20Wolves%200-1%20LFC&amp;listType=LIST-DEFAULT'),
(164, '12', 2021, '2021-12-07', 'Milano', 'San Siro', 'uclIcon.png', 'ac.png', 'AC Milan', 'disputed', '1', '2', 'https://video.liverpoolfc.com/player/0_2zsx3ifh/?contentReferences=FOOTBALL_FIXTURE%3Ag2244660&amp;page=0&amp;pageSize=20&amp;sortOrder=desc&amp;title=Highlights%3A%20Milan%201-2%20LFC&amp;listType=LIST-DEFAULT'),
(165, '12', 2021, '2021-12-11', 'Liverpool', 'Anfield Road', 'plIcon.png', 'avfc.png', 'Aston Villa', 'disputed', '1', '0', 'https://video.liverpoolfc.com/player/0_tpmn1axv'),
(166, '12', 2021, '2021-12-16', 'Liverpool', 'Anfield Road', 'plIcon.png', 'newcastle.png', 'Newcastle', 'disputed', '3', '1', 'https://video.liverpoolfc.com/player/0_m335au5q'),
(167, '12', 2021, '2021-12-19', 'Londra', 'Tottenham Hotspur', 'plIcon.png', 'spurs.png', 'Tottenham', 'disputed', '2', '2', 'https://video.liverpoolfc.com/player/0_hm8mtfev'),
(168, '12', 2021, '2021-12-22', 'Liverpool', 'Anfield Road', 'carabaoCup.png', 'lester.png', 'Leicester', 'disputed', '3', '3', 'https://video.liverpoolfc.com/player/0_zss5wic0'),
(169, '12', 2021, '2021-12-28', 'Leicester', 'King Power Stdium', 'plIcon.png', 'lester.png', 'Leicester', 'disputed', '1', '0', 'https://video.liverpoolfc.com/player/0_suglc8mg/'),
(170, '1', 2022, '2022-01-02', 'Londra', 'Stamford Bridge', 'plIcon.png', 'chelsea.ico', 'Chelsea', 'disputed', '2', '2', 'https://video.liverpoolfc.com/player/0_9lgh5feo/?contentReferences=FOOTBALL_FIXTURE%3Ag2210473&amp;page=0&amp;pageSize=20&amp;sortOrder=desc&amp;title=Highlights%3A%20Chelsea%202-2%20LFC&amp;listType=LIST-MATCH-HIGHLIGHTS'),
(171, '1', 2022, '2022-01-09', 'Liverpool', 'Anfield Road', 'faIcon.png', 'shrews.png', 'Shrewsbury', 'disputed', '4', '1', 'https://video.liverpoolfc.com/player/0_7q9jews2/?contentReferences=FOOTBALL_FIXTURE%3Ag2260819&amp;page=0&amp;pageSize=20&amp;sortOrder=desc&amp;title=Highlights%3A%20LFC%204-1%20Shrewsbury&amp;listType=LIST-DEFAULT'),
(172, '1', 2022, '2022-01-13', 'Liverpool', 'Anfield Road', 'carabaoCup.png', 'arsenal.png', 'Arsenal', 'disputed', '0', '0', 'https://video.liverpoolfc.com/player/0_v1xbrarj'),
(173, '1', 2022, '2022-01-16', 'Liverpool', 'Anfield Road', 'plIcon.png', 'brentford.png', 'Brentford City', 'disputed', '3', '0', 'https://video.liverpoolfc.com/player/0_xqfxyrfh'),
(174, '1', 2022, '2022-01-20', 'Londra', 'Emirates Stadium', 'carabaoCup.png', 'arsenal.png', 'Arsenal', 'disputed', '0', '2', 'https://video.liverpoolfc.com/player/0_8hfvcbsr'),
(175, '1', 2022, '2022-01-23', 'Londra', 'Selhurst Park', 'plIcon.png', 'crystal.png', 'Crystal Palace', 'disputed', '1', '3', 'https://video.liverpoolfc.com/player/0_0ix2duhs'),
(176, '2', 2022, '2022-02-06', 'Liverpool', 'Anfield Road', 'faIcon.png', 'cardiff.png', 'Cardiff City', 'disputed', '3', '1', 'https://video.liverpoolfc.com/player/0_fkfsjqiv'),
(177, '2', 2022, '2022-02-10', 'Liverpool', 'Anfield Road', 'plIcon.png', 'lester.png', 'Leicester', 'disputed', '2', '0', 'https://video.liverpoolfc.com/player/0_dyxtw3xh'),
(178, '2', 2022, '2022-02-13', 'Burnley', 'Turf Moor', 'plIcon.png', 'burn.png', 'Burnley', 'disputed', '0', '1', 'https://video.liverpoolfc.com/player/0_i9jjwviz'),
(179, '2', 2022, '2022-02-16', 'Milano', 'Giuseppe Meazza', 'uclIcon.png', 'inter.png', 'Inter', 'disputed', '0', '2', 'https://video.liverpoolfc.com/player/0_qjzph5mw'),
(180, '2', 2022, '2022-02-19', 'Liverpool', 'Anfield Road', 'plIcon.png', 'norwich.png', 'Norwich City', 'disputed', '3', '1', 'https://video.liverpoolfc.com/player/0_b02a1o4v'),
(181, '2', 2022, '2022-02-23', 'Liverpool', 'Anfield Road', 'plIcon.png', 'leeds.png', 'Leeds', 'disputed', '6', '0', 'https://video.liverpoolfc.com/player/0_4ncc3wj8'),
(182, '2', 2022, '2022-02-27', 'Londra', 'Wembley', 'carabaoCup.png', 'chelsea.ico', 'Chelsea', 'disputed', '0', '0', 'https://video.liverpoolfc.com/player/0_qsrngav8'),
(183, '3', 2022, '2022-03-02', 'Liverpool', 'Anfield Road', 'faIcon.png', 'norwich.png', 'Norwich City', 'disputed', '2', '1', 'https://video.liverpoolfc.com/player/0_db1esboz'),
(184, '3', 2022, '2022-03-05', 'Liverpool', 'Anfield Road', 'plIcon.png', 'west.png', 'Norwich City', 'disputed', '1', '0', 'https://video.liverpoolfc.com/player/0_g0rsxb4p/?contentReferences=FOOTBALL_FIXTURE%3Ag2210544&amp;page=0&amp;pageSize=20&amp;sortOrder=desc&amp;title=Highlights%3A%20LFC%201-0%20West%20Ham'),
(185, '3', 2022, '2022-03-08', 'Liverpool', 'Anfield Road', 'uclIcon.png', 'inter.png', 'Inter', 'disputed', '0', '1', 'https://video.liverpoolfc.com/player/0_92mfgyjc'),
(186, '3', 2022, '2022-03-12', 'Londra', 'American Express', 'plIcon.png', 'brigh.png', 'Brighton', 'disputed', '0', '2', 'https://video.liverpoolfc.com/player/0_cfguktpc'),
(187, '3', 2022, '2022-03-16', 'Londra', 'Emirates Stadium', 'plIcon.png', 'arsenal.png', 'Arsenal', 'disputed', '0', '2', 'https://video.liverpoolfc.com/player/0_l42ez6up/?contentReferences=FOOTBALL_FIXTURE%3Ag2210531&amp;page=0&amp;pageSize=20&amp;sortOrder=desc&amp;title=Highlights%3A%20Arsenal%200-2%20Liverpool&amp;listType=LIST-DEFAULT'),
(188, '3', 2022, '2022-03-20', 'Nottingham', 'City Ground', 'faIcon.png', 'nottinghamForest.png', 'Nottingham Forest', 'disputed', '0', '1', 'https://video.liverpoolfc.com/player/0_vzbcupho'),
(189, '4', 2022, '2022-04-02', 'Liverpool', 'Anfield Road', 'plIcon.png', 'watford.png', 'Watford', 'disputed', '2', '0', 'https://video.liverpoolfc.com/player/0_k45ccvxq/?contentReferences=FOOTBALL_FIXTURE%3Ag2210576&amp;page=0&amp;pageSize=20&amp;sortOrder=desc&amp;title=Highlights%3A%20LFC%202-0%20Watford&amp;listType=LIST-DEFAULT'),
(190, '4', 2022, '2022-04-05', 'Lisabona', 'Da Luz', 'uclIcon.png', 'benfica.png', 'Benfica', 'disputed', '1', '3', 'https://video.liverpoolfc.com/player/0_tb3cdo65'),
(191, '4', 2022, '2022-04-10', 'Manchester', 'Etihad', 'plIcon.png', 'city.png', 'Manchester City', 'disputed', '2', '2', 'https://video.liverpoolfc.com/player/0_h17wevt3'),
(192, '4', 2022, '2022-04-13', 'Liverpool', 'Anfield Road', 'uclIcon.png', 'benfica.png', 'Benfica', 'disputed', '3', '3', 'https://video.liverpoolfc.com/player/0_1b1rjqtt'),
(193, '4', 2022, '2022-04-17', 'Manchester', 'Etihad', 'faIcon.png', 'city.png', 'Manchester City', 'disputed', '2', '3', 'https://video.liverpoolfc.com/player/0_b5hmvw2h'),
(194, '4', 2022, '2022-04-19', 'Liverpool', 'Anfield Road', 'plIcon.png', 'utd.ico', 'Manchester Utd', 'disputed', '4', '0', 'https://video.liverpoolfc.com/player/0_r6jw6m7c'),
(195, '4', 2022, '2022-04-24', 'Liverpool', 'Anfield Road', 'plIcon.png', 'eve.png', 'Everton', 'disputed', '2', '0', 'https://video.liverpoolfc.com/player/0_9pn34r2s'),
(196, '4', 2022, '2022-04-27', 'Liverpool', 'Anfield Road', 'uclIcon.png', 'villarreal.png', 'Villareal', 'disputed', '2', '0', 'https://video.liverpoolfc.com/player/0_9mrwf8b0'),
(197, '4', 2022, '2022-04-30', 'Newcastle', 'St. James Park', 'plIcon.png', 'newcastle.png', 'Newcastle', 'disputed', '0', '1', 'https://video.liverpoolfc.com/player/0_phth81'),
(198, '5', 2022, '2022-05-03', 'Villareal', 'Estadio de la Ceramica', 'uclIcon.png', 'villarreal.png', 'Villareal', 'disputed', '2', '3', 'https://video.liverpoolfc.com/player/0_eku3vbdv/'),
(199, '5', 2022, '2022-05-07', 'Liverpool', 'Anfield Road', 'plIcon.png', 'spurs.png', 'Tottenham', 'disputed', '1', '1', 'https://video.liverpoolfc.com/player/0_xpqavgn3'),
(200, '5', 2022, '2022-05-10', 'Birmingham', 'Villa Park', 'plIcon.png', 'avfc.png', 'Aston Villa', 'disputed', '1', '2', 'https://video.liverpoolfc.com/player/0_ns9jwyxi'),
(201, '5', 2022, '2022-05-14', 'Londra', 'Wembley', 'faIcon.png', 'chelsea.ico', 'Chelsea', 'disputed', '0', '0', 'https://video.liverpoolfc.com/player/0_rmgeey0q/?contentReferences=FOOTBALL_FIXTURE%3Ag2284552&amp;page=0&amp;pageSize=20&amp;sortOrder=desc&amp;title=Highlights%3A%20LFC%200-0%20Chelsea%20%28Reds%20win%20on%20penalties%29&amp;listType=LIST-DEFAULT'),
(202, '5', 2022, '2022-05-17', 'Southampton', 'St. Mary`s', 'plIcon.png', 'south.png', 'Southampton', 'disputed', '1', '2', 'https://video.liverpoolfc.com/player/0_rzzemvw0/?contentReferences=FOOTBALL_FIXTURE%3Ag2210636&amp;page=0&amp;pageSize=20&amp;sortOrder=desc&amp;title=Extended%20Highlights%3A%20Southampton%201-2%20Liverpool&amp;listType=LIST-DEFAULT'),
(203, '5', 2022, '2022-05-22', 'Liverpool', 'Anfield Road', 'plIcon.png', 'wolves.png', 'Wolves', 'disputed', '3', '1', 'https://www.liverpoolfc.com/fixtures/men/2021'),
(204, '5', 2022, '2022-05-28', 'Paris', 'Stade de France', 'uclIcon.png', 'real.png', 'Real Madrid', 'disputed', '1', '0', 'https://www.liverpoolfc.com/fixtures/men/2021'),
(205, '7', 2022, '2022-07-12', 'Bangkok', 'Rajamangala', 'friendly.png', 'utd.ico', 'Manchester Utd.', 'disputed', '4', '0', 'https://video.liverpoolfc.com/player/0_lg68kl8v/'),
(206, '7', 2022, '2022-07-15', 'Singapore', 'Singapore National', 'friendly.png', 'crystal.png', 'Crystal Palace', 'disputed', '0', '2', 'https://video.liverpoolfc.com/player/0_2rvd17qv'),
(207, '7', 2022, '2022-07-21', 'Leipzig', 'Red Bull Arena', 'friendly.png', 'rbLeipzig.png', 'RB Leipzig', 'disputed', '0', '5', 'https://video.liverpoolfc.com/player/0_4ehg14gq'),
(208, '7', 2022, '2022-07-27', 'Salzburg', 'Red Bull Arena', 'friendly.png', 'redBull.png', 'Red Bull Salzburg', 'disputed', '1', '0', 'https://video.liverpoolfc.com/player/0_6g9yg4x6'),
(209, '7', 2022, '2022-07-30', 'Leicester', 'King Power Stadim', 'commsh1.jpg', 'city.png', 'Manchester City', 'scheduled', NULL, NULL, 'https://www.liverpoolfc.com/news/community-shield-fixture-details-confirmed'),
(210, '7', 2022, '2022-07-31', 'Liverpool', 'Anfield Road', 'friendly.png', 'strasbourg.png', 'Strasbourg', 'scheduled', NULL, NULL, 'https://www.liverpoolfc.com/news/limited-availability-left-anfield-friendly-sunday-juniors-go-free'),
(211, '8', 2022, '2022-08-06', 'Londra', 'Craven Cottage', 'plIcon.png', 'fulham.png', 'Fulham', 'scheduled', NULL, NULL, 'https://www.liverpoolfc.com/fixtures/men/2022'),
(212, '8', 2022, '2022-08-15', 'Liverpool', 'Anfield Road', 'plIcon.png', 'crystal.png', 'Crystal Palace', 'scheduled', NULL, NULL, 'https://www.liverpoolfc.com/fixtures/men/2022'),
(213, '8', 2022, '2022-08-22', 'Manchester', 'Old Trafford', 'plIcon.png', 'utd.ico', 'Manchester United', 'scheduled', NULL, NULL, 'https://www.liverpoolfc.com/fixtures/men/2022'),
(214, '8', 2022, '2022-08-27', 'Liverpool', 'Anfield Road', 'plIcon.png', 'afc.png', 'AFC Bournemouth', 'scheduled', NULL, NULL, 'https://www.liverpoolfc.com/fixtures/men/2022'),
(215, '8', 2022, '2022-08-31', 'Liverpool', 'Anfield Road', 'plIcon.png', 'newcastle.png', 'Newcastle United', 'scheduled', NULL, NULL, 'https://www.liverpoolfc.com/fixtures/men/2022'),
(216, '9', 2022, '2022-09-03', 'Liverpool', 'Goodison Park', 'plIcon.png', 'eve.png', 'Everton', 'scheduled', NULL, NULL, 'https://www.liverpoolfc.com/fixtures/men/2022'),
(217, '9', 2022, '2022-09-10', 'Liverpool', 'Anfield Road', 'plIcon.png', 'wolves.png', 'Wolves', 'scheduled', NULL, NULL, 'https://www.liverpoolfc.com/fixtures/men/2022'),
(218, '9', 2022, '2022-09-18', 'Londra', 'Stamford Bridge', 'plIcon.png', 'chelsea.ico', 'Chelsea', 'scheduled', NULL, NULL, 'https://www.liverpoolfc.com/fixtures/men/2022'),
(219, '10', 2022, '2022-10-01', 'Liverpool', 'Anfield Road', 'plIcon.png', 'brigh.png', 'Brighton', 'scheduled', NULL, NULL, 'https://www.liverpoolfc.com/fixtures/men/2022'),
(220, '10', 2022, '2022-10-09', 'Londra', 'Emirates Stadium', 'plIcon.png', 'arsenal.png', 'Arsenal', 'scheduled', NULL, NULL, 'https://www.liverpoolfc.com/fixtures/men/2022'),
(221, '10', 2022, '2022-10-16', 'Liverpool', 'Anfield Road', 'plIcon.png', 'city.png', 'Manchester City', 'scheduled', NULL, NULL, 'https://www.liverpoolfc.com/fixtures/men/2022'),
(222, '10', 2022, '2022-10-19', 'Liverpool', 'Anfield Road', 'plIcon.png', 'west.png', 'West Ham', 'scheduled', NULL, NULL, 'https://www.liverpoolfc.com/fixtures/men/2022'),
(223, '10', 2022, '2022-10-22', 'Nottingham', 'The City Ground', 'plIcon.png', 'nottinghamForest.png', 'Nottingham Forest', 'scheduled', NULL, NULL, 'https://www.liverpoolfc.com/fixtures/men/2022'),
(224, '10', 2022, '2022-10-30', 'Liverpool', 'Anfield Road', 'plIcon.png', 'leeds.png', 'Leeds United', 'scheduled', NULL, NULL, 'https://www.liverpoolfc.com/fixtures/men/2022'),
(225, '11', 2022, '2022-11-05', 'Londra', 'Tottenham Hotspur Arena', 'plIcon.png', 'spurs.png', 'Tottenham Hotspur', 'scheduled', NULL, NULL, 'https://www.liverpoolfc.com/fixtures/men/2022'),
(226, '11', 2022, '2022-11-12', 'Liverpool', 'Anfield Road', 'plIcon.png', 'south.png', 'Southampton', 'scheduled', NULL, NULL, 'https://www.liverpoolfc.com/fixtures/men/2022'),
(227, '12', 2022, '2022-12-26', 'Birmingham', 'Villa Park', 'plIcon.png', 'avfc.png', 'Aston Villa', 'scheduled', NULL, NULL, 'https://www.liverpoolfc.com/fixtures/men/2022'),
(228, '12', 2022, '2022-12-31', 'Liverpool', 'Anfield Road', 'plIcon.png', 'lester.png', 'Leicester City', 'scheduled', NULL, NULL, 'https://www.liverpoolfc.com/fixtures/men/2022'),
(229, '1', 2023, '2023-01-02', 'Brentford', 'Community Stadium', 'plIcon.png', 'brentford.png', 'Brentford City', 'scheduled', NULL, NULL, 'https://www.liverpoolfc.com/fixtures/men/2022'),
(230, '1', 2023, '2023-01-16', 'Londra', 'American Express', 'plIcon.png', 'brigh.png', 'Brighton', 'scheduled', NULL, NULL, 'https://www.liverpoolfc.com/fixtures/men/2022'),
(231, '1', 2023, '2023-01-21', 'Liverpool', 'Anfield Road', 'plIcon.png', 'chelsea.ico', 'Chelsea', 'scheduled', NULL, NULL, 'https://www.liverpoolfc.com/fixtures/men/2022'),
(232, '2', 2023, '2023-02-04', 'Wolverhampton', 'Molineux', 'plIcon.png', 'wolves.png', 'Wolves', 'scheduled', NULL, NULL, 'https://www.liverpoolfc.com/fixtures/men/2022'),
(233, '2', 2023, '2023-02-11', 'Liverpool', 'Anfield Road', 'plIcon.png', 'eve.png', 'Everton', 'scheduled', NULL, NULL, 'https://www.liverpoolfc.com/fixtures/men/2022'),
(234, '2', 2023, '2023-02-18', 'Newcastle', 'ST. James Park', 'plIcon.png', 'newcastle.png', 'Newcastle United', 'scheduled', NULL, NULL, 'https://www.liverpoolfc.com/fixtures/men/2022'),
(235, '2', 2023, '2023-02-25', 'Londra', 'Selhurst Park', 'plIcon.png', 'crystal.png', 'Crystal Palace', 'scheduled', NULL, NULL, 'https://www.liverpoolfc.com/fixtures/men/2022'),
(236, '3', 2023, '2023-03-04', 'Liverpool', 'Anfield Road', 'plIcon.png', 'utd.ico', 'Manchester United', 'scheduled', NULL, NULL, 'https://www.liverpoolfc.com/fixtures/men/2022'),
(237, '3', 2023, '2023-03-11', 'Bourmemouth', 'Vitality Stadium', 'plIcon.png', 'afc.png', 'AFC Bournemouth', 'scheduled', NULL, NULL, 'https://www.liverpoolfc.com/fixtures/men/2022'),
(238, '3', 2023, '2023-03-18', 'Liverpool', 'Anfield Road', 'plIcon.png', 'fulham.png', 'Fulham', 'scheduled', NULL, NULL, 'https://www.liverpoolfc.com/fixtures/men/2022'),
(239, '4', 2023, '2023-04-01', 'Manchester', 'Etihad', 'plIcon.png', 'city.png', 'Manchester City', 'scheduled', NULL, NULL, 'https://www.liverpoolfc.com/fixtures/men/2022'),
(240, '4', 2023, '2023-04-08', 'Liverpool', 'Anfield Road', 'plIcon.png', 'arsenal.png', 'Arsenal', 'scheduled', NULL, NULL, 'https://www.liverpoolfc.com/fixtures/men/2022'),
(241, '4', 2023, '2023-04-15', 'Leeds', 'Elland Road', 'plIcon.png', 'leeds.png', 'Leeds United', 'scheduled', NULL, NULL, 'https://www.liverpoolfc.com/fixtures/men/2022'),
(242, '4', 2023, '2023-04-22', 'Liverpool', 'Anfield Road', 'plIcon.png', 'nottinghamForest.png', 'Nottingham Forest', 'scheduled', NULL, NULL, 'https://www.liverpoolfc.com/fixtures/men/2022'),
(243, '4', 2023, '2023-04-25', 'Londra', 'London Stadium', 'plIcon.png', 'west.png', 'West Ham', 'scheduled', NULL, NULL, 'https://www.liverpoolfc.com/fixtures/men/2022'),
(244, '4', 2023, '2023-04-29', 'Liverpool', 'Anfield Road', 'plIcon.png', 'spurs.png', 'Tottenham Hotspur', 'scheduled', NULL, NULL, 'https://www.liverpoolfc.com/fixtures/men/2022'),
(245, '5', 2023, '2023-05-06', 'Liverpool', 'Anfield Road', 'plIcon.png', 'brentford.png', 'Brentford City', 'scheduled', NULL, NULL, 'https://www.liverpoolfc.com/fixtures/men/2022'),
(246, '5', 2023, '2023-05-13', 'Leicester', 'King Power Stadim', 'plIcon.png', 'lester.png', 'Leicester City', 'scheduled', NULL, NULL, 'https://www.liverpoolfc.com/fixtures/men/2022');
INSERT INTO `calendar` (`id`, `month`, `year`, `data`, `city`, `stadium`, `iconC`, `iconT`, `team`, `status`, `goalsH`, `goalsA`, `link`) VALUES
(247, '5', 2023, '2023-05-20', 'Liverpool', 'Anfield Road', 'plIcon.png', 'avfc.png', 'Aston Villa', 'scheduled', NULL, NULL, 'https://www.liverpoolfc.com/fixtures/men/2022'),
(248, '5', 2023, '2023-05-28', 'Southampton', 'St. Mary`s', 'plIcon.png', 'south.png', 'Southampton', 'scheduled', NULL, NULL, 'https://www.liverpoolfc.com/fixtures/men/2022');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `clasament`
--

CREATE TABLE `clasament` (
  `id` int(3) NOT NULL,
  `brand` text CHARACTER SET utf8 NOT NULL,
  `team` text CHARACTER SET utf8 NOT NULL,
  `games` int(3) NOT NULL,
  `wins` int(3) NOT NULL,
  `draws` int(3) NOT NULL,
  `loss` int(3) NOT NULL,
  `attack` int(4) NOT NULL,
  `defensive` int(4) NOT NULL,
  `goals` int(3) NOT NULL,
  `points` int(4) NOT NULL,
  `season` varchar(9) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `clasament`
--

INSERT INTO `clasament` (`id`, `brand`, `team`, `games`, `wins`, `draws`, `loss`, `attack`, `defensive`, `goals`, `points`, `season`) VALUES
(1, 'icon.png', 'Liverpool', 38, 32, 3, 3, 85, 33, 52, 99, '2019-2020'),
(2, 'city1.png', 'Manchester City', 38, 26, 3, 9, 102, 35, 67, 81, '2019-2020'),
(3, 'lester.png', 'Leicester City', 38, 18, 8, 12, 67, 41, 26, 62, '2019-2020'),
(4, 'chelsea.ico', 'Chelsea', 38, 20, 6, 12, 69, 54, 15, 66, '2019-2020'),
(5, 'utd.ico', 'Manchester United', 38, 18, 12, 8, 66, 36, 30, 66, '2019-2020'),
(6, 'spurs.png', 'Tottenham Hotspur', 38, 16, 11, 11, 61, 47, 14, 59, '2019-2020'),
(7, 'arsenal.png', 'Arsenal', 38, 14, 14, 10, 56, 48, 8, 56, '2019-2020'),
(16, 'wolves.png', 'Wolverhampton', 38, 15, 14, 9, 51, 40, 11, 59, '2019-2020'),
(17, 'sheff.ico', 'Sheffield United', 38, 14, 12, 12, 39, 39, 0, 54, '2019-2020'),
(18, 'crystal.png', 'Crystal Palace', 38, 11, 10, 17, 31, 50, -19, 43, '2019-2020'),
(19, 'eve.png', 'Everton', 38, 13, 10, 15, 44, 56, -12, 49, '2019-2020'),
(20, 'south.png', 'Southampton', 38, 15, 7, 16, 51, 60, -9, 52, '2019-2020'),
(21, 'newcastle.png', 'Newcastle United', 38, 11, 11, 16, 38, 58, -20, 44, '2019-2020'),
(22, 'hove.png', 'Brighton and Hove', 38, 9, 14, 15, 39, 54, -15, 41, '2019-2020'),
(23, 'burn.png', 'Burnley', 38, 15, 9, 14, 43, 50, -7, 54, '2019-2020'),
(24, 'west.png', 'West Ham United', 38, 10, 9, 19, 49, 62, -13, 39, '2019-2020'),
(25, 'avfc.png', 'Aston Villa', 38, 9, 8, 21, 41, 67, -26, 35, '2019-2020'),
(26, 'afc.jpg', 'Bourmemouth', 38, 9, 7, 22, 40, 65, -25, 34, '2019-2020'),
(27, 'watford.png', 'Watford', 38, 8, 10, 20, 36, 64, -28, 34, '2019-2020'),
(28, 'norwich.png', 'Norwich City', 38, 5, 6, 27, 26, 75, -49, 21, '2019-2020'),
(38, 'lester.png', 'Leicester City', 38, 20, 6, 12, 68, 50, 18, 66, '2020-2021'),
(39, 'icon.png', 'Liverpool', 38, 20, 9, 9, 68, 42, 26, 69, '2020-2021'),
(41, 'eve.png', 'Everton', 38, 17, 8, 13, 47, 48, -1, 59, '2020-2021'),
(42, 'avfc.png', 'Aston Villa', 38, 16, 7, 15, 55, 46, 9, 55, '2020-2021'),
(43, 'arsenal.png', 'Arsenal', 38, 18, 7, 13, 55, 39, 16, 61, '2020-2021'),
(44, 'fulham.png', 'Fulham', 38, 5, 13, 20, 27, 53, -26, 28, '2020-2021'),
(45, 'sheff.ico', 'Sheffield United', 38, 7, 2, 29, 20, 63, -43, 23, '2020-2021'),
(46, 'burn.png', 'Burnley', 38, 10, 9, 19, 33, 55, -22, 39, '2020-2021'),
(47, 'westBrom.png', 'West Bromwich', 38, 5, 11, 22, 35, 76, -41, 26, '2020-2021'),
(48, 'utd.ico', 'Manchester United', 38, 21, 11, 6, 73, 44, 29, 74, '2020-2021'),
(49, 'brigh.png', 'Brighton', 38, 9, 14, 15, 40, 46, -6, 41, '2020-2021'),
(50, 'city.png', 'Manchester City', 38, 27, 5, 6, 83, 32, 51, 86, '2020-2021'),
(51, 'wolves.png', 'Wolverhampton', 38, 12, 9, 17, 36, 52, -16, 45, '2020-2021'),
(52, 'crystal.png', 'Crystal Palace', 38, 12, 8, 18, 41, 66, -25, 44, '2020-2021'),
(53, 'south.png', 'Southampton', 38, 12, 7, 19, 47, 68, -21, 43, '2020-2021'),
(54, 'west.png', 'West Ham', 38, 19, 8, 11, 62, 47, 15, 65, '2020-2021'),
(55, 'newcastle.png', 'Newcastle United', 38, 12, 9, 17, 46, 62, -16, 45, '2020-2021'),
(56, 'leeds.png', 'Leeds United', 38, 18, 5, 15, 62, 54, 8, 59, '2020-2021'),
(57, 'chelsea.ico', 'Chelsea', 38, 19, 10, 9, 58, 36, 22, 67, '2020-2021'),
(58, 'spurs.png', 'Tottenham Hotspur', 38, 18, 8, 12, 68, 45, 23, 62, '2020-2021'),
(59, 'city.png', 'Manchester City', 38, 29, 6, 3, 99, 26, 73, 93, '2021-2022'),
(60, 'norwich.png', 'Norwich City', 38, 5, 7, 26, 23, 84, -61, 22, '2021-2022'),
(61, 'watford.png', 'Watford', 38, 6, 5, 27, 34, 77, -43, 23, '2021-2022'),
(62, 'burn.png', 'Burnley', 38, 7, 14, 17, 34, 53, -19, 35, '2021-2022'),
(63, 'newcastle.png', 'Newcastle', 38, 13, 10, 15, 44, 62, -18, 49, '2021-2022'),
(64, 'brentford.png', 'Brentford City', 38, 13, 7, 18, 48, 56, -8, 46, '2021-2022'),
(65, 'lester.png', 'Leicester', 38, 14, 10, 14, 62, 59, 3, 52, '2021-2022'),
(66, 'brigh.png', 'Brighton', 38, 12, 15, 11, 42, 44, -2, 51, '2021-2022'),
(67, 'leeds.png', 'Leeds', 38, 9, 11, 18, 42, 79, -37, 38, '2021-2022'),
(68, 'eve.png', 'Everton', 38, 11, 6, 21, 43, 66, -23, 39, '2021-2022'),
(69, 'south.png', 'Southampton', 38, 9, 13, 16, 43, 67, -24, 40, '2021-2022'),
(70, 'avfc.png', 'Aston Villa', 38, 13, 6, 19, 52, 54, -2, 45, '2021-2022'),
(71, 'crystal.png', 'Crystal Palace', 38, 11, 15, 12, 50, 46, 4, 48, '2021-2022'),
(72, 'wolves.png', 'Wolves', 38, 15, 6, 17, 38, 43, -5, 51, '2021-2022'),
(73, 'west.png', 'West Ham', 38, 16, 8, 14, 60, 51, 9, 56, '2021-2022'),
(74, 'utd.ico', 'Manchester Utd', 38, 16, 10, 12, 57, 57, 0, 58, '2021-2022'),
(75, 'arsenal.png', 'Arsenal', 38, 22, 3, 13, 61, 48, 13, 69, '2021-2022'),
(76, 'spurs.png', 'Tottenham', 38, 22, 5, 11, 69, 40, 29, 71, '2021-2022'),
(77, 'chelsea.ico', 'Chelsea', 38, 21, 11, 6, 76, 33, 43, 74, '2021-2022'),
(78, 'icon.png', 'Liverpool', 38, 28, 8, 2, 94, 26, 68, 92, '2021-2022'),
(79, 'arsenal.png', 'Arsenal', 0, 0, 0, 0, 0, 0, 0, 0, '2022-2023'),
(80, 'avfc.png', 'Aston Villa', 0, 0, 0, 0, 0, 0, 0, 0, '2022-2023'),
(81, 'afc.jpg', 'Bourmemouth', 0, 0, 0, 0, 0, 0, 0, 0, '2022-2023'),
(82, 'brentford.png', 'Brentford City', 0, 0, 0, 0, 0, 0, 0, 0, '2022-2023'),
(83, 'brigh.png', 'Brighton', 0, 0, 0, 0, 0, 0, 0, 0, '2022-2023'),
(84, 'chelsea.ico', 'Chelsea', 0, 0, 0, 0, 0, 0, 0, 0, '2022-2023'),
(85, 'crystal.png', 'Crystal Palace', 0, 0, 0, 0, 0, 0, 0, 0, '2022-2023'),
(86, 'eve.png', 'Everton', 0, 0, 0, 0, 0, 0, 0, 0, '2022-2023'),
(87, 'fulham.png', 'Fulham', 0, 0, 0, 0, 0, 0, 0, 0, '2022-2023'),
(88, 'leeds.png', 'Leeds United', 0, 0, 0, 0, 0, 0, 0, 0, '2022-2023'),
(89, 'lester.png', 'Leicester City', 0, 0, 0, 0, 0, 0, 0, 0, '2022-2023'),
(90, 'icon.png', 'Liverpool', 0, 0, 0, 0, 0, 0, 0, 0, '2022-2023'),
(91, 'city.png', 'Manchester City', 0, 0, 0, 0, 0, 0, 0, 0, '2022-2023'),
(92, 'utd.ico', 'Manchester United', 0, 0, 0, 0, 0, 0, 0, 0, '2022-2023'),
(93, 'newcastle.png', 'Newcastle United', 0, 0, 0, 0, 0, 0, 0, 0, '2022-2023'),
(94, 'nottinghamForest.png', 'Nottingham Forest', 0, 0, 0, 0, 0, 0, 0, 0, '2022-2023'),
(95, 'south.png', 'Southampton', 0, 0, 0, 0, 0, 0, 0, 0, '2022-2023'),
(96, 'spurs.png', 'Tottenham Hotspur', 0, 0, 0, 0, 0, 0, 0, 0, '2022-2023'),
(97, 'west.png', 'West Ham', 0, 0, 0, 0, 0, 0, 0, 0, '2022-2023'),
(98, 'wolves.png', 'Wolverhampton', 0, 0, 0, 0, 0, 0, 0, 0, '2022-2023');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `news`
--

CREATE TABLE `news` (
  `id` int(10) NOT NULL,
  `img` text CHARACTER SET utf8 NOT NULL,
  `titleArticle` text CHARACTER SET utf8 NOT NULL,
  `textArticle` text CHARACTER SET utf8 NOT NULL,
  `linkArticle` text CHARACTER SET utf8 NOT NULL,
  `data` datetime NOT NULL,
  `cover` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `news`
--

INSERT INTO `news` (`id`, `img`, `titleArticle`, `textArticle`, `linkArticle`, `data`, `cover`) VALUES
(1, 'news_19_05_22.jpeg', 'Parada victoriei Liverpool FC va avea loc pe 29 mai', 'O paradă a victoriei Liverpool FC va avea loc în oraș duminică, 29 mai.', 'https://www.liverpoolfc.com/news/liverpool-fc-victory-parade-take-place-may-29', '2022-05-19 15:37:06', 'yes'),
(2, 'news1.jpg', 'Ce s-a întâmplat când cursele pentru titlu au trecut pe fir?', 'Retrăiește cele opt ocazii anterioare când campionii au fost decisi în ultima zi', 'https://www.premierleague.com/news/2621652', '2022-05-19 15:51:29', 'no'),
(3, 'news2.jpg', 'Victoria de la Liverpool stabilește confruntarea în ultima zi', 'Joel Matip a marcat un câștigător vital la Southampton, în timp ce Roșii se întorc la un punct în spatele liderului Man City', 'https://www.premierleague.com/news/2621644', '2022-05-19 15:54:34', 'no'),
(4, 'news3.jpg', 'DGW37 Puncte bonus: Matip strălucește în victoria de la Liverpool', 'Vedeți ce jucători au primit recompense suplimentare pentru afișajele lor în meciurile din Gameweek 37', 'https://www.premierleague.com/news/2611983', '2022-05-19 15:56:18', 'no'),
(5, 'news4.jpeg', 'Selecția cercetașilor: forma Diaz câștigă prima includere', 'Interagul Liverpool a fost ales în cel mai bun Fantasy XI, care include șase jucători cu o săptămână de joc dublă', 'https://www.premierleague.com/news/2616014', '2022-05-19 15:58:37', 'no'),
(6, 'news_19_07_2022.jpg', 'Turneul de la Singapore: Liverpool 2-0 Crystal Palace', 'Mergeți în culisele celui de-al doilea și ultimul joc al Roșilor din turneul lor de pre-sezon din Asia, în timp ce aceștia au obținut victoria împotriva Eagles datorită golurilor lui Jordan Henderson și Mo Salah.', 'https://video.liverpoolfc.com/player/0_vqkypm1b', '2022-07-19 12:56:48', 'no');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `team`
--

CREATE TABLE `team` (
  `id` int(3) NOT NULL,
  `img1` text CHARACTER SET utf8 NOT NULL,
  `img2` text CHARACTER SET utf8 NOT NULL,
  `img3` text CHARACTER SET utf8 NOT NULL,
  `nr` int(2) NOT NULL,
  `fname` text CHARACTER SET utf8 NOT NULL,
  `lname` text CHARACTER SET utf8 NOT NULL,
  `nickName` text CHARACTER SET utf8 NOT NULL,
  `role` text CHARACTER SET utf8 NOT NULL,
  `birthday` date NOT NULL,
  `valueMarket` float NOT NULL,
  `imgFlag` text CHARACTER SET utf8 NOT NULL,
  `flag` text CHARACTER SET utf8 NOT NULL,
  `international` text CHARACTER SET utf8 NOT NULL,
  `season` varchar(9) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `team`
--

INSERT INTO `team` (`id`, `img1`, `img2`, `img3`, `nr`, `fname`, `lname`, `nickName`, `role`, `birthday`, `valueMarket`, `imgFlag`, `flag`, `international`, `season`) VALUES
(1, 'alisson.png', 'nr1.jpg', '', 1, 'Alisson', 'Becker', 'Alisson Becker', 'goalkeeper', '1992-10-02', 90, 'bazil.png', 'Brazil', 'yes', '2019-2020'),
(2, 'adrian1.png', '', '', 13, 'Adrian', 'San Miguel del Castillo', 'Adrian', 'goalkeeper', '1987-01-03', 5, 'spain.png', 'Spain', 'no', '2019-2020'),
(3, 'kelleher1.png', '', '', 62, 'Kelleher', 'Coaimhin', 'Kelleher', 'goalkeeper', '1998-11-23', 1, 'ireland.png', 'Ireland', 'yes', '2019-2020'),
(4, 'andyL.png', 'andy1.png', '', 22, 'Andy', 'Lonergan', 'Andy Lonergan', 'goalkeeper', '1983-10-19', 0.25, 'england.png', 'England', 'no', '2019-2020'),
(5, 'clyne.png', 'nr2.jpg', '', 2, 'Clyne', 'Nathaniel', 'Nathaniel Clyne', 'defender', '1991-04-05', 10, 'england.png', 'England', 'no', '2019-2020'),
(6, 'dijk.png', 'nr4.jpg', '', 4, 'Van Dijk', 'Virgil', 'Van Dijk', 'defender', '1991-07-08', 100, 'holland.png', 'Netherlands', 'yes', '2019-2020'),
(7, 'gomez.jpg', '', '', 12, 'Gomez', 'Joe', 'Joe Gomez', 'defender', '1997-05-23', 35, 'england.png', 'England', 'yes', '2019-2020'),
(8, 'lovren.png', '', '', 6, 'Lovren', 'Dejan', 'Dejan Lovren', 'defender', '1989-07-05', 20, 'croatia.png', 'Croatia', 'yes', '2019-2020'),
(9, 'matip.jpg', '', '', 32, 'Matip', 'Joel', 'Joel Matip', 'defender', '1991-08-08', 40, 'cameoon.png', 'Cameroon', 'no', '2019-2020'),
(10, 'andyr.jpg', '', '', 26, 'Robertson', 'Andy', 'Andy Robertson', 'defender', '1994-03-11', 80, 'scot.png', 'Scotland', 'yes', '2019-2020'),
(11, 'taa.jpg', '', '', 66, 'Alexander-Arnold', 'Trent', 'Trent Al-Arnold', 'defender', '1998-10-07', 110, 'england.png', 'England', 'yes', '2019-2020'),
(12, 'hoever1.png', '', '', 51, 'Hoever', 'Ki-Jana', 'Ki-jana Hoever', 'defender', '2002-01-18', 4, 'holland.png', 'Netherlands', 'no', '2019-2020'),
(13, 'sep.jpg', '', '', 72, 'Van Den Berg', 'Sepp', 'van den Berg', 'defender', '2001-12-20', 2, 'holland.png', 'Netherlands', 'no', '2019-2020'),
(14, 'fabinho.png', 'nr3.jpg', '', 3, 'Fabinho', 'Henrique Tavares', 'Fabinho', 'midfielder', '1993-10-23', 70, 'bazil.png', 'Brazil', 'yes', '2019-2020'),
(15, 'wijnaldum.jpg', 'nr5.jpg', '', 5, 'Wijnaldum', 'Georginio', 'Wijnaldum', 'midfielder', '1990-11-11', 50, 'holland.png', 'Netherlands', 'yes', '2019-2020'),
(16, 'milner.jpg', 'nr7.jpg', '', 7, 'Milner', 'James', 'Milner', 'midfielder', '1986-01-04', 12, 'england.png', 'England', 'no', '2019-2020'),
(17, 'keita.png', 'nr8.jpg', '', 8, 'Keita', 'Naby Deco', 'Keita', 'midfielder', '1995-02-10', 42, 'guinea.png', 'Guinea', 'yes', '2019-2020'),
(18, 'henderson.jpg', '', '', 14, 'Henderson', 'Jordan', 'Henderson', 'midfielder', '1990-06-17', 35, 'england.png', 'England', 'yes', '2019-2020'),
(19, 'alex.png', '', '', 15, 'Oxlade-Chamberlain', 'Alex', 'Oxlade-Ch.', 'midfielder', '1993-08-15', 35, 'england.png', 'England', 'yes', '2019-2020'),
(20, 'adam.jpg', '', '', 20, 'Lallana', 'Adam', 'Lallana', 'midfielder', '1988-05-10', 12, 'england.png', 'England', 'no', '2019-2020'),
(21, 'shaqiri.jpg', '', '', 23, 'Shaqiri', 'Xherdan', 'Shaqiri', 'midfielder', '1991-10-10', 22, 'switz.png', 'Switzerland', 'yes', '2019-2020'),
(22, 'jones.png', '', '', 48, 'Jones', 'Curtis', 'Curtis Jones', 'midfielder', '2001-01-30', 2, 'england.png', 'England', 'no', '2019-2020'),
(23, 'elliott.png', 'elliott.jpg', '', 67, 'Elliott', 'Harvey', 'Harvey Elliott', 'midfielder', '2003-04-04', 4, 'england.png', 'England', 'no', '2019-2020'),
(24, 'firmino.jpg', 'nr9.jpg', '', 9, 'Firmino', 'Roberto', 'Roberto Firmino', 'forward', '1991-10-02', 90, 'bazil.png', 'Brazil', 'yes', '2019-2020'),
(25, 'mane.jpg', 'nr10.jpg', '', 10, 'Mane', 'Sadio', 'Sadio Mane', 'forward', '1992-04-10', 150, 'senegal.png', 'Senegal', 'yes', '2019-2020'),
(26, 'salah.jpg', 'nr11.jpg', '', 11, 'Salah', 'Mohamed', 'Mohamed Salah', 'forward', '1992-06-15', 150, 'egypt.png', 'Egypt', 'yes', '2019-2020'),
(27, 'minamino.png', '', '', 18, 'Minamino', 'Takumi', 'Minamino', 'forward', '1995-01-16', 12, 'japon.jpg', 'Japon', 'yes', '2019-2020'),
(28, 'origi.jpg', '', '', 27, 'Origi', 'Divock', 'Divock Origi', 'forward', '1995-04-18', 20, 'belgium.png', 'Belgium', 'yes', '2019-2020'),
(55, 'tsimikas.png', '', '', 21, 'Konstantinos', 'Tsimikas', 'Tsimikas', 'defender', '1996-05-12', 9, 'greece.png', 'Greece', 'yes', '2020-2021'),
(56, 'adrian2020.png', 'adrian1.jpg', 'adrian.png', 13, 'Adrian', 'San Miguel del Castillo', 'Adrian', 'goalkeeper', '1987-01-03', 2, 'spain.png', 'Spain', 'no', '2020-2021'),
(57, 'alisson2020.png', 'nr1.jpg', 'alisson.png', 1, 'Alisson', 'Becker', 'Alisson Becker', 'goalkeeper', '1992-10-02', 80, 'bazil.png', 'Brazil', 'yes', '2020-2021'),
(58, 'kelleher2020.png', 'kelleher.jpg', 'kelleher1.png', 62, 'Kelleher', 'Coaimhin', 'Kelleher', 'goalkeeper', '1998-11-23', 2, 'ireland.png', 'Ireland', 'yes', '2020-2021'),
(59, 'dijk2020.png', 'nr4.jpg', 'dijk.png', 4, 'Van Dijk', 'Virgil', 'Van Dijk', 'defender', '1991-07-08', 80, 'holland.png', 'Netherlands', 'yes', '2020-2021'),
(60, 'gomez2020.png', '', 'gomez.jpg', 12, 'Gomez', 'Joe', 'Joe Gomez', 'defender', '1997-05-23', 40, 'england.png', 'England', 'yes', '2020-2021'),
(61, 'matip.png', '', 'matip.jpg', 32, 'Matip', 'Joel', 'Joel Matip', 'defender', '1991-08-08', 32, 'cameoon.png', 'Cameroon', 'yes', '2020-2021'),
(62, 'robertson2020.png', '', 'andyr.jpg', 26, 'Robertson', 'Andy', 'Andy Robertson', 'defender', '1994-03-11', 75, 'scot.png', 'Scotland', 'yes', '2020-2021'),
(63, 'trentA20.png', '', 'taa.jpg', 66, 'Alexander-Arnold', 'Trent', 'Trent Al-Arnold', 'defender', '1998-10-07', 110, 'england.png', 'England', 'yes', '2020-2021'),
(64, 'fabinho20.png', 'nr3.jpg', 'fabinho.png', 3, 'Fabinho', 'Henrique Tavares', 'Fabinho', 'midfielder', '1993-10-23', 60, 'bazil.png', 'Brazil', 'yes', '2020-2021'),
(65, 'wijnaldum20.png', 'nr5.jpg', 'wijnaldum.jpg', 5, 'Wijnaldum', 'Georginio', 'Wijnaldum', 'midfielder', '1990-11-11', 40, 'holland.png', 'Netherlands', 'yes', '2020-2021'),
(66, 'thiago.png', 'thiago.jpg', '', 6, 'Thiago', 'Alcantara', 'Thiago', 'midfielder', '1991-04-11', 48, 'spain.png', 'Spain', 'yes', '2020-2021'),
(67, 'milner20.png', 'nr7.jpg', 'milner.jpg', 7, 'Milner', 'James', 'Milner', 'midfielder', '1986-01-04', 5, 'england.png', 'England', 'no', '2020-2021'),
(68, 'keita20.png', 'nr8.jpg', 'keita.png', 8, 'Keita', 'Naby Deco', 'Keita', 'midfielder', '1995-02-10', 40, 'guinea.png', 'Guinea', 'yes', '2020-2021'),
(69, 'henderson20.png', '', 'henderson.jpg', 14, 'Henderson', 'Jordan', 'Henderson', 'midfielder', '1990-06-17', 28, 'england.png', 'England', 'yes', '2020-2021'),
(70, 'alexOX20.png', '', 'alex.png', 15, 'Oxlade-Chamberlain', 'Alex', 'Oxlade-Ch.', 'midfielder', '1993-08-15', 24, 'england.png', 'England', 'yes', '2020-2021'),
(71, 'shaqiri20.png', '', 'shaqiri.jpg', 23, 'Shaqiri', 'Xherdan', 'Shaqiri', 'midfielder', '1991-10-10', 16, 'switz.png', 'Switzerland', 'yes', '2020-2021'),
(72, 'jones20.png', '', 'jones.png', 17, 'Jones', 'Curtis', 'Curtis Jones', 'midfielder', '2001-01-30', 17, 'england.png', 'England', 'no', '2020-2021'),
(73, 'firmino20.png', 'nr9.jpg', 'firmino.jpg', 9, 'Firmino', 'Roberto', 'Roberto Firmino', 'forward', '1991-10-02', 72, 'bazil.png', 'Brazil', 'yes', '2020-2021'),
(74, 'mane20.png', 'nr10.jpg', 'mane.jpg', 10, 'Mane', 'Sadio', 'Sadio Mane', 'forward', '1992-04-10', 120, 'senegal.png', 'Senegal', 'yes', '2020-2021'),
(75, 'salah20.png', 'nr11.jpg', 'salah.jpg', 11, 'Salah', 'Mohamed', 'Salah', 'forward', '1992-06-15', 120, 'egypt.png', 'Egypt', 'yes', '2020-2021'),
(76, 'diogoJota.png', 'diogoJota.jpg', '', 20, 'Jota', 'Diogo', 'Diogo Jota', 'forward', '1996-12-04', 40, 'portugal.png', 'Portugal', 'yes', '2020-2021'),
(77, 'origi20.png', '', 'origi.jpg', 27, 'Origi', 'Divock', 'Origi', 'forward', '1995-04-18', 16, 'belgium.png', 'Belgium', 'yes', '2020-2021'),
(78, 'necoW.png', '', '', 76, 'Williams', 'Neco', 'N. Williams', 'defender', '2001-04-13', 10, 'wales.png', 'Wales', 'yes', '2020-2021'),
(79, 'nathanielP.png', '', '', 47, 'Phillips', 'Nathaniel', 'Phillips', 'defender', '1997-03-21', 1.8, 'england.png', 'England', 'no', '2020-2021'),
(80, 'rhysW.png', '', '', 46, 'Williams', 'Rhys', 'R. Williams', 'defender', '2001-02-03', 5, 'england.png', 'England', 'no', '2020-2021'),
(81, 'benDavies.png', '', '', 28, 'Davies', 'Ben', 'Ben Davies', 'defender', '1995-08-11', 2.4, 'england.png', 'England', 'no', '2020-2021'),
(82, 'kabak.png', '', '', 19, 'Kabak', 'Ozan', 'Ozan Kabak', 'defender', '2000-03-25', 25, 'turkey.png', 'Turkey', 'yes', '2020-2021'),
(83, 'benW.jpg', '', '', 58, 'Woodburn', 'Ben', 'Ben Woodburn', 'midfielder', '1999-10-15', 4.5, 'wales.png', 'Wales', 'yes', '2020-2021'),
(84, 'alisson2021.png', 'nr1.jpg', 'alisson2020.png', 1, 'Alisson', 'Becker', 'Alisson Becker', 'goalkeeper', '1992-10-02', 60, 'bazil.png', 'Brazil', 'yes', '2021-2022'),
(85, 'kelleher2021.png', 'nr62.jpg', 'kelleher2020.png', 62, 'Kelleher', 'Coaimhin', 'Kelleher', 'goalkeeper', '1998-11-23', 2.5, 'ireland.png', 'Ireland', 'yes', '2021-2022'),
(86, 'adrian2021.png', 'nr13.jpg', 'adrian2020.png', 13, 'Adrian', 'San Miguel del Castillo', 'Adrian', 'goalkeeper', '1987-01-03', 1, 'spain.png', 'Spain', 'no', '2021-2022'),
(87, 'dijk2021.png', 'nr4.jpg', 'dijk2020.png', 4, 'Van Dijk', 'Virgil', 'Virgil', 'defender', '1991-07-08', 55, 'holland.png', 'Netherlands', 'yes', '2021-2022'),
(88, 'gomez2021.png', 'nr12.jpg', 'gomez2020.png', 12, 'Gomez', 'Joe', 'Joe Gomez', 'defender', '1997-05-23', 25, 'england.png', 'England', 'no', '2021-2022'),
(89, 'tsimikas2021.png', 'nr21.jpg', 'tsimikas.png', 21, 'Tsimikas', 'Konstantinos', 'Tsimikas', 'defender', '1996-05-12', 10, 'greece.png', 'Greece', 'yes', '2021-2022'),
(90, 'robertson2021.png', 'nr26.jpg', 'robertson2020.png', 26, 'Robertson', 'Andy', 'Robertson', 'defender', '1994-03-11', 65, 'scot.png', 'Scotland', 'yes', '2021-2022'),
(91, 'matip2021.png', 'nr32.jpg', 'matip.png', 32, 'Matip', 'Joel', 'Joel Matip', 'defender', '1991-08-08', 18, 'cameoon.png', 'Cameroon', 'yes', '2021-2022'),
(92, 'rhysW2021.png', 'nr46.jpg', 'rhysW.png', 46, 'Williams', 'Rhys', 'Rhys Williams', 'defender', '2001-02-03', 4, 'england.png', 'England', 'no', '2021-2022'),
(93, 'trentA2021.png', 'nr66.jpg', 'trentA20.png', 66, 'Alexander-Arnold', 'Trent', 'Trent Al-Arnold', 'defender', '1998-10-07', 80, 'england.png', 'England', 'yes', '2021-2022'),
(94, 'konate2021.png', 'nr5.jpg', '', 5, 'Konate', 'Ibrahima', 'Konate', 'defender', '1999-05-25', 30, 'france.png', 'France', 'no', '2021-2022'),
(95, 'fabinho2021.png', 'nr3.jpg', 'fabinho20.png', 3, 'Fabinho', 'Henrique Tavares', 'Fabinho', 'midfielder', '1993-10-23', 60, 'bazil.png', 'Brazil', 'yes', '2021-2022'),
(96, 'thiago2021.png', 'nr6.jpg', 'thiago.png', 6, 'Thiago', 'Alcantara', 'Thiago', 'midfielder', '1991-04-11', 22, 'spain.png', 'Spain', 'yes', '2021-2022'),
(97, 'milner2021.png', 'nr7.jpg', 'milner20.png', 7, 'Milner', 'James', 'Milner', 'midfielder', '1986-01-04', 2, 'england.png', 'England', 'no', '2021-2022'),
(98, 'keita2021.png', 'nr8.jpg', 'keita20.png', 8, 'Keita', 'Naby Deco', 'Keita', 'midfielder', '1995-02-10', 30, 'guinea.png', 'Guinea', 'yes', '2021-2022'),
(99, 'henderson2021.png', 'nr14.jpg', 'henderson20.png', 14, 'Henderson', 'Jordan', 'Henderson', 'midfielder', '1990-06-17', 18, 'england.png', 'England', 'yes', '2021-2022'),
(100, 'alex2021.png', 'nr15.jpg', 'alexOX20.png', 15, 'Oxlade-Chamberlain', 'Alex', 'Oxlade-Ch', 'midfielder', '1993-08-15', 18, 'england.png', 'England', 'no', '2021-2022'),
(101, 'jones2021.png', 'nr17.jpg', 'jones20.png', 17, 'Jones', 'Curtis', 'Jones', 'midfielder', '2001-01-30', 30, 'england.png', 'England', 'no', '2021-2022'),
(102, 'firmino2021.png', 'nr9.jpg', 'firmino20.png', 9, 'Firmino', 'Roberto', 'Roberto Firmino', 'forward', '1991-10-02', 38, 'bazil.png', 'Brazil', 'yes', '2021-2022'),
(103, 'mane2021.png', 'nr10.jpg', 'mane20.png', 10, 'Mane', 'Sadio', 'Sadio Mane', 'forward', '1992-04-10', 80, 'senegal.png', 'Senegal', 'yes', '2021-2022'),
(104, 'salah2021.png', 'nr11.jpg', 'salah20.png', 11, 'Salah', 'Mohamed', 'Salah', 'forward', '1992-06-15', 100, 'egypt.png', 'Egypt', 'yes', '2021-2022'),
(105, 'diogoJota2021.png', 'nr20.jpg', 'diogoJota.png', 20, 'Jota', 'Diogo', 'Diogo Jota', 'forward', '1996-12-04', 60, 'portugal.png', 'Portugal', 'yes', '2021-2022'),
(106, 'origi2021.png', 'nr27.jpg', 'origi20.png', 27, 'Origi', 'Divock', 'Origi', 'forward', '1995-04-18', 12, 'belgium.png', 'Belgium', 'yes', '2021-2022'),
(107, 'elliot2021.png', 'nr67.jpg', '', 67, 'Elliott', 'Harvey', 'Harvey Elliott', 'forward', '2003-04-04', 15, 'england.png', 'England', 'no', '2021-2022'),
(108, 'diaz2021.png', 'nr23.jpg', '', 23, 'Diaz', 'Luis', 'Luis Diaz', 'forward', '1997-01-13', 40, 'colombia.png', 'Colombia', 'yes', '2021-2022'),
(109, 'minamino2021.png', 'nr18.jpg', 'minamino.png', 18, 'Minamino', 'Takumi', 'Minamino', 'forward', '1995-01-16', 12, 'japon.jpg', 'Japon', 'yes', '2021-2022'),
(111, 'alisson2021.png', 'nr1.jpg', 'alisson2020.png', 1, 'Alisson', 'Becker', 'Alisson Becker', 'goalkeeper', '1992-10-02', 50, 'bazil.png', 'Brazil', 'yes', '2022-2023'),
(112, 'dijk2021.png', 'nr4.jpg', 'dijk2020.png', 4, 'Van Dijk', 'Virgil', 'Virgil', 'defender', '1991-07-08', 55, 'holland.png', 'Netherlands', 'yes', '2022-2023'),
(113, 'fabinho2021.png', 'nr3.jpg', 'fabinho20.png', 3, 'Fabinho', 'Henrique Tavares', 'Fabinho', 'midfielder', '1993-10-23', 60, 'bazil.png', 'Brazil', 'yes', '2022-2023'),
(114, 'firmino2021.png', 'nr9.jpg', 'firmino20.png', 9, 'Firmino', 'Roberto', 'Roberto Firmino', 'forward', '1991-10-02', 32, 'bazil.png', 'Brazil', 'yes', '2022-2023'),
(115, 'konate2021.png', 'nr5.jpg', '', 5, 'Konate', 'Ibrahima', 'Konate', 'defender', '1999-05-25', 40, 'france.png', 'France', 'yes', '2022-2023'),
(116, 'adrian2021.png', 'nr13.jpg', 'adrian2020.png', 13, 'Adrian', 'San Miguel del Castillo', 'Adrian', 'goalkeeper', '1987-01-03', 1, 'spain.png', 'Spain', 'no', '2022-2023'),
(117, 'kelleher2021.png', 'nr62.jpg', 'kelleher2020.png', 62, 'Kelleher', 'Coaimhin', 'Kelleher', 'goalkeeper', '1998-11-23', 8, 'ireland.png', 'Ireland', 'yes', '2022-2023'),
(118, 'gomez2021.png', 'nr12.jpg', 'gomez2020.png', 12, 'Gomez', 'Joe', 'Joe Gomez', 'defender', '1997-05-23', 18, 'england.png', 'England', 'no', '2022-2023'),
(119, 'tsimikas2021.png', 'nr21.jpg', 'tsimikas.png', 21, 'Tsimikas', 'Konstantinos', 'Tsimikas', 'defender', '1996-05-12', 15, 'greece.png', 'Greece', 'yes', '2022-2023'),
(120, 'robertson2021.png', 'nr26.jpg', 'robertson2020.png', 26, 'Robertson', 'Andy', 'Robertson', 'defender', '1994-03-11', 65, 'scot.png', 'Scotland', 'yes', '2022-2023'),
(121, 'matip2021.png', 'nr32.jpg', 'matip.png', 32, 'Matip', 'Joel', 'Joel Matip', 'defender', '1991-08-08', 18, 'cameoon.png', 'Cameroon', 'yes', '2022-2023'),
(122, 'trentA2021.png', 'nr66.jpg', 'trentA20.png', 66, 'Alexander-Arnold', 'Trent', 'Trent Al-Arnold', 'defender', '1998-10-07', 80, 'england.png', 'England', 'yes', '2022-2023'),
(123, 'calvinR2022.jpeg', 'nr22.jpg', '', 22, 'Ramsay', 'Calvin', 'Calvin Ramsay', 'defender', '2003-07-31', 5, 'scot.png', 'Scotland', 'no', '2022-2023'),
(124, 'thiago2021.png', 'nr6.jpg', 'thiago.png', 6, 'Thiago', 'Alcantara', 'Thiago', 'midfielder', '1991-04-11', 20, 'spain.png', 'Spain', 'no', '2022-2023'),
(125, 'milner2021.png', 'nr7.jpg', 'milner20.png', 7, 'Milner', 'James', 'Milner', 'midfielder', '1986-01-04', 2, 'england.png', 'England', 'no', '2022-2023'),
(126, 'keita2021.png', 'nr8.jpg', 'keita20.png', 8, 'Keita', 'Naby Deco', 'Keita', 'midfielder', '1995-02-10', 26, 'guinea.png', 'Guinea', 'yes', '2022-2023'),
(127, 'henderson2021.png', 'nr14.jpg', 'henderson20.png', 14, 'Henderson', 'Jordan', 'Henderson', 'midfielder', '1990-06-17', 15, 'england.png', 'England', 'yes', '2022-2023'),
(128, 'alex2021.png', 'nr15.jpg', 'alexOX20.png', 15, 'Oxlade-Chamberlain', 'Alex', 'Oxlade-Ch', 'midfielder', '1993-08-15', 16, 'england.png', 'England', 'no', '2022-2023'),
(129, 'jones2021.png', 'nr17.jpg', 'jones20.png', 17, 'Jones', 'Curtis', 'Jones', 'midfielder', '2001-01-30', 28, 'england.png', 'England', 'no', '2022-2023'),
(130, 'salah2021.png', 'nr11.jpg', 'salah20.png', 11, 'Salah', 'Mohamed', 'Salah', 'forward', '1992-06-15', 90, 'egypt.png', 'Egypt', 'yes', '2022-2023'),
(131, 'diogoJota2021.png', 'nr20.jpg', 'diogoJota.png', 20, 'Jota', 'Diogo', 'Diogo Jota', 'forward', '1996-12-04', 60, 'portugal.png', 'Portugal', 'yes', '2022-2023'),
(132, 'diaz2021.png', 'nr23.jpg', '', 24, 'Diaz', 'Luis', 'Luis Diaz', 'forward', '1997-01-13', 65, 'colombia.png', 'Colombia', 'yes', '2022-2023'),
(133, 'darwinN2022.jpeg', 'nr27.jpg', '', 27, 'Nunez', 'Darwin', 'Darwin Nunez', 'forward', '1999-06-24', 55, 'uruguay.png', 'Uruguay', 'yes', '2022-2023'),
(134, 'fabioC2022.jpeg', 'nr28.jpg', '', 28, 'Carvalho', 'Fabio', 'Carvalho', 'forward', '2002-08-30', 12, 'portugal.png', 'Portugal', 'no', '2022-2023');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `transfer`
--

CREATE TABLE `transfer` (
  `id` int(9) NOT NULL,
  `imgPlayer` varchar(30) CHARACTER SET utf8 NOT NULL,
  `img2Player` varchar(30) CHARACTER SET utf8 NOT NULL,
  `imgClub` varchar(30) CHARACTER SET utf8 NOT NULL,
  `img2Club` varchar(15) CHARACTER SET utf8 NOT NULL,
  `name` varchar(40) CHARACTER SET utf8 NOT NULL,
  `age` int(3) NOT NULL,
  `role` varchar(15) CHARACTER SET utf8 NOT NULL,
  `valueTransfer` float NOT NULL,
  `status` varchar(15) CHARACTER SET utf8 NOT NULL,
  `club` varchar(30) CHARACTER SET utf8 NOT NULL,
  `data` date NOT NULL,
  `sezon` varchar(9) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Eliminarea datelor din tabel `transfer`
--

INSERT INTO `transfer` (`id`, `imgPlayer`, `img2Player`, `imgClub`, `img2Club`, `name`, `age`, `role`, `valueTransfer`, `status`, `club`, `data`, `sezon`) VALUES
(1, 'dijk.png', 'dijk.jpg', 'south.png', '', 'Virgil Van Dijk', 26, 'defender', 84.65, 'arrival', 'Southampton', '2018-01-01', '2017-2018'),
(2, 'minamino.png 	', 'minamino.jpg', 'redBull.png', '', 'Takumi Minamino', 25, 'forward', 8.5, 'arrival', 'RB Salzburg', '2020-01-01', '2019-2020'),
(3, 'ings.png', 'ings1.png', 'south.png', '', 'Denny Ings', 26, 'forward', 22.2, 'departure', 'Southampton', '2020-01-01', '2019-2020'),
(4, 'ojo.png', '', 'rangers.png', '', 'Sheyi Ojo', 22, 'forward', 0, 'on-loan', 'Rangers', '2019-07-01', '2019-2020'),
(5, 'kent.jpg', '', 'rangers.png', '', 'Ryan Kent', 22, 'forward', 7.2, 'departure', 'Rangers', '2019-07-01', '2019-2020'),
(7, 'sep.png', 'sep.jpg', 'pec.png', '', 'Sepp v. d. Berg', 17, 'defender', 1.9, 'arrival', 'PEC Zwolle', '2019-07-01', '2019-2020'),
(8, 'andyL.png', '', 'midd.png', '', 'Andy Lonergan', 35, 'goalkeeper', 0, 'arrival', 'Middlesbrough', '2019-07-01', '2019-2020'),
(9, 'adrian1.png', '', 'west.png', '', 'Adrian', 32, 'goalkeeper', 0, 'arrival', 'West Ham', '2019-07-01', '2019-2020'),
(10, 'kelleher1.png', '', 'icon.png', '', 'Coaimhin Kelleher', 20, 'goalkeeper', 0, 'arrival', 'Liverpool U23', '2019-07-01', '2019-2020'),
(11, 'simon.png', 'mignolet.png', 'brugge.png', '', 'Simon Mignolet', 31, 'goalkeeper', 7, 'departure', 'Club Brugge', '2019-07-01', '2019-2020'),
(12, 'harryW.png', '', 'afc.png', '', 'Harry Wilson', 22, 'forward', 2.7, 'on-loan', 'AFC Bourmemouth', '2019-07-01', '2019-2020'),
(13, 'grujic.png', '', 'hertha.png', '', 'Marko Grujic', 23, 'midfielder', 2, 'on-loan', 'Hertha BSC', '2019-07-01', '2019-2020'),
(14, 'taiwo.png', '', 'mainz.png', '', 'Taiwo Awoniyi', 21, 'forward', 0.5, 'on-loan', 'FSV Mainz', '2019-07-01', '2019-2020'),
(15, 'sturridge.png', 'danielS.png', 'trabzonspor.png', '', 'Daniel Sturridge', 29, 'forward', 0, 'departure', 'Trabznspor', '2019-07-01', '2019-2020'),
(16, 'albertoM.png', '', 'villarreal.jpg', '', 'Alberto Moreno', 27, 'defender', 0, 'departure', 'Villarreal', '2019-07-01', '2019-2020'),
(17, 'ben.png', '', 'oxford.png', '', 'Ben Woodbun', 19, 'forward', 0, 'on-loan', 'Oxford United', '2019-07-01', '2019-2020'),
(18, 'ovie.png', '', 'reading.png', '', 'Ovie Ejaria', 21, 'midfielder', 0, 'on-loan', 'Reading', '2019-07-01', '2019-2020'),
(19, 'adamBogdan.png', '', 'free.png', '', 'Adam Bogdan', 31, 'goalkeeper', 0, 'departure', 'Free agent', '2019-07-01', '2019-2020'),
(20, 'connorR.png', '', 'free.png', '', 'Connor Randall', 23, 'defender', 0, 'departure', 'Free agent', '2019-07-01', '2019-2020'),
(21, 'coutinho.png', 'coutinho.jpg', 'barcelona.png', 'barca.png', 'Philippe Coutinho', 25, 'forward', 145, 'departure', 'FC Barcelona', '2018-01-01', '2017-2018'),
(24, 'tsimikas.png', 'tsimikas.jpg', 'oly.png', '', 'Kostas Tsimikas', 24, 'defender', 13, 'arrival', 'Olympiacos', '2020-08-01', '2020-2021'),
(26, 'dejanZ.png', 'dejanZN.png', 'zenit.png', '', 'Dejan Lovren', 31, 'defender', 12, 'departure', 'Zenit FC', '2020-08-01', '2020-2021'),
(27, 'andyL.png', 'andy.jpg', 'free.png', '', 'Andy Lonergan', 36, 'goalkeeper', 0, 'departure', 'Free Agent', '2020-07-01', '2020-2021'),
(28, 'minamino.png', 'minamino.jpg', 'south.png', '', 'Takumi Minamino', 26, 'forward', 0, 'on-loan', 'Southampton', '2021-01-15', '2020-2021'),
(29, 'sep.png', 'sep.jpg', 'preston.png', '', 'Sepp Van-Den-Berg', 19, 'defender', 0, 'on-loan', 'Preston', '2020-08-01', '2020-2021'),
(30, 'grujic.png', 'grujic1.jpeg', 'porto.jpg', '', 'Marko Grujic', 24, 'midfielder', 0, 'on-loan', 'FC Porto', '2020-08-01', '2020-2021'),
(31, 'karius.png', 'karius1.jpg', 'unionB.png', '', 'Loris Karius', 27, 'goalkeeper', 0, 'on-loan', 'Union Berlin', '2020-08-01', '2020-2021'),
(32, 'taiwo.png', 'taiwo.jpg', 'unionB.png', '', 'Taiwo Awoniyi', 23, 'forward', 0, 'on-loan', 'Union Berlin', '2020-08-01', '2020-2021'),
(33, 'ojo.png', 'ojo.jpg', 'cardiff.png', '', 'Sheyi Ojo', 23, 'midfielder', 0, 'on-loan', 'Cardiff', '2020-08-01', '2020-2021'),
(34, 'lallanaB.png', 'lallana.jpg', 'brigh.png', '', 'Adam Lallana', 32, 'midfielder', 0, 'departure', 'Brighton', '2020-08-01', '2020-2021'),
(35, 'clyneCP.png', 'clyneCP.jpg', 'crystal.png', '', 'Nathaniel Clyne', 29, 'defender', 0, 'departure', 'Crystal Palace', '2020-08-01', '2020-2021'),
(36, 'ejariaR.png', 'ejariaR.jpg', 'reading.png', '', 'Ovie Ejaria', 22, 'midfielder', 3.9, 'departure', 'Reading', '2020-08-31', '2020-2021'),
(37, 'harryW.png', 'harryW1.jpg', 'cardiff.png', '', 'Harry Wilson', 23, 'forward', 1.3, 'on-loan', 'Cardiff', '2021-01-15', '2020-2021'),
(38, 'brewster.png', 'brewster.jpg', 'sheff.ico', '', 'Rhian Brewster', 20, 'forward', 26, 'departure', 'Sheffield Utd', '2020-09-15', '2020-2021'),
(39, 'thiago.png', 'thiago.jpg', 'bayern.png', '', 'Thiago', 29, 'midfielder', 22, 'arrival', 'Bayern Muchen', '2020-08-31', '2020-2021'),
(40, 'diogoJota.png', 'diogoJota.jpg', 'wolves.png', '', 'Diogo Jota', 23, 'forward', 44.7, 'arrival', 'Wolves', '2020-09-30', '2020-2021'),
(41, 'kabak.png', 'kabak1.png', 'schalke.ico', '', 'Ozan Kabak', 20, 'defender', 1.1, 'in-loan', 'FC Schalke 04', '2021-01-31', '2020-2021'),
(42, 'benDavies.png', 'benD.png', 'preston.png', '', 'Ben Davies', 25, 'defender', 1.85, 'arrival', 'Preston', '2021-01-31', '2020-2021'),
(43, 'woodburn.png', 'woodburn.jpg', 'hearts.png', '', 'Ben Woodburn', 21, 'forward', 0, 'on-loan', 'Hearts', '2021-08-01', '2021-2022'),
(44, 'davies.png', 'davies.jpg', 'sheff.ico', '', 'Ben Davies', 26, 'defender', 0, 'on-loan', 'Sheffield United', '2021-08-01', '2021-2022'),
(45, 'ojo.png', 'ojo.jpg', 'milwall.png', '', 'Sheyi Ojo', 24, 'midfielder', 0, 'on-loan', 'Millwall', '2021-08-01', '2021-2022'),
(46, 'necoW20.png', 'neco.jpg', 'fulham.png', '', 'Neco Williams', 20, 'defender', 0, 'on-loan', 'Fulham', '2021-08-01', '2021-2022'),
(47, 'nathanielP.png', 'nathanielP.jpg', 'afc.png', '', 'Nathaniel Phillips', 24, 'defender', 0, 'on-loan', 'AFC Bournemouth', '2021-08-01', '2021-2022'),
(48, 'sep.png', 'sep.jpg', 'preston.png', '', 'Sepp Van-Den-Berg', 20, 'defender', 0, 'on-loan', 'Preston', '2021-08-01', '2021-2022'),
(49, 'grujic21.png', 'grujic1.jpeg', 'porto.jpg', '', 'Marko Grujic', 25, 'midfielder', 1, 'departure', 'FC Porto', '2021-07-01', '2021-2022'),
(50, 'tawo21.png', 'tawo21.jpg', 'unionB.png', '', 'Taiwo Awoniyi', 24, 'defender', 6.5, 'departure', 'Union Berlin', '2021-07-01', '2021-2022'),
(51, 'wijnaldum21.png', 'wijnaldum21.jpg', 'psg.png', '', 'Georginio Wijnaldum', 30, 'midfielder', 0, 'departure', 'Paris SG', '2021-07-01', '2021-2022'),
(52, 'shaqiri21.png', 'shaqiri21.jpg', 'lyon.png', '', 'Xherdan Shaqiri', 29, 'forward', 6, 'departure', 'Ol Lyon', '2021-08-01', '2021-2022'),
(53, 'harryW21.jpg', 'harryW21.png', 'fulham.png', '', 'Harry Wilson', 24, 'defender', 14, 'departure', 'Fulham', '2021-08-29', '2021-2022'),
(54, 'konate2021.png', 'konate2021.jpg', 'rbLeipzig.png', '', 'Ibrahima Konate', 22, 'defender', 40, 'arrival', 'RB Leipzig', '2021-08-30', '2021-2022'),
(55, 'diaz2021.png', 'diaz2021.jpg', 'porto.png', '', 'Luis Diaz', 25, 'forward', 45, 'arrival', 'FC Porto', '2022-01-24', '2021-2022'),
(56, 'rhysW2021.png', 'rhys1.jpg', 'blackpool.ico', '', 'Rhys Williams', 21, 'defender', 0, 'on-loan', 'Blackpool', '2022-07-01', '2022-2023'),
(57, 'calvinR2022.jpg', 'calvinR.jpg', 'aberdeen.png', '', 'Calvin Ramsay', 18, 'defender', 4.5, 'arrival', 'Aberdeen', '2022-07-01', '2022-2023'),
(58, 'grujic21.png', 'grujic1.jpeg', 'porto.jpg', '', 'Marko Grujic', 26, 'midfielder', 9, 'departure', 'FC Porto', '2022-07-01', '2022-2023'),
(59, 'fabioC2022.jpeg', 'fabioC.jpg', 'fulham.png', '', 'Fabio Carvalho', 19, 'forward', 5.9, 'arrival', 'Fulham', '2022-07-04', '2022-2023'),
(60, 'darwinN2022.jpg', 'darwinN.jpg', 'benfica.png', '', 'Darwin Nunez', 23, 'forward', 75, 'arrival', 'SL Benfica', '2022-07-11', '2022-2023'),
(61, 'karius.png', 'karius1.jpg', 'free.png', '', 'Loris Karius', 29, 'goalkeeper', 0, 'departure', 'Free Agent', '2022-07-01', '2022-2023'),
(62, 'benW2022.png', 'benW2022.jpg', 'preston.png', '', 'Ben Woodburn', 22, 'forward', 0, 'departure', 'Preston', '2022-07-04', '2022-2023'),
(63, 'ojo2022.png', 'ojo2022.jpg', 'cardiff.png', '', 'Sheyi Ojo', 25, 'forward', 0, 'departure', 'Cardiff City', '2022-07-04', '2022-2023'),
(64, 'origi2022.png', 'origi2022.jpg', 'ac.png', '', 'Divock Origi', 27, 'forward', 0, 'departure', 'AC Milan', '2022-07-04', '2022-2023'),
(65, 'nonePlayer.png', 'benD2022.jpg', 'rangers.png', '', 'Ben Davies', 26, 'defender', 4.7, 'departure', 'Rangers', '2022-07-05', '2022-2023'),
(66, 'nonePlayer.png', 'minamino2022.jp', 'asm.png', '', 'Takumi Minamino', 27, 'forward', 15, 'departure', 'AS Monaco', '2022-07-11', '2022-2023'),
(67, 'nonePlayer.png', 'neco2022.jpg', 'nottinghamForest.png', '', 'Neco Williams', 21, 'defender', 20, 'departure', 'Nottingham Forest', '2022-07-11', '2022-2023'),
(68, 'mane2022.png', 'mane2022.jpg', 'bayern.png', '', 'Sadio Mane', 30, 'forward', 32, 'departure', 'Bayern Munich', '2022-07-18', '2022-2023');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fName` varchar(20) CHARACTER SET utf8 NOT NULL,
  `lName` varchar(25) CHARACTER SET utf8 NOT NULL,
  `dateOfBirth` date NOT NULL,
  `country` varchar(20) CHARACTER SET utf8 NOT NULL,
  `city` varchar(25) CHARACTER SET utf8 NOT NULL,
  `gender` varchar(11) CHARACTER SET utf8 NOT NULL,
  `emailAddress` text CHARACTER SET utf8 NOT NULL,
  `phoneNumber` varchar(20) NOT NULL,
  `password` text CHARACTER SET utf8 NOT NULL,
  `role` varchar(5) CHARACTER SET utf8 NOT NULL,
  `verificationKey` varchar(30) CHARACTER SET utf8 NOT NULL,
  `dateOfRegister` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `users`
--

INSERT INTO `users` (`id`, `fName`, `lName`, `dateOfBirth`, `country`, `city`, `gender`, `emailAddress`, `phoneNumber`, `password`, `role`, `verificationKey`, `dateOfRegister`) VALUES
(1, 'Pantiș', 'Cristina', '1996-06-16', 'România', 'Aleșd', 'female', 'criss16@yahoo.com', '0747389812', '1fbe2798c64cc2ebad436d62a54d3ff1', 'admin', 'liverpool19', '2022-06-18 17:25:38'),
(2, 'Cuc', 'Andreea', '2000-08-02', 'România', 'Peștere', 'female', 'andreeacuc02@gmail.com', '0747389812', 'f8b3e79923cc50f5d1ae51135222c63a', 'user', 'standard', '2022-07-07 10:54:45'),
(3, 'Costea', 'Naomi', '1996-07-26', 'România', 'Ștei', 'female', 'naomi26@gmail.ro', '076527604', 'd421e75bf922b7f8534d6faeab145a74', 'admin', 'liverpool19', '2022-07-08 16:43:27'),
(4, 'Dumșe Burescu', 'Diana Veronica', '1997-09-20', 'România', 'Beiuș', 'female', 'dumsediana@gmail.com', '0765277604', 'ac882bcf660f4658d46faba625bbec35', 'user', 'standard', '2022-07-11 14:39:08'),
(5, 'Dumșe Burescu', 'Diana Veronica', '1997-09-10', 'România', 'Beiuș', 'female', 'dianadumse@gmail.com', '0765277604', 'b17c17871739849c661e916070ddb7ba', 'user', 'standard', '2022-07-11 14:44:17'),
(6, 'Dumșe-Burescu', 'Diana-Veronica', '1996-09-12', 'România', 'Oradea', 'female', 'dumse@gmail.com', '0765277604', 'b17c17871739849c661e916070ddb7ba', 'user', 'standard', '2022-07-11 14:59:31'),
(7, 'Filip-Bogdan', 'Crina-Ioana', '1996-12-24', 'România', 'Pestere', 'female', 'crina@gmail.com', '0765377604', '8855fc1f78faf887c3bfa01056d5530f', 'user', 'standard', '2022-07-11 15:11:07'),
(8, 'Ștefana', 'Mădăraș', '1996-01-10', 'România', 'Oradea', 'female', 'stefi@gmail.com', '0765277604', '580049533626219cf87d48e9de56b820', 'user', 'standard', '2022-07-11 15:15:31'),
(9, 'Vlad-Trip Costar', 'Ana-Maria Ioana', '1999-12-12', 'România', 'Beiuș', 'female', 'ioana@yahoo.com', '0765277604', 'cab42f7401262043e65a8a65c862ed85', 'user', 'standard', '2022-07-11 15:24:29'),
(10, 'Dan', 'Ardelean', '1996-05-16', 'Germania', 'Manhein', 'male', 'danArdelean@gmail.com', '0747389812', 'b0b980607a9588318b7b54727499a05c', 'admin', 'liverpool19', '2022-07-16 10:08:14'),
(11, 'Ardelean', 'Dan', '1996-05-16', 'Germania', 'Manhein', 'male', 'danardelean16@gmai.co', '0747389812', 'b0b980607a9588318b7b54727499a05c', 'user', 'standard', '2022-07-19 14:50:18'),
(12, 'Costea', 'Naomi Estera', '1996-07-26', 'România', 'Ștei', 'female', 'naomi26@gmail.com', '0747389812', 'fd196d4f0e8a4899f38cc961912bd7eb', 'admin', 'liverpool19', '2022-07-19 15:28:47');

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `calendar`
--
ALTER TABLE `calendar`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `clasament`
--
ALTER TABLE `clasament`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `transfer`
--
ALTER TABLE `transfer`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `calendar`
--
ALTER TABLE `calendar`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=249;

--
-- AUTO_INCREMENT pentru tabele `clasament`
--
ALTER TABLE `clasament`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT pentru tabele `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pentru tabele `team`
--
ALTER TABLE `team`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT pentru tabele `transfer`
--
ALTER TABLE `transfer`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT pentru tabele `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
