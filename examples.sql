CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  `year` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `cars`
--

INSERT INTO `cars` (`id`, `name`, `year`) VALUES
(2, 'BMW', '2004'),
(3, 'Lexus', '2000'),
(4, 'Carss', '1997'),
(5, 'Bugatti', '2010'),
(6, 'Lamborghini', '2007');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `service` varchar(50) DEFAULT NULL,
  `user` varchar(40) DEFAULT NULL,
  `content` varchar(300) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`id`, `service`, `user`, `content`, `date`) VALUES
(1, 'Ban nhạc Acoustic', 'Who', 'Rất hay', '08/04/2020'),
(2, 'Ban nhạc điện tử', 'Putin', 'Dở chưa từng thấy', '01/06/2020'),
(3, 'Ban nhạc Acoustic', 'Jesss', 'Cho mình hỏi có cho thuê ỏ HN không?', '29/01/2020'),
(4, 'Hệ thống âm thanh hội trường', 'Putin', 'Hết sẩy', '30/02/2020'),
(5, 'Hệ thống âm thanh hội trường', 'Press F', 'Press F', '16/05/2020'),
(6, 'Hệ thống âm thanh nogài trời', 'FFS', 'For God Sake', '08/04/2020'),
(7, 'Ban nhạc Rock', 'Trump', 'Có giảm giá không ạ?', '04/04/2020'),
(8, 'Hệ thống ánh sáng hội trường', 'Anonymous', 'Jonathan Galindo has followed you.', '08/07/2020'),
(9, 'Hệ thống ánh sáng hội trường', 'Anonymous', 'Check under your bed. Surpriseee?', '08/07/2020'),
(10, 'Ban nhạc Rock', 'Putin', 'OK Boomer', '07/07/2020');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `price` varchar(10) DEFAULT NULL,
  `detail` varchar(200) DEFAULT NULL,
  `imgsrc` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `services`
--

INSERT INTO `services` (`id`, `name`, `price`, `detail`, `imgsrc`) VALUES
(1, 'Ban nhạc Acoustic', '2.000.000', 'Ban nhạc gồm 4 thành viên (Guitar - Cajon - 2 Vocal)', '//i.ibb.co/CJHwgN1/acoustic.jpg'),
(2, 'Ban nhạc điện tử', '5.000.000', 'Ban nhạc gồm 6 thành viên (E.Guitar - Bass - E.Drum - Keyboard - 2 Vocal)', 'https://i.ibb.co/j42rxcr/elec.jpg'),
(3, 'Ban nhạc Rock', '4.000.000', 'Ban nhạc gồm 5 thành viên (E.Guitar - Bass - E.Drum - Keyboard - Vocal)', 'https://i.ibb.co/SBLnpKZ/rock.jpg'),
(4, 'Hệ thống âm thanh trong nhà', '4.000.000', '', 'https://i.ibb.co/3f3cJgT/home.jpg'),
(5, 'Hệ thống âm thanh hội trường', '8.000.000', '', 'https://i.ibb.co/Pcspntx/hall.jpg'),
(6, 'Hệ thống âm thanh nogài trời', '12.000.000', '', 'https://i.ibb.co/BwtJJRw/outdoor.jpg'),
(7, 'Hệ thống ánh sáng trong nhà', '2.000.000', '8 Parled 54 - 2 Beam 230', 'https://i.ibb.co/mqCZQJb/lighthome.jpg'),
(8, 'Hệ thống ánh sáng hội trường', '6.000.000', '24 Parled 54 - 8 Beam 230', 'https://i.ibb.co/0DDd1Hw/halllight.jpg'),
(9, 'Hệ thống ánh sáng ngoài trời', '14.000.000', '48 Parled 54 - 24 Beam 230', 'https://ibb.co/WD7Nf1P');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(40) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `phone`, `type`) VALUES
(1, 'PKhoa', '123456', 'ntp@gmail.com', '0192382949', 'admin'),
(2, 'DKhoa', '1234', 'abc@gmail.com', '0398498393', 'admin'),
(3, 'Who', '2001', 'con@gmail.com', '02819287438', 'member'),
(4, 'Jesss', '12341234', 'adui@gmail.com', '039324393', 'member'),
(5, 'Trump', '202001', 'pro@gmail.com', '0123287438', 'member'),
(6, 'Putin', '1605', 'txtxx@gmail.com', '0354953493', 'member'),
(7, 'Anonymous', '2es01', 'canh@gmail.com', '02928703438', 'member'),
(8, 'Press F', '98328', 'chuot@gmail.com', '03984382223', 'member'),
(9, 'FFS', 'hehehe', 'jamesbond@gmail.com', '02815893238', 'member');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;