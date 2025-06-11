-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2025 at 05:40 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `desc` longtext NOT NULL,
  `img` varchar(255) NOT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `status` varchar(255) NOT NULL,
  `publish_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `user_id`, `category_id`, `title`, `slug`, `desc`, `img`, `views`, `status`, `publish_date`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Renyahnya Kripik Klotak', 'renyahnya-kripik-klotak', '<p><strong>Klatak Tipis: Renyahnya Tradisi dari Karekan yang Tak Pernah Usang</strong></p>\r\n\r\n<p>Di balik bunyi kletak renyah yang memikat, &ldquo;klatak tipis&rdquo; atau kripik klatak adalah camilan legendaris yang sudah melekat erat dalam kehidupan masyarakat Desa Karekan, Kecamatan Pagentan, Banjarnegara. Berbahan dasar singkong yang diiris tipis dan digoreng hingga kering sempurna, camilan ini bukan hanya sekadar pelengkap minum teh, melainkan bagian dari identitas kuliner khas lereng Gunung Lumbung.</p>\r\n\r\n<p><strong>Dari Singkong ke Sensasi Renyah</strong></p>\r\n\r\n<p>Klatak tipis lahir dari kreativitas warga desa dalam mengolah hasil bumi yang melimpah, terutama singkong. Ketika panen berlimpah, singkong-singkat tak cukup hanya dikukus atau direbus. Maka hadirlah kripik klatak, singkong diiris sangat tipis, dibumbui dengan garam atau rempah sederhana, lalu digoreng perlahan dengan minyak panas hingga kering dan garing.</p>\r\n\r\n<p>Hasilnya adalah kripik dengan tekstur super renyah, rasa gurih yang membekas di lidah, dan aroma khas yang menggugah selera. Camilan ini menjadi teman setia saat santai, bekal perjalanan, hingga suguhan wajib saat tamu datang ke rumah.</p>\r\n\r\n<p><strong>Renyah yang Tak Pernah Membosankan</strong></p>\r\n\r\n<p>Yang membuat klatak tipis begitu istimewa bukan hanya kerenyahannya, tapi juga cara pembuatannya yang masih banyak dilakukan secara tradisional. Beberapa warga Karekan masih menggunakan alat manual untuk mengiris singkong, memastikan tiap potongannya setipis mungkin untuk menghasilkan bunyi kletak yang memuaskan saat dikunyah.</p>\r\n\r\n<p>Ada pula variasi rasa yang mulai berkembang, seperti klatak pedas, manis-gula jawa, atau berbumbu balado, namun rasa asli, gurih ringan tanpa tambahan macam-macam, tetap jadi primadona.</p>\r\n\r\n<p><strong>Camilan, Warisan, dan Peluang</strong></p>\r\n\r\n<p>Di tengah modernitas dan banjirnya camilan instan, klatak tipis tetap bertahan sebagai produk UMKM yang dicintai dan dicari. Tak sedikit warga Desa Karekan yang menjadikan produksi kripik klatak sebagai usaha rumahan. Dibungkus dalam kemasan sederhana atau dibuat lebih modern dengan label dan brand lokal, kripik ini pelan tapi pasti menembus pasar di luar Pagentan hingga kota-kota besar.</p>\r\n\r\n<p><strong>Lebih dari Sekadar Kripik</strong></p>\r\n\r\n<p>Klatak tipis menyimpan lebih dari rasa. Ia menyimpan kenangan, anak-anak yang membantu mengupas singkong, suara wajan besar di dapur tua, dan semangat gotong royong saat mengemas hasil produksi untuk dijual ke pasar. Di Karekan, setiap kripik klatak adalah hasil dari ketekunan dan semangat warga desa dalam merawat tradisi dan mengolah potensi lokal.</p>', '6837114497748.webp', 13, '1', '2025-02-12', '2025-02-12 07:23:51', '2025-05-28 06:36:53'),
(7, 1, 1, 'Mendoan Renyah Gurih', 'mendoan-renyah-gurih', '<p><strong>Mendoan: Renyah di Luar, Lembut di Dalam, Cita Rasa Banjarnegara yang Tak Pernah Gagal</strong></p>\r\n\r\n<p>Di Karekan, mendoan bukan sekadar gorengan. Tempe tipis berbalut adonan bumbu, digoreng cepat menghasilkan perpaduan renyah dan lembut, jadi sajian khas dari lereng Gunung Lumbung.</p>\r\n\r\n<p><strong>Asal Usul yang Merakyat</strong></p>\r\n\r\n<p>Mendoan berasal dari kata &ldquo;mendo&rdquo; dalam bahasa Banyumasan, yang berarti &quot;setengah matang&quot;. Filosofi ini menjadi dasar cara memasaknya, digoreng cepat di minyak panas, lalu segera diangkat, menciptakan tekstur yang khas, tidak terlalu garing, tapi tidak juga lembek. Di desa Karekan, mendoan telah lama menjadi camilan favorit para petani sepulang dari ladang, atau sajian pelengkap teh hangat di sore hari.</p>\r\n\r\n<p><strong>Cita Rasa yang Tak Lekang oleh Waktu</strong></p>\r\n\r\n<p>Apa yang membuat mendoan begitu disukai? Jawabannya terletak pada kesederhanaannya. Bumbu halus seperti bawang putih, ketumbar, dan garam dicampur dalam adonan tepung terigu dan kadang sedikit tepung beras untuk memberi tekstur ringan. Daun bawang segar menambah aroma harum. Saat digoreng, irisan tempe menyerap bumbu dan menciptakan sensasi gurih yang khas, terutama jika disajikan dengan sambal kecap pedas yang menggigit.</p>\r\n\r\n<p><strong>Ikon Kuliner Pagentan yang Mendunia</strong></p>\r\n\r\n<p>Meski mendoan dikenal luas di wilayah Banyumas, versi dari Pagentan, terutama buatan tangan-tangan ahli di Karekan, memiliki cita rasa tersendiri. Tipisnya tempe, teknik adonan yang pas, serta cara penggorengan yang cepat dan presisi membuatnya beda dari mendoan kebanyakan. Bahkan, dalam beberapa festival kuliner lokal, mendoan Karekan kerap mencuri perhatian pengunjung karena rasanya yang autentik dan tampilannya yang menggoda.</p>\r\n\r\n<p><strong>Simbol Kebersamaan di Meja Makan</strong></p>\r\n\r\n<p>Mendoan bukan hanya soal makanan. Ia adalah simbol kebersamaan. Saat hujan turun dan angin dingin dari Gunung Lumbung menyapu desa, tidak ada yang lebih pas selain sepiring mendoan hangat yang dimakan ramai-ramai di teras rumah. Tawa, cerita, dan cocolan sambal menjadi pelengkap kenikmatan yang tak ternilai harganya.</p>\r\n\r\n<p><strong>Penutup</strong></p>\r\n\r\n<p>Bagi kamu yang belum pernah mencoba mendoan khas Karekan, bersiaplah untuk jatuh cinta pada gorengan yang satu ini. Ia mungkin tampak sederhana, tapi rasanya penuh kejutan, seperti cerita-cerita lama yang diceritakan sambil menyeruput teh dan mencocol tempe goreng ke dalam sambal.<br />\r\nSiap merasakan gurihnya tradisi dari lereng Gunung Lumbung?</p>', '683715fe59667.webp', 17, '1', '2025-03-18', '2025-03-18 03:21:03', '2025-05-28 07:01:29'),
(12, 1, 1, 'Bakso Karekan', 'bakso-karekan', '<p><strong>Bakso Karekan: Hangatnya Semangkuk Kenikmatan dari Dingin Lereng Gunung Lumbung</strong></p>\r\n\r\n<p>Di desa Karekan, Kecamatan Pagentan, Banjarnegara, yang terkenal dengan udara sejuk dan pemandangan hijau di kaki Gunung Lumbung, semangkuk bakso bukan sekadar makanan. Ia adalah penghangat, penghibur, dan sahabat sejati di setiap suasana. Terbuat dari daging pilihan yang digiling halus, dibentuk bulat-bulat sempurna, lalu disajikan dalam kuah kaldu bening yang gurih dan hangat, bakso Karekan menyajikan cita rasa yang jujur dan tulus, seperti keramahan orang-orang desanya.</p>\r\n\r\n<p><strong>Dari Warung Pinggir Jalan ke Hati Banyak Orang</strong></p>\r\n\r\n<p>Bakso di Karekan tidak hadir dengan konsep restoran besar. Justru, warung-warung kecil dengan gerobak kayu, aroma kaldu mengepul, dan bangku plastik sederhana adalah tempat lahirnya bakso yang paling dicari. Beberapa pedagang bahkan sudah berjualan puluhan tahun, dikenal dari generasi ke generasi. Ada bakso urat yang kenyal, bakso halus yang lembut, hingga varian isi seperti bakso telur dan bakso mercon yang mulai hadir mengikuti selera kekinian, semuanya tetap berpijak pada rasa dasar yang khas, gurih, mantap, dan bikin ketagihan.</p>\r\n\r\n<p><strong>Rahasia di Balik Kuah yang Bening Namun Kaya Rasa</strong></p>\r\n\r\n<p>Bukan cuma pentolnya yang jadi bintang. Kuah bakso Karekan dibuat dari rebusan tulang sapi yang dimasak perlahan selama berjam-jam, ditambah bawang putih goreng, seledri, dan sedikit merica. Hasilnya, kaldu bening yang hangat di tenggorokan, tapi kaya rasa di lidah. Saat disantap bersama mie kuning, bihun, dan sayuran rebus, setiap suapan menghadirkan kombinasi tekstur dan rasa yang harmonis.</p>\r\n\r\n<p><strong>Harga Bersahabat, Rasa Membekas</strong></p>\r\n\r\n<p>Salah satu kekuatan bakso Karekan adalah harganya yang tetap merakyat. Dengan sepuluh hingga lima belas ribu rupiah, kamu bisa mendapatkan semangkuk bakso lengkap yang membuat kenyang sekaligus bahagia. Bahkan, tak jarang pedagang menambahkan ekstra kuah atau kerupuk secara cuma-cuma, sebagai bentuk kehangatan khas desa.</p>\r\n\r\n<p><strong>Lebih dari Sekadar Jajanan</strong></p>\r\n\r\n<p>Bagi banyak warga Karekan, makan bakso bukan sekadar pengisi perut. Ia adalah bagian dari rutinitas mingguan, perayaan kecil setelah panen, hingga cara sederhana untuk merayakan kebersamaan bersama teman dan keluarga. Suara mangkuk berdenting, asap mengepul dari mangkok, dan cocolan sambal serta kecap adalah pemandangan yang akrab dan dirindukan.</p>\r\n\r\n<p><strong>Penutup</strong></p>\r\n\r\n<p>Bakso Karekan adalah bukti bahwa kelezatan tak harus mewah. Dari dapur sederhana dan resep yang diwariskan, tercipta semangkuk kehangatan yang bisa menyatukan siapa saja di meja makan.<br />\r\nSudah siap menyuap kenikmatan dari desa di lereng Gunung Lumbung?</p>', '68371861e13ba.webp', 6, '1', '2025-04-03', '2025-04-03 00:38:02', '2025-05-28 07:06:28'),
(13, 1, 1, 'Bubur Aren Lumbung', 'bubur-aren-lumbung', '<p><strong>Bubur Gula Jawa: Rasa Tradisi dari Lereng Gunung Lumbung</strong></p>\r\n\r\n<p>Bubur Gula Jawa adalah sajian khas yang menyimpan kehangatan dan sejarah panjang dari Desa Karekan, sebuah desa di lereng Gunung Lumbung, Kecamatan Pagentan, Kabupaten Banjarnegara. Dengan cita rasa manis yang membelai lidah dan aroma gula jawa yang khas, bubur ini bukan sekadar makanan, melainkan simbol kehangatan keluarga, tradisi yang hidup, dan warisan kuliner yang mengakar kuat di masyarakat setempat.</p>\r\n\r\n<p><strong>Lezatnya Rasa, Dalamnya Makna</strong></p>\r\n\r\n<p>Bubur Gula Jawa dibuat dari bahan-bahan sederhana seperti tepung beras, santan, dan tentu saja gula jawa asli dari nira pohon kelapa yang dimasak perlahan hingga menjadi kental dan harum. Meski tampak sederhana, setiap sendok bubur menyimpan cerita, tentang tangan-tangan ibu yang terampil di dapur, tentang anak-anak yang sabar menanti semangkuk hangat sepulang sekolah, dan tentang tradisi yang diwariskan dari generasi ke generasi.</p>\r\n\r\n<p><strong>Asal Usul dari Perbukitan Pagentan</strong></p>\r\n\r\n<p>Konon, bubur ini mulai dikenal sebagai makanan pengisi tenaga bagi para petani dan pemetik nira di sekitar Gunung Lumbung. Cuaca yang sejuk dan medan yang menanjak membuat bubur gula jawa menjadi hidangan yang cocok, hangat, mengenyangkan, dan mudah dicerna. Dari sana, resep ini menyebar ke berbagai pelosok desa, namun tetap membawa ciri khas Karekan yang tak tergantikan, manisnya yang tidak berlebihan, dengan tekstur lembut yang memanjakan lidah.</p>\r\n\r\n<p><strong>Tradisi yang Terjaga di Tengah Modernitas</strong></p>\r\n\r\n<p>Meski zaman terus berubah dan makanan instan semakin merajalela, bubur gula jawa tetap memiliki tempat istimewa di hati warga Karekan dan sekitarnya. Bahkan, di beberapa acara adat dan momen penting seperti syukuran panen atau kenduri, bubur ini hampir selalu hadir sebagai simbol rasa syukur dan kebersamaan. Di sinilah kekuatan sebenarnya dari kuliner tradisional, bukan hanya soal rasa, tapi juga tentang makna dan memori yang menyertainya.</p>\r\n\r\n<p><strong>Kesederhanaan yang Membuat Rindu</strong></p>\r\n\r\n<p>Apa yang membuat bubur gula jawa begitu istimewa bukan hanya bahan atau cara membuatnya, melainkan perasaan yang hadir saat menikmatinya. Kehangatan semangkuk bubur di pagi yang berkabut, senyum nenek yang menyendokkan santan kental ke mangkuk, dan kenangan masa kecil yang perlahan muncul di setiap gigitan, itulah kekuatan kuliner tradisional yang tak lekang oleh waktu.</p>\r\n\r\n<p><strong>Penutup</strong></p>\r\n\r\n<p>Jika kamu mencari cita rasa yang bukan hanya enak tapi juga penuh makna, bubur gula jawa dari Desa Karekan adalah jawabannya. Sebuah hidangan sederhana yang mengajarkan kita untuk menghargai warisan, menyatu dengan alam, dan merayakan hidup melalui makanan yang dibuat dengan hati.<br />\r\nSudah siap mencicipi rasa dari lereng Gunung Lumbung?</p>', '68371837ce926.webp', 26, '1', '2025-04-03', '2025-04-03 00:49:03', '2025-05-28 07:05:47'),
(19, 1, 1, 'Sepiring Sederhana', 'sepiring-sederhana', '<p><strong>Bubur Gula Jawa: Rasa Tradisi dari Lereng Gunung Lumbung</strong></p>\r\n\r\n<p>Bubur Gula Jawa adalah sajian khas yang menyimpan kehangatan dan sejarah panjang dari Desa Karekan, sebuah desa di lereng Gunung Lumbung, Kecamatan Pagentan, Kabupaten Banjarnegara. Dengan cita rasa manis yang membelai lidah dan aroma gula jawa yang khas, bubur ini bukan sekadar makanan, melainkan simbol kehangatan keluarga, tradisi yang hidup, dan warisan kuliner yang mengakar kuat di masyarakat setempat.</p>\r\n\r\n<p><strong>Lezatnya Rasa, Dalamnya Makna</strong></p>\r\n\r\n<p>Bubur Gula Jawa diracik dari bahan-bahan sederhana seperti tepung beras, santan kelapa, dan tentu saja gula jawa asli yang dibuat dari nira kelapa yang dimasak perlahan hingga kental, legit, dan harum. Di balik kesederhanaan rasanya, setiap sendok bubur menyimpan cerita, tentang tangan-tangan ibu yang cekatan di dapur, tentang anak-anak yang sabar menanti semangkuk hangat sepulang sekolah, dan tentang tradisi yang terus diwariskan turun-temurun.</p>\r\n\r\n<p><strong>Asal Usul dari Perbukitan Pagentan</strong></p>\r\n\r\n<p>Konon, bubur ini dulunya merupakan bekal para petani dan pemanjat pohon nira yang bekerja sejak pagi hari di kawasan Gunung Lumbung. Cuaca yang sejuk dan jalur menanjak membuat bubur gula jawa menjadi sajian yang pas: hangat, mengenyangkan, dan mudah disajikan. Dari sana, kelezatannya menyebar ke desa-desa sekitar, namun tetap mempertahankan ciri khas Karekan yang lembut dan tidak terlalu manis, pas di lidah siapa pun yang mencicipinya.</p>\r\n\r\n<p><strong>Tradisi yang Terjaga di Tengah Modernitas</strong></p>\r\n\r\n<p>Meskipun zaman semakin maju dan makanan cepat saji kian mendominasi, bubur gula jawa tetap bertahan sebagai sajian yang dicintai. Di tengah segala modernitas, ia tetap hadir dalam berbagai acara adat, kenduri, hingga syukuran panen, mengisi perut sekaligus menghangatkan suasana. Tradisi ini bukan sekadar soal rasa, melainkan juga tentang nilai, kebersamaan, dan ingatan masa lalu yang melekat di tiap mangkuknya.</p>\r\n\r\n<p><strong>Kesederhanaan yang Membuat Rindu</strong></p>\r\n\r\n<p>Yang membuat bubur gula jawa begitu istimewa bukan hanya resep atau takarannya, melainkan juga perasaan yang menyertainya. Kehangatan semangkuk bubur di pagi hari yang berkabut, tangan nenek yang menuangkan santan kental dengan senyuman, serta kenangan masa kecil yang perlahan bangkit di tiap suapan, semuanya menjadikan bubur ini lebih dari sekadar makanan, melainkan pengalaman yang menyentuh hati.</p>', '6837107025a64.webp', 16, '1', '2025-04-15', '2025-04-14 18:22:25', '2025-05-28 07:02:47'),
(20, 3, 8, 'Dawet Ayu Banjarnegara', 'dawet-ayu-banjarnegara', '<p><strong>Dawet Ayu: Manisnya Kesegaran dari Tanah Banjarnegara</strong></p>\r\n\r\n<p>Di tengah teriknya siang atau sejuknya sore di Banjarnegara, satu minuman tradisional selalu mampu menggoda lidah dan menghadirkan senyum: dawet ayu. Bukan sekadar pelepas dahaga, dawet ini adalah wujud keseharian, kehangatan tradisi, dan keahlian tangan-tangan perempuan desa yang membuatnya dengan penuh cinta. Dengan cendol hijau kenyal, kuah santan gurih, dan gula merah cair yang harum manis, setiap tegukan dawet ayu menghadirkan rasa yang mengingatkan pada rumah dan keramahan khas pegunungan.</p>\r\n\r\n<p><strong>Dari Ember ke Gerobak, Kini ke Festival</strong></p>\r\n\r\n<p>Dawet ayu awalnya dijual dengan cara dipikul keliling oleh ibu-ibu kampung, membawa ember besar berisi bahan-bahan segar dan mangkuk-mangkuk kecil dari seng. Kini, kamu bisa menemukannya di gerobak pinggir jalan, pasar tradisional, hingga festival budaya. Namun rasanya tetap setia pada yang dulu: manis lembut, sedikit gurih, dan sejuk saat menyentuh tenggorokan. Tidak ada tambahan pengawet atau pewarna buatan, cendolnya pun dibuat dari tepung beras asli dan daun pandan alami.</p>\r\n\r\n<p><strong>Bukan Sekadar Minuman, Tapi Cerita</strong></p>\r\n\r\n<p>Di balik semangkuk dawet ayu, tersimpan cerita tentang kerja keras, tentang ibu-ibu yang bangun pagi demi membuat adonan cendol, memasak santan, dan merebus gula merah. Dawet menjadi bagian dari hidup masyarakat: dinikmati saat istirahat siang di sawah, disajikan di hajatan pernikahan, hingga dijadikan suguhan dalam acara adat Banjarnegara. Tak jarang pula dawet menjadi lambang keramahtamahan dalam menyambut tamu.</p>\r\n\r\n<p><strong>Kesegaran yang Merakyat</strong></p>\r\n\r\n<p>Satu hal yang tak pernah berubah dari dawet ayu adalah harganya yang terjangkau. Dengan hanya lima ribu hingga tujuh ribu rupiah, kamu bisa mendapatkan satu gelas penuh kenikmatan yang menyegarkan dan mengenyangkan. Ditambah es batu serut, dawet ayu menjadi oase di tengah kesibukan atau pengantar nostalgia ke masa kecil.</p>\r\n\r\n<p><strong>Penutup</strong></p>\r\n\r\n<p>Dawet ayu adalah bukti bahwa kelezatan bisa hadir dari bahan-bahan paling sederhana. Di tangan warga Banjarnegara, tradisi ini hidup, dirawat, dan terus disajikan dengan bangga.<br />\r\nSudah siap menyeruput manisnya warisan dari dataran tinggi Jawa Tengah?</p>', '6837232e42302.webp', 3, '1', '2025-05-28', '2025-05-28 07:39:35', '2025-05-29 03:27:10'),
(21, 2, 9, 'Papaya Dieng', 'papaya-dieng', '<p><strong>Carica Dieng: Buah Surga dari Negeri di Atas Awan</strong></p>\r\n\r\n<p>Di dataran tinggi Dieng yang sejuk dan berkabut, ada satu buah yang tak bisa ditemukan di sembarang tempat: carica. Sekilas mirip pepaya kecil, namun begitu dicicipi, rasanya sungguh berbeda, lebih segar, lebih manis, dan meninggalkan kesan eksotis yang hanya bisa didapat dari tanah setinggi 2.000 meter di atas permukaan laut. Carica bukan sekadar buah, melainkan simbol dari keunikan alam Dieng dan kearifan lokal yang menjadikannya oleh-oleh wajib bagi para pelancong.</p>\r\n\r\n<p><strong>Dari Tanah Tinggi ke Botol Kaca</strong></p>\r\n\r\n<p>Carica hanya tumbuh subur di Dieng karena membutuhkan suhu rendah dan tanah vulkanik. Buahnya dipetik ketika matang sempurna, lalu diolah dengan hati-hati menjadi manisan segar. Potongan carica dimasukkan ke dalam larutan sirup manis, lalu dikemas dalam botol atau cup plastik. Proses ini bukan hanya untuk memperpanjang masa simpan, tapi juga untuk mempertahankan tekstur khas carica: kenyal, berserat lembut, dan meledak di mulut dengan rasa tropis yang unik.</p>\r\n\r\n<p><strong>Cita Rasa yang Tak Tertandingi</strong></p>\r\n\r\n<p>Tidak seperti pepaya biasa yang lembek dan manis polos, carica punya keasaman halus yang menyegarkan. Saat dikunyah, ada sensasi renyah yang membuatnya cocok disantap kapan saja, sebagai pencuci mulut, camilan sore, atau teman teh hangat di beranda penginapan. Sirupnya pun tidak terlalu manis, justru menambah dimensi rasa yang membuat carica sulit dilupakan.</p>\r\n\r\n<p><strong>Warisan Alam, Dikelola dengan Bijak</strong></p>\r\n\r\n<p>Masyarakat Dieng telah lama membudidayakan carica dengan sistem pertanian yang menjaga kelestarian lingkungan. Tidak heran, carica bukan hanya menjadi produk kuliner, tapi juga bagian dari ekonomi lokal yang menopang banyak keluarga petani. Usaha kecil dan menengah bermunculan, mengemas carica menjadi produk yang menarik tanpa menghilangkan cita rasa aslinya.</p>\r\n\r\n<p><strong>Penutup</strong></p>\r\n\r\n<p>Carica Dieng adalah bukti bahwa alam punya caranya sendiri untuk menghadirkan keajaiban. Dari lereng gunung berkabut, lahirlah buah langka yang tak hanya enak, tapi juga membawa cerita tentang ketinggian, ketekunan, dan rasa syukur.<br />\r\nSudah siap mencicipi manis segarnya negeri di atas awan?</p>', '683723a10ad2e.webp', 2, '1', '2025-05-28', '2025-05-28 07:44:33', '2025-05-28 07:54:27'),
(22, 4, 14, 'Timlo Solo', 'timlo-solo', '<p><strong>Timlo Solo: Hangatnya Kehangatan dalam Semangkuk Kenangan</strong></p>\r\n\r\n<p>Di kota Solo yang dikenal dengan kelembutan budaya dan keramahan penduduknya, ada satu hidangan yang selalu hadir di meja makan keluarga maupun warung pinggir jalan: timlo. Sekilas terlihat sederhana, kuah bening, suwiran ayam, telur pindang, sosis solo, dan potongan ati ampela, namun di balik tampilannya yang bersahaja, tersembunyi kelezatan yang menyentuh hati. Timlo bukan hanya makanan, ia adalah pelukan hangat dalam bentuk semangkuk sajian.</p>\r\n\r\n<p><strong>Lahir dari Tradisi, Tumbuh Bersama Kota</strong></p>\r\n\r\n<p>Timlo telah lama menjadi bagian dari kuliner Solo, dipercaya merupakan adaptasi dari sup gaya Tionghoa yang dipadukan dengan selera lokal. Di tangan para juru masak Solo, timlo menjelma menjadi comfort food sejati. Dihidangkan dengan nasi hangat atau dinikmati begitu saja, makanan ini cocok disantap pagi hari, saat hujan turun, atau kapan saja kamu ingin merasakan ketenangan.</p>\r\n\r\n<p><strong>Kuah Bening yang Penuh Rasa</strong></p>\r\n\r\n<p>Meski tampil bening, kuah timlo penuh dengan cita rasa yang dalam. Dibuat dari rebusan ayam kampung dan rempah-rempah seperti bawang putih, jahe, dan pala, kuahnya terasa ringan namun tetap gurih. Dipadu dengan sosis solo (yang unik karena berisi telur dan dibungkus dadar tipis), telur pindang, serta potongan ati ampela, setiap sendoknya menghadirkan keseimbangan rasa yang khas dan menggugah selera.</p>\r\n\r\n<p><strong>Warung Kecil, Rasa Besar</strong></p>\r\n\r\n<p>Timlo bisa ditemukan di berbagai sudut kota Solo, dari warung legendaris di Pasar Gede hingga rumah makan keluarga. Harga yang terjangkau dan penyajian yang cepat membuatnya disukai semua kalangan, dari pelajar, pekerja, hingga wisatawan. Bahkan, banyak yang datang kembali ke Solo hanya untuk menyantap semangkuk timlo yang tak terlupakan.</p>\r\n\r\n<p><strong>Penutup</strong></p>\r\n\r\n<p>Timlo Solo adalah bukti bahwa kelezatan tak selalu datang dari bumbu yang rumit atau tampilan yang mewah. Dalam kesederhanaannya, timlo menyimpan kehangatan, tradisi, dan rasa yang tulus.<br />\r\nSudah siap menyeruput kenangan dari jantung budaya Jawa?</p>', '683723d08fe18.webp', 4, '1', '2025-05-28', '2025-05-28 07:51:15', '2025-05-29 03:29:40'),
(23, 8, 15, 'Lumpia Semarang', 'lumpia-semarang', '<p><strong>Lumpia Semarang: Renyahnya Sejarah dalam Balutan Rasa</strong></p>\r\n\r\n<p>Di tengah hiruk-pikuk Kota Semarang yang kaya akan budaya dan warisan Tionghoa, ada satu camilan legendaris yang telah menjadi ikon kota ini: lumpia. Sekilas, ia tampak seperti kudapan sederhana&mdash;kulit tipis berwarna keemasan yang digoreng renyah, dengan isi rebung, telur, dan kadang udang atau ayam. Namun di balik kerenyahannya, lumpia menyimpan cerita panjang tentang akulturasi, cinta, dan cita rasa yang melegenda.</p>\r\n\r\n<p><strong>Perpaduan Dua Budaya, Lahirkan Cita Rasa Baru</strong></p>\r\n\r\n<p>Lumpia Semarang lahir dari pertemuan budaya Jawa dan Tionghoa, yang melebur dalam sebuah resep turun-temurun sejak abad ke-19. Seorang keturunan Tionghoa dan pasangannya yang asli Semarang menyatukan teknik memasak oriental dengan bahan-bahan lokal. Hasilnya? Sebuah hidangan khas yang tak hanya enak, tapi juga menjadi simbol keberagaman yang harmonis.</p>\r\n\r\n<p><strong>Isi Rebung yang Tak Tergantikan</strong></p>\r\n\r\n<p>Apa yang membuat lumpia Semarang berbeda? Rebungnya. Irisan rebung muda yang diolah hingga tak berbau langu menjadi isian utama, dipadukan dengan telur orak-arik, udang cincang, atau suwiran ayam. Dibungkus dengan kulit tipis buatan tangan lalu digoreng hingga keemasan, setiap gigitan menghadirkan sensasi gurih, renyah, dan sedikit manis yang sulit dilupakan.</p>\r\n\r\n<p><strong>Dari Gang Kecil hingga Oleh-Oleh Legendaris</strong></p>\r\n\r\n<p>Lumpia bisa kamu temukan di berbagai sudut Semarang&mdash;dari penjaja kaki lima di dekat pasar, hingga toko lumpia yang telah berdiri puluhan tahun dan tak pernah sepi pembeli. Banyak wisatawan menjadikan lumpia sebagai oleh-oleh wajib. Bahkan, beberapa toko mengemas lumpia mereka dalam kemasan khusus agar bisa bertahan dalam perjalanan jauh, membawa sepotong Semarang ke seluruh penjuru negeri.</p>\r\n\r\n<p><strong>Penutup</strong></p>\r\n\r\n<p>Lumpia Semarang bukan hanya sekadar camilan, ia adalah saksi bisu perjalanan sejarah, bukti manisnya perpaduan budaya, dan simbol kota yang tak pernah kehilangan rasa.<br />\r\nSudah siap menikmati sejarah yang dibalut renyah dalam setiap gigitannya?</p>', '683725de0efdb.webp', 0, '1', '2025-05-28', '2025-05-28 08:04:00', '2025-05-28 08:04:00');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Karekan', 'karekan', '2025-02-10 06:12:59', '2025-05-14 19:26:34'),
(8, 'Banjar', 'banjar', '2025-02-10 23:17:33', '2025-05-14 19:27:23'),
(9, 'Dieng', 'dieng', '2025-02-10 23:17:40', '2025-05-14 19:36:38'),
(14, 'Solo', 'solo', '2025-04-02 10:10:36', '2025-05-14 19:38:46'),
(15, 'Semarang', 'semarang', '2025-04-03 00:13:23', '2025-05-14 19:38:34');

-- --------------------------------------------------------

--
-- Table structure for table `configs`
--

CREATE TABLE `configs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `value` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `configs`
--

