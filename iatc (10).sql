-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2022 at 09:36 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iatc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(255) NOT NULL,
  `a_username` varchar(255) NOT NULL,
  `a_password` varchar(255) NOT NULL,
  `a_category` varchar(255) NOT NULL,
  `a_status` varchar(255) NOT NULL,
  `a_email` varchar(255) NOT NULL,
  `a_img` varchar(255) NOT NULL,
  `a_creater_id` varchar(255) NOT NULL,
  `a_creat_date` varchar(255) NOT NULL,
  `a_updater_id` varchar(255) NOT NULL,
  `a_update_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_name`, `a_username`, `a_password`, `a_category`, `a_status`, `a_email`, `a_img`, `a_creater_id`, `a_creat_date`, `a_updater_id`, `a_update_date`) VALUES
(17, 'test1112', 'Seba12111', 'c5ca28f67333e12198c8cd4fa5c60c4a', '2', '1', 'n.m.zamanov@gmail.com', 'coordina4.png', '1', '2021-09-08 01:17:13', '1', '2021-10-17 23:51:56'),
(18, 'tester', 'Seba2', 'c5ca28f67333e12198c8cd4fa5c60c4a', '2', '1', 'sethubpro@gmail.com', 'derece19.png', '17', '2021-09-08 01:21:45', '20', '2021-09-08 06:20:28'),
(21, 'Rza Talibov551i', 'hunter', 'c5ca28f67333e12198c8cd4fa5c60c4a', '2', '1', 'sethubpro@gmail.com', 'download.png', '20', '2021-09-08 04:04:32', '21', '2022-06-16 11:39:14');

-- --------------------------------------------------------

--
-- Table structure for table `admincategory`
--

