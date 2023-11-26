-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2023 at 07:40 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newsportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `home_one` varchar(255) DEFAULT NULL,
  `home_two` varchar(255) DEFAULT NULL,
  `home_three` varchar(255) DEFAULT NULL,
  `home_four` varchar(255) DEFAULT NULL,
  `news_category_one` varchar(255) DEFAULT NULL,
  `news_details_one` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_slug`, `created_at`, `updated_at`) VALUES
(3, 'Aktualitet', 'aktualitet', NULL, NULL),
(4, 'Religjion', 'religjion', NULL, NULL),
(5, 'Histori Islame', 'histori-islame', NULL, NULL),
(6, 'Ekonomi', 'ekonomi', NULL, NULL),
(7, 'Familja', 'familja', NULL, NULL),
(8, 'Shendeti', 'shendeti', NULL, NULL),
(10, 'Opinion', 'opinion', NULL, NULL),
(11, 'Lifestyle', 'lifestyle', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo_gallery` varchar(255) DEFAULT NULL,
  `post_date` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `photo_gallery`, `post_date`, `created_at`, `updated_at`) VALUES
(1, 'upload/multi/1783606866757694.png', '26 November 2023', NULL, NULL),
(2, 'upload/multi/1783606867167519.png', '26 November 2023', NULL, NULL),
(3, 'upload/multi/1783606867547989.png', '26 November 2023', NULL, NULL),
(4, 'upload/multi/1783606867948677.png', '26 November 2023', NULL, NULL),
(5, 'upload/multi/1783606868504754.png', '26 November 2023', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `live_tvs`
--

CREATE TABLE `live_tvs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `live_image` varchar(255) DEFAULT NULL,
  `live_url` varchar(255) DEFAULT NULL,
  `post_date` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(9, '2023_11_14_152712_create_categories_table', 2),
(10, '2023_11_14_222347_create_subcategories_table', 3),
(11, '2023_11_15_110248_create_posts_table', 4),
(12, '2023_11_18_235939_add_view_count_to_posts', 5),
(13, '2023_11_23_074058_create_banners_table', 6),
(14, '2023_11_24_141009_create_galleries_table', 6),
(15, '2023_11_24_153438_create_video_galleries_table', 6),
(16, '2023_11_24_154532_create_live_tvs_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `news_title` varchar(255) NOT NULL,
  `news_title_slug` varchar(255) NOT NULL,
  `news_image` varchar(255) NOT NULL,
  `news_details` text NOT NULL,
  `tags` text DEFAULT NULL,
  `breaking_news` int(11) DEFAULT NULL,
  `top_slider` int(11) DEFAULT NULL,
  `first_section_three` int(11) DEFAULT NULL,
  `first_section_nine` int(11) DEFAULT NULL,
  `post_date` varchar(255) DEFAULT NULL,
  `post_month` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `view_count` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `subcategory_id`, `user_id`, `news_title`, `news_title_slug`, `news_image`, `news_details`, `tags`, `breaking_news`, `top_slider`, `first_section_three`, `first_section_nine`, `post_date`, `post_month`, `status`, `view_count`, `created_at`, `updated_at`) VALUES
(1, 11, NULL, 1, 'Letra e Ajnshtajnit për të bijën, Lieserl: Dashuria është gravitet', 'letra-e-ajnshtajnit-për-të-bijën,-lieserl:-dashuria-është-gravitet', 'upload/news/1782940866902262.jpeg', '<h3 class=\"wp-block-heading\">&ldquo;Kur propozova teorin&euml; e relativitetit shum&euml; pak njer&euml;z m&euml; kuptuan. Ajo &ccedil;far&euml; do t&euml; zbuloj tani p&euml;r njer&euml;zimin gjithashtu do t&euml; pritet me keqkuptim dhe paragjykim.</h3>\r\n<p>Po t&euml; k&euml;rkoj t&euml; ruash letrat e mia p&euml;r sa koh&euml; t&euml; jet&euml; e nevojshme: vite, dekada, derisa shoq&euml;ria t&euml; ket&euml; b&euml;r&euml; aq progres sa t&euml; arrij&euml; t&euml; pranoj&euml; &ccedil;far&euml; do t&euml; shpjegoj m&euml; posht&euml;.</p>\r\n<p>Ekziston nj&euml; forc&euml; kaq e fuqishme sa deri sot shkenca nuk ka arritur t&rsquo;i gjej&euml; nj&euml; shpjegim. &Euml;sht&euml; nj&euml; forc&euml; q&euml; p&euml;rfshin dhe i sundon t&euml; gjith&euml;; q&euml; fshihet pas &ccedil;do fenomeni n&euml; univers. Kjo forc&euml; &euml;sht&euml; dashuria.</p>\r\n<p>Kur shkenc&euml;tar&euml;t k&euml;rkonin p&euml;r nj&euml; teori t&euml; unifikuar t&euml; universit harruan m&euml; t&euml; fuqishmen forc&euml; t&euml; padukshme. Dashuria &euml;sht&euml; drit&euml; q&euml; ndri&ccedil;on ata q&euml; e japin dhe e marrin. Dashuria &euml;sht&euml; gravitet, sepse i b&euml;n disa njer&euml;z t&euml; t&euml;rhiqen nga t&euml; tjer&euml;. Dashuria &euml;sht&euml; pushtet, sepse shum&euml;fishon m&euml; t&euml; mir&euml;n ton&euml; dhe i b&euml;n njer&euml;zit mos t&euml; humbasin n&euml; egoizmin e verb&euml;r.</p>\r\n<p>Dashuria shpaloset dhe zbulon. P&euml;r dashurin&euml; jetojm&euml; dhe vdesim. Dashuria &euml;sht&euml; Zoti dhe Zoti &euml;sht&euml; dashuri.</p>\r\n<p>Kjo forc&euml; jep shpjegimin e gjith&ccedil;kaje, i jep kuptim jet&euml;s. &Euml;sht&euml; pik&euml;risht ajo q&euml; kemi anashkaluar p&euml;r kaq shum&euml; koh&euml;, mbase sepse kemi frik&euml; nga dashuria, sepse &euml;sht&euml; e vetmja energji n&euml; univers q&euml; njeriu nuk ka m&euml;suar ende ta manipuloj&euml;.</p>\r\n<p>P&euml;r t&rsquo;i dh&euml;n&euml; dashuris&euml; vendin q&euml; meriton b&euml;ra nj&euml; ndryshim t&euml; thjesht&euml; n&euml; ekuacionin tim m&euml; t&euml; famsh&euml;m. N&euml;se n&euml; vend t&euml; E = mc2 t&euml; pranojm&euml; se energjia q&euml; sh&euml;ron bot&euml;n mund t&euml; p&euml;rftohet nga shum&euml;zimi i dashuris&euml; me shpejt&euml;sin&euml; e drit&euml;s n&euml; katror do t&euml; arrinim n&euml; p&euml;rfundimin se dashuria &euml;sht&euml; forca m&euml; e fuqishme q&euml; ekziston&hellip; sepse nuk njeh limite.</p>\r\n<p>Pas d&euml;shtimit t&euml; njer&euml;zimit n&euml; shfryt&euml;zimin e forcave t&euml; universit q&euml; na jan&euml; kthyer kund&euml;r &euml;sht&euml; e r&euml;nd&euml;sishme q&euml; t&euml; ushqejm&euml; nj&euml; tjet&euml;r lloj energjie.</p>\r\n<p>N&euml;se duam mbijetes&euml;n e specieve, n&euml;se duam t&euml; gjejm&euml; kuptimin e jet&euml;s, n&euml;se duam t&euml; shp&euml;tojm&euml; bot&euml;n dhe &ccedil;do gjalles&euml; q&euml; e popullon at&euml;, dashuria &euml;sht&euml; p&euml;rgjigjja e vetme.</p>\r\n<p>Mbase nuk jemi ende gati t&euml; shpikim nj&euml; bomb&euml; me dashuri, nj&euml; pajisje t&euml; fuqishme q&euml; t&euml; shkat&euml;rroj&euml; urrejtjen, egoizmin dhe lakmin&euml; q&euml; po g&euml;rryejn&euml; planetin. Megjithat&euml;, &ccedil;do individ mbart nj&euml; &ldquo;gjenerator&rdquo; t&euml; vog&euml;l, por t&euml; fuqish&euml;m dashurie, energjia e t&euml; cilit pret t&euml; &ccedil;lirohet.</p>\r\n<p>At&euml;her&euml; kur t&euml; m&euml;sojm&euml; t&euml; japim dhe marrim k&euml;t&euml; energji universale, e dashura ime Lieserl, do t&euml; konfirmojm&euml; se dashuria sundon mbi gjith&ccedil;ka; dashuria &euml;sht&euml; e aft&euml; t&euml; kap&euml;rcej&euml; mbi &ccedil;do gj&euml;, sepse dashuria &euml;sht&euml; jet&euml;.</p>\r\n<p>Jam thell&euml;sisht i penduar q&euml; nuk kam qen&euml; i aft&euml; t&euml; shpreh &ccedil;far&euml; kam n&euml; zem&euml;r, q&euml; ka rrahur p&euml;r ty gjat&euml; gjith&euml; jet&euml;s sime. Mbase &euml;sht&euml; von&euml; p&euml;r t&euml; t&euml; k&euml;rkuar ndjes&euml;. Por, meq&euml; koha &euml;sht&euml; relative, dua t&euml; t&euml; them se t&euml; dua. Fal&euml; teje kam gjetur p&euml;rgjigjen themelore.</p>\r\n<p>Babai yt,</p>\r\n<p>Albert Einstein&rdquo;. /&nbsp;<strong>bota-islame.com</strong></p>', 'awesome,test', 1, 1, 1, 1, '18-11-23', 'November', 1, 1, '2023-11-18 22:29:44', '2023-11-18 23:05:29'),
(2, 11, NULL, 1, '33 VJET NGA RIHAPJA E AKTIVITETIT FETAR ISLAM', '33-vjet-nga-rihapja-e-aktivitetit-fetar-islam', 'upload/news/1782940948450214.jpeg', '<p>Diktatura komuniste, me t&euml;r&euml; eg&euml;rsin&euml; e vet, hoqi m&euml;simin e besimit nga shkolla, mbylli t&euml; gjitha shkollat p&euml;r p&euml;rgatitjen e kuadrit fetar, pezulloi shtypin fetar dhe botimet, sekuestroi t&euml; gjitha bibliotekat personale me literatur&euml; fetare, ndaloi funksionimin e objekteve fetare, pengoi zhvillimin e riteve fetare, xhamit&euml; i shnd&euml;rroi n&euml; magazina e stalla dhe, sigurisht, shumic&euml;n e tyre i shkat&euml;rroi dhe i rrafshoi. Hoxhallar&euml;t m&euml; t&euml; shquar i burgosi dhe i pushkatoi, kurse disa prej tyre i internoi, i la pa pun&euml;, u b&euml;ri presione q&euml; t&euml; hiqnin petkun fetar e t&euml; mohonin pik&euml;pamjet e tyre, shkurt, u p&euml;rpoq me &ccedil;do mjet q&euml; t&euml; mos linte asgj&euml; nga feja dhe ndjenjat e popullit p&euml;r t&euml;.</p>\r\n<p>Megjithat&euml; ishte e kaluara islame e k&euml;tij populli, q&euml; zbuti shthurjen totale t&euml; shoq&euml;ris&euml; son&euml; prej furtun&euml;s komuniste, dhe&nbsp;shum&euml; besimtar&euml; e ruajt&euml;n identitetin e tyre, duke kryer edhe nj&euml; pjes&euml; t&euml; riteve fshehurazi.&nbsp;N&euml; m&euml;nyr&euml; t&euml; kujdesur, pa marr&euml; parasysh pasojat e r&euml;nda vetjake e familjare q&euml; rridhnin nga zbulimi i tyre, ata mbanin agj&euml;rim, faleshin, b&euml;nin lutje e bamir&euml;si dhe mbanin gjall&euml; n&euml; shpirtin e tyre dashurin&euml; p&euml;r Zotin, Profetin e Fen&euml; Islame. Ata vazhdimisht ushqenin besimin n&euml; m&euml;shir&euml;n e ndihm&euml;n e Zotit, duke shpresuar dit&euml; m&euml; t&euml; mira.</p>\r\n<p>Shpallja e Shqip&euml;ris&euml; shteti i par&euml; ateist n&euml; bot&euml;, kulmoi me aksionin e madh p&euml;r rr&euml;nimin e xhamive, duke i sjell&euml; vendit nj&euml; d&euml;m t&euml; dyfisht&euml; edhe p&euml;r vlerat e paz&euml;vend&euml;sueshme kulturore, historike e arkeologjike t&euml; tyre. Me r&euml;nien e regjimit komunist, besimet fetare filluan t&euml; riorganizohen mbi bazat tradicionale, duke pasur si b&euml;rtham&euml; ato pak objekte kulti, q&euml; ishin shpallur &ldquo;Monumente Kulture&rdquo; dhe ato t&euml; cilave u ishte nd&euml;rruar destinacioni, si dhe ata pak hoxhallar&euml;, q&euml; i kishin rezistuar terrorit komunist.</p>\r\n<p>Pas 23 viteve t&euml; ndalimit t&euml; fes&euml; me ligj, Zoti b&euml;ri t&euml; mundur q&euml; me dat&euml; 16 n&euml;ntor 1990, t&euml; rihapet xhamia e par&euml; n&euml; Shqip&euml;ri, ajo e Plumbit n&euml; Shkod&euml;r. Rihapja e xhamis&euml; s&euml; Plumbit ishte shk&euml;ndija e par&euml;, q&euml; dha sinjalin fatlum se Islami jo vet&euml;m q&euml; nuk ish harruar, por vazhdonte t&euml; ishte i gjall&euml; e i fresk&euml;t n&euml; zemrat e shqiptar&euml;ve. Ky veprim historik p&euml;r Shqip&euml;rin&euml;, v&euml;rtetoi edhe nj&euml; her&euml; ajetin e Kur&rsquo;anit Fam&euml;lart&euml;: &ldquo;<strong>Thuaj: E v&euml;rteta erdhi, nd&euml;rsa e pav&euml;rteta u shkat&euml;rrua. Sigurisht, e pav&euml;rteta &euml;sht&euml; e paracaktuar t&euml; zhduket!</strong>&rdquo;<a href=\"https://dritaislame.al/33-vjet-nga-rihapja-e-aktivitetit-fetar-islam/?fbclid=IwAR3LAUGub-iRoownQaut6vou-7XIJ-tQRGVBzkO4IE0eVr6cXpX9aWLZ6J8_aem_AVZAqegKnygnqIPdQrGD3nNh1ooqpC0gT91pJWI7PZN6IIlWsYFCtGHaKBg8W2KiBWc&amp;#_ftn1\">[1]</a></p>\r\n<p>At&euml; dit&euml;, bij&euml; e bija shqiptare mor&euml;n iniciativ&euml;n e guximshme p&euml;r t&euml; hapur xhamin&euml; dhe p&euml;r t&euml; rifituar t&euml; drejt&euml;n e ushtrimit t&euml; lir&euml; t&euml; besimit fetar. Rreziku ishte shum&euml; i madh, por zemrat e besimtar&euml;ve nuk mund t&euml; rezistonin m&euml; ndalimin e praktikimit t&euml; fes&euml;. Pjes&euml;marr&euml;sit n&euml; k&euml;t&euml; ngjarje tregojn&euml; se ajo ka qen&euml; nj&euml; dit&euml; sa e g&euml;zueshme e mall&euml;ngjyese, po aq e guximshme dhe e rrezikshme p&euml;r t&euml; ardhmen e besimtar&euml;ve. Nj&euml; ftes&euml; me foton e Xhamis&euml; s&euml; Plumbit qarkullonte n&euml; njer&euml;z me k&euml;t&euml; tekst:</p>\r\n<p>&ldquo;<strong><em>Me dt. 16.11.1990 ora 12.00 te Xhamia e Plumbit falet dita e xhumas&euml;. Keni nderin t&euml; faleni brenda xhamis&euml;.</em></strong>&rdquo;&nbsp;<em>Komisioni</em></p>\r\n<p>Lidhur me k&euml;t&euml; dit&euml; t&euml; sh&euml;nuar, ish myftiu i Shkodr&euml;s, H. Faik Hoxha, mes t&euml; tjerash shkruan: &ldquo;<em>Pes&euml; vjet m&euml; par&euml;, nj&euml; grup qytetar&euml;sh, shumica t&euml; rinj si&hellip;, mor&euml;n iniciativ&euml;n e guximshme p&euml;r t&euml; hapur xhamin&euml;, p&euml;r t&euml; falur xhuman&euml;, p&euml;r t&euml; rip&euml;rt&euml;rir&euml; fen&euml;, p&euml;r t&euml; rifituar t&euml; drejt&euml;n e ushtrimit t&euml; lir&euml; t&euml; besimit fetar&hellip; Duke p&euml;rkujtuar k&euml;t&euml; ngjarje t&euml; sh&euml;nuar historike, na del p&euml;rpara ai miting i madh popullor me rreth 60.000 pjes&euml;marr&euml;s nga qyteti e fshati, nga t&euml; gjitha moshat, t&euml; mbledhur me d&euml;shir&euml;n dhe vullnetin e tyre t&euml; lir&euml;, t&euml; cil&euml;t shpreh&euml;n urrejtjen p&euml;r diktatur&euml;n dhe ndjenjat e tyre p&euml;r fen&euml;. Kjo ngjarje e paharruar jehoi n&euml; &ccedil;do familje, ajo u b&euml; nxitje p&euml;r t&euml; nd&euml;rmarr&euml; vepra t&euml; tjera n&euml; dobi t&euml; gjall&euml;rimit t&euml; fes&euml;, p&euml;r t&euml; kap&euml;rcyer at&euml; periudh&euml; terri ateist 50-vje&ccedil;ar.</em>&rdquo;<a href=\"https://dritaislame.al/33-vjet-nga-rihapja-e-aktivitetit-fetar-islam/?fbclid=IwAR3LAUGub-iRoownQaut6vou-7XIJ-tQRGVBzkO4IE0eVr6cXpX9aWLZ6J8_aem_AVZAqegKnygnqIPdQrGD3nNh1ooqpC0gT91pJWI7PZN6IIlWsYFCtGHaKBg8W2KiBWc&amp;#_ftn2\">[2]</a></p>\r\n<p>N&euml; k&euml;t&euml; dit&euml; t&euml; sh&euml;nuar, ne kujtojm&euml; me respekt 69-vje&ccedil;arin Haxhi Hafiz Sabri Ko&ccedil;i, pishtarin e ringjalljes s&euml; Islamit n&euml; Shqip&euml;ri, i cili do t&euml; shprehej: &ldquo;<em>G&euml;zimi m&euml; i madh imi ka qen&euml; m&euml; 16 n&euml;ntor&hellip; sikur linda p&euml;rs&euml;ri. Kur shkova te xhamia, &ccedil;&rsquo;t&euml; shihja?! Ishte mbushur zi me njer&euml;z. Vargu i tyre zgjatej deri n&euml; kala. Altoparlant&euml;t rreth e p&euml;rreth. S&rsquo;mund t&euml; b&euml;ja asnj&euml; hap. T&euml; gjith&euml; filluan t&euml; bien n&euml; tekbir. Brohoritnin. Masa gjithnj&euml; e m&euml; tep&euml;r merrte flak&euml;&hellip; Kam hipur n&euml; nj&euml; tribun&euml; t&euml; ngritur p&euml;r at&euml; q&euml;llim&hellip; Mezi e p&euml;rmbaja veten dhe s&rsquo;mundja t&rsquo;u besoja syve t&euml; mi. Thash&euml;: A jam n&euml; mend apo s&rsquo;jam? S&rsquo;kisha par&euml; n&euml; jet&euml;n time aq t&euml; tubuar&hellip; E pash&euml; veten aq t&euml; lumtur, saq&euml; nuk kisha gajle edhe sikur t&euml; bija kurban. Nuk kishte g&euml;zim m&euml; t&euml; madh p&euml;r jet&euml;n.&rdquo;<a href=\"https://dritaislame.al/33-vjet-nga-rihapja-e-aktivitetit-fetar-islam/?fbclid=IwAR3LAUGub-iRoownQaut6vou-7XIJ-tQRGVBzkO4IE0eVr6cXpX9aWLZ6J8_aem_AVZAqegKnygnqIPdQrGD3nNh1ooqpC0gT91pJWI7PZN6IIlWsYFCtGHaKBg8W2KiBWc&amp;#_ftn3\">[3]</a>&nbsp;Gjat&euml; nj&euml; interviste e pyet&euml;n Hafiz Sabriun: &ldquo;A menduat p&euml;r pasojat q&euml; mund t&euml; kishit n&euml; drejtimin e k&euml;saj ceremonie?&rdquo; Ai u p&euml;rgjigj: &ldquo;Duke kujtuar t&euml; gjitha vuajtjet e mundimet, nuk kisha se &ccedil;far&euml; t&euml; humbisja. P&euml;rkrahur nga djemt&euml; dhe i ftuar nga rinia e mrekullueshme shkodrane, un&euml; e ndjeja veten superior ndaj atyre q&euml; duhej t&euml; kisha frik&euml;.</em>&rdquo;<a href=\"https://dritaislame.al/33-vjet-nga-rihapja-e-aktivitetit-fetar-islam/?fbclid=IwAR3LAUGub-iRoownQaut6vou-7XIJ-tQRGVBzkO4IE0eVr6cXpX9aWLZ6J8_aem_AVZAqegKnygnqIPdQrGD3nNh1ooqpC0gT91pJWI7PZN6IIlWsYFCtGHaKBg8W2KiBWc&amp;#_ftn4\">[4]</a></p>\r\n<p>Do t&euml; ishin Hafiz Qazim Rakipi q&euml; k&euml;ndoi versetet Kuranore, si dhe hoxha i nderuar Imam Vehbi Dani q&euml; k&euml;ndoi ezanin, pas 23 vitesh heshtje. I burgosur p&euml;r 22 vjet nga regjimi komunist, Haxhi Hafiz Sabri Ko&ccedil;i vuri n&euml; dukje n&euml; fjal&euml;n e hapjes, nevoj&euml;n e ushtrimit t&euml; fes&euml; nga &ccedil;do njeri dhe n&euml; &ccedil;do koh&euml;. Ai pasi fal&euml;nderoi Zotin p&euml;r mir&euml;sit&euml; e Tij t&euml; panum&euml;rta, n&euml; fjalin&euml; e par&euml; gjat&euml; ligj&euml;rat&euml;s para xhamis&euml;, i hipur n&euml; nj&euml; tribun&euml; t&euml; improvizuar tha:&nbsp;<em>&ldquo;T&euml; dashur vllaz&euml;n mysliman&euml;, katolik&euml; e ortodoks&euml;, e mbi t&euml; gjitha vllaz&euml;n shqiptar&euml;&rdquo;, pastaj&nbsp;</em>vler&euml;soi lart mundin dhe p&euml;rpjekjet e t&euml; gjith&euml; atyre q&euml; ndihmuan n&euml; rikthimin e xhamis&euml; n&euml; gjendjen e saj funksionale. Nga xhamia e Plumbit u d&euml;gjuan pas shum&euml; vitesh ajetet e Kur&rsquo;anit dhe Hadithet e Muhamedit (a.s.), t&euml; cilat me besnik&euml;rin&euml; m&euml; t&euml; madhe i kishte ruajtur n&euml; kujtes&euml;n e tij Hafiz Sabriu.</p>\r\n<p>Duke p&euml;rkujtuar k&euml;t&euml; ngjarje, k&euml;t&euml; ndodhi t&euml; madhe, Ismail Mu&ccedil;ej, ish kryeredaktor i gazet&euml;s &ldquo;Drita islame&rdquo;, shprehet: &ldquo;<em>Deshi s&rsquo;deshi qeveria e asaj kohe, feja u legalizua praktikisht, duke dh&euml;n&euml; shk&euml;ndij&euml;n e par&euml; p&euml;r qytetet dhe fshatrat e tjera t&euml; Shqip&euml;ris&euml;, t&euml; cilat filluan t&euml; hapin nj&euml;ra pas tjetr&euml;s faltoret</em>.&rdquo;<a href=\"https://dritaislame.al/33-vjet-nga-rihapja-e-aktivitetit-fetar-islam/?fbclid=IwAR3LAUGub-iRoownQaut6vou-7XIJ-tQRGVBzkO4IE0eVr6cXpX9aWLZ6J8_aem_AVZAqegKnygnqIPdQrGD3nNh1ooqpC0gT91pJWI7PZN6IIlWsYFCtGHaKBg8W2KiBWc&amp;#_ftn5\">[5]</a></p>\r\n<p>Rihapjet e xhamive anemban&euml; vendit pasuan me hapa t&euml; shpejta. Mund t&euml; p&euml;rmendim xhamin&euml; Mbret n&euml; Berat, e cila u rihap m&euml; 14.12.1990, xhamin&euml; e Plumbit n&euml; Vlor&euml;, e cila u rihap m&euml; 11.01.1991, xhamin&euml; e Kokonozit (pazari i ri) n&euml; Tiran&euml;, e cila u rihap m&euml; 18.02.1991, xhamin&euml; Fatih n&euml; Durr&euml;s, e cila u rihap m&euml; 07.03.1991, xhamin&euml; e madhe n&euml; Durr&euml;s, e cila u rihap m&euml; 24.03.1991, xhamin&euml; n&euml; qytetin e Fierit, e cila u hap m&euml; 12.04.1991, xhamin&euml; n&euml; Koplik, e cila u hap m&euml; 21.04.1991, xhamin&euml; n&euml; Patos, e cila u hap m&euml; 07.12.1991, etj.</p>\r\n<p>K&euml;shtu, dal&euml;ngadal&euml;, me nj&euml; pun&euml; t&euml; kujdesshme e plot sakrifica, filluan t&euml; hapen xhamit&euml; e para, t&euml; meremetohen ato q&euml; kishin mbetur kur dor&euml;zoheshin nga organet e pushtetit, u hap&euml;n salla p&euml;r t&euml; kryer faljet e predikimet e rastit n&euml; ato vende ku nuk kishte xhami, si dhe u nd&euml;rtuan xhami t&euml; reja.</p>\r\n<p>Ngjarja e 16 n&euml;ntorit nuk ishte thjesht nj&euml; ceremoni fetare. Ajo krahas vler&euml;s s&euml; vet t&euml; ringjalljes s&euml; fes&euml;, ishte nj&euml; drit&euml; shprese p&euml;r t&euml; ardhmen e Islamit n&euml; Shqip&euml;ri. Po at&euml; dit&euml; u vendos rithemelimi i institucionit t&euml; Komunitetit Mysliman t&euml; Shqip&euml;ris&euml;, i cili, me ndihm&euml;n e Zotit, me shum&euml; mund dhe sakrifica, arriti t&euml; ngrihet s&euml; bashku me myftinit&euml; dhe medreset&euml;, nj&euml; institucion q&euml; i sh&euml;rben mbar&euml; popullit shqiptar n&euml; t&euml; gjitha drejtimet.</p>\r\n<p><a href=\"https://dritaislame.al/33-vjet-nga-rihapja-e-aktivitetit-fetar-islam/?fbclid=IwAR3LAUGub-iRoownQaut6vou-7XIJ-tQRGVBzkO4IE0eVr6cXpX9aWLZ6J8_aem_AVZAqegKnygnqIPdQrGD3nNh1ooqpC0gT91pJWI7PZN6IIlWsYFCtGHaKBg8W2KiBWc&amp;#_ftnref1\">[1]</a>. Isra&rsquo;, 17:81</p>\r\n<p><a href=\"https://dritaislame.al/33-vjet-nga-rihapja-e-aktivitetit-fetar-islam/?fbclid=IwAR3LAUGub-iRoownQaut6vou-7XIJ-tQRGVBzkO4IE0eVr6cXpX9aWLZ6J8_aem_AVZAqegKnygnqIPdQrGD3nNh1ooqpC0gT91pJWI7PZN6IIlWsYFCtGHaKBg8W2KiBWc&amp;#_ftnref2\">[2]</a>. Faik Hoxha,&nbsp;<em>Duke kujtuar nj&euml; p&euml;rvjetor</em>, gazeta &ldquo;Drita Islame&rdquo;, nr. 21 (82), viti IV i botimit, dhjetor 1995.</p>\r\n<p><a href=\"https://dritaislame.al/33-vjet-nga-rihapja-e-aktivitetit-fetar-islam/?fbclid=IwAR3LAUGub-iRoownQaut6vou-7XIJ-tQRGVBzkO4IE0eVr6cXpX9aWLZ6J8_aem_AVZAqegKnygnqIPdQrGD3nNh1ooqpC0gT91pJWI7PZN6IIlWsYFCtGHaKBg8W2KiBWc&amp;#_ftnref3\">[3]</a>. Pjes&euml; nga intervista e H. Sabri Ko&ccedil;it,&nbsp;<em>Shqip&euml;ria i kthehet fes&euml;,</em>&nbsp;revista &ldquo;El-Hilal&rdquo;, botim special, qershor 1991, f. 13-14;&nbsp;<em>16 n&euml;ntor 1990</em>, gazeta &ldquo;Drita Islame&rdquo;, nr. 11 (334), viti i XIX i botimit, n&euml;ntor 2010.</p>\r\n<p><a href=\"https://dritaislame.al/33-vjet-nga-rihapja-e-aktivitetit-fetar-islam/?fbclid=IwAR3LAUGub-iRoownQaut6vou-7XIJ-tQRGVBzkO4IE0eVr6cXpX9aWLZ6J8_aem_AVZAqegKnygnqIPdQrGD3nNh1ooqpC0gT91pJWI7PZN6IIlWsYFCtGHaKBg8W2KiBWc&amp;#_ftnref4\">[4]</a>. Faik Luli &ndash; Islam Dizdari,&nbsp;<em>Nj&euml; jet&euml; n&euml; sh&euml;rbim t&euml; fes&euml;,&nbsp;</em>Tiran&euml; 1996, f. 56.</p>\r\n<p><a href=\"https://dritaislame.al/33-vjet-nga-rihapja-e-aktivitetit-fetar-islam/?fbclid=IwAR3LAUGub-iRoownQaut6vou-7XIJ-tQRGVBzkO4IE0eVr6cXpX9aWLZ6J8_aem_AVZAqegKnygnqIPdQrGD3nNh1ooqpC0gT91pJWI7PZN6IIlWsYFCtGHaKBg8W2KiBWc&amp;#_ftnref5\">[5]</a>. Ismail H. Mu&ccedil;ej,&nbsp;<em>Tri vjet pas rihapjes s&euml; institucioneve fetare n&euml; Shqip&euml;ri</em>, gazeta &ldquo;Drita Islame&rdquo;, nr. 18 (43), viti II i botimit, dhjetor 1993.</p>\r\n<p><strong>Dorian Demetja</strong>&nbsp;/&nbsp;<strong>drita islame</strong>. //&nbsp;<strong>bota-islame.com</strong></p>', 'awesome', 1, 1, 1, 1, '19-11-23', 'November', 1, 1, '2023-11-19 01:05:41', '2023-11-19 01:05:41'),
(3, 11, NULL, 1, 'Kushtetuesja pezullon ligjin e qeverisë për pronat, pranon ankimimin e KMSH', 'kushtetuesja-pezullon-ligjin-e-qeverisë-për-pronat,-pranon-ankimimin-e-kmsh', 'upload/news/1782941040366403.png', '<p>Gjykata Kushtetuese ka vendosur t&euml; pezulloj&euml; vendimin e qeveris&euml; p&euml;r disa shtesa n&euml; ligjin &ldquo;P&euml;r trajtimin e pron&euml;s dhe p&euml;rfundimin e procesit t&euml; kompensimit t&euml; pronave&rdquo;.</p>\r\n<p>Gjykata n&euml; mbledhjen e dit&euml;s s&euml; enjte vendosi t&euml; pranoj&euml; ankimimin e b&euml;r&euml; nga Komunitetit Mysliman, duke pranuar se disa nga nenet e qeveris&euml; n&euml; ligjin e trajtimit dhe kompensimit t&euml; pronave ishin n&euml; kund&euml;rshtim me Kushtetut&euml;n e vendit.</p>\r\n<p><strong>VENDIMI I GJYKAT&Euml;S KUSHTETUESE:</strong></p>\r\n<p>Mbledhja e Gjyqtar&euml;ve t&euml; Gjykat&euml;s Kushtetuese t&euml; Republik&euml;s s&euml; Shqip&euml;ris&euml;, sot n&euml; dat&euml;n 08.11.2023, pasi mori n&euml; shqyrtim paraprak &ccedil;&euml;shtjen me nr. 18 (K) 2023 t&euml; Regjistrit Themeltar, me k&euml;rkues Komuniteti Mysliman i Shqip&euml;ris&euml;, me objekt:&nbsp;&ldquo;Shfuqizimi i pik&euml;s 2 t&euml; nenit 1 dhe pikave 1, 2 dhe 5 t&euml; nenit 2 t&euml; ligjit nr. 77/2022, dat&euml; 17.11.2022 &ldquo;P&euml;r disa shtesa dhe ndryshime n&euml; ligjin nr. 133/2015 &ldquo;P&euml;r trajtimin e pron&euml;s dhe p&euml;rfundimin e procesit t&euml; kompensimit t&euml; pronave&rdquo;&rdquo;, si t&euml; papajtueshme me Kushtetut&euml;n e Republik&euml;s s&euml; Shqip&euml;ris&euml;. Shfuqizimi i pikave 2, 3/1 dhe 3/2, shkronja &ldquo;c&rdquo;, t&euml; vendimit t&euml; K&euml;shillit t&euml; Ministrave nr. 313, dat&euml; 24.05.2023 &ldquo;P&euml;r disa shtesa dhe ndryshime n&euml; vendimin nr. 223, dat&euml; 23.03.2016 t&euml; K&euml;shillit t&euml; Ministrave &ldquo;P&euml;r p&euml;rcaktimin e rregullave dhe t&euml; procedurave p&euml;r vler&euml;simin dhe ekzekutimin e vendimeve p&euml;rfundimtare t&euml; kompensimit t&euml; pron&euml;s dhe shp&euml;rndarjen e fondit financiar e fizik p&euml;r kompensimin e pronave&rdquo;, t&euml; ndryshuar&rdquo;, si t&euml; papajtueshme me Kushtetut&euml;n e Republik&euml;s s&euml; Shqip&euml;ris&euml;. Shfuqizimi i pik&euml;s 8 t&euml; vendimit t&euml; K&euml;shillit t&euml; Ministrave nr. 313, dat&euml; 24.05.2023 &ldquo;P&euml;r disa shtesa dhe ndryshime n&euml; vendimin nr. 223, dat&euml; 23.03.2016, t&euml; K&euml;shillit t&euml; Ministrave, &ldquo;P&euml;r p&euml;rcaktimin e rregullave dhe t&euml; procedurave p&euml;r vler&euml;simin dhe ekzekutimin e vendimeve p&euml;rfundimtare t&euml; kompensimit t&euml; pron&euml;s dhe shp&euml;rndarjen e fondit financiar e fizik p&euml;r kompensimin e pronave&rdquo;, t&euml; ndryshuar&rdquo;, n&euml; pjes&euml;n q&euml; shton pik&euml;n 16/7 n&euml; vendimin nr. 223, dat&euml; 23.03.2016 t&euml; K&euml;shillit t&euml; Ministrave, si e papajtueshme me Kushtetut&euml;n e Republik&euml;s s&euml; Shqip&euml;ris&euml;. Pezullimi i zbatimit t&euml; k&euml;tyre akteve deri n&euml; hyrjen n&euml; fuqi t&euml; vendimit p&euml;rfundimtar t&euml; Gjykat&euml;s Kushtetuese&rdquo;, bazuar n&euml; nenet 32 dhe 45 t&euml; ligjit nr. 8577, dat&euml; 10.02.2000 &ldquo;P&euml;r organizimin dhe funksionimin e Gjykat&euml;s Kushtetuese t&euml; Republik&euml;s s&euml; Shqip&euml;ris&euml;&rdquo;, t&euml; ndryshuar dhe nenet 11, pika 3, shkronja &ldquo;f&rdquo;, 26 dhe 27 t&euml; Rregullores p&euml;r Procedurat Gjyq&euml;sore t&euml; Gjykat&euml;s Kushtetuese,</p>\r\n<p><strong>VENDOSI:</strong></p>\r\n<ol>\r\n<li>Kalimin e &ccedil;&euml;shtjes p&euml;r shqyrtim n&euml; seanc&euml; plenare publike.</li>\r\n<li>Pranimin e k&euml;rkes&euml;s p&euml;r pezullimin e zbatimit t&euml; ligjit nr. 77/2022, dat&euml; 17.11.2022 &ldquo;P&euml;r disa shtesa dhe ndryshime n&euml; ligjin nr. 133/2015 &ldquo;P&euml;r trajtimin e pron&euml;s dhe p&euml;rfundimin e procesit t&euml; kompensimit t&euml; pronave&rdquo;&rdquo;. /euronews.al //&nbsp;<strong>bota-islame.com</strong></li>\r\n</ol>\r\n<figure class=\"wp-block-image\"><img class=\"td-animation-stack-type0-2\" src=\"https://reklama2.aplikacione.com/www/delivery/lg.php?bannerid=0&amp;campaignid=0&amp;zoneid=552&amp;loc=https%3A%2F%2Feuronews.al%2Fkushtetuesja-pezullon-ligjin-e-qeverise-per-pronat-zbardhet-vendimi%2F%3Fmibextid%3DZxz2cZ&amp;cb=ed4619404e\" alt=\"\"></figure>\r\n<p>M&euml; posht&euml; gjeni t&euml; detajuara nenet p&euml;rkat&euml;se q&euml; bien ndesh me Kushtetut&euml;n.</p>', 'awesome', 1, 1, 1, 1, '19-11-23', 'November', 1, 1, '2023-11-19 01:06:17', '2023-11-19 15:43:55'),
(4, 5, NULL, 1, 'Salahuddin Ejjubi, çliruesi i Jeruzalemit', 'salahuddin-ejjubi,-çliruesi-i-jeruzalemit', 'upload/news/1782941116792105.jpeg', '<p>Salahuddin Ejubi, i njohur gjer&euml;sisht n&euml; Per&euml;ndim si Saladini, ishte nj&euml; udh&euml;heq&euml;s i guximsh&euml;m dhe i shk&euml;lqyer mysliman gjat&euml; shekullit t&euml; 12-t&euml;. Themeli i tij i fort&euml; n&euml; fe dhe karakteri i tij plot vlera, &ccedil;uan n&euml; p&euml;rkushtimin e tij ndaj &ccedil;&euml;shtjes islame dhe i mund&euml;suan atij t&euml; arrinte gj&euml;ra t&euml; m&euml;dha.</p>\r\n<p>Perandoria e tij Ejubide bashkoi Egjiptin dhe Sirin&euml;. Mbi t&euml; gjitha, ai luajti nj&euml; rol t&euml; r&euml;nd&euml;sish&euml;m n&euml; kthimin e val&euml;s kund&euml;r kryqtar&euml;ve duke rimarr&euml; me sukses Jeruzalemin dhe fitoi nj&euml; em&euml;r t&euml; ve&ccedil;ant&euml; n&euml; kronikat e historis&euml; myslimane dhe per&euml;ndimore.</p>\r\n<p><strong>Lideri Kurajoz Musliman i Egjiptit dhe Siris&euml;</strong><br>Saladini lindi n&euml; vitin 1137 pas Krishtit n&euml; Tikrit, Irak. Ai studioi Kur&rsquo;anin dhe teologjin&euml; s&euml; bashku me astronomin&euml;, matematik&euml;n dhe jurisprudenc&euml;n. Ai iu bashkua ushtris&euml; si i ri dhe u trajnua me aft&euml;si t&euml; ve&ccedil;anta nga xhaxhai i tij Asad-al-Din Shirkoh, nj&euml; komandant i dinastis&euml; Zengid. Performanca mbres&euml;l&euml;n&euml;se e Saladinit n&euml; betejat e tij t&euml; hershme i mund&euml;soi atij t&euml; merrte p&euml;rgjegj&euml;sit&euml; udh&euml;heq&euml;se gjat&euml; fushatave ushtarake.</p>\r\n<p>Ngritja e tij nga nj&euml; ushtar n&euml; Mbret t&euml; Egjiptit dhe Siris&euml; ishte rezultat i taktikave t&euml; ekzekutuara me zgjuarsi dhe rrethanave t&euml; favorshme q&euml; ai zhvilloi. Ai mbajti poste ky&ccedil;e n&euml; Egjipt, duke i mund&euml;suar atij t&euml; konsolidonte pushtetin dhe t&euml; rr&euml;zonte Fatimid&euml;t. Siria, n&euml; at&euml; koh&euml;, sundohej nga Zengid&euml;t; kur sundimtari Zengid vdiq papritur, duke l&euml;n&euml; nj&euml; pasardh&euml;s t&euml; mitur, rruga u hap p&euml;rfundimisht p&euml;r Saladinin p&euml;r t&euml; pushtuar Sirin&euml;. Gjat&euml; mbret&euml;rimit t&euml; tij, Saladini nd&euml;rtoi shum&euml; shkolla, spitale dhe institucione n&euml; k&euml;rkimin e tij p&euml;r arritje intelektuale dhe qytetare. Ai ishte gjithashtu i vendosur t&euml; sillte drejt&euml;si, paqe dhe prosperitet p&euml;r ata q&euml; ishin n&euml; domenin e tij.</p>\r\n<p><strong>Salahuddini &ccedil;liror Jeruzalemin nga kryqtar&euml;t</strong></p>\r\n<p>Salahudini u b&euml; m&euml; i njohur p&euml;r zmbrapsjen e kryqtar&euml;ve dhe &ccedil;lirimin e Jeruzalemit. Ai mundi dhe shkat&euml;rroi nj&euml; num&euml;r t&euml; madh t&euml; kryqtar&euml;ve n&euml; betej&euml;n vendimtare t&euml; Hattinit n&euml; korrik 1187. N&euml; rrug&euml;n e tij p&euml;r n&euml; Jerusalem, Saladini pushtoi pothuajse &ccedil;do qytet t&euml; kryq&euml;zatave. Pas nj&euml; rrethimi, Jeruzalemi iu dor&euml;zua atij n&euml; tetor t&euml; po atij viti. P&euml;rpjekjet e m&euml;vonshme t&euml; kryqtar&euml;ve p&euml;r t&euml; rifituar Jerusalemin u rezistuan derisa ata m&euml; n&euml; fund u dor&euml;zuan dhe u t&euml;rhoq&euml;n drejt sht&euml;pis&euml;.</p>\r\n<p>Edhe pse dikush do t&euml; priste q&euml; Saladini t&euml; urrehej mes kombeve kryqtare, ai u b&euml; nj&euml; nga figurat m&euml; t&euml; vler&euml;suara myslimane t&euml; bot&euml;s mesjetare islame p&euml;r shkak t&euml; bujaris&euml; q&euml; shfaqi ndaj t&euml; krishter&euml;ve pavar&euml;sisht brutalitetit q&euml; musliman&euml;t kishin duruar nga duart e kryqtar&euml;ve. Kur t&euml; krishter&euml;t arrit&euml;n Jeruzalemin gjat&euml; kryq&euml;zat&euml;s s&euml; par&euml;, ata kryen mizori dhe vrasje masive, duke krijuar nj&euml; gjakderdhje n&euml; t&euml; cil&euml;n banor&euml;t mysliman&euml; ishin objektivat m&euml; t&euml; shquar, si&ccedil; dokumentohet grafikisht n&euml; serin&euml; e PBS Islam: Perandoria e Besimit. Sipas fjal&euml;ve t&euml; kronikanit t&euml; kryq&euml;zatave, Raymond of Agiles, masakra ishte aq e gjer&euml; saq&euml; kryqtar&euml;t &ldquo;kal&euml;ruan n&euml; gjak deri n&euml; gjunj&euml;t e kuajve&rdquo;.</p>\r\n<p>Kur Saladini rimori Jerusalemin, t&euml; krishter&euml;t prisnin nj&euml; sulm t&euml; ngjash&euml;m. Megjithat&euml;, Salahudini jo vet&euml;m q&euml; i kurseu t&euml; krishter&euml;t, por i trajtoi me nder, duke i lejuar ata q&euml; d&euml;shironin t&euml; largoheshin ta b&euml;nin k&euml;t&euml; n&euml; paqe, dhe p&euml;r ata q&euml; d&euml;shironin t&euml; q&euml;ndronin ta b&euml;nin k&euml;t&euml; n&euml; harmoni. V&euml;rtet, ai ishte nj&euml; shembull i gjall&euml; i besimit tolerant, p&euml;rparimtar dhe gjith&euml;p&euml;rfshir&euml;s, i cili ishte aq i dashur p&euml;r zemr&euml;n e tij. Duke treguar p&euml;rmbajtje dhe trajtim paq&euml;sor, Salahudini po i p&euml;rkrahte parimet themeloren t&euml; Islamit si liria e fes&euml; dhe mbrojtja e jomusliman&euml;ve.</p>\r\n<p><strong>Kalor&euml;sia e Salahuddinit</strong><br>P&euml;r m&euml; tep&euml;r, sjellja e tij kalor&euml;siake ndaj mbretit Richard I dhe respekti i nd&euml;rsjell&euml; q&euml; pasoi pavar&euml;sisht nga rolet e tyre nd&euml;rluftuese, i dhan&euml; atij vler&euml;sime t&euml; m&euml;tejshme n&euml; vende q&euml; nuk mund ta p&euml;r&ccedil;monin at&euml;. &ldquo;Kur Rikardi s&euml;muret n&euml; rrethimin e Akr&euml;s n&euml; vitin 1192, Saladini i d&euml;rgon mjekun e tij personal Maimonides p&euml;r ta trajtuar, i d&euml;rgon akull p&euml;r ta ndihmuar t&euml; luftoj&euml; ethet dhe disa fruta sh&euml;ruese. Kur kali i Ri&ccedil;ardit vritet gjat&euml; betej&euml;s dhe mbreti anglez e gjen veten n&euml; k&euml;mb&euml; p&euml;rball&euml; gjith&euml; ushtris&euml; muslimane, musliman&euml;t e lan&euml; t&euml; ec&euml; pran&euml; gjith&euml; falang&euml;s s&euml; tyre pa sulmuar. M&euml; von&euml;, Saladini i d&euml;rgon atij dy montime t&euml; reja, n&euml; m&euml;nyr&euml; q&euml; t&euml; mos jet&euml; n&euml; disavantazh&rdquo;, shkruan Michael Hamilton Morgan n&euml; Lost History.</p>\r\n<p>Sipas historianit francez, Rene Grousset, &ldquo;&Euml;sht&euml; po aq e v&euml;rtet&euml; se bujaria [e Saladinit], devotshm&euml;ria e tij, pa fanatiz&euml;m, ajo lule e lirshm&euml;ris&euml; dhe mir&euml;sjelljes, q&euml; kishte qen&euml; modeli i kronikan&euml;ve tan&euml; t&euml; vjet&euml;r, i dha atij jo m&euml; pak popullaritet n&euml;&nbsp;<em>Frankish Syria</em>&nbsp;(Vendet kryqtare) sesa n&euml; tokat e Islamit.&rdquo;</p>\r\n<p><strong>Salahuddin Ejubi: Heroi dhe burr&euml;shtetasi i p&euml;rkushtuar mysliman</strong><br>Salahuddin Ejubi vdiq n&euml; vitin 1193 pas Krishtit n&euml; mosh&euml;n 56 vje&ccedil;are. Edhe pse ai ishte n&euml; krye t&euml; nj&euml; perandorie t&euml; madhe q&euml; shtrihej nga Egjipti n&euml; Siri, ai vet&euml; zot&euml;ronte shum&euml; pak pasuri. N&euml; koh&euml;n e vdekjes s&euml; tij, pasuria e tij p&euml;rfshinte nj&euml; kal&euml; dhe para q&euml; nuk mjaftonin as p&euml;r ta varrosur. Ai ia kishte kushtuar t&euml;r&euml; jet&euml;n e tij sh&euml;rbimit t&euml; Islamit dhe n&euml;nshtetasve t&euml; tij, duke shmangur madh&euml;shtin&euml; dhe shk&euml;lqimin q&euml; shpesh i shp&euml;rqendrojn&euml; sundimtar&euml;t. N&euml; t&euml; v&euml;rtet&euml;, ai ishte mish&euml;rimi i nj&euml; heroi t&euml; v&euml;rtet&euml; dhe nj&euml; muslimani t&euml; devotsh&euml;m./ pregatiti:&nbsp;<strong>bota-islame.com</strong></p>', 'awesome', 1, 1, 1, 1, '18-11-23', 'November', 1, 1, '2023-11-18 21:05:50', '2023-11-19 00:01:16'),
(5, 11, NULL, 1, 'TikToker-ja kristiane fillon të lexojë Kuranin dhe të falet', 'tiktoker-ja-kristiane-fillon-të-lexojë-kuranin-dhe-të-falet', 'upload/news/1782944473620943.jpg', '<p><strong>Trendi i leximit t&euml; Kuranit po fiton popullaritet n&euml; mesin e jomusliman&euml;ve n&euml; drit&euml;n e situatave aktuale.</strong></p>\r\n<p>Sot, bota p&euml;rballet me islamofobin&euml; dhe m&euml;simet islame shum&euml; t&euml; kufizuara dhe negative po transmetohen nga kultura per&euml;ndimore.</p>\r\n<p>Disa individ&euml; p&euml;rfshijn&euml; Abbey, nj&euml; zonj&euml; e krishter&euml; q&euml; kaloi n&euml;p&euml;r Kuranin e Shenjt&euml; dhe p&euml;r habin&euml; e saj, ajo gjeti p&euml;rgjigjen e nj&euml; pyetjeje q&euml; kishte k&euml;rkuar prej koh&euml;sh.</p>\r\n<p>Zbulimet, ve&ccedil;an&euml;risht t&euml; lidhura me sfondin shkencor, kan&euml; shfaqur k&euml;rkime t&euml; v&euml;rtetuara tashm&euml; n&euml; Kuranin e Shenjt&euml; mij&euml;ra vjet m&euml; par&euml; dhe i kan&euml; l&euml;n&euml; njer&euml;zit anemban&euml; globit t&euml; magjepsur nga njohurit&euml; e thella q&euml; gjenden n&euml; Librin e Shenjt&euml;.</p>\r\n<p>Libri i Shenjt&euml; i Kuranit &euml;sht&euml; i plot&euml; me fakte dhe njohuri n&euml; lidhje me &ccedil;do tem&euml; q&euml; nj&euml; individ k&euml;rkon t&euml; gjej&euml; nj&euml; p&euml;rgjigje; kjo ka b&euml;r&euml; q&euml; besimtar&euml;t e besimeve t&euml; ndryshme t&euml; eksplorojn&euml; m&euml; tej Kuranin e Shenjt&euml; p&euml;r t&euml; rritur njohurit&euml; e tyre ose p&euml;r t&euml; konfirmuar faktet e deklaruara nga shkenca.</p>\r\n<p><a href=\"https://www.tiktok.com/@abbeyhafez/video/7296452934496177439\">https://www.tiktok.com/@abbeyhafez/video/7296452934496177439</a></p>\r\n<p>P&euml;r m&euml; tep&euml;r, pasuesit e feve t&euml; ndryshme kan&euml; besime t&euml; ndryshme; nj&euml; nga besimet ka t&euml; b&euml;j&euml; me vendbanimin e p&euml;rjetsh&euml;m t&euml; besimtar&euml;ve t&euml; feve t&euml; tjera. Disa besojn&euml; se t&euml; gjith&euml;, p&euml;rve&ccedil; fes&euml; s&euml; tyre, jan&euml; t&euml; destinuar p&euml;r n&euml; ferr.</p>\r\n<p>Kurioziteti i zjarrt&euml; b&euml;ri q&euml; shum&euml; jomusliman&euml; t&euml; thelloheshin n&euml; t&euml; kuptuarit e vargjeve t&euml; Kuranit t&euml; Shenjt&euml; dhe t&euml; m&euml;sonin p&euml;r marrjen e tij n&euml; k&euml;t&euml; &ccedil;&euml;shtje.</p>\r\n<p>Koh&euml;t e fundit, Libri i Shenjt&euml; i Kuranit, shkrimi i shenjt&euml; i Islamit, nj&euml; lib&euml;r udh&euml;zues dhe nj&euml; kod i plot&euml; i jet&euml;s, ka qen&euml; nj&euml; zgjedhje n&euml; trend e lexuesve mes jomusliman&euml;ve q&euml; jan&euml; kureshtar&euml; dhe t&euml; hapur p&euml;r t&euml; m&euml;suar rreth fes&euml; Islame. Me ngjarjet aktuale n&euml; bot&euml;, shum&euml; individ&euml; i jan&euml; drejtuar Kuranit p&euml;r t&euml; k&euml;rkuar p&euml;rgjigje p&euml;r pyetjet e tyre djeg&euml;se.</p>\r\n<p>Edhe pse Kurani i Shenjt&euml; &euml;sht&euml; keqinterpretuar gjer&euml;sisht, kryesisht p&euml;rmes mediave, mesazhi i dh&euml;n&euml; n&euml; Librin e Shenjt&euml; &euml;sht&euml; ai i drejt&euml;sis&euml;, paqes dhe gjith&euml;p&euml;rfshirjes, duke zhdukur t&euml; gjitha format e negativitetit q&euml; jan&euml; lidhur me Islamin p&euml;rmes keqinterpretimit t&euml; tij.</p>\r\n<p>Nj&euml; pyetje q&euml; &ccedil;do ndjek&euml;s ka n&euml; lidhje me fen&euml; e tyre &euml;sht&euml; n&euml;se ndjek&euml;sit e feve t&euml; tjera do t&euml; hynin apo jo n&euml; Parajs&euml; p&euml;rve&ccedil; fes&euml; s&euml; tyre. Kjo p&euml;rdoruese e Tiktok me emrin Abbey Hafez k&euml;rkoi Kuranin p&euml;r t&rsquo;iu p&euml;rgjigjur pyetjes s&euml; saj pa p&euml;rgjigje prej koh&euml;sh, t&euml; cil&euml;n ajo nuk mund ta gjente n&euml; fen&euml; e saj t&euml; krishterimit.</p>\r\n<p><a href=\"https://www.tiktok.com/@abbeyhafez/video/7297700537078697247\">https://www.tiktok.com/@abbeyhafez/video/7297700537078697247</a></p>\r\n<p>Kurani i Shenjt&euml; thekson universalitetin e faljes s&euml; Zotit, pavar&euml;sisht nga besimi i nj&euml; personi. Sipas krishterimit, askush tjet&euml;r nuk do t&euml; shkonte n&euml; parajs&euml; p&euml;rve&ccedil; t&euml; krishter&euml;ve. Megjithat&euml;, me leximin e Kuranit t&euml; Shenjt&euml;, Abbey mori p&euml;rgjigjen e pyetjes s&euml; saj dhe m&euml;soi se nuk ishte e nevojshme.</p>\r\n<p><a href=\"https://www.tiktok.com/@abbeyhafez/video/7297999379632262430\">https://www.tiktok.com/@abbeyhafez/video/7297999379632262430</a></p>\r\n<p>Ajo e pa se ishte intriguese dhe inkurajuese gjetja e nj&euml; p&euml;rgjigje n&euml; Kuranin e Shenjt&euml;, t&euml; cilin ajo e kishte k&euml;rkuar p&euml;r nj&euml; koh&euml; t&euml; gjat&euml;. Kurani i Shenjt&euml; i dha asaj nj&euml; k&euml;ndv&euml;shtrim t&euml; ri mbi fet&euml;, bot&euml;n dhe bot&euml;n tjet&euml;r.</p>\r\n<p><a href=\"https://www.tiktok.com/@abbeyhafez/video/7298288917554400542\">https://www.tiktok.com/@abbeyhafez/video/7298288917554400542</a></p>\r\n<p>Jomysliman&euml;t n&euml; t&euml; gjith&euml; bot&euml;n jan&euml; k&euml;naqur me studimin e Kuranit t&euml; Shenjt&euml;, ose duke u bashkuar me klubet e leximit t&euml; librave n&euml; Mosmarr&euml;veshje ose duke b&euml;r&euml; studimin e tyre.</p>\r\n<p><a href=\"https://www.tiktok.com/@abbeyhafez/video/7298294200536239391\">https://www.tiktok.com/@abbeyhafez/video/7298294200536239391</a></p>\r\n<p>Udh&euml;timi i k&euml;tij Tiktoker nuk &euml;sht&euml; i izoluar; shum&euml; ndjek&euml;s t&euml; besimeve t&euml; ndryshme kan&euml; eksploruar Kuranin e Shenjt&euml; dhe gjat&euml; rrug&euml;timit t&euml; tyre, ata kan&euml; gjetur mesazhe t&euml; shumta q&euml; promovojn&euml; paqen, gjith&euml;p&euml;rfshirjen dhe toleranc&euml;n.</p>\r\n<p>P&euml;r ta p&euml;rmbledhur, kjo p&euml;rdoruese eksploroi Kuranin e Shenjt&euml; dhe libri i dha asaj p&euml;rgjigje dhe m&euml; shum&euml; njohuri p&euml;r tema t&euml; ndryshme. &Euml;sht&euml; nj&euml; kujtes&euml; e fuqishme e r&euml;nd&euml;sis&euml; s&euml; t&euml; kuptuarit t&euml; v&euml;rtet&euml; t&euml; Kuranit dhe se si ai thekson universalitetin e m&euml;shir&euml;s s&euml; Zotit dhe p&euml;rfshirjen e &ccedil;do besimtari nga besimet e tjera.</p>\r\n<p>Besimtar&euml;t e besimeve t&euml; ndryshme e kan&euml; gjetur Kuranin duke iu p&euml;rgjigjur pyetjeve t&euml; ndryshme dhe duke v&euml;rtetuar fakte dhe zbulime t&euml; b&euml;ra nga shkenc&euml;tar&euml;t sot, t&euml; cilat n&euml; Kuran jan&euml; dh&euml;n&euml; mij&euml;ra vjet m&euml; par&euml;, duke shfaqur urt&euml;sin&euml; dhe r&euml;nd&euml;sin&euml; q&euml; mbart ky Lib&euml;r i Shenjt&euml;./&nbsp;<strong>bota-islame.com</strong></p>', 'awesome', 1, 1, 1, 1, '18-11-23', 'November', 1, 3, '2023-11-18 21:59:12', '2023-11-20 18:00:29');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_name` varchar(255) NOT NULL,
  `subcategory_slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `category_id`, `subcategory_name`, `subcategory_slug`, `created_at`, `updated_at`) VALUES
(3, 3, 'Nga Vendi', 'nga-vendi', NULL, NULL),
(4, 3, 'Nga Rajoni', 'nga-rajoni', NULL, NULL),
(5, 3, 'Nga Bota', 'nga-bota', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `status`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', 'active', NULL, '$2y$12$BMQ9nVN/j0m97Z/S/jo0ledAtONwDFnKAYwekQ8sBUK/.2um9KMOa', NULL, NULL, NULL),
(2, 'User', 'user@gmail.com', 'user', 'active', NULL, '$2y$12$fLfmaMxltzS6C5BTc2cOA.G7fQT9A6FYOYTPOr/3XHIuK.WjyElxO', NULL, NULL, '2023-11-14 09:39:43');

-- --------------------------------------------------------

--
-- Table structure for table `video_galleries`
--

CREATE TABLE `video_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `video_image` varchar(255) DEFAULT NULL,
  `video_title` varchar(255) DEFAULT NULL,
  `video_url` varchar(255) DEFAULT NULL,
  `post_date` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `live_tvs`
--
ALTER TABLE `live_tvs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `video_galleries`
--
ALTER TABLE `video_galleries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `live_tvs`
--
ALTER TABLE `live_tvs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `video_galleries`
--
ALTER TABLE `video_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
