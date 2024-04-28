
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


-- USERS 
CREATE TABLE `users` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `fName` varchar(255) NOT NULL,
  `lName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `joined_date` date NOT NULL,
  `uHash` varchar(255) NOT NULL,
    PRIMARY KEY(uid),
    UNIQUE KEY(email)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Topics
CREATE TABLE `topics` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `topicName` varchar(255) NOT NULL,
  PRIMARY KEY(tid)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--StudyMaterial

CREATE TABLE `studymaterial` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `tid` int(11) NOT NULL,
  `description` TEXT,
  `material` VARCHAR(255),
  PRIMARY KEY(sid),
  FOREIGN KEY (tid) REFERENCES topics(tid)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--PracticeQuestions
CREATE TABLE `practicequestions` (
  `qid` int(11) NOT NULL AUTO_INCREMENT,
  `tid` int(11) NOT NULL,
  `question` TEXT,
  `answer` TEXT,
  PRIMARY KEY(qid),
  FOREIGN KEY (tid) REFERENCES topics(tid)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--Quizzes
CREATE TABLE `quizzes` (
   quizid INT PRIMARY KEY,
       tid INT,
       quiz VARCHAR(255),
       FOREIGN KEY (tid) REFERENCES Topics(tid)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- quiz Questions Table 
CREATE TABLE `quiz_questions` (
   id INT PRIMARY KEY,
   quiz_id INT,
   question TEXT,
   option_a VARCHAR(255),
   option_b VARCHAR(255),
   option_c VARCHAR(255),
   option_d VARCHAR(255),
   correct_answer VARCHAR(1),
   FOREIGN KEY (quiz_id) REFERENCES `quizzes`(quizid)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


