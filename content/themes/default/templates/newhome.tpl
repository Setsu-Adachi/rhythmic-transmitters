<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{$site_title}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Raleway:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    {* Rainbow top bar *}
    <div class="rainbow-bar top"></div>

    {* Right side navigation dots *}
    {include file="partials/sidenav.tpl"}

    {* Hero Section *}
    {include file="sections/hero.tpl"}

    {* Cosmos Section *}
    {include file="sections/cosmos.tpl"}

    {* About Section *}
    {include file="sections/about.tpl"}

    {* Process Section *}
    {include file="sections/process.tpl"}

    {* Gallery Section *}
    {include file="sections/gallery.tpl"}

    {* Collaborators Section *}
    {include file="sections/collaborators.tpl"}

    {* Footer *}
    {include file="sections/footer.tpl"}

    {* Rainbow bottom bar *}
    <div class="rainbow-bar bottom"></div>

    <script src="js/main.js"></script>
</body>
</html>
