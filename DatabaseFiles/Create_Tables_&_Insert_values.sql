

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `Έχει Ανασκαφ. τεχνική`
--

CREATE TABLE `Έχει Ανασκαφ. τεχνική` (
  `ΣΜid` int(11) NOT NULL,
  `Ανασκαφ. τεχνικήid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `Έχει Βάσει`
--

CREATE TABLE `Έχει Βάσει` (
  `ΣΜid` int(11) NOT NULL,
  `Βάσειid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `Έχει Δάπεδο`
--

CREATE TABLE `Έχει Δάπεδο` (
  `Δάπεδοid` int(11) NOT NULL,
  `ΣΜid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `Έχει Προσμίξεις`
--

CREATE TABLE `Έχει Προσμίξεις` (
  `Προσμίξειςid` int(11) NOT NULL,
  `ΣΜid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `Έχει Σκελετό`
--

CREATE TABLE `Έχει Σκελετό` (
  `ΣΜid` int(11) NOT NULL,
  `ΣκελετόςId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `Έχει Σκελετό`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `Έχει Τοιχοποιία`
--

CREATE TABLE `Έχει Τοιχοποιία` (
  `ΣΜid` int(11) NOT NULL,
  `Τοιχοποία Επιλογέςid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `Έχει Υλικό`
--

CREATE TABLE `Έχει Υλικό` (
  `ΣΜid` int(11) NOT NULL,
  `Υλικόid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `Ανασκαφ. τεχνική`
--

CREATE TABLE `Ανασκαφ. τεχνική` (
  `id` int(11) NOT NULL,
  `Selections` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `Ανασκαφ. τεχνική`
--

INSERT INTO `Ανασκαφ. τεχνική` (`id`, `Selections`) VALUES
(1, 'Εκσκαφέας'),
(2, 'Κασμάς'),
(3, 'Σκαλίδι'),
(4, 'Μυστρί'),
(5, 'Οδοντ. εργαλείο');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `Βάσει`
--

CREATE TABLE `Βάσει` (
  `id` int(11) NOT NULL,
  `Selections` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `Βάσει`
--

INSERT INTO `Βάσει` (`id`, `Selections`) VALUES
(1, 'Κεραμ.'),
(2, 'Νομίσμ.'),
(3, 'Άλλο');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `Δάπεδο`
--

CREATE TABLE `Δάπεδο` (
  `id` int(11) NOT NULL,
  `Selections` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `Δάπεδο`
--

INSERT INTO `Δάπεδο` (`id`, `Selections`) VALUES
(1, 'χώμα'),
(2, 'πατημένο χώμα'),
(3, 'πηλόχωμα'),
(4, 'κονίαμα'),
(5, 'πλακόστρωτο (λίθος)'),
(6, 'πλακόστρωτο (κεραμικό)'),
(7, 'καλντερίμι'),
(8, 'βοτσαλωτό'),
(9, 'ψηφιδωτό');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `Δομή/Υφή`
--

CREATE TABLE `Δομή/Υφή` (
  `id` int(11) NOT NULL,
  `Selections` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `Δομή/Υφή`
--

INSERT INTO `Δομή/Υφή` (`id`, `Selections`) VALUES
(1, 'Ομοιογενής'),
(2, 'Ανομοιογενής'),
(3, 'Πολύ συμπαγής'),
(4, 'Συμπαγής'),
(5, 'Αρκετά συμπαγής'),
(6, 'Χαλαρή'),
(7, 'Πολύ χαλαρή');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `Επίχρισμα(είδος)`
--

CREATE TABLE `Επίχρισμα(είδος)` (
  `id` int(11) NOT NULL,
  `Selections` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `Επίχρισμα(είδος)`
--

INSERT INTO `Επίχρισμα(είδος)` (`id`, `Selections`) VALUES
(1, 'ασβεστοκονίαμα'),
(2, 'υδραυλικό κονίαμα');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `Επίχρισμα (χρώμα)`
--

CREATE TABLE `Επίχρισμα (χρώμα)` (
  `id` int(11) NOT NULL,
  `Selections` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `Επίχρισμα (χρώμα)`
--

INSERT INTO `Επίχρισμα (χρώμα)` (`id`, `Selections`) VALUES
(1, 'υπόλευκο'),
(2, 'ερυθρωπό'),
(3, 'κιτρινωπό');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `Επιλογές Λίθου`
--

CREATE TABLE `Επιλογές Λίθου` (
  `ιid` int(11) NOT NULL,
  `Selections` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `Επιλογές Λίθου`
--

INSERT INTO `Επιλογές Λίθου` (`ιid`, `Selections`) VALUES
(1, 'ασβεστόλιθος'),
(2, 'μάρμαρο'),
(3, 'αμμούδα');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `Θέση`
--

CREATE TABLE `Θέση` (
  `id` int(11) NOT NULL,
  `Selections` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `Θέση`
--

INSERT INTO `Θέση` (`id`, `Selections`) VALUES
(1, 'Αρχική'),
(2, 'Τυχαία'),
(3, 'Επανάχρηση'),
(4, 'Άλλο');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `Κατηγορία/τύπος`
--

CREATE TABLE `Κατηγορία/τύπος` (
  `id` int(11) NOT NULL,
  `Selections` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `Κατηγορία/τύπος`
--

INSERT INTO `Κατηγορία/τύπος` (`id`, `Selections`) VALUES
(1, 'Κατοίκηση'),
(2, 'Πρόσχωση'),
(3, 'Επίχωση'),
(4, 'Καταστροφή'),
(5, 'Απόρριψη'),
(6, 'Απόθεση'),
(7, 'Γέμισμα'),
(8, 'Δάπεδο'),
(9, 'Επιφάνεια κυκλ.'),
(10, 'Στρώμα'),
(11, 'Τεχνητό στρώμα'),
(12, 'Εστία'),
(13, 'Πασαλότρυπα'),
(14, 'Πηγάδι'),
(15, 'Όρυγμα/Λάκκος'),
(16, 'Τάφρος'),
(17, 'Τάφρος θεμελίωσης'),
(18, 'Σιρός'),
(19, 'Αγγείο κατά χώραν'),
(20, 'Σκελετός'),
(21, 'Τοίχος'),
(22, 'Πεσσός'),
(23, 'Θρανίο'),
(24, 'Θύρα'),
(25, 'Κατώφλι'),
(26, 'Κτιστό δάπεδο'),
(27, 'Οδόστρωμα'),
(28, 'Αγωγός'),
(29, 'Λεκάνη'),
(30, 'Κλίβανος'),
(31, 'Τάφος'),
(32, 'Κονίαμα');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `Κλίση προς`
--

CREATE TABLE `Κλίση προς` (
  `id` int(11) NOT NULL,
  `Selections` char(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `Κλίση προς`
--

INSERT INTO `Κλίση προς` (`id`, `Selections`) VALUES
(1, 'Β'),
(2, 'Ν'),
(3, 'Α'),
(4, 'Δ'),
(5, 'ΒΑ'),
(6, 'ΒΔ'),
(7, 'ΝΑ'),
(8, 'ΝΔ');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `Οστά`
--

CREATE TABLE `Οστά` (
  `id` int(11) NOT NULL,
  `Selections` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `Οστά`
--

INSERT INTO `Οστά` (`id`, `Selections`) VALUES
(1, 'Συνδεδεμένα'),
(2, 'Ασύνδετα');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `Πιθανότητα επιμίξεων`
--

CREATE TABLE `Πιθανότητα επιμίξεων` (
  `id` int(11) NOT NULL,
  `Selections` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `Πιθανότητα επιμίξεων`
--

INSERT INTO `Πιθανότητα επιμίξεων` (`id`, `Selections`) VALUES
(1, 'Καμία'),
(2, 'Μικρή'),
(3, 'Υψηλή'),
(4, 'Άγνωστη');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `Προσμίξεις`
--

CREATE TABLE `Προσμίξεις` (
  `id` int(11) NOT NULL,
  `Selections` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `Προσμίξεις`
--

INSERT INTO `Προσμίξεις` (`id`, `Selections`) VALUES
(1, 'Στάχτη'),
(2, 'Κάρβουνο'),
(3, 'Λίθοι'),
(4, 'Κονίαμα'),
(5, 'Κεραμίδια'),
(6, 'Γυαλί'),
(7, 'Μέταλλα'),
(8, 'Σκωρίες'),
(9, 'Οστά'),
(10, 'Όστρεα'),
(11, 'Άλλα');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `ΣΜ`
--

CREATE TABLE `ΣΜ` (
  `id` int(11) NOT NULL,
  `ΣΜ` int(11) DEFAULT NULL,
  `Έτος` int(4) DEFAULT NULL,
  `Ταυτότητα` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Ανωτ Υ` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Κατωτ Υ` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `B` int(11) DEFAULT NULL,
  `Α` int(11) DEFAULT NULL,
  `Ν` int(11) DEFAULT NULL,
  `Δ` int(11) DEFAULT NULL,
  `Αντίστοιχη με` varchar(8) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Σύγχρονη με` varchar(8) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Κάτω` int(11) DEFAULT NULL,
  `Πάνω` int(11) DEFAULT NULL,
  `Μήκος` double DEFAULT NULL,
  `Πλάτος` double DEFAULT NULL,
  `Διάμετρος` double DEFAULT NULL,
  `Βάθος` double DEFAULT NULL,
  `Ύψος` double DEFAULT NULL,
  `Πάχος` double DEFAULT NULL,
  `Λίθος Κείμενο` int(11) DEFAULT NULL,
  `Πλίνθος Κείμενο` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Συνδετικό υλικό(χρώμα) Κείμενο` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Επίχρισμα (είδος) Κείμενο` int(11) DEFAULT NULL,
  `Επίσχρισμα (χρώμα) Κείμενο` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Κεραμοπλαστικός διάοσμος` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Spolia` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Ξύλο` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Μεγεθος στοιχείων` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Αριθμ. σωζ δομών` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Πειγραφή/ερμηνεία` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Χαρακτ. σε σχ. με ΣΜ` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Σχέσεις με ΣΜ` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Κόσκινο` bit(1) DEFAULT NULL,
  `Νεροκόσκινο` bit(1) DEFAULT NULL,
  `Κόσκινο Ποσοστό` int(11) DEFAULT NULL,
  `Νεροκόσκινο Ποσοστό` int(11) DEFAULT NULL,
  `Ποσότητα κεραμικής` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Ημερολόγιο` int(11) DEFAULT NULL,
  `ΣκαρίφημαPath` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ΦώτοPath` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ΚάτοψηPath` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ΌψηPath` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Συντάκτης` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Ημερομηνία` date DEFAULT NULL,
  `Επίχρισμα(είδος)id` int(11) NOT NULL,
  `Χρονολόγηση μέχριid` int(11) NOT NULL,
  `Χρονολόγηση αποid` int(11) NOT NULL,
  `Συνθήκεςid` int(11) NOT NULL,
  `Θέσηid` int(11) NOT NULL,
  `Συνδετικό υλικόid` int(11) NOT NULL,
  `Χρώμαid` int(11) NOT NULL,
  `Κατηγορία/τύποςid` int(11) NOT NULL,
  `Επιλογές Λίθουιid` int(11) NOT NULL,
  `Δομή/Υφήid` int(11) NOT NULL,
  `ΤύποςΣΜid` int(11) NOT NULL,
  `Πιθανότητα επιμίξεωνid` int(11) NOT NULL,
  `Επίχρισμα (χρώμα)id` int(11) NOT NULL,
  `Κλίση προςid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `ΣΜ`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `Σκελετός`
--

CREATE TABLE `Σκελετός` (
  `Id` int(11) NOT NULL,
  `ΣΜ κοψίματος` int(11) DEFAULT NULL,
  `Τομέας` int(11) DEFAULT NULL,
  `Κατασκευή` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Ενότητα` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Σύνολο` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Φάση` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Ταυτότητα` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Κάτω/πριν από` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Πάνω/μετά από` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Β` int(11) DEFAULT NULL,
  `Ν` int(11) DEFAULT NULL,
  `Α` int(11) DEFAULT NULL,
  `Δ` int(11) DEFAULT NULL,
  `Ανωτ. Υ κραν` int(11) DEFAULT NULL,
  `Κατώτ Υ. κραν.` int(11) DEFAULT NULL,
  `Πλάτος` double DEFAULT NULL,
  `Βάθος` double DEFAULT NULL,
  `Προσανατολισμός` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Γενική στάση σώματος` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Κεφάλι` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Μήκος` int(11) DEFAULT NULL,
  `Κορμός` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Δεξί χέρι` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Αριστερό χέρι` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Δεξί πόδι` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Αριστερό πόδι` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Περιγραφή/σχόλια` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Υ. σκελετού κατά χώραν` int(11) DEFAULT NULL,
  `Μήκ. μηριαίου οστού` int(11) DEFAULT NULL,
  `Συνευρήματα` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Ανασκ. τεχνική` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Συνθήκες` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ΣκαρίφημαPath` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ΦώτοPath` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ΣχέδιοPath` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Ημερολόγιο` int(11) DEFAULT NULL,
  `Συντάκτης` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Ημερομηνία` date DEFAULT NULL,
  `Τύπος Ταφήςid` int(11) NOT NULL,
  `Τύπος τάφουid` int(11) NOT NULL,
  `Οστάid` int(11) NOT NULL,
  `Ταφήid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `Σκελετός`
--

-----------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `Συνδετικό υλικό`
--

CREATE TABLE `Συνδετικό υλικό` (
  `id` int(11) NOT NULL,
  `Selections` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `Συνδετικό υλικό`
--

INSERT INTO `Συνδετικό υλικό` (`id`, `Selections`) VALUES
(1, 'υπόλευκο'),
(2, 'φαιό'),
(3, 'ερυθρωπό');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `Συνθήκες`
--

CREATE TABLE `Συνθήκες` (
  `id` int(11) NOT NULL,
  `Selections` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `Συνθήκες`
--

INSERT INTO `Συνθήκες` (`id`, `Selections`) VALUES
(1, 'Ξηρές'),
(2, 'Υγρές');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `Ταφή`
--

CREATE TABLE `Ταφή` (
  `id` int(11) NOT NULL,
  `Selections` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `Ταφή`
--

INSERT INTO `Ταφή` (`id`, `Selections`) VALUES
(1, 'Πρωτογενής'),
(2, 'Δευτερογενής');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `Τοιχοποία`
--

CREATE TABLE `Τοιχοποία` (
  `id` int(11) NOT NULL,
  `Selections` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `Τοιχοποία`
--

INSERT INTO `Τοιχοποία` (`id`, `Selections`) VALUES
(1, 'ισόδομη'),
(2, 'ψευδοϊσόδομη'),
(3, 'αργολιθοδομή'),
(4, 'πλινθοπερίκλειστη'),
(5, 'πλινθοδομή'),
(6, 'σύστημα κρυμμένης πλίνθου'),
(7, 'μεικτή'),
(8, 'κυκλώπεια');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `ΤύποςΣΜ`
--

CREATE TABLE `ΤύποςΣΜ` (
  `id` int(11) NOT NULL,
  `Selections` char(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `ΤύποςΣΜ`
--

INSERT INTO `ΤύποςΣΜ` (`id`, `Selections`) VALUES
(1, 'ΣΜ ΘΕΤΙΚΗ'),
(2, 'ΣΜ ΑΡΝΗΤΙΚΗ'),
(3, 'ΣΜ ΔΟΜΗΣΗΣ');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `Τύπος Ταφής`
--

CREATE TABLE `Τύπος Ταφής` (
  `id` int(11) NOT NULL,
  `Selections` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `Τύπος Ταφής`
--

INSERT INTO `Τύπος Ταφής` (`id`, `Selections`) VALUES
(1, 'Ταφή'),
(2, 'Καύση');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `Τύπος τάφου`
--

CREATE TABLE `Τύπος τάφου` (
  `id` int(11) NOT NULL,
  `Selections` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `Τύπος τάφου`
--

INSERT INTO `Τύπος τάφου` (`id`, `Selections`) VALUES
(1, 'Λακκοειδής'),
(2, 'Λαξευτός'),
(3, 'Κτιστός'),
(4, 'Καλυβίτης'),
(5, 'Εγχυτρισμός');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `Υλικό`
--

CREATE TABLE `Υλικό` (
  `id` int(11) NOT NULL,
  `Selections` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `Υλικό`
--

INSERT INTO `Υλικό` (`id`, `Selections`) VALUES
(1, 'Άργιλος'),
(2, 'Ιλύς'),
(3, 'Άμμος'),
(4, 'Χαλίκι'),
(5, 'Πετρούλες'),
(6, 'Λίθοι');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `Χρονολόγηση απο`
--

CREATE TABLE `Χρονολόγηση απο` (
  `id` int(11) NOT NULL,
  `Selections` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `Χρονολόγηση απο`
--

INSERT INTO `Χρονολόγηση απο` (`id`, `Selections`) VALUES
(1, 'αρχή'),
(2, 'μέσα'),
(3, 'τέλος'),
(4, 'α΄ τέταρτο'),
(5, 'β΄ τέταρτο'),
(6, 'γ΄ τέταρτο'),
(7, 'δ΄ τέταρτο');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `Χρονολόγηση μέχρι`
--

CREATE TABLE `Χρονολόγηση μέχρι` (
  `id` int(11) NOT NULL,
  `Selections` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `Χρονολόγηση μέχρι`
--

INSERT INTO `Χρονολόγηση μέχρι` (`id`, `Selections`) VALUES
(1, 'αρχή'),
(2, 'μέσα'),
(3, 'τέλος'),
(4, 'α΄ τέταρτο'),
(5, 'β΄ τέταρτο'),
(6, 'γ΄ τέταρτο'),
(7, 'δ΄ τέταρτο');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `Χρώμα`
--

CREATE TABLE `Χρώμα` (
  `id` int(11) NOT NULL,
  `Selections` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Άδειασμα δεδομένων του πίνακα `Χρώμα`
--

INSERT INTO `Χρώμα` (`id`, `Selections`) VALUES
(1, 'Λευκό'),
(2, 'Κιτρινωπό'),
(3, 'Καστανό ανοιχτό'),
(4, 'Καστανό σκούρο'),
(5, 'Ερυθρό'),
(6, 'Πρασινωπό'),
(7, 'Γκρίζο'),
(8, 'Μαύρο');

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `Έχει Ανασκαφ. τεχνική`
--
ALTER TABLE `Έχει Ανασκαφ. τεχνική`
  ADD PRIMARY KEY (`ΣΜid`,`Ανασκαφ. τεχνικήid`),
  ADD KEY `FKΈχει Ανασκ796372` (`Ανασκαφ. τεχνικήid`);

--
-- Ευρετήρια για πίνακα `Έχει Βάσει`
--
ALTER TABLE `Έχει Βάσει`
  ADD PRIMARY KEY (`ΣΜid`,`Βάσειid`),
  ADD KEY `FKΈχει Βάσει308191` (`Βάσειid`);

--
-- Ευρετήρια για πίνακα `Έχει Δάπεδο`
--
ALTER TABLE `Έχει Δάπεδο`
  ADD PRIMARY KEY (`Δάπεδοid`,`ΣΜid`),
  ADD KEY `FKΈχει Δάπεδ694488` (`ΣΜid`);

--
-- Ευρετήρια για πίνακα `Έχει Προσμίξεις`
--
ALTER TABLE `Έχει Προσμίξεις`
  ADD PRIMARY KEY (`Προσμίξειςid`,`ΣΜid`),
  ADD KEY `FKΈχει Προσμ170122` (`ΣΜid`);

--
-- Ευρετήρια για πίνακα `Έχει Σκελετό`
--
ALTER TABLE `Έχει Σκελετό`
  ADD PRIMARY KEY (`ΣΜid`,`ΣκελετόςId`),
  ADD KEY `FKΈχει Σκελε878765` (`ΣκελετόςId`);

--
-- Ευρετήρια για πίνακα `Έχει Τοιχοποιία`
--
ALTER TABLE `Έχει Τοιχοποιία`
  ADD PRIMARY KEY (`ΣΜid`,`Τοιχοποία Επιλογέςid`),
  ADD KEY `FKΈχει Τοιχο900826` (`Τοιχοποία Επιλογέςid`);

--
-- Ευρετήρια για πίνακα `Έχει Υλικό`
--
ALTER TABLE `Έχει Υλικό`
  ADD PRIMARY KEY (`ΣΜid`,`Υλικόid`),
  ADD KEY `FKΈχει Υλικό269372` (`Υλικόid`);

--
-- Ευρετήρια για πίνακα `Ανασκαφ. τεχνική`
--
ALTER TABLE `Ανασκαφ. τεχνική`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `Βάσει`
--
ALTER TABLE `Βάσει`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `Δάπεδο`
--
ALTER TABLE `Δάπεδο`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `Δομή/Υφή`
--
ALTER TABLE `Δομή/Υφή`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `Επίχρισμα(είδος)`
--
ALTER TABLE `Επίχρισμα(είδος)`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `Επίχρισμα (χρώμα)`
--
ALTER TABLE `Επίχρισμα (χρώμα)`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `Επιλογές Λίθου`
--
ALTER TABLE `Επιλογές Λίθου`
  ADD PRIMARY KEY (`ιid`);

--
-- Ευρετήρια για πίνακα `Θέση`
--
ALTER TABLE `Θέση`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `Κατηγορία/τύπος`
--
ALTER TABLE `Κατηγορία/τύπος`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `Κλίση προς`
--
ALTER TABLE `Κλίση προς`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `Οστά`
--
ALTER TABLE `Οστά`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `Πιθανότητα επιμίξεων`
--
ALTER TABLE `Πιθανότητα επιμίξεων`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `Προσμίξεις`
--
ALTER TABLE `Προσμίξεις`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `ΣΜ`
--
ALTER TABLE `ΣΜ`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FKΣΜ397278` (`Επίχρισμα(είδος)id`),
  ADD KEY `FKΣΜ540376` (`Χρονολόγηση μέχριid`),
  ADD KEY `FKΣΜ848861` (`Χρονολόγηση αποid`),
  ADD KEY `FKΣΜ155110` (`Συνθήκεςid`),
  ADD KEY `FKΣΜ31865` (`Θέσηid`),
  ADD KEY `FKΣΜ288479` (`Συνδετικό υλικόid`),
  ADD KEY `FKΣΜ118974` (`Χρώμαid`),
  ADD KEY `FKΣΜ239272` (`Κατηγορία/τύποςid`),
  ADD KEY `FKΣΜ667431` (`Επιλογές Λίθουιid`),
  ADD KEY `FKΣΜ282831` (`Δομή/Υφήid`),
  ADD KEY `FKΣΜ118314` (`ΤύποςΣΜid`),
  ADD KEY `FKΣΜ481620` (`Πιθανότητα επιμίξεωνid`),
  ADD KEY `FKΣΜ725323` (`Επίχρισμα (χρώμα)id`),
  ADD KEY `FKΣΜ302605` (`Κλίση προςid`);

--
-- Ευρετήρια για πίνακα `Σκελετός`
--
ALTER TABLE `Σκελετός`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FKΣκελετός979261` (`Τύπος Ταφήςid`),
  ADD KEY `FKΣκελετός105093` (`Τύπος τάφουid`),
  ADD KEY `FKΣκελετός806318` (`Οστάid`),
  ADD KEY `FKΣκελετός90590` (`Ταφήid`);

--
-- Ευρετήρια για πίνακα `Συνδετικό υλικό`
--
ALTER TABLE `Συνδετικό υλικό`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `Συνθήκες`
--
ALTER TABLE `Συνθήκες`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `Ταφή`
--
ALTER TABLE `Ταφή`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `Τοιχοποία`
--
ALTER TABLE `Τοιχοποία`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `ΤύποςΣΜ`
--
ALTER TABLE `ΤύποςΣΜ`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `Τύπος Ταφής`
--
ALTER TABLE `Τύπος Ταφής`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `Τύπος τάφου`
--
ALTER TABLE `Τύπος τάφου`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `Υλικό`
--
ALTER TABLE `Υλικό`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `Χρονολόγηση απο`
--
ALTER TABLE `Χρονολόγηση απο`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `Χρονολόγηση μέχρι`
--
ALTER TABLE `Χρονολόγηση μέχρι`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `Χρώμα`
--
ALTER TABLE `Χρώμα`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `Ανασκαφ. τεχνική`
--
ALTER TABLE `Ανασκαφ. τεχνική`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT για πίνακα `Βάσει`
--
ALTER TABLE `Βάσει`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT για πίνακα `Δάπεδο`
--
ALTER TABLE `Δάπεδο`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT για πίνακα `Δομή/Υφή`
--
ALTER TABLE `Δομή/Υφή`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT για πίνακα `Επίχρισμα(είδος)`
--
ALTER TABLE `Επίχρισμα(είδος)`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT για πίνακα `Επίχρισμα (χρώμα)`
--
ALTER TABLE `Επίχρισμα (χρώμα)`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT για πίνακα `Επιλογές Λίθου`
--
ALTER TABLE `Επιλογές Λίθου`
  MODIFY `ιid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT για πίνακα `Θέση`
--
ALTER TABLE `Θέση`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT για πίνακα `Κατηγορία/τύπος`
--
ALTER TABLE `Κατηγορία/τύπος`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT για πίνακα `Κλίση προς`
--
ALTER TABLE `Κλίση προς`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT για πίνακα `Οστά`
--
ALTER TABLE `Οστά`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT για πίνακα `Πιθανότητα επιμίξεων`
--
ALTER TABLE `Πιθανότητα επιμίξεων`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT για πίνακα `Προσμίξεις`
--
ALTER TABLE `Προσμίξεις`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT για πίνακα `ΣΜ`
--
ALTER TABLE `ΣΜ`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT για πίνακα `Σκελετός`
--
ALTER TABLE `Σκελετός`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT για πίνακα `Συνδετικό υλικό`
--
ALTER TABLE `Συνδετικό υλικό`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT για πίνακα `Συνθήκες`
--
ALTER TABLE `Συνθήκες`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT για πίνακα `Ταφή`
--
ALTER TABLE `Ταφή`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT για πίνακα `Τοιχοποία`
--
ALTER TABLE `Τοιχοποία`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT για πίνακα `ΤύποςΣΜ`
--
ALTER TABLE `ΤύποςΣΜ`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT για πίνακα `Τύπος Ταφής`
--
ALTER TABLE `Τύπος Ταφής`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT για πίνακα `Τύπος τάφου`
--
ALTER TABLE `Τύπος τάφου`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT για πίνακα `Υλικό`
--
ALTER TABLE `Υλικό`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT για πίνακα `Χρονολόγηση απο`
--
ALTER TABLE `Χρονολόγηση απο`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT για πίνακα `Χρονολόγηση μέχρι`
--
ALTER TABLE `Χρονολόγηση μέχρι`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT για πίνακα `Χρώμα`
--
ALTER TABLE `Χρώμα`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Περιορισμοί για άχρηστους πίνακες
--

--
-- Περιορισμοί για πίνακα `Έχει Ανασκαφ. τεχνική`
--
ALTER TABLE `Έχει Ανασκαφ. τεχνική`
  ADD CONSTRAINT `FKΈχει Ανασκ454241` FOREIGN KEY (`ΣΜid`) REFERENCES `ΣΜ` (`id`),
  ADD CONSTRAINT `FKΈχει Ανασκ796372` FOREIGN KEY (`Ανασκαφ. τεχνικήid`) REFERENCES `Ανασκαφ. τεχνική` (`id`);

--
-- Περιορισμοί για πίνακα `Έχει Βάσει`
--
ALTER TABLE `Έχει Βάσει`
  ADD CONSTRAINT `FKΈχει Βάσει308191` FOREIGN KEY (`Βάσειid`) REFERENCES `Βάσει` (`id`),
  ADD CONSTRAINT `FKΈχει Βάσει574817` FOREIGN KEY (`ΣΜid`) REFERENCES `ΣΜ` (`id`);

--
-- Περιορισμοί για πίνακα `Έχει Δάπεδο`
--
ALTER TABLE `Έχει Δάπεδο`
  ADD CONSTRAINT `FKΈχει Δάπεδ162070` FOREIGN KEY (`Δάπεδοid`) REFERENCES `Δάπεδο` (`id`),
  ADD CONSTRAINT `FKΈχει Δάπεδ694488` FOREIGN KEY (`ΣΜid`) REFERENCES `ΣΜ` (`id`);

--
-- Περιορισμοί για πίνακα `Έχει Προσμίξεις`
--
ALTER TABLE `Έχει Προσμίξεις`
  ADD CONSTRAINT `FKΈχει Προσμ170122` FOREIGN KEY (`ΣΜid`) REFERENCES `ΣΜ` (`id`),
  ADD CONSTRAINT `FKΈχει Προσμ397956` FOREIGN KEY (`Προσμίξειςid`) REFERENCES `Προσμίξεις` (`id`);

--
-- Περιορισμοί για πίνακα `Έχει Σκελετό`
--
ALTER TABLE `Έχει Σκελετό`
  ADD CONSTRAINT `FKΈχει Σκελε878765` FOREIGN KEY (`ΣκελετόςId`) REFERENCES `Σκελετός` (`Id`),
  ADD CONSTRAINT `FKΈχει Σκελε987498` FOREIGN KEY (`ΣΜid`) REFERENCES `ΣΜ` (`id`);

--
-- Περιορισμοί για πίνακα `Έχει Τοιχοποιία`
--
ALTER TABLE `Έχει Τοιχοποιία`
  ADD CONSTRAINT `FKΈχει Τοιχο574269` FOREIGN KEY (`ΣΜid`) REFERENCES `ΣΜ` (`id`),
  ADD CONSTRAINT `FKΈχει Τοιχο900826` FOREIGN KEY (`Τοιχοποία Επιλογέςid`) REFERENCES `Τοιχοποία` (`id`);

--
-- Περιορισμοί για πίνακα `Έχει Υλικό`
--
ALTER TABLE `Έχει Υλικό`
  ADD CONSTRAINT `FKΈχει Υλικό269372` FOREIGN KEY (`Υλικόid`) REFERENCES `Υλικό` (`id`),
  ADD CONSTRAINT `FKΈχει Υλικό559163` FOREIGN KEY (`ΣΜid`) REFERENCES `ΣΜ` (`id`);

--
-- Περιορισμοί για πίνακα `ΣΜ`
--
ALTER TABLE `ΣΜ`
  ADD CONSTRAINT `FKΣΜ118314` FOREIGN KEY (`ΤύποςΣΜid`) REFERENCES `ΤύποςΣΜ` (`id`),
  ADD CONSTRAINT `FKΣΜ118974` FOREIGN KEY (`Χρώμαid`) REFERENCES `Χρώμα` (`id`),
  ADD CONSTRAINT `FKΣΜ155110` FOREIGN KEY (`Συνθήκεςid`) REFERENCES `Συνθήκες` (`id`),
  ADD CONSTRAINT `FKΣΜ239272` FOREIGN KEY (`Κατηγορία/τύποςid`) REFERENCES `Κατηγορία/τύπος` (`id`),
  ADD CONSTRAINT `FKΣΜ282831` FOREIGN KEY (`Δομή/Υφήid`) REFERENCES `Δομή/Υφή` (`id`),
  ADD CONSTRAINT `FKΣΜ288479` FOREIGN KEY (`Συνδετικό υλικόid`) REFERENCES `Συνδετικό υλικό` (`id`),
  ADD CONSTRAINT `FKΣΜ302605` FOREIGN KEY (`Κλίση προςid`) REFERENCES `Κλίση προς` (`id`),
  ADD CONSTRAINT `FKΣΜ31865` FOREIGN KEY (`Θέσηid`) REFERENCES `Θέση` (`id`),
  ADD CONSTRAINT `FKΣΜ397278` FOREIGN KEY (`Επίχρισμα(είδος)id`) REFERENCES `Επίχρισμα(είδος)` (`id`),
  ADD CONSTRAINT `FKΣΜ481620` FOREIGN KEY (`Πιθανότητα επιμίξεωνid`) REFERENCES `Πιθανότητα επιμίξεων` (`id`),
  ADD CONSTRAINT `FKΣΜ540376` FOREIGN KEY (`Χρονολόγηση μέχριid`) REFERENCES `Χρονολόγηση μέχρι` (`id`),
  ADD CONSTRAINT `FKΣΜ667431` FOREIGN KEY (`Επιλογές Λίθουιid`) REFERENCES `Επιλογές Λίθου` (`ιid`),
  ADD CONSTRAINT `FKΣΜ725323` FOREIGN KEY (`Επίχρισμα (χρώμα)id`) REFERENCES `Επίχρισμα (χρώμα)` (`id`),
  ADD CONSTRAINT `FKΣΜ848861` FOREIGN KEY (`Χρονολόγηση αποid`) REFERENCES `Χρονολόγηση απο` (`id`);

--
-- Περιορισμοί για πίνακα `Σκελετός`
--
ALTER TABLE `Σκελετός`
  ADD CONSTRAINT `FKΣκελετός105093` FOREIGN KEY (`Τύπος τάφουid`) REFERENCES `Τύπος τάφου` (`id`),
  ADD CONSTRAINT `FKΣκελετός806318` FOREIGN KEY (`Οστάid`) REFERENCES `Οστά` (`id`),
  ADD CONSTRAINT `FKΣκελετός90590` FOREIGN KEY (`Ταφήid`) REFERENCES `Ταφή` (`id`),
  ADD CONSTRAINT `FKΣκελετός979261` FOREIGN KEY (`Τύπος Ταφήςid`) REFERENCES `Τύπος Ταφής` (`id`);
COMMIT;
