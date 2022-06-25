@if(Auth::check())
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard - Theo</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
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

                        <li><i class="fa fa-tachometer" aria-hidden="true"></i><a href="dashboards"
                                                                                  target="_self">Dashboard</a>

                        @if(Auth::check())

                            <li><p class="btn dropdown-toggle nav-link notranslate" role="button" id="dropdownMenuButton" data-toggle="dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i>
                                    {{ Auth::user()->name }}</p></li>

                        @endif
                    </ul>
                </nav>
            </div>

        </header>
        <main>
            <article>
                @foreach($contacts as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                    </tr>
                @endforeach
            </article>
            <form action="{{ url('contact') }}" method="post">
                {!! csrf_field() !!}
                <label>Name</label></br>
                <input type="text" name="name" id="name" class="form-control">
            </form>
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
@else
    <?php header('Location: https://http.cat/401');
    exit;
    ?>
@endif
