<?php
	session_start();
	if (!isset($_SESSION["korb"]) && empty($_SESSION["korb"])) {
		$_SESSION["korb"] = array();
	} 

	//Speisekarten-Array
	$products = array(
	array('Pizza Lachs Gourmet M', 6.99),
	array('Pizza Lachs Gourmet L', 9.99),
	array('Pizza Lachs Gourmet XL', 15.70),
	array('Pizza Nacho Cheese Dog M', 7.90),
	array('Pizza Nacho Cheese Dog L', 11.50),
	array('Pizza Nacho Cheese Dog XL', 17.50),
	array('Pizza Spaghetti M', 5.95),
	array('Pizza Spaghetti L', 9.35),
	array('Pizza Spaghetti XL', 15.70),
	array('Pizza Hot Dog M', 6.90),
	array('Pizza Hot Dog L', 9.05),
	array('Pizza Hot Dog XL', 15.70),
	array('Pizza Diabolo M', 7.25),
	array('Pizza Diabolo L', 9.65),
	array('Pizza Diabolo X', 16.75),
	array('Anti Cola 0,5L', 2.50),
	array('Anti Cola 1L', 4.80),
	array('Anti Cola 5L', 21.90),
	array('Knoblauch', 0),
	array('Schafsoße', 0),
	array('Oregano', 0) );

	if(isset($_POST["loeschmich"])){
		array_splice($_SESSION["korb"], $_POST["loeschmich"], 1);
	}

	//if(!empty($_POST["order"]))
	if(isset($_POST["order"])){
		$zaehler = count($_SESSION["korb"]);
		//Produkt-ID in Bestellungen-Array eintragen
		$_SESSION["korb"][$zaehler][0] = $_POST["order"];
		
		//Wenn Extra gewählt, Eintragung in Bestellungen-Array
		$anzahl_extras = 0;
		$extras_string = "";
		if(!empty($_POST["extra_1"]) OR !empty($_POST["extra_2"]) OR !empty($_POST["extra_3"])){
			$extras_string = "Extras: ";
		}
		if(!empty($_POST["extra_1"])){
			$_SESSION["korb"][$zaehler][1] = 1;
			$anzahl_extras++;
			$extras_string .= "Knoblauch, ";
		} else {
			$_SESSION["korb"][$zaehler][1] = 0;
		}
		if(!empty($_POST["extra_2"])){
			$_SESSION["korb"][$zaehler][2] = 1;
			$anzahl_extras++;
			$extras_string .= "Schafsoße, ";
		} else {
			$_SESSION["korb"][$zaehler][2] = 0;
		}
		if(!empty($_POST["extra_3"])){
			$_SESSION["korb"][$zaehler][3] = 1;
			$anzahl_extras++;
			$extras_string .= "Oregano";
		} else {
			$_SESSION["korb"][$zaehler][3] = 0;
		}
		
		//Festlegung der Extra-Kosten entsprechend Pizza-Größe
		$faktor = $_SESSION["korb"][$zaehler][0]%3;
		$priceextra = $anzahl_extras * (1 + ($faktor/2));
		
		//Berechnung Kosten der Bestellposition (Wert Extra = 0 oder 1)
		$_SESSION["korb"][$zaehler][4] = ($products[$_SESSION["korb"][$zaehler][0]][1] + $priceextra);
		$_SESSION["korb"][$zaehler][5] = $extras_string;
	}	
