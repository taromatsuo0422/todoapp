<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>
  <style>
    body{
      line-height: 1;
    }
    
    .container{
      background-color: #2d197c;
      height: 100vh;
      width: 100vw;
      position: relative;
    }
    .card{
      background-color: #fff;
      width: 50vw;
      padding: 30px;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      border-radius: 10px;
    }
    .title{
      font-weight: bold;
      font-size: 24px;
      margin-bottom: 15px;
    }
    .input-data{
      margin-bottom: 30px;
      display: flex;
      justify-content: space-between;
    }
    .input-add{
      width: 80%;
      padding: 5px;
      border-radius: 5px;
      border: 1px solid #ccc;
      appearance: none;
      font-size:14px;
      outline: none;
    }
    .button-add{
      text-align: left;
      border: 2px solid #dc70fa;
      font-size: 12px;
      color: #dc70fa;
      background-color: #fff;
      font-weight: bold;
      padding: 8px 16px;
      border-radius: 5px;
      cursor: pointer;
      transition: 0.4s;
      outline: none;
    }
    .button-add:hover {
      background-color: #dc70fa;
      border-color: #dc70fa;
      color: #fff;
    }
    table {
      text-align: center;
      width: 100%
    }
    tr {
      height: 50px;
    }
    .button-update {
      text-align: left;
      border: 2px solid #fa9770;
      font-size: 12px;
      color: #fa9770;
      background-color: #fff;
      font-weight: bold;
      padding: 8px 16px;
      border-radius: 5px;
      cursor: pointer;
      transition: 0.4s;
      outline: none;
    }
    .button-update:hover {
      background-color: #fa9770;
      border-color: #fa9770;
      color: #fff;
    }
    .button-delete {
      text-align: left;
      border: 2px solid #71fadc;
      font-size: 12px;
      color: #71fadc;
      background-color: #fff;
      font-weight: bold;
      padding: 8px 16px;
      border-radius: 5px;
      cursor: pointer;
      transition: 0.4s;
      outline: none;
    }
    .button-delete:hover {
      background-color: #71fadc;
      border-color: #71fadc;
      color: #fff;
    }
    ul{
      display: block;
      font-size:100%;
      width: 500px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="card">
      <p class="title">Todo List</p>
      @if (count($errors) > 0)
        <ul>
        <li>The content field is required.</li>
        </ul>
      @endif
      <div class="todo">
        <form action="/todo/create" method="post" class="input-data">
        @csrf
        <input type="text" class="input-add" name="content">
        <input type="submit" class="button-add" value="??????">
        </form>
        <table>
          <tr>
            <th>?????????</th>
            <th>????????????</th>
            <th>??????</th>
            <th>??????</th>
          </tr>
        <!--?????????????????????????????????-->
        @foreach( $items as $item)
          <tr>
            <td>
              {{ $item->created_at }}
            </td>
            <form action="/todo/update?id={{$item->id}}" method="post">
            @csrf
              <td>
              <input type="text" class="input-update" name="content" value="{{ $item->content }}">
              </td>
              <td>  
              <button class= "button-update">??????</button>
              </td>
            </form>
            <td>
              <form action="/todo/delete?id={{$item->id}}" method="post">
              @csrf
              <button class= "button-delete">??????</button>
              </form>
            </td>
          </tr>
        @endforeach
        </table>
      </div>
    </div>
  </div>
</body>

</html>