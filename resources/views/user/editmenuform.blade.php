<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Edit Menu</title>
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
    <br>
   <form action="/updatemenu/{{ $menu->id }}" method="post" enctype="multipart/form-data">
    @csrf
<br>
    <input type="text" name="heading" value="{{ $menu->heading }}"  class="form-control">  
<br>
    <textarea name="description"  class="form-control">{{ $menu->description }}</textarea>
<br>
    <input type="number" name="price" value="{{ $menu->price }}" class="form-control">
<br>
    <input type="file" name="image"  class="p-2 m-2">
<br>
    <button type="submit" class="btn btn-primary p-2 m-2 form-control">
        Update
    </button>
    <br>
</form>
<br>

</div>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
