-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: webpagesdb.it.auth.gr:3306
-- Χρόνος δημιουργίας: 25 Φεβ 2022 στις 18:34:19
-- Έκδοση διακομιστή: 5.5.62-0ubuntu0.14.04.1
-- Έκδοση PHP: 7.1.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `student3471partB`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `announcement`
--

CREATE TABLE `announcement` (
  `idannouncement` int(11) NOT NULL,
  `theDate` date NOT NULL,
  `theme` varchar(50) NOT NULL,
  `text` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=greek;

--
-- Άδειασμα δεδομένων του πίνακα `announcement`
--

INSERT INTO `announcement` (`idannouncement`, `theDate`, `theme`, `text`) VALUES
(1, '2022-01-20', 'Εργασία ', 'Καλημέρα,<br>Έχει ανέβει η δεύτερη εργασία στις <strong>Εργασίες</strong>. Για οποιαδήποτε απορία επικοινωνήστε μαζί μου. Η καταληκτική ημερομηνία είναι <strong>25/01/2022</strong>.'),
(2, '2022-01-11', 'Μάθημα 2', 'Καλησπέρα,<br>Το υλικό του δεύτερου μαθήματος θα ανέβει στις <strong>17/03/2021</strong>.'),
(3, '2022-01-10', 'Εργασία', 'Η 1η εργασία έχει ανέβει στις <strong>Εργασίες</strong>. Για οποιαδήποτε απορία επικοινωνήστε μαζί μου. Η καταληκτική ημερομηνία είναι <strong>15/01/2022</strong>.'),
(4, '2021-12-28', 'Έναρξη Μαθημάτων', 'Γεια σας,<br> Τα μαθήματα αρχίζουν την επόμενη εβδομάδα. Πιο συγκεκριμένα, οι σημειώσεις του πρώτου μαθήματος θα ανέβουν στις <strong>03/01/2022</strong>.');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `documents`
--

CREATE TABLE `documents` (
  `iddocuments` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` mediumtext NOT NULL,
  `file_name` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=greek;

--
-- Άδειασμα δεδομένων του πίνακα `documents`
--

INSERT INTO `documents` (`iddocuments`, `title`, `description`, `file_name`) VALUES
(1, 'Εισαγωγή στο CSS', 'Σε αυτό μάθημα θα γίνει μία μικρή εισαγωγή στο CSS και στο πώς γίνεται η σύνταξή του.', 'file1.docx'),
(2, 'Μορφοποίηση του φόντου της σελίδας με χρήση CSS', 'Στην ενότητα αυτή θα δούμε με ποιόν τρόπο ορίζουμε φόντο σε διάφορα στοιχεία μιας σελίδας με χρήση των CSS ιδιοτήτων background-.', 'file2.docx'),
(3, 'Κείμενο και Γραμματοσειρά', 'Στην ενότητα αυτή θα δούμε πώς μπορούμε να μορφοποιήσουμε το κείμενο στις σελίδες μας χρησιμοποιώντας CSS ιδιότητες, καθώς και πώς μπορούμε να ορίσουμε μέγεθος, γραμματοσειρά και άλλα χαρακτηριστικά του κειμένου.', 'file3.docx'),
(5, 'Λίστες', 'Σε αυτό μάθημα θα δούμε πώς μορφοποιούμε HTML λίστες, με χρήση CSS.', 'file4.docx');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `homework`
--

CREATE TABLE `homework` (
  `idhomework` int(11) NOT NULL,
  `goals` mediumtext NOT NULL,
  `file` varchar(350) NOT NULL,
  `deliverable` mediumtext NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=greek;

--
-- Άδειασμα δεδομένων του πίνακα `homework`
--

INSERT INTO `homework` (`idhomework`, `goals`, `file`, `deliverable`, `date`) VALUES
(1, '<li>Εξοικείωση με το συντακτικό του CSS.</li>\r\n<li>Εξάσκηση στη μορφοποίηση φόντων.</li>\r\n<li>Εφαρμογή της γνώσης στην πράξη.</li>', 'ergasia1.docx', 'Το word αρχείο της εργασίας συμπληρωμένο.', '2022-01-15'),
(2, '<li>Εξάσκηση στη μορφοποίηση κειμένου.</li><li>Εξάσκηση στη μορφοποίηση γραμματοσειρών.</li><li>Εφαρμογή της γνώσης στην πράξη.</li>', 'ergasia2.docx', 'Το word αρχείο της εργασίας συμπληρωμένο.', '2022-02-10');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `users`
--

CREATE TABLE `users` (
  `idemail` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=greek;

--
-- Άδειασμα δεδομένων του πίνακα `users`
--

INSERT INTO `users` (`idemail`, `name`, `lastname`, `password`, `role`) VALUES
('atzanako@csd.auth.gr', 'Anna', 'Tzanakopoulou', '2c3b891d8957cc8dd42f56675a920f58kLsP2stYdeW6', 'tutor'),
('georgeMichael@gmail.com', 'George', 'Michael', 'd0224f1d9e899153c15c290530a6634bkLsP2stYdeW6', 'student'),
('mariapappa@gmail.com', 'Maria', 'Pappa', '3e99d0031449b9f436c9e899287d5676kLsP2stYdeW6', 'student');

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`idannouncement`);

--
-- Ευρετήρια για πίνακα `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`iddocuments`);

--
-- Ευρετήρια για πίνακα `homework`
--
ALTER TABLE `homework`
  ADD PRIMARY KEY (`idhomework`);

--
-- Ευρετήρια για πίνακα `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idemail`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `announcement`
--
ALTER TABLE `announcement`
  MODIFY `idannouncement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT για πίνακα `documents`
--
ALTER TABLE `documents`
  MODIFY `iddocuments` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT για πίνακα `homework`
--
ALTER TABLE `homework`
  MODIFY `idhomework` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