CREATE TABLE `admincategory` (
  `a_c_id` int(11) NOT NULL,
  `a_c_value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admincategory`
--

INSERT INTO `admincategory` (`a_c_id`, `a_c_value`) VALUES
(1, 'Admin'),
(2, 'Redactor');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gallery_id` int(11) NOT NULL,
  `gallery_name_az` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gallery_name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gallery_name_ru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gallery_name_tr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `gallery_name_az`, `gallery_name_en`, `gallery_name_ru`, `gallery_name_tr`) VALUES
(3, 'Gor???? ????kill??ri az', 'Gor???? ????kill??ri en', 'Gor???? ????kill??ri ru', 'Gor???? ????kill??ri tr');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_list`
--

CREATE TABLE `gallery_list` (
  `gl_id` int(11) NOT NULL,
  `gl_id_main` int(255) NOT NULL,
  `gl_img_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gl_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gl_creater_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `gallery_list`
--

INSERT INTO `gallery_list` (`gl_id`, `gl_id_main`, `gl_img_name`, `gl_date`, `gl_creater_id`) VALUES
(47, 3, 'upload/contact/1444601663762527.jpg', '2022-09-21 14:15:27', 21),
(48, 3, 'upload/contact/6413331663762527.png', '2022-09-21 14:15:27', 21),
(49, 3, 'upload/contact/3843891663762528.jpg', '2022-09-21 14:15:28', 21),
(50, 3, 'upload/contact/3694491663762528.jpg', '2022-09-21 14:15:28', 21),
(51, 3, 'upload/contact/5529971663762529.jpg', '2022-09-21 14:15:28', 21);

-- --------------------------------------------------------

--
-- Table structure for table `item7_course_programm`
--

CREATE TABLE `item7_course_programm` (
  `prog_id` int(11) NOT NULL,
  `prog_course_id` int(11) NOT NULL,
  `prog_title_az` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prog_title_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prog_title_tr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prog_title_ru` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prog_descr_az` longtext COLLATE utf8_unicode_ci NOT NULL,
  `prog_descr_en` longtext COLLATE utf8_unicode_ci NOT NULL,
  `prog_descr_tr` longtext COLLATE utf8_unicode_ci NOT NULL,
  `prog_descr_ru` longtext COLLATE utf8_unicode_ci NOT NULL,
  `prog_creater_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prog_creat_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prog_updater_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prog_update_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `item7_course_programm`
--

INSERT INTO `item7_course_programm` (`prog_id`, `prog_course_id`, `prog_title_az`, `prog_title_en`, `prog_title_tr`, `prog_title_ru`, `prog_descr_az`, `prog_descr_en`, `prog_descr_tr`, `prog_descr_ru`, `prog_creater_id`, `prog_creat_date`, `prog_updater_id`, `prog_update_date`) VALUES
(1, 9, 'tester az', 'tester en', 'tester tr', 'tester ru', '<p>tester descr az</p>', '<p>tester descr en</p>', '<p>tester descr tr</p>', '<p>tester descr ru</p>', '21', '2022-06-30 13:07:26', '', ''),
(2, 9, 'sdasd', 'fgdfg', 'ethtdbg', 'fghfgh', '<p>dsfdfsdfdsf</p>', '<p>dfgdfg</p>', '<p>advzxfbvcbv</p>', '<p>jgjkjhkhj</p>', '21', '2022-06-30 13:15:03', '', ''),
(5, 10, 'asdasdaasddsadasdasd', 'sadsfdfd asdsdf', '', '', '<p>da dasd asdsad sads d</p>', '<p>assd fsf dasdsf dsf</p>', '', '', '21', '2022-06-30 13:56:18', '', ''),
(6, 10, 'testeroid az', 'testeroid en', 'testeroid tr', 'testeroid ru', '<p>testeroid descr az</p>', '<p>testeroid descr en</p>', '<p>testeroid descr tr</p>', '<p>testeroid descr ru</p>', '21', '2022-06-30 15:25:59', '', ''),
(7, 13, 'Module 1: Praktiki d??rsl??r', '', '', '', '<ul><li>M??nb?? ??dar??etm?? Sisteml??ri - Git</li><li>??ax??l??nm?? v?? burax??l???? modell??ri</li><li>Jenkins</li><li>Github</li></ul>', '', '', '', '21', '2022-07-01 11:16:56', '', ''),
(8, 13, 'Module 2: Davaml?? Test', '', '', '', '<ul><li>SonarQube, Code coverage, Instrumentalizasiya</li><li>Kodu n??z??rd??n ke??irm?? prosesi, ??stifad????i Hekay??sinin ??zolyasiya mexanikas??</li><li>TDD - Test Driven development</li><li>Test planlamas??, Performans, Reqressiya v?? T??hl??k??sizlik testl??ri, Z??iflikl??rin yoxlanmas??, e2e Avtomatla??d??rma & UI testi, Manual test</li></ul>', '', '', '', '21', '2022-07-01 11:17:51', '', ''),
(9, 13, 'Module 3: Proqram Arxitekturas??', '', '', '', '<ul><li>Proqram??n xarici keyfiyy??t faktorlar??: d??zg??nl??k, m??hk??mlik, geni??l??nm?? qabiliyy??ti, t??krar istifad?? qabiliyy??ti v?? s.</li><li>Arxitektura n??vl??ri: Ba????ms??z, N-pill??li, SOA, Mikroservisl??r, Serversiz, Veb-n??vb??-??????i, Hadis??y?? ??saslanan memarl??q, B??y??k M??lumat/B??y??k Hesablama</li><li>T??l??bl??rin toplanmas??, Sat???? ??nc??si, Qiym??tl??ndirm??l??r, RFI/RFP</li></ul>', '', '', '', '21', '2022-07-01 11:18:39', '', ''),
(10, 13, 'Module 4: Proqram dizayn??', '', '', '', '<ul><li>??mumi layih?? t????kilati qurulu??u, komponent modeli, ??ox komponentli idar??etm?? sistemi, minimum canl?? ??ablonlar</li><li>M??lumat strukturlar??, ??sas proqramla??d??rma paradiqmalar??: prosedur, obyekt y??n??ml??, funksional, m??ntiq. T??rtib??il??r, T??rc??m????il??r, Prosesl??r v?? M??vzular</li><li>\"T??miz Arxitektura\", Dizayn n??mun??l??ri, GRASP, UML, C4 modeli, MVC (MVVM), BFF - Frontend ??????n arxa plan</li><li>Inheritance vs Kompozisiya vs Birl????m??, Kompozisiya vs Ay??rma, S??n??dl????m??, X??tan??n ??l?? al??nmas??</li><li>Polyglot proqramla??d??rma, Polyglot davaml??l??????</li><li>CAP Teoremi (RDBMS, NoSQL, Graph DB) DB miqrasiyas??, par??alanma</li><li>Do??rulama v?? Avtorizasiya, RBAC vs ABAC, OAuth</li><li>Mesaj vasit????iliyi</li><li>Mobile-first, mobile-only</li><li>Multi-tenancy, Audit, Branding, GDPR Compliance</li><li>Waterfall, RUP, Agile, Technical debt, Legacy sisteml??ri, Refactoring</li><li>??ox i??l??m??, M????t??ri-Server, P2P, Payla??d??r??lm???? hesablama, Kilidsiz alqoritml??r, Ke??l??m??, G??nd??lik, Metaproqramla??d??rma/Generika, Prosesl??raras?? ??nsiyy??t: mutex, semafor, boru, payla????lan yadda??</li></ul>', '', '', '', '21', '2022-07-01 11:20:59', '', ''),
(13, 14, 'Module 1: Java Basics', '', '', '', '<p>Bura Java proqramla??d??rma dili il?? i??l??m??yin baza prinsipl??rinin ??yr??nilm??si, obyekt y??n??ml?? proqramla??d??rma, sinifl??rl??, interfeysl??rl??, Set, Map, Queue, Stack kolleksiyalar?? il?? i?? v??rdi??l??rinin m??nims??nilm??si daxildir. Bu modulda h??m??inin lyambda ifad??l??ri, s??hvl??rin aradan qald??r??lmas??, fayllarla i?? d?? ??yr??dil??c??k.</p>', '', '', '', '21', '2022-07-01 23:10:08', '', ''),
(14, 14, 'Module 2: Alqoritml??r', '', '', '', '<p>Alqoritml??r ??? t??l??b??l??r?? ali texniki t??hsil s??viyy??sind?? bilik v?? bacar??qlar ver??n m??h??m moduldur. Bu modulun ??sas??n?? komp??ter elml??ri t????kil edir. Onlars??z is?? u??urlu proqramla??d??rma h??yata ke??irm??k m??mk??n deyil. Bu modul ??zr?? veril??n bilikl??r g??l??c??kd?? ist??nil??n texnologiyan?? m??nims??y?? bilm??kd??n ??tr?? g??cl?? texniki bazan??n yarad??lmas??na xidm??t edir. Modul ????r??iv??sind?? t??l??b??l??r m??lumatlar??n ??sas struktur v?? alqoritml??rini, adi v?? tipik massivl??ri, ??laq??li siyah??lar??, y??????mlar??, n??vb??l??ri, assosiativ massivl??ri m??nims??y??c??kl??r. Onlar h??m??inin hashing, qrafalar, DFS v?? BFS, dinamik proqramla??d??rma, proqramla??d??rma a??aclar??, ke?? alqoritml??ri v?? s. m??s??l??l??rl?? tan???? olacaqlar.</p><p>??</p><p>Bu modulu ba??a vurduqdan sonra t??l??b?? m??r??kk??b alqoritml??ri d??qiq t??s??vv??r ed??, proqramlar??n s??r??tli i??ini analiz ed?? bil??c??k.</p>', '', '', '', '21', '2022-07-01 23:10:26', '', ''),
(15, 14, 'Module 3: Java Web', '', '', '', '<p>Bu modulun m??qs??di t??l??b??l??r?? web-t??tbiql??rin server hiss??l??rini haz??rlayaraq i???? salma????, veril??nl??r bazas?? yaratma????, onlar??n c??dv??ll??ri aras??ndak?? qar????l??ql?? t??sirl??ri t??nziml??m??yi, server?? sor??u g??nd??rm??yi v?? sor??u q??bul etm??yi ??yr??tm??kdir.</p><p>T??l??b??l??r bu istiqam??tl??r ??zr?? a??a????dak?? istiqam??tl??r ??zr?? t??cr??b?? qazanacaqlar:</p><ul><li>Maven layih??l??rinin toplusu</li><li>Servlet API, Jettyserver</li><li>SQL sor??ular??</li><li>veril??nl??r bazalar?? ??????n sxeml??rin yarad??lmas??</li><li>????x???? s??viyy??l??rini payla??d??rmaq</li><li>Servlet filters</li><li>cookies</li><li>identifikasiya</li></ul>', '', '', '', '21', '2022-07-01 23:10:51', '', ''),
(16, 4, 'test_az', 'test_en', 'test_tr', 'test_ru', '<p>tester descr az</p>', '<p>tester descr en</p>', '<p>tester descr tr</p>', '<p>tester descr ru</p>', '21', '2022-07-04 20:16:13', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `item10_events_programm`
--

CREATE TABLE `item10_events_programm` (
  `n_prog_id` int(11) NOT NULL,
  `n_prog_prog_news_id` int(11) NOT NULL,
  `n_prog_title_az` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `n_prog_title_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `n_prog_title_tr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `n_prog_title_ru` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `n_prog_descr_az` longtext COLLATE utf8_unicode_ci NOT NULL,
  `n_prog_descr_en` longtext COLLATE utf8_unicode_ci NOT NULL,
  `n_prog_descr_tr` longtext COLLATE utf8_unicode_ci NOT NULL,
  `n_prog_descr_ru` longtext COLLATE utf8_unicode_ci NOT NULL,
  `n_prog_creater_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `n_prog_creat_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `n_prog_updater_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `n_prog_update_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `item10_events_programm`
--

INSERT INTO `item10_events_programm` (`n_prog_id`, `n_prog_prog_news_id`, `n_prog_title_az`, `n_prog_title_en`, `n_prog_title_tr`, `n_prog_title_ru`, `n_prog_descr_az`, `n_prog_descr_en`, `n_prog_descr_tr`, `n_prog_descr_ru`, `n_prog_creater_id`, `n_prog_creat_date`, `n_prog_updater_id`, `n_prog_update_date`) VALUES
(3, 2, 'n_prog_title_az xzxxsxas', 'n_prog_title_ennnn', 'n_prog_title_trrrr', 'n_prog_title_ruuu', 'n_prog_descr_az sd sds ds d', 'n_prog_descr_ennnnn', 'n_prog_descr_tr dd sda sd', 'n_prog_descr_ru sdsd asd', '', '', '', ''),
(4, 2, '333n_prog_title_az xzxxsxas', 'n_prog_title_ennnn', 'n_prog_title_trrrr', 'n_prog_title_ruuu', 'n_prog_descr_az sd sds ds d', 'n_prog_descr_ennnnn', 'n_prog_descr_tr dd sda sd', 'n_prog_descr_ru sdsd asd', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `title_az` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `title_ru` varchar(255) DEFAULT NULL,
  `title_tr` varchar(255) DEFAULT NULL,
  `description_az` longtext DEFAULT NULL,
  `description_en` longtext DEFAULT NULL,
  `description_ru` longtext DEFAULT NULL,
  `description_tr` longtext DEFAULT NULL,
  `rank` varchar(255) DEFAULT NULL,
  `date` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `img_ext` varchar(255) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `creater_id` varchar(255) DEFAULT NULL,
  `creat_date` varchar(255) DEFAULT NULL,
  `updater_id` varchar(255) DEFAULT NULL,
  `update_date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `url`, `title_az`, `title_en`, `title_ru`, `title_tr`, `description_az`, `description_en`, `description_ru`, `description_tr`, `rank`, `date`, `category`, `img`, `img_ext`, `status`, `creater_id`, `creat_date`, `updater_id`, `update_date`) VALUES
(29, NULL, '11q11', 'w1', 'e1', 'r1', '<p>11Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos esse necessitatibus provident velit veniam. Alias cumque deserunt dignissimos iure libero necessitatibus, non sed totam? In laboriosam, quos. Qui, sint, vel. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos esse necessitatibus provident velit veniam. Alias cumque deserunt dignissimos iure libero necessitatibus, non sed totam? In laboriosam, quos. Qui, sint, vel. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos esse necessitatibus provident velit veniam. Alias cumque deserunt dignissimos iure libero necessitatibus, non sed totam? In laboriosam, quos. Qui, sint, vel.</p>', '<p>w2</p>', '<p>e2</p>', '<p>r2</p>', NULL, '2022-06-16', '1', '', '.png', 2, '21', '2022-06-16 11:33:05', '21', '2022-06-16 12:42:57'),
(30, NULL, 's1', 'd1', 'f1', 'g1', '<p>s2</p>', '<p>d2</p>', '<p>f2</p>', '<p>g2</p>', NULL, '2022-06-16', '2', 'download5.png', '.png', 2, '21', '2022-06-16 11:35:11', NULL, NULL),
(31, NULL, 'sdadd', 'sdf', 'dgfg', 'dfg', '<p>asdasd</p>', '<p>sdf</p>', '<p>dfg</p>', '<p>dfg</p>', NULL, '2022-06-16', '1', '', '.png', 1, '21', '2022-06-16 11:56:40', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `items2`
--

CREATE TABLE `items2` (
  `c_id` int(11) NOT NULL,
  `title_az` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_ru` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title_tr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description_az` longtext COLLATE utf8_unicode_ci NOT NULL,
  `description_en` longtext COLLATE utf8_unicode_ci NOT NULL,
  `description_ru` longtext COLLATE utf8_unicode_ci NOT NULL,
  `description_tr` longtext COLLATE utf8_unicode_ci NOT NULL,
  `rank` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img_ext` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `creater_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `creat_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updater_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `update_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `teacher` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `duration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `group_size` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `schedule` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `items2`
--

INSERT INTO `items2` (`c_id`, `title_az`, `title_en`, `title_ru`, `title_tr`, `description_az`, `description_en`, `description_ru`, `description_tr`, `rank`, `date`, `category`, `img`, `img_ext`, `status`, `creater_id`, `creat_date`, `updater_id`, `update_date`, `teacher`, `duration`, `group_size`, `schedule`) VALUES
(20, 'U??/UX dizayner', '', '', '', '<p>G??n??m??zd?? bir ??ox sah??l??r?? t??l??bat artmaqda davam edir. Onlardan biri d?? UI/UX dizaynd??r. ??ATC olaraq ??T bazar??nda olan bu t??l??bat?? ??d??m??k ??????n m??t??x??ssisl??r yeti??diririk.??</p><p>UI/UX n??dir?</p><p>UI (User ??nterface) istifad????i ist??kl??rini n??z??r?? alaraq onlar??n maximum d??r??c??d?? i??l??rini rahatladacaq?? v?? g??z??l dizayna malik web s??hif?? v?? t??tbiql??rin yarad??lmas??, eyni zamanda m??vcud olanlar??n daha da t??kminl????dirilm??sind??n ibar??tdir.??</p><p>UX ( User Experince) M??hsulun yarad??lmas??n??n ilkin m??rh??l??si olub, istifad????il??rin ??vv??lki t??cr??b??l??rin?? v?? t??l??batlar??na ??saslan??r.??</p><p>T??lim m??rk??zind?? t??l??b??l??rimiz?? h??m n??z??ri, h??m d?? praktiki bilikl??r t??dris olunur. D??rs m??dd??ti 4 ay davam edir. T??l??b??l??rimiz tez bir zamanda material?? m??nims??yir, ??m??k bazar??nda profesional ????kild?? ??z yerl??rin tap??rlar.??</p><p><br>??</p>', '', '', '', '', '2022-05-03', '6', '', '', 1, '21', '2022-08-30 08:16:20', '21', '2022-08-30 08:19:05', '11', '4 ay/ 3 saat', '20', ''),
(21, 'U??/UX dizayner', '', '', '', '<p>G??n??m??zd?? bir ??ox sah??l??r?? t??l??bat artmaqda davam edir. Onlardan biri d?? UI/UX dizaynd??r. ??ATC olaraq ??T bazar??nda olan bu t??l??bat?? ??d??m??k ??????n m??t??x??ssisl??r yeti??diririk.??</p><p>UI/UX n??dir?</p><p>UI (User ??nterface) istifad????i ist??kl??rini n??z??r?? alaraq onlar??n maximum d??r??c??d?? i??l??rini rahatladacaq?? v?? g??z??l dizayna malik web s??hif?? v?? t??tbiql??rin yarad??lmas??, eyni zamanda m??vcud olanlar??n daha da t??kminl????dirilm??sind??n ibar??tdir.??</p><p>UX ( User Experince) M??hsulun yarad??lmas??n??n ilkin m??rh??l??si olub, istifad????il??rin ??vv??lki t??cr??b??l??rin?? v?? t??l??batlar??na ??saslan??r.??</p><p>T??lim m??rk??zind?? t??l??b??l??rimiz?? h??m n??z??ri, h??m d?? praktiki bilikl??r t??dris olunur. D??rs m??dd??ti 4 ay davam edir. T??l??b??l??rimiz tez bir zamanda material?? m??nims??yir, ??m??k bazar??nda profesional ????kild?? ??z yerl??rin tap??rlar.??</p><p><br>??</p>', '', '', '', '', '2022-07-29', '6', '', '.png', 1, '21', '2022-08-30 08:20:49', '', '', '10', '4 ay/ 3 saat', '20', ''),
(22, 'Frontend Developer', '', '', '', '<p>Frontend proqramla??d??rma sferas??na yeni ba??layan ????xsl??r ??????n n??z??rd?? tutulmu?? proqramd??r. Biz bu proqram ????r??iv??sind?? ??n populyar proqramla??d??rma dill??rind??n JavaScripti, React.js-i ??yr??n??c??k, Git-l?? i??l??y??c??yik. Kursda ??srail proqram????lar??n??n real h??yatdan se??dikl??ri v?? sektordak?? son standartlara uy??un n??mun??l??r ill??strasiya olunacaq. H??r zaman yan??n??zda olan mentorlar is?? b??t??n vacib bilikl??ri ??ld?? etm??yiniz?? d??st??k ver??c??kl??r. T??l??b??l??r m??r??kk??b tap????r??qlar?? f??rdi v?? ya qruplar ????klind?? h??ll ed??c??k, ??ld?? etdikl??ri bilikl??ri ??z layih??l??rind?? t??tbiq etm??k imkan?? qazanacaq.</p><p><br>??</p>', '', '', '', '', '2022-09-15', '2', '101_ux_vs_ui_illustration_blog1.png', '.png', 1, '21', '2022-09-05 10:48:42', '21', '2022-09-05 10:49:02', '6', '4 ay/ 3 saat', '20', ''),
(23, 'Backend', '', '', '', '<p>Backend??developer??sistemin arxitekturas??n?? yaradan, datalar bazas??n??n idar?? edilm??sini planla??d??ran, server parametrl??rin?? cavabdeh olan, sistemin maksimum s??viyy??d?? s??m??r??li v?? s??r??tli i??l??m??sini t??min ed??n ????xsdir.????</p><p>Sayt??n vizual ????kild?? g??z??l olmas??, h??l?? sayt??n m??k??mm??l olmas?? dem??k deyil. Sayt??n m??k??mm??l olmas?? ??????n onun funksiyanall??????n??n da y??ks??k s??viyy??d?? olmas?? vacibdir. Bunun ??????ns?? profisional Back-end developerl??r???? ehtiyac var. Bu ehtiyac?? ??d??m??k ??????ns?? kursumuz t??r??find??n back-end d??rsl??ri ke??rilir. D??rsl??rimiz 4 ay?? ??hat?? edir v?? NoteJS, Java, C#?? proqram?? t??dris olunur.</p><p><br>??</p>', '', '', '', '', '2022-09-15', '5', 'backend.png', '.png', 1, '21', '2022-09-05 10:54:54', '21', '2022-09-05 10:56:03', '13', '4 ay/ 3 saat', '20', '');

-- --------------------------------------------------------

--
-- Table structure for table `items3`
--

CREATE TABLE `items3` (
  `t_id` int(11) NOT NULL,
  `t_title_az` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `t_title_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `t_title_ru` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `t_title_tr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `t_description_az` longtext COLLATE utf8_unicode_ci NOT NULL,
  `t_description_en` longtext COLLATE utf8_unicode_ci NOT NULL,
  `t_description_ru` longtext COLLATE utf8_unicode_ci NOT NULL,
  `t_description_tr` longtext COLLATE utf8_unicode_ci NOT NULL,
  `t_position_az` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `t_position_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `t_position_ru` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `t_position_tr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `t_fb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `t_instagram` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `t_twitter` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `t_linkedin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `t_rank` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `t_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `t_category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `t_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `t_img_ext` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `t_status` tinyint(4) NOT NULL,
  `t_creater_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `t_creat_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `t_updater_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `t_update_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `items3`
--

INSERT INTO `items3` (`t_id`, `t_title_az`, `t_title_en`, `t_title_ru`, `t_title_tr`, `t_description_az`, `t_description_en`, `t_description_ru`, `t_description_tr`, `t_position_az`, `t_position_en`, `t_position_ru`, `t_position_tr`, `t_fb`, `t_instagram`, `t_twitter`, `t_linkedin`, `t_rank`, `t_date`, `t_category`, `t_img`, `t_img_ext`, `t_status`, `t_creater_id`, `t_creat_date`, `t_updater_id`, `t_update_date`) VALUES
(6, 'Talibov Mammadrza', 'test en1', 'test ru1', 'test tr1', '<p>2016-2017 ci ild?? Richmen geyim ??irk??tinin ??T departamentind?? ba?? proqram????, 2017-ci ild??n etibar??n indiki vaxta q??d??r is?? ADNSU (Az??rbaycan D??vl??t Neft S??naye Universiteti)-da ??T departamentind?? ba?? proqram???? olaraq f??aliyy??t g??st??rir. ??lav?? olaraq Az??rbaycan D??vl??t Neft S??naye Universitetind?? Web Development v?? Microsoft office specialist kurslar?? ??zr?? d??rsl??r v?? Beyn??lxalq sertifikat imtahan??na haz??rl??q d??rsl??ri t??dris edir. ??lk Proqram??n?? 14 ya????nda yaz??b.??</p><p><a href=\"https://www.youtube.com/channel/UCPZL6wmz8kQ_YoZUWjES3eA/featured\"><strong>SetHub</strong></a> youtube kanal??n??n t??sis??isidir.</p><p><br>Bir ne???? ??z??l v?? D??vl??t sektorlar??n??n saytlar?? ??z??rind?? ??al??????b.</p><ul><li>Az??rbaycan D??vl??t Akademik Filarmoniyas??</li><li>Az??rbaycan Respublikas??n??n Prezidenti yan??nda Ali Attestasiya komissiyas????</li><li>Yeni Az??rbaycan Partiyas?? (Y.A.P.)</li><li>Az??rbaycan Respublikas?? Neft v?? S??naye Universitetinin bir ne???? sayt?? v?? daxili sistemil??ri</li><li>v?? dig??r bu kimi layil??r.</li></ul><p>??</p><p><strong>Sertifikatlar??:</strong></p><ul><li>2014 - <strong>Microsoft Office Excel</strong> (F??rql??nm?? sertifikat??)</li><li>2015 - <strong>Full-stack Web Development</strong> (F??rql??nm?? sertifikat??)</li><li>2016 - <strong>Full-stack Web Development</strong> (F??rql??nm?? sertifikat??)</li><li>2017 - <a href=\"http://talibovrza.hol.es/excel.pdf\"><strong>Exam 77-727 - Microsoft Office Excel 2016</strong></a> (Graduate) <strong>Beyn??lxalq</strong></li><li>2018 - <a href=\"http://talibovrza.hol.es/associate.pdf\"><strong>Exam 98-375 - HTML5 Application Development Fundamentals</strong></a> (Graduate) <strong>Beyn??lxalq</strong></li><li>2020 - <a href=\"http://talibovrza.hol.es/database.pdf\"><strong>Exam 98-364 - MTA: Database Administration Fundamentals</strong></a> (Graduate) <strong>Beyn??lxalq</strong></li><li>2020 - <a href=\"http://talibovrza.hol.es/javaScript.pdf\"><strong>Exam 98-382 - MTA: Introduction to Programming Using JavaScript</strong></a> (Graduate) <strong>Beyn??lxalq</strong></li><li>2020 - <a href=\"http://talibovrza.hol.es/html_css.pdf\"><strong>Exam 98-383 - MTA: Introduction to Programming Using HTML and CSS</strong></a> (Graduate) <strong>Beyn??lxalq</strong></li></ul>', '<p>En Only a quid me old mucker squiffy tomfoolery grub cheers ruddy cor blimey guvnor in my flat, up the duff Eaton car boot up the kyver pardon you A bit of how\'s your father David skive off sloshed, don\'t get shirty with me chip shop vagabond crikey bugger Queen\'s English chap. Matie boy nancy boy bite your arm off up the kyver old no biggie fantastic boot, David have it show off show off pick your nose and blow off lost the plot porkies bits and bobs only a quid bugger all mate, absolutely bladdered bamboozled it\'s your round don\'t get shirty with me down the pub well.</p>', '<p>Only a quid me old mucker squiffy tomfoolery grub cheers ruddy cor blimey guvnor in my flat, up the duff Eaton car boot up the kyver pardon you A bit of how\'s your father David skive off sloshed, don\'t get shirty with me chip shop vagabond crikey bugger Queen\'s English chap. Matie boy nancy boy bite your arm off up the kyver old no biggie fantastic boot, David have it show off show off pick your nose and blow off lost the plot porkies bits and bobs only a quid bugger all mate, absolutely bladdered bamboozled it\'s your round don\'t get shirty with me down the pub well.</p>', '<p>Tr Only a quid me old mucker squiffy tomfoolery grub cheers ruddy cor blimey guvnor in my flat, up the duff Eaton car boot up the kyver pardon you A bit of how\'s your father David skive off sloshed, don\'t get shirty with me chip shop vagabond crikey bugger Queen\'s English chap. Matie boy nancy boy bite your arm off up the kyver old no biggie fantastic boot, David have it show off show off pick your nose and blow off lost the plot porkies bits and bobs only a quid bugger all mate, absolutely bladdered bamboozled it\'s your round don\'t get shirty with me down the pub well.</p>', 'M????llim', 'CO Founder en1', 'CO Founder ru1', 'CO Founder tr', 'https://www.facebook.com/mamed.talibov', 'https://www.instagram.com/rza.talibov/', 'https://www.instagram.com/rza.talibov/', 'https://www.linkedin.com/in/rza-talibov-658a6a177/', '', '2022-06-30', '1', '??ATC-teachers-RzaM????llim.jpg', '.jpg', 1, '21', '2022-06-29 09:01:35', '21', '2022-09-05 10:38:57'),
(8, 'K??rim K??rimov', '', '', '', '<p>K??rim K??rimov 2013c?? ild?? m??kt??bi q??z??l medal attestat?? il?? bitirib, y??ks??k balla Bak?? Ali Neft M??kt??binin Prosesl??rin Avtomatla??d??r??lmas?? ??zr?? bakalavr t??hsilin?? ba??lay??b. T??l??b?? oldu??u m??dd??td?? proqramla??d??rma il?? yax??ndan tan???? olub, 10-a yax??n yerli startuplar??n ??rs??y?? g??lm??sind?? i??tirak edib. 2018-2020 ill??r aras??nda Macar??standa Budape??t Texnologiya v?? ??qtisadiyyat universitetind?? Komputer m??h??ndisliyi ??zr?? magistr t??hsili al??b. H??min d??vr ??rzind?? Nokia-n??n Budape??t ofisind?? i??l??yib. 2020-ci ild?? magistr t??hsili bitdikd??n sonra ??lk??y?? qay??tm???? v?? PA??A Bank ??irk??tind?? Senior Software Developer kimi i???? ba??lam????d??r. 2022 aprel ay??nda Funsional sah?? lideri v??zif??sin?? t??ltif olunmu??, 10-dan ??ox mobil sah??sind?? ??al????an m??h??ndisl??rl?? f??rqli layih??l??rd?? i??tirak edir.</p>', '', '', '', 'M????llim', '', '', '', 'https://www.facebook.com/kerimovscreations', '', '', 'https://www.linkedin.com/in/kerimovscreations', '', '1996-03-23', '6', '??ATC-teachers-Karim.jpg', '.jpg', 1, '21', '2022-08-19 07:02:11', '21', '2022-08-29 05:52:09'),
(9, '??amxal Quliyev', '', '', '', '<p>??amxal Quliyev ??stanbul Fatih Universitetinin Komp??ter M??h??ndisliyi fakult??sini bitirib. Proqramla??d??rmaya universitet ill??rind??n ba??lay??b v?? 9 ild??n ??oxdur ki, iOS proqramla??d??rma il?? m??????uldur. iOS team lead v?? m????llim kimi f??aliyy??tin?? davam edir. Eyni zamanda ??z t??cr??b??l??rini youtube kanal??nda da payla????r.</p>', '', '', '', 'M????llim', '', '', '', '', 'https://instagram.com/shamkhalguliyev?igshid=YmMyMTA2M2Y=', 'https://instagram.com/shamkhalguliyev?igshid=YmMyMTA2M2Y=', 'https://www.linkedin.com/in/shamkhal-guliyev', '', '1991-01-01', '7', '??ATC-teachers-Shamxal.jpg', '.jpg', 1, '21', '2022-08-19 07:10:07', '21', '2022-08-29 05:52:20'),
(10, 'Nigar Kaz??mova', '', '', '', '<p>M??n dizayn ??zr?? 3 illik i?? t??cr??b??si v?? M????t??ri Xidm??tl??ri sah??sind?? 5 illik t??cr??b??y?? malik dizayner??m. Az??rbaycanda ilk Agile m??hitind?? i??l??m??k m??n?? n??sib oldu. M??n h??mi???? yeni bilik v?? bacar??qlara acam v?? bunu IG Design bloqum, i??tirak etdiyim seminarlar v?? g??r????l??r vasit??sil?? ba??qalar?? il?? b??l????m??y?? ??al??????ram. ??nsanlar??n sevdiyi m??hsullar yaratmaq m??ni ??ox h??y??canland??r??r. G??lin d??nyam??z?? d??yi??dir??k v?? insanlar?? xo??b??xt ed??k!</p>', '', '', '', 'M????llim', '', '', '', 'https://www.facebook.com/profile.php?id=100006275716118', 'https://www.instagram.com/nikadesgn/', 'https://www.instagram.com/nikadesgn/', 'https://www.linkedin.com/in/nigar-kazimova-ux-ui-designer-026393118/', '', '1991-07-20', '4', '', '.jpg', 1, '21', '2022-08-19 07:23:03', '21', '2022-08-29 05:51:57'),
(11, 'Elxan ??zimli', '', '', '', '<p>2015-ci ild??n reklam, marketinq, qrafik dizaynla m??????ul olub, daha sonra 2018-ci ild??n UX/UI olaraq davam edib. Hal haz??rda bir ??ox yerli v?? xarici ??irk??tl?? ??al??????r. Mexatronika, Psixologiya, Alternativ enerji v?? s. onun maraq dair??sidir. 2021-ci ild??n IATC ail??sinin ??zv??d??r.</p>', '', '', '', 'M????llim', '', '', '', 'https://www.facebook.com/elkhan20', 'https://instagram.com/elkhanazimli?igshid=YmMyMTA2M2Y=', 'https://instagram.com/elkhanazimli?igshid=YmMyMTA2M2Y=', 'https://www.linkedin.com/in/elkhan-azimli-2562a3132', '', '2022-08-01', '4', 'elkhan.jpg', '.jpg', 1, '21', '2022-08-22 06:34:32', '21', '2022-08-26 06:49:02'),
(12, 'S??nan Abdullayev', '', '', '', '<p>Java Software Engineer. Az??rbaycan D??vl??t Neft v?? S??naye Universitetinin ??nformasiya Texnologiyalar?? ixtisas??n?? bitirib. Programla??d??rma f??aliyy??tin?? 2020-ci ild??n ba??lay??b. Hal haz??rda C++, C#, Java v?? JavaScript dill??rini bilir. Bank????l??q, S??nayenin avtomatla??d??r??lmas?? sah??si onun maraq dair??sind??dir.</p>', '', '', '', 'M????llim', '', '', '', 'https://www.facebook.com/sanan.abdullayev.1610', '', '', 'https://www.linkedin.com/in/sanan-abdullayev-024048170', '', '2001-05-21', '3', '??ATC-teachers-Sanan.jpg', '.jpg', 1, '21', '2022-08-22 06:36:55', '21', '2022-08-29 05:51:46'),
(13, 'Ruslan A??aki??iyev', '', '', '', '<p>Az??rbaycan D??vl??t Neft v?? S??naye universitetini bitirib. Proqramla??d??rma f??aliyy??tin?? 2018-ci ild??n b??ri ba??lay??b.??lk real proyektini 2020-ci ild?? yaz??b.??CPC qlobal proqramla??d??rma olimpiadas??nda final m??rh??l??sin?? q??d??r y??ks??lib.Texniki olaraq C++,PHP,Java,Javascript,Typescript,C# kimi proqramla??d??rma dill??rini bilir.Hal-haz??rda bank????l??q sah??si il?? m??????uldur.</p>', '', '', '', 'M????llim', '', '', '', 'https://www.facebook.com/profile.php?id=100084558678207', 'https://instagram.com/r_aghakishiyev?igshid=YmMyMTA2M2Y=', 'https://instagram.com/r_aghakishiyev?igshid=YmMyMTA2M2Y=', '', '', '2022-08-01', '3', '', '', 1, '21', '2022-08-22 06:40:56', '21', '2022-08-26 06:48:44'),
(14, 'Jeyhun X??lilov', '', '', '', '<p>Test etm?? ??zr?? b??y??k m??h??ndis v?? QA ??zr?? t??lim??i<br>Ceyhun IT sah??sind?? keyfiyy??t?? n??zar??t ??zr?? 6 illik t??cr??b??y?? malikdir. O, proqram t??minat??n??n test etm?? sah??si ??zr?? bir ??ox u??urlu proyektl??r?? imza at??b.<br>???Software Testing??? d??nyas??na ilk add??mlar??n?? Bakcell ??irk??tind?? Keyfiyy??t?? N??zar??t departamentind?? Test etm?? ??zr?? m??h??ndis kimi ba??lay??b.<br>2019-cu ild??n Neqsol Holding-?? daxil olan Azerconnect ??irk??tind?? Test etm?? ??zr?? b??y??k m??h??ndis kimi ??al??????r.<br>Hal Haz??rda is?? ??srail Az??rbaycan T??lim M??rk??zind?? parallel olaraq QA t??lim??i kimi f??aliyy??t g??st??rir.</p>', '', '', '', 'M????llim', '', '', '', 'https://www.facebook.com/jeyhunkhalilov26', 'https://www.instagram.com/ceka_khalilov/', 'https://www.instagram.com/ceka_khalilov/', 'https://www.linkedin.com/in/jeyhun-khalilov-756913109/', '', '2022-08-01', '5', '??ATC-teachers-Jeyhun.jpg', '.jpg', 1, '21', '2022-08-22 06:44:24', '21', '2022-08-29 05:51:34'),
(15, 'El??ad A??azad??', '', '', '', '<p>Amerikan??n Kaliforniya ??tat??nda f??aliyy??t g??st??r??n m????hur \"Berkeley Universitetinin Proqramla??d??rma d??????rg??sin??\" qat??laraq onlar??n ??yr??tm?? metodologiyas??n?? ara??d??r??b, Az??rbaycana qay??td??qdan sonra burada hal-haz??rda m????hur olan kodla??d??rma d??????rg??l??rind??n birind?? t??sis edib. Bu m????ssis??d?? yeti??dirdiyi t??l??b??l??r hal-haz??rda m??xt??lif layih??l??rd??, startaplarda v?? ??irk??tl??rd?? proqram???? kimi ??z karyeralar??na davam edirl??r. Bununla yana???? Az??rbaycanda m????hur neft ??irk??ti olan \"British Petroliumun\" m??t??x??ssisl??rin?? proqramla??d??rma v?? Data Analitika t??liml??ri ke??ib. H??m??inin \"Britaniya Konsullu??unun\" t????kil etdiyi fiziki m??hdudiyy??tli ????xsl??rin ??z??n?? inki??af m??qs??dli layih??sind?? i??tirak ed??r??k fiziki m??hdudiyy??tli ????xsl??r?? web proqramla??d??rma il?? ba??l?? t??liml??r ke??ib. 2004-2006-c?? ill??rd?? komanda il?? birlikd?? \"iCanDo LTD\" ??irk??tini t??hsis edib v?? Nurg??n Motors, Toyota, Suzuki v?? ba??qa ??irk??tl??rl?? u??urlu layih??l??r h??yata ke??iribl??r. AB??-da v?? x??sus??n d?? Silikon Vadid?? f??aliyy??t g??st??r??n ??irk??tl??rl?? ??m??kda??l??q etmi??dir v?? bir ??ox u??urlu layih??l??r?? imza at??b. H??m??inin Avrasiya ??zr?? ke??iril??n Eurasian Startup Awards m??sabiq??sind?? 2019 v?? 2020-ci ill??rd?? \"S??ni Z??ka\" v?? \"Data Science\" kateqoriyalar?? ??zr?? m??nsifl??r hey??tinin ??zv?? olmu??dur.</p>', '', '', '', 'M????llim', '', '', '', 'https://www.facebook.com/mreagayev', 'https://instagram.com/elshad.aghazade?igshid=YmMyMTA2M2Y=', 'https://instagram.com/elshad.aghazade?igshid=YmMyMTA2M2Y=', 'https://www.linkedin.com/in/elshadaghazadeh/', '', '', '1', '??ATC-teachers-Elshad.jpg', '.jpg', 1, '21', '2022-08-26 07:02:59', '21', '2022-08-29 05:51:20'),
(16, 'Anar ??bayev', '', '', '', '<p>2015-ci ild?? Notecad.az- ??n Ciscoda layih?? r??hb??ri olmu??dur.BakuTeld??ki ????xsi layih??si Cisco il?? ??m??kda??l??q etmi??dir. Hal-haz??rda is?? ??srail Az??rbaycan t??lim m??rk??zi il?? paralel olaraq Gulfstream Distribution-da Team Leader Pre-Sales Engineer kimi f??aliy??t g??st??rir.</p>', '', '', '', 'M????llim', '', '', '', 'https://www.facebook.com/ibayevanar', '', '', 'https://www.linkedin.com/in/anar-ibayev-102560113/', '', '', '10', '', '.png', 1, '21', '2022-08-26 07:13:52', '', ''),
(17, 'R??him Xasiyev', '', '', '', '<p>???Qafqaz Universiteti???, Komp??ter M??h??ndisliyi fak??lt??sinin, Proqram????l??q ixtisas??n?? yiy??l??nib v?? sonralar ?????stanbul Bilgi??? MBA oxumu??dur. Proqram????, veril??nl??r bazas?? ??zr?? inzibat????, sistem inzibat????s??, informasiya t??hl??k??sizliyi, ????b??k?? m??h??ndisliyi, bulud texnologiyalar??, virtualla??d??rma, DevOPS v?? ??T r??hb??r v??zif??l??rind?? ??al????m????d??r. ???? t??cr??b??si 16 ild??n ??oxdur.</p>', '', '', '', 'M????llim', '', '', '', 'https://www.facebook.com/rahim.khasiyev', 'https://www.instagram.com/rahimkhasiyev/', '', 'https://www.linkedin.com/in/rahim-khasiyev-4370303/', '', '', '9', '', '.png', 1, '21', '2022-08-29 06:40:28', '', ''),
(18, 'Orxan H??seynli', '', '', '', '<p>2013-2018-ci ill??rd?? ADA Universitetind?? ??nformasiya Texnologiyalar?? ??zr?? t??hsil al??b. JavaScript, ES6+, React, Redux, RxJS, PHP, Java dill??rind??n istifad?? ed??r??k, Front-End v?? Full Stack veb s??hif??l??rinin haz??rlanmas??nda 5 illik i?? t??cr??b??sin?? malikdir.??</p>', '', '', '', 'M????llim', '', '', '', '', 'https://instagram.com/0x0eac7?igshid=YmMyMTA2M2Y=', '', 'https://www.linkedin.com/in/orkhanhuseynli/', '', '', '1', '', '.png', 1, '21', '2022-08-30 07:23:55', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `items4`
--

CREATE TABLE `items4` (
  `ab_id` int(11) NOT NULL,
  `ab_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ab_title_az` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ab_title_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ab_title_ru` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ab_title_tr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ab_description_az` longtext COLLATE utf8_unicode_ci NOT NULL,
  `ab_description_en` longtext COLLATE utf8_unicode_ci NOT NULL,
  `ab_description_ru` longtext COLLATE utf8_unicode_ci NOT NULL,
  `ab_description_tr` longtext COLLATE utf8_unicode_ci NOT NULL,
  `ab_rank` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ab_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ab_category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ab_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ab_img_ext` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ab_status` tinyint(4) NOT NULL,
  `ab_creater_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ab_creat_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ab_updater_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ab_update_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `items4`
--

INSERT INTO `items4` (`ab_id`, `ab_url`, `ab_title_az`, `ab_title_en`, `ab_title_ru`, `ab_title_tr`, `ab_description_az`, `ab_description_en`, `ab_description_ru`, `ab_description_tr`, `ab_rank`, `ab_date`, `ab_category`, `ab_img`, `ab_img_ext`, `ab_status`, `ab_creater_id`, `ab_creat_date`, `ab_updater_id`, `ab_update_date`) VALUES
(4, '', 'asd', 'dfg', 'df adf', 'sfg dfga ', '<p>sgffgd</p>', '<p>fzda</p>', '<p>??sadf sdf</p>', '<p>dsfa sdfasd??</p>', '', '2022-06-17', '1', 'rza_replay_black-02.png', '.png', 1, '21', '2022-06-17 13:35:44', '', ''),
(8, '', 'asdC', 'SDADS', 'DSF', 'GFH HG', '<p>dfdsf</p>', '<p>sAS</p>', '<p>F DSGFDG</p>', '<p>FH GHFG H FGH</p>', '', '', '', '1629359967_sftwrengr1.png', '.png', 0, '21', '2022-07-04 21:56:29', '21', '2022-07-04 22:01:26');

-- --------------------------------------------------------

--
-- Table structure for table `items5`
--

CREATE TABLE `items5` (
  `co_id` int(11) NOT NULL,
  `co_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `co_title_az` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `co_title_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `co_title_ru` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `co_title_tr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `co_description_az` longtext COLLATE utf8_unicode_ci NOT NULL,
  `co_description_en` longtext COLLATE utf8_unicode_ci NOT NULL,
  `co_description_ru` longtext COLLATE utf8_unicode_ci NOT NULL,
  `co_description_tr` longtext COLLATE utf8_unicode_ci NOT NULL,
  `co_rank` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `co_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `co_category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `co_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `co_img_ext` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `co_status` tinyint(4) NOT NULL,
  `co_creater_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `co_creat_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `co_updater_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `co_update_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `items5`
--

INSERT INTO `items5` (`co_id`, `co_url`, `co_title_az`, `co_title_en`, `co_title_ru`, `co_title_tr`, `co_description_az`, `co_description_en`, `co_description_ru`, `co_description_tr`, `co_rank`, `co_date`, `co_category`, `co_img`, `co_img_ext`, `co_status`, `co_creater_id`, `co_creat_date`, `co_updater_id`, `co_update_date`) VALUES
(3, '', 'test gallery', '', '', '', '<p>test gallery test gallery test gallery test gallery test gallery test gallery test gallery test gallery test gallery test gallery test gallery test gallery test gallery</p>', '', '', '', '', '2022-09-21', '1', 'Scree11nshot_1.jpg', '.jpg', 1, '21', '2022-09-21 13:44:51', '21', '2022-09-21 14:33:52');

-- --------------------------------------------------------

--
-- Table structure for table `items6`
--

CREATE TABLE `items6` (
  `sl_id` int(11) NOT NULL,
  `sl_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sl_title_az` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sl_title_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sl_title_ru` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sl_title_tr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sl_description_az` longtext COLLATE utf8_unicode_ci NOT NULL,
  `sl_description_en` longtext COLLATE utf8_unicode_ci NOT NULL,
  `sl_description_ru` longtext COLLATE utf8_unicode_ci NOT NULL,
  `sl_description_tr` longtext COLLATE utf8_unicode_ci NOT NULL,
  `sl_rank` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sl_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sl_category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sl_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sl_img_ext` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sl_img2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sl_img_ext2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sl_status` tinyint(4) NOT NULL,
  `sl_creater_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sl_creat_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sl_updater_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sl_update_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `items6`
--

INSERT INTO `items6` (`sl_id`, `sl_url`, `sl_title_az`, `sl_title_en`, `sl_title_ru`, `sl_title_tr`, `sl_description_az`, `sl_description_en`, `sl_description_ru`, `sl_description_tr`, `sl_rank`, `sl_date`, `sl_category`, `sl_img`, `sl_img_ext`, `sl_img2`, `sl_img_ext2`, `sl_status`, `sl_creater_id`, `sl_creat_date`, `sl_updater_id`, `sl_update_date`) VALUES
(6, '', 'Online yellow-shapeTutorial From Top Instructor.1', '', '', '', '<p>Meet university,and cultural institutions, who\'ll share their experience.1</p>', '', '', '', '', '', '', '1629359967_sftwrengr1.png', '.png', 'hero-11.jpg', '.jpg', 1, '21', '2022-07-05 14:53:11', '21', '2022-07-05 14:57:53');

-- --------------------------------------------------------

--
-- Table structure for table `items7`
--

CREATE TABLE `items7` (
  `tr_id` int(11) NOT NULL,
  `tr_course_id` int(11) NOT NULL,
  `tr_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tr_title_az` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tr_title_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tr_title_ru` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tr_title_tr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tr_description_az` longtext COLLATE utf8_unicode_ci NOT NULL,
  `tr_description_en` longtext COLLATE utf8_unicode_ci NOT NULL,
  `tr_description_ru` longtext COLLATE utf8_unicode_ci NOT NULL,
  `tr_description_tr` longtext COLLATE utf8_unicode_ci NOT NULL,
  `tr_rank` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tr_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tr_category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tr_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tr_img_ext` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tr_status` tinyint(4) NOT NULL,
  `tr_creater_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tr_creat_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tr_updater_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tr_update_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `items8`
--

CREATE TABLE `items8` (
  `ce_id` int(11) NOT NULL,
  `ce_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ce_title_az` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ce_title_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ce_title_ru` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ce_title_tr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ce_description_az` longtext COLLATE utf8_unicode_ci NOT NULL,
  `ce_description_en` longtext COLLATE utf8_unicode_ci NOT NULL,
  `ce_description_ru` longtext COLLATE utf8_unicode_ci NOT NULL,
  `ce_description_tr` longtext COLLATE utf8_unicode_ci NOT NULL,
  `ce_rank` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ce_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ce_category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ce_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ce_img_ext` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ce_status` tinyint(4) NOT NULL,
  `ce_creater_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ce_creat_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ce_updater_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ce_update_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `items8`
--

INSERT INTO `items8` (`ce_id`, `ce_url`, `ce_title_az`, `ce_title_en`, `ce_title_ru`, `ce_title_tr`, `ce_description_az`, `ce_description_en`, `ce_description_ru`, `ce_description_tr`, `ce_rank`, `ce_date`, `ce_category`, `ce_img`, `ce_img_ext`, `ce_status`, `ce_creater_id`, `ce_creat_date`, `ce_updater_id`, `ce_update_date`) VALUES
(1, '', 'ce1', 'ce2', 'ce3', 'ce4', '<p>ce desc 1</p>', '<p>ce desc 2</p>', '<p>ce desc 3</p>', '<p>ce desc 4</p>', '', '2022-06-20', '1', '', '.png', 1, '21', '2022-06-20 10:12:45', '', ''),
(4, '', 'lkj', 'uiy', 'jh', 'rt', '<p>likjhggvcc</p>', '<p>o;likjkhjghfg</p>', '<p>hjlkhjkghfgndbf</p>', '<p>kuhjghfgdf</p>', '', '2022-06-20', '1', '', '.png', 1, '21', '2022-06-20 10:17:03', '21', '2022-06-20 10:20:20');

-- --------------------------------------------------------

--
-- Table structure for table `items9`
--

CREATE TABLE `items9` (
  `re_id` int(11) NOT NULL,
  `re_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `re_title_az` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `re_title_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `re_title_ru` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `re_title_tr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `re_description_az` longtext COLLATE utf8_unicode_ci NOT NULL,
  `re_description_en` longtext COLLATE utf8_unicode_ci NOT NULL,
  `re_description_ru` longtext COLLATE utf8_unicode_ci NOT NULL,
  `re_description_tr` longtext COLLATE utf8_unicode_ci NOT NULL,
  `re_rank` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `re_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `re_category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `re_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `re_img_ext` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `re_status` tinyint(4) NOT NULL,
  `re_creater_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `re_creat_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `re_updater_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `re_update_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `items9`
--

INSERT INTO `items9` (`re_id`, `re_url`, `re_title_az`, `re_title_en`, `re_title_ru`, `re_title_tr`, `re_description_az`, `re_description_en`, `re_description_ru`, `re_description_tr`, `re_rank`, `re_date`, `re_category`, `re_img`, `re_img_ext`, `re_status`, `re_creater_id`, `re_creat_date`, `re_updater_id`, `re_update_date`) VALUES
(2, '', 'w12', 'w22', 'w32', 'w42', '<p>ww12</p>', '<p>ww22</p>', '<p>ww32</p>', '<p>ww42</p>', '', '2022-06-19', '1', 'sethub.png', '.png', 1, '21', '2022-06-20 13:45:13', '21', '2022-06-20 13:49:38');

-- --------------------------------------------------------

--
-- Table structure for table `items10`
--

CREATE TABLE `items10` (
  `ev_id` int(11) NOT NULL,
  `ev_title_az` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ev_title_en` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ev_title_ru` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ev_title_tr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ev_description_az` longtext COLLATE utf8_unicode_ci NOT NULL,
  `ev_description_en` longtext COLLATE utf8_unicode_ci NOT NULL,
  `ev_description_ru` longtext COLLATE utf8_unicode_ci NOT NULL,
  `ev_description_tr` longtext COLLATE utf8_unicode_ci NOT NULL,
  `ev_rank` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ev_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ev_category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ev_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ev_img_ext` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ev_status` tinyint(4) NOT NULL,
  `ev_creater_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ev_creat_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ev_updater_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ev_update_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ev_teacher` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ev_duration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ev_group_size` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ev_schedule` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `items10`
--

INSERT INTO `items10` (`ev_id`, `ev_title_az`, `ev_title_en`, `ev_title_ru`, `ev_title_tr`, `ev_description_az`, `ev_description_en`, `ev_description_ru`, `ev_description_tr`, `ev_rank`, `ev_date`, `ev_category`, `ev_img`, `ev_img_ext`, `ev_status`, `ev_creater_id`, `ev_creat_date`, `ev_updater_id`, `ev_update_date`, `ev_teacher`, `ev_duration`, `ev_group_size`, `ev_schedule`) VALUES
(2, 'events_title_az', 'events_title_en', 'events_title_ru', 'events_title_tr', '<p>events_description_az</p>', '<p>events_description_en</p>', '<p>events_description_ru</p>', '<p>events_description_tr</p>', '', '2022-07-04', '1', '', '.png', 1, '21', '2022-07-04 12:46:06', '', '', '', '9:00 am - 5:00 pm', '23 nefer', 'ADNSU 1ci mertebe 314-cu otaq'),
(4, 'sadasdnnnnnnna', 'events_title_enqqnnnnnnnnnna', 'events_title_ru222nnnnnnnnna', 'events_title_tr3333nnnnnnnnnna', '<p>sadsadsadnnnnnnna</p>', '<p>events_description_en777nnnnnnna</p>', '<p>events_description_ru8888nnnnnnnnna</p>', '<p>events_description_tr34343443nnnnnnnnna</p>', '', '2022-07-06', '2', '1629359967_sftwrengr2.png', '.png', 1, '21', '2022-07-04 12:52:54', '21', '2022-07-04 20:54:10', '', 'sd adsnnnnnnnna', 'ds dasd annnnnnnnnnnna', 'da sdsa nnnnnnnnnnnna');

-- --------------------------------------------------------

--
-- Table structure for table `item_category`
--

CREATE TABLE `item_category` (
  `i_c_id` int(11) NOT NULL,
  `i_c_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `item_category`
--

INSERT INTO `item_category` (`i_c_id`, `i_c_name`) VALUES
(1, 'Full Stack Development'),
(2, 'Frontend Development'),
(5, 'Backend Development'),
(6, 'Web (UI/UX) and Graphic Design'),
(9, 'QA Avtomation( Software testing)'),
(10, 'Mobile Development(Android)'),
(11, 'Mobile Development(IOS)'),
(12, 'Data Science'),
(13, 'DevOps Engineering'),
(14, 'Network fundamentals & Advanted networking'),
(15, 'Big Data');

-- --------------------------------------------------------

--
-- Table structure for table `item_category3`
--

CREATE TABLE `item_category3` (
  `i_c3_id` int(11) NOT NULL,
  `i_c3_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `item_category3`
--

INSERT INTO `item_category3` (`i_c3_id`, `i_c3_name`) VALUES
(1, 'Full Stack Development'),
(2, 'Frontend Development'),
(3, 'Backend Development'),
(4, 'Web (UI/UX) and Graphic Design'),
(5, 'QA Avtomation( Software testing)'),
(6, 'Mobile Development(Android)'),
(7, 'Mobile Development(IOS)'),
(8, 'Data Science'),
(9, 'DevOps Engineering'),
(10, 'Network fundamentals & Advanted networking'),
(11, 'Big Data');

-- --------------------------------------------------------

--
-- Table structure for table `item_category4`
--

CREATE TABLE `item_category4` (
  `i_c4_id` int(11) NOT NULL,
  `i_c4_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `item_category4`
--

INSERT INTO `item_category4` (`i_c4_id`, `i_c4_name`) VALUES
(1, 'test1'),
(2, 'test2');

-- --------------------------------------------------------

--
-- Table structure for table `item_category5`
--

CREATE TABLE `item_category5` (
  `i_c5_id` int(11) NOT NULL,
  `i_c5_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `item_category5`
--

INSERT INTO `item_category5` (`i_c5_id`, `i_c5_name`) VALUES
(1, 'hello'),
(2, 'hello1');

-- --------------------------------------------------------

--
-- Table structure for table `item_category6`
--

CREATE TABLE `item_category6` (
  `i_c6_id` int(11) NOT NULL,
  `i_c6_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `item_category6`
--

INSERT INTO `item_category6` (`i_c6_id`, `i_c6_name`) VALUES
(1, 'slider1'),
(2, 'slider2');

-- --------------------------------------------------------

--
-- Table structure for table `item_category7`
--

CREATE TABLE `item_category7` (
  `i_c7_id` int(11) NOT NULL,
  `i_c7_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `item_category7`
--

INSERT INTO `item_category7` (`i_c7_id`, `i_c7_name`) VALUES
(1, 'tester1'),
(2, 'tester2');

-- --------------------------------------------------------

--
-- Table structure for table `item_category8`
--

CREATE TABLE `item_category8` (
  `i_c8_id` int(11) NOT NULL,
  `i_c8_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `item_category8`
--

INSERT INTO `item_category8` (`i_c8_id`, `i_c8_name`) VALUES
(1, 'certificate 1'),
(2, 'certificate 2');

-- --------------------------------------------------------

--
-- Table structure for table `item_category9`
--

CREATE TABLE `item_category9` (
  `i_c9_id` int(11) NOT NULL,
  `i_c9_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `item_category9`
--

INSERT INTO `item_category9` (`i_c9_id`, `i_c9_name`) VALUES
(1, 'Register1'),
(2, 'Register2');

-- --------------------------------------------------------

--
-- Table structure for table `item_category10`
--

CREATE TABLE `item_category10` (
  `i_c10_id` int(11) NOT NULL,
  `i_c10_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `item_category10`
--

INSERT INTO `item_category10` (`i_c10_id`, `i_c10_name`) VALUES
(1, 'Event1'),
(2, 'Event2');

-- --------------------------------------------------------

--
-- Table structure for table `item_status`
--

CREATE TABLE `item_status` (
  `i_s_id` int(11) NOT NULL,
  `i_s_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `item_status`
--

INSERT INTO `item_status` (`i_s_id`, `i_s_name`) VALUES
(1, 'Active'),
(2, 'Deactive');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `s_id` int(11) NOT NULL,
  `s_value` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`s_id`, `s_value`) VALUES
(1, 'Active'),
(2, 'Deactive'),
(3, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `sub_id` int(11) NOT NULL,
  `sub_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sub_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`sub_id`, `sub_email`, `sub_date`) VALUES
(1, 'rza@mail.ru', '2022-09-15 13:02:50'),
(5, 'tes2@mail.ru', '2022-09-23 08:25:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `admincategory`
--
ALTER TABLE `admincategory`
  ADD PRIMARY KEY (`a_c_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `gallery_list`
--
ALTER TABLE `gallery_list`
  ADD PRIMARY KEY (`gl_id`);

--
-- Indexes for table `item7_course_programm`
--
ALTER TABLE `item7_course_programm`
  ADD PRIMARY KEY (`prog_id`);

--
-- Indexes for table `item10_events_programm`
--
ALTER TABLE `item10_events_programm`
  ADD PRIMARY KEY (`n_prog_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items2`
--
ALTER TABLE `items2`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `items3`
--
ALTER TABLE `items3`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `items4`
--
ALTER TABLE `items4`
  ADD PRIMARY KEY (`ab_id`);

--
-- Indexes for table `items5`
--
ALTER TABLE `items5`
  ADD PRIMARY KEY (`co_id`);

--
-- Indexes for table `items6`
--
ALTER TABLE `items6`
  ADD PRIMARY KEY (`sl_id`);

--
-- Indexes for table `items7`
--
ALTER TABLE `items7`
  ADD PRIMARY KEY (`tr_id`);

--
-- Indexes for table `items8`
--
ALTER TABLE `items8`
  ADD PRIMARY KEY (`ce_id`);

--
-- Indexes for table `items9`
--
ALTER TABLE `items9`
  ADD PRIMARY KEY (`re_id`);

--
-- Indexes for table `items10`
--
ALTER TABLE `items10`
  ADD PRIMARY KEY (`ev_id`);

--
-- Indexes for table `item_category`
--
ALTER TABLE `item_category`
  ADD PRIMARY KEY (`i_c_id`);

--
-- Indexes for table `item_category3`
--
ALTER TABLE `item_category3`
  ADD PRIMARY KEY (`i_c3_id`);

--
-- Indexes for table `item_category4`
--
ALTER TABLE `item_category4`
  ADD PRIMARY KEY (`i_c4_id`);

--
-- Indexes for table `item_category5`
--
ALTER TABLE `item_category5`
  ADD PRIMARY KEY (`i_c5_id`);

--
-- Indexes for table `item_category6`
--
ALTER TABLE `item_category6`
  ADD PRIMARY KEY (`i_c6_id`);

--
-- Indexes for table `item_category7`
--
ALTER TABLE `item_category7`
  ADD PRIMARY KEY (`i_c7_id`);

--
-- Indexes for table `item_category8`
--
ALTER TABLE `item_category8`
  ADD PRIMARY KEY (`i_c8_id`);

--
-- Indexes for table `item_category9`
--
ALTER TABLE `item_category9`
  ADD PRIMARY KEY (`i_c9_id`);

--
-- Indexes for table `item_category10`
--
ALTER TABLE `item_category10`
  ADD PRIMARY KEY (`i_c10_id`);

--
-- Indexes for table `item_status`
--
ALTER TABLE `item_status`
  ADD PRIMARY KEY (`i_s_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`sub_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `admincategory`
--
ALTER TABLE `admincategory`
  MODIFY `a_c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gallery_list`
--
ALTER TABLE `gallery_list`
  MODIFY `gl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `item7_course_programm`
--
ALTER TABLE `item7_course_programm`
  MODIFY `prog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `item10_events_programm`
--
ALTER TABLE `item10_events_programm`
  MODIFY `n_prog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `items2`
--
ALTER TABLE `items2`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `items3`
--
ALTER TABLE `items3`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `items4`
--
ALTER TABLE `items4`
  MODIFY `ab_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `items5`
--
ALTER TABLE `items5`
  MODIFY `co_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `items6`
--
ALTER TABLE `items6`
  MODIFY `sl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `items7`
--
ALTER TABLE `items7`
  MODIFY `tr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `items8`
--
ALTER TABLE `items8`
  MODIFY `ce_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `items9`
--
ALTER TABLE `items9`
  MODIFY `re_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `items10`
--
ALTER TABLE `items10`
  MODIFY `ev_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `item_category`
--
ALTER TABLE `item_category`
  MODIFY `i_c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `item_category3`
--
ALTER TABLE `item_category3`
  MODIFY `i_c3_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `item_category4`
--
ALTER TABLE `item_category4`
  MODIFY `i_c4_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `item_category5`
--
ALTER TABLE `item_category5`
  MODIFY `i_c5_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `item_category6`
--
ALTER TABLE `item_category6`
  MODIFY `i_c6_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `item_category7`
--
ALTER TABLE `item_category7`
  MODIFY `i_c7_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `item_category8`
--
ALTER TABLE `item_category8`
  MODIFY `i_c8_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `item_category9`
--
ALTER TABLE `item_category9`
  MODIFY `i_c9_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `item_category10`
--
ALTER TABLE `item_category10`
  MODIFY `i_c10_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `item_status`
--
ALTER TABLE `item_status`
  MODIFY `i_s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
