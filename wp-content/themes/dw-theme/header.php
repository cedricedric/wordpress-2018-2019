<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ceci est un article</title>
    <style type="text/css">
        .archive{
            margin: 2em auto;
        }

        .post{
            border: 1px solid #000;
            padding: 1em 2em;
            position: relative;
        }

        .post + .post {
            margin-top: 2em;
        }


        .post_body {
            margin-left: 170px;
            min-height: 150px;

        }

        .post_thumb{
            width: 150px;
            height: 150px;
            position: absolute;
            left: 0;
            top: 0;
        }
        
        .post_noimg {
            width: 100%;
            height: 100%;
            background-color: #dddddd;
        }

        .article {
            margin: 2em 0;
            position: relative;
        }

        .article_head {
            padding: 5em 0;
            text-align: center;
            color: #fff;
            background-size: cover;
        }

    </style>
</head>
<body>
    <header>
        <h1>Mon site</h1>
        <nav>
            <ul class="nav__container">
                <?php foreach(dw_getMenu() as $item): ?>
                <li class="nav__item">
                    <a href="<?= $item->url; ?>" class="nav__link"><?= $item->label; ?></a>
                    <?php if(count($item->children)): ?>
                    <ul class="nav__sub">
                        <?php foreach($item->children as $child): ?>
                        <li class="nav__item">
                            <a href="<?= $child->url; ?>" class="nav__link"><?= $child->label; ?></a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>
                </li>
                <?php endforeach; ?>
            </ul>

        </nav>


    </header>
