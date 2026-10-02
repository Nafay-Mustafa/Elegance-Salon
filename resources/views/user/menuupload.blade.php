<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Upload Menu</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />
    </head>

    <body>
<div class="container">
    <form action="/menuupload" method="post" enctype="multipart/form-data">
    @csrf
    <input  type="file"  name="image" id="">
    <br>
    <input type="text" name="heading" id="" placeholder="Heading" class="form-control" >
    <br>
    <textarea  name="description" placeholder="Description" class="form-control"></textarea>
    <br>
    <input type="number" name="price" id="" placeholder="Price" class="form-control">
    <br>
    <select name="category" class="form-control">
    <option value="burger">Engagement/Nikkah Makeup</option>
    <option value="pizza">Mayoun/Mehndi</option>
    <option value="pasta">Baraat Makeup</option>
    <option value="fries">Valima Makeup</option>
</select>
<br>
    <button name="submit" type="submit"  class="btn btn-dark form-control" >Upload Menu</button>
</form>
</div>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
