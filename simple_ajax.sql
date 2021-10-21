SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `simple_ajax` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `simple_ajax` (`id`, `username`, `phone`) VALUES
(1, 'hriday', '01742666666'),
(2, 'sham', '01521207866'),
(3, 'umme', '01622705736'),
(4, 'shifa', '01967363747');

ALTER TABLE `simple_ajax`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `simple_ajax`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

