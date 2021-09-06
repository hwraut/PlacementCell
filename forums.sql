-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 24, 2019 at 10:05 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `forums`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `ID` int(111) NOT NULL AUTO_INCREMENT,
  `username` varchar(999) NOT NULL,
  `password` varchar(999) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `username`, `password`) VALUES
(1, 'admin', 'admin2019');

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE IF NOT EXISTS `assignment` (
  `ID` int(111) NOT NULL AUTO_INCREMENT,
  `uploader_id` varchar(111) NOT NULL,
  `branch_id` varchar(999) NOT NULL,
  `subject_id` varchar(999) NOT NULL,
  `semister` varchar(999) NOT NULL,
  `assignment_title` varchar(999) NOT NULL,
  `assignment` varchar(999) NOT NULL,
  `descrption` text NOT NULL,
  `tim` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`ID`, `uploader_id`, `branch_id`, `subject_id`, `semister`, `assignment_title`, `assignment`, `descrption`, `tim`) VALUES
(1, '', '3', '4', '3', 'facebook', '02192016150739-4862451980_82218fa22b_b.jpg', 'asdf', '2016-02-19 06:07:39'),
(2, '', '3', '4', '1', 'facebook', '03132016044404-06750739.pdf', 'zzz', '2016-03-12 19:44:04'),
(3, '', '3', '4', '3', 'facebook', '03132016052801-06750739 (1).pdf', 'test', '2016-03-12 20:28:01'),
(4, '3', '4', '1', 'facebook', 'ad', '03132016085016-', '3.2Graph Theory.pdf', '2016-03-12 23:50:16'),
(5, '13', '3', '4', '1', 'ad', '03132016085105-3.2Graph Theory.pdf', 'sdf', '2016-03-12 23:51:05'),
(6, '', '7', '2', '5', '1', '03152016102554-sdf', 'Amazing Konkan', '2016-03-15 02:25:54'),
(7, '', '2', '', '', '', '', '', '2016-03-15 02:39:35'),
(8, '', '2', '', '', '', '', '', '2016-03-15 02:39:47'),
(14, '7', '2', '5', '2', 'FSDP 3rd Assignment', '03152016153752-AcademicStuff-topics.pdf', 'Co,plete before 23 march', '2016-03-24 08:25:34'),
(15, '7', '2', '5', '2', 'FSDP Fourth Assignment', '03272016085715-03152016124407-AcademicStuff-topics.pdf', 'Complete before 24th march', '2016-03-26 23:59:12'),
(16, '7', '2', '5', '2', '5th Assignment', '03272016090621-03172016092536-06750739.pdf', 'submit before 30th', '2016-03-27 00:06:21');

-- --------------------------------------------------------

--
-- Table structure for table `assignment_upload`
--

CREATE TABLE IF NOT EXISTS `assignment_upload` (
  `ID` int(111) NOT NULL AUTO_INCREMENT,
  `assignment_id` varchar(999) NOT NULL,
  `stud_id` varchar(999) NOT NULL,
  `desc` varchar(999) NOT NULL,
  `assignment` varchar(999) NOT NULL,
  `teachers_id` varchar(999) NOT NULL,
  `marks` varchar(111) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `assignment_upload`
--

INSERT INTO `assignment_upload` (`ID`, `assignment_id`, `stud_id`, `desc`, `assignment`, `teachers_id`, `marks`) VALUES
(3, '13', '15', 'pease check', '03252016103151-projectreport-130823080747-phpapp02.doc', '7', '7'),
(4, '14', '15', 'wer`', '03252016103216-8157_681852818624298_6418954976219241917_n.png', '7', '3'),
(5, '13', '17', 'sdf', '03252016110311-8157_681852818624298_6418954976219241917_n.png', '7', '2'),
(6, '15', '15', 'test`', '03272016090110-internetmarketingfullprojectreport-140119011815-phpapp01.pdf', '7', '10'),
(7, '16', '15', 'assignment complete.', '03272016090737-06750739 (1).pdf', '7', '7');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE IF NOT EXISTS `branch` (
  `ID` int(111) NOT NULL AUTO_INCREMENT,
  `branchs` varchar(999) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`ID`, `branchs`) VALUES
(2, 'Information Technology');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `ID` int(111) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(999) NOT NULL,
  `l_name` varchar(999) NOT NULL,
  `emp_id` varchar(999) NOT NULL,
  `password` varchar(999) NOT NULL,
  `contact` varchar(999) NOT NULL,
  `gender` varchar(999) NOT NULL,
  `dob` varchar(999) NOT NULL,
  `status` int(111) NOT NULL,
  `branch` varchar(999) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`ID`, `f_name`, `l_name`, `emp_id`, `password`, `contact`, `gender`, `dob`, `status`, `branch`) VALUES
