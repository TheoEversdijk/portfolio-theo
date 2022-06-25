<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FAQ - Theo</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="icon" href="images/hz.png">
</head>

<body>
<div id="page-container">
    <div id="content-wrap">

        <header>
            <div class="container">
                <h1 class="logo"></h1>

                <nav>
                    <ul>
                        <li class="active"><i class="fa fa-home" aria-hidden="true"></i><a href="/"
                                                                                           target="_self">Home</a>
                        </li>
                        <li><i class="fa fa-user-circle" aria-hidden="true"></i><a href="profile" target="_self">Profiel</a>
                        </li>
                        <li><i class="fa fa-tachometer" aria-hidden="true"></i><a href="dashboards"
                                                                                  target="_self">Dashboard</a>
                        </li>
                        <li><i class="fa fa-question-circle-o" aria-hidden="true"></i><a href="faq" target="_self">FAQ</a>
                        </li>
                        <li><i class="fa fa-pencil-square-o" aria-hidden="true"></i><a href="blog" target="_self">Blog</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="socials">
                <li>
                    <i class="fa fa-file-text" aria-hidden="true"></i>
                    <a href="https://hz.nl/uploads/documents/Regelingen/OERS/2021-2022/HZ-Onderwijs-en-Examenregeling-2021-2022.pdf"
                       target="_blank">Examenregeling</a>
                </li>

                <li>
                    <i class="fa fa-file-text-o" aria-hidden="true"></i>
                    <a href="https://hz.nl/uploads/documents/Regelingen/OERS/2021-2022/11.-Uitvoeringsregeling-OER-ICT-Voltijd-2021-2022.pdf"
                       target="_blank">Uitvoeringsregeling</a>
                </li>

                <li>
                    <i class="fa fa-leanpub" aria-hidden="true"></i>
                    <a href="https://learn.hz.nl/" target="_blank">HZ Learn</a>
                </li>

                <li>
                    <i class="fa fa-users" aria-hidden="true"></i>
                    <a href="https://teams.microsoft.com/l/team/19%3a827654897ab746089c081f24aff1c984%40thread.skype/conversations?groupId=337e8cca-f67d-4132-9fa9-b0c761bbeb94&tenantId=4c16deb3-342d-4fca-bcd5-b1429308034c"
                       target="_blank">Teams</a>
                </li>

                <li>
                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                    <a href="https://apps.hz.nl/angular/studievoortgang/studiestatus" target="_blank">Studievoortgang</a>
                </li>

                <li>
                    <i class="fa fa-github" aria-hidden="true"></i>
                    <a href="https://github.com/HZ-HBO-ICT/laravel-portfolio-TheoEversdijk" target="_blank">GitHub</a>
                </li>
            </div>
        </header>
        <main>
            <article>
                <h2>Frequently Asked Questions</h2>
                    @foreach($faqs as $faq)
                        <section>
                            <div class="container">
                                <div class="accordion">
                                    <div class="accordion-item" id="question{{$faq->id}}">
                                        <a class="accordion-link" href="#question{{$faq->id}}">
                                            {{ $faq->question }}
                                            <i class="icon ion-md-add"></i>
                                            <i class="icon ion-md-remove"></i>
                                        </a>
                                        <div class="answer">
                                            <p><a {{ $faq->link }}> {{ $faq->answer }} </a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    @endforeach
            </article>
        </main>
        <div id="content">
            <a href="https://hz.nl"><img src="images/hz.png" alt="HZ Site" class="hz" target="_blank"></a>
        </div>
    </div>
    <footer id="footer">
        <p>Theo Eversdijk</p>
        <p><a href="mailto:ever0045@hz.nl">ever0045@hz.nl</a></p>
    </footer>
</div>
</body>

</html>
