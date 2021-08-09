<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>遊び場マッチングサービス</title>
</head>
<body>
    <div class="wrapper">
        <header class="bg-success">
            <h3 class="title form-control-static"><a href="home.html">LOGO</a></h3>
            <h3 class="mypage form-control-static"><a href="#">マイページ</a></h3>
        </header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <img src="img/top-1.jpg" class="img-responsive px-0" style="width: 100%;" alt="遊び場サイトトップ">
                    <div class="catch_text">
                        <h1 class="text-center">日本最大級の遊び場検索サイト</h1>
                        <h2 class="text-center"><?php  ?>00件の遊びから、自由に選んで、自由に遊ぼう</h2>
                    </div>
                </div>
                <div class="col-sm-2"></div>
            </div>
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8 bg-success">
                    <h2 class="text-center" style="height:50px;">遊びの検索</h2>
                        <div class="form-group" style="height:30px;">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-2 text-center form-control-static">カテゴリー</div>
                            <div class="col-sm-8 dropdown">
                                <select class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <option value="">選択してください</option>
                                            <option  class="dropdown-item" value="1">サッカー</option>
                                            <option  class="dropdown-item" value="2">フットサル</option>
                                            <option  class="dropdown-item" value="3">野球</option>
                                            <option  class="dropdown-item" value="4">キャンプ</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group" style="height:30px;">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-2 text-center form-control-static">開催日</div>
                            <div class="col-sm-8 form-inline">
                                <input class="form-control" type="date" name="from_created_at" value="">
                                <label for="InputName2"> 〜 </label>
                                <input class="form-control" type="date" name="until_created_at" value="">
                            </div>
                        </div>
                        <div class="form-group" style="height:30px;">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-2 text-center form-control-static">場所(都道府県)</div>
                            <div class="col-sm-8 dropdown">
                                <select class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <option value="">全国</option>
                                        <option  class="dropdown-item" value="1">北海道</option>
                                        <option  class="dropdown-item" value="2">青森</option>
                                        <option  class="dropdown-item" value="3">秋田</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group" style="height:30px;">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-2 text-center form-control-static">人数</div>
                            <div class="col-sm-8 dropdown">
                                <select class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <option value="">選択してください</option>
                                            <option  class="dropdown-item" value="1">特になし</option>
                                            <option  class="dropdown-item" value="2">2人</option>
                                            <option  class="dropdown-item" value="3">3人</option>
                                            <option  class="dropdown-item" value="4">4人</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group" style="height:30px;">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-2 text-center form-control-static">性別</div>
                            <div class="col-sm-8">
                                <div class="radio">
                                    <label><input type="radio" name="gender_keyword" value="1">男性</label>
                                    <label><input type="radio" name="gender_keyword" value="2">女性</label>
                                    <label><input type="radio" name="gender_keyword" value="3">その他</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" style="height:60px;">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-2 text-center form-control-static">キーワード</div>
                            <div class="col-sm-5">
                                <input class="form-control" type="text" name="comment_keyword"  placeholder="キーワードを入力" value="">
                            </div>
                            <div class="col-sm-3"></div>
                        </div>
                        <div class="form-group" style="height:50px;">
                            <div class="col-sm-4"></div>
                            <div class="col-sm-1">
                                <button type="submit" class="btn btn-success">検索</button>
                            </div>
                            <div class="col-sm-2">
                                <a href="{{url('/home2')}}">
                                    <div class="btn btn-default">検索条件リセット</div>
                                </a>
                            </div>
                            <div class="col-sm-5"></div>
                        </div>
                    <div class="col-sm-4 col-md-2"></div>
                </div>
                <div class="col-sm-2"></div>
            </div>
            <div class="row">
                <div class="catch_text_2">
                    <h2 class="text-center">あなたも主催しよう！</h2>
                </div>
                <div class="catch_text_3">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4">
                        <button type="button" class="btn btn-success btn-block btn-lg">遊びの掲載依頼はコチラ（無料）</button>
                    </div>
                    <div class="col-sm-4"></div>
                </div>
            </div>
            <div class="row">
                <div class="catch_text_4">
                    <h2 class="text-center">あなたにオススメの遊び</h2>
                </div>
                <div class="col-sm-2"></div>
                    <div class="col-sm-2">
                        <img src="img/baseball.jpg" alt="野球" class="play_img">
                        <h4 class="text-center">社会人野球</h4>
                        <table class="play_table">
                            <tr>
                                <td>開催日</td>
                                <td>00月00日</td>
                            </tr>
                            <tr>
                                <td>費用</td>
                                <td>0,000円</td>
                            </tr>
                            <tr>
                                <td>参加人数</td>
                                <td>25人</td>
                            </tr>
                        </table>
                        <p>ここにコメントが入る。ここにコメントが入る。ここにコメントが入る。ここにコメントが入る。</p>
                    </div>
                    <div class="col-sm-2">
                    <img src="img/baseball.jpg" alt="野球" class="play_img">
                        <h4 class="text-center">社会人野球</h4>
                        <table class="play_table">
                            <tr>
                                <td>開催日</td>
                                <td>00月00日</td>
                            </tr>
                            <tr>
                                <td>費用</td>
                                <td>0,000円</td>
                            </tr>
                            <tr>
                                <td>参加人数</td>
                                <td>25人</td>
                            </tr>
                        </table>
                        <p>ここにコメントが入る。ここにコメントが入る。ここにコメントが入る。ここにコメントが入る。</p>
                    </div>
                    <div class="col-sm-2">
                    <img src="img/baseball.jpg" alt="野球" class="play_img">
                        <h4 class="text-center">社会人野球</h4>
                        <table class="play_table">
                            <tr>
                                <td>開催日</td>
                                <td>00月00日</td>
                            </tr>
                            <tr>
                                <td>費用</td>
                                <td>0,000円</td>
                            </tr>
                            <tr>
                                <td>参加人数</td>
                                <td>25人</td>
                            </tr>
                        </table>
                        <p>ここにコメントが入る。ここにコメントが入る。ここにコメントが入る。ここにコメントが入る。</p>
                    </div>
                    <div class="col-sm-2">
                    <img src="img/baseball.jpg" alt="野球" class="play_img">
                        <h4 class="text-center">社会人野球</h4>
                        <table class="play_table">
                            <tr>
                                <td>開催日</td>
                                <td>00月00日</td>
                            </tr>
                            <tr>
                                <td>費用</td>
                                <td>0,000円</td>
                            </tr>
                            <tr>
                                <td>参加人数</td>
                                <td>25人</td>
                            </tr>
                        </table>
                        <p>ここにコメントが入る。ここにコメントが入る。ここにコメントが入る。ここにコメントが入る。</p>                
                    </div>
                <div class="col-sm-2"></div>
            </div>
            <div class="row">
                <div class="catch_text_2">
                    <h1 class="text-center">遊び場一覧</h1>
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-2">
                    <img src="img/baseball.jpg" alt="野球" class="play_img">
                        <h4 class="text-center">社会人野球</h4>
                        <table class="play_table">
                            <tr>
                                <td>開催日</td>
                                <td>00月00日</td>
                            </tr>
                            <tr>
                                <td>費用</td>
                                <td>0,000円</td>
                            </tr>
                            <tr>
                                <td>参加人数</td>
                                <td>25人</td>
                            </tr>
                        </table>
                        <p>ここにコメントが入る。ここにコメントが入る。ここにコメントが入る。ここにコメントが入る。</p>                
                    </div>
                    <div class="col-sm-2">
                    <img src="img/baseball.jpg" alt="野球" class="play_img">
                        <h4 class="text-center">社会人野球</h4>
                        <table class="play_table">
                            <tr>
                                <td>開催日</td>
                                <td>00月00日</td>
                            </tr>
                            <tr>
                                <td>費用</td>
                                <td>0,000円</td>
                            </tr>
                            <tr>
                                <td>参加人数</td>
                                <td>25人</td>
                            </tr>
                        </table>
                        <p>ここにコメントが入る。ここにコメントが入る。ここにコメントが入る。ここにコメントが入る。</p>                
                    </div>
                    <div class="col-sm-2">
                    <img src="img/baseball.jpg" alt="野球" class="play_img">
                        <h4 class="text-center">社会人野球</h4>
                        <table class="play_table">
                            <tr>
                                <td>開催日</td>
                                <td>00月00日</td>
                            </tr>
                            <tr>
                                <td>費用</td>
                                <td>0,000円</td>
                            </tr>
                            <tr>
                                <td>参加人数</td>
                                <td>25人</td>
                            </tr>
                        </table>
                        <p>ここにコメントが入る。ここにコメントが入る。ここにコメントが入る。ここにコメントが入る。</p>                
                    </div>
                    <div class="col-sm-2">
                    <img src="img/baseball.jpg" alt="野球" class="play_img">
                        <h4 class="text-center">社会人野球</h4>
                        <table class="play_table">
                            <tr>
                                <td>開催日</td>
                                <td>00月00日</td>
                            </tr>
                            <tr>
                                <td>費用</td>
                                <td>0,000円</td>
                            </tr>
                            <tr>
                                <td>参加人数</td>
                                <td>25人</td>
                            </tr>
                        </table>
                        <p>ここにコメントが入る。ここにコメントが入る。ここにコメントが入る。ここにコメントが入る。</p>                
                    </div>
                <div class="col-sm-2"></div>
            </div>
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-2">
                    <img src="img/baseball.jpg" alt="野球" class="play_img">
                        <h4 class="text-center">社会人野球</h4>
                        <table class="play_table">
                            <tr>
                                <td>開催日</td>
                                <td>00月00日</td>
                            </tr>
                            <tr>
                                <td>費用</td>
                                <td>0,000円</td>
                            </tr>
                            <tr>
                                <td>参加人数</td>
                                <td>25人</td>
                            </tr>
                        </table>
                        <p>ここにコメントが入る。ここにコメントが入る。ここにコメントが入る。ここにコメントが入る。</p>                
                    </div>
                    <div class="col-sm-2">
                    <img src="img/baseball.jpg" alt="野球" class="play_img">
                        <h4 class="text-center">社会人野球</h4>
                        <table class="play_table">
                            <tr>
                                <td>開催日</td>
                                <td>00月00日</td>
                            </tr>
                            <tr>
                                <td>費用</td>
                                <td>0,000円</td>
                            </tr>
                            <tr>
                                <td>参加人数</td>
                                <td>25人</td>
                            </tr>
                        </table>
                        <p>ここにコメントが入る。ここにコメントが入る。ここにコメントが入る。ここにコメントが入る。</p>                
                    </div>
                    <div class="col-sm-2">
                    <img src="img/baseball.jpg" alt="野球" class="play_img">
                        <h4 class="text-center">社会人野球</h4>
                        <table class="play_table">
                            <tr>
                                <td>開催日</td>
                                <td>00月00日</td>
                            </tr>
                            <tr>
                                <td>費用</td>
                                <td>0,000円</td>
                            </tr>
                            <tr>
                                <td>参加人数</td>
                                <td>25人</td>
                            </tr>
                        </table>
                        <p>ここにコメントが入る。ここにコメントが入る。ここにコメントが入る。ここにコメントが入る。</p>                
                    </div>
                    <div class="col-sm-2">
                    <img src="img/baseball.jpg" alt="野球" class="play_img">
                        <h4 class="text-center">社会人野球</h4>
                        <table class="play_table">
                            <tr>
                                <td>開催日</td>
                                <td>00月00日</td>
                            </tr>
                            <tr>
                                <td>費用</td>
                                <td>0,000円</td>
                            </tr>
                            <tr>
                                <td>参加人数</td>
                                <td>25人</td>
                            </tr>
                        </table>
                        <p>ここにコメントが入る。ここにコメントが入る。ここにコメントが入る。ここにコメントが入る。</p>                
                    </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
        </main>   
        <footer class="bg-success">
            <p class="text-center form-control-static">© 2021 Asobi.company</p>
        </footer>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>

<!-- bootstrap-datepickerのjavascriptコード -->
<script>
    $('#date_sample').datepicker({
        language:'ja'
    });
</script>