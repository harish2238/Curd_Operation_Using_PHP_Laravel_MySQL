<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student List</title>
    <style media="screen">
      .view_outer_border{
        padding-left: 25%;
        text-align: center;
        display: flex;
      }
      .add_button_outer{
        padding-left: 80%;
      }
      .add_button{
        text-decoration: none;
        border: solid darkviolet 3px;
        padding:5px;
        background-color: violet;
        color: white;
      }
      table{
        border: solid blue 2px;

      }
      td,th {
           border: 2px solid blue;
           padding: 10px;
       }
       th{
         background-color: grey;
       }
       td{
         background-color: cyan;
       }
       .edit_button{
         border: solid green 3px;
         text-decoration: none;
         background-color: green;
         color: white;
         padding: 5px;
       }
       .delete_button{
         border: solid Red 3px;
         text-decoration: none;
         background-color: red;
         color: white;
         padding: 5px;
       }
    </style>
  </head>
  <body>
    <div class="view_outer_border">
      <div class="">
        <div class="">
          <h2>Student List</h2>
        </div>
        <div class="add_button_outer">
    <a href="{{url('add-student')}}" class="add_button">Add Student</a>
  </div><br>
          <table>
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Action</th>
              </tr>
            </thead>

            <tbody>
             <?php foreach ($data as $key => $stu): ?>
               <tr>
                 <td>{{$stu->id}}</td>
                 <td>{{$stu->name}}</td>
                 <td>{{$stu->email}}</td>
                 <td>{{$stu->phone}}</td>
                 <td>{{$stu->address}}</td>
                 <td><a href="{{url('edit-student/'.$stu->id)}}" class="edit_button">Edit</a> <a href="{{url('delete-student/'.$stu->id)}}" class="delete_button">Delete</a></td>
               </tr>
             <?php endforeach; ?>
            </tbody>
          </table>
      </div>
    </div>

  </body>
</html>
