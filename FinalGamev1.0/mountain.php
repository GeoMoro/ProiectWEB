<!doctype html> 

<?php

	include "TWVerificare.php";
	ob_start();

	error_reporting(0);

	ini_set('display_errors', 0);

	if(isset($_COOKIE['IDP1'])){

			$uid1 =  $_COOKIE["IDP1"];

	}
	
	if(isset($_COOKIE['IDP2'])){

			$uid2 =  $_COOKIE["IDP2"];

	}
	
	if(isset($_COOKIE['WeaponP1'])){

			$weapon1 =  $_COOKIE["WeaponP1"];

	}
	
	if(isset($_COOKIE['WeaponP2'])){

			$weapon2 =  $_COOKIE["WeaponP2"];

	}
	
	if(isset($_COOKIE['MaterialP1'])){

			$material1 =  $_COOKIE["MaterialP1"];

	}
	
	if(isset($_COOKIE['MaterialP2'])){

			$material2 =  $_COOKIE["MaterialP2"];

	}
	
	if(isset($_COOKIE['ToolP1'])){

			$tool1 =  $_COOKIE["ToolP1"];

	}
	
	if(isset($_COOKIE['ToolP2'])){

			$tool2 =  $_COOKIE["ToolP2"];

	}

    $nume1=getUserName($uid1);
    $nume2=getUserName($uid2);

?>

<html lang="en"> 
<head> 
	<meta charset="UTF-8" />
	<title>Phaser - Making your first game, part 1</title>
    <script src="./phaser.min.js"></script>
    <style type="text/css">
        body {
            margin-top: 10%;
            margin-bottom: 10%;
            margin-right: 0%;
            margin-left: 30%;
        }
    </style>
</head>
<body bgcolor= "black">
    
    
<script type="text/javascript">
    
