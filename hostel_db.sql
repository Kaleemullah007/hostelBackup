-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2016 at 12:31 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hostel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `hstl_accomodation_cats`
--

CREATE TABLE IF NOT EXISTS `hstl_accomodation_cats` (
  `cat_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(100) NOT NULL,
  `cat_date` date NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `hstl_accomodation_cats`
--

INSERT INTO `hstl_accomodation_cats` (`cat_id`, `cat_name`, `cat_date`) VALUES
(4, 'Bunk Bed', '2016-02-23'),
(5, 'Single Bed', '2016-02-17'),
(6, 'Single Bed 8', '2016-02-17'),
(7, 'Full Bed', '2016-02-23');

-- --------------------------------------------------------

--
-- Table structure for table `hstl_assets`
--

CREATE TABLE IF NOT EXISTS `hstl_assets` (
  `asset_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `asset_name` varchar(240) NOT NULL,
  `asset_amount` int(11) NOT NULL,
  `asset_date` date NOT NULL,
  PRIMARY KEY (`asset_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `hstl_assets`
--

INSERT INTO `hstl_assets` (`asset_id`, `asset_name`, `asset_amount`, `asset_date`) VALUES
(1, 'kaleemullah', 1000, '2016-04-17');

-- --------------------------------------------------------

--
-- Table structure for table `hstl_attendance`
--

CREATE TABLE IF NOT EXISTS `hstl_attendance` (
  `attndc_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `attndc_category` varchar(20) NOT NULL COMMENT 'categories are morning, evening, hostel in, hostel out, mess etc.',
  `attndc_status` varchar(10) NOT NULL,
  `attndc_date` date NOT NULL,
  `attndc_time` time NOT NULL,
  `student_id` bigint(20) NOT NULL,
  PRIMARY KEY (`attndc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hstl_emergency_contacts`
--

CREATE TABLE IF NOT EXISTS `hstl_emergency_contacts` (
  `cntct_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `cntct_name` varchar(240) NOT NULL,
  `cntct_relation` varchar(30) NOT NULL,
  `cntct_cnic` varchar(17) NOT NULL,
  `cntct_cell_no` varchar(15) NOT NULL,
  `cntct_residence_no` varchar(15) NOT NULL,
  `cntct_pic` varchar(200) NOT NULL,
  `student_id` bigint(20) NOT NULL,
  PRIMARY KEY (`cntct_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hstl_expenses`
--

CREATE TABLE IF NOT EXISTS `hstl_expenses` (
  `expense_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `expense_name` varchar(200) NOT NULL,
  `expense_amount` int(11) NOT NULL,
  `expense_month` varchar(10) NOT NULL,
  `expense_date` date NOT NULL,
  PRIMARY KEY (`expense_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hstl_guardian`
--

CREATE TABLE IF NOT EXISTS `hstl_guardian` (
  `grdn_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `grdn_name` varchar(240) NOT NULL,
  `grdn_cnic` varchar(17) NOT NULL,
  `grdn_cell_no` varchar(15) NOT NULL,
  `grdn_residence_no` varchar(15) NOT NULL,
  `grdn_permanent_address` varchar(500) NOT NULL,
  `grdn_postal_address` varchar(500) NOT NULL,
  `grdn_scanned_cnic` varchar(200) NOT NULL,
  `student_id` bigint(20) NOT NULL,
  PRIMARY KEY (`grdn_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hstl_liabilities`
--

CREATE TABLE IF NOT EXISTS `hstl_liabilities` (
  `liable_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `liable_partner_name` varchar(240) NOT NULL,
  `liable_partner_amount` int(11) NOT NULL COMMENT 'investment of partner in buisness',
  `liable_partner_percentage` int(11) NOT NULL COMMENT 'percent share of partner in buisness',
  `liable_date` date NOT NULL,
  PRIMARY KEY (`liable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hstl_mess_items_in`
--

CREATE TABLE IF NOT EXISTS `hstl_mess_items_in` (
  `itemin_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `itemin_name` varchar(240) NOT NULL,
  `itemin_brand` varchar(140) NOT NULL,
  `itemin_quantity` int(11) NOT NULL,
  `itemin_unit` varchar(30) NOT NULL,
  `itemin_purchase_price` int(11) NOT NULL,
  `itemin_supplier` varchar(240) NOT NULL,
  `itemin_invoice_no` varchar(240) NOT NULL,
  `itemin_date` date NOT NULL,
  PRIMARY KEY (`itemin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `hstl_mess_items_in`
--

INSERT INTO `hstl_mess_items_in` (`itemin_id`, `itemin_name`, `itemin_brand`, `itemin_quantity`, `itemin_unit`, `itemin_purchase_price`, `itemin_supplier`, `itemin_invoice_no`, `itemin_date`) VALUES
(1, 'Cooking Oil', 'Kashmir', 24, 'kg', 2200, 'Noor Muhammad', '134009', '2016-02-23');

-- --------------------------------------------------------

--
-- Table structure for table `hstl_mess_items_out`
--

CREATE TABLE IF NOT EXISTS `hstl_mess_items_out` (
  `itemout_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `itemin_id` bigint(20) NOT NULL,
  `itemout_quantity` int(11) NOT NULL,
  `itemout_date` date NOT NULL,
  PRIMARY KEY (`itemout_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `hstl_mess_items_out`
--

INSERT INTO `hstl_mess_items_out` (`itemout_id`, `itemin_id`, `itemout_quantity`, `itemout_date`) VALUES
(1, 1, 5, '2016-02-23');

-- --------------------------------------------------------

--
-- Table structure for table `hstl_mess_stock`
--

CREATE TABLE IF NOT EXISTS `hstl_mess_stock` (
  `stock_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `itemin_id` bigint(20) NOT NULL,
  `stock_remain_quantity` int(11) NOT NULL,
  `stock_date` date NOT NULL,
  PRIMARY KEY (`stock_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `hstl_mess_stock`
--

INSERT INTO `hstl_mess_stock` (`stock_id`, `itemin_id`, `stock_remain_quantity`, `stock_date`) VALUES
(1, 1, 19, '2016-02-23');

-- --------------------------------------------------------

--
-- Table structure for table `hstl_parents`
--

CREATE TABLE IF NOT EXISTS `hstl_parents` (
  `prnt_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `prnt_name` varchar(240) NOT NULL,
  `prnt_cnic` varchar(17) NOT NULL,
  `prnt_cell_no` varchar(15) NOT NULL,
  `prnt_reidence_no` varchar(15) NOT NULL,
  `prnt_permanent_address` varchar(500) NOT NULL,
  `prnt_posal_address` varchar(500) NOT NULL,
  `prnt_scanned_cnic` varchar(200) NOT NULL,
  `student_id` bigint(20) NOT NULL,
  PRIMARY KEY (`prnt_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hstl_rooms`
--

CREATE TABLE IF NOT EXISTS `hstl_rooms` (
  `room_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `room_no` int(11) NOT NULL,
  `room_capacity` int(11) NOT NULL,
  `room_type` varchar(40) NOT NULL,
  `room_occupied_no` int(11) NOT NULL DEFAULT '0' COMMENT 'number of students to whom room is assigned',
  `room_date` date NOT NULL,
  PRIMARY KEY (`room_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `hstl_rooms`
--

INSERT INTO `hstl_rooms` (`room_id`, `room_no`, `room_capacity`, `room_type`, `room_occupied_no`, `room_date`) VALUES
(1, 103, 6, '5', 0, '2016-02-23'),
(2, 104, 8, '4', 0, '2016-02-23');

-- --------------------------------------------------------

--
-- Table structure for table `hstl_staff`
--

CREATE TABLE IF NOT EXISTS `hstl_staff` (
  `staff_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `staff_pic` varchar(200) NOT NULL,
  `staff_thumb_impression` text NOT NULL,
  `staff_sallary` int(11) NOT NULL,
  `staff_date_of_appointment` date NOT NULL,
  `staff_designation` varchar(40) NOT NULL,
  `staff_name` varchar(240) NOT NULL,
  `staff_cnic` varchar(17) NOT NULL,
  `staff_gender` varchar(8) NOT NULL,
  `staff_phone` varchar(15) NOT NULL,
  `staff_father_or_husband` varchar(240) NOT NULL,
  `staff_address` varchar(500) NOT NULL,
  `staff_postal_address` varchar(500) NOT NULL,
  `staff_email` varchar(200) DEFAULT NULL,
  `staff_date` date NOT NULL,
  `staff_password` varchar(400) NOT NULL,
  `staff_role` varchar(20) NOT NULL,
  PRIMARY KEY (`staff_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `hstl_staff`
--

INSERT INTO `hstl_staff` (`staff_id`, `staff_pic`, `staff_thumb_impression`, `staff_sallary`, `staff_date_of_appointment`, `staff_designation`, `staff_name`, `staff_cnic`, `staff_gender`, `staff_phone`, `staff_father_or_husband`, `staff_address`, `staff_postal_address`, `staff_email`, `staff_date`, `staff_password`, `staff_role`) VALUES
(1, 'default.png', 'AKDJN*#JKNCJKSF#$RJKDFHISDFJS&W#DSJSJC*W#$r89yW#&(*rDIUFSDJbfW*ERY(*$#FBIDJ', 30000, '2016-02-01', 'Principal', 'Noor Muhammad', '35303-2163253-7', 'male', '03351650565', 'Muhammad Akram', 'Faisalabad, Model Town B Block', 'Faisalabad, Model Town B Block', 'noorgee66@yahoo.com', '2016-02-15', '564c0800c1af07c9d16beeed8215045e', 'admin'),
(2, '', '', 0, '0000-00-00', 'principal', '', '', 'male', '', '', '', '', NULL, '0000-00-00', '', ''),
(3, '', '', 0, '0000-00-00', 'sweeper', '', '', 'female', '', '', '', '', NULL, '0000-00-00', '', ''),
(4, 'default.png', 'iKJNSKJNGOI&*$*JSDFNJI@JKSANJ@JNC JS S)(SDNFJSKDVNKJSDVNJKSD', 10000, '2016-02-01', 'developer', 'James Vicky', '', 'male', '', '', '', '', NULL, '0000-00-00', '', ''),
(5, '', '', 0, '0000-00-00', 'Sweeper', '', '', 'female', '', '', '', '', NULL, '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `hstl_staff_sallaries`
--

CREATE TABLE IF NOT EXISTS `hstl_staff_sallaries` (
  `sallary_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `staff_id` bigint(20) NOT NULL,
  `sallary_amount_paid` int(11) NOT NULL,
  `sallary_amount_remain` int(11) NOT NULL,
  `sallary_month` varchar(20) NOT NULL,
  `sallary_date` date NOT NULL,
  `sallary_status` varchar(15) NOT NULL,
  `sallary_hr_status` tinyint(4) NOT NULL,
  `sallary_admin_status` tinyint(4) NOT NULL,
  `sallary_accounts_status` tinyint(4) NOT NULL,
  `sallary_paid_date` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`sallary_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `hstl_staff_sallaries`
--

INSERT INTO `hstl_staff_sallaries` (`sallary_id`, `staff_id`, `sallary_amount_paid`, `sallary_amount_remain`, `sallary_month`, `sallary_date`, `sallary_status`, `sallary_hr_status`, `sallary_admin_status`, `sallary_accounts_status`, `sallary_paid_date`) VALUES
(1, 1, 0, 30000, 'Feb', '2016-02-20', 'unpaid', 1, 1, 0, ''),
(2, 4, 0, 10000, 'Feb', '2016-02-01', 'unpaid', 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `hstl_student`
--

CREATE TABLE IF NOT EXISTS `hstl_student` (
  `std_id` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'primary key',
  `std_reg_no` varchar(340) NOT NULL COMMENT 'unique registration key for every student',
  `std_degree` varchar(120) NOT NULL COMMENT 'admission degree of student',
  `std_department` varchar(120) NOT NULL,
  `std_smester` varchar(40) NOT NULL,
  `std_degree_start_date` date NOT NULL,
  `std_degree_end_date` date NOT NULL,
  `std_scanned_admission_letter` varchar(200) NOT NULL,
  `std_applied_for` varchar(120) NOT NULL COMMENT 'Room type for which student has applied',
  `std_admission_date` date NOT NULL,
  `std_pic` varchar(200) NOT NULL,
  `std_thumb_impression` text NOT NULL,
  `std_gender` varchar(7) NOT NULL,
  `std_name` varchar(200) NOT NULL,
  `std_father_name` varchar(200) NOT NULL,
  `std_dob` date NOT NULL,
  `std_cnic` varchar(16) NOT NULL,
  `std_email` varchar(100) NOT NULL,
  `std_cell_no` varchar(15) NOT NULL,
  `std_resident_no` varchar(15) NOT NULL,
  `std_address` varchar(500) NOT NULL,
  `std_scanned_cnic` varchar(200) NOT NULL,
  `std_admission_status` varchar(15) NOT NULL,
  `std_card_no` varchar(40) NOT NULL COMMENT 'card no for swipe funcionality ',
  `std_postal_address` varchar(500) NOT NULL,
  PRIMARY KEY (`std_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `hstl_student`
--

INSERT INTO `hstl_student` (`std_id`, `std_reg_no`, `std_degree`, `std_department`, `std_smester`, `std_degree_start_date`, `std_degree_end_date`, `std_scanned_admission_letter`, `std_applied_for`, `std_admission_date`, `std_pic`, `std_thumb_impression`, `std_gender`, `std_name`, `std_father_name`, `std_dob`, `std_cnic`, `std_email`, `std_cell_no`, `std_resident_no`, `std_address`, `std_scanned_cnic`, `std_admission_status`, `std_card_no`, `std_postal_address`) VALUES
(1, '', 'BS Software Engineering', 'Software Engineering', '8', '0000-00-00', '0000-00-00', '', '', '0000-00-00', '', '', '', 'Noor Muhammad', 'Muhammad Akram', '0000-00-00', '34502-8916281-5', '', '', '', '', '', '', '', ''),
(2, '', 'BS Computer Science', 'Computer Science', '8', '0000-00-00', '0000-00-00', '', '', '0000-00-00', '', '', '', 'Kaleemullah', 'Muhammad Tasleem', '0000-00-00', '35404-7864980-5', '', '', '', '', '', '', '', ''),
(3, '', 'BS Zoology', 'Science', '8', '0000-00-00', '0000-00-00', '', '', '0000-00-00', '', '', '', 'Muhammad Imran', 'Allah Ditta', '0000-00-00', '35303-4053890-4', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `hstl_student_accomodation`
--

CREATE TABLE IF NOT EXISTS `hstl_student_accomodation` (
  `accm_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `accm_room_no` int(11) NOT NULL,
  `accm_bed_no` int(11) NOT NULL,
  `accm_bed_type` varchar(40) NOT NULL,
  `student_id` bigint(20) NOT NULL,
  PRIMARY KEY (`accm_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hstl_visitors`
--

CREATE TABLE IF NOT EXISTS `hstl_visitors` (
  `vstr_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `vstr_name` varchar(240) NOT NULL,
  `vstr_relation` varchar(30) NOT NULL,
  `vstr_cnic` varchar(17) NOT NULL,
  `vstr_cell_no` varchar(15) NOT NULL,
  `vstr_pic` varchar(200) NOT NULL,
  `vstr_thumb_impression` text NOT NULL,
  `vstr_rights` varchar(50) NOT NULL,
  `vstr_scanned_cnic` varchar(200) NOT NULL,
  `student_id` bigint(20) NOT NULL,
  PRIMARY KEY (`vstr_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hstl_vouchers`
--

CREATE TABLE IF NOT EXISTS `hstl_vouchers` (
  `vchr_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `vchr_no` varchar(100) NOT NULL,
  `vchr_due_date` date NOT NULL,
  `vchr_registration_fee` int(11) NOT NULL DEFAULT '0',
  `vchr_monthly_fee` int(11) NOT NULL,
  `vchr_fee_concession` varchar(50) DEFAULT NULL,
  `vchr_fee_concession_amount` int(11) DEFAULT '0',
  `vchr_late_fee_fine` int(11) NOT NULL DEFAULT '0',
  `vchr_status` varchar(8) NOT NULL DEFAULT 'unpaid' COMMENT 'fee status paid or not paid',
  `new_registration` tinyint(4) NOT NULL DEFAULT '0',
  `student_id` bigint(20) NOT NULL,
  `vchr_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'voucher generation date and time',
  PRIMARY KEY (`vchr_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `hstl_vouchers`
--

INSERT INTO `hstl_vouchers` (`vchr_id`, `vchr_no`, `vchr_due_date`, `vchr_registration_fee`, `vchr_monthly_fee`, `vchr_fee_concession`, `vchr_fee_concession_amount`, `vchr_late_fee_fine`, `vchr_status`, `new_registration`, `student_id`, `vchr_date`) VALUES
(1, 'ISAF-14562036641', '2016-02-10', 0, 5000, NULL, 0, 0, 'unpaid', 0, 1, '2016-02-23 17:01:04'),
(2, 'ISAF-14562036642', '2016-02-10', 0, 5000, NULL, 0, 0, 'unpaid', 0, 2, '2016-02-23 17:01:04'),
(3, 'ISAF-14562036643', '2016-02-10', 0, 5000, NULL, 0, 0, 'unpaid', 0, 3, '2016-02-23 17:01:04');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
