<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .content textarea {
               width: 520px;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

           #submit_btn {
                margin: 20px 0;
           }
           h2 {
              text-align: left;
           }

           #img_area {
              margin-top: 40px;
           }

           #name,#tag {
             text-align: left;
             margin: 15px 0;
           }

          #data {
            background-color: #FAFAFA;
            padding: 10px;
         }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">

               {!! Form::open(['url' => 'post']) !!}
                 
                {!! Form::hidden('code', $img) !!}
 
                 <h2>Paste code</h2>
                    <div id="img_area">

                      {!! $img !!}
                    </div>

                <div id="data">

                 <div id="name"> 

                   {!! Form::text('name') !!}
                 </div>
                 {!! Form::textarea('text') !!}

                <div id="tag">

                 {!! Form::text('tag') !!}
                </div>

                </div>

                <div id="submit_btn">

                 {!! Form::submit('Prepare') !!}
               </div>
               
                 {!! Form::close() !!}

            </div>
        </div>
    </body>
</html>
