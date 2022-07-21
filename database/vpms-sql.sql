SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `cpms`

-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `msgdate` text NOT NULL,
  `name` text NOT NULL,
  `phone` text NOT NULL,
  `msg` text NOT NULL
);

-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `name` text NOT NULL,
  `avator` blob NOT NULL,
  `password` text NOT NULL,
  `id_no` text NOT NULL,
  `plate_no` text NOT NULL,
  `id` int(11) NOT NULL,
  `pl_booked` text NOT NULL,
  `access` int(11) NOT NULL
);

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `email`, `phone`, `name`, `avator`, `password`, `id_no`, `plate_no`, `id`, `pl_booked`, `access`) VALUES
('admin', '', '012345', 'Adminstrator', '', '12345', '99999', 'KAC 1234', 1, 'YES', 0);

-- Table structure for table `zones`
--

CREATE TABLE `zones` (
  `street` text NOT NULL,
  `plot` text NOT NULL,
  `status` text NOT NULL,
  `model` text NOT NULL,
  `vehicle` text NOT NULL,
  `platenumber` text NOT NULL,
  `email` text NOT NULL,
  `account` text NOT NULL,
  `d1` text NOT NULL,
  `d2` text NOT NULL,
  `charge` text NOT NULL,
  `id` int(5) NOT NULL,
  `phone` text NOT NULL
);


-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

-- Indexes for table `zones`
--
ALTER TABLE `zones`
  ADD UNIQUE KEY `id` (`id`);


-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;


-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;


-- AUTO_INCREMENT for table `zones`
--
ALTER TABLE `zones`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

