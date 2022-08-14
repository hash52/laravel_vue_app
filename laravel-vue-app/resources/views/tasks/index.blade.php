<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale-1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ToDo App</title>
        <link rel="stylesheet" href="/css/styles.css">
    </head>

    <body>
        <header>
            <nav class="my-navbar">
                <a class="my-navbar-brand" href="/">ToDo App</a>
        </header>

        <main>
            <div class="container">
                <div class="row">

                    <div class="col col-md-4">
                        <nav class="panel panel-default">
                            <div class="panel-heading">フォルダ</div>
                            <div class="panel-body">
                                <a href="#" class="btn btn-default btn-block">
                                    フォルダを追加する
                                </a>
                            </div>

                            <div class="list-group">
                                @foreach($folders as $folder)
                                <a 
                                href="{{route('tasks.index',['id'=>$folder->id])}}" 
                                class="list-group-item {{$current_folder_id === $folder->id ? 'active':''}}"
                                >
                                    {{$folder->title}}
                                </a>
                                @endforeach
                            </div>
                        </nav>
                    </div>

                    <div class="cloumn col-md-8">
                        <div class="panel panel-default">
                            <div class="panel-heading">タスク</div>

                            <div class="panel-body">
                                <div class="text-right">
                                    <a href="#" class="btn btn-default btn-block">
                                        タスクを追加する
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </main>
        
    </body>
</html>