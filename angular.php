<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="icon/jpg" href="Icon/icon.png">
    <link rel="stylesheet" type="text/css" href="index.css"> 
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <title>AngularJS | Demo</title>
</head>
<body>
    <header class="container-fluid"> 
        <div id="head-txt" class="center-align">AngularJS Workspace</div>
    </header>
    <section class="container" id="sec1">
            <div class="sec-con center-align container" ng-app="" ng-init="firstName='John'">
                    <p>Name: <input type="text" ng-model="name"></p>
                    <p ng-bind="name"></p>
            
                    <p>The name is <span ng-bind="firstName"></span> {{ 5+5 }}</p>
                  </div>
                  
    
    </section>

    <aside class="aside">
        <div class="in-aside">
            <div class="box-aside center-align">
                <button onclick="myFunction1()"><i id="i1" class="material-icons md-light md-inactive md-36">account_box</i></button>
                <button onclick="myFunction2()"><i id="i2" class="material-icons md-light md-inactive md-36">face</i></button>
                <button onclick="myFunction3()"><i id="i3" class="material-icons md-light md-inactive md-36">shop</i></button>
                <button onclick="myFunction4()"><i id="i4" class="material-icons md-light md-inactive md-36">view_day</i></button>
                <button onclick="myFunction5()"><i id="i5" class="material-icons md-light md-inactive md-36">cached</i></button>
                <button onclick="myFunction6()"><i id="i6" class="material-icons md-light md-inactive md-36">error</i></button>
            </div>
        </div>
    </aside>

    <aside class="aside2">
        <div class="memo">
            <div class="top-memo">
                <center><p>Memo</p></center>
            </div>
            <div class="body-memo">
                <textarea name="txt-area" id="txt-area"></textarea>
            </div>  
        </div>
    </aside>

    <section class="container background-colors" id="sec2">
        <div class="con-sec2">
            <div class="box-canvas">
                <div class="ball-canvas1">
                    
                </div>
                <div class="ball-canvas2">
                    
                </div>
                <div class="ball-canvas3">
                    
                </div>
            </div>
        </div>
    </section>

    <section class="container">
        <div id="sece" class="work-area">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam itaque accusamus quo at dicta asperiores, quis quidem nemo porro iste eos fugit dolorem commodi facilis dolor, vel tempora doloremque deleniti corrupti ex cum. Animi corporis facilis quis at rem architecto mollitia tenetur deserunt officiis est quidem aliquam, voluptatum eos omnis? Atque iure voluptas fuga at numquam eaque, cum incidunt natus aliquid, reiciendis iste veniam autem? Magni, ducimus eum. Nemo voluptate tempore eaque quis reiciendis dolorum repellendus amet. Perferendis iusto unde repellendus iure recusandae eaque, voluptatibus repellat distinctio dolorem? Officiis, veritatis in facilis autem sapiente ullam eligendi et iste sed libero.
        </div>
    </section>

    <!-- AngularJS script file -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
    <script src="index.js"></script>
</body>
</html>