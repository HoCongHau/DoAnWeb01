-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2018 at 04:19 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlysach`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitietdondathang`
--

CREATE TABLE `chitietdondathang` (
  `MaChiTietDonDatHang` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `SoLuong` int(11) DEFAULT NULL,
  `GiaBan` int(11) DEFAULT NULL,
  `MaDonDatHang` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `MaSach` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dondathang`
--

CREATE TABLE `dondathang` (
  `MaDonDatHang` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `NgayLap` datetime DEFAULT NULL,
  `TongThanhTien` int(11) DEFAULT NULL,
  `MaTaiKhoan` int(11) NOT NULL,
  `MaTinhTrang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loaisach`
--

CREATE TABLE `loaisach` (
  `MaLoaiSach` int(11) NOT NULL,
  `TenLoaiSach` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `BiXoa` tinyint(4) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loaisach`
--

INSERT INTO `loaisach` (`MaLoaiSach`, `TenLoaiSach`, `BiXoa`) VALUES
(1, 'Văn Học', 0),
(2, 'Kinh Tế', 0),
(3, 'Thiếu Nhi', 0),
(4, 'Giáo Khoa', 0),
(5, 'Tham Khảo', 0),
(6, 'Kỹ năng - Sống đẹp', 0),
(7, 'Nhân vật - Sự kiện', 0),
(8, 'Nuôi dạy con', 0),
(9, 'Quản Trị - Lãnh Đạo', 0),
(10, 'Truyện Ngắn', 0),
(11, 'Truyện Dài', 0);

-- --------------------------------------------------------

--
-- Table structure for table `loaitaikhoan`
--

CREATE TABLE `loaitaikhoan` (
  `MaLoaiTaiKhoan` int(11) NOT NULL,
  `TenLoaiTaiKhoan` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loaitaikhoan`
--

INSERT INTO `loaitaikhoan` (`MaLoaiTaiKhoan`, `TenLoaiTaiKhoan`) VALUES
(111, 'admin'),
(222, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `nhaxuatban`
--

CREATE TABLE `nhaxuatban` (
  `MaNhaXuatBan` int(11) NOT NULL,
  `TenNhaXuatBan` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `LogoURL` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `BiXoa` tinyint(4) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nhaxuatban`
--

INSERT INTO `nhaxuatban` (`MaNhaXuatBan`, `TenNhaXuatBan`, `LogoURL`, `BiXoa`) VALUES
(1, 'Kim Đồng', 'kimdong.png', 0),
(2, 'Tổng Hợp TP.HCM', 'tonghophcm.jpg', 0),
(3, 'Trẻ', 'NXB-Tre.jpg', 1),
(4, 'Thanh Niên', 'logo_nxb_thanhnien.jpg', 0),
(5, 'Phương Nam', 'phuongnam.jpg', 0),
(6, 'Văn Học', 'vanhoc.jpg', 0),
(7, 'Thế Giới ', 'thegioi.png', 0),
(8, 'Hà Nội', NULL, 0),
(9, 'Giao Thông Vận Tải', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sach`
--

CREATE TABLE `sach` (
  `MaSach` int(11) NOT NULL,
  `TenSach` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `HinhURL` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `GiaSach` int(11) DEFAULT NULL,
  `NgayNhap` datetime DEFAULT NULL,
  `SoLuongTon` int(11) DEFAULT NULL,
  `SoLuongBan` int(11) DEFAULT NULL,
  `XuatXu` varchar(64) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Việt Nam',
  `SoLuocXem` int(11) DEFAULT NULL,
  `MoTa` text COLLATE utf8_unicode_ci,
  `BiXoa` tinyint(4) DEFAULT '0',
  `MaLoaiSach` int(11) NOT NULL,
  `MaNhaXuatBan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sach`
--

INSERT INTO `sach` (`MaSach`, `TenSach`, `HinhURL`, `GiaSach`, `NgayNhap`, `SoLuongTon`, `SoLuongBan`, `XuatXu`, `SoLuocXem`, `MoTa`, `BiXoa`, `MaLoaiSach`, `MaNhaXuatBan`) VALUES
(4, 'Steve Jobs - Những Bí Quyết Đổi Mới Và Sáng Tạo (Tái Bản 2017)', 'stevejobsnhungbiquyetdoimoivasangtao.jpg', 116220, '2018-12-10 00:00:00', 520, 43, 'Việt Nam', 546, 'Steve Jobs - Những Bí Quyết Đổi Mới Và Sáng Tạo (Tái Bản 2017)\r\n\r\nĐiều làm cho Steve Jobs trở thành một trong những CEO vĩ đại nhất thế hệ mình là sự khác biệt đến điên rồ, là tư duy sáng tạo và đổi mới, chứa đựng trong bất cứ sản phẩm nào ông tạo ra. Ông đã góp phần đưa Apple trở thành một thương hiệu lớn mạnh toàn cầu, với giá trị thị trường lớn nhất nhì nước Mỹ, bởi nền tảng là những nguyên tắc đổi mới tuy giản đơn nhưng lại mang tính cách mạng và tạo nên những thành công đột phá.\r\n\r\nBằng việc theo sát những ví dụ mang tính tầm nhìn của Steve Jobs, độc giả sẽ khám phá ra những cách thức mới mẻ thú vị để mở khóa tiềm năng sáng tạo của bản thân và bồi đắp cho một môi trường khuyến khích sự sáng tạo và đổi mới. Jobs không mang đến sản phẩm mà khách hàng muốn, thay vào đó, ông mang đến những sản phẩm mà khách hàng sẽ muốn. Steve Jobs – Những bí quyết sáng tạo & đổi mới chia sẻ những chiến lược nổi tiếng và hiệu quả nhất để khơi nguồn cho sức sáng tạo và cải cách thực sự trong bất cứ môi trường công việc nào. Chúng ta sẽ biết cách làm thế nào để thích ứng và đánh bại được những đối thủ mạnh nhất, phát triển những sản phẩm mang tính cách mạng, thu hút những khách hàng trung thành, và phát triển thịnh vượng ngay cả trong những thời điểm đầy khó khăn, thử thách. Theo Steve Jobs, có 7 nguyên tắc đổi mới:\r\n\r\n1.   Làm những việc bạn yêu thích\r\n2.   Để lại dấu ấn cho nhân loại\r\n3.   Kích hoạt cho bộ não của bạn\r\n4.   Bán ước mơ chứ đừng bán sản phẩm\r\n5.   Nói “không” với 1.000 thứ\r\n6.   Tạo ra những trải nghiệm tuyệt vời\r\n7.   Làm chủ thông điệp\r\n“Cải cách là điểm phân biệt giữa một người lãnh đạo và một nhân viên.” – Steve Jobs', 0, 7, 7),
(5, 'Thuật đàm phán', 'thuatdamphan.jpg', 59250, '2018-12-08 00:00:00', 546, 245, 'Việt Nam', 654, 'Thuật Đàm Phán (Tái Bản 2018)\r\n\r\nĐàm phán là một yếu tố thiết yếu trong mọi tương tác mang tính cá nhân cũng như chuyên nghiệp. Nó giúp chung ta thiết lập các mối quan hệ, hợp tác và đưa ra các giải pháp cho khách hàng, tổ chức và chính chúng ta.\r\n\r\nTrong sự nghiệp thành công của mình, Brian Tracy đã đàm phán các hợp đồng trị giá hàng triệu đô-la. Nhờ trải nghiệm đó, ông đã đúc rút và đưa những bí quyết vào cuốn sách Thuật đàm phán này như một cuốn cẩm nang ngắn gọn giúp bạn trở thành một nhà thương thuyết bậc thầy nhờ:\r\n\r\n- Sử dụng 6 phong cách đàm phán chính\r\n\r\n- Khai thác sức mạnh của cảm xúc trong quá trình đi đến thỏa thuận\r\n\r\n- Sử dụng thời gian như một lời thế\r\n\r\n- Chuẩn bị như một nhà đàm phán chuyên nghiệp và tiến vào bất cứ cuộc đàm phán nào với tư thế chủ động\r\n\r\n- Rõ ràng về những lĩnh vực bất đồng và nhất trí\r\n\r\n- Phát triển những kết quả \"đôi bên cùng có lợi\"\r\n\r\n- Sử dụng sức mạnh \"có đi có lại\"\r\n\r\n- Biết khi nào và bằng cách nào rút lui', 0, 6, 7),
(6, 'Ứng dụng bản đồ tư duy trong học tập', 'ungdungbandotuduytronghoctap.jpg', 61620, '2018-12-08 00:00:00', 364, 95, 'Việt Nam', 365, 'Ứng Dụng Bản Đồ Tư Duy Trong Học Tập\r\n\r\nChắc hẳn bạn đã không còn xa lạ gì với thuật ngữ “bản đồ tư duy” (mindmap). Ngày nay, chỉ cần bước vào một hiệu sách bất kỳ, chúng ta cũng sẽ tìm được vô số những cuốn sách hướng dẫn về kỹ thuật ghi chép cực kỳ thông minh này. Nhưng bạn đã thực sự học được những gì từ vô vàn các cuốn sách đó?\r\n\r\nMột trong những vấn đề lớn mà các sách về bản đồ tư duy thường gặp phải là không đi sâu vào chi tiết. Những cuốn sách luôn nói rằng chúng ta có thể vận dụng bản đồ tư duy theo rất nhiều cách, nhưng lại không nói chúng ta biết phải vận dụng như thế nào. Ngay cả khi họ đưa ra hướng dẫn, những chỉ dẫn cũng rất chung chung, chưa đủ để người học tiện áp dụng vào những tình huống thực tế cũng như trong công việc học tập hàng ngày. Bạn và tôi, chúng ta buộc phải tự tìm con đường chinh phục \"bản đồ tư duy\" cho riêng mình.\r\n\r\nChính vì thế, cuốn sách \"Ứng dụng bản đồ tư duy trong học tập\" được thực hiện để trang bị cho bạn những chỉ dẫn cụ thể và chi tiết nhất để bạn có thể dễ dàng ứng dụng trong học tập và thi cử. Không chỉ thế, cuốn sách còn cung cấp những phương án tiếp cận và sử dụng bản đồ tư duy hiệu quả theo sở thích, nhu cầu và mục tiêu của riêng cá nhân bạn. Hãy tự tin đọc và áp dụng ngay các bí quyết được trình bày trong cuốn sách nhỏ gọn nhưng rất thực tế này, và bạn sẽ thấy kết quả học tập của mình tiến bộ từng ngày!', 0, 6, 7),
(7, '101 Mẹo đối phó với sếp', '101meodoiphovoisep.jpg', 91630, '2018-12-08 00:00:00', 623, 256, 'Việt Nam', 1248, '101 Mẹo Đối Phó Với Sếp\r\n\r\nMọi mối quan hệ đều mang lại những giá trị nhất định cho cuộc sống của chúng ta.\r\n\r\nKhi bắt đầu bước vào môi trường công sở, các mối quan hệ lại càng liên quan mật thiết hơn vì ảnh hưởng trực tiếp tới sự phát triển sự nghiệp và con đường thăng tiến.\r\n\r\nMối quan hệ nhân viên với sếp là mối quan hệ có nhiều vấn đề nhất.\r\n\r\nMỗi công việc đều có những yêu cầu, đòi hỏi riêng khiến chúng ta phải sử dụng kiến thức và kỹ năng của mình để hoàn thiện nó. Cho nên cũng có nhiều kiểu sếp khác nhau. Có sếp lại yêu cầu quá cao, hoàn thành công  việc đã khó nhưng làm sao để vượt mức mong đợi của những vị sếp yêu cầu quá cao lại càng khó hơn. Có sếp lại  quan tâm về sự phát triển của nhân viên nhưng lại không bao giờ hướng dẫn hoặc hỗ trợ nhân viên. Họ không thường xuyên đưa ra nhận xét và hiếm khi trả lời các thắc mắc. Họ không đưa phản hồi qua điện thoại. Thư điện tử cũng thường rất ngắn gọn và thi thoảng mới được gửi đến….\r\n\r\nMỗi vị sếp có những tính cách, yêu cầu khác nhau, vậy chúng ta làm thế nào để đối phó? Cuốn sách này ra đời chắc chắn là câu trả lời tốt nhất cho các bạn, để các bạn có thể thành công hơn trong sự nghiệp.', 0, 6, 7),
(8, 'Kỹ năng làm việc nhóm của người Nhật', 'kynanglamviecnhomcuanguoinhat.jpg', 72270, '2018-12-08 05:24:16', 695, 65, 'Việt Nam', 1548, 'Kỹ Năng Làm Việc Nhóm Của Người Nhật\r\n\r\nCuộc sống hằng ngày ở nơi làm việc là \"cuộc chiến\" tâm lý của cấp trên và nhân viên. Nhưng đứng trước các trở ngại về giao tiếp, bạn có sẵn sàng tìm cách cải thiện hay không? Nhiều người đã tự biện minh mình là người khép kín, không giỏi ăn nói... nên tham gia làm việc nhóm sẽ vô cùng khó khăn, và họ cố tình đứng ngoài các buổi hội họp và giao lưu với đồng nghiệp. Nếu cứ tiếp tục giữ tư duy như vậy, liệu bạn có thể phát triển sự nghiệp hay không? Chúng ta không nhất thiết phải trở thành một con người khác với bản chất của mình, nhưng trong vấn đề công việc, ta luôn cần ưu tiên việc kết nối tốt hơn với cấp trên, đồng nghiệp, đối tác làm ăn và các khách hàng.\r\n\r\nTác phẩm \"Kỹ năng làm việc nhóm của người Nhật\" được viết để trợ giúp những người đi làm đang loay hoay với vấn đề hòa nhập, giao tiếp và làm việc ở môi trường chuyên nghiệp. Cuốn sách cung cấp đầy đủ cho bạn:\r\n\r\n- Phương pháp giao tiếp hiệu quả nơi công sở\r\n\r\n- Kỹ năng truyền đạt thông tin dễ hiểu, không gây hiểu lầm\r\n\r\n- Kỹ năng giải quyết vấn đề đúng yêu cầu cấp trên\r\n\r\n- Kỹ năng lập kế hoạch và tổ chức công việc khoa học\r\n\r\n- Kỹ năng lắng nghe chủ động\r\n\r\n\"Kỹ năng làm việc nhóm của người Nhật\" chia sẻ những kinh nghiệm giao tiếp ở nơi có môi trường chuyên nghiệp hàng đầu thế giới, dù tính cách phổ biến của người Nhật là khép kín, ít lời, và các vị sếp ít khi truyền đạt thẳng thắn các yêu cầu của mình. Nếu như bạn có thể tận dụng tốt các bí kíp trong tác phẩm \"nhỏ nhưng có võ\" này, bạn sẽ rèn luyện được cách quan sát và thấu hiểu tốt hơn lời nói của đối phương, từ đó hành động hợp lý và cải thiện được hiệu quả công việc.', 0, 6, 7),
(9, 'Con quỷ gỗ', 'conquygo.jpg', 25300, '2018-12-08 03:08:10', 527, 263, 'Việt Nam', 6511, 'Con Quỷ Gỗ của nhà văn Nguyễn Quang Thiều kể về cậu búp bê Trán Dô với tâm hồn trong sáng và trái tim tràn ngập yêu thương nhưng lại bị cộng đồng búp bê xua đuổi, chỉ vì cậu có một gương mặt xấu xí. Cậu rơi vào tuyệt vọng. Cậu đi theo những kẻ độc ác trong Thế Giới Bóng Tối. Nhưng cuối cùng cậu cũng thức tỉnh.\r\n\r\nChỉ có điều, lúc Trán Dô muốn chiến đấu chống lại những kẻ độc ác cũng là lúc Thế Giới Bóng Tối bắt đầu thả những quả bom dịch hạch xuống toàn thị xã.\r\n\r\nChỉ còn một đêm nữa, thị xã sẽ bị tan tành, hay quả bom sự sống sẽ đánh bại hắc ám...?\r\n\r\nCuộc phiêu lưu bắt đầu từ giây phút Trán Dô ra đời...\r\n\r\nĐây là một câu chuyện đơn giản và cảm động về những con búp bê, những con chuột, ông già cô đơn... quen thuộc như những người em vẫn gặp quanh mình. Bên trong hình hài gỗ đá, bên trong cơ thể bé nhỏ cũng có những tâm hồn, những tình cảm sâu sắc. Nếu vô tình lướt qua hay chỉ để mắt đến vẻ bề ngoài, có thể ta sẽ đánh mất nhiều điều rất đẹp bên trong. Trong con quỷ gỗ thực ra có phải một tâm hồn của quỷ? Câu chuyện dài có minh hoạ kĩ lưỡng bằng tranh màu đẹp này tặng các em những tình cảm ấm áp - thứ mà xã hội hiện đại ngày càng thiếu hụt...\r\n\r\nMời các bạn đón đọc!', 0, 3, 1),
(10, 'Đen và béo', 'denvabeo.jpg', 63150, '2018-12-08 04:20:11', 998, 654, 'Việt Nam', 1589, 'Đen và Béo là tác phẩm dành cho học sinh được đánh giá cao của tác giả.\r\n\r\nTrân trọng giới thiệu', 0, 3, 1),
(11, 'Thằng tơ tưởng', 'thangtotuong.jpg', 54000, '2018-12-07 16:38:35', 625, 63, 'Việt Nam', 955, 'Cũng như tất cả các tác phẩm khác của Nguyễn Công Kiệt đều có dấu ấn đậm nét của người làm báo, người phụ trách Đội Thiếu niên tiền phong, vừa là người thầy, vừa là người bạn của trẻ em. Dường như trong trái tim anh còn đầy ắp những kỉ niệm, những kí ức và cả những trăn trở về công việc của những người trực tiếp dìu dắt trẻ em qua bao nhiêu thế hệ. Dường như phong trào Đội Thiếu niên tiền phong nói riêng và cuộc sống của tuổi thơ nói chung vẫn còn là kho báu trầm tích để ngòi bút anh khơi dậy, lẩy ra những vỉa quặng lấp lánh, mà cứ như nồi cơm Thạch Sanh, vẫn luôn luôn được bồi đắp, không bao giờ vơi cạn. Đó là mối quan hệ mật thiết giữa đời sống và văn chương. Nhà văn Nguyễn Công Kiệt chính là một tác giả đã và đang làm công việc ý nghĩa nhất của người nghệ sĩ: Thổi hơi thở cuộc sống vào từng trang sách, thổi những giá trị nhân văn và những lí tưởng cao đẹp vào tâm hồn trẻ thơ.\r\n\r\n  Có lẽ cuốn tiểu thuyết “Thằng Tơ Tưởng” là cuốn tiểu thuyết đầu tiên viết cho thiếu nhi đã dựng lại sống động quang cảnh đất nước ta những năm “Đánh cho Mỹ cút, đánh cho Ngụy nhào”. Ngòi bút tác giả đã nâng vai trò trẻ em lên một vị thế xứng đáng, tiếp bước cha anh trong những năm khói lửa ác liệt nhất và hào hùng nhất. Giống như Trần Đăng Khoa năm 1968 đã viết trong bài “Mưa” của em: “Muôn ngàn cây mía múa gươm/ Kiến hành quân đầy đường/ Lá khô gió cuốn/ Bụi bay cuồn cuộn…”. Những trang văn trong tiểu thuyết này cũng dựng lên quang cảnh ấy, quang cảnh của cả dân tộc (Không phân biệt già, trẻ, gái, trai) đã nhất tề đứng lên, quyết giải phóng miền Nam, thống nhất nước nhà.\r\n\r\n Mời các bạn đón đọc sách Thằng tơ tưởng.', 0, 3, 1),
(14, 'Góc nhìn của người thông thái', 'gocnhincuanguoithongthai.jpg', 72270, '2018-12-10 06:29:34', 545, 151, 'Việt Nam', 2655, 'Góc Nhìn Của Người Thông Thái của Robert Fulghum (sinh năm 1937, tác giả của cuốn sách nổi tiếng “Hạt giống yêu đời” – cuốn sách bán chạy nhiều năm liền của Amazon), là quyển sách thuộc thể loại sách kỹ năng rất độc đáo, khác hẳn với những cuốn khác. Khi đọc sách, bạn sẽ có cảm giác như mình đang được trò chuyện cùng một ông chú vui tính và hài hước, sau mỗi chủ đề đều lắng lại một thông điệp bình dị nhưng dưới một góc nhìn thật mới mẻ. Khi nhìn nhận mọi vấn đề dưới góc độ lạc quan và đơn giản hơn, bạn sẽ thấy cuộc sống mình thay đổi.\r\n\r\nCuốn sách cũng thể hiện những sự tương phản sâu sắc trong cuộc sống thường nhật. Những mẩu chuyện ngắn được thể hiện dưới góc nhìn của tác giả với cảm xúc mộc mạc chân thành cho chúng ta thấy được những điều bình dị khác lẩn khuất đâu đó mà đôi khi chỉ vì sống quá nhanh, quá vội – chúng ta đã vô tình để trôi qua.\r\n\r\nCó thể nói, Fulghum đã đưa ra vấn đề, và không ai khác là chính bạn phải có câu trả lời cho riêng mình. Những mẩu chuyện dung dị dưới nhãn quan rộng mở của Fulghum trong Góc Nhìn Của Người Thông Thái đã được viết bằng một phong cách gần gũi và khiêm nhường, dí dỏm và hấp dẫn với sự thông thái của riêng ông. Góc Nhìn Của Người Thông Thái đem lại cảm giác ấm áp như thể ta đang ngồi dưới mái hiên nhà bà mình vào một chiều chủ nhật, thong thả nhấm nháp từng ngụm kem mát lành…\r\n\r\nWaka trân trọng giới thiệu đến bạn cuốn sách “Góc Nhìn Của Người Thông Thái”!', 0, 6, 2),
(15, 'Bí quyết thành công sinh viên (Cẩm nang thiết yếu của học sinh sinh viên)', 'biquyetthanhcongsinhvien.jpg', 65000, '2018-12-08 10:24:36', 1556, 543, 'Việt Nam', 18268, 'Bí quyết thành công Sinh viên do nhóm các giáo sư, tiến sĩ có uy tín tại Việt Nam biên soạn và hiệu đính là một cuốn cẩm nang dành cho sinh viên, giúp họ có thể vượt qua được nhiều vấn đề gặp phải trong quãng thời gian học tập trên giảng đường cũng như trong đời sống hằng ngày.\r\n\r\nCác tác giả quyển sách này từng là những Sinh viên giỏi và hiện đang là giảng viên Đại học uy tín, đầy nhiệt huyết, chính vì vậy những nội dung được trình bày trong sách đề cập đến nhiều vấn đề mà Sinh viên thường gặp phải, từ phương pháp học tập cho đến rèn luyện các kỹ năng hỗ trợ, thậm chí cả việc \"săn\" học bổng và tìm đường du học.\r\n\r\nĐiều quan trọng và thú vị ở đây là sau khi nêu ra vấn đề, các tác giả đều đưa ra những biện pháp giải quyết vấn đề một cách rất \"Sinh viên\" trong việc làm thế nào để có những kỹ năng mềm hết sức cần thiết cho một Sinh viên hiện đại như nghe, ghi chú, học ngoại ngữ, sử dụng Internet...\r\n\r\nTựa sách là Bí quyết thành công Sinh viên, nhưng các em học sinh Trung học phổ thông sắp bước vào giảng đường Đại học cũng có thể sử dụng như là một cách tiếp cận với phương pháp học Đại học, vốn khác rất xa so với cách học ở bậc Trung học phổ thông. Khi đọc hết những trang cuối cùng, người đọc sẽ thấy bí quyết mà các tác giả đưa ra tập trung vào ba điểm chính:\r\n\r\nBiết đặt mục tiêu học tập cho đúng\r\n\r\nCó phương pháp và có kế hoạch thực hiện hiệu quả mục tiêu đã đặt ra\r\n\r\nCó ý chí quyết tâm và tự tin theo đuổi đến cùng kế hoạch của mình\r\n\r\nChặng đường học tập ở bậc Đại học không mấy dài, nhưng là chặng đường quan trọng trong đời người trí thức. Quyển sách này với trải nghiệm của chính những người đã đi qua chặng đường đó, chắc chắn rất hữu ích cho các Sinh viên, giúp các bạn rút ngắn hơn con đường đi đến thành công trong học tập để trở thành người trí thức trẻ có năng lực thực sự.\r\n\r\nWaka trân trọng giới thiệu cuốn sách Bí quyết thành công sinh viên.', 0, 6, 2),
(16, 'MẸ DẮT CON ĐI - CÙNG CON TỪNG BƯỚC TRƯỞNG THÀNH', 'medatcondi.jpg', 46240, '2018-12-12 11:31:15', 2268, 564, 'Việt Nam', 10518, 'Tự nhận mình không có năng khiếu về chụp hình, quay phim, hội họa giống như các anh chị trong gia đình, Phoenix Ho chọn cách ghi dấu những kỷ niệm về con qua các đoạn văn ngắn để chia sẻ cho gia đình và bạn bè thân thuộc ở Mỹ. Những bài viết của chị lần lượt được đăng tải trên Facebook bằng hai thứ tiếng: Việt và Anh (sau này chị dùng tiếng Việt là chủ yếu) đã nhận được sự đồng cảm và chia sẻ của rất nhiều người. Và ngày hôm nay, những câu chuyện mà tác giả Phoenix Ho gọi là “các đoạn văn ngắn” đã được thành hình bằng cuốn sách Mẹ dắt con đi do Công ty Văn hóa Sáng tạo Trí Việt - First News ấn hành.\r\n\r\nTên cuốn sách xuất phát từ câu ca dao về tình yêu vô bờ của mẹ, đã trở nên thân thuộc với mỗi người dân Việt: “Ví dầu cầu ván long đinh. Cầu tre lắt lẻo gập ghềnh khó đi. Khó đi mẹ dắt con đi. Con đi trường học, mẹ đi trường đời”. Vì lẽ đó, lật dở từng trang sách của Mẹ dắt con đi, bạn đọc sẽ gặp ở đây tấm lòng bao la của người mẹ trẻ với con mình. Người mẹ ấy không những mang nặng đẻ đau chín tháng mười ngày, mà còn tận tụy với con từ lúc con vừa được sinh ra, đến khi chập chững bước đi và bập bẹ cất lên những tiếng nói đầu tiên trong đời.\r\n\r\nTác giả Phoenix không kể một mạch những câu chuyện về Gấu - tên thân mật của con trai chị, từ lúc sinh ra cho đến lúc cậu bé được 7 tuổi; mà chị phân chia thành 6 nhóm truyện theo các chủ đề khác nhau như: Gắn bó, Thỏ thẻ như trẻ lên ba, Nuôi dưỡng tùy cá tính tự nhiên, Kỷ luật dựa trên giá trị sống, Khi con qua 5 tuổi và Những khoảng lặng. Những câu chuyện trong cuốn sách này, được viết một cách mộc mạc, tự nhiên giống như chị đang ghi lại những khoảnh khắc trong cuộc sống của hai mẹ con, từ trong nhà ra đường phố, từ chuyện ăn ngủ đến chuyện cư xử với những người xung quanh… Ở đó, có những câu chuyện khiến chúng ta không khỏi bật cười vì sự hồn nhiên, ngây thơ của Gấu; nhưng cũng có những câu chuyện khiến chúng ta phải bùi ngùi xúc động trước tình thương bao la mà chị dành cho con trai của mình.\r\n\r\nĐến với cuốn sách Mẹ dắt con đi của tác giả Phoenix, bạn đọc càng thêm tin rằng: không ai yêu thương ta bằng mẹ. Bạn đọc sẽ đồng cảm với cảm giác lần đầu tiên làm mẹ của Phonenix Ho khi chị có những thương lo không biết giãi bày cùng ai: “Cho dù làm mẹ tốt cách nào, lòng mẹ vẫn luôn canh cánh mình làm sai và sợ ảnh hưởng không tốt vào cuộc đời con sau này. Quá thông cảm ư? - Sau này con khó hài lòng với người khác. Quá cứng rắn ư? - Làm tổn thương con thì sao! Quá bảo vệ ư? - Rồi làm sao nó có thể tự lập khi trưởng thành”. Chị yêu con đến mức nhiều khi một biểu hiện gì đó khác thường ở con cũng khiến chị se thắt lòng, như khi phát hiện chiếc răng của con có một lỗ nhỏ, là dấu hiệu của sâu răng. Yêu con là vậy, nhưng Phoenix Ho cũng rất nghiêm khắc trong việc dạy dỗ con. Dù rất khó nhưng chị vẫn cố gắng để con trai mình hiểu rằng “yêu thương giữa cha mẹ và con cái phải có hai chiều”. Bởi theo chị, mục đích là để “tránh tình trạng con lớn lên khư khư trong tâm trí rằng cha mẹ thương mình là chuyện đương nhiên, còn ngược lại thì không hề có”.\r\n\r\nBạn đọc sẽ còn tìm thấy ở Mẹ dắt con đi những bài học và kinh nghiệm bổ ích trong việc dạy con, được tác giả Phoenix Ho chắt lọc từ rất nhiều tài liệu tin cậy cũng như từ trải nghiệm bản thân của lần đầu tiên làm mẹ. Đặc biệt là cách chị vượt qua khó khăn của giai đoạn làm mẹ đơn thân để yêu thương con, không để con phải thiếu thốn về tình cảm. Và giờ đây, khi đã vượt qua rất nhiều khó khăn của lần đầu làm mẹ, để chứng kiến con từng bước trưởng thành, chị cảm thấy rõ hơn về vai trò thiêng liêng của mình: “Đến ngày hôm nay tôi mới tự tin rằng mình sẽ làm tốt vai trò này. Tôi cảm thấy hãnh diện vì những gì mình đã đạt được và tôi tin mình sẽ còn tiếp tục học hỏi được thật nhiều mỗi ngày trong cuộc hành trình nuôi dạy con dài đằng đẵng này”.\r\n\r\nThạc sĩ Trần Thị Thu, Cán bộ nghiên cứu giáo dục - Bộ Giáo dục & Đào tạo chia sẻ: “Ngay khi đọc những mẩu chuyện đầu tiên, tôi đã bị cuốn hút bởi cách viết mộc mạc, giản dị nhưng đầy sâu lắng và cảm động của chị. Đêm đó, tôi trằn trọc mãi không ngủ được vì bị “ám ảnh” bởi những câu chuyện mà tôi mới đọc. Cứ nghĩ rằng quen nhau lâu vậy thì mình đã hiểu được Phoenix, nhưng đọc chuyện của Phoenix mới khám phá ra nhiều điều thật mới lạ. Những cảm giác khó tả dâng trào trong tôi. Từ những dòng tự sự, những bức thư chị gửi cho con trai, tôi nhận thấy chị là một người mẹ yêu con tuyệt vời nhưng cũng rất nghiêm khắc với con. Trong cuộc hành trình cùng con, chị đã luôn lắng nghe con, thấu hiểu con và dạy con từ những điều nhỏ nhất để con “học ăn, học nói, học gói, học mở” từ khi con còn rất nhỏ”.\r\n\r\nKhông hy vọng cuốn sách của mình sẽ trở thành bestseller, tác giả Phoenix Ho chỉ mong có thể chia sẻ kinh nghiệm làm mẹ của mình cho các bạn trẻ hơn, những người đang băn khoăn sẽ làm cha mẹ như thế nào ở thời điểm mà xã hội đang biến đổi thật nhanh. ​“Thông qua cuốn sách này, điều tôi muốn được chia sẻ chính là không có ai hiểu con mình bằng bản thân mình, và mình chính là người sẽ ảnh hưởng con nhiều nhất. Nhưng hai điều ấy chỉ xảy ra khi mình “quan tâm” đến vai trò làm mẹ, và “đặt” vai trò làm mẹ ở trong những tiêu chí quan trọng nhất trong cuộc sống”.  ', 0, 8, 2),
(17, '10 câu nói vạn năng', '10caunoivannang.jpg', 25000, '2018-12-13 07:19:00', 622, 156, 'Việt Nam', 8152, 'ĐỌC SÁCH\r\n\"10 câu nói đơn giản nhưng truyền tải đến mọi người những thông điệp hết sức mạnh mẽ.\" - Harvey Mackay - Tác giả của Swim with the Sharks Without Being Eaten Alive, quyển sách bán chạy số 1 của New York Times.\r\n\r\nLời nói tích cực có sức mạnh làm thay đổi cuộc sống theo hướng tốt đẹp hơn!\r\n\r\nTrở thành người lạc quan, tích cực chính là bước tiến đầu tiên cần có một nhà lãnh đạo tài ba. Điểm mấu chốt ở đây là chỉ bằng những lời đơn giản đầy sức mạnh như: \"Tôi tôn trọng bạn\" lại có thể thay đổi cả cuộc đời một con người.\r\n\r\n \r\n\r\nThông điệp từ cuốn sách này có ý nghĩa vô cùng quan trọng trong xã hội hiện đại ngày nay. Mọi xã hội đều cần đến những con người có thể khích lệ tinh thần và khơi dậy nguồn cảm hứng. Chính họ làm cho thế giới này luôn vận động. Và rất có thể bạn là một trong số họ!\r\n\r\nCuốn sách này dành cho tất cả mọi người đặc biệt là những ai khao khát tiến lên vị trí lãnh đạo.', 0, 9, 2),
(18, 'Cửa tiệm hạnh phúc', 'cuatiemhanhphuc.jpg', 67320, '2018-12-11 07:17:23', 5154, 1512, 'Việt Nam', 28269, 'Cửa Tiệm Hạnh Phúc\r\n\r\nHạnh phúc có lẽ là điều mà hầu như tất cả mọi người đều hướng đến. Không ai sống mà không mong cầu hạnh phúc. Xoay quanh chủ đề “hạnh phúc”, Cửa tiệm hạnh phúc của Lê Di không phải là một cuốn sách bàn về hạnh phúc theo kiểu chuyên viên tư vấn hay triết gia mà bằng góc nhìn rất riêng của tác giả, một người trẻ thích rong chơi và cóp nhặt những điều nhỏ nhặt, bình dị trong cuộc sống.\r\n\r\nHạnh phúc là gì? Độc thân liệu có hạnh phúc? Thế thì chắc gì cuộc sống hai mình đã hạnh phúc? Làm thế nào để tìm thấy hạnh phúc?... Tất cả đều là những băn khoăn rất đỗi thường tình và cũng là những câu hỏi con người mong tìm thấy lời giải đáp. Và rồi theo tác giả, hạnh phúc không xa vời và khó tìm đến thế, quan trọng chúng ta có mở cửa để hạnh phúc đến với mình không. Nếu biết lắng lại, chậm lại một chút thì chúng ta sẽ dễ dàng nhận ra hạnh phúc trong những điều bình dị, những điều mình thường lãng quên. Đặc biệt, nếu chúng ta sống thật với chính mình, hài lòng với cuộc sống hiện tại và nhìn cuộc sống ở mọi khía cạnh thì hạnh phúc sẽ đến thật gần. Cuốn sách là bức tranh về hạnh phúc mà tác giả mong muốn chia sẻ và phần nào truyền cảm hứng đến các bạn trẻ, những người đã và đang không ít lần cảm thấy băn khoăn, hoài nghi, vô định trên hành trình của mình.', 0, 6, 4),
(19, 'Hài hước một chút thế giới sẽ khác đi', 'haihuocmotchutthegioisekhacdi.jpg', 40800, '2018-12-02 06:15:22', 581, 54, 'Việt Nam', 1848, 'Cuộc đời này không thể thiếu sự hài hước, hài hước cũng là một nét đẹp, một gia vị khiến cuộc sống thú vị hơn. Hầu như không ai là không thích hài hước, dí dỏm, hơn nữa hài hước còn gắn bó mật thiết với sự thành bại của cuộc đời mỗi người.\r\n\r\nTrong cuộc sống gia đình, hài hước có thể  khiến các thành viên trong gia đình hòa thuận và hạnh phúc hơn. Sự dí dỏm có thể hòa giải được rất nhiều mâu thuẫn và tranh cãi giữa vợ chồng, giải tỏa những hiểu lầm, bất đồng hay xóa nhòa khoảng cách, thắt chặt tình cảm cả gia đình sống trong không khí đầm ấm.\r\n\r\nTrong giao tiếp xã hội, hài hước giúp chúng ta thiết lập được mạng lưới quan hệ rộng rãi. Người hài hước thường là những người tràn đầy nhiệt huyết với cuộc sống, với thế giới. Có ai lại nỡ từ chối giao tiếp với những người như vậy cơ chứ?\r\n\r\nHài hước có thể giúp bạn tự tạo ra môi trường thuận lợi “như cá gặp nước” trong các hoạt động xã giao. Hài hước không chỉ có lợi cho việc đàm phán mà còn như một cánh tay tiếp them sức mạnh cho công việc của bạn, giúp bạn nhanh chóng đạt được thành công, chuyển bại thành thắng.\r\n\r\nHài hước một chút, thế giới sẽ khác đi – cuốn sách với nội dung phong phú mà sâu sắc này sẽ giúp các bạn có được cái nhìn rõ nét hơn về tầm quan trọng của tính hài hước dưới các góc độ, phương diện đánh giá khác nhau, cũng như có thêm những kĩ năng vận dụng sự hài hước vào trong cuộc sống. Hi vọng sau khi đọc xong cuốn sách này, bạn có thể biến mình thành một người biết nói chuyện, khéo léo vận dụng những ngôn từ hài hước, “gãi đúng chỗ ngứa” của đối phương để mở ra con đường dẫn tới thành công, được mọi người yêu mến.\r\n\r\nBiết cách hài hước đúng mực sẽ giúp bạn thành công. Hãy cùng tìm hiểu  về nghệ thuật hài hước! Nó có thể giúp bạn đạt được những thành tựu rực rỡ cũng như nắm được bí quyết sử dụng thời gian một cách hữu hiệu trên  đường đời.', 0, 6, 4),
(20, 'Hẹn gặp em', 'hengapem.jpg', 35000, '2018-12-08 05:21:28', 845, 246, 'Việt Nam', 2552, '“Không cần biết cuộc đời này dài ngắn ra sao, mọi thứ có biến động, đổi thay như thế nào, nhưng anh biết có một điều sẽ không bao giờ thay đổi: đó là cuộc đời này, anh chỉ cần có em, cũng chỉ em ở bên cạnh mới khiến anh vững lòng. Cho nên, được sóng bước bên em trong hôn lễ của chúng mình chính là nỗi khát khao lớn nhất cuộc đời anh. Từ nay về sau, chúng ta sẽ mãi nắm tay nhau, ở bên nhau, cùng nhau đi qua năm tháng, không xa, không rời.”', 0, 1, 4),
(21, 'Hiểu về trái tim', 'hieuvetraitim.jpg', 96000, '2018-12-13 07:43:28', 1513, 252, 'Việt Nam', 8229, 'Mỗi chúng ta được sinh ra với một trái tim và đều mong muốn trái tim mình khỏe mạnh, an vui. Vậy mà có biết bao trẻ em nghèo bất hạnh với chứng bệnh tim bẩm sinh không tiền chữa trị, còn người khỏe mạnh thì vì những đau khổ của cuộc sống không hạnh phúc mà trái tim cũng bị tổn thương, mỏi mệt... Tác giả Minh Niệm là vị thầy có những trải nghiệm lớn lao trong thiền định và đang là điểm tựa tinh thần cho rất nhiều thiền sinh trên thế giới. Những bài viết của ông giúp chúng ta tìm lại chính mình, nuôi dưỡng những hạt giống tốt trong tâm hồn như lòng bao dung, vị tha, lắng nghe, chia sẻ... đồng thời nhận biết và chuyển hóa những năng lượng tiêu cực của giận hờn, ghen tỵ, che đậy, tham lam, đố kỵ...\r\n\r\n“Để chữa lành những tổn thương và nổi đau, cách tốt nhứt và hữu hiệu nhất là cần hiểu rõ được trái tim, tâm hồn của mình, và của người khác, cuốn sách Hiểu về Trái Tim chính là cuốn sách giúp bạn đọc làm được điều đó: Hiểu rõ và chữa lành trái tim, tâm hồn của mình và của những người xung quanh, để mọi người cùng được sống trong hạnh phúc và yêu thương. Với cuốn sách này, chúc bạn đọc sẽ luôn hạnh phúc và không bao giờ phải sống với một trái tim tan vỡ hay một tâm hồn tổn thương” Giáo sư – Tiến sĩ Trần Văn Khê', 0, 6, 3),
(22, 'Điều bình dị thông thái', 'dieubinhdithongthai.jpg', 18261, '2018-12-10 05:27:22', 263, 11, 'Việt Nam', 584, 'Điều Bình Dị Thông Thái là tập hợp những câu chuyện ngắn gọn nhưng thông thái của người xưa. Quyển sách nhỏ này sẽ giúp ta hiểu hơn về những góc cạnh của cuộc sống, để chọn cho mình một tâm thế vững vàng và thanh thản đối diện với mọi diễn tiến của cuộc đời.\r\n\r\nCuộc sống luôn chứa đựng nhiều bài học lớn, đồng thời mang đến cho con người nhiều trải nghiệm sâu sắc. Và con người thì luôn khát khao khám phá và chinh phục thế giới xung quanh. Nhưng cuộc đời mỗi chúng ta vốn không đủ dài để nếm trải hết mọi thử thách. Chính vì thế, việc học hỏi kinh nghiệm của người đi trước là điều vô cùng cần thiết.\r\n\r\nGiống như một hạt mầm nhỏ bé, nhưng một khi đã được gieo vào tâm hồn người đọc thì cuốn sách này sẽ làm nảy nở rất nhiều điều quý giá. Mỗi câu chuyện trong sách đều rất nhẹ nhàng, tinh tế, đem lại những giây phút bình yên và lắng đọng cho mỗi người. Nhưng dù đơn giản, bình dị như thế, dư vị mỗi câu chuyện để lại rất đậm nét và sâu sắc. Từng trang sách đem đến cho chúng ta những cái nhìn chân thực về cuộc sống, về những điều đôi khi bị chúng ta lãng quên, truyền tải những thông điệp về tình yêu thương. Đồng thời, người đọc thấy được giá trị của những điều bình dị, giản đơn, đôi khi chúng mới là những điều đáng trân trọng nhất trong cuộc sống này.\r\n\r\nCó thể nói đây là một cuốn sách rất tuyệt vời. Nếu có được cuốn sách này vào thời điểm tâm hồn bạn đang dậy sóng thì nhất định bạn sẽ lắng dịu lại, cảm thấy niềm vui và hạnh phúc trở về, tìm thấy những điều đáng quý.', 0, 6, 3),
(23, 'Đắc nhân tâm', 'dac_nhan_tam.jpg', 49400, '2018-12-03 10:17:32', 1853, 1518, 'Việt Nam', 88485, 'Đắc Nhân Tâm - Được lòng người, là cuốn sách đưa ra các lời khuyên về cách thức cư xử, ứng xử và giao tiếp với mọi người để đạt được thành công trong cuộc sống. Gần 80 năm kể từ khi ra đời, Đắc Nhân Tâm là cuốn sách gối đầu giường của nhiều thế hệ luôn muốn hoàn thiện chính mình để vươn tới một cuộc sống tốt đẹp và thành công.\r\n\r\nĐắc Nhân Tâm cụ thể và chi tiết với những chỉ dẫn để dẫn đạo người, để gây thiện cảm và dẫn dắt người khác,... những hướng dẫn ấy, qua thời gian, có thể không còn thích hợp trong cuộc sống hiện đại nhưng nếu người đọc có thể cảm và hiểu được những thông điệp tác giả muốn truyền đạt thì việc áp dụng nó vào cuộc sống trở nên dễ dàng và hiệu quả.\r\n\r\nĐắc Nhân Tâm, từ một cuốn sách, hôm nay đã trở thành một danh từ để chỉ một lối sống mà ở đó con người ta cư xử linh hoạt và thấu tình đạt lý. Lý thuyết muôn thuở vẫn là những quy tắc chết, nhưng Nhân Tâm là sống, là biến đổi. Bạn hãy thử đọc \"Đắc Nhân tâm\" và tự mình chiêm nghiệm những cái đang diễn ra trong đời thực hiện hữu, chắc chắn bạn sẽ có những bài học cho riêng mình.\r\n\r\nĐắc Nhân Tâm là nghệ thuật thu phục lòng người, là làm cho tất cả mọi người yêu mến mình. \"Đắc nhân tâm\" và cái Tài trong mỗi người chúng ta. \"Đắc Nhân Tâm\" trong ý nghĩa đó cần được thụ đắc bằng sự hiểu rõ bản thân, thành thật với chính mình, hiểu biết và quan tâm đến những người xung quanh để nhìn ra và khơi gợi những tiềm năng ẩn khuất nơi họ, giúp họ phát triển lên một tầm cao mới. Đây chính là nghệ thuật cao nhất về con người và chính là ý nghĩa sâu sắc nhất đúc kết từ những nguyên tắc vàng của Dale Carnegie.Sách đã được chuyển ngữ sang hầu hết các thứ tiếng trên thế giới và có mặt ở hàng trăm quốc gia. Đây là cuốn sách liên tục đứng đầu danh mục sách bán chạy nhất do thời báo NewYork Times bình chọn suốt 10 năm liền.\r\n\r\nTác phẩm có sức lan toả vô cùng rộng lớn - dù  bạn đi đến bất cứ đâu, bất kỳ quốc gia nào cũng đều có thể nhìn thấy. Tác phẩm được đánh giá là cuốn sách đầu tiên và hay nhất trong thể loại này, có ảnh hưởng thay đổi cuộc đời đối với hàng triệu người trên thế giới.', 0, 6, 3),
(24, 'Phép màu tuổi thơ', 'phepmautuoitho.jpg', 20400, '2018-12-18 08:29:41', 591, 153, 'Việt Nam', 1818, 'Phép Màu Tuổi Thơ (Tái Bản)\r\n\r\nTrẻ em ngày nay được tiếp cận với một nền giáo dục hiện đại, điều kiện vật chất cũng được cải thiện, nhưng tại sao bạo hành, tệ nạn xã hội và bạo lực học đường lại là vấn đề nan giải? Các nhà giáo dục đã đưa ra nhiều nguyên nhân nhưng có vẻ như vẫn chưa có câu trả lời thích đáng.\r\n\r\nKhủng hoảng kinh tế, hiện tượng trái đất nóng dần, nạn tham nhũng, bạo hành, ù lì, căng thẳng, thiếu tập trung, trầm uất… không phải do chúng ta nghèo đói, thiếu học thức, thiếu các kỹ năng, mà do thiếu ý thức và trách nhiệm, nghĩa là thiếu các giá trị cốt lõi mà ra. Chúng ta cần trang bị cho trẻ điều gì để các em có khả năng thích ứng với những thay đổi, sống tốt và có được các mối quan hệ hài hòa, biết đóng góp tài năng cho xã hội? Phải chăng nguyên nhân sâu xa nhất của các vấn nạn trên là do các em không nhận thức rõ và quản lý được cảm xúc của mình? Nếu quản lý tốt cảm xúc, các em sẽ biết điều chỉnh và sống hài hòa với xung quanh.\r\n\r\nPhép màu tuổi thơ là câu chuyện rất thật về cậu bé Mark. Mark chính là một ví dụ điển hình phản ánh rõ nét tình trạng trẻ em ở học đường hiện nay - chán học, bất cần, bị bắt nạt… Phép màu tuổi thơ chính là món quà vô giá dành tặng các em. Đây cũng là món quà hữu ích cho cả bố mẹ và thầy cô, những người luôn quan tâm đến trẻ.', 0, 8, 3),
(25, 'Tướng quân Hoàng Hoa Thám', 'tuongquanhoanghoatham.jpg', 60000, '2018-12-11 11:36:32', 515, 115, 'Việt Nam', 1815, 'Tướng quân Hoàng Hoa Thám được viết bởi nhà văn Lê Minh Quốc là một câu chuyện lịch sử trong tủ sách danh nhân lịch sử Việt Nam.\r\n\r\nCâu chuyện về vị “Chân tướng quân” Hoàng Hoa Thám từ khi ra đời cho đến khi nổi danh là “hùm thiêng Yên Thế”. Cùng với những câu chuyện cuộc đời của ông chính là công cuộc đóng góp của ông vào cuộc chiến đấu chống lại thực dân Pháp của ông và nhân dân ta…', 0, 7, 5),
(26, 'Làm mẹ trẻ quậy', 'lammetrequay.jpg', 25000, '2018-12-10 13:12:13', 816, 563, 'Việt Nam', 1812, 'Đa số người lớn đều mong con em mình có ý thức kỷ luật, giữ gìn nề nếp tốt, chủ động, tự tin, là “con ngoan trò giỏi”. Tuy nhiên, làm thế nào để đạt được điều đó luôn là câu hỏi khiến nhiều phụ huynh trăn trở, đặc biệt là đối với những trẻ em thường bị coi là bướng bỉnh, hay quậy phá, mắc lỗi. Cuốn sách Làm mẹ trẻ quậy sẽ phân tích cho người đọc thấy khi những hành vi quậy phá hoặc ngỗ ngược của trẻ cứ tiếp diễn dai dẵng có thể gây ra hậu quả nghiêm trọng, trở thành những rắc rối to lớn cho gia đình, cộng đồng. Hơn nữa, không nên bỏ qua chuyện này, cho đó là một ‘giai đoạn’ hoặc là chuyện mà trẻ sẽ ‘lớn lên là hết’. Sự dễ dãi, nuông chiều trong cách nuôi dạy trẻ quậy có thể là khởi đầu cho những cơn nóng giận thường xuyên, cáu kỉnh, có hành vi bốc đồng, hoặc trở nên dễ dàng bực tức của trẻ sau này khi đã lớn lên.\r\n\r\nPhải biết cách làm mẹ và dạy con trong 5 năm đầu. Nhất là trong thời gian chúng chưa biết nói. Khi nghe bé con khoảng 1 năm tuổi khóc, ai mà không xót ruột do không biết bé khóc vì bệnh hành hay khóc vì tính nhõng nhẽo, vòi vĩnh (bé chưa nói được, chưa giải thích được). Lúc đó nếu có sẵn chút kiến thức, người mẹ hay cha sẽ bớt băn khoăn hơn. Mục đích của cuốn sách Làm mẹ trẻ quậy chính là tập hợp kiến thức lại để vận dụng trong những tình huống như thế.\r\n\r\nMời các bạn đón đọc Làm mẹ trẻ quậy - Lê Nhất Phương!', 0, 8, 5),
(27, 'Tiếng chim vườn cũ', 'tiengchimvuoncu.jpg', 151000, '2018-12-13 15:12:09', 1837, 1516, 'Việt Nam', 84821, '\"Tiếng chim vườn cũ\" được kể lại dưới lời của một vị bác sĩ trẻ thuộc khoa tâm thần, anh tự tin rằng mình có thể tìm cách chữa trị căn bệnh cho cô em gái nuôi tên Phương Thảo. Với những kiến thức được học ở trường Y cùng sự hướng dẫn của những người thầy có kinh nghiệm lâu năm trong ngành, anh hy vọng luận án về căn bệnh của Phương Thảo sẽ được hoàn thành một cách tốt nhất, khi hằng ngày anh chức kiến cô đang dần dần khá lên và nhận thức được nhiều thứ. Tuy nhiên, một việc bất ngờ xảy ra tại buổi tiệc cuối khóa đã đưa Phương Thảo trở về trạng thái hoảng loạn ban đầu. Anh điên cuồng tìm kiếm nguyên nhân, tìm kiếm gốc rễ căn bệnh, những ký ức của quá khứ hòng mang cô trở về, nhưng có vẻ nhưng mọi cố gắng đều trở nên vô ích khi sự thật của một tuổi thơ đầy ám ảnh được hé mở.\r\n\r\nMời các bạn đón đọc Tiếng chim vườn cũ - Nguyễn Mộng Giác!', 0, 1, 5),
(28, 'Xuôi dòng', 'xuoidong.jpg', 25400, '2018-12-11 11:03:12', 848, 150, 'Việt Nam', 1520, 'Trích đoạn:\r\n\r\nLâu lắm rồi, hình như trên hai mươi năm trước, nhà văn Ý Dino Buzatti có viết một đoản văn chàng rất thích. Ý nghĩ và tưởng tượng của Buzatti đơn giản thôi. Một người cầm bút vừa xuất bản một cuốn sách mới. Anh ta tò mò muốn biết độc giả \"cư xử\" thế nào đối với tác phẩm của mình. Ai lại chẳng tò mò như vậy! Nhưng thay vì lân la ở các hiệu sách để dò xét phản ứng của các khách mua, người cầm bút trong đoản văn của Buzatti có được một phương pháp tối tân hơn: anh ta tìm mua được một cái máy nhỏ xíu chạy pin do Nhật chế tạo. Sau khi bấm nút tìm đúng tần số, anh ta có thể nhìn lên khung hình nhỏ xíu quang cảnh những bạn đọc xa lạ bước tới chỗ quầy sách \"làm quen\" với tác phẩm của mình.', 0, 1, 5),
(29, 'Khéo ăn nói sẽ có được thiên hạ', 'kheoannoisecoduocthienha.jpg', 74800, '2018-12-03 09:18:30', 8462, 5640, 'Việt Nam', 185287, 'Trong xã hội thông tin hiện đại, sự im lặng không còn là vàng nữa, nếu không biết cách giao tiếp thì dù là vàng cũng sẽ bị chôn vùi. Trong cuộc đời một con người, từ xin việc đến thăng tiến, từ tình yêu đến hôn nhân, từ tiếp thị cho đến đàm phán, từ xã giao đến làm việc... không thể không cần đến kĩ năng và khả năng giao tiếp. Khéo ăn khéo nói thì đi đâu, làm gì cũng gặp thuận lợi. Không khéo ăn nói, bốn bề đều là trở ngại, khó khăn. Trong thời đại thông tin và liên lạc phát triển nhanh chóng, tin tức được cập nhật liên tục, các công cụ thông tin và kĩ thuật truyền thông được ứng dụng rộng rãi như ngày nay thì việc khéo ăn nói đã trở thành “cái tài số một thiên hạ”. Trong khoảng thời gian ngắn nhất, nếu ai có thể nêu bật được khả năng, thực lực của mình cho đối phương biết thì đó sẽ là người chiến thắng. Chính vì vậy mà câu nói “Khéo ăn nói sẽ có được thiên hạ” rất có ý nghĩa. Vậy, như thế nào mới gọi là biết cách ăn nói? Nói năng lưu loát, không ấp úng có được gọi là biết cách nói chuyện không? Nói ngắn gọn, nói ít nhưng ý nghĩa thâm sâu có được gọi là biết cách nói chuyện không? Hay nhất định phải nói nhiều mới là biết nói chuyện?\r\n\r\nTrong cuộc sống thường ngày, chúng ta thấy rằng: Biết cách nói chuyện không nhất định là phải nói nhiều, quan trọng là phải nói đúng trọng tâm, đúng nội dung. Và điều quan trọng là phải nắm được vấn đề mình đang nói đến. Chắc chắn rất nhiều người đã gặp phải tình huống như thế này: Có những nhân viên tiếp thị khi gặp khách hàng thì giống như một cái máy, nói không ngừng nghỉ, không để ý tới phản ứng và cảm nhận của khách hàng, không cần biết vị khách đó có đang nghe lời giới thiệu về sản phẩm hay không. Nếu làm việc như vậy thì người đó nắm chắc phần thất bại. Trong cuộc sống và trong công việc, chúng ta cũng rất hay gặp phải hiện tượng như sau: Nhiều người khi nói chuyện với người quen thì nói rất hay, không bị mất bình tĩnh hay ấp úng.\r\n\r\nThế nhưng khi gặp người lạ hoặc phải nói chuyện trong một đám đông, thì người đó dường như bị mất sự chủ động với ngôn ngữ, có lúc còn không biết mình đã nói gì. Vậy làm thế nào để cải thiện và tránh gặp phải những tình huống như trên? Làm thế nào để ăn nói khéo léo? Có phương pháp và quy luật nào được áp dụng khi giao tiếp không? Có nguyên tắc và bí quyết nào cho các cuộc nói chuyện không? Trong những tình huống khác nhau, với những người khác nhau thì phải nói chuyện như thế nào, và làm sao để trình bày những điều khó nói? Cuốn sách “Khéo ăn nói sẽ có được thiên hạ” này sẽ giải đáp những câu hỏi đó. Cuốn sách với ngôn từ rõ ràng, gần gũi với cuộc sống sẽ mang đến những kĩ năng và phương pháp giao tiếp thực dụng, chắc chắn sẽ giúp ích cho quý độc giả. Nếu như những quy tắc và phương pháp chỉ giúp một số ít người nắm được và ứng dụng, thì giá trị của nĩ là có hạn. Chỉ cần những quy tắc và phương pháp cuốn sách đưa ra giúp được nhiều người, thì giá trị của nó là vơ hạn. Tác giả của “Khéo ăn nói sẽ có được thiên hạ” đã dốc hết tâm sức nghiên cứu về các kĩ năng và quy tắc giao tiếp, đây cũng chính là giá trị lớn nhất của cuốn sách.\r\n\r\nMột cuốn sách hay sẽ tự nói lên được giá trị của nó, và tự bản thân mỗi độc giả sẽ cảm nhận được điều đó. Quý độc giả sẽ tự nhiên yêu thích một cuốn sách có thể chạm đến trái tim và bổ ích cho mình. Còn với một cuốn sách không hay, độc giả sẽ không mua và cũng sẽ không để tâm đến. Sự hay dở của một cuốn sách do chính độc giả cảm nhận và xác định, thị trường sách cũng sẽ có đánh giá.\r\n\r\nCuối cùng, nhắc lại về vấn đề giao tiếp, tôi có hai điều muốn nói với độc giả:\r\n\r\nThứ nhất là nói chuyện phải chân thành. Chân thành chính là thứ ngôn ngữ hay nhất, nếu không chân thành thì cho dù nói nhiều bao nhiêu, nắm được nhiều kĩ năng và phương pháp giao tiếp đến thế nào, tất cả cũng chỉ là vô nghĩa.\r\n\r\nĐiều thứ hai là phải lắng nghe bằng trái tim. Chỉ có lắng nghe bằng trái tim thì chúng ta mới biết phải nói gì, nói như thế nào. Những người không biết cách lắng nghe thì không phải là người biết cách nói chuyện.\r\n\r\nNgười biết cách nói chuyện thì chắc chắn là người biết lắng nghe.\r\n\r\nChúc quý độc giả đọc sách vui vẻ và có thể nâng cao được kĩ năng giao tiếp của mình. Biết cách nói chuyện khéo léo và luôn có được cuộc sống tuyệt vời.', 0, 6, 6),
(30, 'Tuổi trẻ nào rồi cũng sẽ qua', 'tuoitrenaoroicungsequa.jpg', 55500, '2018-12-06 06:17:19', 4843, 1848, 'Việt Nam', 184810, '“Tuổi trẻ nào rồi cũng sẽ qua - tôi nghĩ rằng đó là một thông điệp mà ít ai để ý và đoái hoài. Thường người ta sẽ thỏa sức mà đắm chìm trong tuổi thanh xuân của mình mà quên mất rằng mỗi người chỉ sở hữu duy nhất một lần trải nghiệm như thế. Và đa phần, người ta cảm thấy nuối tiếc khi bước qua lứa tuổi đẹp đẽ ấy.\r\n\r\nVới 17 truyện ngắn trong cuốn sách này, dẫu rằng chưa đủ để bao quát trọn vẹn về tuổi thanh xuân của mỗi người, nhưng tôi tin, những ai đã, đang và sắp sửa bước qua lứa tuổi rực rỡ ấy, sẽ có thể dành ra một chút suy tư và hoài niệm để nghĩ về khoảnh khắc đó.\r\n\r\nTrên hành trình băng qua tuổi trẻ, chúng ta đã từng mơ ước điều gì?\r\n\r\nTrong thời khắc tận hưởng tuổi thanh xuân ấy, chúng ta đã phút nào đánh mất đi những điều thân thuộc mà mình không trân giữ?\r\n\r\nVà khi tất cả đã trôi qua, người ta đã đủ an lòng để chợt nhớ về nó như hồi ức đẹp hay chưa?\r\n\r\nTôi nghĩ, tuổi trẻ nào rồi cũng sẽ qua, nhưng cái chúng ta muốn hướng đến, là không để tuổi trẻ đó trôi đi một cách vô nghĩa. Như một sáng bình minh thức dậy, người ta vẫn có thể mỉm cười với giấc mơ đêm qua…”\r\n\r\nTrân trọng giới thiệu!', 0, 10, 6),
(31, 'Nói thế nào để được chào đón, làm thế nào để được ghi nhận', 'noithenaodeduocchaodonlamthenaodeduocghinhan.jpg', 56440, '2018-12-07 05:06:25', 5515, 1520, 'Việt Nam', 85841, 'Nói Thế Nào Để Được Chào Đón, Làm Thế Nào Để Được Ghi Nhận Có câu cách ngôn “Ở nhà nhờ bố mẹ, ra ngoài cậy bạn bè”, nói như vậy đủ hiểu quan hệ xã hội có vai trò quan trọng thế nào trong đời sống. Tuy nhiên quan hệ xã hội lại cũng là chuyện phức tạp nhất. Học ăn học nói học gói học mở là lời dặn con từ thuở lọt lòng. Dựa vào kiến thức tâm lí học, cuốn sách giúp bạn phân định rõ hơn những chuyện nên nói, nên làm cũng như gợi ý cho bạn cách nói, cách làm khiến người khác thấy tâm phục khẩu phục. Muốn thăng chức, muốn tăng lương, phải nói thế nào? Muốn từ chối, lại sợ người khác phiền trách, phải làm thế nào? Muốn lỗi hẹn, lại sợ người khác tức giận, phải làm thế nào? Muốn chỉ trích, muốn bảo ban, lại sợ người ta tự ái, phải làm thế nào? Muốn thay đổi giao ước, lại sợ bị tẩy chay, phải nói thế nào, làm thế nào? Nhất cử nhất động đều tạo phản ứng dây chuyền, chuyện gì không được nói, hễ nói sẽ sai? Việc gì không được làm, hễ làm sẽ tiếc? Hãy học hỏi từ các bậc thầy chiến lược, nghe họ nói, xem họ làm, rồi bạn sẽ tỏa sáng.', 0, 6, 6),
(34, 'Về nhà với mẹ', 'venhavoime.jpg', 69420, '2018-12-12 03:12:26', 1811, 462, 'Việt Nam', 4810, 'Lỗi Ở Yêu Thương - Về Nhà Với Mẹ\r\nLỗi ở yêu thương (Thanh Duy) là cảm xúc về những mối tình đã qua, có giận hờn, có ngọt ngào, có hạnh phúc và có cả chia ly… của chính tác giả. Ngoài ra đó cuốn sách còn chứa đựng những cảm xúc giản dị, chân thành trước những hình ảnh thân thương gắn bó với cuộc sống thường ngày của của tác giả.\r\n\r\nVề nhà với mẹ (Thanh Thủy) là những vần thơ mộc mạc, đơn sơ, viết về hình ảnh đời thường, về tình bạn, về tình yêu thương gia đình, con cái…\r\n\r\nTrích đoạn\r\n\r\n\"Những chuỗi kí ức ngọt ngào như dư vị của một tách trà hoa cúc. Vị ngọt thanh đọng lại nơi cổ họng, rồi tan dần khi tâm hồn vẫn còn đang lơ lửng ở không trung.\r\n\r\nNgười ta thường bảo nhau chuyện qua rồi nên để nó trong quá khứ. Thế nhưng chàng trai cứ giữ mãi những kí ức dịu ngọt về những người đi qua đời mình. Lâu lâu chàng lại lôi ra gặm nhấm, nhâm nhi như một loại bánh cookie. Cái thú vui ấy vốn dĩ không nên dành cho những người quá nhạy cảm – như chàng. Nhưng có sao đâu, vui ấy mà.\r\n\r\nNgười đến, rồi người đi.\r\n\r\nNíu giữ có nghĩa gì\r\n\r\nRồi có khi nhìn lại\r\n\r\nPhải cảm tạ chia li.\"\r\n\r\n(Người đến rồi người đi)\r\n\r\n...\r\n\r\n\"Cảm ơn định mệnh đã cho anh gặp em, cảm ơn định mệnh đã cho ta yêu nhau, cảm ơn định mệnh đã cho ta tận hưởng được những gì ngọt ngào nhất mà nhân danh tình yêu mang lại. Rồi bây giờ đây, chính anh thầm oán trách định mệnh đã cho anh gặp em làm chi để giờ đây trước mắt anh là một khối màu xám đục. Thôi thì, em đã chọn cho mình một con đường, con đường đó không có hình bóng của của anh bên cạnh. Anh sẽ đứng nhìn em ở một con đường khác. Biết đâu, trên hai con đường đó, chúng ta lại một lần nữa được giao nhau.\r\n\r\nSài Gòn của những ngày đầu tháng Chín ảm đạm, nhưng Sài Gòn vẫn đẹp, vẫn hối hả và lòng anh vẫn tin rằng Anh Vẫn Yêu Em \"\r\n\r\n(Sài Gòn, anh vẫn yêu em)\r\n\r\n...\r\n\r\n\"Rồi có ngày mẹ cha già chống gậy,\r\n\r\nVẫn mong con luôn giúp ích cho đời.\r\n\r\nDù ở đâu hay đi khắp mọi nơi\r\n\r\nLúc mỏi mệt hãy về nhà với mẹ\"\r\n\r\n(Về nhà với mẹ)', 0, 10, 6),
(35, 'Vấp ngã tuổi 20', 'vapngatuoi20.jpg', 45100, '2018-11-02 07:14:07', 1515, 151, 'Việt Nam', 4362, 'óm tắt tiểu thuyết \"Vấp Ngã Tuổi 20\": Câu chuyện kể về hai nhân vật chính, Đàm Di Đan và Diệu Linh - hai chị em họ từ quê vào Sài Gòn học Đại học. Những bỡ ngỡ ở ngưỡng tuổi đang lớn, những va chạm lần đầu tiên bắt gặp nơi thành thị, những rung động đầu đời của tuổi trẻ... và từ đó là những vấp ngã ở tuổi hai mươi. Hai cô gái, hai sự trải nghiệm khác nhau, cả trong môi trường học lẫn cuộc sống cá nhân. Và cuối cùng họ đều nhất ra, tình cảm gia đình, tình chị em mới là điều quan trọng nhất.\r\n\r\nMục lục:\r\n\r\nChương 1: Thi đại học\r\n\r\nChương 2: Kết quả thi đại học\r\n\r\nChương 3: Chuyến tàu Bắc - Nam và \"cơn nghiện đi xe buýt\"\r\n\r\nChương 4: Sinh viên các tỉnh và những môn học \"khó nuốt\"\r\n\r\nChương 5: Xin việc làm thêm và mối thù thời thơ ấu\r\n\r\nChương 6: Món quà xa xỉ, vé tàu Tết và cái Tết xa nhà\r\n\r\nChương 7: Tết không cần mặc áo ấm, đắp chăn bông\r\n\r\nChương 8: Cuộc sống mới\r\n\r\nMời các bạn đón đọc tiểu thuyết: \"Vấp Ngã Tuổi 20 - Lâm Phương Lam\"', 0, 11, 6),
(36, 'Cùng nhau lớn lên, cùng nhau già đi', 'cungnhaulonlencungnhaugiadi.jpg', 57700, '2018-10-27 04:32:06', 1581, 188, 'Việt Nam', 4848, 'Cùng Nhau Lớn Lên, Cùng Nhau Già Đi\r\n\r\n     M - nữ chính trong “Cùng nhau lớn lên, cùng nhau già đi” đã ba mươi ba tuổi, sự nghiệp thành công, nhưng chưa có người yêu. Là một người độc thân, nữ chính phải sống dưới chính sách ép hôn khắc nghiệt của mẹ. Nhìn bề ngoài, cô hay nói chêm chọc, hoạt bát sôi nổi, nhưng thực tế trong tim cô lại cất giấu nỗi đau không ai hay biết. Người yêu, cũng chính là mối tình đầu không bao giờ quay trở lại được kia đã trở thành hồi ức không thể xóa mờ trong cô. Nhưng, bạn phải tin rằng “Vết thương, rồi sẽ có một ngày đóng vảy, nhưng vết sẹo thì mãi luôn in hằn ở đó. Chỉ là, không có vết thương, thì sao có được sự kiên cường?”. Trên thế giới này, sẽ luôn có một người vượt qua biển người để đến bên bạn, xóa mờ “vết sẹo” trong quá khứ của bạn, cầm lấy tay bạn, nguyện một lòng dìu bước bạn tới già.\r\n\r\n      Bạn phải tin, bạn phải đợi. Và M đã đợi được.\r\n\r\nTrích dẫn nổi bật:\r\n\r\n“Vết thương, rồi sẽ có một ngày đóng vảy, nhưng vết sẹo thì mãi luôn in hằn ở đó. Chỉ là, không có vết thương, thì sao có được sự kiên cường?”\r\n\r\n“Mỗi người chúng ta đều từng được tận hưởng sự tươi đẹp của tình yêu, cho dù cuối cùng có đến được với nhau, tạo dựng mái ấm hay không. Đôi khi, có được tươi đẹp trong một khoảnh khắc là đủ. Người thích hợp với bạn nhất, có thể dìu bước bạn tới cuối cuộc đời, rồi có một ngày sẽ xuất hiện, chỉ là sớm hay muộn mà thôi. ”', 0, 11, 6),
(37, 'Ký ức người thầy', 'kyucnguoithay.jpg', 14200, '2017-12-11 12:12:20', 852, 154, 'Việt Nam', 1812, 'Cuốn sách Ký ức người thầy là tập hợp các bài viết được chọn vào vòng chung khảo và đoạt giải.\r\n\r\nNhững câu chuyện trong Ký ức người thầy là những mảng màu đa sắc của niềm vui nỗi buồn, nỗi day dứt, của giọt nước mắt nuối tiếc hay hạnh phúc của những người đã và đang bước qua nghề giáo. Nhà báo Nguyễn Tuấn Anh, thư ký toà soạn báo Sinh Viên Việt Nam, thường trực cuộc thi nhận xét: \"Trong khoảng 10 năm làm công việc biên tập tại báo Sinh viên Việt Nam, tôi đã đọc duyệt nhiều bài viết, đã tham gia chấm bài không ít cuộc thi viết, nhưng bài tham dự cuộc thi \"Người học trò trong trí nhớ\" đem lại cho tôi một cảm xúc rất đặc biệt.\"\r\n\r\nĐó là những xúc cảm của người từng chọn cho mình nghề: \"gõ đầu trẻ\". Có đứa trẻ thành công, có đứa trẻ trở thành người bình thường, nhưng đều để lại trong lòng thầy cô cảm xúc và ấn tượng khó phai. Tình yêu, kỷ niệm trong những trang viết giản dị mà chân thành ấy vừa là bài ca tri ân người đưa đò, vừa là hành trang quý giá cho các em học sinh, sinh viên đang và sẽ chọn cho mình nghề cao quý trong xã hội: Nghề trồng người.\r\n\r\nĐọc Ký ức người thầy, bạn đọc sẽ tìm lại được hình ảnh mình, thầy cô mình thời đi học và có niềm tin vào người giáo, nghề giáo.\r\n\r\nWaka trân trọng giới thiệu!', 0, 1, 6);
INSERT INTO `sach` (`MaSach`, `TenSach`, `HinhURL`, `GiaSach`, `NgayNhap`, `SoLuongTon`, `SoLuongBan`, `XuatXu`, `SoLuocXem`, `MoTa`, `BiXoa`, `MaLoaiSach`, `MaNhaXuatBan`) VALUES
(38, 'Cứ bình tĩnh', 'cubinhtinh.jpg', 59860, '2018-12-19 03:11:11', 515, 251, 'Việt Nam', 4622, 'Tuần hoàn cuộc sống, có yêu thì sẽ có ghét. Sẽ là bất khả thi nếu khuyên con người đừng ghét bỏ ai. Tôi cũng từng ghét người khác, vì tôi nghĩ rằng họ là tác nhân khiến tôi mất đi điều tôi yêu quý. Nhưng suy cho cùng, nếu thứ đó thật sự là của tôi, thì chẳng ai lấy đi được, chẳng ai tác động được. Chỉ có tôi, nếu cứ tiếp tục thù ghét họ thì chính tôi mới tự lấy đi bình yên của bản thân mình. Và tôi quyết định thôi nghĩ về họ. Người đánh vào đời ta một cái, ta xô lại người một cái, oan oan tương báo đến bao giờ mới dứt? Lẽ thường con người ta cứ thấy mình trong vòng xoáy lẩn quẩn là vì thế. Nếu không thể thương nhau, thì cũng đừng ghét, mà đã ghét thì hãy tránh xa chứ đừng nên tìm cách trả đũa nhau làm gì.\r\n\r\nThời vụng dại, hứa yêu nhau mãi mãi, yêu đến sông cạn núi mòn. Khi trưởng thành rồi mới hiểu trên đời này chẳng có điều gì là mãi mãi, kể cả tình yêu. Chỉ có kỷ niệm đẹp mới tồn tại vĩnh viễn trong ký ức của mỗi người, nên sống tốt với nhau được ngày nào quý ngày đó.\r\n\r\nHãy cố gắng đặt niềm tin vào đúng người, nếu có vô tình đặt sai thì hãy hiểu rằng niềm tin vào chính bản thân mình vẫn là nguyên vẹn, chỉ có lòng tin dành cho người không xứng đáng mới bị sứt mẻ đi.  Và ta phải có đủ bản lĩnh để vượt qua những cám dỗ trong cuộc đời, bản lĩnh để cùng nhau đi qua ngày sóng gió, bản lĩnh để vượt qua đớn đau khổ lụy trong tình yêu mà không đánh mất chính mình.\r\n\r\nMọi chuyện xảy ra trên đời này đều có nguyên nhân của nó, nếu cuộc đời ban cho ta quả đắng thì việc của ta chính là bình tĩnh đón nhận, bình tĩnh đối mặt và bình tĩnh bước qua.', 0, 1, 8),
(39, 'Phụ nữ vạn người mê', 'phunuvannguoime.jpg', 61410, '2018-12-19 15:05:24', 1055, 592, 'Việt Nam', 1818, 'Những người phụ nữ trong Phụ nữ vạn người mê đến khi đạt được điều họ mong muốn, đến khi nắm được trong tay mộng tưởng của mình, ngoảnh đầu nhìn lại phía sau, họ có thật sự hài lòng và hạnh phúc hay không?\r\nVạn người mê, vạn người mê thì sao chứ, chắc gì người mình muốn, mình cần, mình thích cũng sẽ yêu và thương mình? Trăm người cần thì sao chứ, lòng lại chỉ cần một người duy nhất!', 0, 1, 8),
(40, 'Bán hàng cho những gã khổng lồ', 'banhangchonhunggakhonglo.jpg', 109850, '2018-12-18 13:06:27', 1566, 335, 'Việt Nam', 18420, 'Ngày nay, việc sắp xếp các cuộc họp bán hàng với những người ra quyết định tại các công ty lớn là vô cùng khó khăn. Nếu thấy điều này là đúng thì bạn không hề đơn độc. Rất nhiều yếu tố thị trường đã cản trở việc tiếp cận với các công ty lớn. Người ta cần những cách tiếp cận mới để đạt được thành công trong thị trường cuồng loạn hiện nay. Bó mình trong những điều đã cũ sẽ chẳng đưa bạn tới đâu – và đặc biệt nếu đích đến là một công ty lớn lại càng xa vời. Các chiến lược bán hàng mới là rất cần thiết để tiếp cận những gà khổng lồ này. Cuốn sách Bán hàng cho những gã khổng lồ cung cấp cho bạn:\r\n\r\n-      Các đối tượng mục tiêu mà bạn có khả năng thành công cao nhất.\r\n\r\n-      Cách tìm những khách hàng tiềm năng có thể sử dụng sản phẩm bạn cung cấp.\r\n\r\n-      Cách tạo ra các đề xuất giá trị đột phá thu hút sự chú ý của họ.\r\n\r\n-      Cách tạo ra chiến dịch tiếp cận khách hàng trên nhiều phương diện.\r\n\r\n-      Cách vượt qua những thách thức điển hình trong nỗ lực tìm kiếm các khách hàng doanh nghiệp lớn.', 0, 2, 7),
(41, 'Người giàu có nhất thành Babylon', 'nguoigiaunhatthanhbabylon.jpg', 186000, '2018-12-19 16:24:58', 1810, 153, 'Việt Nam', 48408, 'Người giàu có nhất thành Babylon của George S. Clason đã trở thành một tác phẩm kinh điển đầy hứng khởi cho giới kinh doanh ngày nay.\r\n\r\nTrước mắt bạn, tương lai đang trải rộng con đường dẫn tới những miền đất xa xôi đầy hứa hẹn. Trên con đường đó, bạn háo hức, mong muốn thực hiện nhiều ước mơ, dự định, khát khao… của riêng mình.\r\n\r\nĐể những nguyện vọng của mình được thực hiện, ít nhất bạn phải thành công về mặt tiền bạc. Quyển sách này sẽ giúp bạn biết cách vận dụng những nguyên lý quan trọng để phát triển tài chính. Hãy để cuốn sách dẫn dắt bạn đi từ một hoàn cảnh khó khăn, tiêu biểu là một cái túi lép xẹp, đến một cuộc sống đầy đủ và hạnh phúc, tiêu biểu là một túi tiền căng phồng, sung túc.\r\n\r\nKhi nói đến tiền bạc, chúng ta thường đề cập đến quy luật trọng trường và nó luôn phổ quát và bất biến trong mọi trường hợp. Trải qua thời gian dài và phát triển, quy luật này đã được trải nghiệm và đúc rút thành những bí quyết không chỉ đảm bảo cho bạn một túi tiền đầy, mà còn giúp cho bạn có một cuộc sống cân bằng để có thể phát triển mỹ mãn hơn những tiềm năng của bản thân trong các lĩnh vực khác của cuộc sống. Bởi trên thực tế, không ai có thể phủ nhận rằng sự dồi dào về vật chất có thể làm cho đời sống con người trở nên tốt đẹp hơn. Riêng trong lĩnh vực kinh doanh, sức mạnh tài chính là phương tiện chủ yếu để đo lường mức độ thành đạt của các doanh nhân.\r\n\r\nNgày nay, tiền bạc vẫn có những ảnh hưởng lớn đối với cuộc sống con người, cũng giống như cách đây năm ngàn năm nó đã chi phối mạnh mẽ cuộc sống của cư dân vương quốc Babylon, thúc đẩy họ tìm hiểu và nắm bắt các quy luật tạo ra tiền, nhằm có được một cuộc sống sung túc và sang trọng bậc nhất.\r\n\r\nCuốn sách này sẽ đưa chúng ta trở lại vương quốc Babylon cổ đại, cái nôi nuôi dưỡng những nguyên lý cơ bản về tài chính mà giờ đây con người hiện đại đã kế thừa và vận dụng trên toàn thế giới.\r\n\r\nMời các bạn đón đọc!', 0, 2, 2),
(42, 'Lãnh Đạo Bằng Câu Hỏi', 'lanhdaobangcauhoi.jpg', 70200, '2018-12-05 09:30:12', 2812, 1518, 'Việt Nam', 418410, 'Lãnh Đạo Bằng Câu Hỏi\r\n\r\nSự khác biệt giữa nhà lãnh đạo và nhà quản lý là các nhà lãnh đạo đặt đúng câu hỏi, và các nhà quản lý có nhiệm vụ trả lời những câu hỏi đó. Đặt đúng câu hỏi cho phép các nhà lãnh đạo khám phá những việc đúng đắn cần làm. Trả lời câu hỏi cho phép các nhà quản lý làm đúng.\r\n\r\nTầm quan trọng và sức mạnh của việc lãnh đạo bằng câu hỏi là chủ đề của quyển sách này. Biết được thời điểm, địa điểm, lý do và cách thức đặt câu hỏi có thể giúp nhà lãnh đạo tăng cường mối quan hệ với nhân viên, xây dựng đội ngũ mạnh mẽ, tạo ra văn hóa học hỏi hăng say, hỗ trợ thay đổi chiến lược, xây dựng mối quan hệ gắn bó với khách hàng và các bên liên quan.\r\n\r\nCác nhà lãnh đạo giỏi đặt câu hỏi hay, và những câu hỏi hay có thể giúp các nhà lãnh đạo trở thành nhà lãnh đạo giỏi.', 0, 2, 7),
(43, 'Toán phát triển tư duy lớp 1&2 (6 – 8 tuổi)', 'toanphattrientuduy.jpg', 52100, '2018-10-29 05:15:07', 510, 123, 'Việt Nam', 1841, 'Trong một xã hội năng động như hiện nay, việc học của học sinh không còn đơn thuần là ghi nhớ, tiếp thu những kiến thức trong sách vở một cách thụ động mà đòi hỏi các em phải rèn luyện kỹ năng tư duy, nếu không có tư duy sáng tạo sẽ rất khó để chinh phục thành công trong tương lai. Học Toán tốt cũng đồng nghĩa với việc rèn luyện tư duy tốt. Nhưng làm thế nào để thực hiện được điều đó? Ngoài việc học tập trên lớp, học sinh tiểu học có thể bổ trợ thêm kiến thức kỹ năng tư duy ở bộ sách tham khảo phù hợp nào?\r\n\r\nNhận ra được những băn khoăn ấy, Công ty Cổ phần Sách Thái Hà (ThaiHaBooks) đã không ngừng nỗ lực tìm kiếm những giải pháp để sẻ chia, đáp ứng nguyện vọng của cha mẹ khi giáo dục con em mình – Đó là sự ra đời của dự án sách Toán song ngữ. Chúng tôi đã tìm đến Nhà giáo Nguyễn Áng, tác giả uy tín của nhiều tựa sách giáo khoa và sách tham khảo tiểu học, để xây dựng nên bộ sách TOÁN PHÁT TRIỂN TƯ DUY. Bộ sách gồm 3 cuốn, cuốn 1 dành cho lớp 1&2 (phù hợp với lứa tuổi 6 – 8), cuốn 2 dành cho lớp 3&4 (phù hợp với lứa tuổi 8-10), cuốn 3 dành cho lớp 5 và chuẩn bị vào lớp 6 (phù hợp với lứa tuổi 10-11).\r\n\r\nBộ sách được kết tinh từ những kiến thức toán truyền thống, bám sát chương trình học kết hợp với những xu hướng hiện đại, gắn với thực tiễn, tư duy sáng tạo thông qua các kỳ thi học sinh giỏi, Violympic… ở trong và ngoài nước. Mỗi cuốn sách được chia thành hai phiên bản, phiên bản Tiếng Việt và phiên bản Tiếng Anh, nhằm cung cấp cho học sinh những kiến thức, kỹ năng tư duy Toán học, đồng thời làm quen với Tiếng Anh, tạo môi trường sử dụng ngoại ngữ ngay từ khi còn nhỏ.\r\n\r\nNội dung mỗi cuốn sách dựa trên các kiến thức kỹ năng cơ bản của chương trình sách giáo khoa, được khai thác hệ thống phát triển nâng cao dần theo hướng rèn luyện năng lực tư duy, gắn với thực tiễn và bước đầu phát huy óc sáng tạo độc lập trong suy nghĩ và giải quyết vấn đề phù hợp với lứa tuổi ở từng giai đoạn học tập của học sinh tiểu học. Nội dung các bài toán cố gắng thể hiện qua các tình huống, trò chơi… gắn với cuộc sống quanh ra, với những hình vẽ, màu sắc sinh động hấp dẫn giới trẻ.\r\n\r\nCuốn Toán phát triển tư duy lớp 1&2 (6 – 8 tuổi) gồm 295 câu hỏi trắc nghiệm và bài toán tự luận được chia thành nhiều phần.\r\n\r\nMời các bạn đón đọc!', 0, 3, 7),
(44, 'Lọ nước thần', 'lonuocthan.jpg', 66400, '2018-12-14 05:29:59', 5813, 455, 'Việt Nam', 48412, 'Trong kho tàng truyện cổ tích Việt Nam, \"Lọ nước thần\" hay người ta hay biết đến hơn với cái tên \"Ai mua hành tôi\" vẫn được coi là một trong số những truyện dân gian hay nhất. Vẫn mang trong mình những ước mơ và hi vọng của quần chúng nhân dân lao động, \"Lọ nước thần\" còn mang giá trị châm biếm sâu sắc thói cậy thế cường quyền của giai cấp cường quyền khi xưa.\r\n\r\nVới những tình tiết hài hước và hình minh họa rất sinh động, cuốn sách hình này sẽ là món quà đầy ý nghĩa mà các bậc phụ huynh có thể tặng cho con cái của mình. Thông qua hình ảnh anh nông dân thật thà, chất phác, chị vợ hiền lanh, thủy chung cùng đám vua quan lố bịch, các em nhỏ có thể rút ra cho mình bài học về lòng nhân hậu, tình cảm chân thành sẽ mang lại hạnh phúc dài lâu cho mỗi con người.\r\n', 0, 3, 6),
(45, 'Tư tưởng Hồ Chí Minh về giao thông vận tải', 'tutuonghochiminhvegiaothongvantai.jpg', 56440, '2018-12-19 09:18:23', 1810, 151, 'Việt Nam', 5955, 'Sinh thời, Chủ tịch Hồ Chí Minh quan tâm đến tất cả các ngành, các giới. Giao thông vận tải là một trong những ngành được Người quan tâm đặc biệt. Bởi vì theo Người: “Bất kỳ ai, muốn sống thì phải có bốn điều ăn, mặc, ở, đi lại”, “Giao thông là mạch máu của mọi công việc”. Trong sự nghiệp kháng chiến chống xâm lược, Chủ tịch Hồ Chí Minh chỉ rõ: “Giao thông vận tải là một mặt trận”, “Giao thông vận tải thắng lợi tức là chiến tranh đã thắng lợi phần lớn rồi”. Trong xây dựng hoà bình, Người khẳng định: “Cầu đường là mạch máu của một nước” và nhấn mạnh: “Đời sống xã hội hiện nay phụ thuộc trước hết vào đường giao thông”.\r\n\r\nCuốn sách “Tư tưởng Hồ Chí Minh về Giao thông vận tải” đã trích dẫn được nhiều ý kiến, nhiều bài nói, bài viết của Chủ tịch Hồ Chí Minh về giao thông vận tải. Đây là những tư liệu quý chứa đựng những quan điểm tư tưởng về giao thông vận tải của Chủ tịch Hồ Chí Minh. Đại hội lần thứ VII của Đảng đã xác định tư tưởng Hồ Chí Minh cùng với chủ nghĩa Mác - Lê Nin là nền tảng tư tưởng và kim chỉ nam hành động. Tôi mong rằng, những người làm công tác giao thông vận tải cần dày công nghiên cứu tư tưởng Hồ Chí Minh, nghiên cứu những tư liệu được trình bày trong cuốn sách này để quán triệt và vận dụng vào sự nghiệp xây dựng, phát triển ngành Giao thông vận tải Việt Nam, từng bước đưa ngành Giao thông vận tải nước ta lên ngang tầm quốc tế, đáp ứng đòi hỏi của sự nghiệp đổi mới xây dựng đất nước giàu mạnh và bảo vệ vững chắc Tổ quốc.', 0, 5, 9),
(46, 'Tài liệu hướng dẫn công tác bảo vệ môi trường trong ngành hàng không dân dụng', 'tailieuhuondancongtacbaovemoitruongtrongnganhhangkhongdandung.jpg', 155200, '2018-12-21 01:10:02', 8100, 1818, 'Việt Nam', 15883, 'Ngành hàng không dân dụng Việt Nam trải qua thời kỳ tăng trưởng nhanh cùng với tốc độ phát triển của nền kinh tế nói chung và được đánh giá là một trong những thị trường có tốc độ tăng trưởng tốt nhất thế giới với tốc độ bình quân 15%/năm về hành khách và 12%/năm về hàng hóa trong giai đoạn 2006 – 2011. Năm 2012, tổng thị trường vận chuyển của Việt Nam đạt 25,3 triệu hành khách, tổng lượng hành khách thông qua các cảng hàng không đạt 37,4 triệu hành khách. Cùng với sự tăng trưởng về sản lượng của ngành đòi hỏi các doanh nghiệp cung cấp dịch vụ hàng không và phi hàng không ngày càng tăng lên cả về số lượng và quy mô, kéo theo sự gia tăng nguy cơ gây ô nhiễm môi trường, đặt ra những thách thức lớn cho công tác bảo vệ môi trường (BVMT). Một trong những nguyên nhân chính được xác định là do các doanh nghiệp thiếu thông tin và kiến thức pháp luật về BVMT.\r\n\r\nĐể góp phần cùng với các doanh nghiệp thực hiện tốt công tác BVMT của ngành hàng không dân dụng Việt Nam, xin giới thiệu cuốn “Sổ tay hướng dẫn công tác bảo vệ môi trường tại cảng hàng không, sân bay” với mục đích giới thiệu và cung cấp cho lãnh đạo và cán bộ môi trường của các doanh nghiệp hoạt động tại cảng hàng không, sân bay (CHK, SB) một số quy định của pháp luật về BVMT và các thông tin cần thiết khác. Sổ tay không chỉ là tài liệu hướng dẫn giúp doanh nghiệp dễ dàng nắm bắt và thực hiện các giải pháp BVMT cho cơ sở sản xuất của mình mà còn là tài liệu bổ ích dành cho cán bộ môi trường của các Cảng vụ hàng không trong quá trình kiểm tra, giám sát. Ban biên tập hy vọng cuốn sổ tay này sẽ hỗ trợ cho các doanh nghiệp phần nào trong quá trình tìm hiểu và triển khai công tác BVMT tại cơ sở hướng tới xây dựng ngành hàng không phát triển bền vững.', 0, 5, 9),
(47, 'Luật hàng không dân dụng Việt Nam', 'luathangkhongdandungvietnam.jpg', 48100, '2018-12-13 16:17:20', 4810, 1564, 'Việt Nam', 54810, 'Luật Hàng không dân dụng Việt Nam số 66/2006/QH11 ngày 29 tháng 6 năm 2006 của Quốc hội, có hiệu lực kể từ ngày 01 tháng 01 năm 2007, được sửa đổi, bổ sung bởi:\r\n\r\nLuật số 61/2014/QH13 ngày 21 tháng 11 năm 2014 của Quốc hội sửa đổi, bổ sung một số điều của Luật Hàng không dân dụng Việt Nam, có hiệu lực kể từ ngày 01 tháng 7 năm 2015.\r\n\r\nCăn cứ vào Hiến pháp nước Cộng hoà xã hội chủ nghĩa Việt Nam năm 1992 đã được sửa đổi, bổ sung theo Nghị quyết số 51/2001/QH10 ngày 25 tháng 12 năm 2001 của Quốc hội khoá X, kỳ họp thứ 10;\r\n\r\nLuật này quy định về hàng không dân dụng.\r\n\r\nQuốc hội ban hành Luật sửa đổi, bổ sung một số điều của Luật Hàng không dân dụng Việt Nam số 66/2006/QH11.\r\n\r\nTrân trọng giới thiệu!', 0, 5, 9),
(48, 'Phan Văn Khải - Những hồi ức đặc biệt', 'phanvankhainhunghoiucdacbiet.jpg', 184810, '2017-12-14 10:05:12', 1850, 151, 'Việt Nam', 18410, 'Quyển sách là tập hợp các bài viết về cuộc đời hoạt động chính trị của nguyên Thủ tướng Phan Văn Khải qua góc nhìn của đồng nghiệp, những người thân cận, báo chí và những người dân đã từng tiếp xúc với ông.\r\n\r\nCác câu chuyện kể lại trong cuốn sách tái hiện lại hình ảnh một người lãnh đạo vì dân, vì nước, không màng danh lợi, thẳng thắn, không trốn tránh trách nhiệm, sẵn sàng tiếp thu mọi ý kiến, mọi góc nhìn từ mọi người xung quanh. Bên cạnh đó, cuốn sách còn cho thấy được hình ảnh một vị Thủ tướng gần dân, giản dị, chất phác như bao người con Nam bộ khác.\r\n\r\nQuyển sách mang tới dấu ấn rõ rệt về một nhà chính trị có tâm, có tầm, lặng lẽ âm thầm cống hiến cho dân cho nước, để lại cho thế hệ ngày nay một nền kinh tế mở cửa, sẵn sàng hội nhập với năm châu và những khoảng lặng bình dị trong đời sống mà mỗi lần ôn lại ai cũng sẽ bịn rịn, bồi hồi vì đã từng được gặp ông như thế.\r\n\r\nKhông ồn ào, khoa trương. Không hô hào lớn lao, to tát. Cuốn sách chỉ âm thầm mang tới cho người đọc những cảm nhận rất riêng về vị Thủ tướng một thời trong lòng người dân, đặc biệt là những người con Nam bộ. Có những lúc, bạn sẽ thật sự rưng rưng khi nhận ra phía sau những nụ cười trên chính trường, có những hi sinh thầm lặng chẳng bao giờ được nhắc tên. Tinh thần dân tộc cũng từ ấy mà dâng lên thật nhiều.\r\n\r\nMời các bạn đón đọc Phan Văn Khải - Những hồi ức đặc biệt!', 0, 7, 7),
(49, 'Đức Thánh Trần', 'ducthanhtran.jpg', 69420, '2018-12-11 10:29:27', 8123, 1855, 'Việt Nam', 94840, 'Đức Thánh Trần\r\n\r\nTiểu thuyết lịch sử ĐỨC THÁNH TRẦN của nhà văn Trần Thanh Cảnh chính là diễn giải của tác giả về vương triều Trần lẫy lừng ba lần kháng Nguyên toàn thắng, nhất là về cuộc đời và sự nghiệp của một trong những nhân vật hiển hách nhất thời đại: Hưng Đạo Đại Vương Trần Quốc Tuấn.\r\n\r\nDiễn giải ấy thể hiện tinh thần cốt yếu của nó ngay trong nhan đề tác phẩm: Đức Thánh Trần. Đức Thánh Trần, ở đây tác giả Trần Thanh Cảnh đã thần thánh hóa nhân vật lịch sử Trần Quốc Tuấn. Hay chính xác hơn, là tác giả nhấn mạnh và khẳng định phẩm chất thần thánh, vị thế thần thánh, uy vọng thần thánh của Hưng Đạo Đại Vương.\r\n\r\nQuả thật, trong sự miêu tả của Trần Thanh Cảnh thì nhân vật Trần Quốc Tuấn, dù ở bất cứ nơi đâu và trong bất cứ thời điểm nào của cuộc đời, từ ý nghĩ đến diện mạo, thần thái, hành động, đều luôn là sự vượt lên trên tất cả, ngời ngời một vẻ đẹp thần thánh. Khi lâm trận đối địch trên chiến trường, Ngài là một “thiên tướng”, là “người nhà trời phái xuống” để thực hiện sứ mệnh bảo quốc an dân cho vương triều Trần và cho bờ cõi Đại Việt, là nỗi khiếp đảm đến tột cùng của quân xâm lược phương Bắc. Trong những mối quan hệ tình ái với đàn bà, Trần Thanh Cảnh đã thần thánh hóa Hưng Đạo Đại Vương với nguồn “thiên ân” dạt dào, là phúc lạc to lớn đến mức bất cứ người đàn bà nào, vợ (công chúa Thiên Thành) hay tình nương (Quế Lan, người con gái xinh đẹp ở Bãi Soi), dù chỉ được gặp một lần cũng đủ thấy mãn nguyện cho cả một kiếp. Mang ánh hào quang rực rỡ của thần thánh, Trần Quốc Tuấn – qua miêu tả của Trần Thanh Cảnh, dĩ nhiên – là nhân vật có sức lan tỏa và quyến dụ đến kỳ lạ: ai cũng bị hút về phía Ngài, dù đó là đàn ông hay đàn bà, người già hay trẻ nhỏ, người trong hoàng tộc hay kẻ thuộc khối bách tính lê dân. Cái sức lan tỏa và quyến dụ kỳ lạ ấy của Trần Quốc Tuấn là của thần chứ không phải của người. Nó khiến cho, ở phạm vi gần, cả loạt nhân vật xung quanh Ngài, người thân và những tùy tướng tâm phúc, như công chúa Thiên Thành, nàng Quế Lan, Phạm Ngũ Lão, Nguyễn Địa Lô, Yết Kiêu, Dã Tượng, v.v… đều ít nhiều được nhuốm một màu sắc bất phàm.\r\n\r\nTrần Thanh Cảnh khởi thảo Đức Thánh Trần sau khi đã cho ra mắt độc giả hai tập truyện ngắn mang đậm chất hoa tình, thậm chí là tinh thần “phóng dục”, khá đặc trưng cho đất và người Kinh Bắc. Cái “nếp” ấy vẫn được ông giữ lại trong cuốn tiểu thuyết lịch sử đầu tay này, qua những trường đoạn viết về ái tình hừng hực nhựa sống và tràn trề đam mê của những đàn ông đàn bà Đại Việt thế kỷ thứ XIII. Đọc những trường đoạn ấy và, nếu tiện, thử làm một vài so sánh, ta sẽ thấy nhân vật của Trần Thanh Cảnh khác với nhân vật của các nhà tiểu thuyết lịch sử tiền bối đến thế nào.\r\n\r\nVà đó cũng chính là một diễn giải lịch sử khả thể.\r\n\r\n(Trích lời Nhà phê bình văn học Nguyễn Hoài Nam)', 0, 7, 6),
(50, 'Hồ Cẩm Đào \"Con đường phía trước\"', 'hocamdaoconduongphiatruoc.jpg', 85000, '2018-12-25 12:29:06', 741, 152, 'Việt Nam', 1515, 'Người đứng đầu mới của Đảng Cộng sản Trung Quốc Hồ Cẩm Đào rốt cuộc là người như thế nào?\r\n\r\nTrước khi lên nắm quyền, tại sao ông lại kín tiếng như vậy? Tại sao xung quanh ông có không khí thần bí đến thế? Ông đã leo lên đến đỉnh cao nhất của con đường chính trị như thế nào? Điều gì là tính cách thật của Hồ Cẩm Đào? Ông có phong cách làm việc ra sao? Hồ Cẩm Đào trong tương lai sẽ là một nhà lãnh đạo như thế nào?\r\n\r\nKhác với rất nhiều cuốn sách khác liên quan đến Hồ Cẩm Đào, tác giả cuốn sách này không phải viết về Hồ Cẩm Đào một cách võ đoán, mà đích thân tới những nơi Hồ Cẩm Đào được sinh ra, lớn lên và làm việc. Tác giả lần theo những bài phỏng vấn trên chặng đường trưởng thành của ông, tìm mọi cách tiếp xúc với những người bạn cũ quen biết với Hồ Cẩm Đào, tìm kiếm những tư liệu đầu tay ít người biết tới. Điều càng đáng quý hơn là tác giả đã thu thập được một loạt bức ảnh quý giá chưa từng được công khai về Hồ Cẩm Đào.\r\n\r\nTác giả dựa vào sự hiểu biết từ nhiều phía đối với Hồ Cẩm Đào, kết hợp với cách nhìn của các chuyên gia học giả được phỏng vấn, đi sâu phân tích và dự báo hướng đi chính trị sau khi Hồ Cẩm Đào lên làm người đứng đầu Đảng Cộng sản Trung Quốc, và các vấn đề chính trị, kinh tế, xã hội, ngoại giao mà Trung Quốc, duới sự lãnh đạo của Hồ Cẩm Đào có thể phải đối mặt.\r\n\r\nĐọc xong cuốn sách, bạn sẽ có sự hiểu biết hệ thống và chân thực đối với con người, tác phong của Hồ Cẩm Đào, phá giải nguyên nhân kín tiếng thần bí trước đó của Hồ Cẩm Đào, cũng như tìm ra đáp án khiến bạn kính phục đối với những vấn đề còn bỏ ngỏ về Hồ Cẩm Đào đã nêu ở trên.', 0, 7, 6),
(51, 'Đứa con muộn', 'duaconmuon.jpg', 24500, '2018-12-13 06:21:18', 4811, 151, 'Việt Nam', 5841, 'Với danh hiệu là “nhà văn tuổi trẻ”, Alexin đưa đến cho người đọc những tác phẩm truyện vừa với giọng văn hồn nhiên, hài hước, yêu đời hệt như lứa tuổi thanh thiếu niên nhưng lại không thiếu các nút thắt đầy thú vị, kịch tính đủ sức hấp dẫn cả người lớn. Và đằng sau những câu chuyện đó, những câu chuyện xoay quanh thế hệ trẻ nói riêng và con người, xã hội Xô Viết nửa sau thế kỷ XX nói chung; là những bài học triết lý sâu sắc, giàu ý nghĩa. Những đạo lý sâu sắc đó không chỉ dành cho trẻ em hay những cô cậu tuổi teen mà cả những người lớn cũng cần biết, biết để sống tốt hơn và quan trọng hơn là để yêu thương đúng cách, để thấu hiểu con, đặc biệt là những đứa trẻ đang ở độ tuổi vị thành niên vốn cần rất nhiều sự quan tâm, thấu hiểu và cần có cách đối xử tôn trọng, tinh tế.\r\n\r\nNhững câu chuyện với những nhân vật, tình huống khác nhau nhưng đều nói về những tình yêu thương có phần thái quá và vô tình khiến cho người được yêu thương cảm thấy tù túng, gò bó hơn là hạnh phúc. Trong đời sống ngày càng phức tạp và bận rộn, những tình thương sai cách như thế này dường như ngày càng nhiều hơn. Những người làm cha mẹ luôn thương con vô bờ bến nhưng hoặc là không có thời gian để lắng nghe con, hoặc là quá chăm bẵm, bảo bọc đến mức khiến trẻ không thể thoải mái phát triển bản thân... là một trong những vấn đề nan giải trong xã hội hiện nay.\r\n\r\n\"Đứa con muộn\" sẽ là cuốn sách giúp cha mẹ thấu hiểu những người trẻ mới lớn.\r\n\r\nMời các bạn đón đọc!', 0, 8, 6),
(52, 'Làm mẹ không áp lực', 'lammekhongapluc.jpg', 97300, '2018-12-05 11:31:23', 1631, 158, 'Việt Nam', 841, 'Làm Mẹ Không Áp Lực\r\n\r\nCuốn sách \"Làm mẹ không áp lực\" là cẩm nang chăm sóc trẻ nhỏ trong những năm tháng đầu đời, giải đáp thắc mắc của các bậc cha mẹ thường đối mặt khi nuôi dạy trẻ. Tác phẩm không chỉ dừng lại ở việc cung cấp cho cha mẹ những hướng dẫn chăm con theo phương pháp khoa học mà còn giúp chúng ta nhận ra những thời điểm quan trọng để trẻ không mất cơ hội phát triển tối đa về thể chất và trí tuệ. Đây là một quyển cẩm nang hướng dẫn cách chăm sóc bé phát triển một cách toàn diện nhất.\r\n\r\nĐi kèm với những trò chơi được minh họa dễ hiểu giúp các bậc cha mẹ có những hoạt động vui đùa gần gũi với con, cuốn sách là một món quà thân thương gửi tặng đến mọi gia đình.\r\n\r\nGiới thiệu tác giả:\r\n\r\nBác sĩ dinh dưỡng Anh Nguyễn – tác giả cuốn \"Làm mẹ không áp lực\" là một trong những cá nhân uy tín thường xuyên chia sẻ các bí quyết chăm sóc và nuôi dạy trẻ trên trang cá nhân của mình, được đông đảo phụ huynh Việt Nam theo dõi và tin tưởng.\r\n\r\n- Anh Nguyễn sở hữu chức hiệu chuyên khoa “Registered Nutritional Therapy Practitioner” công nhận tại Anh và châu Âu\r\n\r\n- Hội viên của Hiệp hội Dinh dưỡng Lâm sàng Anh quốc\r\n\r\n- Giải thưởng Worcester Award của Anh quốc năm 2016\r\n\r\n- Đại sứ Y tế năm 2015 và 2016 cho chăm sóc sức khỏe trẻ em tại Anh\r\n\r\n- Giám đốc bộ phận tư vấn Nhi khoa của HIDADDI Nutrition for Family & Child', 0, 8, 7),
(53, 'Hãy tìm tôi giữa cánh đồng', 'haytimtoigiuacanhdong.jpg', 56440, '2018-12-21 06:05:04', 2812, 1526, 'Việt Nam', 4105, 'Khoảng đời trong bài viết của tác giả cho dù rất riêng nhưng sao thật gần gũi với những ai từng có một quê nhà để mà nhớ. Ở đâu đó là khói đốt lá vào một buổi chiều cuối năm làm cay đôi mắt, một trận mưa dầm ngồi trước hiên nhà nhìn bong bóng nước, nhẩm trong miệng một bài ca dao. Những người ông, người bà già yếu thương yêu con cháu và tình thương càng đậm đà hơn ở tuổi gần phải chia xa… Cảnh nghèo nhưng thanh sạch, tình yêu thương với những người lỡ đường… Tất cả là ký ức nhưng nhìn qua đôi mắt đầy xao xuyến, trái tim đầy nhân hậu. Người ta có thể nhìn ra một góc tâm hồn tác giả, và có lẽ nhờ đã viết một cách chân thật với lòng mình, những câu chuyện gửi gắm có thể vượt qua cảm xúc riêng để biến thành cảm xúc của người đọc. Đó là sức mạnh của quyển sách.\r\n\r\nĐồng tác giả với hai cuốn sách best seller Nếu biết trăm năm là hữu hạn và Những lối về ấu thơ, Đặng Nguyễn Đông Vy chia sẻ với người đọc những điều mình cảm nhận một cách sâu sắc về cuộc đời, và Hãy tìm tôi giữa cánh đồng là thuở ban đầu trong trẻo nhất trước khi được tiếp nối với những tâm tình trong “Những lối về ấu thơ” và giọng văn gần gũi, thẳng thắn hơn trong “Nếu biết trăm năm là hữu hạn”. Bổ sung vào lần in này là một số bài viết trên blog của tác giả, một blog sau khi đóng cửa đã được lưu giữ lại bằng một người đồng cảm không hề biết mặt. Quả là một bất ngờ thú vị của thế giới mạng.\r\n\r\nMời các bạn đón đọc!', 0, 10, 6),
(54, 'Lá thư', 'lathu.jpg', 72270, '2018-12-19 06:08:13', 4813, 580, 'Việt Nam', 1511, 'Truyện ngắn của Chekhov là những “mảnh sống”, những “mẩu đời” nhiều đến hàng nghìn, hàng vạn của đủ mọi hạng người trong xã hội, đặc biệt là giai cấp bình dân và trung lưu . Nếu được vẽ, chụp hình hoặc quay phim thì những mẩu đời, những mảnh sống ấy sẽ tạo thành một xã hội phức tạp, một nhân loại nho nhỏ hiện ra trước mắt ta thật sinh động, thật bi thương, lại nữa, đa số truyện ngắn và kịch phẩm của ông phơi bày cho người đọc thấy nét rạn nứt, sự suy tàn của giai cấp tư sản. (Đỗ Khánh Hoan)\r\n\r\nTốt nghiệp ngành Y tại Đại học Quốc Gia Moskva nhưng Anton Pavlovich Chekhov lại được biết đến như một nhà văn kịch tác gia Nga nổi tiếng thế giới. Nghệ thuật truyện ngắn của ông có chiều sâu tâm lý, lột tả xác thực đặc trưng nội tâm của tầng lớp người Nga thế kỷ 19.  ', 0, 10, 6);

-- --------------------------------------------------------

--
-- Table structure for table `tacgia`
--

CREATE TABLE `tacgia` (
  `MaTacGia` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `TenTacGia` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NgaySinh` date DEFAULT NULL,
  `TieuSu` text COLLATE utf8_unicode_ci,
  `BiXoa` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tacgia`
--

INSERT INTO `tacgia` (`MaTacGia`, `TenTacGia`, `NgaySinh`, `TieuSu`, `BiXoa`) VALUES
('TG001', 'Carmine Gallo', '1965-07-26', 'Carmine Gallo sinh ngày 26 tháng 7 năm 1965, là tác giả, nhà báo và diễn giả người Mỹ. Ông là chủ tịch của tập đoàn truyền thông Gallo. Ông được coi là chuyên gia về kỹ năng giao tiếp và lãnh đạo trong kinh doanh. Ông cũng từng giảng dạy cho các sinh viên MBA tại Stanford, UCLA và UC Berkeley. \r\n\r\nCác cuốn sách nổi tiếng nhất của ông là về người đã sáng lập ra Apple - Steve Jobs. Cuốn sách đầu tiên trong series sách đó là The Presentation Secrets of Steve Jobs đã nhanh chóng nằm trong chuyên mục bestseller của Wall Street Journal và được dịch ra hơn 20 thứ tiếng. Cuốn sách thứ hai là The Innovation Secrets of Steve Jobs cũng trở thành một tác phẩm ăn khách và giành được giải thưởng Axiom Award cho một trong số 3 cuốn sách kinh doanh hay nhất năm 2011. Cuốn sách thứ ba gần đây nhất của Gallo là The Apple Experience xuất bản vào tháng 4 năm 2012, trước khi Setve Jobs mất vài tháng. Ngoài ra ông cũng cho xuất bản nhiều cuốn sách với những chủ đề tổng quát hơn như: 10 Simple Secrets of the World’s Greatest Business Communicators, In Fire Them Up!, The Power of foursquare,...', 0),
('TG002', 'Brian Tracy', '1944-01-05', 'Brian Tracy sinh ngày 5 tháng 1 năm 1944 tại Vancouver, Canada, hiện sống với vợ và bốn con tại California San Diego. Ông là một diễn thuyết gia, một tác giả nổi tiếng.\r\n\r\nBrian Tracy đã viết nhiều sách về sự thành công trong kinh doanh, bán hàng và phát triển cá nhân.\r\n\r\nTác phẩm:\r\n\r\n- Những Đòn Tâm Lý Trong Bán Hàng \r\n- Quà Tặng Cho Người Muốn Thành Công\r\n- Thuật Tổ Chức Hội Họp\r\n- Thuật Quản Lý Bán Hàng\r\n- Tự Tạo Tương Lai Cho Chính Mình – Cách Làm Chủ 12 Nhân Tố Then Chốt Của Sự Thành Công\r\n- Làm Giàu Theo Cách Của Bạn', 0),
('TG003', '1980 Books', NULL, '“Sách là cây đèn soi sáng cho con người trên những nẻo đường xa xôi nhất của cuộc đời” – A.Upít\r\n\r\nHiện nay, đời sống ngày càng được nâng cao, việc đọc sách để phát triển tư duy, nâng cao trí tuệ, bổ sung những kỹ năng còn thiếu trong cuộc sống, cũng như việc tìm hiểu kinh nghiệm nuôi dưỡng và giáo dục con cái đồng thời để giải trí và giảm căng thẳng đã trở thành một nhu cầu thiết yếu với mọi người ở các lứa tuổi và tầng lớp khác nhau.\r\n\r\nRa đời với tiêu chí “Khởi nguồn tri thức” cùng mục tiêu trở thành công ty sách hàng đầu trong lĩnh vực tư duy giáo dục, đặc biệt là dành cho thế hệ trẻ Việt Nam, công ty TNHH Văn hóa và Truyền thông 1980 Books (gọi tắt là 1980 Books) đã và đang phấn đấu hết mình để mang đến cho độc giả ngày càng nhiều những cuốn sách giá trị, hữu ích và thú vị.\r\n\r\nMỗi cuốn sách là một công trình, là sản phẩm tinh thần, là kết quả của những nỗ lực và cẩn trọng từ khâu lựa chọn bản thảo đến khâu in ấn, phát hành. Những cuốn sách có chất lượng được mua bản quyền nước ngoài, sách của các nhân vật nổi tiếng, sách của các tác giả trong nước… thuộc nhiều lĩnh vực khác nhau sẽ giúp bạn đọc mở rộng tầm nhìn, bồi dưỡng kỹ năng, nhân cách, tâm hồn, phát huy khả năng tư duy, sáng tạo, để ngày một hoàn thiện bản thân hơn.\r\n\r\nChặng đường phát triển tiếp theo của 1980 Books còn dài, chúng tôi vẫn luôn tiếp tục nỗ lực cố gắng để hoàn thiện mình với mục đích mang đến những ấn phẩm có giá trị, bền vững với thời gian và có ý nghĩa đối với nhiều thế hệ bạn đọc.', 0),
('TG004', 'Minh Phương', NULL, NULL, 0),
('TG005', 'Hamada Hidehiko', NULL, NULL, 0),
('TG006', 'Nguyễn Quang Thiều', '1957-01-01', 'Nguyễn Quang Thiều (sinh năm 1957) là một nhà thơ hiện đại của Việt Nam, ngoài lĩnh vực chính thơ ca tạo nên tên tuổi, ông còn là một nhà văn với các thể loại tiểu thuyết, truyện ngắn, bút ký và tham gia vào lĩnh vực báo chí. Ông hiện nay là Phó Chủ tịch Hội nhà văn Việt Nam; Phó Tổng thư ký thứ nhất Hội Nhà văn Á – Phi.\r\n\r\nÔng quê tại Thôn Hoàng Dương (Làng Chùa), Xã Sơn Công, Huyên Ứng Hòa, Tỉnh Hà Tây. Ông vào làm việc tại báo Văn nghệ từ năm 1992 và rời khỏi đây năm 2007.\r\n\r\nThơ: Ngôi nhà tuổi 17 (1990); Sự mất ngủ của lửa, 1992; Những người đàn bà gánh nước sông, 1995; Những người lính của làng, 1996; Nhịp điệu châu thổ mới, 1997; Bài ca những con chim đêm, 1999\r\n\r\nTiểu thuyết, truyện ngắn: Mùa hoa cải bên sông, 1989; Kẻ ám sát cánh đồng, 1995; Cái chết của bầy mối, 1991; Người đàn bà tóc trắng, 1993; Đứa con của hai dòng họ, 1996; Thành phố chỉ sống 60 ngày, 1991; Vòng nguyệt quế cô đơn, 1991; Cỏ hoang, tiểu thuyết, 1992; Tiếng gọi tình yêu, 1993\r\n\r\nĐến nay, Nguyễn Quang Thiều đã xuất bản 7 tập thơ, 15 tập văn xuôi và 3 tập sách dịch. Tập thơ mới nhất của anh, Cây ánh sáng - Nhà xuất bản Hội Nhà văn 2009 đang thu hút sự chú của dư luận và giới phê bình.\r\n\r\nTiểu thuyết Kẻ ám sát cánh đồng được hãng phim truyền hình Việt Nam dựng thành bộ phim Chuyện làng Nhô phát sóng phổ biến trên VTV trong những năm 1998\r\n\r\nÔng được coi là người cùng với nhà văn, trung tướng công an Hữu Ước sáng lập nên hai tờ báo là tờ An Ninh Thế giới cuối tháng và Cảnh Sát Toàn Cầu.', 0),
('TG007', 'Hoàng Minh Tường', NULL, NULL, 0),
('TG008', 'Nguyễn Công Kiệt', NULL, NULL, 0),
('TG009', 'Robert Fulghum', '1937-04-06', 'Sinh: 4 tháng 6, 1937 (tuổi 79), Waco, Texas, Hoa Kỳ\r\n\r\nRobert Fulghum là một tác giả chuyên viết những tác phẩm tiểu luận ngắn. Trước khi bắt đầu viết văn, ông là giảng viên môn vẽ chì, vẽ màu, và triết học tại ngôi trường Lakeside ở Seattle. Ngoài ra, Fulghum còn là một họa sĩ và điêu khắc gia. Robert Fulghum đã nổi tiếng ngay từ quyển sách đầu tiên của mình, All I Really Need To Know I Learned In Kindergarten phát hành vào năm 1988. Quyển sách này đã nằm trong danh sách best-sellers của tờ New York Times liên tục 2 năm liền. Tuyển tập này bao gồm 50 bài tiểu luận ngắn, từ 200 chữ đến khoảng 1000 chữ bàn về nhiều chủ đề khác nhau trong đời sống. Tính đến thời điểm hiện nay, các tác phẩm của Robert Fulghum đã bán được hơn 16 triệu bản, dịch ra 27 thứ tiếng và phát hành tại 103 quốc gia trên toàn thế giới.\r\n\r\nNhững tác phẩm tiêu biểu: All I Really Need To Know I Learned In Kindergarten (1988), It Was On fire When I Lay Down On It (1991), From Beginning to End - The Rituals of Our Lives (1996), What On Earth Have I Done? (2008)...', 0),
('TG010', 'Nguyễn Ngọc Bích', '1945-01-01', 'Nguyễn Ngọc Bích sinh năm 1945, tốt nghiệp cử nhân Trường Luật Sài Gòn năm 1972 và thạc sĩ luật Trường Đại học Luật Harvard. Ông làm nghề luật từ 1974 cho đến nay; chuyên về công ty, luật kinh doanh và thương mại. Hiện nay, ông làm việc tại Văn phòng luật D.C Law tại Tp. HCM. Ông am hiểu về nhiều thể loại khác nhau như: kinh tế, luật, triết học… những cuốn sách và bài báo sắc bén của ông về kinh doanh, giáo dục, triết học… đã trở thành cẩm nang của nhiều độc giả.\r\n\r\nTác phẩm đã xuất bản\r\n\r\nLuật Doanh nghiệp: Vốn & quản lý trong công ty cổ phần, NXB Trẻ, 2000\r\nKhơi dòng chảy cho đồng vốn, NXB Trẻ, 2003\r\nCách suy nghĩ của luật sư, NXB Trẻ, 2005\r\nToàn cảnh thị trường chứng khoán, NXB tp. HCM, 1998\r\nBuôn bán với Mỹ, NXB Trẻ, 2002\r\nĐi mua chứng khoán, NXB Trẻ, 2003\r\nDoanh nhân và vấn đề quản trị doanh nghiệp, NXB Trẻ, 2008\r\nCông ty: vốn, quản lý & tranh chấp theo luật doanh nghiệp 2005, (đồng tác giả với Nguyễn Đình Cung), NXB Tri Thức, tháng 7/2009', 0),
('TG011', ' Phoenix Ho', NULL, 'Lớn lên và học tập tại Mỹ, cô Phoenix Ho (Phoenix Hồ) quay trở lại Việt Nam với tư cách là một chuyên viên tư vấn hướng nghiệp tại trường ĐH Quốc Tế RMIT Việt Nam. Trong suốt quãng thời gian hoạt động tại đây, cô đã rong ruổi khắp mọi miền trên đất nước để có thể đưa ra những tư vấn nghề nghiệp dành cho sinh viên, học sinh Việt Nam. \r\n\r\nTác phẩm tiêu biểu: Mẹ Dắt Con Đi', 0),
('TG012', 'Rich DeVos', '1926-04-03', 'Rich DeVos sinh: 4 tháng 3, 1926 (tuổi 90), Grand Rapids, Michigan, Hoa Kỳ, là một doanh nhân người Mỹ, là nhà đồng sáng lập tập đoàn Amway và là chủ của đội bóng rổ nhà nghề Orlando Magic. DeVos từng phục vụ trong Quân đoàn Không lực Hoa Kỳ thời Thế chiến thứ hai. Ông và vợ mình, bà Helen, có bốn con, 16 người cháu và hai cô chắt gái. Hiện, ông sống luân phiên giữa quê nhà Grand Rapids (bang Michigan) và Vero Beach (bang Florida).\r\n\r\nÔng là tác giả của hai quyền sách nổi tiếng  viết về việc duy trì động lực và thái độ tích cực rất có giá trị cho các doanh nghiệp là Ten Powerful Phrases for Positive People và Believe. Người ta cũng có thể dễ dàng tìm thấy những bài chia sẻ đầy lửa của ông dành cho các nhà phân phối Amway vốn đã được lan truyền rộng rãi khắp trên internet.', 0),
('TG013', 'Lê Di', NULL, NULL, 0),
('TG014', 'The Book Worm', NULL, NULL, 0),
('TG015', 'Hạc Xanh', '1992-05-20', 'Hạc Xanh tên thật là Trần Thị Tuyết Trinh, sinh ngày 20 tháng 5 năm 1992 tại Hải Dương, nay sống ở Hà Nội. Hạc Xanh tốt nghiệp trường ĐH Kinh tế Quốc dân, hiện đang công tác tại Kênh 14.\r\n\r\nHạc Xanh nổi tiếng với những truyện ngắn mang hơi thở thanh xuân, những câu chuyện của cô thường nhẹ nhàng, tình cảm nhưng đi sâu vào lòng người đọc.\r\n\r\nTác phẩm:\r\n\r\n- Chúng ta sẽ bên nhau bao lâu\r\n\r\n- Chờ Yêu\r\n\r\n- Ai sẽ mang giày cao gót cho em?\r\n\r\n- Cớ sao lại yêu?\r\n\r\n- Thích thầm em thôi nhé!\r\n\r\n- Nghe nói mình chia tay\r\n\r\n- Tuổi trẻ chia đôi', 0),
('TG016', 'Minh Niệm', '1975-01-01', 'Tác giả Minh Niệm sinh năm 1975 tại Châu Thành, Tiền Giang. Năm 1992 xuất gia tại Phật học viện Huệ Nghiêm, Sài Gòn. Năm 1999, ông bắt đầu tự thực tập Thiền Tứ Niệm Xứ. Đến năm 2001, ông bắt đầu công việc hướng dẫn thiền và khai triển tâm lý trị liệu cho giới trẻ.\r\n\r\nCuốn sách Hiểu về trái tim ra mắt bạn đọc từ năm 2011, đến nay vẫn luôn nhận được sự quan tâm và yêu thích của bạn đọc. Đã có gần 100.000 bản ấn phẩm này đến với bạn đọc. Mới đây, trong sự kiện Hội sách TP HCM lần 8, Hiểu về trái tim được ban tổ chức giải thưởng sách Fahasa lần thứ hai bình chọn là một trong 10 cuốn sách được bạn đọc yêu thích nhất năm 2013.', 0),
('TG017', 'Nhiều tác giả', NULL, NULL, 0),
('TG018', 'Dale Carnegie', '1888-11-24', 'Dale Breckenridge Carnegie (24 tháng 11 năm 1888 – 1 tháng 11 năm 1955) là một nhà văn và nhà thuyết trình Mỹ và là người phát triển các lớp tự giáo dục, nghệ thuật bán hàng, huấn luyện đoàn thể, nói trước công chúng và các kỹ năng giao tiếp giữa mọi người. Ra đời trong cảnh nghèo đói tại một trang trại ở Missouri, ông là tác giả cuốn Đắc Nhân Tâm, được xuất bản lần đầu năm 1936, một cuốn sách thuộc hàng bán chạy nhất và được biết đến nhiều nhất cho đến tận ngày nay. Ông cũng viết một cuốn tiểu sử Abraham Lincoln, với tựa đề Lincoln con người chưa biết, và nhiều cuốn sách khác.\r\n\r\nCarnegie là một trong những người đầu tiên đề xuất cái ngày nay được gọi là đảm đương trách nhiệm, dù nó chỉ được đề cập tỉ mỉ trong tác phẩm viết của ông. Một trong những ý tưởng chủ chốt trong những cuốn sách của ông là có thể thay đổi thái độ của người khác khi thay đổi sự đối xử của ta với họ.', 0),
('TG019', 'Nhiều tác giả', NULL, NULL, 0),
('TG020', 'Lê Minh Quốc', NULL, 'Nhà thơ Lê Minh Quốc sinh trưởng ở Đà Nẵng, tham gia bộ đội chiến đấu ở chiến trường Campuchia, tốt nghiệp Khoa Ngữ văn Trường đại học Tổng hợp TP.HCM, nay là Trường đại học Khoa học xã hội và nhân văn TP.HCM. Anh là con người đa năng: làm báo, làm thơ, viết văn, vẽ tranh... làm việc say mê và chăm chỉ như gã lực điền trên cánh đồng sáng tạo văn học nghệ thuật. Nhà thơ - nhà báo Lê Minh Quốc hiện là Thư ký toà soạn báo Phụ Nữ TP.HCM, Uỷ viên Hội đồng Thơ Hội Nhà văn TP.HCM, hội viên Hội Nhà văn Việt Nam.\r\n\r\nTác phẩm tiêu biểu: Ngày Viết Mỗi Ngày, Khi Tổ Ấm Nhảy Lambada', 0),
('TG021', 'Lê Nhất Phương', NULL, NULL, 0),
('TG022', 'Nguyễn Mộng Giác', '1940-01-04', 'Nguyễn Mộng Giác sinh ngày 4 tháng 1 năm 1940 tại thôn Xuân Hòa, xã Bình Phú, quận Bình Khê (nay là huyện Tây Sơn), tỉnh Bình Định, miền Trung Việt Nam.\r\n\r\nVề sự nghiệp văn chương, ông bắt đầu viết văn từ năm 1971, đã cộng tác với các tạp chí: Bách Khoa, Văn, Thời Tập, Ý Thức. Năm 1974, truyện dài Đường một chiều của ông được giải thưởng Văn Bút Việt Nam dưới thời Việt Nam Cộng hòa.\r\n\r\nSau sự kiện 30 tháng 4 năm 1975, việc sáng tác của ông tạm gián đoạn. Đến năm 1977, ông cầm bút trở lại, và bắt đầu viết bộ trường thiên tiểu thuyết Sông Côn mùa lũ, và hoàn thành vào năm 1981. Tháng 11 năm đó, ông cùng con trai vượt biển. Chuyến vượt biển thành công, ông đã đến được đảo Kuku của Indonesia. Trong mấy tháng ở đây, ông đã viết được một số truyện ngắn mà sau này xuất bản thành cuốn Ngựa nản chân bon, và tập I của bộ trường thiên tiểu thuyết Mùa biển động.\r\n\r\nTháng 11 năm 1982, ông đến Hoa Kỳ, định cư tại Nam California, rồi cộng tác với các báo: Đồng Nai, Việt Nam Tự Do, Người Việt, Văn, Văn Học Nghệ thuật ở nước ngoài.\r\n\r\nTừ năm 1986, ông làm Chủ bút tạp chí Văn Học ở California, Hoa Kỳ. Đến tháng 8 năm 2004, ông phải ngưng công việc làm báo vì phát hiện mình bị ung thư gan.\r\n\r\nSau nhiều năm dài chống chọi với căn bệnh hiểm nghèo, ông đã qua đời lúc 22 giờ 15 phút ngày 2 tháng 7 năm 2012 (ngày giờ địa phương ở California, tức sáng ngày 3 tháng 7 năm 2012 giờ Việt Nam) tại tư gia ở thành phố Westminster (Orange County, California, Hoa Kỳ), thọ 72 tuổi.\r\n\r\nTác phẩm: Nỗi băn khoăn của Kim Dung, Bão rớt, Tiếng chim vườn cũ, Qua cầu gió bay, Đường một chiều, Ngựa nản chân bon, Xuôi dòng, Mùa biển động, Sông Côn mùa lũ, Nghĩ về văn học hải ngoại,...', 0),
('TG023', 'Trác Nhã', NULL, NULL, 0),
('TG024', 'Kai Hoàng', NULL, 'Kai Hoàng là một cây viết trẻ đang sống và làm việc tại Sài Gòn. Anh tốt nghiệp Đại học Kinh tế Tp.HCM, khoa Tài chính – Ngân hàng. Sở thích là làm mình làm mẩy với con chữ và làm mệt cảm xúc bằng những suy nghĩ đa mang. \r\n\r\nAnh có 2 tác phẩm đã được xuất bản là Tuổi trẻ nào rồi cũng sẽ qua (2015) và Gặp tôi ngày mê sảng (2016). \r\n\r\nKai Hoàng từng nhận các giải thưởng:\r\n\r\n- Top 3 tác phẩm chung khảo cuộc thi Đoàn Thị Điểm mùa 2.\r\n\r\n- Giải 1 cuộc thi viết Những chuyến đi, Báo Mực Tím.\r\n\r\n- Giải 1 cuộc thi viết Mối tình đầu của tôi, Báo Lao Động.\r\n\r\n- Giải 3 cuộc thi thơ Mùa xuân ở lại, Hội thơ Đồng Vọng.\r\n\r\n- Giải Khuyến khích truyện ngắn Tình đầu tình cuối những mối tình, YOLOBooks.', 0),
('TG025', 'Trịnh Tiểu Lan', NULL, NULL, 0),
('TG026', 'Thanh Duy', '1986-11-30', 'Thanh Duy (Phạm Trần Thanh Duy), sinh ngày 30 tháng 11 năm 1986 là một ca sĩ, diễn viên, người dẫn chương trình Việt Nam. Anh được biết đến với cái tên Thanh Duy Idol sau cuộc thi Việt Nam Idol 2008, và sau đó xuất hiện trên các chương trình truyền hình: Cùng Nhau Tỏa Sáng, Lớp Học Vui Nhộn và gần đây nhất là gameshow Gương mặt thân quen \"mùa thứ ba\" (2015).\r\n\r\nTác phẩm tiêu biểu: Về Nhà Với Mẹ, Lỗi Ở Yêu Thương', 0),
('TG027', 'Lâm Phương Lam', NULL, 'Lâm Phương Lam sinh ngày 22 tháng 9, quê ở Hải phòng, hiện sống ở thành phố Hồ Chí Minh. Cô là một tác giả 9X nhưng sức viết và khả năng xây dựng đề tài cho mỗi tác phẩm, dường như vượt xa hơn tuổi đời. Các tác phẩm của cô luôn đem đến một thông điệp nào đó cho người đọc, để gấp sách lại rồi, người ta vẫn dường như chưa thể dứt ra được mạch cảm xúc của từng nhân vật trong sách.\r\n\r\nSách đã xuất bản:\r\n\r\n- Say đắm\r\n\r\n- Ai dắt em đi qua nỗi đau?\r\n\r\n- Chạy theo ánh mặt trời\r\n\r\n- Vấp ngã tuổi 20\r\n\r\n- Say đắm\r\n\r\n- Mụ ghẻ\r\n\r\n- Gửi thanh xuân ở lại', 0),
('TG028', 'Thủy Miều', NULL, NULL, 0),
('TG029', 'Tuệ Nghi', NULL, NULL, 0),
('TG030', 'Huyền Trang Bất Hối', NULL, 'Nắm trong tay gia tài 3 cuốn sách nằm trong Top sách bán chạy nhất năm 2017 gồm: “Cốt cách phụ nữ, Góc khuất đàn bà, Phụ nữ vạn người mê”, Huyền Trang Bất Hối luôn là cái tên được nhiều phụ nữ tin tưởng khi muốn nghe lời khuyên về cách sống, cách tôi luyện khí chất giữa sóng gió cuộc đời.', 0),
('TG031', 'Jill Konrath', NULL, 'Jill Konrath là một nhà chiến lược bán hàng, diễn giả và là tác giả của các cuốn sách bán hàng Bán cho các công ty lớn và bán SNAP.', 0),
('TG032', 'George S. Clason', '1874-11-17', 'George Samuel Clason (sinh ngày 17 tháng 11 năm 1874-mất ngày 7 tháng 4 năm 1957) hay còn biết đến với tên gọi George S. Clason là một doanh nhân, nhà văn người Mỹ, là tác giả của cuốn “Người giàu có nhất thành Babylon” (The Richest Man in Babylon)\r\n\r\nGeorge Samuel Clason sinh tại Louisiana, bang Missouri, Mỹ. Ông tốt nghiệp trường Đại học ở Nebraska, sau đó phục vụ trong quân đội Hoa Kỳ suốt cuộc chiến tranh Mỹ-Tây Ban Nha. Ông là một doanh nhân thành đạt và là người có công thành lập công ty bản đồ Clason ở Denver, bang Colorado, Mỹ. Công ty này xuất bản tập bản đồ đường bộ đầu tiên của nước Mỹ và Canada.\r\n\r\nTác phẩm:\r\n\r\nNăm 1926, ông xuất bản tập sách đầu tiên mở đầu cho một loạt các tập truyện ngắn nổi tiếng viết về cách thức tiết kiệm, và phát triển tài chính của những nhà kinh doanh. Ông đã xuất sắc vận dụng các câu chuyện có không khí của thời kì Babylon cổ để minh họa cho những vấn đề mà ông đưa ra. Những tập sách này đã được phổ biến với một số lượng lớn nhờ vào sự hỗ trợ của các ngân hàng và các công ty bảo hiểm trên toàn thế giới.\r\n\r\nNhiều nhà triệu phú, nhà kinh doanh lớn hay người buôn bán nhỏ nào trên thế giới đều biết đến hoặc sở hữu trong tay những quyển sách đặc biệt này. Trong số đó, quyển sách nổi tiếng nhất có tựa đề “Người giàu có nhất thành Babylon” đã trở thành một tác phẩm kinh điển đầy hứng khởi cho giới kinh doanh ngày nay.', 0),
('TG033', 'Chris Clarke Epstein', NULL, NULL, 0),
('TG034', 'Nguyễn Áng', NULL, NULL, 0),
('TG035', 'Đang cập nhật', NULL, NULL, 0),
('TG036', 'Bộ Giao thông vận tải', NULL, 'Tác phẩm tiêu biểu: Tài Liệu Tập Huấn Nghiệp Vụ Và Các Quy, Một Số Văn Bản Hướng Dẫn Công Tác Tuyên, Luật Đường Sắt, Các Văn Bản Quy Phạm Pháp Luật Về Hoa Tiêu, Các Văn Bản Quy Phạm Pháp Luật Về Đường, Tài Liệu Tập Huấn Nghiệp Vụ Và Các Quy, Luật Hàng Không Dân Dụng Việt Nam.......', 0),
('TG037', 'Trần Thanh Cảnh', NULL, NULL, 0),
('TG038', 'Trương Dự', NULL, NULL, 0),
('TG039', 'Anatoly Alexin', NULL, 'Nhà văn Anatoly Georgyevich Alexin (tên thật là Goberman) sinh năm 1924 tại Moskva.\r\n\r\nNgay từ nhỏ, ông đã có thơ đăng báo. Sau khi lớn lên, ông từng có thời gian làm biên tập viên cho tờ báo địa phương ở Ural.\r\n\r\nNăm 1950, ông vừa tốt nghiệp ngành Ấn Độ học tại Viện Đông phương học Moskva, vừa cho ra mắt tập truyện đầu tay Ba mươi mốt ngày được độc giả tích cực đón nhận.\r\n\r\nMột số tác phẩm tiêu biểu: Sasha và Shura (1956), Kolia viết cho Olia, Olia viết cho Kolia (1965), Anh trai tôi chơi kèn clarinet (1968), Đứa con muộn (1976), Người thứ ba ở hàng thứ năm (1977), Evdokina dở hơi (1978),...\r\n\r\nAlex được mệnh danh là “Nhà văn tuổi trẻ”, ông thường viết những câu chuyện giàu ý nghĩa về những thanh thiếu niên, những mâu thuẫn, xung đột, phản kháng của lứa tuổi dậy thì bồng bột đối với những người xung quanh, với bạn bè và đặc biệt là với người lớn.', 0),
('TG040', 'Anh Nguyễn', NULL, 'Bác sĩ dinh dưỡng Anh Nguyễn\r\n\r\n- Chức hiệu chuyên khoa “Registered Nutritional Therapy Practitioner” công nhận tại Anh và châu Âu\r\n\r\n- Là hội viên của Hiệp hội Dinh dưỡng Lâm sàng Anh Quốc\r\n\r\n- Đại sứ Y tế năm 2015 và 2016 cho chăm sóc sức khỏe trẻ em tại Anh\r\n\r\n- Giám đốc bộ phận tư vấn Nhi khoa của HIDADDI Nutrition for Family & Child', 0),
('TG041', ' Đặng Nguyễn Đông Vy', NULL, NULL, 0),
('TG042', 'Anton Chekhov', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tacgia_has_sach`
--

CREATE TABLE `tacgia_has_sach` (
  `TacGia_MaTacGia` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Sach_MaSach` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `MaTaiKhoan` int(11) NOT NULL,
  `TenDangNhap` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MatKhau` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TenHienThi` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NgaySinh` date NOT NULL,
  `DiaChi` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DienThoai` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `BiXoa` tinyint(4) DEFAULT NULL,
  `MaLoaiTaiKhoan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`MaTaiKhoan`, `TenDangNhap`, `MatKhau`, `TenHienThi`, `NgaySinh`, `DiaChi`, `DienThoai`, `Email`, `BiXoa`, `MaLoaiTaiKhoan`) VALUES
(2, 'admin', 'admin', 'Admin', '0000-00-00', 'Việt Nam', '01234444555', 'book@gmail.com', 0, 111),
(3, 'HieuDepTrai', '123', 'Hiếu Đẹp Trai', '0000-00-00', 'Trần Hưng Đạo', '0345970278', 'hieudona8@gmail.com', 0, 222),
(8, 'HieuDona', '123', 'Lâm Đồng', '0000-00-00', '1-1-1', '0345970278', 'hieudona8@gmail.com', 0, 222),
(11, 'josephhau', 'hau123', 'Hồ Công Hậu', '1998-07-13', 'Đồng Nai', '0962858091', 'hauphubinh013027@gmail.com', 0, 222);

-- --------------------------------------------------------

--
-- Table structure for table `tinhthanh`
--

CREATE TABLE `tinhthanh` (
  `MaTinh` int(11) NOT NULL,
  `TenTinh` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tinhthanh`
--

INSERT INTO `tinhthanh` (`MaTinh`, `TenTinh`) VALUES
(1, 'An Giang'),
(2, 'Bà Rịa - Vũng Tàu'),
(3, 'Bắc Giang'),
(4, 'Bắc Kạn'),
(5, 'Bạc Liêu'),
(6, 'Bắc Ninh'),
(7, 'Bến Tre'),
(8, 'Bình Định'),
(9, 'Bình Dương'),
(10, 'Bình Phước'),
(11, 'Bình Thuận'),
(12, 'Cà Mau'),
(13, 'Cao Bằng'),
(14, 'Đắk Lắk'),
(15, 'Đắk Nông'),
(16, 'Điện Biên'),
(17, 'Đồng Nai'),
(18, 'Đồng Tháp'),
(19, 'Gia Lai'),
(20, 'Hà Giang'),
(21, 'Hà Nam'),
(22, 'Hà Tĩnh'),
(23, 'Hải Dương'),
(24, 'Hậu Giang'),
(25, 'Hòa Bình'),
(26, 'Hưng Yên'),
(27, 'Khánh Hòa'),
(28, 'Kiên Giang'),
(29, 'Kon Tum'),
(30, 'Lai Châu'),
(31, 'Lâm Đồng'),
(32, 'Lạng Sơn'),
(33, 'Lào Cai'),
(34, 'Long An'),
(35, 'Nam Định'),
(36, 'Nghệ An'),
(37, 'Ninh Bình'),
(38, 'Ninh Thuận'),
(39, 'Phú Thọ'),
(40, 'Quảng Bình'),
(41, 'Quảng Nam'),
(42, 'Quảng Ngãi'),
(43, 'Quảng Ninh'),
(44, 'Quảng Trị'),
(45, 'Sóc Trăng'),
(46, 'Sơn La'),
(47, 'Tây Ninh'),
(48, 'Thái Bình'),
(49, 'Thái Nguyên'),
(50, 'Thanh Hóa'),
(51, 'Thừa Thiên Huế'),
(52, 'Tiền Giang'),
(53, 'Trà Vinh'),
(54, 'Tuyên Quang'),
(55, 'Vĩnh Long'),
(56, 'Vĩnh Phúc'),
(57, 'Yên Bái'),
(58, 'Phú Yên'),
(59, 'Cần Thơ'),
(60, 'Đà Nẵng'),
(61, 'Hải Phòng'),
(62, 'Hà Nội'),
(63, 'TP HCM');

-- --------------------------------------------------------

--
-- Table structure for table `tinhtrang`
--

CREATE TABLE `tinhtrang` (
  `MaTinhTrang` int(11) NOT NULL,
  `TenTinhTrang` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitietdondathang`
--
ALTER TABLE `chitietdondathang`
  ADD PRIMARY KEY (`MaChiTietDonDatHang`),
  ADD KEY `fk_ChiTietDonDatHang_DonDatHang1` (`MaDonDatHang`),
  ADD KEY `fk_ChiTietDonDatHang_SanPham1` (`MaSach`);

--
-- Indexes for table `dondathang`
--
ALTER TABLE `dondathang`
  ADD PRIMARY KEY (`MaDonDatHang`),
  ADD KEY `fk_DonDatHang_TaiKhoan1` (`MaTaiKhoan`),
  ADD KEY `fk_DonDatHang_TinhTrang1` (`MaTinhTrang`);

--
-- Indexes for table `loaisach`
--
ALTER TABLE `loaisach`
  ADD PRIMARY KEY (`MaLoaiSach`);

--
-- Indexes for table `loaitaikhoan`
--
ALTER TABLE `loaitaikhoan`
  ADD PRIMARY KEY (`MaLoaiTaiKhoan`);

--
-- Indexes for table `nhaxuatban`
--
ALTER TABLE `nhaxuatban`
  ADD PRIMARY KEY (`MaNhaXuatBan`);

--
-- Indexes for table `sach`
--
ALTER TABLE `sach`
  ADD PRIMARY KEY (`MaSach`),
  ADD KEY `fk_SanPham_LoaiSanPham1` (`MaLoaiSach`),
  ADD KEY `fk_SanPham_HangSanXuat1` (`MaNhaXuatBan`);

--
-- Indexes for table `tacgia`
--
ALTER TABLE `tacgia`
  ADD PRIMARY KEY (`MaTacGia`);

--
-- Indexes for table `tacgia_has_sach`
--
ALTER TABLE `tacgia_has_sach`
  ADD PRIMARY KEY (`TacGia_MaTacGia`,`Sach_MaSach`),
  ADD KEY `fk_TacGia_has_Sach_Sach1` (`Sach_MaSach`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`MaTaiKhoan`),
  ADD KEY `fk_TaiKhoan_copy1_LoaiTaiKhoan1` (`MaLoaiTaiKhoan`);

--
-- Indexes for table `tinhthanh`
--
ALTER TABLE `tinhthanh`
  ADD PRIMARY KEY (`MaTinh`);

--
-- Indexes for table `tinhtrang`
--
ALTER TABLE `tinhtrang`
  ADD PRIMARY KEY (`MaTinhTrang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loaisach`
--
ALTER TABLE `loaisach`
  MODIFY `MaLoaiSach` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `loaitaikhoan`
--
ALTER TABLE `loaitaikhoan`
  MODIFY `MaLoaiTaiKhoan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=223;

--
-- AUTO_INCREMENT for table `nhaxuatban`
--
ALTER TABLE `nhaxuatban`
  MODIFY `MaNhaXuatBan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sach`
--
ALTER TABLE `sach`
  MODIFY `MaSach` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `MaTaiKhoan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tinhthanh`
--
ALTER TABLE `tinhthanh`
  MODIFY `MaTinh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `tinhtrang`
--
ALTER TABLE `tinhtrang`
  MODIFY `MaTinhTrang` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietdondathang`
--
ALTER TABLE `chitietdondathang`
  ADD CONSTRAINT `fk_ChiTietDonDatHang_DonDatHang1` FOREIGN KEY (`MaDonDatHang`) REFERENCES `dondathang` (`MaDonDatHang`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ChiTietDonDatHang_SanPham1` FOREIGN KEY (`MaSach`) REFERENCES `sach` (`MaSach`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `dondathang`
--
ALTER TABLE `dondathang`
  ADD CONSTRAINT `fk_DonDatHang_TaiKhoan1` FOREIGN KEY (`MaTaiKhoan`) REFERENCES `taikhoan` (`MaTaiKhoan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_DonDatHang_TinhTrang1` FOREIGN KEY (`MaTinhTrang`) REFERENCES `tinhtrang` (`MaTinhTrang`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `sach`
--
ALTER TABLE `sach`
  ADD CONSTRAINT `fk_SanPham_HangSanXuat1` FOREIGN KEY (`MaNhaXuatBan`) REFERENCES `nhaxuatban` (`MaNhaXuatBan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_SanPham_LoaiSanPham1` FOREIGN KEY (`MaLoaiSach`) REFERENCES `loaisach` (`MaLoaiSach`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tacgia_has_sach`
--
ALTER TABLE `tacgia_has_sach`
  ADD CONSTRAINT `fk_TacGia_has_Sach_Sach1` FOREIGN KEY (`Sach_MaSach`) REFERENCES `sach` (`MaSach`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_TacGia_has_Sach_TacGia1` FOREIGN KEY (`TacGia_MaTacGia`) REFERENCES `tacgia` (`MaTacGia`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD CONSTRAINT `fk_TaiKhoan_copy1_LoaiTaiKhoan1` FOREIGN KEY (`MaLoaiTaiKhoan`) REFERENCES `loaitaikhoan` (`MaLoaiTaiKhoan`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
