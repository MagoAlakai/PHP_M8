
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<div class="container mt-5">

    <h3 class="mb-4 text-center">Añadir Producto</h3>
    <form action="insertar.php" method="post" class="d-block">
        <div class="mb-3 col-8 mx-auto">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre">
        </div>
        
        <div class="mb-4 d-flex justify-content-center">
            <div class="col-4">
                <label for="precio" class="form-label">Precio unidad</label>
                <input type="text" class="form-control" name="precio">
            </div>
            <div class="col-4">
                <label for="cantidad" class="form-label">Cantidad</label>
                <input type="text" class="form-control" name="cantidad">
            </div>
        </div>

        <button type="submit" class="btn btn-outline-primary col-8 d-block mx-auto">Submit</button>
    </form>

</div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

