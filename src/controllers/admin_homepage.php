<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Administration</title>
        <link rel="stylesheet" href="./assets/css/admin.css">
    </head>

    <body>
        <h1>Tous les articles</h1>
        <a href="">Créer un nouvel article</a>
<br>
<br>
        <div>
            <table style="width: 100%;">
                <thead>
                    <th>#Id</th>
                    <th>Titre</th>
                    <th>Actions</th>
                </thead>
                <?php foreach ($articles as $article) : ?>
                    <tr>
                        <td><?= $article->id; ?></td>
                        <td><?= $article->title; ?></td>
                        <td>
                            <a href="">Editer</a>
                            <a href="">Supprimer</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </body>

    </html>