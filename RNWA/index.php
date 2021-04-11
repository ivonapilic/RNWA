<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="College database system, fakultetski sustav baza podataka, baza podataka studenata">
        <meta name="keywords" content="FSRE, RNWA">
        <meta name="author" content="Ivona Pilić, Ana Galić">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
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
        <script>
            function showHint(str) {
                if (str.length == 0) { 
                    document.getElementById("txtHint").innerHTML = "";
                    return;
                } else {
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function() {
                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                            document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                        }
                    }
                    xmlhttp.open("GET", "ajax.php?s=" + str, true);
                    xmlhttp.send();
                    }
                }
        </script>
        <script>
            $(document).ready(function(){

            load_data();

            function load_data(query)
            {
            $.ajax({
            url:"jquery.php",
            method:"POST",
            data:{query:query},
            success:function(data)
            {
                $('#result').html(data);
            }
            });
            }
            $('#search_text').keyup(function(){
            var search = $(this).val();
            if(search != '')
            {
            load_data(search);
            }
            else
            {
            load_data();
            }
            });
            });
        </script>
        
        
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
                <article>
                    <br />
                    <form> 
                    Search faculty <input type="text" onkeyup="showHint(this.value)">
                    </form>
                    <p><div id="txtHint" style="color:black"></div></p>
                </article>
                <div class="container1">
                <br />
                <div class="form-group">
                    <div class="input-group">
                    <span class="input-group-addon">Search students</span>
                    <input type="text" name="search_text" id="search_text" placeholder="Search by Students Details" class="form-control" />
                    </div>
                </div>
                <br />
                <div id="result"></div>
            </div>
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



