-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2017 at 09:06 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment_subject` int(250) NOT NULL,
  `comment_text` text NOT NULL,
  `comment_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_subject`, `comment_text`, `comment_status`) VALUES
(1, 0, 'fadsfd', 1),
(2, 0, 'dhfgdhgfhgf', 1),
(3, 0, 'hgfdhgfdhgf', 1),
(4, 0, 'rtetretre', 1),
(5, 0, 'fdfdafdafas', 1),
(6, 0, 'AAAAAAAAAAAAAAAA', 1),
(7, 0, 'Added Record', 1),
(8, 0, 'qqqqqqqqq', 1),
(9, 0, 'gfsd', 1),
(10, 0, 'gfd', 1),
(11, 5678876, '8658567', 1),
(12, 0, 'gg', 1),
(13, 0, 'gfdsgfdg', 1),
(14, 0, 'n', 1),
(15, 0, 'uyt', 1),
(16, 0, 'uytu7y', 1),
(17, 0, 'gfdsgfd', 1),
(18, 0, 'fhshfg', 1),
(19, 0, 'itu', 1),
(20, 0, 'oi', 1),
(21, 0, 'err', 1),
(22, 0, 'yt', 1),
(23, 0, 'j', 1),
(24, 0, 'jh', 1),
(25, 0, 'uytr', 1),
(26, 0, 'oyiu', 1),
(27, 0, 'df', 1),
(28, 0, 'hjg', 1),
(29, 0, 'fgd', 1),
(30, 0, 'hjg', 1),
(31, 0, 'fjhg', 1),
(32, 0, 'jhf', 1),
(33, 0, 'gfds', 1),
(34, 0, 'gfd', 1),
(35, 0, 'sdffdsfds', 1),
(36, 0, 'fdsfds', 1),
(37, 0, 'dryd', 1),
(38, 0, 'fgd', 1),
(39, 0, 'yrtytr', 1),
(40, 0, 'yt', 1),
(41, 0, 'xvc', 1),
(42, 0, 'fgd', 1),
(43, 0, 'jgh', 1),
(44, 0, 'rte', 1),
(45, 0, 'rte', 1),
(46, 0, 'tre', 1),
(47, 0, 'rte', 1),
(48, 0, 'fdg', 1),
(49, 0, 'tre', 1),
(50, 0, 'ytre', 1),
(51, 0, 'pouipoui', 1),
(52, 0, 'yutyut', 1),
(53, 0, 'tyrytr', 1),
(54, 0, 'tetre', 1),
(55, 0, 'gfdsgfd', 1),
(56, 0, 'hgf', 1),
(57, 0, 'hgfhgf', 1),
(58, 0, 'ghf', 1),
(59, 0, 'fgd', 1),
(60, 0, 'fgdgfd', 1),
(61, 0, 'tretre', 1),
(62, 0, 'rtetre', 1),
(63, 0, '6uiuit8uy', 1),
(64, 0, 'ytrryt', 1),
(65, 0, 'gfsdgfsd', 1),
(66, 0, 'hgfdhgf', 1),
(67, 0, 'fdgsgfsd', 1),
(68, 0, 'fgdgfddgf', 1),
(69, 0, 'dhgfhdgf', 1),
(70, 0, 'hdgfhg', 1),
(71, 0, 'hgdfhgf', 1),
(72, 0, 'fdafda', 1),
(73, 0, 'ggg', 1),
(74, 0, 'iytr', 1),
(75, 0, 'gfsd', 1),
(76, 0, 'erqwreqw', 1),
(77, 0, 'eeeeeeeeeeeeee', 1),
(78, 0, 'gggggggggg', 1),
(79, 0, 'AAAA', 1),
(80, 0, 'BBBBBBBB', 1),
(81, 0, 'oi[p', 0),
(82, 0, 'l,', 0);

-- --------------------------------------------------------

--
-- Table structure for table `dca_users`
--

CREATE TABLE `dca_users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dca_users`
--

INSERT INTO `dca_users` (`id`, `username`, `password`) VALUES
(1, 'Dinesh', '123456'),
(2, 'Suren', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `demo`
--

CREATE TABLE `demo` (
  `prgm` longtext NOT NULL,
  `ygadij` int(10) NOT NULL,
  `usdyiu8` int(10) NOT NULL,
  `oiei` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `demo`
--

INSERT INTO `demo` (`prgm`, `ygadij`, `usdyiu8`, `oiei`) VALUES
('kajerwkljklir\r\nakewrlkjuyhiluwr\r\nawkhejtf\r\nawjky4egrujf  kjwh4kjlerf\r\njwelkrjflrwt\r\nwskruejf.,w.,e;flejhrt liaewjrikjtfkl', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `demo_user`
--

CREATE TABLE `demo_user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `demo_user`
--

INSERT INTO `demo_user` (`username`, `password`) VALUES
('', ''),
('dgfsfgds', 'gfdgfda'),
('tr', 'rtewrt'),
('fgsd', 'gfdsgfs'),
('fgsd', 'gfdsgfs');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `DeptId` int(3) NOT NULL,
  `DeptName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`DeptId`, `DeptName`) VALUES
(1, 'Manual'),
(2, 'Automation'),
(3, 'Development');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`Name`, `Email`) VALUES
('aaaaaaa', 'bbbbbbb'),
('rewr', 'erwrewq'),
('swyre', 'ertqwtre'),
('kjhklj', 'khjlkj'),
('ghf', 'fgh'),
('fdsfds', 'dfsfds'),
('ryty', 'yrtytr');

-- --------------------------------------------------------

--
-- Table structure for table `finalscores`
--

CREATE TABLE `finalscores` (
  `user_id` int(3) NOT NULL,
  `score` int(3) NOT NULL,
  `final_prog_score` int(3) NOT NULL,
  `final_essay_score` int(3) NOT NULL,
  `final_html_score` int(3) NOT NULL,
  `Grand_Score` int(3) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `finalscores`
--

INSERT INTO `finalscores` (`user_id`, `score`, `final_prog_score`, `final_essay_score`, `final_html_score`, `Grand_Score`) VALUES
(2, 1, 5, 2, 4, 13),
(3, 0, 10, 7, 7, 22);

-- --------------------------------------------------------

--
-- Table structure for table `jobrequirement`
--

CREATE TABLE `jobrequirement` (
  `JobId` int(5) NOT NULL,
  `AdminId` int(5) NOT NULL,
  `Department` varchar(30) NOT NULL,
  `PostName` varchar(50) NOT NULL,
  `NoOfPosition` int(3) NOT NULL,
  `YearOfExp` varchar(30) NOT NULL,
  `JobDesc` varchar(1000) NOT NULL,
  `JobStatus` varchar(10) NOT NULL,
  `PostedDate` datetime NOT NULL,
  `JobReminder` int(2) NOT NULL DEFAULT '0',
  `HRReview` int(2) NOT NULL DEFAULT '0',
  `HRReviewDate` datetime NOT NULL,
  `AdminReminder` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobrequirement`
--

