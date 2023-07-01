CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100),
  `email` varchar(100),
  `mobile` varchar(15),
  PRIMARY KEY  (`id`)
);


INSERT INTO `users` (`name`, `mobile`, `email`) VALUES
('Dhany', '085745671234', 'dhany@gmail.com'),
('Revaldy', '0812345679876', 'revaldy@gmail.com'),
('Mutqi', '08314275467', 'mutqi@gmail.com'),
('Meikhal Firmansyah', '082112801811', 'meikhal.firmansyah@gmail.com');