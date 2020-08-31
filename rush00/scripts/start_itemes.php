#!/usr/bin/php
<?php
$link = mysqli_connect("127.0.0.1", "root", "Micken22", "rush00");
	// loading data into table 'products'
   mysqli_query($link, "INSERT INTO rush00.items (`name`, `price`, `category`, `subcategory`, `description`, `img`) VALUES ('Chateau Latour 1990', 1430.30, 'Left Bank', 'Pomerol', 'Full bodied, silky tannins ripe berry notes, fig notes, elegant leather notes, refined spicy notes, elegant', './database/img/chateau-latour-1990.jpg')"); 
mysqli_query($link, "INSERT INTO rush00.items (`name`, `price`, `category`, `subcategory`, `description`, `img`) VALUES ('Chateau Lafite Rothschild 2010', 1151.88, 'Left Bank', 'Spain','Full bodied, tannic, dark cherry notes, currant notes, blackberry notes, light cedar notes, spicy, oak notes, multi dimensional, long, elegant', './database/img/chateau-lafite-rothschild-2010.jpg')"); 
mysqli_query($link, "INSERT INTO rush00.items (`name`, `price`, `category`, `subcategory`, `description`, `img`) VALUES ('Chateau Cheval Blanc 2016', 917.04, 'Right Bank', 'Medoc', 'Full bodied, tannic, blackcurrant notes, dark cherry notes, pencil lead notes, light ink notes, hint of lavender, oak notes, multi dimensional, long', './database/img/chateau-cheval-blanc-2016.jpg')"); 
 mysqli_query($link, "INSERT INTO rush00.items (`name`, `price`, `category`, `subcategory`, `description`, `img`) VALUES ('Chateau Angelus 2007', 568.78, 'Right Bank', 'St Emilion', 'Medium bodied, medium tannic, aromatic, blackberry notes, blackcurrant notes', './database/img/chateau-angelus-2007.jpg')"); 

?>