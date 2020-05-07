<!-- css -->

<link href="https://fonts.googleapis.com/css?family=Electrolize&display=swap" rel="stylesheet">

<style media="screen">

  body{
    background: black;
  }
  
  .container{
    background: black;
  }
  
  .class_button_area{
    /* background: skyblue; */
  }
  
  .class_gametimer{
    color: white;
    font-size: 200px;
    text-align: center;
    padding: 0;
    /* margin: 20px; */
    font-family: 'Electrolize', sans-serif;
  }
  
  .class_24{
    font-size: 125px;
    text-align: center;
    vertical-align: middle;
    line-height: normal;
    color:white;
    font-family: 'Electrolize', sans-serif;
  }
  
  .class_point{
    font-size: 100px;
    text-align: center;
    vertical-align: middle;
    color: white;
    font-family: 'Electrolize', sans-serif;
  }
  
  .class_foul_count{
    height: 30px;
    width: 30px;
    margin: 5px;
    background-color: white;
  }
  
  .class_5foul{
    height: 30px;
    width: 30px;
    margin: 5px;
    background-color: red;
  }
  
  .class_triangle_right{
    /* visibility: hidden; */
    width: 0;
    height: 0;
    border-top: 60px solid transparent;
    border-right: 10px solid transparent;
    border-bottom: 60px solid transparent;
    border-left: 40px solid orange;
    padding: 0;
    margin-left: 30px;
    margin-top: 100px;
    background: black;
  }
  
  .class_triangle_left{
    /* visibility: hidden; */
    width: 0;
    height: 0;
    border-top: 60px solid transparent;
    border-right: 40px solid orange;
    border-bottom: 60px solid transparent;
    border-left: 10px solid transparent;
    padding: 0;
    margin-right: 30px;
    margin-top: 100px;
    background: black;
  }
  
  .btn.btn-warning.rounded-10{
    width: 125px;
    height: 80px;
    border-radius:2px;
    font-size: 40px;
  }
  
  .btn-warning{
      width: 125px;
      height: 80px;
      border-radius:2px;
  }
  
  .btn-primary.rounded-circle.p-0{
    font-size: 40px;
  }
  
  .btn-danger.rounded-circle.p-0{
    font-size: 40px;
  }
  
  .btn.btn-light.rounded-circle.p-0{
    text-align: center;
  }
  
  .class_timer{
    text-align: center;
    height:80px; 
    width:300px; 
    border-radius:2px;
  }
  
  .class_up_btn{
    text-align: center;
  }
  
  .class_minus_btn{
    text-align: center;
  }
  
  .class_24s_plus_btn{
    text-align: center;
  }
  
  .class_24s_minus_btn{
    text-align: center;
  }
  
  .class_14s_btn{
    text-align: center;
  }
  
  .class_reset24_btn{
    text-align: center;
  }
  
  .class_foul_plus_btn{
    text-align: center;
  }
  
  .class_foul_minus_btn{
    text-align: center;
  }
  
  .class_24timer{
    text-align: center;
  }
  
  .class_buzzer{
    text-align: center;
  }
  
  .row{
    margin-bottom: 160px;
  }
  
  #id_24{
    color: orange;
  }
  
  #id_gametimer_btn{
    font-size: 50px;
  }
  
  #id_24_btn{
    font-size: 50px;
  }
  
  #id_buzzer_btn{
    font-size: 50px;
  }
  
  #Af5{
    visibility: hidden;
  }
  
  #Af4{
    visibility: hidden;
  }
  
  #Af3{
    visibility: hidden;
  }
  
  #Af2{
    visibility: hidden;
  }
  
  #Af1{
    visibility: hidden;
  }
  
  #Bf5{
    visibility: hidden;
  }
  
  #Bf4{
    visibility: hidden;
  }
  
  #Bf3{
    visibility: hidden;
  }
  
  #Bf2{
    visibility: hidden;
  }
  
  #Bf1{
    visibility: hidden;
  }
  
</style>

