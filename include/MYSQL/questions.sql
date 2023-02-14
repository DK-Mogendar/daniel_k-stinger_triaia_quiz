-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Feb 01, 2023 at 04:08 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int NOT NULL,
  `topic` enum('music','ch-norris','animals','movies','d-n-d','astronautics','technology','ai','geography','sports','science','informatics','gen-knowledge') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `question_text` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer-1` varchar(127) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer-2` varchar(127) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer-3` varchar(127) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer-4` varchar(127) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer-5` varchar(127) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `correct` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `topic`, `question_text`, `answer-1`, `answer-2`, `answer-3`, `answer-4`, `answer-5`, `correct`) VALUES
(201, 'animals', 'Which order does the guinea pig belong to?', 'Bird\r\n', 'Dogs\r\n', 'Pigs\r\n', 'Rodents\r\n', 'Cats', 'answer-4'),
(202, 'animals', 'What is also a term for \"Orcas\"?\r\n\r\n', 'Dagger whales\r\n', 'Saber whales\r\n', 'Killer whales\r\n', 'Foil whales', 'Sword whales', 'answer-3'),
(203, 'animals', 'Which animal does not exist?', 'Elephant\r\n', 'Elephant seal\r\n', 'Sea ​​giraffe\r\n', 'Sea ​​lion\r\n', 'Leopard seal', 'answer-3'),
(204, 'animals', 'How many arms does an octopus have?', '4', '6', '8', '3', '7', 'answer-3'),
(205, 'animals', 'What is an animal here?', 'Mengo', 'Mango\r\n', 'Manga\r\n', 'Menga\r\n', 'Mungo', 'answer-5'),
(206, 'animals', 'Which of these animals belongs to the camels?', 'Lama\r\n\r\n', 'Zebra\r\n', 'Pony\r\n', 'Wild donkey', 'Sorcerer', 'answer-1'),
(207, 'animals', 'Blue lips, palate and tongue are special features of which dog breed?\r\n', 'Jack Russell Terrier\r\n', 'Afghan Hound\r\n', 'Assassin Hound', 'Basset Hound\r\n', 'Chow chow', 'answer-5'),
(208, 'animals', 'What is not a bird but a disease?', 'the green star\r\n', 'the cabbage raven\r\n', 'the blue tit\r\n', 'the great tit', 'the red tit', 'answer-1'),
(210, 'animals', 'What is the shark\'s dorsal fin called?', 'Rus\r\n', 'Dane\r\n', 'Swede\r\n', 'Fin\r\n', 'Norwegian', 'answer-4'),
(211, 'animals', 'What is a female wild boar called?', 'Saw\r\n', 'Bache\r\n', 'Bream\r\n', 'Sow\r\n', 'Boar', 'answer-2'),
(212, 'animals', 'Which is the fastest land mammal in the world?', 'Cheetah\r\n', 'Tiger\r\n', 'Lion\r\n', 'Jaguar\r\n', 'Ozelot', 'answer-1'),
(213, 'animals', 'When birds look after their eggs by nest warmth, is this called ...?', 'Sleep\r\n', 'Snack\r\n', 'Breeding season\r\n', 'Roasting time\r\n', 'Bedtime', 'answer-3'),
(214, 'animals', 'Which animals did Konrad Lorenz primarily use for his behavioral research?', 'Bird', 'Dolphins\r\n', 'Dogs\r\n', 'Cats\r\n', 'Greylag geese', 'answer-5'),
(215, 'animals', 'Which is not a breed of cat?', 'Persian\r\n', 'Chihuahua\r\n', 'Siam\r\n', 'Abyssinian\r\n', 'House Cat', 'answer-2'),
(216, 'animals', 'Beavers are known for building distinctive...?', 'Dam\r\n', 'Castles\r\n', 'Castlesrock\r\n', 'Churches\r\n', 'Country estates', 'answer-2'),
(217, 'animals', 'Which of the following birds is not a sea or water bird?', 'Alk\r\n', 'Kiwi\r\n', 'Guillemot\r\n', 'Gull\r\n', 'Penguin', 'answer-2'),
(218, 'animals', 'Which insects are also incorrectly called \"white ants\"?', 'Bulldog ants\r\n', 'Red ants in winter plumage\r\n', 'Termites\r\n', 'Grilling\r\n', 'Carpenter ants', 'answer-3'),
(219, 'animals', 'Who has a beak and two wings?', 'Warbler\r\n', 'Hay brake\r\n', 'Herb fly\r\n', 'Flower snake\r\n', 'Fly', 'answer-1'),
(220, 'animals', 'What kind of animal is the lady-in-waiting?', 'Bulfly\r\n', 'Barn owl\r\n', 'Crested chicken\r\n', 'Butterfly fish\r\n', 'Butterfly', 'answer-5'),
(221, 'animals', 'What do bats, moles and dolphins have in common?', 'All are mammals.\r\n', 'All are cold-blooded animals.\r\n', 'All are loners.\r\n', 'All are herd animals.', 'All are animals', 'answer-1'),
(222, 'animals', 'What do butterflies smell with?', 'With the wings\r\n', 'With the nose\r\n', 'With the mouth\r\n', 'With the feelers\r\n', 'With the eye', 'answer-4'),
(223, 'animals', 'Which animal do motorists see on the deer crossing warning signs in Sweden?', 'a Cat\r\n', 'a Bear\r\n', 'a Moose\r\n', 'a Bison\r\n', 'a Husky', 'answer-3'),
(224, 'animals', 'What is a silverback?', 'An adult, strong male gorilla\r\n\r\n', 'The leader of a pride of lions\r\n\r\n', 'Another name for a skunk\r\n\r\n', 'An old graying kangaroo', 'An adult, strong female gorilla', 'answer-1'),
(225, 'animals', 'Which bird family does the magpie belong to?', 'Travel birds\r\n', 'Migratory birds\r\n', 'Birds of prey\r\n', 'Corvids\r\n', 'Tropical birds', 'answer-4'),
(226, 'animals', 'Where do the largest wild brown bears live?', 'Arctic\r\n', 'South America\r\n', 'North America\r\n', 'Asia\r\n', 'Europe', 'answer-3'),
(227, 'animals', 'The \"Black Widow\" is a ...?', 'Snake\r\n', 'Spider\r\n', 'Line\r\n', 'Polyps\r\n', 'Octopus', 'answer-2'),
(228, 'animals', 'Water striders are...?', 'Cat\r\n', 'Birds\r\n', 'Fish\r\n', 'Insects\r\n', 'Mammals', 'answer-4'),
(229, 'animals', 'Which is the most species-rich group of animals?', 'Birds\r\n', 'Insects\r\n', 'Reptiles\r\n', 'Mammals\r\n', 'Fish', 'answer-2'),
(230, 'animals', 'Which cell types belong to the immune system of vertebrates?', 'Hepatocytes\r\n', 'Fibroblasts\r\n', 'Lymphocytes\r\n', 'Ganglion cells\r\n', 'Cells', 'answer-3'),
(231, 'animals', 'What type of fish is there?', 'Powder roach\r\n', 'Comb trout\r\n', 'Mirror carp\r\n', 'Cream pike', 'Coffe pike', 'answer-3'),
(232, 'animals', 'Which of these sea creatures doesn\'t breathe with one lung?', 'Whale shark\r\n', 'Gray seal\r\n', 'Sea ​​otter\r\n', 'Dolphin\r\n', 'Sea Dog', 'answer-1'),
(233, 'animals', 'What do adders mainly eat?', 'Rabbits, young deer\r\n\r\n', 'Fruit and vegetables\r\n\r\n', 'Frogs and small mammals\r\n\r\n', 'Ants and worms', 'Ants', 'answer-3'),
(234, 'animals', 'Where can you find zebras in the wild?', 'Africa\r\n', 'South America\r\n', 'Asia\r\n', 'Australia', 'Europs', 'answer-1'),
(235, 'animals', 'What do you call young pigs?', 'Human\r\n', 'Puppies\r\n', 'Piglet\r\n', 'Foal\r\n', 'Drake', 'answer-3'),
(236, 'animals', 'A baboon living in Africa and Egypt is called ...?', 'Coolman Baboon\r\n', 'Hamadryas Baboon\r\n', 'Scrub baboon\r\n', 'Blossom Baboon\r\n', 'Poncho baboon', 'answer-1'),
(237, 'animals', 'Many animal species have their ecological ...?', 'Door\r\n', 'Corner\r\n', 'Niche\r\n', 'Swath\r\n', 'Broom closet', 'answer-2'),
(238, 'animals', 'The dung beetle family includes the...?', 'quack quack\r\n\r\n', 'quack\r\n\r\n', 'pill turner\r\n', 'dental plumber', 'pill rounder', 'answer-3'),
(239, 'animals', 'What color are the eyes of an albino?', 'Black\r\n', 'Green\r\n', 'Blue\r\n', 'Red\r\n', 'Gray', 'answer-4'),
(240, 'animals', 'What genus do deer belong to?', 'Dogs\r\n', 'Cats\r\n', 'Predators\r\n', 'Ruminant\r\n', 'Bears', 'answer-4'),
(241, 'animals', 'Which animal has nostrils?', 'Snake\r\n', 'Tit\r\n', 'Frog\r\n', 'Horse\r\n', 'Line', 'answer-4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10000;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
