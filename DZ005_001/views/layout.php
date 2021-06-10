<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="College database system, fakultetski sustav baza podataka, baza podataka studenata">
        <meta name="keywords" content="FSRE, RNWA">
        <meta name="author" content="Ivona Pilić, Ana Galić">
        <title>College Database System</title>
        <style>
            .container{
                display: grid;
                height:100vh;
                grid-template-columns: 1fr 1fr 1fr 1fr ;
                grid-template-rows: 0.5fr 0.2fr 2fr 0.4fr ;
                grid-template-areas:
                "header header header header"
                "nav nav nav nav"
                "main main main sidebar"
                "footer footer footer footer";
                grid-gap: 0.2rem;
            }
            header{
                background-color:gray;
                grid-area: header;
                text-align: center;
                color: white;
                padding:15px;

            }
            nav{
                text-align: center;
                background-color:pink;
                grid-area: nav;
                padding:8px   
            }
            nav a{
                color:black;
                padding: 14px 16px;
                text-decoration: none;
                font-size: 17px;
            }
            main{
                background-color:white;
                grid-area: main;
            }
            #sidebar{
                background-color:rgb(204, 196, 196);
                grid-area: sidebar;
                padding-left: 14px;
                font-size: 17px;
            }
            footer{
                background-color: pink;
                grid-area: footer;
                text-align: center;
                color:black;
            }
            table {
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                width: 100%;
                border-collapse: collapse;
                }

                td, th {
                font-size: 1em;
                border: 1px solid gray;
                padding: 3px 7px 2px 7px;
                }

                th {
                font-size: 1.1em;
                text-align: left;
                padding-top: 5px;
                padding-bottom: 4px;
                background-color: gray;
                color: #ffffff;
                }

                tr.alt td {
                color: #000000;
                background-color: #EAF2D3;
                }
                .forma {
					border-top-color: var(--navigation-color);
					border-top-style: solid;
					border-top-width: 2px;
					width: 400px;
					margin-top: 50px;
					margin-left: 10px;
					text-align: center;
					position: relative;
				}
                .title {
						font-size: 15px;
						text-transform: uppercase;
						color: black;
						margin-bottom: 10px;
						margin-top: 10px;
				}
                .form-control {
						padding: 15px;
						border: 1px solid #ccc;
						border-radius: 3px;
						margin-bottom: 10px;
						width: 100%;
						box-sizing: border-box;
						color: #2C3E50;
						font-size: 13px;
				}
                .DodajBtn{
					color: white;
					background-color:gray;
					text-decoration: none;
					border-style: solid;
					border-color: black;
					border-width: 1px;
					padding: 5px 10px;
					text-align: center;
					font-size: 18px;
					display: inline-block;
					margin: 4px 2px;
					cursor: pointer;
				}		
				.DelBtn{
					color: white;
					background-color:gray;
					text-decoration: none;
					border-style: solid;
					border-color: black;
					border-width: 1px;
					padding: 5px 10px;
					text-align: center;
					font-size: 18px;
					display: inline-block;
					margin: 4px 2px;
					cursor: pointer;
				}							
				.actionBtn {
					color: white;
					background-color:gray;
					text-decoration: none;
					border-style: solid;
					border-color: black;
					border-width: 1px;
					padding: 5px 10px;
					text-align: center;
					font-size: 14px;
					display: inline-block;
					margin: 4px 2px;
					cursor: pointer;
				}
            @media only screen and (max-width:620px) {
                .container{
                    grid-template-columns: 1fr;
                    grid-template-rows: 0.4fr 2.2fr 0.2fr 0.4fr 0.4fr ;
                    grid-template-areas:
                    "header"
                    "main"
                    "nav"
                    "sidebar"
                    "footer";
                }
                img {
                display: block;
                width: 100%;
                height: auto;
                }
                
            }

           
        </style>
    </head>
    <body>
        <div class="container">
            <header>
                <h1>College Database System</h1>
            </header>
            <nav>
                <a href="http://fsre.sum.ba/naslovnica/">FSRE</a>
                <a href="https://github.com">GitHub</a>
                <a href="#">Link 3</a>
                <a href="#">Link 4</a>
            </nav>
            <main>
                <article>
                <table>
								<thead>
										<tr>
												<th> Broj </th>
												<th>Naziv controllera</th>
										</tr>
								</thead>
							  <tbody>
										<tr>
												<td>1</td>
												<td><a href="?controller=students&action=index">1 - Student</a></td>
										</tr>
										<tr>
												<td>2</td>
												<td><a href="?controller=faculty&action=index">2 - Faculty</a></td>
										</tr>
                                        <tr>
												<td>3</td>
												<td><a href="?controller=subjects&action=index">3 - Subjects</a></td>
										</tr>
							  </tbody>
            </table>
						<?php require_once('routes.php'); ?>
                </article>
                <article>
                    <h2>Projekt : College Database System 〰 Baza podataka fakultetskog sustava</h2>
                    <p> Baza podataka fakultetskog sustava dostupna je na <a href="https://github.com/aashayzanpure/college-database-management-system"> GitHub</a> platformi. Radi se o Java aplikaciji
                         koja koristi MySQL za upravljanje osnovnim zadacima na fakultetu poput pregleda podataka o studentima, izračunavanja prosjeka uspjeha po semestru, ocjenjivanja, provjere rezultata po kolegijima za fakultete itd.<br>
                        <table border="1">
                            <tr>
                                <th>SQL koncepti koji se koriste u bazi :
                                </th>
                            </tr>
                            <tr>
                                <td>1. Osnovne operacije</td>
                                <td>INSERT, UPDATE, DELETE, SELECT, JOIN</td>
                            </tr>
                            <tr>
                                <td>2. Klauzule</td>
                                <td>WHERE, AND, GROUP BY, HAVING itd</td>
                            </tr>
                            <tr>
                                <td>3. Operacije na tablicama</td>
                                <td>CREATE TABLE, ALTER TABLE, strani ključ</td>
                            </tr>
                            <tr>
                                <td>4. Okidači, pohranjeni postupci</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>5. Kazala</td>
                                <td></td>
                            </tr>
                        </table>
                     </p>
                </article>
                <article>
                    <img src="https://buddymantra.com/wp-content/uploads/2020/12/mysqlw.jpg" width="400", height="200">
                    <img src="https://miro.medium.com/max/719/1*WaaXnUvhvrswhBJSw4YTuQ.png"width="400", height="200"></p><br>
                    <p>U opisu projekta naglašeno je da projekt sadrži tri login prijave: admin, fakultet i student.</p>
                </article>
            
            </main>
            
            <div id="sidebar">
                <h2>Informacije o projektu</h2>
            <p>Projekt će se voditi na ovoj <a href="https://github.com/ivonapilic/ivonapilic-RNWA"> GitHub adresi.</a></p>
            </div>
            <footer>
                <h3>Sveučilište u Mostaru</h3>
                <p> TIM 17 : Ivona Pilić <a href="mailto:ivona.pilic@student.fsre.ba">ivona.pilic@student.fsre.ba</a>, Ana Galić <a href="mailto:ana.galic@student.fsre.ba">ana.galic@student.fsre.ba</a></p>
            </footer>
        </div>
    </body>
</html>