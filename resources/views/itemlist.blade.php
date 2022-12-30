<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
</head>
<body>
    <div class="container">
        <h1 class="my-5">Bakery Items</h1>
        <form action="insertdata" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Item catgory</label>
            <input type="text" name="itemcat" class="form-control" id="exampleFormControlInput1" placeholder="Item Category">
            </div>
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Item name</label>
            <input type="text" name="itemname" class="form-control" id="exampleFormControlInput1" placeholder="Item Name">
            </div>
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Item price</label>
            <input type="text" name="itemprice" class="form-control" id="exampleFormControlInput1" placeholder="Item price">
            </div>

            <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Item description</label>
            <input class="form-control" name="itemdesc" id="exampleFormControlTextarea1" placeholder="item description"/>
            </div>
            <div class="mb-3">
            <label for="image" class="form-label">Image: </label>
            <input type="file" id="image" name="itemimage" class="form-control">
            </div>
            <button class="btn btn-success">Submit</button>
        </form>
    </div>
    
    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"
  ></script>
</body>
</html>



