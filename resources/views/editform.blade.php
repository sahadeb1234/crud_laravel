<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>crud</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
   <div class="container mt-5">
       <div class="row">
           <div class="col-sm-6">
               <form action="" method="POST">
                   @csrf
                   @method('PUT')
                   <div class="mb-3">
                       <label for="name" class="form-label">Name</label>
                       <input type="text" class="form-control" name="name", value="{{$student->name}}">

                     </div>
                     <div class="mb-3">
                        <label for="city" class="form-label">City</label>
                        <input type="text" class="form-control" name="city" value="{{$student->city}}">
 
                      </div>

                      <div class="mb-3">
                        <label for="marks" class="form-label">Marks</label>
                        <input type="text" class="form-control"  name="marks" value="{{$student->marks}}">
 
                      </div>
                      <button type="submit" class="btn btn-primary">Update</button>


               </form>
           </div>
          
           
       </div>

   </div>
</body>
</html>