var player1Tool = "<?php echo $tool1; ?>";
var player2Tool = "<?php echo $tool2; ?>";
var player1Material = "<?php echo $material1; ?>";
var player2Material = "<?php echo $material2; ?>";
var player1Weapon= "<?php echo $weapon1; ?>";
var player2Weapon= "<?php echo $weapon2; ?>"; /*
    player1Material = "GOLD";
    player2Material = "WOOD";
    player1Tool = "BOMB COLLISION";
    player2Tool = "BOMB COLLISION";
player2Weapon="Poison Bombs";
player1Weapon="Long Ranged Bombs";*/
var result=-1;
var text0;var text1;var text2; var music;var end;var bmb1;var bmb2;var inp1;var inp2;var count1=0;var count2=0; var limit1=1; var limit2=1;var speed1=150; var speed2=150;
var up1=400;var up2=400;
var game = new Phaser.Game(1240, 723, Phaser.AUTO, '', { preload: preload, create: create, update: update });
var player;var time=0;var inertia;var mcheck;
var platforms;var exp;
var cursors;var direction=2;var timer=0;var timer2=0;var direction2=2;
function preload() {
    game.load.image('moon','assets/snow.png');
    game.load.image('ice','assets/try.png');
    
    if (player1Material=='GOLD')
       {
        game.load.spritesheet('bot1','assets/Goldbot1.png',256/4,384/4);
        limit1=60;up1=370;
       }
    else
    if (player1Material=='WOOD')
    {
        game.load.spritesheet('bot1','assets/Woodbot1.png',256/4,384/4);
        speed1=250;
    }
    else
    if (player1Material=='SILVER')
    {
        game.load.spritesheet('bot1','assets/Silverbot1.png',256/4,384/4);
        limit1=40;
    }
    else
    if (player1Material=='DIAMOND')
    {
        game.load.spritesheet('bot1','assets/Diamondbot1.png',256/4,384/4);
        limit1=60;speed1=115;
    }
    else
    if (player1Material=='EMERALD')
    {
        game.load.spritesheet('bot1','assets/Emeraldbot1.png',256/4,384/4);
        limit1=40;speed1 = 125;
    }
    else
    if (player1Material=='STEEL')
        {
        game.load.spritesheet('bot1','assets/Blackbot1.png',256/4,384/4);
        limit1=50;speed1==115;
            up1=260;
        }
    else
    if (player1Material=='OBSIDIAN')
    {
        game.load.spritesheet('bot1','assets/Obsidianbot1.png',256/4,384/4);
        limit1=40;speed1=165;
    }
    else 
        game.load.spritesheet('bot1','assets/bot.png',256/4,384/4);
    
    
    
    
    if (player2Material=='GOLD')
    {
        game.load.spritesheet('bot2','assets/Goldbot2.png',256/4,384/4);
        limit2=3;up2=370;
    }
        else
    if (player2Material=='WOOD')
        {
        game.load.spritesheet('bot2','assets/Woodbot2.png',256/4,384/4);
        speed2=250;
        }
    else
    if (player2Material=='SILVER')
        {
        game.load.spritesheet('bot2','assets/Silverbot2.png',256/4,384/4);
        limit2=40;
        }
    else
    if (player2Material=='DIAMOND')
    {
        game.load.spritesheet('bot2','assets/Diamondbot2.png',256/4,384/4);
        limit2=60;speed2=115;
    }
    else
    if (player2Material=='EMERALD')
    {
        game.load.spritesheet('bot2','assets/Emeraldbot2.png',256/4,384/4);
        limit2=40;speed2 = 125;
    }
    else
    if (player2Material=='STEEL')
    {
        game.load.spritesheet('bot2','assets/Blackbot2.png',256/4,384/4);
        limit2=50;speed2==115;
            up2=300;
    }
    else
    if (player2Material=='OBSIDIAN')
    {
        game.load.spritesheet('bot2','assets/Obsidianbot2.png',256/4,384/4);
        limit2=40;speed2=165;
    }
    else 
        game.load.spritesheet('bot2','assets/bot.png',256/4,384/4);

    
    
    if (player1Weapon=="Metal Bombs")
        {
        game.load.spritesheet('bmb1', 'assets/MetalBomb3.png',1405/9,149);
        } else
    if (player1Weapon=="Poison Bombs")
        {
        game.load.spritesheet('bmb1', 'assets/PoisonBomb.png',1862/9,166);
        game.load.spritesheet('xplo1', 'assets/PoisonedBoom.png',1600/5,1163/5);
        }
    else
        {
        game.load.spritesheet('xplo1','assets/xplo.png',1600/5,1163/5);
        game.load.spritesheet('bmb1', 'assets/bombanimation3.png',1846/9,164);
        }
    
    
    
        if (player2Weapon=="Metal Bombs")
        {
        game.load.spritesheet('bmb2', 'assets/MetalBomb3.png',1405/9,149);
        }
        else
        if (player2Weapon=="Poison Bombs")
        {
        game.load.spritesheet('bmb2', 'assets/PoisonBomb.png',1862/9,166);
        game.load.spritesheet('xplo2', 'assets/PoisonedBoom.png',1600/5,1163/5);
        }
    else    
        {
        game.load.spritesheet('xplo2','assets/xplo.png',1600/5,1163/5);
        game.load.spritesheet('bmb2', 'assets/bombanimation3.png',1846/9,164);
        }
    game.load.audio('bgsound','assets/MK.mp3');
    game.load.audio('endsound','assets/champs.mp3');
    game.load.audio('bmb','assets/bmbsound.mp3');

}
    
    
function create() {
    game.physics.startSystem(Phaser.Physics.ARCADE);
    game.add.sprite(0,0,'moon');
    platforms=game.add.group();
    platforms.enableBody=true;
    var ground=platforms.create(0,660,'ice');
    ground.scale.setTo(1.90,0.35);
    ground.body.immovable=true;
    var ledge=platforms.create(21,340,'ice');
        ledge.scale.setTo(0.3,0.2);
    ledge.body.immovable = true;
    ledge = platforms.create(600, 500, 'ice');
            ledge.scale.setTo(0.4,0.2);
    ledge.body.immovable = true;
    ledge = platforms.create(150, 530, 'ice');
    ledge.scale.setTo(0.05,0.9);
    ledge.body.immovable = true;
        ledge = platforms.create(350, 530, 'ice');
    ledge.scale.setTo(0.05,0.9);
    ledge.body.immovable = true;
    ledge=platforms.create(780,340,'ice');
    ledge.body.immovable = true;
        ledge.scale.setTo(0.4,0.2);

    ledge=platforms.create(800,180,'ice');
            ledge.scale.setTo(0.4,0.3);
    ledge.body.velocity.setTo(100,0);
    ledge.body.immovable=true;
    ledge.body.collideWorldBounds = true;
        ledge.body.bounce.set(0.9);
    

    music=game.add.audio('bgsound');
    music.onDecoded.add(start, this);
    end=game.add.audio('endsound');
    
    //<PLAYER1>
    player1=game.add.sprite(100,100,'bot1');
    game.physics.arcade.enable(player1);
    player1.body.bounce.y=0.2;
    player1.body.gravity.y=400;
    player1.body.collideWorldBounds=true;
    player1.animations.add('left',[4,5,6,7],10,true);
    player1.animations.add('right',[8,9,10,11],10,true);
    player1.animations.add('up',[12,13,14,15],10,true);
    player1.animations.add('down',[0,1,2,3],10,true);
        cursors=game.input.keyboard.createCursorKeys();
    b=game.input.keyboard.addKey(Phaser.Keyboard.NUMPAD_4);
    bomb1=game.add.sprite(0,0,'bmb1');
    bomb1.animations.add("rightbmb",[0,1,2,3,4,5,6,7,8],10,true);
    bomb1.animations.add("leftbmb",[8,7,6,5,4,3,2,1,0],10,true);
    bomb1.scale.setTo(0.25, 0.25);
    game.physics.enable(bomb1, Phaser.Physics.ARCADE);
    game.physics.arcade.enable(bomb1);
    bomb1.body.collideWorldBounds=true;
    bomb1.kill();
    if (player1Weapon!="Metal Bombs")
    {kboom1=game.add.sprite(0,0,'xplo1');
    kboom1.animations.add('kboom',[0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24],10,true);
    kboom1.kill();}
    bmb1=game.add.audio('bmb');
    //</xplo>
    //</PLAYER1>
    
        //<PLAYER2>
    player2=game.add.sprite(32,game.world.height-300,'bot2');
    game.physics.arcade.enable(player2);
    player2.body.bounce.y=0.2;
    player2.body.gravity.y=400;
    player2.body.collideWorldBounds=true;
    player2.animations.add('left',[4,5,6,7],10,true);
    player2.animations.add('right',[8,9,10,11],10,true);
    player2.animations.add('up',[12,13,14,15],10,true);
    player2.animations.add('down',[0,1,2,3],10,true);
    w=game.input.keyboard.addKey(Phaser.Keyboard.W);
    a=game.input.keyboard.addKey(Phaser.Keyboard.A);
    s=game.input.keyboard.addKey(Phaser.Keyboard.S);
    d=game.input.keyboard.addKey(Phaser.Keyboard.D);
    c=game.input.keyboard.addKey(Phaser.Keyboard.C);   
    
        //<BOMB>
    bomb2=game.add.sprite(0,0,'bmb2');
    bomb2.animations.add("rightbmb",[0,1,2,3,4,5,6,7,8],10,true);
    bomb2.animations.add("leftbmb",[8,7,6,5,4,3,2,1,0],10,true);
    
    bomb2.scale.setTo(0.25, 0.25);
    game.physics.enable(bomb2, Phaser.Physics.ARCADE);
    game.physics.arcade.enable(bomb2);
    bomb2.body.collideWorldBounds=true;
    bomb2.kill();
    bmb2=game.add.audio('bmb');

        //<BOMB>

    //<xplo>
    if (player2Weapon!="Metal Bombs")
    {
        kboom2=game.add.sprite(0,0,'xplo2');
        kboom2.animations.add('kboom',[0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24],10,true);
        kboom2.kill();
    }
    //</xplo>

    //</PLAYER2>

    //</BUTTONS>
    //<BOMB>

    //</BOMB>
    //Time unit for inertia:
    var t0=game.time.totalElapsedSeconds();
    
    
    var style = { font: 'bold 40pt Arial', fill: 'white', align: 'left', wordWrap: true, wordWrapWidth: 450 };
	
    text1 = game.add.text(game.world.centerX-100, game.world.centerY-270, "<?php echo $nume1; ?> Wins!", style);
    text2 = game.add.text(game.world.centerX-100, game.world.centerY-270, "<?php echo $nume2; ?> Wins!", style);
    text0 = game.add.text(game.world.centerX-100, game.world.centerY-270, "Game Draw!", style);
    text0.kill();
    text2.kill();
    text1.kill();
    mcheck=1;
        bomb1.events.onRevived.add(bmbsound1,this);
    bomb2.events.onRevived.add(bmbsound2,this);
}
    function bmbsound1()
    {
        bmb1.fadeIn(1000);
    }
    function bmbsound2()
    {
        bmb2.fadeIn(1000);
    }
    function gamesounds(x)
    {
        if (mcheck==1)
        x.fadeIn(2000);
        mcheck=0;
    }
        
    function start()
    {
        music.fadeIn(4000);
    }
    
    function killgame()
    {
        game.destroy();
    }
