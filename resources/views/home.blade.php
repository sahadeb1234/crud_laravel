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
            @if (session()->has('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>
            @endif
               <form action="" method="POST">
                   @csrf
                   <div class="mb-3">
                       <label for="name" class="form-label">Name</label>
                       <input type="text" class="form-control" id="name" name="name">

                     </div>
                     <div class="mb-3">
                        <label for="city" class="form-label">City</label>
                        <input type="text" class="form-control" id="city" name="city">
 
                      </div>

                      <div class="mb-3">
                        <label for="marks" class="form-label">Marks</label>
                        <input type="text" class="form-control" id="marks" name="marks">
 
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>


               </form>
              
           </div>
           <div class="col-sm-6">
               <table class="table table-hover">
                   <thead>
                       <tr>
                           <th scope="col">Id</th>
                           <th scope="col">Name</th>
                           <th scope="col">City</th>
                           <th scope="col">Marks</th>
                           <th scope="col">Actions</th>
                       </tr>
                   </thead>
                   <tbody>
                       @foreach ($students as $stu)
                           
                     
                       <tr>
                           <th>{{$stu->id}}</th>
                           <th>{{$stu->name}}</th>
                           <th>{{$stu->city}}</th>
                           <th>{{$stu->marks}}</th>
                           <td>
                            <a href="{{ url('/edit',$stu->id)}}" class="btn btn-info btn-sm">Edit</a>
                            <a href="{{ url('/delete',$stu->id)}}" class="btn btn-info btn-sm">Delete</a>
                           </td>
                          
                       </tr>
                       @endforeach
                       
                
                      
                   </tbody>
                  
               </table>
           </div>
           
       </div>

   </div>
</body>
</html>