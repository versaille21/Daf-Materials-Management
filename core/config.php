<?php
				


				$conneX = mysqli_connect("localhost","root","root","db_0ges_matDAF");



				// Check connection
				if (mysqli_connect_errno())
				  {
				  echo "Failed to connect to MySQL: " . mysqli_connect_error();
				  exit();
				  }

				  mysqli_set_charset($conneX,"utf8");
				
				  


				///**** AT OFFICE  ***********///
					//mysql_connect('192.168.4.71', 'assoua', '' );
					/* mysql_connect('127.0.0.1', 'root', '123456' );
					mysql_select_db('bd_0claim_oqsfci');
					mysql_query("SET NAMES UTF8");
					mysql_set_charset('utf8'); */
					//mysqli_set_charset($con,"utf8");


			  //// *****  AT HOME   ******///
/*

					mysql_connect('localhost', 'root', '' );
					mysql_select_db('bd_parc_info');
					mysql_query("SET NAMES UTF8");

					*/


		
