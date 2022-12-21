<!DOCTYPE html>
<html lang="sk">
<head>
	<link rel="stylesheet" type="text/css" href="reset.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<title>KUDY TUDY</title>
</head>


<body>

	<nav>
		<a href="menu.html"><img id="left" src="images/arrow_icon.png"></a>
		<a href="nastavenia.html"><img id="right"src="images/hamburger_icon.png"></a>
	</nav>

	<section>
		<form method="post">
			<div>
				<input list="odkial" type="text" name="odkial" placeholder="Odkiaľ" required>
				<datalist id="odkial">

					<?php
						$json_data = file_get_contents("data/classrooms.json");
                        $classrooms = json_decode($json_data, true);

                        foreach ($classrooms as $key => $classroom) {
                            echo '<option value="'.$classroom["schoolId"].' '.$classroom["name"].'">';
                        }
					?>

  				</datalist>
				<input list="kam" type="text" name="kam" placeholder="Kam" required>
				<datalist id="kam">

					<?php
                        $json_data = file_get_contents("data/classrooms.json");
                        $classrooms = json_decode($json_data, true);

                        foreach ($classrooms as $key => $classroom) {
                            echo '<option value="'.$classroom["schoolId"].' '.$classroom["name"].'">';
                        }
                    ?>
                    
  				</datalist>
			</div>




			<?php
				if(isset($_POST['submit'])) {
    				include 'prepojenie.php';
    				echo "<div class='cesta'>";
        			echo "<p>".$_POST['odkial']." -> ".$_POST['kam']."</p>";
                    echo "<div class='slideshow-container'>";
        			$odkial = substr($_POST['odkial'], 0, 3);
        			$kam = substr($_POST['kam'], 0, 3);



                    //tu sa nachadzas zaciatok
                    echo "<div class='mySlides fade' style='display=none;'>
                                <p>tu sa nachádzaš</p>
                                <img src='images/cesta/ucebne/".$odkial.".png' style='width:100%'>
                            </div>";
                    //tu sa nachadzas koniec


        			//ked nie su na rovnakom poschodi
        			if (substr($odkial, 0, 1) != substr($kam, 0, 1)) {

        				//ku schodom zaciatok
        				if (substr($odkial, 0, 1) == 0 and substr($kam, 0, 1) > 4) {
        					if ((substr($odkial, 0, 3) >= 8 and substr($odkial, 0, 3) <= 10) or (substr($odkial, 0, 3) >= 12 and substr($odkial, 0, 3) <= 17)) {
        						echo "<div class='mySlides fade' style='display=none;'>
                                        <p>vpravo ku hlavným dverám</p>
                                            <img src='images/cesta/0/pri schodoch R/k hlavnemu vchodu.png' style='width:100%'>
                                    </div>";
        					}
        					elseif ((substr($odkial, 0, 3) >= 2 and substr($odkial, 0, 3) <= 4) or (substr($odkial, 0, 3) >= 19 and substr($odkial, 0, 3) <= 27)) {
        						echo "<div class='mySlides fade' style='display=none;'>
                                        <p>vľavo ku hlavným dverám</p>
                                            <img src='images/cesta/0/hlavny vchod/od jacka.png' style='width:100%'>
                                    </div>";
        					}
        					elseif (substr($odkial, 0, 3) == 6 or substr($odkial, 0, 3) == 7) {
        						echo "<div class='mySlides fade' style='display=none;'>
                                        <p>rovno ku hlavným dverám</p>
                                            <img src='images/cesta/0/hlavny vchod/od jacka.png' style='width:100%'>
                                    </div>";
        					}
        				}

        				else{
        					if ((substr($odkial, 0, 3) >= 8 and substr($odkial, 0, 3) <= 10) or (substr($odkial, 0, 3) >= 19 and substr($odkial, 0, 3) <= 27) or (substr($odkial, 0, 3) >= 105 and substr($odkial, 0, 3) <= 124) or (substr($odkial, 0, 3) >= 218 and substr($odkial, 0, 3) <= 220)) {
        						echo "<div class='mySlides fade' style='display=none;'>
                                        <p>vpravo na koniec chodby</p>";
                                
        					}
        					elseif ((substr($odkial, 0, 3) >= 2 and substr($odkial, 0, 3) <= 4) or (substr($odkial, 0, 3) >= 12 and substr($odkial, 0, 3) <= 17) or (substr($odkial, 0, 3) >= 107 and substr($odkial, 0, 3) <= 117) or (substr($odkial, 0, 3) >= 201 and substr($odkial, 0, 3) <= 202) or (substr($odkial, 0, 3) >= 208 and substr($odkial, 0, 3) <= 212) or (substr($odkial, 0, 3) >= 601 and substr($odkial, 0, 3) <= 603) or substr($odkial, 0, 3) == 299) {
        						echo "<div class='mySlides fade' style='display=none;'>
                                        <p>vľavo na koniec chodby</p>";
        					}
        					elseif (substr($odkial, 0, 3) == 6 or substr($odkial, 0, 3) == 7 or substr($odkial, 0, 3) == 106 or substr($odkial, 0, 3) == 203) {
        						echo "<div class='mySlides fade' style='display=none;'>
                                        <p>rovno na koniec chodby</p>";
        					}
        					elseif (substr($odkial, 0, 3) == 122) {
        						echo "<div class='mySlides fade' style='display=none;'>
                                        <p>vľavo a vľavo</p>";
        					}
        					elseif (substr($odkial, 0, 3) == 216) {
        						echo "<div class='mySlides fade' style='display=none;'>
                                        <p>rovno a vľavo</p>";
        					}
        					elseif (substr($odkial, 0, 3) == 608) {
        						echo "<div class='mySlides fade' style='display=none;'>
                                        <p>rovno a v pravo</p>";
        					}
                            if (substr($odkial, 0, 1) == 0) {
                                echo "<img src='images/cesta/0/pri schodoch R/na prve R.png'>";
                            }
                            elseif (substr($odkial, 0, 1) == 1) {
                                echo "<img src='images/cesta/1/pri schodoch R/na 2.png'>";
                            }
                            elseif (substr($odkial, 0, 1) == 2) {
                                echo "<img src='images/cesta/2/pri schodoch R/na 3.png'>";
                            }
                            elseif (substr($odkial, 0, 1) == 3) {
                                echo "<img src='images/cesta/3/na 4.png'>";
                            }
                            elseif (substr($odkial, 0, 1) == 4) {
                                echo "<img src='images/cesta/4/na 3.png'>";
                            }
                            echo    "</div>";
        				}
        				//ku schodom koniec




        				//poschodia a budovy zaciatok
        				if ((substr($odkial, 0, 1) <= 4 and substr($kam, 0, 1) <= 4) or (substr($odkial, 0, 1) > 4 and substr($kam, 0, 1) > 4)) {
        			    	if (substr($odkial, 0, 1) < substr($kam, 0, 1)) {
        						echo "<div class='mySlides fade' style='display=none;'>
                                        <p>".(substr($kam, 0, 1) - substr($odkial, 0, 1))."x hore po schodoch</p>
                                        <img src='images/stairs.jpg' style='width:100%'>
                                </div>";
        					}
        					elseif (substr($odkial, 0, 1) > substr($kam, 0, 1)) {
        						echo "<div class='mySlides fade' style='display=none;'>
                                        <p>".(substr($odkial, 0, 1) - substr($kam, 0, 1))."x dole po schodoch</p>
                                        <img src='images/stairs.jpg' style='width:100%'>
                                </div>";
        					}
        				}

        				else{
        					if (substr($odkial, 0, 1) <= 4) {
        						echo "<div class='mySlides fade' style='display=none;'>
                                        <p>".(substr($odkial, 0, 1))."x dole po schodoch</p>
                                        <img src='images/stairs.jpg' style='width:100%'>
                                 </div>";
        						echo "<div class='mySlides fade' style='display=none;'>
                                            <p>rovno ku hlavným dverám</p>
                                            <img src='skuska.jpg' style='width:100%'>
                                    </div>";
        					}
        					else{
        						echo "<div class='mySlides fade' style='display=none;'>
                                        <p>".(substr($odkial, 0, 1)-5)."x dole po schodoch</p>
                                        <img src='images/stairs.jpg' style='width:100%'>
                                 </div>";
        					}
        					echo "<div class='mySlides fade' style='display=none;'>
                                            <p>choď do druhej budovy</p>
                                            <img src='skuska.jpg' style='width:100%'>
                                    </div>";
        					if (substr($odkial, 0, 1) > 4 and substr($kam, 0, 1) != 0) {
        						echo "<div class='mySlides fade' style='display=none;'>
                                        <p>cez hlavný vchod vpravo na koniec chodby ku schodisku</p>
                                            <img src='skuska.jpg' style='width:100%'>
                                    </div>";
        					}
        					if (substr($kam, 0, 1) <= 4) {
        						echo "<div class='mySlides fade' style='display=none;'>
                                        <p>".(substr($kam, 0, 1))."x hore po schodoch</p>
                                        <img src='images/stairs.jpg' style='width:100%'>
                                </div>";
        					}
        					else{
        						if (substr($kam, 0, 3) >= 509 and substr($kam, 0, 3) <= 511) {
        							echo "<div class='mySlides fade' style='display=none;'>
                                            <p>druhé dvere</p>
                                            <img src='skuska.jpg' style='width:100%'>
                                    </div>";
        						}
        						else{
        							echo "<div class='mySlides fade' style='display=none;'>
                                            <p>prvé dvere</p>
                                            <img src='skuska.jpg' style='width:100%'>
                                    </div>";
        						}
        						echo "<div class='mySlides fade' style='display=none;'>
                                        <p>".(substr($kam, 0, 1)-5)."x hore po schodoch</p>
                                        <img src='images/stairs.jpg' style='width:100%'>
                                </div>";
        					}
        				}
        				//poschodia a budovy koniec



        				//miestnost kam zaciatok - ked sa menia poschodia/budovy
        				if (substr($kam, 0, 1) == 4) {
        					if (substr($kam, 1, 3) == 02) {
        						echo "<div class='mySlides fade' style='display=none;'>
                                        <p>prvé dvere vpravo</p>";
        					}
        					elseif (substr($kam, 1, 3) == 03) {
        						echo "<div class='mySlides fade' style='display=none;'>
                                        <p>prvé dvere vľavo</p>";
        					}
        				}
        				elseif (substr($kam, 0, 1) == 3) {
        					if (substr($kam, 1, 3) == 02) {
        						echo "<div class='mySlides fade' style='display=none;'>
                                        <p>vpravo ľavé dvere</p>";
        					}
        					elseif (substr($kam, 1, 3) == 04) {
        						echo "<div class='mySlides fade' style='display=none;'>
                                        <p>dvere rovno</p>";
        					}
        				}

        				elseif (substr($kam, 0, 1) == 2) {
        					if (substr($kam, 1, 3) >= 18 and substr($kam, 1, 3) <= 20) {
        						echo "<div class='mySlides fade' style='display=none;'>
                                        <p>".((17-substr($kam, 1, 3))*(-1))." dvere vľavo</p>";
        					}
        					elseif (substr($kam, 1, 3) == 05) {
        						echo "<div class='mySlides fade' style='display=none;'>
                                        <p>posledné dvere vľavo na konci chodby</p>";
        					}
        					elseif (substr($kam, 1, 3) == 03) {
        						echo "<div class='mySlides fade' style='display=none;'>
                                        <p>dvere rovno na konci chodby</p>";
        					}
        					elseif (substr($kam, 1, 3) == 16) {
        						echo "<div class='mySlides fade' style='display=none;'>
                                        <p>dvere vpravo rovno</p>";
        					}
        					elseif (substr($kam, 1, 3) >= 10 and substr($kam, 1, 3) <= 12) {
        						echo "<div class='mySlides fade' style='display=none;'>
                                        <p>".(13-substr($kam, 1, 3))." dvere vpravo</p>";
        					}
        					elseif (substr($kam, 1, 3) == 99) {
        						echo "<div class='mySlides fade' style='display=none;'>
                                        <p>4 dvere vpravo</p>";
        					}
        					elseif (substr($kam, 1, 3) >= 8 and substr($kam, 1, 3) <= 9) {
        						echo "<div class='mySlides fade' style='display=none;'>
                                        <p>".(14-substr($kam, 1, 3))." dvere vpravo</p>";
        					}
        					elseif (substr($kam, 1, 3) >= 1 and substr($kam, 1, 3) <= 2) {
        						echo "<div class='mySlides fade' style='display=none;'>
                                        <p>".substr($kam, 2, 3)." dvere na konci chodby za druhým schodiskom</p>";
        					}
        				}
        			
        				elseif (substr($kam, 0, 1) == 1) {
        					if (substr($kam, 1, 3) == 22) {
        						echo "<div class='mySlides fade' style='display=none;'>
                                        <p>pravo dvere 2 vpravo</p>";
        					}
        					elseif (substr($kam, 1, 3) >= 12 and substr($kam, 1, 3) <= 17) {
        						echo "<div class='mySlides fade' style='display=none;'>
                                        <p>".(18-substr($kam, 1, 3))." dvere vpravo</p>";
        					}
        					elseif (substr($kam, 1, 3) >= 24 and substr($kam, 1, 3) <= 32) {
        						echo "<div class='mySlides fade' style='display=none;'>
                                        <p>".((23-substr($kam, 1, 3))*(-1))." dvere vľavo</p>";
        					}
        				}

        				elseif (substr($kam, 0, 1) == 0) {
        					if (substr($odkial, 0, 1) > 4) {
        						if (substr($kam, 1, 3) == 8) {
        							echo "<div class='mySlides fade' style='display=none;'>
                                            <p>vľavo 3 dvere vľavo</p>";
        						}
        						elseif (substr($kam, 1, 3) == 7 or substr($kam, 1, 3) == 6) {
        							echo "<div class='mySlides fade' style='display=none;'>
                                            <p>vľavo dvere rovno na konci chodby</p>";
        							if (substr($kam, 1, 3) == 6) {
        								echo "<p>dvere vpravo</p>";
        							}
        						}
        						elseif (substr($kam, 1, 3) >= 2 and substr($kam, 1, 3) <= 4) {
        							echo "<div class='mySlides fade' style='display=none;'>
                                            <p>vľavo ".((1-substr($kam, 1, 3))*(-1))." dvere vpravo</p>";
        						}
        						elseif (substr($kam, 1, 3) >= 12 and substr($kam, 1, 3) <= 17) {
        							echo "<div class='mySlides fade' style='display=none;'>
                                            <p>vpravo ".((11-substr($kam, 1, 3))*(-1))." dvere vľavo</p>";
        						}
        						elseif (substr($kam, 1, 3) >= 23 and substr($kam, 1, 3) <= 25) {
        							echo "<div class='mySlides fade' style='display=none;'>
                                            <p>vpravo ".(28-substr($kam, 1, 3))." dvere vpravo</p>";
        						}
        					}

        					else{
        						if (substr($kam, 1, 3) == 8) {
        							echo "<div class='mySlides fade' style='display=none;'>
                                            <p>posledné dvere vľavo na konci chodby</p>";
        						}
        						elseif (substr($kam, 1, 3) == 7 or substr($kam, 1, 3) == 6) {
        							echo "<div class='mySlides fade' style='display=none;'>
                                            <p>dvere rovno na konci chodby</p>";
        							if (substr($kam, 1, 3) == 6) {
        								echo "<p>dvere vpravo</p>";
        							}
        						}
        						elseif (substr($kam, 1, 3) >= 2 and substr($kam, 1, 3) <= 4) {
        							echo "<div class='mySlides fade' style='display=none;'>
                                            <p>rovno ku hlavnému schodisku ".((1-substr($kam, 1, 3))*(-1))." dvere vpravo</p>";
        						}
        						elseif (substr($kam, 1, 3) >= 12 and substr($kam, 1, 3) <= 17) {
        							echo "<div class='mySlides fade' style='display=none;'>
                                            <p>".(18-substr($kam, 1, 3))." dvere vpravo</p>";
        						}
        						elseif (substr($kam, 1, 3) >= 23 and substr($kam, 1, 3) <= 25) {
        							echo "<div class='mySlides fade' style='display=none;'>
                                            <p>".(18-substr($kam, 1, 3))*(-1)." dvere vľavo</p>";
        						}
        					}
        				}

        				elseif (substr($kam, 0, 1) == 6) {
        					if (substr($kam, 1, 3) >= 1 and substr($kam, 1, 3) <= 3) {
        						echo "<div class='mySlides fade' style='display=none;'>
                                        <p>".(substr($kam, 2, 3))." dvere vpravo</p>";
        					}
        					elseif (substr($kam, 1, 3) == 8) {
        						echo "<div class='mySlides fade' style='display=none;'>
                                        <p>prvé dvere vľavo dvere rovno</p>";
        					}
        				}
        				
        				elseif (substr($kam, 0, 1) == 5) {
        					if (substr($kam, 1, 3) == 1) {
        						echo "<div class='mySlides fade' style='display=none;'>
                                        <p>prvé dvere vpravo</p>";
        					}
        					elseif (substr($kam, 1, 3) == 3) {
        						echo "<div class='mySlides fade' style='display=none;'>
                                        <p>dvere rovno vpravo</p>";
        					}
        					elseif (substr($kam, 1, 3) >= 10 and substr($kam, 1, 3) <= 11) {
        							echo "<div class='mySlides fade' style='display=none;'>
                                            <p>vľavo dvere vľavo</p>";
        							if (substr($kam, 1, 3) == 10) {
        								echo "<p>druhá miestnosť</p>";
        							}
        					}
        					elseif (substr($kam, 1, 3) >= 8 and substr($kam, 1, 3) <= 9) {
        							echo "<div class='mySlides fade' style='display=none;'>
                                            <p>vľavo dvere vpravo</p>";
        							if (substr($kam, 1, 3) == 9) {
        								echo "<p>druhá miestnosť</p>";
        							}
        					}
        				}
                        echo "<img src='images/cesta/ucebne/".$kam.".png' style='width:100%'>
                                    </div>";
        				//miestnost kam koniec


        			}
        			//ked nie su na rovnakom poschodi koniec


        			//ked su na rovnakom poschodi zaciatok
        			else{
        				echo "<p>brasko si na rovnakom poschodi to zvladnes</p>";
        			}
        			//ked su na rovnakom poschodi koniec

        			echo "<a class='prev' onclick='plusSlides(-1)'>❮</a>
                          <a class='next' onclick='plusSlides(1)'>❯</a>";
        			echo "</div>";
                    echo "</div>";
        		
        			$conn->close();
    			}	
			?>





			<button type="submit" name="submit" value="Submit">Ukáž mi cestu</button>
		</form>
	</section>

    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            if (n > slides.length) {slideIndex = slides.length}    
            if (n < 1) {slideIndex = 1}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
            }

            slides[slideIndex-1].style.display = "block";  
            }
    </script>

	

</body>


</html>