(1, 'Kushal', 'Kushal', 'ku@g1mail.com', '6ec44a1207a3d9506418c034679087b6', '132', 'Male', '2016-02-24', 0, 'EXTC'),
(4, 'Kushal', 'Kushal', 'ku@g1mail.com', '6ec44a1207a3d9506418c034679087b6', '09890823422', 'Male', '2016-02-03', 0, 'CS'),
(5, 'Kushal', 'Kushal', 'ku@g1mail.com', '6ec44a1207a3d9506418c034679087b6', '09890823422', 'Male', '2016-02-08', 0, 'EXTC'),
(6, 'Kushal', 'kanse', 'q123123', '6ec44a1207a3d9506418c034679087b6', '9890546711', 'Male', '1987-12-31', 0, 'CS'),
(7, 'Kushal', 'Kushal', 'q123123', '6ec44a1207a3d9506418c034679087b6', '8237783265', 'Male', '2016-02-04', 1, 'CS'),
(8, 'Kushal', 'dhole', 'kushal', '6ec44a1207a3d9506418c034679087b6', '9890546711', 'Female', '2016-12-31', 1, 'Mechanical');

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE IF NOT EXISTS `forum` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `question` longtext NOT NULL,
  `code` longtext NOT NULL,
  `question_owner` varchar(222) NOT NULL,
  `category` varchar(222) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=70 ;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`id`, `question`, `code`, `question_owner`, `category`, `time`) VALUES