function InertiaStop1()
    {
        player1.body.gravity.x=0;
    }

function InertiaStop2()
    {
        player2.body.gravity.x=0;
    }
    
function killbmb1()
    {
        kboom1.x=bomb1.x-100;kboom1.y=bomb1.y-180;
        bomb1.kill();
        kboom1.revive();
        kboom1.animations.play('kboom',50,false,true);
        
    }
    var aoe=80;
function killplayer1()
    {
        /*if (player1Weapon=="Metal Bombs")
        {
           if(bomb1.alive &&
           bomb1.x>=player1.x-80 && 
           bomb1.x<=player1.x+80 && 
           bomb1.y>=player1.y-80 && 
           bomb1.y<=player1.y+80)
           {
            player1.kill();
           }
        }
        else
        {*/
            if(kboom1.alive &&
           kboom1.x>=player1.x-100-aoe && 
           kboom1.x<=player1.x-100+aoe && 
           kboom1.y>=player1.y-100-aoe && 
           kboom1.y<=player1.y-100+aoe)
           {
            count1++;
            if(count1>=limit1)
            player1.kill();
           }
        //}
       /* if (player2Weapon=="Metal Bombs")
        {
           if(bomb2.alive &&
           bomb2.x>=player1.x-80 && 
           bomb2.x<=player1.x+80 && 
           bomb2.y>=player1.y-80 && 
           bomb2.y<=player1.y+80)
           {
            player1.kill();
           }
        }*/
        //else
        //{
            if(kboom2.alive &&
           kboom2.x>=player1.x-100-aoe && 
           kboom2.x<=player1.x-100+aoe && 
           kboom2.y>=player1.y-100-aoe && 
           kboom2.y<=player1.y-100+aoe )
            {
            count1++;
            if(count1>=limit1)
            player1.kill();
            }
        //}
    }
    
    
    
    