INSERT INTO `jobrequirement` (`JobId`, `AdminId`, `Department`, `PostName`, `NoOfPosition`, `YearOfExp`, `JobDesc`, `JobStatus`, `PostedDate`, `JobReminder`, `HRReview`, `HRReviewDate`, `AdminReminder`) VALUES
(103, 2147, 'Automation', 'erw', 5, '1y-3y', 'e55', 'Open', '2017-04-14 13:25:44', 1, 0, '0000-00-00 00:00:00', 0),
(111, 2147, 'Automation', 'Associate Test Engineer', 5, '2y-4y', 'a b v d\r\n', 'Open', '2017-04-14 13:24:40', 1, 1, '2017-04-17 15:41:51', 1),
(114, 2147, 'Automation', 'Selenium Engineer', 6, '2y-5y', 'aqaqaqaaq', 'Open', '2017-04-14 14:07:30', 1, 1, '2017-04-14 13:50:52', 1),
(115, 2147, 'Automation', 'Senior QA', 5, '3y-4y', 'aaaaaaaaaaa\r\nxxxxxxxxxxx\r\nyyyyyyyyyyy', 'Open', '0000-00-00 00:00:00', 1, 1, '2017-04-14 13:38:52', 1),
(117, 2147, 'Automation', 'QA', 5, '2y', 'bbbbbbbbbbbbbbbbb', 'Open', '2017-04-14 13:30:34', 1, 1, '2017-04-14 13:52:51', 1),
(119, 2147, 'Automation', 'Senior QA Automation Engineer', 7, '5y -6y', 'qqqqqqqq\r\nwwwww\r\nee', 'Open', '2017-04-14 14:08:29', 1, 1, '2017-04-14 13:34:07', 1),
(185, 2147, 'Automation', 'DBA', 5, '2y-3y', 'Mandatory Skills: \r\nStrong experience in designing and architecting medium to large DB2 V9.7 and V10.5 LUW DB2 databases in a 24x7 OLTP UNIX (AIX, Linux & Solaris) based multi-data center environment.\r\nGood Experience in installation(server & Client), configuration, federation, backup, restore, recovery, data movement utilities (load,import,export,db2move) and tuning (both OS & DB).\r\nExtensive exposure in DB2 HADR with IBM TSA. \r\nGood Experience in Shell Scripting, writing SQL and optimizing SQL calls\r\nHandling user calls & trouble shooting/debugging the Database issues\r\nManaging DB access, creation of DB objects like Views, MQT, Procedures, functions etc.\r\nExperience with Performing rolling updates and upgrades in a DB2 HADR\r\nGood communication skills\r\n\r\nAdditional Requirements: \r\nExperience with IBM Infosphere Data Replication.\r\nExperience with IBM BLU Acceleration.\r\nExperience supporting application development teams and handling US clients\r\nExperience in OPM\r\n', 'Open', '2017-04-14 14:07:46', 1, 1, '2017-05-02 10:14:49', 1),
(213, 2147, 'Automation', 'QTP Engineer', 7, '2y-4y', 'qqqqqqqqqqqqqqqqqqqwwwwwwwwwwweeeeerrrr', 'Open', '2017-04-14 09:27:34', 1, 1, '0000-00-00 00:00:00', 1),
(444, 2147, 'Automation', 'as', 4, '3y-5y', 'dfsfdsfds', 'Open', '2017-04-14 12:08:37', 1, 1, '2017-04-14 13:41:37', 1),
(456, 2147, 'Automation', 'QA ', 5, '2y-3y', 'ASDFG', 'Open', '2017-04-14 14:05:31', 1, 0, '0000-00-00 00:00:00', 0),
(503, 2147, 'Automation', 'QTP Engineer', 4, '2y', 'AAA', 'Open', '2017-05-03 14:40:16', 1, 0, '0000-00-00 00:00:00', 0),
(567, 2147, 'Automation', 'Senior Selenium Engineer', 3, '5y', 'xyz', 'Open', '2017-04-18 11:58:14', 1, 0, '0000-00-00 00:00:00', 0),
(2145, 2147, 'Automation', 'fdssfd', 3, '34fds', 'fdaffd', 'Open', '0000-00-00 00:00:00', 1, 1, '2017-04-14 13:43:41', 1),
(2213, 123, 'Manual', 'ddd', 5, '3m', 'ffffff', 'Open', '0000-00-00 00:00:00', 1, 0, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mcq`
--

CREATE TABLE `mcq` (
  `category_id` int(3) NOT NULL DEFAULT '101',
  `qid` int(3) NOT NULL,
  `qdesc` varchar(100) NOT NULL,
  `option1` varchar(50) NOT NULL,
  `option2` varchar(50) NOT NULL,
  `option3` varchar(50) NOT NULL,
  `option4` varchar(50) NOT NULL,
  `answer` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mcq`
--

INSERT INTO `mcq` (`category_id`, `qid`, `qdesc`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES
(201, 1, 'a*b is what kind of expression?', 'Prefix', 'Infix', 'Postfix', 'None of the above', 2),
(201, 2, 'Which is not a programming language?', 'VB', 'Java', 'Perl', 'C++', 3),
(201, 3, 'VB stands for?', 'Vertex Basic', 'Visual BODMAS', 'Virtual Break', 'Visual Basic', 4),
(201, 4, '''C'' Language invented by?', 'Dennis T Ritchie', 'Bjarne Stroutostup', 'James Gosling', 'Steve Jobs', 1),
(201, 5, 'Junit is a?', 'IDE', 'Script', 'Language', 'Testing Tool', 4);

-- --------------------------------------------------------

--
-- Table structure for table `mst_admin`
--

CREATE TABLE `mst_admin` (
  `loginid` varchar(20) DEFAULT NULL,
  `pass` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_admin`
--

INSERT INTO `mst_admin` (`loginid`, `pass`) VALUES
('mca', 'mca');

-- --------------------------------------------------------

--
-- Table structure for table `mst_question`
--

CREATE TABLE `mst_question` (
  `que_id` int(5) NOT NULL,
  `que_desc` varchar(150) DEFAULT NULL,
  `ans1` varchar(75) DEFAULT NULL,
  `ans2` varchar(75) DEFAULT NULL,
  `ans3` varchar(75) DEFAULT NULL,
  `ans4` varchar(75) DEFAULT NULL,
  `true_ans` int(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_question`
--

INSERT INTO `mst_question` (`que_id`, `que_desc`, `ans1`, `ans2`, `ans3`, `ans4`, `true_ans`) VALUES
(16, 'What  Default Data Type ?', 'String', 'Variant', 'Integer', 'Boolear', 2),
(17, 'What is Default Form Border Style ?', 'Fixed Single', 'None', 'Sizeable', 'Fixed Diaglog', 3),
(18, 'Which is not type of Control ?', 'text', 'lable', 'checkbox', 'option button', 1),
(19, 'Which of the follwing contexts are available in the add watch window?', 'Project', 'Module', 'Procedure', 'All', 4),
(20, 'Which window will allow you to halt the execution of your code when a variable changes?', 'The call stack window', 'The immedite window', 'The locals window', 'The watch window', 4),
(22, 'How can you print the object name associated with the last VB  error to the Immediate window?', 'Debug.Print Err.Number', 'Debug.Print Err.Source', 'Debug.Print Err.Description', 'Debug.Print Err.LastDLLError', 2),
(23, 'How can you print the object name associated with the last VB  error to the Immediate window?', 'Debug.Print Err.Number', 'Debug.Print Err.Source', 'Debug.Print Err.Description', 'Debug.Print Err.LastDLLError', 2),
(24, 'What function does the TabStop property on a command button perform?', 'It determines whether the button can get the focus', 'If set to False it disables the Tabindex property.', 'It determines the order in which the button will receive the focus', 'It determines if the access key swquence can be used', 1),
(25, 'You application creates an instance of a form. What is the first event that will be triggered in the from?', 'Load', 'GotFocus', 'Instance', 'Initialize', 4),
(26, 'Which of the following is Hungarian notation for a menu?', 'Menu', 'Men', 'mnu', 'MN', 3),
(27, 'You are ready to run your program to see if it works.Which key on your keyboard will start the program?', 'F2', 'F3', 'F4', 'F5', 4),
(28, 'Which of the following snippets of code will unload a form named frmFo0rm from memory?', 'Unload Form', 'Unload This', 'Unload Me', 'Unload', 3),
(29, 'You want the text in text box named txtMyText to read My Text.In which property will you place this string?', 'Caption', 'Text', 'String', 'None of the above', 2),
(30, 'How many data types are there in c ?', '8', '7', '6', '5', 3),
(31, 'Range of integer type of data ?', '-32768 to 32767', '123-133', '152 to 258', '-78954 to 32564', 1),
(32, 'getchar() is used to get ?', 'integer', 'string', 'character', 'print', 3),
(33, 'gets() is used to get???', 'number', 'character', 'string', 'integer', 3),
(34, 'short cut key to save is _', 'f4', 'f9', 'f2', 'f1', 3),
(35, 'short cut key to close the program?.?', 'f7', 'f3', 'f8', 'f9', 2),
(36, 'who invented c language ?', 'Denis Ritchie', 'Pascal Blaise', 'Denis reddy', 'Bill gets', 1),
(37, 'To come out of c __shortcut key is used?', 'alt+b', 'alt+k', 'alt+m', 'alt+x', 4),
(38, 'strlen() return _____ types of data ?', 'integer', 'character', 'string', 'void', 1),
(40, 'how many keyword are there in c?', '56', '54', '64', '32', 4),
(49, 'for multiline comment ___ is used', '//', '??', '/*', '\\*', 3),
(50, '"default: " statement is a part of ___', 'switch case', 'If else', 'if', 'loop', 1),
(53, 'or operator in c is ________type of operator ?', 'arethametic', 'logical', 'bitwise', 'conditional', 2),
(54, '___is assignment operator in c ?', '*', '++', '=', '--', 3),
(55, 'Every function returns___type of value ?', 'int', 'char', 'float', 'none of these', 4),
(56, 'what is the answer of 8%5', '4.5', '3', '1', '1.3', 2),
(57, 'gets() is defined in ?', 'stdio.h', 'conio.h', 'string.h', 'dos.h', 1),
(58, '__key is used to zoom the screen', 'f5', 'f6', 'f9', 'alt+f9', 1),
(59, '____decision making control', 'for loop', 'do while', 'function', 'switch case', 4),
(60, 'RAM Stands for', 'Random Access Memory', 'Random accelerated Memory', 'Random Access Machenism', 'Random Accurace Mantan', 1),
(61, 'PC Stands for', 'pocket computer', 'personal computer', 'phisycal computer', 'personal card', 2),
(62, 'Personal Computer are the type of computer', 'super computer', 'mini computer', 'micro computer', 'mainframe computer', 3),
(63, 'floppy disk is the type of memory', 'magnatic & secondarymain memory', 'main memory', 'o primary', 'none of the above', 1),
(64, 'keybord is the type of device', 'input', 'pointing', 'output', 'sound', 1),
(65, 'mouse is the type of device', 'input', 'pointing', 'scanning', 'none of the above', 2),
(66, 'which of the following is input device', 'speaker', 'printer', 'plotter', 'scanner', 4),
(67, '________is colled the brain of computer', 'mouse', 'keyboard', 'cpu', 'memory', 3),
(68, 'the development of first generation computer is', '1955-1965', '1965-1975', '1945-1954', 'none', 3),
(69, 'all arithmetic and logical processing is done in', 'ALU', 'CU', 'CPU', 'none of the above', 3),
(70, 'the delete the character right side of the cursor which key is used', 'inst', 'del', 'backspace', 'home', 2),
(71, 'to deleter the character towards left side is', 'backspace', 'del', 'inst', 'home', 1),
(72, 'in keyboard the function of which type keys change according the software', 'alphanumeric key', 'numeric key pad', 'function key', 'none of the above', 2),
(73, 'to enter the number a special key slot is given on the keyboard which is', 'alphanumeric number', 'numeric key pad', 'function key', 'none of the above', 2),
(74, 'on numeric key pad the keyu present are', '0 to 9 numbers', '+/*characters', 'arrow key', 'all of the above', 4),
(75, 'to move the cursor beginning of the which key is used', 'end', 'home', 'pgup', 'pgdn', 2),
(76, 'to move the cursor end of the which key is used', 'end', 'home', 'pgup', 'pgdn', 1),
(77, 'the touchable part of computer is called as', 'hardware', 'software', 'programe', 'none', 1),
(78, 'if caps lock key is on then', 'small letters are printed', 'the lowercase letter are printed', 'capital letters print', 'none of the above', 3),
(79, '________are equivalent to 1 mb', '1022 kb', '1024 kb', '1024 byte', '1000 gb', 2),
(80, 'the combination key for command in ms-word is', 'ctrl+f', 'ctrl+f3', 'ctrl+s', 'none', 1),
(81, 'while editing document in ms-word the colour of the selected text can be changed by', 'format font', 'format text', 'format paragraph', 'none of the above', 1),
(82, 'which keystroke is used to move end of document quickly', 'end', 'pgdn', 'ctrl+pgdn', 'ctrl+end', 4),
(83, 'from the following option does not present in the picture option of insert menu', 'auto shpe', 'clip art', 'from file', 'object', 4),
(84, 'in ms-word to appear full form abberiatin automatically we can use', 'autotext', 'auto correct', 'comments', 'drop cap', 1),
(85, 'to appear the same information at the top or bottom of each page we use', 'headers & footer', 'hyperlink', 'field', 'none', 1),
(86, 'which option is not present under tool menu', 'mail merge', 'auto text', 'language', 'drop cap', 4),
(87, 'to convert "the computer" in to "THE COMPUTER" which option is used', 'title case', 'toggle case', 'upper case', 'all caps', 3),
(88, 'which is the shortcut key to replace the text', 'ctrl+r', 'ctrl+h', 'ctrl+d', 'ctrl+e', 2),
(89, 'which sortcut key is used to redo action?', 'ctrl+r', 'ctrl+y', 'ctrl+e', 'ctrl+u', 2),
(90, 'to change the size of document page using', 'file properties', 'file page setup', 'tools option', 'format paragraph', 2),
(91, 'to set the shading for the paragrph in ms-word chose', 'insert shading', 'format border & shading', 'view shading', 'all the above', 2),
(92, 'bold,italic,underline are the part of_________toolbar', 'formating', 'standerd', 'drawing', 'central', 1),
(93, 'the list in bottom of the file menu', 'display last foure file you use', 'display all opened files', 'allow to close file', 'none of the above', 1),
(94, 'the date and time command', 'inaert the date & time you specify', 'insert current system date & time', 'inmsert last updated date & time', 'none of the above', 2),
(95, 'if you want to copy a selection of text,which button do you click?', 'move', 'copy', 'duplicate', 'cut', 2),
(96, 'which of the follwing is not option of edit menu', 'cut', 'copy', 'page setup', 'paste', 3),
(97, 'alignment buttons are available on______________', 'ststus bar', 'for mating toolbar', 'standerd toolbar', 'none of these', 2),
(98, 'when microsoft word gets loaded the opening screen display a document named', 'document1', 'document', 'doc1', 'no document name', 1),
(99, 'the document can be zoomed maximum up to', '100%', '150%', '200%', '500%', 4),
(100, 'to delete the selected sentence we can press the following press', 'del', 'backspace', 'both a&b', 'none of the above', 3),
(101, 'to start a new line', 'enter', 'shift+enter', 'ctrl+enter', 'none of these', 1),
(102, 'Spelling check is not possible in ___________________', 'Normal View', 'Out Line View', 'Print Lay Out View', 'None of these', 4),
(103, 'Word Text can be made italic by____________________', 'Ctrl+I', 'Ctrl+B', 'Ctrl+U', 'None of the above', 1),
(104, 'By Default Word Format your text as', '14 Point Times New Roman', '12 Point Times New Roman', '11 point Times New Roman', 'None of the above', 2),
(105, 'Which city is known as The City of Palaces?', 'Kolkatta', 'Jerusalem', 'Mumbai', 'Udaipur', 1),
(106, 'The Gateway of India is ?', 'Delhi', 'Kolkatta', 'Mumbai', 'Jammu', 3),
(107, 'Which city is known as Pink City?', 'Hyderabad', 'Jaipur', 'Bangalore', 'Patna', 2),
(108, 'Which is the city of Golden Temple?', 'Amritsar', 'Banaras', 'Chennai', 'Delhi', 1),
(109, 'The Land of Lilies ?', 'Finland', 'Japan', 'USA', 'Canada', 4),
(110, 'The symbol dove signifies ?', 'Strength', 'Dignity', 'Peace', 'Distress', 3),
(113, 'How many players are there on each side in a baseball match', '7', '9', '5', '11', 2),
(114, 'Which one of seven wonders of the world is in India', 'Leaning Tower', 'Eiffel Tower', 'TajMahal', 'Colosseum', 3),
(115, 'Who started the ancient Olympic Games', 'the Greeks', 'the Egyptians', 'the Romans', 'the Aryans', 1),
(116, 'The first Indian in Space was?', 'Vishnu Bhagvat', 'Rakesh Sharma', 'Kalpana Chawla', 'Juhi Chawla', 2),
(117, 'After how many years gap is the Cricket World Cup held?', '3', '4', '5', '6', 2),
(119, 'The slogan Piyo Sar Utha ke is associated with which company?', 'Pepsi', 'Mirinda', 'Thums Up', 'Coca-Cola', 4),
(120, 'Which of these is a renewable source of energy?', 'sunlight', 'petrol', 'coal', 'diesel', 1),
(121, 'Biogas consists mainly of ?', 'carbon monoxide', 'methane', 'chlorine', 'nitrogen', 2),
(122, 'Deafness can be caused by ?', 'water pollution', 'air pollution', 'noise pollution', 'soil pollution', 3),
(123, 'Which animal is the logo of WWF?', 'bear', 'giant panda', 'eagle', 'tiger', 2),
(124, 'Acoustics deals with ?', 'sound', 'light', 'insects', 'air', 1),
(125, 'Fatehpur Sikri was built by ?', 'Aurungzeb', 'Akbar', 'Shah Jahan', 'Jahengir', 2),
(126, 'Which is the largest ocean in the world?', 'Atlantic', 'Pacific', 'Indian', 'Arctic', 2),
(127, 'The sea-route to India was discovered in?', '1598', '1558', '1498', '1458', 3),
(128, 'When is U.N. Day celebrated?', '24 Oct', '23 Oct', '24 Sep', '23 Nov', 1),
(129, 'Which of the following countries celebrates Christmas festival in the summer season?', 'Canada', 'Britian', 'Australia', 'Zimbabwe', 3),
(131, 'How do u write "Hello world" in PHP?', 'echo "Hello world";', 'document.write("Hello world");', '"Hello world";', 'printf("Hello world");', 1),
(130, 'what does PHP stand for?', 'personal hypertext  processor', 'private home page', 'personal home page', 'PHP:Hypertext preprocessor', 4),
(1, 'All variable in PHP start with which symbol?', '!', '$', '&', '#', 2),
(2, 'what is the correct way to end a PHP  statement?', '</php>', '.', ';', 'new line', 3),
(3, 'The PHP syntax is most similar to?', 'VB script', 'Java script', 'Perl ', 'c#', 2),
(4, 'how do u get information from a form that is submitted using the "get" method?', 'Request.Form;', '$_GET[ ];', 'Request.QueryString;', '$_POST[ ];', 2),
(8, 'What does SQL stand for?', 'Structured Question Language', 'Strong Question Language', 'Structured Query Language', 'String Query Language', 3),
(5, 'What is the correct way to create a function in PHP?', 'create myFunction()', 'function myFunction()', 'new_function myFunction()', 'load_function myFunction()', 2),
(6, 'What is the correct way to add 1 to the $count variable?', 'count++;', '$count =+1', '++count', '$count++;', 4),
(7, 'Which one of these variables has an illegal name?', '$my_Var', '$my-Var', '$myVar', '$my&Var', 3);

-- --------------------------------------------------------

--
-- Table structure for table `mst_result`
--

CREATE TABLE `mst_result` (
  `login` varchar(20) DEFAULT NULL,
  `test_id` int(5) DEFAULT NULL,
  `test_date` date DEFAULT NULL,
  `score` int(3) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_result`
--

INSERT INTO `mst_result` (`login`, `test_id`, `test_date`, `score`) VALUES
('raj', 8, '0000-00-00', 3),
('raj', 9, '0000-00-00', 3),
('raj', 8, '0000-00-00', 1),
('ashish', 10, '0000-00-00', 3),
('ashish', 9, '0000-00-00', 2),
('ashish', 10, '0000-00-00', 0),
('raj', 8, '0000-00-00', 0),
('raj', 9, '0000-00-00', 1),
('raj', 11, '0000-00-00', 5),
('raj', 11, '0000-00-00', 6),
('ashish', 11, '0000-00-00', 12),
('raj', 12, '0000-00-00', 13),
('raj', 14, '0000-00-00', 8),
('raj', 8, '0000-00-00', 1),
('raj', 12, '0000-00-00', 7),
('amit', 8, '0000-00-00', 1),
('amit', 8, '0000-00-00', 1),
('amit', 8, '0000-00-00', 2),
('amit', 8, '0000-00-00', 3),
('amit', 15, '0000-00-00', 0),
('amit', 15, '0000-00-00', 1),
('amit', 15, '0000-00-00', 0),
('amit', 15, '0000-00-00', 1),
('amit', 15, '0000-00-00', 3),
('amit', 15, '0000-00-00', 5),
('amit', 15, '0000-00-00', 5),
('amit', 15, '0000-00-00', 5),
('amit', 15, '0000-00-00', 5),
('amit', 15, '0000-00-00', 11),
('amit', 15, '0000-00-00', 10),
('amit', 15, '0000-00-00', 9),
('amit', 15, '0000-00-00', 8),
('', 16, '0000-00-00', 0),
('amit', 16, '0000-00-00', 1),
('amit', 12, '0000-00-00', 9),
('', 12, '0000-00-00', 2),
('amit', 16, '0000-00-00', 1),
('amit', 8, '0000-00-00', 3),
('amit', 8, '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mst_subject`
--

CREATE TABLE `mst_subject` (
  `sub_id` int(5) NOT NULL,
  `sub_name` varchar(25) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_subject`
--

INSERT INTO `mst_subject` (`sub_id`, `sub_name`) VALUES
(1, 'VB'),
(5, 'Computer Fundamental'),
(7, 'C Language'),
(8, 'Ms Office'),
(9, 'General Knowledge'),
(10, 'php'),
(11, 'SQL'),
(12, 'java');

-- --------------------------------------------------------

--
-- Table structure for table `mst_test`
--

CREATE TABLE `mst_test` (
  `test_id` int(5) NOT NULL,
  `sub_id` int(5) DEFAULT NULL,
  `test_name` varchar(30) DEFAULT NULL,
  `total_que` varchar(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_test`
--

INSERT INTO `mst_test` (`test_id`, `sub_id`, `test_name`, `total_que`) VALUES
(8, 1, 'VB Basic Test', '3'),
(9, 1, 'Essentials of VB', '5'),
(10, 1, 'Creating User Services', '5'),
(11, 7, 'Objactive Test', '20'),
(12, 5, 'General Question', '20'),
(13, 8, 'Ms Office Question', '25'),
(14, 9, 'Knowledge Question', '22'),
(15, 10, 'php basic', '20'),
(16, 11, 'basic SQL', '10'),
(17, 12, 'basic java', '10');

-- --------------------------------------------------------

--
-- Table structure for table `mst_user`
--

CREATE TABLE `mst_user` (
  `user_id` int(5) NOT NULL,
  `login` varchar(20) DEFAULT NULL,
  `pass` varchar(20) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `city` varchar(15) DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_user`
--

INSERT INTO `mst_user` (`user_id`, `login`, `pass`, `username`, `address`, `city`, `phone`, `email`) VALUES
(1, 'raj', 'raj', 'Rajen', 'limbdi', 'limbdi', 9999, 'raj@yahoo.com'),
(12, 'ashish', 'shah', 'ashish', 'laskdjf', 'S''nagar', 228585, 'ashish@yahoo.com'),
(14, 'Dhaval123', 'a', 'a', 'a', 'a', 0, 'dhaval@yahoo.com'),
(15, 'amit', 'a123456', 'amit', 'xyz', 'snagar', 2147483647, 'amitrojasara@gmail.com'),
(16, 'sachin', 'welcome', 'sachin', 'kjjskjsdjsdjsdjakskjdskdjskjd', 'mumbai', 2147483647, 'sachin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `mst_useranswer`
--

CREATE TABLE `mst_useranswer` (
  `que_des` varchar(200) DEFAULT NULL,
  `ans1` varchar(50) DEFAULT NULL,
  `ans2` varchar(50) DEFAULT NULL,
  `ans3` varchar(50) DEFAULT NULL,
  `ans4` varchar(50) DEFAULT NULL,
  `true_ans` int(11) DEFAULT NULL,
  `your_ans` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_useranswer`
--

INSERT INTO `mst_useranswer` (`que_des`, `ans1`, `ans2`, `ans3`, `ans4`, `true_ans`, `your_ans`) VALUES
('What  Default Data Type ?', 'String', 'Variant', 'Integer', 'Boolear', 2, 1),
('What is Default Form Border Style ?', 'Fixed Single', 'None', 'Sizeable', 'Fixed Diaglog', 3, 3),
('Which is not type of Control ?', 'text', 'lable', 'checkbox', 'option button', 1, 3),
('Which city is known as The City of Palaces?', 'Kolkatta', 'Jerusalem', 'Mumbai', 'Udaipur', 1, 1),
('The Gateway of India is ?', 'Delhi', 'Kolkatta', 'Mumbai', 'Jammu', 3, 1),
('Which city is known as Pink City?', 'Hyderabad', 'Jaipur', 'Bangalore', 'Patna', 2, 1),
('Which is the city of Golden Temple?', 'Amritsar', 'Banaras', 'Chennai', 'Delhi', 1, 1),
('The Land of Lilies ?', 'Finland', 'Japan', 'USA', 'Canada', 4, 1),
('The symbol dove signifies ?', 'Strength', 'Dignity', 'Peace', 'Distress', 3, 1),
('How many players are there on each side in a baseball match', '7', '9', '5', '11', 2, 2),
('Which one of seven wonders of the world is in India', 'Leaning Tower', 'Eiffel Tower', 'TajMahal', 'Colosseum', 3, 1),
('Who started the ancient Olympic Games', 'the Greeks', 'the Egyptians', 'the Romans', 'the Aryans', 1, 2),
('The first Indian in Space was?', 'Vishnu Bhagvat', 'Rakesh Sharma', 'Kalpana Chawla', 'Juhi Chawla', 2, 1),
('After how many years gap is the Cricket World Cup held?', '3', '4', '5', '6', 2, 1),
('The slogan Piyo Sar Utha ke is associated with which company?', 'Pepsi', 'Mirinda', 'Thums Up', 'Coca-Cola', 4, 1),
('Which of these is a renewable source of energy?', 'sunlight', 'petrol', 'coal', 'diesel', 1, 1),
('Biogas consists mainly of ?', 'carbon monoxide', 'methane', 'chlorine', 'nitrogen', 2, 1),
('Deafness can be caused by ?', 'water pollution', 'air pollution', 'noise pollution', 'soil pollution', 3, 1),
('Which animal is the logo of WWF?', 'bear', 'giant panda', 'eagle', 'tiger', 2, 1),
('Acoustics deals with ?', 'sound', 'light', 'insects', 'air', 1, 1),
('Fatehpur Sikri was built by ?', 'Aurungzeb', 'Akbar', 'Shah Jahan', 'Jahengir', 2, 2),
('Which is the largest ocean in the world?', 'Atlantic', 'Pacific', 'Indian', 'Arctic', 2, 2),
('The sea-route to India was discovered in?', '1598', '1558', '1498', '1458', 3, 3),
('When is U.N. Day celebrated?', '24 Oct', '23 Oct', '24 Sep', '23 Nov', 1, 2),
('Which of the following countries celebrates Christmas festival in the summer season?', 'Canada', 'Britian', 'Australia', 'Zimbabwe', 3, 1),
('What  Default Data Type ?', 'String', 'Variant', 'Integer', 'Boolear', 2, 3),
('What is Default Form Border Style ?', 'Fixed Single', 'None', 'Sizeable', 'Fixed Diaglog', 3, 2),
('Which city is known as The City of Palaces?', 'Kolkatta', 'Jerusalem', 'Mumbai', 'Udaipur', 1, 2),
('The Gateway of India is ?', 'Delhi', 'Kolkatta', 'Mumbai', 'Jammu', 3, 2),
('Which city is known as Pink City?', 'Hyderabad', 'Jaipur', 'Bangalore', 'Patna', 2, 1),
('Which is the city of Golden Temple?', 'Amritsar', 'Banaras', 'Chennai', 'Delhi', 1, 3),
('The Land of Lilies ?', 'Finland', 'Japan', 'USA', 'Canada', 4, 3),
('The symbol dove signifies ?', 'Strength', 'Dignity', 'Peace', 'Distress', 3, 1),
('How many players are there on each side in a baseball match', '7', '9', '5', '11', 2, 3),
('What  Default Data Type ?', 'String', 'Variant', 'Integer', 'Boolear', 2, 2),
('What is Default Form Border Style ?', 'Fixed Single', 'None', 'Sizeable', 'Fixed Diaglog', 3, 4),
('Which is not type of Control ?', 'text', 'lable', 'checkbox', 'option button', 1, 2),
('What  Default Data Type ?', 'String', 'Variant', 'Integer', 'Boolear', 2, 2),
('What is Default Form Border Style ?', 'Fixed Single', 'None', 'Sizeable', 'Fixed Diaglog', 3, 2),
('Which is not type of Control ?', 'text', 'lable', 'checkbox', 'option button', 1, 2),
('if caps lock key is on then', 'small letters are printed', 'the lowercase letter are printed', 'capital letters print', 'none of the above', 3, 3),
('________are equivalent to 1 mb', '1022 kb', '1024 kb', '1024 byte', '1000 gb', 2, 2),
('to move the cursor beginning of the which key is used', 'end', 'home', 'pgup', 'pgdn', 2, 2),
('to move the cursor end of the which key is used', 'end', 'home', 'pgup', 'pgdn', 1, 2),
('the touchable part of computer is called as', 'hardware', 'software', 'programe', 'none', 1, 3),
('to enter the number a special key slot is given on the keyboard which is', 'alphanumeric number', 'numeric key pad', 'function key', 'none of the above', 2, 1),
('on numeric key pad the keyu present are', '0 to 9 numbers', '+/*characters', 'arrow key', 'all of the above', 4, 3),
('the delete the character right side of the cursor which key is used', 'inst', 'del', 'backspace', 'home', 2, 2),
('to deleter the character towards left side is', 'backspace', 'del', 'inst', 'home', 1, 4),
('in keyboard the function of which type keys change according the software', 'alphanumeric key', 'numeric key pad', 'function key', 'none of the above', 2, 2),
('all arithmetic and logical processing is done in', 'ALU', 'CU', 'CPU', 'none of the above', 3, 3),
('which of the following is input device', 'speaker', 'printer', 'plotter', 'scanner', 4, 4),
('________is colled the brain of computer', 'mouse', 'keyboard', 'cpu', 'memory', 3, 3),
('the development of first generation computer is', '1955-1965', '1965-1975', '1945-1954', 'none', 3, 1),
('mouse is the type of device', 'input', 'pointing', 'scanning', 'none of the above', 2, 1),
('keybord is the type of device', 'input', 'pointing', 'output', 'sound', 1, 2),
('floppy disk is the type of memory', 'magnatic & secondarymain memory', 'main memory', 'o primary', 'none of the above', 1, 3),
('Personal Computer are the type of computer', 'super computer', 'mini computer', 'micro computer', 'mainframe computer', 3, 3),
('RAM Stands for', 'Random Access Memory', 'Random accelerated Memory', 'Random Access Machenism', 'Random Accurace Mantan', 1, 3),
('PC Stands for', 'pocket computer', 'personal computer', 'phisycal computer', 'personal card', 2, 4),
(NULL, NULL, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `polls`
--

CREATE TABLE `polls` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `polls`
--

INSERT INTO `polls` (`id`, `subject`, `created`, `modified`, `status`) VALUES
(1, 'Which is Your Favorite Website for PHP Programming?', '2016-11-07 04:13:13', '2016-11-07 04:13:13', '1');

-- --------------------------------------------------------

--
-- Table structure for table `poll_options`
--

CREATE TABLE `poll_options` (
  `id` int(11) NOT NULL,
  `poll_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `poll_options`
--

INSERT INTO `poll_options` (`id`, `poll_id`, `name`, `created`, `modified`, `status`) VALUES
(1, 1, 'CodexWorld', '2016-11-07 11:29:31', '2016-11-07 11:29:31', '1'),
(2, 1, 'SitePoint', '2016-11-07 11:29:31', '2016-11-07 11:29:31', '1'),
(3, 1, 'Envato Tuts+', '2016-11-07 11:29:31', '2016-11-07 11:29:31', '1'),
(4, 1, 'Others', '2016-11-08 08:20:25', '2016-11-08 08:20:25', '1');

-- --------------------------------------------------------

--
-- Table structure for table `poll_votes`
--

CREATE TABLE `poll_votes` (
  `id` int(11) NOT NULL,
  `poll_id` int(11) NOT NULL,
  `poll_option_id` int(11) NOT NULL,
  `vote_count` bigint(10) NOT NULL,
  `images` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `poll_votes`
--

INSERT INTO `poll_votes` (`id`, `poll_id`, `poll_option_id`, `vote_count`, `images`) VALUES
(1, 1, 2, 14, ''),
(2, 1, 1, 14, ''),
(3, 1, 3, 9, '');
INSERT INTO `poll_votes` (`id`, `poll_id`, `poll_option_id`, `vote_count`, `images`) VALUES
(1433, 1, 2, 2, 0xffd8ffe110fe45786966000049492a00080000000c0000010300010000000004000001010300010000006801000002010300030000009e0000000601030001000000020000001201030001000000010000001501030001000000030000001a01050001000000a40000001b01050001000000ac000000280103000100000002000000310102001c000000b40000003201020014000000d00000006987040001000000e40000001c01000008000800080080fc0a001027000080fc0a001027000041646f62652050686f746f73686f70204353352057696e646f777300323031353a30393a32332031373a34373a303400040000900700040000003032323101a0030001000000ffff000002a00400010000000005000003a0040001000000c102000000000000000006000301030001000000060000001a010500010000006a0100001b010500010000007201000028010300010000000200000001020400010000007a01000002020400010000007c0f00000000000048000000010000004800000001000000ffd8ffed000c41646f62655f434d0002ffee000e41646f626500648000000001ffdb0084000c08080809080c09090c110b0a0b11150f0c0c0f1518131315131318110c0c0c0c0c0c110c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c010d0b0b0d0e0d100e0e10140e0e0e14140e0e0e0e14110c0c0c0c0c11110c0c0c0c0c0c110c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0cffc0001108005800a003012200021101031101ffdd0004000affc4013f0000010501010101010100000000000000030001020405060708090a0b0100010501010101010100000000000000010002030405060708090a0b1000010401030204020507060805030c33010002110304211231054151611322718132061491a1b14223241552c16233347282d14307259253f0e1f163733516a2b283264493546445c2a3743617d255e265f2b384c3d375e3f3462794a485b495c4d4e4f4a5b5c5d5e5f55666768696a6b6c6d6e6f637475767778797a7b7c7d7e7f711000202010204040304050607070605350100021103213112044151617122130532819114a1b14223c152d1f0332462e1728292435315637334f1250616a2b283072635c2d2449354a317644555367465e2f2b384c3d375e3f34694a485b495c4d4e4f4a5b5c5d5e5f55666768696a6b6c6d6e6f62737475767778797a7b7c7ffda000c03010002110311003f00e65de9f799f14e2224198e148961d3943d9b4cb78ee14cb528320108199b9ac17b46e356ae68eedee8951fa4df02a731a1e0f28290516d37b0594b839a7ef0acd4f754f6b9a60859acc66637536ec3b2bb413e44f82d284829add7baebb21cdc2c5b0b05706c7b7927f75571d62fb4630bccdb8ef8f53c5a7c555eb3866bb06654201d2c1e7e2aad81c29f5dba911b8792049b29a7b2a7a84102d1a1e1c16856e6b9bb9a6478ae7f16c1762d6fe646aaee2defc5d8f3eeaddcb48d0471cfd2dc818f655bb6ea9f53cb1e36b841239e44a9b43761e374c8e663c3fb49605b8f957d2fb46ea0b87abb1baed1f4b76cfcdfdefe42b1d41b8cdcb78c4114100b2276931eff0049cefa55ee4c4a0088183d22f9f70301b1dbf7f727ff00021bed91ee907533d94773a36ee31e13a24a5949b5bdec7bdbf46b00bbe6ace3330ce1de6e6939067d08064e9a7a51f4fdff00ceaacd7c08dad3e2484948ca62a4469f9144a4a59327512929ffd0e62c70ac4bc9feb013f7a6659bb5079e08e0a2fa8c3a8d502f0dadaeb6b6fd1d5ec1dc7f27f94a55ac81db79ed211880e12175bd33ea163fa2cbbac3ec764b9a0fd9aa76c6d60ebb2db0073edbff007f6fe899ff0008ae33ea5f47aadf508bae60e29b2cf6ff0068d6caed77fdb899ee4578c723d9e02df46c1e9d8e03c0cea0a352e747a766af1c1f10bd3eba30e9a8d0dc4aaba620d6c630363f94d2df77f6951b3eaefd5abccfd8aa6999966eae0ffd69ed43dd1d977b27bbe7f7d0dbaa754e1ed7885cfbeb752cb28772d10bd5f27ea7f497026a7dd41edb5fbc7f9b6b5dff0056b97ebff51fa8b41cae9a7eded6b4fab4b5bb2f81f9cca65edc8ffad3fd5ff82478e25071c874bf2713a1d9bf0b69edc2d2ab1de323d3bab734b61d656ff63b6f3f9fb7e92cff00aa2df52e6816575063bd40fb8c33da43bfacefea2dfeb4e7e4dcdcbb1f439cf6fa66aa9fbdcddbb9c0d9fbdbbf7ffeb69c16367a0e5e461fda6aa36b5af33061fec33b5bbbfb5ef56ba9f5da71f1dbfb42e6575b3dcc635a376ba7b18d5858792ec5c6231d9eae5e4bf663d4239fce7ba7f32bfa4e57f0ba455459f6ac9232b39c773af7890d27f371d8efe6dbff0009fcf3d30ee9403eb05f6eb87d2b2ae676b1c0560fc37a7ff9c8693fe50e9d93895f7bb6fa8c1fd62c0b629c7c8c9b0b28a9f7bc092180b881e2e50b196d4f35d8c755637e931e0b5c27c5ae414d8c6eb0fc8a2bbf16eaeea1bedaec60040d3e87fc1bf6fe63fde8763dd63dd63be93ccba04092b26ee9afaae39dd25c3173bf399fe06f1de8cba7e83b7fefabd839b4e7e28c9a9a6a21c6bbf1dfaba9b5bfce50f3f9dfbf4d9fe12aff0084f5525362c7b5cd006ef6e8d98e10dc2003e28ceaa31c59b5fba64e9edd9f9aeff39036b8b4b803b4685dd84a4a59453929a5253fffd1e5a8a2db6c632a00d9638318d69fa4e71d8c6ff69c57a174bfa9d81802ab72a32f3ea21e5e67d163c76a69fa367a6eff000b77f5ff0046b8dfa91d0b28fd65aad73f7e0e1076493c9dc3d98d5bbfebce6bff00eb6bd24dd734cb5a1e072263f12964974fb593142f5fb2d7b1d70f735d0ee4ceb29373831b36d6001dc1e7e0876e7e3d7a5c0b7c4c481f12d40b836df730cb08d1c35041fdd728afb3308f709c65e3e5873b1c871618b18747349e3733e97f55576d3635dce933c72a9d980e1fa5a9e69bda3db6b79feab9a7db633f90f53c1ead67a8dc5ea1b2bc87bb654f69865a627f461dee6d9a7f34975d57569e945d532f33a67ebb48f570869935c49a7fe1bff0bbbf3ffd0ffc5ab985d471b3691654e87f2214b24fa64d838e23b107f3755ccddd36bc5bbed7d1ac188666dc4249a75e5f48f77a3fcba7f99ff47e8a1d6ad3d069f66eeaf51fabdd2b2ae7653ea38f9966afc8a046f71fcfba8fe6ae73bf39ff00a3b9ff00e95735d43a66574fb8b2f6cb1d22bb99f41dff00907ffc1bd6861fd7bc4aee762752732bb2a740b4383eb2e1f9ccb6b3635cc55feb1fd6ec2bdadc6c3b1b71b9cd6fa7490f2e923dbbbe833fb4a48ccc74367c3fb58a78e120640815d7ff004143f57e90ff005b30eb04e3d3e4d6c3f21c3fe32e76cffacad82a9f41a055d0f01c0ee75f53edb0f1fa436dd5dacfec3eb5a58f89765dc28a002f70249260003973ca79ddaef47f55db5b7a5973482fb2d79b639044358d7ff6152fae02b3661be47aa5b635c275d80b4b0ff577ef4f8b839bd26ca5d4decb0e5dada6e616135890e75767d3658e7b5cdfe42059d2b37aad55f527e437ed17b27d17b4b5ad682ef4abadcdddb1bb3f7da829c459fbbec7f582a2dd2aeaf5baab876f5e91ea63dbfd7737f43ff5d5a565765563eab1bb6cac96bda7b10b23ad9233ba2b5bf4fedad3fd996072414ec1531634546b3be1dab802209fcd45c5a8383defa4dac702cac8ecff00f5fcf555ed731c58f10e6e8e1e6929627ef515373da6a15eb2d3bb81c9e7ddf490e5253fffd2defabf88cc2c13241b6f76eb1edfa3edf631b5ff00c1b7dffd7576dbdac107940bacaeac4a3d1e3d266c3da36b4b4af3afad1f583ace275134d19b60aac607b76905a352d206eaf7b5cd737f794649948f76c8a8441e8347d159b5f2491e7f1557259e854fb71de6874c868d584ff2aa3ff7cd8bce703ebe759c570191b3319f9c1c3d3b08fe4db5fb777f5ea7ae907d63afab63b7d31663bc0d6bb9bb7fccb7f9bb5090206a3ea17427191d0fd0bd074deb3575163a97015e557ad95cf23fd2d67f3eaffcf687d42aa4b5edb36be47d13a83e1fdafdd5cab6ab1b6fa8d73aac9abdd53d861c0fe716fef7f296bd3d41d938ad765edaae7bcd4d7cc0b1e06ef634fe77ef26eb43ab2501aecdcc1eaedc8fd4b25ffacb67d17bb4f55a07fe7faff3ff00d233f49fbea6715aea9d63dc5ac04b46df11f9cb232706bbe8797b4efa9c20ea0b48fa2e6feea97ed9bb0b1c3321bebb6e693b846e0e67b7f48dd377f5d3a31d4697a2a4400493c22de73acfd5c651d4a2bb9cdc7c805ec6b740d33fa46ff27e96fda834f44c06c97b4bc8f13fef564f52bba95c6e2c2c63096d40993fcb73e3dbb9db55ec6633d0b8bfd226c69630d8f0d2c3fe97faaa788f48bdda5908333c3b3a1f562e6bfa6d9d35b3ea74f73f2281ceec5b48fb435bff0084b2ff0048ff00f82cb5b9839e706c7dadac5bea343609db0277760e5c9744aaeb3249a1eeaf271cfab45f50de6b78058e7edfa3763dac3e96452efd1e452b6db9d4b9cdaee6b70f2df338c5dfa27c1fe73a6e4d9b597d4f9fe8963999f47f35e95dfce2446ab5dc3f58dfa4e2b4c191ef3a11dfe8261f591ed01adc568004001e600ff3161b73312c90cbeb247237b411fd971dc837f53e9b8c09bf26b6c760e0f77c9956f7a6a9d0ccc939796fc8d82b3644b4191a00cfa463f7562564750eb4cc86eb460377b5de2e787578dfdab77dd97ff11f65ff004881fb4f27acb8e3f4ca88c49db7655a21847eebb6fd26ff00dd6abf4b77f86f4aadeba3e8fd1b1ce15c19639a6b25dbcc6eb2c70df65f7ff5fd8cfe47f368a9ae4fc544417004c0ee7cbe6a55d9b5c1f3046a349d50de46e3064133a88414a260a8ca44a892929fffd3a1f573eb4b33fa45383698cdc260aa3f7ea67b6ab1bfca6336d567fdb887998d8d9876e5d2db834cb43a647f55ccdaf5c18fb5616403eea6eace9d885a63eb466edf70dcef12547281bb0cf0cb1e1a93bb958f8d898ce35b2ba2b3f4dc006c0feb7d25529eb9d2cbfdf711a0d5cd747e42b9dcdea5999ce0722c2e68d5ac1a347c1aa781807209b6d26bc5af5b6cf2fdd67ef58ffa2c4463bdf741cdfba347aa7756c56e3b6fa5a6e0f2454082c69dbf49feef7fa6d77b1673f3efcabb7e4b838c6d6b4086b5bfb95b3f35a83eb7ace9da18c680caeb1c3583e833ff0025fcb507b60c852c6023b7dac52c9296fb767771face6d55fa41c2c691b417eae03f777fd2ff003902dc87bec9b4cc8811a003c1ab3aab4989e42b36b83a82f1cb4222201b035519c88a2490be0c358e68e05851ef1fabdcff00dd6c81133e4a8f47b0d98ee279de51f3ac7b719e1a489f0308f45aedfd4fb054db329b756c7b80acd6e0498107d4d3fea7fc22d2baba9c1f43f65f4bb90e68731dff005bb25733f55af032454e23d376ae0e300c7e6cff002974e5bbaed95c1dc7da019001d76eefe4a64b74b419f54fa366de2baf1456f7c9f658f6344092edbb9ed6ff0065899bf567a2e25ce6bb103ecadc5a7d57bac123f90e77a6eff316ae3d94d0e73adf51b7b0c56eae3da47d23cfb94725f8ee787501e244bf79925dfbdcbbe920a65752caa9a431ae6c376bda5bb5ad772195b61ad6fb7f354abcac36318d7636e737f9c3bbe9e9f46c11fcdeef7ec559cf711ab89f2249537b9be80af7b0ecf7693249fcd494c2e7d65ee756df4eb3ab59331e5b946e60aec2c0f0f800ee6f1a84c1e5ae0e6982dd41f351b2d7be3799898e3bfc1252c4a694d2a32929ffd4e7b2aac4cb6edbeb6d822038e8e1f077d258f93f576b3eec6bc367f32dff00c9b7ff0020b0d252cabaad0eee0fd5bb9ef9b40ba24c56e696e9afb8ca6bae3700d6b4574b75654de07f29dfbcf586921a569f54ebd5d861da55804382e7d2494ef6c8718f046aac96bab77e7021736924a77fa34b2bbab3cb1eace63c7a401e09d572e9243653d16139d8d935d8d3edddafcd76755ad10f82644b483104fe72f2a49364a0fab3ded738968db3c82675f8a4c7b5ae05da81da242f2949352fa99207074eca3b979724929f502e502e5e64924a7d2f72695e6a924a7fffd9ffed182c50686f746f73686f7020332e30003842494d04040000000000171c015a00031b25471c015a00031b25471c020000027e37003842494d04250000000000105d41fb96faad7ed03c026a927d0d124f3842494d043a000000000093000000100000000100000000000b7072696e744f75747075740000000500000000436c7253656e756d00000000436c7253000000005247424300000000496e7465656e756d00000000496e746500000000436c726d000000004d70426c626f6f6c010000000f7072696e745369787465656e426974626f6f6c000000000b7072696e7465724e616d6554455854000000010000003842494d043b0000000001b200000010000000010000000000127072696e744f75747075744f7074696f6e7300000012000000004370746e626f6f6c0000000000436c6272626f6f6c00000000005267734d626f6f6c000000000043726e43626f6f6c0000000000436e7443626f6f6c00000000004c626c73626f6f6c00000000004e677476626f6f6c0000000000456d6c44626f6f6c0000000000496e7472626f6f6c000000000042636b674f626a630000000100000000000052474243000000030000000052642020646f7562406fe000000000000000000047726e20646f7562406fe0000000000000000000426c2020646f7562406fe000000000000000000042726454556e744623526c74000000000000000000000000426c6420556e744623526c7400000000000000000000000052736c74556e74462350786c40520000000000000000000a766563746f7244617461626f6f6c010000000050675073656e756d00000000506750730000000050675043000000004c656674556e744623526c74000000000000000000000000546f7020556e744623526c7400000000000000000000000053636c20556e74462350726340590000000000003842494d03ed000000000010004800000001000200480000000100023842494d042600000000000e000000000000000000003f8000003842494d03f200000000000a0000ffffffffffff00003842494d040d0000000000040000001e3842494d04190000000000040000001e3842494d03f3000000000009000000000000000001003842494d271000000000000a000100000000000000023842494d03f5000000000048002f66660001006c66660006000000000001002f6666000100a1999a0006000000000001003200000001005a00000006000000000001003500000001002d000000060000000000013842494d03f80000000000700000ffffffffffffffffffffffffffffffffffffffffffff03e800000000ffffffffffffffffffffffffffffffffffffffffffff03e800000000ffffffffffffffffffffffffffffffffffffffffffff03e800000000ffffffffffffffffffffffffffffffffffffffffffff03e800003842494d040000000000000200093842494d040200000000001400000000000000000000000000000000000000003842494d043000000000000a010101010101010101013842494d042d00000000000600010000000a3842494d0408000000000010000000010000024000000240000000003842494d041e000000000004000000003842494d041a000000000337000000060000000000000000000002c100000500000000010031000000010000000000000000000000000000000000000001000000000000000000000500000002c100000000000000000000000000000000010000000000000000000000000000000000000010000000010000000000006e756c6c0000000200000006626f756e64734f626a6300000001000000000000526374310000000400000000546f70206c6f6e6700000000000000004c6566746c6f6e67000000000000000042746f6d6c6f6e67000002c100000000526768746c6f6e670000050000000006736c69636573566c4c73000000014f626a6300000001000000000005736c6963650000001200000007736c69636549446c6f6e67000000000000000767726f757049446c6f6e6700000000000000066f726967696e656e756d0000000c45536c6963654f726967696e0000000d6175746f47656e6572617465640000000054797065656e756d0000000a45536c6963655479706500000000496d672000000006626f756e64734f626a6300000001000000000000526374310000000400000000546f70206c6f6e6700000000000000004c6566746c6f6e67000000000000000042746f6d6c6f6e67000002c100000000526768746c6f6e67000005000000000375726c54455854000000010000000000006e756c6c54455854000000010000000000004d7367655445585400000001000000000006616c74546167544558540000000100000000000e63656c6c54657874497348544d4c626f6f6c010000000863656c6c546578745445585400000001000000000009686f727a416c69676e656e756d0000000f45536c696365486f727a416c69676e0000000764656661756c740000000976657274416c69676e656e756d0000000f45536c69636556657274416c69676e0000000764656661756c740000000b6267436f6c6f7254797065656e756d0000001145536c6963654247436f6c6f7254797065000000004e6f6e6500000009746f704f75747365746c6f6e67000000000000000a6c6566744f75747365746c6f6e67000000000000000c626f74746f6d4f75747365746c6f6e67000000000000000b72696768744f75747365746c6f6e6700000000003842494d042800000000000c000000023ff00000000000003842494d041100000000000101003842494d04140000000000040000000a3842494d040c000000000f9800000001000000a000000058000001e00000a50000000f7c00180001ffd8ffed000c41646f62655f434d0002ffee000e41646f626500648000000001ffdb0084000c08080809080c09090c110b0a0b11150f0c0c0f1518131315131318110c0c0c0c0c0c110c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c010d0b0b0d0e0d100e0e10140e0e0e14140e0e0e0e14110c0c0c0c0c11110c0c0c0c0c0c110c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0cffc0001108005800a003012200021101031101ffdd0004000affc4013f0000010501010101010100000000000000030001020405060708090a0b0100010501010101010100000000000000010002030405060708090a0b1000010401030204020507060805030c33010002110304211231054151611322718132061491a1b14223241552c16233347282d14307259253f0e1f163733516a2b283264493546445c2a3743617d255e265f2b384c3d375e3f3462794a485b495c4d4e4f4a5b5c5d5e5f55666768696a6b6c6d6e6f637475767778797a7b7c7d7e7f711000202010204040304050607070605350100021103213112044151617122130532819114a1b14223c152d1f0332462e1728292435315637334f1250616a2b283072635c2d2449354a317644555367465e2f2b384c3d375e3f34694a485b495c4d4e4f4a5b5c5d5e5f55666768696a6b6c6d6e6f62737475767778797a7b7c7ffda000c03010002110311003f00e65de9f799f14e2224198e148961d3943d9b4cb78ee14cb528320108199b9ac17b46e356ae68eedee8951fa4df02a731a1e0f28290516d37b0594b839a7ef0acd4f754f6b9a60859acc66637536ec3b2bb413e44f82d284829add7baebb21cdc2c5b0b05706c7b7927f75571d62fb4630bccdb8ef8f53c5a7c555eb3866bb06654201d2c1e7e2aad81c29f5dba911b8792049b29a7b2a7a84102d1a1e1c16856e6b9bb9a6478ae7f16c1762d6fe646aaee2defc5d8f3eeaddcb48d0471cfd2dc818f655bb6ea9f53cb1e36b841239e44a9b43761e374c8e663c3fb49605b8f957d2fb46ea0b87abb1baed1f4b76cfcdfdefe42b1d41b8cdcb78c4114100b2276931eff0049cefa55ee4c4a0088183d22f9f70301b1dbf7f727ff00021bed91ee907533d94773a36ee31e13a24a5949b5bdec7bdbf46b00bbe6ace3330ce1de6e6939067d08064e9a7a51f4fdff00ceaacd7c08dad3e2484948ca62a4469f9144a4a59327512929ffd0e62c70ac4bc9feb013f7a6659bb5079e08e0a2fa8c3a8d502f0dadaeb6b6fd1d5ec1dc7f27f94a55ac81db79ed211880e12175bd33ea163fa2cbbac3ec764b9a0fd9aa76c6d60ebb2db0073edbff007f6fe899ff0008ae33ea5f47aadf508bae60e29b2cf6ff0068d6caed77fdb899ee4578c723d9e02df46c1e9d8e03c0cea0a352e747a766af1c1f10bd3eba30e9a8d0dc4aaba620d6c630363f94d2df77f6951b3eaefd5abccfd8aa6999966eae0ffd69ed43dd1d977b27bbe7f7d0dbaa754e1ed7885cfbeb752cb28772d10bd5f27ea7f497026a7dd41edb5fbc7f9b6b5dff0056b97ebff51fa8b41cae9a7eded6b4fab4b5bb2f81f9cca65edc8ffad3fd5ff82478e25071c874bf2713a1d9bf0b69edc2d2ab1de323d3bab734b61d656ff63b6f3f9fb7e92cff00aa2df52e6816575063bd40fb8c33da43bfacefea2dfeb4e7e4dcdcbb1f439cf6fa66aa9fbdcddbb9c0d9fbdbbf7ffeb69c16367a0e5e461fda6aa36b5af33061fec33b5bbbfb5ef56ba9f5da71f1dbfb42e6575b3dcc635a376ba7b18d5858792ec5c6231d9eae5e4bf663d4239fce7ba7f32bfa4e57f0ba455459f6ac9232b39c773af7890d27f371d8efe6dbff0009fcf3d30ee9403eb05f6eb87d2b2ae676b1c0560fc37a7ff9c8693fe50e9d93895f7bb6fa8c1fd62c0b629c7c8c9b0b28a9f7bc092180b881e2e50b196d4f35d8c755637e931e0b5c27c5ae414d8c6eb0fc8a2bbf16eaeea1bedaec60040d3e87fc1bf6fe63fde8763dd63dd63be93ccba04092b26ee9afaae39dd25c3173bf399fe06f1de8cba7e83b7fefabd839b4e7e28c9a9a6a21c6bbf1dfaba9b5bfce50f3f9dfbf4d9fe12aff0084f5525362c7b5cd006ef6e8d98e10dc2003e28ceaa31c59b5fba64e9edd9f9aeff39036b8b4b803b4685dd84a4a59453929a5253fffd1e5a8a2db6c632a00d9638318d69fa4e71d8c6ff69c57a174bfa9d81802ab72a32f3ea21e5e67d163c76a69fa367a6eff000b77f5ff0046b8dfa91d0b28fd65aad73f7e0e1076493c9dc3d98d5bbfebce6bff00eb6bd24dd734cb5a1e072263f12964974fb593142f5fb2d7b1d70f735d0ee4ceb29373831b36d6001dc1e7e0876e7e3d7a5c0b7c4c481f12d40b836df730cb08d1c35041fdd728afb3308f709c65e3e5873b1c871618b18747349e3733e97f55576d3635dce933c72a9d980e1fa5a9e69bda3db6b79feab9a7db633f90f53c1ead67a8dc5ea1b2bc87bb654f69865a627f461dee6d9a7f34975d57569e945d532f33a67ebb48f570869935c49a7fe1bff0bbbf3ffd0ffc5ab985d471b3691654e87f2214b24fa64d838e23b107f3755ccddd36bc5bbed7d1ac188666dc4249a75e5f48f77a3fcba7f99ff47e8a1d6ad3d069f66eeaf51fabdd2b2ae7653ea38f9966afc8a046f71fcfba8fe6ae73bf39ff00a3b9ff00e95735d43a66574fb8b2f6cb1d22bb99f41dff00907ffc1bd6861fd7bc4aee762752732bb2a740b4383eb2e1f9ccb6b3635cc55feb1fd6ec2bdadc6c3b1b71b9cd6fa7490f2e923dbbbe833fb4a48ccc74367c3fb58a78e120640815d7ff004143f57e90ff005b30eb04e3d3e4d6c3f21c3fe32e76cffacad82a9f41a055d0f01c0ee75f53edb0f1fa436dd5dacfec3eb5a58f89765dc28a002f70249260003973ca79ddaef47f55db5b7a5973482fb2d79b639044358d7ff6152fae02b3661be47aa5b635c275d80b4b0ff577ef4f8b839bd26ca5d4decb0e5dada6e616135890e75767d3658e7b5cdfe42059d2b37aad55f527e437ed17b27d17b4b5ad682ef4abadcdddb1bb3f7da829c459fbbec7f582a2dd2aeaf5baab876f5e91ea63dbfd7737f43ff5d5a565765563eab1bb6cac96bda7b10b23ad9233ba2b5bf4fedad3fd996072414ec1531634546b3be1dab802209fcd45c5a8383defa4dac702cac8ecff00f5fcf555ed731c58f10e6e8e1e6929627ef515373da6a15eb2d3bb81c9e7ddf490e5253fffd2defabf88cc2c13241b6f76eb1edfa3edf631b5ff00c1b7dffd7576dbdac107940bacaeac4a3d1e3d266c3da36b4b4af3afad1f583ace275134d19b60aac607b76905a352d206eaf7b5cd737f794649948f76c8a8441e8347d159b5f2491e7f1557259e854fb71de6874c868d584ff2aa3ff7cd8bce703ebe759c570191b3319f9c1c3d3b08fe4db5fb777f5ea7ae907d63afab63b7d31663bc0d6bb9bb7fccb7f9bb5090206a3ea17427191d0fd0bd074deb3575163a97015e557ad95cf23fd2d67f3eaffcf687d42aa4b5edb36be47d13a83e1fdafdd5cab6ab1b6fa8d73aac9abdd53d861c0fe716fef7f296bd3d41d938ad765edaae7bcd4d7cc0b1e06ef634fe77ef26eb43ab2501aecdcc1eaedc8fd4b25ffacb67d17bb4f55a07fe7faff3ff00d233f49fbea6715aea9d63dc5ac04b46df11f9cb232706bbe8797b4efa9c20ea0b48fa2e6feea97ed9bb0b1c3321bebb6e693b846e0e67b7f48dd377f5d3a31d4697a2a4400493c22de73acfd5c651d4a2bb9cdc7c805ec6b740d33fa46ff27e96fda834f44c06c97b4bc8f13fef564f52bba95c6e2c2c63096d40993fcb73e3dbb9db55ec6633d0b8bfd226c69630d8f0d2c3fe97faaa788f48bdda5908333c3b3a1f562e6bfa6d9d35b3ea74f73f2281ceec5b48fb435bff0084b2ff0048ff00f82cb5b9839e706c7dadac5bea343609db0277760e5c9744aaeb3249a1eeaf271cfab45f50de6b78058e7edfa3763dac3e96452efd1e452b6db9d4b9cdaee6b70f2df338c5dfa27c1fe73a6e4d9b597d4f9fe8963999f47f35e95dfce2446ab5dc3f58dfa4e2b4c191ef3a11dfe8261f591ed01adc568004001e600ff3161b73312c90cbeb247237b411fd971dc837f53e9b8c09bf26b6c760e0f77c9956f7a6a9d0ccc939796fc8d82b3644b4191a00cfa463f7562564750eb4cc86eb460377b5de2e787578dfdab77dd97ff11f65ff004881fb4f27acb8e3f4ca88c49db7655a21847eebb6fd26ff00dd6abf4b77f86f4aadeba3e8fd1b1ce15c19639a6b25dbcc6eb2c70df65f7ff5fd8cfe47f368a9ae4fc544417004c0ee7cbe6a55d9b5c1f3046a349d50de46e3064133a88414a260a8ca44a892929fffd3a1f573eb4b33fa45383698cdc260aa3f7ea67b6ab1bfca6336d567fdb887998d8d9876e5d2db834cb43a647f55ccdaf5c18fb5616403eea6eace9d885a63eb466edf70dcef12547281bb0cf0cb1e1a93bb958f8d898ce35b2ba2b3f4dc006c0feb7d25529eb9d2cbfdf711a0d5cd747e42b9dcdea5999ce0722c2e68d5ac1a347c1aa781807209b6d26bc5af5b6cf2fdd67ef58ffa2c4463bdf741cdfba347aa7756c56e3b6fa5a6e0f2454082c69dbf49feef7fa6d77b1673f3efcabb7e4b838c6d6b4086b5bfb95b3f35a83eb7ace9da18c680caeb1c3583e833ff0025fcb507b60c852c6023b7dac52c9296fb767771face6d55fa41c2c691b417eae03f777fd2ff003902dc87bec9b4cc8811a003c1ab3aab4989e42b36b83a82f1cb4222201b035519c88a2490be0c358e68e05851ef1fabdcff00dd6c81133e4a8f47b0d98ee279de51f3ac7b719e1a489f0308f45aedfd4fb054db329b756c7b80acd6e0498107d4d3fea7fc22d2baba9c1f43f65f4bb90e68731dff005bb25733f55af032454e23d376ae0e300c7e6cff002974e5bbaed95c1dc7da019001d76eefe4a64b74b419f54fa366de2baf1456f7c9f658f6344092edbb9ed6ff0065899bf567a2e25ce6bb103ecadc5a7d57bac123f90e77a6eff316ae3d94d0e73adf51b7b0c56eae3da47d23cfb94725f8ee787501e244bf79925dfbdcbbe920a65752caa9a431ae6c376bda5bb5ad772195b61ad6fb7f354abcac36318d7636e737f9c3bbe9e9f46c11fcdeef7ec559cf711ab89f2249537b9be80af7b0ecf7693249fcd494c2e7d65ee756df4eb3ab59331e5b946e60aec2c0f0f800ee6f1a84c1e5ae0e6982dd41f351b2d7be3799898e3bfc1252c4a694d2a32929ffd4e7b2aac4cb6edbeb6d822038e8e1f077d258f93f576b3eec6bc367f32dff00c9b7ff0020b0d252cabaad0eee0fd5bb9ef9b40ba24c56e696e9afb8ca6bae3700d6b4574b75654de07f29dfbcf586921a569f54ebd5d861da55804382e7d2494ef6c8718f046aac96bab77e7021736924a77fa34b2bbab3cb1eace63c7a401e09d572e9243653d16139d8d935d8d3edddafcd76755ad10f82644b483104fe72f2a49364a0fab3ded738968db3c82675f8a4c7b5ae05da81da242f2949352fa99207074eca3b979724929f502e502e5e64924a7d2f72695e6a924a7fffd93842494d042100000000005500000001010000000f00410064006f00620065002000500068006f0074006f00730068006f00700000001300410064006f00620065002000500068006f0074006f00730068006f0070002000430053003500000001003842494d04060000000000070002000000010100ffe11264687474703a2f2f6e732e61646f62652e636f6d2f7861702f312e302f003c3f787061636b657420626567696e3d22efbbbf222069643d2257354d304d7043656869487a7265537a4e54637a6b633964223f3e203c783a786d706d65746120786d6c6e733a783d2261646f62653a6e733a6d6574612f2220783a786d70746b3d2241646f626520584d5020436f726520352e302d633036302036312e3133343737372c20323031302f30322f31322d31373a33323a30302020202020202020223e203c7264663a52444620786d6c6e733a7264663d22687474703a2f2f7777772e77332e6f72672f313939392f30322f32322d7264662d73796e7461782d6e7323223e203c7264663a4465736372697074696f6e207264663a61626f75743d222220786d6c6e733a786d703d22687474703a2f2f6e732e61646f62652e636f6d2f7861702f312e302f2220786d6c6e733a786d704d4d3d22687474703a2f2f6e732e61646f62652e636f6d2f7861702f312e302f6d6d2f2220786d6c6e733a73745265663d22687474703a2f2f6e732e61646f62652e636f6d2f7861702f312e302f73547970652f5265736f75726365526566232220786d6c6e733a73744576743d22687474703a2f2f6e732e61646f62652e636f6d2f7861702f312e302f73547970652f5265736f757263654576656e74232220786d6c6e733a6372733d22687474703a2f2f6e732e61646f62652e636f6d2f63616d6572612d7261772d73657474696e67732f312e302f2220786d6c6e733a70686f746f73686f703d22687474703a2f2f6e732e61646f62652e636f6d2f70686f746f73686f702f312e302f2220786d6c6e733a64633d22687474703a2f2f7075726c2e6f72672f64632f656c656d656e74732f312e312f2220786d703a43726561746f72546f6f6c3d2241646f62652050686f746f73686f70204353352057696e646f77732220786d703a437265617465446174653d22323031352d30392d32335431303a32313a32352b30353a33302220786d703a4d6f64696679446174653d22323031352d30392d32335431373a34373a30342b30353a33302220786d703a4d65746164617461446174653d22323031352d30392d32335431373a34373a30342b30353a33302220786d704d4d3a496e7374616e636549443d22786d702e6969643a36374239444643364543363145353131424634433931353433424445383039312220786d704d4d3a446f63756d656e7449443d22786d702e6469643a34463734323239413333464531314534394334454546333932334635444632322220786d704d4d3a4f726967696e616c446f63756d656e7449443d22786d702e6469643a344637343232394133334645313145343943344545463339323346354446323222206372733a416c72656164794170706c6965643d2254727565222070686f746f73686f703a4c6567616379495054434469676573743d223241304446413930463135303938443344393545413731303632454642413333222070686f746f73686f703a436f6c6f724d6f64653d2233222064633a666f726d61743d22696d6167652f6a706567223e203c786d704d4d3a4465726976656446726f6d2073745265663a696e7374616e636549443d22786d702e6969643a3446373432323937333346453131453439433445454633393233463544463232222073745265663a646f63756d656e7449443d22786d702e6469643a3446373432323938333346453131453439433445454633393233463544463232222f3e203c786d704d4d3a486973746f72793e203c7264663a5365713e203c7264663a6c692073744576743a616374696f6e3d227361766564222073744576743a696e7374616e636549443d22786d702e6969643a4144464338314442423236314535313139413042463031304442323737323233222073744576743a7768656e3d22323031352d30392d32335431303a35303a35312b30353a3330222073744576743a736f6674776172654167656e743d2241646f62652050686f746f73686f70204353352057696e646f7773222073744576743a6368616e6765643d222f222f3e203c7264663a6c692073744576743a616374696f6e3d227361766564222073744576743a696e7374616e636549443d22786d702e6969643a3632443839323239444436314535313142463443393135343342444538303931222073744576743a7768656e3d22323031352d30392d32335431373a32343a31372b30353a3330222073744576743a736f6674776172654167656e743d2241646f62652050686f746f73686f70204353352057696e646f7773222073744576743a6368616e6765643d222f222f3e203c7264663a6c692073744576743a616374696f6e3d227361766564222073744576743a696e7374616e636549443d22786d702e6969643a3633443839323239444436314535313142463443393135343342444538303931222073744576743a7768656e3d22323031352d30392d32335431373a32343a34372b30353a3330222073744576743a736f6674776172654167656e743d2241646f62652050686f746f73686f70204353352057696e646f7773222073744576743a6368616e6765643d222f222f3e203c7264663a6c692073744576743a616374696f6e3d227361766564222073744576743a696e7374616e636549443d22786d702e6969643a3636423944464336454336314535313142463443393135343342444538303931222073744576743a7768656e3d22323031352d30392d32335431373a34373a30342b30353a3330222073744576743a736f6674776172654167656e743d2241646f62652050686f746f73686f70204353352057696e646f7773222073744576743a6368616e6765643d222f222f3e203c7264663a6c692073744576743a616374696f6e3d227361766564222073744576743a696e7374616e636549443d22786d702e6969643a3637423944464336454336314535313142463443393135343342444538303931222073744576743a7768656e3d22323031352d30392d32335431373a34373a30342b30353a3330222073744576743a736f6674776172654167656e743d2241646f62652050686f746f73686f70204353352057696e646f7773222073744576743a6368616e6765643d222f222f3e203c2f7264663a5365713e203c2f786d704d4d3a486973746f72793e203c70686f746f73686f703a446f63756d656e74416e636573746f72733e203c7264663a4261673e203c7264663a6c693e786d702e6469643a30313845454643383333464631314534423031324230333043413533433843313c2f7264663a6c693e203c7264663a6c693e786d702e6469643a34314343363644463334303031314534393733364142453832383541384442333c2f7264663a6c693e203c7264663a6c693e786d702e6469643a34463734323239413333464531314534394334454546333932334635444632323c2f7264663a6c693e203c2f7264663a4261673e203c2f70686f746f73686f703a446f63756d656e74416e636573746f72733e203c2f7264663a4465736372697074696f6e3e203c2f7264663a5244463e203c2f783a786d706d6574613e2020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020202020203c3f787061636b657420656e643d2277223f3effee000e41646f626500648000000001ffdb008400080606060606080606080c0807080c0e0a08080a0e100d0d0e0d0d10110c0c0c0c0c0c110c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c01090808090a090b09090b0e0b0d0b0e110e0e0e0e11110c0c0c0c0c11110c0c0c0c0c0c110c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0cffc000110802c1050003012200021101031101ffdd00040050ffc401a20000000701010101010000000000000000040503020601000708090a0b0100020203010101010100000000000000010002030405060708090a0b1000020103030204020607030402060273010203110400052112314151061361227181143291a10715b14223c152d1e1331662f0247282f12543345392a2b26373c235442793a3b33617546474c3d2e2082683090a181984944546a4b456d355281af2e3f3c4d4e4f465758595a5b5c5d5e5f566768696a6b6c6d6e6f637475767778797a7b7c7d7e7f738485868788898a8b8c8d8e8f82939495969798999a9b9c9d9e9f92a3a4a5a6a7a8a9aaabacadaeafa110002020102030505040506040803036d0100021103042112314105511361220671819132a1b1f014c1d1e1234215526272f1332434438216925325a263b2c20773d235e2448317549308090a18192636451a2764745537f2a3b3c32829d3e3f38494a4b4c4d4e4f465758595a5b5c5d5e5f5465666768696a6b6c6d6e6f6475767778797a7b7c7d7e7f738485868788898a8b8c8d8e8f839495969798999a9b9c9d9e9f92a3a4a5a6a7a8a9aaabacadaeafaffda000c03010002110311003f0084118c38a6348cc86b5235caae28571a5714acae5839b8e553155c0e383627be5838aaa571c0e240e381c55541ae51db1a1b1dd7156ab9ab947360554072f13538a8c52ecd979b156b365e562ade6cacd8ab79b366c55d9b2f362ab585460294509c1c702ceb8aa05cef991a872a4d8e26ad43815314a119646270b5462f4db0aa9d33531f4caa62ab40cbcba66c55c32f2b2f156c658ca18e18ab632f28658c55d4cb534cd988a61084446f4c1b0c9858a704c4f9305053989eb8291b0aa1930744f9362982362ca701a1c10a7154403989a0c603894d2f118154ee26001c27b9b8a577c52eee40aef91fbebda03be4245905796e857ae3e0b915eb916975025faed8b41a88db7c802c99b5bdc8f1c34866072196b7e0d37c3bb5bcaf7cb016253c968cb8497cbb1c3259c32e01bca30384ab16bed89c0d6b2d1bae0bd4075c2989f8c99549906516b274c3385f082d24d861bc126c32042532535c760747c59581c81095f97940e5e056f366cb18abb2f2b2f15765e6cb18abb2f2b2f156f2f2865e2ade5e565e2ade6cd9b156f2f2b2f156f366cbc55d979b362aecbcd9b156f366cb18abb30c7fa7275e271b8abb366cd8ab79b366c55bcd9b362aecbcd9b15766cd9b15765e6cd8abb366cbc55acbcd9b15766cd9b15766cd9b15766cd9b15766cbcd8abb366cd8abb366cd8abb366cd8abb2b366c55d9b366c55acd97958abb2b2f362ad66cd9b156b366cd8abb2b2f2b15766cd9b1576565e6c55acd9b362aecd9b362aecd9b362aecd9b362aecd9b2b15766cd9b15766cd9b15766cd9b15766cd9b157ffd083d72e99406380cc860ea6571c781974c554f8e34a62d4ca2315502b95c7162b95c71551a66c578e571c556038f07280cba62ae3958f03288c55a18f538ccb070255b36354d71d8abb2b2f28e2aecd959b156f2f2b362ade5e565e2aec4a65a8c5729c5462a944eb4381ab43861729d70b9f63815196ed83d77184f0c946a1c338640462aabc71a4629d7288c2aa74cd8e2328e2ad0cbcd978abb2f2865e2ad8cbcc32f156c65e565e2ab71446a6372875c2108e89f0c217c288da8707c2f9602c4a6d1b6094380216e982d5a82b9242bb3f1185f7571b1df1d3cf41d709af2e680ef8094842dfdcd01df229a8ddb12403be186a177d77c2090f3624e5122cc043b339ef8d123a9d89c54ae57a790648db4be652013922b1bead37c88702371836cee5a36009c9464c487a0dbdd557ae5cb30618456779551be0b6b8a8eb96da10ba80a827086a44b873732725384736d2e424909bda49d30e60976191db57e986d049d32294e524c5964c2d493165971a54c565c5964070b165c5926c89094c41072f02a4b8b2c95c8d2aae6cc08397815d979432f156f2f2b2f156f2f2b2f15765e6cd8ab79795978ab79795978abb2f366c55bcbcacbc55d9795978abb04da46198b1edd30360bb4700953d71546f014e985f72815ea3be185452b802e5c33d076eb8aa865e6cd8abb2f2b2f15766cd978abb366cd8abb2f366c55d9b365e2aecd9b1c91bb9a20ae2ab7362a6de651528712c55d979b362ad66cd978ab5979b362aecd9b362aecd9b362aecd9b362aecacbcac55d9b366c55d9b366c55d9597958abb366cd8ab59b366c55acd9b362aecd9b362ad66cd9b15766cd9b1576566cd8abb366cd8abb366cd8abb366cd8ab59b366c55d9b366c55d9b366c55d9b366c55d9b366c55fffd1867119a9975cae5990c1bcaae379634b6285f5caae265b372c52ab519b13e5975c55766a655466ae2aea66a65e6c55acb22b9b2eb8aa991958e618cc095ea71407100715538aafcd981cd8ab595979b15766cd958aaecb18d1978ab79795978aa16e12a0e154e94270f245a8c2cb98fae2552ce743836de7e9be174e0a9c4a3b8e2dd722964d1ca0e2c181c2582eabdf07c538392422c8c691995c1c752b8aaca66a63a99a98ab4065d32f2e98ab80cba66032f156b365d32b156f353366c285c86870642d807a60889b240a0a6d03e2ef38030b965e231296e76eb93b452adcdcd01df082faefaef8fbcbca03be476f6f391201cae52480b2e2632b75db11031356ae280e54cdd4cdc71d974c0ab38e348e26a315a6348c551d637343c49c32f5f6eb91d8df8383860b35464c14522e596b85d706a6b8ab495c0f21ae255176afd30de06c20b66de98736edb0c425325271fc88c4e33518a53142e1262ab2fbe0522994188c553249bdf04a4b850b2d30424d829369ba4b8bab838571cb826397224251e32f10492b8b06072242b7979b2f02bb2f365e2aecbcacbc55bcbccaacc68a093e031cd1ba8ab2903dc62ab72f2b2f156f2f2b2f15765e6cd8ab79b365e2ae009e9f762822917e2e94df17b74016a7a9c5c80453154319df874ebb571368a4eb4ae2c21d941ec6b820014c552ee99b04dc20a721d70362aecbcd9b156f366cd8abb2f2b2f15766cd9b15765e565e2aec38b385523151bf53850bb903df0f61d9062abd9148e984b75188e520743be1dd70ab501f1a9f9e2a83cd9b362aecd9b362aecd9b362aecd9b362aecd9b362aecd9b362aecacbcac55d9b05db59998726d87618bb69c94dab5c552dcd8f963689ca376e87198abb366cac55d9b366c55acd97958ab59b2f2b15766cd9b156b365e562aecd9b362ad66cbcac55d9b366c55d9b366c55d9597958abb366cd8abb366cd8abb366cd8abb366cd8abb366cac55fffd284938d271c46348cc860b4b6349c771c6918aad2735731194462adf2cb0d8ccaa9c555836381c403638362aad5cbc481c7838aaeae5d71b5cbae0571c61c7e34e2ab71453896394d314ab038ec6038ec55d95979b156b365e562ade6cacbc55bae3b198e18a1b22a302dc475c178d75a8c52c76ee1eb84d38284d3253731541db08eeedfaed912a8382ea8684e19dbdd57be1048a636c5a0b82bd70029a6550dc0c18928391c82ebdf0c61b8a81be4ad09b820e5d302c73038255ea30ab74cbcdd72f15766cba66c50d66cbcd8ab59b2f3629763d5b8e3328ec30842f79e83ae17dc5d501df1499b6384d7b2900e3c4b4a17b7bd77c28f54bb549c4ee2566722bb0c4d5a99593659008d46c594e0347c5d1b02a2063c626a7141855c71a71f8d38aa836c7178a4aae0793344db918854517ca26b8cae5e142e89a8f86f6cf84b5a3038656afd310a9e426a3048c050360c53855b2318462b4c6918aa8d2996ae46388c6918aaba4a7054737be16ee3144908c55388e5c151cb5c268e5c171cbef912129b2bd71e300c72e0a47ae4084ab658ca06b97815bcd9b2f154e74cb65110761bb6e706cd023a1046d8cb3a2c4a3c00c10c450e2ac6644f4e464fe534c6e2f7a2972c7b1a1c43157658cd9b156f2f2b2f15765e565e2aa8b2ba8a0cbf5e4c4b2f1555f5dfdb37aefed8965e2abda4671438ccd9b156f366cbc55d9b365e2aecd9b362aecd9b2f156b2f366c55b5254823a8c1d6f7a6a11f6f03884768efb9d862b2da88e33c7ae2a8a9aed634ad77ec30ba69da6fb4299702195e87703c7177b2ee869ed8aa0b3639e368cd187d38dc55d9b366c55d9b366c55d9b365e2ad66cd9b15766cd9b1576602a69e39b1d10ac8a3df154ee050b180314c64647118eae2a966a294656fa300e196a02a951d8d70b715766cd9b156b366cd8abb2b2f2b15766cd9b156b366cd8abb2b2f2b1576565e6c55d959b362aecd9b362aecd9b362ad66cbcac55d9b366c55d9b366c55d9b36562aecd9b362aecd9b362aff00ffd38566a66ae5e64305b4c695c53362aa4571a571523288c5540ae308c5cae34ae2aa19ab8a15c6118aae0d8f0d88e381c55581c70388838a038aaa0394d9432cf4c0aa6730cc72ab8a5594e3c624871518ab79b366c55d9b366c55acd9b362aec70c6e58c50bc65e341c7038a54264a83855750541c3b615181278ab5c558a5d5bf5db0b5a3287251736fd76c289ede8722425051c8ca70c20b9a77c02d11072d6aa702a7f05c569be18c535723704c4537c35b796b4df24109d2b038a60485ab82d70ab79b2c66c55acacbcd8ab59b366c2876622a3365e0541cebb1c26bc8c9ae48654a8c2cba86a0e0296237311524e07070e6f20eb84eea5588cac864b95a98bc6d8101c5518d710a8f46c5d5b01a360853850ad5cc71a0e3b0aa8483105346c1120c0cc28d5c0a8906b8f188a1a818a039255cc305dabf4c095ae2b01a362ac82ddab4c308ced8516afb0c3488ed85088ca232c65e15532318462a46348c0aa74caa63c8caa62ae0c462f1cb81f3034c55338a6c1b14b84b1c983629701094e637ae2c0e1745260c8df204255b2f281ae1a5a592710ee2a7df22aa16d773c479312d18ebed8bcf7ef22f182a4f5269d06099add5a328052a2981b4f83abb8dc9a7dd8aa01999cd5cd4fbe561d4d691382682be38532c66372877a74c55665e565e2aecbcd8a436f35c371850b91d69d31553cbc16fa5df46bc8c248f6a1c0cc8f19a3a9527a0614fd78ab59b366c55d979b362aecbcd9b15765e565e2abe38da4345fbf17faa378e2d6a9c501ee77c118aa59242d1f5e9e38cc32990321070b7a6d8abb366cd8abb14840320af4c4f2c6db8c553757403ae6665614ae15737fe639b9bff31c551f0a2444efd4d7e8c5fd45f1c29e6ffcc7efcdcdff0098fdf8aa32f3895a8eb8071c598f535cac55acd9b362aecd979b156b36088ecee651c923343dced8d92d6e233468dbe815fd58aa8e6cdf3cd8abb366cd8abb30241a8d8e58058803a9c1715957773f462ab20bb746a39aaf8f860996f1427c26add86326b6558c841be05b74e7201d86e71558f34927da6ae330c9ece36150287db01cd6ed16fd462aa39b366c55d9597958abb2b2f362ad66cd9b1576565e562aecacbcd8ab59b366c55acd9b362aecd9b362aecacbcac55d9b2f2b15766cd9b15766cd9b1576565e562aecd9b362aecd9b2b157fffd485d335314a66a66435aca66c7532b155b954c71cd4c556531a46284655314a915c4d9704118c231543918da62ecb8995c0ab41c514e3294cb18aaa838fc481c7838aad6c6f7c7b626714af43be2c30329df0429c557e5e50cbc55d9b366c55acd9b362aecd9b36286f1d5c665d70aaf18d75ae5838eeb812809a1ad70aee2dfae1f3ad700cf1571563b2c34ae0764c36b88e95c0122d32252a0bf09c33b43d30bc0f886195aaf4c42a6d076c1e9d3015baf4c1ca36c92176565e6c55acac7532a9850d66cbcac09766cd9b157115c0b3c75182b1aebc862ac7ef20a83841770d0934c97dcc350708ef20ebb64484863f8f4cb9a328ded94a32bea944a1db1656c0aa698aab649514ad8a0c0ead8bae1434c303c884e0ce35c6327b634a858ea3638ee5438e68f89c4a4db15550f8bc6db8c00af82217df1b54f6d5fa61b40db0c21b57e98736edb0c92131538fc490e2a30aad231a463ce37155846563c8ca2315599471c72b02b436c5a392988e58dba62a99c32e0e8a5c258e4c1b14b8084a731c9d30c9350755a05fc708a2970647264084a67fa45cfecfe3985fb8e8bf8e0206b8ec8aa37f483ff2fe381a490cadc8ed89e5e2aecbcd978aa22c6d1af2e1615e9d5c8ec327365610db441114003b610f95e104cb291b92147d1fede4af15586243d4601d434c82e616565f91ee0f88c31ccc2a08c55e717109b79de13bf034ae2786bafc1e95ef31d1c7e230ab15765e6cd8abb366cd8ab79b365ad2a2bd3154ce214518a6231c8a4501c56b8ab9b7070b2414761ef862d2281b9c012905c907ae2aa79b366c55bcd9b362aecd9b2f15766cd9b15766cd9b15766cd9b15761b691a789cfad28aa83f003faf0a7263a7c423b7403b00315442428828066685186e314cd8ab1ed634e4456b88c51875a771845935bd8c490329ee08c85b29462a7aa920fd18ab59b366c555ed78f3a9c310ea3be138247434c7737fe638aa6acea452b88c51a46cc41ea6b8039bff31cdcdff98e2a9b7a8be389ccc8c84570b79bff0031cae4e7b9c55acacbcd8ab59597958abb2b2f362ad66cd9b1576566cd8abb366cd8ab59b366c55d959b362aecd9b362ad65e6cac55d9b366c55d9b366c55d9b366c55acd9b362aecd9b362ad66cd9b157ffd588573627cb373cc86b5e72b1bcb372c55d9b2ab9ab8a5bca39ab955c55d94466cbae2ab48c632e2b94462a872b9a98a918c2302b431c31bd31c315736267153d3126c55a0716438862a8714a2065e341c70c55bcd9b362ab7365e562ad66cd9b15765e372f142fc7038c072c1c295c77c0d2ad41c1389c8b5181528b98fae14ce2870fae136384f749d701541a0abe1b5aaf4c2c8851b0ded29b60094ce05a53058e98843d317c921d9b366c55d9b366c55acd979b155b9b2f353156b366cd8aa8cd1d41c29ba86b5db0f1854601b88ab5c558a5ddbf5db0bf8f134c91dd41d76c26b887893b64084843571ea71b4cb1b1c0944a1c109816338290ed88557418fe1b6317042ee324108578f014e94186aeb80674d8e2a961d8e0885b7c424146c7446872294ead5fa61d5b374c8fdab74c3ab56e993084e223b62e302c27618257a61437959671b8abb288cbcd8aac231b8f38d38aa2ed6cbd74e6e4807a01957565e82f35248ee0e195a80b0a2f80195760342e3d8e054906d8bc7253101960d3154ce297df06c72e12c7253054737be3494ee3971756070aa29bdf05c72e564251b9b188d518a6455d9795978ab2ef2d22a5a8606a58963fab0feb908d17533692081ffbb73b1f0272651c81d4118aaad73571b5c4a799628cb134a62ac6bccaa3d48dabdc8a610e0bd46f5af6e0bfec2d420fe3813156f366cd8abb2f366c55d9b2d54b1a0c1496ca376df15432f206abd477c12b73f0efd715f4d42d00c06cb462bf762adbb339e47a76c6e0d8e3014038d7b753b8d8e2a84cd8e7428687a63715766cd9b15765e6cd8abb366cd8abb366cd8abb366cd8aaf8543ca8a7605803933b7a08853212090411d46e0e4934ad404e9e9beceb407fae2a9c573571b5cd5c5564f4f4ce432e452e2515afc47247aa5f0b78885dd8eca3230c4b3163b93b9c55acd9b362aecd9b362aecd9b362aecd9b362aecd9b362ad1cacbcd8ab59b366c55acd9b362ad66cd9b1576565e562aecd9b362ad66cd9b15766cd9b15766cd958abb366cd8abb366cd8abb366cac55d9b366c55d959b362aecd9b362aff00ffd683f2cdcb3118d3990c1772cdcb13cc0e2aab5cbae260e3ab8aaecacd5cd8ab79ab959b155d9b1b5cb07157118d231f9445715512330c50ae3694c55d89be283136c0aa58f43be2672d4ef8a516a7140711438a8c557e6ca1978ab5958eca38ab58dc7656286b35731cd855b072c6372c1c557839677c6571c0e2a86993ae155d45d70f1d6a3005c455c0529015e2d8616b26233c3435c4e3728722ac8a0936182835709ade7e9be19452039254466ca1be5e2aecbcacd8ab795979b156b2b1d958aadcd97958abb13952a314cba5462a94dc45507096ea1ebb649a68eb855750f5db010963522f134c4fbe0dba8a849c05df209578f0521c089825314221704467032e2c877c92ab30db024cb5c19d462322e1424d3a50e249b1c1b7098080a1c814a616cdb8c3ab56e98436e7718716add324153c81ba60d53b6175bb6c307a1a8c921531a71f8d23156b36566c55a38dff00318e383ace28c2073f68ef5c554e1ba9a21ca604c7d3952841cd3dccf28e510223e95a6e7055c22c91b20ea46df3cb811638d50f5037f9e054a32f07de451f02ebf6877c018ab55a63d65a630e348c551f14def83a19bdf0891c8383a097a624253e864ae0b53518536f274c3289aa32a212ad97986f4a6e4e0d834bbc9fa27053ddbfa60541e49747d6015104ed471b027be210797875998b7b0d8616ea36e2dae780d948047eac559a1bc882f2ae47358d5bd6adbc26a0ecec3f560296de54b6f55a7668e950b534dfe9c7e9364b76cfcc5545062a9765e1dcfe5f61530b9f936f85b369f75054ba554775df154366cd978abb366cd8aa22d80dce0aa8c2f5665fb38ef55fc71547d4622d103206f0c0feac9e39bd57f1c551c0819751807d57f1cdeabf8e2aaf70015c0b8e2ecdb138dc55d9b365e2aecd9b362aecd9b362aecd9b362aecd9b1c91bc878a2963ed8aadc56de77b794489dba8f118262d2ae24dda8a3ef3829b4948a266dcb53a9c5532b5d42299010dbf7c7dc5f4512162c0645e04679022b146f1197728d1b85772edd77c55bbbb96ba94b9e83ec8c0f8710e969340a4d4353a8c0f36933a6e8797b1db154bf363e48a488d2452bf3c662aecd9b362aecd9b362aecd9b362aecd9b1c88643418aaccd82fea829d4d71096268cfb78e2aa59b366c55acd9b362ad66cd9b156b366cd8abb2b2f2b15766cd9b15766cd958abb366cd8abb366cd8abb366cd8ab59b366c55acd9b362aecd9b362aecd9b362aff00ffd784e348ca0d975cc86b5a463694c53288c52b2b8e07288c6f4c5556b9ab8c0d960e2abf3636b978abab9ab95958aaa572f13ae58381579c691960e5e2aa74c638c5a98c718a5087303438e714c4c62a8a43b62cb81e338ba9c555065e3465e2ade6cd978aada6371f8d23155a73659194715766cacd8aae1975c66381c50bfa8c4a48ea31e0e5f5c5295dc415ae16cb1153921923ae17cf07b60a54be172a70d2de6e9858f19538ac2e54e2a9fc6f518ae175bcb5a60f46a8c2abb2b1d958abb366cbc55d959798e2ab69958ecaa62ad66cd9b155aea08c2fb88bae197b6079936c558d5dc3d709e55e2ded926bb8b63847751509c814843c7db0526058f052604abae2ab892e3d70a1123a632419687336490819d7ae17b8a3619cc30ba51be44a5521386d6cdd309e23be19db374c4294f6ddba6194676c28b66e986909db248450ca232d731c2ab0e371e71871568e5fab228a2b903d8e51c61c557fad2ff3b7df984d2ff39fbf13cb18aaafa9230a33123c2b959432f1568e34e38e34e05533d71681f7c49b290d0e2a9d5bbf4c3681b6c21b77e987565fbc9234fe6603ef390924330d134e531adc4a2acc2a2bd861faa228a0181ecd4242a078608ae412beb91cf3043ba4c0743c4fd3921ae04bdb5175118fc483f7107154a6ea0234c0bfc8aa7eec15a0c3c2dc391bb9e5fd3074d6c2581e2fe652bf78c7dbc4208d50745007dd8aa26b8c78d1c508cbae6ae2ac6b58b0580faf18a0fda03f5e14e4bb528c496ee0f7072238abb365e6c55d9b365e2aecd9b362ade6cd9b15766cd9b15765e565e2aecd9b362aecd9b362ade566cd8aaf8a332c8b1af53923b4b48e140028ae13e969ca72c7b0c908d862ab85074c6ca39211975ca3d31563f14257502be156fa0e6bc849bc41fcf41f71c3616a05c99fc542fe399ed83cf1ca7f6037e34c551100e31818a1a1eb8d1b0a66ae2aa3716b1cc841507235710982568cf41d3e592bae116ae803abfbd3154b3366cd8abb366cd8abb366cd8abb065a28e35f7c0782ed6414e3dc62a8bc0f74b58ce2f5c0f73200a4773b62a80cd9b2b1576565e562aecd9b362ad66cd9b156b366cd8abb366cac55d9b366c55d9b366c55d9b366c55d959b362aecacbcac55d9b36562ade6cacd8ab79b366c55ffd08006c706c685cbe3990c1503572f1801c78c55d8d2314e398ae2aa273038e231841c0abc1cbae255a6586c55572b281cbc55d9b35336297038f0712ae5838aab6530db281cb3d31542c831138bcb81ce05568ce085c0b1609538555465e301c70c5578cbc68c762aea65118ecac5561194463ce34e2ab336591958abb35736562ab81c7038ccb07155fd712922a8c5063baed8aa55341ed810a1538772475c032c38aa842e54e19432d475c2de241c5a272a7154dd4d463b034525704835c55d4cd9b362aecd4cbcd8ab5954c766c285846563f1b812d653ad465e5e2a965c47507096ee1dce49664a8c2aba8baed8084b1c642ad8b478adc454388a6d9055718f18c538f18555531ed89a9c793b615434bdf0be61be18498027ef80aa9c677c31b63d30b50ef83adcf4c0129edb374c3585ba612db374c3680e4c21304e98e389c676c57b61429b6267156c49b155b5ca39b362ad658cacb18aaf18ec68c762ae54676545fb4c6830de0d2a1083d41cdbb9380f4d4e5740ff002827f861f0d8602a945d6931f0262f85bb6e48c24dd5a87a8d8e4be4dd722d7aa12ea503a56bf7ef80255addba61ee9b2ac73c4edf65581391eb73b8c39b53825c9433e835db508072e9ec715fd3b6dfcdf81c88c27a608cad2c9ff4edb7f37e0737e9cb6fe6fc0e4672f1564bfa72dbf9bf0397fa72dbf9bf0391acd8ab25fd396dfcdf81cdfa72dff9bf0391bcbc553f9f588248ca83527db084f53959b156f366cd8abb2f366c55d97959b156f366cd8abb366cd8abb2f2b2f15766cd9b15766cd9b15766cd9b1545d8dca5bb92ddf0c7f4b43e3f8611e6c553cfd2d0f8fe19bf4b43e3f8611e6c553cfd2d078fe19bf4b41e3f8611e6c553cfd2d0f8fe19bf4b43e3f8611e6c553cfd2f0f8fe1802feed2e69c3b1ae01cd8abb366cd8abb366cd8abb366cc3734c55d8e5e4a792f6c131c0a054ee714641c698aa90ba1c77ad703c8cd21e74dbb6382111b7b13f86088900400e2a81cac1d242ac3a603652ac41c556e565e562aecd9b2b15766cd9b156b366cd8abb2b366c55d9b366c55d9b366c55acd9b362aecd9b362ad66cd9b156b2f2b362ade566cd8ab7959b362afffd183f0cdc716a6348cc86b53e99608ccd89335314ab8232f6c08652337d63154430c498657ae0e6e60e2ab48c6d698a1a1c691815c1b1e1b123960e2aac0e5e30363c1c52d532b1f954c55a18fed8cc70e98aa84b81db04c9819bae055d19c12a7024677c14a76c2aaa31c0e260e3c1c557838eae3063862ab866cc32f1568e348c7662315598d38f231a462ab3365e638ab597959b155c0e381c665838aaa75c4e48c118e071db1c552f922a6254a1c3278c1c0af1d3155b1b1183a292b80062c8d4c553006b9bbe251b838a8df156f366cd855d9b366c0ad1c6e3f1b4c556e6cb232b155ae2a300cf1d6b863884c95c558f5cc5d76c2e652ad87f711f5c299e3a54e44a54571e3135eb4c506055e0e3ebb62632c9c554a4c03377c1b277c05377c4a5417ae0d80e025eb82e13b8c01539b66e986f6e7a6125b1e986f6e7a64c21338ce2e303c47040c285ac312618b918930c5548e5638e37157658cd96062ab863b1a31d8aab5adc7d5e5e47ec9d9bfae1fa387008391e5b59e4fb2840f13b0c110dc4f6ce6db8fa9c46d43434fa70154d6e2558e3666340054e45ee2533cad2914e5d07b6184f25c5f39840e01454ad6b53ef4c0125b4f17db8cd3c46e3f0c55741d70e2d4f4c2680ef86d6a7a60294e60382c74c0701c183a65652de6cd97815d9b365e2aecbcacbc55d9795978abb363259a1810c93c8b1a0eaee428fbce47affce9a65ab7a768ad79274aa7c29ff047ed7fb15c34ac97192cd140bce791624fe672147e3900baf327982fea21a59c47f9366ff836f8bfe070b25b6694fa97f74d2375ab313f8b9c6959ddc79af42b7254dcfaa476894bfe3f670b26f3d5b578d9d9c929ec5c84fc07339116bbd22dbbab91fecbfb3106f31c11d7d082a3c765c3415954be6fd7243482ce38abd390673f8f11881d7bcd326e2448fd8220fd75c89c9e66ba6da38d57e7be06935fd45ba4a17d80c2acc9b52f33bf5bd2bfeaf01fa97186ebcc87aea127fc1d3fe35c84b6afa837fc7c3fd1b637f4a5ff007b97dfdf156702efcca375d4243fecc7f15c55754f35274bbe5feb08cfeb5c80aea97ebf66e641fecb1e358d4474ba7fbf1d959faf983cd316ec1251ef1a9ff88118223f3aea111a5e58a378942d19ff00870c320317983548c0a4e1bbfc42b8363f36de2ff7b0a483bd0d31d95e896de74d2a503eb092db37baf35ff828ebff0011c39b5d4ac2f456d2e6397d95872ff813f1672b8fccda6cbb5cda70af53407fa1c171cba0dd9fdcce2293b0269f773c682bd4f36416c64d46d3fde7be678fb2b3161ff0dea2e492d35499828b88c127aba74ff85e63fe0b863c17c9169b66c624d1c82aa41c7e448212ecd9b3605766cd9b1576565e562aecd9b362aecd9b362aecd9b362aec725390ae37362a8e122d3ae6322e01cac551b54dc78f5cb122e01cac551fea2e039882f5189e6c55d9597958abb2b366c555a18838a9c74b0285aa8a118f828100c7c8450e2a80cacb3958abb366cd8abb366cac55bcacd9b15766cd958abb366cd8abb366cd8ab59b366c55d9b366c55d9b366c55fffd28765118ecd990d6a2c0e20e0e0c201c4da307154bdc1c0ec48c31787033c181283f51877c512e08eb99e123112846054724c0e28181c2d566538ba4be38528ceb944631640715ad715681a63d4e329981a62aae0e5e24ad8a838aba99a9979b155093be067c1520c0af815a4fb5825702af5c12876c2aaa31c31831c31554071c31318e18aaa0cbc6038e18ab7974ca197850d118c38f38d3812b32a98e2328e2ab7365e51c55d986565e2ab81c70389e381c5557ae26e951960e3ab8aa1192872860975ae0761438aaa23d30523d460107158de98aa372f188d5c7e2aecd9b362ad6563b2b155b958ecac556e530a8c766c55013c7d70aae23f6c3e992a30b6e23eb80aa42ea55b2c1c5e78e981d72295418e38d1978aa94980a5c1ae3024a3ae04a17be0984ee3039d8e2f0f518aa6d6c7a61bdb9e984b6c7a61bdb1d864c20a6b09c14a701c276182d30a17e26c314c5ecac65d42e0411ec3abbf603154bce372750f956c1507a885dbb9663fc299a6f2ae9eca42c650f62ac7f8d70710560b963066a7a6cba6dc7a2e792b0ac6f4a547f5180f0aae186da75b2f012b0ab36e3d86148c39b7bb8238954b8140062551bc401b0c2f9adeb7a920e854d7e63fdbc5cdf5bff38fbf18d7b6f5fb6b91551b48384b3b11d5e83e5d7f8e0b655381cdf5b0fdb5fbf186fedffdf8bf7e2943dedb2c644a829bd1be9ef8ada9e98cb9bb82589955c1246d4cd687a62a9dc07a60d5e9802dcf4c1e9d32b3cd2bb2f2b2f02bb2c6565e2ade6ca665552cc42a8dc93b01f33918d57cdd1c45adf4a413cbb813b6e80ff90bfeecff005bec6101590ddde5ad8c267bb95618c7ed31ebec0756c8adff009ce495cc1a3435ff00978947e2b1ff00cd7843247737d37d635199a693b027a7b7f2affb1cd7535be9f09e4563245513bb7fb11f17fb26c90096a75babe7fac6a970d291d89d87cbf657fd8e049351b0b30c20019c771b93fecb092eb539ee1cd58907f6474fbb1186d6eae982c6a493d8027145a3ee35cba7a842107b6e70b25b99a5279bb393e270eadbcb32b906770a4fec0f89bf0c3fb2f29c4a0110723fcd2ffcd2b82d582a433cb411a135f0183a1d0b5197ed46517c4edfaf3a4dbf974a8f88841e0802ff005383a3d0ed57ed8e47df7fd782d5e629e5a998fef2555f91a9fc060b8fca8877323b7faa87f8e74d4d3ed63fb318ff003f962a20847ec0fbb1b579b2f94e0a6e929fb863c7956da9fdcc87fd90ce8e228c7445fb866e09fca3ee18d9579b37956dff00df520f930c45fcaf00ed30fa2bfab3a718e33d517ee18d36f01eb1afdd8dabc9e5f2da8fb33153fe5a918124f2fdd2ee8e8ff234cebef636afd529f2c092e8767274500fb81fd98dabc7e5d3af61fb511f98df039e43661423c73ac4fe5b041f49be807f83613de7976415f52257ff0059687efc36ac1edb50bcb535b79da3f6aedf761f5879caf2023eb518900e8f1fc2e313bbd06304d15a13e34aafdf8553e91750eeb4917c570dabd2b4af37d95d3855951d8f58e6f81cfb72fdac95db5ed85d10b1ca6de53b7a729aa93fe4be79f5834678b0a11d6b86fa6f98f51b1217d4f5a11feea977dbfc96eab878ba145773dda48a5869ea2900fd96ea0fd231990bf2ef9e6296907abe8bf7b4b93589bfd57fd93937b5bab0d4a8887eab727a44e7e16ff8c6f89803b85bef59958acd04b03719148f7ed896408212ecd9b3605766cd9b15766cd9b15766cd9b15766cd9b156b366cd8ab59b366c55acd97958ab59b366c55acdf2cd8ac5c46e7155abcd3e2ede196ccf274e831662a4531a9c5453154310475db2b044bc48c0f8abb366cd8ab59b366c55d9b366c55d9597958abb366cd8abb2b2f2b15766cd9b15766cd9b15766cacd8abfffd387e6cd947321add955cacac52e38d2a0e3b362aa0f083db03bdbfb6185328a038d2da50f0d31328461b3c20f6c0f241ed82928356231749318d1918da11815160838ea60747a62ead5c2ad74c7ab65115cd4a62aaa0e3c622a715538aac946d811f06498124c0aa23ae084c0ddf0421db155618f18c18e185578c70c60c70c557e58c68c70c55765e50cbc55d8d38ec5ed6c2eef5c25b44d21f1036fbf151dc843982b31a28249ec326ba67902eee087bd708bfc8bfd7261a7794b4bb000ac4a5c7563b9fc720724479b6c70c8f3d9e536da06ad774f4ad9a87f6985061e5af903529803338407b015ceaa96d0c4288805314d80ca8e6974d9b06180e765e729f96cb4f8e76afd199ff2dd69f04ef5fa0e7443be550d76c8f893ef6cf0b1f73c8b50f236ad695308f5947d0723d71677568dc6e6168c8fe619df88afda15c0775a4d8dea95b889581f1193198f50d72c11fe135f6bc1c1c7039d4750fcbed367ab5b930b1fe53b7dd91dbafcbdd46324dbcaae3b06a8cb06489eb4d470cc74bf7312ad71375ae48dbc97aeaf48d4d3c0ff0066069bcafad45f6ad89f91ae4b8a3de18f04bf9a58eb6c72d5a98613e93771544b13a9f70701fd4e7e54a6de38d8470cbb9522937c14ac0e01314884d474c5a173d0e1b5a4566c6a9ae3b143b366cd8ab595979b155a728e3b2b155ac2a3014f1f5c1f884c9518aa45731f5c2e75e2d879711f5c2a9e3a572252a231d8c5c78c0958e30348305b6069075c0a8271be2916538df347d7154ced8f4c38b73d3096dfb61c5b9c90426909d860c4c050f6c1899242ae4bbcad6812d8dc11f14ad5fa06c32239d0344411d840a3f914fde2b82490996372ce564558ef9aad564b16969f1444383ed5a37e072119d27578c4b633a1fda461f867361928a0b631d9432f0ab8e2671438c6c5549b1238b3624702ae8fae1b5a0e985708a9c37b41d314a6d6fdb07a74c056e3a60d5e9954b9a5765e565e057604d4353b4d322f52e5e8483c225ddda9fca3fe36c09abeb9169c0c51012dd1e89d42d7a72a77ff002322612eb52ba2f3932ccdd6bb80074e54f0fe45f872402aed4b56bfd65b8b9f46d2b5589771ed5ff7e37f947e0ff27125b786d6133cee2de2ff007e3f5623fe19bfd8e3350d52c747e512d2eefba151fdda1ff288effe4ae4566b9d4358b81ea334d21d9540d80f0551b2ae4b973f92fb935bef312ad61d3938536fac30f8fe6bd930a2decaf75290b2067a9abc87a7fb26387ba5f964b483eb03d697fdf2a7e11febb64d6cb4048d57eb14a0e9128a28feb9132561fa6f959362cad71257b6c83fd964b6cfcbca8804b4451feeb41c47f5387b1c31c4a1514003a531f4ae0b542c1636d0001100a609000d86df2c704f1cba018156d0e6e38fcac556533531d4cd4c556d31c12b974cb18aade0337a631f978aa918f2b81c5f6caa0c550e54e348c15418d2062a974d636d35792509eebb6135e796d1aaf06c7fc9d8fddf6724e51718571579cdfe892ad56787d41e2051b23d75a352ad6cc4d3f61bae7629618e51c6450c3df09aff00cbf14f57887c5f737d07bfd386d5e47247242dc5c156ef5c3bd1fcd3a8698042e7d7b6dbf73254d07f90dfb186da8690f1f259e3e6a3f6c0a30f98c8edce98f155e1fde47e03a8c903dcaf64f2ef9d2cefa148b9fd6a1228f6f2d05c47fea93b4ab9257b186ea1fade97209a2fda41d54ff291d41cf35437135a4a2581cc7229a823b6741f2b7e61c96d305bd94c339a0fac815471fcb3af87f9792b07628a2393d10820d08a11d41cac34b79ac3cc3173b7e30df050c501aab8fe68c8fb69ff000d85f343241218e55e2c3fcf6c84a349b53cd9b36455d9b366c55d9b366c55d9b366c55acd9b362ad66cd9b1576566cd8ab59b366c55acd9b2b15766cd958abb366cd8ab59b366c55d9b366c55d9b366c55d959b362aecd9b362aecacbcac55d9b366c55d9b366c55acd9b362aff00ffd487651c766a66435ada65531f4cd8aace397c71d9b14b5c72e99b2f156a98c64071f5ca34c550b243819e2a6191a1c45e3077c094b8ed8e57a6292474ae0663c4e0546ab571d4c071cbbe0b46ae156e94c7a9caa572c0c0ae738124c12f87fa0f92352d6caccea60b527edb7da23d862481b94c6264686ec44025a8a2a7c061b5a687abdc8061b49181e878d07e39d8b4af23e8da52291089251d5db735c3e582088008800f96532cd5c83911d3ff0038fc9e251f9435e600fd58afcce28de4fd75057d0afd39dae8bd2996630474c8f8f2f265f97879bc226d0b5683792d5e83b815fd580de29633491194fb8233bebdb4646ea0fd18067d1ec670449029afb64867ef0c0e01d0fcde1e0e381ceb13793f4695b9184027c3121e4bd181afa5f89c978d1ee2c7c09778797282760093ed86365a26a77cc04303713fb4c2833a85b79774ab6a7a702eded86b1450c2291a00301cddc1230f79f930bd23c82a0acba83733fc9d064d6cb4bb3b14090c6aa0780c544a32cc846fdbbe56664f32d82207214ae283db2ab898707372df229a5f5cb2b8ca8c510d715ddae23371c71196062b65614ae34a62a337f98c57750e24651ae2c77e98ca1c52a5be53283d40c548c69f9629b433dadbc828f1a9fa3024ba269b28a3c0b4f90c33e3be571c1ba52193ca7a44a0f2846f80cf9134906b1f25fa72574ca20e4b8a43aa38627980c2e7f20db31ac53b28f0a0c0371e42b90098260c476233a0e5311db08c921d51e1c0f47954de52d621afee79d3ba9c2b9b4fbdb7244d03a53ad54e767fd789bc314808745607ad4648663d4303a78f4243c4e87c32b3ae4fe5ed22e2bea5b28af71b6164fe46d26407d22f11f6627f5e4c668f9b59c12e84179b6564c6efc8574a0b59ceb20ecafb1c24baf2d6b3695325b3301dd3e2c989c4f22c0e398e8528ca61518bbdadcc5fde42e83dd48fe188e49851404e9d70aae63eb879326d85b709d70154958716cb07149d287121914b67109317388be2941c9d72a3eb8f906f8c4eb81530b7ed86f6e709edfb61b5b76c90426b09e983a3e98021ed8363c921131a348cb1a0ab31a01f3ce8d62822b78e307eca85fb85339cc6ef1b2bc678baee08c3587cc37f0d0370703ad450d3e8c042b39ae55700586a30dec2b2a1d8f507a83dc1cbbdbf86d2169646a2a8ff0030322956ba01e26527a8a1ce653c4d6f33c2fb32311f777c37b8f336a1296081235276daa69f49c2796592691a595b93b6e4e480a43431c31831e30ab8e31b1e71a715526c48e28d89e0556806f8736a3618556e3718736abb0c5299c03a60b1d303c236c13951e6976126b3adfd5f95ad9b0339043c808a253ad3fca1ff000997aceb1f570d6d6cdfbddfd593b20a74aff37f37f2ff00af91fb7b213c72dedec9f56d3ede8669586e7f9471eec7f622ff0083c988ab76764f77ea4ef208e14f8a6bb909e2a3beedff005d3e136b7e6489637d3b43062b63b4b727fbd97e9fd84c0baf79864d4e96164a60d3213fb9807da63fefc94fed39ff0085cda4e84642935e293c8d22847da63f2c49afd6a97d8691737c43bfeea1ead29fe1e3939d1bcba1630110c309fb4e47ef1ffe69186da6e8890aa4974a392ff7708fb29fd5b0e40ec3204aa8db5ac16a8238502818b85271c140dce3b02ade14cba65e6c55acac766c556e6cbcd8ab54cd97958abb2f2b2f15765e566c55bcd959b1576349cb38d38abb2b366c55a231a571f9b15425c5ac53af1917e47b8c8cea7e5f64265b7dbdc0d8ff00ac3b64c0818c280ed8abc92ff4b1233065f4a61f71c229619207e1202a73b0ea7a1437685a35a30dc01b1aff0093908d4b4c68eb0dcad4568927f9f7c95aa1bcb5e6dbcd12548e4667b5041143468cff003c67c73bae99ac58f996ce2495d7d5700dbdcad0093e8fd993f9d33cdd756725abd1b743d0e1a796fccb75a15c8eb35a391eac04d3fd921fd975fe6c903d0a2bb9ee7736d35a4a6298508e87b11e2311c1da1eb365e67b08925939bc80fd5a7a518b01ba3ffc5a9fb5fefcc0f756d2da4cd0cc28c3707b11e232328d6e14151cd9b36452ecd9b362aecacbcac55d9597958abb2b16b784cf204edd4e1ca59c4aa07118aa419b0d2f6c5150bc62846fb61562aecacbcac55d9597958abb2b2f2b1576565e562aecd9b362aecd9b362aecacd9b15766cd9b15766cacd8abb366cd8abb36566c55d9b366c55d9b366c55ffd587d735712e79b966435aa572b9627cb2b962954e59b96255caae2aabcb373c46a73571556e795cbbe27cb35702aaf2cd5ae260e381c554e54ae0099298684546049e3eb81296722a70543356981e64a1c4e272ad8aa728d5c592369182229666d8002a4e06b2592e65486152f2390aaa3a9273b17943c93169e897b7ebcee88a807a2d7b0c1290019c20647c929f29f913914bfd556bd19202361feb674a8a18a14091a8551b000531d40828a2806379663ca4647772a31005069a989103c31e49ae564590594f11986dd32e9e39860a4dad61f4e50141d315d86f899dced8d22d459413bed8c295c13c01cae2a36a634b687e14195c474aef8b9451bf5c6118aa1d95cec3efcaa483627ae2e1694a75ca61534c5547f7ab51dbf563d24905030edd7140be38c702941b1ad0e04d3665a1a6392e02b509a7cf1223a7ebcae35ea37c6d7851c27534cb59e372caa49e3b13db0b1b7f84540ad2bfaf1453c2814ec3b61e24702640823635cbc2e5793eee83b6f97f58b95d828fa71b470a6140731181a2b81c47a9b377a74c53d788f46186d6979032b8e339af6618f0453ae2b4b4ae33a9c54d3af6c6d37af6c542d1b7cb298628176ae5f1f1c56d4287ae504ae2e57c3a9c6014623026d615e3ee7133538b36ca4fd18ce342076380a415303efcb6a81d2a716e00ee7eec638e383709e6a0cea82ac37c56328c2bb66f848dd6a318ecaa3e1db1b5a6a48a2350e8083ec0e17dc681a25e544b68953fb4a389fbc60e69b6a6def8c2ea0ee695fbf08911c8d2786f98b621aa7e5da3a3cba5cf423710cbb83ec1b39dea9a65e69f2b43790b44e0d3e21b1ff54f439de63900f1232af6d2c35284c3796e2543d9e872d8653d77689e189e5b3e69b84c027639d7bcc5f96464633682db1a96b794ff00c41b398eafa36a5a3cfe8ea16ed03f6e4363feab743968903c9a25094798dbbd2fc4dc6280e35f0b041c83135d8e2d20c4875c0946c077186d6c7a6144070dad8e48213484f4c1d1e0084f4c91689a59bf63249510a9a507ed1f0c95a10d14724a78c685dbc1413fab0cedb42bd9c8328f493bd776fb864aad6c60b64091a0551d860a01474191e24d305b86b9d1ef1e3b772aa68403b820f8e26b2ddeaf771433b965ad4a8d8003a9c38f33dad552e546e878b7c8ff006e23e59b525a4b961b7d85fa376c37b5aa06efcbf79092d00f553b0e8c3e8ef8552432c2dc654643e0c08ce96429d88c0d716505c214910329ec4570712bcec63861a6b1a47d40fad0d4c24d083bf127fe35c2c1924358d38fc6362aa2f8cc7b63075c0a8cb61b8c3ab61b0c29b61d30e6d86c302426308db01eafa97d523f4613fe90e3aedf00fe6dfbf87fc1e2b73789650191b773b469e269ff00115fdac8998a5d6afa4b43205b740d26a576c681557764afecf41cff00e456440dd4afd3e28ef3d6beba9043a6db7c52dd3d48735fd9afda2c7fbb5ff67919d7f5f9f5a9d20b58fd0b187e1b6b506bff003d24fe695bf69b1de63d6c5f18f4ad3fe0d2ad588b75028d2374f55c7f337ecff2ae0ad0f4628239a542d3c87f770f724f4c24f456f47d10c655a44f567929e9c54efe3f2c9ee9da5a598f524a4972dd5e9b28fe54c7e9ba6ad8a7a927c574e3f78fd97fc85f6c1e16b90252d05aff001c78032c0cba6055b979b362aecd9b362ad66cba6562ad66cd9b1576566cd8abb2f2ab9b156f36566c55bcacd9b1571c69cbcd8aadcd967362ad66cd9b15766cd9b156c600d4b4b8afa26f8473a7875c1d8ec55e63a9696d6e5a2994988ec091b8f63915bcb27b57246e9d8e76ad474e8afa2605473a537ee3c0e73dd4f4d6b7768651fbb624293d47f927240aa59e59f31cfa1dea37266b4623d6895a9b7f32ff002bafecb67a0b4dbeb4f34e9b1849035c71e76f71fefc03ad69d187d9953fd9e799eeed5ad64ff20f4392af2379ae5d12f12de59196d19c30a54f07e82451e23f6bf9d3e1c903d0a0f7bd6648de291a2914aba1a329ec71b87b7221d774f1a9dad3eb30a8f5d17a30a720cbfcc0afc49ff038459190a290ecd9b36455d959b362ad66cd958aa63a5afc4cc7d861bd723d6b706093fc93d70f1240ca0d71574f4286b91c6d988f0386f7f75c138afda3b0c27c55acd9b362ad66cd9b1576566cd8ab59b366c55d9b36562aecd9b362aecd9b362aecd9b2b15766cd958abb366cd8abb366cd8ab597959b15766cd9b157ffd68107c706c0c1b1c1f2f6088ae6ae241b1c1b155f5cd940e5e2ad66c753353155b9b1d4caa6297038e07194cbc55501c6c8b51955c7576c552f9e3c02c841ae1c4a80e36c74d9351be82ce304b4ac176f0ee70148dde8bf95de560d1fe9abc504b7fbce08e83f9be9ceacc428a0e8301693671e9da7c16b10a2c68140f90c14c6b98d395972a31ad96935c6f7c696a1cd5c8b63676ef8dcdd72c0f1c56daca35cb341db2e95c58dada0037caef8ea6571a6e70adb8e34549f0c7d32f8e28b522be18ddba1c508df28a743829905335e995c7fcc62a577e99423a540e98d26d4aab5dba7be358296df61d6a7a62e5052877c694a00b4a838293687650c6a3b74ca55a7cf16f4c28a0e9db305aec3ae0a4f12870e83c337103fae2ac0548aed8d20741f4e2b6d568295db1a4b1dc74f1cbe0bd7c31266f0151e3db1b480bc375efe34cdd3aed81da403dfdbb637eb143c40ab1a557224b2e14503538f0e17f6c03dc0a9c0752ffde36c3f646391ff006540a78e2094188462dc10684d7e5b62a9272e9b7b6041bf5fa728b00471ad7c476c9b04c031a57c31dc8115ae021354518fc8e28b30a7be36b489af71db18366f9e261c1dc1df32bd4951b57afcf0b1a5d2d42ede3be533d546d423be676e49d775ea318dde8695ea0e0212152a49af4f119468c37e98933b0a12694c6397f1dba823012c80557e21492694c2f924676a21a0ed828c25c02cc69e197e946bd169face44827c990223e6508b0ed5624939402ab7d9a9c12eb4ebb6242bbf11fd31aa5e2b6cc94fb5b7862d1ca0f515f9ed882c75f889c70dba0dfc70ee8348cab11c9695f95700ea9a558eb968f67a942b2c6c3a91ba9f153db17566a6ed503b0c7abd37c902c0878d799bf2bb52d295ef349637b682ac6303f7aa3e5fb79cfa456525581046c41d8839ead492a283f1ce7fe7dfcbe87588e5d5b4a411ea28b578568166a7fc6f97467ded13c5d63f278448310037c17750c904af0cc863923255d1850823a82302d37c9b4a2a0eb86b6fdb0aa0eb8696fdb24109ac273a27976358f4f87c4af23f36df39cc2724567aedddbc49122271501456bdb6f1c245ab3f0c32ea3218be61bc3fb09f8ff5c7ff00882f3f913f1feb8384adb25beb64bb82485bf6d48f91ec713d3ed059db470edc9547223bb756fc723a7cc179fc89f8ff005c69f30deff227e3fd71a2acbea32aa321c7cc57bfc89f8ff5caff0011deff00227e3fd71a2ac87598d65b1987f9048f98df21030ce5d76ee78da3744a3020d2bdfe9c2d1840a43b18d8fc6b61543b652eed8e6c6a7dac0a98db0dc61c4055579310028a927b0c28b6ea315bfba58a131921500e5231f6dc0f7fe6ff00805fdac09436a175737d731c16aa5ae2e0fa56b1ff0020ef230ff27ed1ff002f8ffbef09bccda843a65a8f2b6932078d1aba8dca759a6ff7dd7fdf719ff837c32babd7f2de96da8c9b6b1ab214b58db76b7b6e9cff00d77afc3fe57c5915f2f6992eaba80f86b1a7c5239e8a3c4e27b82f9a2f44d2169f5dba1551f6548aef9d134ad37eaabf599d47d6641f0aff00bed0fecffae7f6b03691a742cc2e787fa2db9e36a3b3baec5ffd44fd9ff2b0f3726bd49c848f4487015c780329463f22aea651cbcac55acc736562aecd9b362aecacd958abb366cac55d96016345049f01be19e97a15dea2eac54c707773d48ff27275a768569651854400f73dcfcce2af394d3ef9c552da423fd523f5e549657910ac9048a3c789ceb02da11fb394d690b0dd715790ff000cd9d2eefcb7a7ddb879220581ad46df7d3ae17dff0094ad1e22605f49c0d997f88c558266c5ef2cee2c6630dc2153fb2dd98788c0f8abb366cac55d959b362aecd9b362aecd9b362aecbcacbc55d859abe991df42c7882e06feff00db8659b15795ea16142d6f28a9ea8fe23235244f6f29426943b1ceb1e60d29678ccd18a11bd7c1bfa3640352b3322b1e3c5d4d187811920aceff002cbce0f04a9a7dcc84b8a2c684ed229dda31fe57ed47fe5ffaf9d0b57b358a45bcb700da5d7c7195e809152b9e6c8679ada749636292c441561b1a8df6ceff00e42f315bf99f486d36f180b8a51a9fb328dc30ff008c9f6ffd6f5325cc521bcd8f962782578641c5d09561ee31995a5acacbcac55d96a8ee6882b95d70dad625441e38aa056ca422ac683c33452ce9c9030f87b1c363d2980beadfbd91bb3529fc71542a4525d55cb6f5a038c92d668fa8a8f6c32b48bd28d41d8f7c5d80237c558fe560abd88249c874381715766cd958abb366c1b6100918bb741b0c5509e9487a21fbb1a41068450fbe487d35a74c077f6e1a32c07c4bb8c5529cacd9b15766cd9b15766cd9b1576566cd8abb36566c55d9b366c55d9b36562aecd9b362aecd9b2b157fffd7e6fbe60d8ab2630a532f60d86c707c4a8466a9c5512ad8a038155b1457c551031c3120d8a038aaea6348c78cba62aa54cd4c7918d2314adcb0728e650cc42a0258f40373815b3b8ce81f975e5c669ff4c5c2d1402b083f8b617f967c97737d225cea0a62b7041119eadf3ceaf6b0c36902c1080a882800cab24c5506ec78cdf11f82289031366af4c696a8c696ca5bc360f739b1a0f8e6a8eb5c09b5414a66c4f9660d5070a154e5f6c4958d71fcb1b453b28f5f6c70df2c53e9c55c065d08c70cdd70a14caef9a951d3142bdf2a9434ed8a5615c705c78df1c0018aa91415c4986fb741d304b2d69fe7d71375009fbb15086a7f6634d46de38ab0eb5ed8995d878e44b30b0a9a6db76c489e0a457703738aeed51b90bdf119179a173f640f814ed539125b005b17ef23049a2eff003635c6492281b6e3c062e2340806db8c0d2514d060dc009d892a0ee40341c4f89eb81abc0efd0d483df177249a7bf4cae21850fbedf3c46ecb905356772284f8e2cb55a0ae26a029a74c773e46882a4f5f01f3c7929dd101881562028ea4f4c7093d55a20a2f727a9c4828eb21ad3b76194e45450eff00cbd86104b0d9543004548a761d7f563cb6df09dfc29d71346515e5f428fe38b02cc37d87874192e6c79297d617e47b8cb59eafef89dc5b9705a223d41efb1f6c2efac1572ad5561b107b1c859077660090d93b330dcf5aec0fbe5abf31c6bf2c285bae3d37f1c5e3bae3b8e992e2626298fb36c57be57d9a81b78fcb03a4a5d69cbed6f418b8901a0007203620ed85154a83db63efd7eec6b121c8fdacaac9c0b9fb3d1dbb9cb010af26d93f66bdfdf1558549dcef5fbb1a2bfb23e9ed8a104805ba765f1f9e3a9e236ec3052a8d0fccfe19a95fe9db14707a9141edd72b892057a0e98d2acf965d4f7fc32fa74dc78f6c6d01ef5c0aaab253a0df1659091bef812bc7afdd8f0d4eb841410c33cf7f9770798d5b51d27841aa0ddd5b64980ecc4747ff002b384df585e69b74f697d0b413c668d1b8a1fed19eac5929dcef85baef97746f325a9b6d56dc4869f04ea292a1f147cb2392b9b54f15ee362f9921eb8696e724fe68fcb3d4b4126eb4c2fa8e9fd59957f7b18ff8b117ed0ff2d722f06dd76cbe241e4e3ca26268a6709c1f161742707c4726c11a98a8c453151855c718d8a1c61c0aa671b4c79c6e2aec70cac70c55ac6362989b62aa0d8d5eb8e6eb8c1d702a636ed415ebe03c4f6c4e148eeaf1a4bb34d3ac17eb57f21fda03e248d7de46a7c3ff0018f1865f4606929523651e2c76a7e3c7fd9e15f996f5f4ed3a3d055bfd2266177a930ea5db78e23fea0f8f8e3e6948f59d4eeb5fd5e4b820979dc24108e8a95e31c6bfea8ce83a5e8e34fb68b45848175703d5d42751f6507daa7fc41323be49d2a38d66d7af17e084116fcbbb7ed30f97d9c9f69f0c90dbb4f702975764492d7aaa7fbae3fa07c59027af7aa202a4689144bc628c048d07651d31ca3be501538fc825c32f2b362ade566cd8abb2b366c55d959b362aecacbcac55d875e5dd27f48dc19655ac319e87a16fecc288a279e548a3157721547cf3a6689a7a58da4718ea06e7c4f738aa3e0b78e150aa00a62d9b362aecd9b362aecaa78e5e6c552bd5348b6bf84aca80f707b83e20e737d4ac5f4eba6b773c87546f119d6ce41bce968434574a365251be4dd3f118ab12cacd9b15766cd9b15766cd9b15766cd9b15766cd9b15766cd9b155ae8b2214715561423211af69bf5698ca07c0767f707ecb7f0c9ce02d4ad16ead9852aca0ede23b8c55e3fa85b9824f514619f94f5f7d035786e83158490b385fe526bc87f951b7c78bea36857d485854a6ea7c54f7c8c3ab43295f0fb393f357d3dab08b50b3b7d6ada8448025c53f9a9f0b7f9ff9184984bf94de635d4ec27f2e5ec8a1e9e9c7c8fc45483c0ad7f93ecffc061ecd13c12bc320a3c6c5587b8c643a84059947366c825c0ee0e0c5bf0a294380b2b1547fe911e072bf480f038072b1547fe901e0737e911e070066c555ae2e3d6a6c45310cd9b156b366cd8abb0df4f50211efbe1461b5a4b1ac6a818540a62a8eae2530aa1c772077c4a6991410c40c552222848f7cac7c94f51b89a826b8cc55d9b366c55d9b36562aecd9b2b15766cd958ab79b2b362aecd9b362aecd9b362aecd9b2b157ffd080572b883882cd5c555c1cc860d95c614c541072f02a1cad330a8c5a995c7155a18e2aaf8ce19a98aa255b14070329c5e30cec1541663b003724e295c77c31d3340d4b566a5ac5f07791b65c967967c8cf371bcd5168bd56023fe259d060b386d6311c11845514000a6553ca06c376f860bde5b793cf2d3f2dda81af27dff9536c3ed3fca7a5e9843a441e41fb6db9fc7250549c41d37a65329c8f56f8e380e416c522a808a2807862a1f638971a63d7216cc80aa1c9a6516a77cc3a0caa0eb858b8b57e8c6f3fbb1dc718c29d306ebb2d330071a6e916801df1addf03c8aadbe036915d51a970188a6088e4a8eb848c664de335f0071486f9d48122d2bdb00951dd97058d93b56c5060086e95c75c169229dbeec982d6410acbb1c529890618ee79262bbb7f1cc454572b90efdf2eabd3025b036afb66037cc08a533569be1b5a6c8dbc0e22c3fcfe8c53957f1df1846f5f118a8503bad7b904e3194f5f004e2b40a4d7a83b7ebc44d7e25ee053f1c0c82995258228da956a771e195280d48e9404d4fc863c8346735af514f6d862752bf1b83cfb11dc64486c07ec5ec14ab04151f8605923e0b5efd09f7c141d5aac5b6af4e9802eee914f15dcff0028c49005958824d04248d426bf4624270a4281563d00c79827997911c13c4f538df4845f647ccf53958be9b06ddb91dcae11171ca43407f647f1c51182fc0a0003b6275a0009af8656f4a93c4789c972606d5199ebb6379228dcee3be27ca46da2151ddcf4c72c6884339e6dd89fe031e7c97dead1976dd0517f98f5fbb04252b53f1374a9df114e4c77d8780ea717141d76f61920c24aa0edf1103dbbe00d4ec7eb1199a11fbe51b7f943c3058207d915f1c581007c447c86e70917b1402626c30b174c9506aacb51438e5bea0a72a788c1fe61d29991afed149703f7b181f687f30a771911fad56946dfdf299021ca870c85b2bb6beafed6f86705e28140454ee76eb9088aed8746df07c17e46d535f7c632632c76cd23b946153b9ed18e9f4e281ff698d0d6a8a37032330df9a025a8707c7741a8c4e5826d4604273c8f6ebdfc0628a29f175d89dfb6008ee96877a57b62e92d42b1ff0062be3920589051241a7261b9e83c31a54ed5e9d87be3e37aee4d7b938e8f916351bf6186ad87251209dbbfe031a471d875ee70470fb4476dbe9388381c4d7a0ea7c722590dd44903ecf5ee72b61bb75cba6dca94f018d23b9fbb033a5c19b1c1981ebf40df03b37c5d683be2aac1f70280f6c16bc2a9ea90295a7b647f54f2679775791a79edcc572fbb4d07c0c49ee47d86ff0081c3ee2791207dd9aa57e261844a4391470c4ec403ef7976a7f975ab5933c9a6917b6e375150b281eebf65bfd8e478472c1218a6468e45d991c1523e60e7720ccc77d97b28fe3886a1a3695ac2d2fedd642051651f0c83e4e37cba1a83ca42da3269a3ce26bcba3c7a338b0c956ade44b9b5acda4b1b98b72617a0947cbb3e45da3789cc72294753465604107dc1cc88c84b705c59c251e61a38c38a1c61c2c54ce371c71b8ab78e19431c3156b18f8a53137c550efd718a2ac063df344c118c87a202df2c0a8c84c11c925e5cff00bcba5c7ebbaf6798ed0a7d2f906ff4bd77570a4f3b9bc90966f02c6a4fc9461ef98ee8dae976da729e32ddb1bbba5ef4fb30a37c87c58b791b4f4413eb530d92b1415f1eb230ff0088e03dc966167a7c3cedb4a8bfde4b0412dc7f95c76453ff001924df0e1dcbb176ea77381b4e84c566257fefaf1bd793c421fee53e84f8bfd96085153f2c848ee90b945065e6cd915766cd9b15766cd9b156b366cd8ab59b366c55acd9b362a9c7966dbd7d4d588a8896bf49d8674a45e2a00ed909f25c2099a5ee582fdc3fb72718abb366cd8abb366cd8abb366cd8abb083cd36debe9b3505485e43e6bf161fe05be884b6eea454118abc87362d7509b7b99a0ff007db951f2aed88e2aecd9b362aecd9b362aecd9b2f156b365e562aecd9b362aecc7c3366c5588798ac044e2741b0dcffa87ed7dc7209aa5b7162ca3eceffec4e75bd52d96e2d9aa2a541fb8f5ce73a85b940c8c2a626e06bdd4f4c90ee54b3cb5ab4ba2eb36b7f1b7111c8bcfdd49a367a0f5764ba16daac3fdd5e460923a735146fbc679ade331b953d41a6fe19dbff2f755fd35e4f974e76e775a69e6b5353c17fe6c3921b8210996566cd95a5acd9b362ad66cd9b1576565e6c55acd9b362aecacd98024d077c55d96a8ec6a80d477c1f059a81c9f7382bd350b403154025fb2af161f10c0f2fa921f558541e9ed8e9e2227e207dae9865146a100a76c5526cd86b2da46e0edbf88c2d963313953f41c55666cd958abb366cd8abb2b366c55d9597958abb366cd8abb366cd8abb366cd8abb2b366c55ffd1e5c390c555c8c11e8e57a397b058b21c555f1a22c708ce2abc3038e02b8d0871554c55c13370c591716485a465441c998d140ea49c2a8686de59e4586152f239a2a8ea4e754f27f9212c552ff525e572402a87709fdb827c9de4e8b4f8d6fef5435d30a8047d807b0c9a102941d328c993a0727163adcf353a2d28a3619447863b6189935ca5bda343899415c7d29980a9c0b6a7e9838d2b4e98bd31b41d71a5b52a77cd5c795aed95c298696c355aed95c6bf2cb1ef989a7b8f6c50a4c8b5dc624d12b7518b1001af407b662b51f16e7b64592164b714c40c277df61d41c1c4015af6c4f8a72200fc3c70532052ef48890fa6c46c0d01f1c585d4f07dade9e070434656b41e24620e2ac140ff002989df05532bbe7ba21353df8becde182a3bc56a6f4c2df4d4fb9fe6a66f4bc36c209626314dbeb2bd8e385cad773f4e15085cf4ad31e22946dc89f9e1b3dc8e11de9bacc0fd93538f32834ae1382f1fed8a7865fd6caecc6b4ef8f177af0f726e24feb981a9ebfe7d70a1750453b9eb8263ba572287f1c2241128108c7018fcc53e9181d89077d9bbe3d5c3ee3e8f9e54839ad08fb26a7c40c254290946c185698d79a35001352760aa37c6481d56a47fb2188ab843c8753e3d723c4cc47ab7319e560aa812a37ee69e271b05bc7193b1673d5fbfd07158e46153f699fad3f56359882372ce4ecabe38d0bb3bad9aae4b080a487217e5819e253f1d485ebbf5c5660dcbf79f13fecc6bbfdf94d13b50dc375e8837fa09c4fb97e2850406a442a7bb1feb8ff4941064abf7f6fa31628b18a36de00637d324d1f61d97c7057c56d4c7227e0e83bf6c512300edd7f9b1f4e23911451d07fb58e5153bede0a70d22d705afd8dbdf3115fb1d475c7f6f88d3d8635abdb63e1858b416bd7eec514a8a787b623c6a7aef8f1eff00460b490af40761906f34e80d6bcb52b2426124b5c44bfb1fe5aff91fcdfcb93546f13b7718e608e38915561423b50f638902416123036f1e4b9a122bd705c576050f21f7608f3879724d1e4fd2362a4e9f21a3a0ff007531ff00996dfb3fcb91b4b824035ca68834e609090b0cae1baa8eb43e1db0ca1ba2050f5c885bdd9a8a1eb86b6f7669b9ad3b1df1522d95c373c986f5c3086615e437ec2b91682e80e98696d760fb1c982d528b214937041ad37a60c572cebbf5ddb09619c53dcf5382e29e9bf7cb016994535423f7806ca3715c4e45a011f500eff7607597975ef4fc317e618820d36353f86250052d6500d4ee0eca303ba15af7c5c310ca083d3b635bf786bd00e83225b228278aade3535a76fa715514208dbf8e285373befe38906ab5146fe390e4cf9aba1420d4d0e530ae510762713f50a927f0c935d77365e87fcc572d666040eddce20d576241dbc72fa2d2b51df032a08b8dc1058127e585fab68761ad206b85f4ee1451274a0615fe7afdbc5559568be3e3fc71459d456807bb1fe1928c88dc6cc650b04116f36d5f41bfd21ab3af3809a25c26e87e7fca7e785273b0493413ab432aabc4e28c845548f7ae43b5cf29001eef48dd7ed3da1ea3fe311eff00ea664c3303b4be6e264d391bc7e4c30e563981525581046c41d8838ccb9c65c31c31831e3157626f8a626f8aa1df1d0422e258ad89a095b9487c234f89ab8d7db13b891ed6c6f2f3ecf18c5bc4de2f29a39ff810d83aa47227e0c5f58ba7d53559a44dc49208e15ff26bc2351fec73a3e9da6a450d8e891f4341391e03f793b7fc4b207e57b4177abc7238ac76d599abe2364ff86ce9fa2c7ce4bbbf6ff7528b788ff9527c4e7e845ff86c8f7954ca460eecc0501fb23c00d947dd94bb0f9e34f5a63f2b4bb366cd8abb366cd8abb366cbc556e6cbcac55acd9b362ad66cbcac559a79294fd5e46ff8b0fea192fc27d02d52daca35414d813ee4f5386f5c55bcd959b156f36566c55bcd959b156f12b83fba6f96298c9006423157946aceb26a572cbd3991f76d80f0dbcc76eb6fa9bf014120e640f1ad0e14e2aecd9b362aecd9b362aecd9b362aecd9b362aecd95978abb366cd8ab4c01041e8763904f3059fa37476a24a0a13ee3ecff00c2e4f2991bf355bf2b6f597aa51bfe07affc2e11cd5e677ebc4ab81fe4b1f7192efca9d6174ef33c504a690df2985c1e953f6723da8c218301fb439a8f975c2eb0b87b3bb86ea362ad0bab823afc26b93ea8e61f40ddc3f57b99adcffbadca8f903b7e18860fd4254bb8ecb538cd52f6de39091fcc00aff0c01909734bb2b2f2b02bb366cd8abb366cac55d9b366c55ac7c4409149e80e33362a9aadc46075197f598fc461466c553267859d5c9155ad3e9c53eb118ee30a3362a9bfd663f11802edd5d815c0d9b15766cd9b1576566cd8abb2b2f2b15766cd958abb2f2b362aecbcacd8abb366cd8abb366cac55ffd2826c72e80e015b9f7c596e2b97b0447118e0a31159862825185578518e006262418ee78aaaae4dff002fb445bebc6d4275ac56e408ebd0b78fd19040f9dc7c99622c343b75a51e450edf36df2bc92a8fbdb3146e57dcc80ec283a0ed89b36398e23524e633961b38d001ad72ea7c328838d292d923a66006553b9c776f6c2c6d6d3288c70fd79636f9e34b6b294c61a63c935caa7d38d242cd88ca237c711f0d075c68523deb81934ca47c5f40caa9a78ed8e249ea36f0c63730001d7b9f6c095ae3a50e25f1027c4f5a7862814f56edb50e2721e156f1d801befd8647cd90ee587e13c89a9e953892a01d0506e6a36ae3c8241523e23bb53c32f77a04d929bd71654b3e23b28341d72f81a52b4f7ef8ad514711d7b0c6b10176ddbc30a16d40a0a54f6a659663f68f103c37395b01c89dfc7034b2b33148b723a9ec30150095666404f122a37dfafe380aeae5501dea7a018d914f1abb166c4be04dc0a1f1a6e3226cedc998006fcd41a5622a773f860537d756ef58fe2037e24ed82e6ab291faba6173c67e22c7eec8487736448643a66b915d0a13c5c7da07620fbe1d2ca1d7c0919cc2e12e2de41736ce55d7ee3ec7247a26beb76a2297e09947c519ff00892e4e190f2931c9887d50f932f65e5c4f535a635a20c42b0a0df8d703c17218835f91c11ead4d49dbf1cb762d06c28b0a7c28371d4787dd8d55e35e1dfab1eb822b180de35a8a631c006ac284fd941d7e9c0aa442c23f760972766eedff0036e27c581eccec3ad761fe4d717553524fdae849edec31acad2a909f657663fc07be1421c7c2dc568d20ee7a018d55de91fc6dddfa018b7a7c8f0501003bb91bff00b78fa05063885081f11edf3f9e29b51e001a9f89cefb76cba53aeebfcffd31e56b458d6ae7f68ff1cc540a72ab39fd9edf318a16a8e5de87f98f7cdb528054f8ff005c7b2d3ed1d8f451ef946b4006c48f8478e04a9922b43bb1f0c696a6cdb7cf143f00e9b9ebf3c45872dc8a60290a828371d31cad51d7e8c437edd3c72c36fd7108215a58a19e2782640f1480aba352841ea0e726f34795e7d0273716d57d3643fbb7ea6327a4727fc68dfb59d5ebb8dabef8d9a08aee07b6b98d648a45e2e8db820e245a613313e5d5e191cb4fe383a0b8f7c31f33f9565d12633dbd64b094d236eac84fec3ffc6ad91f0cc877ca88ef72a3204586476b746bd6a0f63b61b5bdd50ec7e8c88417543bd70cedeee94dfe40e292ccadae7604f4ee7afd18670cf5a1045074afbe44adef0d2b5a9af41fc70d20bbd977f84f55fe99205aa51646928f1f9e0a470475e9d30921b853b548c1f14f42149fa7256c0847f2af123e9cdd1abb118889430dbf0c54357dc7e38d286d541660c7e13b9ec32ca81f128a2f6f1cdcfa6d8ff4d9e9d4e20292a4412485dce22ca18d4ee7be09740a2895af714a622509af23bd71214143d5bb74f1ca6229bf6c5f88a104529de988caa13a646990dd0ecfd7e58c01dc814fb5988e47f8618c7108c29a0e54fbb044711a6739080e5bac8ec9a9594841ee6bb7cb2fd0553f0ca9f2dc62ac6a08f1c419081be5fc00068e391e6528d67cb706ac0cb4f4ae80da74dc3780900fb5f3fb59cfeff4ebcd366305dc650d7e07fd961e28ddf3aa559775241c4eee2b6beb736da840b347e34a107c41f1c9c2663b730d397109ef547bc7e97930c70c3dd5bcb135a169ac18dc5b8df81fef547fabfb63fd5c2219789022c389284a26a41bc4df15c4df0b142c842ef853e63ba2b656b60a7762d7127bd4f14ff8db0c6ed8868e35dcb9e9f864735f9c4ba8caaa6ab08112ff00b01c4ffc3644f5f932ad879d94fbca307a1637176c28677e2bfeaa7f69ce87a6c662d22d51b63317b96f939e31ff00c22643b4db73169f676918f8cc6bb7f94fbff1c9f5d22c32fd593ecdba240bf28d42ff000c8cb6081cd457ae3a98d5db1e3209765531d958ab54cd97958abb366cd8ab59472f2b156b2b2f362ad6565e562af4af2fdd2dc58c4c0ee5457e63638719ce3cbfacfe8f93d198d217350dd949f1f6c9f5b5d477081d0820f718aa273656557155d955caae6ae2add736566c55bae36560a849cb2682b91df306bb15944d0a1accc3e14fe27db15627e61b8171aa49c4d446027d3d4febc2acb77677677356624b1f73958abb365e575c55acbcacbc55d9b366c55c72b2f362ad658cacbc55dd3366cd8abb006ad089acdd4fd3f23b60fc4ae13d485d3c41c42bca2f1288a4f54250e110f8242be07a64a3538f84b771edb31715f7f8b233381ead7c4039343db3c9b7a751f255ad777d3a76b727fc96f897fe35c31c88fe52dc196c35dd34b54048ae6353e2a4863ff11c97609742a1d959795914bb366cac55bcacd9b1576566cd8abb2b2f2b1576565e562aecd9b2b15766cd9b156b365e562aecd9b362ad66cd9b1576565e562aecd9b362aecd9b362aecd9b2b15766cd9b157fffd3e40973ef8ba5c6122cc462e939f1cb6d8d2789718b2cf848939c1293e1b54e165c5049858937be08597154df4c81af2feded9773248a0fcabbe7a12d10416d1463a2a81f70ce2ff97567f5cd756522ab0296fa4ec33b59e94ca731dc072708f4df79fb9c5ebf2cd518ccae594b6955aed5caf7ae30b76ef941ebd70da2952b981c6afdf8f031576622bdf2f6231a36c3685a41aed960787d396d9631b4aca634af7c54f418dc536a7c5bf68d3c298c6fb245684f7c5bae21383b28e9c802075e9b7e391290b641440a05013fc31061f06e371d3e782dc06403fcf6c40a1e5c49a81d0fbfbe021944a97026ab5a13b938efb21557ed74c7f1e3b91d07de4e55046858ee7bf8ef8d32b5365a2fc24d4f5c616282836c5760b572053724e02777b862b19e318fb4d9126bde7a3288bf70529ee9aa61881773bd076c522508a23fda61573debd71a91c71afc15ab7da6f1ca5721c352a2b403db046eecf3fb991208a1fdab240456bf4fcf02c8c54fcba60e9086048351dcfbf860098015debf3c25014f90e35ae059dc1f840ab7828ad4e2caaf3d021e2b5ddffa038e68a388f18c7c7dcf73f3391e6196c3de93cd6f3b2b348786db28dce174ba7caa5644959254dd4aed4c9194e428773df03cd10000eac7a0c062ca39082bf49f301a8b5bd1c261b2b74e5f2c93c1761d6a0e412e2c525fef7735a8a6d4f0a118a59ead3e9ce21bb62d0f459bc3d9ff00e6ac4488e6b28465bc79b3d49e8413d463c4b4249152475fe184b6f7c9280cad5c1c9286a1276f0cb04ada4c691cac65dcfc2bd7dce2bc815017614a1a6c6981d25a8fe18a02181aef5ebdb241acb988614fb2a3afbfc8e387ef0008bc140edd7e8c60f8bed7d9fd94feb8e04f2a2ee46c4e1437c001e9c7f3f97f95f3cc7e1d9412e3776f6ff3ed8fa2d084e83ed31ebf465b100700683b37f5c5549d3e1f87727ab76fa32800a09eddd9b1434d94025695a773ef9881c8313d773e030ada1d87ed30dfb03d7e9c45b73b6f82190b1e47e114fbfdf113523e1145f1c894a9b50753f3c4c96edf8e3f8806bfaf1376eca2b91290b95bc5be818a2c8be3bf5db73814292773fc06282a3a500c45a682b4d0c3790496f751fa9148a55d1802083d8e724f36796f51f2f3b5d5a29bbd2d8920904bc23f96423f67f964ceae241d0b13ec31e424a8c8e39020865600a9076a1ae48487516c483d0989ef0f9fa2d5ecdcd25ac0fefbafde30c219f980f148b22f8a9ae4a3cd9f96105d86bdf2ef1866dcbd8b1a231ff8a98ff767fc83f07fab9caa586f749bb7b5b8492dae623478daaac0e1f0a12fa4d792fe67243698e21de19edbde9522bb61d5bdf2bd0ec4f8ff005ce796baadc1a09087f98dfef18736da874a120e40e29c7a58f26e86a314fad1ee3b3d020bcd80e5f238656f75fe64f5c845aea35a6fd30e6defc120577390b6d20165d14c0f4dbdb052cac0505708edee81d89c1c93d7da99205ac8dd35470fb9343f238251d40dd8529db0a1263f2f03b7f5c1514a569c87b9a57f864c10c48473387d907cf7c4fd23b92b5ccb2c4680ef4e9fe6704290c36fa32556c7974431ad294dbb0c0d28f848ef83ca8de9bf7f0c09347b1a77c8c836408425ba739d7e7be18942cd5c076640b85aef43435eb86e154d76df0e188e6c339f57c10dc318c98208f1c49fa65a5a8211d0620e08c14e3107032a2da107201847a8e9769735678c093fdf8bf0b7d3e3f4e1eca40ad37c2d9e41435c8f111c8d24c0485116185ded9b59c8149e48df65a94fa0fbe037c3cd6a78dc2c40f46a83e27be11be65629f1c7cc737033e3e0972d8ee12d0eb26a5427e1b75e47fd88e66b9158d0deea0919dccd20afd26a70fbd4292eab303baab20ff6402e1679790cbac424f440cfff000230feb2c25f700f42d1e2f5f57b2847d9f5a31fec54863ff0ab92591fd491e43fb4c5bef35c25f2b441f5549491fbb8e6929dfe189ffe366c39e3b609b10b874c776ca23619bb6412eae6cd9b1571cacb39a98ab59b366c55acd97958ab472b2f2b1576565e562ad648fcaba918666b373453f147f3fda191cc74723c322cb19a3a1aa9f718abd7158300465d709b44d563beb75607e21b32f81f0c37ae2abab9ab8dae6ae2abab9ab8dae35dc229271550bfba4b681dd8d000493f2ce5f7b74f797525cbfed9d87828e830ff00cd1abfaee6ca16d87f7a47e0b918c55d9632b357156f366cd8abb366cd8abb366cd8abb366cd8ab54cd979b156b2f366c55d9477072f2b1579debb105be907f3a11f7123221722814f53520e4e3cc8bc6fd0f63cc7e20e42ef1429917c1ab93e8865ff009553f0f31cd0934171673474f121790fd59d187419ca7f2f27fabf9b74e27ecbc863ff009188cb9d5ba6de1825c825bcacd9b22aecacd9b1576566c111595c4c392ad01f1db1543e6c10f63731ee52a077070362aecd9b362ad66cd9b1576566cd8abb36566c55d9b366c55b552ec154549e982869d2915e43eecda720694b1edd3e9c3900531563b2c6d137171bf6c6618ea6800571d8d3efc2dc55d9b366c55d9b366c55d9b2b362aecd9b362aecd947362aff00ffd4e1d710143b6201883922bab506bb612dc5b953503264520153497df1749b00ee3ae3d5e98daa6b1cfd37c151cd84e92530c2c54dc4d1c2bbb3b0551ee4d30dabdbff002aac7d3d365bf65f8a66214fb0db3a097c29f2de9eba668d6b68a2855057e7868db663ccd9b73202801e4e634cdcba0cadbbe264e576ce950fe38996a1eb4395ea50efd0f4394ff16f51be369015d1c9ea7140c7c700fa854d0e2c93291b1c224831ea8aad7f88cbf96221876eb8fe4324c69b6cbed8c0413be6e407c27ae05a5e3c7efca236df3034cdd7f5e1577638d750c37ea3a7d1975ede3b66535dcef5fd78554c80180069b74ed982d57901b93538ef7f61bfb661b29a1dc120e04da9915624f734007b6272206654af4058d3b78629d5003b03d0f81c4128f24a9c8807a91dc0ea01c07a79b21f7216e64370c2dd0f4fb6c3b0cb93d34409101c5453fb7158c471bca8a38d38f5ea453119c726e75a05efd0e46b99e64b658d87408571bf15dfc6996cac137a6db83f3c50542934e35edf8e07964690fa708ab773d860e49e6a4efc4865af2f01d49ca5b7a9324fd7f653b0c11140918afda7eec733564f65f1fe9881d4fc9065d07cd04ec49e29b789ca0a06dbd3b9ef8abaa28a0d80ec71300c9d364f1ee7e583ed2bf62c606bc62153e3d8631a2082a7773d4f7c141788e083e78ee0a3fca6e9ef8404129635bf2156ff0081c05756eaea53883fabe9c3c6849153bf80c0d3435141d7f57cf018b28cf7627ebdde8edc94996debf6456a83dbfc9c9069daec3728ac8d5af5df12b9b3e4a540af8d72357ba65cd948d7560496eaf17ecb7cbc1b21b86ef4cb9f37a3437aa46c70747715007d39cdf4af312cbfbb725645d995ba83e192ab4d411d410d5af87f6e4c4daa78a991a3f2dc93f21d69f3c5d5aa028e83c36c2686eebdf07c3282013d32624d262423cb0fd9d801b9fe98d01454bd4f755c4964f953df14522a396ddc0feb926202f01ab563563f68e550063c850015e3ee7a572ea7e261f47cbbe314f22169ef5f13e270aba9cf76fb3fb20fed7b9c63f1a1663b0ef8a4ae6a58ecbf71271092bc559c7c3d117e5dce2a10cc19cf7083a0c615a7b01df04c944156dd9ba2e2322f11ca53f25c8964862c48f846de271225daa3727ee18bf176ddbe11e1df12ef451f4f6c816c8aaa31553c8803db1c24afd9dc7e1890551bb6e7f0cb32efc40a9c6e9356ac1fa86200f01d70a75cf2f691e61b7f475280391fddcca38ca87b70906ffec7ece180007daea7f0cdc8d48e9ed5c4128300f13f30791b54f2f3b5c415bdd3c6feba2d1907fc5a82bff06bf0e155acdd33bf3d4d411b1eb5c82f997c8b0dd33dfe8cab0dd13ca4b6a8113f8f1ff7dbff00c265f0cdd25f3717269fac3e5fa98941274c308e79568ca7953b612289ada66b7b8468a58cf178d8508230c61901cb658e13e63e21aa19b263340fc0b29b2d4b92824fcc1ec70da1d401efb7b1a64311c8dd4d0e2f1df491901befcc6c988c37e63bdcfc39e19363b4bbbf533d86f1180dfe75a60a8a7a8a835fbb2176da90e34ae19c17bb56a3eea6556dfc019525c02d535ed4c190dcb034edee4646a1bc1400903f5e0b5bb51d0d7e8c989b1f0ef664c1f90e5b7df94e9507f5614c176a02d37af6ad3074575c8712bf2f88659c40b030214d91a370c82b4dc7b7cb0c6191641caa2a7a8f7c08f43b8247d3815848ac19491e3ef804b84a250e31e69c37123df034838e322b8f55053fbc1b15f1c51f934618a9fbb266408d9ac468ee8566c0d2bd0571f3c812bcc851fe51a615dc5fc4bf64fa87b81b0fbce532980d91893c85b5712d41a75f0c23d46f161041ddfb20ebf4f863ef6fa660c148407af1eb4f9e476ee41bf893be54664b7c71d0dd2fbfb9772598effe7d32c9e4a1bc403f7e00bc96a4d3e5835578c68be000fc33274b772f7070b5d550f7962d3ca78ea42bb34a47dcd8ff002aa56fa793fdf709ff008665180657ac5727bbccdbfd24e1cf932069e5be083e2e1128f9b3ff006664477203832eaf46f2ac443dcca6878da4f43f368d7fe36c1f82b4dd38d85a32b0a3b58c8ce3b54cb0e0538e4e688f25ddb376cddb2e9b65695b9797958ab8e6ed9b2e98aada66a65e6c55acacbcac55aca397958aadcd9671b8abb366c7471c92b88e252ec7a28c5513a7ea12e9f3896324a9fb69e23fae4fb4dd5a0bd895d1ab5ea3b8f9e73dbab39acf809850b8240f0c6dbdccf6b27a903956efe07e63157ab0607a66ae422d3cd92c6a16e23269fb49bfe07053f9be0e3f0ab93e14a7f1c5595bcaa82ac69917d7bcc2220d6f6c6b29efd97dce12df798af2eaab1fee90f7ead84c4d4d4ee4f538ab999998b31ab31a927b9cac1b369777142b3f02d1900923a8f98c058ab54cd979b15766cd9b15766cd9b156b2f2b2f15766cd9b15766cd9b15766cd9b15766cd958ab09f34802f2223f99bf50c855f00649b97615fc726de6aff7b221e2cdfa86426fbfbe9853b1afde326392a2bcab3183cc7a5c80d29730fe2c07f1ced2fb3b0f73faf386682de9eb360c06eb3c4403febae772635627dce03c95acacd9b22aecacd9b1545e9f009e6f8b755dfe9c91222a8000c29d1d6819bc4edf461c62ad322b0a1191fd520114aaea281ab5f9e4870a7585ac40d3a118aa4b9b36562aecd9b2b15766cd9b156b366cd8abb366caebb0c551b6122465b930049ef86a240456b84696b2bee4507be38cf3c55841ad3604f5c55157f2c6e85430a8ed859821ed251f10f8abbfbe20415342287c0e2ad66cd958abb366cd8abb366cd8abb2b2f2b15766cd958abfffd5e7f3c15aed851736b5aed9253186c0d35a86ed9790c185dc5b106a06042a41c974fa7d6bb615cfa6915db2062cad2753bd3be4ff00f2df413aa6b50cf20ac56c44847627b643e3d2e5924a28341b939dcff2af49faae9ad74cb4694edf219091a6dc71b365e8aaa154003a0a6536e71ddab94d941ddc8513fab18f5a57f0c508ee72a9df234cad0ae1e9b74f7c44cb2a0e876efe383592bbd31ad1f8e0e1f3642482fae07143f0b0f1db19eb956e40d2bd77c132408fd46056b100d63d89c8912662514425e29d89df04c7740ec0f5c2692daf46c17901d08eb8806bf8cff752353b71c7888e853c113c8864e265ec6b98b03d709ede7ba702b03a9f1614c181a5eac29f4e4c1b6b31aea8d593b7de314a8ec70b4cacbdb2d6fd41a35461bef4709e88f27c728b77f0dfe8c082ee361f0303ed9beb4b5f975c3c411c2518cc295edb8a7b1df185e8c41ebd7f0c48481811d41e87df2b95684f6d8e36a02a8238711b86a0a1ec7c7180522e141f0fdf5ca249a0edd46359f89aa753f75714a944c0cd2546f41d7109d834cb10f841f89fc2837c51e50a148d997a1f107ae2107c6f24cc391ad2bd80183b832f35acaf31dbe08fa963d48f6c7ac691af14d8f738b052ebea48688bd3c4fbe2414ccc0b82b176f7ff009b71aebd516a5c4c87c23f1f1cb9dd1178fd1b62d3398c514559b60a30308c8357de4ee3b2f8d31f21cd79f3437a4f21e526cbd97fae29c540df6f018b38dc05f8987eaf7ca550a7936e7c7b7d182a936a6b11ff0063efd71e00f0f6ae3d8d7e23f08f03df2f817a03f081d0773850a0549d97bec5bb626f185d80fedc16548e836f0ed8d310a6dd71a5b4ba584100b74c03716c48e9b7861cba0181e45ad69f4e4086719160babe80666fac5b37a372bfb406cd4fe6c2db3d72f74a9160d4636553b2c80fc0df26c9f4d6e0d76c2ab9b441c83c493c2fb4b6d20aa38f7fe561fb2cb90aa6e12b1489d3758b7ba0a55854d32456f3834dfe8ce733e813d90faff96a569e11bcfa6ca47ad0fb2d69eaa7f29fb5869a1f9921b8fdd4a78480d191aa287dc76a6481a6128d8b0cfe39413e3e182918d4377f7c2682e15c72535fc70c23981037f96580b5482395c85e3d7ad7e796a7e21da83af860747ec77c5633bd475eb86d8d2e0a6497952aabd01e9b626f5796b4afa7b2af8b1fe98ba388e1e9527a0f99c4de91c345dd9f7ff6470f4fb51d7ec087fb1591f76a75f01e031245699d5dba1d901f0eed8f9104a563afc2b43237cfa28cb8f807918ec0538e47af93656cb278fad7e141d877c08cc028e23af403c305b0facb176da11d07f31fe981a4751b20fbb224f54c47452f8e95238d7b9cc6458c507ccf8e54affb5cb6206037ab9ad481d8e449ae4ce22f9a2bd65f1f9e31a52d22ac6c053a9c0bcd23523a91b53293953b807ae46d950469a03c41e4c71acc7707125708a76f6ae389aefe237c9b049b5ef2f5a6b31726022ba51fbbb851f17c9bf99739f5cd9dde97726d6ed38b0fb2c3ecb0f1539d66a37a6e7006b1a5c1a8db18a650c3aa91b107c54f6cb31e530d8ee1a72e18e4dc6d2efeff007bcf2292b8b52a3c70d07969012b15c9571fb320fe2b885ce937f66a5a58b9463fdda9f12ff6665472c25b03f02e24f06586e627de37fb92e2c6235068304c1a832f7a8f9e0694546155c178c964254fb65793044ef1d8fd8db8b5938ed3f50fb598c1a8834dc8c3486f1587daa9ce643599e161ea2071e236386d65e6185a9f1153e076398f2c538f31f273a1aac52e52a3dc767a24374148ef86505e21df6af7ed909b6d5a29147c7f7619dbdfd0ecd90b21bec483305bdf86be1ef97f5ce5b311f475c208ae8b7535f9e2e2522bbe264587084e3d58dc0ef4fa32a5bc7e3c1669788fd9e55fd785627206e7a78e252dc81d7e8aff006e0325e004f7ab4f3a5493527f99aa70b27baea3b63669ea49fbff00ceb85d3cbbd7a656496c11039acb9b82d5c25bb97ad705dc4c294c23bfbb48d4b33000752708058ca4029a8f5ee923036af26f90c13a95f45a7db3dc4a6840a46bdd9bb0190f935dbd5924168e2146db9800b103dcf4c032dc3cc79dc48f3c87bb9240fbf33b08e08f99755a897893be8360898d99edc96fb45aa7e915ce81f94566b7bab5e238aaa245253fd566ce791c8d24449f61f7674bfc9370be60be88fedda721fec5c7f5cb60770e3cfabd5751882b48a3bd9cf4ff0062f0b6467261a8475962ff002e1ba8ea7de2e63fe4de43f1c9cd11e4df6c78e98d1d31cbd32b4b4736591958ab865e565e2ad66cd9b155a728e38e37156b2b04db59dc5e3f0812be2c7a0c90d9795e3d9ae0973e1d062ac59239253c6342e4f6515c1f06837f3ee54460ff00375fb864de0d3ade050a88001d80c141117a018ab14b5f29d686e242dfe48f847f5c3eb3d22d2d07eee3507b9037c1f5cd5c558bf9aed47d5d6551fddb03f41d8e4433a26b907d62ca54ee54d3e79ceba62a9b59688f7f08961940af504577fa3047f85aec6ed2ad3fd538a7956e8c73bdb1e87e35fd472597d3086d9a4ec0127e8c55e737b6c2d2630f2e447da3d31b6917af73145fccc01f97538d9e569e6799babb16fbf0c7cbd07aba8ab768d49fa4ed8ab3a82da3302ab28e98577be5ab3b925953831fda4d8e1da0a2818eae2ac1ee3ca9731d4c32061e0c3f88c29b8d2efadabea42481fb4bf10fc33a6ec7ae26f0c6e285715795d0d68763e19b3a15e68567740f2415ecc363f7e46eff00cb33db82f6c4c807ecb75fa0e2a90e5639d5918a382acbb107a8c6e2aecd979b15766cd978abb30cd974c55acd9b362ad66cd9b15611e6935bf847bb1ff88e432efe279dbc14feb192df31bf3d4d147ecab13f4b7fcdb912b9a08a66f114fbd864c2acd1999756b165ff007f467fe1c677239c43cbe9cf5ad3d46e4cc9f83573b71c895766cd9b02b59b366c551fa6dd089c44dd18ec70f83022a32242b5dbaf6a61b5a6a2bc784a78b0db7ef8aa6e5a82b847aadd076f457e6c7045d6a48aa563219bb0184cc599896fb44d4e2ab7366cd8abb2b2f2b1576566cd8abb366cac55d82ac954b166edb0c0b961997ec923154eb92014c0af0ab4eb26d41d7e7db007ab27f39cdeac9fcc7154e03252980ef550af21d4602f564fe73945dd86ec4e2ab7366cd8abb2b366c55bcacd9b15766cd9b1576566cd8abfffd689533501c795c6d3321ad6342a460692cc376c19be3a352cc06252146c74a32b88917790815cedba1d8a58e9f0c08281540fc3211e53d35ee6f3d42bfbb8c75ce8e07050a3b662ccd97320282e341b636a3fb328d4e574e995b36c95ebdb1369957c4d3c065b1515277a75c439b48c403c54756fe98096402f32f2ea081ed983296a0ad71be92b6e6a478938e55e354029bed8a6837b76cb031eaa3b9d875cccc3c283254853ebef980ec3e9398b13b9d8634b9e94fedc0901b620576dcf4c41c9e837c54bd077a7b6f4c4f627722a7ecf81c595521a466ee4fceb819d98f7fa704cbbd4d30336fd7eec810c87243b3807c4e33eb12d0d0edefd71578dba9e9e18918ea7c320414d85c9aa988f09010a7bf515c34b7bd4937041a8a1f71e3843320208a54f8617992e6c5fd486ae83ed464f6f6c44c8e7bb2e08c86db166a1fb03f2ca6ab7d934a6fbfbe10d86b314e051ba6c41d883ef86eb32b0ad726240f26b3031345cebd397c449afb531c9554a6dc4ef4edd71cbf1303f4fdf99a22ec01d97ab81857c94cb7aa77fee97b7f311fc32da6216bd4f455f1f962a505687ecd31a56afcc0145d87f6e1dd8ecb550a6ff006a422a4f857c319bb92a82941bb1da9f3f7cbdc92b5a7f330fe18f52114161f08e8bdfe6708410b0c6235241a57ad7be3427ed30dabf0a7f138b28776e6df6bb03dbfb7145e2a0d01676fbce1a45a1caf1ddfa8eddb31a9153f64763d7152aa84393c98fecf87b0caf4c9a731b8fb2b8296d4e848f87ecf8e661b53c315e35a53efc6b2536fbf1a4a15976dbaf7f0c4180f0c18c413c7bf860774af43d322590424894e9dfbe029a0ad6b866c08d86f884a01f9e44865134c7e7b7747f521263907d965fe38f3a6e95e61631dc0fa8eb34fdd5d47d1f8fb7493fca46f8ff0095b0c65881069f4e16cf6c1bbd08dc1e841f6a642a8db6df10aba510faaf97264b7d597942df0c5771d4c6ff00e4d7f61ffc87c92d95f2cc81d5aaa7a1c8f6a7af6ae9a5c965e8a5d9238b3b8a965ff290fc2cdef911d1bcc7258ca20b8aaad69535047b1c363a238491eae6f648a4ad3c4e0b43407c7235a4ea91ddc6195813d7b114fa30f629030dba6580b4ca348be43e1f0ca928aacdfca081f338986aed8e76aa37f9f5c368a5a4050154547403c49c0a914923354d17b8f976c1bc870d87ecd0b1c4d01f45553f6777276eb808ba67134d3cb12a0118aaf455ee7da98026e6436d4afe182ca0af88de87b0ae03b97dc9269f2c8c8b2881d10aaa2a049f113f647619a570770b5036cbe35f8d8ed5da9d06d893b2f03e229911c991e6a638a6e3e9cbf5405f0c419cb529d310924201df05a6af9a23d604efb8071532002b5af6185e8c49a1dab8a1634d8d4fbe48144822f9fceb8f5b853f036f5ebef8044b5dabbe31a4a9ad77c28aef597d115939a0dab507dbc317d3ae837c2db83b1077fa0e22cfc94a9df0ba4bafd1e5ee1959e2505d826edb780c8f5d9982288972457983cb08f036a1a5a53882d35b8f0fe68ffe69ce7976bb1c9a45f9a5a6c0b48acae2523bb144069f32d906d6bcc36b7f792dcd9d97d56390d4c3cf980dfb445157aff2e66e394aaa4eb33421c578c837d025570bb9c4a2146c4e6bd763b281818dccbd8f1f90c9f106ae12c8ad99852848f91c35b7bf9e0a727aa8f13fd720cd73727632b53c0123f56244b37da24fcce424212e63e2db09e487296ddc793d5ec75e81e83d4048d8d08387b0ea3048010c0fd39c28295355241f106982edf56d52d0d61b86207ecbfc43f1ca0e1ee2e4c757fce1f27b735d27407107b81e39cc21f3b6a11a859a04929dc12bfd7156f3cca46f6a6bfebff665670c9b86aa1def4192e17c7005c5c28ad4e40e6f395eb8a4702afb9627f80c2abad6b53bca8798aa9fd94f847f5c2309ebb309eae3d2cb2cd535cb5b50433f27ec8bb9c875fea53df39e478c7d907f1c0bc18ee6a49f1c708fc4e5d0c623e6e2e4cf29edc87729804e2a91331a015382ad1624915880d435f8b71f7674ff002beb7a44d1013c1089a2153544edfcb51974617d5a0ca9e6091b47c9187be4f7f2766f4fce51c64ed35b4e9f4801ff00e35c05e756d2a5955f4d44422beb2c74a549aef4fdac07f97f7cb61e72d227634569c44c7da5063ff8db0d54a904d87d1f7c9b5b39d82dc22b1ff265ac07fe4ee421d4a3321eaa483f464f7505ff00459cd2a517d4503ad53e314ff64b90dd5915351b829fddc8deac67c525024423e87c33631420c72e3075c78eb95326ce565e51c55acbcacbc55acc72f28e2ad609d3ec5efa711aec8285cfb78606f964d342b116d6ea48f8db763ee715475958436912a22814c19d31b5cd5c557573636b9ab8ab75cd5caae6ae2aa772bce261ed9cdefa2f42ee68bb06247c8ef9d2db704640fcc507a57dce9b483f118aab795e3e57523ff2803ef35c96dfa73b665f114c8f794e2f82493f99bf50c934e3944c3157983af0764fe5247dc69928f29c1f0bcc7f69a83e4323f7f1fa57b3a783923e9df267e5eb7f42c6307ad2a7e677c553aae6ae36b9ab8aaeae6ae36b9ab8aaeae532ab0a11955cd5c558f6b9a225ca19a101651d1bc7d8e43194ab15614653423c08cea6e032907be41bcc763f57b913a0a2c9b37cfb62a9266cd9b1570cbcd9b156f2e99431c3155b4cac7e553155999885058f618ec42edf85bb9f6a7df8473579eeaf27a9a9dcb7f2285fa695fe391cbcdad643e2c8a078f53872ee666bbb827edb311f7ed84fa9304b38e3fda9242c7e4838feb393e88ea88f2845ea798ac17f95f91ff6209cecb9caff002f2dccbaeb4d4da0818d7dd88519d4f2052de566cd815c0162001527a0c30834d2c2b21fa0625a7c61e52c77e387636c550c9630c636515f1ef8572c416ef8115563d3e787b5c052db96b98e4a6c0357f862a971881ba5894500a7f5c346b286451c9413e3898b63f5af569b70a7d35c1a3a62a954fa6501311a7b1dc61732b23156142324c709f538c2b2b8f91c552fcd9b2b15766cd958abb366cd8abb366cac55d9b36562ade566cd8abb366cac55d9b366c55d9b366c55d959b362aecacbcac55fffd78bd09cbf4c9c162118f11019954d682f44e0a82d492b4ea4e2a1170ef43b1175771802aa08272190d06cc42e4ccfcb7602cf4f46228f26e70dc9de99a3884512a0fd9198d41f1cc327773005a73120651eb9abb9dba0fd7812a722d4d1ba753f2f0c6280c3a75f1f0c71fb449ebdb1c401b1f0c0c834294d8ee31c16bf178635413f2f0c7f6c425aad3618d61e39b7f9e6a751f79c2ab76a127a0e9ee728104549df1c41600f414dbfae34821a9d76dd977c6d90014a43c41a13cbc703b3ec4b77ee3fa6096208200f97be17dc6e5803b78f8fb602901ae6f70fc54ec3edbff9f7c798d545177a7df8a08c4112f1dabd46307c67e3ebe1dbe78d77f3526f97253615152313a02485ebdce2ac0b9f4e3f9927b63b82a25106c3edd7ad71a6284683bf73d5b024d6c0835e986a05455b65ede189b455dcede03ae031042891058cdc69b206f5edcfa72788e87d9862b63acc90b8b7bc1c1fb1ea0fc8e1e9856953f778600bad3a3b9421d011d8537cacc08e4dc3203b4826b6f791ba82a7058957a8df216d0dfe99f1424cd10fd827e21f23fb586165ad473fc24d1ba153b11f46227d0ec838ef789b0c97d4db6dbdf1c1f6e3fe7f4e17c572acb5afcb15f5c1e872624d662882a8a2bd00ff003ae640643cdf703751fc703fa9cb73b91be2eb27875c20a08288d812a055ceff002ca24c6453e291b63ee3dbc31a1bf613a9ea4ff1cba01d0fc47ed364ed8534a38fc67e26dc7cabfcb8ee82adb9e9fd98e0b45a1dbc3c49cc136009debb8f99eb8ab414a82a7763be31d68684ed4df1570507151bd684f80c425e2c5857e207703c3129010ed52401dfa1f6c638dbafccf8e28f415debd3738938a03f89c8b2a52600d69883af8e0a51d478f7f9626e053f560a45d25d28a1d8607703e783e44e5d7a60774dba6c320436464826815fa0db08b57f2ddb5f067a709a9b48bd7e91fb592324d695a018a2807a2ec7053602f3cb4bad5bcaf305ba05ad0fc2265dc0f9ff002e748d175b82fe142ae0edd4601b9b5866568d90303f6948a8fa723674c9f44b8373a531f4abca4b527e13ff0018cfecff00ab82e9263c41ea68438f84d475a62c7a29ed5ede391bd075a8afe1500d251b321d8823c464815aa3c7c41cb41b16d12041a2db9e40af41ed99240a4a74ad2a3df136604f81c4d5be3a30edb1382f76406ca92f11bfe1d70aeea42c485dcf7a60b91de84d428e83a9fbb0194dcb13bf4c84f7d99c056e5c88cc9591b61d874c419501663f67c305d28bca9563e3d06049e95ad773be1e41176506f20e545c45fdbbe2ceb56dbbe34a81f46d91a6cd960434af8e6553423eec7d2a2b5df37d9ea7639214836a45411d687a1c4dfc0ed8ab8a0d8d7127351f3ef925a59ca848c0974411c69d462cc69f2c0f21afb9c14b4f3ad62d3ea57cf1d291c84bc7f23d47d070b9a263d3efc9af9874ff00ae5b9651fbd4ab467c4f87d3901fad71247423a82694cc9c66c79875f9e2613e5b1dc2f681abe3899818659be3fce3f5e34de0eee4fcb6c9d34f1868c2de195e8b786535d8ec3e927186edbb018d0ef471792a885bd87d39661502ad20f7a6053339ee71a643e38764594515b615e4c4fcb132d00e8a7e9c0e5ce556b8365b3deae590745c61976db13dce6009c5775c64271bcce3bd36f0cb58647fb2b5f7c50b56461d3044571200546c0e5ad94c3e22b5f6c1705a06152a55bc0e2aa70c8cc92213f6877ca82e1eda786e633478596453fe521e431696d8c2438dc77c0ae2951d81dbe58abebdb49d2fec6daf5774b98526f9891437f1c865f44e20899f77b5925b0948f084f3b73feca07ff84c17f95daa8d57c9961c8d65b2e56926f53fbbfb15ff009e6cb82b5981d2eaf600b54bc845dc5b7fbbacfe1940f77b692bff003cf2c96e188e6c73be3b198e1d32964a994730e99b156b36639b157651cbcc71557b08bd6bb890f4af23f464fa05e11a8f6c876811f3bc2c7f647ebc998d80c55765572b362add73572ab9b156eb9ab959b156f22fe6a82b12cc07d86153ec76c93d700ea769f5cb59611d5d085f9d36fc71541f96e1f4eca3246ec397dfbe1d3eea4606b283eaf0a474dd5403f40c118ab06d5ed89d5d100fef8afe0687267669e9c2a3005c69deaea16f734f86257afccd38ff00c6d868838a818aafcd5caae562abab9b1b9b155d9b2ab9ab8ab784be62b61359c869ba8e43e637c38ae06bf40f0303e071579b65e5baf0764fe5247dc72b1576619b362abb2f2b2f15766a66cbc5561c25f325d8b5d3e535a371207ccfc2bfaf0ee990af37dd09248acd772cdcdbe4bb7fc48e10a902c612c6a7ab37ea153847acfc33c36fda28c1a7bbfc7fc725735b0adada9e940643feb7c4dff02b90dd4271737f7170a6a8ce7876f846cbff000b961d8040e6ce7f2d2dc88f50bb236664894fcaacdfac64fb23fe4cb2fa9797edaa28f3d676ff0065f67fe1464832a29766cd9b154559ce9013cb6ae0dfd250f8fe184f9b154e3f4943e3f8657e9287c7f0c28cac5538fd250f8fe19bf4943fcdf8613e6c5538fd250ff37e180ef6ea39d4053535ae02cd8ab59b36562aecd9b362aecd9b2b156f2b366c55d959b362aecacd9b15766cd9b15766cacd8ab7959b2b156f36566c55d9b36562afffd02aca2c00c4e49828c423692e64e11827df325ad128af31a274ce89e54d345bdbfd6241f137d9ae47344d18c92c71b77356f96743891628d635d828a0ca33137c25cac118d71055aed5c6662de1940d4edd3286e711bfe271363f1506c4f7c50edbf8e24db807b60290d9a72f1ec719d4904f4a7e397520f1a6dd7e8c6bd39721bd07ebc0cc2a2a91bf63db3528287b7f1cd19341ec29be38f6f9e1082565695c49aa485048aee7e58a1dea4f8e33a1ad7db1b6515e4a84a8dd8ec2b8993c54713bef5272c2fc4589f61894e42826bb53be24f5480a5338019abc6bfe7d311b787d797d597fbb1f641ee71aa04cc1e50444bf617bb1f7f6c58cc08206de1da9fe74c03737d191b0282f9f893b1f846c06057249f4d4fc477af863cc9c93975ec80f7f7ccb1940581e44d391f13ed84eec392e5458d388ff00655f1c650c929880ff00298fb786679190000549fb2075a9c523410822bcde40371e3bfeac7cbb91e6e2a39014a907a763ef98a05059bc37af4c5c27a69cc9e448f8abdfe471355a93237d91b053fc70b150f4ea0b9d80a506325503703af418240e41bf94751ef8928257d46ec680602120a1648790e9563fc70a6ef458666f5082b2af475d88c3e0395546c3b9feb8d7551b1e9fc720620b38ccc4ecc5cfe91b1fb3fbf88771b30feb8fb7d6e276e24f16eea7623e8387ef6e1c529b6155ee916f37da404ff377ca8c08e4dd1c913b482222d411bf686f82a3b90c695c87dc585ed9316b694ba8ff0075bff06cd69af98a4f4ae54c6ffe5743f4e0132362c8e3045c7767c93002a3ae2e926d5ee723f6f7e9281c5aa0fbe1a432d7be5c24e3ca1498822a3c7f5638377ff3db03a38fedc579f4c9db5d2e91cb0a0d877f9607914d18aed5ea7db16e55dabf3c6b0a2febc520d21d948a577a91c47eac4d94d2877a7f9d714721deabf654903e78d1535af4c0c8a9576ad3aec298c23b935c5c8db91dc0240c0cd4627c3afd3e18a2ad0ed563b74f1c4e4141bf7c5a47118ad36ec3e6318226ad5f76e9ec322cabaa08c7bd5ba7619624325238c7cdbb0c10d133d40d9475389b288c71514030553306fdee754452a0fceb85f3a0e249fa3177667dc1e2077f1c0f29fd9e5b7f0c81ddb63b250e65b4b81756878cabf711e0d92fd1f5b8b5188106920da48cf50d91798a92401858b7173a75dadddbec01fde27f328c11910ca70121e6f530c1ba1ae31d49ea6aa3a7b616e95aa457f024f1b6cc3a7707e5866afcabd9bbf6ae5bcc38dbc4d7729991e35d803efd7eec0dea12401d7de83eec18fe0050f860592b5fd62980b207c94dd89aa8353e381a5453deac4fd1f7e09a0a934a13d0e253baf4a629ebb20e8796df7635579722475c509a927615db1aa454827db03353a2ef4c4d9ab8f76eb81c0690d17e8c892cc0dacad673fd98ca391402a0e0f86c87edefed82440176029f2c9c2129354b281b0dd239209c8af03c7c6980db92b51864a1a21c48a616dcda8604100d7c7c7d8e587191d588cb7cc24b2209015f1ce7be6dd18dacdfa4214fdd39a4c07663d1bfd96745921921626b503b1ea3035edac37d6ef14a81d1c71653dc6089a2b960271af97bde36478636b863abe992e957af6ce094eb139fda5fecc03c41cbc175b289048ea16d72ea7158edd9fec827e4305c7a65c353e0a7bb1a6498a00027b63844cddb0dd34b23edc8a3d80ae084b2b65fb459fe7b7eac552416eddc507be2d1d933f404fc861d88e08c5444aa077341faf37d6109a27c47c1016ff88e2a96269b21fd8ff8234fd582134ca7da603fd51fd70c122bd93ecc0c078b909fd5b174d32e9fedca89ec0163f8f1c347b916972d85b2eedf11f738b2c70a0d86d8669a445b196691fd85147e0305269b64bbfa218f8bd5bfe255c3c256c245ce153414af8753f863c24f20fddc2e7dc2d3f16a6485228e3feed153fd5007eaca7c3c3e68b6272697a8c8cce54283d0123f86029e09213c245e2c3623260f857aadb09613281f1a753fe4ff00660315b673f917abac77da9e872353eb08b7302f8b4755929fec1973ad6b6a62823d41139b58c8b7057f9a31f05c2ffb2b77933cc3e56d5e4f2f798ec35543458265f5878c6c784a3fe009cf57f28e785644a3c6e032f70cac3f88c23920f379e5edbadadd4b0466b12b5616f18dbe389bfd946cb880c34d4ed8a45e994a4ba7b8b5723bdb3d64b193e85e76ff00eb4785595c86ec9501a1c762637c78351815d9471d947156b36565e2a9ef96d7f79237b81929c8cf96e815893d58e49392f8e2abb36379af8e6e6be38aaecd8de6be395cd7c7155f9b19cd7c73735f1c55766c6f35f1cdcd7c7155d9b1bc97c466e4be38aaecd8de6be39b92f8e2abb36379af8e6e6be38aaecd8de4be39b92f8e2abb363792f8e6e6be38aaec4ee056261ed8ee4be38c9597d36dfb62af3bbe5e1793aff967f1df03e0cd5052fe6a7720fe180f156f366cd8ab60e5e3465d7155c32f1a0e5d6b8aa9dc482285e43d40dbe7db39e25355d6d9cef146695ff253affc13649fcd5a88b6b46890d246f8569d7937fcd2bf1612f97ed3d2b57b86d8c9f0ad7f9475c9c420b5a89482d2fb5190d3844c918ff2e5f8569fec739fd9db4979750da462af3c8a8a3e66992bf3b5f2ac56fa644c0b3319ae00ec7a229c4ff2fb4e375abb5eb8ac76684827f9dbe15ff8db0ccefee58f27a7c10adbc31dba7d9891517e4a38e29959b2b4b7959b362aecd9b2b156f2b366c55d959b362aecacd9b1576566cd8abb36566c55d9b30049007538bfd55e95ae2aa19596415254f51958abb36566c55d9b36562ade566cd8abb36566c55d9b366c55d9b366c55d959b362aff00ffd18844d35ecc1230483d4e4cb4ad312d61f51d77f7cbd13408e155665a1a77c33d41846ab021a039967d3127ab5c4714804ebcbc39ac93914df8ae1d17c2dd1e21058a01fb5b9383493df3025224d97611880282fa9fa32c1a1c487daa57638ead452bd3be41952a9241ebed89115d8f4cb1bf7efd32cfd9c2ab096258b6e76a53c3c32949a5147cab97d0eff4626c4aef4f86bd07507fa60640ab8f11400ec476f1db307a906bef81d650495a103a5287efc7b11d4743d0e1b45398ec477046f9464e271167a11cba763d88388b4942c7f0c892cc04509577a75f7c4251eb93cb78d3aff94c7b0c404a694aefd2b8f5701683603a78927ae0e7b32aadc2d76dcd7a8ea7fa623f6cf13d07daedf218f90d49ee7a003c4f8e68eb4db73e3e3e2d842f45c40142bf68ff0099c7542a723db7047f1cc82bf1f4afeaca4512c803ff0074bf688e84f864bf4b12bed52ac667d9985501e807f6e2f1104b4c763d233da999ff00787d38b70dbb7b018fa72609f655568ca7f5611f8f7b03baca3355c8346fb03b7cf133c9ea83f63edb0f7c50d68aa0d588dbdbc71a0a221af7af23dcd7155290872aa9b2d3e2a7618c95fe12bf2dc74fa71e54c43e2d89a13f4f6c4d8d14a8152e4003df0243437e2136a0f88e5853d5baf6f6c7fa7e9a01df72c7df1279a8b5a50af6c79735e7c97b7c2013d3a30ef88491b3549d9474f7c5a052e1649b75fd90734f22942a7aee4644f248d8a4b77183514c8f5edac7202aca1877ae48eea84d077c2cba402a065120e4c2554c6967bad2dc3455920ee84d481fe4e4af48d6e0bd8d4ab827a11dc7cf23d731ee6b84ee2e2c67facd9b707fda1d9be7822486728893d6a19830ae0857c85e81e628ef47a7255255a0643db2531ce18541cb849c59428a3830a653b773f40ed892b6d965ab515c36c69cbf657fcfaef8ea0e9de94518d5a9fa3154ebcbbd405f6030852a526f48ebb7427c29be0598134551bf87cb0c1c20219ba50fde71031127d461d7a7cb12908055124b573f60547b9e99a5a9611a902a695ef825d579296d8114007ebc458223020f226b451e1d0e479067cd7b2a8a2c6361b0f1a60398023c078e0a49295661422951ed81ee24009ef5c248a63c345053004517a6174a08c329853e13d7bfb6009abd3c0f5c810d919210a0353dfbe04ba88303835cf1c04ec0f53d705360286d37509347bbe553f5690fef17c0ff0037fcd59d0eceee2b98c3a90c5b714ee0f86736b94560475c15a06b4d6330b1b86ac4c690b1edfe4ffcd3862698e48dee39bd2d4d41ee078ec462320de87afbe216b76b200d5ad46f8abba93d7e593b69176a2cbd41c073835a0dc78e0c3bfbe0791493b6459c4eea200eff00e67136214edbd7ae28569f3c4a5341cb016c1b95066a9000ad707dada855a91bfeac096317ab357b0f1c3b58c0141d464b0c388f11e41af3cabd210fc69b536ca3d70432fdf88914eb997c9c7586b89b22b8a77c51b1326980a4040dc5986ad46144d68f0b55775eb4c92160e29df01cd106a8a655201b224b08f30e8d16a96dc4821d0f28d878f87d390d4b082234f4aac363cb7df3ac4d6dc09daa84ee0f4c82f986dbeab70b34207a5377f7eb8711a3c27e0d1a9858e31d39a52108140028f6cbf4d8f40cc7c063e33cb73be0c8b32045c3b4347637327eca463fca3c8fdcb8217480dfdedc39f108020fe2d8363c5a992e108b2814d32c62dc4219bf9a4ab9ff0086ae2d40bb0141e03156c4fbe1a45b80c5063063c62abc63c63463ab8ab788be2a7a622e71543be24406055b704508f638a39c4fbe0562d7b0982778c8e8682be1dbf0cf437e5279886b7e584b29dc35e6987eaf20ee62eb03ff00c0fc1fec3387eb56dce35b851bafc2e7fe2270c7f2dbcc83cb7e68b69267296577fe8d77e1c5fec39ff8c72713911b1a49dc3e81d6a148d96ea51fe8cea6d2fcf71048418e6ffa359f849fea34990f9e096da692da71c65898a483fca1e1ec7ed2e7479e28e78992450f1c8a55d7b15614fd47213a95ab84904b217bbd3f845705851a5b7634b5baf7ff009679bfcb4c641414ac1a1c7834389e381cad2a9947281aed978aadcd9b362aad05dcf6d5f48d3e78bfe98befe61f7601ca38aa38eb37dfcc3eecafd357ff00cc3eefedc0272a98aa3ff4cdff00f30fbbfb737e9abffe61f77f6e00cac551e75abffe61f77f6e6fd357dfcc3eefedc019b15477e9abff00e65fbbfb737e9bbffe65fbbfb70bce51c5530fd397ff00ccbf77f6e57e9cbffe65fbbfb70bf2b154c7f4e5ff00f32fddfdb97fa72fff00997eefedc2dcd8aa63fa7350fe65fbbfb72ff4e6a1fccbf77f6e176d958aa65fa72fff00997eefedcdfa72ff00f997eefedc2dcd8aa65fa72fff00997eefedcdfa72ff00f997eefedc2dcbc5531fd377ff00ccbf77f6e51d6efc820b2efedfdb85f9b155d2c8d33991fed1eb89e5e6c55acd97958ab75cc72b362aeae6790451b487f646df3ed95df23fe67d5bea76e6188fef18f14ff5a9bb7fb0c2158eea53beb1ab2c119e4a8dc0378b1fef1be8c919f4ad2d8b9da1b64aefe0a2b851e5cb0f4e36bc71f1bfc3193e1dcfd380fcebaafa16e9a642d4926f8a6a7f2787fb23960d85a0eec2ef2e65bdbb96e6524b4ae4d7e67a6759f26697fa33448b9af19ae4fad257ad0fd81ff039cdfcafa5b6adabc16f4ac484493f8705dcfdff00673b40000a01403603db2b252ecd9b3605766cd958abb366cac55bcacd958ab7955cd9b1576566cd8abb2b366c55d9b36562aad6e2b28f6df0cb6a614c7218daa060c174bc2a763fcbdf1550bb1492be2303e3e594c86a45298cc55d9b36562aecd9b2b15766cd958ab79b2b362aecd9b362aecd9b362aecacbcac55ffd295b95853a500ef84a8c2e6eb97da5534c5359bef46328bf68ec060cd0a08c41561576eb5f1cb7512dabbd969a3bf17727765b40abd874c11535f6c6220440065f2aef9865cc0bc9a508fa32c9a547d389d6a283e8cc1ebd4f4c4a42ad40df306a0a53e9c48b537afb6533506db620ad2ab6e36ea3f1c696deb5afbe5d471e9b624dfe4f7c28689de876aefeff7e62c7a11b9fb8e26c4d2bd29d0f4a6265c8f707a8af7c0c974bc48f6ec3c303390283ee23a8c50b72a82057b11d7106207d3e1912cc3abb9af4cb566eaa694fa36c6d763eddf1aa7aec69e19166ab40d4f0ee475dff8b63aa361d07876f618816a7b0eded8cf5b70a3a75c224114517cba8ad3e5e18a2920854a0afd903b0c08920fa7f57be0889c54b77f7eb4c9836c0844c7c63e5d6a760dd3a65b3509a6f5a6dfd0e222500f2ad31c8e0b733dba536fa70b156525097620311bd7c3c3038218b1268b5253dcff00663a59366a6fcf61fab18c578506c147c20e37f62405f23f31c9bef3e388c0cb569181e85633dbddb3485995631b1e95ff00891cc403f0274028bfc305ee9ad950316f84fed77f976c4d2159a62c778e3a7d3ed89ccc6ab1a7db63451837e086058d4d58805bdc9c3ccefd104572eaa531e2a40e836185f2cb40457ae089d89f86b41dfd86029dd771d3212298f9a1a4a005dba9c2db820934c173cdd4617cec7a8c816d052db93f15300cca0ec7064f20afbf7c0123fc59121b3892e99248255b8b76e12a1a823bfcf25be5ff003225e0f467a25c28f894feb1ed91a928dd7a60091248a41342c5245355618420d1e6f618670cb5af5c14af51906f2ff9805da08a63c6e1281d7b1ff2864bade6e62a0fcf240b54a348e5a531443414f0e871053beddf15ad0649ad55c06741d86e7e7e194e0ee2bf0ee36ebb633d4a9dfe8fbf31942fd036c36900a1e615aaf423a9fe18155963a9a54fd9dfd862b35c03f0a8af8603328007fac7f80cac9dec37441a6e49eac5f89269b81dbb6063cbed934fe5fa3be5b3d5c802a4b529e35c4a59687db220db223a069c8ebdcf5c0b3d0fcb1e5eb5aec6bd3db119cd46d9305ac8dd013bd36036c0afed82276153818a96e837c5921e5eb4c2eba8b9035d88e8461ab253af5c0f2c408c04320519e5df313a48b6376f4906d1c87f68787fad9348ae56403b7b8e99c9eeedcd79292ac37561d41c3ff2ff009899c8b3bc6a4ca28ac7a353fe36c5128f50cf838a8a1fa32cf5ae0186e56402870589011fc7241ac8537201f7ed81a661c77ebdf04bad4570248010c0e44b6c11ba4440c6d27bd30cc8a600d288f40a03d0e1853c732b157000e3e6fae47cd4c8ea703486bd305c836c092d572522c6210d23d3ae25ea83b1ca95c9c0dca872b326f10d911ca86b8ea86dfbe23c81d8e60c41c8da385a9a3aa9ae44b54b4179a74eb4aba2178fe6a790c94decfc2d647ef4e2bf33b0c2b82214e045430a1fa723c5530474418dc240f5d9e730f6c1d10c0de9fa72c91ff2332fdc6982e2199cea4a2a318b62718c530a14db13c51b198ab8628318063c62abc65e3463b1571e9883e2c7a620f8aa83e27df1ef89f7c0aa811654689fecb82a7e9c89dedb3dadc3c2e3743d7b11d8fd392b8cd18606d72c3eb16bf5c8c565847c60774ff9b7048243d8ff0029fcdabe60d0469b74d5d434b558a4a9a9921e914bff0032df251ac5a3512fe287d792dd5d25b71d67b69052787fd6a7ef22ff008b533ccbe55f315df95b5cb6d5ad892a8dc6e22ed242c7f7887e8dd7fcacf54d95edaea96506a1632096dee10490c83bab7f1c41b083b6ef3fbcb74b69b844feadbc8a25b59fb490b7d87f9fec49fcaf887b8c92eada7a230b52dc20b990bd848df661ba7dde06dbe182eff67fdf771feb646d9595991d4a3a12ae8c285586cca7dc646412e07be2837c46b4c7827ae412b88cacbad728e2ad651cbc6e2aecacd9b156b365d32b15766cd955c55a39597958abb28e5d72b156bbe5e6cd8ab59b366a62aecbcd9b156b2f366c55d959b362aecd9b362aecacb3958ab59b2f1aceb1a9773b0c5542f6e92d20691d829a56a7b0eed9011eaebbaa72dc42bb0afeca03b9ff00598e0bf31eab25fdcfe8fb7f896a16403b9aed18f961ae93a7ad940a9feed61595b2710a51524b0d95abceff000436e84fd0a3393ea57efa8decd7b20a190d556bd00d80c9579cf5d26ba3da37c269f5a23ef54aff00c33615f94b413ad6a6a255ad9dbd249cf8d3eca7fb238c8f450ce3c8da29d374cfadceb4b8bda3907aac63ec0ff65f6b253940050140a01b003c065e415d9b2b362aecd9b2b15766cd958ab7959b362aecd959b15766cacd8abb2b2f2b1576581c980f1cacc0906a3ae2a8d8e1451efe389987f7c0f6eb88faf278e57ad278e2a8b785187be0275e2c57c31debc9e38c24b1a9eb8ab59b2b362aecd9b2b15766cd9b15766cd9b15766cd9b15766cd958abb366cd8abfffd3bba2d7ba9ac62a429a90725d650fa0a8b4dbc722da042d7976d32f466fd593d10d10023a60cc6e45c9c42a03cdbd8aec7122698b2af104624cb43bf4ca8b65eeb0b1076fa32891f6877eb963a143dfa1c6f46a1d81d8e0640ae635151dba8c782282b88f20869e195238039afd9fd58a55f96d5076ef89b4806c702fd640ef884d76b4a546368e145c8e295eb4ee3ae22ee00a86dbc0e173dfaad4120e247514ec6991e20c80298b3d7a0a786fd3e9c49e4247c5d7bbe0037caa766c4db504ad6b4af5c892c8046faa06c687bd72fd6af7e8361e38532dec7d430f6a6313538c10acc3e9e981904e7d51dfb6d945f8fc5d7a6035995be20773f766f5abb12287b8c14c823126a6c7042495d8fdf857ea152093b62a938efe35c20a084d164db7c552415a570bd66538a8714d8d0e4c498108c2dc9abe1f46517ab28ec4d69f2c0eb29a0df30600d41c36b48a5ddfe2f03bfb9c715f4d8906b8144d820387526bf10d87d3dfe8c6d5bb7056b75281c8fc283c07f3626d20f509afc237fbc571691d02051f6146c060163f13b9fb208503c481809aa0988bb2d4ce1c93bf151527c7c07d385d3c94a926a6b8bcf7009214fbefe385b3c9463dc640c9b04142693afb60695cf135cb99c5703492803e588410869a86b5c2f91e84e089e5ec302b6fd71485363e181e45eb82695394f1d37fbf14da5ac648a459a2629221aab0c99f977ccab71c60b8212e1450ad7afbae44a75006fdf013a4a8c2453c08dd5ab4231e6a46cf6bb7b957dc1db04faa1b39b683e6c552b6b7d200e68ab2528a7e7e0726d6f76ae050d70df7b518a67cb1096424104d0634480ee318df17f1c04b28a9bbd76501478f73883271f88d7875fa7c062b2023ecf4c41b939a1eddce44b602e2db7202941b0f7e9be0573c77ee304b0a2d17afed1381dc0277dce34b6a27c711948e2462ee941b6039988d8e48313ba0df916ae57100feb18b0a36ff008659551bd373920aa1e9d77c0d26db536c1af4f97b6039ea7ec8ad70129012cb9008384d72946e4a68c0d411d41c913dab9153b7cf0bae2d52a77fc0e0a2cb8823f42f323725b6bc3493a2bf66ff009bb2636f742400839cb27b220fc0c09eb4e870e347d6ee2d4ac377529d15cf51f3f1c51b3d1cc840ad76c46425c54751806dafd655041041e8706ac81bfae1651d9d65746da600ec1b240aeaeaaca6a08c8dc91f2f8875c31d3eec57813461f6d69d3fca193c73e134791619a00faa3f14d8814c05723638380057c46049c541cba476688734ae45deb81986fb60c707033293b74ca4972429a935f6c7d4626471c4679d6dd3d46ebd14789c16a4286a1287923b61fb1f1c9f33d07dd8d8d82efd860646676691f777353896a571f54b09e5068dc0aa7facdf08c8c77901de5864223037d0596165b9cd23f66766fbc9382a2c0b1ad060a4db3621d3145a1db1f5c410e2a0e1434d8cc79c6e2ad8c70ca1963155c32f14b6b796e5f8463e64f4030d86869c7776e5e3b7eac6d5246e98839c34bdd365b55e60f3403e23d08c2a7381541f198f6c662ad8ea30c6d882287707620f8616f7c1d6adb8c558bebda5b69d75541fe8f355a13e1e29fec727df93fe771a6dd0f2c6a5252ceedcb594ce6822988feecd7f626ff939feb607bad3e0d52cdad66dabbc6fdd5c7d961ff1b673abbb5b8b0b97b7b85e134468c3f5329ff88e439165cdf5e5e5ac37504904e81e29415910febc885fd8dc3c86099bd4d4add2a8d4def6dd3fdda3c6eedfecccbfeec4f8f007e5779f07982c9745d4e41fa5ecd07173ff001f10aedcff00e32a7fbb3fe0f267aad825e42a0318a6898496b729f6e1947d975ff3f8bec364b9b1e4c0aa08a8dc1e872c1a60fb9825b8927e517a7aa400c97f6918f8244ff96db41fb51b7fbbe11f146f85f504546e0ee08c8483254cbeb89834c757b8c8ab7959ab5cd8ab54cd979b156b28e5e51c55acacbcd8aadcaa63b362ab32b1c72b156b2f2b362ade6cd9b15766cd9b15766cd9b1576565e562ade566cd8ab8e565e57404f61d71576d4a93403727229e64d70c03eab6cc0ccfb6dfb0bfcc7fcafe5c15af6bd1d9c66184869dbec47ff1b37f9391cd334d7bc95af6f4960e796fd58ffcd39201515a1699e901773ad646feec37515fda38335ed5868fa79994729643e9c40ff3115afc9704dd5dc1a7dac97739a244b5dbee006733d53539f56ba6b89cfc22a234ecabe03264d0455a1a28ee2fae9638c34b7170f451d496639d9bcbda347a1e991d98a34c7e3b8907ed39ebf42fd95c8f7917cb5f548c6b17c94b8907fa2a1fd843fb7feb364db2b29766cd9b02bb36566c55d9b36562aecd9b362aecacd9b15455b401c736dfc3051823a741f76680718c0f6c57154b2e62f4daa3a1c4307de0ac64f8617e2aecd9b2b15766cd958abb366cd8abb36566c55d9b36562aecd9b362aecd9b362aecd9b2b156f36566c55d9b366c55d9b2b362afffd436f245b94816561f685726cc29be107962109a6c5414a28c3f06a37c8cb725c9e400ee5b4c4e45a8c5e9b624ddeb9129050b202a2a3e8c499b98ff002862cddfc0e079148f8d3b75c816d0a6cdc8507dac0cf7056a0d6bd31f2c9b721f4e059254702bb1f6c896610575249f132371f9f4c24babcbb50687efc37b934af7c23bd35ae56436022b931dd5b58d46de191d24a301b0a77391293ce1afc721a4ca47815c91eb6b4818b74ed5f13b64465d3ae2573e9c6cf5e9c413fab323143d3645b8b9f2112a06b6e88c4f3d6bc9f68c6e3dd48fd471ede7cd5cf58a2f7fb5fd7009f2f6a407392031275e529118ff00872b891d2eda3dee2fe143fcb18694ff00c28e3ff0d967863f9ad1e2cbf9e51cfe77d59810a91afd04ff001c073f9ab5b9c11ebfa60ff2281faeb88b45a4c7d0cf39f1f8625ff8ddb1a27b64da2b48c1fe690b39fc4f1ff85c7c38f706272ccff114669de6ff003069ef58ae9a6426a629be35fa3f697fd89c9969df989eb009a85849157acb11e4a3de8dc4e405af27a5010a3c10051ff0a0622d23beec493ef89c713cd31cd923c8fcf77b45a798b4cbd005b5ca31143c090187cc1a618a5d02452943bd73828af5c1b6babea7654faadd49185e8bcaabff0002d55cace1ee3f36f8eaff009d1f93de239c1efb60a5986d439c7ac7f30353838addc31dc28eacb546fe2bf864af4df3ee8d745566736ae76e330a0dff00cb155c81c721d3e4da3363975af7b3a12d7a76c515ab504e16db5dc532892370e8c2aaca6a08f6230506ef5ed90a6c449e9b628b252b4381bd4f139838382d211466e54a9dabbfd181ee2634a0d94d76c4da50303cb216c8925b2214259363bf4db004b21f1eb8bcc7afbe039180ebd720daa2ec7b9c073c841dbe58bcafdb01befbf6cb03595190f5c4ebe18a31c4c54e4983946549b0271c761b637ed30f6dfe9ed80f72a9884d6a455bf56324b5520ed53e270c238f8ad4f5394d1d49a65d1800116914b6841db0cb49d72f34d2229b94d6e3a0afc4bf227ae5c91fb605923f6c8ca21900f43d3b5486f6149a16e4ac3e907c08c31125478fbe72db3bcb8d3a612c0682a39a7661ef938d2f5886f630f1b5187da43d54fbe56431213cd9b6389328cb59430dce6352be38a2d44d0ed81a5054ed820a9aefb6212a927f8e066149c82bbec4e17cf5c307078d700ce3a77ae14053896bb0c732f1a0cd0d06c7b63a5db7c2c87343c86bd32e383b9dcfeaca4019ebd97b60e44a28fc7258e1c46fa0639255b0414910a74c2f9edaa4ed874e9df033c7d4919798ecc2258ecd67ed81cc0cbd8118792ae0478f7caa41b42cb09e580d223bff00bec9d8fc8e482c7548a7aa1f81c7da43d4647c20af4c58db8b80086293aff7728efecf9014763b79a25c4378efe5fa997c5203deb82108a875a061d08f0f0c8859eb12dbc9f56bf5e0e36e47a7d392282e95d4104107a118ca263b487b8f4650c91c82e279731d47bc27d05cedb6e3f697c31520482aa6a0e13a4c430915be2ef4db042dc4c179725ad7ad08fd470899e477632c7bd857962f0c05310a093b6696ea4dc9607c283fa9c28ba9a49090ec69e1db2329f7067089eaa973788bb2fc4de15dbe9c2c964791f948793761d80f0199cd0ec37f1c4c9395d93cd9d00ac87efef91ff315efad3a5946d5587e2969fce7a0ff0062b82f56d5a3d2e10aa435d49fddc7e1fe5b7f939168199d8b31ab31a927a92732b4f8cdf19f83afd6661fddc7af345a2e2a0531a8314236ccb75eb90e2a0e065d8e2ca70aaf27365572f155c32f2866c5591689085b70f4ddc924fe030d8617e94f1fd56308760287e7df07d7225546ee35922643d18107e9c844a0ab329eaa687e8c9c5c385435c845cb2b4d2327d92c48f95710a876ca199b30c2ad1c156c68460638bdb9dc62a9e5a9e981bcc5e5f1ac5afaf6ea05f423f77ff1628dfd33ff001a62d6a7a61bdb9d86464c83c7ed6eef34abc8eeed247b6bbb67e4922d559194ff009f2cf48f913cef6be70d389902c3a9db80b796d51bedfdf463fdf4ff00f099cafcdbe56fafab6a7a727fa528acf10ff76003ed2ffc583fe1f209a66a77da25fc3a8e9f2986eaddb946e3ee2ac3bab7465c00a90fa9b57d2c5ec68d14ad6d7709e769791fdb89ff00e3646fdb5fdbc8b4f04934f2c5e8adb6a712f39ec53ec5c28fb57563f3ff0076dbfda5c1fe49f3d69fe6fb2084ac1aac4b5bbb3fc3d48abf6a23ff0009871ab6936da8c2b1cbc91a322482e633496171d1e36c9916c6eb9b0b560c011b83975a608bb59a3b9fabeb052def9cd2df523f0db5e1ecb375fabdd53f6fec3e20e924323413218e64fb71b751e07fca53d9972b3164d835cd5c665d7c722abf2a9940f865d7157651cbae51c55acd97958abb1a72f2b155a7365e562ad66cd9b15765e6cd8abb366cd8ab79597958abb2b366c55d9b36366963b74e4e773f657b9c557310a3931a0191ad7fcc4b68a6de0a34c7a2ff002ff94fff0034e01d6fcd0ccc6dac08790ecd20dd57d97f99f0aacb4edcdd5f1ab93cb8b1a927ad5f2402bb4fd3e4bc94de5f3170c6a39756fecc9146154100854404b39202a2a8a924fcb0b9aed4ab38611dbc63f7d39d8003f657df21dae6b4fa8c9e8424a59c6691a6e397f96f93e48e6ef30eb2faadd158588b388d2253b72ff2c8f7c39f26795bf48ca353bf4ff428cfeea33feed61ff1a2e04f2af95a6d66e05c5c0296119fde3f42e47ec2ff00c6d9d5e28a3822486150914602a22f400761959295e000283603a0cd9b2b02b7958636ba35cdc2876fdda9e8295382ff00c3af4fef4fdc31548f36185de91736ca5c7ef1475a0a1185d8ab7959b362aecacd9b157661b90336562a9a46ebc4018a570a90ba9e6bdbeec5daeeab4037c555ae4ab215af5c2ec7306ad5bafbe371576566cd8abb2b366c55d9b2b362aecd9b2b15766cd9b15766cacd8ab7959b362aecd9b2b156ce566cd8abb366cac55bcacd9b157fffd59b7972874d84f8a8c37a5308fcab27a9a4c07fc918784e40b905d5d8e2121fbb14ae2121eb912c87352620120f43815a4e04806a0e2cec08dbeec0521de83eec812dc028dcd77643f4615caed5f03865203f4f8620caa45197e9ef9022db226bcd2795e5de809f1385d70c5ab5187f2c005789afbe029adc1aee3032d8b08d5e48a1bcb5f5d82a28795030aab3ad3887f6c27d4fcdda94954b5905bc7d84202fe2061f79db4e0da60bb4fb56ce18d3f95be139ce1debb1dfdf3330cff7600da9d76a2159493d68ae9ee67b962f3c8d231eee49fd7889cbaf6cdb649a9aa66a65e615c52d66a0cbae5604379a99b6cd51855c4637a63ab8debd714a63a6eb9aa69447d46e5a3406a6227921f9a1db275a47e645bc9c62d562303f43347f147f32bf6d7fe1b39a656425089e6ce19651e476ee2f7cb7d62d2ee312db4cb2c67a3210460b13569befed9e7a59648ebe9bb257af1247eac96e8be7cbdb411dbdfa1ba8176f547f7a07bfecbd32a9613d0db930d4c4ed214f593283df6f7c4da41d6984fa7ebba76a6a0d9dc2c8d4a98eb471feb21f8b0716aee0e52625c98cc11b1b74cf5c012915382e435d8ef81645ae4785b0490ac0135c4645030498c8df18e95c900c64500d4dce35694dba9c5a44a123b6240536fc324c5a6dd72e1504ee3b803e8ca6e99717514f1fd788fa829e48da6d4195c4531451947321821644eb80a44df6c317ef812415f9e5726d8a08a571f03cd6b209a0728e3b8fd4716f4f1a52995164c9f4ad6d2ee91c9f04c06ea7a1f75c3c49474af5ce7f6f11667a1a10a483e046f924b5ba99022480b8a54bf7fa71aead7209f16e42b894836c462b8571d7152c08db0202816a820e0575ae0c750771f4e22e9f761640a102d2a4f7fe18c95c53166db63d0e079c8e3d37189661b8179d283ed1dfe8c30029b77c09642a15bb6f8300a9ae6461151f7b4cf995ae94181641b530732d703c895c994452b953be0574c31980fa702baed9549ba2830bbe09856b4a6338e2b16c6b951e6c8844dce9a9a84263a52e557940fe23f90fb57086d2fee6c24e1b95534689bb11d7e592d5fddb5a4dd89287e5b612f9aac3eab7eb728291dc8aff00b35f85befd9b2fc241bc72dc7470b53130acd0347ad26167ac5bdc8a2b717eeadb1fa306fd669df2094f0c5e2bfbb84515cb28ecdbe09e94f381f815c7afe9923f11fa9983cf514ae0591ebb6474eb570bd514fd2702cfafde0144545f7dce55f96c9d6be6dc75b87a13f2648eca0124d00ea7c323baaf9aad6d03436349ee3a7a9feeb53ff1be47750d42f2e6a2699987f2d68bf70c28ead96c34e06f237e4e365d6ca5b405799e68d69e6b999a7b87324ae6acc7a9c30b56e985718e98636fb533243864da688db62837c0c8d8217a6490dd31e32a98f518ab632c65819a98ab633658049006e4ec00c1f6fa4cd200d21e00f61b9c554f4fbb36b36e7f76db37b7be495274650c0d411b1c2a3a5451c4d4ab3904063e3ed806d939412317917d3af25534076ae0544eb37e0a9b68cee7ed91d8786475ce1ed8d94773031956a198d0f7dbdf10b9d108a98643ec187f118eca9213be38654d0cb049c255e27f03f2ccb8ab671580d0e258f88fc58aa756a7a61c5b9c25b5ed8736fdb225211ebd321de6af28ade73d474c402e002d35ba8a7a9fe527fc59ff0013c982f4c76569788d9dedf693791de594cf6d750355244346523b1ff8d973be791bf322cfccc89a76a3c6d758514e1d127a7ed43fe57f347ff0390af32794a0d5835e597186fbab0e892ffadfcaff00e5e7359a1bad3ee0c72abc13c47a1aabab0e8464c49045beabbfb1b7bd81edee2259a1714785c541f9781c89de595ee949c6557d53488c1f4c03fe9b663a9f45cff7d12ffbe9f227e4afcd731ac5a5f9a1aa80718b53ea7d9671dffe326755124177124f048b24720e51ca8432b29ee08d98659b163b8619198e5b517b6932ddd91eb7118a14ff002678f7689bfe49ff009597504023a1e870c354f2f23dcfe90d3e56d3afd7fe3e21fb127f932c7b2b7fc4b0865be6b4b8316b96ff00a39c9a2df5b82f692b7f3489fee92dfb5c38ff00c63c818b2051b97cbc71858ac7eb1e2f01345b988f384ffcf41f67fd57e2d975aee371902292bc107a65e279609181579cacae5e23289c55bcacaae6ae2aecacd958abb366cc715765e372c1c55bcbcacb18abb28e38e56d4249a01d49e98ab59617624ec07527a603bad4ed2d10bb3a903f698d107d3dfe8c88ea9e707998c5643d43b80e410a0ff929fb5fecb0d2b28d4b59b3d3e12cce078375affaabfb5907d4359bed5e430db06484fdadfe223fcb6edfeae17b89277371a84c4b1ea09dff00e6dccd7e235f4ed97d35f1ee72402da3618ed74e4e7210f3feaf963da669217bdbd6315a20ad3bb57a0ff6585125c4168a66b960f37ec5bd6ac4f8bff22e145ddf5d6a12033312a3ec463ecafb0186e91cd13aaead26a0c228c18ad13fbb847fc49a9df0d3cafe539f59905cdcd62b143f13f773fca9ff00356187963c94f77c6fb55568adc1ac70114690789fe54ce8d1c71c48b144a123401511450003b0190252d410436b0a5bdba08e28c511176006299b2b02b78374ab617374030aaa7c47e7db00e483cb910e2f21fda6a7dd8ab208d02280063f366c554e58d5d0823217a9db0b6bb6451456f897f8e4e3233e6388031ca3b120fd3fed62a90e6cacd8abb366cd8ab802c401d4e0c8edd40a9dcfbe0688857a9c17eba53a8c557322f122980a38c99789fd93be0b33c7e23182488316a8a9ebf462aabc148a1181e5b714aaec715f5d3c46534e847518aa032b2dc8e448e84e562aecacd9b15766cacd8abb366cac55bcacd9b15766cd958ab7959b362aecd9b362aecacd9b15766cd9b1576566cd8abfffd690f912e04da3406b5f8064a49ce71f9597e27d1e24aeeab4a7cb3a196ae465cdc81b805a66231191b6ae2adb8c0d274247d232b2ce28773435ea302cafbd7a62b23d0d0e20d43df2b2de141e723aefef88b4f1b62eeabedf4e059a2520d683e5828b214a524c3a569819e4181ae15d09e2f51e18024b8957be4096ca56d4add2f2cee2d9f712a32fd246d9c65502c924527da52548f91ceb0d77704ec3399ebb6cd16b173181c79bf35f93ef991a79731f170f571fa65f04b980534046d8dad0656e0efd72f321c3757372cacd815b24e6ae557e9cd46f97cf156eb9ab95c7dfeecb01476afcce156b90c70576e8a69e3fede6e6474a0f90cd527a9ae2adf023ed301edd73718c75ab7e031bbe5d3156fe11d001f8febca2c4ed53f2c72a1634552c7c00ae0d8347d46e08e10301fccdf08fc7012073349009e40940c72490b8921631baeeaea4823e44649b4cf3bead66552f08bb876146f85e9ece3aff00b2c0c9e589c50cf32afb28a9fe183edfcbf631eefca53fe51a0fb865729e3e4776e863ca371e965da4f9934bd6071864f4e703e2825f85be8ecdfec70d1878f4c8745676f053d289129dc28ae195bdf5cc438f3e6bfcadbfe3941abd9cb89901eadcf927656a313287718193518db66aa1fc3052488db835077eb819da19e2ae0678c8270c9a87a620f1d70a82973023188fe9bfc5b03df064911a605910e3c8db2e6988dd411d0e5914180adae4c748e43f0f40dd87cf0c010c32d1305810421a415e9811977c3168fbe07788f6c126c89428198807142a463695f9654592f810aab11d5be11fc72436014afc43dbe8184f690bcaeaaa2a4ecabfc72536760b1005cf4c31b3c9ab29ad95cd8dbcd0f33fbb91455645fe23f6b0a22ba53234458174d9a87f1c11ae6b50d8db98e32397414f1ce782f2e16e4dd239592b5aff000397470f10be4e34b51c0403bf7f93d0d5f91a57b6593dbb1c23d335c86e488e62229ba50fd96ff54e1da90c6b954a262688726138cc5c4d843cabe1f4604946c461848bbe069223916d8a8d9c8236e2de3b61aa0ae1348a54d4751b8c37b295668c11d46cc32ec52fe16bcb1eaac547860794506d82cefd3ae23221c9c8b18a57303814ad70c265a603607a532a25bc043b2d0e3e35a914c711e38e8b6614ea720528f24d2d221e2cff0079a65f9b82be95037749a80fb1047f0c0f6d29b8bc32a7d84a04f0a0cbf34cc069d6f0d77692a3e48a7fe6acb309b98f7b8daa1588df77dec471a463e9944666baa43b8c0538d8e1838c0338c0a93dcf7c043ed60fb91d70128f8b22528c852b4c31823c0d6c95030d218f6c215b55c5d066098f51850b80c7818d18f1855d4cd979b1547697089272e7a20dbe67240000323b637496bc8bd4d48e9ed83bf4c43e0df7602a9a36e298061b40893a53676623e44621fa621f06fbb37e9883c1beec1baa2ada2f4208e33d55457e7df2dce17beb500ecdf77f6e057d76dc766fbbfb702576b30abc06403e28fe207dbbe112e18dceaf05c44f100d56040a8f1c2d5e984217e3e2fb58cc745f6b0aa7169db0e6df096d7b64bb4cd1da58c493122bb851b53e791290a2bd31d876346829dfefc037960d6c39a9253bd7a8cad283c2bd6741b0d6e1e372bc675044570bf697fe6a5ff24e19e5e2af1ed67cbd7fa2c94b84e5131fddce9ba37fcd2dfe4b60cf2c79df59f2bc82381fd6b166acb6726ea7c4c67ac6dfeae7529618a78da19d1648db66470083f41c83eb9e43079dc68e6bd49b57ebff003cdbfe356c902af4ef2ef9d744f33a05b597d2bba55ece5a0907fabd9c7cb0d6e6ce29d190a828db346c2aa7d8839e6596deeec27e2e1e09a33dea8ca7f03933f2f7e686afa5aadb6a8bfa46d96803b1a4ca3fd7fdbff6596098eac4c7b99edcf97a4d3a6371a24eda748d5e51fdbb771dd590edfe7f630b9f5392c084d62c5edbb1bdb1f8e2f9bc2765fa3d2c90e91e6fd0b5e8c7d52e53d561f15b4a4249ff0002df6be8c52fe3b26e419c44e77a1d81ff0062dff1ae1e107922fbd28b4ba86f539d9cf15e0ec216a49ff225e8dff01cf151347c8a31e0e3aa382adf73645f5883498a42ee023f559e0251abe3f0ff00cdd80e2d6754b6016db505bc840da1ba5120f954f2ff0088e4250640b37a66a64423f37a20ff004cd39a23fefcb490f1fa51fd4183adfcd9a44b406f1a26fe59e2dbfe0909ff0088e47852c869958023d5ad25de2b9b6947f933053ff03271c5c5dab528bcbfd4747ff88938384aabe6c4beb03fdf727fc0939beb0bfc8fff000071e12aa9947123749dd1ff00e04e2526a30c7d68bfebb22feb6c784aa2736154dafd8420f3b8857dbd4e47ee4070b2e7ce5611ff0077234a7c234a0ff8273ff1ae34aca6b899b9890d3954f82ee7f0c81dcf9c27936b7b6dff009a662dff000a38ae145ceafaade544d72517f923f847dcb4c695e837fe62b2b104492aab0fd9fb4dff0000b917d43ce135c552ca3247fbf25fe083e1ff0082c8c71506a6ac4f739b91e830d2a22e2e27bb93d5bc999cf813d3e8fb231827080ac4a057be24159f7edfcc4d07de76c464bc821a841ebbf63b8407f5be154412cc0bbb00abd5db6518164d4847516a3e2e9eb30a9ff60bfb3812492e2edeae4b1eca0500ff005546c3251a1791ef750a5c5e56d6dfb73079b7faaa7fe24d82d698e59d85dea33ac36d1b4b3487a0dc9f739d23cbde4ab5d3825cea216e2e850ac7d510ff00c6ed920d374ab1d26110d944107ed3f576ff0059b06e0b5766cd95815d9b366c55d928f2f8a5aa9f124fe391702a401df6c97e98b1c16c9183d075c5532ae6ae34303d3357155d5c23f310adb57c1861c9603a9c2dd59639ed9d2a2a46c7dc62ac473663b1a6562aecd9b362aecacbcac55d9597958abb2b2f2b1576566cd8abb2b366c55d9b36562ade566cd8abb366cac55d9b36562aecd9b362aecd959b156f2b366c55d9b366c55d9b36562aff00ffd78afe516a5e9cb25a31e86a07cf3b5f3a0ae798bc95a99d375a89ab4593e13f3cf48da5c89edd2406b5032336f81b8fb91658f5181e46f03438e24f51f76212904546544b6c428ca037daebe3811d594d41ae2ce49e98896206f902dc14de407ed6def8126e34346ae089195faec7024b157a3644a4206615ef809d501ad37c1f2447c702491d3be0a676847009db229e6ad25a429a946a5822f19a9d40fd96c96b0a62658529dbc32509189b0d7922271312f21947262e294f1c67c206edf76f93cd5bca76f7acd35930b773b94a7c04fd1d321b7fa65e69d298ae632a7f65bf64fc8e6546625ef70678a51e636ef41d47b9fc3357d86620e6a64dadc4d737cb1786ceeae0d2085e4ff5549c34b7f2beab280ce8b0a9fe73bfdc301311ccb21191e409492872e9e392db7f27c7d6eae0b7f92829f89c348341d26de9c6dc391fb527c47f1c81cb01cb76c8e099e741814504b31a451b487fc904e18c1e5dd5a615f47d353ddc81f875c9f471c51285891500eca00fd599ced90398f414d834f1fe224fbb66167cb6f0ad679c57f9507f138adbe9566adf1297a7f31c39be7ed80a3346caa59267afc9b638718fe11f1dd1b0410c4a0468a83fc90060c8f0346d5a6094c0d954b6518c5c524c62e2c5500ae382e61d3144df0ab5c6b8e5e6a6aa48c7f1cb0314aa25d48bf6b7c5beb4ad4a8a1ef8182e5f1c5368ae4ae36c6b46a46200531e19bc7148929bdbf8626a2589be1634f0c1419c6fd7317a8dd2bf2c0c84d5629c3801863e40abf6be1f9ed81283fdf6df763d1189af0627c4ff006e1e292fa7bd6bf06fb20b1ed4141f79c7456ecc472ebd9460b8ede46eb441f79c1b0dba26ff007b1c1449dd4e4006cbec2216ff001d2b2114f90cda96acb690b7c5bd3016a3ab43651900ef90cbcd466bd939393c7b2e5f8f113ee71336603ccaade5ecb7b3191ced5f84620313538a0cca02b60e1124ee578c3ad375e9ad78c57359211b72fda5ff009ab0901c70c128890a219427281b89a7a05b5dc3751892260ea7c3156407a6406daea7b4904903953dc763f31929d3b5a86ee91bfeee6eea4ec7fd5398b93098ee370ec30ea633a0763f7a364871281dad270ebbab6ce3dbc707ece3107801ae53641b0e58208a2988e2ff00121ae548091ef816097d1e31b1a0dc063b7df860119c52953e232e12121e6d24189f24ae64f1c0ad18c379a02a096a2a8ea5b6c28b8bb8636e310f59bc7f67efef95ca836c657cb750743466242a2f573b01815a4f52b1c44f13b33f427e5ed9a669ae64e521d87d941b01f218a451f88cac9b663bca36cc0401474c27f305dfd62f042a6a96cbc07fac777ff9a7075ddead8dbd46f3382225f7fe63feae46ea58924d49dc93dce6569a07eb3ee0ebf5b947f7639f32bb288cd97994e02938db01ce3ae0e6c0b32ed8aa4b74b8040f8b0cee57ae1781f1e44a532b41d30de1514c2ab4ed86f0f41842154a8cd9672b0ab631d9431c315765e6cd8a1d959ab958abb28f4cd98f4c528794e0195b064c7004a702b4a77c128701a1df0521c55571f1fdac663e2fb58aa7fa343ebddc519e95e4df21be747b650aa0640fcb09cae99bf957f59c9ec3d06424908a1d311ba884913291b114c581db1b26ea7209624ca558a9ea091f76562d74297328ff002b11c55bcd959b1541ea3a4d86ab1fa77b087a7d9906cebf26c83eade41ba889934d6fac47b9e068ae3e8e8dfec73a2e6c6d5e1935a5d59ca564468a443bd415607f5e1c59f9cf5db48bead3cab7b6c3610dc8e741fe449b489ff059d4aef4fb2bf5e179024c2940587c43e4c3e21916d43c816b312f6337a75ff75cbb8fa1d77fbf24255e4ac66e35ed3ef072e125bb9fb51b1e69fec5c7c5ff0004b8144b131e513fdc715d43ca3ab58d59a16641fb69f1affc12ff00c6d84ad6d3444865208f0c377cd6938134a0539547befd3299cb6cc01ae1409a743b39fa7165be947500e2a8ee11d7ecd3e596011f65987c89c08b7e0fda423145bd84f5dbe78aa2966b94af09e45f931cbfacde529f5997fe08e061756e760e32feb300afc636f7c0aaad25c37da9a46f9b1c4cad7ed127e671a6eedc7fbb0631af2dff009ab8aaf01076cb0c07414c0e6f611d057e8c635f6df02efefb62a8bab11946837634c2f6bb9dcf5e23db12a4ae77a9f9e2a9835c429fb553e037c45afe9fddc62bd8b6ff00f0b822c3cbbab6a240b6b67653fb64517fe08d17257a77e5d3d55f52b8551d4c717c47e5c8d171b560ccd7376df112fe0bd857c146c3245a4f91f55bfe32ce9f5684efce5d891ec9f6b3a369fa1695a628faadb2871feed61c9ffe08ff000c31c16a92e91e56d2b48e2f1c7eb5c0ff00774b4241ff00257ecae1d66cd815d959b362aecd9b2b156f2b366c55d8ac7777310a472b01e1d7f5e258bc5657339f810807f69b618aa71a56acd21f46e1be3fd93d2a30efd64e3cab910bbb192cd11ebbd77236a1ed8c3a85df0e1ea1a78f7c5535d5756756f46dda8dfb4dd69ed84d25d5c4a29248c478741f8608b5b092ee26901a357627bf8d7109acee61279c669e23718aa866cd9b1576566cd8abb366cac55d9597958abb2b366c55d959b2b15766cd9b15766cd9b15766cacd8abb2b2f2b15766cd958abb366cd8abb36566c55bcd95978abb366cac55d9b366c55ffd0e07148d148b22ecc8411f467a1bc91acaea3a5c679558015fbb3cec327bf973aff00d42f3ea52b511cd53fa6022c3663347def770fdf1297f9971249c3a0753504571ad26f9417262a6eca7aec703c8c7b1ae2d200c2a0d0e037e6a7225b0529bc9c4d08c0f24c00dbeec5646af51819950f5c8eecf642cd3935a605691bbe0a9513b6049081b5315d9459eb89ee71ecc3c3186b850b946f9ae2dadeee230dcc6248cf50d94180c786ae141dd233e4fd199b970929e1cf6c170683a45a6f15b2547ed37c47f1c332d4189312d84ce47a96221106f847c94e8aa38a00aa3b0db1191b7a62cdb0c0f42c722c96b31a5065aad063b8e3a98855326988c92501c524380e76a29c28404edcdce31577c7756396064590444582976181a2db052f4c21495ac730ca6eb8e1be285ea7155c49462cb850aca2b8ee38d538f0d8abb88cba6516cc186296f2a872ea337218aae15c7a8c606c5537c5570ae088);

-- --------------------------------------------------------

--
-- Table structure for table `project_vacany`
--

CREATE TABLE `project_vacany` (
  `Project_Id` int(5) NOT NULL,
  `Project_Name` varchar(40) NOT NULL,
  `Project_Conditon` int(3) NOT NULL,
  `No_Of_Vacancy` int(3) NOT NULL,
  `Opened_On` datetime NOT NULL,
  `Status` int(3) NOT NULL,
  `Closed_On` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_vacany`
--

INSERT INTO `project_vacany` (`Project_Id`, `Project_Name`, `Project_Conditon`, `No_Of_Vacancy`, `Opened_On`, `Status`, `Closed_On`) VALUES
(1, 'FHLB-NY', 1, 5, '2017-06-01 08:24:13', 0, NULL),
(2, 'Havertys', 1, 3, '2017-05-25 16:17:00', 0, NULL),
(3, 'ATLANTA', 1, 3, '2017-05-18 09:00:00', 0, NULL),
(4, 'ZIPLOC', 0, 2, '2017-06-02 17:00:00', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `QuestionDescription` varchar(100) NOT NULL,
  `Option1` varchar(40) NOT NULL,
  `Option2` varchar(40) NOT NULL,
  `Option3` varchar(40) NOT NULL,
  `Option4` varchar(40) NOT NULL,
  `Answer` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`QuestionDescription`, `Option1`, `Option2`, `Option3`, `Option4`, `Answer`) VALUES
('Which is the capital of India?', 'Mumbai', 'Delhi', 'Chennai', 'Hyderabad', '2'),
('PHP stands for ________?', '', '', '', '', '0'),
('', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `uid` int(6) NOT NULL,
  `final_essay_score` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`uid`, `final_essay_score`) VALUES
(2, 2),
(3, 7);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(3) NOT NULL,
  `role_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`) VALUES
(1, 'Candidate'),
(2, 'DeptMgr'),
(3, 'HR');

-- --------------------------------------------------------

--
-- Table structure for table `sampleq`
--

CREATE TABLE `sampleq` (
  `uid` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sampleq`
--

INSERT INTO `sampleq` (`uid`) VALUES
(2),
(3);

-- --------------------------------------------------------

--
-- Table structure for table `scores`
--

CREATE TABLE `scores` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `right_answer` int(11) NOT NULL,
  `wrong_answer` int(11) NOT NULL,
  `unanswered` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scores`
--

INSERT INTO `scores` (`id`, `user_id`, `category_id`, `right_answer`, `wrong_answer`, `unanswered`) VALUES
(1, 13, 1, 0, 0, 5),
(2, 13, 2, 0, 0, 5),
(3, 13, 1, 0, 0, 5),
(4, 13, 1, 0, 0, 5),
(5, 13, 2, 0, 0, 5),
(6, 13, 1, 1, 3, 1),
(7, 13, 1, 1, 3, 1),
(8, 13, 1, 3, 2, 0),
(9, 13, 2, 2, 1, 3),
(10, 13, 1, 3, 1, 2),
(11, 13, 1, 5, 1, 0),
(12, 13, 1, 0, 0, 6),
(13, 13, 2, 0, 0, 0),
(14, 13, 1, 4, 2, 0),
(15, 13, 2, 5, 1, 0),
(16, 13, 2, 5, 0, 1),
(17, 13, 2, 6, 0, 0),
(18, 13, 1, 0, 0, 0),
(19, 13, 1, 0, 0, 0),
(20, 13, 2, 0, 0, 0),
(21, 13, 1, 0, 0, 0),
(22, 13, 1, 0, 0, 0),
(23, 13, 1, 0, 0, 0),
(24, 13, 3, 0, 0, 0),
(25, 13, 1, 0, 0, 0),
(26, 13, 1, 0, 0, 0),
(27, 13, 1, 0, 0, 0),
(28, 13, 2, 0, 0, 0),
(29, 13, 1, 0, 0, 0),
(30, 13, 2, 0, 0, 0),
(31, 13, 2, 0, 0, 0),
(32, 13, 2, 0, 0, 0),
(33, 13, 2, 0, 0, 0),
(34, 13, 1, 0, 0, 0),
(35, 13, 1, 0, 0, 0),
(36, 13, 1, 0, 0, 0),
(37, 13, 1, 0, 0, 0),
(38, 13, 2, 0, 0, 0),
(39, 13, 1, 0, 0, 6),
(40, 13, 1, 0, 0, 0),
(41, 13, 1, 0, 0, 0),
(42, 13, 1, 0, 0, 0),
(43, 13, 2, 0, 0, 0),
(44, 13, 1, 0, 0, 6),
(45, 13, 1, 0, 0, 6),
(46, 13, 1, 0, 0, 6),
(47, 13, 2, 0, 0, 6),
(48, 13, 1, 0, 0, 6),
(49, 13, 1, 0, 0, 6),
(50, 13, 1, 0, 0, 6),
(51, 13, 2, 0, 0, 0),
(52, 13, 1, 0, 0, 6),
(53, 13, 1, 0, 0, 0),
(54, 13, 1, 0, 0, 6),
(55, 13, 1, 0, 0, 0),
(56, 13, 1, 0, 0, 0),
(57, 13, 1, 0, 0, 6),
(58, 13, 1, 0, 0, 0),
(59, 13, 1, 0, 0, 6),
(60, 17, 3, 0, 0, 5),
(61, 17, 3, 0, 0, 5),
(62, 17, 2, 0, 0, 6),
(63, 19, 2, 0, 0, 0),
(64, 19, 2, 1, 4, 1),
(65, 19, 3, 0, 0, 0),
(66, 19, 2, 0, 0, 6),
(67, 19, 2, 0, 2, 4),
(68, 19, 2, 0, 0, 0),
(69, 19, 1, 0, 1, 5),
(70, 19, 1, 0, 0, 6),
(71, 19, 2, 0, 0, 0),
(72, 19, 3, 0, 0, 5),
(73, 19, 3, 0, 0, 0),
(74, 19, 4, 0, 0, 0),
(75, 3, 2, 0, 0, 6),
(76, 3, 3, 2, 3, 0),
(77, 3, 2, 0, 3, 3),
(78, 3, 101, 0, 0, 0),
(79, 3, 101, 0, 0, 0),
(80, 3, 101, 0, 0, 0),
(81, 3, 101, 0, 0, 0),
(82, 3, 101, 0, 0, 0),
(83, 3, 101, 0, 0, 0),
(84, 3, 101, 0, 0, 0),
(85, 3, 102, 0, 0, 0),
(86, 3, 101, 0, 0, 0),
(87, 3, 102, 0, 0, 0),
(88, 3, 101, 0, 0, 0),
(89, 3, 101, 0, 0, 0),
(90, 3, 102, 0, 0, 0),
(91, 3, 101, 0, 0, 0),
(92, 3, 101, 0, 0, 0),
(93, 3, 102, 0, 0, 0),
(94, 3, 102, 0, 0, 0),
(95, 3, 101, 0, 0, 0),
(96, 3, 101, 0, 0, 0),
(97, 3, 101, 0, 0, 0),
(98, 3, 101, 0, 0, 0),
(99, 3, 102, 0, 0, 0),
(100, 3, 101, 0, 0, 0),
(101, 3, 101, 0, 0, 0),
(102, 3, 102, 0, 0, 0),
(103, 3, 102, 0, 0, 0),
(104, 3, 101, 0, 0, 0),
(105, 3, 102, 0, 0, 0),
(106, 3, 102, 0, 0, 0),
(107, 3, 102, 0, 0, 0),
(108, 3, 102, 0, 0, 0),
(109, 3, 101, 0, 0, 0),
(110, 3, 102, 0, 0, 0),
(111, 3, 102, 0, 0, 0),
(112, 3, 101, 0, 0, 0),
(113, 3, 101, 0, 0, 0),
(114, 3, 102, 0, 0, 0),
(115, 3, 102, 0, 0, 0),
(116, 3, 102, 0, 0, 0),
(117, 3, 102, 0, 0, 0),
(118, 3, 102, 0, 0, 0),
(119, 3, 102, 0, 0, 0),
(120, 3, 101, 0, 0, 0),
(121, 3, 102, 0, 0, 0),
(122, 3, 102, 0, 0, 0),
(123, 3, 102, 0, 0, 0),
(124, 3, 101, 0, 0, 0),
(125, 3, 102, 0, 0, 0),
(126, 3, 102, 0, 0, 0),
(127, 3, 102, 0, 0, 0),
(128, 3, 102, 0, 0, 0),
(129, 3, 102, 0, 0, 0),
(130, 3, 102, 0, 0, 0),
(131, 3, 102, 0, 0, 0),
(132, 3, 102, 0, 0, 0),
(133, 3, 102, 0, 0, 0),
(134, 3, 102, 0, 0, 0),
(135, 3, 102, 0, 0, 0),
(136, 3, 102, 0, 0, 0),
(137, 3, 101, 0, 0, 0),
(138, 3, 102, 0, 0, 0),
(139, 3, 102, 0, 0, 0),
(140, 3, 102, 0, 0, 0),
(141, 3, 102, 0, 0, 0),
(142, 3, 102, 0, 0, 0),
(143, 3, 102, 0, 0, 0),
(144, 3, 102, 0, 0, 0),
(145, 3, 102, 0, 0, 0),
(146, 3, 102, 0, 0, 0),
(147, 3, 102, 0, 0, 0),
(148, 3, 102, 0, 0, 0),
(149, 3, 102, 0, 0, 0),
(150, 3, 102, 0, 0, 0),
(151, 3, 102, 0, 0, 0),
(152, 3, 102, 0, 0, 0),
(153, 3, 102, 0, 0, 0),
(154, 3, 102, 0, 0, 0),
(155, 3, 102, 0, 0, 0),
(156, 3, 102, 0, 0, 0),
(157, 3, 102, 0, 0, 0),
(158, 3, 102, 0, 0, 0),
(159, 3, 102, 0, 0, 0),
(160, 3, 102, 0, 0, 0),
(161, 3, 102, 0, 0, 0),
(162, 3, 102, 0, 0, 0),
(163, 3, 102, 0, 0, 0),
(164, 3, 102, 0, 0, 0),
(165, 3, 102, 0, 0, 0),
(166, 3, 102, 0, 0, 0),
(167, 3, 102, 0, 0, 0),
(168, 3, 102, 0, 0, 0),
(169, 3, 102, 0, 0, 0),
(170, 3, 102, 0, 0, 0),
(171, 3, 102, 0, 0, 0),
(172, 3, 102, 0, 0, 0),
(173, 3, 102, 0, 0, 0),
(174, 3, 102, 0, 0, 0),
(175, 3, 102, 0, 0, 0),
(176, 3, 102, 0, 0, 0),
(177, 3, 102, 0, 0, 0),
(178, 3, 102, 0, 0, 0),
(179, 3, 102, 0, 0, 0),
(180, 3, 102, 0, 0, 0),
(181, 3, 102, 0, 0, 0),
(182, 3, 102, 0, 0, 0),
(183, 3, 101, 0, 0, 0),
(184, 3, 102, 0, 0, 0),
(185, 3, 102, 0, 0, 0),
(186, 3, 102, 0, 0, 0),
(187, 3, 102, 0, 0, 0),
(188, 3, 102, 0, 0, 0),
(189, 3, 102, 0, 0, 0),
(190, 3, 102, 0, 0, 0),
(191, 3, 102, 0, 0, 0),
(192, 3, 102, 0, 0, 0),
(193, 3, 102, 0, 0, 0),
(194, 3, 102, 0, 0, 0),
(195, 3, 102, 0, 0, 0),
(196, 3, 102, 0, 0, 0),
(197, 3, 102, 0, 0, 0),
(198, 3, 101, 0, 0, 0),
(199, 3, 102, 0, 0, 0),
(200, 3, 101, 0, 0, 0),
(201, 3, 104, 0, 0, 0),
(202, 3, 102, 0, 0, 0),
(203, 3, 102, 0, 0, 0),
(204, 3, 102, 0, 0, 0),
(205, 3, 102, 0, 0, 0),
(206, 3, 102, 0, 0, 0),
(207, 3, 102, 0, 0, 0),
(208, 3, 102, 0, 0, 0),
(209, 3, 102, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staffid` int(6) NOT NULL,
  `staffName` varchar(20) NOT NULL,
  `staffEmailID` varchar(30) NOT NULL,
  `staffPassword` varchar(20) NOT NULL,
  `deptName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staffid`, `staffName`, `staffEmailID`, `staffPassword`, `deptName`) VALUES
(1245, 'fdsfd', 'sdfdf@gmail.com', '123456', '2'),
(2206, 'Xyz', 'xyz@suntech.com', '123456', 'Manual'),
(2208, 'ABC', 'abc@suntech.com', '123456', 'Automation');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(6) NOT NULL,
  `admin_name` varchar(30) NOT NULL DEFAULT 'admin1',
  `admin_emailId` varchar(30) NOT NULL,
  `admin_password` varchar(15) NOT NULL,
  `department` varchar(30) NOT NULL DEFAULT 'Automation'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_emailId`, `admin_password`, `department`) VALUES
(2147, 'admin1', 'AutomationAdmin@sun.com', '123456', 'Automation'),
(2148, 'admin2', 'admin2@sun.com', '123456', 'Automation'),
(2167, 'manualAdmin1', 'ManualAdmin@sun.com', '123456', 'Manual'),
(2168, 'manualAdmin2', 'manualadmin2@sun.com', '123456', 'Manual');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_browser_and_internet`
--

CREATE TABLE `tbl_browser_and_internet` (
  `category_id` int(5) NOT NULL,
  `browser_internet_id` int(3) NOT NULL,
  `browser_internet_desc` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_browser_and_internet`
--

INSERT INTO `tbl_browser_and_internet` (`category_id`, `browser_internet_id`, `browser_internet_desc`) VALUES
(104, 1, 'Name the different web browsers - atleast 3 or more? (Marks: 02)'),
(104, 2, 'How does the Internet work? (Marks: 2)'),
(104, 3, 'What is the use of Hyper Text Transfer Protocol using Secure Socket Layer? (Marks:1)'),
(104, 4, 'What is Spyware? (Marks:1)'),
(104, 5, 'What is Hyperlink??');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_candidates`
--

CREATE TABLE `tbl_candidates` (
  `user_id` int(5) NOT NULL,
  `user_name` varchar(40) NOT NULL,
  `department` varchar(20) NOT NULL,
  `user_password` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_candidates`
--

INSERT INTO `tbl_candidates` (`user_id`, `user_name`, `department`, `user_password`, `city`, `user_email`, `phone`) VALUES
(2, 'Yogeshwara Anand Kumar', 'Automation', '123456', 'Hyderabad', 'automation@suntechnologies.com', '1234567876'),
(3, 'prasad', 'Automation', '23456', 'Bangalore', 'prasad@sun.com', '7657657658'),
(4, 'Suren', 'Automation', '123456', 'Bangalore', 'suren@sun.com', '2342342345'),
(5, 'asd', 'Automation', '123456', 'Bangalore', 'asd@sun.com', '1234321420'),
(6, 'Ram', 'Manual', '123456', 'Mumbai', 'manual@suntechnologies.com', '9632587410'),
(7, 'Karhick', 'Development', '123456', 'Chennai', 'development@suntechnologies.com', '2345678901');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_datastructure`
--

CREATE TABLE `tbl_datastructure` (
  `category_id` int(4) NOT NULL,
  `ds_id` int(4) NOT NULL,
  `ds_desc` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_datastructure`
--

INSERT INTO `tbl_datastructure` (`category_id`, `ds_id`, `ds_desc`) VALUES
(102, 1, 'What is sorting and searching, explain with algorith for both. (Mention the technique clearly).\n (Marks:20)'),
(102, 2, 'Name the different techniques used for searching? (Marks:2)'),
(102, 3, 'Sort the following values in ascending order (Marks: 2)\r\n\r\nJohn\r\nPhilips\r\n2016\r\nindia\r\n1947'),
(102, 4, 'Difference between List and Array? (Marks: 2)'),
(102, 5, 'Difference between Stack and Queue? (Marks: 2)'),
(102, 6, 'Does variable declaration affect memory allocation? (Marks: 02)');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dept`
--

CREATE TABLE `tbl_dept` (
  `DeptId` int(3) NOT NULL,
  `DeptName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dept`
--

INSERT INTO `tbl_dept` (`DeptId`, `DeptName`) VALUES
(1, 'Manual'),
(2, 'Automation'),
(3, 'Development');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dept_cutoff`
--

CREATE TABLE `tbl_dept_cutoff` (
  `DeptId` int(4) NOT NULL,
  `DeptName` varchar(30) NOT NULL,
  `CutOff` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dept_cutoff`
--

INSERT INTO `tbl_dept_cutoff` (`DeptId`, `DeptName`, `CutOff`) VALUES
(1, 'Manual', 70),
(2, 'Automation', 11);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_development_aptitude`
--

CREATE TABLE `tbl_development_aptitude` (
  `category_id` int(3) NOT NULL DEFAULT '101',
  `qid` int(3) NOT NULL,
  `qdesc` mediumtext NOT NULL,
  `option1` varchar(50) NOT NULL,
  `option2` varchar(50) NOT NULL,
  `option3` varchar(50) NOT NULL,
  `option4` varchar(50) NOT NULL,
  `answer` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_development_aptitude`
--

INSERT INTO `tbl_development_aptitude` (`category_id`, `qid`, `qdesc`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES
(301, 1, 'Robert is travelling on his cycle and has calculated to reach point A at 2 P.M. if he travels at 10 kmph, he will reach there at 12 noon if he travels at 15 kmph. At what speed must he travel to reach A at 1 P.M.?', '8 kmph', '11 kmph', '12 kmph', '14 kmph', 3),
(301, 2, 'If selling price is doubled, the profit triples. Find the profit percent.', '66	2 /3', '100', '105	1/3', '120', 2),
(301, 3, 'In a bag, there are coins of 25 p, 10 p and 5 p in the ratio of 1 : 2 : 3. If there is Rs. 30 in all, how many 5 p coins are there?', '50', '100', '150', '200', 3),
(301, 4, 'If 66 years are subtracted from the present age of Ajay and the remainder is divided by 1818, then the present age of Rahul is obtained. If Rahul is 22 years younger to Denis whose age is 55 years, then what is Ajay''s present age?', '5050 years', '6060 years', '5555 years', '6262 years', 2),
(301, 5, 'P, Q, R enter into a partnership. P initially invests 25 lakh and adds another 10 lakh after one year. Q initially invests 35 lakh and withdraws 10 lakh after 2 years. R''s investment is Rs 30 lakh. In what ratio should the profit be divided at the end of 3 years?', '18:19:19', '18:18:19', '19:19:18', '18:19:18', 3),
(301, 6, 'If a quarter kg of potato costs 60 paise, how many paise does 200 gm cost?', '65 paise', '70 paise', '52 paise', '48 paise', 4),
(301, 7, 'There are three places P, Q and R such that 3 roads connects P and Q and 4 roads connects Q and R. In how many ways can one travel from P to R?', '8', '10', '12', '14', 3),
(301, 8, 'Find the odd man out. 3576, 1784, 888, 440, 216, 105, 48?', '105', '216', '888', '1784', 1),
(301, 9, 'In the first 10 overs of a cricket game, the run rate was only 3.2. What should be the run rate in the remaining 40 overs to reach the target of 282 runs?', '6.25', '5.5', '7.4', '5', 1),
(301, 10, '10. 12, 38, 116, 350, 1052, ?', '1800', '2200', '2800', '3158', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_development_essay`
--

CREATE TABLE `tbl_development_essay` (
  `category_id` int(4) NOT NULL,
  `essay_id` int(4) NOT NULL,
  `essay_desc` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_development_essay`
--

INSERT INTO `tbl_development_essay` (`category_id`, `essay_id`, `essay_desc`) VALUES
(303, 1, 'Write an essay of about 300 words on any one of the given 3 topics\r\n1.	Should cellphones have the option to shop over the internet?\r\n\r\n2.	How has communication technology helped companies hire more people? What areas of technology have help companies grow at a faster pace? What are areas that may have a negative effect on hiring?\r\n\r\n3.	How technology plays a huge role in helping people obtain an education. How are more people able to obtain certifications and degrees much faster?\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_development_technical`
--

CREATE TABLE `tbl_development_technical` (
  `category_id` int(3) NOT NULL DEFAULT '101',
  `qid` int(3) NOT NULL,
  `qdesc` mediumtext NOT NULL,
  `option1` varchar(50) NOT NULL,
  `option2` varchar(50) NOT NULL,
  `option3` varchar(50) NOT NULL,
  `option4` varchar(50) NOT NULL,
  `answer` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_development_technical`
--

INSERT INTO `tbl_development_technical` (`category_id`, `qid`, `qdesc`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES
(302, 1, 'Which of these keywords is used to refer to member of base class from a sub class?', 'upper', 'super', 'this', 'None of the mentioned', 2),
(302, 2, 'Which is a valid keyword in java?', 'interface', 'string', 'Float', 'unsigned', 1),
(302, 3, 'What will be the output of the program?\r\nclass Test \r\n{\r\n    public static void main(String [] args) \r\n    {\r\n        int x= 0;\r\n        int y= 0;\r\n        for (int z = 0; z < 5; z++) \r\n        {\r\n            if (( ++x > 2 ) && (++y > 2)) \r\n            {\r\n                x++;\r\n            }\r\n        }\r\n        System.out.println(x + " " + y);\r\n    }\r\n}\r\n', '52', '53', '63', '64', 3),
(302, 4, 'What will be the output of the program?\r\npublic class RTExcept \r\n{\r\n    public static void throwit () \r\n    {\r\n        System.out.print("throwit ");\r\n        throw new RuntimeException();\r\n    }\r\n    public static void main(String [] args) \r\n    {\r\n        try \r\n        {\r\n            System.out.print("hello ");\r\n            throwit();\r\n        }\r\n        catch (Exception re ) \r\n        {\r\n            System.out.print("caught ");\r\n        }\r\n        finally \r\n        {\r\n            System.out.print("finally ");\r\n        }\r\n        System.out.println("after ");\r\n    }\r\n}\r\n', 'hello throwit caught', 'Compilation fails', 'hello throwit RuntimeException caught after', 'hello throwit caught finally after', 4),
(302, 5, 'class Bar { } \r\n\r\nclass Test \r\n{  \r\n    Bar doBar() \r\n    {\r\n        Bar b = new Bar(); /* Line 6 */\r\n        return b; /* Line 7 */\r\n    } \r\n    public static void main (String args[]) \r\n    { \r\n        Test t = new Test();  /* Line 11 */\r\n        Bar newBar = t.doBar();  /* Line 12 */\r\n        System.out.println("newBar"); \r\n        newBar = new Bar(); /* Line 14 */\r\n        System.out.println("finishing"); /* Line 15 */\r\n    } \r\n}\r\nAt what point is the Bar object, created on line 6, eligible for garbage collection?\r\n', 'after line 12', 'after line 14', 'after line 7, when doBar() completes', 'after line 15, when main() completes', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dev_user_essay`
--

CREATE TABLE `tbl_dev_user_essay` (
  `uid` int(5) NOT NULL,
  `essay_id` int(4) NOT NULL,
  `essay_desc` text NOT NULL,
  `essay_score` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dev_user_essay`
--

INSERT INTO `tbl_dev_user_essay` (`uid`, `essay_id`, `essay_desc`, `essay_score`) VALUES
(7, 1, 'fdffdsdfs\r\nfdsfds\r\nfds\r\ndfsCZXvxC\r\n\r\nXZCcX', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employees`
--

CREATE TABLE `tbl_employees` (
  `emp_id` int(11) NOT NULL,
  `emp_name` varchar(25) NOT NULL,
  `emp_dept` varchar(50) NOT NULL,
  `emp_email` varchar(40) DEFAULT NULL,
  `emp_pwd` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_employees`
--

INSERT INTO `tbl_employees` (`emp_id`, `emp_name`, `emp_dept`, `emp_email`, `emp_pwd`) VALUES
(22, 'dsds', 'Development', 'dsa@sun.com', '123456'),
(100, 'DinuR', 'Automation', 'aad@aa.com', '123456'),
(101, 'Dinu', 'Automation', 'aad@aa.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_essays`
--

CREATE TABLE `tbl_essays` (
  `essay_id` int(6) NOT NULL,
  `essay_desc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_essays`
--

INSERT INTO `tbl_essays` (`essay_id`, `essay_desc`) VALUES
(1, 'Write an essay on Cloud Technologies?'),
(2, 'Describe your favorite sport?'),
(3, 'Should there be a dressing code for each profession?'),
(4, 'Is Facebook a great invention or end of Privacy?');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_finalessayscore`
--

CREATE TABLE `tbl_finalessayscore` (
  `uid` int(6) NOT NULL,
  `final_essay_score` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_finalessayscore`
--

INSERT INTO `tbl_finalessayscore` (`uid`, `final_essay_score`) VALUES
(2, 2),
(3, 7),
(5, 10);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_finalhtmlscore`
--

CREATE TABLE `tbl_finalhtmlscore` (
  `uid` int(5) NOT NULL,
  `final_html_score` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_finalhtmlscore`
--

INSERT INTO `tbl_finalhtmlscore` (`uid`, `final_html_score`) VALUES
(2, 14),
(3, 7),
(5, 10);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_finalprogscore`
--

CREATE TABLE `tbl_finalprogscore` (
  `uid` int(5) NOT NULL,
  `final_prog_score` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_finalprogscore`
--

INSERT INTO `tbl_finalprogscore` (`uid`, `final_prog_score`) VALUES
(0, 0),
(2, 24),
(3, 10),
(5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_finaltechscore`
--

CREATE TABLE `tbl_finaltechscore` (
  `uid` int(6) NOT NULL,
  `tech_score` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_finaltechscore`
--

INSERT INTO `tbl_finaltechscore` (`uid`, `tech_score`) VALUES
(2, 8),
(3, 2),
(3, 7);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_final_prog_score`
--

CREATE TABLE `tbl_final_prog_score` (
  `uid` int(6) NOT NULL,
  `final_prog_score` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_general_computing`
--

CREATE TABLE `tbl_general_computing` (
  `category_id` int(4) NOT NULL,
  `gc_id` int(4) NOT NULL,
  `gc_desc` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_general_computing`
--

INSERT INTO `tbl_general_computing` (`category_id`, `gc_id`, `gc_desc`) VALUES
(108, 1, 'What is cloud computing? (Marks: 1)'),
(108, 2, 'Can we test application 100%, so that the application is defect free? (Marks: 1)'),
(108, 3, 'How many BITS are there in ONE MEGA BYTE? (Marks: 1)'),
(108, 4, 'Expand GUI? (Marks: 1)'),
(108, 5, 'Name at least 3 applications you have used/ come across from MS OFFICE? (Marks: 1)'),
(108, 6, 'Add number 1,2,3,4,5... To 150 and give the sum. (Marks: 1)\r\n\r\n  101101\r\n+ 011101'),
(108, 7, 'Add the following binary number. (Marks: 1)\r\n\r\n 101101\r\n+011101');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hr`
--

CREATE TABLE `tbl_hr` (
  `hr_id` int(6) NOT NULL,
  `hr_name` varchar(30) NOT NULL DEFAULT 'ABC',
  `hr_emailId` varchar(15) NOT NULL,
  `hr_password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_hr`
--

INSERT INTO `tbl_hr` (`hr_id`, `hr_name`, `hr_emailId`, `hr_password`) VALUES
(2345, 'ABC', 'hr1@sun.com', 123456),
(2346, 'MNO', 'hr2@sun.com', 123456);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_html`
--

CREATE TABLE `tbl_html` (
  `html_id` int(3) NOT NULL,
  `html_desc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_html`
--

INSERT INTO `tbl_html` (`html_id`, `html_desc`) VALUES
(1, 'Create links to five different pages on five different websites that should all open in a new window'),
(2, 'Display five different images. Skip two lines between each image. Each image should have a title?'),
(3, 'Print a long quote and a short quote. Cite the author of each quote?'),
(4, 'Print a paragraph that is a description of a book, include the title of the book as well as its auth');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_javaprog_algo`
--

CREATE TABLE `tbl_javaprog_algo` (
  `category_id` int(4) NOT NULL DEFAULT '304',
  `java_or_algo_id` int(4) NOT NULL,
  `java_or_algo_desc` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_javaprog_algo`
--

INSERT INTO `tbl_javaprog_algo` (`category_id`, `java_or_algo_id`, `java_or_algo_desc`) VALUES
(304, 1, 'Write a Java Program/Algorithm to remove duplicate characters from a string without using any libraries?'),
(304, 2, 'Write a program/Algorithm to sort an array/List of numbers in ascending order without using any libraries?'),
(304, 3, 'Write a program/Algorithm to print 1 to 10 without using loop?'),
(304, 4, 'Write a program/Algorithm to count Alphabets in a given string “P00R 50UL!!”?');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_manual_aptitude`
--

CREATE TABLE `tbl_manual_aptitude` (
  `category_id` int(3) NOT NULL DEFAULT '101',
  `qid` int(3) NOT NULL,
  `qdesc` varchar(100) NOT NULL,
  `option1` varchar(50) NOT NULL,
  `option2` varchar(50) NOT NULL,
  `option3` varchar(50) NOT NULL,
  `option4` varchar(50) NOT NULL,
  `answer` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_manual_aptitude`
--

INSERT INTO `tbl_manual_aptitude` (`category_id`, `qid`, `qdesc`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES
(101, 1, 'a*b is what kind of expression?', 'Prefix', 'Infix.', 'Postfix', 'None of the above', 2),
(101, 2, 'Which is not a programming language?', 'VB...', 'Java', 'Perl', 'C++', 3),
(101, 3, 'VB stands for?', 'Vertex Basic', 'Visual BODMAS', 'Virtual Break', 'Visual Basic', 4),
(101, 4, '''C'' Language invented by?', 'Dennis T Ritchie', 'Bjarne Stroutostup', 'James Gosling', 'Steve Jobs', 1),
(101, 5, 'Junit is a?', 'IDE', 'Script', 'Language', 'Testing Tool', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_manual_finalbrowsintscore`
--

CREATE TABLE `tbl_manual_finalbrowsintscore` (
  `uid` int(5) NOT NULL,
  `finalBrowsIntScore` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_manual_finalbrowsintscore`
--

INSERT INTO `tbl_manual_finalbrowsintscore` (`uid`, `finalBrowsIntScore`) VALUES
(6, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_manual_finaldsscore`
--

CREATE TABLE `tbl_manual_finaldsscore` (
  `uid` int(5) NOT NULL,
  `final_ds_score` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_manual_finaldsscore`
--

INSERT INTO `tbl_manual_finaldsscore` (`uid`, `final_ds_score`) VALUES
(6, 9);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_manual_finalgcscore`
--

CREATE TABLE `tbl_manual_finalgcscore` (
  `uid` int(5) NOT NULL,
  `finalgcscore` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_manual_finalgcscore`
--

INSERT INTO `tbl_manual_finalgcscore` (`uid`, `finalgcscore`) VALUES
(6, 10);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_manual_finalmcscore`
--

CREATE TABLE `tbl_manual_finalmcscore` (
  `uid` int(5) NOT NULL,
  `final_mc_score` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_manual_finalmcscore`
--

INSERT INTO `tbl_manual_finalmcscore` (`uid`, `final_mc_score`) VALUES
(6, 11);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_manual_finalnotesscore`
--

CREATE TABLE `tbl_manual_finalnotesscore` (
  `uid` int(5) NOT NULL,
  `final_notes_score` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_manual_finalnotesscore`
--

INSERT INTO `tbl_manual_finalnotesscore` (`uid`, `final_notes_score`) VALUES
(6, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_manual_finalosscore`
--

CREATE TABLE `tbl_manual_finalosscore` (
  `uid` int(5) NOT NULL,
  `finalosscore` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_manual_finalosscore`
--

INSERT INTO `tbl_manual_finalosscore` (`uid`, `finalosscore`) VALUES
(6, 8);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_manual_finalsqlscore`
--

CREATE TABLE `tbl_manual_finalsqlscore` (
  `uid` int(5) NOT NULL,
  `finalsqlscore` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_manual_finalsqlscore`
--

INSERT INTO `tbl_manual_finalsqlscore` (`uid`, `finalsqlscore`) VALUES
(6, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_manual_notes`
--

CREATE TABLE `tbl_manual_notes` (
  `category_id` int(4) NOT NULL DEFAULT '109',
  `notes_id` int(4) NOT NULL,
  `notes_desc` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_manual_notes`
--

INSERT INTO `tbl_manual_notes` (`category_id`, `notes_id`, `notes_desc`) VALUES
(109, 1, 'Write a brief note on below topics not more than 5 sentences.. (Marks: 5)i)BankORii) Insurance');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_manual_os`
--

CREATE TABLE `tbl_manual_os` (
  `category_id` int(4) NOT NULL,
  `os_id` int(4) NOT NULL,
  `os_desc` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_manual_os`
--

INSERT INTO `tbl_manual_os` (`category_id`, `os_id`, `os_desc`) VALUES
(107, 1, 'What is DOS? Expand the abbreviation?(Marks: 1)'),
(107, 2, 'Name the different OS you have heard/worked? (Marks: 1)'),
(107, 3, 'What is Multitasking? (Marks: 1)'),
(107, 4, 'Give the meaning of the below process Status? (Marks:5)\r\n\r\nNew State;Running;Waiting;Ready;Terminate;'),
(107, 5, 'What is device driver? (Marks: 1)'),
(107, 6, 'What is Kernel? (Marks: 1)');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_manual_progfinalscore`
--

CREATE TABLE `tbl_manual_progfinalscore` (
  `uid` int(5) NOT NULL,
  `final_prog_score` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_manual_progfinalscore`
--

INSERT INTO `tbl_manual_progfinalscore` (`uid`, `final_prog_score`) VALUES
(6, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_manual_programming`
--

CREATE TABLE `tbl_manual_programming` (
  `category_id` int(5) NOT NULL,
  `prog_id` int(3) NOT NULL,
  `prog_desc` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_manual_programming`
--

INSERT INTO `tbl_manual_programming` (`category_id`, `prog_id`, `prog_desc`) VALUES
(103, 1, 'Write a  program in any of the programming language you are comfortable. To find the biggest of 3 number? (Marks: 5)');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_manual_sql`
--

CREATE TABLE `tbl_manual_sql` (
  `category_id` int(5) NOT NULL DEFAULT '106',
  `sql_id` int(5) NOT NULL,
  `sql_desc` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_manual_sql`
--

INSERT INTO `tbl_manual_sql` (`category_id`, `sql_id`, `sql_desc`) VALUES
(106, 1, 'Name atleast 3 RDBMS? (Marks: 1)'),
(106, 2, 'Write a query to select unique salary values from below example table - Employee_Salary? (Marks:1)'),
(106, 3, 'Write a query to get total number of rows from the below example table -Employee_Name? (Marks: 1)'),
(106, 4, 'Write a query to select all the names starting with the value "J" from the below table Employee_Name? (Marks:1)');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mcq_category`
--

CREATE TABLE `tbl_mcq_category` (
  `DeptId` int(4) NOT NULL DEFAULT '2',
  `category_id` int(3) NOT NULL,
  `category_name` varchar(30) NOT NULL,
  `category_type` varchar(50) NOT NULL DEFAULT 'Descriptive'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mcq_category`
--

INSERT INTO `tbl_mcq_category` (`DeptId`, `category_id`, `category_name`, `category_type`) VALUES
(1, 101, 'Aptitude', 'MCQ'),
(1, 102, 'Data_Structure', 'Descriptive'),
(1, 103, 'Programming', 'Descriptive'),
(1, 104, 'Browser_and_Internet', 'Descriptive'),
(1, 105, 'Mobile_Computing', 'Descriptive'),
(1, 106, 'SQL', 'Descriptive'),
(1, 107, 'Operating_System', 'Descriptive'),
(1, 108, 'General_Computing', 'Descriptive'),
(1, 109, 'Notes', 'Descriptive'),
(2, 201, 'Aptitude', 'MCQ'),
(2, 202, 'Programming', 'Descriptive'),
(2, 203, 'Essay', 'Descriptive'),
(2, 204, 'Html', 'Descriptive'),
(3, 301, 'Aptitude', 'MCQ'),
(3, 302, 'Technical', 'MCQ'),
(3, 303, 'Essay', 'Descriptive'),
(3, 304, 'Java_Progam_or_Algorithm', 'Descriptive');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mobile_computing`
--

CREATE TABLE `tbl_mobile_computing` (
  `category_id` int(4) NOT NULL DEFAULT '105',
  `mobile_computing_id` int(4) NOT NULL,
  `mobile_computing_desc` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mobile_computing`
--

INSERT INTO `tbl_mobile_computing` (`category_id`, `mobile_computing_id`, `mobile_computing_desc`) VALUES
(105, 1, 'What is the full form of ISO?'),
(105, 2, 'What is GSM?'),
(105, 3, 'Name at least 3 mobile operating system. (Marks: 1)'),
(105, 4, 'What is the meaning of mobile apps, give an example? (Marks:1)'),
(105, 5, 'What is mobile hotspot? (Marks: 1)');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_programs`
--

CREATE TABLE `tbl_programs` (
  `category_id` int(3) NOT NULL DEFAULT '102',
  `program_id` int(3) NOT NULL,
  `prog_desc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_programs`
--

INSERT INTO `tbl_programs` (`category_id`, `program_id`, `prog_desc`) VALUES
(102, 1, 'WAP to check whether  a string is Palindrome??'),
(102, 2, 'WAP to check vowels exist in String or not?'),
(102, 3, 'WAP to generate numbers from 1 to 10 without loops'),
(102, 4, 'WAP to check whether a number is factorial result?'),
(102, 5, 'WAP to extract numbers from a string??');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_qajobs`
--

CREATE TABLE `tbl_qajobs` (
  `Jobs_Id` int(11) NOT NULL,
  `Job_Title` varchar(100) NOT NULL,
  `Project_Name` varchar(40) NOT NULL,
  `Designation` varchar(40) NOT NULL,
  `No_Of_Vacancy` int(11) NOT NULL,
  `Skills` text NOT NULL,
  `Year_Of_Exp` varchar(30) NOT NULL,
  `Job_Desc` text NOT NULL,
  `Project_Status` int(2) NOT NULL DEFAULT '0',
  `Opened_On` date NOT NULL,
  `Closing_On` date NOT NULL,
  `PostedBy` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_qajobs`
--

INSERT INTO `tbl_qajobs` (`Jobs_Id`, `Job_Title`, `Project_Name`, `Designation`, `No_Of_Vacancy`, `Skills`, `Year_Of_Exp`, `Job_Desc`, `Project_Status`, `Opened_On`, `Closing_On`, `PostedBy`) VALUES
(1, 'dfhg', 'FHLB-NY', 'dhgf', 4, 'dfsh', '1-3yrs', 'dhgfdghfhgdf', 0, '0000-00-00', '2017-06-20', ''),
(2, 'dcfds', 'FHLB-NY', 'dfsafds', 54, 'sfd', 'Fresher', 'fds', 0, '2017-06-08', '2017-06-09', 'admin1'),
(3, 'cvcv', 'FHLB-NY', 'vcxcvxz', 6, 'C++,Java,C#', 'Fresher', 'fgfgdgfdgfd', 0, '2017-06-08', '2017-06-08', 'admin1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_qaprojects`
--

CREATE TABLE `tbl_qaprojects` (
  `Project_Id` int(8) NOT NULL,
  `Project_Name` varchar(50) NOT NULL,
  `Project_Desc` text NOT NULL,
  `Project_Status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_qaprojects`
--

INSERT INTO `tbl_qaprojects` (`Project_Id`, `Project_Name`, `Project_Desc`, `Project_Status`) VALUES
(1, 'FHLB-NY', 'FHLB-NY......................FHLB-NY', 1),
(2, 'Havertys', 'Havertys----Havertys', 1),
(3, 'FHLB-Pittsburg', 'FHLB-Pittsburg.....FHLB-Pittsburg', 0),
(4, 'Others', 'Others.....Others', 0),
(5, 'fdsafdas', 'dfasfdas', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_result`
--

CREATE TABLE `tbl_result` (
  `user_id` int(3) NOT NULL,
  `test_date` datetime NOT NULL,
  `score` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_result`
--

INSERT INTO `tbl_result` (`user_id`, `test_date`, `score`) VALUES
(2, '2017-06-09 07:49:25', 1),
(3, '2017-04-11 00:00:00', 4),
(5, '2017-04-12 00:00:00', 4),
(6, '2017-05-26 12:31:51', 1),
(7, '2017-05-26 12:08:54', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_technical_result`
--

CREATE TABLE `tbl_technical_result` (
  `user_id` int(5) NOT NULL,
  `test_date` date NOT NULL,
  `score` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_technical_result`
--

INSERT INTO `tbl_technical_result` (`user_id`, `test_date`, `score`) VALUES
(7, '2017-05-26', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_useranswer`
--

CREATE TABLE `tbl_useranswer` (
  `userid` int(3) NOT NULL,
  `qid` int(3) NOT NULL,
  `option1` varchar(25) NOT NULL,
  `option2` varchar(25) NOT NULL,
  `option3` varchar(25) NOT NULL,
  `option4` varchar(25) NOT NULL,
  `trueans` varchar(3) NOT NULL,
  `yourans` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_useranswer`
--

INSERT INTO `tbl_useranswer` (`userid`, `qid`, `option1`, `option2`, `option3`, `option4`, `trueans`, `yourans`) VALUES
(4, 1, 'Prefix', 'Infix', 'Postfix', 'None of the above', '2', 3),
(4, 2, 'VB', 'Java', 'Perl', 'C', '3', 3),
(2, 1, 'Prefix', 'Infix', 'Postfix', 'None of the above', '2', 1),
(2, 2, 'VB', 'Java', 'Perl', 'C', '3', 1),
(2, 3, 'Vertex Basic', 'Visual BODMAS', 'Virtual Break', 'Visual Basic', '4', 1),
(2, 4, 'Dennis T Ritchie', 'Bjarne Stroutostup', 'James Gosling', 'Steve Jobs', '1', 1),
(2, 5, 'IDE', 'Script', 'Language', 'Testing Tool', '4', 1),
(3, 0, '', '', '', '', '', 1),
(3, 0, '', '', '', '', '', 1),
(3, 0, '', '', '', '', '', 4),
(3, 2, '', '', '', '', '', 4),
(3, 4, '', '', '', '', '', 3),
(3, 2, 'VB', 'Java', 'Perl', 'C', '', 1),
(3, 4, 'Dennis T Ritchie', 'Bjarne Stroutostup', 'James Gosling', 'Steve Jobs', '', 1),
(3, 2, 'VB', 'Java', 'Perl', 'C', '', 1),
(3, 4, 'Dennis T Ritchie', 'Bjarne Stroutostup', 'James Gosling', 'Steve Jobs', '', 1),
(3, 2, 'VB', 'Java', 'Perl', 'C', '', 1),
(3, 4, 'Dennis T Ritchie', 'Bjarne Stroutostup', 'James Gosling', 'Steve Jobs', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_useranswers`
--

CREATE TABLE `tbl_useranswers` (
  `uid` int(6) NOT NULL,
  `qid` int(3) NOT NULL,
  `yourans` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_useranswers`
--

INSERT INTO `tbl_useranswers` (`uid`, `qid`, `yourans`) VALUES
(2, 1, 4),
(2, 2, 0),
(2, 3, 3),
(2, 4, 4),
(2, 5, 4),
(3, 1, 3),
(3, 2, 3),
(3, 3, 4),
(3, 4, 1),
(3, 5, 4),
(5, 1, 3),
(5, 2, 3),
(5, 3, 4),
(5, 4, 1),
(5, 5, 4),
(6, 1, 2),
(6, 2, 0),
(6, 3, 2),
(6, 4, 0),
(6, 5, 0),
(7, 1, 0),
(7, 2, 0),
(7, 3, 0),
(7, 4, 0),
(7, 5, 0),
(7, 6, 0),
(7, 7, 0),
(7, 8, 2),
(7, 9, 0),
(7, 10, 0),
(2, 6, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_useressays`
--

CREATE TABLE `tbl_useressays` (
  `uid` int(3) NOT NULL,
  `essay_id` int(3) NOT NULL,
  `essay_desc` text NOT NULL,
  `essay_score` int(3) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_useressays`
--

INSERT INTO `tbl_useressays` (`uid`, `essay_id`, `essay_desc`, `essay_score`) VALUES
(2, 1, '', 12),
(2, 2, '', 13),
(2, 3, 'sdsd', 14),
(2, 4, '', 15),
(3, 1, 'fdfds', 5),
(3, 2, 'fdsfds', 0),
(3, 3, 'fsdfdsfdsf', 0),
(3, 4, 'vdvdfds', 2),
(5, 1, 'tytyrtyrty', 2),
(5, 2, 'fgdgfdsgsf', 2),
(5, 3, 'dfsdfs', 3),
(5, 4, 'tthyytty', 3),
(0, 1, 'dx', 0),
(0, 2, '', 0),
(0, 3, '', 0),
(0, 4, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_userhtml`
--

CREATE TABLE `tbl_userhtml` (
  `uid` int(3) NOT NULL,
  `html_id` int(3) NOT NULL,
  `html_desc` text NOT NULL,
  `html_score` int(3) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_userhtml`
--

INSERT INTO `tbl_userhtml` (`uid`, `html_id`, `html_desc`, `html_score`) VALUES
(2, 1, '', 5),
(2, 2, '', 3),
(2, 3, '', 2),
(2, 4, '', 2),
(2, 5, '', 2),
(3, 1, 'gfdgfdsgfds', 4),
(3, 2, 'fgdsgfdsftdsggfds', 0),
(3, 3, 'sgfdgsfdgfsd', 0),
(3, 4, 'ghjfdjhgfjgf', 0),
(3, 5, 'sfdghgfsdgfdssgfd', 3),
(5, 1, 'dsasd', 11),
(5, 2, 'fsfd', 22),
(5, 3, 'dsffds', 33),
(5, 4, 'fdgdfb', 44),
(5, 5, 'fgfgfgd', 55);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_userprogram`
--

CREATE TABLE `tbl_userprogram` (
  `uid` int(3) NOT NULL,
  `program_id` int(3) NOT NULL,
  `prog_desc` text NOT NULL,
  `prgm_score` int(3) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_userprogram`
--

INSERT INTO `tbl_userprogram` (`uid`, `program_id`, `prog_desc`, `prgm_score`) VALUES
(2, 1, '', 3),
(2, 2, '', 3),
(2, 3, '', 3),
(2, 4, '', 3),
(2, 5, '', 3),
(3, 1, '', 0),
(3, 2, '', 4),
(3, 3, '', 0),
(3, 4, '', 0),
(3, 5, '', 4),
(3, 6, '', 2),
(5, 1, 'fchhg', 12),
(5, 2, 'ghfghfghf', 13),
(5, 3, 'hgfhgf', 14),
(5, 4, 'ghfhgf', 15),
(5, 5, 'gfhghf', 16);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(25) NOT NULL,
  `user_email` varchar(60) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `joining_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `user_name`, `user_email`, `user_password`, `joining_date`) VALUES
(1, 'pradeep', 'pradeep@gmail.com', '1bbd886460827015e5d605ed44252251', '2015-11-08 17:25:19'),
(2, 'test', 'test@test.test', '1bbd886460827015e5d605ed44252251', '2015-11-14 13:37:19'),
(3, 'abc12', 'abc12@gmail.com', '123456', '2017-02-01 00:00:00'),
(4, 'xyz', 'xyz@xyz.com', '12345', '2017-02-15 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_browserinternet`
--

CREATE TABLE `tbl_user_browserinternet` (
  `uid` int(5) NOT NULL,
  `browser_internet_id` int(4) NOT NULL,
  `browser_internet_desc` text NOT NULL,
  `browser_internet_score` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_browserinternet`
--

INSERT INTO `tbl_user_browserinternet` (`uid`, `browser_internet_id`, `browser_internet_desc`, `browser_internet_score`) VALUES
(6, 1, '', 0),
(6, 2, 'utyu', 0),
(6, 3, '', 2),
(6, 4, '', 1),
(6, 5, '', -3),
(6, 6, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_ds`
--

CREATE TABLE `tbl_user_ds` (
  `uid` int(5) NOT NULL,
  `ds_id` int(4) NOT NULL,
  `ds_desc` text NOT NULL,
  `ds_score` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_ds`
--

INSERT INTO `tbl_user_ds` (`uid`, `ds_id`, `ds_desc`, `ds_score`) VALUES
(6, 1, 'assa', 0),
(6, 2, '', 2),
(6, 3, '', 0),
(6, 4, 'ASDSA', 3),
(6, 5, '', 4),
(6, 6, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_gc`
--

CREATE TABLE `tbl_user_gc` (
  `uid` int(5) NOT NULL,
  `gc_id` int(4) NOT NULL,
  `gc_desc` text NOT NULL,
  `gc_score` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_gc`
--

INSERT INTO `tbl_user_gc` (`uid`, `gc_id`, `gc_desc`, `gc_score`) VALUES
(6, 1, '', 0),
(6, 2, '', 0),
(6, 3, '', 2),
(6, 4, '', 0),
(6, 5, '', 0),
(6, 6, '', 0),
(6, 7, '', 8),
(6, 8, 'xxxxxxxxxxxxxxxxxxxxx', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_java_algo`
--

CREATE TABLE `tbl_user_java_algo` (
  `uid` int(5) NOT NULL,
  `java_algo_id` int(4) NOT NULL,
  `java_algo_desc` text NOT NULL,
  `java_algo_score` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_java_algo`
--

INSERT INTO `tbl_user_java_algo` (`uid`, `java_algo_id`, `java_algo_desc`, `java_algo_score`) VALUES
(7, 1, 'nvnbn', 0),
(7, 2, '', 0),
(7, 3, '', 0),
(7, 4, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_manual_program`
--

CREATE TABLE `tbl_user_manual_program` (
  `uid` int(5) NOT NULL,
  `prog_id` int(4) NOT NULL,
  `prog_desc` text NOT NULL,
  `prog_score` int(3) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_manual_program`
--

INSERT INTO `tbl_user_manual_program` (`uid`, `prog_id`, `prog_desc`, `prog_score`) VALUES
(6, 1, '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_mobile_computing`
--

CREATE TABLE `tbl_user_mobile_computing` (
  `uid` int(5) NOT NULL,
  `mc_id` int(4) NOT NULL,
  `mc_desc` text NOT NULL,
  `mc_score` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_mobile_computing`
--

INSERT INTO `tbl_user_mobile_computing` (`uid`, `mc_id`, `mc_desc`, `mc_score`) VALUES
(6, 1, '', 0),
(6, 2, 'fdrtdrt', 5),
(6, 3, '', 0),
(6, 4, '', 0),
(6, 5, '', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_notes`
--

CREATE TABLE `tbl_user_notes` (
  `uid` int(5) NOT NULL,
  `notes_id` int(4) NOT NULL,
  `notes_desc` text NOT NULL,
  `notes_score` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_notes`
--

INSERT INTO `tbl_user_notes` (`uid`, `notes_id`, `notes_desc`, `notes_score`) VALUES
(6, 1, 'qa\r\nbb\r\nc\r\nd\r\nf\r\ng\r\nhh\r\n', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_os`
--

CREATE TABLE `tbl_user_os` (
  `uid` int(5) NOT NULL,
  `os_id` int(4) NOT NULL,
  `os_desc` text NOT NULL,
  `os_score` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_os`
--

INSERT INTO `tbl_user_os` (`uid`, `os_id`, `os_desc`, `os_score`) VALUES
(6, 1, 'tydfsyefgsudf', 0),
(6, 2, 'hbfdiugyidf', 2),
(6, 3, 'sfd8sdt8sd', 0),
(6, 4, 'gfjhghjghjfg', 6),
(6, 5, 'fhgfh', 0),
(6, 6, 'sedrfdtgf', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_sql`
--

CREATE TABLE `tbl_user_sql` (
  `uid` int(5) NOT NULL,
  `sql_id` int(4) NOT NULL,
  `sql_desc` text NOT NULL,
  `sql_score` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_sql`
--

INSERT INTO `tbl_user_sql` (`uid`, `sql_id`, `sql_desc`, `sql_score`) VALUES
(6, 1, '', 0),
(6, 2, '', 2),
(6, 3, 'dtdf', 1),
(6, 4, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_technical_answer`
--

CREATE TABLE `tbl_user_technical_answer` (
  `uid` int(5) NOT NULL,
  `qid` int(3) NOT NULL,
  `yourans` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_technical_answer`
--

INSERT INTO `tbl_user_technical_answer` (`uid`, `qid`, `yourans`) VALUES
(7, 1, 0),
(7, 2, 0),
(7, 3, 0),
(7, 4, 0),
(7, 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `social_id` varchar(100) NOT NULL,
  `picture` varchar(250) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `uuid` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `social_id`, `picture`, `created`, `uuid`) VALUES
(3, 'dinesh', 'dinesh@quiz.com', '123456', '123456', '', '2017-04-03 13:33:27', '');

-- --------------------------------------------------------

--
-- Table structure for table `users1`
--

CREATE TABLE `users1` (
  `id` int(6) NOT NULL,
  `username` varchar(30) NOT NULL,
  `role` varchar(50) NOT NULL,
  `subrole` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users1`
--

INSERT INTO `users1` (`id`, `username`, `role`, `subrole`, `password`) VALUES
(2127, 'ABC', 'admin', 'Automation', '123456'),
(2213, 'MNO', 'HR', '', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`DeptId`) KEY_BLOCK_SIZE=258 USING BTREE;

--
-- Indexes for table `jobrequirement`
--
ALTER TABLE `jobrequirement`
  ADD PRIMARY KEY (`JobId`);

--
-- Indexes for table `mcq`
--
ALTER TABLE `mcq`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `mst_question`
--
ALTER TABLE `mst_question`
  ADD PRIMARY KEY (`que_id`);

--
-- Indexes for table `mst_subject`
--
ALTER TABLE `mst_subject`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `mst_test`
--
ALTER TABLE `mst_test`
  ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `mst_user`
--
ALTER TABLE `mst_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `polls`
--
ALTER TABLE `polls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `poll_options`
--
ALTER TABLE `poll_options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `poll_id` (`poll_id`);

--
-- Indexes for table `poll_votes`
--
ALTER TABLE `poll_votes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `poll_id` (`poll_id`),
  ADD KEY `poll_option_id` (`poll_option_id`);

--
-- Indexes for table `project_vacany`
--
ALTER TABLE `project_vacany`
  ADD PRIMARY KEY (`Project_Id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `scores`
--
ALTER TABLE `scores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`,`category_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staffid`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_browser_and_internet`
--
ALTER TABLE `tbl_browser_and_internet`
  ADD PRIMARY KEY (`browser_internet_id`);

--
-- Indexes for table `tbl_candidates`
--
ALTER TABLE `tbl_candidates`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_datastructure`
--
ALTER TABLE `tbl_datastructure`
  ADD PRIMARY KEY (`ds_id`);

--
-- Indexes for table `tbl_dept`
--
ALTER TABLE `tbl_dept`
  ADD PRIMARY KEY (`DeptId`);

--
-- Indexes for table `tbl_dept_cutoff`
--
ALTER TABLE `tbl_dept_cutoff`
  ADD PRIMARY KEY (`DeptId`);

--
-- Indexes for table `tbl_development_aptitude`
--
ALTER TABLE `tbl_development_aptitude`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `tbl_development_essay`
--
ALTER TABLE `tbl_development_essay`
  ADD PRIMARY KEY (`essay_id`);

--
-- Indexes for table `tbl_development_technical`
--
ALTER TABLE `tbl_development_technical`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `tbl_dev_user_essay`
--
ALTER TABLE `tbl_dev_user_essay`
  ADD PRIMARY KEY (`essay_id`);

--
-- Indexes for table `tbl_employees`
--
ALTER TABLE `tbl_employees`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `tbl_essays`
--
ALTER TABLE `tbl_essays`
  ADD PRIMARY KEY (`essay_id`);

--
-- Indexes for table `tbl_finalessayscore`
--
ALTER TABLE `tbl_finalessayscore`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `tbl_finalhtmlscore`
--
ALTER TABLE `tbl_finalhtmlscore`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `tbl_finalprogscore`
--
ALTER TABLE `tbl_finalprogscore`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `tbl_final_prog_score`
--
ALTER TABLE `tbl_final_prog_score`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `tbl_general_computing`
--
ALTER TABLE `tbl_general_computing`
  ADD PRIMARY KEY (`gc_id`);

--
-- Indexes for table `tbl_html`
--
ALTER TABLE `tbl_html`
  ADD PRIMARY KEY (`html_id`);

--
-- Indexes for table `tbl_javaprog_algo`
--
ALTER TABLE `tbl_javaprog_algo`
  ADD PRIMARY KEY (`java_or_algo_id`);

--
-- Indexes for table `tbl_manual_aptitude`
--
ALTER TABLE `tbl_manual_aptitude`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `tbl_manual_finalbrowsintscore`
--
ALTER TABLE `tbl_manual_finalbrowsintscore`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `tbl_manual_finaldsscore`
--
ALTER TABLE `tbl_manual_finaldsscore`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `tbl_manual_finalgcscore`
--
ALTER TABLE `tbl_manual_finalgcscore`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `tbl_manual_finalmcscore`
--
ALTER TABLE `tbl_manual_finalmcscore`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `tbl_manual_finalnotesscore`
--
ALTER TABLE `tbl_manual_finalnotesscore`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `tbl_manual_finalosscore`
--
ALTER TABLE `tbl_manual_finalosscore`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `tbl_manual_finalsqlscore`
--
ALTER TABLE `tbl_manual_finalsqlscore`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `tbl_manual_notes`
--
ALTER TABLE `tbl_manual_notes`
  ADD PRIMARY KEY (`notes_id`);

--
-- Indexes for table `tbl_manual_os`
--
ALTER TABLE `tbl_manual_os`
  ADD PRIMARY KEY (`os_id`);

--
-- Indexes for table `tbl_manual_progfinalscore`
--
ALTER TABLE `tbl_manual_progfinalscore`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `tbl_manual_programming`
--
ALTER TABLE `tbl_manual_programming`
  ADD PRIMARY KEY (`prog_id`);

--
-- Indexes for table `tbl_manual_sql`
--
ALTER TABLE `tbl_manual_sql`
  ADD PRIMARY KEY (`sql_id`);

--
-- Indexes for table `tbl_mcq_category`
--
ALTER TABLE `tbl_mcq_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_mobile_computing`
--
ALTER TABLE `tbl_mobile_computing`
  ADD PRIMARY KEY (`mobile_computing_id`);

--
-- Indexes for table `tbl_programs`
--
ALTER TABLE `tbl_programs`
  ADD PRIMARY KEY (`program_id`);

--
-- Indexes for table `tbl_qajobs`
--
ALTER TABLE `tbl_qajobs`
  ADD PRIMARY KEY (`Jobs_Id`);

--
-- Indexes for table `tbl_qaprojects`
--
ALTER TABLE `tbl_qaprojects`
  ADD PRIMARY KEY (`Project_Id`);

--
-- Indexes for table `tbl_result`
--
ALTER TABLE `tbl_result`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_technical_result`
--
ALTER TABLE `tbl_technical_result`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_user_browserinternet`
--
ALTER TABLE `tbl_user_browserinternet`
  ADD PRIMARY KEY (`browser_internet_id`);

--
-- Indexes for table `tbl_user_ds`
--
ALTER TABLE `tbl_user_ds`
  ADD PRIMARY KEY (`ds_id`);

--
-- Indexes for table `tbl_user_gc`
--
ALTER TABLE `tbl_user_gc`
  ADD PRIMARY KEY (`gc_id`);

--
-- Indexes for table `tbl_user_java_algo`
--
ALTER TABLE `tbl_user_java_algo`
  ADD PRIMARY KEY (`java_algo_id`);

--
-- Indexes for table `tbl_user_manual_program`
--
ALTER TABLE `tbl_user_manual_program`
  ADD PRIMARY KEY (`prog_id`);

--
-- Indexes for table `tbl_user_mobile_computing`
--
ALTER TABLE `tbl_user_mobile_computing`
  ADD PRIMARY KEY (`mc_id`);

--
-- Indexes for table `tbl_user_notes`
--
ALTER TABLE `tbl_user_notes`
  ADD PRIMARY KEY (`notes_id`);

--
-- Indexes for table `tbl_user_os`
--
ALTER TABLE `tbl_user_os`
  ADD PRIMARY KEY (`os_id`);

--
-- Indexes for table `tbl_user_sql`
--
ALTER TABLE `tbl_user_sql`
  ADD PRIMARY KEY (`sql_id`);

--
-- Indexes for table `tbl_user_technical_answer`
--
ALTER TABLE `tbl_user_technical_answer`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `login` (`password`);

--
-- Indexes for table `users1`
--
ALTER TABLE `users1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
--
-- AUTO_INCREMENT for table `mst_question`
--
ALTER TABLE `mst_question`
  MODIFY `que_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;
--
-- AUTO_INCREMENT for table `mst_subject`
--
ALTER TABLE `mst_subject`
  MODIFY `sub_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `mst_test`
--
ALTER TABLE `mst_test`
  MODIFY `test_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `mst_user`
--
ALTER TABLE `mst_user`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `polls`
--
ALTER TABLE `polls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `poll_options`
--
ALTER TABLE `poll_options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `poll_votes`
--
ALTER TABLE `poll_votes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1434;
--
-- AUTO_INCREMENT for table `scores`
--
ALTER TABLE `scores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=210;
--
-- AUTO_INCREMENT for table `tbl_qajobs`
--
ALTER TABLE `tbl_qajobs`
  MODIFY `Jobs_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_qaprojects`
--
ALTER TABLE `tbl_qaprojects`
  MODIFY `Project_Id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `poll_options`
--
ALTER TABLE `poll_options`
  ADD CONSTRAINT `poll_options_ibfk_1` FOREIGN KEY (`poll_id`) REFERENCES `polls` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `poll_votes`
--
ALTER TABLE `poll_votes`
  ADD CONSTRAINT `poll_votes_ibfk_1` FOREIGN KEY (`poll_id`) REFERENCES `polls` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `poll_votes_ibfk_2` FOREIGN KEY (`poll_option_id`) REFERENCES `poll_options` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