(30, 'Why does removal of boolean test result in different answers?', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes b', 'Piyush', 'java', '2016-03-18 09:44:49'),
(31, ';lk;l', 'lklkj', 'Kushal', 'java', '2014-03-17 14:51:54'),
(32, 'why we use default constructor in Bean class to avoid useBean class attribute "..." is invalid.', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes b', 'Kushal', 'java', '2016-03-18 09:44:49'),
(33, 'What is the equivalent of JOptionPane in JSP?', 'Hello, \r\nI want to get a message when i press the button,so, what''s the equivalent of JOptionPane in Jsp? ', 'Kushal', 'java', '2014-03-17 15:04:00'),
(34, 'How to ignore or trim JSP directive attribute with space', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes b', 'Kushal', 'java', '2016-03-18 09:44:49'),
(35, 'Scriptlets, JSP tags for JavaBeans, anything else obsolete?', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes bd ignore?', 'Kushal', 'java', '2016-03-18 09:44:49'),
(36, 'Regarding Nine Implicit objects in all Jsp?', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes b', 'Kushal', 'java', '2016-03-18 09:44:49'),
(37, 'JSTL tag to select dropdown value', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes b', 'Kaushal', 'java', '2016-03-18 09:44:49'),
(38, 'Scriptlets, JSP tags for JavaBeans, anything else obsolete?', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes b', 'Kaushal', 'java', '2016-03-18 09:44:49'),
(39, 'MySQL calculate last 1 year record', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes b', 'Kaushal', 'php', '2016-03-18 09:44:49'),
(40, 'CSS and JS Files not loading in Front End after Upgrade but admin works fine', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes b', 'Kaushal', 'php', '2016-03-18 09:44:49'),
(41, 'Lampp Config Server error Unable to get any Notice: on browser', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes b', 'Kaushal', 'php', '2016-03-18 09:44:49'),
(42, 'Multiple queries in Mysql', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes b', 'shantanu', 'php', '2016-03-18 09:44:49'),
(43, 'How to make a new database query language?', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes b', 'shantanu', 'php', '2016-03-18 09:44:49'),
(44, 'How to access data in SimpleXMLElement trough a loop?', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes b', 'shantanu', 'php', '2016-03-18 09:44:49'),
(45, 'How can i wrap 2 MySql queries into one?', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes b', 'shantanu', 'php', '2016-03-18 09:44:49'),
(46, 'Connect oracle 11g with PHP', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes b', 'shantanu', 'php', '2016-03-18 09:44:49'),
(47, 'Refreshing two iframes in one click', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes b', 'shantanu', 'php', '2016-03-18 09:44:49'),
(48, 'Invoke Application (Custom application which has arguments) on Remote System using WMI', 'private static uint CreateProcess(ManagementScope connectionScope, string exeWithPathAndArguments)\r\n        {\r\n            try\r\n            {\r\n                var objectGetOptions = new ObjectGetOptions();\r\n                ManagementPath processPath = new ManagementPath("Win32_Process");\r\n\r\n                using (var processTask = new ManagementClass(connectionScope, processPath, objectGetOptions))\r\n                {\r\n                    using (var methodInParams = processTask.GetMethodParameters("Create"))\r\n                    {\r\n                        methodInParams["CommandLine"] = exeWithPathAndArguments;\r\n                        using (var methodOutParams = processTask.InvokeMethod("Create", methodInParams, null))\r\n                        {\r\n                            var err = (uint)methodOutParams["returnValue"];\r\n                            if (err != 0)\r\n                            {\r\n                                var info = "see http://msdn.microsoft.com/en-us/library/windows/desktop/aa389388(v=vs.85).aspx";\r\n                                switch (err)\r\n                                {\r\n                                    case 2: info = "Access Denied"; break;\r\n                                    case 3: info = "Insufficient Privilege"; break;\r\n                                    case 8: info = "Unknown failure"; break;\r\n                                    case 9: info = "Path Not Found"; break;\r\n                                    case 21: info = "Invalid Parameter"; break;\r\n                                    default: info = "Unknown(Code)"; break;\r\n                                }\r\n\r\n                                var msg = "Failed to Start the Process, error = " + methodOutParams["returnValue"] + " (" + info + ")";\r\n                                throw new Exception(msg);\r\n                            }\r\n\r\n                            return (uint)methodOutParams["processId"];\r\n                        }\r\n                    }\r\n                }\r\n            }\r\n            catch (Exception ex)\r\n            {\r\n                throw ex;\r\n            }\r\n        }', 'shantanu', 'dotnet', '2014-03-17 15:37:59'),
(49, 'Bad Request - Querystring Length exceeds', 'Hi\r\n\r\ni''m using ASP .NET MVC 4 with .NET 4.5 and i created several Controller Methods with the WebAPI. For a specific case the length of my querystring exceeds more than 700 characters (getting a Bad Request - Invalid URL 400 Error). I already changed the maxUrlLength and maxQueryStringLength Property in my Web.config, but its still not working.\r\n\r\n  <system.web\r\n   <httpRuntime targetFramework="4.5" relaxedUrlToFileSystemMapping="true" maxUrlLength="2048" maxQueryStringLength="2048" />\r\n  </system.web>\r\nis my web.config wrong ?', 'shantanu', 'dotnet', '2014-03-17 15:39:26'),
(50, 'Display all records from database using MVC4 with linq', 'When i am trying to display all records from database using MVC4 it getting an error like below \r\n\r\nERROR:Additional information: Members ''System.String TagId'' and ''Int32 ID'' both marked as IsPrimaryKey and IsDbGenerated. ', 'shantanu', 'dotnet', '2014-03-17 15:40:41'),
(51, 'Re: Append two JSON in controller class', ' public class GridModel\r\n    {\r\n        public double ID { get; set; }\r\n        public string SHORT_NAME { get; set; }\r\n        public string CARRIER_NAME { get; set; }\r\n        public GridSparklineModel GridSparklineModel { get; set; }\r\n    }\r\n\r\n    public class GridSparklineModel\r\n    {\r\n        public DateTime YMDH { get; set; }\r\n        public double SELL_DURATION { get; set; }\r\n        public string DateString { get { return YMDH.ToString("h tt"); } }\r\n    }', 'shantanu', 'dotnet', '2014-03-17 15:41:12'),
(52, 'How do I conditionally display a dropdownlist element based on the value of another dropdownlist', 'using System;\r\nusing System.Collections.Generic;\r\nusing System.Linq;\r\nusing System.Web;\r\nusing System.Web.Mvc;\r\n\r\nnamespace sims.Controllers\r\n{\r\n    public class RegisterController : Controller\r\n    {\r\n        //\r\n        // GET: /Register/\r\n\r\n        public ActionResult Index()\r\n        {\r\n            List<SelectListItem> Roles = new List<SelectListItem>();\r\n            Roles.Add(new SelectListItem { Text = "Student", Value = "1" });\r\n            Roles.Add(new SelectListItem { Text = "Parent", Value = "2" });\r\n            Roles.Add(new SelectListItem { Text = "Teacher", Value = "3" });\r\n            Roles.Add(new SelectListItem { Text = "Principal", Value = "4" });\r\n            Roles.Add(new SelectListItem { Text = "Admin. Asst.", Value = "5" });\r\n            Roles.Add(new SelectListItem { Text = "Security", Value = "6" });\r\n\r\n            List<SelectListItem> ClassTypes = new List<SelectListItem>();\r\n            ClassTypes.Add(new SelectListItem { Text = "Class", Value = "1" });\r\n            ClassTypes.Add(new SelectListItem { Text = "Form", Value = "2" });\r\n            ClassTypes.Add(new SelectListItem { Text = "Grade", Value = "3" });\r\n            ClassTypes.Add(new SelectListItem { Text = "Standard", Value = "4" });\r\n\r\n            List<SelectListItem> Classes = new List<SelectListItem>();\r\n            Classes.Add(new SelectListItem { Text = "1", Value = "1" });\r\n            Classes.Add(new SelectListItem { Text = "2", Value = "2" });\r\n            Classes.Add(new SelectListItem { Text = "3", Value = "3" });\r\n            Classes.Add(new SelectListItem { Text = "4", Value = "4" });\r\n            Classes.Add(new SelectListItem { Text = "5", Value = "5" });\r\n            Classes.Add(new SelectListItem { Text = "Lower 6", Value = "7" });\r\n            Classes.Add(new SelectListItem { Text = "Upper 6", Value = "8" });\r\n\r\n            ViewBag.UserRoles = Roles;\r\n            ViewBag.ClassCategory = ClassTypes;\r\n            ViewBag.ClassID = Classes;\r\n            return View();\r\n        }\r\n\r\n    }\r\n}', 'shantanu', 'dotnet', '2014-03-17 15:42:16'),
(53, 'How to get checkboxes value in controller', 'Controller:\r\nmodel1.creditcardlistIDs = (from item in creditcardDoc.CreditcardList \r\n				   select item).ToList();\r\nView:\r\n@if (Model.creditcardlistIDs != null)\r\n{\r\n        foreach (var item in Model.creditcardlistIDs)\r\n        {\r\n        <label class="checkbox inline"><input type="checkbox" data-toggle="checkbox">\r\n	@GetValueforIds(Convert.ToString(item))</label>\r\n        }\r\n}', 'shantanu', 'dotnet', '2014-03-17 15:42:55'),
(54, 'Win one of five AndyTags NFC Sticker combo packs courtesy of AndyTags and TalkAndroid', 'A couple of days ago we told you about AndyTags NFC Stickers. If you already own an Android phone with NFC, and you haven''t gotten into NFC stickers or tags yet, then you''re missing out on a lot of fun. Speaking of fun, the folks over at AndyTags were gracious enough to hit us up with 5 combo packs to give to our awesome readers.\r\n\r\nWe are going to keep this contest simple. All you have to do is reply to this post and tell us what you want most this Holiday season. You have until Friday, December 14 at 11:59pm EST to enter. On Saturday, December 15, we will pick five random winners and announce them. Each pack is a little different so we are going to reward them in the following order:\r\n10-Pack multi-color\r\n10-Pack multi-color\r\n5-pack multi-color & 5-pack ICS Blue\r\nCombo pack - 8 regular, 2 anti-metal\r\nCombo pack - 8 regular, 2 anti-metal', 'piyush', 'android', '2014-03-17 15:50:04'),
(55, 'Win a Nexus 7 courtesy of Security Coverage and TalkAndroid', 'We recently reviewed Password Genie Data Protection, which is a fantastic app for keeping all your accounts and password information safe. It''s one of the must have apps for every Android user. The makers of Password Genie, Security Coverage, would like to reward one of our loyal readers with a brand new 8GB Nexus 7. Who''s going to argue with that? Just complete the following two steps to enter for a chance to win.\r\nLike Password Genie on Facebook.\r\nReply to this forum post and tell us if you have ever been a victim of password theft (I know I have).\r\n\r\nWhat could be simpler? You have until Thursday, October 18 at 11:59pm EST to complete the task at hand. On Friday, October 19, we will post the winner. If you are the lucky winner, you can expect an email to the account associated with your username. Good Luck. ', 'piyush', 'android', '2014-03-17 15:51:11'),
(56, 'Win one of two Nexus 7 tablets courtesy of NVIDIA and TalkAndroid', 'Earlier today we posted our review of the latest Tegra game to hit the Google Play Store and TegraZone, called Zombie Driver. In celebration of this release, NVIDIA gave us two 16GB Nexus 7 tablets to give out to our awesome readers. We are going to keep this simple folks. We know it''s Halloween, but we aren''t going to ask you to send us photos of your costumes or any of that. Just follow these simple rules.\r\nOne Nexus 7 will be given out here in the forums and one will be given out on the main site - TalkAndroid\r\nTo enter the main site contest, go to this post, and comment telling us what your favorite candy bar is\r\nTo enter the forums contest, just reply to this post with what your favorite game is currently\r\nFor chances to win both tablets, you need to enter in both places (although very unlikely, you can''t win twice)\r\nYou have until tomorrow night, November 1 at 11:59PM EST to enter either contest\r\nWe will pick the winners at random and announce them on Friday, November 2\r\nIf you are a winner, you will receive an email with instructions to the one associated with your account\r\nThat''s it. Remember you need to enter both here and at our main site for a chance to win both tablets.', 'piyush', 'android', '2014-03-17 15:52:14'),
(67, 'what is php', 'Explain in details', 'snehal', 'php', '2019-03-24 08:37:52'),
(68, 'what is CSS', 'Explain CSS', 'Admin', 'Other', '2019-03-24 09:14:56'),
(69, 's', 's', 's', 's', '2019-03-24 11:27:41');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `ID` int(111) NOT NULL AUTO_INCREMENT,
  `title` varchar(999) NOT NULL,
  `notice` varchar(999) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`ID`, `title`, `notice`, `date`) VALUES
(2, 'March Project Dealine', 'Project Submission on March', '2016-03-12 20:09:48'),
(5, 'submission on march', 'complete project ASAP', '2016-03-15 07:35:09'),
(6, 'submission on March 24 ', 'Please submit project', '2016-03-27 00:13:57');

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE IF NOT EXISTS `replies` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `question_id` varchar(222) NOT NULL,
  `reply` longtext NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=104 ;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`id`, `question_id`, `reply`, `time`) VALUES
(37, '30', 'The break; is breaking out of the inner loop, not the outer loop. \r\n\r\nPerhaps it will be clearer if I walk you through the code - \r\nThe original code assumes any factor is initially prime. That’s the initial value of the isPrime boolean flag. The purpose of the inner for loop is to see if that factor is not a prime number. If the factor is divisible, the isPrime flag is set to false and there is no reason to continue to check, so the inner loop is exited early with the break;. That factor will not be added to the primes collection in line 14 as isPrime == false. \r\n\r\nIf you remove the isPrime boolean, you are no longer collecting just the prime factors. Now, the inner for loop really doesn’t do anything. It simply finds out that a number is divisible, breaks out of the inner loop and moves to the line that adds to the collection the factors. Since there is no isPrime flag condition saying add only prime factors, any number that gets to this point is added. \r\n\r\nFor example, if you enter 100 as an input- \r\nInitial code returns: [2, 5] \r\nModified code returns: [2, 4, 5, 10] \r\n\r\n4 & 10 are not prime numbers and shouldn''t be part of the collection. \r\n', '2014-03-16 18:31:18'),
(38, '29', 'hgf', '2014-03-16 18:33:13'),
(39, '29', 'hjfgkhjfhfkhfkhfhfh', '2014-03-16 18:33:35'),
(40, '29', 'I agree. Heres the link', '2014-03-16 18:34:06'),
(46, '30', '  <link rel="search" type="application/opensearchdescription+xml" title="Stack Overflow" href="/opensearch.xml">\r\n    <meta name="twitter:card" content="summary">\r\n    <meta name="twitter:domain" content="stackoverflow.com"/>\r\n    <meta name="og:type" content="website" />\r\n    <meta name="og:image" content="http://cdn.sstatic.net/stackoverflow/img/apple-touch-icon@2.png?v=fde65a5a78c6"/>\r\n    <meta name="og:title" content="How to insert special characters into a database?" />\r\n    <meta name="og:description" content="Can anyone tell me how to insert special characters into a MySQL database? I&#39;ve made a PHP script which is meant to insert some words into a database, although if ', '2014-03-16 23:36:30'),
(47, '30', '\r\ndown vote\r\nYou are most likely escaping the SQL string, similar to:\r\n\r\nSELECT * FROM `table` WHERE `column` = ''Here''s a syntax error!''\r\nYou need to escape quotes, like follows:\r\n\r\nSELECT * FROM `table` WHERE `column` = ''Here\\''s a syntax error!''\r\nmysql_real_escape_string() handles this for you.', '2014-03-16 23:37:50'),
(48, '30', 'gcgh', '2014-03-16 23:38:05'),
(49, '30', 'mnb', '2014-03-16 23:39:06'),
(50, '30', 'hgdgfd#$%&', '2014-03-16 23:39:24'),
(51, '29', 'ssd', '2014-03-16 23:39:43'),
(52, '29', 'aaa', '2014-03-16 23:39:54'),
(53, '29', 'r:domain" content="stackoverflow.com"/>\r\n    <meta name="og:type" content="website" />\r\n    <meta name="og:image" content="http://cdn.sstatic.net/stackoverflow/img/apple-touch-icon@2.png?v=fde65a5a78c6"/>\r\n    <meta name="og:title" content="How to insert special characters into a database?" />\r\n    <meta name="og:description" content="Can anyone tell me how to insert special characters into a MySQL database? I&#39;ve made a PHP script which is meant to insert some words into a database, although if the word contains a &#39; then it wont..." />\r\n    <meta name="og:url" content="http://stackoverflow.com/questions/2584066/how-to-insert-special-characters-into-a-database"/>\r\n    <link rel="canonical" href="http://stackoverflow.', '2014-03-16 23:40:11'),
(55, '29', 'ody class="question-page new-topbar">\r\n    <noscript><div id="noscript-padding"></div></noscript>\r\n    <div id="notify-container"></div>\r\n    <div id="overlay-header"></div>\r\n    <div id="custom-header"></div>\r\n<div class="topbar">\r\n    <div class="topbar-wrapper">\r\n        \r\n        <div class="js-topbar-dialog-corral">\r\n\r\n\r\n<div class="topbar-dialog siteSwitcher-dialog dno">\r\n    <div class="', '2014-03-16 23:44:17'),
(56, '31', 'Hi everyone, \r\nwhy is it necessary to have default constructor in bean classes if i''m using Expression language or jsp standard tags.?? \r\n\r\n\r\nIn my sevlet I''m calling parameterised constructor and if i don''t use expression language then jsp page is working fine. \r\nIf I use directive like<@ page import="model.User"> And \r\nIf I retrieve User object from request using scriplet<%User user=request.getAttribute("user");%> \r\nthen it works fine. \r\n\r\nIf i use EL/jsp standard tag then If i don''t use default constructor in m bean class even though i''m not invoking it \r\nthen i''m getting The value for the useBean class attribute "..." is invalid. \r\n\r\nwhy?? \r\n\r\n\r\nthanks in advance', '2014-03-17 14:53:21'),
(57, '32', 'The EL and JSTL rely upon beans actually being beans. If a class does not have a nullary constructor ("default" constructor is not the correct term), then it is breaking the rules and it is not a bean. So you cannot expect things to work correctly when you break the rules. \r\n\r\nIt''s as simple as that. Follow the rules.', '2014-03-17 15:02:54'),
(58, '32', 'By the way, you aren''t actually using the <asp:useBean> tag in a non-scriptlet JSP, are you? :shock: ', '2014-03-17 15:03:23'),
(59, '33', 'JSP is a server-side technology; it has no GUI facilities. On the client-side you can use JavaScript; its "alert" and "confirm" methods fulfill similar purposes.', '2014-03-17 15:04:22'),
(60, '33', 'Could you please give me an example to better understand \r\nwhere javascript is written?not in a jsp page ?', '2014-03-17 15:04:38'),
(61, '33', 'The JavaScript can be part of the HTML page (which may be written by a JSP page), or it might be included via a <script src="..."> tag', '2014-03-17 15:04:55'),
(62, '33', 'I put this : \r\n<a style="position:relative" href="add_category.jsp" title="Delete Category">  \r\n <img alt="" src="image/icon_delete.png">  \r\n  </a>\r\n\r\nWhere i put the <script src="..."> tag? \r\nI want to display a Message like "Are you sure to delete this category?", if i choose "Yes" ,the category deleted from the database and if i choose "no" this operation not performed. \r\nhow can i do this ? \r\nThank you in advance', '2014-03-17 15:05:38'),
(63, '34', 'No. You''ll need to edit the JSPs. \r\n\r\nThis can be done in seconds using a global search and replace.', '2014-03-17 15:06:39'),
(64, '34', 'Is it an option to do a global search and replace on the JSP directory and actually get rid of the whitespace? (There are several ways of doing that from a tech perspective - in Eclipse, at the command line, etc). If there isn''t a strict policy saying you can''t touch the JSPs, you are better off going with an actual fix rather than a hack.', '2014-03-17 15:06:54'),
(65, '35', 'It''s less that you should ignore them than be sure not to use them in new development. \r\n\r\nKnowledge of the obsolete parts of JSP may still be needed to deal with legacy apps.', '2014-03-17 15:07:44'),
(66, '35', 'I agree. Here''s the link: http://aspose.com/file-tools', '2014-03-17 15:07:56'),
(67, '36', 'objects like exception is not available on all the jsp''s. it is only available when you make the jsp attribute error page = true \r\nview plainprint?\r\nNote: Text content in the code blocks is automatically word-wrapped\r\n<%@ page isErrorPage="true" %>  \r\n  \r\n<%  \r\n  out.println("Exception: " + exception);  \r\n%>  ', '2014-03-17 15:09:02'),
(68, '37', 'Most probably he was talking about the "exception" object, which is available only to those jsp which is a error page i.e isErrorPage is set to true.\r\n', '2014-03-17 15:10:19'),
(69, '37', 'There is no value attribute on a select. That''s not how a selected option is specified. \r\n\r\nPlease look up the proper HTML means to specify which option is to be selected.', '2014-03-17 15:10:32'),
(70, '38', 'It''s less that you should ignore them than be sure not to use them in new development. \r\n\r\nKnowledge of the obsolete parts of JSP may still be needed to deal with legacy apps.', '2014-03-17 15:11:57'),
(71, '39', '//php variable\r\n$timezoneName = timezone_name_from_abbr("PST");\r\ndate_default_timezone_set("$timezoneName");\r\n$now = date(''Y-m-d H:i:s'');\r\n\r\nSELECT col1,col2 FROM table1\r\nWHERE modificationDate < ''$now'' - INTERVAL 1 YEAR', '2014-03-17 15:16:42'),
(72, '39', 'UPDATE table SET date = DATE_ADD(date, INTERVAL 1 YEAR)', '2014-03-17 15:17:19'),
(73, '41', 'If you want to see all errors and warning you need to enable error reporting on top of page.\r\n\r\nerror_reporting(E_ALL);\r\nThis code is giving you error becuase you have not specified $ sign with var. In php you have to use variables with $ sign prefixed. So change this\r\n\r\n <?php\r\n  echo  var ;\r\n ?>\r\nto\r\n\r\n <?php\r\n     //initializ as well \r\n      echo  $var ;\r\n     ?>', '2014-03-17 15:21:41'),
(74, '35', 'jsp is web technology...', '2014-03-17 15:24:26'),
(75, '42', 'Wrap the separate queries in functions. Also, don''t use $_GET, insead look into using JInput and also have a look at the following for Joomla API based database queries: docs.joomla.org/Selecting_data_using_JDatabase –  Lodder 27 mins ago', '2014-03-17 15:27:50'),
(76, '42', 'Well first have a links that I provided in my previous comment to ensure you''re using Joomla coding standards. Then have a look at the functions section on the PHP site. Once you have tried it and run into a problem, update your code in your question and we will help debug it ;) ', '2014-03-17 15:28:01'),
(77, '43', 'This question appears to be offtopic as it belongs to scifi.stackexchange.com –  ', '2014-03-17 15:29:46'),
(78, '43', 'Hi there. It sounds like an interesting project, but I''d advise starting with something simpler. You''d need to consider what could be improved upon in existing relational solutions, and how you might go about it. Indeed, you may decide that a relational model should be changed too, as the NoSQL/schema-less approach has done. As it stands, this question is entirely opinion-based, and so isn''t a great fit for this site. Good luck, though!', '2014-03-17 15:30:04'),
(79, '44', 'You can loop through it with a normal foreach-loop by calling the children() method.\r\n\r\nforeach ($xml->recordList->record->AHMteksten->children() as $child)  {\r\n   echo $child->{''AHM.texts.tekst''}; \r\n}\r\n', '2014-03-17 15:31:16'),
(80, '45', '$query = ''SELECT cat_name FROM #__tt_cats WHERE cat_published = 1 AND cat_name LIKE '' .         $db->quote(''%''.$q.''%'')\r\n$query += '' UNION ''\r\n$query += ''SELECT link_name FROM #__tt_links WHERE link_name LIKE '' . $db- >quote(''%''.$q.''%'');', '2014-03-17 15:32:43'),
(81, '46', 'You connect to Oracle 11g as any other Oracle DB using oci_connect() function.\r\n\r\n$conn = oci_connect(''hr'', ''welcome'', ''localhost/XE'');\r\nPhp has no built in caching, but try to read about memcache or apc', '2014-03-17 15:33:59'),
(82, '47', 'it would be better if you share your codes with us, its hard to answer by this way, you can try using php sessions for check a user logged in or not. after the code which you checking login, if login is success create the session and define $_SESSION[''userName''] or userID as you wish and you check if session userName set on your header or content.\r\n\r\n<?php if($_SESSION[''userName'']): ?>\r\n  // your html codes goes here for logged in user\r\n<?php else: ?>\r\n // your html codes goes here for non-user\r\n<?php endif; ?>', '2014-03-17 15:35:27'),
(83, '48', 'Hello,\r\n\r\n>>where exeWithPathAndArguments would be "/"C:\\Program files (x86)\\Company\\Application Folder\\app.exe/" -argsName argvalue"\r\n\r\nIt do not need the argsName, it juse needs the value as:\r\n\r\ninParams["CommandLine"] = @"D:\\BMX\\Project\\2014\\03\\CSharp\\ConsoleApplication1\\bin\\Debug\\ConsoleApplication1.exe 4";\r\nIt will pass the “4” to the ConsleApplication1.exe.\r\n\r\nFor more information, you can check this link:\r\n\r\nhttp://msdn.microsoft.com/en-us/library/aa720065(v=vs.71).aspx\r\n\r\nRegards.\r\n\r\nWe are trying to better understand customer views on social support experience, so your participation in this interview project would be greatly appreciated if you have time. Thanks for helping make community forums a great place. \r\nClick HERE to participate the survey.', '2014-03-17 15:38:19'),
(84, '49', 'Hi Phil_CH,\r\n\r\nThanks for your post.\r\n\r\nHTTP requests that are processed by the Web server.\r\n\r\n<system.webServer>\r\n<security>\r\n   <requestFiltering>\r\n      <requestLimits maxUrl="40960" maxQueryString="2097151" />\r\n   </requestFiltering>\r\n</security>\r\n</system.webServer>\r\nHTTP run-time settings\r\n\r\n<system.web>\r\n    <!-- 40MB = 40960, 100MB = 102400 -->\r\n    <httpRuntime maxUrlLength="40960" maxQueryStringLength="2097151" maxRequestLength="40960" />\r\n</system.web>', '2014-03-17 15:39:49'),
(85, '54', 'This Christmas I want a Ducati 1298 in red and some AndyTags to go with it. :-) \r\n\r\n(Just imagine the benefits of NFC (My S3) and a motorbike, I can hear and talk just fine but touch screens are a bit fiddly when you are armoured up! NFC would be awesome on the tank) ', '2014-03-17 15:50:26'),
(86, '55', ' "Liked" The Password genie FB page. And yes I have been a victim of password theft from my soon to be ex-wife...not a good night for me! Would love to win the Nexus 7. Thank you ', '2014-03-17 15:51:25'),
(87, '56', 'Where''s my water, is currently my favorite game. Thanks for this contest :) \r\n', '2014-03-17 15:52:39'),
(88, '30', 'sorry', '2014-10-11 07:24:57'),
(89, '32', 'sorry we dont know java', '2015-02-12 06:19:25'),
(90, '59', 'java is a programing language', '2015-02-12 06:20:15'),
(91, '54', 'i dont know', '2015-03-26 20:27:03'),
(92, '58', 'sorry!!', '2015-03-26 20:27:56'),
(93, 'lkj', 'lkj', '2016-03-18 11:38:24'),
(94, '32', 'sdf', '2016-03-18 11:40:11'),
(95, '32', 'f', '2016-03-18 11:41:21'),
(96, '32', 'sdf', '2016-03-18 11:41:43'),
(97, '32', 'sdf', '2016-03-25 03:46:37'),
(98, '32', 'sdfsdf', '2016-03-25 03:46:47'),
(99, '56', 'testing reply', '2016-03-27 00:11:17'),
(100, '51', 'text', '2016-03-27 00:12:37'),
(101, '54', 'nice question', '2019-03-24 08:29:25'),
(102, '67', 'PHP is a server-side Technology', '2019-03-24 08:38:15'),
(103, '40', 'nice question', '2019-03-24 09:14:31');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `ID` int(111) NOT NULL AUTO_INCREMENT,
  `stud_id` varchar(999) NOT NULL,
  `first_name` varchar(999) NOT NULL,
  `middile_name` varchar(999) NOT NULL,
  `last_name` varchar(999) NOT NULL,
  `email` varchar(111) NOT NULL,
  `password` varchar(999) NOT NULL,
  `contact` varchar(999) NOT NULL,
  `year` varchar(999) NOT NULL,
  `branch` varchar(999) NOT NULL,
  `college` varchar(999) NOT NULL,
  `address` varchar(999) NOT NULL,
  `city` varchar(999) NOT NULL,
  `gender` varchar(999) NOT NULL,
  `dob` varchar(999) NOT NULL,
  `status` varchar(999) NOT NULL,
  `clg_status` varchar(111) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`ID`, `stud_id`, `first_name`, `middile_name`, `last_name`, `email`, `password`, `contact`, `year`, `branch`, `college`, `address`, `city`, `gender`, `dob`, `status`, `clg_status`) VALUES
(14, '990587', 'snehal', 'bhalchandra', 'Kushal', 'ku@g1mail.com', 'kushal', '8237783265', '', '123', 'other', 'asd', 'Amravati', 'Male', '2016-02-02', '1', '0'),
(15, '502332', 'ram', 's', 'sharma', 'ram@gmail.com', 'ram123', '8237783265', '2', '2', 'PRMIT', 'Old Byepass dastur nagar Amravati', 'Amravati', 'Male', '2016-03-11', '0', '0'),
(16, '913764', 'snehal', 'p.', 'kanse', 'avi@g1mail.com', 'avanti', '8237783265', '1', '2', 'other', 'Old Byepass dastur nagar Amravati', 'Amravati', 'Female', '2016-03-18', '1', '0'),
(17, '745713', 'vaibhav', 'v.', 'Tayde', 'vaibhav@gmail.com', 'vaibhav', '8856945196', '4', '2', 'PRMIT', 'Rukmini Nagar near Suyog mangal Karyalay.', 'Amravati', 'Male', '2016-01-06', '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `ID` int(111) NOT NULL AUTO_INCREMENT,
  `bran_id` varchar(999) NOT NULL,
  `subject` varchar(999) NOT NULL,
  `semister` varchar(999) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`ID`, `bran_id`, `subject`, `semister`) VALUES
(5, '2', 'FSDP', '2');