<!-- <h1>hello timer index.ctp</h1> -->
<div class="container">
  
  <span><div class="row" style="margin-bottom:50px;">
    <button class="class_triangle_left col-md" id="id_serve_home"></button>
    <!-- <p class="class_triangle_left col-md-1" style="font-size:100px;  text-align: center; line-height: normal; vertical-align: middle;">◀︎</p> -->
    <div class="col-xs-8 class_gametimer" id="id_gametimer">00:00</div>
    <button class="class_triangle_right  col-md" id="id_serve_away"></button>
    <!-- <p class="class_triangle_right  col-md-1" style="font-size:100px;  text-align: center; line-height: normal; vertical-align: middle;">▶︎</p> -->
  </div><span>
  
  <div class="row">
    <div class="col-md-1">
      <div id="Af5" class="class_5foul"></div>
      <div id="Af4" class="class_foul_count"></div>
      <div id="Af3" class="class_foul_count"></div>
      <div id="Af2" class="class_foul_count"></div>
      <div id="Af1" class="class_foul_count"></div>
    </div>
    <p class="col-md-3  class_point" id="id_a_point"  value="count_A_p1p">0</p>
    <p class="col-md-4  class_24" id="id_24">24</p>
    <p class="col-md-3  class_point" id="id_b_point" value="count_B_p1p">0</p>
    <div class="col-md-1">
      <div id="Bf5" class="class_5foul"></div>
      <div id="Bf4" class="class_foul_count"></div>
      <div id="Bf3" class="class_foul_count"></div>
      <div id="Bf2" class="class_foul_count"></div>
      <div id="Bf1" class="class_foul_count"></div>
    </div>
  </div>

</div>

<br>
<br>


<div class=" class_button_area " style="align:center;">
  
  <!-- first line-->
  <div class="row row2">
    
    <!-- A point plus -->
    <div class="class_up_btn col-md-2"  style="text-align:center;">
      <button type="button" id="id_plus_h1p" class="btn btn-primary rounded-circle p-0" data_points="1" style="width:5rem;height:5rem; "> ＋P </button>
    </div>
    
    <!-- A point minus -->
    <div class="class_minus_btn col-md-2" style="text-align:center;">
        <button type="button"id="id_minus_h1p" class="btn btn-danger rounded-circle p-0" style="width:5rem;height:5rem;"> -P </button>
    </div>
    
    <!-- serve left -->
    <div class="class_serve_r col-md-2" style="text-align:center;">
      <button type="button" id="id_serve_home_btn" class="btn btn-warning rounded-10"> < </button>
    </div>
    
    <!-- serve right -->
    <div class="class_serve_l col-md-2" style="text-align:center;">
      <button type="button" id="id_serve_away_btn" class="btn btn-warning rounded-10"> > </button>
    </div>
    
    <!-- B point plus -->
    <div class="class_up_btn col-md-2" style="text-align:center;">
      <button type="button" id="id_plus_a1p" class="btn btn-primary rounded-circle p-0" style="width:5rem;height:5rem;"> +P </button>
    </div>
    
    <!-- B point minus -->
    <div class="class_minus_btn col-md-2" style="text-align:center;">
      <button type="button" id="id_minus_a1p" class="btn btn-danger rounded-circle p-0" style="width:5rem;height:5rem;"> -P </button>
    </div>
    
  </div>
  <!-- first line -->
  


  <br>

  <!-- second line -->
  <div class="row row2">
    
    <!-- timer +1m-->
    <div class="class_up_btn col-md-2">
      <button type="button" id="id_minute_plus" class="btn btn-primary rounded-circle p-0" style="width:5rem;height:5rem;"> ＋M </button>
    </div>
    
    <!-- timer -1m -->
    <div class="class_minus_btn col-md-2">
        <button type="button" id="id_minute_minuse" class="btn btn-danger rounded-circle p-0" style="width:5rem;height:5rem;"> -M </button>
    </div>
    
    <!-- timer start stop -->
    <div class="class_timer col-md-4">
      <button type="button" id="id_gametimer_btn" class="btn btn-light rounded-circle p-0 class_timer"> timer start </button>
    </div>
    
    <!-- buzzer audio file -->
    <audio id="id_buzzer_audio" src="buzzer.mp3"></audio>
    <!-- 24s buzzer audio file -->
    <audio id="id_24buzzer_audio" src="buzzer24.mp3"></audio>
    
    <!-- timer +1s -->
    <div class="class_up_btn col-md-2">
      <button type="button" id="id_second_plus" class="btn btn-primary rounded-circle p-0" style="width:5rem;height:5rem;"> +S </button>
    </div>
    
    <!-- timer -1s -->
    <div class="class_minus_btn col-md-2">
      <button type="button" id="id_second_minuse" class="btn btn-danger rounded-circle p-0" style="width:5rem;height:5rem;"> -S </button>
    </div>
    
  </div>
  <!-- second line -->

  <br>

  <!-- third line -->
  <div class="row row2">
    
    <!-- A point plus -->
    <div class="class_24s_plus_btn col-md-2">
      <button type="button" id="id_24_plus" class="btn btn-primary rounded-circle p-0" style="width:5rem;height:5rem;"> ＋S </button>
    </div>
    
    <!-- A point minus -->
    <div class="class_24s_minus_btn col-md-2">
        <button type="button"id="id_24_minus" class="btn btn-danger rounded-circle p-0" style="width:5rem;height:5rem;"> -S </button>
    </div>
    
    <!-- serve left -->
    <div class="class_24timer col-md-4">
      <button type="button" id="id_24_btn" class="btn btn-light rounded-circle p-0 class_timer"> 24s start </button>
    </div>
    
    <!-- 14s -->
    <div class="class_14s_btn col-md-2">
      <button type="button" id="id_14s_btn" class="btn btn-primary rounded-circle p-0" style="width:5rem;height:5rem;"> 14s </button>
    </div>
    
    <!-- Reset 24s -->
    <div class="class_reset24_btn col-md-2">
      <button type="button" id="id_24_reset" class="btn btn-danger rounded-circle p-0 reset" style="width:5rem;height:5rem; font-size:40px;"> Re: </button>
    </div>
    
  </div>
  <!-- third line -->

  <br>

  <!-- fourth line -->
  <div class="row row2">
    
    <!-- A foul plus -->
    <div class="class_foul_plus_btn col-md-2">
      <button type="button" id="id_A_fplus" class="btn btn-primary rounded-circle p-0" style="width:5rem;height:5rem; font-size:40px;"> ＋F </button>
    </div>
    
    <!-- A foul minus -->
    <div class="class_foul_minus_btn col-md-2">
        <button type="button" id="id_A_fminuse" class="btn btn-danger rounded-circle p-0" style="width:5rem;height:5rem; font-size:40px;"> -F </button>
    </div>
    
    <!-- buzzer left -->
    <div class="class_buzzer col-md-4">
      <button type="button" id="id_buzzer_btn" class="btn btn-light rounded-circle p-0 class_timer"> Buzzer </button>
    </div>
    
    <!-- B foul plus -->
    <div class="class_foul_plus_btn col-md-2">
      <button type="button" id="id_B_fplus" class="btn btn-primary rounded-circle p-0" style="width:5rem;height:5rem; font-size:40px;"> ＋F </button>
    </div>
    
    <!-- B foul minus -->
    <div class="class_foul_minus_btn col-md-2">
      <button type="button" id="id_B_fminuse" class="btn btn-danger rounded-circle p-0" style="width:5rem;height:5rem; font-size:40px;"> -F </button>
    </div>
    
  </div>
  <!-- fourth line -->

  </div>
  

