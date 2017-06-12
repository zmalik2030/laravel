<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
            @if (session('msg'))
                <div class="alert alert-success">
                    {{ session('msg') }}
                </div>
            @endif
            <?php ?>
               <form action="/project/public/front/add" method="post" enctype="multipart/form-data">
                     {{ csrf_field() }}
                     <?php if(isset($use)){?>
                        <input type="hidden" name="id" >
                    <?php } ?> 
                    <label>name</label>
                    <input type="text" name="name">
                    <label>email</label>   
                   <input type="text" name="email">
                   <label>password</label>
                   <input type="text" name="password">
                   <button type="submit">Submit</button>
               </form>
                <h2>Login</h2>
                <form action="/project/public/front/login" method="post" enctype="multipart/form-data">
                     {{ csrf_field() }}
                     <?php if(isset($use)){?>
                        <input type="hidden" name="id" >
                    <?php } ?> 
                   
                    <label>email</label>   
                   <input type="text" name="email">
                   <label>password</label>
                   <input type="text" name="password">
                   <button type="submit">Submit</button>
               </form>
        
              
            </div>
        </div>
    </body>
</html>
