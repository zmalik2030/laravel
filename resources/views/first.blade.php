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
               <form action="/project/public/first/add" method="post" enctype="multipart/form-data">
                     {{ csrf_field() }}
                     <?php if(isset($use)){?>
                        <input type="hidden" name="id" <?php if (isset($use ) && $use[0]->id!=''){ ?>value="<?php echo $use[0]->id; ?>"<?php }?>>
                    <?php } ?> 
                    <input type="file" name="first_file">   
                   <input type="text" name="name"  <?php if (isset($use) &&$use[0]->name!=''){ ?>value="<?php echo $use[0]->name; ?>"<?php }?>>
                   <button type="submit">Submit</button>
               </form>
               @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
               <?php
                foreach($users as $user){
                    echo $user->name." <a href='$user->id'>Edit</a><br>";
                } 
               ?>
            </div>
        </div>
    </body>
</html>
