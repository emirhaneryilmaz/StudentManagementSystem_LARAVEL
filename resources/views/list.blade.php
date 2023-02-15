<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="/odev3/public/framework7/app.css">
    <link href="/odev3/public/framework7/framework7-bundle.css">
  </head>
  <body class="bg-light">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
  
    <script src="/odev3/public/framework7/framework7-bundle.js"></script>
    <script src="/odev3/public/framework7/routes.js"></script>
    <script src="/odev3/public/framework7/store.js"></script>
    <script src="/odev3/public/framework7/app.js"></script>

<table class="" id='TABLE'>
<a href="{{ url('') }}" class="btn btn-outline-primary" id="home-button">STUDENT MANAGEMENT SYSTEM</a>

     <tr style='text-align:center'>
        <th width="80px"><a href="{{route('order',[$sort ?? 'DESC','order'=>'sid','page'=>$data->currentPage()])}}"class="link-dark">ID</th>
        <th><a href="{{route('order',[$sort ?? 'DESC','order'=>'fname','page'=>$data->currentPage(),'fname_search'=>isset($_REQUEST['fname_search'])?$_REQUEST['fname_search']:''])}}" class="link-dark">First Name</th>
        <th><a href="{{route('order',[$sort ?? 'DESC','order'=>'lname','page'=>$data->currentPage()])}}" class="link-dark">Last Name</th>
        <th><a href="{{route('order',[$sort ?? 'DESC','order'=>'birthplace','page'=>$data->currentPage()])}}" class="link-dark">Birthplace</th>
        <th><a href="{{route('order',[$sort ?? 'DESC','order'=>'birthDate','page'=>$data->currentPage()])}}" class="link-dark">Birthdate</th>
        <td><center><button type='button' class="btn btn-outline-primary" name='button' onclick='yeni()'><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
        <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
        <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
        </svg>&nbsp&nbsp&nbsp&nbsp&nbspNew&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button></center></td>
        <td><center><button type='button' class="btn btn-outline-secondary" name='button' onclick='ara()'><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
        </svg>&nbsp&nbsp&nbsp&nbsp&nbspSearch&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button></center></td>
       
        </center></tr>


    <tr id='yeni' style='display:none;'>
     <form action="{{route('insert')}}" method="GET">
       @csrf
        <td><input type='number' id='id' name='sid' style='display:none;' value=''></td>
            <td><input type='text' id='first_name' name='fname' value=''></td>
            <td><input type='text' id='last_name' name='lname' value=''></td>
            <td><input type='text' id='birth_place' name='birthplace' value=''></td>
            <td><input type='date' id='birth_date' name='birthDate' value=''></td>
            <td><center><button type='submit' name='button' class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="30" height="30" class="bi bi-plus-square" viewBox="0 0 16 16">
            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
            </svg></button></center></td>
     </form>
    </tr>

    <tr id='ara' style='display:none;'>
     <form action="{{route('search')}}" method="GET">
       @csrf
        <td><input type='number' id='id' name='sid_search' style='display:none;' value=''></td>
            <td><input type='text' id='first_name' name='fname_search' value=''></td>
            <td><input type='text' id='last_name' name='lname_search' value=''></td>
            <td><input type='text' id='birth_place' name='birthplace_search' value=''></td>
            <td><input type='date' id='birth_date' name='birthDate_search' value=''></td>
            <td><center><button type='submit' name='button' class="btn btn-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
        </svg></button></center></td>
     </form>
    </tr>
     
     @foreach($data as $student)
    <tr id="{{$student->sid}}0"  style='text-align:center'>
     <form action="{{route('update')}}" method="GET">
     @csrf
         <td style='width:100px'id='{{$student->sid}}'><span class="saklaa{{$student->sid}}">{{$student['sid']}}</span><input type='text' class='table' id="{{$student['sid']}}1" style="display:none" value="{{$student['sid']}}" name="sid"></td>
         <td style='width:200px'id='{{$student->fname}}{{$student->sid}}'><span class="saklaa{{$student->sid}}">{{$student['fname']}}</span><input type='text'  class='table' id="{{$student['sid']}}{{$student['fname']}}" style="display:none" value="{{$student['fname']}}" name="fname"></td>
         <td style='width:200px'id='{{$student->lname}}{{$student->sid}}'><span class="saklaa{{$student->sid}}">{{$student['lname']}}</span><input type='text' class='table' id="{{$student['sid']}}{{$student['lname']}}" style="display:none" value="{{$student['lname']}}" name="lname"></td>
         <td style='width:200px'id='{{$student->birthplace}}{{$student->sid}}'><span class="saklaa{{$student->sid}}">{{$student['birthplace']}}</span><input type='text' class='table' id="{{$student['sid']}}{{$student['birthplace']}}" style="display:none" value="{{$student['birthplace']}}" name="birthplace"></td>
         <td style='width:200px'id='{{$student->birthDate}}{{$student->sid}}'><span class="saklaa{{$student->sid}}">{{$student['birthDate']}}</span><input type='text' class='table' id="{{$student['sid']}}{{$student['birthDate']}}" style="display:none" value="{{$student['birthDate']}}" name="birthDate"></td>
         <td style='width:120px'><center><a href="{{'delete/'.$student['sid']}}"><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="maroon" class="bi bi-trash3-fill" viewBox="0 0 16 16">
         <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
         </svg></a></center></td>
         <td style='width:120px'>
           <center>
             <!-- İNANILMAZ BİLGİ= FORMUN İÇİNDE OLDUĞU İÇİN BUTONA TYPE VERMEYİNCE SÜREKLİ SUBMIT EDİP FORMU GÜNCELLİYORDU!! -->
          <button class='btn btn' type="button" id='updateCell{{$student->sid}}' value='edit' 
            onclick='update("{{$student->sid}}","{{$student->fname}}","{{$student->lname}}","{{$student->birthplace}}","{{$student->birthDate}}")'><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="tomato" class="bi bi-pencil-square" viewBox="0 0 16 16">
          <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
          <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
          </svg>
          </button>
          <button type="submit" class='btn' id='saveCell{{$student->sid}}' value='edit' style='display:none'><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="green" class="bi bi-save2-fill" viewBox="0 0 16 16">
          <path d="M8.5 1.5A1.5 1.5 0 0 1 10 0h4a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h6c-.314.418-.5.937-.5 1.5v6h-2a.5.5 0 0 0-.354.854l2.5 2.5a.5.5 0 0 0 .708 0l2.5-2.5A.5.5 0 0 0 10.5 7.5h-2v-6z"/>
          </svg>
          </button>
          </center>
         </td>
     </form>
    </tr> 
     @endforeach
   </table>