INSERT INTO `configs` (`id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 'logo', 'http://127.0.0.1:8000/front/img/logo.jpg', NULL, '2025-04-03 00:05:53'),
(2, 'blogname', 'BacaYuk', NULL, '2025-04-02 20:48:18'),
(3, 'title', 'Welcome to BacaYuk', NULL, '2025-04-02 09:57:19'),
(4, 'caption', 'Eksplorasi cita rasa khas Banjarnegara', NULL, '2025-05-18 02:57:38'),
(5, 'ads_widget', 'https://nichegamer.com/wp-content/uploads/2023/09/McDonalds-Japan-Anime-Ad-2023-Gif.gif', NULL, '2025-04-02 22:53:01'),
(6, 'ads_header', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSu8rpk_zARh0fJFL3mlHdnSF8zeouG9RbCcw&s', NULL, '2025-04-02 23:49:54'),
(8, 'ads_footer', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSu8rpk_zARh0fJFL3mlHdnSF8zeouG9RbCcw&s', NULL, '2025-04-02 23:50:01'),
(9, 'phone', '082223355351', NULL, NULL),
(10, 'email', 'yoo.com', NULL, '2025-04-02 23:54:33'),
(11, 'facebook', 'facebook.com', NULL, NULL),
(12, 'instagram', 'instagram.com', NULL, NULL),
(13, 'youtube', 'youtube.com', NULL, NULL),
(14, 'footer', 'CUNY', NULL, '2025-05-14 19:16:52');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2025_02_10_035840_create_categories_table', 1),
(7, '2025_02_10_035845_create_articles_table', 2),
(8, '2014_10_12_100000_create_password_resets_table', 3),
(9, '2025_04_02_154753_create_configs_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(2) NOT NULL DEFAULT '2',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hasim', 'dul.hasim2@smk.belajar.id', NULL, '$2y$12$VMyKbPJgAAAbG.oO9qBWdONJMUphTDVo6/wSs.oEhy6QboWp6vKjO', '1', 'EuAKC5tcT9JeHfpBR1vce7d2EIU5k1mRqkzrYpcQCIxkBD9f8Yv999ljT5c2', '2025-03-19 18:32:37', '2025-03-19 18:32:37'),
(2, 'Slim Shady', 'Slim@gmail.com', '2025-03-20 09:46:30', '12345678', '2', '12345678', '2025-03-20 09:46:30', '2025-03-20 09:46:30'),
(3, 'Migu Dayou', 'migu222@gmail.com', '2025-03-20 10:04:28', '12345677', '2', '12345677', '2025-03-20 10:04:29', '2025-03-20 10:04:29'),
(4, '50cent', '50cent@gmail.com', '2025-03-20 10:05:43', '12345666', '2', '12345666', '2025-03-20 10:05:43', '2025-03-20 10:05:43'),
(7, 'Ari chan', 'aria123@gmail.com', NULL, '$2y$12$FgiKIboGsBIGO73zGTaF3OnzKSMsiuRezXrcHNjb35sdSeAgk9uge', '2', NULL, '2025-03-20 17:36:41', '2025-03-20 17:36:41'),
(8, 'Otsuka', 'otsuka@gmail.com', NULL, '$2y$12$fMSna4B/GnONH4NnRbIXF.OUCJDPrVyIHbj4exm/dXYMH4qJUfNp2', '2', 'kJPOg3V9OIAa6VMvaMxL5IuPuQcB3zy9HCmpYueC1Wuh2ahC3sL9lynAMq7X', '2025-04-16 05:16:00', '2025-04-16 05:16:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_category_id_index` (`category_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `configs`
--
ALTER TABLE `configs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `configs`
--
ALTER TABLE `configs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
