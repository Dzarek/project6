<?php

$to ='jarekjanas95@gmail.com';
$name = $_POST['name'];
$email = $_POST['email'];
$subject = 'Wiadomość portfolio';
$message = $_POST['message'];
$headers = 'From: ' . $name . ' (' . $email . ')';
$headers .= 'Content-Type: text/html; charset=utf-8\r\n';

mail($to, $subject, $message, $headers);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Jarosław Janas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Saira+Condensed:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Saira:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="stylemobile.css">
</head>

<body>
    <div class="status"></div>
    <header>
        <div class="burger">
            <i class="fas fa-bars"></i>
            <i class="fas fa-arrow-up off"></i>
        </div>
        <nav class="off">
            <li>
                <a class="nav0" href="#">Witaj!</a>
                <a class="nav1" href="#">Oferta</a>
                <a class="nav2" href="#">Projekty</a>
                <a class="nav3" href="#">Motto</a>
                <a class="nav4" href="#">Hobby</a>
                <a class="nav5" href="#">Kontakt</a>
            </li>
        </nav>
        <div class="welcome">
            <p>witaj!</p>
            <h1>jestem jarosław janas,</h1>
            <h2>web-developer - freelancer</h2>
        </div>
        <img src="images/jpg-848-removebg.png" alt="Jarosław Janas">
        <video src="images/Ink%20-%2035506.mp4" autoplay muted loop playsinline nocontrols></video>
        <button class="tutaj">zobacz moje <span class="neon">p</span>ortfolio</button>
    </header>
    <section class="features clearfix">

        <h1>Tworzę strony internetowe <br> oraz małe gry i aplikacje</h1>
        <div class="feature">
            <img src="images/services1.png" alt="">
            <h2>Nowoczesne i zgodne z&nbspaktualnymi standardami</h2>
            <p clas="description">Tworząc strony interentowe korzystam z najpopularniejszych i najbardziej optymalnych
                języków programowania. </p>
        </div>
        <div class="feature">
            <img src="images/services2.png" alt="">
            <h2>Zoptymalizowane pod kątem przeglądarek internetowych</h2>
            <p clas="description">Przeglądarka Chrome, choć najczęściej użytkowana nie jest jedyną z której wszyscy
                korzystamy. Dbam o to aby strony internetowe i aplikacje działały poprawnie u każdego użytkownika
                internetu.</p>
        </div>
        <div class="feature">
            <img src="images/services3.png" alt="">
            <h2>Świetnie wyglądających na urządzeniach mobilnych</h2>
            <p clas="description">W dzisiejszych czasach częściej przeglądamy strony internetowe poprzez urządzenia
                mobilne. Dlatego dokładam starań, aby interfejs prezentował się jak najlepiej w
                każdej rozdzielczości. </p>
        </div>
    </section>
    <section class="portfolio">
        <h1>Projekty, z których jestem dumny</h1>
        <div class="project clearfix">
            <div class="web l">
                <img src="images/1a.jpg" alt="projekt 1">
            </div>
            <div class="about p">
                <h2>GRA - WISIELEC</h2>
                <p>Pamiętacie czasy gdy na nudnych lekcjach w szkole wraz z kolegami graliście w różne gry na kartce
                    papieru? Jeśli macie ochotę zabić nudę to proponuję wam moją wersję gry WISIELEC. <br> <br> <a
                        href="https://dzarek.github.io/wisielecGame/">PLAY <i class="far fa-play-circle"></i></a></p>
            </div>
        </div>
        <img class="running" src="images/run1.gif" alt="run">
        <div class="project clearfix">
            <div class="web p">
                <img src="images/2a.jpg" alt="projekt 2">
            </div>
            <div class="about l">
                <h2>GRA - PING PONG</h2>
                <p>Odbij piłeczkę! Rozruszaj trochę swoją komputerową mysz i sprawdź czy uda Ci się wygrać w Ping Ponga.
                    <br> <br><a href="https://dzarek.github.io/pingpongGame/">PLAY <i
                            class="far fa-play-circle"></i></a>
                </p>
            </div>
        </div>
        <img class="runningTwo" src="images/run2.gif" alt="run">
        <div class="project clearfix">
            <div class="web ll">
                <img src="images/3a.jpg" alt="projekt 3">
            </div>
            <div class="about pp">
                <h2>GRA - MEMORY</h2>
                <p>Czy dobrą masz pamięć? Sprawdź i zagraj w MEMORY uzyskując jak najlepszy czas! <br> <br><a
                        href="https://dzarek.github.io/memoryGame/">PLAY <i class="far fa-play-circle"></i></a></p>
            </div>
        </div>
        <img class="runningThree" src="images/run1.gif" alt="run">
        <div class="project clearfix ">
            <div class="web pp">
                <img src="images/4a.jpg" alt="projekt 4">
            </div>
            <div class="about ll">
                <h2>GRA - KAPITAN RAKIETA</h2>
                <p>Podbijaj kosmos w grze Kapitan Rakieta! Strzelaj swoim kosmicznym statkiem w wrogów i nie daj się
                    zniszczyć. <br> <br><a href="https://dzarek.github.io/kapitanRakietaGame/">PLAY <i
                            class="far fa-play-circle"></i></a></p>
                </p>
            </div>
        </div>

        <div class="moreProject">
            <p class="xxx">jest tego więcej...</p>
            <i class="fas fa-arrow-circle-down xxx">
            </i>
            <i class="fas fa-arrow-circle-up xxx less"></i>

        </div>
        <div class="changedirection"></div>
        <img class="runningFour" src="images/run2.gif" alt="run">
        <div class="project clearfix more less">
            <div class="web five">
                <img src="images/5a.jpg" alt="projekt 5">
            </div>
            <div class="about five">
                <h2>GRA - BLACKJACK</h2>
                <p>Przenieś się do wirtualnego kasyna i zagraj w przyjemną grę BlackJack. <br> <br><a
                        href="https://dzarek.github.io/blackjackGame/">PLAY <i class="far fa-play-circle"></i></a></p>
                </p>
            </div>
        </div>
        <img class="runningFive" src="images/run1.gif" alt="run">
        <div class="project clearfix more less">
            <div class="web six">
                <img src="images/6a.jpg" alt="projekt 6">
            </div>
            <div class="about six">
                <h2>SERIALOWE QUIZOWANIE</h2>
                <p>Coś dla fanów oglądania seriali! Pochwal się swoją wiedzą z różnych serialowych hitów i zdobądź jak
                    najwięcej
                    punktów. <br> <br><a href="https://dzarek.github.io/serialoweQuizowanie/">PLAY <i
                            class="far fa-play-circle"></i></a></p>
                </p>
            </div>
        </div>
        <img class="runningSix" src="images/run2.gif" alt="run">
        <div class="project clearfix more less">
            <div class="web seven">
                <img src="images/7a.png" alt="projekt 7">
            </div>
            <div class="about seven">
                <h2>APLIKACJA POGODOWA</h2>
                <p>Tutaj możesz sprawdzić pogodę prawie dla każdego miasta na świecie. <br> <br><a
                        href="https://dzarek.github.io/pogoda/">PLAY <i class="far fa-play-circle"></i></a></p>
                </p>
            </div>
        </div>
        <img class="runningSeven" src="images/run1.gif" alt="run">
    </section>
    <section class="slogan">
        <video src="images/Sea - 16108.mp4" autoplay muted loop playsinline nocontrols></video>
        <h1>Moje życiowe motto</h1>
        <p class="text">Die with memories, not&nbspwith&nbspdreams.</p>
    </section>
    <section class="hobby clearfix">
        <h1>W wolnym czasie uwielbiam</h1>
        <div class="item">
            <p>Grać w koszykówkę</p>
        </div>
        <div class="item">
            <p>Ćwiczyć na siłowni</p>
        </div>
        <div class="item">
            <p>Jeść</p>
        </div>
        <div class="item">
            <p>Spać :)</p>
        </div>
    </section>
    <section class="contact">
        <h1>Skontaktuj się ze mną</h1>
        <div class="wrap clearfix">
            <form method="post" name="contactform" action="mail.php">
                <input type="text" name="name" placeholder="Twoje imię" required>
                <input type="email" name="email" placeholder="E-mail" required>
                <textarea placeholder="Twoja wiadomość" name="message" required></textarea>
                <button>Wyśli wiadomość</button>
            </form>
            <div class="socials">
                <div class="social clearfix"><img src="images/contact1.png"
                        alt="kontakt"><span>jarekjanas95@gmail.com</span></div>
                <div class="social clearfix"><img src="images/contact2.png" alt="kontakt"><span>798 194 305</span></div>
                <div class="social clearfix"><img src="images/contact3.png" alt="kontakt"><span>Jarek Janas</span></div>
                <div class="social clearfix"><img src="images/contact5.png" alt="kontakt"><span>brak konta</span></div>
            </div>
        </div>
    </section>
    <footer>&copy; Jarosław Janas</footer>
    <script src="jquery-3.2.1.min.js"></script>
    <script src="script.js"></script>
</body>

</html>