<div style="text-align:center">
 {{$data->links()}}

</div>
 
<style>
     .w-5{
        display:none;
     }

     table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
           
    }

     table{
            width: 80%;
            height: 35%;
            margin-top:1.5%;
            margin-bottom:0.5%;
            margin-left: auto;
            margin-right: auto;
            font-size: 1.5em;
            
     }
     ul{
            margin-left: 37%;
            margin-right: 50%;
     } 
     .table{

           font-size: 1em;
          
           margin-bottom:0%;
     }
    #home-button{
            display:flex;
            flex:1;
            height:40PX;
            width:300PX;
            margin:auto;
            margin-top:130px;
     }
</style>

<script>
    
    function yeni() {
      if (document.getElementById('yeni').style.display == 'none') {
        var result_style = document.getElementById('yeni').style;
        result_style.display = '';

      } else {
        var result_style = document.getElementById('yeni').style;
        result_style.display = 'none';
      }
    }

    function ara() {
      if (document.getElementById('ara').style.display == 'none') {
        var result_style = document.getElementById('ara').style;
        result_style.display = '';

      } else {
        var result_style = document.getElementById('ara').style;
        result_style.display = 'none';
      }
    }

    function update(sid,fname,lname,birthplace,birthDate) {
      document.getElementById("updateCell"+sid).addEventListener("click", function(event){
      var button = document.getElementById("updateCell"+sid).parentNode.parentNode.parentNode;
      console.log(button.children[4].children[0]);

            button.children[3].children[0].style.display="none"
            button.children[4].children[0].style.display="none"
            button.children[5].children[0].style.display="none"
            button.children[6].children[0].style.display="none"
            document.getElementById('updateCell'+sid).style.display="none";
            
            button.children[3].children[1].style.display=""
            button.children[4].children[1].style.display=""
            button.children[5].children[1].style.display=""
            button.children[6].children[1].style.display=""
            document.getElementById('saveCell'+sid).style.display="";
      });
    }
</script>

</body>
</html>