function killplayer2()
    {
        /*if (player1Weapon=="Metal Bombs")
        {
           if(bomb1.alive &&
           bomb1.x>=player2.x-100-aoe && 
           bomb1.x<=player2.x-100+aoe && 
           bomb1.y>=player2.y-100-aoe && 
           bomb1.y<=player2.y-100+aoe)
           {
            player2.kill();
           }
        }
        else
        {*/
            if(kboom1.alive &&
           kboom1.x>=player2.x-100-aoe && 
           kboom1.x<=player2.x-100+aoe && 
           kboom1.y>=player2.y-100-aoe && 
           kboom1.y<=player2.y-100+aoe)
           {
            count2++;
            if(count2>=limit2)
            player2.kill();
           }
        //}
        /*if (player2Weapon=="Metal Bombs")
        {
           if(bomb2.alive &&
           bomb2.x>=player2.x-100-aoe && 
           bomb2.x<=player2.x-100+aoe && 
           bomb2.y>=player2.y-100-aoe && 
           bomb2.y<=player2.y-100+aoe)
           {
            player2.kill();
           }
        }
        else
        {*/
            if(kboom2.alive &&
           kboom2.x>=player2.x-100-aoe && 
           kboom2.x<=player2.x-100+aoe && 
           kboom2.y>=player2.y-100-aoe && 
           kboom2.y<=player2.y-100+aoe )
            {
            count2++;
            if(count2>=limit2)
            player2.kill();
            }
        //}
    }
    
    
