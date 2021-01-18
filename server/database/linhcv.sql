-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 15, 2021 lúc 10:15 PM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `linhcv`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id_a` int(11) NOT NULL,
  `name_a` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `address` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `about` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id_a`, `name_a`, `gender`, `date_of_birth`, `address`, `email`, `password`, `avatar`, `website`, `about`) VALUES
(1, 'Vũ Quyền Linh', 'Nam', '2000-10-12', 'Hà Nội', 'linhvu758@gmail.com', '', 'unnamed.png', 'https://www.facebook.com/vuquyenlinh.vu', 'My name is Linh and I am a Vietnamese. I am twenty-one years old. and I am a student at Thuy Loi University at the moment. My major is Engineering, and I am studying in year three. Now I live in Hanoi city, the capital of Vietnam.\r\n\r\nI have a big family with six people. I have two sisters and a brother. My sisters are older and my brother is younger than me. My father is a teacher at a secondary school. He has worked for 35 years in the field and he is my biggest role model in life. My mother is a housewife. She is nice and she is really good at cooking. I love my family so much. However they live in my hometown, and I have to live away from them due to my study.\r\n\r\nI am a generous and easy-going person but when it comes to work I am a competitive perfectionist. I am also an optimistic and outgoing person so I have many friends and other social relationships. My major requires me to work with a lot of different machine details and wires, so they help me to train my patience and wariness. I love to explore electronic devices.\r\n\r\nIn the future, I decided to become a Civil Engineer because I have always been fascinated by bridges, buildings, and skyscrapers. A degree in Civil Engineering enables me to achieve my goals and also gives me an opportunity to make a difference in the community. To be a Civil Engineering, I also want to speak English fluently so I can work with companies from different countries.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `experience`
--

CREATE TABLE `experience` (
  `id_e` int(11) NOT NULL,
  `id_a` int(11) DEFAULT NULL,
  `name_e` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `start_time` date DEFAULT NULL,
  `end_time` date DEFAULT NULL,
  `label` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `detail` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `experience`
--

INSERT INTO `experience` (`id_e`, `id_a`, `name_e`, `start_time`, `end_time`, `label`, `detail`) VALUES
(1, 1, 'Programmer', '2015-01-06', '2021-01-16', 'Havvey. London, UK', '	\r\n-Work in IBM AS/400 Platform with RPG/400 Programming Language\r\n-Successfully developed information system that eased the collection of 500k voters spread across various counties\r\n-Converted 400k Answer/2 programs to PL/1'),
(2, 1, 'Programmer', '2013-04-02', '2015-08-20', 'Keeling Group. Berlin,Germany', '	\r\n-Especial mention for best automation in slide projectors in 2014\r\n-Software development with Python and Java\r\n-Customization and implementation of data warehouse using DHIS2'),
(3, 1, 'Software Developer', '2011-03-14', '2013-01-27', 'Keeling Group. London, UK', '-Implemented a member-based restful API for the login system of 8 mobile games using C#'),
(4, 1, 'Junior Software Developer', '2010-05-14', '2011-02-13', 'Wolf Inc. London, UK', '-learn more about HTML.CSS,SCSS,RUBY,Python...\r\n-create some project AI WEB\r\n-learn machine learning and deep learning'),
(5, 1, 'Computer Science', '2006-02-06', '2010-03-19', 'Thuy Loi University. Viet Nam, Ha Noi', 'GPA: 3.85/4.0');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hobbies`
--

CREATE TABLE `hobbies` (
  `id_h` int(11) NOT NULL,
  `id_a` int(11) DEFAULT NULL,
  `name_h` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `icon_h` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `describes` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hobbies`
--

INSERT INTO `hobbies` (`id_h`, `id_a`, `name_h`, `icon_h`, `describes`) VALUES
(1, 1, 'Outdoors', 'fas fa-tree', 'My favorite hobby is playing football in spare time. After completing my home work at home, I generally spend my lot of free time in playing football. I was so interested to play football from my childhood however started learning to play well when I was 5 years old. I was in one class when I was 5 years old. My father asked to my class teacher in the PTM about my hobby of football. And my teacher told him that there is a facility of playing sports daily in the school from class 1 so you can adm'),
(2, 1, 'Guitar', 'fas fa-guitar', 'I love many kinds of music; especially, when I fill myself with the sorrow, I love the songs which can share my sadness. I also like watching some US sitcoms such as: How I met your mother, Once upon a time, Sabrina is the thing I enjoy in my leisure time. Besides, I extremely love travelling, exploring new places with plentiful cuisines and nature, especially walking along the beach in the dusk that make me comfortable and peaceful.'),
(3, 1, 'Books', 'fas fa-book', 'This is now the summer time, and this is a chance for me to spend time on my favorite activity - reading books. It has been my hobby since I was a little kid, but lately I rarely have a comfortable time to read books since I have a lot of things to do with school. I usually spend the time on the bus to look at a few pages, but it leaves a very annoying feeling because I have to stop reading at the moment I get off the bus. Now the school is temporarily over, I can lie on my bed and read my favorite novels for hours and hours. I have a collection of domestic and international books, and I am pretty proud of it. The genres that appear the most on my bookshelf are fantasy, science fiction, detective, and comic books. Each type of books gives me totally different feelings and thoughts, so reading a very interesting thing for me. I read almost all of the best - seller books on the Internet at a time, but I just buy the ones that I actually love. Some of my favorite series are Harry Potter, Game of Thrones, Gone with the wind, Sherlock Holmes, etc. Now the bookshelf in my room is even bigger than my bed, and my mom usually says that someday those books will cost more than our house. Reading is a very good habit, but I know some parents will force their children to pay more attention to their textbooks than those unreal stories. I am so lucky that my parents totally support my hobby; therefore I will never stop reading books.'),
(4, 1, 'Computers', 'fas fa-desktop', 'A hobby that I enjoy is using the computer. Surfing the internet is what I mostly do whenever I have free time.\r\n\r\nNo one can deny the benefits of Internet. Information resources are probably the biggest advantage that Internet offers to people. Internet is wonderful source of information. All kind of information on any topic is available on the Internet at anytime. I love searching things on Google. It’s a very useful tool from the Internet, we can know everything with just one mouse click.\r\n\r\nBecoming knowledgeable is also a great benefit of using Internet. I spend a lot of time on the Internet for reading news. All latest news is continuously up-to-date on the Internet on various news sites. I often visit E-newspaper websites to read hot daily news. I can know everything such as current issues that happen in this world, what happen to our country, celebrities life, recent fashion, and other news that can enhance my knowledge. I would rather using Internet for updating news because it is available everywhere at anytime.\r\n\r\nIn conclusion, people increasingly spend their leisure time using Internet because it is a helpful tool where people can learn new things and keep informed of information around the world. Internet turns the world into the speed generation. As the Internet saves us much time, we can have enough time to do other things. The internet is a marvelous creation in this generation.'),
(5, 1, 'Games Dev', 'fas fa-gamepad', ' I was so interested to play football from my childhood however started learning to play well'),
(6, 1, 'Travel', 'fas fa-plane', 'What I love to do in my free time costs me a big amount of money, and it is shopping. Since I was a kid, my mother has been taking me to the markets and supermarkets with her, so I had many chances to pick up the goods that I liked. It has gradually become my hobby without me realizing, and now I love to spend my free time wandering in the malls and do the window shop. I love to observe and buy everything, not just clothes or some certain goods. My friends usually ask me to buy them something whenever they know that I will go to the mall, and it is the thing that I am happy to help. The beginning of the month is my favorite time, because it is when my family goes to the supermarket to buy necessary stuff for the whole month. I always volunteer in that activity with my mother, and we usually spend half of a day in there. I love the feeling of going along the aisles of countless brands of goods, choosing the best type of shampoo, or picking up the freshest fruits. Although later the bill will sometimes hurt my heart, I still think it is worthy. I am very aware of my financial status, and most of the time I just walking around and looking at the shops without buying anything. My dream is to be a very rich person, so that I can continue go shopping without worrying about my wallet.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `portfolio`
--

CREATE TABLE `portfolio` (
  `id_p` int(11) NOT NULL,
  `id_a` int(11) DEFAULT NULL,
  `id_t` int(11) DEFAULT NULL,
  `name_p` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `portfolio`
--

INSERT INTO `portfolio` (`id_p`, `id_a`, `id_t`, `name_p`, `image`, `link`) VALUES
(1, 1, 1, 'Stargazer Workshop', 'Sample1.jpg', 'https://filiprastovic.github.io/stargazerworkshop-freelancer-landing-page/'),
(2, 1, 2, 'instant Survey analytics', 'Sample2.jpg', 'https://www.invmetrics.com/solutions/'),
(3, 1, 3, 'silicon sponge sheet', 'Sample3.jpg', 'https://www.nationalsilicone.com/');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `skill`
--

CREATE TABLE `skill` (
  `id_s` int(11) NOT NULL,
  `id_a` int(11) DEFAULT NULL,
  `name_s` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `icon_s` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `progress` int(11) DEFAULT NULL,
  `detail` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `skill`
--

INSERT INTO `skill` (`id_s`, `id_a`, `name_s`, `type`, `icon_s`, `progress`, `detail`) VALUES
(1, 1, 'OutSystems', 'Programming', 'fab fa-ubuntu', 85, 'The System Information app provides detailed specifications and other information about your Mac hardware and software, including your network and external devices. In some versions of OS X, this app is called System Profiler.'),
(2, 1, 'MEAN Stack', 'Searching', 'fab fa-stack-overflow', 75, 'Stack Overflow is the largest, most trusted online community for developers to learn, share their knowledge, and build their careers. More than 50 million professional and aspiring programmers visit Stack Overflow each month to help solve coding problems, develop new skills, and find job opportunities.'),
(3, 1, 'C#/C++', 'Programming', 'fab fa-windows', 80, 'At a very basic level, both C# and C++ have similar code. C# is much newer to the game, however. ... Both C++ and C# are object-oriented languages, although C++ is considered a harder language to work with. Both of them can be used in web and desktop applications, but C# is much more popular now for both applications'),
(4, 1, 'HTML5 &amp; CSS', 'Programming', 'fab fa-html5', 65, 'HTML (the Hypertext Markup Language) and CSS (Cascading Style Sheets) are two of the core technologies for building Web pages. HTML provides the structure of the page, CSS the (visual and aural) layout, for a variety of devices. Along with graphics and scripting, HTML and CSS are the basis of building Web pages and Web Applications.\r\n\r\nCSS is the language for describing the presentation of Web pages, including colors, layout, and fonts. It allows one to adapt the presentation to different types of devices, such as large screens, small screens, or printers. CSS is independent of HTML and can be used with any XML-based markup language. The separation of HTML from CSS makes it easier to maintain sites, share style sheets across pages, and tailor pages to different environments. This is referred to as the separation of structure (or: content) from presentation.'),
(5, 1, 'Python', 'Programming', 'fab fa-python', 80, 'It is used for:\r\n\r\nweb development (server-side),\r\nsoftware development,\r\nmathematics,\r\nsystem scripting.'),
(6, 1, 'Java', 'Programming', 'fab fa-java', 70, 'Java is a class-based, object-oriented programming language that is designed to have as few implementation dependencies as possible.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `social_media`
--

CREATE TABLE `social_media` (
  `id_so` int(11) NOT NULL,
  `id_a` int(11) DEFAULT NULL,
  `name_so` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `icon` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `social_media`
--

INSERT INTO `social_media` (`id_so`, `id_a`, `name_so`, `link`, `icon`) VALUES
(1, 1, 'Facebook', 'https://www.facebook.com/vuquyenlinh.vu', 'fab fa-facebook-f'),
(2, 1, 'GitHub', 'https://github.com/linh16p', 'fab fa-github'),
(3, 1, 'Youtube', 'https://www.youtube.com/channel/UCzyuZJ8zZ-Lhfnz41DG5qLw', 'fab fa-youtube'),
(4, 1, 'Codepen', 'https://codepen.io/trending', 'fab fa-codepen');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type_portfolio`
--

CREATE TABLE `type_portfolio` (
  `id_t` int(11) NOT NULL,
  `name_t` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `icon` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `type_portfolio`
--

INSERT INTO `type_portfolio` (`id_t`, `name_t`, `icon`) VALUES
(1, 'Development', 'fas fa-code'),
(2, 'Design', 'fas fa-paint-brush'),
(3, 'Photography', 'fas fa-camera');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_a`),
  ADD KEY `id_a` (`id_a`);

--
-- Chỉ mục cho bảng `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id_e`),
  ADD KEY `id_a` (`id_a`),
  ADD KEY `id_e` (`id_e`,`id_a`);

--
-- Chỉ mục cho bảng `hobbies`
--
ALTER TABLE `hobbies`
  ADD PRIMARY KEY (`id_h`),
  ADD KEY `id_a` (`id_a`),
  ADD KEY `id_h` (`id_h`,`id_a`),
  ADD KEY `id_h_2` (`id_h`,`id_a`);

--
-- Chỉ mục cho bảng `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id_p`),
  ADD KEY `id_a` (`id_a`),
  ADD KEY `id_t` (`id_t`),
  ADD KEY `id_p` (`id_p`,`id_a`,`id_t`),
  ADD KEY `id_p_2` (`id_p`,`id_a`,`id_t`);

--
-- Chỉ mục cho bảng `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id_s`),
  ADD KEY `id_a` (`id_a`),
  ADD KEY `id_s` (`id_s`,`id_a`);

--
-- Chỉ mục cho bảng `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`id_so`),
  ADD KEY `id_a` (`id_a`),
  ADD KEY `id_so` (`id_so`,`id_a`);

--
-- Chỉ mục cho bảng `type_portfolio`
--
ALTER TABLE `type_portfolio`
  ADD PRIMARY KEY (`id_t`),
  ADD KEY `id_t` (`id_t`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `experience`
--
ALTER TABLE `experience`
  ADD CONSTRAINT `experience_ibfk_1` FOREIGN KEY (`id_a`) REFERENCES `admin` (`id_a`);

--
-- Các ràng buộc cho bảng `hobbies`
--
ALTER TABLE `hobbies`
  ADD CONSTRAINT `hobbies_ibfk_1` FOREIGN KEY (`id_a`) REFERENCES `admin` (`id_a`);

--
-- Các ràng buộc cho bảng `portfolio`
--
ALTER TABLE `portfolio`
  ADD CONSTRAINT `portfolio_ibfk_1` FOREIGN KEY (`id_a`) REFERENCES `admin` (`id_a`),
  ADD CONSTRAINT `portfolio_ibfk_2` FOREIGN KEY (`id_t`) REFERENCES `type_portfolio` (`id_t`);

--
-- Các ràng buộc cho bảng `skill`
--
ALTER TABLE `skill`
  ADD CONSTRAINT `skill_ibfk_1` FOREIGN KEY (`id_a`) REFERENCES `admin` (`id_a`);

--
-- Các ràng buộc cho bảng `social_media`
--
ALTER TABLE `social_media`
  ADD CONSTRAINT `social_media_ibfk_1` FOREIGN KEY (`id_a`) REFERENCES `admin` (`id_a`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