<script type="text/javascript">

  //
  //------------------------------------------
  $(document).ready(function()
  {
  
    var count_A_p1p = 0;
  
    $('#id_plus_h1p').click(function(){
       // console.log('クリックしました');
       // count_A_p1p++;//0から1ずつ増える
       $("#id_a_point").html(++count_A_p1p);
  
    });
  
    
  
    $('#id_minus_h1p').click(function(){
       // console.log('クリックしました');
       // count_A_p1p--;//0から1ずつ減る
       
       if(count_A_p1p == 0)
       {
         console.log('score can not be minuse');
         return;
       }
       else
       {
         console.log('score can be minus');
         $("#id_a_point").html(--count_A_p1p);
       }
       
    });
    
    var count_B_p1p = 0;
    
    $('#id_plus_a1p').click(function()
    {
      $('#id_b_point').html(++count_B_p1p);
    });
    
    $('#id_minus_a1p').click(function(){
      
      if(count_B_p1p == 0)
      {
        console.log('score can not be minuse');
        return;
      }
      else 
      {
        $('#id_b_point').html(--count_B_p1p);
      }
    
    });
    
    //serve 
    //------------------------------------------
    var serve_home = 1;
    var serve_away = 1;
    
    
    $('#id_serve_home_btn').click(function()
    {
      if(serve_home == 1)
      {
        $('#id_serve_away').css('visibility','hidden');
        serve_away = 0;
        
        return;
      }
      else if (serve_home == 0 & serve_away == 1)
      {
        $('#id_serve_home').css('visibility','');
        serve_home = 1;
        
        $('#id_serve_away').css('visibility','hidden');
        serve_away = 0;
        
        return;
      }
    });
    
    $('#id_serve_away_btn').click(function()
    {
      if(serve_away == 1)
      {
        $('#id_serve_home').css('visibility','hidden');
        serve_home = 0;
        
        return;
      }
      else if(serve_away == 0 & serve_home == 1)
      {
        $('#id_serve_away').css('visibility','');
        serve_away = 1;
        
        $('#id_serve_home').css('visibility','hidden');
        serve_home = 0;
        
        return;
      }
    });
    //------------------------------------------
    
    
    //related timer code from here 
    //------------------------------------------
    var min = 0;
    var second = 0;
    
    
    var tm = ('00' + min).slice(-2);
    var ts = ('00' + second).slice(-2);
    // alert(tm);
    
    //timer minute plus
    $('#id_minute_plus').click(function()
    {
      // min = ++min;
      // tm = ('00' + min).slice(-2); 
      // // alert(tm);
      // 
      // if(min > 99){
      //   min = 0;
      //   tm = ('00' + min).slice(-2);
      // }
      
      remainingTime += 60;
      if (remainingTime > 5940) {
        remainingTime = 0;
      }
      return $('#id_gametimer').html(convertSeconds(remainingTime));
      // return  $('#id_gametimer').html(tm+":"+ts);
      
    });
    
    //timere minute minuse
    $('#id_minute_minuse').click(function()
    {
      
      // min= --min;
      // tm = ('00' + min).slice(-2);
      // // alert(tm);
      // 
      // if(min < 0){
      //   min = 99;
      //   tm = ('00' + min).slice(-2);
      // }
      
      if (remainingTime > 60) {
        remainingTime -= 60;
      } else if (remainingTime <= 0) {
        remainingTime = 5940;
      } else {
        remainingTime = 0;
        return $('#id_gametimer').html("00:00");
      }
      return $('#id_gametimer').html(convertSeconds(remainingTime));
      // return $('#id_gametimer').html(tm+":"+ts);
      
    });
    
    //timer second plus
    $('#id_second_plus').click(function()
    {
      // second = ++second;
      // ts = ('00' + second).slice(-2);
      // // alert(tm+":"+ts);
      // 
      // if(second > 59){
      //   second = 0;
      //   ts = ('00' + second).slice(-2);
      // }
      // 
      // return $('#id_gametimer').html(tm+":"+ts);
      
      if (remainingTime >= 0) {
        remainingTime += 1;
      } else if (remainingTime <= 0) {
        remainingTime = 59;
      }
      return $('#id_gametimer').html(convertSeconds(remainingTime));
    });
    
    //timer second minuse
    $('#id_second_minuse').click(function()
    {
      // second = --second;
      // ts = ('00' + second).slice(-2);
      // // alert(ts);
      // 
      // if(second < 0){
      //   second = 59;
      //   ts = ('00' + second).slice(-2);
      // }
      // 
      // return $('#id_gametimer').html(tm+":"+ts);
      
      if (remainingTime > 0) {
        remainingTime -= 1;
      } else if (remainingTime <= 0) {
        remainingTime = 59;
      }
      return $('#id_gametimer').html(convertSeconds(remainingTime));
      
    });
    
    
    //timer start and stop
    //------------------
    var countDown = 0;
    
    //ここでゲーム時間を秒数に変換する
    var gametime = (min*60 + second);
    //デバグ
    // alert(min);
    // alert(second);
    // alert(gametime);
    
    //minとsecondを時間表記にする。00:00
    function convertSeconds(s){
      var convert_min = Math.floor(s / 60);
      var convert_sec = s % 60;
      
      //  $('#id_gametimer').html()だとHTMLが消える。↓の桁数の表示指定を直接記入した。
      return ("00" + convert_min).slice(-2)+":"+("00" + convert_sec).slice(-2);
    }
    
    //jqueryは.get(0);　配列の形で取得する必要があるらしい。　javascriptの場合は。.play();で可能。
    var buzzer = $('#id_buzzer_audio').get(0);
    
    // adjust volume
    buzzer.volume = 0.1;
    
    $('#id_buzzer_btn').click(function()
    {
      buzzer.play();
    });
    
    
    
    
    
    //flag for paused
    var myInterval = -1;
    
    var remainingTime = 0;
    
    // when you click gametimer btn timer is started 
    $('#id_gametimer_btn').click(function()
    {
      var gametime = (min*60 + second);
      // min = 0;
      // second = 0;
      //デバグ
      // min;
      // second;
      // alert(min);
      // alert(second);
      // alert(gametime);
      // alert(min*60 + second);
      console.log("min"+"="+min);
      console.log("second"+"="+second);
      
      //if timer paused start
      if (myInterval == - 1) {
        
        //when click the button it's working. this is for remove time lag. setInterval's time lag. 
        timeIt();
        
        //every after one secoond it's working. time lag is happen.
        myInterval = setInterval(timeIt,1000);
        // alert(gametime);
        // min = 0;
        // second = 0;
        console.log("gametime on play"+"="+gametime);
        console.log(convertSeconds(gametime - countDown));
        
        $('#id_minute_plus').prop('disabled',true);
        $('#id_minute_minuse').prop('disabled',true);
        $('#id_second_plus').prop('disabled',true);
        $('#id_second_minuse').prop('disabled',true);
        
        $('#id_gametimer_btn').html('timer stop');
        
      } 
      else //timer start to paused
      {
        clearInterval(myInterval);
        myInterval = -1;

        //再スタート時にcountDownを0にする。カウントした分だけ再スタート時にひかれるから。
        countDown = 0;
        
        // console.log("remainingTime"+"="+remainingTime);
        // console.log(convertSeconds(gametime - countDown));
        // console.log("remainingTime on pause"+"="+min);
        // console.log("remainingTime on pause"+"="+second);
        console.log("remainingTime on pause"+"= "+remainingTime );
        console.log(convertSeconds(remainingTime));
        console.log("countdown on pause"+"="+countDown);
        
        $('#id_minute_plus').prop('disabled',false);
        $('#id_minute_minuse').prop('disabled',false);
        $('#id_second_plus').prop('disabled',false);
        $('#id_second_minuse').prop('disabled',false);
        
        $('#id_gametimer_btn').html('timer start');
        
      }
      
      function timeIt()
      {
        
        countDown++;
        
        remainingTime = (remainingTime - 1);
        console.log("remainingTime on play"+"="+remainingTime);
        
        // min = Math.floor(remainingTime / 60);
        // second = remainingTime % 60;
        
        //call convertSeconds function
        $('#id_gametimer').html(convertSeconds(remainingTime));
        
        //if gaime time = 0; buzzer is played. 
        if(remainingTime == 0)
        {
          //インターバルの処理を止められなかったのでHTMLを00:00に書き換えて動いてないように見せている。
          $('#id_gametimer').html("00:00");
          buzzer.play();
          // gametime = 0; になったらintervalを消す。
          clearInterval(myInterval);
          
          $('#id_minute_plus').prop('disabled',false);
          $('#id_minute_minuse').prop('disabled',false);
          $('#id_second_plus').prop('disabled',false);
          $('#id_second_minuse').prop('disabled',false);
        } 
        else if (remainingTime <= 0) 
        {
          $('#id_gametimer').html("00:00");
          // gametime = 0; になったらintervalを消す。
          clearInterval(myInterval);
          
          $('#id_minute_plus').prop('disabled',false);
          $('#id_minute_minuse').prop('disabled',false);
          $('#id_second_plus').prop('disabled',false);
          $('#id_second_minuse').prop('disabled',false);
        }
        
        // else if (remainingTime == 0) 
        // // else if (gametime == 0) //gametimerが00:00の状態でbtn押下してもタイマーを起動させない。
        // {
        //   //インターバルの処理を止められなかったのでHTMLを00:00に書き換えて動いてないように見せている。
        //   $('#id_gametimer').html("00:00");
        //   clearInterval(myInterval);
        // }
      }
      
    });
    //timer start and stop
    //------------------
    
    //24s timer start and stop
    //------------------
    var tf = 0;
    
    var tfTimer = 24;
    console.log("tfTimer"+"="+tfTimer);
    
    var tfInterval = -1;
    console.log("tfInterval"+"="+tfInterval);
    
    var tfremainingtime = 0;
    
    var tfBuzzer = $('#id_24buzzer_audio').get(0);
    
    // adjust volume
    tfBuzzer.volume = 0.1;
    
    
    
    //24s plus 
    $('#id_24_plus').click(function(){
      
      if(tfTimer == 24){
        tfTimer = 24;
      } else if (tfTimer <= 24) {
        tfTimer +=1;
        $('#id_24_plus').prop('disabled',false);
      } else if (tfTimer >= 24) {
        tfTimer = 24;
        return $('#id_24').html(tfTimer);
      }
      
      console.log("tfTimer was plus1"+"="+tfTimer);
      
      return $('#id_24').html(tfTimer);
      
    });
    
    
    
    
    //24s minuse
    $('#id_24_minus').click(function(){
      
      if(tfTimer > 0){
        tfTimer -= 1;
      }else if (tfTimer <= 0 ) {
        tfTimer = 0;
        return $('#id_24').html(tfTimer);
      }
      
      console.log("tfTimer was minuse1"+"="+tfTimer);
      
      return $('#id_24').html(tfTimer);
    });
    
    //when you click gametimer btn timer is started also stop
    $('#id_24_btn').click(function(){
      
      if(tfInterval == -1){
        
        //when click the button it's working. this is for remove time lag. setInterval's time lag. 
        tftimeIt();
        
        //after every one second it's working. it has time lag .
        tfInterval = setInterval(tftimeIt,1000);
        //debug
        console.log("tfTimer"+"="+tfTimer);
        
        $('#id_24_plus').prop('disabled',true);
        $('#id_24_minus').prop('disabled',true);
        
        $('#id_24_btn').html('24s stop');
      } 
      else 
      {
        clearInterval(tfInterval);
        
        //for next click,must set -1
        tfInterval = -1;
        
        //when 24second is stopped plus and minus are enable. 
        $('#id_24_plus').prop('disabled',false);
        $('#id_24_minus').prop('disabled',false);
        
        $('#id_24_btn').html('24s start');
      }
      
      function tftimeIt(){
        //it's for calculate remainingTime
        tfTimer = (tfTimer - 1);
        console.log("remaining tfTimer"+"="+tfTimer); 
        
        $('#id_24').html(tfTimer);
        
        if(tfTimer == 0){
          
          //when 24 second time up then it's displayed 0
          $('#id_24').html('0');
          
          $('#id_24_plus').prop('disabled',false);
          $('#id_24_minus').prop('disabled',false);
          
          $('#id_24_btn').html('24s start');
          
          //play tfBuzzer sound
          tfBuzzer.play();
          
          //24 timer is stopped
          clearInterval(tfInterval);
        }
      }
      
    });
    
    //14s button
    $('#id_14s_btn').click(function(){
      
      tfTimer = 14;
      //デバグ
      console.log(tfTimer);
      
      $('#id_24').html(tfTimer);
      
    });
    
    //24s reset button
    $('#id_24_reset').click(function(){
      
      tfTimer =24;
      //debug
      console.log(tfTimer);
      
      $('#id_24').html(tfTimer);
      
    });
    
    //foul count
    
    // team a foul count 
    var Afcnt = 0;
    //team b foul count
    var Bfcnt = 0;
    
    $('#id_A_fplus').click(function(){
      
      if(Afcnt < 5){
        
        ++Afcnt;
        console.log('Afcnt' + '=' + Afcnt);
        
      } else if (Afcnt >= 5){
        
        Afcnt = 5;
        
      }
      
      
      if(Afcnt == 1){
        $('#Af1').css('visibility','visible');
        //debug
        // console.log('A1');
        
      } else if (Afcnt == 2) {
        
        $('#Af2').css('visibility','visible');
        //debug
        // console.log('A2');
        
      } else if (Afcnt == 3) {
        
        $('#Af3').css('visibility','visible');
        //debug
        // console.log('A3');
        
      } else if (Afcnt == 4) {
        
        $('#Af4').css('visibility','visible');
        //debug
        // console.log('A4');
        
      } else if (Afcnt == 5) {
        
        $('#Af5').css('visibility','visible');
        //debug
        // console.log('A5');
        
        // $('#id_A_fplus').prop('disabled','true');
        
      } 
    
      
    });
    
    //team a foul minuse
    $('#id_A_fminuse').click(function(){
      
      if(Afcnt > 0){
        
        --Afcnt;
        console.log('Afcnt' + '=' + Afcnt);
        
      } else if (Afcnt <= 0) {
        
        Afcnt = 0;
        
      }
      
      if(Afcnt == 4){
        
        $('#Af5').css('visibility','');
        
      } else if (Afcnt == 3) {
        
        $('#Af4').css('visibility','');
        
      } else if (Afcnt == 2) {
        
        $('#Af3').css('visibility','');
        
      } else if (Afcnt == 1) {
        
        $('#Af2').css('visibility','');
        
      } else if (Afcnt == 0) {
        
        $('#Af1').css('visibility','');
        
        Afcnt = 0;
        
      }
      
    });
    
    //team b foul plus
    $('#id_B_fplus').click(function(){
      
      if(Bfcnt < 5){
        
        ++Bfcnt
        console.log('Bfcnt'+"="+Bfcnt);
        
      } else if (Bfcnt >= 5) {
        
        Bfcnt = 5;
        
      }
      
      
      
      if(Bfcnt == 1){
        
        $('#Bf1').css('visibility','visible');
      
      } else if (Bfcnt ==2) {
        
        $('#Bf2').css('visibility','visible');
        
      } else if (Bfcnt == 3) {
        
        $('#Bf3').css('visibility','visible');
        
      } else if (Bfcnt == 4) {
        
        $('#Bf4').css('visibility','visible');
        
      } else if (Bfcnt ==5) {
        
        $('#Bf5').css('visibility','visible');
        
      }
      
      
    });
    
    //team b foul minuse
    $('#id_B_fminuse').click(function(){
      
      if(Bfcnt > 0){
        
        --Bfcnt;
        console.log('Bfcnt' + '=' + Bfcnt);
        
      } else if (Bfcnt <= 0) {
        
        Bfcnt = 0;
        
      }
      
      if(Bfcnt == 4){
        
        $('#Bf5').css('visibility','');
        
      } else if (Bfcnt == 3) {
        
        $('#Bf4').css('visibility','');
        
      } else if (Bfcnt == 2) {
        
        $('#Bf3').css('visibility','');
        
      } else if (Bfcnt == 1) {
        
        $('#Bf2').css('visibility','');
        
      } else if (Bfcnt == 0) {
        
        $('#Bf1').css('visibility','');
        
        Bfcnt = 0;
        
      }
      
    });
    
    
    //------------------------------------------
    
    //キッチンタイマー例
    //http://www.shurey.com/js/craft/ktimer/index.html
    
    //related timer code end here 
    //------------------------------------------
  });
  //------------------------------------------

  //クズコード
  //------------------------------------------
  //オブジェクト指向勉強
  // function ScoreBoard(count_type) {
  //   this.countUM = function(count) {
  //     if (count_type == "plus") {
  //       var point = $('#id_a_point').text();
  //       point = parseInt(point);
  //       point = !isNaN(point) ? point : 0;
  //       point = point + count;
  //       $('#id_a_point').html(point);
  //       return point;
  //     }
  //   }
  // }
  
  // var ScoreBoard = function(count_type){
  // 
  //   var obj = {};
  // 
  //   obj.count = 0;
  // 
  //   obj.countUM = function(points){
  // 
  //     if(obj.count_type == "plus")
  //     {
  // 
  //       obj.count += points;
  //       $('#id_a_point').html(obj.count);
  // 
  //     } 
  //     else if (obj.count_type == "minus") 
  //     {
  // 
  //       obj.count -= points;
  //       $('#id_minus_1p').html(obj.count);
  // 
  //     }
  // 
  //     return obj;
  //   }
  // 
  // }
  // 
  // // var score_plus = new ScoreBoard("plus");
  // var score_plus = ScoreBoard("plus");
  // // var score_minus = scoreBoard("minus");
  // 
  // 
  // 
  // $(document).ready(function(){
  // 
  //   score_plus.obj.countUM(0);
  //   // score_plus.countUM(0);
  //   // score_minus.countUM(0);
  // 
  // 
  //   $('#id_plus_1p').click(function(){
  //     var points = $(this).attr("data_points");
  //     points = parseInt(points);
  //     points = !isNaN(points) ? points : 0;
  // 
  //     score_plus.obj.countUM(points);
  //     // $('#id_a_point').html(++count_A_p1p);
  //   });
  // 
  //   $('#id_minus_1p').click(function(){
  //     $('#id_a_point').html(--count_A_p1p);
  //   });
  
      
  // });
  //------------------------------------------
</script>