
CREATE TABLE `stocks` (
  `id` int(11) NOT NULL,
  `supplier` varchar(20) CHARACTER SET utf8 NOT NULL,
  `product` varchar(100) CHARACTER SET utf8 NOT NULL,
  `quantity` varchar(30) CHARACTER SET utf8 NOT NULL,
  `original_price` varchar(30) CHARACTER SET utf8 NOT NULL,
  `selling_price` varchar(30) CHARACTER SET utf8 NOT NULL,
  `wholesale_price` varchar(30) CHARACTER SET utf8 NOT NULL,
  `quantity_out` varchar(30) CHARACTER SET utf8 NOT NULL,
  `out_branch` varchar(30) CHARACTER SET utf8 NOT NULL,
  `super_mall` varchar(30) CHARACTER SET utf8 NOT NULL,
  `teaoraereke` varchar(30) CHARACTER SET utf8 NOT NULL,
  `teaoraereke2` varchar(30) CHARACTER SET utf8 NOT NULL,
  `abemama` varchar(30) CHARACTER SET utf8 NOT NULL,
  `available_quantity` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `stocks` (`id`, `supplier`, `product`, `quantity`, `original_price`, `selling_price`, `wholesale_price`, `quantity_out`, `out_branch`, `super_mall`, `teaoraereke`, `teaoraereke2`, `abemama`, `available_quantity`) VALUES
(15, 'Henicki Enterprises', 'Long skirt#1', '85', '18', '15', '15', '', 'Not yet taken', 'Not delivered', 'Not delivered', '', 'Not delivered', 'As quantity'),

ALTER TABLE `stocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=280;