function killbmb2()
    {
        kboom2.x=bomb2.x-100;kboom2.y=bomb2.y-180;
        bomb2.kill();
        kboom2.revive();
        kboom2.animations.play('kboom',50,false,true);
    }
    
    
    
    
    
    
function update() {
    t0=game.time.totalElapsedSeconds();
    game.physics.arcade.collide(player1,platforms);
    game.physics.arcade.collide(player2,platforms);
    game.physics.arcade.collide(bomb1,platforms);
    game.physics.arcade.collide(bomb2,platforms);
    game.physics.arcade.collide(bomb1,bomb2);
    /////////////////////////////////////////////////////////////////////////// POWER OF COLLISION!!!
    if(player1Tool=='BOMB COLLISION')
    {
        game.physics.arcade.collide(bomb1,player1);
        game.physics.arcade.collide(bomb2,player1);
    }
    if(player2Tool=='BOMB COLLISION')
    {
        game.physics.arcade.collide(bomb1,player2);
        game.physics.arcade.collide(bomb2,player2);
    }
    if (player1Weapon=="Metal Bombs")
    {
        game.physics.arcade.collide(bomb1,player1);
        game.physics.arcade.collide(bomb1,player2);
    }
    if (player2Weapon=="Metal Bombs")
    {
        game.physics.arcade.collide(bomb2,player1);
        game.physics.arcade.collide(bomb2,player2);
    }

    ///////////////////////////////////////////////////////////////////////////

    //player1.body.velocity.x=0;
    //player2.body.velocity.x=0;
    inertia=0;inertia2=0;
    
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////
    //P1Update
    if(cursors.left.isDown)
        {   
            player1.body.velocity.x=-speed1;
            player1.animations.play('left');
            inertia=4; 
            //game.time.events.repeat(Phaser.Timer.SECOND * 2, 1, InertiaStop, this);
            inp1=1;
        }
    else if(cursors.right.isDown)
        {
            player1.body.velocity.x=speed1;
            inertia=6;
            player1.animations.play('right');
            inp1=1;
        }

        else if (player1Tool=="JETPACK"&&cursors.down.isDown)
        {
            player1.animations.play('down');
            player1.body.velocity.y=65;
            inp1=1;
        }
        else if (cursors.down.isDown)
        {
            player1.animations.play('down');
            inp1=1;
        } 
        
        if(player1Tool=='JETPACK'&&cursors.up.isDown)
        {
            player1.body.gravity.y=170;
            player1.body.velocity.y=-200;
            inp1=1;
        }
        else    
        if( cursors.up.isDown&&player1.body.touching.down)
            {
            player1.body.velocity.y=-up1;
            inp1=1;
            }
        if (inp1==0)
        {
            player1.animations.stop();
            player1.frame=14;
           if (player1.body.velocity.y>0)
            player1.body.velocity.y-=2;
           else player1.body.velocity.y+=2; 
            if (player1.body.velocity.x>0)
            player1.body.velocity.x-=3;
            else  
            player1.body.velocity.x+=3;

        };
        inp1=0;
     //Apply inertia effect:
       /* if (inertia==4)
        {
            player1.body.gravity.x=-2000;
            game.time.events.repeat(Phaser.Timer.SECOND * 1.7, 1, InertiaStop1, this);
        }
        else if(inertia==6)
        {
            player1.body.gravity.x=2000;
            game.time.events.repeat(Phaser.Timer.SECOND * 1.7, 1, InertiaStop1, this);
        }
       */
    
     if (b.isDown&&!bomb1.alive&&player1.alive&&player2.alive)
        {   
            bomb1.x=player1.x;
            bomb1.y=player1.y;
            bomb1.revive();
            bomb1.body.collideWorldBounds = true;
        if (player1Weapon=="Metal Bombs")
            {
            bomb1.body.bounce.set(1.1);          
            }
            else
            bomb1.body.bounce.set(0.8);
            bomb1.body.gravity.set(0, 180);
            if (player1Weapon=="Long Ranged Bombs")
            {
                bomb1.body.velocity.setTo(player1.body.velocity.x*3, player1.body.velocity.y/1.5);
                game.time.events.repeat(Phaser.Timer.SECOND * 2.2, 1, killbmb1, this);
            }
            else if (player1Weapon=="Short Ranged Bombs")
            {
                bomb1.body.velocity.setTo(player1.body.velocity.x*1.6, player1.body.velocity.y/1.5);
                game.time.events.repeat(Phaser.Timer.SECOND * 2.2, 1, killbmb1, this);
            } 
            else
        if (player1Weapon=="Metal Bombs")
            {
            bomb1.body.velocity.setTo(player1.body.velocity.x*2, player1.body.velocity.y/1.5);
            game.time.events.repeat(Phaser.Timer.SECOND * 12, 1, bomb1.kill, this);             
            }
        else
        {
            bomb1.body.velocity.setTo(player1.body.velocity.x*2, player1.body.velocity.y/1.5);
            game.time.events.repeat(Phaser.Timer.SECOND * 2.2, 1, killbmb1, this);
        }
        }
    
    if(bomb1.alive)
        {
             if(timer==0)
            {
                direction=bomb1.x;
                timer=1;
            }
            else if (timer==1)
                {
                timer=0;
            if(bomb1.x==direction)            
            {
                bomb1.animations.stop();
            }
            if(bomb1.x>direction)
                {
                    bomb1.animations.play('rightbmb',48);
                }
            else if(bomb1.x<direction)
                {
                    bomb1.animations.play('leftbmb',48);
                }
        }}
    //P1Update
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////
   
     
    if(a.isDown)
        {   
            player2.body.velocity.x=-speed2;
            player2.animations.play('left');
            inertia2=4;
            //game.time.events.repeat(Phaser.Timer.SECOND * 2, 1, InertiaStop, this);
            inp2=1;
        }
    else if(d.isDown)
        {
            player2.body.velocity.x=speed2;
            inertia2=6;
            player2.animations.play('right');
            inp2=1;
        }
       else if (player2Tool=="JETPACK"&& s.isDown)
        {
            player2.animations.play('down');
            player2.body.velocity.y=150;inp2=1;
        }
        else if (s.isDown)
        {
            player2.animations.play('down');inp2=1;
        }
    
    
        if(player2Tool=="JETPACK" && w.isDown)
        {
            player2.body.gravity.y=170;
            player2.body.velocity.y=-200;
            inp2=1;
        }
        else
        if ( w.isDown&&player2.body.touching.down)
        {
            player2.body.velocity.y=-up2;inp2=1;
        }
    
        if(inp2==0)
        {
            player2.animations.stop();
            player2.frame=14;
           if (player2.body.velocity.y>0)
            player2.body.velocity.y-=2;
           else player2.body.velocity.y+=2; 
            if (player2.body.velocity.x>0)
            player2.body.velocity.x-=3;
            else  
            player2.body.velocity.x+=3;
            
        };
        inp2=0;
     //Apply inertia effect:
        /*if (inertia2==4)
        {
            player2.body.gravity.x=-2000;
            game.time.events.repeat(Phaser.Timer.SECOND * 2, 1, InertiaStop2, this);
        }
        else if(inertia2==6)
        {
            player2.body.gravity.x=2000;
            game.time.events.repeat(Phaser.Timer.SECOND * 2, 1, InertiaStop2, this);
        }*/

    
       
    
    
    
    
        
    if (c.isDown&&!bomb2.alive&&player1.alive&&player2.alive)
        {   
            bomb2.x=player2.x;
            bomb2.y=player2.y;
            bomb2.revive();
            bomb2.body.collideWorldBounds = true;
        if (player2Weapon=="Metal Bombs")
            {
              bomb2.body.bounce.set(1.1);         
            }
            else
            bomb2.body.bounce.set(0.8);
            
            bomb2.body.gravity.set(0, 180);
        if (player2Weapon=="Long Ranged Bombs")
        {
            bomb2.body.velocity.setTo(player2.body.velocity.x*3, player2.body.velocity.y/1.5);
            game.time.events.repeat(Phaser.Timer.SECOND * 2.2, 1, killbmb2, this);
        }
        else if (player2Weapon=="Short Ranged Bombs")
            {
            bomb2.body.velocity.setTo(player2.body.velocity.x*1.6, player2.body.velocity.y/1.5);
            game.time.events.repeat(Phaser.Timer.SECOND * 2.2, 1, killbmb1, this);            
            }
           else
        if (player2Weapon=="Metal Bombs")
            {
            bomb2.body.velocity.setTo(player2.body.velocity.x*2, player2.body.velocity.y/1.5);
            game.time.events.repeat(Phaser.Timer.SECOND * 12, 1, bomb2.kill, this);
            }
        else
            {
            game.time.events.repeat(Phaser.Timer.SECOND * 2.2, 1, killbmb2, this);
            bomb2.body.velocity.setTo(player2.body.velocity.x*2, player2.body.velocity.y/1.5);        
            }
        }
    if(bomb2.alive)
        {
             if(timer2==0)
            {
                direction2=bomb2.x;
                timer2=1;
            }
            else if (timer2==1)
                {
                timer2=0;
                
            if(bomb2.x==direction2)            
            {
                bomb2.animations.stop();
            }
            else
            if(bomb2.x>direction2)
                {
                    bomb2.animations.play('rightbmb',48);
                }
            else if(bomb2.x<direction2)
                {
                    bomb2.animations.play('leftbmb',48);
                }
        }}
        
        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////
        /////////////////////   CHECK PLAYERS STATUS   ///////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////
        //////////////////////////////////////////////////////////////////////////////////

        killplayer1();
        killplayer2();
    

        ///////////////////////////////////////////////////////////////////////////////
        ///////////////////////////////////////////////////////////////////////////////
        /////////////////////////     GAME END      ///////////////////////////////////
        ///////////////////////////////////////////////////////////////////////////////
        ///////////////////////////////////////////////////////////////////////////////
        
        if (!player1.alive&&!player2.alive)
        {   result=0;
			<?php 
				$rezultat = "<script language=javascript>document.write(result);</script>";
				if($rezultat = 0) {
					DrawGame($uid1,$uid2);
				}
			?>
            text0.revive(); music.stop();    
            gamesounds(end);
            game.time.events.repeat(Phaser.Timer.SECOND*16.5, 1, killgame,this);
        }
		else
        if (!player1.alive&&player2.alive)
        {
            result=2;
			<?php
				$rezultat = "<script language=javascript>document.write(result);</script>";
				if($rezultat = 2) {
					WinGame($uid2);
				
					LostGame($uid1);
				}
			?>
			music.stop();
            text2.revive();
            limit2=10000;
           // end.play();
            game.time.events.repeat(Phaser.Timer.SECOND * 15, 1, killgame, this);
        }
		else
        if (player1.alive&&!player2.alive)
        {
            result=1;music.stop();
			<?php
				$rezultat = "<script language=javascript>document.write(result);</script>";
				if($rezultat = 1) {
					WinGame($uid1);
				
					LostGame($uid2);
				}
			?>
           // end.play();
            limit1=10000;
            text1.revive();
            game.time.events.repeat(Phaser.Timer.SECOND * 15, 1, killgame, this);
        }
		else {
			result=-1;
			<?php
				$rezultat = "<script language=javascript>document.write(result);</script>";
				if($rezultat = -1) {

				}
				
			?>
			
		}

  
}
    

    
</script>

</body>
</html>