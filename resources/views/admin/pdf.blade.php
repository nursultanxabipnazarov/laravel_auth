<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
    /* CSS styles for the table */
    table {
      width: 100%;
      border-collapse: collapse;
    }

    th, td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>


 
  <table>
    <thead>
      <tr>
        <th>Column 1</th>
        <th>Column 2</th>
        <th>Column 3</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($data as  $data)
        
    
      <tr>
        <td> {{$data->lastname}} </td>
        <td> {{$data->firstname}} </td>
        <td>{{$data->kurs}}</td>
      </tr>
      @endforeach
      <!-- Add more rows as needed -->
    </tbody>
  </table>
</body>
</html>