?>
<html>
<head>
	<title>Pizzeria iGitt</title>
	<meta charset="UTF-8">
	<meta name="author" content="Anti Technologies">
	<meta name="description_pizza" content="Pizzeria iGitt">
	<meta name="keywords" content="Pizza, Ratte">
	<meta http-equiv=“cache-control“ content=“no-cache“>
	<meta http-equiv=“pragma“ content=“no-cache“>
	<meta http-equiv=“expires“ content=“0″>
	<link rel="SHORTCUT ICON" type="image/ico" href="pics/shortcut.jpg">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<table id="wrapper">
	<tr>
		<td class="wrappercolumnleft">
		</td>
		<td class="wrappercolumnright" id="logo">
		</td>
	</tr>
	<tr>
		<td class="wrappercolumnleft">
		</td>
		<td class="wrappercolumnright">
			<table id="navigation">
				<tr>
					<td>
						<a href="index.php">Registrieren</a> - <a href="index.php">An-/Abmelden</a> <a href="index.php"><img src="pics/schluessel.png" id="imgkey"></a>
					</td>
				</tr>
				<tr>
					<td>
						<a href="index.php">Speisekarte</a> - <a href="hygiene.html">Hygiene-Versprechen</a> - <a href="index.php">Bewerbung</a>
					</td>
				</tr>
			</table>
			<div id="screen">
				<table id="contenttable">
					<tr>
						<td id="contentcolumn">
							<table id="menutable">
								<tr>
									<td class="piccolumn">
										<img src="pics/pizza01.png" class="imgpizza">
									</td>
									<td class="infocolumn">
										<span class="pizzaname">Pizza Lachs Gourmet</span>
										<br>
										<table>
											<tr>
												<td class="description_pizza">
													Sauce Hollandaise, Lachswürfel, Spinat, würziger Hirtenkäse, Knoblauch und Goudakäse
												</td>
											</tr>
										</table>
										<form action="index.php" method="post">
										<table class="pricetable">
											<tr>
												<td class="price_lr">
													<input type="radio" id="o0" name="order" value="0" checked>
													<label for="o0">M: 6,99€</label>
												</td>
												<td class="price_m">
													<input type="radio" id="o1" name="order" value="1">
													<label for="o1">L: 9,99€</label>
												</td>
												<td class="price_lr">
													<input type="radio" id="o2" name="order" value="2">
													<label for="o2">XL: 15,70€</label>
												</td>
											</tr>
											<tr>
												<td class="price_lr">
													<label>
														<input type="checkbox" name="extra_1" value="1">
														Knoblauch
													</label>
												</td>
												<td class="price_m">
													<label>
														<input type="checkbox" name="extra_2" value="1">
														Schafsoße
													</label>
												</td>
												<td class="price_lr">
													<label>
														<input type="checkbox" name="extra_3" value="1">
														Oregano
													</label>
												</td>
											</tr>
										</table>
										<table class="pricetable">
											<tr>
												<td class="price_extras">
													Extra jeweils: M 1€ / L 1,50€ / XL 2€
												</td>
											</tr>
										</table>
										<table class="buttontable">
											<tr>
												<td class="buttoncolumn">
													<input type="image" src="pics/addcart.png" class="addcart">
												</td>
											</tr>
										</table>
										</form>
									</td>
								</tr>			
								<tr>
									<td class="piccolumn">
										<img src="pics/pizza02.png" class="imgpizza">
									</td>
									<td class="infocolumn">
										<span class="pizzaname">Pizza Nacho Cheese Dog</span>
										<br>
										<table>
											<tr>
												<td class="description_pizza">
													Cheese-Dip-Sauce, Hot Dog Wurst, frische Zwiebeln, rote Paprika, grüne Chili-Ringe, knackige Nacho-Chips, würzige Sour-Cream, Goudakäse, ein Becher Salsa-Sauce extra
												</td>
											</tr>
										</table>
										<form action="index.php" method="post">
										<table class="pricetable">
											<tr>
												<td class="price_lr">
													<input type="radio" id="o3" name="order" value="3" checked>
													<label for="o3">M: 7,90€</label>
												</td>
												<td class="price_m">
													<input type="radio" id="o4" name="order" value="4">
													<label for="o4">L: 11,50€</label>
												</td>
												<td class="price_lr">
													<input type="radio" id="o5" name="order" value="5">
													<label for="o5">XL: 17,50€</label>
												</td>
											</tr>
											<tr>
												<td class="price_lr">
													<label>
														<input type="checkbox"name="extra_1" value="1">
														Knoblauch
													</label>
												</td>
												<td class="price_m">
													<label>
														<input type="checkbox"name="extra_2" value="1">
														Schafsoße
													</label>
												</td>
												<td class="price_lr">
													<label>
														<input type="checkbox"name="extra_3" value="1">
														Oregano
													</label>
												</td>
											</tr>
										</table>
										<table class="pricetable">
											<tr>
												<td class="price_extras">
													Extra jeweils: M 1€ / L 1,50€ / XL 2€
												</td>
											</tr>
										</table>
										<table class="buttontable">
											<tr>
												<td class="buttoncolumn">
													<input type="image" src="pics/addcart.png" class="addcart">
												</td>
											</tr>
										</table>
										</form>
									</td>
								</tr>			
								<tr>
									<td class="piccolumn">
										<img src="pics/pizza03.png" class="imgpizza">
									</td>
									<td class="infocolumn">
										<span class="pizzaname">Pizza Spaghetti</span>
										<br>
										<table>
											<tr>
												<td class="description_pizza">
													Spaghetti, Bolognesesauce und doppelt Goudakäse
												</td>
											</tr>
										</table>
										<form action="index.php" method="post">
										<table class="pricetable">
											<tr>
												<td class="price_lr">
													<input type="radio" id="o6" name="order" value="6">
													<label for="o6">M: 5,95€</label>
												</td>
												<td class="price_m">
													<input type="radio" id="o7" name="order" value="7">
													<label for="o7">L: 9,35€</label>
												</td>
												<td class="price_lr">
													<input type="radio" id="o8" name="order" value="8">
													<label for="o8">XL: 15,70€</label>
												</td>
											</tr>
											<tr>
												<td class="price_lr">
													<label>
														<input type="checkbox"name="extra_1" value="1">
														Knoblauch
													</label>
												</td>
												<td class="price_m">
													<label>
														<input type="checkbox"name="extra_2" value="1">
														Schafsoße
													</label>
												</td>
												<td class="price_lr">
													<label>
														<input type="checkbox"name="extra_3" value="1">
														Oregano
													</label>
												</td>
											</tr>
										</table>
										<table class="pricetable">
											<tr>
												<td class="price_extras">
													Extra jeweils: M 1€ / L 1,50€ / XL 2€
												</td>
											</tr>
										</table>
										<table class="buttontable">
											<tr>
												<td class="buttoncolumn">
													<input type="image" src="pics/addcart.png" class="addcart">
												</td>
											</tr>
										</table>
										</form>
									</td>
								</tr>			
								<tr>
									<td class="piccolumn">
										<img src="pics/pizza04.png" class="imgpizza">
									</td>
									<td class="infocolumn">
										<span class="pizzaname">Pizza Hot Dog</span>
										<br>
										<table>
											<tr>
												<td class="description_pizza">
													Tomatensauce, Gurken, Hot Dog-Würstchen, Remoulade, Ketchup, Senf, Goudakäse und Röstzwiebeln
												</td>
											</tr>
										</table>
										<form action="index.php" method="post">
										<table class="pricetable">
											<tr>
												<td class="price_lr">
													<input type="radio" id="o9" name="order" value="9" checked>
													<label for="o9">M: 6,90€</label>
												</td>
												<td class="price_m">
													<input type="radio" id="o10" name="order" value="10">
													<label for="o10">L: 9,05€</label>
												</td>
												<td class="price_lr">
													<input type="radio" id="o11" name="order" value="11">
													<label for="o11">XL: 15,70€</label>
												</td>
											</tr>
											<tr>
												<td class="price_lr">
													<label>
														<input type="checkbox"name="extra_1" value="1">
														Knoblauch
													</label>
												</td>
												<td class="price_m">
													<label>
														<input type="checkbox"name="extra_2" value="1">
														Schafsoße
													</label>
												</td>
												<td class="price_lr">
													<label>
														<input type="checkbox"name="extra_3" value="1">
														Oregano
													</label>
												</td>
											</tr>
										</table>
										<table class="pricetable">
											<tr>
												<td class="price_extras">
													Extra jeweils: M 1€ / L 1,50€ / XL 2€
												</td>
											</tr>
										</table>
										<table class="buttontable">
											<tr>
												<td class="buttoncolumn">
													<input type="image" src="pics/addcart.png" class="addcart">
												</td>
											</tr>
										</table>
										</form>
									</td>
								</tr>				
								<tr>
									<td class="piccolumn">
										<img src="pics/pizza05.png" class="imgpizza">
									</td>
									<td class="infocolumn">
										<span class="pizzaname">Pizza Diabolo</span>
										<br>
										<table>
											<tr>
												<td class="description_pizza">
													Tomatensauce, Salami, Paprika, Zwiebeln, Jalapeños und Goudakäse
												</td>
											</tr>
										</table>
										<form action="index.php" method="post">
										<table class="pricetable">
											<tr>
												<td class="price_lr">
													<input type="radio" id="o12" name="order" value="12" checked>
													<label for="o12">M: 7,25€</label>
												</td>
												<td class="price_m">
													<input type="radio" id="o13" name="order" value="13">
													<label for="o13">L: 9,65€</label>
												</td>
												<td class="price_lr">
													<input type="radio" id="o14" name="order" value="14">
													<label for="o14">XL: 16,75€</label>
												</td>
											</tr>
											<tr>
												<td class="price_lr">
													<label>
														<input type="checkbox"name="extra_1" value="1">
														Knoblauch
													</label>
												</td>
												<td class="price_m">
													<label>
														<input type="checkbox"name="extra_2" value="1">
														Schafsoße
													</label>
												</td>
												<td class="price_lr">
													<label>
														<input type="checkbox"name="extra_3" value="1">
														Oregano
													</label>
												</td>
											</tr>
										</table>
										<table class="pricetable">
											<tr>
												<td class="price_extras">
													Extra jeweils: M 1€ / L 1,50€ / XL 2€
												</td>
											</tr>
										</table>
										<table class="buttontable">
											<tr>
												<td class="buttoncolumn">
													<input type="image" src="pics/addcart.png" class="addcart">
												</td>
											</tr>
										</table>
										</form>
									</td>
								</tr>				
								<tr>
									<td class="piccolumn">
										<img src="pics/anticola.png" class="imgpizza">
									</td>
									<td class="infocolumn">
										<span class="pizzaname" id="colafont">Anti Cola</span>
										<br>
										<table>
											<tr>
												<td class="description_cola">
													Macht süchtig!
												</td>
											</tr>
										</table>
										<form action="index.php" method="post">
										<table class="pricetable">
											<tr>
												<td class="price_lr">
													<input type="radio" id="o15" name="order" value="15" checked>
													<label for="o15">0,5L: 2,50€</label>
												</td>
												<td class="price_m">
													<input type="radio" id="o16" name="order" value="16">
													<label for="o16">1L: 4,80€</label>
												</td>
												<td class="price_lr">
													<input type="radio" id="o17" name="order" value="17">
													<label for="o17">5L: 21,90€</label>
												</td>
											</tr>
										</table>
										<table class="buttontable">
											<tr>
												<td class="buttoncolumn">
													<input type="image" src="pics/addcart.png" class="addcart">
												</td>
											</tr>
										</table>
										</form>
									</td>
								</tr>
							</table>
						</td>
						<td id="contentcart">
							<div  id="cartdiv">
								<table id="carttable">
									<?php
									//Inhalt im Bestellungen-Array als Warenkorb anzeigen
									if(count($_SESSION["korb"]) > 0)
									{
										$summe = 0;
										for($i=0; $i < count($_SESSION["korb"]); $i++)
										{
											$summe += (float)$_SESSION["korb"][$i][4];
											echo '<form id="cartform" action="index.php" method="post">';
											echo '
												<tr>
													<td class="cartcolumnheader">
														'.$products[$_SESSION["korb"][$i][0]][0].'
													</td>
												</tr>
												<tr>
													<td class="cartcolumn">
											';
													echo $_SESSION["korb"][$i][5];
											echo '
													</td>
												</tr>
												<tr>
													<td class="cartcolumn">
														<table class="cartlasttable">
															<tr>
																<td class="cartlastcolumnl">
																	Preis: ' .number_format($_SESSION["korb"][$i][4], 2, ",", "." ). '€
																</td>
																<td class="cartlastcolumnr">
																	<input type="hidden" name="loeschmich" value='.$i.'>
																	<input type="image" src="pics/delete.png" class="imgdelete">
																</td>
															</tr>
														</table>
													</td>
												</tr>
												<tr>
													<td class="cartcolumn">
													<hr>
													</td>
												</tr>
											';
											echo "</form>";
										}
										echo "<tr><td>Totalla Kosta ca. : " . number_format($summe, 2, ",", "." ). "€</td></tr>";
									}
									?>
								</table>
							</div>
						</td>
					</tr>
				</table>
			</div>
		</td>
	</tr>
	<tr>
		<td class="wrappercolumnleft">
		</td>
		<td class="wrappercolumnright" id="footer">
			Inhaberin: Irmgart Gitt - Irgendwo-Straße 817 - 12345 Dahintenhausen
		</td>
	</tr>
</table>
</body>
</html>