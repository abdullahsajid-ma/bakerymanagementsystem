<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
    <title>Update item</title>
</head>
<body>
    <h1 class="container py-3">Update Items</h1>    
    <form class="container py-3" action="updatedata" method="get">
        @csrf
            <input type="hidden" name="Id" value="{{$id}}">
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Item catgory</label>
            <input type="text" name="itemcat" value="{{$itemcat}}" class="form-control" id="exampleFormControlInput1" placeholder="Category">
            </div>
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Item name</label>
            <input type="text" name="itemname" value="{{$itemname}}" class="form-control" id="exampleFormControlInput1" placeholder="Name">
            </div>
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Item price</label>
            <input type="text" name="itemprice" value={{$itemprice}} class="form-control" id="exampleFormControlInput1" placeholder="Price">
            </div>

            <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Item description</label>
            <input class="form-control" name="itemdesc" value={{$itemdesc}} id="exampleFormControlTextarea1"/>
            </div>
            
            <button class="btn btn-success" type="submit">Submit</button>
        </form>
</body>
</html>